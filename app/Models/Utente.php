<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Utente extends Model
{
    protected $table = "utenti";

    protected $primaryKey = 'username';
    protected $autoIncrement = false;
    protected $keyType = "string";
    public $timestamps = false;

    protected $fillable = ['nome', 'cognome', 'username', 'email', 'password'];

    protected $hidden = ['password'];

    //utente-preferiti
    public function preferiti_utente()
    {
        return $this->HasMany("App\Models\Preferito");
    }

}

?>