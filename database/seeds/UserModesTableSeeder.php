<?php

use Illuminate\Database\Seeder;

class UserModesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $modes=[
            [
                'id'=>'ON',
                'mode'=>'آنلاین',
                'description'=>'Online'
            ],
            [
                'id'=>'OFF',
                'mode'=>'آفلاین',
                'description'=>'Offline'
            ],
        ];
        foreach ($modes as $mode) {
            DB::table('user_modes')->insert([
                'id' => $mode['id'],
                'Mode' => $mode['mode'],
                'Description' => $mode['description'],
            ]);
        }
    }
}
