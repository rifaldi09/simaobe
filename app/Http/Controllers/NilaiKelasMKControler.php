<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mpdf\Mpdf;
use App\Models\KelasNilaiMKDosen;

class NilaiKelasMKControler extends Controller
{
    public function daftarKelasMKDosen()
    {
        $session = [
            "IDSession" => session('sessionID')
        ];

        $data = KelasNilaiMKDosen::getDaftarKelasDosen($session);
        return view('daftarKelasDosen', [
            'title' => 'Daftar Kelas Dosen'
        ], compact('data'));
    }

    public function tableNilaiMK($idCourse)
    {
        $session = [
            "IDSession" => session('sessionID'),
            "IDCourseClass" => $idCourse
        ];

        $data = KelasNilaiMKDosen::getNilaiMK($session);
        $dataUnduh = KelasNilaiMKDosen::unduhFileNilaiMK($session);

        //! I dont know WTF is this, but it works (maybe?)
        //* dibuat agar data CPMK lebih dinamis yang dimana jika 1 mahasiswa terdapat lebih banyak CPMk dari yang lain (kira-kira seperti itu)
        $dataP = [];

        // header khusus untuk field yang dinamis
        $specialTableHeader = [];

        $dataWithMaxKeys = array_filter($data, fn($item) => count($item) === max(array_map('count', $data)));
        $dataWithMaxKeys = array_values($dataWithMaxKeys);
        foreach ($dataWithMaxKeys[0] as $key => $value) {
            if(!str_contains($key, '_') && !in_array($key, ["NIM", "Mahasiswa", "Grade"])) {
                $specialTableHeader[] = $key;
            }

            if (strpos($key, "CPMK") !== false) {
                $baseKey = explode('_', $key)[0];
                $cpmkKey = explode('_', $key)[1];
                $dataP[$baseKey][] = $cpmkKey;
            }
        }

        return view('nilaiKelasMKS', [
            'title' => 'Nilai Kelas Matkul'
        ], compact('data', 'dataP', 'idCourse', 'specialTableHeader'));
    }

    function unduhNilaiMK($idCourse)
    {
        $session = [
            "IDSession" => session('sessionID'),
            "IDCourseClass" => $idCourse
        ];

        $dataUnduh = KelasNilaiMKDosen::unduhFileNilaiMK($session);

        return response($dataUnduh)->header('Content-Type', 'application/xlsx')->header('Content-Disposition', 'attachment; filename="Daftar Nilai Peserta Kelas Matkul Semester.xlsx"');
    }
    function printNilaiMK($idCourse)
    {
        $session = [
            "IDSession" => session('sessionID'),
            "IDCourseClass" => $idCourse
        ];

        $data = KelasNilaiMKDosen::getNilaiMK($session);
        $dataUnduh = KelasNilaiMKDosen::unduhFileNilaiMK($session);

        //! I dont know WTF is this, but it works (maybe?)
        //* dibuat agar data CPMK lebih dinamis yang dimana jika 1 mahasiswa terdapat lebih banyak CPMk dari yang lain (kira-kira seperti itu)
        $dataP = [];
        $dataWithMaxKeys = array_filter($data, fn($item) => count($item) === max(array_map('count', $data)));
        $dataWithMaxKeys = array_values($dataWithMaxKeys);
        foreach ($dataWithMaxKeys[0] as $key => $value) {
            if (strpos($key, "CPMK") !== false) {
                $baseKey = explode('_', $key)[0];
                $cpmkKey = explode('_', $key)[1];
                $dataP[$baseKey][] = $cpmkKey;
            }
        }
        $html = view('pdf-nilaiKelasMKS', compact('data', 'dataP'))->render();

        $mpdf = new Mpdf([
            'mode' => 'utf-8',
            'format' => 'A4',
            'orientation' => 'landscape',
            'margin_top' => 60,
            'margin_header' => 20,
        ]);

        $mpdf->SetHTMLHeader('<div class="kop-surat">
        <div class="header-container">
            <div class="header-text">
                <h3 style="margin:0;text-align:center">DAFTAR NILAI HASIL CAPAIAN PEMBELAJARAN BERBASIS OBE</h3>
                    <table style="width:100%;margin-top:10px">
                    <tr>
                        <td>
                            <img src="' . public_path('img/umrahLogo.svg') . '" class="kop-img">
                        </td>
                        <td style="width:60%">
                            Kode Mata Kuliah : <strong>INFA41202</strong><br>
                            Nama Mata Kuliah : <strong>Penambangan Data</strong><br>
                            Dosen Pengampu : <strong>Tekad Matualatan</strong><br>
                            Program Studi : <strong>S1 - Teknik Informatika</strong>
                        </td>
                        <td>
                            Hari/Jam : <strong>Senin/15.30</strong><br>
                            Ruang : <strong>R6 FTTK</strong><br>
                            SKS : <strong>3</strong><br>
                            Semester : <strong>Gasal 2024/2025</strong>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>');
        $mpdf->WriteHTML($html);
        $mpdf->Output('Daftar Nilai Matkul Mahasiswa.pdf', 'I');
    }
}
