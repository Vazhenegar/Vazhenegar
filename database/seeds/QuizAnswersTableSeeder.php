<?php

use Illuminate\Database\Seeder;
use App\Language;
use App\TranslationField;
use App\Quiz;

class QuizAnswersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $quizzes_id = Quiz::get()->pluck('id');
        $dest_langs_id = Language::get()->pluck('id');

        foreach ($quizzes_id as $quiz_id) {
            $source_language_id=DB::table('quizzes')->select('SourceLanguageId')->where('id',$quiz_id)->value('SourceLanguageId');
            $field_id=DB::table('quizzes')->select('TranslationFieldId')->where('id',$quiz_id)->value('TranslationFieldId');
            $text_id=DB::table('quizzes')->select('TextId')->where('id',$quiz_id)->value('TextId');
            foreach ($dest_langs_id as $dest_lang_id){
                if($source_language_id != $dest_lang_id){
                    DB::table('quiz_answers')->insert([
                        'SourceLanguageId'=>$source_language_id,
                        'destLanguageId'=>$dest_lang_id,
                        'TranslationFieldId'=>$field_id,
                        'TextId'=>$text_id,
                        'AnswerText'=>'پاسخ آزمون زبان مبدا '.$source_language_id.' به زبان مقصد '.$dest_lang_id.' زمینه '.$field_id,

                    ]);
                }
            }
        }


    }
}
