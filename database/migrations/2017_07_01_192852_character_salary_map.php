<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CharacterSalaryMap extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	    Schema::create('character_salaries', function (Blueprint $table) {
		    $table->increments('id');
		    $table->integer('character_id')->unsigned();
		    $table->integer('min_salary')->unsigned();
		    $table->integer('max_salary')->unsigned();
	    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
	    Schema::dropIfExists('character_salaries');
    }
}
