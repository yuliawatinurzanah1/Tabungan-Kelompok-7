<?php

use Illuminate\Database\Seeder;

class SavingUsageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //{
         DB::table('saving_usages')->insert([
            'usa_id'         => '1',
            'usa_stu_id'     => '1',
            'usa_class_id'   => '1',
            'usa_amount'     => '500000',
            'usa_date'       => '05-02-2018',
            'usa_information' => 'Pembelian Buku Paket'        	
         ]);

         DB::table('saving_usages')->insert([
            'usa_id'         => '2',
            'usa_stu_id'     => '2',
            'usa_class_id'   => '1',
            'usa_amount'     => '1000000',
            'usa_date'       => '03-01-2018',
            'usa_information' => 'Pembelian Buku Tulis'        	
         ]);

          DB::table('saving_usages')->insert([
            'usa_id'         => '3',
            'usa_stu_id'     => '3',
            'usa_class_id'   => '1',
            'usa_amount'     => '1500000',
            'usa_date'       => '06-03-2018',
            'usa_information' => 'Pembelian Buku Tulis'       	
         ]);

           DB::table('saving_usages')->insert([
            'usa_id'         => '4',
            'usa_stu_id'     => '4',
            'usa_class_id'   => '1',
            'usa_amount'     => '500000',
            'usa_date'       => '04-02-2018',
            'usa_information' => 'Pembelian Buku Tulis'        	
         ]);

           DB::table('saving_usages')->insert([
            'usa_id'         => '5',
            'usa_stu_id'     => '5',
            'usa_class_id'   => '1',
            'usa_amount'     => '2500000',
            'usa_date'       => '07-07-2018',
            'usa_information' => 'Pembelian Buku Tulis'        	
         ]);

           DB::table('saving_usages')->insert([
            'usa_id'         => '6',
            'usa_stu_id'     => '6',
            'usa_class_id'   => '1',
            'usa_amount'     => '500000',
            'usa_date'       => '02-04-2018',
            'usa_information' => 'Pembelian Buku Paket'        	
         ]);

           DB::table('saving_usages')->insert([
            'usa_id'         => '7',
            'usa_stu_id'     => '7',
            'usa_class_id'   => '2',
            'usa_amount'     => '2000000',
            'usa_date'       => '01-06-2018',
            'usa_information' => 'Pembelian Buku Tulis'        	
         ]);

           DB::table('saving_usages')->insert([
            'usa_id'         => '8',
            'usa_stu_id'     => '1',
            'usa_class_id'   => '3',
            'usa_amount'     => '2000000',
            'usa_date'       => '22-02-2019',
            'usa_information' => 'Pembelian Buku Tulis'       	
         ]);

           DB::table('saving_usages')->insert([
            'usa_id'         => '9',
            'usa_stu_id'     => '2',
            'usa_class_id'   => '3',
            'usa_amount'     => '500000',
            'usa_date'       => '12-02-2019',
            'usa_information' => 'Pembelian Alat Tulis'        	
         ]);

           DB::table('saving_usages')->insert([
            'usa_id'         => '10',
            'usa_stu_id'     => '3',
            'usa_class_id'   => '3',
            'usa_amount'     => '1000000',
            'usa_date'       => '25-02-2019', 
            'usa_information' => 'Pembelian Alat Tulis'         	
         ]);

           DB::table('saving_usages')->insert([
            'usa_id'         => '11',
            'usa_stu_id'     => '4',
            'usa_class_id'   => '3',
            'usa_amount'     => '500000',
            'usa_date'       => '21-02-2019',
            'usa_information' => 'Pembelian Alat Tulis'          	
         ]);

           DB::table('saving_usages')->insert([
            'usa_id'         => '12',
            'usa_stu_id'     => '5',
            'usa_class_id'   => '3',
            'usa_amount'     => '1000000',
            'usa_date'       => '02-03-2019',
            'usa_information' => 'Pembelian Buku Paket'         	
         ]);

           DB::table('saving_usages')->insert([
            'usa_id'         => '13',
            'usa_stu_id'     => '6',
            'usa_class_id'   => '3',
            'usa_amount'     => '1000000',
            'usa_date'       => '02-04-2019',
            'usa_information' => 'Pembelian Buku Paket'       	
         ]);

           DB::table('saving_usages')->insert([
            'usa_id'         => '14',
            'usa_stu_id'     => '7',
            'usa_class_id'   => '4',
            'usa_amount'     => '500000',
            'usa_date'       => '11-02-2019',
            'usa_information' => 'Pembelian Buku Tulis'        	
         ]);

           DB::table('saving_usages')->insert([
            'usa_id'         => '15',
            'usa_stu_id'     => '1',
            'usa_class_id'   => '5',
            'usa_amount'     => '1000000',
            'usa_date'       => '03-04-2020',
            'usa_information' => 'Pembelian Alat Tulis'        	
         ]);

           DB::table('saving_usages')->insert([
            'usa_id'         => '16',
            'usa_stu_id'     => '2',
            'usa_class_id'   => '5',
            'usa_amount'     => '3000000',
            'usa_date'       => '13-03-2020',
            'usa_information' => 'Pembelian Alat Tulis'       	
         ]);

           DB::table('saving_usages')->insert([
            'usa_id'         => '17',
            'usa_stu_id'     => '3',
            'usa_class_id'   => '5',
            'usa_amount'     => '1000000',
            'usa_date'       => '23-03-2020',
            'usa_information' => 'Pembelian Buku Tulis'        	
         ]);

           DB::table('saving_usages')->insert([
            'usa_id'         => '18',
            'usa_stu_id'     => '4',
            'usa_class_id'   => '6',
            'usa_amount'     => '500000',
            'usa_date'       => '23-03-2020',
            'usa_information' => 'Pembelian Buku Paket'        	
         ]);

           DB::table('saving_usages')->insert([
            'usa_id'         => '19',
            'usa_stu_id'     => '5',
            'usa_class_id'   => '5',
            'usa_amount'     => '1500000',
            'usa_date'       => '03-05-2020',
            'usa_information' => 'Pembelian Buku Paket'        	
         ]);

           DB::table('saving_usages')->insert([
            'usa_id'         => '20',
            'usa_stu_id'     => '6',
            'usa_class_id'   => '6',
            'usa_amount'     => '1500000',
            'usa_date'       => '10-03-2020',
            'usa_information' => 'Pembelian Buku Tulis'        	
         ]);

            DB::table('saving_usages')->insert([
            'usa_id'         => '21',
            'usa_stu_id'     => '7',
            'usa_class_id'   => '7',
            'usa_amount'     => '500000',
            'usa_date'       => '03-062020',
            'usa_information' => 'Pembelian Alat Tulis'        	
         ]);
   }
}
