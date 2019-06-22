<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;
use Session;

class PagesController extends Controller
{
    public function sendMessage(Request $req){
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

    	Session::flash('success', 'Il messaggio è stato inviato correttamente, grazie per averci contattato, ti ricontatteremo appena possibile!');
    	return redirect()->route('index');
    }
}
