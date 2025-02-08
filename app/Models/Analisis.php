<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;

class Analisis extends Model
{
    use HasFactory;

    // Function untuk mengambil data dari API berupa data
    static function getCpmk($sessionId)
    {
        $id = ['sessionID'=>$sessionId];
        $response = Http::post(env('API_URL')."clo", $id);
        return $response->json();
    }

    static function getCpl($sessionId)
    {
        $id = ['IDSession'=>$sessionId];
        $response = Http::post(env('API_URL') . "lo", $id);
        return $response->json();
    }

    // Function untuk mengambil data analisis berdasarkan sessionID
    static function get($sessionId)
    {
        $response = Http::post(env('API_URL') . "aap/get", $sessionId);
        return $response->json();
    }

    static function create($data){
        $response = Http::post(env('API_URL') . "aap/post",$data);
        return $response->json();
    }

    static function destroy($data)
    {
        $response = Http::post(env('API_URL'), $data);
        return $response->json();
    }
}