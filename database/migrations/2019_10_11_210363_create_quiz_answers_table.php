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
            $table->bigInteger('source_language_id')->unsigned();
            $table->bigInteger('dest_language_id')->unsigned();
            $table->bigInteger('translation_field_id')->unsigned();
            $table->integer('text_id');
            $table->longText('answer_text');
            $table->timestamps();

            $table->foreign('source_language_id')
                ->references('id')->on('languages')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->foreign('dest_language_id')
                ->references('id')->on('languages')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->foreign('translation_field_id')
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
