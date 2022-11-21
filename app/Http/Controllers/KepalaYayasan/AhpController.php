<?php

namespace App\Http\Controllers\KepalaYayasan;

use App\Http\Controllers\Controller;
use App\Models\NilaiKriteria;
use App\Models\NilaiPerbandingan;
use App\Models\Kriteria;
use App\Services\AhpService;
use Illuminate\Http\Request;

class AhpController extends Controller
{
    public function ahp()
    {
        if(auth()->user()->jabatan!== 'kepala_yayasan'){
            return redirect()->route('admin.index')->with('error', 'Anda tiak punya akses ke portal nilai yayasan');
         }
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
        $countKriteria = NilaiKriteria::where('tipe', 'kepala_yayasan')->count();
        if ($countKriteria === 0) {
            if(auth()->user()->jabatan!== 'kepala_yayasan'){
               return redirect()->route('admin.index')->with('error', 'Nilai AHP Kepala Yayasan masih kosong');
            }
            return redirect()->route('admin.kepalaYayasan.ahp');
        }
        $kriteria = NilaiKriteria::where('tipe', 'kepala_yayasan')
            ->get()
            ->pluck('nilai', 'kode')
            ->toArray();
        $perbandingan = NilaiPerbandingan::where('tipe', 'kepala_yayasan')
            ->first()
            ->toArray();
        return view('Admin.methode.ahp-perbandingan', compact('kriteria', 'perbandingan'));
    }

    public function ahpProcess(Request $request)
    {
        $user = auth()->user();
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

        // update bobot kriteria
        foreach ($result['rataEigen'] as $key => $value) {
            $kriteria = Kriteria::whereRaw('LOWER(name) = ?', [$key])
                ->where('tipe', $user->jabatan)
                ->first();

            if ($kriteria) {
                $kriteria->update(['bobot' => $value]);
            } else {
                $count = Kriteria::all()->count();

                Kriteria::create([
                    'name' => $key,
                    'tipe' => $user->jabatan,
                    'kode' => 'C' . $count,
                    'bobot' => $value,
                ]);
            }
        }

        return redirect()->route('admin.kepalaYayasan.ahp.perbandingan');
    }
}
