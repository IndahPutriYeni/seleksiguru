<?php

namespace App\Http\Controllers\KepalaSekolah;

use App\Http\Controllers\Controller;
use App\Models\NilaiPerbandingan;
use App\Services\TopsisService;
use App\Models\Topsis;

class TopsisController extends Controller
{
    public function index()
    {
        $result = TopsisService::process();

        Topsis::create($result);

        return view('Admin.methode.topsis', compact('result'));
    }
}
