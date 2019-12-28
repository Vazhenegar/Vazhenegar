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
            $source_language_id=DB::table('quizzes')->select('source_language_id')->where('id',$quiz_id)->value('source_language_id');
            $field_id=DB::table('quizzes')->select('translation_field_id')->where('id',$quiz_id)->value('translation_field_id');
            $text_id=DB::table('quizzes')->select('text_id')->where('id',$quiz_id)->value('text_id');
            foreach ($dest_langs_id as $dest_lang_id){
                if($source_language_id != $dest_lang_id){
                    DB::table('quiz_answers')->insert([
                        'source_language_id'=>$source_language_id,
                        'dest_language_id'=>$dest_lang_id,
                        'translation_field_id'=>$field_id,
                        'text_id'=>$text_id,
                        'answer_text'=>'پاسخ آزمون زبان مبدا '.$source_language_id.' به زبان مقصد '.$dest_lang_id.' زمینه '.$field_id,

                    ]);
                }
            }
        }


    }
}
