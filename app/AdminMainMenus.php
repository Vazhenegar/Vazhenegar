<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminMainMenus extends Model
{
    protected $fillable=[
        'AdminMainMenu',
        'AdminMainMenuIcon',
    ];

    public function admin_sub_menus()
    {
        return $this->hasMany(AdminSubMenus::class);
    }
}
