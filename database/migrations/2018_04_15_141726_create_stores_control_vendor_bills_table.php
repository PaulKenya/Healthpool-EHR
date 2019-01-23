<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoresControlVendorBillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores_control_vendor_bills', function (Blueprint $table) {
            $table->increments('id');
            $table->string('bill');
            $table->string('vendor');
            $table->date('bill_date');
            $table->string('vendor_reference');
            $table->date('due_date');
            $table->string('all_purchase_orders');
            $table->string('product');
            $table->string('description');
            $table->integer('quantity');
            $table->integer('unit_price');
            $table->integer('taxes');
            $table->integer('amount');
            $table->string('responsible');
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
        Schema::dropIfExists('stores_control_vendor_bills');
    }
}
