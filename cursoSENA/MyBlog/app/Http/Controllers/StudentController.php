<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Hobbie;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::with('getHobbieName')
            ->where('id','<',3)
            ->orWhere('id','>',3)
            ->orderByDesc('id')
            ->paginate();
       return view('students.index',compact('students'));
    }
}
