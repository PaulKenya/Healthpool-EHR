<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientFileOccupationalTherapyInitialAssessmentFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_file_occupational_therapy_initial_assessment_forms', function (Blueprint $table) {
            $table->increments('id');

            $table->date('date_referred')->nullable();
            $table->date('date_of_asessment')->nullable();
            $table->string('occupational')->nullable();
            $table->string('diagnosis')->nullable();
            $table->integer('ot_no')->nullable();
            $table->string('adressed_by')->nullable();
            $table->string('referred_by')->nullable();
            $table->string('signature')->nullable();
            $table->string('main_complaint')->nullable();
            $table->string('personal_history')->nullable();
            $table->string('history')->nullable();
            $table->string('relevant')->nullable();
            $table->string('occupational_entail')->nullable();
            $table->string('activities')->nullable();
            $table->string('typical_day')->nullable();
            $table->string('leisure_time')->nullable();
            $table->string('priorities_in_life')->nullable();
            $table->string('impairement_prevent')->nullable();
            $table->string('communicational_skills')->nullable();
            $table->string('planning')->nullable();
            $table->string('memory')->nullable();
            $table->string('organization')->nullable();
            $table->string('problem_solving')->nullable();
            $table->string('sensory_processing')->nullable();
            $table->string('physical_ability')->nullable();
            $table->string('clients_posture')->nullable();
            $table->string('clients_mobility')->nullable();
            $table->string('co_ordination')->nullable();
            $table->string('clients_muscle')->nullable();
            $table->string('adls')->nullable();
            $table->string('barriers')->nullable();
            $table->string('assistive_devices')->nullable();
            $table->string('social_support')->nullable();
            $table->string('eating_skills')->nullable();
            $table->string('dressing_skils')->nullable();
            $table->string('hygiene_skills')->nullable();
            $table->string('domestic_living')->nullable();
            $table->string('comm_skills')->nullable();
            $table->string('other')->nullable();
            $table->string('fine_motor')->nullable();
            $table->string('handwriting')->nullable();
            $table->string('gross_motor')->nullable();
            $table->string('socializing_skills')->nullable();
            $table->string('pre_vocational')->nullable();
            $table->string('others')->nullable();
            $table->string('play_leisure')->nullable();
            $table->string('no_clear')->nullable();
            $table->string('intevention')->nullable();
            $table->string('needforot')->nullable();
            $table->string('need_extensive')->nullable();
            $table->string('referral')->nullable();
            $table->string('ot_issues')->nullable();
            $table->string('intervention_plan')->nullable();

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
        Schema::dropIfExists('patient_file_occupational_therapy_initial_assessment_forms');
    }
}
