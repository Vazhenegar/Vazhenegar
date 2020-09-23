<?php

use Illuminate\Database\Seeder;

class BanksTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Banks = [
            'zarinpal' => [
                'MerchantCode' => 'b51a23c8-e045-11ea-bcca-000c295eb8fc',
                'ClientAddress' => 'https://api.zarinpal.com/pg/v4/payment/request.json',
            ],

        ];

        foreach ($Banks as $BankName => $items) {

            DB::table('banks')->insert([
                'BankName' => $BankName,
                'MerchantCode' => $items['MerchantCode'],
                'ClientAddress' => $items['ClientAddress'],
            ]);

        }
    }
}
