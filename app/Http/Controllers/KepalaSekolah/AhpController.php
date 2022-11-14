<?php

namespace App\Http\Controllers\KepalaSekolah;

use App\Http\Controllers\Controller;
use App\Models\NilaiKriteria;
use App\Services\AhpService;
use Illuminate\Http\Request;

class AhpController extends Controller
{
    public function ahp()
    {
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
        $kriteria = NilaiKriteria::where('tipe', 'kepala_sekolah')
            ->get()
            ->pluck('nilai', 'kode')
            ->toArray();
        $result = AhpService::processPerbandingan($kriteria);

        return view('Admin.methode.ahp-perbandingan', ['kriteria' => $kriteria, ...$result]);
    }

    public function ahpProcess(Request $request)
    {
        $data = AhpService::processKepalaSekolah($request);

        foreach ($data as $kode => $nilai) {
            NilaiKriteria::updateOrCreate(['kode' => $kode, 'tipe' => 'kepala_sekolah'], ['nilai' => $nilai]);
        }

        return redirect()->route('admin.kepalaSekolah.ahp.perbandingan');
    }
}
