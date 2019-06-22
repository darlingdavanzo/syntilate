@extends('layouts.main')
@section('title', 'Welcome')

@section('styles')
	<link rel="stylesheet" href="{{ @asset('css/landing.css') }}">
	<link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,400i,700,700i|Montserrat:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
@endsection

@section('content')
	<nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #000;">
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
		<div id="whatwedo" class="row">
			<div class="col-sm-12" style="background: url({{ @asset('assets/images/transp_bg.png') }}) repeat">
				<h1 class="text-dark header-title text-center pt-5">What we do ?</h1>
				<p class="text-dark subtitle text-center pt-5">We analyze, prototype & build software, websites, web & mobile applications <br>for a wide variety of platforms. <br><br>We offer: </p>
				<div class="container-fluid">
					<div class="row pt-5 pb-5">
						<div class="col-sm">
							<div class="card bg-dark">	
								<div class="card-body">		
									<div class="text-white text-center" style=""><i class="fa fa-server fa-5x bg-secondary mb-2" style="border-radius: 50%; padding: 20px"></i></div>
									<h4 class="card-title text-white text-center subtitle">Software Engineering</h4>
									<ul class="list-group text-center">
										<li class="list-group-item">Information architecture</li>
										<li class="list-group-item">Prototyping</li>
										<li class="list-group-item">Digital product design</li>
										<li class="list-group-item">Responsive development</li>
										<li class="list-group-item">Mobile development</li>
										<li class="list-group-item">Custom web applications</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-sm">
							<div class="card bg-dark">
								<div class="card-body">
									<div class="text-white text-center mb-2" style=""><i class="fa fa-code fa-5x bg-secondary" style="border-radius: 50%; padding: 20px"></i></div>
									<h4 class="card-title text-white text-center subtitle">Website & Application Development</h4>
									<ul class="list-group text-center">
										<li class="list-group-item">Social media strategy</li>
										<li class="list-group-item">Website analytics</li>
										<li class="list-group-item">Search Engine Optimization (SEO)</li>
										<li class="list-group-item">Branding</li>
										<li class="list-group-item">Art direction & visual design</li>
										<li class="list-group-item">Illustration & iconography</li>
										<li class="list-group-item">UI/UX design</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-sm">
							<div class="card bg-dark">	
								<div class="card-body">	
									<div class="text-white text-center mb-2" style=""><i class="fa fa-user-circle fa-5x bg-secondary" style="border-radius: 50%; padding: 20px"></i></div>

									<h4 class="card-title text-white text-center subtitle">IT Consulting</h4>
									<ul class="list-group text-center">
										<li class="list-group-item">Content management systems (CMS)</li>
										<li class="list-group-item">Front-end development</li>
										<li class="list-group-item">Back-end development</li>
										<li class="list-group-item">Quality testing</li>
										<li class="list-group-item">E-commerce</li>
										<li class="list-group-item">Multilingual support</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<h3 class="text-white subtitle text-center pb-5">And many more services.</h3>
			</div>
		</div>
		<div id="aboutus" class="row h-100">
				<div class="col-sm-12 text-white" style="background: url({{ @asset('assets/images/mosaic.png') }})">
								
						<h1 class="header-title text-center pt-5">About us</h1>
						<p class="text-white text-center pt-5 pb-5">Freedom to work on ideal projects. On GetLance, you run your own business and choose your own clients and projects. Just complete your profile and we’ll highlight ideal jobs. Also search projects, and respond to client invitations. Wide variety and high pay. Clients are now posting jobs in hundreds of skill categories, paying top price for great work. More and more success. </p>		
						
				</div>
			
		</div>
		<div id="contactus" class="row">
			<div class="col-sm linearbg">
				<div class="row h-100">
					<div class="offset-sm-2 col-sm-8 mb-5">
						<h1 class="header-title text-center text-white pt-5">Contattaci</h1>
						<p class="subtitle text-center text-white">Se hai dei dubbi non esitare a contattarci</p>
						@if(!(Session::has('success')))
							<form action="{{ url('sendmessage') }}" class="contact" method="POST">
								{{ csrf_field() }}
								<div class="row">
									<div class="col-sm">											
										<div class="form-group">
											<input name="firstname" class="form-control" type="text" placeholder="Inserisci il tuo nome">
										</div>
										<div class="form-group">
											<input name="lastname" class="form-control" type="text" placeholder="Inserisci il tuo cognome">
										</div>
										<div class="form-group">
											<input name="email" class="form-control" type="text" placeholder="Inserisci la tua E-Mail">
										</div>
									</div>
									<div class="col-sm" style="border-left: 1px solid #fff">
										<div class="form-group">							
											<textarea name="message" class="form-control" type="text" placeholder="Messaggio" rows="4"></textarea>
										</div>								
										<div class="form-group text-right">							
											<input type="submit" value="Send" class="btn btn-lg btn-outline-light">
										</div>										
									</div>
								</div>
							</form>
						@else
							<div class="alert alert-success" role="alert">
								<strong>Fantastico:</strong> {{ Session::get('success') }}
							</div>
						@endif
					</div>
				</div>
			</div>
		</div>

		<!-- ICON NEEDS FONT AWESOME FOR CHEVRON UP ICON -->
		<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
		<style type="text/css">
			#return-to-top {
				z-index: 1000;
				position: fixed;
				bottom: 20px;
				right: 20px;
				background: rgb(0, 0, 0);
				background: rgba(0, 0, 0, 0.7);
				width: 50px;
				height: 50px;
				display: block;
				text-decoration: none;
				-webkit-border-radius: 35px;
				-moz-border-radius: 35px;
				border-radius: 35px;
				display: none;
				-webkit-transition: all 0.3s linear;
				-moz-transition: all 0.3s ease;
				-ms-transition: all 0.3s ease;
				-o-transition: all 0.3s ease;
				transition: all 0.3s ease;
			}
			#return-to-top i {
				z-index: 1000;
				color: #fff;
				margin: 0;
				position: relative;
				top: 13px;
				font-size: 19px;
				-webkit-transition: all 0.3s ease;
				-moz-transition: all 0.3s ease;
				-ms-transition: all 0.3s ease;
				-o-transition: all 0.3s ease;
				transition: all 0.3s ease;
			}
			#return-to-top:hover {
				background: rgba(0, 0, 0, 0.9);
			}
			#return-to-top:hover i {
				color: #fff;
				top: 5px;
			}
		</style>
		<!-- Return to Top -->
		<a href="#" id="return-to-top" style="display: inline;"><i class="icon-chevron-up"></i></a>

		<div class="row h-25" id="footer">
			<div class="col-sm" style="background: url({{ @asset('assets/images/mosaic.png') }})">
				<div class="container">
					
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
							<ul class="list-unstyled list-inline social text-center">
								<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-facebook"></i></a></li>
								<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-twitter"></i></a></li>
								<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-instagram"></i></a></li>
								<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-google-plus"></i></a></li>
								<li class="list-inline-item"><a href="javascript:void();" target="_blank"><i class="fa fa-envelope"></i></a></li>
							</ul>
						</div>
						</hr>
					</div>	
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white pt-5">
							<p class="h6">
								<p>© <a class="text-green ml-2" href="https://www.syntilate.com" target="_blank">Syntilate</a> 2019. Tutti i diritti riservati.</p>
								<p><a href="mailto:info@syntilate.com">info@syntilate.com</a></p>
								<ul class="list-inline">
									<li class="list-inline-item">
										<p>Syntilate - P.I. 01820200705 02818440428 - 
										<a href="https://www.iubenda.com/privacy-policy/32123665" {{--class="iubenda-black iubenda-embed"--}} title="Privacy Policy ">Privacy Policy</a></p>
									</li>
								</ul>
							</p>
						</div>
						</hr>
					</div>
				</div>
			</div>
		</div>
		<!-- Footer -->
	
	<!-- ./Footer -->
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
	{{-- Privacy Policy --}}
	<script type="text/javascript">(function (w,d) {var loader = function () {var s = d.createElement("script"), tag = d.getElementsByTagName("script")[0]; s.src="https://cdn.iubenda.com/iubenda.js"; tag.parentNode.insertBefore(s,tag);}; if(w.addEventListener){w.addEventListener("load", loader, false);}else if(w.attachEvent){w.attachEvent("onload", loader);}else{w.onload = loader;}})(window, document);
	</script>
	{{-- Cookie --}}
	<script type="text/javascript">
		var _iub = _iub || [];
		_iub.csConfiguration = {"lang":"it","siteId":1616509,"cookiePolicyId":32123665, "banner":{ "acceptButtonDisplay":true,"customizeButtonDisplay":true,"position":"float-top-center" }};
	</script>
	<script type="text/javascript" src="//cdn.iubenda.com/cs/iubenda_cs.js" charset="UTF-8" async></script>
	<script src="{{ @asset('js/particles.min.js') }}"></script>
	<script src="{{ @asset('js/particles.js') }}"></script>
	<script src="{{ @asset('js/landing.js') }}"></script>
@endsection