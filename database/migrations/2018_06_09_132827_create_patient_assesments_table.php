<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientAssesmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_assesments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('bed_room_no')->nullable();
            $table->time('time_of_ward_arrival')->nullable();
            $table->date('date_of_admission')->nullable();
            $table->string('admission_diagnosis')->nullable();
            $table->string('confirmed_diagnosis')->nullable();
            $table->string('reg_no')->nullable();
            $table->string('ward')->nullable();
            $table->string('surname')->nullable();
            $table->string('other_names')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('sex')->nullable();
            $table->string('doctors_name')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('nationality')->nullable();
            $table->string('religion')->nullable();
            $table->string('language_spoken')->nullable();
            $table->string('occupation')->nullable();
            $table->string('patient_special_request')->nullable();
            $table->string('ht')->nullable();
            $table->string('wt')->nullable();
            $table->string('bmi')->nullable();
            $table->string('lmp')->nullable();
            $table->string('blood_group')->nullable();
            $table->string('preferred_accomodation')->nullable();
            $table->string('next_of_kin')->nullable();
            $table->string('name')->nullable();
            $table->integer('mobile_number')->nullable();
            $table->string('address')->nullable();
            $table->string('relationship')->nullable();
            $table->string('residence')->nullable();
            $table->string('admission_form')->nullable();
            $table->string('ward_orientation_routine_gowns')->nullable();
            $table->string('id_band_given')->nullable();
            $table->string('admission_book_entry')->nullable();
            $table->string('urinalysis_results')->nullable();
            $table->string('patient_relatives_informed_of_visiting_hours')->nullable();
            $table->string('doctor_informed')->nullable();
            $table->string('nurse_care_plan')->nullable();
            $table->string('medication_commenced')->nullable();
            $table->string('valuable_forms_filled')->nullable();
            $table->string('allergy_form_filled')->nullable();
            $table->string('kitchen_informed')->nullable();
            $table->string('client_feedback_form')->nullable();
            $table->string('patient_admitted_by')->nullable();
            $table->string('signature')->nullable();
            $table->string('received_by')->nullable();
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
        Schema::dropIfExists('patient_assesments');
    }
}
