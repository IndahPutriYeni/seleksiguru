<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Kriteria;
use App\Models\CalonGuru;
use Illuminate\Http\Request;
use App\Models\NilaiAlternatif;

class GuruController extends Controller
{
    //
    public function nilaiGuruKepsek(){
        $guru = User::where('jabatan', 'calon_guru')->get();
        $guruCount = User::where('jabatan', 'calon_guru')->count();
        $kriteria = Kriteria::where('tipe', 'kepala_sekolah')
            ->get();
        $countKriteria = Kriteria::where('tipe', 'kepala_sekolah')
            ->get()
            ->count();
        return view('Admin.guru.kepsek', compact('guru', 'guruCount', 'kriteria', 'countKriteria'));
    }

    public function nilaiGuruYayasan(){
        $guru = User::where('jabatan', 'calon_guru')->get();
        $guruCount = User::where('jabatan', 'calon_guru')->count();
        $kriteria = Kriteria::where('tipe', 'kepala_yayasan')
            ->get();
        $countKriteria = Kriteria::where('tipe', 'kepala_yayasan')
            ->get()
            ->count();
        return view('Admin.guru.yayasan', compact('guru', 'guruCount', 'kriteria', 'countKriteria'));
    }

    public function listGuru()
    {
        $guru = User::where('jabatan', 'calon_guru')->get();
        $dataGuru = CalonGuru::all();
        $guruCount = User::where('jabatan', 'calon_guru')->count();
        $kriteria = Kriteria::all();
        $countKriteria = Kriteria::all()->count();
        return view('Admin.guru.list', compact('dataGuru'));
    }

    public function addNilai(Request $request)
    {
        $kriteria = Kriteria::where('tipe', auth()->user()->jabatan)
            ->get();

        foreach($kriteria as $cat){
            $nilai = NilaiAlternatif::where('calon_guru_id', $request->id)
            ->where('kriteria_id', $cat->id)
            ->where('jabatan', auth()->user()->jabatan)
            ->first();
            // dd($nilai);
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
                    'kriteria_id' => $cat->id,
                    'jabatan'=> auth()->user()->jabatan,
                    'penilai_id' => auth()->user()->id,
                ], [
                    'nilai' =>  $request->input($cat->id),
                ]);
            }
        }
        if(auth()->user()->jabatan == 'kepala_sekolah'){
            return \redirect(route('admin.guru.kepsep'))->withSuccess('Berhasil Mengubah nilai guru');
        }else if(auth()->user()->jabatan == 'kepala_yayasan')
        {
            return \redirect(route('admin.guru.yayasan'))->withSuccess('Berhasil Mengubah nilai guru');
        }
        
    }
}
