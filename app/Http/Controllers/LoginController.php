<?php


namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Session;
use App\Models\Utente; 

class LoginController extends BaseController
{
    public function login_form()
    {
        $errore = Session::get('errore');
        Session::forget('errore');
        return view('login')->with('errore', $errore);
    }

    public function do_login()
    {
        //controllo degli errori in inserimento

        if(strlen(request('username')) == 0 || strlen(request('password')) == 0)
        {
            Session::put('errore', 'campo_vuoto');
            return redirect('login'); 
        }
        
        $utente_loggato = Utente::where('username', request('username'))->first();

        if(!$utente_loggato)
        {
            Session::put('errore', 'utente_non_esistente');
            return redirect('login'); 
        }

        if(!password_verify(request('password'), $utente_loggato->password))
        {
            Session::put('errore', 'password_sbagliata');
            return redirect('login'); 
        }

            Session::put('username', $utente_loggato->username);

            return redirect('home');
        
    }

}


?>