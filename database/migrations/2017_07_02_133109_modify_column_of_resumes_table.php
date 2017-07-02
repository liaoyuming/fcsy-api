<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModifyColumnOfResumesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	    Schema::table('resumes', function (Blueprint $table) {
		    $table->dropForeign('resumes_user_id_foreign');
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
        if (Schema::hasColumn('resumes', 'open_id')) {
	        Schema::table('resumes', function (Blueprint $table) {
                $table->dropColumn('open_id');
                $table->integer('user_id')->unsigned();
    	    });
        }
    }
}
