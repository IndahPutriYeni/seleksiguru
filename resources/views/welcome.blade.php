@extends('layout')
@section('title', 'SD IT Daafa - Aplikasi Seleksi Guru')

@section('content')
  <div class="flex items-center" id="about">
    <div class="font-semibold w-1/2">
      <h2 class="text-indigo-500 text-3xl">System Aplikasi Pendaftaran Guru</h2>
      <span class="text-slate-700">System seleksi calon guru SD IT Daafa menggunakan methode AHP, Topsis dan
        Copeland</span>
    </div>
    <img src="{{ asset('images/ssytem.png') }}" class="w-1/2" />
  </div>
  <div class="flex mt-32 items-center" id="sekolah">
    <div class="w-1/2">
      <img src="{{ asset('images/school.png') }}" />
    </div>
    <div class="text-center w-1/2">
      <h3 class="text-2xl font-medium text-indigo-500">SD IT Daafa</h3>
      <span class="text-slate-700 font-medium">Adalah sekolah yang</span>
    </div>
  </div>
@endsection
