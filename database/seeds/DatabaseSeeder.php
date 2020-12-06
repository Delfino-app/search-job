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
            ActivitySeeder::class,
            DegreeSeeder::class,
            CompanySeeder::class,
            SeekerSeeder::class,
            UsersSeeder::class,
        ]);
    }
}
