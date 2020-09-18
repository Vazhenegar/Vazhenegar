<?php

use App\Session;
use App\User;
use App\Order;
use App\TranslationField;
use App\Language;
use App\OrderStatus;
use Carbon\Carbon;
use Hekmatinasser\Verta\Verta;
use Illuminate\Support\Str;

//============== General

/**
 * look for users with user_id in sessions table to set their mode to ON in users table
 */
function GetOnlineUsersSession()
{
    $ids = Session::whereNotNull('user_id')
        ->where('last_activity', '<=', date_timestamp_get(Carbon::now()))
        ->pluck('user_id');
    $ids->unique()->values()->all();
    return $ids;
}

/**
 * set Online and Offline users mode in users table depending on id's received from session table.
 */
function SetUsersMode()
{
    $OnlineIds = GetOnlineUsersSession();
    User::whereIn('id', $OnlineIds)->update(['Mode' => 'ON']);
    User::whereNotIn('id', $OnlineIds)->update(['Mode' => 'OFF']);
    return back();
}


/**
 * function for replace persian digits with english to save in db
 * because persian digits cannot validate in laravel
 */
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



/**
 * Convert Gregorian and Jalali to each other
 */
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
        $ConvertedDT= $JD->DateTime()->format('Y-m-d H:i:s');

    } elseif ($To == "G") {
        $GD = Verta::getGregorian($year, $month, $day);
        $GD = Verta::create($GD[0], $GD[1], $GD[2], $H, $M, $S);
        $ConvertedDT= $GD->DateTime()->format('Y-m-d H:i:s');

    }
    return $ConvertedDT;
}


//===================================================== Dashboard Start
//=============================== Public Start

function MenuPicker(User $user)
{
    //get role of logged in user
    $role = $user->role()->first();

    //get menus of user related to role
    return $role->main_menus()->with('sub_menus')->get();

}



/**
 * prepare order to show properly to user; change date to Jalali, fetch name of fields from related tables
 * @param $orders
 * @return mixed
 */
function OrderPreparation($orders)
{
    foreach ($orders as $item) {
        $item->RegisterDate = DateTimeConversion($item->RegisterDate, 'J');
        $item->DeliveryDate = DateTimeConversion($item->DeliveryDate, 'J');
        $item->TranslationField = TranslationField::where('id', $item->TranslationField)->value('FieldName');
        $item->SourceLanguage = Language::where('id', $item->SourceLanguage)->value('LanguageName');
        $item->DestLanguage = Language::where('id', $item->DestLanguage)->value('LanguageName');
        $item->Status = OrderStatus::where('id', $item->status_id)->value('Status');
        $item->StatusDescription = OrderStatus::where('id', $item->status_id)->value('Description');
    }

    return $orders;
}


/**
 * show orders list (new, finished, cancelled,etc.)
 * if status id is set, orders with that id will be returned
 * otherwise all orders will be returned.
 * @param string $UserId
 * @param string $StatusId
 * @return mixed
 */
function OrdersList(string $StatusId = '', string $UserId = '')
{
    return
    $StatusId ?
        $UserId ? OrderPreparation(Order::where(['status_id' => $StatusId, 'user_id' => $UserId])->orderBy('id', 'DESC')->get())
            : OrderPreparation(Order::where('status_id' , $StatusId )->orderBy('id', 'DESC')->get())
        : OrderPreparation(Order::orderBy('id', 'DESC')->get());
}

//=============================== Public End

//=============================== Admin Start
//Give Number of visitors that see website in last X day(s)
function GetSiteVisitors($day)
{
    return Session::where('last_activity', '>=', date_timestamp_get(Carbon::now()->subDays($day)))
        ->count();
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


//============== extract list of Translators that match the field and languages of specific order
/**
 * extract list of Translators that match the field and languages of specific order
 * @param $OrderTranslationField
 * @param $OrderSourceLang
 * @param $OrderDestLang
 * @return array
 */
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



//======================================== Dashboard End
