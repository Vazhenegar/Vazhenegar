<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserSubMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_sub_menus', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('MainMenuId')->unsigned();
            $table->string('SubMenu');
            $table->string('Url');
            $table->timestamps();

            $table->foreign('MainMenuId')
                ->references('id')->on('user_main_menus')
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
        Schema::dropIfExists('user_sub_menus');
    }
}
