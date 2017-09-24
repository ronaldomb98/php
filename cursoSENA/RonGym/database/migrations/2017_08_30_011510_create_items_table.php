<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->smallIncrements('id');

            $table->smallInteger('state_id')->unsigned();
            $table->smallInteger('item_id')->unsigned();
            
            $table->string('name');
            $table->string('route');
            $table->string('icon');
            
            $table->foreign('state_id')->references('id')->on('states');
            $table->foreign('item_id')->references('id')->on('items');

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
        Schema::dropIfExists('items');
    }
}
