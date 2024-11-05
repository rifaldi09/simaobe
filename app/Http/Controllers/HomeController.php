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

    // menampilkan halaman mata kuliah
    public function mata_kuliah()
    {
        return view('landing_page.matkul', [
            'title' => 'Mata Kuliah Page'
        ]);
    }
}
