<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(MajorSeeder::class);
        $this->call(GradeSeeder::class);  
        $this->call(SavingSeeder::class); 
        $this->call(StudentSeeder::class);
        $this->call(TeacherSeeder::class);
        $this->call(ClassSeeder::class);    
    }
}
