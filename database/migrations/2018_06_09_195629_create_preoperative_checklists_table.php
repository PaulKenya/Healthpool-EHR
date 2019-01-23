<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePreoperativeChecklistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('preoperative_checklists', function (Blueprint $table) {
            $table->increments('id');
            $table->string('patient_name')->nullable();
            $table->string('ip_no')->nullable();
            $table->string('age')->nullable();
            $table->string('sex')->nullable();
            $table->string('ward')->nullable();
            $table->string('bed')->nullable();
            $table->string('wigs')->nullable();
            $table->string('jewellery')->nullable();
            $table->string('preparation')->nullable();
            $table->string('urinalysis')->nullable();
            $table->string('sugar')->nullable();
            $table->string('albumin')->nullable();
            $table->string('bladder_check_and_urinary_catheter')->nullable();
            $table->string('gastric_tube')->nullable();
            $table->string('x_rays')->nullable();
            $table->string('consent_given')->nullable();
            $table->string('pcv')->nullable();
            $table->string('temperature')->nullable();
            $table->string('hydration_normal')->nullable();
            $table->string('chest_normal')->nullable();
            $table->string('pulse_min')->nullable();
            $table->string('rmp_completed')->nullable();
            $table->string('ipf_operation')->nullable();
            $table->string('blood_available')->nullable();
            $table->string('hb')->nullable();
            $table->string('electrolyte_normal')->nullable();
            $table->string('bp_systolic')->nullable();
            $table->string('bp_diastolic')->nullable();
            $table->string('pulse')->nullable();
            $table->string('dentures')->nullable();
            $table->string('has_consent_been_given')->nullable();
            $table->string('premedication_given')->nullable();
            $table->string('ward_nurse_signature')->nullable();
            $table->date('ward_nurse_sign_date')->nullable();
            $table->time('ward_nurse_sign_time')->nullable();
            $table->string('ward_doctor_signature')->nullable();
            $table->date('doctor_signature_date')->nullable();
            $table->time('doctor_signature_time')->nullable();
            $table->string('patient_seen_by_anaesthetist')->nullable();
            $table->string('anaesthetist_signature')->nullable();
            $table->date('anaesthetist_sign_date')->nullable();
            $table->time('anaesthetist_sign_time')->nullable();
            $table->string('signature_of_anaesthetist')->nullable();
            $table->date('sign_date')->nullable();
            $table->time('sign_time')->nullable();
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
        Schema::dropIfExists('preoperative_checklists');
    }
}
