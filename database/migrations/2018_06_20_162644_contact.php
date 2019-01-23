<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Contact extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('age')->nullable();
            $table->string('county_referred')->nullable();
            $table->string('county')->nullable();
            $table->string('incidence_date')->nullable();
            $table->string('primary_site')->nullable();
            $table->string('final_diagnosis')->nullable();
            $table->string('behaviour')->nullable();
            $table->string('basis_diagnosis')->nullable();
            $table->string('concurrent_illness')->nullable();
            $table->string('grade')->nullable();
            $table->string('stage')->nullable();
            $table->string('patient_serial_number')->nullable();
            $table->string('sex')->nullable();
            $table->string('occupation')->nullable();
            $table->string('date_last_contact')->nullable();
            $table->string('status')->nullable();
            $table->string('surgery_treatment')->nullable();
            $table->string('surgery_treatment_date')->nullable();
            $table->string('chemotherapy_treatment')->nullable();
            $table->string('chemotherapy_treatment_date')->nullable();
            $table->string('radiotherapy_treatment')->nullable();
            $table->string('radiotherapy_treatment_date')->nullable();
            $table->string('other_treatment')->nullable();
            $table->string('hospital_number')->nullable();
            $table->string('if_dead_cause')->nullable();
            $table->string('remarks_if_any')->nullable();
            $table->string('religion')->nullable();
            $table->string('smoking_status')->nullable();
            $table->string('drinking_status')->nullable();
            $table->string('hospital_status')->nullable();
            $table->string('reffered_from_1')->nullable();
            $table->string('ip_no_1')->nullable();
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
        Schema::dropIfExists('contacts');
    }
}
