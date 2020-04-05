<?php

use Illuminate\Database\Seeder;

class TranslatorMainMenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $MainMenu = [
        [
            'MainMenu' => 'سفارشات',
            'Icon'=>'fa fa-file-text',
        ],
            //8
            [
                'MainMenu' => 'پیام ها',
                'Icon'=>'fa fa-comments',
            ],
            //9
            [
                'MainMenu' => 'امور مالی و حسابداری',
                'Icon'=>'fa fa-dollar',
            ],
            //10
            [
                'MainMenu' => 'تنظیمات',
                'Icon'=>'fa fa-cogs',
            ],
            //11
            [
                'MainMenu' => 'راهنما',
                'Icon'=>'fa fa-question-circle',
            ],
            ];

        foreach ($MainMenu as $menu) {
            DB::table('translator_main_menus')->insert([
                'TranslatorMainMenu' => $menu['MainMenu'],
                'TranslatorMainMenuIcon'=>$menu['Icon'],
            ]);
        }

    }
}
