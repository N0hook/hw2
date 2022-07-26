<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Session;
use App\Models\Utente; 
use App\Models\Preferito; 
use App\Models\Album;


class CercaAlbumController extends BaseController
{
    public function cerca_album()
    {
        return view('cerca_album');
    }

    public function api_cerca_album($titolo)
    {
        $url_token = "https://accounts.spotify.com/api/token";

        //richiesta token:

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url_token);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

        curl_setopt($curl, CURLOPT_POST, 1);

        curl_setopt($curl, CURLOPT_POSTFIELDS,"grant_type=client_credentials"); //body
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Authorization: Basic '.base64_encode(env('client_id_spotify').':'.env('client_secret_spotify')))); 

        $token=json_decode(curl_exec($curl), true);
        curl_close($curl); 

        //ricerca
        $url_spotify = "https://api.spotify.com/v1/search?type=album&include_external=audiooffset=0&limit=10&q=".$titolo; 
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url_spotify);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Authorization: Bearer '.$token["access_token"])); 
        $result=curl_exec($curl);
        echo $result;
        curl_close($curl);
    }

    public function check_connessione()
    {
        if(!Session::get('username')) 
        {
           return 0; 
        } 
        else
        {
            return 1;
        }
    }

    public function check_preferito($id_album)
    {

        $utente = Session::get('username'); 
        $album = Preferito::find($id_album);


        if(Session::get('username') and $album)
        {
            if($album->nome_utente == $utente)
            {
                return 1;
            }
            else
            {
                return 0;
            }
        }
        else
        {
            return -1;
        }
    
        
    }


    public function aggiungi_album()
    {
        $album = new Album;

        $album->id = request('id');

        if(!Album::find($album->id))
        {
            $album->cover = request('cover');
            $album->nome = request('nome');
            $album->autore = request('autore');
            $album->data_uscita = request('data_uscita');
            $album->num_tracce = request('num_tracce');
           
            $album->save(); 
        }
      

    }

    public function aggiungi_preferito()
    { 
        $preferito = new Preferito; 

        $utente = Session::get('username');

        $preferito->nome_utente = $utente;
        $preferito->id_album = request('id');
        
        $preferito->save(); 
    }
}
                      
        

    









?>