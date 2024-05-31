<?php

namespace App\Models;

use App\Enums\GenderEnum;
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
        'gender',
        'email',
        'password',
        'password_at',
    ];

    protected $casts = [
        'gender' => GenderEnum::class,
        'online_at' => 'datetime',
        'password' => 'hashed',
        'password_at' => 'datetime',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function getFullName(): string
    {
        return implode(' ', array_filter([
            $this->first_name,
            $this->middle_name,
            $this->last_name,
        ]));
    }

    public function updatePassword(string $password): bool
    {
        return $this->update([
            'password' => $password,
            'password_at' => now(),
        ]);
    }
}
