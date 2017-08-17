<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class ItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('item')->insert([
            'nombre' => 'Roles',
            'ruta' => '/roles/index',
            'icono' => 'globe', 
            'created_at' => date('Y-m-d h:i:s')          
        ]);
    }
}
