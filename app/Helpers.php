<?php


use App\User;

function SetUsersMode()
{
    $OnlineIds = (new App\Session)->GetOnlineUsersSession();
    User::whereNotIn('id', $OnlineIds)->update(['Mode' => 'OFF']);
    User::whereIn('id', $OnlineIds)->update(['Mode' => 'ON']);
}

function OnlineUsers()
{
   SetUsersMode();
    return User::Where('Mode','ON')->count();
}


