<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function hola1()
    {
        /*$prueba = new UsuarioController();
        echo $prueba->index();*/
        
        $prueba = UsuarioController::index();
        echo $prueba;

        /*
        $arr = [
                'insert'=>true,
                'update'=>false,
                'delete'=>true,
                'view'=>false
               ];
        $res = $this->hola2($arr);
        echo $res;*/
    }
    
    /**
     * @param  [string]
     * @return [int]
     */
    public function hola2($mensaje)
    {   
        $true=$false=0;
        foreach ($mensaje as $key => $value) {
            if ($value) {
                $true++;
            }else{
                $false++;
            }
        }
        return 'Verdaderos:'.$true.'<br>'.
               'Falsos:'.$false;             
        
    }
}
