@extends('Admin.layout')

@section('title', 'AHP Perbandingan - Kepala Sekolah')

@section('content')
<div class="flex flex-col p-5 bg-white rounded-xl">
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
        <th class="w-64 text-sky-800">Bobot</th>
      </tr class="border-b">
    </thead>
    <tbody>
      <tr class="border-b">
        <th class="py-2 text-left border-r text-sky-800">Pengalaman</th>
        <td class="border-r">{{ floor($kriteria['pengalaman_pengalaman'] *100) / 100 }}</td>
        <td class="border-r">{{ floor($kriteria['pengalaman_tahfiz'] *100) / 100 }}</td>
        <td class="border-r">{{ floor($kriteria['pengalaman_pendidikan']*100) / 100 }}</td>
        <td class="border-r">{{ floor($kriteria['pengalaman_kepribadian']*100) / 100 }}</td>
        <td class="border-r">{{ floor($kriteria['pengalaman_mengajar']*100) / 100 }}</td>
        <td class="border-r">{{ floor($perbandingan['jumlah_eigen']['pengalaman']*100) / 100 }}</td>
        <td class="border-r">{{ floor($perbandingan['rata_eigen']['pengalaman']*100) / 100 }}</td>
      </tr class="border-b">
      <tr class="border-b">
        <th class="py-2 text-left border-r text-sky-800">Tahfiz</th>
        <td class="border-r">{{ floor($kriteria['tahfiz_pengalaman']*100) / 100 }}</td>
        <td class="border-r">{{ floor($kriteria['tahfiz_tahfiz']*100) / 100 }}</td>
        <td class="border-r">{{ floor($kriteria['tahfiz_pendidikan']*100) / 100 }}</td>
        <td class="border-r">{{ floor($kriteria['tahfiz_kepribadian']*100) / 100 }}</td>
        <td class="border-r">{{ floor($kriteria['tahfiz_mengajar']*100) / 100 }}</td>
        <td class="border-r">{{ floor($perbandingan['jumlah_eigen']['tahfiz']*100) / 100 }}</td>
        <td class="border-r">{{ floor($perbandingan['rata_eigen']['tahfiz']*100) / 100 }}</td>
      </tr class="border-b">
      <tr class="border-b">
        <th class="py-2 text-left border-r text-sky-800">Pendidikan</th>
        <td class="border-r">{{ floor($kriteria['pendidikan_pengalaman']*100) / 100 }}</td>
        <td class="border-r">{{ floor($kriteria['pendidikan_tahfiz']*100) / 100 }}</td>
        <td class="border-r">{{ floor($kriteria['pendidikan_pendidikan']*100) / 100 }}</td>
        <td class="border-r">{{ floor($kriteria['pendidikan_kepribadian']*100) / 100 }}</td>
        <td class="border-r">{{ floor($kriteria['pendidikan_mengajar']*100) / 100 }}</td>
        <td class="border-r">{{ floor($perbandingan['jumlah_eigen']['pendidikan']*100) / 100 }}</td>
        <td class="border-r">{{ floor($perbandingan['rata_eigen']['pendidikan']*100) / 100 }}</td>
      </tr class="border-b">
      <tr class="border-b">
        <th class="py-2 text-left border-r text-sky-800">Kepribadian</th>
        <td class="border-r">{{ floor($kriteria['kepribadian_pengalaman']*100) / 100 }}</td>
        <td class="border-r">{{ floor($kriteria['kepribadian_tahfiz']*100) / 100 }}</td>
        <td class="border-r">{{ floor($kriteria['kepribadian_pendidikan']*100) / 100 }}</td>
        <td class="border-r">{{ floor($kriteria['kepribadian_kepribadian']*100) / 100 }}</td>
        <td class="border-r">{{ floor($kriteria['kepribadian_mengajar']*100) / 100 }}</td>
        <td class="border-r">{{ floor($perbandingan['jumlah_eigen']['kepribadian']*100) / 100 }}</td>
        <td class="border-r">{{ floor($perbandingan['rata_eigen']['kepribadian']*100) / 100 }}</td>
      </tr class="border-b">
      <tr class="border-b">
        <th class="py-2 text-left border-r text-sky-800">Mengajar</th>
        <td class="border-r">{{ floor($kriteria['mengajar_pengalaman']*100) / 100 }}</td>
        <td class="border-r">{{ floor($kriteria['mengajar_tahfiz']*100) / 100 }}</td>
        <td class="border-r">{{ floor($kriteria['mengajar_pendidikan']*100) / 100 }}</td>
        <td class="border-r">{{ floor($kriteria['mengajar_kepribadian']*100) / 100 }}</td>
        <td class="border-r">{{ floor($kriteria['mengajar_mengajar']*100) / 100 }}</td>
        <td class="border-r">{{ floor($perbandingan['jumlah_eigen']['mengajar']*100) / 100 }}</td>
        <td class="border-r">{{ floor($perbandingan['rata_eigen']['mengajar']*100) / 100 }}</td>
      </tr class="border-b">
      <tr class="border-b">
        <th class="py-2 text-left border-r text-sky-800">Jumlah</th>
        <td class="border-r">{{ floor($perbandingan['jumlah_kriteria']['pengalaman']*100) / 100 }}</td>
        <td class="border-r">{{ floor($perbandingan['jumlah_kriteria']['tahfiz']*100) / 100 }}</td>
        <td class="border-r">{{ floor($perbandingan['jumlah_kriteria']['pendidikan']*100) / 100 }}</td>
        <td class="border-r">{{ floor($perbandingan['jumlah_kriteria']['kepribadian']*100) / 100 }}</td>
        <td class="border-r">{{ floor($perbandingan['jumlah_kriteria']['mengajar']*100) / 100 }}</td>
      </tr class="border-b">
    </tbody>
  </table>

  <div class="flex flex-col mt-5">
    <div><span class="font-bold">Lambda Max</span><span> = {{ floor($perbandingan['lambda_max']*100) / 100 }}</span></div>
    <div><span class="font-bold">CI</span><span> = {{ floor($perbandingan['ci']*100) / 100 }}</span></div>
    <div><span class="font-bold">CR</span><span> = {{ floor($perbandingan['cr']*100) / 100 }}
        {{ floor($perbandingan['cr']*100) / 100 > 1 ? 'TIDAK KONSISTEN' : 'KONSISTEN' }}</span></div>
  </div>
</div>
@endsection