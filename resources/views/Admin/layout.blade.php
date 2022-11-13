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
    @yield('content')
</body>

</html>
