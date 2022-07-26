<?php


namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Session;
use App\Models\Utente; 

class ClassificaController extends BaseController
{
    public function mostra_classifica()
    {
        return view('visualizza_classifica');
    }

    public function richiesta_classifica($paese)
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

        //ricerca dei dati 

        $url_paese = "https://api.spotify.com/v1/browse/new-releases?country=";
        $url_globale = "https://api.spotify.com/v1/browse/new-releases?";

        if($paese != 'globale' || $paese != 'GLOBALE')
        {
            $url_spotify = $url_paese.$paese;
        }
        
        if($paese == 'globale' || $paese =='GLOBALE')
        {
            $url_spotify = $url_globale;
        }

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url_spotify);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Authorization: Bearer '.$token["access_token"])); 
        $result=curl_exec($curl);
        echo $result;
        curl_close($curl);


    }
}
