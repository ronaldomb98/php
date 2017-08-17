<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $aData = '[{
        			"name":"Administrador",
        			"email":"giophonex@misena.edu.co",
        			"password":"123456",
        			"estado_id":1
        		   },{
        			"name":"Prueba",
        			"email":"pruebas@pru.co",
        			"password":"123456",
        			"estado_id":1
        		   }
        		  ]';
        foreach (json_decode($aData) as $key => $fila) {
        	User::create([
        			"name"=>$fila->name,
        			"email"=>$fila->email,
        			"password"=>bcrypt($fila->password),
        			"estado_id"=>$fila->estado_id
        		]);
        }
    }
}
