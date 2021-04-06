<?php

use Illuminate\Database\Seeder;

class ReportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reports')->insert([
        	'rep_id'        => '1',
        	'rep_tcr_id' 	=> '1',
        	'rep_stu_id'    => '1',
        	'rep_class_id'  => '1', 
        	'rep_sav_id'    => '1', 
        	'rep_usa_id'    => '1' 
          ]);

          DB::table('reports')->insert([
        	'rep_id'        => '2',
        	'rep_tcr_id' 	=> '1',
        	'rep_stu_id'    => '1',
        	'rep_class_id'  => '1', 
        	'rep_sav_id'    => '2', 
        	'rep_usa_id'    => '2' 
          ]);

           DB::table('reports')->insert([
        	'rep_id'        => '3',
        	'rep_tcr_id' 	=> '2',
        	'rep_stu_id'    => '2',
        	'rep_class_id'  => '1', 
        	'rep_sav_id'    => '3', 
        	'rep_usa_id'    => '3' 
          ]);

            DB::table('reports')->insert([
        	'rep_id'        => '4',
        	'rep_tcr_id' 	=> '2',
        	'rep_stu_id'    => '2',
        	'rep_class_id'  => '2', 
        	'rep_sav_id'    => '4', 
        	'rep_usa_id'    => '4' 
          ]);

             DB::table('reports')->insert([
        	'rep_id'        => '5',
        	'rep_tcr_id' 	=> '1',
        	'rep_stu_id'    => '3',
        	'rep_class_id'  => '2', 
        	'rep_sav_id'    => '5', 
        	'rep_usa_id'    => '5' 
          ]);
    }
}
