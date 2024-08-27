<!doctype html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'CRUD Desafio')</title>
  @vite('resources/css/app.css')
</head>
<body>
    @include('partials/navbar')
    @include('partials/errors')
    @yield('content')
</body>
</html>