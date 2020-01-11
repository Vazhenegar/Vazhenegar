<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Session extends Model
{
    public function GetUsersId()
    {
        return Session::whereNotNull('user_id')-> pluck('user_id');

    }
}
