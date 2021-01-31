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
    }
}
