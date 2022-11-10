@extends('calonGuru.layout')
@section('title', 'Profile Calon Guru')
@section('content')
  <div class="block px-32 py-10">
    <span class="text-slate-500">Home -> </span><span class="text-indigo-500">Profile</span>
    <div class="block w-full p-16 border border-gray-300 rounded-md">
      <div class="flex">
        <img src="{{ asset('images/profile.png') }}" class="w-48 h-48" />
        <div class="block ml-32 w-full">
          <div class="flex justify-between w-full">
            <button class="border border-indigo-500 text-indigo-500 hover:bg-indigo-200 rounded-md p-4"
              onclick="gantiFoto">
              Ganti
              Foto</button>
            <a href="{{ route('editProfile') }}" class="p-4 bg-indigo-500 hover:bg-indigo-600 text-white rounded-md">Edit
              Profile</a>
          </div>
          <div class="block mt-10 space-y-4">
            <span class="block font-bold text-indigo-400">Nama</span>
            <span class="font-sans text-3xl text-slate-500">{{ auth()->user()->name }}</span>
          </div>
          <div class="block mt-10 space-y-4">
            <span class="block font-bold text-indigo-400">Email</span>
            <span class="font-sans text-3xl text-slate-500">{{ auth()->user()->email }}</span>
          </div>
          <div class="block mt-10 space-y-4">
            <span class="block font-bold text-indigo-400">NIK</span>
            @if ($dataGuru->nik)
              <span class="font-sans text-3xl text-slate-500">{{ $dataGuru->nik ?: '' }}</span>
            @else
              <span class="text-2xl text-slate-300">Anda belum mengisi NIK</span>
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
