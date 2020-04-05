<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TranslatorSubMenus extends Model
{
    protected $fillable=[
        'translator_main_menu_id',
        'TranslatorSubMenu',
        'Url',
        'translator_sub_menu_Icon',
    ];

    public function admin_main_menu()
    {
        return $this->belongsTo(TranslatorMainMenus::class);
    }
}
