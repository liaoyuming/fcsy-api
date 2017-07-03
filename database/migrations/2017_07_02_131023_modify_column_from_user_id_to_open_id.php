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
            $table->dropColumn('user_id');
            $table->string('open_id')->comment('微信open_id')->after('id');
            $table->foreign('open_id')->references('open_id')->on('wechat_users');
	    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasColumn('user_question', 'open_id') && !Schema::hasColumn('user_question', 'open_id')) {
	        Schema::table('user_question', function (Blueprint $table) {
                $table->dropColumn('open_id');
                $table->integer('user_id')->unsigned();
	        });
        }
    }
}
