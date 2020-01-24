<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('UserId')->unsigned();
            $table->dateTime('RegisterDate')->useCurrent();
            $table->dateTime('DeliveryDate');
            $table->tinyInteger('RelatedDepartment')->unsigned();
            $table->bigInteger('SourceLanguage')->unsigned();
            $table->bigInteger('DestLanguage')->unsigned();
            $table->bigInteger('TranslationField')->unsigned();
            $table->longText('TranslationParts')->nullable();
            $table->integer('Amount')->nullable(); //number of words to be translated
            $table->decimal('TotalPrice',12,3)->nullable();
            $table->decimal('PrePaidPrice',12,3)->nullable();
            $table->bigInteger('ResponsibleUserId')->unsigned()->nullable();
            $table->tinyInteger('StatusId')->unsigned()->nullable();
            $table->longText('Description')->nullable();
            $table->string('OrderFile')->nullable();
            $table->timestamps();

            $table->foreign('UserId')
                ->references('id')->on('users')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->foreign('RelatedDepartment')
                ->references('id')->on('departments')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->foreign('SourceLanguage')
                ->references('id')->on('languages')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->foreign('DestLanguage')
                ->references('id')->on('languages')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->foreign('TranslationField')
                ->references('id')->on('translation_fields')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->foreign('ResponsibleUserId')
                ->references('id')->on('users')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->foreign('StatusId')
                ->references('id')->on('order_statuses')
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
        Schema::dropIfExists('orders');
    }
}
