<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Role;

class DashboardMenuPicker extends Controller
{


    public function MenuPicker(User $user)
    {
        //get role of logged in user
       $role = $user->role()->first();

       //get menus of user related to role
        return $role->main_menus()->with('sub_menus')->get();

    }
}
