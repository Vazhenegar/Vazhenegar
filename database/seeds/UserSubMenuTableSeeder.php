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
                        'Url' => 'OL',
                        'StatusId'=>'1',
                        'Icon' => 'fa fa-star',
                    ],
                    [
                        'SubMenu' => 'دریافتی',
                        'Url' => 'OL', //Admin->Orders->Paid Invoices
                        'StatusId'=>'2',
                        'Icon' => 'fa fa-bullseye',
                    ],
                    [
                        'SubMenu' => 'در حال انجام',
                        'Url' => 'OL', //Admin->Orders->In Progress
                        'StatusId'=>'5',
                        'Icon' => 'fa fa-clock-o',
                    ],
                    [
                        'SubMenu' => 'لغو شده',
                        'Url' => 'OL', //Admin->Orders->Rejected
                        'StatusId'=>'10',
                        'Icon' => 'fa fa-exclamation-triangle',
                    ],
                    [
                        'SubMenu' => 'تکمیل شده',
                        'Url' => 'OL', //Admin->Orders->Finished
                        'StatusId'=>'8',
                        'Icon' => 'fa fa-certificate',
                    ],
                    [
                        'SubMenu' => 'تمام سفارشات',
                        'Url' => 'OL', //Admin->All Orders
                        'StatusId'=>'',
                        'Icon' => 'fa fa-list',
                    ],
                ],
