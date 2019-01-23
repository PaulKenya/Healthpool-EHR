<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientFileOncologyCbeResultsCaseManagementFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_file_oncology_cbe_results_case_management_forms', function (Blueprint $table) {
            $table->increments('id');
            $table->date('referral_for_risk_assessment_counselling')->nullable();
            $table->date('radiology_imaging_workup')->nullable();
            $table->date('cbe_imaging_discondant')->nullable();
            $table->date('surgical_consult')->nullable();
            $table->date('patient_notified_of_mammogram_results')->nullable();
            $table->date('return_for_cbe_in_months')->nullable();
            $table->date('patient_informed_and_referral')->nullable();
            $table->date('return_for_cbe_in_six_months')->nullable();
            $table->date('return_in_one_year_for_annual_cbe')->nullable();
            $table->date('other')->nullable();
            $table->date('date')->nullable();
            $table->text('diagnosis')->nullable();
            $table->integer('administration_patient_informations_id')->references('id')->on('administration_patient_informations');
            $table->string('institution_id');
            $table->string('user_id');
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
        Schema::dropIfExists('patient_file_oncology_cbe_results_case_management_forms');
    }
}
