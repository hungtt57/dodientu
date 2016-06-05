<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
    
            $table->timestamps();
            $table->increments('id');
            $table->string('name');
            $table->string('alias');
            $table->text('description');
            $table->text('short_description');
            $table->text('info');
            $table->string('image');
            $table->integer('new_price');
            $table->integer('old_price');
            $table->string('sale');
            $table->integer('category_id')->unsigned();
            $table->text('more');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('products');
    }
}
