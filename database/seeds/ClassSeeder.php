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
        	'class_name' => 'X Rekayasa Perangkat Lunak' 
          ]);
          
          DB::table('classes')->insert([
            'class_id'          => '2',
            'class_grade_id' 	=> '1',
            'class_major_id'    => '2',
            'class_name' => 'X Multimedia' 
            ]);

          DB::table('classes')->insert([
              'class_id'          => '3',
              'class_grade_id' 	=> '2',
              'class_major_id'    => '1',
              'class_name' => 'XI Rekayasa Perangkat Lunak' 
              ]);

          DB::table('classes')->insert([
            'class_id'          => '4',
            'class_grade_id' 	=> '2',
            'class_major_id'    => '2',
            'class_name' => 'XI Multimedia' 
            ]);

          DB::table('classes')->insert([
              'class_id'          => '5',
              'class_grade_id' 	=> '3',
              'class_major_id'    => '1',
              'class_name' => 'XII Rekayasa Perangkat Lunak' 
              ]);

          DB::table('classes')->insert([
            'class_id'          => '6',
            'class_grade_id' 	=> '3',
            'class_major_id'    => '2',
            'class_name' => 'XII Multimedia' 
            ]);

              
            
    }
}
