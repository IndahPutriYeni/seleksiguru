<?php

namespace App\Http\Controllers;

use App\Models\Kriteria;
use App\Models\NilaiKriteria;
use Illuminate\Http\Request;

class MethodeController extends Controller
{
    protected $tableRi = [
        '1' => 0,
        '2' => 0,
        '3' => 0.58,
        '4' => 0.9,
        '5' => 1.12,
        '6' => 1.24,
        '7' => 1.32,
        '8' => 1.41,
        '9' => 1.45,
        '10' => 1.49,
    ];

    public function ahp()
    {
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

        return view('Admin.methode.ahp', compact('kriteria'));
    }

    public function ahpPerbandingan()
    {
        $kriteria = NilaiKriteria::where('tipe', 'kepala_sekolah')
            ->get()
            ->pluck('nilai', 'kode')
            ->toArray();
        $n = 5;
        
        $jumlah = [];
        $jumlah['pengalaman'] = 0;
        $jumlah['pengalaman'] += $kriteria['pengalaman_pengalaman'];
        $jumlah['pengalaman'] += $kriteria['tahfiz_pengalaman'];
        $jumlah['pengalaman'] += $kriteria['pendidikan_pengalaman'];
        $jumlah['pengalaman'] += $kriteria['kepribadian_pengalaman'];
        $jumlah['pengalaman'] += $kriteria['mengajar_pengalaman'];

        $jumlah['tahfiz'] = 0;
        $jumlah['tahfiz'] += $kriteria['pengalaman_tahfiz'];
        $jumlah['tahfiz'] += $kriteria['tahfiz_tahfiz'];
        $jumlah['tahfiz'] += $kriteria['pendidikan_tahfiz'];
        $jumlah['tahfiz'] += $kriteria['kepribadian_tahfiz'];
        $jumlah['tahfiz'] += $kriteria['mengajar_tahfiz'];

        $jumlah['pendidikan'] = 0;
        $jumlah['pendidikan'] += $kriteria['pengalaman_pendidikan'];
        $jumlah['pendidikan'] += $kriteria['tahfiz_pendidikan'];
        $jumlah['pendidikan'] += $kriteria['pendidikan_pendidikan'];
        $jumlah['pendidikan'] += $kriteria['kepribadian_pendidikan'];
        $jumlah['pendidikan'] += $kriteria['mengajar_pendidikan'];

        $jumlah['kepribadian'] = 0;
        $jumlah['kepribadian'] += $kriteria['pengalaman_kepribadian'];
        $jumlah['kepribadian'] += $kriteria['tahfiz_kepribadian'];
        $jumlah['kepribadian'] += $kriteria['pendidikan_kepribadian'];
        $jumlah['kepribadian'] += $kriteria['kepribadian_kepribadian'];
        $jumlah['kepribadian'] += $kriteria['mengajar_kepribadian'];

        $jumlah['mengajar'] = 0;
        $jumlah['mengajar'] += $kriteria['pengalaman_mengajar'];
        $jumlah['mengajar'] += $kriteria['tahfiz_mengajar'];
        $jumlah['mengajar'] += $kriteria['pendidikan_mengajar'];
        $jumlah['mengajar'] += $kriteria['kepribadian_mengajar'];
        $jumlah['mengajar'] += $kriteria['mengajar_mengajar'];

        // Nilai eigen
        $eigen = [];
        $eigen['pengalaman'] = 0;
        $eigen['pengalaman'] += $kriteria['pengalaman_pengalaman'] / $jumlah['pengalaman'];
        $eigen['pengalaman'] += $kriteria['pengalaman_tahfiz'] / $jumlah['tahfiz'];
        $eigen['pengalaman'] += $kriteria['pengalaman_pendidikan'] / $jumlah['pendidikan'];
        $eigen['pengalaman'] += $kriteria['pengalaman_kepribadian'] / $jumlah['kepribadian'];
        $eigen['pengalaman'] += $kriteria['pengalaman_mengajar'] / $jumlah['mengajar'];

        $eigen['tahfiz'] = 0;
        $eigen['tahfiz'] += $kriteria['tahfiz_pengalaman'] / $jumlah['pengalaman'];
        $eigen['tahfiz'] += $kriteria['tahfiz_tahfiz'] / $jumlah['tahfiz'];
        $eigen['tahfiz'] += $kriteria['tahfiz_pendidikan'] / $jumlah['pendidikan'];
        $eigen['tahfiz'] += $kriteria['tahfiz_kepribadian'] / $jumlah['kepribadian'];
        $eigen['tahfiz'] += $kriteria['tahfiz_mengajar'] / $jumlah['mengajar'];

        $eigen['pendidikan'] = 0;
        $eigen['pendidikan'] += $kriteria['pendidikan_pengalaman'] / $jumlah['pengalaman'];
        $eigen['pendidikan'] += $kriteria['pendidikan_tahfiz'] / $jumlah['tahfiz'];
        $eigen['pendidikan'] += $kriteria['pendidikan_pendidikan'] / $jumlah['pendidikan'];
        $eigen['pendidikan'] += $kriteria['pendidikan_kepribadian'] / $jumlah['kepribadian'];
        $eigen['pendidikan'] += $kriteria['pendidikan_mengajar'] / $jumlah['mengajar'];

        $eigen['kepribadian'] = 0;
        $eigen['kepribadian'] += $kriteria['kepribadian_pengalaman'] / $jumlah['pengalaman'];
        $eigen['kepribadian'] += $kriteria['kepribadian_tahfiz'] / $jumlah['tahfiz'];
        $eigen['kepribadian'] += $kriteria['kepribadian_pendidikan'] / $jumlah['pendidikan'];
        $eigen['kepribadian'] += $kriteria['kepribadian_kepribadian'] / $jumlah['kepribadian'];
        $eigen['kepribadian'] += $kriteria['kepribadian_mengajar'] / $jumlah['mengajar'];

        $eigen['mengajar'] = 0;
        $eigen['mengajar'] += $kriteria['mengajar_pengalaman'] / $jumlah['pengalaman'];
        $eigen['mengajar'] += $kriteria['mengajar_tahfiz'] / $jumlah['tahfiz'];
        $eigen['mengajar'] += $kriteria['mengajar_pendidikan'] / $jumlah['pendidikan'];
        $eigen['mengajar'] += $kriteria['mengajar_kepribadian'] / $jumlah['kepribadian'];
        $eigen['mengajar'] += $kriteria['mengajar_mengajar'] / $jumlah['mengajar'];

        $rataEigen = [];
        $rataEigen['pengalaman'] = $eigen['pengalaman'] / $n;
        $rataEigen['tahfiz'] = $eigen['tahfiz'] / $n;
        $rataEigen['pendidikan'] = $eigen['pendidikan'] / $n;
        $rataEigen['kepribadian'] = $eigen['kepribadian'] / $n;
        $rataEigen['mengajar'] = $eigen['mengajar'] / $n;

        $lambdaMax = 0;
        $lambdaMax += ($jumlah['pengalaman'] * $rataEigen['pengalaman']);
        $lambdaMax += ($jumlah['tahfiz'] * $rataEigen['tahfiz']);
        $lambdaMax += ($jumlah['pendidikan'] * $rataEigen['pendidikan']);
        $lambdaMax += ($jumlah['kepribadian'] * $rataEigen['kepribadian']);
        $lambdaMax += ($jumlah['mengajar'] * $rataEigen['mengajar']);

        $ci = ($lambdaMax - $n) / ($n - 1);
        $cr = $ci / $this->tableRi[$n];

        return view('Admin.methode.ahp-perbandingan', compact('kriteria', 'jumlah', 'eigen', 'rataEigen', 'lambdaMax', 'ci', 'cr'));
    }

