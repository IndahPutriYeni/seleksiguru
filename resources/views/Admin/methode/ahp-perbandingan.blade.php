@extends('Admin.layout')

@section('title', 'AHP Perbandingan - Kepala Sekolah')

@section('content')
  <div class="flex flex-col m-10 bg-gray-100">
    <table class="table text-center">
      <thead>
        <tr>
          <th>Kriteria</th>
          <th>Pengalaman</th>
          <th>Tahfiz</th>
          <th>Pendidikan</th>
          <th>Kepribadian</th>
          <th>Mengajar</th>
          <th>Jumlah</th>
          <th>Rata-rata</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th>Pengalaman</th>
          <td>{{ $kriteria['pengalaman_pengalaman'] }}</td>
          <td>{{ $kriteria['pengalaman_tahfiz'] }}</td>
          <td>{{ $kriteria['pengalaman_pendidikan'] }}</td>
          <td>{{ $kriteria['pengalaman_kepribadian'] }}</td>
          <td>{{ $kriteria['pengalaman_mengajar'] }}</td>
          <td>{{ $eigen['pengalaman'] }}</td>
          <td>{{ $rataEigen['pengalaman'] }}</td>
        </tr>
        <tr>
          <th>Tahfiz</th>
          <td>{{ $kriteria['tahfiz_pengalaman'] }}</td>
          <td>{{ $kriteria['tahfiz_tahfiz'] }}</td>
          <td>{{ $kriteria['tahfiz_pendidikan'] }}</td>
          <td>{{ $kriteria['tahfiz_kepribadian'] }}</td>
          <td>{{ $kriteria['tahfiz_mengajar'] }}</td>
          <td>{{ $eigen['tahfiz'] }}</td>
          <td>{{ $rataEigen['tahfiz'] }}</td>
        </tr>
        <tr>
          <th>Pendidikan</th>
          <td>{{ $kriteria['pendidikan_pengalaman'] }}</td>
          <td>{{ $kriteria['pendidikan_tahfiz'] }}</td>
          <td>{{ $kriteria['pendidikan_pendidikan'] }}</td>
          <td>{{ $kriteria['pendidikan_kepribadian'] }}</td>
          <td>{{ $kriteria['pendidikan_mengajar'] }}</td>
          <td>{{ $eigen['pendidikan'] }}</td>
          <td>{{ $rataEigen['pendidikan'] }}</td>
        </tr>
        <tr>
          <th>Kepribadian</th>
          <td>{{ $kriteria['kepribadian_pengalaman'] }}</td>
          <td>{{ $kriteria['kepribadian_tahfiz'] }}</td>
          <td>{{ $kriteria['kepribadian_pendidikan'] }}</td>
          <td>{{ $kriteria['kepribadian_kepribadian'] }}</td>
          <td>{{ $kriteria['kepribadian_mengajar'] }}</td>
          <td>{{ $eigen['kepribadian'] }}</td>
          <td>{{ $rataEigen['kepribadian'] }}</td>
        </tr>
        <tr>
          <th>Mengajar</th>
          <td>{{ $kriteria['mengajar_pengalaman'] }}</td>
          <td>{{ $kriteria['mengajar_tahfiz'] }}</td>
          <td>{{ $kriteria['mengajar_pendidikan'] }}</td>
          <td>{{ $kriteria['mengajar_kepribadian'] }}</td>
          <td>{{ $kriteria['mengajar_mengajar'] }}</td>
          <td>{{ $eigen['mengajar'] }}</td>
          <td>{{ $rataEigen['mengajar'] }}</td>
        </tr>
        <tr>
          <th>Jumlah</th>
          <td>{{ $jumlah['pengalaman'] }}</td>
          <td>{{ $jumlah['tahfiz'] }}</td>
          <td>{{ $jumlah['pendidikan'] }}</td>
          <td>{{ $jumlah['kepribadian'] }}</td>
          <td>{{ $jumlah['mengajar'] }}</td>
        </tr>
      </tbody>
    </table>

    <div class="flex flex-col mt-5">
      <span>Lambda Max = {{ $lambdaMax }}</span>
      <span>CI = {{ $ci }}</span>
      <span>CR = {{ $cr }}</span>
    </div>
  </div>
@endsection
