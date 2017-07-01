<?php

use Illuminate\Database\Seeder;

class CharacterSalariesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    DB::table('character_salaries')->insert([
		    [
			    'character_id' => '1',
			    'min_salary' => '3350',
			    'max_salary' => '3450',
		    ],
		    [
			    'character_id' => '2',
			    'min_salary' => '3600',
			    'max_salary' => '3700',
		    ],
		    [
			    'character_id' => '3',
			    'min_salary' => '3800',
			    'max_salary' => '4000',
		    ],
		    [
			    'character_id' => '4',
			    'min_salary' => '3400',
			    'max_salary' => '3500',
		    ],
		    [
			    'character_id' => '5',
			    'min_salary' => '3650',
			    'max_salary' => '3750',
		    ],
		    [
			    'character_id' => '6',
			    'min_salary' => '3450',
			    'max_salary' => '3550',
		    ],
		    [
			    'character_id' => '7',
			    'min_salary' => '3500',
			    'max_salary' => '3600',
		    ],
		    [
			    'character_id' => '8',
			    'min_salary' => '3900',
			    'max_salary' => '4100',
		    ],
		    [
			    'character_id' => '9',
			    'min_salary' => '3700',
			    'max_salary' => '3800',
		    ],
	    ]);
    }
}
