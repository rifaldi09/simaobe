<?php

namespace App\Http\Controllers;

use App\Models\Analisis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AnalisisController extends Controller
{
    public function create(Request $request, $id)
    {
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
                    "kodesubcpmk" => "SubCPMK " . $minggu, // Kode SubCPMK (di-generate)
                    "ketsubcpmk" => $item["subcpmk"], // Keterangan SubCPMK
                    "CPMKID" => $item["cpmk"], // CPMKID langsung dari data asli
                ];
            }
        }

        $response = Analisis::create($transformedData);

        // dd($transformedData);

        if ($response==="OK") {
            return response()->json(['message' => 'Data berhasil disimpan'], 200);  
        } else {
            return response()->json(['message' => 'Gagal menyimpan data']);
        }
    }
}