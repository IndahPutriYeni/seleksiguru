<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NilaiKriteria extends Model
{
    use HasFactory;
    protected $table = 'kriteria_penilaian';
    protected $fillable = [
        'kriteria_id_a',
        'kriteria_id_b',
        'nilai'
    ];

    public $timestamps = false;
}
