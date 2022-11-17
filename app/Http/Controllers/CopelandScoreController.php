<?php

namespace App\Http\Controllers;

use App\Models\Topsis;

class CopelandScoreController extends Controller
{
    public function index()
    {
        $topsisKS = Topsis::where('tipe', 'kepala_sekolah')
            ->first()
            ->toArray();
        $rankingKS = $topsisKS['ranking'];

        $topsisKY = Topsis::where('tipe', 'kepala_yayasan')
            ->first()
            ->toArray();
        $rankingKY = $topsisKY['ranking'];

        dump($rankingKS);
        dd($rankingKY);
    }
}
