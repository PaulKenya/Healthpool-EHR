<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFinanceAddCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('finance_add_customers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->string('suffix');
            $table->string('company');
            $table->string('display_name_as');
            $table->string('street');
            $table->string('city');
            $table->string('state');
            $table->integer('postal_code');
            $table->string('country');
            $table->string('notes');
            $table->string('email');
            $table->integer('phone_no');
            $table->integer('mobile_no');
            $table->string('fax');
            $table->string('other');
            $table->string('website');
            $table->string('preferred_payment_method');
            $table->string('preferred_delivery_method');
            $table->string('opening_balance');
            $table->date('date_as_of');
            $table->integer('account_no');
            $table->string('tax_registration_number');
            $table->string('attachments');
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
        Schema::dropIfExists('finance_add_customers');
    }
}
