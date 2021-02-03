<?php

use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          DB::table('students')->insert([
         	'stu_id'          => '1',
         	'stu_usr_id'      => '1',
         	'stu_class_id'    => '1',
         	'stu_nis'         => '31595913',
         	'stu_school_year' => '06-09-2003'
         ]);
    }
}
