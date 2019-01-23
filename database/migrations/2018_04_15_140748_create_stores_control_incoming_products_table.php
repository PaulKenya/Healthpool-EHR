<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoresControlIncomingProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores_control_incoming_products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('source_location');
            $table->string('products');
            $table->string('destination_location');
            $table->string('initial_demand');
            $table->string('source_document');
            $table->string('procurement_group');
            $table->string('purchase_order_line');
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
        Schema::dropIfExists('stores_control_incoming_products');
    }
}
