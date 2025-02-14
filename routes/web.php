<?php

use App\Http\Controllers\BEPController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AnalisisController;
use App\Http\Controllers\RekapController;

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

Route::middleware("isGuest")->group(function() {
    //route untul login
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/proses-login', [LoginController::class, 'prosesLogin'])->name('proses-login');

    //route untuk register 
    //jika ingin register, tambahkan aja di url '127.0.0.1:8000/regis'
    Route::get('/regis', [LoginController::class, 'register'])->name('register');
    Route::post('/proses-register', [LoginController::class, 'prosesRegister'])->name('proses-register');
});

Route::middleware("isLogin")->group(function() {
    Route::get('/my-profil', [HomeController::class, 'profil'])->name('profil');
    Route::get('/get-cpmk', [HomeController::class, 'getCpmk'])->name('getCpmk');
    
    //belum ada proteksi jadi bisa di akses melalui url
    Route::get('/landing-page', [HomeController::class, 'index'])->name('landing-page');
    Route::get('/analisis-page/{id}', [HomeController::class, 'analisis'])->name('analisis-page');
    
    // Route untuk mata kuliah
    Route::get('/analisis-matkul-page/{id}/{NamaMtKlh}', [HomeController::class, 'analisis_main_page'])->name('analisis-main-page');
    Route::get('/basis-evaluasi-matkul-page/{id}/{NamaMtKlh}', [HomeController::class, 'basis_evaluasi_main_page'])->name('basis-evaluasi-main-page');
    Route::post('/basis-evaluasi-post-data/{id}', [BEPController::class, 'basis_evaluasi_post_data'])->name('basis-evaluasi-post-data');
    Route::get('/rencana-pembelajaran-matkul-page/{id}/{NamaMtKlh}', [HomeController::class, 'rencana_pembelajaran_main_page'])->name('rencana-pembelajaran-main-page');
    
    // route penilaian
    Route::get('/penilaian-sub-cpmk-page', [HomeController::class, 'penilaian_subcpmk_page'])->name('penilaian_subcpmk');
    Route::get('/penilaian1', [HomeController::class, 'penilaian1'])->name('penilaian01');
    Route::get('/penilaian2', [HomeController::class, 'penilaian2'])->name('penilaian02');
    Route::get('/rps', [HomeController::class, 'rps'])->name('rps');
    Route::get('/komponen-penilaian', [HomeController::class, 'komponen_penilaian'])->name('komponenPenilaian');
    Route::get('/struktur-mata-kuliah/{id}', [HomeController::class, 'struktur_mata_kuliah'])->name('struktur-mata-kuliah');
    
    
    Route::post('/create-analisis/{id}', [AnalisisController::class, 'create'])->name('analisis.create');
    // route input
    Route::post('/create-kp', [BEPController::class, 'store'])->name('kp');
    // Route::post('/analisis', [AnalisisController::class, 'create'])->name('analisis.create');

    Route::get('/daftar-kelas-dosen', [HomeController::class, 'daftarKelasMKDosen'])->name('daftar-kelas-dosen');
    Route::get('/table-nilai-mk/{idCourse}', [HomeController::class, 'tableNilaiMK'])->name('table-nilai-mk');
    Route::get('/unduh-nilai_mk/{idCourse}', [HomeController::class, 'unduhNilaiMK'])->name('unduh-nilai-mk');

    // route untuk rekap capaian
    Route::get('/rekap-sc', [RekapController::class, 'rekapSC']);
    Route::get('/rekap-cs', [RekapController::class, 'rekapCS']);
    Route::get('/rekap-cc', [RekapController::class, 'rekapCC']);

});


// logout
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
