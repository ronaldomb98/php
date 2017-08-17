<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //
    protected $table ='ClienteTable';

    protected $fillable = [
        'name', 'surname', # en caso de no agregar ninguno, lo deja en blanco
    ];
}
