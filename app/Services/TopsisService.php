<?php

namespace App\Services;

use App\Models\NilaiAlternatif;
use App\Models\NilaiPerbandingan;

class TopsisService
{
    public static function process($jabatan)
    {
        $result = [];
        $nilai = NilaiAlternatif::with(['guru', 'user', 'kriteria'])
            ->where('jabatan', $jabatan)
            ->get()
            ->toArray();

        $bobot = NilaiPerbandingan::where('tipe', $jabatan)
            ->first()
            ->toArray();
        $bobot = $bobot['rata_eigen'];

        $data = [];
        foreach ($nilai as $item) {
            $data[$item['user']['name']][$item['kriteria']['name']] = $item['nilai'];
        }

        $pembagi = [];
        $pembagi['pengalaman'] = self::hitungPembagi($data, 'Pengalaman');
        $pembagi['mengajar'] = self::hitungPembagi($data, 'Mengajar');
        $pembagi['pendidikan'] = self::hitungPembagi($data, 'Pendidikan');
        $pembagi['tahfiz'] = self::hitungPembagi($data, 'Tahfiz');
        $pembagi['kepribadian'] = self::hitungPembagi($data, 'Kepribadian');

        // ternomalisasi
        foreach ($data as $key => &$item) {
            $item['Pengalaman'] = $item['Pengalaman'] / $pembagi['pengalaman'];
            $item['Mengajar'] = $item['Mengajar'] / $pembagi['mengajar'];
            $item['Pendidikan'] = $item['Pendidikan'] / $pembagi['pendidikan'];
            $item['Tahfiz'] = $item['Tahfiz'] / $pembagi['tahfiz'];
            $item['Kepribadian'] = $item['Kepribadian'] / $pembagi['kepribadian'];
        }
        unset($item);
        $result['ternomalisasi'] = $data;

        // ternomalisasi bobot
        foreach ($data as $key => &$item) {
            $item['Pengalaman'] = $item['Pengalaman'] * $bobot['pengalaman'];
            $item['Mengajar'] = $item['Mengajar'] * $bobot['mengajar'];
            $item['Pendidikan'] = $item['Pendidikan'] * $bobot['pendidikan'];
            $item['Tahfiz'] = $item['Tahfiz'] * $bobot['tahfiz'];
            $item['Kepribadian'] = $item['Kepribadian'] * $bobot['kepribadian'];
        }
        unset($item);
        $result['ternomalisasi_bobot'] = $data;

        // min max
        $min['pengalaman'] = min(array_column($data, 'Pengalaman'));
        $min['mengajar'] = min(array_column($data, 'Mengajar'));
        $min['pendidikan'] = min(array_column($data, 'Pendidikan'));
        $min['tahfiz'] = min(array_column($data, 'Tahfiz'));
        $min['kepribadian'] = min(array_column($data, 'Kepribadian'));

        $max['pengalaman'] = max(array_column($data, 'Pengalaman'));
        $max['mengajar'] = max(array_column($data, 'Mengajar'));
        $max['pendidikan'] = max(array_column($data, 'Pendidikan'));
        $max['tahfiz'] = max(array_column($data, 'Tahfiz'));
        $max['kepribadian'] = max(array_column($data, 'Kepribadian'));

        $result['min'] = $min;
        $result['max'] = $max;

        // jarak solusi ideal negatif
        $dPlus = [];
        foreach ($data as $key => $item) {
            $dPlus[$key] = 0;
            $dPlus[$key] += pow($max['pengalaman'] - $item['Pengalaman'], 2);
            $dPlus[$key] += pow($max['mengajar'] - $item['Mengajar'], 2);
            $dPlus[$key] += pow($max['pendidikan'] - $item['Pendidikan'], 2);
            $dPlus[$key] += pow($max['tahfiz'] - $item['Tahfiz'], 2);
            $dPlus[$key] += pow($max['kepribadian'] - $item['Kepribadian'], 2);
            $dPlus[$key] = sqrt($dPlus[$key]);
        }

        $dMin = [];
        foreach ($data as $key => $item) {
            $dMin[$key] = 0;
            $dMin[$key] += pow($item['Pengalaman'] - $min['pengalaman'], 2);
            $dMin[$key] += pow($item['Mengajar'] - $min['mengajar'], 2);
            $dMin[$key] += pow($item['Pendidikan'] - $min['pendidikan'], 2);
            $dMin[$key] += pow($item['Tahfiz'] - $min['tahfiz'], 2);
            $dMin[$key] += pow($item['Kepribadian'] - $min['kepribadian'], 2);
            $dMin[$key] = sqrt($dMin[$key]);
        }

        $result['solusi_ideal_min'] = $dMin;
        $result['solusi_ideal_plus'] = $dPlus;

        // nilai preferensi
        $preferensi = [];
        foreach ($data as $key => $item) {
            $preferensi[$key] = $dMin[$key] / ($dPlus[$key] + $dMin[$key]);
        }
        $result['preferensi'] = $preferensi;

        // ranking
        asort($preferensi);
        $preferensi = array_reverse($preferensi);
        $result['ranking'] = $preferensi;

        return $result;
    }

    protected static function hitungPembagi(array $data, string $key)
    {
        $sum = array_reduce(array_column($data, $key), function ($a, $b) {
            $a += $b * $b;
            return $a;
        });

        return sqrt($sum);
    }
}
