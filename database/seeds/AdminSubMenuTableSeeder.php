<?php

use Illuminate\Database\Seeder;

class AdminSubMenuTableSeeder extends Seeder
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
            1 => [
                [
                    'SubMenu' => 'جدید',
                    'Url' => '/dashboard/NewRegisteredOrders',
                    'Icon' => 'fa fa-star',
                ],
                [
                    'SubMenu' => 'دریافتی',
                    'Url' => '/dashboard/PaidInvoicesList',
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
            2 => [
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
            3 => [
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
            4 => [
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
            5 => [
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
            6 => [
                [
                    'SubMenu' => 'راهنمای مدیر',
                    'Url' => '/admin guide',
                    'Icon' => 'fa fa-info-circle',
                ],
            ],
        ];

        foreach ($SubMenus as $main => $subMenu) {
            foreach ($subMenu as $item) {
                DB::table('admin_sub_menus')->insert([
                    'admin_main_menu_id' => $main,
                    'AdminSubMenu' => $item['SubMenu'],
                    'Url' => $item['Url'],
                    'admin_sub_menu_Icon' => $item['Icon'],
                ]);
            }

        }
    }
}
