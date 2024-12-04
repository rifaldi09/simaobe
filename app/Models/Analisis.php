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

    static function getAnalisis($sessionId)
    {
        $response = Http::post(self::path("aap/get"), $sessionId);
        return $response->json();
    }
}
