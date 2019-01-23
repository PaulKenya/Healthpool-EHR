<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFinanceAddSuppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('finance_add_suppliers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('firstname');
            $table->string('middlename');
            $table->string('lastname');
            $table->string('suffix');
            $table->string('company');
            $table->string('display');
            $table->integer('address');
            $table->string('city');
            $table->string('state');
            $table->integer('postalcode');
            $table->string('country');
            $table->string('email');
            $table->integer('phoneno');
            $table->integer('mobileno');
            $table->string('fax');
            $table->string('other');
            $table->string('website');
            $table->string('billing');
            $table->string('terms');
            $table->integer('balance');
            $table->date('date');
            $table->integer('accountno');
            $table->integer('business');
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
        Schema::dropIfExists('finance_add_suppliers');
    }
}
