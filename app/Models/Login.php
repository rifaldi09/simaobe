<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;

class Login extends Model
{
    use HasFactory;

    static function path($param = null)
    {
        return "http://148.135.137.186:54312/" . $param;
    }

    static function auth($data)
    {
        $response = Http::post(self::path("login"), $data);
        return $response->json();
    }

    static function dataMatkul($sessionId)
    {
        $response = Http::post(self::path("courses"), $sessionId);
        return $response->json();
    }

    static function userInfo($sessionId)
    {   
        $response = Http::post(self::path("info"), $sessionId);
        return $response->json();
    }

    static function logout($data)
    {
        $response = Http::post(self::path("login/quit"), $data);
        return $response->json();
    }

}