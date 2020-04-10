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

            1 => [
                'سفارشات' => [
                    [
                        'SubMenu' => 'جدید',
                        'Url' => 'AON', //Admin->Orders->New (/dashboard/NewRegisteredOrders)
                        'Icon' => 'fa fa-star',
                    ],
                    [
                        'SubMenu' => 'دریافتی',
                        'Url' => 'AOPI', //Admin->Orders->Paid Invoices (/dashboard/PaidInvoicesList)
                        'Icon' => 'fa fa-bullseye',
                    ],
                    [
                        'SubMenu' => 'در حال انجام',
                        'Url' => 'AOIP', //Admin->Orders->In Progress (/in progress)
                        'Icon' => 'fa fa-clock-o',
                    ],
                    [
                        'SubMenu' => 'لغو شده',
                        'Url' => 'AOR', //Admin->Orders->Rejected (/rejected)
                        'Icon' => 'fa fa-exclamation-triangle',
                    ],
                    [
                        'SubMenu' => 'تکمیل شده',
                        'Url' => 'AOF', //Admin->Orders->Finished (/done)
                        'Icon' => 'fa fa-certificate',
                    ],
                    [
                        'SubMenu' => 'تحویل شده',
                        'Url' => 'AOD', //Admin->Orders->Delivered (/delivered')
                        'Icon' => 'fa fa-check-square-o',
                    ],
                ],

                'کاربران' => [
                    [
                        'SubMenu' => 'لیست کاربران',
                        'Url' => 'AUL', //Admin Users List (/users')
                        'Icon' => 'fa fa-list',
                    ],
                    [
                        'SubMenu' => 'درخواست همکاری',
                        'Url' => 'AUE', //Admin->Users->Employment Request (/employment request)
                        'Icon' => 'fa fa-user-plus',
                    ],
                ],

                'پیام ها' => [
                    [
                        'SubMenu' => 'نوشتن پیام',
                        'Url' => 'AMC', //Admin->Messages->Compose (/compose)
                        'Icon' => 'fa fa-commenting',
                    ],
                    [
                        'SubMenu' => 'دریافتی',
                        'Url' => 'AMI', //Admin->Messages->Inbox (/inbox)
                        'Icon' => 'fa fa-envelope',
                    ],
                    [
                        'SubMenu' => 'ارسالی',
                        'Url' => 'AMS', //Admin->Messages->Sent (/sent)
                        'Icon' => 'fa fa-paper-plane',
                    ],
                    [
                        'SubMenu' => 'پیش نویس ها',
                        'Url' => 'AMD', //Admin->Messages->Draft (/draft)
                        'Icon' => 'fa fa-wpforms',
                    ],
                    [
                        'SubMenu' => 'حذف شده',
                        'Url' => 'AMT', //Admin->Messages->Trash (/trash)
                        'Icon' => 'fa fa-trash',
                    ],
                ],

                'امور مالی و حسابداری' => [
                    [
                        'SubMenu' => 'گردش مالی',
                        'Url' => 'AAF', //Admin->Accounting->Finance (/finance)
                        'Icon' => 'fa fa-money',
                    ],
                    [
                        'SubMenu' => 'دریافت و پرداخت',
                        'Url' => 'AAT', //Admin->Accounting->Transaction (/transaction)
                        'Icon' => 'fa fa-usd',
                    ],
                ],

                'تنظیمات' => [
                    [
                        'SubMenu' => 'سفارشات',
                        'Url' => 'ASO', //Admin->Setting->Orders Setting (/orders setting)
                        'Icon' => 'fa fa-shopping-basket',
                    ],
                    [
                        'SubMenu' => 'کاربران',
                        'Url' => 'ASU', //Admin->Setting->Users Setting (/users setting)
                        'Icon' => 'fa fa-user-circle-o',
                    ],
                    [
                        'SubMenu' => 'پیام ها',
                        'Url' => 'ASM', //Admin->Setting->Messages Setting (/emails setting)
                        'Icon' => 'fa fa-envelope-o',
                    ],
                    [
                        'SubMenu' => 'مالی و حسابداری',
                        'Url' => 'ASF', //Admin->Setting->Finance Setting (/finance setting)
                        'Icon' => 'fa fa-area-chart',
                    ],
                    [
                        'SubMenu' => 'زبان ها',
                        'Url' => 'ASL', //Admin->Setting->Languages Setting (/languages setting)
                        'Icon' => 'fa fa-language',
                    ],
                    [
                        'SubMenu' => 'زمینه ها',
                        'Url' => 'ASTF', //Admin->Setting->Translation Fields Setting (/fields setting)
                        'Icon' => 'fa fa-tasks',
                    ],
                ],
                'راهنما' => [
                    [
                        'SubMenu' => 'راهنمای مدیر',
                        'Url' => 'AG', //Admin->Guidline (/admin guide)
                        'Icon' => 'fa fa-info-circle',
                    ],
                ],
            ],//end of admin role id


            //مترجم - سفارشات
            5 => [
                'سفارشات' => [
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

                'پیام ها' => [
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

                'امور مالی و حسابداری' => [
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

                'تنظیمات' => [
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

                'راهنما' => [
                    [
                        'SubMenu' => 'راهنمای مترجم',
                        'Url' => '/trans guide',
                        'Icon' => 'fa fa-info-circle',
                    ],
                ],
            ], //end of translator role id

            11 => [
                'سفارشات' => [
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

                'پیام ها' => [
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

                'امور مالی و حسابداری' => [
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

                'تنظیمات' => [
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

                'راهنما' => [
                    [
                        'SubMenu' => 'راهنمای مشتری',
                        'Url' => '/customer guide',
                        'Icon' => 'fa fa-info-circle',
                    ],
                ],
            ],

        ];

        foreach ($SubMenus as $role => $Menus) {
            foreach ($Menus as $Main=>$sub) {
                foreach ($sub as $item) {

                    DB::table('user_sub_menus')->insert([
                        'role_id'=>$role,
                        'user_main_menu' => $Main,
                        'SubMenu' => $item['SubMenu'],
                        'Url' => $item['Url'],
                        'Icon' => $item['Icon'],
                    ]);
                }
            }

        }
    }
}
