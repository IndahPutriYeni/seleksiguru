<?php

namespace App\Models;

use App\Models\NilaiAlternatif;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kriteria extends Model
{
    use HasFactory;

    protected $table = 'kriteria';
    protected $fillable = [
        'name',
        'kode',
        'atribut',
        'bobot'
    ];

    public $timestamps = false;

    public function nilai_alternatif()
    {
        return $this->hasMany(NilaiAlternatif::class, 'kriteria_id');
    }
    public static function boot() {
        parent::boot();
        static::deleting(function($nilai) { 
             $nilai->nilai_alternatif()->delete();
        });
    }
}
