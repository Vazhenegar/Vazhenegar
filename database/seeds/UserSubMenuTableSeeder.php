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
                        'SubMenu' => 'سفارشات جدید',
                        'Url' => 'OL',
                        'StatusId' => '1', //new registered orders
                        'Icon' => 'fa fa-star',
                    ],
                    [
                        'SubMenu' => 'فاکتورهای صادر شده',
                        'Url' => 'OL',
                        'StatusId' => '2',// issued invoices
                        'Icon' => 'fa fa-bullseye',
                    ],
                    [
                        'SubMenu' => 'دریافتی',
                        'Url' => 'OL',
                        'StatusId' => '3',//Paid Invoices
                        'Icon' => 'fa fa-bullseye',
                    ],
                    [
                        'SubMenu' => 'اختصاص به مترجم',
                        'Url' => 'OL',
                        'StatusId' => '4',//Assign to translator
                        'Icon' => 'fa fa-bullseye',
                    ],
                    [
                        'SubMenu' => 'سفارشات در حال انجام',
                        'Url' => 'OL',
                        'StatusId' => '5',//In Progress
                        'Icon' => 'fa fa-clock-o',
                    ],
                    [
                        'SubMenu' => 'بررسی نهایی',
                        'Url' => 'OL',
                        'StatusId' => '6', //final check
                        'Icon' => 'fa fa-clock-o',
                    ],
                    [
                        'SubMenu' => 'لغو شده توسط مشتری',
                        'Url' => 'OL',
                        'StatusId' => '9',//CRejected orders
                        'Icon' => 'fa fa-exclamation-triangle',
                    ],[
                        'SubMenu' => 'لغو شده توسط مترجم',
                        'Url' => 'OL',
                        'StatusId' => '10', //TRejected orders
                        'Icon' => 'fa fa-exclamation-triangle',
                    ],
                    [
                        'SubMenu' => 'لیست سفارشات تکمیل شده',
                        'Url' => 'OL',
                        'StatusId' => '8', //Finished orders
                        'Icon' => 'fa fa-certificate',
                    ],
                    [
                        'SubMenu' => 'لیست تمام سفارشات',
                        'Url' => 'OL', //All Orders
                        'StatusId' => '',
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
                        'StatusId' => '4', //orders that pending to accept by translator
                        'Icon' => 'fa fa-star',
                    ],
                    [
                        'SubMenu' => 'دریافت شده',
                        'Url' => 'OL',
                        'StatusId' => '5', //in progress orders
                        'Icon' => 'fa fa-clock-o',
                    ],
                    [
                        'SubMenu' => 'تحویل شده',
                        'Url' => 'OL',
                        'StatusId' => '6', //delivered orders
                        'Icon' => 'fa fa-check-square-o',
                    ],
                    [
                        'SubMenu' => 'تکمیل شده',
                        'Url' => 'OL',
                        'StatusId' => '8', //finished orders
                        'Icon' => 'fa fa-check-square-o',
                    ],
                    [
                        'SubMenu' => 'سفارشات لغو شده',
                        'Url' => 'OL',
                        'StatusId' => '10',
                        'Icon' => 'fa fa-check-square-o',
                    ],
                    [
                        'SubMenu' => 'تمام سفارشات',
                        'Url' => 'OL',
                        'StatusId' => '',
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

              // مشتری
            11 => [
                'سفارشات' => [
                    [
                        'SubMenu' => 'ثبت سفارش جدید',
                        'Url' => 'Order.index',
                        'StatusId' => '',
                        'Icon' => 'fa fa-star',
                    ],
                    [
                        'SubMenu' => 'ثبت شده',
                        'Url' => 'OL',
                        'StatusId'=>'1', //new registered orders
                        'Icon' => 'fa fa-clock-o',
                    ],
                    [
                        'SubMenu' => 'در حال انجام',
                        'Url' => 'OL',
                        'StatusId'=>'5', //in progress orders
                        'Icon' => 'fa fa-clock-o',
                    ],
                    [
                        'SubMenu' => 'لغو شده',
                        'Url' => 'OL',
                        'StatusId'=>'9',
                        'Icon' => 'fa fa-exclamation-triangle',
                    ],
                    [
                        'SubMenu' => 'سفارشات تکمیل شده',
                        'Url' => 'OL',
                        'StatusId' => '8',
                        'Icon' => 'fa fa-certificate',
                    ],
                    [
                        'SubMenu' => 'لیست سفارشات',
                        'Url' => 'OL',
                        'StatusId' => '',
                        'Icon' => 'fa fa-list',

                    ]
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
                        'Url' => 'OL',
                        'StatusId' => '2',
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
            foreach ($Menus as $Main => $sub) {
                foreach ($sub as $item) {

                    DB::table('user_sub_menus')->insert([
                        'role_id' => $role,
                        'user_main_menu' => $Main,
                        'SubMenu' => $item['SubMenu'],
                        'Url' => $item['Url'],
                        'StatusId' => $item['StatusId'],
                        'Icon' => $item['Icon'],
                    ]);
                }
            }

        }
    }
}
