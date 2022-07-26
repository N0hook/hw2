<?php


namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Session;
use App\Models\Utente; 
use App\Models\Preferito; 
use App\Models\Album; 



class PreferitiController extends BaseController
{
    public function mostra_preferiti()
    {
       
        if(!Session::get('username')) 
        {
           return redirect('signup'); 
        } 
        else
        {
            $utente = Utente::find(Session::get('username'));
            return view('preferiti')->with('username', $utente->username);
        }

    }

    public function trova_preferiti()
    {
       $preferito = Preferito::select('id_album')->where("nome_utente", Session::get("username"))->get();

       $album = Album::find($preferito);

       return $album;
    }

    public function rimuovi_preferito($id_album)
    {
        $utente = Session::get('username');
        $album = Preferito::find($id_album);

        if($album->nome_utente == $utente)
        {
            $album->delete(); 

        }
        
    }
}


?>