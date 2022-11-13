@extends('calonGuru.layout')
@section('title', 'Profile Calon Guru')
@section('content')

  <main class="profile-page">
    <section class="container mx-auto">
      <img class="w-full h-full bg-center bg-cover"
        src="https://images.unsplash.com/photo-1499336315816-097655dcfbda?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=2710&amp;q=80'">
      </img>
      <div class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden h-70-px"
        style="transform: translateZ(0px)">
        <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none"
          version="1.1" viewBox="0 0 2560 100" x="0" y="0">
          <polygon class="text-slate-200 fill-current" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </section>
    <section class="container mx-auto z-10 -mt-16 lg:mt-4s">
      <div class="flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-xl rounded-lg">
        <div class="px-6">
          <div class="flex flex-wrap justify-between">
            <div class="px-4 flex justify-between">
              <div class="absolute">
                <img alt="..." src="{{ asset($dataGuru->foto_profile) }}"
                  class="shadow-xl rounded-full h-auto align-middle border-none w-32 h-32" />
              </div>
            </div>
            <div class="px-4 lg:order-3 lg:text-right lg:self-center">
              <div class="py-6 px-3 mt-32 sm:mt-0">
                <button
                  class="bg-pink-500 active:bg-pink-600 uppercase text-white font-bold hover:shadow-md shadow text-xs px-4 py-2 rounded outline-none focus:outline-none sm:mr-2 mb-1 ease-linear transition-all duration-150"
                  type="button">
                  Connect
                </button>
              </div>
            </div>
          </div>
          <div class="lg:text-center mt-12">
            <h3 class="text-4xl font-semibold leading-normal mb-2 text-slate-700 mb-2">
              {{-- {{ dd($dataGuru->user->name) }} --}}
              {{ $dataGuru->user->name }}
            </h3>
            <div class="text-sm leading-normal mt-0 mb-2 font-bold">
              <i
                class="fas fa-map-marker-alt mr-2 text-lg  {{ $dataGuru->nik ? 'text-slate-600' : 'text-slate-400' }}"></i>
              NIK : {{ $dataGuru->nik ?: 'Anda Belum Memasukkan NIK' }}
            </div>
            <div
              class="text-sm leading-normal mt-0 mb-2 font-bold {{ $dataGuru->no_kk ? 'text-slate-600' : 'text-slate-400' }}">
              <i class="fas fa-map-marker-alt mr-2 text-lg"></i>
              No KK : {{ $dataGuru->no_kk ?: 'Anda Belum Memasukkan No KK' }}
            </div>
            <div class="mb-2 text-slate-600 mt-10">
              <i class="fas fa-briefcase mr-2 text-lg text-slate-600"></i>Solution Manager - Creative Tim Officer
            </div>
            <div class="mb-2 text-slate-600">
              <i class="fas fa-university mr-2 text-lg text-slate-600"></i>University of Computer Science
            </div>
          </div>
          <div class="mt-10 py-10 border-t border-slate-200 text-center">
            <div class="flex flex-wrap justify-center">
              <div class="w-full lg:w-9/12 px-4">
                <p class="mb-4 text-lg leading-relaxed text-slate-700">
                  An artist of considerable range, Jenna the name taken by
                  Melbourne-raised, Brooklyn-based Nick Murphy writes,
                  performs and records all of his own music, giving it a
                  warm, intimate feel with a solid groove structure. An
                  artist of considerable range.
                </p>
                <a href="#pablo" class="font-normal text-pink-500">Show more</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
@endsection
