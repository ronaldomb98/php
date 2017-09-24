<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UsersTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	[
        		'name' => 'Ronaldo',
	        	'email' => 'ronaldomb98@gmail.com',
	        	'state_id' => 1,
	        	'password' => '123123123'
        	],
        	[
        		'name' => 'Alejandra',
	        	'email' => 'alejandra@gmail.com',
	        	'state_id' => 1,
	        	'password' => '123123123'
        	]
        ]);
    }
}
