<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Kriteria;
use App\Models\CalonGuru;
use Illuminate\Http\Request;
use App\Models\NilaiAlternatif;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class AdminController extends Controller
{
    //
    public function index()
    {
        $countUser = User::where('jabatan', 'kepala_sekolah')->orWhere('jabatan', 'kepala_yayasan')->count();
        $countGuru = CalonGuru::all()->count();
        $dataGuru = CalonGuru::paginate(5);
        $countKriteria = Kriteria::all()->count();
        $countNilai = NilaiAlternatif::distinct('calon_guru_id')->count();
        return view('Admin.index', compact('countUser', 'countGuru', 'countKriteria', 'countNilai', 'dataGuru'));
    }

    public function user()
    {
        $user = User::where('isAdmin', 1)
            ->paginate(5);
        return view('Admin.user.index', compact('user'));
    }


    public function addUser()
    {
        return view('Admin.user.add');
    }

    public function addUserPost(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => ['required', Password::min(8)],
            'jabatan' => 'required',
        ]);
        if($request->jabatan !== 'calon_guru'){
            $isAdmin = 1;
        }else{
            $isAdmin = 0;
        }
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make($request->password),
            'jabatan' => $request->jabatan,
            'isAdmin' => $isAdmin,
        ]);
        if(!$isAdmin){
            CalonGuru::create([
                'id' => $user->id
            ]);
            return redirect(route('admin.guru.index'))->withSuccess('Berhasil Tambah Calon Guru');
        }
        return redirect(route('admin.user'))->withSuccess('Berhasil Tambah User Admin');
    }

    public function editUser(Request $request)
    {
        $user = User::find($request->id);
        return view('Admin.user.edit', compact('user'));
    }

    public function putUser(Request $request)
    {
        $user = User::find($request->id);
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => ['nullable', Password::min(8)],
            'jabatan' => 'required',
        ]);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->jabatan = $request->jabatan;
        $user->save();
        return redirect(route('admin.user'))->withSuccess('Berhasil Ubah User');
    }

    public function deleteUser(Request $request)
    {
        $user = User::find($request->id);
        if($user){
            $nilaiKriteria = NilaiAlternatif::where('penilai_id', $id)->get();
            if($nilaiKriteria){
                return redirect(route('admin.user'))->withErrors('delete', 'Tidak bisa hapus user ini karena sudah memberi penilaian');
            }
        }
    }

}
