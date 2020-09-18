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
            $table->Integer('role_id')->unsigned()->nullable();
            $table->string('user_main_menu');
            $table->string('SubMenu');
            $table->string('Url');
            $table->string('StatusId')->nullable();
            $table->string('Icon')->nullable();
            $table->timestamps();

            $table->foreign('role_id')
                ->references('id')->on('roles')
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
