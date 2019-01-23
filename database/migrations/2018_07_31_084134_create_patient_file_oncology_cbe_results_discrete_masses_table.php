<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientFileOncologyCbeResultsDiscreteMassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_file_oncology_cbe_results_discrete_masses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('wnl_r')->nullable();
            $table->string('wnl_l')->nullable();
            $table->string('supra_r')->nullable();
            $table->string('supra_l')->nullable();
            $table->string('infra_r')->nullable();
            $table->string('infra_l')->nullable();
            $table->string('enlarged_r')->nullable();
            $table->string('enlarged_l')->nullable();
            $table->string('en_supra_r')->nullable();
            $table->string('en_supra_l')->nullable();
            $table->string('en_infra_r')->nullable();
            $table->string('en_infra_l')->nullable();
            $table->string('fixed_r')->nullable();
            $table->string('fixed_l')->nullable();
            $table->string('mobile_r')->nullable();
            $table->string('mobile_l')->nullable();
            $table->string('cbe_result_date')->nullable();
            $table->string('imaging_referral_date')->nullable();
            $table->string('normal')->nullable();
            $table->string('screening_imaging')->nullable();
            $table->string('importance_of_annual_screen')->nullable();
            $table->string('benign_finding')->nullable();
            $table->string('diagnostic_imaging')->nullable();
            $table->string('referral_follow_up')->nullable();
            $table->string('anormality')->nullable();
            $table->string('ultra_sound_only')->nullable();
            $table->string('breast_self_examination')->nullable();
            $table->string('other')->nullable();
            $table->string('other_1')->nullable();
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
        Schema::dropIfExists('patient_file_oncology_cbe_results_discrete_masses');
    }
}
