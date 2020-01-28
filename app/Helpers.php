<?php


use App\User;
use App\Order;
use App\TranslationField;
use App\Language;
use Hekmatinasser\Verta\Verta;
use Illuminate\Support\Str;

function SetUsersMode()
{
    $OnlineIds = (new App\Session)->GetOnlineUsersSession();
    User::whereNotIn('id', $OnlineIds)->update(['Mode' => 'OFF']);
    User::whereIn('id', $OnlineIds)->update(['Mode' => 'ON']);
    return back();
}

function OnlineUsers()
{
    SetUsersMode();
    return User::Where('Mode', 'ON')->count();
}

//Get all employment requests except management and customers id's and departments
function NewEmployment()
{
    return User::where('Status', 'P')
        ->whereNotIn('Department', ['1', '8'])
        ->whereNotIn('role_id', ['1', '11'])
        ->count();
}

//function for replace persian digits with english to save in db
//         because persian srting cannot validate in laravel
function per_digit_conv(string $per_digits)
{
    $result = "";
    $rep = [
        '۰',
        '۱',
        '۲',
        '۳',
        '۴',
        '۵',
        '۶',
        '۷',
        '۸',
        '۹',
    ];
    $en_digits = \range(0, 9);
    $result = \str_replace($rep, $en_digits, $per_digits);
    return $result;
}

//for admin dashboard badges in case of registering a new order by any user
function AllNewRegisteredOrders()
{
    $AllNewOrders['orders'] = Order::where('StatusId', 1)->orderBy('id', 'DESC')->get();
    foreach ($AllNewOrders['orders'] as $key => $order) {
        $TF = TranslationField::where('id', $order['TranslationField'])->value('FieldName');
        $SL = Language::where('id', $order['SourceLanguage'])->value('LanguageName');
        $DL = Language::where('id', $order['DestLanguage'])->value('LanguageName');
        $RD = DateTimeConversion($order['RegisterDate'], 'J');
        $DD = DateTimeConversion($order['DeliveryDate'], 'J');

        $AllNewOrders['orders'][$key]['TranslationField'] = $TF;
        $AllNewOrders['orders'][$key]['SourceLanguage'] = $SL;
        $AllNewOrders['orders'][$key]['DestLanguage'] = $DL;
        $AllNewOrders['orders'][$key]['RegisterDate'] = $RD;
        $AllNewOrders['orders'][$key]['DeliveryDate'] = $DD;
    }
    return $AllNewOrders;
}

//for user dashboard badges in case of registering a new order
function UserRegisteredOrders($UserId)
{
    return Order::where('UserId', $UserId)
        ->where('StatusId', 1)
        ->count();
}

//Convert Gregorian and Jalali to each other
function DateTimeConversion($DateTime, $To)
{
    $DateTime = per_digit_conv($DateTime);
    $year = Str::substr($DateTime, 0, 4);
    $month = Str::substr($DateTime, 5, 2);
    $day = Str::substr($DateTime, 8, 2);
    $H = Str::substr($DateTime, 11, 2);
    $M = Str::substr($DateTime, 14, 2);
    $S = Str::substr($DateTime, 17, 2);
    if ($To == 'J') {
        $JD=Verta::getJalali($year, $month, $day);
        $JD=Verta::create($JD[0],$JD[1],$JD[2],$H,$M,$S);
        return $JD->DateTime()->format('Y-m-d H:i:s');

    } elseif ($To == "G") {
        $GD = Verta::getGregorian($year, $month, $day);
        $GD= Verta::create($GD[0], $GD[1], $GD[2], $H, $M, $S);
        return $GD->DateTime()->format('Y-m-d H:i:s');

    }
}
