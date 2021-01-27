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
         	'saving_id'       => '1',
         	'nisn'            => '315913',
         	'name'            => 'Yuliawati Nur Zanah',
         	'school_year'     => '2019/2021',
         	'nominal_amount'  => '500.000,00',
         	'date'            => '10-10-2020'
         ]);
    }
}
