<?php
use Faker\Generator as Faker;
use App\Country;
use Illuminate\Database\Seeder;

class CountryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i<50; $i++){
            $country = new Country();
            $country->name =$faker->country;
            $country->continent = $faker->country;
            $country->region =rand(1, 100);
            $country->surface_area =rand(1000, 10000);
            $country->population = rand(10000, 100000);
            $country->life_expectancy =rand(60, 100);
            $country->local_name =$faker->name;
            $country->government_form =$faker->name;
            $country->save();
        }
    }
}
