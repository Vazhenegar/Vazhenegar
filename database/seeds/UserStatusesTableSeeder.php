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
                'status'=>'در انتظار',
                'description'=>'Pending'
            ],
            [
                'id'=>'A',
                'status'=>'فعال',
                'description'=>'Active'
            ],
            [
                'id'=>'B',
                'status'=>'قفل',
                'description'=>'Blocked'
            ],
            [
                'id'=>'D',
                'status'=>'غیرفعال',
                'description'=>'Deactive'
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
