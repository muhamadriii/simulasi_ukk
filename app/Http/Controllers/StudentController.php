<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Major;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;


class StudentController extends Controller
{
    protected $model;
    protected $view;

    public function __construct(Student $student){
        $this->model    = $student;
        $this->majors    = Major::all();
        $this->view     = "pages.admin.student.";
        $this->route     = "students";
        $this->titlePage     = "Student Management";

        View::share('majors', $this->majors);
        View::share('route', $this->route);
        View::share('titlePage', $this->titlePage);
        
    }


    public function index()
    {
        $datas = $this->model->with('major')->get();
        $titleCard = 'Student list';
        return view($this->view.'index',compact('datas', 'titleCard'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $titleCard = 'Student Create';
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
        $payload = $request->validate([
            'major_id' => 'required',
            'nis' => 'required|unique:students,nis',
            'name' => 'required',
            'gender' => 'required',
        ]);
        $this->model->create($payload);

        return to_route($this->route.'.index');
    }


    public function show(Student $student)
    {
        //
    }


    public function edit(Student $student)
    {
        $data = $student->load('major');
        $titleCard = 'Student Edit';
        return view($this->view.'edit',compact('data','titleCard'));
    }


    public function update(Request $request, Student $student)
    {
        $payload = $request->validate([
            'major_id' => 'required',
            'nis' => 'required|unique:students,nis,'.$student->id,
            'name' => 'required',
            'gender' => 'required',
        ]);
        $student->update($payload);

        return to_route($this->route.'.index');
    }


    public function destroy(Student $student)
    {
        $student->delete();

        return to_route($this->route.'.index');
    }
}
