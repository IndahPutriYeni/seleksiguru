@extends('Admin.layout')

@section('title', 'AHP Perbandingan - Kepala Sekolah')

@section('content')
  <div class="flex flex-col m-10 bg-gray-100 p-4">
    <table class="table text-center border-collapse p-4">
      <thead>
        <tr>
          <th class="w-64">Kriteria</th>
          <th class="w-64">Pengalaman</th>
          <th class="w-64">Tahfiz</th>
          <th class="w-64">Pendidikan</th>
          <th class="w-64">Kepribadian</th>
          <th class="w-64">Mengajar</th>
          <th class="w-64">Jumlah</th>
          <th class="w-64">Rata-rata</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th class="text-left py-2">Pengalaman</th>
          <td>{{ round($kriteria['pengalaman_pengalaman'], 2) }}</td>
          <td>{{ round($kriteria['pengalaman_tahfiz'], 2) }}</td>
          <td>{{ round($kriteria['pengalaman_pendidikan'], 2) }}</td>
          <td>{{ round($kriteria['pengalaman_kepribadian'], 2) }}</td>
          <td>{{ round($kriteria['pengalaman_mengajar'], 2) }}</td>
          <td>{{ round($perbandingan['jumlah_eigen']['pengalaman'], 2) }}</td>
          <td>{{ round($perbandingan['rata_eigen']['pengalaman'], 2) }}</td>
        </tr>
        <tr>
          <th class="text-left py-2">Tahfiz</th>
          <td>{{ round($kriteria['tahfiz_pengalaman'], 2) }}</td>
          <td>{{ round($kriteria['tahfiz_tahfiz'], 2) }}</td>
          <td>{{ round($kriteria['tahfiz_pendidikan'], 2) }}</td>
          <td>{{ round($kriteria['tahfiz_kepribadian'], 2) }}</td>
          <td>{{ round($kriteria['tahfiz_mengajar'], 2) }}</td>
          <td>{{ round($perbandingan['jumlah_eigen']['tahfiz'], 2) }}</td>
          <td>{{ round($perbandingan['rata_eigen']['tahfiz'], 2) }}</td>
        </tr>
        <tr>
          <th class="text-left py-2">Pendidikan</th>
          <td>{{ round($kriteria['pendidikan_pengalaman'], 2) }}</td>
          <td>{{ round($kriteria['pendidikan_tahfiz'], 2) }}</td>
          <td>{{ round($kriteria['pendidikan_pendidikan'], 2) }}</td>
          <td>{{ round($kriteria['pendidikan_kepribadian'], 2) }}</td>
          <td>{{ round($kriteria['pendidikan_mengajar'], 2) }}</td>
          <td>{{ round($perbandingan['jumlah_eigen']['pendidikan'], 2) }}</td>
          <td>{{ round($perbandingan['rata_eigen']['pendidikan'], 2) }}</td>
        </tr>
        <tr>
          <th class="text-left py-2">Kepribadian</th>
          <td>{{ round($kriteria['kepribadian_pengalaman'], 2) }}</td>
          <td>{{ round($kriteria['kepribadian_tahfiz'], 2) }}</td>
          <td>{{ round($kriteria['kepribadian_pendidikan'], 2) }}</td>
          <td>{{ round($kriteria['kepribadian_kepribadian'], 2) }}</td>
          <td>{{ round($kriteria['kepribadian_mengajar'], 2) }}</td>
          <td>{{ round($perbandingan['jumlah_eigen']['kepribadian'], 2) }}</td>
          <td>{{ round($perbandingan['rata_eigen']['kepribadian'], 2) }}</td>
        </tr>
        <tr>
          <th class="text-left py-2">Mengajar</th>
          <td>{{ $kriteria['mengajar_pengalaman'] }}</td>
          <td>{{ $kriteria['mengajar_tahfiz'] }}</td>
          <td>{{ $kriteria['mengajar_pendidikan'] }}</td>
          <td>{{ $kriteria['mengajar_kepribadian'] }}</td>
          <td>{{ $kriteria['mengajar_mengajar'] }}</td>
          <td>{{ $perbandingan['jumlah_eigen']['mengajar'] }}</td>
          <td>{{ $perbandingan['rata_eigen']['mengajar'] }}</td>
        </tr>
        <tr>
          <th class="text-left py-2">Jumlah</th>
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
