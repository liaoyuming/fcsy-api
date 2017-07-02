<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModifyColumnFromUserIdToOpenId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	    Schema::table('user_question', function (Blueprint $table) {
		    $table->dropForeign('user_question_user_id_foreign');
		    $table->renameColumn('user_id', 'open_id');
	    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasColumn('user_question', 'open_id')) {
	        Schema::table('user_question', function (Blueprint $table) {
                $table->renameColumn('open_id', 'user_id');
                $table->foreign('user_id')->references('id')->on('users');
	        });
        }
    }
}
