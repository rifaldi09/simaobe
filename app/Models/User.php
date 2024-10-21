<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /* menjadikan username default menjadi user_id karna laravel menganggap user_id sebagai username bukan sebagai user_id */
    public function username()
    {
        return 'user_id';
    }

    protected $fillable = [
        'user_id', 'user_email', 'user_name', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
