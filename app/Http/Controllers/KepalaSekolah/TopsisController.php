<?php

namespace App\Http\Controllers\KepalaSekolah;

use App\Http\Controllers\Controller;
use App\Models\Topsis;
use App\Services\TopsisService;

class TopsisController extends Controller
{
    public function index()
    {
        $result = TopsisService::process();

        Topsis::updateOrCreate(['tipe' => 'kepala_sekolah'], $result);

        return view('Admin.methode.topsis', compact('result'));
    }
}
