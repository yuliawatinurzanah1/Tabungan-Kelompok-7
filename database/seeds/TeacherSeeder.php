<?php

use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teachers')->insert([
        	'tcr_id'        	 => '1',
        	'tcr_usr_id'		 => '1',
        	'tcr_class_id'  	 => '1',
        	'tcr_nik'			 => '123456789',
        	'tcr_marital_status' => 'Belum Menikah'
        	]);
    }
}
