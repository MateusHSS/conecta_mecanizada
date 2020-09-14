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
        $this->call([
            SectionSeeder::class,
            RequestCriticalitySeeder::class,
            RequestStatusSeeder::class,
            EmployeeSeeder::class,
            UserTypeSeeder::class,
            UserSeeder::class
            ]);
    }
}
