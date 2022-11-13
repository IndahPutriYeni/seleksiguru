<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Kriteria;
use App\Models\CalonGuru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    //
    public function index()
    {
        $countUser = User::all()->count();
        $countGuru = CalonGuru::all()->count();
        $coutKriteria = Kriteria::all()->count();
        return view('Admin.index', compact('countUser', 'countGuru', 'countKriteria'));
    }

    public function user()
    {
        $users = User::where('jabatan', 'kepala_sekolah')
            ->orWhere('jabatan', 'kepala_yayasan')
            ->get();
        $userCount = User::where('jabatan', 'kepala_sekolah')
            ->orWhere('jabatan', 'kepala_yayasan')
            ->count();
        return view('Admin.user.index', compact('users', 'userCount'));
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

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make($request->password),
            'jabatan' => $request->jabatan,
            'isAdmin' => 1,
        ]);
        return redirect(route('admin.user'));
    }

    public function editUser($id)
    {
        $user = User::where('id', $id)->get();
        return view('Admin.user.edit', compact('user'));
    }

    public function putUser($id)
    {
        $user = User::find($id);
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => ['required', Password::min(8)],
            'jabatan' => 'required',
        ]);
        User::updateOrCreate($validated);
        return redirect(route('admin.user'));
    }

    public function deleteUser($id)
    {
        $user = User::find($id);
        if($user){
            $nilaiKriteria = NilaiKriteria::where('penilai_id', $id)->get();
            if($nilaiKriteria){
                return redirect(route('admin.user'))->withErrors('delete', 'Tidak bisa hapus user ini');
            }
        }
    }

}
