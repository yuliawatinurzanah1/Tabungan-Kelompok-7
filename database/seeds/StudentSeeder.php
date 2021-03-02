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
         	'stu_usr_id'      => '9',
         	'stu_class_id'    => '5',
         	'stu_nis'         => '987654321',
         	'stu_school_year' => '2018-2021'
         ]);

        DB::table('students')->insert([
         	'stu_id'          => '2',
         	'stu_usr_id'      => '10',
         	'stu_class_id'    => '5',
         	'stu_nis'         => '987654322',
         	'stu_school_year' => '2018-2021'
         ]);

        DB::table('students')->insert([
         	'stu_id'          => '3',
         	'stu_usr_id'      => '11',
         	'stu_class_id'    => '5',
         	'stu_nis'         => '987654323',
         	'stu_school_year' => '2018-2021'
         ]);

        DB::table('students')->insert([
         	'stu_id'          => '4',
         	'stu_usr_id'      => '12',
         	'stu_class_id'    => '5',
         	'stu_nis'         => '987654324',
         	'stu_school_year' => '2018-2021'
         ]);

        DB::table('students')->insert([
         	'stu_id'          => '5',
         	'stu_usr_id'      => '13',
         	'stu_class_id'    => '5',
         	'stu_nis'         => '987654325',
         	'stu_school_year' => '2018-2021'
         ]);

        DB::table('students')->insert([
         	'stu_id'          => '6',
         	'stu_usr_id'      => '14',
         	'stu_class_id'    => '5',
         	'stu_nis'         => '987654326',
         	'stu_school_year' => '2018-2021'
         ]);

        DB::table('students')->insert([
         	'stu_id'          => '7',
         	'stu_usr_id'      => '15',
         	'stu_class_id'    => '5',
         	'stu_nis'         => '987654326',
         	'stu_school_year' => '2018-2021'
         ]);

     
	}
}