//
//                'کاربران' => [
//                    [
//                        'SubMenu' => 'لیست کاربران',
//                        'Url' => 'AUL', //Admin Users List (/users')
//                        'Parameters'=>'',
//                        'Icon' => 'fa fa-list',
//                    ],
//                    [
//                        'SubMenu' => 'درخواست همکاری',
//                        'Url' => 'AUE', //Admin->Users->Employment Request (/employment request)
//                        'Parameters'=>'',
//                        'Icon' => 'fa fa-user-plus',
//                    ],
//                ],
//
//                'پیام ها' => [
//                    [
//                        'SubMenu' => 'نوشتن پیام',
//                        'Url' => 'AMC', //Admin->Messages->Compose (/compose)
//                        'Parameters'=>'',
//                        'Icon' => 'fa fa-commenting',
//                    ],
//                    [
//                        'SubMenu' => 'دریافتی',
//                        'Url' => 'AMI', //Admin->Messages->Inbox (/inbox)
//                        'Parameters'=>'',
//                        'Icon' => 'fa fa-envelope',
//                    ],
//                    [
//                        'SubMenu' => 'ارسالی',
//                        'Url' => 'AMS', //Admin->Messages->Sent (/sent)
//                        'Parameters'=>'',
//                        'Icon' => 'fa fa-paper-plane',
//                    ],
//                    [
//                        'SubMenu' => 'پیش نویس ها',
//                        'Url' => 'AMD', //Admin->Messages->Draft (/draft)
//                        'Parameters'=>'',
//                        'Icon' => 'fa fa-wpforms',
//                    ],
//                    [
//                        'SubMenu' => 'حذف شده',
//                        'Url' => 'AMT', //Admin->Messages->Trash (/trash)
//                        'Parameters'=>'',
//                        'Icon' => 'fa fa-trash',
//                    ],
//                ],
//
//                'امور مالی و حسابداری' => [
//                    [
//                        'SubMenu' => 'گردش مالی',
//                        'Url' => 'AAF', //Admin->Accounting->Finance (/finance)
//                        'Parameters'=>'',
//                        'Icon' => 'fa fa-money',
//                    ],
//                    [
//                        'SubMenu' => 'دریافت و پرداخت',
//                        'Url' => 'AAT', //Admin->Accounting->Transaction (/transaction)
//                        'Parameters'=>'',
//                        'Icon' => 'fa fa-usd',
//                    ],
//                ],
//
//                'تنظیمات' => [
//                    [
//                        'SubMenu' => 'بانک ها',
//                        'Url' => '/dashboard/Bank',
//                        'Parameters'=>'',
//                        'Icon' => 'fa fa-bank',
//                    ],
//                    [
//                        'SubMenu' => 'سفارشات',
//                        'Url' => 'ASO', //Admin->Setting->Orders Setting (/orders setting)
//                        'Parameters'=>'',
//                        'Icon' => 'fa fa-shopping-basket',
//                    ],
//                    [
//                        'SubMenu' => 'کاربران',
//                        'Url' => 'ASU', //Admin->Setting->Users Setting (/users setting)
//                        'Parameters'=>'',
//                        'Icon' => 'fa fa-user-circle-o',
//                    ],
//                    [
//                        'SubMenu' => 'پیام ها',
//                        'Url' => 'ASM', //Admin->Setting->Messages Setting (/emails setting)
//                        'Parameters'=>'',
//                        'Icon' => 'fa fa-envelope-o',
//                    ],
//                    [
//                        'SubMenu' => 'مالی و حسابداری',
//                        'Url' => 'ASF', //Admin->Setting->Finance Setting (/finance setting)
//                        'Parameters'=>'',
//                        'Icon' => 'fa fa-area-chart',
//                    ],
//                    [
//                        'SubMenu' => 'زبان ها',
//                        'Url' => 'ASL', //Admin->Setting->Languages Setting (/languages setting)
//                        'Parameters'=>'',
//                        'Icon' => 'fa fa-language',
//                    ],
//                    [
//                        'SubMenu' => 'زمینه ها',
//                        'Url' => 'ASTF', //Admin->Setting->Translation Fields Setting (/fields setting)
//                        'Parameters'=>'',
//                        'Icon' => 'fa fa-tasks',
//                    ],
//                ],
//                'راهنما' => [
//                    [
//                        'SubMenu' => 'راهنمای مدیر',
//                        'Url' => 'AG', //Admin->Guidline (/admin guide)
//                        'Parameters'=>'',
//                        'Icon' => 'fa fa-info-circle',
//                    ],
//                ],
            ],//end of admin role id


            //مترجم - سفارشات
            5 => [
                'سفارشات' => [
                    [
                        'SubMenu' => 'جدید',
                        'Url' => 'OL',
                        'StatusId'=>'',
                        'Icon' => 'fa fa-star',
                    ],
                    [
                        'SubMenu' => 'در حال انجام',
                        'Url' => 'OL',
                        'StatusId'=>'',
                        'Icon' => 'fa fa-clock-o',
                    ],
                    [
                        'SubMenu' => 'تحویل شده',
                        'Url' => 'OL',
                        'StatusId'=>'',
                        'Icon' => 'fa fa-check-square-o',
                    ],
                ],

//                'پیام ها' => [
//                    [
//                        'SubMenu' => 'نوشتن پیام',
//                        'Url' => '/compose',
//                        'Icon' => 'fa fa-commenting',
//                    ],
//                    [
//                        'SubMenu' => 'دریافتی',
//                        'Url' => '/inbox',
//                        'Icon' => 'fa fa-envelope',
//                    ],
//                    [
//                        'SubMenu' => 'ارسالی',
//                        'Url' => '/sent',
//                        'Icon' => 'fa fa-paper-plane',
//                    ],
//                    [
//                        'SubMenu' => 'پیش نویس ها',
//                        'Url' => '/draft',
//                        'Icon' => 'fa fa-wpforms',
//                    ],
//                ],
//
//                'امور مالی و حسابداری' => [
//                    [
//                        'SubMenu' => 'جزئیات درآمد',
//                        'Url' => '/transaction',
//                        'Icon' => 'fa fa-usd',
//                    ],
//                    [
//                        'SubMenu' => 'تسویه شده',
//                        'Url' => '/transaction',
//                        'Icon' => 'fa fa-credit-card',
//                    ],
//                ],
//
//                'تنظیمات' => [
//                    [
//                        'SubMenu' => 'پروفایل',
//                        'Url' => '/transaction',
//                        'Icon' => 'fa fa-address-card-o',
//                    ],
//                    [
//                        'SubMenu' => 'امنیت',
//                        'Url' => '/transaction',
//                        'Icon' => 'fa fa-lock',
//                    ],
//                    [
//                        'SubMenu' => 'مالی و حسابداری',
//                        'Url' => '/transaction',
//                        'Icon' => 'fa fa-usd',
//                    ],
//                ],
//
//                'راهنما' => [
//                    [
//                        'SubMenu' => 'راهنمای مترجم',
//                        'Url' => '/trans guide',
//                        'Icon' => 'fa fa-info-circle',
//                    ],
//                ],
            ], //end of translator role id

