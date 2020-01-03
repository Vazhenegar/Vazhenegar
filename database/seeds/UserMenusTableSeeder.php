<?php

use Illuminate\Database\Seeder;

class UserMenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $menus = [
            [
                'role-id' => 1,
                'menu' => 'منوی مدیریت 1',
                'url' => '/ManagerMenu1',
            ],
            [
                'role-id' => 1,
                'menu' => 'منوی مدیریت 2',
                'url' => '/ManagerMenu2',
            ],
            [
                'role-id' => 1,
                'menu' => 'منوی مدیریت 3',
                'url' => '/ManagerMenu3',
            ],
            [
                'role-id' => 1,
                'menu' => 'منوی مدیریت 4',
                'url' => '/ManagerMenu4',
            ],
            [
                'role-id' => 8,
                'menu' => 'منوی مترجم 1',
                'url' => '/TranslatorMenu1',
            ],
            [
                'role-id' => 8,
                'menu' => 'منوی مترجم 2',
                'url' => '/TranslatorMenu2',
            ],
            [
                'role-id' => 8,
                'menu' => 'منوی مترجم 3',
                'url' => '/TranslatorMenu3',
            ],
            [
                'role-id' => 8,
                'menu' => 'منوی مترجم 4',
                'url' => '/TranslatorMenu4',
            ],
            [
                'role-id' => 4,
                'menu' => 'منوی مسئول واحد ترجمه 1',
                'url' => '/TranslationAdminMenu1',
            ],
            [
                'role-id' => 4,
                'menu' => 'منوی مسئول واحد ترجمه 2',
                'url' => '/TranslationAdminMenu2',
            ],
            [
                'role-id' => 4,
                'menu' => 'منوی مسئول واحد ترجمه 3',
                'url' => '/TranslationAdminMenu3',
            ],
            [
                'role-id' => 4,
                'menu' => 'منوی مسئول واحد ترجمه 4',
                'url' => '/TranslationAdminMenu4',
            ],
            [
                'role-id' => 4,
                'menu' => 'منوی مسئول واحد ترجمه 5',
                'url' => '/TranslationAdminMenu5',
            ],
            [
                'role-id' => 11,
                'menu' => 'منوی مشتریان 1',
                'url' => 'CustomerMenu1',
            ],
            [
                'role-id' => 11,
                'menu' => 'منوی مشتریان 2',
                'url' => 'CustomerMenu2',
            ],
            [
                'role-id' => 11,
                'menu' => 'منوی مشتریان 3',
                'url' => 'CustomerMenu3',
            ],
            [
                'role-id' => 11,
                'menu' => 'منوی مشتریان 4',
                'url' => 'CustomerMenu4',
            ],

        ];
        foreach ($menus as $menu) {
            DB::table('user_menus')->insert([
                'RoleId' => $menu['role-id'],
                'MenuItem' => $menu['menu'],
                'Url' => $menu['url'],
            ]);
        }

    }
}
