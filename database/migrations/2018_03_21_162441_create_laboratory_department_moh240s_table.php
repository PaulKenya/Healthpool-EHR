<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLaboratoryDepartmentMoh240sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laboratory_department_moh240s', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date')->nullable();
            $table->string('opd_ip_ref_no')->nullable();
            $table->integer('lab_no')->nullable();
            $table->string('revisit')->nullable();
            $table->string('village_estate')->nullable();
            $table->string('address')->nullable();
            $table->string('clinical_diagnosis')->nullable();
            $table->string('prior_treatment')->nullable();
            $table->string('type_of_specimen')->nullable();
            $table->string('condition_specimen')->nullable();
            $table->string('investigation_required')->nullable();
            $table->date('date_sample_collected')->nullable();
            $table->date('date_sample_received')->nullable();
            $table->string('clinician_name')->nullable();
            $table->date('date_sample_analyzed')->nullable();
            $table->string('results')->nullable();
            $table->date('date_results_dispatched')->nullable();
            $table->integer('amount_charged')->nullable();
            $table->string('comments')->nullable();
            $table->string('name_of_analyzing_officer')->nullable();
            $table->string('signature')->nullable();

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
        Schema::dropIfExists('laboratory_department_moh240s');
    }
}
