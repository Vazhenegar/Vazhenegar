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
        $langs=Language::get()->pluck('id','language_name');
        $fields=TranslationField::get()->pluck('id','field_name');
        foreach ($langs as $lang_name=>$lang_id){
            foreach ($fields as $field_name=>$field_id){
                DB::table('quizzes')->insert([
                    'source_language_id'=>$lang_id,
                    'translation_field_id'=>$field_id,
//                    'source_text'=>'متن اصلی رشته $field_name به زبان $lang_name',
                    'source_text'=>'متن اصلی به زبان '.$lang_name. ' رشته '.$field_name,
                ]);
        }
    }


    }
}
