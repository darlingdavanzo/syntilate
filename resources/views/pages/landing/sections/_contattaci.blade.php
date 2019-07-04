<div class="row">
	<div class="col-md-12">
		<h1>Contattaci</h1>
	</div>
	<div class="col-md-1">		
		<hr class="green-underline">
	</div>
</div>
<div class="row">
	<div class="col-sm border-top pt-5 pl-0 pt-0">
		{{--@include('partials.flash-messages')--}}
		<contact-form csrf="{{csrf_token()}}"></contact-form>
		{{--@include('pages.landing.forms._contattaci')--}}
	</div>
	<div class="col-sm text-center">
		<h4>
			Via Primo Maggio 156, AN 60131, Ancona, Italy<br> 
			- Chiamaci al +39 346 957 1812 -<br>
			<a href="mailto:info@syntilate.com" class="text-success">info@syntilate.com</a>
		</h4>
		<p class="small pt-2 pb-2"><strong class="text-success">Syntilate</strong> committed to <i>greatness</i></p>
		<hr class="border-top col-sm-5 pb-2">
		<h2>Non dimenticarti di seguirci sui nostri social ;)</h2>
		<ul class="list-unstyled list-inline pt-3">
			<li class="list-inline-item">
				<a class="link-footer-social text-success" href="https://www.facebook.com/syntilatedev"><i class="fa fa-2x fa-facebook"></i></a>
			</li>
			<li class="list-inline-item ml-3 mr-3">
				<a class="link-footer-social text-success" href="#"><i class="fa fa-2x fa-twitter"></i></a>
			</li>
			<li class="list-inline-item">
				<a class="link-footer-social text-success" href="#"><i class="fa fa-2x fa-instagram"></i></a>
			</li>
		</ul>
	</div>
</div>