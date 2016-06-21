<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImageBannerTalbe extends Migration
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
