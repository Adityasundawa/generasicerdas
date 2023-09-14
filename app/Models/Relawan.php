<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Relawan extends Model
{
    use HasFactory;
  protected $fillable = [
        'nik', 'nama', 'alamat', 'email', 'jenis_kelamin',
        'tanggal_lahir', 'kewarganegaraan', 'agama',
        'no_telpon', 'minat_bakat', 'foto','role'
    ];
}
