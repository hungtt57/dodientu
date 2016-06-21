<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImageLogoTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imageLogo', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
               $table->string('link');
            $table->integer('logo_id')->unsigned();
            $table->foreign('logo_id')->references('id')->on('logo')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('imageLogo');
    }
}
