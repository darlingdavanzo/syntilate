@extends('layouts.main')
@section('title', 'Welcome')

@section('styles')
	<link rel="stylesheet" href="{{ @asset('css/landing.css') }}">
	<link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,400i,700,700i|Montserrat:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
@endsection

@section('content')
	<div id="particles-js"></div>
	<div  class="container-fluid h-100">
		<div id="home" class="row h-100">
			<div class="offset-sm-2 col-sm-8 h-100 d-flex flex-column align-items-center justify-content-center">		
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
			<div class="col-sm-12" style="background-color: #42a832">
				<h1 class="text-white header-title text-center pt-5">What we do ?</h1>
				<div class="container" style="padding: 30px; background-color: rgb(255,255,255,0.2); border-radius: 10px;">
					<div class="row">
						<div class="col-sm text-center">
							<img src="https://image.freepik.com/vettori-gratuito/interfaccia-hud-futuristica-con-stile-sfumato_23-2147907638.jpg" class="rounded-circle img-fluid" alt="" width="40%"/>
						</div>
						<div class="col-sm">
							<h4 class="text-white text-center">Find rewarding projects</h4>
							<p class="text-white text-center">Freedom to work on ideal projects. On GetLance, you run your own business and choose your own clients and projects. Just complete your profile and we’ll highlight ideal jobs. Also search projects, and respond to client invitations. Wide variety and high pay. Clients are now posting jobs in hundreds of skill categories, paying top price for great work.</p>
						</div>
					</div>
					<div class="row pt-5">
						<div class="col-sm">
							<h4 class="text-white text-center">Find rewarding projects</h4>
							<p class="text-white text-center">Freedom to work on ideal projects. On GetLance, you run your own business and choose your own clients and projects. Just complete your profile and we’ll highlight ideal jobs. Also search projects, and respond to client invitations. Wide variety and high pay. Clients are now posting jobs in hundreds of skill categories, paying top price for great work. More and more success. .</p>
						</div>
						<div class="col-sm text-center">
							<img src="https://image.freepik.com/vettori-gratuito/interfaccia-hud-futuristica-con-stile-sfumato_23-2147909276.jpg" class="rounded-circle img-fluid" alt="" width="40%"/>
						</div>
					</div>				
					<div class="row pt-5">
						<div class="col-sm text-center">
							<img src="https://image.freepik.com/vettori-gratuito/interfaccia-hud-futuristica-con-stile-sfumato_23-2147914520.jpg" class="rounded-circle img-fluid" alt="" width="40%" />
						</div>
						<div class="col-sm">
							<h4 class="text-white text-center">Find rewarding projects</h4>
							<p class="text-white text-center">Freedom to work on ideal projects. On GetLance, you run your own business and choose your own clients and projects. Just complete your profile and we’ll highlight ideal jobs. Also search projects, and respond to client invitations. Wide variety and high pay. Clients are now posting jobs in hundreds of skill categories, paying top price for great work. More and more success. </p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="ourstack" class="row h-100">
				<div class="col-sm bg-white" style="background: url({{ @asset('assets/images/19276.jpg')  }}); background-size: cover">
					<div class="offset-sm-8 col-sm-4 ">					
						<h1 class="text-dark header-title text-center pt-5">About us</h1>
						<p class="text-dark text-center">Freedom to work on ideal projects. On GetLance, you run your own business and choose your own clients and projects. Just complete your profile and we’ll highlight ideal jobs. Also search projects, and respond to client invitations. Wide variety and high pay. Clients are now posting jobs in hundreds of skill categories, paying top price for great work. More and more success. </p>		
						
						<h1 class="text-dark header-title text-center pt-5">Contact us</h1>
						<form action="#">
							<div class="form-group">
								<input class="form-control" type="text" placeholder="Name">
							</div>
							<div class="form-group">
								<input class="form-control" type="text" placeholder="Name">
							</div>
							<div class="form-group">							
								<textarea class="form-control" type="text" placeholder="Name"></textarea>
							</div>								
						</form>
					</div>
				</div>
			
		</div>
		<div id="contactus" class="row h-25">
			<div class="col-sm bg-dark">
				
			</div>
		</div>
	</div>
	<div id="fp-nav" class="right" style="margin-top: -50px;">
		<ul class="nav flex-column">
			<li class="nav-item"><a href="#home" class="nav-link active"><i class="fa fa-circle"></i></a></li>
			<li class="nav-item"><a href="#whatwedo" class="nav-link"><i class="fa fa-circle"></i></a></li>
			<li class="nav-item"><a href="#ourstack" class="nav-link"><i class="fa fa-circle"></i></a></li>
			<li class="nav-item"><a href="#contactus" class="nav-link"><i class="fa fa-circle"></i></a></li>
		</ul>
	</div>
@endsection

@section('scripts')
	<script src="{{ @asset('js/particles.min.js') }}"></script>
	<script src="{{ @asset('js/particles.js') }}"></script>
	<script src="{{ @asset('js/landing.js') }}"></script>
@endsection