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
            $table->bigInteger('source_language_id')->unsigned();
            $table->bigInteger('translation_field_id')->unsigned();
            $table->longText('source_text');
            $table->timestamps();

            $table->foreign('source_language_id')
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
        Schema::dropIfExists('quizzes');
    }
}
