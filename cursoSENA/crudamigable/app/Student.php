<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Student extends Model
{
    //
    protected $fillable = [
        'name', 'surname', 'address'
    ];

    public function hobbies()
    {
        return $this->belongsToMany('App\Hobbie', 'student_hobbies')
            ->withPivot('comment')
            ->wherePivot('comment', 'like', 'Excepturi%')
            ->withTimestamps();
    }

}
