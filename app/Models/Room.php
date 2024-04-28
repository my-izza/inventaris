<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $fillable = [
        'no_ruang',
        'gedung',
        'nama_ruang',
        'kategori',
        'luas',
        'foto_depan',
        'foto_ruang',
    ];
}
