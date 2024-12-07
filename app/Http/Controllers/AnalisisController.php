<?php

namespace App\Http\Controllers;

use App\Models\Analisis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AnalisisController extends Controller
{
    public function create(Request $request)
    {
        $request->validate([
            'sessionID' => 'required',
            'IDSmtMtklh' => 'required',
            'minggu' => 'required|array',
            'minggu.*.minggu' => 'required',
            'minggu.*.materi' => 'required',
            'minggu.*.kodesubcpmk' => 'required',
            'minggu.*.ketsubcpmk' => 'required',
            'minggu.*.CPMKID' => 'required|array',
        ]);

        $data = $request->all();

        foreach()

        if ($response->successful()) {
            return response()->json(['message' => 'Data berhasil disimpan'], 200);
        } else {
            return response()->json(['message' => 'Gagal menyimpan data'], $response->status());
        }
    }
}