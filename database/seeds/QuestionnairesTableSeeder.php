<?php

use Illuminate\Database\Seeder;

class QuestionnairesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questionnaires')->insert([
            [
                'id' => 1,
                'name' => 'small',
                'display_name' => '36 题',
            ],
            [
                'id' => 2,
                'name' => 'middle',
                'display_name' => '45 题',
            ],
            [
                'id' => 3,
                'name' => 'large',
                'display_name' => '144 题',
            ],
        ]);
    }
}
