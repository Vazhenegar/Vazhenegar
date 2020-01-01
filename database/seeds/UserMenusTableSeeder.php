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
        $menus=[
            [
                'dep-id'=>'1',
                'role-id'=>'1',
                'menu'=>'منوی مدیریت 1',
                'url'=>'',
            ],
            [
                'dep-id'=>'1',
                'role-id'=>'1',
                'menu'=>'منوی مدیریت 2',
                'url'=>'',
            ],
            [
                'dep-id'=>'1',
                'role-id'=>'1',
                'menu'=>'منوی مدیریت 3',
                'url'=>'',
            ],
            [
                'dep-id'=>'1',
                'role-id'=>'1',
                'menu'=>'منوی مدیریت 4',
                'url'=>'',
            ],
          [
              'dep-id'=>'4',
              'role-id'=>'8',
              'menu'=>'منوی مترجم 1',
              'url'=>'',
          ],
            [
                'dep-id'=>'4',
                'role-id'=>'8',
                'menu'=>'منوی مترجم 2',
                'url'=>'',
            ],
            [
                'dep-id'=>'4',
                'role-id'=>'8',
                'menu'=>'منوی مترجم 3',
                'url'=>'',
            ],
            [
                'dep-id'=>'4',
                'role-id'=>'8',
                'menu'=>'منوی مترجم 4',
                'url'=>'',
            ],
            [
                'dep-id'=>'4',
                'role-id'=>'4',
                'menu'=>'منوی مسئول واحد ترجمه 1',
                'url'=>'',
            ],
            [
                'dep-id'=>'4',
                'role-id'=>'4',
                'menu'=>'منوی مسئول واحد ترجمه 2',
                'url'=>'',
            ],
            [
                'dep-id'=>'4',
                'role-id'=>'4',
                'menu'=>'منوی مسئول واحد ترجمه 3',
                'url'=>'',
            ],
            [
                'dep-id'=>'4',
                'role-id'=>'4',
                'menu'=>'منوی مسئول واحد ترجمه 4',
                'url'=>'',
            ],
            [
                'dep-id'=>'4',
                'role-id'=>'4',
                'menu'=>'منوی مسئول واحد ترجمه 5',
                'url'=>'',
            ],
            [
                'dep-id'=>'8',
                'role-id'=>'11',
                'menu'=>'منوی مشتریان 1',
                'url'=>'',
            ],
            [
                'dep-id'=>'8',
                'role-id'=>'11',
                'menu'=>'منوی مشتریان 2',
                'url'=>'',
            ],
            [
                'dep-id'=>'8',
                'role-id'=>'11',
                'menu'=>'منوی مشتریان 3',
                'url'=>'',
            ],
            [
                'dep-id'=>'8',
                'role-id'=>'11',
                'menu'=>'منوی مشتریان 4',
                'url'=>'',
            ],

        ];
        foreach ($menus as $menu) {
            DB::table('user_menus')->insert([
                'Department_id' => $menu['dep-id'],
                'Role_id' => $menu['role-id'],
                'MenuItem' => $menu['menu'],
                'Url' => $menu['url'],
            ]);
        }

    }
}
