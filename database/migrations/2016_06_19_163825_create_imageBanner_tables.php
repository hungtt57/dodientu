<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImageBannerTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imageBanner', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('link');
            $table->string('link_facebook');
            $table->integer('banner_id')->unsigned();
            $table->foreign('banner_id')->references('id')->on('banner')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('imageBanner');
    }
}
