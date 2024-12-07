<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BEP;

class BEPController extends Controller
{
    public function store(Request $request){
        try {
            $validated = $request->validate([
                'komponen_penilaian' => 'required|string',
                'subcpmk01' => 'numeric',
                'subcpmk02' => 'numeric',
                'subcpmk03' => 'numeric',
                'boot' => 'required|numeric'
            ]);

            $kp = BEP::create([
                'komponen_penilaian' => $request->komponen_penilaian,
                'subcpmk01' => $request->subcpmk01,
                'subcpmk02' => $request->subcpmk02,
                'subcpmk03' => $request->subcpmk03,
                'boot' => $request->bobot
            ]);

            return response()->json([
                'status' => true,
                'message' => 'Data berhasil disimpan',
                'data' => $kp
            ], 201);

        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Gagal menyimpan data: ' . $e->getMessage()
            ], 500);
        }
    }
}
