<form method="POST" action="{{url('sendmessage')}}">
	@csrf
	<div class="container">			
		<div class="row">
			<div class="col-sm-6">
				<div class="form-group">
					<label>Nome</label>
					<input type="text" name="nome" tabindex="" class="form-control" value="">
				</div>
			</div>
			<div class="col-sm-6">
				<div class="form-group">
					<label>Cognome</label>
					<input type="text" name="cognome" tabindex="" class="form-control" value="">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm">					
				<div class="form-group">
					<label>E-Mail</label>
					<input type="text" name="email" tabindex="" class="form-control" value="">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm">
				<div class="form-group">
					<label>Messaggio</label>
					<textarea class="form-control" name="messaggio" id="" cols="30" rows="10"></textarea>
				</div>
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