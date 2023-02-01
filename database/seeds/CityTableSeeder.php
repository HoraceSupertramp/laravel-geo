<?php

use App\City;
use Illuminate\Database\Seeder;

class CityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = file_get_contents(__DIR__ . '/../../cities.json');
        $cities = json_decode($json, true);
        foreach ($cities as $city) {
            City::create($city);
        }
    }
}
