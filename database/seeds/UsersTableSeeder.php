<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
           'username' => 'test' . str_random(4),
           'mobile' => '135'. rand(10000000, 99999999),
           'password' => bcrypt('secret'),
           'is_member' => 1,
           'created_at' => date('Y-m-d h:i:s', time()),
           'updated_at' => date('Y-m-d h:i:s', time()),
       ]);
    }
}
