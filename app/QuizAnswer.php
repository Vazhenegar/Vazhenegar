<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuizAnswer extends Model
{
    protected $fillable=['SourceLanguageId', 'destLanguageId', 'TranslationFieldId', 'TextId', 'AnswerText'];

}
