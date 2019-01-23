<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoresPurchaseOrdersNewDeliveriesAndInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores_purchase_orders_new_deliveries_and_invoices', function (Blueprint $table) {
            $table->increments('id');
            $table->string('VENDOR');
            $table->date('ORDER_DATE');
            $table->string('VENDOR_REFERENCE');
            $table->date('SCHEDULED_DATE');
            $table->string('PAYMENT_TERMS');
            $table->string('INCOTERMS');
            $table->string('FISCAL_POSITION');
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
        Schema::dropIfExists('stores_purchase_orders_new_deliveries_and_invoices');
    }
}
