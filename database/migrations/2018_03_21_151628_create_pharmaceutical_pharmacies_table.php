<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePharmaceuticalPharmaciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pharmaceutical_pharmacies', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('age');
            $table->string('ward');
            $table->string('doa');
            $table->string('dod');
            $table->integer('unit_no');
            $table->date('date');
            $table->string('item_description');
            $table->integer('total_returned');
            $table->integer('unit_price');
            $table->integer('total_cost');
            $table->integer('ward_withdrawal');
            $table->string('sign_title_ward');
            $table->string('pharmacy_officers_name');
            $table->string('designation');
            $table->string('designation_sign');
            $table->string('ward_department');
            $table->string('ward_name');
            $table->string('ward_sign');
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
        Schema::dropIfExists('pharmaceutical_pharmacies');
    }
}
