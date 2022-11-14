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
        'bobot_topsis'
    ];

    public $timestamps = false;

    public function nilai_alternatif()
    {
        return $this->hasMany(NilaiAlternatif::class, 'kriteria_id');
    }

    public function nilai_kriteria_a()
    {
        return $this->hasMany(NilaiKriteria::class, 'kriteria_id_a');
    }
    public function nilai_kriteria_b()
    {
        return $this->hasMany(NilaiKriteria::class, 'kriteria_id_b');
    }
}
