<?php

namespace App\Http\Controllers;

use App\Models\Petugas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Hash;



class PetugasController extends Controller
{
    protected $model;
    protected $view;

    public function __construct(Petugas $Petugas){
        $this->model    = $Petugas;
        $this->view     = "pages.admin.petugas.";
        $this->route     = "petugas";
        $this->titlePage     = "Petugas Management";

        View::share('route', $this->route);
        View::share('titlePage', $this->titlePage);
        
    }


    public function index()
    {
        $datas = $this->model->get();
        $titleCard = 'Petugas list';
        return view($this->view.'index',compact('datas', 'titleCard'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $titleCard = 'Petugas Create';
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
        // $payload = $request->validate([
        //     'major_id' => 'required',
        //     'nis' => 'required|unique:Petugass,nis',
        //     'name' => 'required',
        //     'gender' => 'required',
        // ]);
        $payload = $request->all();
        $payload['password'] = Hash::make($request->passowrd);
        $this->model->create($payload);

        return to_route($this->route.'.index');
    }


    public function show(Petugas $Petugas)
    {
        //
    }


    public function edit($id)
    {
        $data = $this->model->find($id);
        $titleCard = 'Petugas Edit';
        return view($this->view.'edit',compact('data','titleCard'));
    }


    public function update(Request $request, $id)
    {
        // $payload = $request->validate([
        //     'major_id' => 'required',
        //     'nis' => 'required|unique:Petugass,nis,'.$Petugas->id,
        //     'name' => 'required',
        //     'gender' => 'required',
        // ]);
        $petugas = $this->model->find($id);
        $payload = $request->all();
        $petugas->update($payload);

        return to_route($this->route.'.index');
    }


    public function destroy(Petugas $Petugas)
    {
        $Petugas->delete();

        return to_route($this->route.'.index');
    }
}
