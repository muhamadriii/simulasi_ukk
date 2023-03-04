<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;



class UserController extends Controller
{
    protected $model;
    protected $view;

    public function __construct(User $user){
        $this->model    = $user;
        $this->view     = "pages.admin.user.";
        $this->route     = "users";
        $this->titlePage     = "user Management";

        View::share('route', $this->route);
        View::share('titlePage', $this->titlePage);
        
    }


    public function index()
    {
        $datas = $this->model->get();
        $titleCard = 'user list';
        return view($this->view.'index',compact('datas', 'titleCard'));
    }


    public function create()
    {
        $titleCard = 'user Create';
        return view($this->view.'create', compact('titleCard'));
    }


    public function store(Request $request)
    {
        $payload = $request->validate([
            'username' => 'required|unique:users,username',
            'password' => 'required|min:5',
        ],[
            'username' => 'username sudah terdaftar',
            'teacher_id' => 'guru ini sudah memiliki akun',
        ]);

        $payload['password'] = Hash::make($request->password);
        $this->model->create($payload);

        return to_route($this->route.'.index');
    }


    public function show(User $user)
    {
        //
    }


    public function edit(User $user)
    {
        $data = $user;
        $titleCard = 'user Edit';
        return view($this->view.'edit',compact('data','titleCard'));
    }


    public function update(Request $request, User $user)
    {
        $payload = $request->validate([
            'username' => 'required|unique:users,username,'.$user->id,
            'password' => 'required|min:5',
        ],[
            'username' => 'username sudah terdaftar',
        ]);
        $payload['password'] = Hash::make($request->password);
        $user->update($payload);
        
        return to_route($this->route.'.index');
    }


    public function destroy(User $user)
    {
        $user->delete();

        return to_route($this->route.'.index');
    }
}
