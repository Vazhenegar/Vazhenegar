<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TranslatorMainMenus extends Model
{
    protected $fillable=[
        'TranslatorMainMenu',
        'TranslatorMainMenuIcon',
    ];

    public function translator_sub_menus()
    {
        return $this->hasMany(TranslatorSubMenus::class);
    }
}
