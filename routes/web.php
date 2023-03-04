<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\MasyarakatController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\TanggapanController;

use App\Http\Controllers\Masyarakat\auth\LoginController as MasyarakatLogin;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('login', [Authcontroller::class, 'index'])->name('login');
Route::post('login', [Authcontroller::class, 'login'])->name('login.post');
Route::get('register', [Authcontroller::class, 'register'])->name('register');
Route::post('register', [Authcontroller::class, 'postRegister'])->name('register.post');
Route::get('logout', [Authcontroller::class, 'logout'])->name('logout');

Route::middleware(['auth:petugas,users'])->group(function () {

});

Route::middleware(['auth:petugas,web'])->group(function () {
    Route::get('dashboard', [HomeController::class , 'index'])->name('dashboard');
    Route::resource('pengaduans', PengaduanController::class);
    Route::post('tanggapans/{id}', [TanggapanController::class, 'store'])->name('tanggapans.store');
});

Route::middleware(['auth'])->group(function () {
    Route::resource('users', UserController::class);
    Route::resource('masyarakats', MasyarakatController::class);
    Route::resource('petugas', PetugasController::class);
});

route::get('/', function(){
    return view('pages.masyarakat.dashboard');
});
route::get('/pengaduan', function(){
    return view('pages.masyarakat.pengaduan');
});


Route::prefix('masyarakat')->name('masyarakat.')->group(function () {
});

