<?php

use Illuminate\Database\Seeder;

class GradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('grades')->insert([
        	'grade_id'         => '1',
        	'grade_name' 	   => 'X'
        	]);
    }
}
