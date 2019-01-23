<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFinanceBankingBankRulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('finance_banking_bank_rules', function (Blueprint $table) {
            $table->increments('id');
            $table->string('rule_name');
            $table->string('for');
            $table->string('in');
            $table->string('bank_texts');
            $table->string('contains');
            $table->string('transaction_type');
            $table->string('payee');
            $table->string('category');
            $table->string('memo');
            $table->string('automatic');
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
        Schema::dropIfExists('finance_banking_bank_rules');
    }
}
