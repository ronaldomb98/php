<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHobbiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {


        Schema::create('hobbies', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name')
                  ->comment('Name will be an attribute with which we referenced to user the hobbie')
                  ->default('No Name Specified');
            $table->longText('description')->nullable();

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
        Schema::dropIfExists('hobbies');
    }
}
/* 

Command	Description
$table->bigIncrements('id');	Incrementing ID (primary key) using a "UNSIGNED BIG INTEGER" equivalent.
$table->bigInteger('votes');	BIGINT equivalent for the database.

$table->binary('data');	BLOB equivalent for the database.
$table->boolean('confirmed');	BOOLEAN equivalent for the database.
$table->char('name', 4);	CHAR equivalent with a length.
$table->date('created_at');	DATE equivalent for the database.
$table->dateTime('created_at');	DATETIME equivalent for the database.
$table->dateTimeTz('created_at');	DATETIME (with timezone) equivalent for the database.
$table->decimal('amount', 5, 2);	DECIMAL equivalent with a precision and scale.
$table->double('column', 15, 8);	DOUBLE equivalent with precision, 15 digits in total and 8 after the decimal point.
$table->enum('choices', ['foo', 'bar']);	ENUM equivalent for the database.
$table->float('amount', 8, 2);	FLOAT equivalent for the database, 8 digits in total and 2 after the decimal point.
$table->increments('id');	Incrementing ID (primary key) using a "UNSIGNED INTEGER" equivalent.
$table->integer('votes');	INTEGER equivalent for the database.
$table->ipAddress('visitor');	IP address equivalent for the database.
$table->json('options');	JSON equivalent for the database.
$table->jsonb('options');	JSONB equivalent for the database.
$table->longText('description');	LONGTEXT equivalent for the database.
$table->macAddress('device');	MAC address equivalent for the database.
$table->mediumIncrements('id');	Incrementing ID (primary key) using a "UNSIGNED MEDIUM INTEGER" equivalent.
$table->mediumInteger('numbers');	MEDIUMINT equivalent for the database.
$table->mediumText('description');	MEDIUMTEXT equivalent for the database.
$table->morphs('taggable');	Adds unsigned INTEGER taggable_id and STRING taggable_type.
$table->nullableMorphs('taggable');	Nullable versions of the morphs() columns.
$table->nullableTimestamps();	Nullable versions of the timestamps() columns.
$table->rememberToken();	Adds remember_token as VARCHAR(100) NULL.
$table->smallIncrements('id');	Incrementing ID (primary key) using a "UNSIGNED SMALL INTEGER" equivalent.
$table->smallInteger('votes');	SMALLINT equivalent for the database.
$table->softDeletes();	Adds nullable deleted_at column for soft deletes.
$table->string('email');	VARCHAR equivalent column.
$table->string('name', 100);	VARCHAR equivalent with a length.
$table->text('description');	TEXT equivalent for the database.
$table->time('sunrise');	TIME equivalent for the database.
$table->timeTz('sunrise');	TIME (with timezone) equivalent for the database.
$table->tinyInteger('numbers');	TINYINT equivalent for the database.
$table->timestamp('added_on');	TIMESTAMP equivalent for the database.
$table->timestampTz('added_on');	TIMESTAMP (with timezone) equivalent for the database.
$table->timestamps();	Adds nullable created_at and updated_at columns.
$table->timestampsTz();	Adds nullable created_at and updated_at (with timezone) columns.
$table->unsignedBigInteger('votes');	Unsigned BIGINT equivalent for the database.
$table->unsignedInteger('votes');	Unsigned INT equivalent for the database.
$table->unsignedMediumInteger('votes');	Unsigned MEDIUMINT equivalent for the database.
$table->unsignedSmallInteger('votes');	Unsigned SMALLINT equivalent for the database.
$table->unsignedTinyInteger('votes');	Unsigned TINYINT equivalent for the database.
$table->uuid('id');	UUID equivalent for the database.

C

MODIFIERS


Modifier	Description
->after('column')	Place the column "after" another column (MySQL Only)
->comment('my comment')	Add a comment to a column
->default($value)	Specify a "default" value for the column
->first()	Place the column "first" in the table (MySQL Only)
->nullable()	Allow NULL values to be inserted into the column
->storedAs($expression)	Create a stored generated column (MySQL Only)
->unsigned()	Set integer columns to UNSIGNED
->virtualAs($expression)	Create a virtual generated column (MySQL Only)
*/


