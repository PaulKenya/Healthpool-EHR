<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClinicalservicesConsultationrequestformsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinicalservices_consultationrequestforms', function (Blueprint $table) {
            $table->increments('id');

            $table->date('bio_date')->nullable();
            $table->string('bio_ward')->nullable();
            $table->string('bio_bed_number')->nullable();
            $table->string('dr_mr')->nullable();
            $table->string('in_the')->nullable();
            $table->string('full_name_of_patient')->nullable();
            $table->string('referred_from_ward')->nullable();
            $table->string('clinic')->nullable();
            $table->string('unit_no')->nullable();
            $table->string('casualty_no')->nullable();
            $table->string('others')->nullable();
            $table->string('diagnosis')->nullable();
            $table->string('reasons_for_consultations')->nullable();
            $table->string('urgent')->nullable();
            $table->string('signature')->nullable();
            $table->string('name_printed')->nullable();

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
        Schema::dropIfExists('clinicalservices_consultationrequestforms');
    }
}
