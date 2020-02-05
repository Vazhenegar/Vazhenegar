<?php

use App\Session;
use App\User;
use App\Order;
use App\TranslationField;
use App\Language;
use Carbon\Carbon;
use Hekmatinasser\Verta\Verta;
use Illuminate\Support\Str;

//============== General

//set Online and Offline users mode in users table depending on id's received from session table.
function SetUsersMode()
{
    $OnlineIds = GetOnlineUsersSession();
    User::whereNotIn('id', $OnlineIds)->update(['Mode' => 'OFF']);
    User::whereIn('id', $OnlineIds)->update(['Mode' => 'ON']);
    return back();
}

//function for replace persian digits with english to save in db
//         because persian digits cannot validate in laravel
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

//===================================================== Dashboard
//============== Public

function MenuPicker(User $user)
{
    //get role of logged in user
    $role = $user->role()->first();

    //get menus of user related to role
    return $role->main_menus()->with('sub_menus')->get();

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
        $JD = Verta::getJalali($year, $month, $day);
        $JD = Verta::create($JD[0], $JD[1], $JD[2], $H, $M, $S);
        return $JD->DateTime()->format('Y-m-d H:i:s');

    } elseif ($To == "G") {
        $GD = Verta::getGregorian($year, $month, $day);
        $GD = Verta::create($GD[0], $GD[1], $GD[2], $H, $M, $S);
        return $GD->DateTime()->format('Y-m-d H:i:s');

    }
}

//============== Admin
//Give Number of visitors that see website in last X day(s)
function GetSiteVisitors($day)
{
    return Session::where('last_activity', '>=', date_timestamp_get(Carbon::now()->subDays($day)))
        ->count();
}

//look for users with user_id is sessions table to set their mode to ON in users table
function GetOnlineUsersSession()
{
    $ids = Session::whereNotNull('user_id')
        ->where('last_activity', '>=', date_timestamp_get(Carbon::now()->subMinutes(1)))
        ->pluck('user_id');
    $ids->unique()->values()->all();
    return $ids;
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

//for admin dashboard badges in case of registering a new order by any user
function AllNewRegisteredOrders()
{
    $AllNewOrders['orders'] = Order::where('status_id', 1)->orderBy('id', 'DESC')->get();
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

//============== extract list of Translators that match the field and languages of specific order
function TranslatorsList($OrderTranslationField, $OrderSourceLang, $OrderDestLang)
{
    $LangPair = $OrderSourceLang . ' به ' . $OrderDestLang;

    //get all active translators
    $Translators = User::where('Department', 4)->where('role_id', 5)->where('Status', 'A')->get();

    $TranslatorID = [];
    foreach ($Translators as $translator) {
        $TL = unserialize($translator->UserSelectedLangs);
        $TF = unserialize($translator->TranslationFields);
        foreach ($TL as $language) {
            if ($language == $LangPair) {
                foreach ($TF as $field) {
                    if ($field == $OrderTranslationField) {
                        $TranslatorID[] = $translator->id;
                    }
                }
            }
        }
    }
    return $TranslatorID;

}

//============== Translators


//============== Customers

//for user dashboard badges in case of registering a new order
function CustomerRegisteredOrders($CustomerId)
{
    return Order::where('user_id', $CustomerId)
        ->where('status_id', '<', 10)
        ->get();
}

//Get list of orders that are ready for customer payment. (status_id = 1-> prepayment orders, 2-> final payment
function CustomerInvoices($user_id, $status_id)
{
    return Order::where('user_id', $user_id)
        ->where('status_id', $status_id)
        ->get();

}
