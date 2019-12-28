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
        $langs = Language::get()->pluck('id', 'language_name');
        $fields = TranslationField::get()->pluck('id', 'field_name');
        foreach ($langs as $lang_name => $lang_id) {
            foreach ($fields as $field_name => $field_id) {
                for ($i = 1; $i <= 20; $i++) {
                    DB::table('quizzes')->insert([
                        'source_language_id' => $lang_id,
                        'translation_field_id' => $field_id,
                        'text_id'=>$i,
                        'quiz_content' =>'متن شماره '.$i. ' به زبان ' . $lang_name . ' رشته ' . $field_name,
                    ]);
                }
            }
        }


    }
}
