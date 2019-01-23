<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClinicalservicesCasedeathsummariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinicalservices_casedeathsummaries', function (Blueprint $table) {
            $table->increments('id');

            $table->string('clinic_ward')->nullable();
            $table->string('date_of_admission')->nullable();
            $table->string('date_of_discharge')->nullable();
            $table->string('consultants')->nullable();
            $table->string('diagnosis')->nullable();

            $table->string('complaints')->nullable();
            $table->string('physical_findings')->nullable();
            $table->string('investigations')->nullable();
            $table->string('management')->nullable();
            $table->string('outcome_discharge_instructions')->nullable();
            $table->string('name_of_clinic')->nullable();
            $table->string('firm')->nullable();
            $table->string('day')->nullable();
            $table->date('date')->nullable();
            $table->integer('administration_patient_informations_id')->references('id')->on('administration_patient_informations');
            $table->string('institution_id');
            $table->string('user_id');

            $table->time('time')->nullable();
            $table->string('doctors_name')->nullable();
            $table->string('sign')->nullable();
            $table->string('department')->nullable();

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
        Schema::dropIfExists('clinicalservices_casedeathsummaries');
    }
}
