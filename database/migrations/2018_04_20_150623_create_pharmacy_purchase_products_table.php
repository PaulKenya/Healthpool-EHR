<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePharmacyPurchaseProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pharmacy_purchase_products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('product_name');
            $table->string('can_be_sold');
            $table->string('can_be_purchased');
            $table->string('product_type');
            $table->integer('sale_price');
            $table->string('category');
            $table->integer('cost');
            $table->string('internal_reference');
            $table->string('barcode');
            $table->string('vendor');
            $table->string('minimum_quantity');
            $table->integer('price');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('routes_buy');
            $table->string('routes_make_order');
            $table->integer('weight');
            $table->integer('volume');
            $table->integer('customer_lead_time');
            $table->string('responsible');
            $table->integer('receivables');
            $table->integer('payables');
            $table->string('description_for_customers');
            $table->string('description_for_vendors');
            $table->string('description_for_delivery_orders');
            $table->string('description_for_reception');
            $table->string('description_for_internal_transfers');
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
        Schema::dropIfExists('pharmacy_purchase_products');
    }
}
