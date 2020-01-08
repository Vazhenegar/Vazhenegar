<?php

use Illuminate\Database\Seeder;
use App\Language;
use App\TranslationField;

class QuizzesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $langs = Language::get()->pluck('id', 'LanguageName');
        $fields = TranslationField::get()->pluck('id', 'FieldName');
        foreach ($langs as $lang_name => $lang_id) {
            foreach ($fields as $field_name => $field_id) {
                for ($i = 1; $i <= rand(3,10); $i++) {
                    DB::table('quizzes')->insert([
                        'SourceLanguageId' => $lang_id,
                        'TranslationFieldId' => $field_id,
                        'TextId'=>$i,
                        'QuizContent' =>'متن شماره '.$i. ' به زبان ' . $lang_name . ' رشته ' . $field_name,
                    ]);
                }
            }
        }


    }
}
