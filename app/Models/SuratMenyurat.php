<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratMenyurat extends Model
{
    use HasFactory;
    protected $table = "surat_menyurat";
    protected $fillable = [
        'user_id',
        'type',
        'image'
    ];
    public $timestamps = false;
}
