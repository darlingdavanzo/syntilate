@extends('layouts.main')
@section('title', 'Welcome')

@section('styles')
	<link rel="stylesheet" href="{{ @asset('css/style.css') }}">
	<link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,400i,700,700i|Montserrat:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
@endsection

@section('content')
	<div id="particles-js"></div>
	<header>
		@include('pages.landing.sections._navbar')	
	</header>
	<div id="app" class="container-fluid">
		<div class="row">
			<div id="header" class="col-sm-8 offset-sm-2 text-center mt-5 mb-5">
				@include('pages.landing.sections._header')				
			</div>
		</div>
		<div class="row">
			<div id="preventivo" class="container-fluid bg-white">
				@include('pages.landing.sections._preventivo')
			</div>
		</div>
		<div class="row">
			<div id="chisiamo" class="container-fluid bg-white">
				<div class="container pt-5 pb-5">	
					@include('pages.landing.sections._chisiamo')
				</div>
			</div>
		</div>
		<div class="row">
			<div id="servizi" class="container-fluid bg-white">
				<div class="container pt-5 pb-5 border-top">	
					@include('pages.landing.sections._servizi')
				</div>
			</div>
		</div>
		<div class="row">
			<div id="workflow" class="container-fluid bg-white">
				<div class="container pt-5 pb-5">	
					@include('pages.landing.sections._workflow')
				</div>
			</div>
		</div>
		<div class="row">
			<div id="calltoaction" class="container-fluid">
				<div class="container pt-5 pb-5">	
					@include('pages.landing.sections._calltoaction')
				</div>
			</div>
		</div>
		<div class="row">
			<div id="contattaci" class="container-fluid bg-white">
				<div class="container pt-5 pb-5 border-top">						
					@include('pages.landing.sections._contattaci')
				</div>
			</div>
		</div>
		<div class="row">
			<div id="footer" class="container-fluid bg-footer text-white">
				@include('pages.landing.sections._footer')				
			</div>
		</div>			
	</div>
</div>

<a id="back-to-top" href="#" class="btn btn-green btn-lg back-to-top rounded-circle" role="button" title="Clicca per ritornare su" data-toggle="tooltip" data-placement="left"><span class="fa fa-chevron-up"></span></a>
@endsection

@section('scripts')
	<script src="{{ @asset('js/app.js') }}"></script>
	{{-- Privacy Policy --}}
	<script src="{{ @asset('js/privacy-policy.js') }}"></script>	
	{{-- Cookie --}}
	<script src="{{ @asset('js/iubenda-config.js') }}"></script>		
	<script type="text/javascript" src="//cdn.iubenda.com/cs/iubenda_cs.js" charset="UTF-8" async></script>
	<script src="{{ @asset('js/particles.min.js') }}"></script>
	<script src="{{ @asset('js/particles.js') }}"></script>
	<script src="{{ @asset('js/scripts.js') }}"></script>
@endsection