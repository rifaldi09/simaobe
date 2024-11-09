<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('landing_page.index', [
            'title' => 'Landing Page'
        ]);
    }

    // mengarah ke halaman landing_page/analisis.blade.php
    public function analisis(){
        return view('landing_page.analisis', [
            'title' => 'Analisis Page'
        ]);
    }

    // menampilkan halaman utama analisis pembelajaran
    public function analisis_main_page()
    {
        return view('landing_page.analisis-mata-kuliah', [
            'title' => 'Analisis Pembelajaran Page'
        ]);
    }

    // menampilkan halaman utama basis evaluasi pembelajaran
    public function basis_evaluasi_main_page()
    {
        return view('landing_page.basis-evaluasi-mata-kuliah', [
            'title' => 'Basis Evaluasi Pembelajaran Page'
        ]);
    
    }
    
    // menampilkan halaman utama rencana pembelajaran semester
    public function rencana_pembelajaran_main_page()
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
}
