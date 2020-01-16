<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserSubMenu extends Model
{
    protected $fillable = ['user_main_menu_id', 'SubMenu', 'Url', 'Icon'];

    public function main_menu()
    {
        return $this->belongsTo(UserMainMenu::class);
    }
}
