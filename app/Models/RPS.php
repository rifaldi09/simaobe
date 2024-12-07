<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;

class RPS extends Model
{
    use HasFactory;

    static function path($param = null)
    {
        return "http://148.135.137.186:54312/" . $param;
    }

    // Function untuk mengambil data dari API berupa data
    static function bahanKajian($sessionId)
    {
        $id = ['sessionID'=>$sessionId];
        $response = Http::post(self::path("bok"), $id);
        return $response->json();
    }
}
