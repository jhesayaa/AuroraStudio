<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Regis extends Authenticatable
{
    use Notifiable;

    // Kolom yang dapat diisi
    protected $fillable = [
        'name', 'email', 'password',
    ];

    // Kolom yang harus disembunyikan dalam array

    // Tipe casting atribut
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}