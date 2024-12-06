<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;

class Analisis extends Model
{
    use HasFactory;

    static function path($param = null)
    {
        return "http://148.135.137.186:54312/" . $param;
    }

    // Function untuk mengambil data dari API berupa data
    static function posttambahanalisis($sessionId)
    {
        $id = ['sessionID'=>$sessionId];
        $response = Http::post(self::path("clo"), $id);
        return $response->json();
    }

    // Function untuk mengambil data analisis berdasarkan sessionID
    static function getAnalisis($sessionId)
    {
        $response = Http::post(self::path("aap/get"), $sessionId);
        return $response->json();
    }
}