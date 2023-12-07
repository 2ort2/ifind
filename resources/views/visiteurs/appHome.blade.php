<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <link style="border-radius: 25px" rel="shortcut icon" type="image/x-icon" href="{{asset('/logo/ifind.png')}}">
		<title>I-FIND | {{$title}}</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        @include('visiteurs.include.style')
        @yield('css')
    </head>

    <body>

        <!-- Header Start -->
        @include('visiteurs.partial.headerHome')
        <!-- Header End -->



        @yield('content')


        @include('visiteurs.partial.footer')


        <!-- Copyright Start -->
        @include('visiteurs.partial.copyright')
        <!-- Copyright End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-primary border-2 border-white rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>

        @include('visiteurs.include.script')

        @yield('js')
    </body>

</html>
