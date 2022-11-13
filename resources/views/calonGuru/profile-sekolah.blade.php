@extends('calonGuru.layout')
@section('title', 'Profile Sekolah')
@section('content')

  <main class="profile-page flex flex-row items-center py-10 gap-5">
    <div class="w-full">
      <img src="{{asset('images/sekolah.jpg')}}" class="rounded-lg object-cover shadow-xl">
    </div>

    <div class="flex flex-wrap mt-10 justify-between">
      <div class="rounded-md flex flex-col bg-gray-100 p-5 gap-3 w-[49%] my-2">
        <span class="font-bold">
          SDIT Daarul Falaah
        </span>
        <span>
        SDIT Daarul Falaah adalah salah satu satuan pendidikan dengan jenjang SD di Kampung Jawa I, Kec. Pariaman Tengah, Kota Pariaman, Sumatera Barat. Dalam menjalankan kegiatannya, SDIT Daarul Falaah berada di bawah naungan Kementerian Pendidikan dan Kebudayaan.
        </span>
      </div>

      <div class="rounded-md flex flex-col bg-gray-100 p-5 gap-3 w-[49%] my-2">
        <span class="font-bold">
          ALAMAT SDIT DAARUL FALAAH
        </span>
        <span>
          SDIT Daarul Falaah beralamat di Jl. Pahlawan 63 Kampung Jawa 1, Kampung Jawa I, Kec. Pariaman Tengah, Kota Pariaman, Sumatera Barat.
        </span>
      </div>

      <div class="rounded-md flex flex-col bg-gray-100 p-5 gap-3 w-[49%] my-2">
        <span class="font-bold">
          KONTAK YANG DAPAT DIHUBUNGI
        </span>
        <span>
          Apabila anda ingin bertanya atau menghubungi langsung SDIT Daarul Falaah, dapat melalui beberapa media.
        </span>
      </div>

      <div class="rounded-md flex flex-col bg-gray-100 p-5 gap-3 w-[49%] my-2">
        <span class="font-bold">
          FASILITAS YANG DISEDIAKAN SDIT DAARUL FALAAH
        </span>
        <span>
          Tidak ada catatan mengenai fasilitas yang disediakan SDIT Daarul Falaah di database kami.
        </span>
      </div>

      <div class="rounded-md flex flex-col bg-gray-100 p-5 gap-3 w-[49%] my-2">
        <span class="font-bold">
          JAM PEMBELAJARAN DI SDIT DAARUL FALAAH
        </span>
        <span>
          Tidak ada informasi mengenai Jam Pembelajaran di SDIT Daarul Falaah
        </span>
      </div>

      <div class="rounded-md flex flex-col bg-gray-100 p-5 gap-3 w-[49%] my-2">
        <span class="font-bold">
          AKREDITASI
        </span>
        <span>
          Tidak ada informasi mengenai Akreditasi SDIT Daarul Falaah
        </span>
      </div>
    </div>
  </main>
@endsection
