<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class ResumesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::first();

        DB::table('Resumes')->insert([
            'user_id' => $user->id,
            'name' => $user->username,
            'sex' => rand(0, 1),
            'position' => '程序员',
            'city' => '北京',
            'mobile' => $user->mobile,
            'email' => str_random(10) . '@gmail.com',
            'value' => rand(4100, 9600),
            'is_open' => 1,
        ]);
    }
}
