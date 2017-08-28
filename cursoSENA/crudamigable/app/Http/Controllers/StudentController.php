<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Hobbie;
class StudentController extends Controller
{
    //
    
    public function index() 
    {
        
        // Metodo para hobbies 
        $students = Hobbie::where('id', '<', 15)
                            ->orWhere('name', '=', 25)
                            ->orderBy('id', 'DESC')
                            ->limit(5)
                            ->get();
        
        foreach ($students as $key => $value) {
            echo $value."<br>";
        }

        /* // TEST MIN AND MAX VALUE REFERENCED BY ID

        //$hobbieId = Hobbie::min('id');
        //$hobbieId = Hobbie::max('id');

        //echo $hobbieId; */

        //return view('welcome', compact('students'));


        //Metodo para mirar los hobbies

        /* $hobbies_students = Student::find(35);
        
        foreach ($hobbies_students->hobbies as $key => $hobbie)
        {
            echo $hobbie->pivot.'<br>';
            echo '<br>';
        } */
        
    }

    public function store() 
    {

    }

    public function create() 
    {

    }

    
    public function show($id) 
    {

    }
    
    public function update($id) 
    {

    }
    
    public function destroy($id) 
    {

    }
    
    public function edit($id) 
    {

    }
}
