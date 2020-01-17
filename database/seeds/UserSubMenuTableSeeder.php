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
            //مدیر - سفارشات
            2 => [
                [
                    'SubMenu' => 'جدید',
                    'Url' => '/new',
                    'Icon' => 'fa fa-star',
                ],
                [
                    'SubMenu' => 'دریافتی',
                    'Url' => '/received',
                    'Icon' => 'fa fa-bullseye',
                ],
                [
                    'SubMenu' => 'در حال انجام',
                    'Url' => '/in progress',
                    'Icon' => 'fa fa-clock-o',
                ],
                [
                    'SubMenu' => 'لغو شده',
                    'Url' => '/rejected',
                    'Icon' => 'fa fa-exclamation-triangle',
                ],
                [
                    'SubMenu' => 'تکمیل شده',
                    'Url' => '/done',
                    'Icon' => 'fa fa-certificate',
                ],
                [
                    'SubMenu' => 'تحویل شده',
                    'Url' => '/delivered',
                    'Icon' => 'fa fa-check-square-o',
                ],
            ],

            //مدیر - کاربران
            3 => [
                [
                    'SubMenu' => 'لیست کاربران',
                    'Url' => '/users',
                    'Icon' => 'fa fa-list',
                ],
                [
                    'SubMenu' => 'درخواست همکاری',
                    'Url' => '/employment request',
                    'Icon' => 'fa fa-user-plus',
                ],

            ],

            //مدیر - پیام ها
            4 => [
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
                [
                    'SubMenu' => 'حذف شده',
                    'Url' => '/trash',
                    'Icon' => 'fa fa-trash',
                ],

            ],

            //مدیر - امور مالی و حسابداری
            5 => [
                [
                    'SubMenu' => 'گردش مالی',
                    'Url' => '/finance',
                    'Icon' => 'fa fa-money',
                ],
                [
                    'SubMenu' => 'دریافت و پرداخت',
                    'Url' => '/transaction',
                    'Icon' => 'fa fa-usd',
                ],
            ],

            //مدیر - تنظیمات
            6 => [
                [
                    'SubMenu' => 'سفارشات',
                    'Url' => '/orders setting',
                    'Icon' => 'fa fa-shopping-basket',
                ],
                [
                    'SubMenu' => 'کاربران',
                    'Url' => '/users setting',
                    'Icon' => 'fa fa-user-circle-o',
                ],
                [
                    'SubMenu' => 'پیام ها',
                    'Url' => '/emails setting',
                    'Icon' => 'fa fa-envelope-o',
                ],
                [
                    'SubMenu' => 'مالی و حسابداری',
                    'Url' => '/finance setting',
                    'Icon' => 'fa fa-area-chart',
                ],
                [
                    'SubMenu' => 'زبان ها',
                    'Url' => '/languages setting',
                    'Icon' => 'fa fa-language',
                ],
                [
                    'SubMenu' => 'زمینه ها',
                    'Url' => '/fields setting',
                    'Icon' => 'fa fa-tasks',
                ],
            ],

            //مدیر - راهنما
            7 => [
                [
                    'SubMenu' => 'راهنمای مدیر',
                    'Url' => '/admin guide',
                    'Icon' => 'fa fa-info-circle',
                ],
            ],

            //مترجم - سفارشات
            9 => [
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

            //مترجم - پیام ها
            10 => [
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

            //مترجم - امور مالی حسابداری
            11 => [
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

            //مترجم - تنظیمات
            12 => [
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

            //مترجم - راهنما
            13 => [
                [
                    'SubMenu' => 'راهنمای مترجم',
                    'Url' => '/trans guide',
                    'Icon' => 'fa fa-info-circle',
                ],
            ],

            //مشتری - سفارشات
            15 => [
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
                    'SubMenu' => 'لغو شده',
                    'Url' => '/rejected',
                    'Icon' => 'fa fa-exclamation-triangle',
                ],
                [
                    'SubMenu' => 'تکمیل شده',
                    'Url' => '/done',
                    'Icon' => 'fa fa-certificate',
                ],
            ],

            //مشتری - پیام ها
            16 => [
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
                [
                    'SubMenu' => 'حذف شده',
                    'Url' => '/trash',
                    'Icon' => 'fa fa-trash',
                ],
            ],
            //مشتری - امور مالی و حسابداری
            17 => [
                [
                    'SubMenu' => 'پیش فاکتور',
                    'Url' => '/compose',
                    'Icon' => 'fa fa-commenting',
                ],
                [
                    'SubMenu' => 'فاکتور',
                    'Url' => '/inbox',
                    'Icon' => 'fa fa-envelope',
                ],
                [
                    'SubMenu' => 'پرداختی',
                    'Url' => '/sent',
                    'Icon' => 'fa fa-paper-plane',
                ],
            ],


            //مشتری - تنظیمات
            18 => [
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
            ],

            //مشتری - راهنما
            19 => [
                [
                    'SubMenu' => 'راهنمای مشتری',
                    'Url' => '/customer guide',
                    'Icon' => 'fa fa-info-circle',
                ],
            ],

        ];

        foreach ($SubMenus as $main => $subMenu) {
            foreach ($subMenu as $item) {
                DB::table('user_sub_menus')->insert([
                    'user_main_menu_id' => $main,
                    'SubMenu' => $item['SubMenu'],
                    'Url' => $item['Url'],
                    'Icon' => $item['Icon'],
                ]);
            }

        }
    }
}
