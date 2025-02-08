<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BEP;

class BEPController extends Controller
{
    public function basis_evaluasi_post_data(Request $request){
        try {

            $data = $request->input('BobotPenilaian');
            $formattedData = []; // Array untuk menampung hasil yang diinginkan

            foreach ($data as $cpmk => $nilai) {
                foreach ($nilai as $penilaian => $nilaiItem) {
                    if (!empty($nilaiItem)) { // Hanya simpan yang tidak kosong
                        $formattedData[] = [
                            "Penilaian" => $penilaian,
                            "CPMK" => $cpmk,
                            "Nilai" => $nilaiItem
                        ];
                    }
                }
            }
            dd($formattedData);

        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Gagal menyimpan data: ' . $e->getMessage()
            ], 500);
        }
    }
}
