<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
/**
 * App\Hobbie
 *
 * @mixin \Eloquent
 */
class Hobbie extends Model
{
    //

    protected $table = 'hobbie'; # Nombre que usa para los seeders
    protected $fillable = [
        'name','description'
    ];

    public function Students()
    {
        return $this->hasMany('App\Student');
    }
}
