->nullable()<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiagnosticServicesRadiologyRequestFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diagnostic_services_radiology_request_forms', function (Blueprint $table)
        {
            $table->increments('id');

            $table->string('wd_clinic_pvt')->nullable();
            $table->integer('pt_tel_no')->nullable();
            $table->string('appointment_date')->nullable();
            $table->time('time')->nullable();
            $table->string('portable')->nullable();
            $table->integer('xray_no')->nullable();
            $table->integer('int_no')->nullable();
            $table->integer('charges')->nullable();
            $table->integer('invoice_no')->nullable();
            $table->integer('receipt_no')->nullable();
            $table->integer('nhif_no')->nullable();
            $table->string('brief_clinical_summary')->nullable();
            $table->date('date_of_lmp')->nullable();
            $table->string('1')->nullable();
            $table->string('1_specification')->nullable();
            $table->string('1_charge')->nullable();
            $table->string('2')->nullable();
            $table->string('2_specification')->nullable();
            $table->string('2_charge')->nullable();
            $table->string('3')->nullable();
            $table->string('3_specification')->nullable();
            $table->string('3_charge')->nullable();
            $table->string('4')->nullable();
            $table->string('4_specification')->nullable();
            $table->string('4_charge')->nullable();
            $table->string('5')->nullable();
            $table->string('5_specification')->nullable();
            $table->string('5_charge')->nullable();
            $table->string('6')->nullable();
            $table->string('6_specification')->nullable();
            $table->string('6_charge')->nullable();
            $table->string('7')->nullable();
            $table->string('7_specification')->nullable();
            $table->string('7_charge')->nullable();
            $table->string('8')->nullable();
            $table->string('8_name')->nullable();
            $table->string('8_specification')->nullable();
            $table->string('8_charge')->nullable();
            $table->string('doctor_name')->nullable();
            $table->string('signature')->nullable();
            $table->date('date')->nullable();
            $table->integer('req_doc_tel_no')->nullable();
            $table->string('radiographer_name')->nullable();
            $table->string('signature_radiographer')->nullable();
            $table->date('date_radiographer')->nullable();

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
        Schema::dropIfExists('diagnostic_services_radiology_request_forms');
    }
}
