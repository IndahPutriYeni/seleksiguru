<?php

namespace App\Http\Controllers\KepalaYayasan;

use App\Http\Controllers\Controller;
use App\Models\NilaiKriteria;
use App\Models\NilaiPerbandingan;
use App\Services\AhpService;
use Illuminate\Http\Request;

class AhpController extends Controller
{
    public function ahp()
    {
        $postUrl = route('admin.kepalaYayasan.ahp.process');
        $kriteria = [
            'tahfiz_pengalaman' => ['Tahfiz', 'Pengalaman'],
            'tahfiz_pendidikan' => ['Tahfiz', 'Pendidikan'],
            'tahfiz_kepribadian' => ['Tahfiz', 'Kepribadian'],
            'tahfiz_mengajar' => ['Tahfiz', 'Mengajar'],

            'pendidikan_pengalaman' => ['Pendidikan', 'Pengalaman'],
            'pendidikan_kepribadian' => ['Pendidikan', 'Kepribadian'],
            'pendidikan_mengajar' => ['Pendidikan', 'Mengajar'],

            'kepribadian_pengalaman' => ['Kepribadian', 'Pengalaman'],

            'mengajar_pengalaman' => ['Mengajar', 'Pengalaman'],
            'mengajar_kepribadian' => ['Mengajar', 'Kepribadian'],
        ];

        return view('Admin.methode.ahp', compact('kriteria', 'postUrl'));
    }

    public function ahpPerbandingan()
    {
        $kriteria = NilaiKriteria::where('tipe', 'kepala_yayasan')
            ->get()
            ->pluck('nilai', 'kode')
            ->toArray();
        $perbandingan = NilaiPerbandingan::where('tipe', 'kepala_yayasan')
            ->first()
            ->toArray();

        if (count($kriteria) === 0) {
            return redirect()->route('admin.kepalaYayasan.ahp');
        }

        return view('Admin.methode.ahp-perbandingan', compact('kriteria', 'perbandingan'));
    }

    public function ahpProcess(Request $request)
    {
        $data = AhpService::processKepalaYayasan($request);

        foreach ($data as $kode => $nilai) {
            NilaiKriteria::updateOrCreate(['kode' => $kode, 'tipe' => 'kepala_yayasan'], ['nilai' => $nilai]);
        }

        // Nilai Perbandingan
        $kriteria = NilaiKriteria::where('tipe', 'kepala_yayasan')
            ->get()
            ->pluck('nilai', 'kode')
            ->toArray();
        $result = AhpService::processPerbandingan($kriteria);

        NilaiPerbandingan::updateOrCreate([
            'tipe' => 'kepala_yayasan',
        ], [
            'jumlah_kriteria' => $result['jumlah'],
            'jumlah_eigen' => $result['eigen'],
            'rata_eigen' => $result['rataEigen'],
            'lambda_max' => $result['lambdaMax'],
            'ci' => $result['ci'],
            'cr' => $result['cr'],
        ]);

        return redirect()->route('admin.kepalaYayasan.ahp.perbandingan');
    }
}
