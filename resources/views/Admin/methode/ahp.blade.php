@extends('Admin.layout')

@section('content')
<div class="flex flex-col bg-gray-100 m-10">
    <form action="{{route('admin.ahp.process')}}" method="POST">
        @csrf
        @foreach($kriteria as $key => $value)
        <div class="flex flex-row justify-center items-center gap-5 space-y-3">
            <span class="w-20">{{$value[0]}}</span>
            <select name="{{$key}}">
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
            <span class="w-20">{{$value[1]}}</span>
        </div>
        @endforeach

        <div class="flex justify-center items-center">
            <button type="submit" class="mt-5 bg-green-400 text-white p-2 rounded-md">Simpan Kriteria</button>
        </div>
    </form>
</div>
@endsection