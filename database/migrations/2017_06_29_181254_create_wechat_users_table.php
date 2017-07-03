<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWechatUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wechat_users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->nullable()->comment('user表外键');
            $table->tinyInteger('gender')->nullable()->comment('性别');
            $table->string('city')->nullable()->comment('city');
            $table->string('province')->nullable()->comment('province');
            $table->string('country')->nullable()->comment('country');
            $table->string('avatar_url')->nullable()->comment('avatar_url');
            $table->string('nickname')->nullable()->comment('昵称');
            $table->string('open_id')->unique()->comment('微信open_id');
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
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('wechat_users');
    }
}
