@extends('calonGuru.layout')
@section('title', 'Surat surat')

@section('content')
  <main class="profile-page">
    <section class="container mx-auto z-10 lg:mt-4s">
      <div class="flex flex-col min-w-0 break-words bg-gray-100 mt-20 w-full mb-6 shadow-xl rounded-lg">
        <span class="text-2xl font-semibold leading-normal mb-2 text-slate-700 mb-2 text-center mt-5">
          Upload Surat surat
        </span>

        @if (session()->has('success'))
          <script>
            const Toast = Swal.mixin({
              toast: true,
              position: 'top-end',
              showConfirmButton: false,
              timer: 3000,
              timerProgressBar: true,
              didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
              }
            })

            Toast.fire({
              icon: 'success',
              title: '{{ session()->get('success') }}'
            })
          </script>
        @endif

        <form action="/surat-surat" method="POST" class="p-5" enctype='multipart/form-data'>
          @csrf
          <div class="flex flex-col my-3">
            <label for="lamaran">Surat Lamaran</label>

            <div class="flex flex-row border border-green-400 rounded-lg items-center gap-5 pl-3 h-10">
              <input type="file" id="lamaran" name="lamaran" accept="image/*">

              @if (array_key_exists('lamaran', $surat))
                <span class="flex-grow">{{ $surat['lamaran'] }}</span>
                <a href="{{ asset($surat['lamaran']) }}"
                  class="bg-green-400 w-32 h-10 text-white flex items-center justify-center hover:bg-green-500 cursor-pointer"
                  target="_blank">
                  Lihat
                </a>
              @endif
            </div>
            @error('lamaran')
              <small class="text-red-500">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex flex-col my-3">
            <label for="cv">CV</label>

            <div class="flex flex-row border border-green-400 rounded-lg items-center gap-5 pl-3 h-10">
              <input type="file" id="cv" name="cv" accept="image/*">

              @if (array_key_exists('cv', $surat))
                <span class="flex-grow">{{ $surat['cv'] }}</span>
                <a href="{{ asset($surat['cv']) }}"
                  class="bg-green-400 w-32 h-10 text-white flex items-center justify-center hover:bg-green-500 cursor-pointer"
                  target="_blank">
                  Lihat
                </a>
              @endif
            </div>
            @error('cv')
              <small class="text-red-500">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex flex-col my-3">
            <label for="ktp">KTP</label>

            <div class="flex flex-row border border-green-400 rounded-lg items-center gap-5 pl-3 h-10">
              <input type="file" id="ktp" name="ktp" accept="image/*">

              @if (array_key_exists('ktp', $surat))
                <span class="flex-grow">{{ $surat['ktp'] }}</span>
                <a href="{{ asset($surat['ktp']) }}"
                  class="bg-green-400 w-32 h-10 text-white flex items-center justify-center hover:bg-green-500 cursor-pointer"
                  target="_blank">
                  Lihat
                </a>
              @endif
            </div>

            @error('ktp')
              <small class="text-red-500">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex flex-col my-3">
            <label for="ijazah">Ijazah</label>

            <div class="flex flex-row border border-green-400 rounded-lg items-center gap-5 pl-3 h-10">
              <input type="file" id="ijazah" name="ijazah" accept="image/*">

              @if (array_key_exists('ijazah', $surat))
                <span class="flex-grow">{{ $surat['ijazah'] }}</span>
                <a href="{{ asset($surat['ijazah']) }}"
                  class="bg-green-400 w-32 h-10 text-white flex items-center justify-center hover:bg-green-500 cursor-pointer"
                  target="_blank">
                  Lihat
                </a>
              @endif
            </div>

            @error('ijazah')
              <small class="text-red-500">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex flex-col my-3">
            <label for="nilai">Transkip Nilai</label>

            <div class="flex flex-row border border-green-400 rounded-lg items-center gap-5 pl-3 h-10">
              <input type="file" id="nilai" name="nilai" accept="image/*">

              @if (array_key_exists('nilai', $surat))
                <span class="flex-grow">{{ $surat['nilai'] }}</span>
                <a href="{{ asset($surat['nilai']) }}"
                  class="bg-green-400 w-32 h-10 text-white flex items-center justify-center hover:bg-green-500 cursor-pointer"
                  target="_blank">
                  Lihat
                </a>
              @endif
            </div>

            @error('nilai')
              <small class="text-red-500">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex flex-col my-3">
            <label for="photo">Pas Photo Warna</label>

            <div class="flex flex-row border border-green-400 rounded-lg items-center gap-5 pl-3 h-10">
              <input type="file" id="photo" name="photo" accept="image/*">

              @if (array_key_exists('photo', $surat))
                <span class="flex-grow">{{ $surat['photo'] }}</span>
                <a href="{{ asset($surat['photo']) }}"
                  class="bg-green-400 w-32 h-10 text-white flex items-center justify-center hover:bg-green-500 cursor-pointer"
                  target="_blank">
                  Lihat
                </a>
              @endif
            </div>

            @error('photo')
              <small class="text-red-500">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex flex-col my-3">
            <label for="pengalaman_kerja">Surat Pengalaman Kerja</label>

            <div class="flex flex-row border border-green-400 rounded-lg items-center gap-5 pl-3 h-10">
              <input type="file" id="pengalaman_kerja" name="pengalaman_kerja" accept="image/*">

              @if (array_key_exists('pengalaman_kerja', $surat))
                <span class="flex-grow">{{ $surat['pengalaman_kerja'] }}</span>
                <a href="{{ asset($surat['pengalaman_kerja']) }}"
                  class="bg-green-400 w-32 h-10 text-white flex items-center justify-center hover:bg-green-500 cursor-pointer"
                  target="_blank">
                  Lihat
                </a>
              @endif
            </div>

            @error('pengalaman_kerja')
              <small class="text-red-500">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex flex-col my-3">
            <label for="sertifikat_pendukung">Sertifikat Pendukung</label>

            <div class="flex flex-row border border-green-400 rounded-lg items-center gap-5 pl-3 h-10">
              <input type="file" id="sertifikat_pendukung" name="sertifikat_pendukung" accept="image/*">

              @if (array_key_exists('sertifikat_pendukung', $surat))
                <span class="flex-grow">{{ $surat['sertifikat_pendukung'] }}</span>
                <a href="{{ asset($surat['sertifikat_pendukung']) }}"
                  class="bg-green-400 w-32 h-10 text-white flex items-center justify-center hover:bg-green-500 cursor-pointer"
                  target="_blank">
                  Lihat
                </a>
              @endif
            </div>

            @error('sertifikat_pendukung')
              <small class="text-red-500">{{ $message }}</small>
            @enderror
          </div>

          <div class="flex justify-center">
            <button type="submit"
              class="mt-10 bg-green-400 py-2 px-5 rounded-md cursor-pointer text-white shadow-xl hover:bg-green-600">Submit</button>
          </div>
      </div>
      </div>
    </section>
  </main>
@endsection
