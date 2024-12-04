<?php

namespace App\Http\Controllers;

use App\Models\Analisis;
use App\Models\Login;
use App\Models\StrukturMatkul;
use Illuminate\Http\Request;
//use App\Model\Login;

class HomeController extends Controller
{
    public function index(){
        $session = [
            "sessionID" => session('sessionID')
        ];

        $data = Login::dataMatkul($session);
        $nama_dosen = Login::userInfo($session)['NamaLengkap'];

        return view('landing_page.index', [
            'title' => 'Landing Page'
        ], compact('data', 'nama_dosen'));
    }

    // mengarah ke halaman landing_page/analisis.blade.php
    public function analisis(){
        return view('landing_page.analisis', [
            'title' => 'Analisis Page'
        ]);
    }

    // menampilkan halaman utama analisis pembelajaran
    public function analisis_main_page($idMatkul)
    {
        $session = [
            "sessionID" => session('sessionID')
        ];

        $data = Analisis::getAnalisis($session);
        return view('landing_page.analisis-mata-kuliah', [
            'title' => 'Analisis Pembelajaran Page'
        ], compact('data'));
    }

    // menampilkan halaman utama basis evaluasi pembelajaran
    public function basis_evaluasi_main_page()
    {
        return view('landing_page.basis-evaluasi-mata-kuliah', [
            'title' => 'Basis Evaluasi Pembelajaran Page'
        ]);
    
    }
    
    // menampilkan halaman utama rencana pembelajaran semester
    public function rencana_pembelajaran_main_page($idMatkul)
    {
        return view('landing_page.rencana-pembelajaran-mata-kuliah', [
            'title' => 'Rencana Pembelajaran Semester Page'
        ]);
    }

    // menampilkan halaman penilaian sub cpmk
    public function penilaian_subcpmk_page()
    {
        return view('landing_page.basis evaluasi.penilaian-sub-cpmk', [
            'title' => 'Penilaian SUB CPMK'
        ]);
    }

    // penilai 1
    public function penilaian1()
    {
        return view('landing_page.basis evaluasi.penilaian1', [
            'title' => 'Penilaian 01'
        ]);
    }

    // penilaian 2
    public function penilaian2()
    {
        return view('landing_page.basis evaluasi.penilaian2', [
            'title' => 'Penilaian 02'
        ]);
    }

    // RPS
    public function rps()
    {
        return view('landing_page.basis evaluasi.rps', [
            'title' => 'RPS'
        ]);
    }

    // komponen penilaian
    public function komponen_penilaian()
    {
        return view('landing_page.basis evaluasi.kp', [
            'title' => 'Komponen Penilaian'
        ]);
    }

    // struktur mata kuliah
    public function struktur_mata_kuliah($id)
    {
        // Mengamil data dari model StrukturMatkul dengan mengirim sessionID
        $response = StrukturMatkul::bahanKajian(session('sessionID'));

        return view('landing_page.struktur-mata-kuliah', [
            'title' => 'Struktur Mata Kuliah'
        ],compact('response'));
    }

    // struktur mata kuliah
    public function profil()
    {
        $session = [
            "sessionID" => session('sessionID')
        ];

        $data = Login::userInfo($session);
        return view('profil', [
            'title' => 'My Profil'
        ], compact(""));
    }
}