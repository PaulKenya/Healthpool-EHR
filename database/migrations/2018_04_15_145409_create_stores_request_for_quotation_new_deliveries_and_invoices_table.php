<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoresRequestForQuotationNewDeliveriesAndInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores_request_for_quotation_new_deliveries_and_invoices', function (Blueprint $table) {
            $table->increments('id');
            $table->string('vendor');
            $table->date('order_date');
            $table->string('vendor_reference');
            $table->date('scheduled_date');
            $table->string('payment_terms');
            $table->string('incoterm');
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
        Schema::dropIfExists('stores_request_for_quotation_new_deliveries_and_invoices');
    }
}
