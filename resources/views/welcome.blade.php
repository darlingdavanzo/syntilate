@extends('layouts.main')
@section('title', 'Welcome')

@section('styles')
	<link rel="stylesheet" href="{{ @asset('css/landing.css') }}">
	<link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,400i,700,700i|Montserrat:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
@endsection

@section('content')
	<div id="particles-js"></div>
	<div id="01-intro" class="container-fluid h-100">
		<div class="row h-100">
			<div class="offset-2 col-sm-8 h-100 d-flex flex-column align-items-center justify-content-center">		
				<img class="img-fluid" src="{{ @asset('assets/images/Syntilate.png') }}" width="">		
				<h1 class="text-white header-title text-center">Committed to <strong><i>greatness</i></strong></h1>
				<p class="header-text text-center">
					Thanks to our know-how we are able to analyze, prototype and quickly develop your software 
					solution using the latest technology standards
				</p>
				<p>
					<a class="nav-link btn btn-lg btn-outline-success mb-2 ml-2 ml-2" href="#whatwedo">What we do?</a>
				</p>
			</div>
		</div>
		<div id="whatwedo" class="row h-100">

			<div class="col-sm" style="background-color: green">
				
			</div>
		</div>
		<div class="row" style="margin-top: 50px; margin-bottom: 50px">
			<div class="offset-2 col-sm-2">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Software Development</h5>
						<p class="card-text">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vitae odio neque. Phasellus massa leo, bibendum sit amet blandit et, tincidunt dignissim erat. Nunc risus nulla, lobortis quis sapien id, laoreet rutrum odio. Donec eleifend viverra tellus, nec tincidunt justo congue eu.
						</p>
					</div>
				</div>
			</div>
			<div class="col-sm-2">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Software Development</h5>
						<p class="card-text">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vitae odio neque. Phasellus massa leo, bibendum sit amet blandit et, tincidunt dignissim erat. Nunc risus nulla, lobortis quis sapien id, laoreet rutrum odio. Donec eleifend viverra tellus, nec tincidunt justo congue eu.
						</p>
					</div>
				</div>
			</div>
			<div class="col-sm-2">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Software Development</h5>
						<p class="card-text">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vitae odio neque. Phasellus massa leo, bibendum sit amet blandit et, tincidunt dignissim erat. Nunc risus nulla, lobortis quis sapien id, laoreet rutrum odio. Donec eleifend viverra tellus, nec tincidunt justo congue eu.
						</p>
					</div>
				</div>
			</div>
			<div class="col-sm-2">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Software Development</h5>
						<p class="card-text">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vitae odio neque. Phasellus massa leo, bibendum sit amet blandit et, tincidunt dignissim erat. Nunc risus nulla, lobortis quis sapien id, laoreet rutrum odio. Donec eleifend viverra tellus, nec tincidunt justo congue eu.
						</p>
					</div>
				</div>
			</div>

		</div>
		<div class="row">
			<div class="col-sm bg-light" style="height: 900px">
				
			</div>
		</div>
		<div class="row">
			<div class="col-sm bg-nav" style="height: 300px">
				
			</div>
		</div>
	</div>
	<div id="fp-nav" class="right" style="margin-top: -50px;">
		<ul class="nav flex-column">
			<li class="nav-item"><a href="#01-intro" class="nav-link active"><i class="fa fa-circle"></i></a></li>
			<li class="nav-item"><a href="#whatwedo" class="nav-link"><i class="fa fa-circle"></i></a></li>
			<li class="nav-item"><a href="#03-second-content" class="nav-link"><i class="fa fa-circle"></i></a></li>
			<li class="nav-item"><a href="#04-third-content" class="nav-link"><i class="fa fa-circle"></i></a></li>
		</ul>
	</div>
@endsection

@section('scripts')
	<script src="{{ @asset('js/particles.min.js') }}"></script>
	<script src="{{ @asset('js/particles.js') }}"></script>
	<script src="{{ @asset('js/landing.js') }}"></script>
@endsection