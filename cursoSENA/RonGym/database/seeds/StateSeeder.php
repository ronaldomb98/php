<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$factory(App\State::class, 5)->create();
        DB::table('states')->insert([
        	'name' => 'Activo'
        ]);
    }
}
