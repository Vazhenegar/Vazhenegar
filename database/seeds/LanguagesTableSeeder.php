<?php

use Illuminate\Database\Seeder;

class LanguagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $language_list = [
            'انگلیسی',
            'ترکی آذربایجانی',
            'ترکی استانبولی',
            'روسی',
            'عربی',
            'فارسی',
            'کردی',

        ];

        foreach ($language_list as $language) {
            DB::table('languages')->insert([
                'LanguageName' => $language,
            ]);
        }
    }
}
