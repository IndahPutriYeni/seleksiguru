<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeleksiGuru extends Model
{
    use HasFactory;

    protected $table = 'seleksi_guru';

    protected $fillable = [
        'nama',
        'nik',
        'no_kk',
        'alamat',
        'tempat_lahir',
        'tanggal_lahir',
        'tamatan',
        'instansi',
        'no_hp',
        'foto_profile',
        'tahun_diterima',
        'status',
    ];
}
