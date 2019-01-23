<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClinicalservicesRadiologyrequestformsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinicalservices_radiologyrequestforms', function (Blueprint $table)
        {
            $table->increments('id');

            $table->string('patient_name');
            $table->string('hosp_no');
            $table->date('DOB');
            $table->string('age');
            $table->string('gender');
            $table->string('wd_clinic_pvt');
            $table->integer('pt_tel_no');
            $table->date('appointment_date');
            $table->time('time');
            $table->string('portable');
            $table->string('xray_no');
            $table->string('int_no');
            $table->string('charges');
            $table->string('invoice_number');
            $table->string('receipt_csno');
            $table->string('nhif_no');
            $table->string('brief_clinical_summary');
            $table->date('date_of_lmp');
            $table->string('type_of_invenstigation');
            $table->string('specifications');
            $table->string('type_of_invenstigation1');
            $table->string('specifications1');
            $table->string('type_of_invenstigation2');
            $table->string('specifications2');
            $table->string('type_of_invenstigation3');
            $table->string('specifications3');
            $table->string('type_of_invenstigation4');
            $table->string('specifications4');
            $table->string('type_of_invenstigation5');
            $table->string('specifications5');
            $table->string('type_of_invenstigation6');
            $table->string('specifications6');
            $table->string('type_of_invenstigation7');

            $table->string('specifications7');
            $table->string('doctors_name');
            $table->string('signature');
            $table->date('date');
            $table->string('tel');
            $table->string('radiographers_name');
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
        Schema::dropIfExists('clinicalservices_radiologyrequestforms');
    }
}