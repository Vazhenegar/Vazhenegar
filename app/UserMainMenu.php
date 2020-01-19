<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserMainMenu extends Model
{
    protected $fillable = ['role_id', 'MainMenu', 'Icon'];


    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function sub_menus()
    {
        return $this->hasMany(UserSubMenu::class);
    }

}
