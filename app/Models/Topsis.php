<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topsis extends Model
{
    use HasFactory;

    protected $table = 'topsis';

    protected $fillable = [
        'ternomalisasi',
        'ternomalisasi_bobot',
        'min',
        'max',
        'solusi_ideal_min',
        'solusi_ideal_plus',
        'preferensi',
        'ranking',
    ];

    protected $casts = [
        'ternomalisasi' => 'collection',
        'ternomalisasi_bobot' => 'collection',
        'min' => 'collection',
        'max' => 'collection',
        'solusi_ideal_min' => 'collection',
        'solusi_ideal_plus' => 'collection',
        'preferensi' => 'collection',
        'ranking' => 'collection',
    ];
}
