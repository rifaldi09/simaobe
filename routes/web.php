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
Route::get('/analisis-page', [HomeController::class, 'analisis'])->name('analisis-page');

// Route untuk mata kuliah
Route::get('/analisis-matkul-page', [HomeController::class, 'analisis_main_page'])->name('analisis-main-page');
Route::get('/basis-evaluasi-matkul-page', [HomeController::class, 'basis_evaluasi_main_page'])->name('basis-evaluasi-main-page');
Route::get('/rencana-pembelajaran-matkul-page', [HomeController::class, 'rencana_pembelajaran_main_page'])->name('rencana-pembelajaran-main-page');

// route penilaian
Route::get('/penilaian-sub-cpmk-page', [HomeController::class, 'penilaian_subcpmk_page'])->name('penilaian_subcpmk');
Route::get('/penilaian1', [HomeController::class, 'penilaian1'])->name('penilaian01');
Route::get('/penilaian2', [HomeController::class, 'penilaian2'])->name('penilaian02');
Route::get('/rps', [HomeController::class, 'rps'])->name('rps');
Route::get('/komponen-penilaian', [HomeController::class, 'komponen_penilaian'])->name('komponenPenilaian');