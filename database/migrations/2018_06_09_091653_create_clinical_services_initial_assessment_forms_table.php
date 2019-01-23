<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClinicalServicesInitialAssessmentFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinical_services_initial_assessment_forms', function (Blueprint $table) {
            $table->increments('id');


            $table->date('bio_bed_date')->nullable();
            $table->time('bio_bed_time')->nullable();
            $table->string('general')->nullable();
            $table->string('head_and_ent')->nullable();
            $table->string('spine_precautions')->nullable();
            $table->string('gcs_e')->nullable();
            $table->string('gcs_v')->nullable();
            $table->string('gcs_m')->nullable();
            $table->string('gcs_total')->nullable();
            $table->string('gcs_a')->nullable();
            $table->string('gcs_v_two')->nullable();
            $table->string('gcs_p')->nullable();
            $table->string('gcs_u')->nullable();
            $table->string('patient_b')->nullable();
            $table->string('stridor')->nullable();
            $table->string('obstructed')->nullable();
            $table->string('easy')->nullable();
            $table->string('dyspnea')->nullable();
            $table->string('tachypnea')->nullable();
            $table->string('shallow')->nullable();
            $table->string('not_ausculated')->nullable();
            $table->string('bilateral')->nullable();
            $table->string('wheezes')->nullable();
            $table->string('diminished')->nullable();
            $table->string('clear')->nullable();
            $table->string('crackles')->nullable();
            $table->string('oxygen_sat_ra')->nullable();
            $table->string('oxygen_admin_per')->nullable();
            $table->string('at')->nullable();
            $table->string('oxygen_sat_b')->nullable();
            $table->string('pulse_b')->nullable();
            $table->string('jvp')->nullable();
            $table->string('precordium')->nullable();
            $table->string('warm')->nullable();
            $table->string('dry')->nullable();
            $table->string('cool')->nullable();
            $table->string('moist_diaphoretic')->nullable();
            $table->string('soft')->nullable();
            $table->string('distened')->nullable();
            $table->string('tenderness')->nullable();

            $table->string('present')->nullable();
            $table->string('absent')->nullable();

            $table->string('last_meal')->nullable();
            $table->string('extremety_deformity')->nullable();
            $table->string('moves_all_extremities')->nullable();
            $table->string('digital_pulses_present')->nullable();
            $table->string('part_of_body_in_pain')->nullable();
            $table->string('diagnosis_b')->nullable();
            $table->string('discharge_pescription')->nullable();
            $table->string('discharge_instruction')->nullable();
            $table->string('improved')->nullable();
            $table->string('unchanged')->nullable();
            $table->date('return_appointment_date')->nullable();
            $table->string('patient_admitted_to')->nullable();
            $table->time('admission_time')->nullable();
            $table->time('discharge_time')->nullable();
            $table->string('signature_a')->nullable();
            $table->string('doctors_name')->nullable();

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
        Schema::dropIfExists('clinical_services_initial_assessment_forms');
    }
}
