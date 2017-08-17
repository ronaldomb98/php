<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MakeStudentHobbieTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('hobbie',function($table)
        {
            $table->increments('id');

            $table->string('name');
            $table->text('description');

            $table->timestamps();
        });

        Schema::create('student',function($table)
        {
            $table->increments('id');
            $table->string('name');
            $table->integer('hobbie_id')->unsigned();
            $table->foreign('hobbie_id')
                ->references('id')
                ->on('hobbie')
                ->onDelete('cascade');

            $table->timestamps();
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
