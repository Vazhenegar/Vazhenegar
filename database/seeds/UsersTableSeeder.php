<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users=[
            [
                'FirstName' => 'مدیر',
                'LastName' => 'سایت',
                'Email' => 'admin@admin.com',
                'Password' => Hash::make('12345678'),//$2y$10$TyE8WfWBhZ8eFkoE.75EnuXQuNN167w1M0YcY75r7NJPVmGVmUzfa
                'FixNumber' => '04133342084',
                'MobileNumber' => '09012841853',
                'Department' => 1,
                'role_id' => 1,
                'Status' => 'A',
                'Mode' => 'OFF',
                'created_at' => '2020-09-05 16:36:59',
                'updated_at' => '2020-09-05 16:37:31'
            ],
            [
                'FirstName' => 'مشتری',
                'LastName' => 'سایت',
                'Email' => 'user@user.com',
                'Password' => Hash::make('12345678'),
                'FixNumber' => '04133342085',
                'MobileNumber' => '09148495898',
                'Department' => 8,
                'role_id' => 11,
                'Status' => 'A',
                'Mode' => 'OFF',
                'created_at' => '2020-09-05 16:36:59',
                'updated_at' => '2020-09-05 16:37:31'
            ]
        ];

        foreach ($users as $item){
            DB::table('users')->insert([
                'FirstName' => $item['FirstName'],
                'LastName' => $item['LastName'],
                'Email' => $item['Email'],
                'Password' =>  $item['Password'],
                'FixNumber' => $item['FixNumber'],
                'MobileNumber' => $item['MobileNumber'],
                'Department' =>$item['Department'],
                'role_id' => $item['role_id'],
                'Status' => $item['Status'],
                'Mode' => $item['Mode'],
                'created_at' => $item['created_at'],
                'updated_at' => $item['updated_at'],
            ]);
        }

    }
}
