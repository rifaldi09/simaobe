<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;

class Login extends Model
{
    use HasFactory;

    static function auth($data)
    {
        $response = Http::post(env('API_URL')."login", $data);
        return $response->json();
    }

    static function dataMatkul($sessionId)
    {
        $response = Http::post(env('API_URL')."courses/get", $sessionId);
        return $response->json();
    }

    static function userInfo($sessionId)
    {   
        $response = Http::post(env('API_URL') . "info", $sessionId);
        return $response->json();
    }

    static function getUserAccess($sessionId)
    {
        $response = Http::post(env('API_URL') . "auth", $sessionId);
        return $response->json();
    }

    static function logout($data)
    {
        $response = Http::post(env('API_URL') . "login/quit", $data);
        return $response->json();
    }

}