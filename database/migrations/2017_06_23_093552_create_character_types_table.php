<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCharacterTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('character_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('display_name');
            $table->string('personality')->nullable()->comment('个性特征');
            $table->text('emotion')->nullable()->comment('情绪特征');
            $table->text('advantage')->nullable()->comment('优点');
            $table->text('proposal')->nullable()->comment('发展建议');
            $table->text('task')->nullable()->comment('本周任务');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('character_types');
    }
}
