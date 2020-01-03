<?php

use Illuminate\Database\Seeder;

class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $States = [
            'اردبيل',
            'اصفهان',
            'البرز',
            'ايلام',
            'آذربايجان شرقي',
            'آذربايجان غربي',
            'بوشهر',
            'تهران',
            'چهارمحال وبختياري',
            'خراسان جنوبي',
            'خراسان رضوي',
            'خراسان شمالي',
            'خوزستان',
            'زنجان',
            'سمنان',
            'سيستان وبلوچستان',
            'فارس',
            'قزوين',
            'قم',
            'كردستان',
            'كرمان',
            'كرمانشاه',
            'كهگيلويه وبويراحمد',
            'گلستان',
            'گيلان',
            'لرستان',
            'مازندران',
            'مركزي',
            'هرمزگان',
            'همدان',
            'يزد',
        ];
        foreach ($States as $State) {

            DB::table('states')->insert([
                'StateName' => $State,
            ]);
        }
    }
}
