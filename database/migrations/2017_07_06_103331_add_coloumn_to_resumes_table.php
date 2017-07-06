<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColoumnToResumesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasColumn('resumes', 'character_type_id')) {
            Schema::table('resumes', function (Blueprint $table) {
                $table->integer('character_type_id')->unsigned()->nullable()->after('is_open');
    	    });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasColumn('resumes', 'character_type_id')) {
            Schema::table('resumes', function (Blueprint $table) {
                $table->dropColumn('character_type_id');
           });
        }
    }
}
