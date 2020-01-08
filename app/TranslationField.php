<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TranslationField extends Model
{
    protected $fillable = ['FieldName'];

    public function GetFieldId(string $FieldName)
    {
        return TranslationField::where('FieldName', $FieldName)->value('id');
    }
}
