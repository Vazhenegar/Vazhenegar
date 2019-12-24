<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('FirstName');
            $table->string('LastName');
            $table->string('BirthDate')->nullable();
            $table->boolean('Gender')->nullable();
            $table->string('Email')->unique();
            $table->string('Password');
            $table->string('FixNumber');
            $table->string('MobileNumber');
            $table->tinyInteger('State')->nullable();
            $table->smallInteger('City')->nullable();
            $table->longText('Address')->nullable();
            $table->string('Degree')->nullable();
            $table->string('GraduationDate')->nullable();
            $table->string('GraduationField')->nullable();
            $table->longText('Resume')->nullable();
            $table->longText('UserSelectedLangs')->nullable(); //for translators
            $table->longText('TranslationFields')->nullable(); //for translators
            $table->string('UserDocuments')->nullable();
            $table->tinyInteger('Department')->unsigned();
            $table->tinyInteger('Role')->unsigned();//foreign key for determine user type and menus
            $table->integer('Menus')->unsigned()->nullable();
            $table->string('BankCard')->nullable();
            $table->string('ProfilePhoto')->nullable();
            $table->rememberToken();
            $table->timestamps();


            $table->foreign('Department')
                ->references('id')->on('departments')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->foreign('Role')
                ->references('id')->on('roles')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->foreign('Menus')
                ->references('id')->on('user_menus')
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
        Schema::dropIfExists('users');
    }
}
