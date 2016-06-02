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
    
            // $table->timestamps();
            // $table->increments('id');
            // $table->string('name');
            // $table->string('alias');
            // $table->text('description');
            // $table->text('special');
            // $table->string('image');
            // $table->integer('first_price');
            // $table->integer('final_price');
            // $table->integer('category_id')->unsigned();

            // $table->integer('hot_status')->default(0);
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
