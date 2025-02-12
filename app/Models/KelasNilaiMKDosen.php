<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;

class KelasNilaiMKDosen extends Model
{
    use HasFactory;
    static function getDaftarKelasDosen($session)
    {
        $response = Http::post(env('API_URL') . "teachingclass/get", $session);
        return $response->json();
    }
}
