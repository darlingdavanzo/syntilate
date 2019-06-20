@extends('layouts.main')
@section('title', 'Welcome')

@section('styles')
	<link rel="stylesheet" href="{{ @asset('css/landing.css') }}">
	<link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,400i,700,700i|Montserrat:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
@endsection

@section('content')
	<nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: transparent;">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#fp-nav" aria-controls="fp-nav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="fp-nav">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link active" href="#home">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#whatwedo">What we do?</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#aboutus">About us</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#contactus">Contact us</a>
				</li>
			</ul>
		</div>
	</nav>
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
			<div class="col-sm-12" style="background-color: #4bc35c">
				<h1 class="text-white header-title text-center pt-5">What we do ?</h1>
				<p class="text-white subtitle text-center pt-5">We analyze, prototype & build software, websites, web & mobile applications <br>for a wide variety of platforms. <br>We offer: </p>
				<div class="container-fluid">
					<div class="row pt-5 pb-5">
						<div class="col-sm">
							<h4 class="text-white text-center">Software Engineer</h4>
							<ul class="text-white listservices text-center">
								<li>Information architecture</li>
								<li>Prototyping</li>
								<li>Wireframing</li>
								<li>Digital product design</li>
								<li>Responsive development</li>
								<li>Mobile development</li>
								<li>Custom web applications</li>
							</ul>
						</div>
						<div class="col-sm">
							<h4 class="text-white text-center">Website & Application Development</h4>
							<ul class="text-white listservices text-center">
								<li>Social media strategy</li>
								<li>Website analytics</li>
								<li>Search Engine Optimization (SEO)</li>
								<li>Branding</li>
								<li>Art direction & visual design</li>
								<li>Illustration & iconography</li>
								<li>UI/UX design</li>
							</ul>
						</div>
						<div class="col-sm">
							<h4 class="text-white text-center">IT Consulting</h4>
							<ul class="text-white listservices text-center">
								<li>Content management systems (CMS)</li>
								<li>Front-end development</li>
								<li>Back-end development</li>
								<li>Quality testing</li>
								<li>E-commerce</li>
								<li>Multilingual support</li>
							</ul>
						</div>
					</div>
				</div>
				<h3 class="text-white subtitle text-center pt-5 pb-5">And many more services.</h3>
				<div class="d-flex align-items-center justify-content-center">
					<a class="nav-link btn btn-lg btn-outline-light" href="#aboutus">About Us</a>
				</div>
			</div>
		</div>
		<div id="aboutus" class="row h-100">
				<div class="col-sm-12 text-white" style="background-color: #629be7">
								
						<h1 class="header-title text-center pt-5">About us</h1>
						<p class="text-white text-center pt-5 pb-5">Freedom to work on ideal projects. On GetLance, you run your own business and choose your own clients and projects. Just complete your profile and we’ll highlight ideal jobs. Also search projects, and respond to client invitations. Wide variety and high pay. Clients are now posting jobs in hundreds of skill categories, paying top price for great work. More and more success. </p>		
						
				</div>
			
		</div>
		<div id="contactus" class="row h-100">
			<div class="col-sm bg-dark">
				<h1 class="header-title text-white text-center pt-5">Contact us</h1>
				<p class="text-white text-center pt-5 pb-5">Freedom to work on ideal projects. On GetLance, you run your own business and choose your own clients and projects. Just complete your profile and we’ll highlight ideal jobs. Also search projects, and respond to client invitations. Wide variety and high pay. Clients are now posting jobs in hundreds of skill categories, paying top price for great work. More and more success. </p>
				<div class="row">
					<div class="col-sm-6">
						<img src="https://media.carphonewarehouse.com/is/image/cpw2/p30-proCRYSTAL?$xl-retina$" width="40%"/>
					</div>
					<div class="col-sm-6">
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
		</div>
		<div class="row h-25">
			<div class="col-sm" style="background-color: #000">
			</div>
		</div>
	</div>
	<!--<div id="fp-nav" class="right" style="margin-top: -50px;">
		<ul class="nav flex-column">
			<li class="nav-item"><a href="#home" class="nav-link active"><i class="fa fa-circle"></i></a></li>
			<li class="nav-item"><a href="#whatwedo" class="nav-link"><i class="fa fa-circle"></i></a></li>
			<li class="nav-item"><a href="#aboutus" class="nav-link"><i class="fa fa-circle"></i></a></li>
			<li class="nav-item"><a href="#contactus" class="nav-link"><i class="fa fa-circle"></i></a></li>
		</ul>
	</div>-->
@endsection

@section('scripts')
	<script src="{{ @asset('js/particles.min.js') }}"></script>
	<script src="{{ @asset('js/particles.js') }}"></script>
	<script src="{{ @asset('js/landing.js') }}"></script>
@endsection