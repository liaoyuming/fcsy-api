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
	    Schema::table('resumes', function (Blueprint $table) {
		    $table->renameColumn('open_id', 'user_id');
		    $table->foreign('user_id')->references('id')->on('users');
	    });
    }
}
