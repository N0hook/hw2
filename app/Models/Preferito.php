<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Preferito extends Model
{
    protected $table = "preferiti";

    protected $primaryKey = 'id_album';
    protected $autoIncrement = false;
    protected $keyType = "string";
    public $timestamps = false;

    protected $fillable = ['nome_utente', 'id_album'];

    //relazione preferito-utente
    public function utenti()
    {
        return $this->belongsTo('App\Models\Utente');
    }

    public function album()
    {
        return $this->belongsTo('App\Models\Album');
    }

}

?>