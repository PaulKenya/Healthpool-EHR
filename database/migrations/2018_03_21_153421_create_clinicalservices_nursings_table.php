<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClinicalservicesNursingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinicalservices_nursings', function (Blueprint $table) {
            $table->increments('id');

            $table->string("bath_day")->nullable();
            $table->string("bath_night")->nullable();
            $table->string("oral_care_day")->nullable();
            $table->string("oral_care_night")->nullable();
            $table->string("pressure_area_care_day")->nullable();
            $table->string("pressure_area_care_night")->nullable();
            $table->string("breathing_adequately_day")->nullable();
            $table->string("breathing_adequately_night")->nullable();
            $table->string("monitor_saturation_day")->nullable();
            $table->string("monitor_saturation_night")->nullable();
            $table->string("oxygen_accordingly_day")->nullable();
            $table->string("oxygen_accordingly_night")->nullable();
            $table->string("diet_plan_day")->nullable();
            $table->string("diet_plan_night")->nullable();
            $table->string("oral_feedingday")->nullable();
            $table->string("oral_feedingnight")->nullable();
            $table->string("nasogastric_tube_feeding_day")->nullable();
            $table->string("nasogastric_tube_feeding_night")->nullable();
            $table->string("parental_day")->nullable();
            $table->string("parental_night")->nullable();
            $table->string("passing_urine_adequately_day")->nullable();
            $table->string("passing_urine_adequately_night")->nullable();
            $table->string("opening_bowels_adequatelyday")->nullable();
            $table->string("opening_bowels_adequatelynight")->nullable();
            $table->string("excessive_sweating_day")->nullable();
            $table->string("excessive_sweating_night")->nullable();
            $table->string("aeo_day")->nullable();
            $table->string("aeo_night")->nullable();
            $table->string("pen_day")->nullable();
            $table->string("pen_night")->nullable();
            $table->string("ps_day")->nullable();
            $table->string("ps_night")->nullable();
            $table->string("mobilised_day")->nullable();
            $table->string("mobilised_night")->nullable();
            $table->string("nutri_counselling_day")->nullable();
            $table->string("nutri_counselling_night")->nullable();
            $table->string("gen_counselling_day")->nullable();
            $table->string("gen_counselling_night")->nullable();
            $table->string("medications_6_am")->nullable();
            $table->string("medications_12_mid")->nullable();
            $table->string("medications_2_pm")->nullable();
            $table->string("medications_6_pm")->nullable();
            $table->string("medications_10_pm")->nullable();
            $table->string("vital_observations_6_am")->nullable();
            $table->string("vital_observations_10_am")->nullable();
            $table->string("vital_observations_2_pm")->nullable();
            $table->string("vital_observations_6_pm")->nullable();
            $table->string("vital_observations_10_pm")->nullable();
            $table->string("gcs_day")->nullable();
            $table->string("gcs_night")->nullable();
            $table->string("cannular_observations_6_am")->nullable();
            $table->string("cannular_observations_10_am")->nullable();
            $table->string("cannular_observations_2_pm")->nullable();
            $table->string("cannular_observations_6_pm")->nullable();
            $table->string("cannular_observations_10_pm")->nullable();
            $table->string("hes_day")->nullable();
            $table->string("hes_night")->nullable();
            $table->string("din_day")->nullable();
            $table->string("din_night")->nullable();
            $table->string("cdf_day")->nullable();
            $table->string("cdf_night")->nullable();
            $table->string("mna_day")->nullable();
            $table->string("mna_night")->nullable();
            $table->string("ba_day")->nullable();
            $table->string("ba_night")->nullable();
            $table->string("bran_day")->nullable();
            $table->string("bran_night")->nullable();
            $table->string("sic_day")->nullable();
            $table->string("sic_night")->nullable();
            $table->string("icm_day")->nullable();
            $table->string("icm_night")->nullable();
            $table->string("irfu_day")->nullable();
            $table->string("irfu_night")->nullable();
            $table->string("nok_day")->nullable();
            $table->string("nok_night")->nullable();
            $table->string("ar_day")->nullable();
            $table->string("ar_night")->nullable();
            $table->string("apmc_day")->nullable();
            $table->string("apmc_night")->nullable();
            $table->string("ni_day")->nullable();
            $table->string("ni_night")->nullable();
            $table->string("check_hod_day")->nullable();
            $table->string("check_hod_night")->nullable();
            //add to migrations
            $table->integer('administration_patient_informations_id')->references('id')->on('administration_patient_informations');
            $table->string('institution_id');
            $table->string('user_id');
            //the above three

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
        Schema::dropIfExists('clinicalservices_nursings');
    }
}
