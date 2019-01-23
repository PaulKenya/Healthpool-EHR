<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePharmacyInventoryStockoperationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pharmacy_inventory_stockoperations', function (Blueprint $table) {
            $table->increments('id');
            $table->text('partner');
            $table->date('scheduled_date');
            $table->text('source_document');
            $table->text('product');
            $table->integer('initial_demand');
            $table->integer('reserved');
            $table->integer('done');
            $table->text('shipping_policy');
            $table->text('operation_type');
            $table->text('priority');
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
        Schema::dropIfExists('pharmacy_inventory_stockoperations');
    }
}
