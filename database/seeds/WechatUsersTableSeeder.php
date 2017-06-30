<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class WechatUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::first();

        DB::table('wechat_users')->insert([
           'user_id' => $user->id,
           'gender' => 1,
           'city' => 'Beijing',
           'country' => 'China',
           'province' => 'Beijing',
           'nickname' => 'Sky',
           'open_id' => '1234567890',
           'avatar_url' => 'https://wx.qlogo.cn/mmopen/vi_32/Q0j4TwGTfTLCEPBbq439QD7zL0K4EK4z6DR9RyxVOD4mmht2AhiarTicUNLcrYoq0SR49lKBRiaUMhyKYP7cP2nmicQ/0',
           'created_at' => date('Y-m-d h:i:s', time()),
           'updated_at' => date('Y-m-d h:i:s', time()),
       ]);
    }
}
