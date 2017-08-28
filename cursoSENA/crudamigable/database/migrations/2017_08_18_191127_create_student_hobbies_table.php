<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentHobbiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_hobbies', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('hobbie_id')->unsigned();
            $table->integer('student_id')->unsigned();
            $table->string('comment')->nullable();
            $table->foreign('hobbie_id')
                ->references('id')->on('hobbies')
                ->onDelete('cascade');

            $table->foreign('student_id')
                ->references('id')->on('students')
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
        
        Schema::dropIfExists('student_hobbies');
        
        
        
        
        
        
        
        
        
        
    }
}
