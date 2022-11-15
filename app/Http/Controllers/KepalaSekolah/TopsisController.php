<?php

namespace App\Http\Controllers\KepalaSekolah;

use App\Http\Controllers\Controller;
use App\Models\NilaiPerbandingan;

class TopsisController extends Controller
{
    public function index()
    {
        $data = [
            [
                'nama' => 'sri',
                'mengajar' => 60,
                'kepribadian' => 66,
                'pendidikan' => 60,
                'tahfiz' => 55,
                'pengalaman' => 72,
            ],
            [
                'nama' => 'jamal',
                'mengajar' => 89,
                'kepribadian' => 89,
                'pendidikan' => 90,
                'tahfiz' => 90,
                'pengalaman' => 90,
            ],
        ];

        $perbandingan = NilaiPerbandingan::where('tipe', 'kepala_yayasan')
            ->first()
            ->toArray();

        // ternomalisasi
        $pembagi = [];
        $pembagi['mengajar'] = $this->calculatePembagi($data, 'mengajar');

        dump($pembagi);
        dd($data);
    }

    protected function calculatePembagi(array $data, string $key)
    {
        return array_reduce(array_column($data, $key), function ($a, $b) {
            $a += $b * $b;
            return $a;
        });
    }
}
