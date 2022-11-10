<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>
  @vite('resources/css/app.css')
</head>

<body class="antialiased">
  <nav
    class="flex justify-between items-center py-8 px-4 xl:px-10 shadow fixed w-full bg-white/75 backdrop-blur-sm top-0">
    <a class="text-lg font-semibold text-indigo-500" href="#">
      <span class="italic">SD IT</span> <span class="text-indigo-500">Daafa</span>
    </a>
    <div class="lg:hidden">
      <button class="navbar-burger flex items-center p-3 hover:bg-gray-50 rounded">
        <svg class="block h-4 w-4" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
          <title>Mobile menu</title>
          <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
        </svg>
      </button>
    </div>
    <ul class="hidden lg:flex lg:ml-auto lg:mr-12 lg:items-center lg:w-auto lg:space-x-12">
      <li><a class="text-sm font-medium" href="#about">About</a></li>
      <li><a class="text-sm font-medium" href="#sekolah">Sekolah</a></li>
    </ul>
    <div class="hidden lg:block"><a
        class="inline-block py-3 px-8 text-sm leading-normal font-medium bg-indigo-50 hover:bg-indigo-100 text-indigo-500 rounded transition duration-200"
        href="{{ route('login') }}">Login</a></div>
  </nav>
  <div class="container mx-auto mt-20">
    @yield('content')
  </div>
  <hr class="border-b-1/2 border-gray-300 container mx-auto " />
  <div class="flex container mx-auto justify-between my-10">
    <span class="text-indigo-500">SD IT Daafa</span>
    <span class="text-slate-700"> &copy; {{ now()->year }}</span>
  </div>
</body>

</html>
