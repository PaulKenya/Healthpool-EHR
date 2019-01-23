<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePharmacyInventoryReorderingrulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pharmacy_inventory_reorderingrules', function (Blueprint $table) {
            $table->increments('id');
            $table->text('name');
            $table->text('product');
            $table->integer('minimum_quantity');
            $table->integer('maximum_quantity');
            $table->integer('quantity_multiple');
            $table->text('lead_time');
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
        Schema::dropIfExists('pharmacy_inventory_reorderingrules');
    }
}
