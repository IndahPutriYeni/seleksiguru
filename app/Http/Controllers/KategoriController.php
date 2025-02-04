<?php

namespace App\Http\Controllers;

use App\Models\Kriteria;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    //
    public function listKategori()
    {
        $user = auth()->user();
        $kriteria = Kriteria::where('tipe', $user->jabatan)
            ->get();

        return view('Admin.kriteria.index', compact('kriteria'));
    }

    public function addKategori()
    {
        return view('Admin.kriteria.add');
    }

    public function postKategori(Request $request)
    {
        $user = auth()->user();
        $validated = $request->validate([
            'name' => 'required',
            'kode' => 'required',
            'atribut' => 'required'
        ]);
        Kriteria::create([
            'name' => $request->name,
            'kode' => $request->kode,
            'atribut' => $request->atribut,
            'tipe' => $user->jabatan,
            'bobot' => 0,
        ]);
        return redirect()->route('admin.kategori')->withSuccess('Berhasil Tambah Kategori');
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
            'atribut' => 'required',
        ]);


        $kategori = Kriteria::find($request->id);
        $kategori->name = $request->name;
        $kategori->kode = $request->kode;
        $kategori->atribut = $request->atribut;
        //$kategori->tipe = $request->jabatan;
        $kategori->save();
        return redirect()->route('admin.kategori')->withSuccess('Berhasil Ubah Kategori');
    }

    public function hapusKategori(Request $request)
    {
        $cat = Kriteria::find($request->id);
        $cat->delete();
        return redirect()->route('admin.kategori')->withSuccess('Berhasil Hapus Kategori');
    }
}
