<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(CompetencesTableSeeder::class);
        $this->call(ConnotationsTableSeeder::class);
        $this->call(LevelsTableSeeder::class);
        $this->call(AssessmentsTableSeeder::class);
    }
}
