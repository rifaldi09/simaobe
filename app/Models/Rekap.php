<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;

class Rekap extends Model
{
    use HasFactory;

    // Function untuk mengambil data dari API berupa data
    static function getRekapStudentCourse($sessionId)
    {
        $id = ['sessionID'=>$sessionId];
        $response = Http::post(env('API_URL') . "rekapOBE/studentcourse", $id);
        return $response->json();
    }

    static function getRekapClasscourse($sessionId)
    {
        $id = ['sessionID'=>$sessionId];
        $response = Http::post(env('API_URL') . "rekapOBE/classcourse", $id);
        return $response->json();
    }

    static function getRekapCourseSemester($sessionId)
    {
        $id = ['sessionID'=>$sessionId];
        $response = Http::post(env('API_URL') . "rekapOBE/coursesemester", $id);
        return $response->json();
    }
}
