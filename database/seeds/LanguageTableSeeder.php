<?php

use App\Language;
use Illuminate\Database\Seeder;

class LanguageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = file_get_contents(__DIR__ . '/../../languages.json');
        $languages = json_decode($json, true);
        foreach($languages as $language){
            Language::create($language);
        }
    }
}
