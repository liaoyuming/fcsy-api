<?php

use Illuminate\Database\Seeder;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $questions = [];
        for($i = 1; $i <= 36; $i++) {
            $questions[] = [
                'id' => $i,
                'questionnaire_id' => 1, // 36 题
            ];
        }
        for($i = 36 + 1; $i <= 36 + 45; $i++) {
            $questions[] = [
                'id' => $i,
                'questionnaire_id' => 2, // 36 题
            ];
        }
        for($i = 36 + 45 + 1; $i <= 36 + 45 + 144; $i++) {
            $questions[] = [
                'id' => $i,
                'questionnaire_id' => 3, // 36 题
            ];
        }
        DB::table('questions')->insert($questions);
    }
}
