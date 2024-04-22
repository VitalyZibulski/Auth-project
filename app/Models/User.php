<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'online_at',
        'first_name',
        'middle_name',
        'last_name',
        'email',
        'password',
    ];

    protected $casts = [
        'online_at' => 'datetime',
        'password' => 'hashed',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
