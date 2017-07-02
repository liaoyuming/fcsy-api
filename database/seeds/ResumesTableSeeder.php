<?php

use Illuminate\Database\Seeder;
use App\Models\WechatUser;

class ResumesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $wxUser = WechatUser::first();

        DB::table('resumes')->insert([
            'open_id' => $wxUser->open_id,
            'name' => $wxUser->nickname,
            'gender' => rand(0, 1),
            'position' => '程序员',
            'city' => '北京',
            'mobile' => '135'.str_random(8),
            'email' => str_random(10) . '@gmail.com',
            'value' => rand(4100, 9600),
            'is_open' => 1,
        ]);
    }
}
