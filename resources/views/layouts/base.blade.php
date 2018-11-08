<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Name - @yield('title')</title>
    @stack('styles')
  </head>
  <body>
    <header>
      @include('layouts.sidebar')
    <main>
      {{-- mettre en place un condition pour afficher la sidebar ou non en fonction d'une donnée passée par le controller -- controler et layouts --}}

        @yield('content')
    </main>
  </body>
  @stack('scripts')
</html>
