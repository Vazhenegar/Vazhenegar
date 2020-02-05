<?php

use Illuminate\Database\Seeder;

class OrderTimingPriceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('order_timing_prices')->insert([
            'daily_translatable_word' => 1250,
            'normal_delivery_price_per_page' => 4000,
        ]);
    }
}
