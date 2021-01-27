<?php

use Illuminate\Database\Seeder;

class ClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('clases')->insert([
         	'class_id'   => '5',
         	'class_name' => 'XII Rekayasa Perangkat Lunak'
         	
         ]);   
     }
}
