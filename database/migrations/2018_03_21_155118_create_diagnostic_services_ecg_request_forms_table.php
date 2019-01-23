->nullable()<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiagnosticServicesEcgRequestFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diagnostic_services_ecg_request_forms', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('unit_number')->nullable();
            $table->string('ward_clinic')->nullable();
            $table->string('bed_no')->nullable();
            $table->string('previous_ecg')->nullable();
            $table->string('report_to_be_sent_to')->nullable();
            $table->string('medication')->nullable();
            $table->string('digoxin_diuretics_others')->nullable();
            $table->string('relevant_history')->nullable();
            $table->date('date')->nullable();
            $table->string('signed_by')->nullable();
            $table->string('printed')->nullable();

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
        Schema::dropIfExists('diagnostic_services_ecg_request_forms');
    }
}
