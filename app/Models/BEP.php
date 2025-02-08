<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;

class BEP extends Model
{
    use HasFactory;

    static function path($param = null)
    {
        return "http://148.135.137.186:54312/" . $param;
    }

    // Function untuk mengambil data dari API berupa data
    static function getBEP($session)
    {
        $response = Http::post(self::path("asses/get"), $session);
        return $response->json();
    }
    static function postBEP($data)
    {
        $response = Http::post(self::path("asses/post"), $data);
        return $response->json();
    }
    static function getKomponenPenilaian($session)
    {
        $response = Http::post(self::path("komponenpenilaian/get"), $session);
        return $response->json();
    }
}
