<?php

namespace App\Http\Controllers;

use App\Models\Masyarakat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;


class MasyarakatController extends Controller
{
    protected $model;
    protected $view;

    public function __construct(Masyarakat $Masyarakat){
        $this->model    = $Masyarakat;
        $this->view     = "pages.admin.masyarakat.";
        $this->route     = "masyarakats";
        $this->titlePage     = "Masyarakat Management";

        View::share('route', $this->route);
        View::share('titlePage', $this->titlePage);
        
    }


    public function index()
    {
        $datas = $this->model->get();
        $titleCard = 'Masyarakat list';
        return view($this->view.'index',compact('datas', 'titleCard'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $titleCard = 'Masyarakat Create';
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
            'nik' => 'required|unique:Masyarakats,nik',
            'name' => 'required',
            'username' => 'required',
            'password' => 'required',
        ]);
        $payload = $request->all();
        $this->model->create($payload);

        return to_route($this->route.'.index');
    }


    public function show(Masyarakat $Masyarakat)
    {
        //
    }


    public function edit(Masyarakat $Masyarakat)
    {
        $data = $Masyarakat;
        $titleCard = 'Masyarakat Edit';
        return view($this->view.'edit',compact('data','titleCard'));
    }


    public function update(Request $request, Masyarakat $Masyarakat)
    {
        $request->validate([
            'nik' => 'required|unique:Masyarakats,nik,'.$Masyarakat->id,
            'name' => 'required',
            'username' => 'required',
            'password' => 'required',
        ]);
        dd($Masyarakat);
        $payload = $request->all();
        $Masyarakat->update($payload);

        return to_route($this->route.'.index');
    }


    public function destroy(Masyarakat $Masyarakat)
    {
        $Masyarakat->delete();

        return to_route($this->route.'.index');
    }
}
