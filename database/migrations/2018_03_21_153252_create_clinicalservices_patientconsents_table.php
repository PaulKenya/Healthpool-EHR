<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClinicalservicesPatientconsentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinicalservices_patientconsents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('surname');
            $table->string('hospital_no');
            $table->string('other_names');
            $table->string('date_of_birth');
            $table->string('age');
            $table->string('sex');
            $table->string('ward_clinic_dept');
            $table->string('name_of_surgeon');
            $table->string('name_of_anaesthetics');
            $table->string('next_of_kin');
            $table->string('relationship');
            $table->string('type_of_operation');
            $table->string('doctor_explanation');
            $table->string('nature_of_operation');
            $table->string('consent_of_operation');
            $table->string('consent_to_administration');
            $table->string('consent_to_disposal');
            $table->string('exeptions_to_operations');
            $table->string('assurance');
            $table->string('surgeon_assistant');
            $table->string('photographs_taken');
            $table->string('primary_care');
            $table->string('consent_admin');
            $table->string('law_protection');

            $table->string('patient_signature');
            $table->string('sugnature_nextofkin_parent');

            $table->string('surgeon__medicalpractitioners_signatures');
            $table->string('anaethesists_signature');
            $table->string('practitioners_name');
            $table->string('signature');
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
        Schema::dropIfExists('clinicalservices_patientconsents');
    }
}