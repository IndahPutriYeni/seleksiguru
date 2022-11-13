<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>
  <link rel="stylesheet" src="{{ asset('vendor/@fortawesome/css/all.min.css') }}" />

  @vite('resources/css/app.css')
</head>

<body class="antialiased">
  <nav
    class="top-0 fixed z-50 w-full flex flex-wrap items-center justify-between px-2 py-3 navbar-expand-lg shadow-md bg-white/40 backdrop-blur-md">
    <div class="container px-4 mx-auto flex flex-wrap items-center justify-between">
      <div class="w-full relative flex justify-between lg:w-auto lg:static lg:block lg:justify-start">
        <a class="text-sm font-bold leading-relaxed inline-block mr-4 py-2 whitespace-nowrap text-indigo-700"
          href="{{ route('index') }}">SD IT Daafa</a><button
          class="cursor-pointer text-xl leading-none px-3 py-1 border border-solid border-transparent rounded bg-transparent block lg:hidden outline-none focus:outline-none"
          type="button" onclick="toggleNavbar('collapse-navbar')">
          <i class="text-slate-700 fas fa-bars"></i>
        </button>
      </div>
      <div class="lg:flex flex-grow items-center lg:bg-opacity-0 lg:shadow-none hidden" id="collapse-navbar">
        <ul class="flex flex-col lg:flex-row list-none mr-auto">
          <li class="flex items-center">
            <a class="lg:text-slate-700 lg:hover:text-indigo-600 text-slate-700 px-3 py-4 lg:py-2 flex items-center text-xs font-bold"
              href="{{ route('dataDiri') }}"><i
                class="lg:text-slate-200 text-slate-600 far fa-file-alt text-lg leading-lg mr-2"></i>
              Data Diri</a>
          </li>
          <li class="flex items-center">
            <a class="lg:text-slate-700 lg:hover:text-indigo-600 text-slate-700 px-3 py-4 lg:py-2 flex items-center text-xs font-bold"
              href="{{ route('surat') }}"><i
                class="lg:text-slate-200 text-slate-600 far fa-file-alt text-lg leading-lg mr-2"></i>
              Akta & Ijazah</a>
          </li>
          <li class="flex items-center">
            <a class="lg:text-slate-700 lg:hover:text-indigo-600 text-slate-700 px-3 py-4 lg:py-2 flex items-center text-xs font-bold"
              href="{{ route('profile') }}"><i
                class="lg:text-slate-200 text-slate-600 far fa-file-alt text-lg leading-lg mr-2"></i>
              Profile</a>
          </li>
        </ul>
        <ul class="flex flex-col lg:flex-row list-none lg:ml-auto items-center">

          <li class="flex items-center">
            <a href="{{ route('logout') }}"
              class="bg-white text-red-500 text-xs font-bold uppercase px-4 py-2 rounded shadow-md hover:shadow-xl border outline-none focus:outline-none lg:mr-1 lg:mb-0 ml-3 mb-3 ease-linear transition-all duration-150"
              type="button">
              <i class="fas fa-arrow-alt-circle-down"></i> Logout
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  {{-- <nav class="w-96 block text-center border-r relative bg-white z-10 h-screen">
      <img src="{{ asset('images/profile.png') }}" class="w-24 h-24 rounded-full mx-auto my-32" />
      <a href="{{ route('profile') }}"
        class="block w-full hover:bg-indigo-500 text-indigo-500 hover:text-white py-4">Profile</a>
      <a href="{{ route('surat') }}"
        class="block w-full hover:bg-indigo-500 text-indigo-500 hover:text-white py-4">Ijazah
        &
        Akte</a>
      <a href="{{ route('dataDiri') }}"
        class="block w-full hover:bg-indigo-500 text-indigo-500 hover:text-white py-4">Data
        Diri</a>
      <a href="{{ route('logout') }}"
        class="block w-full hover:bg-indigo-500 text-indigo-500 hover:text-white py-4">Logout</a>
    </nav> --}}
  <div class="container mx-auto mt-16">
    @yield('content')
  </div>
  <footer class=" w-full bg-slate-800 pb-6">
    <div class="container mx-auto px-4">
      <hr class="mb-6 border-b-1 border-slate-600" />
      <div class="flex flex-wrap items-center md:justify-between justify-center">
        <div class="w-full md:w-4/12 px-4">
          <div class="text-sm text-white font-semibold py-1 text-center md:text-left">
            Copyright © <span id="get-current-year"></span>
            <a href="https://www.creative-tim.com?ref=njs-login"
              class="text-white hover:text-slate-500 text-sm font-semibold py-1">SD IT Daafa</a>
          </div>
        </div>
        <div class="w-full md:w-8/12 px-4">
          <ul class="flex flex-wrap list-none md:justify-end justify-center">
            @if (!auth())
              <li>
                <a href="{{ route('login') }}"
                  class="text-white hover:text-slate-500 text-sm font-semibold block py-1 px-3">Login</a>
              </li>
              <li>
                <a href="{{ route('register') }}"
                  class="text-white hover:text-slate-500 text-sm font-semibold block py-1 px-3">Register</a>
              </li>
            @endif
          </ul>
        </div>
      </div>
    </div>
  </footer>
</body>
<script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
<script>
  /* Make dynamic date appear */
  (function() {
    if (document.getElementById("get-current-year")) {
      document.getElementById("get-current-year").innerHTML =
        new Date().getFullYear();
    }
  })();
  /* Function for opning navbar on mobile */
  function toggleNavbar(collapseID) {
    document.getElementById(collapseID).classList.toggle("hidden");
    document.getElementById(collapseID).classList.toggle("block");
  }
  /* Function for dropdowns */
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

</html>
