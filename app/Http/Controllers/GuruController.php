<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Kriteria;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    //
    public function listGuru()
    {
        $guru = User::where('jabatan', 'calon_guru')->get();
        $guruCount = User::where('jabatan', 'calon_guru')->count();
        $kriteria = Kriteria::all();
        $countKriteria = Kriteria::all()->count();
        
        return view('Admin.guru.list', compact('guru', 'guruCount', 'kriteria', 'countKriteria'));

    }
}
