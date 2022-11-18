<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Copeland extends Model
{
    use HasFactory;

    protected $table = 'copeland';

    protected $fillable = [
        'name',
        'bobot',
        'ranking',
    ];
}
