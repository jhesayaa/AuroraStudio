<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Images extends Model
{
    use HasFactory;
    protected $fillable = [
        'foto_wisuda',
        'foto_personal',
        'foto_grup',
        'foto_maternity',
        'foto_photoshoot',
        'created_at',
        'updated_at',
        'status_aktif',
        'foto_paket1wisudawan',
        'foto_paketgrup23wisudawan',
        'foto_paketgrup45wisudawan',
        'foto_pasfoto',
        'foto_contoh1',
        'foto_contoh2',
        'foto_contoh3',
        'foto_contoh4',
        'foto_contoh5',
        'foto_contoh6',
        'foto_contoh7',
        'foto_contoh8',
        'foto_contoh9',
    ];
}
