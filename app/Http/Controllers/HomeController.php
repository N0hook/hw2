<?php


namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Session;
use App\Models\Contenuto;
use App\Models\Utente; 

class HomeController extends BaseController
{
    public function carica_home()
    {     
        return view('home');
    }

    public function carica_blocchi()
    {
        return Contenuto::all(); 
    }
}


?>