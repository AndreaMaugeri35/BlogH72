<?php

namespace App\Http\Controllers;

use Exception;
use App\Mail\SentMail;
use Illuminate\Http\Request;
use App\Http\Requests\MailRequest;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public function homepage(){
        return view ('welcome');
    }

    public function contattaci(){
        return view('contattaci');
    }
    public function contattaci_submit(MailRequest $request){
        $name= $request->input('name');
        $email= $request->input('email');
        $user_message= $request->input('message');

        try{
            Mail::to($email)->send(new SentMail($name, $email, $user_message));
        } catch(Exception $error){
            return redirect()->back()->with('emailError', "C'e' stato un problema con l'invio della tua email. Riprova tra qualche minuto");
        }

        return redirect(route('homepage'))->with('emailSent', 'Abbiamo ricevuto la tua email! Ti ricontatteremo il prima possibile');

    }

}


