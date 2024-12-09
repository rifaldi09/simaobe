<?php

namespace App\Http\Controllers;

use App\Models\Analisis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AnalisisController extends Controller
{
    public function create(Request $request, $id)
    {
        // menambahkan validasi
        $validasi = [];

        // Loop untuk membuat aturan validasi berdasarkan jumlah input data analisis
        foreach ($request->input('analisis', []) as $key => $value) {
            $validasi["analisis.{$key}.minggu"] = 'required|array';
            $validasi["analisis.{$key}.materiperkuliahan"] = 'required|string';
            $validasi["analisis.{$key}.kscpmk"] = 'required|string';
            $validasi["analisis.{$key}.subcpmk"] = 'required|string';
            $validasi["analisis.{$key}.cplid"] = 'required';
            $validasi["analisis.{$key}.cpmk"] = 'required|array';
        }

        // pesan error nya
        $messages = [
            'required' => ':attribute harus diisi ya!',
            'array' => ':attribute harus dipilih minimal satu',
            'min' => ':attribute minimal :min karakter ya!',
            'analisis.0.minggu.required' => 'Minggu harus dipilih minimal satu',
            'analisis.0.materiperkuliahan.required' => 'Materi perkuliahan tidak boleh kosong',
            'analisis.0.kscpmk.required' => 'Kode Sub-CPMK harus diisi',
            'analisis.0.subcpmk.required' => 'Sub-CPMK harus diisi',
            'analisis.0.cplid.required' => 'CPL harus dipilih',
            'analisis.0.cpmk.required' => 'CPMK harus dipilih minimal satu'
        ];

        // kita jalanin validasinya boskuh
        $validatedData = $request->validate($validasi, $messages);

        // Jika validasi berhasil, lanjutkan eksekusi
        return response()->json([
            'status' => 'success',
            'message' => 'Data berhasil divalidasi',
            'data' => $validatedData
        ]);

        $data = $request->all();
        $analisis = $data['analisis'];

        $transformedData = [
            "sessionID" => session('sessionID'), // ID sesi
            "IDSmtMtklh" => $id, // ID semester mata kuliah
            "minggu" => [], // Array untuk data minggu
        ];
        
        // Proses transformasi
        foreach ($analisis as $item) {
            foreach ($item["minggu"] as $minggu) {
                $transformedData["minggu"][] = [
                    "minggu" => $minggu, // Nomor minggu
                    "materi" => $item["materiperkuliahan"], // Materi perkuliahan
                    "kodesubcpmk" => $item['kscpmk'], // Kode SubCPMK (di-generate)
                    "ketsubcpmk" => $item["subcpmk"], // Keterangan SubCPMK
                    "CPMKID" => $item["cpmk"], // CPMKID langsung dari data asli
                ];
            }
        }

        $response = Analisis::create($transformedData);
        // dd($transformedData);

        if ($response) {
            return response()->json([
                'status' => 'success',
                'redirect' => '/analisis-matkul-page',
                'message' => 'Horee Data berhasil disimpan!'
            ]);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Waduh, ada yang kurang tepat nih!'
            ]);
        }
    }
}