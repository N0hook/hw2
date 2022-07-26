<?php


namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Session;
use App\Models\Utente; 
use App\Models\Preferito; 
use App\Models\Album; 



class ListeController extends BaseController
{
    public function mostra_liste()
    {
       
        if(!Session::get('username')) 
        {
           return redirect('signup'); 
        } 
        else
        {
            $utente = Utente::find(Session::get('username'));
            return view('liste')->with('username', $utente->username);
        }

    }

}

?>