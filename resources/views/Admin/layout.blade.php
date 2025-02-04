<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link rel="stylesheet" href="{{ asset('vendor/@fortawesome/css/all.min.css') }}" />

  @vite('resources/css/app.css')
</head>

<body class="flex antialiased">
  <nav class="relative z-10 flex flex-wrap items-center justify-between px-6 py-4 bg-white shadow-xl md:left-0 md:block md:overflow-y-auto md:flex-row md:flex-nowrap md:overflow-hidden md:w-64">
    <div class="flex flex-wrap items-center justify-between w-full px-0 mx-auto md:flex-col md:items-stretch md:min-h-full md:flex-nowrap h-screen">
      <button class="px-3 py-1 text-xl leading-none text-black bg-transparent border border-transparent border-solid rounded opacity-50 cursor-pointer md:hidden" type="button" onclick="toggleNavbar('example-collapse-sidebar')">
        <i class="fas fa-bars"></i>
      </button>
      <a class="inline-block p-4 px-0 mr-0 text-sm font-bold text-left uppercase md:block md:pb-2 text-slate-600 whitespace-nowrap" href="{{ route('admin.index') }}">
        {{ auth()->user()->name }}
      </a>
      <div class="absolute top-0 left-0 right-0 z-40 items-center flex-1 hidden h-auto overflow-x-hidden overflow-y-auto rounded shadow md:flex md:flex-col md:items-stretch md:opacity-100 md:relative md:mt-4 md:shadow-none" id="example-collapse-sidebar">
        <div class="block pb-4 mb-4 border-b border-solid md:min-w-full md:hidden border-slate-200">
          <div class="flex flex-wrap justify-between">

            <div class="">
              <button type="button" class="px-3 py-1 text-xl leading-none text-black bg-transparent border border-transparent border-solid rounded opacity-50 cursor-pointer md:hidden" onclick="toggleNavbar('example-collapse-sidebar')">
                <i class="fas fa-times"></i>
              </button>
            </div>
            <div class="">
              <a class="inline-block p-4 px-0 mr-0 text-sm font-bold text-right uppercase md:block md:pb-2 text-slate-600 whitespace-nowrap" href="{{ route('admin.index') }}">
                {{ auth()->user()->name }}
              </a>
            </div>
          </div>
        </div>

        <!-- Heading -->
        <h6 class="block pt-1 pb-4 text-xs font-bold no-underline uppercase md:min-w-full text-slate-500">
          Menu
        </h6>
        <!-- Navigation -->

        <ul class="flex flex-col list-none md:flex-col md:min-w-full">
          <li class="items-center">
            <a href="{{ route('admin.guru.index') }}" class="block py-3 text-xs font-bold uppercase text-slate-700 hover:text-pink-600">
              <i class="mr-2 text-sm opacity-75 fas fa-user"></i>
              List Calon Guru
            </a>
          </li>

          @if (auth()->user()->jabatan === 'admin')
          <li class="items-center">
            <a href="{{ route('admin.seleksiGuru.index') }}" class="block py-3 text-xs font-bold uppercase text-slate-700 hover:text-pink-600">
              <i class="mr-2 text-sm opacity-75 fas fa-user"></i>
              List Guru
            </a>
          </li>
          @endif

          <li class="items-center">
            <a href="{{ route('admin.kategori') }}" class="block py-3 text-xs font-bold uppercase text-slate-700 hover:text-slate-500">
              <i class="mr-2 text-sm fas fa-list text-slate-500"></i>
              Kriteria
            </a>
          </li>

          @if(auth()->user()->jabatan === 'admin')
          <li class="items-center">
            <a href="{{ route('admin.user') }}" class="block py-3 text-xs font-bold uppercase text-slate-700 hover:text-slate-500">
              <i class="mr-2 text-sm fas fa-users text-slate-500"></i>
              User
            </a>
          </li>
          @endif

          {{-- <li class="items-center">
            <a href="{{ route('admin.topsis') }}" class="block py-3 text-xs font-bold uppercase text-slate-700 hover:text-slate-500">
          <i class="mr-2 text-sm fas fa-database text-slate-500"></i>
          Topsis
          </a>
          </li>

          <li class="items-center">
            <a href="{{ route('admin.copeland') }}" class="block py-3 text-xs font-bold uppercase text-slate-700 hover:text-slate-500">
              <i class="mr-2 text-sm fas fa-sort text-slate-500"></i>
              Copeland
            </a>
          </li> --}}
        </ul>
        @if (auth()->user()->jabatan !== 'kepala_yayasan')
        <!-- Divider -->
        <hr class="my-4 md:min-w-full" />
        <!-- Heading -->
        <h6 class="block pt-1 pb-4 text-xs font-bold no-underline uppercase md:min-w-full text-slate-500">
          Kepala Sekolah
        </h6>
        <!-- Navigation -->
        <ul>

          <li class="items-center">
            <a href="{{ route('admin.kepalaSekolah.ahp') }}" class="block py-3 text-xs font-bold uppercase text-slate-700 hover:text-slate-500">
              <i class="mr-2 text-sm fas fa-table text-slate-500"></i>
              AHP
            </a>
          </li>


          <li class="items-center">
            <a href="{{ route('admin.kepalaSekolah.ahp.perbandingan') }}" class="block py-3 text-xs font-bold uppercase text-slate-700 hover:text-slate-500">
              <i class="mr-2 text-sm fas fa-table text-slate-500"></i>
              AHP Perbandingan
            </a>
          </li>
          <li class="items-center">
            <a href="{{ route('admin.kepalaSekolah.topsis') }}" class="block py-3 text-xs font-bold uppercase text-slate-700 hover:text-slate-500">
              <i class="mr-2 text-sm fas fa-table text-slate-500"></i>
              Topsis
            </a>
          </li>
        </ul>
        @endif
        @if (auth()->user()->jabatan !== 'kepala_sekolah')
        <!-- Divider -->
        <hr class="my-4 md:min-w-full" />
        <!-- Heading -->
        <h6 class="block pt-1 pb-4 text-xs font-bold no-underline uppercase md:min-w-full text-slate-500">
          Kepala Yayasan
        </h6>
        <!-- Navigation -->
        <ul>

          <li class="items-center">
            <a href="{{ route('admin.kepalaYayasan.ahp') }}" class="block py-3 text-xs font-bold uppercase text-slate-700 hover:text-slate-500">
              <i class="mr-2 text-sm fas fa-table text-slate-500"></i>
              AHP
            </a>
          </li>
          <li class="items-center">
            <a href="{{ route('admin.kepalaYayasan.ahp.perbandingan') }}" class="block py-3 text-xs font-bold uppercase text-slate-700 hover:text-slate-500">
              <i class="mr-2 text-sm fas fa-table text-slate-500"></i>
              AHP Perbandingan
            </a>
          </li>
          <li class="items-center">
            <a href="{{ route('admin.kepalaYayasan.topsis') }}" class="block py-3 text-xs font-bold uppercase text-slate-700 hover:text-slate-500">
              <i class="mr-2 text-sm fas fa-table text-slate-500"></i>
              Topsis
            </a>
          </li>
        </ul>
        @endif

        @if (auth()->user()->jabatan === 'admin')
        <hr class="my-4 md:min-w-full" />

        <h6 class="block pt-1 pb-4 text-xs font-bold no-underline uppercase md:min-w-full text-slate-500">
          Metode
        </h6>
        <!-- Navigation -->

        <ul class="flex flex-col list-none md:flex-col md:min-w-full">
          <li class="items-center">
            <a href="{{ route('admin.copeland-score.index') }}" class="block py-3 text-xs font-bold uppercase text-slate-700 hover:text-pink-600">
              <i class="mr-2 text-sm opacity-75 fas fa-user"></i>
              Copeland Score
            </a>
          </li>
        </ul>
        @endif


        <hr class="my-4 md:min-w-full" />
        <!-- Heading -->
        <h6 class="block pt-1 pb-4 text-xs font-bold no-underline uppercase md:min-w-full text-slate-500">
          Authentication
        </h6>
        <!-- Navigation -->

        <ul class="flex flex-col list-none md:flex-col md:min-w-full md:mb-4">
          <li class="items-center">
            <form method="POST" action="{{ route('logout') }}">
              @csrf
              <button type="submit" class="block py-3 text-xs font-bold uppercase text-slate-700 hover:text-red-500">
                <i class="mr-2 text-sm fas fa-door-open text-slate-500"></i>
                Logout
              </button>
            </form>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="w-full bg-gray-100 p-8">
    @yield('content')
  </div>
  @if (session()->has('error'))
  <script>
    const Toast = Swal.mixin({
      toast: true,
      position: 'bottom-end',
      showConfirmButton: false,
      timer: 5000,
      timerProgressBar: true,
      didOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer)
        toast.addEventListener('mouseleave', Swal.resumeTimer)
      }
    })

    Toast.fire({
      icon: 'error',
      title: "{{ session()->get('error') }}"
    })
  </script>
  @endif
  @if (session()->has('success'))
  <script>
    const Toast = Swal.mixin({
      toast: true,
      position: 'bottom-end',
      showConfirmButton: false,
      timer: 5000,
      timerProgressBar: true,
      didOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer)
        toast.addEventListener('mouseleave', Swal.resumeTimer)
      }
    })

    Toast.fire({
      icon: 'success',
      title: "{{ session()->get('success') }}"
    })
  </script>
  @endif
  <script>
    function toggleNavbar(collapseID) {
      document.getElementById(collapseID).classList.toggle("hidden");
      document.getElementById(collapseID).classList.toggle("bg-white");
      document.getElementById(collapseID).classList.toggle("m-2");
      document.getElementById(collapseID).classList.toggle("py-3");
      document.getElementById(collapseID).classList.toggle("px-6");
    }
  </script>
</body>

</html>