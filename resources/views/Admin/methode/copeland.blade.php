@extends('Admin.layout')

@section('title', 'COPELAND SCORE')

@section('content')
  <div class="flex flex-col gap-10 p-6 my-10 bg-white">
    <div class="flex flex-col gap-5">
      <span class="text-lg font-bold">Copeland Score</span>

      <table class="table text-center">
        <thead>
          <tr>
            <th class="px-2 py-4 border">Ranking</th>
            <th class="px-2 py-4 border">Nama</th>
            <th class="px-2 py-4 border">Nilai</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($copeland as $value)
            <tr>
              <td class="px-2 py-4 border">{{ $value['ranking'] }}</td>
              <td class="px-2 py-4 border">{{ $value['name'] }}</td>
              <td class="px-2 py-4 border">{{ $value['bobot'] }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection
