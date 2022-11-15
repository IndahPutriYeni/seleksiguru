<?php

namespace App\Http\Controllers;

use App\Models\Kriteria;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    //
    public function listKategori()
    {
        $kriteria = Kriteria::all();
        return view('Admin.kriteria.index', compact('kriteria'));
    }

    public function addKategori()
    {
        return view('Admin.kriteria.add');
    }

    public function postKategori(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'kode' => 'required',
            'bobot_topsis' => 'required'
        ]);
        Kriteria::create($validated);
        return redirect()->intended(route('admin.kategori'))->withSuccess('Berhasil Tambah Kategori');
    }

    public function editKategori(Request $request)
    {
        $cat = Kriteria::find($request->id);
        return view('Admin.kriteria.edit', compact('cat'));
    }

    public function putKategori(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'kode' => 'required',
            'bobot_topsis' => 'required'
        ]);

        $kategori = Kriteria::find($request->id);
        $kategori->name = $request->name;
        $kategori->kode = $request->kode;
        $kategori->bobot_topsis = $request->bobot_topsis;
        $kategori->save();
        return redirect()->intended(route('admin.kategori'))->withSuccess('Berhasil Ubah Kategori');
    }

    public function hapusKategori(Request $request)
    {
        $cat = Kategori::find($request->id);
        $cat->delete();
        return redirect()->intended(route('admin.kategori'))->withSuccess('Berhasil Hapus Kategori');
    }
}
