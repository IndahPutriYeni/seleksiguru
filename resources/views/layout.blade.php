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
    class="top-0 absolute z-50 w-full flex flex-wrap items-center justify-between px-2 py-3 navbar-expand-lg bg-slate-800">
    <div class="container px-4 mx-auto flex flex-wrap items-center justify-between">
      <div class="w-full relative flex justify-between lg:w-auto lg:static lg:block lg:justify-start">
        <a class="text-sm font-bold leading-relaxed inline-block mr-4 py-2 whitespace-nowrap uppercase text-white"
          href="{{ route('index') }}">SD IT Daafa</a><button
          class="cursor-pointer text-xl leading-none px-3 py-1 border border-solid border-transparent rounded bg-transparent block lg:hidden outline-none focus:outline-none"
          type="button" onclick="toggleNavbar('example-collapse-navbar')">
          <i class="text-white fas fa-bars"></i>
        </button>
      </div>
      <div class="lg:flex flex-grow items-center bg-white lg:bg-opacity-0 lg:shadow-none hidden"
        id="example-collapse-navbar">
        <ul class="flex flex-col lg:flex-row list-none lg:ml-auto items-center">
          @if (!auth())
            <li class="inline-block relative">
              <a class="lg:text-white lg:hover:text-slate-200 text-white px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                href="{{ route('login') }}">
                Login
              </a>
            </li>
            <li class="flex items-center">
              <a href="{{ route('register') }}"
                class="bg-white text-white active:bg-slate-50 text-xs font-bold uppercase px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none lg:mr-1 lg:mb-0 ml-3 mb-3 ease-linear transition-all duration-150"
                type="button">
                <i class="fas fa-arrow-alt-circle-down"></i> Register
              </a>
            </li>
          @else
            @if (auth()->user()->isAdmin)
              <li class="flex items-center">
                <a class="lg:text-white lg:hover:text-indigo-600 text-white px-3 py-4 lg:py-2 flex items-center text-xs font-bold"
                  href="{{ route('admin.user') }}"><i
                    class="lg:text-slate-200 text-slate-600 far fa-file-alt text-lg leading-lg mr-2"></i>
                  User</a>
              </li>
              <li class="flex items-center">
                <a class="lg:text-white lg:hover:text-indigo-600 text-white px-3 py-4 lg:py-2 flex items-center text-xs font-bold"
                  href="{{ route('admin.guru.index') }}"><i
                    class="lg:text-slate-200 text-slate-600 far fa-file-alt text-lg leading-lg mr-2"></i>
                  Guru</a>
              </li>
              <li class="flex items-center">
                <a class="lg:text-white lg:hover:text-indigo-600 text-white px-3 py-4 lg:py-2 flex items-center text-xs font-bold"
                  href="{{ route('admin.kategori') }}"><i
                    class="lg:text-slate-200 text-slate-600 far fa-file-alt text-lg leading-lg mr-2"></i>
                  Kategori</a>
              </li>
            @else
              <li class="flex items-center">
                <a class="lg:text-white lg:hover:text-indigo-600 text-white px-3 py-4 lg:py-2 flex items-center text-xs font-bold"
                  href="{{ route('perjanjian') }}"><i
                    class="lg:text-slate-200 text-slate-600 far fa-file-alt text-lg leading-lg mr-2"></i>
                  Perjanjian</a>
              </li>
              <li class="flex items-center">
                <a class="lg:text-white lg:hover:text-indigo-600 text-white px-3 py-4 lg:py-2 flex items-center text-xs font-bold"
                  href="{{ route('surat') }}"><i
                    class="lg:text-slate-200 text-slate-600 far fa-file-alt text-lg leading-lg mr-2"></i>
                  Akta & Ijazah</a>
              </li>
              <li class="flex items-center">
                <a class="lg:text-white lg:hover:text-indigo-600 text-white px-3 py-4 lg:py-2 flex items-center text-xs font-bold"
                  href="{{ route('profile') }}"><i
                    class="lg:text-slate-200 text-slate-600 far fa-file-alt text-lg leading-lg mr-2"></i>
                  Profile</a>
              </li>
            @endif
            <li class="flex items-center">
              <a class="bg-white rounded hover:bg-slate-200 text-slate-700 lg:hover:text-indigo-600 px-3 py-4 lg:py-2 flex items-center text-xs font-bold"
                href="{{ route('profile') }}"><i
                  class="lg:text-slate-200 text-slate-600 far fa-file-alt text-lg leading-lg mr-2"></i>
                Logout</a>
            </li>
          @endif
        </ul>
      </div>
    </div>
  </nav>
  @yield('content')
  <hr class="border-b-1/2 border-gray-300 container mx-auto " />
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
</body>

</html>
