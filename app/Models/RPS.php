<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;

class RPS extends Model
{
    use HasFactory;
    // Function untuk mengambil data dari API berupa data
    static function bahanKajian($sessionId)
    {
        $id = ['sessionID'=>$sessionId];
        $response = Http::post(env('API_URL') . "bok", $id);
        return $response->json();
    }
}
