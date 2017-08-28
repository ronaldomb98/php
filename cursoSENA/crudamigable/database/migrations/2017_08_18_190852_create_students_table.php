<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name');
            $table->string('surname');
            $table->text('address');

            $table->timestamps();
        });

        Schema::create('chairs', function (Blueprint $table) {
            $table->increments('id');

            $table->string('color')->default('No Color Specified');
            $table->text('description')->nullable();

            $table->integer('student_id')->unsigned()->nullable();
            
            $table->foreign('student_id')
                ->references('id')->on('students');

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
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('chairs');
        Schema::dropIfExists('students');
        
        
    }
}
