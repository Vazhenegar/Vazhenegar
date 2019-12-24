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
            'آلمانی',
            'ارمنی',
            'اسپانیایی',
            'انگلیسی',
            'ایتالیایی',
            'ترکی آذربایجانی',
            'ترکی استانبولی',
            'چینی',
            'روسی',
            'ژاپنی',
            'سوئدی',
            'عربی',
            'فارسی',
            'فرانسه',
            'کردی',
            'کره ای',
            'لهستانی',
            'هلندی',
        ];

        foreach ($language_list as $language) {
            DB::table('languages')->insert([
                'language_name' => $language,
            ]);
        }
    }
}