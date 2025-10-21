<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class infopesanan extends Model
{
    use HasFactory;

protected $fillable = [
'nama',
'nomor_wa',
'email',
'lokasi',
'paket',
'tempat',
'tanggal',
'jam',
'created_at',
'updated_at',
];
}