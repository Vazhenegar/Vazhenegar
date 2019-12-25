<?php

use Illuminate\Database\Seeder;

class UserStatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $statuses=[
            [
                'id'=>'P',
                'status'=>'Pending',
                'description'=>'کاربر در حالت انتظار برای تعیین وضعیت از طرف سایت'
            ],
            [
                'id'=>'A',
                'status'=>'Active',
                'description'=>'وضعیت کاربر فعال است'
            ],
            [
                'id'=>'B',
                'status'=>'Blocked',
                'description'=>'کاربر بلاک شده است'
            ],
            [
                'id'=>'D',
                'status'=>'Deactive',
                'description'=>'وضعیت کاربر غیرفعال است'
            ],
            [
                'id'=>'ON',
                'status'=>'Online',
                'description'=>'کاربر آنلاین است'
            ],
            [
                'id'=>'OFF',
                'status'=>'Offline',
                'description'=>'کاربر آفلاین است'
            ],
        ];

        foreach ($statuses as $status) {
            DB::table('user_statuses')->insert([
                'id' => $status['id'],
                'status' => $status['status'],
                'description' => $status['description'],
            ]);
        }
    }
}
