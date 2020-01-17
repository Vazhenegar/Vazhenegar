<?php

use Illuminate\Database\Seeder;

class UserMainMenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $MainMenu = [

            //مدیر
            //1
            [
                'role_id' => 1,
                'MainMenu' => 'داشبورد',
                'Url' => '/dashboard',
                'Icon'=>'fa fa-home',
            ],
            //2
            [
                'role_id' => 1,
                'MainMenu' => 'سفارشات',
                'Url' => null,
                'Icon'=>'fa fa-file-text',
            ],
            //3
            [
                'role_id' => 1,
                'MainMenu' => 'کاربران',
                'Url' => null,
                'Icon'=>'fa fa-users',
            ],
            //4
            [
                'role_id' => 1,
                'MainMenu' => 'پیام ها',
                'Url' => null,
                'Icon'=>'fa fa-comments',
            ],
            //5
            [
                'role_id' => 1,
                'MainMenu' => 'امور مالی و حسابداری',
                'Url' => null,
                'Icon'=>'fa fa-dollar',
            ],
            //6
            [
                'role_id' => 1,
                'MainMenu' => 'تنظیمات',
                'Url' => null,
                'Icon'=>'fa fa-cogs',
            ],
            //7
            [
                'role_id' => 1,
                'MainMenu' => 'راهنما',
                'Url' => null,
                'Icon'=>'fa fa-question-circle',
            ],

            //مترجم
            //8
            [
                'role_id' => 5,
                'MainMenu' => 'داشبورد',
                'Url' => '/dashboard',
                'Icon'=>'fa fa-home',
            ],
            //9
            [
                'role_id' => 5,
                'MainMenu' => 'سفارشات',
                'Url' => null,
                'Icon'=>'fa fa-file-text',
            ],
            //10
            [
                'role_id' => 5,
                'MainMenu' => 'پیام ها',
                'Url' => null,
                'Icon'=>'fa fa-comments',
            ],
            //11
            [
                'role_id' => 5,
                'MainMenu' => 'امور مالی و حسابداری',
                'Url' => null,
                'Icon'=>'fa fa-dollar',
            ],
            //12
            [
                'role_id' => 5,
                'MainMenu' => 'تنظیمات',
                'Url' => null,
                'Icon'=>'fa fa-cogs',
            ],
            //13
            [
                'role_id' => 5,
                'MainMenu' => 'راهنما',
                'Url' => null,
                'Icon'=>'fa fa-question-circle',
            ],



            //مشتری
            //14
            [
                'role_id' => 11,
                'MainMenu' => 'داشبورد',
                'Url' => '/dashboard',
                'Icon'=>'fa fa-home',
            ],
            //15
            [
                'role_id' => 11,
                'MainMenu' => 'سفارشات',
                'Url' => null,
                'Icon'=>'fa fa-file-text',
            ],
            //16
            [
                'role_id' => 11,
                'MainMenu' => 'پیام ها',
                'Url' => null,
                'Icon'=>'fa fa-comments',
            ],
            //17
            [
                'role_id' => 11,
                'MainMenu' => 'امور مالی و حسابداری',
                'Url' => null,
                'Icon'=>'fa fa-dollar',
            ],
            //18
            [
                'role_id' => 11,
                'MainMenu' => 'تنظیمات',
                'Url' => null,
                'Icon'=>'fa fa-cogs',
            ],
            //19
            [
                'role_id' => 11,
                'MainMenu' => 'راهنما',
                'Url' => null,
                'Icon'=>'fa fa-question-circle',
            ],

        ];

        foreach ($MainMenu as $menu) {
            DB::table('user_main_menus')->insert([
                'role_id' => $menu['role_id'],
                'MainMenu' => $menu['MainMenu'],
                'Url' => $menu['Url'],
                'Icon'=>$menu['Icon'],
            ]);
        }
    }
}
