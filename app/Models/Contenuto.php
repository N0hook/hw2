<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contenuto extends Model
{
    protected $table = "contenuti";

    protected $primaryKey = 'id';
    protected $autoIncrement = false;
    protected $keyType = "string";
    public $timestamps = false;

    protected $fillable = ['id', 'testo', 'immagine'];


}

?>