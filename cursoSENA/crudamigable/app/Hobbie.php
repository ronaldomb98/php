<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hobbie extends Model
{
    //
    protected $table = "hobbies";

    protected $fillable = [
        'name', 'description'
    ];
}
