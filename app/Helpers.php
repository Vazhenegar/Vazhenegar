<?php


use App\User;

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
    return User::Where('Mode','ON')->count();
}

//Get all employment requests except management and customers id's and departments
function NewEmployment()
{
    return User::where('Status','P')
        ->whereNotIn('Department', ['1','8'])
        ->whereNotIn('role_id', ['1','11'])
        ->count();
}

