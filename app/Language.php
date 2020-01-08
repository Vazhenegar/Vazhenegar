<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    protected $fillable=['LanguageName'];

    public function GetLanguageId(string $LanguageName)
    {
        return Language::where('LanguageName', $LanguageName)->value('id');
    }
}
