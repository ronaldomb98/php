<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PruebaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id=null)
    {
        //
        
        $datos = [
            0 => [
                'id' => 1,
                'name' => 'Brayan Ronaldo',
                'surname' => 'Mojica Barrios',
                'years_old' => 19,
                'friendly' => true
                
            ],
            1 => [
                'id' => 2,
                'name' => 'Anyela',
                'surname' => 'Rodrigues',
                'years_old' => 22,
                'friendly' => true
                
            ],
            2 => [
                'id' => 3,
                'name' => 'Andres ',
                'surname' => 'Merciales',
                'years_old' => 9,
                'friendly' => false
                
            ],
            3 => [
                'id' => 4,
                'name' => 'Brayan Ronaldo',
                'surname' => 'Mojica Barrios',
                'years_old' => 19,
                'friendly' => true
                
            ]
        ];
        
        return view('inicio', compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
