<?php

namespace App\Http\Controllers;

use App\Models\Tanggapan;
use App\Models\Pengaduan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;


class TanggapanController extends Controller
{
    protected $model;
    protected $view;

    public function __construct(Tanggapan $Tanggapan){
        $this->model    = $Tanggapan;
        $this->view     = "pages.admin.tanggapan.";
        $this->route     = "tanggapans";
        $this->titlePage     = "Tanggapan Management";

        View::share('route', $this->route);
        View::share('titlePage', $this->titlePage);
    }

    public function store(Request $request,$id)
    {
        $pengaduan = Pengaduan::find($id);
        $data = $this->model->where('pengaduan_id', $id)->first();
        $payload = $request->all();
        $payload['tgl_tanggapan'] = now();
        $payload['id_petugas'] = auth()->user()->id;
        $payload['pengaduan_id'] = $pengaduan->id;
        unset($payload['status']);

        if ($data) {
            $data->update($payload);
        }else {
            $this->model->create($payload);
        }

        $pengaduan->update([
            'status' => $request->status,
        ]);
        
        return to_route('pengaduans.index');
    }

    public function show(Tanggapan $Tanggapan)
    {
        //
    }


    public function edit(Tanggapan $Tanggapan)
    {
        $data = $Tanggapan->load('major');
        $titleCard = 'Tanggapan Edit';
        return view($this->view.'edit',compact('data','titleCard'));
    }


    public function update(Request $request, Tanggapan $Tanggapan)
    {
        // $payload = $request->validate([
        //     'major_id' => 'required',
        //     'nis' => 'required|unique:Tanggapans,nis,'.$Tanggapan->id,
        //     'name' => 'required',
        //     'gender' => 'required',
        // ]);
        dd($request->all());
        $Tanggapan->update($payload);

        return to_route($this->route.'.index');
    }


    public function destroy(Tanggapan $Tanggapan)
    {
        $Tanggapan->delete();

        return to_route($this->route.'.index');
    }
}
