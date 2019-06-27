<form method="POST" action="{{url('sendmessage')}}">
	@csrf
	<div class="container">			
		<div class="row">
			<div class="col-sm-6">
				<div class="form-group">
					<label>Nome</label>
					<input type="text" name="nome" tabindex="" class="form-control  @error('nome') is-invalid @enderror" value="">
				</div>
				@error('nome')
					<p class="text-danger">{{ $message }}</p>
				@enderror
			</div>
			<div class="col-sm-6">
				<div class="form-group">
					<label>Cognome</label>
					<input type="text" name="cognome" tabindex="" class="form-control  @error('cognome') is-invalid @enderror" value="">
				</div>
				@error('cognome')
					<p class="text-danger">{{ $message }}</p>
				@enderror
			</div>
		</div>
		<div class="row">
			<div class="col-sm">					
				<div class="form-group">
					<label>E-Mail</label>
					<input type="text" name="email" tabindex="" class="form-control  @error('email') is-invalid @enderror" value="">
				</div>
				@error('email')
					<p class="text-danger">{{ $message }}</p>
				@enderror
			</div>
		</div>
		<div class="row">
			<div class="col-sm">
				<div class="form-group">
					<label>Messaggio</label>
					<textarea class="form-control @error('messaggio') is-invalid @enderror" name="messaggio" id="" cols="30" rows="10"></textarea>
				</div>
				@error('messaggio')
					<p class="text-danger">{{ $message }}</p>
				@enderror
			</div>
		</div>
		<div class="row">
			<div class="col-sm">
				<div class="form-group">
					<input class="btn btn-success" type="submit" role="button" value="Invia">
				</div>
			</div>
		</div>
	</div>
</form>