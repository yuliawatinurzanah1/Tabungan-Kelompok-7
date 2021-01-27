<?php

use Illuminate\Database\Seeder;

class WakelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('wakels')->insert([
            'teacher_id'     => '1',
            'name_teacher'   => 'Esaa Amalia',
            'nuptk'          => '90',
            'nik'            => '12345678',
            'place_of_birth' => 'Bandung',
            'date_of_birth'  => '19-10-1991',
            'religion'       => 'Islam',
            'marital_status' => 'Married',
            'address'        => 'Paledang Indah'
         ]);
    }
}
