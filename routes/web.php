<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;

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

//ini default, kalau mau di hapus silahkan
Route::get('/', function () {
    return view('welcome');
})->name('home');

//route untul login
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/proses-login', [LoginController::class, 'prosesLogin'])->name('proses-login');

//route untuk register 
//jika ingin register, tambahkan aja di url '127.0.0.1:8000/regis'
Route::get('/regis', [LoginController::class, 'register'])->name('register');
Route::post('/proses-register', [LoginController::class, 'prosesRegister'])->name('proses-register');

//belum ada proteksi jadi bisa di akses melalui url
Route::get('/landing-page', [HomeController::class, 'index'])->name('landing-page');
