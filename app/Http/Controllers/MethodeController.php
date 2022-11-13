<?php

namespace App\Http\Controllers;

use App\Models\Kriteria;
use Illuminate\Http\Request;

class MethodeController extends Controller
{
    //
    public function ahp()
    {
        $kriteria = Kriteria::all()->get();
        $kriteriaPenilaian = NilaiKriteria::all()->get();
        return view('Admin.methode.ahp', compact('kriteria', 'kriteriaPenilaian'));
    }

    public function topsis()
    {
        $bobot = Kriteria::select(['name', 'bobot_topsis'])->all()->get();
        $nilaiAlternatif = NilaiAlternatif::all();
        return view('Admin.methode.topsis', compact('bobot', 'nilaiAlternatif'));
    }

    public function copeland()
    {
        
    }


}
