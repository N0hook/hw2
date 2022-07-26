<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Session;
use App\Models\Utente; 

class LogoutController extends BaseController
{
    public function do_logout()
    {
        Session::flush(); 
        return redirect('home');
    }
}

?>