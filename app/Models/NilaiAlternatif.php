<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NilaiAlternatif extends Model
{
    use HasFactory;
    protected $table = "nilai_alternatif";
    protected $fillable = [
        'calon_guru_id',
        'penilai_id',
        'kriteria_id',
        'jabatan',
        'nilai'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'calon_guru_id');
    }
    public $timestamps = false;
}