//            مشتری
            11 => [
                'سفارشات' => [
                    [
                        'SubMenu' => 'ثبت سفارش جدید',
                        'Url' => 'Order.index',
                        'StatusId'=>'',
                        'Icon' => 'fa fa-star',
                    ],
//                    [
//                        'SubMenu' => 'در حال انجام',
//                        'Url' => '/in progress',
//                        'StatusId'=>'',
//                        'Icon' => 'fa fa-clock-o',
//                    ],
//                    [
//                        'SubMenu' => 'لغو شده',
//                        'Url' => '/rejected',
//                        'StatusId'=>'',
//                        'Icon' => 'fa fa-exclamation-triangle',
//                    ],
//                    [
//                        'SubMenu' => 'تکمیل شده',
//                        'Url' => '/dashboard/CustomerFinishedOrders',
//                        'StatusId'=>'',
//                        'Icon' => 'fa fa-certificate',
//                    ],
                ],

//                'پیام ها' => [
//                    [
//                        'SubMenu' => 'نوشتن پیام',
//                        'Url' => '/compose',
//                        'Icon' => 'fa fa-commenting',
//                    ],
//                    [
//                        'SubMenu' => 'دریافتی',
//                        'Url' => '/inbox',
//                        'Icon' => 'fa fa-envelope',
//                    ],
//                    [
//                        'SubMenu' => 'ارسالی',
//                        'Url' => '/sent',
//                        'Icon' => 'fa fa-paper-plane',
//                    ],
//                    [
//                        'SubMenu' => 'پیش نویس ها',
//                        'Url' => '/draft',
//                        'Icon' => 'fa fa-wpforms',
//                    ],
//                    [
//                        'SubMenu' => 'حذف شده',
//                        'Url' => '/trash',
//                        'Icon' => 'fa fa-trash',
//                    ],
//                ],

                'امور مالی و حسابداری' => [
                    [
                        'SubMenu' => 'فاکتور',
                        'Url' => '/dashboard/Invoices',
                        'StatusId'=>'2',
                        'Icon' => 'fa fa-clipboard',
                    ],
//                    [
//                        'SubMenu' => 'سوابق پرداخت',
//                        'Url' => '/sent',
//                        'Icon' => 'fa fa-money',
//                    ],
                ],

//                'تنظیمات' => [
//                    [
//                        'SubMenu' => 'پروفایل',
//                        'Url' => '/transaction',
//                        'Icon' => 'fa fa-address-card-o',
//                    ],
//                    [
//                        'SubMenu' => 'امنیت',
//                        'Url' => '/transaction',
//                        'Icon' => 'fa fa-lock',
//                    ],
//                ],
//
//                'راهنما' => [
//                    [
//                        'SubMenu' => 'راهنمای مشتری',
//                        'Url' => '/customer guide',
//                        'Icon' => 'fa fa-info-circle',
//                    ],
//                ],
            ], // end of customer

        ];

        foreach ($SubMenus as $role => $Menus) {
            foreach ($Menus as $Main=>$sub) {
                foreach ($sub as $item) {

                    DB::table('user_sub_menus')->insert([
                        'role_id'=>$role,
                        'user_main_menu' => $Main,
                        'SubMenu' => $item['SubMenu'],
                        'Url' => $item['Url'],
                        'StatusId'=>$item['StatusId'],
                        'Icon' => $item['Icon'],
                    ]);
                }
            }

        }
    }
}
