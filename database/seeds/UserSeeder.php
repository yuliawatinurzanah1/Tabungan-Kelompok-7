<?php

use Illuminate\Database\Seeder;
use App\User;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'usr_name' => 'Admin',
            'usr_email' => 'admin@gmail.com',
            'usr_phone' => '08213456789',
            'usr_password' => Hash::make('admin123123'),
            'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
            'usr_is_active' => true,
        ]);

        $admin->assignRole('admin');




          $walikelas = User::create([
             'usr_name' => 'Dewi Astri Indriani',
             'usr_email' => 'dewiastriindriani@gmail.com',
             'usr_phone' => '08213156781',
             'usr_password' => Hash::make('12345678'),
             'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
             'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
             'usr_is_active' => true,
        ]);

       		 $walikelas->assignRole('walikelas');

    
          $walikelas = User::create([
             'usr_name' => 'Rosmelia',
             'usr_email' => 'rosmelia@gmail.com',
             'usr_phone' => '08210456782',
             'usr_password' => Hash::make('12345678'),
             'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
             'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
             'usr_is_active' => true,
        ]);

       		 $walikelas->assignRole('walikelas');

          $walikelas = User::create([
             'usr_name' => 'Siti Saadah',
             'usr_email' => 'sitisaadah@gmail.com',
             'usr_phone' => '08213056783',
             'usr_password' => Hash::make('12345678'),
             'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
             'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
             'usr_is_active' => true,
        ]);

       		 $walikelas->assignRole('walikelas');

          $walikelas = User::create([
             'usr_name' => 'Agfie Nurani Hanifah',
             'usr_email' => 'agfienuranihanifah@gmail.com',
             'usr_phone' => '08213406784',
             'usr_password' => Hash::make('12345678'),
             'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
             'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
             'usr_is_active' => true,
        ]);

       		 $walikelas->assignRole('walikelas');

          $walikelas = User::create([
             'usr_name' => 'Annisa Komalasari',
             'usr_email' => 'annisakomalasari@gmail.com',
             'usr_phone' => '08273456785',
             'usr_password' => Hash::make('12345678'),
             'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
             'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
             'usr_is_active' => true,
        ]);

      		  $walikelas->assignRole('walikelas');

          $walikelas = User::create([
             'usr_name' => 'Roslaila',
             'usr_email' => 'roslaila@gmail.com',
             'usr_phone' => '08613456786',
             'usr_password' => Hash::make('12345678'),
             'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
             'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
             'usr_is_active' => true,
        ]);

       		 $walikelas->assignRole('walikelas');

          $walikelas = User::create([
             'usr_name' => 'Mia Garmianti',
             'usr_email' => 'miagarmianti@gmail.com',
             'usr_phone' => '08213456087',
             'usr_password' => Hash::make('12345678'),
             'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
             'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
             'usr_is_active' => true,
        ]);

       		 $walikelas->assignRole('walikelas');

          $walikelas = User::create([
             'usr_name' => 'Essa Amalia Khairina',
             'usr_email' => 'essaamaliakhairina@gmail.com',
             'usr_phone' => '08231456787',
             'usr_password' => Hash::make('12345678'),
             'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
             'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
             'usr_is_active' => true,
        ]);

      		  $walikelas->assignRole('walikelas');

          $walikelas = User::create([
             'usr_name' => 'Siti Robiah Adawiyah',
             'usr_email' => 'sitirobiahadawiyah@gmail.com',
             'usr_phone' => '08213546787',
             'usr_password' => Hash::make('12345678'),
             'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
             'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
             'usr_is_active' => true,
        ]);

     		 $walikelas->assignRole('walikelas');





        $siswa = User::create([
            'usr_name' => 'Adit Farhan',
            'usr_email' => 'adit@gmail.com',
            'usr_phone' => '08213456878',
            'usr_password' => Hash::make('12345678'),
            'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
            'usr_is_active' => true,
        ]);

       		 $siswa->assignRole('student');

         $siswa = User::create([
            'usr_name' => 'Ahmad Maulana Siddiq',
            'usr_email' => 'maulana@gmail.com',
            'usr_phone' => '08212456777',
            'usr_password' => Hash::make('12345678'),
            'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
            'usr_is_active' => true,
        ]);

       		 $siswa->assignRole('student');

         $siswa = User::create([
            'usr_name' => 'Ahmad Mubin Rajabana H',
            'usr_email' => 'mubin@gmail.com',
            'usr_phone' => '08213457727',
            'usr_password' => Hash::make('12345678'),
            'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
            'usr_is_active' => true,
        ]);

      		  $siswa->assignRole('student');


         $siswa = User::create([
            'usr_name' => 'Ajeng Kartika',
            'usr_email' => 'ajeng@gmail.com',
            'usr_phone' => '08214356977',
            'usr_password' => Hash::make('12345678'),
            'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
            'usr_is_active' => true,
        ]);

        $siswa->assignRole('student');

            $siswa = User::create([
            'usr_name' => 'Akas Abdillah Latif	',
            'usr_email' => 'akas@gmail.com',
            'usr_phone' => '08213465707',
            'usr_password' => Hash::make('12345678'),
            'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
            'usr_is_active' => true,
        ]);

      		  $siswa->assignRole('student');

            $siswa = User::create([
            'usr_name' => 'M. Hendry Firmansyah	',
            'usr_email' => 'hendry@gmail.com',
            'usr_phone' => '08213556771',
            'usr_password' => Hash::make('12345678'),
            'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
            'usr_is_active' => true,
        ]);

      		  $siswa->assignRole('student');

      		    $siswa = User::create([
            'usr_name' => 'Mesya Putri Pratami	',
            'usr_email' => 'mesya@gmail.com',
            'usr_phone' => '08013456771',
            'usr_password' => Hash::make('12345678'),
            'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
            'usr_is_active' => true,
        ]);

      		  $siswa->assignRole('student');

      		      $siswa = User::create([
            'usr_name' => 'Mochammad Dzacky Al. A',
            'usr_email' => 'dzacky@gmail.com',
            'usr_phone' => '08213456071',
            'usr_password' => Hash::make('12345678'),
            'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
            'usr_is_active' => true,
        ]);

      		  $siswa->assignRole('student');

      		      $siswa = User::create([
            'usr_name' => 'Muammar Malik Rahadi	',
            'usr_email' => 'muammar@gmail.com',
            'usr_phone' => '08213450171',
            'usr_password' => Hash::make('12345678'),
            'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
            'usr_is_active' => true,
        ]);

      		  $siswa->assignRole('student');


    $siswa = User::create([
            'usr_name' => 'Muhamad Restu S	',
            'usr_email' => 'muhamadRestu@gmail.com',
            'usr_phone' => '08203456771',
            'usr_password' => Hash::make('12345678'),
            'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
            'usr_is_active' => true,
        ]);

      		  $siswa->assignRole('student');

  $siswa = User::create([
            'usr_name' => '	Achdian Fahrul Rizki',
            'usr_email' => 'achdian@gmail.com',
            'usr_phone' => '08113456771',
            'usr_password' => Hash::make('12345678'),
            'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
            'usr_is_active' => true,
        ]);

      		  $siswa->assignRole('student');
  $siswa = User::create([
            'usr_name' => 'Azka Ramdani	',
            'usr_email' => 'azkaramdani@gmail.com',
            'usr_phone' => '08213486771',
            'usr_password' => Hash::make('12345678'),
            'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
            'usr_is_active' => true,
        ]);

      		  $siswa->assignRole('student');
	
  $siswa = User::create([
            'usr_name' => 'Bagas Wijaya Lubis	',
            'usr_email' => 'bagaswijayalubis@gmail.com',
            'usr_phone' => '08213056771',
            'usr_password' => Hash::make('12345678'),
            'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
            'usr_is_active' => true,
        ]);

      		  $siswa->assignRole('student');
  $siswa = User::create([
            'usr_name' => 'Cindi Alfiany',
            'usr_email' => 'cindialfiany@gmail.com',
            'usr_phone' => '08213450771',
            'usr_password' => Hash::make('12345678'),
            'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
            'usr_is_active' => true,
        ]);

      		  $siswa->assignRole('student');


  $siswa = User::create([
            'usr_name' => 'Dhandy Rizky Nugraha',
            'usr_email' => 'dhandyrizkynugraha@gmail.com',
            'usr_phone' => '08213956771',
            'usr_password' => Hash::make('12345678'),
            'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
            'usr_is_active' => true,
        ]);

      		  $siswa->assignRole('student');

  $siswa = User::create([
            'usr_name' => 'Ajri Muhammad Sidiq	',
            'usr_email' => 'ajri@gmail.com',
            'usr_phone' => '08213256771',
            'usr_password' => Hash::make('12345678'),
            'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
            'usr_is_active' => true,
        ]);

      		  $siswa->assignRole('student');

      		   $siswa = User::create([
            'usr_name' => 'Arya Maulana Yusuf	',
            'usr_email' => 'arya@gmail.com',
            'usr_phone' => '08433456771',
            'usr_password' => Hash::make('12345678'),
            'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
            'usr_is_active' => true,
        ]);

      		  $siswa->assignRole('student');


 $siswa = User::create([
            'usr_name' => 'Bagus Nurmansyah	',
            'usr_email' => 'bagus@gmail.com',
            'usr_phone' => '08593456771',
            'usr_password' => Hash::make('12345678'),
            'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
            'usr_is_active' => true,
        ]);

      		  $siswa->assignRole('student');
	
	
 $siswa = User::create([
            'usr_name' => 'Dadang Suwenda Abdul R	',
            'usr_email' => 'dadang@gmail.com',
            'usr_phone' => '08313456771',
            'usr_password' => Hash::make('12345678'),
            'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
            'usr_is_active' => true,
        ]);

      		  $siswa->assignRole('student');

 $siswa = User::create([
            'usr_name' => 'Dea Novita	',
            'usr_email' => 'deanov@gmail.com',
            'usr_phone' => '08313456771',
            'usr_password' => Hash::make('12345678'),
            'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
            'usr_is_active' => true,
        ]);

      		  $siswa->assignRole('student');

 $siswa = User::create([
            'usr_name' => 'Ahmad Fauzan Musthofa	',
            'usr_email' => 'ahmadfauzanmusthofa@gmail.com',
            'usr_phone' => '08213756771',
            'usr_password' => Hash::make('12345678'),
            'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
            'usr_is_active' => true,
        ]);

      		  $siswa->assignRole('student');

      		   $siswa = User::create([
            'usr_name' => 'Akbar Mulyadi	',
            'usr_email' => 'akbarmulyadi@gmail.com',
            'usr_phone' => '08213466771',
            'usr_password' => Hash::make('12345678'),
            'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
            'usr_is_active' => true,
        ]);

      		  $siswa->assignRole('student');



 $siswa = User::create([
            'usr_name' => 'Anabila Dara Pradista	',
            'usr_email' => 'anabiladarapradista@gmail.com',
            'usr_phone' => '08213456771',
            'usr_password' => Hash::make('12345678'),
            'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
            'usr_is_active' => true,
        ]);

      		  $siswa->assignRole('student');

 $siswa = User::create([
            'usr_name' => 'Ari Ardiansyah	',
            'usr_email' => 'ariardiansyah@gmail.com',
            'usr_phone' => '08093456771',
            'usr_password' => Hash::make('12345678'),
            'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
            'usr_is_active' => true,
        ]);

      		  $siswa->assignRole('student');


 $siswa = User::create([
            'usr_name' => 'Azizah Nuril Haq	',
            'usr_email' => 'azizahnurilhaq@gmail.com',
            'usr_phone' => '08463456771',
            'usr_password' => Hash::make('12345678'),
            'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
            'usr_is_active' => true,
        ]);

      		  $siswa->assignRole('student');


 $siswa = User::create([
            'usr_name' => 'Albar Hanafi	',
            'usr_email' => 'albarhanafi@gmail.com',
            'usr_phone' => '08913456771',
            'usr_password' => Hash::make('12345678'),
            'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
            'usr_is_active' => true,
        ]);

      		  $siswa->assignRole('student');

      		   $siswa = User::create([
            'usr_name' => 'Mohamad Barqi Sinanudin	',
            'usr_email' => 'mohamadbarqisinanudin@gmail.com',
            'usr_phone' => '08513456771',
            'usr_password' => Hash::make('12345678'),
            'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
            'usr_is_active' => true,
        ]);

      		  $siswa->assignRole('student');


 $siswa = User::create([
            'usr_name' => 'Mohammad Rizaldy A	',
            'usr_email' => 'mohammadrizaldy@gmail.com',
            'usr_phone' => '08313456771',
            'usr_password' => Hash::make('12345678'),
            'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
            'usr_is_active' => true,
        ]);

      		  $siswa->assignRole('student');


 $siswa = User::create([
            'usr_name' => 'Muhamad Adin Sainifar	',
            'usr_email' => 'muhamadadinsainifar@gmail.com',
            'usr_phone' => '08013456771',
            'usr_password' => Hash::make('12345678'),
            'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
            'usr_is_active' => true,
        ]);

      		  $siswa->assignRole('student');


 $siswa = User::create([
            'usr_name' => 'Muhammad Fauzan Hadi	',
            'usr_email' => 'muhammadfauzanhadi@gmail.com',
            'usr_phone' => '08513456771',
            'usr_password' => Hash::make('12345678'),
            'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
            'usr_is_active' => true,
        ]);

      		  $siswa->assignRole('student');


 $siswa = User::create([
            'usr_name' => 'Aidha Nurhaliza	',
            'usr_email' => 'aidhanurhaliza@gmail.com',
            'usr_phone' => '08113456771',
            'usr_password' => Hash::make('12345678'),
            'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
            'usr_is_active' => true,
        ]);

      		  $siswa->assignRole('student');

 $siswa = User::create([
            'usr_name' => 'Asri Karlina	',
            'usr_email' => 'asrikarlina@gmail.com',
            'usr_phone' => '08213457771',
            'usr_password' => Hash::make('12345678'),
            'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
            'usr_is_active' => true,
        ]);

      		  $siswa->assignRole('student');

 $siswa = User::create([
            'usr_name' => 'Cantri Hendriani	',
            'usr_email' => 'cantrihendriani@gmail.com',
            'usr_phone' => '08213456001',
            'usr_password' => Hash::make('12345678'),
            'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
            'usr_is_active' => true,
        ]);

      		  $siswa->assignRole('student');

 $siswa = User::create([
            'usr_name' => 'Cjeni Alviyon Nita	',
            'usr_email' => 'cjenialviyonnita@gmail.com',
            'usr_phone' => '09013456771',
            'usr_password' => Hash::make('12345678'),
            'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
            'usr_is_active' => true,
        ]);

	
      		  $siswa->assignRole('student');

 $siswa = User::create([
            'usr_name' => 'Della Silvani	',
            'usr_email' => 'dellasilvani@gmail.com',
            'usr_phone' => '09213456771',
            'usr_password' => Hash::make('12345678'),
            'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
            'usr_is_active' => true,
        ]);

      		  $siswa->assignRole('student');

 $siswa = User::create([
            'usr_name' => 'Ahmad Saepudin	',
            'usr_email' => 'ahmadsaepudin@gmail.com',
            'usr_phone' => '08211456771',
            'usr_password' => Hash::make('12345678'),
            'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
            'usr_is_active' => true,
        ]);

      		  $siswa->assignRole('student');

      		   $siswa = User::create([
            'usr_name' => 'Ahmad Suherman	',
            'usr_email' => 'ahmadsuherman@gmail.com',
            'usr_phone' => '08213126771',
            'usr_password' => Hash::make('12345678'),
            'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
            'usr_is_active' => true,
        ]);

      		  $siswa->assignRole('student');


 $siswa = User::create([
            'usr_name' => 'Alika Tazkiyah	',
            'usr_email' => 'alikatazkiyah@gmail.com',
            'usr_phone' => '08213456011',
            'usr_password' => Hash::make('12345678'),
            'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
            'usr_is_active' => true,
        ]);

      		  $siswa->assignRole('student');

	
 $siswa = User::create([
            'usr_name' => 'Amelia Putri	',
            'usr_email' => 'ameliaputri@gmail.com',
            'usr_phone' => '08213491771',
            'usr_password' => Hash::make('12345678'),
            'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
            'usr_is_active' => true,
        ]);

      		  $siswa->assignRole('student');


 $siswa = User::create([
            'usr_name' => 'Arif Rifaldi	',
            'usr_email' => 'arifrifaldi@gmail.com',
            'usr_phone' => '08213456171',
            'usr_password' => Hash::make('12345678'),
            'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
            'usr_is_active' => true,
        ]);

      		  $siswa->assignRole('student');


 $siswa = User::create([
            'usr_name' => 'Asyiah Nurjanah	',
            'usr_email' => 'asyiah@gmail.com',
            'usr_phone' => '00913456771',
            'usr_password' => Hash::make('12345678'),
            'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
            'usr_is_active' => true,
        ]);

      		  $siswa->assignRole('student');

      		   $siswa = User::create([
            'usr_name' => 'Aulia Rahma Nur Salam	',
            'usr_email' => 'auliarahma@gmail.com',
            'usr_phone' => '08213450071',
            'usr_password' => Hash::make('12345678'),
            'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
            'usr_is_active' => true,
        ]);

      		  $siswa->assignRole('student');


 $siswa = User::create([
            'usr_name' => 'Azizah Al Khusnayain	',
            'usr_email' => 'azizahalkhusnayain@gmail.com',
            'usr_phone' => '08213456009',
            'usr_password' => Hash::make('12345678'),
            'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
            'usr_is_active' => true,
        ]);

      		  $siswa->assignRole('student');
	
	
 $siswa = User::create([
            'usr_name' => 'Bayu Setiawan	',
            'usr_email' => 'bayusetiawan@gmail.com',
            'usr_phone' => '08213456000',
            'usr_password' => Hash::make('12345678'),
            'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
            'usr_is_active' => true,
        ]);

      		  $siswa->assignRole('student');

 $siswa = User::create([
            'usr_name' => 'Bimantara Pamungkas	',
            'usr_email' => 'bimantarapamungkas@gmail.com',
            'usr_phone' => '08213498123',
            'usr_password' => Hash::make('12345678'),
            'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
            'usr_is_active' => true,
        ]);

      		  $siswa->assignRole('student');














          
        
    }
}
