<?php

use Illuminate\Database\Seeder;

class TranslationfieldsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $translation_fields = [
            'ادبیات و زبان شناسی',
            'اسناد تجاری و بازرگانی',
            'اقتصاد',
            'برق و الکترونیک',
            'پزشکی',
            'تاریخ',
            'ترجمه وب سایت',
            'جغرافیا و هنر',
            'حسابداری و مالی',
            'حقوق',
            'رزومه',
            'روانشناسی و علوم اجتماعی',
            'زمین شناسی و معدن',
            'سیاسی',
            'صنایع',
            'علوم پایه و فیزیک و شیمی و زیست',
            'عمران',
            'عمومی',
            'فقه و علوم اسلامی',
            'فلسفه',
            'کامپیوتر و آی تی',
            'کشاورزی و صنایع غذایی',
            'متالوژی و مواد و مکانیک',
            'مدیریت',
            'معماری و شهرسازی',
            'نفت و گاز و پتروشیمی',
            'ورزش',

        ];

        foreach ($translation_fields as $field) {
            DB::table('translation_fields')->insert([
                'field_name' => $field,
            ]);
        }
    }
}