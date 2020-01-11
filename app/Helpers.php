<?php

use App\User;

if (!function_exists('SetUsersMode')) {
    function SetUsersMode()
    {
        $OnlineIds = (new App\Session)->GetUsersId();
        User::whereNotIn('id',$OnlineIds)->update(['Mode' => 'OFF']);
        User::whereIn('id',$OnlineIds)->update(['Mode' => 'ON']);
        return true;
    }
}
