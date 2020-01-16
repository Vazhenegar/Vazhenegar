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
            [
                'role_id' => 1,
                'MainMenu' => 'سفارشات',
                'Url' => null,
                'Icon'=>'fa fa-file-text',
            ],
            [
                'role_id' => 1,
                'MainMenu' => 'کاربران',
                'Url' => null,
                'Icon'=>'fa fa-users',
            ],
            [
                'role_id' => 1,
                'MainMenu' => 'پیام ها',
                'Url' => null,
                'Icon'=>'fa fa-comments',
            ],
            [
                'role_id' => 1,
                'MainMenu' => 'امور مالی و حسابداری',
                'Url' => null,
                'Icon'=>'fa fa-dollar',
            ],
            [
                'role_id' => 1,
                'MainMenu' => 'تنظیمات',
                'Url' => null,
                'Icon'=>'fa fa-cogs',
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
