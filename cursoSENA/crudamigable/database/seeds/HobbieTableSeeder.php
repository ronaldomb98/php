<?php

use Illuminate\Database\Seeder;
use Illumante\Database\Eloquent\Model;

use App\Hobbie;

class HobbieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() 
    {
        //
        factory(Hobbie::class, 5)->create();
        

        /* 
        One way to do a factory for only a value
        DB::table('hobbies')->insert([
            'name' => str_random(5),
            'description' => str_random(20)
        ]); */
    }
}