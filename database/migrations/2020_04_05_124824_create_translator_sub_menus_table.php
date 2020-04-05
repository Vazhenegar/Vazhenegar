<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTranslatorSubMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('translator_sub_menus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('translator_main_menu_id')->unsigned();
            $table->string('TranslatorSubMenu');
            $table->string('Url');
            $table->string('translator_sub_menu_Icon')->nullable();
            $table->timestamps();

            $table->foreign('translator_main_menu_id')
                ->references('id')->on('translator_main_menus')
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
        Schema::dropIfExists('translator_sub_menus');
    }
}
