<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class EstadoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('estado')->insert([
            'nombre' => 'activo',
            'created_at' => date('Y-m-d h:i:s')          
        ]);
    }
}
