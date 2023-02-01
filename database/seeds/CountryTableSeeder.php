<?php
use App\Country;
use Illuminate\Database\Seeder;

class CountryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = file_get_contents(__DIR__ . '/../../countries.json');
        $countries = json_decode($json, true);
        foreach($countries as $country){
            Country::create($country);
        }
    }
}
