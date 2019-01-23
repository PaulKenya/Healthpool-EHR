<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFinanceAddTaxesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('finance_add_taxes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('taxname');
            $table->string('description');
            $table->string('taxagency');
            $table->string('sales');
            $table->integer('rate');
            $table->string('account');
            $table->string('return');
            $table->string('sreturn');
            $table->string('purchase');
            $table->integer('purchaserate');
            $table->string('accounts');
            $table->string('returns');
            $table->string('returnss');
            $table->string('period');
            $table->string('frequency');
            $table->integer('business');
            $table->integer('accountno');
            $table->integer('balance');
            $table->string('agencyperiod');
            $table->integer('total');
            $table->date('date');
            $table->integer('amount');
            $table->string('memo');
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
        Schema::dropIfExists('finance_add_taxes');
    }
}
