@extends('layouts.test')
@section('title', 'Welcome')

@section('styles')
	<link rel="stylesheet" href="{{ @asset('css/style.css') }}">
	<link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,400i,700,700i|Montserrat:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
@endsection

@section('content')
	<div id="particles-js"></div>
	<header>

		<nav class="navbar navbar-expand-md bg-green navbar-dark pt-0 pb-0">
			<div class="container">
				<a href="#" class="navbar-brand"><img src="{{ @asset('assets/images/syntilate_logo_header_white.png') }}" width="200px"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#topmenu">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="topmenu">
					<ul class="navbar-nav ml-auto text-center">
						<li class="nav-item">
							<a href="#home" class="nav-link">Home</a>
						</li>
						<li class="nav-item">
							<a href="#servizi" class="nav-link">Chi siamo</a>
						</li>
						<li class="nav-item">
							<a href="#team" class="nav-link">Servizi</a>
						</li>
						<li class="nav-item">
							<a href="#contattaci" class="nav-link">Contattaci</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>

	</header>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-8 offset-sm-2 text-center mt-5 mb-5">
				<img class="img-fluid" src="{{ @asset('assets/images/syntilate.png') }}">
				<h1 class="text-header-section">Committed to <strong><i>greatness</i></strong></h1>
				<p class="subtext-header-section">
					Thanks to our know-how we are able to analyze, prototype and quickly develop your software 
					solution using the latest technology standards
				</p>
				<hr class="col-md-3 mb-5 mt-5" />
				<a class="btn btn-lg btn-outline-success mb-2 ml-2 ml-2" href="#preventivo">SERVIZI</a>
			</div>
		</div>
		<div class="row">
			<div id="preventivo" class="container-fluid bg-white">
				<div class="container pt-5 pb-5">		
					<div class="row">		
						<div class="col-md-4">
							<div class="centered-box">							
								<h2>Richiedi subito un</h2>
								<h1><b class="text-success">P</b>reventivo</h1>
							</div>
						</div>
						<div class="col-md-8">
							<div class="shadow box-preventivo">
								<div class="card panel-preventivo">
									<div class="card-heading">
										<div class="row">
											<div class="col-md pt-3">
												<h3 class="text-success">Preventivo</h3>
											</div>
										</div>
										<hr />
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-md">
												<form action="#" class="preventivo-form">
													<div class="row">
														<div class="col-sm-6">
															<div class="form-group">
																<select class="form-control" name="">
																	<option>Seleziona servizio</option>
																	<option>Hyderabad</option>
																	<option>Sanghar</option>
																	<option>Islamabad</option>
																	<option>Karachi</option>
																	<option>Larkana</option>
																	<option>Lahore</option>
																	<option>Rawalpindi</option>
																</select>
															</div>
														</div>
														<div class="col-sm-6">
															<div class="form-group">															
																<select class="form-control" name="">
																	<option>Seleziona categoria</option>
																	<option>Houses</option>
																	<option>Flates</option>
																	<option>Upper Portion</option>
																	<option>Residential Plots</option>
																	<option>Shops</option>
																	<option>Offices</option>
																	<option>Plot Forms</option>
																</select>
															</div>
														</div>
														<div class="col-sm-6">
															<div class="form-group">
																<input type="text" name="" tabindex="" class="form-control" placeholder="Inserisci Nome" value="">
															</div>
														</div>
														<div class="col-sm-6">
															<div class="form-group">
																<input type="text" name="" tabindex="" class="form-control" placeholder="Inserisci E-Mail" value="">
															</div>
														</div>
														<div class="col-sm">
															<div class="form-group">
																<label>Budget</label>
																<button type="button" class="btn btn-sm btn-outline-success tooltip-preventivo rounded-circle ml-3" data-toggle="tooltip" data-placement="top" title="Inserisci il budget minimo e massimo in Euro (€)">
																	<i class="fa fa-question"></i>
																</button>
																<div class="row">
																	<div class="col-sm">
																		<div class="form-group">
																			<label>Da</label>
																			<input type="text" class="form-control input-sm">
																		</div>
																	</div>
																	<div class="col-sm">
																		<div class="form-group">
																			<label>A</label>
																			<input type="text" class="form-control input-sm">
																		</div>
																	</div>
																</div>
															</div>
														</div>														
														<div class="col-sm-12">
															<div class="form-group">
																<label>Descrizione progetto</label>
																<button type="button" class="btn btn-sm btn-outline-success tooltip-preventivo rounded-circle ml-3" data-toggle="tooltip" data-placement="top" title="Inserisci informazioni generiche sul progetto">
																	<i class="fa fa-question"></i>
																</button>
																<div class="col-sm">
																	<div class="form-group">
																		<label>Nome</label>
																		<input type="text" class="form-control input-sm">
																	</div>
																</div>																	
															</div>			
															<div class="col-sm">
																<div class="form-group">
																	<label>Descrizione</label>
																	<textarea type="text" class="form-control input-sm"></textarea>
																</div>
															</div>															
														</div>
														<div class="col-sm text-center">
															<div class="form-group">
																<input type="submit" class="btn btn-success" value="Richiedi">
															</div>
														</div>
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>	
				</div>
			</div>
		</div>
		<div class="row">
			<div id="chisiamo" class="container-fluid bg-white">
				<div class="container pt-5 pb-5">	
					<div class="row">
						<div class="col-md">
							<h1>SYNTILATE</h1>
							<hr />
							<h2>LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISCING ELIT. LIGULA CONVALLIS, VEL TINCIDUNT IPSUM POSUERE</h2>
							<br>
							<p>
								ABOUT CITY ESTATE
								LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISCING ELIT. LIGULA CONVALLIS, VEL TINCIDUNT IPSUM POSUERE

								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor arcu non ligula convallis, vel tincidunt ipsum posuere. Fusce sodales lacus ut pellentessollicitudin. Duis iaculis, arcu ut hendrerit pharetra, elit augue pulvinar magna, a consectetur eros quam eu orci  Sed tempor arcu non ligula convallis, vel tincidunt ipsum posuere Sed tempor arcu quam eu orci .
							</p>
						</div>
						<div class="col-md">
							<h1>PARTNERS</h1>
							<hr />
							<h2>LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISCING ELIT. LIGULA CONVALLIS, VEL TINCIDUNT IPSUM POSUERE</h2>
							<br>
							<p>
								ABOUT CITY ESTATE
								LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISCING ELIT. LIGULA CONVALLIS, VEL TINCIDUNT IPSUM POSUERE

								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor arcu non ligula convallis, vel tincidunt ipsum posuere. Fusce sodales lacus ut pellentessollicitudin. Duis iaculis, arcu ut hendrerit pharetra, elit augue pulvinar magna, a consectetur eros quam eu orci  Sed tempor arcu non ligula convallis, vel tincidunt ipsum posuere Sed tempor arcu quam eu orci .
							</p>
						</div>
					</div>	
				</div>
			</div>
		</div>
		<div class="row">
			<div id="footer" class="container-fluid bg-footer text-white">
				<div class="row pt-5">
						<div class="col-sm">					
							<img class="img-fluid" src="{{ @asset('assets/images/syntilate.png') }}">			
						</div>
						<div class="col-sm">					
							<h5>Links</h5>
							<ul class="list-unstyled">
								<li>
									<a class="link-footer" href="#"><i class="fa fa-angle-right"></i> Home</a>
								</li>
								<li>
									<a class="link-footer" href="#"><i class="fa fa-angle-right"></i> Privacy Policy</a>
								</li>
								<li>
									<a class="link-footer" href="#"><i class="fa fa-angle-right"></i> Chi Siamo</a>
								</li>
								<li>
									<a class="link-footer" href="#"><i class="fa fa-angle-right"></i> Servizi</a>
								</li>
								<li>
									<a class="link-footer" href="#"><i class="fa fa-angle-right"></i> Contattaci</a>
								</li>
								
								
								
							</ul>
						</div>
						<div class="col-sm">					
							<h5>Contattaci</h5>
							<i class="fa fa-envelope mr-2"></i> info@syntilate.com
							<br>
							<br>
							<i class="fa fa-phone mr-2"></i> +39 346 957 1812
						</div>
						<div class="col-sm">					
							<h5>Social</h5>
							<ul class="list-unstyled list-inline pt-3">
								<li class="list-inline-item">
									<a class="link-footer-social" href="#"><i class="fa fa-2x fa-facebook"></i></a>
								</li>
								<li class="list-inline-item ml-3 mr-3">
									<a class="link-footer-social" href="#"><i class="fa fa-2x fa-twitter"></i></a>
								</li>
								<li class="list-inline-item">
									<a class="link-footer-social" href="#"><i class="fa fa-2x fa-instagram"></i></a>
								</li>
							</ul>
						</div>
					</div>
					<div class="row text-center mt-3" style="background-color: #000">
						<div class="col-sm">					
							<p class="small pt-3">© 2019 Syntilate Tutti i diritti riservati |  Via Primo Maggio 156, AN 60131, Ancona, Italy |  P.I. 01820200705 02818440428 </p>
						</div>
					</div>
				</div>
			</div>			
		</div>
	</div>
@endsection

@section('scripts')
	<script src="{{ @asset('js/particles.min.js') }}"></script>
	<script src="{{ @asset('js/particles.js') }}"></script>
	<script src="{{ @asset('js/test.js') }}"></script>
@endsection