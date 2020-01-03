<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuizAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quiz_answers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('SourceLanguageId')->unsigned();
            $table->bigInteger('destLanguageId')->unsigned();
            $table->bigInteger('TranslationFieldId')->unsigned();
            $table->integer('TextId'); //if a field has multiple text for quiz, this would be count number of text
            $table->longText('AnswerText');
            $table->timestamps();

            $table->foreign('SourceLanguageId')
                ->references('id')->on('languages')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->foreign('destLanguageId')
                ->references('id')->on('languages')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->foreign('TranslationFieldId')
                ->references('id')->on('translation_fields')
                ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quiz_answers');
    }
}
