@extends('Admin.layout')
@section('title', 'Index Admin')
@section('content')
  <div class="px-4 mt-8 mb-12 md:ml-0">
    <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white rounded shadow-lg">
      <div class="px-4 py-3 mb-0 border-0 rounded-t">
        <div class="flex flex-wrap items-center">
          <div class="relative flex-1 flex-grow w-full max-w-full px-4">
            <h3 class="text-lg font-semibold text-slate-700">
              Data Kriteria
            </h3>
          </div>
          <a href="{{ route('admin.addKategori') }}" class="p-4 text-white bg-indigo-500 rounded hover:bg-indigo-600">Add
            Kriteria</a>

        </div>
      </div>
      <div class="block overflow-x-auto">
        <!-- Projects table -->
        <table class="items-center w-full bg-transparent border-collapse">
          <thead>
            <tr>
              <th
                class="px-6 py-3 text-xs font-semibold text-left uppercase align-middle border border-l-0 border-r-0 border-solid whitespace-nowrap bg-slate-50 text-slate-500 border-slate-100">
                Nama
              </th>
              <th
                class="px-6 py-3 text-xs font-semibold text-left uppercase align-middle border border-l-0 border-r-0 border-solid whitespace-nowrap bg-slate-50 text-slate-500 border-slate-100">
                Kode
              </th>
              <th
                class="px-6 py-3 text-xs font-semibold text-left uppercase align-middle border border-l-0 border-r-0 border-solid whitespace-nowrap bg-slate-50 text-slate-500 border-slate-100">
                Bobot
              </th>
              <th
                class="px-6 py-3 text-xs font-semibold text-left uppercase align-middle border border-l-0 border-r-0 border-solid whitespace-nowrap bg-slate-50 text-slate-500 border-slate-100">
                Atribut
              </th>
              <th
                class="px-6 py-3 text-xs font-semibold text-left uppercase align-middle border border-l-0 border-r-0 border-solid whitespace-nowrap bg-slate-50 text-slate-500 border-slate-100">
                Action
              </th>
            </tr>
          </thead>
          <tbody>
            @foreach ($kriteria as $cat)
              <tr>
                <th
                  class="flex items-center p-4 px-6 text-left align-middle border-t-0 border-l-0 border-r-1 whitespace-nowrap">
                  <span class="ml-3 font-bold text-slate-600">
                    {{ $cat->name }}
                  </span>
                </th>
                <td class="p-4 px-6 align-middle border-t-0 border-l-0 border-r-1 whitespace-nowrap">
                  {{ $cat->kode }}
                </td>
                <td class="p-4 px-6 align-middle border-t-0 border-l-0 border-r-1 whitespace-nowrap">
                  {{ round($cat->bobot, 2) }}
                </td>
                <td class="p-4 px-6 align-middle border-t-0 border-l-0 border-r-1 whitespace-nowrap">
                  {{ $cat->atribut }}
                </td>
                <td class="p-4 px-6 align-middle border-t-0 border-l-0 border-r-1 whitespace-nowrap">
                  <a href="{{ route('admin.editKategori', $cat->id) }}"
                    class="px-4 py-2 text-indigo-500 hover:text-indigo-600">Edit</a>
                  <form method="POST" action="{{ route('admin.deleteKategori', $cat->id) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="px-4 py-2 text-indigo-500 hover:text-indigo-600">
                      Hapus
                    </button>
                  </form>

                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
