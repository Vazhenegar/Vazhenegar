<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserSubMenu extends Model
{
    protected $fillable = ['role_id', 'user_main_menu', 'SubMenu', 'Url', 'StatusId' ,'Icon'];

    public function main_menu()
    {
        return $this->belongsTo(UserMainMenu::class);
    }

    public function role()
    {
        return $this->belongsTo(Role::class);
    }
}
