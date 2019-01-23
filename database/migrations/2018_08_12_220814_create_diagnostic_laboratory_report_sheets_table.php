<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiagnosticLaboratoryReportSheetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diagnostic_laboratory_report_sheets', function (Blueprint $table) {
            $table->increments('id');

            $table->string('lab_partner')->nullable();
            $table->string('lab_experiment')->nullable();
            $table->string('state_standard')->nullable();
            $table->string('lab_date')->nullable();
            $table->string('introduction')->nullable();
            $table->string('hypothesis')->nullable();
            $table->string('materials')->nullable();
            $table->string('procedures')->nullable();
            $table->string('data_Recording')->nullable();
            $table->string('analysis')->nullable();
            $table->string('discussion')->nullable();
            $table->string('conclusion')->nullable();

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
        Schema::dropIfExists('diagnostic_laboratory_report_sheets');
    }
}
