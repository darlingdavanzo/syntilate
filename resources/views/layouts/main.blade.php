<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="csrf-token" id="token" content="{{ csrf_token() }}">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Syntilate è una software house operante nel settore del software engineering, web & mobile development e IT consulting. Hai bisogno di una soluzione software ? Richiedi subito un preventivo gratuito!" />
	<!-- favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="{{ @asset('assets/favicon/apple-touch-icon.png') }}">
	<link rel="icon" type="image/png" sizes="32x32" href="{{ @asset('assets/favicon/favicon-32x32.png') }}">
	<link rel="icon" type="image/png" sizes="16x16" href="{{ @asset('assets/favicon/favicon-16x16.png') }}">
	<link rel="manifest" href="{{ @asset('assets/favicon/site.webmanifest') }}">
	<link rel="mask-icon" href="{{ @asset('assets/favicon/safari-pinned-tab.svg') }}" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#2b5797">
	<meta name="theme-color" content="#ffffff">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<title>Syntilate | @yield('title')</title>
	@yield('styles')
</head>
<body>
	@yield('content')
		<div class="alert text-center cookiealert" role="alert">
		Dichiari di accettare l’utilizzo di cookie chiudendo o nascondendo questo banner, proseguendo la navigazione di questa pagina, cliccando un link o un pulsante o continuando a navigare in altro modo. <a href="/privacy-policy" target="_blank">Cookie Policy</a>

		<button type="button" class="btn btn-primary btn-sm acceptcookies" aria-label="Close">
		    Accetta
		</button>
	</div>
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-143366830-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-143366830-1');
	</script>
	<script src="{{ @asset('js/app.js') }}"></script>
	<script src="{{ @asset('js/cookiealert.js') }}"></script>
	@yield('scripts')
</body>
</html>