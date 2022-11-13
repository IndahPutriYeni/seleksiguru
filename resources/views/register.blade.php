@extends('layout')
@section('title', 'Login System')
@section('content')
  <main>
    <section class="relative w-full h-full py-40 min-h-screen">
      <div class="absolute top-0 w-full h-full bg-slate-800 bg-full bg-no-repeat"
        style="background-image: url({{ asset('images/register_bg_2.png') }}"></div>
      <div class="container mx-auto px-4 h-full">
        <div class="flex content-center items-center justify-center h-full">
          <div class="w-full lg:w-4/12 px-4">
            <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-slate-200 border-0">
              <div class="flex-auto px-4 lg:px-10 py-10 pt-10">
                <div class="text-slate-600 text-center mb-3 font-bold">
                  <span class="text-orange-700 text-2xl">Mendaftar</span>
                </div>
                <form method="post" action="{{ route('register') }}">
                  @csrf
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-slate-600 text-xs font-bold mb-2" for="name">Nama</label><input
                      type="name" name="name" id="name"
                      class="border-0 px-3 py-3 placeholder-slate-500 text-slate-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                      placeholder="Nama" />
                  </div>
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-slate-600 text-xs font-bold mb-2"
                      for="email">Email</label><input type="email" name="email" id="email"
                      class="border-0 px-3 py-3 placeholder-slate-500 text-slate-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                      placeholder="Email" />
                  </div>
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-slate-600 text-xs font-bold mb-2"
                      for="password">Password</label><input type="password" name="password" id="password"
                      class="border-0 px-3 py-3 placeholder-slate-500 text-slate-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                      placeholder="Password" />
                  </div>
                  <span class="text-slate-600">Dengan mendaftar, anda setuju dengan <a href="{{ route('perjanjian') }}"
                      target="_blank">Perjanjian</a></span>
                  <div class="text-center mt-6">
                    <button
                      class="bg-slate-800 text-white active:bg-slate-600 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 w-full ease-linear transition-all duration-150"
                      type="submit">
                      Register
                    </button>
                  </div>
                </form>
              </div>
            </div>
            <div class="flex flex-wrap mt-6">
              <div class="w-1/2 text-right">
                <a href="{{ route('login') }}" class="text-slate-200"><small>Sudah punya akun? Masuk Aja</small></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
@endsection
