<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_menus', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->tinyInteger('Department_id')->unsigned();
            $table->tinyInteger('Role_id')->unsigned();
            $table->string('MenuItem');
            $table->string('Url')->nullable();
            $table->timestamps();

            $table->foreign('Department_id')
                ->references('id')->on('departments')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->foreign('Role_id')
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
        Schema::dropIfExists('user_menus');
    }
}
