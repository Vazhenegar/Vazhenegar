<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuizAnswer extends Model
{
    protected $fillable = ['SourceLanguageId', 'destLanguageId', 'TranslationFieldId', 'TextId', 'AnswerText'];

    public function GetQuizAnswerId(int $SourceLanguageId, int $destLanguageId, int $TranslationFieldId, int $TextId)
    {
        return QuizAnswer::where('SourceLanguageId', $SourceLanguageId)
            ->where('destLanguageId', $destLanguageId)
            ->where('TranslationFieldId', $TranslationFieldId)
            ->where('TextId', $TextId)
            ->value('id');
    }
}
