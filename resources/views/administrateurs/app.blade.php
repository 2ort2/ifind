<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="{{asset('templates/administrateurs/production/images/favicon.ico')}}" type="image/ico" />

    <title>I-FIND | {{$title}}</title>

    {{-- Les chémins css du site --}}
    @include('administrateurs.include.style')
    @yield('css')

  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        @include('administrateurs.partial.dashboard')

        <!-- top navigation -->
        @include('administrateurs.partial.header')
        <!-- /top navigation -->

        @yield('content')

        <!-- footer content -->
        @include('administrateurs.partial.footer')
        <!-- /footer content -->
      </div>
    </div>

    {{-- Ajout des chemins des scripts --}}
    @include('administrateurs.include.script')

    @yield('js')

  </body>
</html>
