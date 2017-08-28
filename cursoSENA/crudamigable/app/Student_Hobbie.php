<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student_Hobbie extends Model
{
    //
    protected $table = "student_hobbies";

    protected $fillable = [
        'hobbie_id', 'student_id'
    ];
}
