<?php

use Illuminate\Database\Seeder;

class ClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          DB::table('classes')->insert([
        	'class_id'          => '1',
        	'class_grade_id' 	=> '1',
        	'class_major_id'    => '1',
        	'class_description' => 'X Rekayasa Perangkat Lunak' 
        	]);
    }
}
