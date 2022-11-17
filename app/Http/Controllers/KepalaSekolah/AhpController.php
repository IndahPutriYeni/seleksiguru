<?php

namespace App\Http\Controllers\KepalaSekolah;

use App\Http\Controllers\Controller;
use App\Models\NilaiKriteria;
use App\Models\NilaiPerbandingan;
use App\Services\AhpService;
use Illuminate\Http\Request;

class AhpController extends Controller
{
    public function ahp()
    {
        if(auth()->user()->jabatan!== 'kepala_sekolah'){
            return redirect()->route('admin.index')->with('error', 'Anda tiak punya akses ke portal nilai kepala sekolah');
         }
        $postUrl = route('admin.kepalaSekolah.ahp.process');
        $kriteria = [
            'tahfiz_pengalaman' => ['Tahfiz', 'Pengalaman'],

            'pendidikan_pengalaman' => ['Pendidikan', 'Pengalaman'],
            'pendidikan_tahfiz' => ['Pendidikan', 'Tahfiz'],

            'kepribadian_pengalaman' => ['Kepribadian', 'Pengalaman'],
            'kepribadian_tahfiz' => ['Kepribadian', 'Tahfiz'],
            'kepribadian_pendidikan' => ['Kepribadian', 'Pendidikan'],

            'mengajar_pengalaman' => ['Mengajar', 'Pengalaman'],
            'mengajar_tahfiz' => ['Mengajar', 'Tahfiz'],
            'mengajar_pendidikan' => ['Mengajar', 'Pendidikan'],
            'mengajar_kepribadian' => ['Mengajar', 'Kepribadian'],
        ];

        return view('Admin.methode.ahp', compact('kriteria', 'postUrl'));
    }

    public function ahpPerbandingan()
    {
        $countKriteria = NilaiKriteria::where('tipe', 'kepala_sekolah')->count();
        if ($countKriteria === 0) {
            if(auth()->user()->jabatan!== 'kepala_sekolah'){
                return redirect()->route('admin.index')->with('error', 'Nilai AHP Kepala Sekolah masih kosong');
            }
            return redirect()->route('admin.kepalaSekolah.ahp');
        }
        $kriteria = NilaiKriteria::where('tipe', 'kepala_sekolah')
            ->get()
            ->pluck('nilai', 'kode')
            ->toArray();
        $perbandingan = NilaiPerbandingan::where('tipe', 'kepala_sekolah')
            ->first()
            ->toArray();
        return view('Admin.methode.ahp-perbandingan', compact('kriteria', 'perbandingan'));
    }

    public function ahpProcess(Request $request)
    {
        $data = AhpService::processKepalaSekolah($request);

        foreach ($data as $kode => $nilai) {
            NilaiKriteria::updateOrCreate(['kode' => $kode, 'tipe' => 'kepala_sekolah'], ['nilai' => $nilai]);
        }

        // Nilai Perbandingan
        $kriteria = NilaiKriteria::where('tipe', 'kepala_sekolah')
            ->get()
            ->pluck('nilai', 'kode')
            ->toArray();
        $result = AhpService::processPerbandingan($kriteria);

        NilaiPerbandingan::updateOrCreate([
            'tipe' => 'kepala_sekolah',
        ], [
            'jumlah_kriteria' => $result['jumlah'],
            'jumlah_eigen' => $result['eigen'],
            'rata_eigen' => $result['rataEigen'],
            'lambda_max' => $result['lambdaMax'],
            'ci' => $result['ci'],
            'cr' => $result['cr'],
        ]);

        return redirect()->route('admin.kepalaSekolah.ahp.perbandingan');
    }
}
