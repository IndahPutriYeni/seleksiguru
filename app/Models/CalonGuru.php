<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalonGuru extends Model
{
    use HasFactory;
    protected $table = 'calon_guru';
    protected $fillable = [
        'nik', 
        'alamat', 
        'no_hp',
        'foto_profile',
        'tamatan'
    ];

    public $timestamps = false;
}
