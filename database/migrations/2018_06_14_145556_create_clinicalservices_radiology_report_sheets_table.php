<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClinicalservicesRadiologyReportSheetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinicalservices_radiology_report_sheets', function (Blueprint $table) {
            $table->increments('id');


            $table->date('bio_date')->nullable();

            $table->string('bio_ward')->nullable();
            $table->string('bio_bed_number')->nullable();


            $table->date('d_o_b')->nullable();

            $table->string('wd_clinic_pvt')->nullable();
            $table->string('pt_tel_no')->nullable();
            $table->date('appointment_date')->nullable();
            $table->time('time')->nullable();
            $table->string('portable')->nullable();
            $table->integer('xray_no')->nullable();
            $table->string('int_no')->nullable();
            $table->string('charges')->nullable();
            $table->string('invoice_number')->nullable();
            $table->string('receipt_cs_no')->nullable();
            $table->string('nhif_no')->nullable();
            $table->text('brief_clinical_summary')->nullable();
            $table->date('date_of_lmp')->nullable();
            $table->string('tick')->nullable();
            $table->string('specification')->nullable();
            $table->string('doctors_name')->nullable();
            $table->string('signature')->nullable();
            $table->string('date_a')->nullable();
            $table->string('radiographer_name')->nullable();
            $table->string('signature_a')->nullable();
            $table->date('date_b')->nullable();

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
        Schema::dropIfExists('clinicalservices_radiology_report_sheets');
    }
}
