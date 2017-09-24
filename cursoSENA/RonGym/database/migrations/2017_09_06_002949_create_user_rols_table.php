<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserRolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('users_rol', function (Blueprint $table)
            {   
                // main rows
                $table->increments('id');
                $table->integer('users_id')->unsigned();
                $table->smallInteger('rol_id')->unsigned();

                // timestamps
                $table->timestamps();

                // foreings keys
                $table->foreign('users_id')->references('id')->on('users');
                $table->foreign('rol_id')->references('id')->on('rols');


            });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
