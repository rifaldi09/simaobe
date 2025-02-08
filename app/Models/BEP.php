<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;

class BEP extends Model
{
    use HasFactory;
    // Function untuk mengambil data dari API berupa data
    static function getBEP($session)
    {
        $response = Http::post(env('API_URL') . "asses/get", $session);
        return $response->json();
    }
    static function postBEP($data)
    {
        $response = Http::post(env('API_URL') . "asses/post", $data);
        return $response->json();
    }
    static function getKomponenPenilaian($session)
    {
        $response = Http::post(env('API_URL') . "komponenpenilaian/get", $session);
        return $response->json();
    }
}
