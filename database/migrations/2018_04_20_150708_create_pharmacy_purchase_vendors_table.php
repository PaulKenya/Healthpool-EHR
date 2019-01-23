<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePharmacyPurchaseVendorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pharmacy_purchase_vendors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type');
            $table->string('name');
            $table->string('company');
            $table->string('job_position');
            $table->string('title');
            $table->string('street');
            $table->string('city');
            $table->string('state');
            $table->string('zip');
            $table->string('country');
            $table->string('tin');
            $table->string('tags');
            $table->string('phone');
            $table->string('mobile');
            $table->string('website');
            $table->string('language');
            $table->string('is_a_customer');
            $table->string('is_a_vendor');
            $table->string('salesperson');
            $table->string('internal_reference');
            $table->string('customer_payment_terms');
            $table->string('vendor_payment_terms');
            $table->string('fiscal_position');
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
        Schema::dropIfExists('pharmacy_purchase_vendors');
    }
}
