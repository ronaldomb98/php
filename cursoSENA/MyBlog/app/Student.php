<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'student';
    protected $fillable = [
      'name','description'
    ];

    public function getHobbieName()
    {
        return $this->belongsTo('App\Hobbie','hobbie_id');
    }
}
