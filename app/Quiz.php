<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Quiz extends Model
{
    protected $fillable=['SourceLanguageId', 'TranslationFieldId', 'TextId', 'QuizContent'];

    public function GetQuizTextId(int $SourceLanguageId, int $TranslationFieldId)
    {
        return Quiz::where('SourceLanguageId',$SourceLanguageId)
                    ->where('TranslationFieldId', $TranslationFieldId)
                    ->pluck('TextId');
    }

    public function GetQuiz(int $SourceLanguageId, int $TranslationFieldId, int $TextId)
    {
        return Quiz::where('SourceLanguageId',$SourceLanguageId)
            ->where('TranslationFieldId', $TranslationFieldId)
            ->where('TextId', $TextId)
            ->get();
    }

}
