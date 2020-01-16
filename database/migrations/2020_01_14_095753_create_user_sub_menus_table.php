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
            $table->integer('user_main_menu_id')->unsigned();
            $table->string('SubMenu');
            $table->string('Url');
            $table->string('Icon')->nullable();
            $table->timestamps();

            $table->foreign('user_main_menu_id')
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
