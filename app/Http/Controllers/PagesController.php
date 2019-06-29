<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;
use Session;
use View;

use App\Quote;
use App\Message;

class PagesController extends Controller
{
	public function sendMessage(Request $req){
		$message = new Message;

		$this->validate($req, [
			'email' => 'required|email',
			'nome' => 'required',
			'cognome' => 'required',
			'messaggio' => 'required|min:10'
		]);
		$data = array(
			'email' => $req->email,
			'firstname' => $req->nome,
			'lastname' => $req->cognome,
			'bodyMessage' => $req->messaggio // message its a reserved word
		);
		Mail::send('emails.contact', $data, function($message) use ($data){
			$message->from($data['email']);
			$message->to('info@syntilate.com');
			$message->subject('Nuovo messaggio su Syntilate');
		});

		$message->firstname = $req->nome;
		$message->lastname = $req->cognome;
		$message->email = $req->email;
		$message->bodyMessage = $req->messaggio;

		$message->save();

		/*Session::flash('success', 'Il messaggio è stato inviato correttamente, grazie per averci contattato, ti ricontatteremo appena possibile!');
		return redirect('/#contattaci');*/
		return response()->json(null, 200);
	}

	public function sendQuote(Request $req){
		$quote = new Quote;
		$this->validate($req, [
			// user info
			'nome' => 'required',
			'cognome' => 'required',
			'email' => 'required|email',
			'telefono' => 'numeric',
			// project info 
			'servizio' => 'required',          
			'stato_prodotto' => 'required',   
			'nome_progetto' => 'required',    
			'descrizione_progetto' => 'required|min:10'
		]);

		$data = array(
			// user info
			'firstname' => $req->nome,
			'lastname' => $req->cognome,
			'email' => $req->email,
			'phone_number' => $req->telefono,
			// project info 
			'service' => $req->servizio,          
			'product_state' => $req->stato_prodotto,   
			'project_name' => $req->nome_progetto,    
			'project_description' => $req->descrizione_progetto
		);

		Mail::send('emails.quote', $data, function($message) use ($data){
			$message->from($data['email']);
			$message->to('info@syntilate.com');
			$message->subject('Nuovo preventivo su Syntilate');
		});
		// client info
		$quote->client_firstname = $req->nome;
		$quote->client_lastname = $req->cognome;
		$quote->email = $req->email;
		$quote->phone = $req->telefono;
		// project info 
		$quote->service = $req->servizio;          
		$quote->product_status = $req->stato_prodotto;   
		$quote->project_name = $req->nome_progetto;    
		$quote->project_desc = $req->descrizione_progetto;
		$quote->save();
		return response()->json(null, 200);    
	}
}
