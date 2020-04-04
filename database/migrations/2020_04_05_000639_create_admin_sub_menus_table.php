<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminSubMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_sub_menus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('admin_main_menu_id')->unsigned();
            $table->string('AdminSubMenu');
            $table->string('Url');
            $table->string('admin_sub_menu_Icon')->nullable();
            $table->timestamps();

            $table->foreign('admin_main_menu_id')
                ->references('id')->on('admin_main_menus')
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
        Schema::dropIfExists('admin_sub_menus');
    }
}
