<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use App\Models\Tanggapan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Storage;

class PengaduanController extends Controller
{
    protected $model;
    protected $view;

    public function __construct(Pengaduan $Pengaduan){
        $this->model    = $Pengaduan;
        $this->view     = "pages.admin.pengaduan.";
        $this->route     = "pengaduans";
        $this->titlePage     = "Pengaduan Management";

        View::share('route', $this->route);
        View::share('titlePage', $this->titlePage);
        
    }


    public function index()
    {
        $datas = $this->model->get();
        foreach ($datas as  $data) {
            $data->foto = asset('storage/foto-pengaduan').'/'.$data->foto;
        }
        $titleCard = 'Pengaduan list';
        return view($this->view.'index',compact('datas', 'titleCard'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $titleCard = 'Pengaduan Create';
        return view($this->view.'create', compact('titleCard'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nik' => 'required',
            'isi' => 'required',
            'foto' => 'required',
        ]);
        $payload = $request->all();
        $payload['tgl_pengaduan'] = now();
        $payload['status'] = 0;

        if($request->file('foto')) {
            $filename = $request->file('foto')->getClientOriginalName();
            Storage::putFileAs(
                'public/foto-pengaduan',
                $request->file('foto'),
                $filename
            );
            $payload['foto'] = $filename;
        }

        $this->model->create($payload);

        return to_route($this->route.'.index');
    }


    public function show(Pengaduan $Pengaduan)
    {
        //
    }


    public function edit(Pengaduan $Pengaduan)
    {
        $data = $Pengaduan;
        $tanggapan = Tanggapan::where('pengaduan_id',$Pengaduan->id)->first();
        $titleCard = 'Pengaduan Edit';
        return view($this->view.'edit',compact('data','tanggapan','titleCard'));
    }


    public function update(Request $request, Pengaduan $Pengaduan)
    {
        $request->validate([
            'nik' => 'required',
            'isi' => 'required',
            'foto' => 'required',
        ]);
        
        if($request->file('foto')) {
            $filename = $request->file('foto')->getClientOriginalName();
            Storage::putFileAs(
                'public/foto-pengaduan',
                $request->file('foto'),
                $filename
            );
            $payload['foto'] = $filename;
        }
        $Pengaduan->update($payload);

        return to_route($this->route.'.index');
    }


    public function destroy(Pengaduan $Pengaduan)
    {
        $Pengaduan->delete();

        return to_route($this->route.'.index');
    }
}
