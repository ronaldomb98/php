<?php

use Illuminate\Database\Seeder;
use App\Hobbie;
class HobbiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(\App\Hobbie::class,5)->create();
    }
}
