<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;

class StrukturMatkul extends Model
{
    // semua yang ada pada struktur matakuliah sudah di pindahkan ke rps

    use HasFactory;

    // Function untuk mengambil data dari API berupa data bahan kajian
    static function bahanKajian($sessionId)
    {
        $id = ['IDSession'=>$sessionId];
        $response = Http::post(env('API_URL') . "bok", $id);
        return $response->json();
    }

}
