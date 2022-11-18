<?php

namespace App\Services;

use App\Models\CalonGuru;
use App\Models\Topsis;

class CopelandService
{
    public static function process()
    {
        $listGuru = CalonGuru::with(['user'])
            ->get()
            ->toArray();

        $topsisKS = Topsis::where('tipe', 'kepala_sekolah')
            ->first()
            ->toArray();
        $rankingKS = $topsisKS['ranking'];

        $topsisKY = Topsis::where('tipe', 'kepala_yayasan')
            ->first()
            ->toArray();
        $rankingKY = $topsisKY['ranking'];

        $bobotKS = [];
        $bobot = 10;
        foreach ($rankingKS as $key => $value) {
            $bobotKS[$key] = $bobot;
            $bobot--;
        }

        $bobotKY = [];
        $bobot = 10;
        foreach ($rankingKY as $key => $value) {
            $bobotKY[$key] = $bobot;
            $bobot--;
        }

        // inisialisasi nilai
        $result = [];
        foreach ($listGuru as $value) {
            $result[$value['user']['name']] = 0;
        }

        // bandingkan tiap nama kepala sekolah dan kepala yayasan
        for ($i = 0; $i < count($listGuru); $i++) {
            for ($j = $i; $j < count($listGuru); $j++) {
                $jumlah1 = 0;
                $jumlah2 = 0;

                $name1 = $listGuru[$i]['user']['name'];
                $name2 = $listGuru[$j]['user']['name'];

                $jumlah1 = $bobotKS[$name1] + $bobotKY[$name1];
                $jumlah2 = $bobotKS[$name2] + $bobotKY[$name2];

                if ($jumlah1 > $jumlah2) {
                    $point = $bobotKS[$name1] === $bobotKY[$name1] ? 1 : 0.5;
                    $result[$name1] += $point;
                } else {
                    $point = $bobotKY[$name2] === $bobotKY[$name2] ? 1 : 0.5;
                    $result[$name2] += $point;
                }
            }
        }

        // sort
        asort($result);

        return $result;
    }
}
