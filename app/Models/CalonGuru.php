<?php

namespace App\Models;

use App\Models\SuratMenyurat;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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

    public function surat_menyurat()
    {
        return $this->hasMany(SuratMenyurat::class, 'user_id', 'id');
    }
}
