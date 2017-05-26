<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSellersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sellers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstName');
            $table->string('middleName')->nullable();
            $table->string('lastName');
            $table->string('fatherHusbandName')->nullable();
            $table->string('companyName');
            $table->string('shopName')->nullable();
            $table->string('addressHouseShopNo');
            $table->string('addressStreet');
            $table->string('addressCity');
            $table->char('addressPin', 6);
            $table->string('mainPersonName');
            $table->string('contactablePersonName')->nullable();
            $table->string('whatsappNo');
            $table->string('typeOfCompany');
            $table->string('typeOfCompany_other')->nullable();
            $table->string('panOfProprietor');
            $table->string('panOfCompany')->nullable();
            $table->string('tinOfCompany')->nullable();
            $table->string('vat')->nullable();
            $table->string('cstGstNo')->nullable();
            $table->string('registrationNo')->nullable();
            $table->string('productCategory')->nullable();
            $table->string('timeInBusiness')->nullable();
            $table->boolean('combo');
            $table->boolean('experience');
            $table->text('experienceDescription')->nullable();
            $table->text('experienceURL')->nullable();
            $table->text('description');
            $table->string('yearsInBusiness');
            $table->string('turnOver');
            $table->string('documentOne_id');
            $table->string('documentTwo_id');
            $table->text('facebookURL')->nullable();
            $table->text('linkedinURL')->nullable();
            $table->string('email');
            $table->rememberToken();
            $table->string('password');
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
        Schema::dropIfExists('sellers');
    }
}
