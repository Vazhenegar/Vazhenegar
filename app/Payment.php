<?php

namespace App;

use nusoap_client;

class Payment
{
    public $MerchantID;
    /**
     * @var array
     */


    public function __construct()
    {
        $this->zarinpal = [
            'MerchantID' => 'r43a23c8-5435-h65-bcca-0987295eb087',
//            'MerchantID' => 'b51a23c8-e045-11ea-bcca-000c295eb8fc',
            'client_address'=>'https://api.zarinpal.com/pg/v4/payment/request.json',
//            'client_address'=>'https://www.zarinpal.com/pg/services/WebGate/wsdl',
        ];



    }

    public function pay($Client, $Amount, $Email, $Mobile, $OrderId)
    {
        $Description = 'پرداخت وجه سفارش ترجمه شماره '.$OrderId;
        $CallbackURL =route('BankResponse');


        $data = [
            "merchant_id" => $this->$Client['MerchantID'],
            "amount" => $Amount,
            "callback_url" => $CallbackURL,
            'description' => $Description,
            'metadata' => ['mobile' => $Mobile,'email' => $Email],
        ];
        $jsonData = json_encode($data);

        $ch=curl_init($this->$Client['client_address']);
        curl_setopt($ch, CURLOPT_USERAGENT, 'ZarinPal Rest Api v1');
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Content-Length: ' . strlen($jsonData)
        ));

        $result = curl_exec($ch);
        $err = curl_error($ch);

        $result = json_decode($result, true, JSON_PRETTY_PRINT);
        curl_close($ch);



        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            if (empty($result['errors'])) {
                if ($result['data']['code'] == 100) {
                    header('Location: https://api.zarinpal.com/pg/StartPay/' . $result['data']["authority"]);
                }
            } else {
                echo '<p>' .
                    $result['errors']['code'] . '<br>' .
                    $result['errors']['message'] . '<br>';
                echo '</p>';
            }
        }

    }

}
