<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class Session extends Model
{
    public function GetOnlineUsersSession()
    {
        $ids= Session::whereNotNull('user_id')
            ->where('last_activity', '>=',date_timestamp_get(Carbon::now()->subMinutes(1)))
            ->pluck('user_id');
        $ids->unique()->values()->all();
        return $ids;
    }

    public function GetSiteVisitors($day)
    {
        return Session::where('last_activity', '>=',date_timestamp_get(Carbon::now()->subDays($day)))
            ->count();
    }
}
