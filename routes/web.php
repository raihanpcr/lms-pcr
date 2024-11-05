<?php

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
Auth::routes(['verify' => true]);

Route::get('email/verify', [RegisterController::class, 'sendVerfikasiEmail'])->middleware('auth')->name('verification.notice');

Route::get('email/verify/{id}/{hash}', [RegisterController::class, 'VerifikasiEmail'])->middleware(['auth', 'signed'])->name('verification.verify');

Route::get('/', [RegisterController::class, 'login'])->name('login');
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/store', [RegisterController::class, 'store'])->name('user.register');
Route::resource('matakuliahok', MataKuliahController::class);
Route::middleware(['auth','verified'])->group(function(){
      Route::resource('matakuliah', MataKuliahController::class);
});


