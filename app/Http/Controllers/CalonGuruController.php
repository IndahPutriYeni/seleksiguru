<?php

namespace App\Http\Controllers;

use App\Models\CalonGuru;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\SuratMenyurat;
use Illuminate\Support\Facades\Hash;

class CalonGuruController extends Controller
{
    //
    public function profile()
    {
        $dataGuru = CalonGuru::find(auth()->user()->id);
        $alertdata = SuratMenyurat::where('user_id', auth()->user()->id)
            ->get()
            ->pluck('image', 'type')
            ->toArray();

        return view('calonGuru.profile', compact('dataGuru'));
    }


    public function editProfile(Request $request)
    {
        // \dd($request);
        $validate = $request->validate([
            'nik' => 'required',
            'no_kk' => 'required',
            'tanggal_lahir' => 'date',
            'no_hp' => 'nullable',
            'foto_profile' => 'image'
        ]);
        $dataUser = User::find(auth()->user()->id);

        $dataUser->email = $request->email;
        $dataUser->name = $request->name;
        if ($request->password) {
            $validate = $request->validate([
                'current_password' => 'current_password',
                'password' => 'min:8',
            ]);
            if ($validate) {
                $dataUser->password = Hash::make($request->password);
            }
        }
        $dataUser->save();

        $dataGuru = CalonGuru::find(auth()->user()->id);
        $dataGuru->nik = $request->nik;
        $dataGuru->no_kk = $request->no_kk;
        $dataGuru->alamat = $request->alamat;
        $dataGuru->tempat_lahir = $request->tempat_lahir;
        $dataGuru->tanggal_lahir = $request->tanggal_lahir;
        $dataGuru->tamatan = $request->tamatan;
        $dataGuru->instansi = $request->instansi;
        $dataGuru->no_hp = $request->no_hp;


        if ($request->hasFile('foto_profile')) {
            $imageName = 'userID-' . auth()->user()->id . '-' . time() . '.' . $request->foto_profile->extension();
            $request->foto_profile->move(public_path('images'), $imageName);

            $dataGuru->foto_profile = 'images/' . $imageName;
        }
        // $surat = SuratMenyurat::find(auth()->user()->user_id);
        // $surat->type = $request->type;
        // if ($surat == null) {

        //     return redirect(route('profile'))->withSuccess('Berhasil Menyimpan Data Anda, hasil ');
        // } else {

        // }

        $dataGuru->save();
        return redirect(route('profile'))->withSuccess('Berhasil Menyimpan Data Anda ');
    }

    public function suratSurat()
    {
        $surat = SuratMenyurat::where('user_id', auth()->user()->id)
            ->get()
            ->pluck('image', 'type')
            ->toArray();

        return view('calonGuru.inputsurat', compact('surat'));
    }
    public function alertdata()
    {
        $surat = SuratMenyurat::where('user_id', auth()->user()->id)
            ->get()
            ->pluck('image', 'type')
            ->toArray();
        if ($surat->isEmpty()) {
            $message = 'Silahkan Isi data lengkap';
            return view('calonGuru.profile', compact('message'));
        }
    }

    public function uploadSurat(Request $request)
    {
        $request->validate([
            'lamaran' => 'required|image',
            'cv' => 'required|image',
            'ktp' => 'required|image',
            'ijazah' => 'required|image',
            'nilai' => 'required|image',
            'photo' => 'required|image',
            'pengalaman_kerja' => 'required|image',
            'sertifikat_pendukung' => 'required|image',
        ]);

        $userId = auth()->user()->id;
        $path = 'images/';
        $imageName = 'userID-' . $userId . '-Lamaran.' . $request->lamaran->extension();
        $lamaranImage = $request->lamaran->move(public_path('images'), $imageName);
        SuratMenyurat::updateOrCreate(['user_id' => $userId, 'type' => 'lamaran'], ['image' => $path . $imageName]);

        $imageName = 'userID-' . $userId . '-CV.' . $request->cv->extension();
        $cvImage = $request->cv->move(public_path('images'), $imageName);
        SuratMenyurat::updateOrCreate(['user_id' => $userId, 'type' => 'cv'], ['image' => $path . $imageName]);

        $imageName = 'userID-' . $userId . '-KTP.' . $request->ktp->extension();
        $ktpImage = $request->ktp->move(public_path('images'), $imageName);
        SuratMenyurat::updateOrCreate(['user_id' => $userId, 'type' => 'ktp'], ['image' => $path . $imageName]);

        $imageName = 'userID-' . $userId . '-Ijazah.' . $request->ijazah->extension();
        $ijazahImage = $request->ijazah->move(public_path('images'), $imageName);
        SuratMenyurat::updateOrCreate(['user_id' => $userId, 'type' => 'ijazah'], ['image' => $path . $imageName]);

        $imageName = 'userID-' . $userId . '-Nilai.' . $request->nilai->extension();
        $nilaiImage = $request->nilai->move(public_path('images'), $imageName);
        SuratMenyurat::updateOrCreate(['user_id' => $userId, 'type' => 'nilai'], ['image' => $path . $imageName]);

        $imageName = 'userID-' . $userId . '-Photo.' . $request->photo->extension();
        $photoImage = $request->photo->move(public_path('images'), $imageName);
        SuratMenyurat::updateOrCreate(['user_id' => $userId, 'type' => 'photo'], ['image' => $path . $imageName]);

        $imageName = 'userID-' . $userId . '-PengalamanKerja.' . $request->pengalaman_kerja->extension();
        $pengalamanKerjaImage = $request->pengalaman_kerja->move(public_path('images'), $imageName);
        SuratMenyurat::updateOrCreate(['user_id' => $userId, 'type' => 'pengalaman_kerja'], ['image' => $path . $imageName]);

        $imageName = 'userID-' . $userId . '-SertifikatPendukung.' . $request->sertifikat_pendukung->extension();
        $sertifikatPendukungImage = $request->sertifikat_pendukung->move(public_path('images'), $imageName);
        SuratMenyurat::updateOrCreate(['user_id' => $userId, 'type' => 'sertifikat_pendukung'], ['image' => $path . $imageName]);

        return redirect(route('surat'))->withSuccess('Sukses upload surat menyurat anda');
    }

    public function profileSekolah()
    {
        return view("calonGuru.profile-sekolah");
    }
}
