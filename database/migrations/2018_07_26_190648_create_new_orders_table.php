<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('new_orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('order_date')->nullable();
            $table->string('cust_name')->nullable();
            $table->string('name')->nullable();
            $table->string('total')->nullable();
            $table->string('quantity')->nullable();
            $table->string('price')->nullable();
            $table->string('sub_total')->nullable();
            $table->string('gst')->nullable();
            $table->string('discount')->nullable();
            $table->string('net_total')->nullable();
            $table->string('paid')->nullable();
            $table->string('due')->nullable();
            $table->string('payment_type')->nullable();
            //add to migrations
            $table->integer('administration_patient_informations_id')->references('id')->on('administration_patient_informations');
            $table->string('institution_id');
            $table->string('user_id');
            //the above three
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
        Schema::dropIfExists('new_orders');
    }
}
