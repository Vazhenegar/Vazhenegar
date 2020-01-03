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
            $table->tinyInteger('Department')->unsigned(); //foreign key for determine user department.
            $table->tinyInteger('Role')->unsigned(); //foreign key for determine user type and menus.
            $table->string('Status')->default('P'); //to determine user status: (P)ending, (A)ctive, (B)locked, (D)eactive
            $table->string('Mode')->default('ON'); //to determine user mode: (On)line, (OFF)line
            $table->longText('QuizAnswer')->nullable();
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

            $table->foreign('Status')
                ->references('id')->on('user_statuses')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->foreign('Mode')
                ->references('id')->on('user_modes')
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
