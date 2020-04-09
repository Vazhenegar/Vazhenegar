<?php

use Illuminate\Database\Seeder;

class CustomerSubMenuTableSeeder extends Seeder
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
                    'SubMenu' => 'ثبت سفارش جدید',
                    'Url' => '/dashboard/Order',
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
                [
                    'SubMenu' => 'حذف شده',
                    'Url' => '/trash',
                    'Icon' => 'fa fa-trash',
                ],
            ],
            // امور مالی و حسابداری
            3 => [
                [
                    'SubMenu' => 'فاکتور',
                    'Url' => '/dashboard/Invoices',
                    'Icon' => 'fa fa-clipboard',
                ],
                [
                    'SubMenu' => 'سوابق پرداخت',
                    'Url' => '/sent',
                    'Icon' => 'fa fa-money',
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
            ],

            // راهنما
            5 => [
                [
                    'SubMenu' => 'راهنمای مشتری',
                    'Url' => '/customer guide',
                    'Icon' => 'fa fa-info-circle',
                ],
            ],
        ];

        foreach ($submenus as $main => $subMenu) {
            foreach ($subMenu as $item) {
                DB::table('customer_sub_menus')->insert([
                    'customer_main_menu_id' => $main,
                    'CustomerSubMenu' => $item['SubMenu'],
                    'Url' => $item['Url'],
                    'customer_sub_menu_Icon' => $item['Icon'],
                ]);
            }

        }
    }
}
