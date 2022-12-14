<?php

namespace App\Http\Controllers;

use App\Models\CalonGuru;
use App\Models\Kriteria;
use App\Models\SeleksiGuru;
use App\Models\User;
use Illuminate\Http\Request;

class SeleksiGuruController extends Controller
{
    public function listGuru(Request $request)
    {
        $dataGuru = SeleksiGuru::query()
            ->when($request->has('tahun_diterima'), function ($query) use ($request) {
                $query->where('tahun_diterima', $request->tahun_diterima);
            })
            ->paginate(5);

        return view('Admin.seleksiGuru.list', compact('dataGuru'));
    }

    public function create()
    {
        return view('Admin.seleksiGuru.edit');
    }

    public function store(Request $request)
    {
        $seleksiGuru = SeleksiGuru::create($request->all());

        if ($request->hasFile('foto_profile')) {
            $imageName = 'userID-' . auth()->user()->id . '-' . time() . '.' . $request->foto_profile->extension();
            $request->foto_profile->move(public_path('images'), $imageName);

            $seleksiGuru->foto_profile = 'images/' . $imageName;
            $seleksiGuru->save();
        }

        return redirect()->route('admin.seleksiGuru.index')->withSuccess('Berhasil tambah guru');
    }
}
