@extends('Admin.layout')
@section('title', 'Admin')
@section('content')
  {{-- {{ dd(auth()->user()) }} --}}
  <div class="p-8 bg-gray-100">
    <h1>Input Nilai Calon Guru</h1>
    <a href="{{ route('admin.guru.index') }}" class="my-4 text-blue-500 hover:text-blue-700">Kembali</a>
    <div class="bg-white">
      <table class="items-center w-full bg-transparent bg-white border-collapse">
        <thead>
          <tr>
            <th
              class="px-6 py-3 text-xs font-semibold text-left uppercase align-middle border border-l-0 border-r-0 border-solid whitespace-nowrap bg-slate-50 text-slate-500 border-slate-100">
              Nama
            </th>
            @foreach ($kriteria as $cat)
              <th
                class="px-6 py-3 text-xs font-semibold text-left uppercase align-middle border border-l-0 border-r-0 border-solid whitespace-nowrap bg-slate-50 text-slate-500 border-slate-100">
                {{ $cat->name }}
              </th>
            @endforeach
          </tr>
        </thead>
        <tbody>
          @foreach ($guru as $person)
            {{-- {{ dd($person->nilai_guru->where('jabatan', 'kepala_yayasan'))->get() }} --}}

            <tr>
              <th
                class="flex items-center p-4 px-6 text-xs text-left align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap">
                <a href="{{ route('admin.guru.surat', $person->id) }}" class="flex items-center">
                  <img src="{{ asset($person->calon_guru->foto_profile) }}"
                    class="w-12 h-12 bg-white border rounded-full" />
                  <span class="ml-3 font-bold text-slate-600">
                    {{ $person->name }}
                  </span>
                </a>
              </th>
              @if (auth()->user()->jabatan === 'kepala_yayasan')
                <form method="POST" action="{{ route('admin.guru.addNilai', $person->id) }}">
                  @csrf
              @endif
              @foreach ($kriteria as $cat)
                <td class="p-4 px-6 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap">
                  @if (auth()->user()->jabatan === 'kepala_yayasan')
                    @php
                      $nilai = $person->nilai_guru
                          ->where('kriteria_id', $cat->id)
                          ->where('jabatan', 'kepala_yayasan')
                          ->first();
                    @endphp
                    <input type="number" class="border-gray-400 rounded" name="{{ $cat->id }}"
                      value="{{ $nilai ? $nilai->nilai : '0' }}" />
                  @else
                    @php
                      $nilai = $person->nilai_guru
                          ->where('kriteria_id', $cat->id)
                          ->where('jabatan', 'kepala_yayasan')
                          ->first();
                    @endphp
                    {{ $nilai ? $nilai->nilai : '0' }}
                  @endif
                </td>
              @endforeach
              @if (auth()->user()->jabatan === 'kepala_yayasan')
                <td class="p-4 px-6 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap">
                  <button type="submit" class="p-4 text-white bg-green-500 hover:bg-green-600">Simpan</button>
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
