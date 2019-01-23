<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_registrations', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date');
            $table->bigInteger('mrn_number');
            $table->bigInteger('ipad_number');
            $table->string('sex');
            $table->string('full_names');
            $table->bigInteger('id_number');
            $table->integer('po_box');
            $table->integer('postal_code');
            $table->string('town');
            $table->string('email_address');
            $table->integer('telephone_home');
            $table->string('office');
            $table->string('current_residence');
            $table->string('sublocation_residence_town');
            $table->string('home_district');
            $table->date('date_of_birth');
            $table->string('religion');
            $table->string('nationality');
            $table->string('password');
            $table->string('nok_full_names');
            $table->integer('nok_po_box');
            $table->integer('nok_postal_code');
            $table->string('nok_town');
            $table->string('nok_email_address');
            $table->integer('nok_telephone_home');
            $table->string('nok_office');
            $table->string('nok_current_residence');
            $table->string('nok_sublocation_residence_town');
            $table->bigInteger('nok_id_number');
            $table->string('nok_occupation');
            $table->string('nok_relationship_patient');
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
        Schema::dropIfExists('patient_registrations');
    }
}
