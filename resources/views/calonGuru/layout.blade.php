<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>
  @vite('resources/css/app.css')
</head>

<body class="antialiased">
  <div class="flex">
    <nav class="w-96 block text-center border-r relative bg-white z-10 h-screen">
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
    </nav>
    <div class="container mx-auto">
      @yield('content')
    </div>
  </div>
  <hr class="border-b-1/2 border-gray-300 w-full bottom-0" />
  <div class="flex w-full container mx-auto justify-between my-10">
    <span class="text-indigo-500">SD IT Daafa</span>
    <span class="text-slate-700"> &copy; {{ now()->year }}</span>
  </div>
</body>

</html>
