<?php

use Illuminate\Database\Seeder;

class TranslatorSubMenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $submenus=[
            // سفارشات
            1 => [
                [
                    'SubMenu' => 'جدید',
                    'Url' => '/new',
                    'Icon' => 'fa fa-star',
                ],
                [
                    'SubMenu' => 'در حال انجام',
                    'Url' => '/in progress',
                    'Icon' => 'fa fa-clock-o',
                ],
                [
                    'SubMenu' => 'تحویل شده',
                    'Url' => '/delivered',
                    'Icon' => 'fa fa-check-square-o',
                ],
            ],

            // پیام ها
            2 => [
                [
                    'SubMenu' => 'نوشتن پیام',
                    'Url' => '/compose',
                    'Icon' => 'fa fa-commenting',
                ],
                [
                    'SubMenu' => 'دریافتی',
                    'Url' => '/inbox',
                    'Icon' => 'fa fa-envelope',
                ],
                [
                    'SubMenu' => 'ارسالی',
                    'Url' => '/sent',
                    'Icon' => 'fa fa-paper-plane',
                ],
                [
                    'SubMenu' => 'پیش نویس ها',
                    'Url' => '/draft',
                    'Icon' => 'fa fa-wpforms',
                ],
            ],

            // امور مالی حسابداری
            3 => [
                [
                    'SubMenu' => 'جزئیات درآمد',
                    'Url' => '/transaction',
                    'Icon' => 'fa fa-usd',
                ],
                [
                    'SubMenu' => 'تسویه شده',
                    'Url' => '/transaction',
                    'Icon' => 'fa fa-credit-card',
                ],
            ],

            // تنظیمات
            4 => [
                [
                    'SubMenu' => 'پروفایل',
                    'Url' => '/transaction',
                    'Icon' => 'fa fa-address-card-o',
                ],
                [
                    'SubMenu' => 'امنیت',
                    'Url' => '/transaction',
                    'Icon' => 'fa fa-lock',
                ],
                [
                    'SubMenu' => 'مالی و حسابداری',
                    'Url' => '/transaction',
                    'Icon' => 'fa fa-usd',
                ],
            ],

            // راهنما
            5 => [
                [
                    'SubMenu' => 'راهنمای مترجم',
                    'Url' => '/trans guide',
                    'Icon' => 'fa fa-info-circle',
                ],
            ],

        ];

        foreach ($submenus as $main => $subMenu) {
            foreach ($subMenu as $item) {
                DB::table('translator_sub_menus')->insert([
                    'translator_main_menu_id' => $main,
                    'TranslatorSubMenu' => $item['SubMenu'],
                    'Url' => $item['Url'],
                    'translator_sub_menu_Icon' => $item['Icon'],
                ]);
            }

        }

    }
}
