<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePharmacyPurchaseOrdersNewProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pharmacy_purchase_orders_new_products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('vendor');
            $table->date('order_date');
            $table->string('vendor_reference');
            $table->string('product');
            $table->string('description');
            $table->date('scheduled_date');
            $table->integer('quantity');
            $table->integer('receivable_quantity');
            $table->integer('billable_quantity');
            $table->integer('unit_price');
            $table->integer('taxes');
            $table->integer('sub_total');
            $table->string('terms_and_conditions');
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
        Schema::dropIfExists('pharmacy_purchase_orders_new_products');
    }
}
