<?php

use Illuminate\Database\Seeder;

class AdminMainMenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $AdminMainMenus = [

            //1
            [
                'AdminMainMenu' => 'سفارشات',
                'Icon'=>'fa fa-file-text',
            ],
            //2
            [
                'AdminMainMenu' => 'کاربران',
                'Icon'=>'fa fa-users',
            ],
            //3
            [
                'AdminMainMenu' => 'پیام ها',
                'Icon'=>'fa fa-comments',
            ],
            //4
            [
                'AdminMainMenu' => 'امور مالی و حسابداری',
                'Icon'=>'fa fa-dollar',
            ],
            //5
            [
                'AdminMainMenu' => 'تنظیمات',
                'Icon'=>'fa fa-cogs',
            ],
            //6
            [
                'AdminMainMenu' => 'راهنما',
                'Icon'=>'fa fa-question-circle',
            ],
        ];

        foreach ($AdminMainMenus as $menu) {
            DB::table('admin_main_menus')->insert([
                'AdminMainMenu' => $menu['AdminMainMenu'],
                'AdminMainMenuIcon'=>$menu['Icon'],
            ]);
        }
    }
}
