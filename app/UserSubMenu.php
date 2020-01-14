<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserSubMenu extends Model
{
    protected $fillable = ['MainMenuId', 'SubMenu', 'Url'];

    public function mainmenu()
    {
        return $this->belongsTo(UserMainMenu::class);
    }
}
