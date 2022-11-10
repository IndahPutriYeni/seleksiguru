<?php

namespace App\Http\Controllers;

use App\Models\CalonGuru;
use Illuminate\Http\Request;

class CalonGuruController extends Controller
{
    //
    public function profile(){
        $dataGuru = CalonGuru::find(auth()->user()->id);
        return view('calonGuru.profile', compact('dataGuru'));
    }
}
