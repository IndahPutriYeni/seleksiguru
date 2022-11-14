<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Kriteria;
use Illuminate\Http\Request;
use App\Models\NilaiAlternatif;

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

    public function addNilai(Request $request)
    {
        $kriteria = Kriteria::all();

        foreach($kriteria as $cat){
            $nilai = NilaiAlternatif::where('calon_guru_id', $request->id)
            ->where('kriteria_id', $cat->id)->first();
            if($nilai){
                $nilai->calon_guru_id = $request->id;
                $nilai->penilai_id = auth()->user()->id;
                $nilai->kriteria_id = $cat->id;
                $nilai->jabatan = auth()->user()->jabatan;
                $nilai->nilai = $request->input($cat->id);
                $nilai->save();

            }else{
                NilaiAlternatif::updateOrCreate([
                    'calon_guru_id' => $request->id,
                    'penilai_id' => auth()->user()->id,
                    'kriteria_id' => $cat->id,
                    'jabatan'=> auth()->user()->jabatan,
                    'nilai' =>  $request->input($cat->id),
                ]);
            }
        }
        return \redirect()->intended(route('admin.guru.index'));
        
    }
}
