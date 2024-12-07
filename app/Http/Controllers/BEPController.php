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
                'subcpmk01' => 'nullable|numeric',
                'subcpmk02' => 'nullable|numeric',
                'subcpmk03' => 'nullable|numeric',
                'boot' => 'required|numeric'
            ]);

            $kp = BEP::create([
                'komponen_penilaian' => $request->komponen_penilaian,
                'subcpmk01' => 'nullable|numeric',
                'subcpmk02' => 'nullable|numeric',
                'subcpmk03' => 'nullable|numeric',
                'boot' => 'required|numeric'
            ]);
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
