<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\MataKuliahController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware('guest')->group(function () {
      //register
      Route::get('/register', [RegisterController::class, 'index'])->name('register');
      Route::post('/store', [RegisterController::class, 'store'])->name('user.register');
      
      //login
      Route::get('/', [LoginController::class, 'index'])->name('login');
      Route::post('validatelogin', [LoginController::class, 'validateLogin'])->name('user.validate');
});

Route::resource('matakuliahok', MataKuliahController::class);
// Route::middleware(['auth','verified'])->group(function(){
Route::middleware('auth')->group(function(){
      Route::get('home', [DashboardController::class, 'index'])->name('dashboard');
      Route::resource('matakuliah', MataKuliahController::class);
      Route::resource('dosen', DosenController::class);
      Route::resource('mahasiswa', MahasiswaController::class);
      Route::get('logout', [LoginController::class, 'logout'])->name('logout');
});

Auth::routes(['verify' => true]);

Route::get('email/verify', [RegisterController::class, 'sendVerfikasiEmail'])->middleware('auth')->name('verification.notice');

Route::get('email/verify/{id}/{hash}', [RegisterController::class, 'VerifikasiEmail'])->middleware(['auth', 'signed'])->name('verification.verify');


