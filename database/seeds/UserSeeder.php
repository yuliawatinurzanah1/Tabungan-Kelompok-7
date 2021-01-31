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

        $siswa = User::create([
            'usr_name' => 'Student',
            'usr_email' => 'student@gmail.com',
            'usr_phone' => '08213456789',
            'usr_password' => Hash::make('student123'),
            'usr_gender' => 'Perempuan',
            'usr_place_of_birth' => 'Bandung',
            'usr_date_of_birth' => '06-09-2003',
            'usr_religion' => 'Islam',
            'usr_addres' => 'Jln. Katapang Andir',
            'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
            'usr_is_active' => true,
        ]);

        $siswa->assignRole('student');

         $walikelas = User::create([
             'usr_name' => 'walikelas',
             'usr_email' => 'walikelas@gmail.com',
             'usr_phone' => '08213456789',
             'usr_password' => Hash::make('walikelas123'),
             'usr_gender' => 'Perempuan',
             'usr_place_of_birth' => 'Bandung',
             'usr_date_of_birth' => '06-09-2003',
             'usr_religion' => 'Islam',
             'usr_addres' => 'Jln. Katapang Andir',
             'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
             'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
             'usr_is_active' => true,
        ]);

        $walikelas->assignRole('walikelas');
   
    }
}
