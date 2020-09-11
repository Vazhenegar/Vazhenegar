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
            'MerchantID' => 'b51a23c8-e045-11ea-bcca-000c295eb8fc',
            'client_address'=>'https://www.zarinpal.com/pg/services/WebGate/wsdl',
            'error' => [
                "-1" => "اطلاعات ارسال شده ناقص است.",
                "-2" => "IP و يا مرچنت كد پذيرنده صحيح نيست",
                "-3" => "با توجه به محدوديت هاي شاپرك امكان پرداخت با رقم درخواست شده ميسر نمي باشد",
                "-4" => "سطح تاييد پذيرنده پايين تر از سطح نقره اي است.",
                "-11" => "درخواست مورد نظر يافت نشد.",
                "-12" => "امكان ويرايش درخواست ميسر نمي باشد.",
                "-21" => "هيچ نوع عمليات مالي براي اين تراكنش يافت نشد",
                "-22" => "تراكنش نا موفق ميباشد",
                "-33" => "رقم تراكنش با رقم پرداخت شده مطابقت ندارد",
                "-34" => "سقف تقسيم تراكنش از لحاظ تعداد يا رقم عبور نموده است",
                "-40" => "اجازه دسترسي به متد مربوطه وجود ندارد.",
                "-41" => "اطلاعات ارسال شده مربوط به AdditionalData غيرمعتبر ميباشد.",
                "-42" => "مدت زمان معتبر طول عمر شناسه پرداخت بايد بين 30 دقيه تا 45 روز مي باشد.",
                "-54" => "درخواست مورد نظر آرشيو شده است",
                "100" => "عمليات با موفقيت انجام گرديده است.",
                "101" => "عمليات پرداخت موفق بوده و قبلا PaymentVerification تراكنش انجام شده است.",
            ],
        ];



    }

    public function pay($Client, $Amount, $Email, $Mobile, $OrderId)
    {
        $Description = 'پرداخت وجه سفارش ترجمه شماره '.$OrderId;  // Required
        $CallbackURL =route('BankResponse');


        $client = new nusoap_client($this->$Client['client_address'], 'wsdl');
        $client->soap_defencoding = 'UTF-8';
        $result = $client->call('PaymentRequest', [
            [
                'MerchantID' => $this->$Client['MerchantID'],
                'Amount' => $Amount,
                'Description' => $Description,
                'Email' => $Email,
                'Mobile' => $Mobile,
                'CallbackURL' => $CallbackURL,
            ],
        ]);

        //Redirect to URL You can do it also by creating a form
        if ($result['Status'] == 100) {
            return $result['Authority'];
        } else {
            return false;
        }


    }

}
