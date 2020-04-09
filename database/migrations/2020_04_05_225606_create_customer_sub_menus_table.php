<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerSubMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_sub_menus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('customer_main_menu_id')->unsigned();
            $table->string('CustomerSubMenu');
            $table->string('Url');
            $table->string('translator_sub_menu_Icon')->nullable();
            $table->timestamps();

            $table->foreign('customer_main_menu_id')
                ->references('id')->on('customer_main_menus')
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
        Schema::dropIfExists('customer_sub_menus');
    }
}
