@extends('Admin.layout')

@section('title', 'TOPSIS - Kepala Sekolah')

@section('content')
<div class="flex flex-col gap-10 p-5 bg-white rounded-xl">
  {{-- <div class="flex flex-col gap-5 p-4 bg-white">
      <span class="text-lg font-bold">Ternomalisasi</span>

      <table class="table text-center">
        <thead>
          <tr>
            <th class="px-2 py-4 border">Nama</th>
            <th class="px-2 py-4 border">Pengalaman</th>
            <th class="px-2 py-4 border">Tahfiz</th>
            <th class="px-2 py-4 border">Pendidikan</th>
            <th class="px-2 py-4 border">Kepribadian</th>
            <th class="px-2 py-4 border">Mengajar</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($result['ternomalisasi'] as $key => $item)
            <tr>
              <td class="px-2 py-4 border">{{ $key }}</td>
  <td class="px-2 py-4 border">{{ $item['Pengalaman'] }}</td>
  <td class="px-2 py-4 border">{{ $item['Tahfiz'] }}</td>
  <td class="px-2 py-4 border">{{ $item['Pendidikan'] }}</td>
  <td class="px-2 py-4 border">{{ $item['Kepribadian'] }}</td>
  <td class="px-2 py-4 border">{{ $item['Mengajar'] }}</td>
  </tr>
  @endforeach
  </tbody>
  </table>
</div>

<div class="flex flex-col gap-5">
  <span class="text-lg font-bold">Ternomalisasi Bobot</span>

  <table class="table text-center">
    <thead>
      <tr>
        <th class="px-2 py-4 border">Nama</th>
        <th class="px-2 py-4 border">Pengalaman</th>
        <th class="px-2 py-4 border">Tahfiz</th>
        <th class="px-2 py-4 border">Pendidikan</th>
        <th class="px-2 py-4 border">Kepribadian</th>
        <th class="px-2 py-4 border">Mengajar</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($result['ternomalisasi_bobot'] as $key => $item)
      <tr>
        <td class="px-2 py-4 border">{{ $key }}</td>
        <td class="px-2 py-4 border">{{ $item['Pengalaman'] }}</td>
        <td class="px-2 py-4 border">{{ $item['Tahfiz'] }}</td>
        <td class="px-2 py-4 border">{{ $item['Pendidikan'] }}</td>
        <td class="px-2 py-4 border">{{ $item['Kepribadian'] }}</td>
        <td class="px-2 py-4 border">{{ $item['Mengajar'] }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

<div class="flex flex-col gap-5">
  <span class="text-lg font-bold">Min Max</span>

  <table class="table text-center">
    <thead>
      <tr>
        <th class="px-2 py-4 border"></th>
        <th class="px-2 py-4 border">Pengalaman</th>
        <th class="px-2 py-4 border">Tahfiz</th>
        <th class="px-2 py-4 border">Pendidikan</th>
        <th class="px-2 py-4 border">Kepribadian</th>
        <th class="px-2 py-4 border">Mengajar</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="px-2 py-4 border">Min</td>
        <td class="px-2 py-4 border">{{ $result['min']['pengalaman'] }}</td>
        <td class="px-2 py-4 border">{{ $result['min']['tahfiz'] }}</td>
        <td class="px-2 py-4 border">{{ $result['min']['pendidikan'] }}</td>
        <td class="px-2 py-4 border">{{ $result['min']['kepribadian'] }}</td>
        <td class="px-2 py-4 border">{{ $result['min']['mengajar'] }}</td>
      </tr>

      <tr>
        <td class="px-2 py-4 border">Max</td>
        <td class="px-2 py-4 border">{{ $result['max']['pengalaman'] }}</td>
        <td class="px-2 py-4 border">{{ $result['max']['tahfiz'] }}</td>
        <td class="px-2 py-4 border">{{ $result['max']['pendidikan'] }}</td>
        <td class="px-2 py-4 border">{{ $result['max']['kepribadian'] }}</td>
        <td class="px-2 py-4 border">{{ $result['max']['mengajar'] }}</td>
      </tr>
    </tbody>
  </table>
</div>

<div class="flex flex-col gap-5">
  <span class="text-lg font-bold">Solusi Ideal</span>

  <table class="table text-center">
    <thead>
      <tr>
        <th class="px-2 py-4 border">Nama</th>
        <th class="px-2 py-4 border">D+</th>
        <th class="px-2 py-4 border">D-</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($result['solusi_ideal_plus'] as $key => $item)
      <tr>
        <td class="px-2 py-4 border">{{ $key }}</td>
        <td class="px-2 py-4 border">{{ $item }}</td>
        <td class="px-2 py-4 border">{{ $result['solusi_ideal_min'][$key] }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

<div class="flex flex-col gap-5">
  <span class="text-lg font-bold">Preferensi</span>

  <table class="table text-center">
    <thead>
      <tr>
        <th class="px-2 py-4 border">Nama</th>
        <th class="px-2 py-4 border">Nilai</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($result['preferensi'] as $key => $item)
      <tr>
        <td class="px-2 py-4 border">{{ $key }}</td>
        <td class="px-2 py-4 border">{{ $item }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div> --}}

<div class="flex flex-col gap-5">
  <span class="text-lg font-bold">Ranking</span>

  <table class="table text-center">
    <thead>
      <tr>
        <th class="px-2 py-4 border">Ranking</th>
        <th class="px-2 py-4 border">Nama</th>
        <th class="px-2 py-4 border">Nilai</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($result['ranking'] as $key => $item)
      <tr>
        <td class="px-2 py-4 border">{{ $loop->index + 1 }}</td>
        <td class="px-2 py-4 border">{{ $key }}</td>
        <td class="px-2 py-4 border">{{ floor($item * 100) / 100 }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
</div>
@endsection