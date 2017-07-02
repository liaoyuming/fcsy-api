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
            $table->integer('user_id')->unsigned()->default(0)->comment('user表外键');
            $table->tinyInteger('gender')->comment('性别');
            $table->string('city')->comment('city');
            $table->string('province')->comment('province');
            $table->string('country')->comment('country');
            $table->string('avatar_url')->comment('avatar_url');
            $table->string('nickname')->comment('昵称');
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
        Schema::dropIfExists('wechat_users');
    }
}
