<?php

namespace App\Http\Controllers;

use App\Models\Copeland;
use App\Services\CopelandService;

class CopelandScoreController extends Controller
{
    public function index()
    {
        $result = CopelandService::process();
        // dd($result);

        // ambil bobot
        $allBobot = array_values($result);
        $allBobot = array_unique($allBobot);
        // fix index
        $allBobot = array_values($allBobot);

        foreach ($result as $key => $value) {
            $ranking = -1;
            foreach ($allBobot as $index => $bobot) {
                if ((double) $bobot === (double) $value) {
                    $ranking = $index + 1;
                    break;
                }
            }

            Copeland::updateOrCreate([
                'name' => $key,
            ], [
                'bobot' => $value,
                'ranking' => $ranking,
            ]);
        }

        $copeland = Copeland::all()
            ->toArray();

        return view('Admin.methode.copeland', compact('copeland'));
    }
}
