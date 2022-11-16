<?php

namespace App\Http\Controllers\KepalaYayasan;

use App\Http\Controllers\Controller;
use App\Models\Topsis;
use App\Services\TopsisService;

class TopsisController extends Controller
{
    public function index()
    {
        $result = TopsisService::process('kepala_yayasan');

        Topsis::updateOrCreate(['tipe' => 'kepala_yayasan'], $result);

        return view('Admin.methode.topsis', compact('result'));
    }
}
