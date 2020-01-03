<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuizzesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quizzes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('SourceLanguageId')->unsigned();
            $table->bigInteger('TranslationFieldId')->unsigned();
            $table->integer('TextId');
            $table->longText('QuizContent');
            $table->timestamps();

            $table->foreign('SourceLanguageId')
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
        Schema::dropIfExists('quizzes');
    }
}
