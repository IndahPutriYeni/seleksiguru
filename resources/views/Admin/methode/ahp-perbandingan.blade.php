@extends('Admin.layout')

@section('title', 'AHP Perbandingan - Kepala Sekolah')

@section('content')
  <div class="flex flex-col p-4 m-10 bg-gray-50">
    <table class="table p-4 text-center border-collapse">
      <thead>
        <tr class="border-b">
          <th class="w-64 text-sky-800">Kriteria</th>
          <th class="w-64 text-sky-800">Pengalaman</th>
          <th class="w-64 text-sky-800">Tahfiz</th>
          <th class="w-64 text-sky-800">Pendidikan</th>
          <th class="w-64 text-sky-800">Kepribadian</th>
          <th class="w-64 text-sky-800">Mengajar</th>
          <th class="w-64 text-sky-800">Jumlah</th>
          <th class="w-64 text-sky-800">Rata-rata</th>
        </tr class="border-b">
      </thead>
      <tbody>
        <tr class="border-b">
          <th class="py-2 text-left border-r text-sky-800">Pengalaman</th>
          <td class="border-r">{{ round($kriteria['pengalaman_pengalaman'], 2) }}</td>
          <td class="border-r">{{ round($kriteria['pengalaman_tahfiz'], 2) }}</td>
          <td class="border-r">{{ round($kriteria['pengalaman_pendidikan'], 2) }}</td>
          <td class="border-r">{{ round($kriteria['pengalaman_kepribadian'], 2) }}</td>
          <td class="border-r">{{ round($kriteria['pengalaman_mengajar'], 2) }}</td>
          <td class="border-r">{{ round($perbandingan['jumlah_eigen']['pengalaman'], 2) }}</td>
          <td class="border-r">{{ round($perbandingan['rata_eigen']['pengalaman'], 2) }}</td>
        </tr class="border-b">
        <tr class="border-b">
          <th class="py-2 text-left border-r text-sky-800">Tahfiz</th>
          <td class="border-r">{{ round($kriteria['tahfiz_pengalaman'], 2) }}</td>
          <td class="border-r">{{ round($kriteria['tahfiz_tahfiz'], 2) }}</td>
          <td class="border-r">{{ round($kriteria['tahfiz_pendidikan'], 2) }}</td>
          <td class="border-r">{{ round($kriteria['tahfiz_kepribadian'], 2) }}</td>
          <td class="border-r">{{ round($kriteria['tahfiz_mengajar'], 2) }}</td>
          <td class="border-r">{{ round($perbandingan['jumlah_eigen']['tahfiz'], 2) }}</td>
          <td class="border-r">{{ round($perbandingan['rata_eigen']['tahfiz'], 2) }}</td>
        </tr class="border-b">
        <tr class="border-b">
          <th class="py-2 text-left border-r text-sky-800">Pendidikan</th>
          <td class="border-r">{{ round($kriteria['pendidikan_pengalaman'], 2) }}</td>
          <td class="border-r">{{ round($kriteria['pendidikan_tahfiz'], 2) }}</td>
          <td class="border-r">{{ round($kriteria['pendidikan_pendidikan'], 2) }}</td>
          <td class="border-r">{{ round($kriteria['pendidikan_kepribadian'], 2) }}</td>
          <td class="border-r">{{ round($kriteria['pendidikan_mengajar'], 2) }}</td>
          <td class="border-r">{{ round($perbandingan['jumlah_eigen']['pendidikan'], 2) }}</td>
          <td class="border-r">{{ round($perbandingan['rata_eigen']['pendidikan'], 2) }}</td>
        </tr class="border-b">
        <tr class="border-b">
          <th class="py-2 text-left border-r text-sky-800">Kepribadian</th>
          <td class="border-r">{{ round($kriteria['kepribadian_pengalaman'], 2) }}</td>
          <td class="border-r">{{ round($kriteria['kepribadian_tahfiz'], 2) }}</td>
          <td class="border-r">{{ round($kriteria['kepribadian_pendidikan'], 2) }}</td>
          <td class="border-r">{{ round($kriteria['kepribadian_kepribadian'], 2) }}</td>
          <td class="border-r">{{ round($kriteria['kepribadian_mengajar'], 2) }}</td>
          <td class="border-r">{{ round($perbandingan['jumlah_eigen']['kepribadian'], 2) }}</td>
          <td class="border-r">{{ round($perbandingan['rata_eigen']['kepribadian'], 2) }}</td>
        </tr class="border-b">
        <tr class="border-b">
          <th class="py-2 text-left border-r text-sky-800">Mengajar</th>
          <td class="border-r">{{ $kriteria['mengajar_pengalaman'] }}</td>
          <td class="border-r">{{ $kriteria['mengajar_tahfiz'] }}</td>
          <td class="border-r">{{ $kriteria['mengajar_pendidikan'] }}</td>
          <td class="border-r">{{ $kriteria['mengajar_kepribadian'] }}</td>
          <td class="border-r">{{ $kriteria['mengajar_mengajar'] }}</td>
          <td class="border-r">{{ $perbandingan['jumlah_eigen']['mengajar'] }}</td>
          <td class="border-r">{{ $perbandingan['rata_eigen']['mengajar'] }}</td>
        </tr class="border-b">
        <tr class="border-b">
          <th class="py-2 text-left border-r text-sky-800">Jumlah</th>
          <td class="border-r">{{ $perbandingan['jumlah_kriteria']['pengalaman'] }}</td>
          <td class="border-r">{{ $perbandingan['jumlah_kriteria']['tahfiz'] }}</td>
          <td class="border-r">{{ $perbandingan['jumlah_kriteria']['pendidikan'] }}</td>
          <td class="border-r">{{ $perbandingan['jumlah_kriteria']['kepribadian'] }}</td>
          <td class="border-r">{{ $perbandingan['jumlah_kriteria']['mengajar'] }}</td>
        </tr class="border-b">
      </tbody>
    </table>

    <div class="flex flex-col mt-5">
      <div><span class="font-bold">Lambda Max</span><span> = {{ $perbandingan['lambda_max'] }}</span></div>
      <div><span class="font-bold">CI</span><span> = {{ $perbandingan['ci'] }}</span></div>
      <div><span class="font-bold">CR</span><span> = {{ $perbandingan['cr'] }}
          {{ $perbandingan['cr'] > 1 ? 'TIDAK KONSISTEN' : 'KONSISTEN' }}</span></div>
    </div>
  </div>
@endsection
