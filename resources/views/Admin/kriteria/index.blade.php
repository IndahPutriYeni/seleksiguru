@extends('Admin.layout')
@section('title', 'Index Admin')
@section('content')
  <div class="mb-12 px-4 md:ml-0 mt-8">
    <div class="relative flex flex-col min-w-0 break-words mb-6 shadow-lg rounded bg-white">
      <div class="rounded-t mb-0 px-4 py-3 border-0">
        <div class="flex flex-wrap items-center">
          <div class="relative w-full px-4 max-w-full flex-grow flex-1">
            <h3 class="font-semibold text-lg text-slate-700">
              Data Kriteria
            </h3>
          </div>
          <a href="{{ route('admin.addKategori') }}" class="p-4 bg-indigo-500 text-white hover:bg-indigo-600 rounded">Add
            Kriteria</a>

        </div>
      </div>
      <div class="block overflow-x-auto">
        <!-- Projects table -->
        <table class="items-center w-full bg-transparent border-collapse">
          <thead>
            <tr>
              <th
                class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-slate-50 text-slate-500 border-slate-100">
                Nama
              </th>
              <th
                class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-slate-50 text-slate-500 border-slate-100">
                Kode
              </th>
              <th
                class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-slate-50 text-slate-500 border-slate-100">
                Bobot
              </th>
              <th
                class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-slate-50 text-slate-500 border-slate-100">
                Atribut
              </th>
              <th
                class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-slate-50 text-slate-500 border-slate-100">
                Action
              </th>
            </tr>
          </thead>
          <tbody>
            @foreach ($kriteria as $cat)
              <tr>
                <th
                  class="border-t-0 px-6 align-middle border-l-0 border-r-1 whitespace-nowrap p-4 text-left flex items-center">
                  <span class="ml-3 font-bold text-slate-600">
                    {{ $cat->name }}
                  </span>
                </th>
                <td class="border-t-0 px-6 align-middle border-l-0 border-r-1 whitespace-nowrap p-4">
                  {{ $cat->kode }}
                </td>
                <td class="border-t-0 px-6 align-middle border-l-0 border-r-1 whitespace-nowrap p-4">
                  {{ $cat->bobot }}
                </td>
                <td class="border-t-0 px-6 align-middle border-l-0 border-r-1 whitespace-nowrap p-4">
                  {{ $cat->atribut }}
                </td>
                <td class="border-t-0 px-6 align-middle border-l-0 border-r-1 whitespace-nowrap p-4">
                  <a href="{{ route('admin.editKategori', $cat->id) }}"
                    class="px-4 py-2 text-indigo-500 hover:text-indigo-600">Edit</a>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
