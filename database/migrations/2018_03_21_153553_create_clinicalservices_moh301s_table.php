<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClinicalservicesMoh301sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinicalservices_moh301s', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date_of_admission');
            $table->string('inpatient_no');
            $table->string('full_names');
            $table->string('age_in_years');
            $table->string('sex');
            $table->string('sublocation');
            $table->string('village_estate');
            $table->string('address');
            $table->string('hiv');
            $table->string('nutrition_education');
            $table->string('diagnosis');
            $table->string('treatment_prescform');
            $table->string('date_of_discharge');
            $table->string('outcome');
            $table->string('referral');
            $table->string('remark');
            $table->string('department');
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
        Schema::dropIfExists('clinicalservices_moh301s');
    }
}
