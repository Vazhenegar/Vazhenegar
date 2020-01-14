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
                'RoleId' => 1,
                'MainMenu' => 'منوی مدیریت 1',
                'Url' => null,
            ],
            [
                'RoleId' => 1,
                'MainMenu' => 'منوی مدیریت 2',
                'Url' => null,
            ],
            [
                'RoleId' => 1,
                'MainMenu' => 'منوی مدیریت 3',
                'Url' => '/managementMenu1',
            ],
            [
                'RoleId' => 1,
                'MainMenu' => 'منوی مدیریت 4',
                'Url' => null,
            ],
            [
                'RoleId' => 5,
                'MainMenu' => 'منوی مترجم 1',
                'Url' => '/managementMenu1',
            ],
            [
                'RoleId' => 5,
                'MainMenu' => 'منوی مترجم 2',
                'Url' => null,

            ],
            [
                'RoleId' => 5,
                'MainMenu' => 'منوی مترجم 3',
                'Url' => '/managementMenu1',
            ],
            [
                'RoleId' => 5,
                'MainMenu' => 'منوی مترجم 4',
                'Url' => '/managementMenu1',
            ],

            [
                'RoleId' => 11,
                'MainMenu' => 'منوی مشتری 1',
                'Url' => '/managementMenu1',
            ],
            [
                'RoleId' => 11,
                'MainMenu' => 'منوی مشتری 2',
                'Url' => '/managementMenu1',
            ],
            [
                'RoleId' => 11,
                'MainMenu' => 'منوی مشتری 3',
                'Url' => '/managementMenu1',
            ],
            [
                'RoleId' => 11,
                'MainMenu' => 'منوی مشتری 4',
                'Url' => '/managementMenu1',
            ],

        ];

        foreach ($MainMenu as $menu) {
            DB::table('user_main_menus')->insert([
                'RoleId' => $menu['RoleId'],
                'MainMenu' => $menu['MainMenu'],
                'Url' => $menu['Url'],
            ]);
        }
    }
}