    public function ahpProcess(Request $request) 
    {
        $pengalaman_pengalaman = 1;
        $tahfiz_tahfiz = 1;
        $pendidikan_pendidikan = 1;
        $kepribadian_kepribadian = 1;
        $mengajar_mengajar = 1;

        $data = [
            'pengalaman_pengalaman' => $pengalaman_pengalaman,
            'pengalaman_tahfiz' => $pengalaman_pengalaman / $request->tahfiz_pengalaman,
            'pengalaman_pendidikan' => $pengalaman_pengalaman / $request->pendidikan_pengalaman,
            'pengalaman_kepribadian' => $pengalaman_pengalaman / $request->kepribadian_pengalaman,
            'pengalaman_mengajar' => $pengalaman_pengalaman / $request->mengajar_pengalaman,

            'tahfiz_pengalaman' => $request->tahfiz_pengalaman,
            'tahfiz_tahfiz' => $tahfiz_tahfiz,
            'tahfiz_pendidikan' => $tahfiz_tahfiz / $request->pendidikan_tahfiz,
            'tahfiz_kepribadian' => $tahfiz_tahfiz / $request->kepribadian_tahfiz,
            'tahfiz_mengajar' => $tahfiz_tahfiz / $request->mengajar_tahfiz,

            'pendidikan_pengalaman' => $request->pendidikan_pengalaman,
            'pendidikan_tahfiz' => $request->pendidikan_tahfiz,
            'pendidikan_pendidikan' => $pendidikan_pendidikan,
            'pendidikan_kepribadian' => $pendidikan_pendidikan / $request->kepribadian_pendidikan,
            'pendidikan_mengajar' => $pendidikan_pendidikan / $request->mengajar_pendidikan,

            'kepribadian_pengalaman' => $request->kepribadian_pengalaman,
            'kepribadian_tahfiz' => $request->kepribadian_tahfiz,
            'kepribadian_pendidikan' => $request->kepribadian_pendidikan,
            'kepribadian_kepribadian' => $kepribadian_kepribadian,
            'kepribadian_mengajar' => $kepribadian_kepribadian / $request->mengajar_kepribadian,

            'mengajar_pengalaman' => $request->mengajar_pengalaman,
            'mengajar_tahfiz' => $request->mengajar_tahfiz,
            'mengajar_pendidikan' => $request->mengajar_pendidikan,
            'mengajar_kepribadian' => $request->mengajar_kepribadian,
            'mengajar_mengajar' => $mengajar_mengajar,
        ];

        foreach($data as $kode => $nilai) {
            NilaiKriteria::updateOrCreate(['kode' => $kode, 'tipe' => 'kepala_sekolah'], ['nilai' => $nilai]);
        }

        return redirect()->route('admin.ahp');
    }

    public function topsis()
    {
        $bobot = Kriteria::select(['name', 'bobot_topsis'])->all()->get();
        $nilaiAlternatif = NilaiAlternatif::all();
        return view('Admin.methode.topsis', compact('bobot', 'nilaiAlternatif'));
    }

    public function copeland()
    {
        
    }
}
