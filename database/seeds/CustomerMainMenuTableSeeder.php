<?php

use Illuminate\Database\Seeder;

class CustomerMainMenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mainmenus=[

            //1
            [
                'MainMenu' => 'سفارشات',
                'Icon'=>'fa fa-file-text',
            ],
            //2
            [
                'MainMenu' => 'پیام ها',
                'Icon'=>'fa fa-comments',
            ],
            //3
            [
                'MainMenu' => 'امور مالی و حسابداری',
                'Icon'=>'fa fa-dollar',
            ],
            //4
            [
                'MainMenu' => 'تنظیمات',
                'Icon'=>'fa fa-cogs',
            ],
            //5
            [
                'MainMenu' => 'راهنما',
                'Icon'=>'fa fa-question-circle',
            ],
        ];

        foreach ($mainmenus as $menu) {
            DB::table('customer_main_menus')->insert([
                'CustomerMainMenu' => $menu['MainMenu'],
                'CustomerMainMenuIcon'=>$menu['Icon'],
            ]);
        }
    }
}
