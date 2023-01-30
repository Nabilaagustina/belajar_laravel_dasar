<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\RoleSeeder;
use Database\Seeders\ClassSeeder;
use Database\Seeders\TeacherSeeder;
use Database\Seeders\StudentsSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            TeacherSeeder::class,
            ClassSeeder::class,
            RoleSeeder::class,
            StudentsSeeder::class,
        ]);
    }
}
