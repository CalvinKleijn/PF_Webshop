<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Product extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('product_title');
            $table->string('product_image_front');
            $table->string('product_image_back');
            $table->string('product_brand');
            $table->string('product_description');
            $table->string('product_color');
            $table->string('product_size');
            $table->string('product_price');
            $table->timestamps();
        });   
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
