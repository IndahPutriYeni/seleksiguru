@extends('Admin.layout')

@section('title', 'AHP - Kepala Sekolah')

@section('content')
  <div class="flex flex-col m-10 bg-gray-100">
    <form action="{{ $postUrl }}" method="POST">
      @csrf
      @foreach ($kriteria as $key => $value)
        <div class="flex flex-row items-center justify-center gap-5 space-y-3">
          <span class="w-20">{{ $value[0] }}</span>
          <select name="{{ $key }}">
            <option value="1">1 - Sama penting</option>
            <option value="2">2 - Mendekati sedikit lebih penting dari</option>
            <option value="3">3 - Sedikit lebih penting dari</option>
            <option value="4">4 - Mendekati lebih penting dari</option>
            <option value="5">5 - Lebih penting dari</option>
            <option value="6">6 - Mendekati sangat penting dari</option>
            <option value="7">7 - Sangat penting dari</option>
            <option value="8">8 - Mendekati mutlak dari</option>
            <option value="9">9 - Mutlak sangat penting dari</option>
          </select>
          <span class="w-20">{{ $value[1] }}</span>
        </div>
      @endforeach
      <div class="flex items-center justify-center">
        <button type="submit" class="p-2 mt-5 text-white bg-green-400 rounded-md">Simpan Kriteria</button>
      </div>
    </form>
  </div>
@endsection
