<?php

use Illuminate\Database\Seeder;
use App\Hobbie;
class HobbieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Hobbie::class, 80)->create(); # va a buscar los datos en database.factories.modelfactories
    }
}
