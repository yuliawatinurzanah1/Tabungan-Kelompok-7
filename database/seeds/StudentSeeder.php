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
         	'stu_usr_id'      => '2',
         	'stu_class_id'    => '1',
         	'stu_nis'         => '31595913',
         	'stu_school_year' => '2018-2021'
         ]);

        DB::table('students')->insert([
         	'stu_id'          => '2',
         	'stu_usr_id'      => '2',
         	'stu_class_id'    => '2',
         	'stu_nis'         => '31595914',
         	'stu_school_year' => '2018-2021'
         ]);

        DB::table('students')->insert([
         	'stu_id'          => '3',
         	'stu_usr_id'      => '2',
         	'stu_class_id'    => '3',
         	'stu_nis'         => '31595915',
         	'stu_school_year' => '2018-2021'
         ]);

        DB::table('students')->insert([
         	'stu_id'          => '4',
         	'stu_usr_id'      => '2',
         	'stu_class_id'    => '4',
         	'stu_nis'         => '31595916',
         	'stu_school_year' => '2018-2021'
         ]);

        DB::table('students')->insert([
         	'stu_id'          => '5',
         	'stu_usr_id'      => '2',
         	'stu_class_id'    => '5',
         	'stu_nis'         => '31595917',
         	'stu_school_year' => '2018-2021'
         ]);

        DB::table('students')->insert([
         	'stu_id'          => '6',
         	'stu_usr_id'      => '2',
         	'stu_class_id'    => '6',
         	'stu_nis'         => '31595918',
         	'stu_school_year' => '2018-2021'
         ]);

        DB::table('students')->insert([
         	'stu_id'          => '7',
         	'stu_usr_id'      => '2',
         	'stu_class_id'    => '1',
         	'stu_nis'         => '31595919',
         	'stu_school_year' => '2018-2021'
         ]);

        DB::table('students')->insert([
         	'stu_id'          => '8',
         	'stu_usr_id'      => '2',
         	'stu_class_id'    => '2',
         	'stu_nis'         => '31595920',
         	'stu_school_year' => '2018-2021'
         ]);

        DB::table('students')->insert([
         	'stu_id'          => '9',
         	'stu_usr_id'      => '2',
         	'stu_class_id'    => '3',
         	'stu_nis'         => '31595921',
         	'stu_school_year' => '2018-2021'
         ]);

        DB::table('students')->insert([
         	'stu_id'          => '10',
         	'stu_usr_id'      => '2',
         	'stu_class_id'    => '4',
         	'stu_nis'         => '31595922',
         	'stu_school_year' => '2018-2021'
         ]);

        DB::table('students')->insert([
         	'stu_id'          => '11',
         	'stu_usr_id'      => '2',
         	'stu_class_id'    => '5',
         	'stu_nis'         => '31595923',
         	'stu_school_year' => '2018-2021'
         ]);

        DB::table('students')->insert([
         	'stu_id'          => '12',
         	'stu_usr_id'      => '2',
         	'stu_class_id'    => '6',
         	'stu_nis'         => '31595924',
         	'stu_school_year' => '2018-2021'
         ]);

    }
}
