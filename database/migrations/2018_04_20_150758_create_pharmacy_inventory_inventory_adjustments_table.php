<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePharmacyInventoryInventoryAdjustmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pharmacy_inventory_inventory_adjustments', function (Blueprint $table) {
            $table->increments('id');
            $table->text('inventory_reference');
            $table->text('inventory_of');
            $table->date('inventory_date');
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
        Schema::dropIfExists('pharmacy_inventory_inventory_adjustments');
    }
}
