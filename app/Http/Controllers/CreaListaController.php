<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Session;
use App\Models\Utente; 
use App\Models\Preferito; 
use App\Models\Album;


class CreaListaController extends BaseController
{
    public function lista()
    {
        return view('crea_liste');
    }
}

?>