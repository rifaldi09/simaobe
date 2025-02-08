<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BEP;

class BEPController extends Controller
{
    public function basis_evaluasi_post_data(Request $request, $IDSmtMkKlh){
        try {
            $data = $request->input('BobotPenilaian');
            $DataPostBEP = []; // Array untuk menampung data dari inputan


            foreach ($data as $cpmk => $nilai) {
                foreach ($nilai as $penilaian => $nilaiItem) {
                    if (!empty($nilaiItem)) { // Hanya simpan yang tidak kosong
                        $DataPostBEP[] = [
                            "IDSession" => session('sessionID'),
                            "IDSmtMtKlh" => $IDSmtMkKlh,
                            "IDKodeCPMK" => $penilaian,
                            "IDKomponenPenilaian" => $cpmk,
                            "BobotPenilaian" => $nilaiItem
                        ];
                    }
                }
            }

            //* cuman menampilkan hasil dari inputan data nya
            dd($DataPostBEP);
            
            //! Ini untuk mengirim data ke API
            // $response = BEP::postBEP($DataPostBEP);
            // if ($response) {
            //     return back();
            // } else {
            //     return back();
            // }

        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Gagal menyimpan data: ' . $e->getMessage()
            ], 500);
        }
    }
}
