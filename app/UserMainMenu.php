<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class UserMainMenu extends Model
{
    protected $fillable = ['role_id', 'MainMenu', 'Icon'];


    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function sub_menus()
    {
        return $this->hasMany(UserSubMenu::class,'user_main_menu', 'MainMenu')->where('role_id','=',Auth::user()->role_id);
    }

}
