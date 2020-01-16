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
            //سفارشات
            1 => [
                [
                    'SubMenu' => 'جدید',
                    'Url' => '/new',
                    'Icon'=>'fa fa-star',
                ],
                [
                    'SubMenu' => 'دریافتی',
                    'Url' => '/received',
                    'Icon'=>'fa fa-bullseye',
                ],
                [
                    'SubMenu' => 'در حال انجام',
                    'Url' => '/in progress',
                    'Icon'=>'fa fa-clock-o',
                ],
                [
                    'SubMenu' => 'لغو شده',
                    'Url' => '/rejected',
                    'Icon'=>'fa fa-exclamation-triangle',
                ],
                [
                    'SubMenu' => 'تکمیل شده',
                    'Url' => '/done',
                    'Icon'=>'fa fa-certificate',
                ],
                [
                    'SubMenu' => 'تحویل شده',
                    'Url' => '/delivered',
                    'Icon'=>'fa fa-check-square-o',
                ],
            ],

            //کاربران
            2=>[
                [
                    'SubMenu' => 'لیست کاربران',
                    'Url' => '/users',
                    'Icon'=>'fa fa-list',
                ],
                [
                    'SubMenu' => 'درخواست همکاری',
                    'Url' => '/employment request',
                    'Icon'=>'fa fa-user-plus',
                ],

            ],

            //پیام ها
            3=>[
                [
                    'SubMenu' => 'نوشتن پیام',
                    'Url' => '/compose',
                    'Icon'=>'fa fa-commenting',
                ],
                [
                    'SubMenu' => 'دریافتی',
                    'Url' => '/inbox',
                    'Icon'=>'fa fa-envelope',
                ],
                [
                    'SubMenu' => 'ارسالی',
                    'Url' => '/sent',
                    'Icon'=>'fa fa-paper-plane',
                ],
                [
                    'SubMenu' => 'پیش نویس ها',
                    'Url' => '/draft',
                    'Icon'=>'fa fa-wpforms',
                ],
                [
                    'SubMenu' => 'حذف شده',
                    'Url' => '/trash',
                    'Icon'=>'fa fa-trash',
                ],

            ],

            //امور مالی و حسابداری
            4=>[
                [
                    'SubMenu' => 'گردش مالی',
                    'Url' => '/finance',
                    'Icon'=>'fa fa-money',
                ],
                [
                    'SubMenu' => 'دریافت و پرداخت',
                    'Url' => '/transaction',
                    'Icon'=>'fa fa-usd',
                ],
            ],


            //تنظیمات
            5=>[
                [
                    'SubMenu' => 'سفارشات',
                    'Url' => '/orders setting',
                    'Icon'=>'fa fa-shopping-basket',
                ],
                [
                    'SubMenu' => 'کاربران',
                    'Url' => '/users setting',
                    'Icon'=>'fa fa-user-circle-o',
                ],
                [
                    'SubMenu' => 'پیام ها',
                    'Url' => '/emails setting',
                    'Icon'=>'fa fa-envelope-o',
                ],
                [
                    'SubMenu' => 'مالی و حسابداری',
                    'Url' => '/finance setting',
                    'Icon'=>'fa fa-area-chart',
                ],
                [
                    'SubMenu' => 'زبان ها',
                    'Url' => '/languages setting',
                    'Icon'=>'fa fa-check-circle',
                ],
                [
                    'SubMenu' => 'زمینه ها',
                    'Url' => '/fields setting',
                    'Icon'=>'fa fa-tasks',
                ],
            ],

        ];

        foreach ($SubMenus as $main => $subMenu) {
            foreach ($subMenu as $item) {
                DB::table('user_sub_menus')->insert([
                    'user_main_menu_id' => $main,
                    'SubMenu' => $item['SubMenu'],
                    'Url' => $item['Url'],
                    'Icon'=>$item['Icon'],
                ]);
            }

        }
    }
}
