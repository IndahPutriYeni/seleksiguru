@extends('Admin.layout')

@section('title', 'TOPSIS - Kepala Sekolah')

@section('content')
  <style>
    table,
    th,
    td {
      border: 1px solid;
    }
  </style>

  <div class="flex flex-col gap-10 my-10">
    <div class="flex flex-col gap-5">
      <span class="text-lg font-bold">Ternomalisasi</span>

      <table class="table">
        <thead>
          <tr>
            <th>Nama</th>
            <th>Pengalaman</th>
            <th>Tahfiz</th>
            <th>Pendidikan</th>
            <th>Kepribadian</th>
            <th>Mengajar</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($result['ternomalisasi'] as $key => $item)
            <tr>
              <td>{{ $key }}</td>
              <td>{{ $item['Pengalaman'] }}</td>
              <td>{{ $item['Tahfiz'] }}</td>
              <td>{{ $item['Pendidikan'] }}</td>
              <td>{{ $item['Kepribadian'] }}</td>
              <td>{{ $item['Mengajar'] }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>

    <div class="flex flex-col gap-5">
      <span class="text-lg font-bold">Ternomalisasi Bobot</span>

      <table class="table">
        <thead>
          <tr>
            <th>Nama</th>
            <th>Pengalaman</th>
            <th>Tahfiz</th>
            <th>Pendidikan</th>
            <th>Kepribadian</th>
            <th>Mengajar</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($result['ternomalisasi_bobot'] as $key => $item)
            <tr>
              <td>{{ $key }}</td>
              <td>{{ $item['Pengalaman'] }}</td>
              <td>{{ $item['Tahfiz'] }}</td>
              <td>{{ $item['Pendidikan'] }}</td>
              <td>{{ $item['Kepribadian'] }}</td>
              <td>{{ $item['Mengajar'] }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>

    <div class="flex flex-col gap-5">
      <span class="text-lg font-bold">Min Max</span>

      <table class="table">
        <thead>
          <tr>
            <th></th>
            <th>Pengalaman</th>
            <th>Tahfiz</th>
            <th>Pendidikan</th>
            <th>Kepribadian</th>
            <th>Mengajar</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Min</td>
            <td>{{ $result['min']['pengalaman'] }}</td>
            <td>{{ $result['min']['tahfiz'] }}</td>
            <td>{{ $result['min']['pendidikan'] }}</td>
            <td>{{ $result['min']['kepribadian'] }}</td>
            <td>{{ $result['min']['mengajar'] }}</td>
          </tr>

          <tr>
            <td>Max</td>
            <td>{{ $result['max']['pengalaman'] }}</td>
            <td>{{ $result['max']['tahfiz'] }}</td>
            <td>{{ $result['max']['pendidikan'] }}</td>
            <td>{{ $result['max']['kepribadian'] }}</td>
            <td>{{ $result['max']['mengajar'] }}</td>
          </tr>
        </tbody>
      </table>
    </div>

    <div class="flex flex-col gap-5">
      <span class="text-lg font-bold">Solusi Ideal</span>

      <table class="table">
        <thead>
          <tr>
            <th>Nama</th>
            <th>D+</th>
            <th>D-</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($result['solusi_ideal_plus'] as $key => $item)
            <tr>
              <td>{{ $key }}</td>
              <td>{{ $item }}</td>
              <td>{{ $result['solusi_ideal_min'][$key] }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>

    <div class="flex flex-col gap-5">
      <span class="text-lg font-bold">Preferensi</span>

      <table class="table">
        <thead>
          <tr>
            <th>Nama</th>
            <th>Nilai</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($result['preferensi'] as $key => $item)
            <tr>
              <td>{{ $key }}</td>
              <td>{{ $item }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>

    <div class="flex flex-col gap-5">
      <span class="text-lg font-bold">Ranking</span>

      <table class="table">
        <thead>
          <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Nilai</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($result['ranking'] as $key => $item)
            <tr>
              <td>{{ $loop->index + 1 }}</td>
              <td>{{ $key }}</td>
              <td>{{ $item }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection
