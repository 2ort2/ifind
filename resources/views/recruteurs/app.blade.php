<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('/templates/recruteurs/assets/img/apple-icon.png')}}">
  <link rel="icon" type="image/png" href="{{asset('/templates/recruteurs/assets/img/favicon.png')}}">
  <title>I-FIND | {{$title}}</title>
  <!--     Fonts and icons     -->
  @include('recruteurs.include.style')
  @yield('css')
</head>

<body class="g-sidenav-show   bg-gray-100">
  @include('recruteurs.partial.dashboard')

  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    @include('recruteurs.partial.header')
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      @yield('content')

      @include('recruteurs.partial.footer')

    </div>
  </main>

  @include('recruteurs.partial.setting')

  <!--   Core JS Files   -->

  @include('recruteurs.include.script')

  @yield('js')
  
</body>

</html>
