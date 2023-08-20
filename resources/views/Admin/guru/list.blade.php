@extends('Admin.layout')
@section('title', 'Admin')
@section('content')
<div class="relative flex flex-col w-full min-w-0 mb-6 break-words bg-white rounded-xl shadow-lg">
  <div class="px-4 py-3 mb-0 border-0 rounded-t">
    <div class="flex flex-wrap items-center justify-between">
      <div class="relative flex-1 flex-grow w-full max-w-full px-4">
        <h3 class="text-lg font-semibold text-slate-700">
          Data Guru
        </h3>
      </div>
      <div class="flex flex-wrap">
        <a href="{{ route('admin.addUser') }}" class="px-4 py-2 mr-10 text-white bg-indigo-500 rounded hover:bg-indigo-700">Tambah Calon Guru</a>
        <a href="{{ route('admin.guru.kepsep') }}" class="px-4 py-2 mr-10 text-white bg-indigo-500 rounded hover:bg-indigo-700">Nilai Kepala Sekolah</a>
        <a href="{{ route('admin.guru.yayasan') }}" class="px-4 py-2 text-white bg-indigo-500 rounded  hover:bg-indigo-700">Nilai Kepala Yayasan</a>
      </div>
    </div>
  </div>
  <div class="block w-full overflow-x-auto">
    <!-- Projects table -->
    <table class="items-center w-full bg-transparent border-collapse">
      <thead>
        <tr>
          <th class="px-6 py-3 text-xs font-semibold text-left uppercase align-middle border border-l-0 border-r-0 border-solid whitespace-nowrap bg-slate-50 text-slate-500 border-slate-100">
            Nama
          </th>
          <th class="px-6 py-3 text-xs font-semibold text-left uppercase align-middle border border-l-0 border-r-0 border-solid whitespace-nowrap bg-slate-50 text-slate-500 border-slate-100">
            Tamatan/Instansi
          </th>
          <th class="px-6 py-3 text-xs font-semibold text-left uppercase align-middle border border-l-0 border-r-0 border-solid whitespace-nowrap bg-slate-50 text-slate-500 border-slate-100">
            Email/No HP
          </th>
          <th class="px-6 py-3 text-xs font-semibold text-left uppercase align-middle border border-l-0 border-r-0 border-solid whitespace-nowrap bg-slate-50 text-slate-500 border-slate-100">
            Alamat
          </th>
          <th class="px-6 py-3 text-xs font-semibold text-left uppercase align-middle border border-l-0 border-r-0 border-solid whitespace-nowrap bg-slate-50 text-slate-500 border-slate-100">
            Action
          </th>
        </tr>
      </thead>
      <tbody>
        @foreach ($dataGuru as $guru)
        <tr>
          <th class="flex items-center p-4 px-6 text-xs text-left align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap">
            <img src="{{ asset($guru->foto_profile) }}" class="w-12 h-12 bg-white border rounded-full" alt="..." />
            <span class="ml-3 font-bold text-slate-600">
              {{ $guru->user->name }}
            </span>
          </th>
          <td class="p-4 px-6 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap">
            {{ $guru->tamatan }} | {{ $guru->instansi }}
          </td>
          <td class="p-4 px-6 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap">
            {{ $guru->user->email }} | {{ $guru->no_hp }}
          </td>
          <td>
            {{ $guru->alamat }}
          </td>
          <td class="p-4 px-6 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap">
            <form action="{{ route('admin.guru.delete', $guru->id) }}" method="POST">
              @csrf
              @method('DELETE')
              <button type="submit" class="bg-red-500 py-2.5 px-4 rounded hover:bg-red-400">Hapus</button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>

    </table>
    {{ $dataGuru->links() }}
  </div>
</div>
@endsection