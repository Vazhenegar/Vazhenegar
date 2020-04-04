<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminSubMenus extends Model
{
    protected $fillable=[
        'admin_main_menu_id',
        'SubMenu',
        'Url',
        'admin_sub_menu_Icon',
    ];

    public function admin_main_menu()
    {
        return $this->belongsTo(AdminMainMenus::class);
    }
}
