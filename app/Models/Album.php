<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $table = "album";

    protected $primaryKey = 'id';
    protected $autoIncrement = false;
    protected $keyType = "string";
    public $timestamps = false;

    protected $fillable = ['id', 'cover', 'nome', 'autore', 'data_uscita', 'num_tracce'];

    public function preferiti()
    {
        return $this->HasMany("App\Models\Preferito");
    }


}

?>