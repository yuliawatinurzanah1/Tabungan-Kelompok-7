<?php

use Illuminate\Database\Seeder;

class SavingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          DB::table('savings')->insert([
         	'sav_id'         => '1',
         	'sav_student_id' => '1',
         	'sav_class_id'   => '1',
         	'sav_amount'     => 'Rp. 10.000,00',
         	'sav_date'       => '01-03-2021'        	
          ]);

          DB::table('savings')->insert([
         	'sav_id'         => '2',
         	'sav_student_id' => '2',
         	'sav_class_id'   => '1',
         	'sav_amount'     => 'Rp. 50.000,00',
         	'sav_date'       => '01-03-2021'        	
          ]);

           DB::table('savings')->insert([
         	'sav_id'         => '3',
         	'sav_student_id' => '3',
         	'sav_class_id'   => '1',
         	'sav_amount'     => 'Rp. 20.000,00',
         	'sav_date'       => '01-03-2021'        	
          ]);

          DB::table('savings')->insert([
         	'sav_id'         => '4',
         	'sav_student_id' => '4',
         	'sav_class_id'   => '2',
         	'sav_amount'     => 'Rp. 40.000,00',
         	'sav_date'       => '01-03-2021'        	
          ]);

          DB::table('savings')->insert([
         	'sav_id'         => '5',
         	'sav_student_id' => '5',
         	'sav_class_id'   => '2',
         	'sav_amount'     => 'Rp. 20.000,00',
         	'sav_date'       => '01-03-2021'        	
          ]);

          DB::table('savings')->insert([
         	'sav_id'         => '6',
         	'sav_student_id' => '6',
         	'sav_class_id'   => '2',
         	'sav_amount'     => 'Rp. 10.000,00',
         	'sav_date'       => '01-03-2021'        	
          ]);
    }
}
