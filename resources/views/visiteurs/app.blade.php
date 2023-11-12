<!DOCTYPE html>
<html lang="fr">
	<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="{{asset('/templates/visiteurs/assets/img/favicon.ico')}}">

		<title>I-FIND | {{$title}}</title>
        @include('visiteurs.include.style')
        @yield('css')
    </head>
	<body>
        @include('visiteurs.partial.preloader')

		<!--En tête du site-->
		@include('visiteurs.partial.header')

        {{--Contenu en fonction des clics du visiteurs--}}
        @yield('content')

        {{--Pied de page--}}
        @include('visiteurs.partial.footer')


        @include('visiteurs.include.script')
        @yield('js')

	</body>
</html>
