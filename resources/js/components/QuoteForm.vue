<template>
	<form @submit.prevent="submit">
		<div v-if="success" class="alert alert-success" role="alert">
			Il preventivo è stato inviato correttamente, ti contatteremo appena possibile!
		</div>
		<div class="container">
			<div class="row">
				<div class="col-sm">
					<div class="form-group">
						<label>Dati cliente</label>
						<button type="button" class="btn btn-sm btn-outline-success tooltip-preventivo rounded-circle ml-3" data-toggle="tooltip" data-placement="top" title="Inserisci le tue informazioni personali e/o aziendali">
							<i class="fa fa-question"></i>
						</button>
					</div>	
				</div>
			</div>

			<div class="row">
				<div class="col-sm">
					<div class="form-group">
						<label for="nome">Nome</label>
						<input type="text" name="nome" id="nome" tabindex="" class="form-control" v-model="fields.nome">
						<div v-if="errors && errors.nome" class="text-danger">{{ errors.nome[0] }}</div>						
					</div>
				</div>
				<div class="col-sm">
					<div class="form-group">
						<label for="cognome">Cognome</label>					
						<input type="text" name="cognome" id="cognome" tabindex="" class="form-control" v-model="fields.cognome">
						<div v-if="errors && errors.cognome" class="text-danger">{{ errors.cognome[0] }}</div>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-sm">
					<div class="form-group">
						<label for="email">E-Mail</label>
						<input type="email" name="email" id="email" tabindex="" class="form-control" v-model="fields.email">
						<div v-if="errors && errors.email" class="text-danger">{{ errors.email[0] }}</div>
					</div>
				</div>
				<div class="col-sm">
					<div class="form-group">
						<label for="telefono">Telefono</label>	
						<input type="tel" name="telefono" id="telefono" tabindex="" class="form-control" v-model="fields.telefono">
						<div v-if="errors && errors.telefono" class="text-danger">{{ errors.telefono[0] }}</div>

					</div>
				</div>
			</div>
			<hr class="border">
			<div class="row">
				<div class="col-sm">
					<div class="form-group">
						<label>Descrizione progetto</label>
						<button type="button" class="btn btn-sm btn-outline-success tooltip-preventivo rounded-circle ml-3" data-toggle="tooltip" data-placement="top" title="Inserisci informazioni generiche sul progetto">
							<i class="fa fa-question"></i>
						</button>
					</div>	
				</div>
			</div>

			<div class="row">
				<div class="col-sm">
					<div class="form-group">
						<select class="form-control" name="servizio" id="servizio" v-model="fields.servizio">
							<option disabled value="">Servizio</option>
							<option>Consulenza</option>
							<option>Sviluppo software</option>
							<option>Estensione team</option>
							<option>Altro</option>
						</select>
						<div v-if="errors && errors.servizio" class="text-danger">{{ errors.servizio[0] }}</div>
					</div>
				</div>
				<div class="col-sm">
					<div class="form-group">															
						<select class="form-control" name="stato del prodotto" id="stato_prodotto" v-model="fields.stato_prodotto">
							<option disabled value="">Stato del prodotto</option>
							<option>Idea di business</option>
							<option>Stesura requisiti</option>
							<option>Sviluppo</option>
							<option>Manutenzione</option>
							<option>Altro</option>
						</select>
						<div v-if="errors && errors.stato_prodotto" class="text-danger">{{ errors.stato_prodotto[0] }}</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-sm">
					<div class="form-group">
						<label>Nome</label>
						<input type="text" class="form-control input-sm" name="nome del progetto" id="nome_progetto" v-model="fields.nome_progetto">
						<div v-if="errors && errors.nome_progetto" class="text-danger">{{ errors.nome_progetto[0] }}</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-sm">
					<div class="form-group">
						<label>Descrizione</label>
						<textarea type="text" class="form-control input-sm" name="descrizione progetto" id="descrizione_progetto" v-model="fields.descrizione_progetto"></textarea>
						<div v-if="errors && errors.descrizione_progetto" class="text-danger">{{ errors.descrizione_progetto[0] }}</div>
					</div>
				</div>	
			</div>
			
			<div class="row">
				<div class="col-sm">
					<div class="form-group form-check">
						<input type="checkbox" class="form-check-input" id="privacy" v-model="fields.privacy">
						<label class="form-check-label" for="privacy">Ho letto e accettato l'informativa sulla <a href="/privacy-policy" target="_blank">privacy</a></label>
						<div v-if="errors && errors.privacy" class="text-danger">{{ errors.privacy[0] }}</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-sm text-center">
					<div class="form-group">
						<input type="submit" class="btn btn-success" value="Richiedi">
					</div>
				</div>
			</div>
		</div>
	</form>
</template>
<script>
	import FormMixin from '../assets/FormMixin';
	export default {
		mixins: [FormMixin],

		data() {
			return {
				'action': '/sendquote',
			}			
		}
	}
</script>