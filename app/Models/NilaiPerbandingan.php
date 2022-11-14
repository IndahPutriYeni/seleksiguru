<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NilaiPerbandingan extends Model
{
    use HasFactory;

    protected $table = 'nilai_perbandingan';

    protected $fillable = [
        'jumlah_kriteria',
        'jumlah_eigen',
        'rata_eigen',
        'tipe',
        'lambda_max',
        'ci',
        'cr',
    ];

    protected $casts = [
        'jumlah_kriteria' => 'collection',
        'jumlah_eigen' => 'collection',
        'rata_eigen' => 'collection',
    ];
}
