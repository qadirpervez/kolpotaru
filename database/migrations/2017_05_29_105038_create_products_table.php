<?php

use Illuminate\Support\Facades\Schema;
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
            $table->increments('id');
            $table->string('title');
            $table->text('description');
            $table->string('seling_price');
            $table->string('min_sell_price');
            $table->integer('quantity')->nullable();
            $table->integer('views')->nullable();
            $table->integer('likes')->nullable();
            $table->boolean('combo');
            $table->string('max_delivery_time');
            $table->integer('mini_category_id')->unsigned();
            $table->integer('seller_id')->unsigned();
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
