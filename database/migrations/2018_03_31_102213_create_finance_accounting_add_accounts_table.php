<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFinanceAccountingAddAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('finance_accounting_add_accounts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('account_type');
            $table->string('details_type');
            $table->string('name');
            $table->string('sub_account');
            $table->string('default_tax');
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
        Schema::dropIfExists('finance_accounting_add_accounts');
    }
}
