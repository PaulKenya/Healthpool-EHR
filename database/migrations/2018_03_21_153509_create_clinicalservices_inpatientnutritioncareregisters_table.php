<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClinicalservicesInpatientnutritioncareregistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinicalservices_inpatientnutritioncareregisters', function (Blueprint $table) {
            $table->increments('id');
            $table->string('county');
            $table->string('sub_county');
            $table->string('health_facility');
            $table->string('unique_reg_number');
            $table->date('admission_date');
            $table->string('clients_name');
            $table->string('physical_address');
            $table->string('age');
            $table->string('sex');
            $table->string('household_food_security');
            $table->string('admin_criteria');
            $table->string('type_of_admission');
            $table->string('serostatus');
            $table->string('weight');
            $table->string('muac');
            $table->string('departments');
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
        Schema::dropIfExists('clinicalservices_inpatientnutritioncareregisters');
    }
}
