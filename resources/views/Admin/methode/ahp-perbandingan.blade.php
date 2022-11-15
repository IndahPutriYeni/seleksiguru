@extends('Admin.layout')

@section('title', 'AHP Perbandingan - Kepala Sekolah')

@section('content')
  <div class="flex flex-col m-10 bg-gray-100">
    <table class="table text-center border-collapse">
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
          <td>{{ $perbandingan['jumlah_eigen']['pengalaman'] }}</td>
          <td>{{ $perbandingan['rata_eigen']['pengalaman'] }}</td>
        </tr>
        <tr>
          <th>Tahfiz</th>
          <td>{{ $kriteria['tahfiz_pengalaman'] }}</td>
          <td>{{ $kriteria['tahfiz_tahfiz'] }}</td>
          <td>{{ $kriteria['tahfiz_pendidikan'] }}</td>
          <td>{{ $kriteria['tahfiz_kepribadian'] }}</td>
          <td>{{ $kriteria['tahfiz_mengajar'] }}</td>
          <td>{{ $perbandingan['jumlah_eigen']['tahfiz'] }}</td>
          <td>{{ $perbandingan['rata_eigen']['tahfiz'] }}</td>
        </tr>
        <tr>
          <th>Pendidikan</th>
          <td>{{ $kriteria['pendidikan_pengalaman'] }}</td>
          <td>{{ $kriteria['pendidikan_tahfiz'] }}</td>
          <td>{{ $kriteria['pendidikan_pendidikan'] }}</td>
          <td>{{ $kriteria['pendidikan_kepribadian'] }}</td>
          <td>{{ $kriteria['pendidikan_mengajar'] }}</td>
          <td>{{ $perbandingan['jumlah_eigen']['pendidikan'] }}</td>
          <td>{{ $perbandingan['rata_eigen']['pendidikan'] }}</td>
        </tr>
        <tr>
          <th>Kepribadian</th>
          <td>{{ $kriteria['kepribadian_pengalaman'] }}</td>
          <td>{{ $kriteria['kepribadian_tahfiz'] }}</td>
          <td>{{ $kriteria['kepribadian_pendidikan'] }}</td>
          <td>{{ $kriteria['kepribadian_kepribadian'] }}</td>
          <td>{{ $kriteria['kepribadian_mengajar'] }}</td>
          <td>{{ $perbandingan['jumlah_eigen']['kepribadian'] }}</td>
          <td>{{ $perbandingan['rata_eigen']['kepribadian'] }}</td>
        </tr>
        <tr>
          <th>Mengajar</th>
          <td>{{ $kriteria['mengajar_pengalaman'] }}</td>
          <td>{{ $kriteria['mengajar_tahfiz'] }}</td>
          <td>{{ $kriteria['mengajar_pendidikan'] }}</td>
          <td>{{ $kriteria['mengajar_kepribadian'] }}</td>
          <td>{{ $kriteria['mengajar_mengajar'] }}</td>
          <td>{{ $perbandingan['jumlah_eigen']['mengajar'] }}</td>
          <td>{{ $perbandingan['rata_eigen']['mengajar'] }}</td>
        </tr>
        <tr>
          <th>Jumlah</th>
          <td>{{ $perbandingan['jumlah_kriteria']['pengalaman'] }}</td>
          <td>{{ $perbandingan['jumlah_kriteria']['tahfiz'] }}</td>
          <td>{{ $perbandingan['jumlah_kriteria']['pendidikan'] }}</td>
          <td>{{ $perbandingan['jumlah_kriteria']['kepribadian'] }}</td>
          <td>{{ $perbandingan['jumlah_kriteria']['mengajar'] }}</td>
        </tr>
      </tbody>
    </table>

    <div class="flex flex-col mt-5">
      <span>Lambda Max = {{ $perbandingan['lambda_max'] }}</span>
      <span>CI = {{ $perbandingan['ci'] }}</span>
      <span>CR = {{ $perbandingan['cr'] }} {{ $perbandingan['cr'] > 1 ? 'TIDAK KONSISTEN' : 'KONSISTEN' }}</span>
    </div>
  </div>
@endsection
