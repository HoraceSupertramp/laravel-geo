<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountryLanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = file_get_contents(__DIR__ . '/../../country_language.json');
        $languages = json_decode($json, true);
        foreach($languages as $language){
            DB::table('country_language')->insert($language);
        }
    }
}
