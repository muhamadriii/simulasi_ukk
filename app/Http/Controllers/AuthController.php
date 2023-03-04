<?php
namespace App\Http\Controllers;
// use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    protected $model;
    protected $view;

    public function __construct(User $user){
        $this->model    = $user;
        $this->view     = "pages.admin";
    }
    
    public function register(){
        return  view($this->view.'.register');
    }
    
    public function postRegister(Request $request){
        
        $payload = $request->validate([
            'username' => 'required',
            'nip' => 'required|unique:users,teacher_id',
            'password' => 'required',
        ]);
        $payload['teacher_id'] = $payload['nip'];
        $payload['role'] = 'guru';
        $payload['password'] = Hash::make($request->password);
        $this->model->create($payload);

        return to_route('login');
    }
    
    public function index()
    {
        return  view($this->view.'.login');
    }

    public function login(Request $request)
    {
        $input = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        Auth::guard('petugas')->logout();
        Auth::guard('web')->logout();
        Auth::guard('masyarakat')->logout();

        if (Auth::attempt([
        'username' => $request->username,
        'password' => $request->password,])) 
        {
            Auth::guard('masyarakat')->logout();
            return to_route('users.index');
        }

        else if(Auth::guard('petugas')->attempt([
        'username' => $request->username,
        'password' => $request->password,]))
        {
            Auth::guard('masyarakat')->logout();
            return redirect('/pengaduans');
        }

        else if(Auth::guard('masyarakat')->attempt([
        'username' => $request->username,
        'password' => $request->password,]))
        {
            Auth::guard('petugas')->logout();
            Auth::guard('web')->logout();
            return redirect('/');
        }

        return redirect()->back();

    }


    public function logout(Request $request)
    {
        if (Auth::check()) {
            Auth::logout();
            Auth::guard('masyarakat')->logout();
        }elseif (Auth::guard('petugas')->check()) {
            Auth::guard('petugas')->logout();
        }elseif (Auth::guard('masyarakat')->check()) {
            Auth::guard('masyarakat')->logout();
        }

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login');
    }



}
