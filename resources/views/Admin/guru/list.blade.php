@extends('Admin.layout')
@section('title', 'Admin')
@section('content')
  {{-- {{ dd(auth()->user()) }} --}}
  <div class="bg-gray-100 ml-64 p-8">
    <h1>Input Nilai Calon Guru</h1>
    <div class="bg-white">
      <table class="items-center w-full bg-transparent border-collapse bg-white">
        <thead>
          <tr>
            <th
              class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-slate-50 text-slate-500 border-slate-100">
              Nama
            </th>
            @foreach ($kriteria as $cat)
              <th
                class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-slate-50 text-slate-500 border-slate-100">
                {{ $cat->name }}
              </th>
            @endforeach
          </tr>
        </thead>
        <tbody>
          @foreach ($guru as $person)
            <tr>
              <th
                class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left flex items-center">
                <a href="{{ route('admin.guru.surat', $person->id) }}" class="flex items-center">
                  <img src="{{ asset($person->calon_guru->foto_profile) }}"
                    class="h-12 w-12 bg-white rounded-full border" />
                  <span class="ml-3 font-bold text-slate-600">
                    {{ $person->name }}
                  </span>
                </a>
              </th>
              @if (auth()->user()->jabatan === 'kepala_sekolah' || auth()->user()->jabatan === 'kepala_yayasan')
                <form method="POST" action="{{ route('admin.guru.addNilai', $person->id) }}">
                  @csrf
              @endif
              @foreach ($kriteria as $cat)
                <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                  @if (auth()->user()->jabatan === 'kepala_sekolah' || auth()->user()->jabatan === 'kepala_yayasan')
                    @php
                      $nilai = $person->nilai_guru->where('kriteria_id', $cat->id)->first();
                    @endphp
                    <input type="number" class="border-gray-400 rounded" name="{{ $cat->id }}"
                      value="{{ $nilai ? $nilai->nilai : '0' }}" />
                  @else
                    @php
                      $nilai = $person->nilai_guru->where('kriteria_id', $cat->id)->first();
                    @endphp
                    {{ $nilai ? $nilai->nilai : '0' }}
                  @endif
                </td>
              @endforeach
              @if (auth()->user()->jabatan === 'kepala_sekolah' || auth()->user()->jabatan === 'kepala_yayasan')
                <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                  <button type="submit" class="p-4 bg-green-500 hover:bg-green-600 text-white">Simpan</button>
                </td>
                </form>
              @endif
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
  <script>
    function openDropdown(event, dropdownID) {
      let element = event.target;
      while (element.nodeName !== "A") {
        element = element.parentNode;
      }
      Popper.createPopper(element, document.getElementById(dropdownID), {
        placement: "bottom-start"
      });
      document.getElementById(dropdownID).classList.toggle("hidden");
      document.getElementById(dropdownID).classList.toggle("block");
    }
  </script>
@endsection
