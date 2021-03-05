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
        	'tcr_usr_id'		 => '2',
        	'tcr_class_id'  	 => '1',
        	'tcr_nik'			 => '123456779',
        	'tcr_marital_status' => 'Sudah Menikah'
        	]);

        DB::table('teachers')->insert([
        	'tcr_id'        	 => '2',
        	'tcr_usr_id'		 => '3',
        	'tcr_class_id'  	 => '2',
        	'tcr_nik'			 => '123456780',
        	'tcr_marital_status' => 'Belum Menikah'
        	]);

        DB::table('teachers')->insert([
        	'tcr_id'        	 => '3',
        	'tcr_usr_id'		 => '4',
        	'tcr_class_id'  	 => '3',
        	'tcr_nik'			 => '123456781',
        	'tcr_marital_status' => 'Sudah Menikah'
        	]);

        DB::table('teachers')->insert([
        	'tcr_id'        	 => '4',
        	'tcr_usr_id'		 => '5',
        	'tcr_class_id'  	 => '4',
        	'tcr_nik'			 => '123456722',
        	'tcr_marital_status' => 'Sudah Menikah'
        	]);

        DB::table('teachers')->insert([
        	'tcr_id'        	 => '5',
        	'tcr_usr_id'		 => '6',
        	'tcr_class_id'  	 => '5',
        	'tcr_nik'			 => '123456713',
        	'tcr_marital_status' => 'Belum Menikah'
        	]);

         DB::table('teachers')->insert([
        	'tcr_id'        	 => '6',
        	'tcr_usr_id'		 => '7',
        	'tcr_class_id'  	 => '6',
        	'tcr_nik'			 => '123456714',
        	'tcr_marital_status' => 'Sudah Menikah'
        	]);

          DB::table('teachers')->insert([
        	'tcr_id'        	 => '7',
        	'tcr_usr_id'		 => '8',
        	'tcr_class_id'  	 => '7',
        	'tcr_nik'			 => '123456715',
        	'tcr_marital_status' => 'Belum Menikah'
        	]);
    }
}
