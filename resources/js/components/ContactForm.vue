<template>
	<form @submit.prevent="submit">
		<div v-if="success" class="alert alert-success" role="alert">
			Il messaggio è stato inviato correttamente, grazie per averci contattato, ti ricontatteremo appena possibile!
		</div>
		<div class="container">			
			<div class="row">
				<div class="col-sm-6">
					<div class="form-group">
						<label form="nome">Nome</label>
						<input type="text" name="nome" id="nome" tabindex="" class="form-control" v-model="fields.nome">
						<div>
						<div v-if="errors && errors.nome" class="text-danger">{{ errors.nome[0] }}</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6">
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
			</div>
			<div class="row">
				<div class="col-sm">
					<div class="form-group">
						<label for="messaggio">Messaggio</label>
						<textarea class="form-control" name="messaggio" id="messaggio" cols="30" rows="10" v-model="fields.messaggio"></textarea>
						<div v-if="errors && errors.messaggio" class="text-danger">{{ errors.messaggio[0] }}</div>
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
</template>
<script>
	import FormMixin from '../assets/FormMixin';
	export default {
		mixins: [FormMixin],
		data() {
			return {
				'action': '/sendmessage',
			}			
		}
	}
</script>