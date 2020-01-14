<?php

use Illuminate\Database\Seeder;

class UserSubMenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $SubMenus = [
            [
                'MainMenuId' => 1,
                'SubMenu' => 'زیرمنو 1 برای منوی مدیریت 1',
                'Url' => '/sub1 for management1',
            ],
            [
                'MainMenuId' => 1,
                'SubMenu' => 'زیرمنو 2 برای منوی مدیریت 1',
                'Url' => '/sub2 for management1',
            ],
            [
                'MainMenuId' => 1,
                'SubMenu' => 'زیرمنو 3 برای منوی مدیریت 1',
                'Url' => '/sub3 for management1',
            ],
            [
                'MainMenuId' => 2,
                'SubMenu' => 'زیرمنو 1 برای منوی مدیریت 2',
                'Url' => '/sub1 for management2',
            ],
            [
                'MainMenuId' => 2,
                'SubMenu' => 'زیرمنو 2 برای منوی مدیریت 2',
                'Url' => '/sub3 for management1',
            ],
            [
                'MainMenuId' => 2,
                'SubMenu' => 'زیرمنو 3 برای منوی مدیریت 2',
                'Url' => '/sub3 for management1',
            ],
            [
                'MainMenuId' => 2,
                'SubMenu' => 'زیرمنو 4 برای منوی مدیریت 2',
                'Url' => '/sub3 for management1',
            ],
            [
                'MainMenuId' => 4,
                'SubMenu' => 'زیرمنو 1 برای منوی مدیریت 4',
                'Url' => '/sub1 for management4',
            ],
            [
                'MainMenuId' => 6,
                'SubMenu' => 'زیرمنو 1 برای منوی مترجم 2',
                'Url' => '/sub1 for trans2',
            ],
            [
                'MainMenuId' => 6,
                'SubMenu' => 'زیرمنو 2 برای منوی مترجم 2',
                'Url' => '/sub2 for trans2',
            ],
            [
                'MainMenuId' => 6,
                'SubMenu' => 'زیرمنو 3 برای منوی مترجم 2',
                'Url' => '/sub1 for management2',
            ],

            [
                'MainMenuId' => 12,
                'SubMenu' => 'زیرمنو 1 برای منوی مشتری 4',
                'Url' => '/sub1 for customer4',
            ],
            [
                'MainMenuId' => 12,
                'SubMenu' => 'زیرمنو 2 برای منوی مشتری 4',
                'Url' => '/sub2 for customer4',
            ],

        ];

        foreach ($SubMenus as $subMenu){
            DB::table('user_sub_menus')->insert([
                'MainMenuId'=>$subMenu['MainMenuId'],
                'SubMenu'=>$subMenu['SubMenu'],
                'Url'=>$subMenu['Url'],
            ]);
        }
    }
}
