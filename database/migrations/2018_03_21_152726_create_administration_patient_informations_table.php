<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdministrationPatientInformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('administration_patient_informations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('title');
            $table->string('sex');
            $table->string('married');
            $table->string('company');
            $table->string('district');
            $table->string('location');
            $table->date('birth_date');
            $table->string('phone_number');
            $table->string('sub_location');
            $table->string('division');
            $table->string('village');
            $table->integer('id_passport_no');
            $table->integer('current_department')->default(1);
            $table->string('next_of_kin_name');
            $table->string('next_of_kin_relationship');
            $table->string('phone_no');
            $table->string('religion');
            $table->string('occupation');
            $table->string('discharged')->default(0);
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
        Schema::dropIfExists('administration_patient_informations');
    }
}
