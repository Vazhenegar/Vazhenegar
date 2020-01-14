<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserMainMenu extends Model
{
    protected $fillable = ['RoleId', 'MainMenu', 'Url'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function submenus()
    {
        return $this->hasMany(UserSubMenu::class);
    }

}
