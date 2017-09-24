<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolItemTableMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('rol_item', function (Blueprint $table) {
            $table->increments('id');
            $table->smallInteger('rol_id')->unsigned();
            $table->smallInteger('item_id')->unsigned();

            $table->foreign('rol_id')->references('id')->on('rols');
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
        //
    }
}
