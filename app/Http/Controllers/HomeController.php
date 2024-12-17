<?php

namespace App\Http\Controllers;

use App\Models\Analisis;
use App\Models\Login;
use App\Models\RPS;
use App\Models\StrukturMatkul;
use Illuminate\Http\Request;

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

    public function getCpmk()
    {
        $data = Analisis::getCpmk(session('sessionID'));
        return $data;
    }

    // mengarah ke halaman landing_page/analisis.blade.php
    public function analisis($id){
        $session = [
            "sessionID" => session('sessionID'),
            'IDSmtMtklh' => $id
        ];

        // Mengambil data dari model Analisis dengan mengirim sessionID
        $cpmk = Analisis::getCpmk(session('sessionID'));
        $cpl = Analisis::getCpl(session('sessionID'));
        $analisis = Analisis::get($session);
        
        // Minggu
        $minggu = [ 1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16 ];

        $result = [];

        // Mengambil data minggu dari aap/get
        foreach ($analisis as $ana) {
            $result[] = $ana['Minggu'];
        }

        $dataAnalisis = $analisis;
        
        // Mengcompare data minggu dengan data minggu yang dari aap/get
        $hasil = array_values(array_diff($minggu,$result));
        $idMatkul = $id;
        // dd($dataAnalisis);
        return view('landing_page.analisis', [
            'title' => 'Halaman Analisis',
        ], compact('idMatkul','minggu','dataAnalisis','cpl'));
    }

    // menampilkan halaman utama analisis pembelajaran
    public function analisis_main_page($idMatkul)
    {
        $session = [
            "sessionID" => session('sessionID'),
            'IDSmtMtklh' => $idMatkul
        ];

        $result = [];
        // Mengambil data Analisis dan CPMK
        $dataAnalisis = Analisis::get($session);
        $dataCPMK = Analisis::getCpmk($session['sessionID']);

        // Mengelompokkan data CPMK sesuai dengan CPLID
        $dataCPFilter = [];
        foreach ($dataCPMK as $dataCP) {
            $dataCPFilter[$dataCP['CPLID']][] = $dataCP['KetCPMK'];
        }

        // Menggabungkan data Analaisis dengen data CPMK yang sudah di kelompokkan
        foreach ($dataAnalisis as $dataAna) {
            $CplId = $dataAna['CPLID'];

            $result[] = [
                'CPLID' => $CplId,
                'MataKuliah' => $dataAna['MataKuliah'],
                'Minggu' => $dataAna['Minggu'],
                'MateriAjar' => $dataAna['MateriAjar'],
                'CPMK' => $dataCPFilter[$CplId] ?? [],
            ];
        }

        $matkul_id = $idMatkul;

        // Mengembalikan data yang sudah di gabungkan ke dalam view
        return view('landing_page.analisis-mata-kuliah', [
            'title' => 'Analisis Pembelajaran Page',
        ], compact('result', 'matkul_id', 'dataAnalisis'));
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
        $response = RPS::bahanKajian(session('sessionID'));
        return view('landing_page.basis evaluasi.rps', [
            'title' => 'RPS'
        ],compact('response'));
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
        // semua yang ada pada struktur matakuliah sudah di pindahkan ke rps

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
        ], compact('data'));
    }
}