<?php

use Illuminate\Database\Seeder;

class CharacterTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('character_types')->insert([
            [
                'id' => 1,
                'name' => 'perfect',
                'display_name' => '完美型',
            ],
            [
                'id' => 2,
                'name' => 'helpful',
                'display_name' => '助人型',
            ],
            [
                'id' => 3,
                'name' => 'successful',
                'display_name' => '成就型',
            ],
            [
                'id' => 4,
                'name' => 'egotistical',
                'display_name' => '自我型',
            ],
            [
                'id' => 5,
                'name' => 'rational',
                'display_name' => '理智型',
            ],
            [
                'id' => 6,
                'name' => 'skeptical',
                'display_name' => '疑惑型',
            ],
            [
                'id' => 7,
                'name' => 'lively',
                'display_name' => '活跃型',
            ],
            [
                'id' => 8,
                'name' => 'leader',
                'display_name' => '领袖型',
            ],
            [
                'id' => 9,
                'name' => 'peaceful',
                'display_name' => '和平型',
            ],
        ]);
    }
}
