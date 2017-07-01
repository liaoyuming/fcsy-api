<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsToResumesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	    Schema::table('resumes', function (Blueprint $table) {
		    $table->text('education');
		    $table->text('practice');
		    $table->text('honor');
		    $table->text('work');
		    $table->text('speciality');
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
		    $table->dropColumn('education');
		    $table->dropColumn('practice');
		    $table->dropColumn('honor');
		    $table->dropColumn('work');
		    $table->dropColumn('speciality');
	    });
    }
}
