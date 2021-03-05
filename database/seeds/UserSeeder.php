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
            'usr_gender' => 'laki-laki',
            'usr_place_of_birth' => 'Bandung',
            'usr_date_of_birth' => '01-01-1999',
            'usr_religion' => 'Islam',
            'usr_addres' => 'Jln. Katapang Andir',
            'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
            'usr_is_active' => true,
        ]);

        $admin->assignRole('admin');

          $walikelas = User::create([
             'usr_name' => 'Dewi Astri Indriani',
             'usr_email' => 'walikelas@gmail.com',
             'usr_phone' => '08213456781',
             'usr_password' => Hash::make('walikelas123'),
             'usr_gender' => 'Perempuan',
             'usr_place_of_birth' => 'Bandung',
             'usr_date_of_birth' => '03-08-1999',
             'usr_religion' => 'Islam',
             'usr_addres' => 'Paledang Indah',
             'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
             'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
             'usr_is_active' => true,
        ]);

        $walikelas->assignRole('walikelas');

        $admin->assignRole('admin');

          $walikelas = User::create([
             'usr_name' => 'Wiwit Suryani',
             'usr_email' => 'wiwits@gmail.com',
             'usr_phone' => '08213456782',
             'usr_password' => Hash::make('walikelas123'),
             'usr_gender' => 'Perempuan',
             'usr_place_of_birth' => 'Bandung',
             'usr_date_of_birth' => '03-08-1999',
             'usr_religion' => 'Islam',
             'usr_addres' => 'Paledang Indah',
             'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
             'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
             'usr_is_active' => true,
        ]);

        $walikelas->assignRole('walikelas');

        $admin->assignRole('admin');

          $walikelas = User::create([
             'usr_name' => 'Agfie Nurani Hanifah',
             'usr_email' => 'agfie@gmail.com',
             'usr_phone' => '08213456783',
             'usr_password' => Hash::make('walikelas123'),
             'usr_gender' => 'Perempuan',
             'usr_place_of_birth' => 'Bandung',
             'usr_date_of_birth' => '03-08-1999',
             'usr_religion' => 'Islam',
             'usr_addres' => 'Landean Girang',
             'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
             'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
             'usr_is_active' => true,
        ]);

        $walikelas->assignRole('walikelas');

		$admin->assignRole('admin');

          $walikelas = User::create([
             'usr_name' => 'Essa Amalia',
             'usr_email' => 'essa@gmail.com',
             'usr_phone' => '08213456784',
             'usr_password' => Hash::make('walikelas123'),
             'usr_gender' => 'Perempuan',
             'usr_place_of_birth' => 'Bandung',
             'usr_date_of_birth' => '03-08-1999',
             'usr_religion' => 'Islam',
             'usr_addres' => 'Paledang Indah',
             'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
             'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
             'usr_is_active' => true,
        ]);

        $walikelas->assignRole('walikelas');

        $admin->assignRole('admin');

          $walikelas = User::create([
             'usr_name' => 'Siti Robiah',
             'usr_email' => 'siti@gmail.com',
             'usr_phone' => '08213456785',
             'usr_password' => Hash::make('walikelas123'),
             'usr_gender' => 'Perempuan',
             'usr_place_of_birth' => 'Bandung',
             'usr_date_of_birth' => '03-08-1999',
             'usr_religion' => 'Islam',
             'usr_addres' => 'Paledang Indah',
             'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
             'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
             'usr_is_active' => true,
        ]);

        $walikelas->assignRole('walikelas');

         $admin->assignRole('admin');

          $walikelas = User::create([
             'usr_name' => 'Mia Garmianti',
             'usr_email' => 'mia@gmail.com',
             'usr_phone' => '08213456786',
             'usr_password' => Hash::make('walikelas123'),
             'usr_gender' => 'Perempuan',
             'usr_place_of_birth' => 'Bandung',
             'usr_date_of_birth' => '03-08-1999',
             'usr_religion' => 'Islam',
             'usr_addres' => 'Paledang Indah',
             'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
             'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
             'usr_is_active' => true,
        ]);

        $walikelas->assignRole('walikelas');

         $admin->assignRole('admin');

          $walikelas = User::create([
             'usr_name' => 'Siti Saadah',
             'usr_email' => 'saadah@gmail.com',
             'usr_phone' => '08213456787',
             'usr_password' => Hash::make('walikelas123'),
             'usr_gender' => 'Perempuan',
             'usr_place_of_birth' => 'Bandung',
             'usr_date_of_birth' => '03-08-1999',
             'usr_religion' => 'Islam',
             'usr_addres' => 'Paledang Indah',
             'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
             'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
             'usr_is_active' => true,
        ]);

        $walikelas->assignRole('walikelas');

        $siswa = User::create([
            'usr_name' => 'Yuliawati Nur Zanah',
            'usr_email' => 'yuliawati@gmail.com',
            'usr_phone' => '08213456788',
            'usr_password' => Hash::make('yuliawati1'),
            'usr_gender' => 'Perempuan',
            'usr_place_of_birth' => 'Bandung',
            'usr_date_of_birth' => '06-09-2003',
            'usr_religion' => 'Islam',
            'usr_addres' => 'Landean Girang',
            'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
            'usr_is_active' => true,
        ]);

        $siswa->assignRole('student');

         $siswa = User::create([
            'usr_name' => 'Amelia Putri',
            'usr_email' => 'ameliaputri@gmail.com',
            'usr_phone' => '08213456777',
            'usr_password' => Hash::make('amel12345'),
            'usr_gender' => 'Perempuan',
            'usr_place_of_birth' => 'Bandung',
            'usr_date_of_birth' => '27-10-2002',
            'usr_religion' => 'Islam',
            'usr_addres' => 'Patrol',
            'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
            'usr_is_active' => true,
        ]);

        $siswa->assignRole('student');

         $siswa = User::create([
            'usr_name' => 'Arif Rifaldi',
            'usr_email' => 'arifrifaldi@gmail.com',
            'usr_phone' => '08213456727',
            'usr_password' => Hash::make('arif12345'),
            'usr_gender' => 'Laki-laki',
            'usr_place_of_birth' => 'Bandung',
            'usr_date_of_birth' => '10-02-2002',
            'usr_religion' => 'Islam',
            'usr_addres' => 'Landean Girang',
            'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
            'usr_is_active' => true,
        ]);

        $siswa->assignRole('student');


         $siswa = User::create([
            'usr_name' => 'Farid Adam Fauzan',
            'usr_email' => 'faridadamfauzan@gmail.com',
            'usr_phone' => '08213456977',
            'usr_password' => Hash::make('farid12345'),
            'usr_gender' => 'Laki-laki',
            'usr_place_of_birth' => 'Bandung',
            'usr_date_of_birth' => '09-04-2002',
            'usr_religion' => 'Islam',
            'usr_addres' => 'Patrol',
            'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
            'usr_is_active' => true,
        ]);

        $siswa->assignRole('student');

            $siswa = User::create([
            'usr_name' => 'Christian Adi Putra',
            'usr_email' => 'christianadiputra@gmail.com',
            'usr_phone' => '08213456707',
            'usr_password' => Hash::make('christian1234'),
            'usr_gender' => 'Laki-laki',
            'usr_place_of_birth' => 'Bandung',
            'usr_date_of_birth' => '08-11-2002',
            'usr_religion' => 'Islam',
            'usr_addres' => 'Landean Girang',
            'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
            'usr_is_active' => true,
        ]);

        $siswa->assignRole('student');

         $siswa->assignRole('student');

            $siswa = User::create([
            'usr_name' => 'Miftah Ramadani',
            'usr_email' => 'miftahramadani@gmail.com',
            'usr_phone' => '08213456771',
            'usr_password' => Hash::make('rama12345'),
            'usr_gender' => 'Laki-laki',
            'usr_place_of_birth' => 'Bandung',
            'usr_date_of_birth' => '01-09-2002',
            'usr_religion' => 'Islam',
            'usr_addres' => 'Patrol',
            'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
            'usr_is_active' => true,
        ]);

        $siswa->assignRole('student');

         $siswa->assignRole('student');

            $siswa = User::create([
            'usr_name' => 'Ica Fitri',
            'usr_email' => 'fitri@gmail.com',
            'usr_phone' => '08213456798',
            'usr_password' => Hash::make('fitri12345'),
            'usr_gender' => 'Perempuan',
            'usr_place_of_birth' => 'Bandung',
            'usr_date_of_birth' => '28-07-2002',
            'usr_religion' => 'Islam',
            'usr_addres' => 'Patrol',
            'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
            'usr_is_active' => true,
        ]);

        $siswa->assignRole('student');
        
    }
}
