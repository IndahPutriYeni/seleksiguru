<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalonGuru extends Model
{
    use HasFactory;
    protected $table = 'calon_guru';
    protected $fillable = [
        'id',
        'nik', 
        'no_kk',
        'alamat',
        'tempat_lahir',
        'tanggal_lahir', 
        'tamatan',
        'instansi',
        'no_hp',
        'foto_profile',
    ];

    public $timestamps = false;
}
