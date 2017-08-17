<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Product
 *
 * @mixin \Eloquent
 */
class Product extends Model
{
    protected $table = 'hobbie';
    protected $fillable = [
        'name', 'short', 'body', # en caso de no agregar ninguno, lo deja en blanco
    ];
}
