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
        $this->call(CountryTableSeeder::class);
        $this->call(CityTableSeeder::class);
        $this->call(LanguageTableSeeder::class);
        $this->call(CountryLanguageSeeder::class);
    }
}
