<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePageElementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_elements', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('page_name');
            $table->string('section_name');
            $table->string('section_title')->nullable();
            $table->string('section_content1');
            $table->string('section_content2')->nullable();
            $table->string('section_content3')->nullable();
            $table->string('section_content4')->nullable();
            $table->string('section_image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('page_elements');
    }
}
