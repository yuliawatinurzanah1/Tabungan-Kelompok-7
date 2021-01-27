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
         	'nisn'           => '315913',
         	'name'           => 'Yuliawati Nur Zanah',
         	'school_year'    =>	'2019/2021',
         	'place_of_birth' => 'Bandung',
         	'date_of_birth'  => '06-09-2003',
         	'religion'       => 'Islam',
         	'address'        => 'Landean Girang'
         ]);
    }
}
