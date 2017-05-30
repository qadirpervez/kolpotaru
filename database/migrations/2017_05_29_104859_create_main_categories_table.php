<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMainCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('main_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('category');
            $table->text('pic_1_url')->nullable();
            $table->text('pic_2_url')->nullable();
            $table->text('pic_3_url')->nullable();
            $table->text('pic_1_sponsor')->nullable();
            $table->text('pic_2_sponsor')->nullable();
            $table->text('pic_3_sponsor')->nullable();
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
        Schema::dropIfExists('main_categories');
    }
}
