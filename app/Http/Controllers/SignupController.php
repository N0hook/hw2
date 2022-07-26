<?php


namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Session;
use App\Models\Utente; 

class SignupController extends BaseController
{
    public function signup_form()
    {
        $errore = Session::get('errore');
        Session::forget('errore');
        return view('signup')->with('errore', $errore);
    }

    public function do_signup()
    {
        //controllo degli errori in inserimento

        if(Utente::where('username', request('username'))->first())
        {
            Session::put('errore', 'utente_esistente');
            return redirect('signup')->withInput(); 
        }
        else if(request('password') < 8)
        {
            Session::put('errore', 'password_breve');
            return redirect('signup')->withInput(); 
        }
        else if(!preg_match('/^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/', request('password')))
        {
            Session::put('errore', 'password_scorretta');
            return redirect('signup')->withInput(); 
        } 
        else if(strcmp(request('password'), request('conferma_password')) != 0)
        {
            Session::put('errore', 'password_sbagliata');
            return redirect('signup')->withInput(); 
        }
        else if(!filter_var(request('email'), FILTER_VALIDATE_EMAIL))
        {
            Session::put('errore', 'mail_scorretta');
            return redirect('signup')->withInput(); 
        }

            $nuovo_utente = new Utente;

            $nuovo_utente->nome = request('nome');
            $nuovo_utente->cognome = request('cognome');
            $nuovo_utente->username = request('username');
            $nuovo_utente->email = request('email');
            $nuovo_utente->password = password_hash(request('password'), PASSWORD_BCRYPT);

            $nuovo_utente->save();

            Session::put('username', $nuovo_utente->username);

            return redirect('home');
        
    }

}


?>