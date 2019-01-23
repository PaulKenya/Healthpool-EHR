<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientFileAccidentAndEmergenciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_file_accident_and_emergencies', function (Blueprint $table) {
            $table->increments('id');

            $table->date('bio_bed_date')->nullable();
            $table->time('bio_bed_time')->nullable();
            $table->string('air')->nullable();
            $table->string('cyclist')->nullable();
            $table->string('assault')->nullable();
            $table->string('pedestrian')->nullable();
            $table->string('burns')->nullable();
            $table->string('self_inflicted')->nullable();
            $table->string('other_form_of_accident')->nullable();
            $table->string('name_a')->nullable();
            $table->string('telephone_no')->nullable();
            $table->string('relationship')->nullable();
            $table->string('patient_referred_from')->nullable();
            $table->string('walking')->nullable();
            $table->string('stretcher')->nullable();
            $table->string('wheel_chair')->nullable();
            $table->string('carried')->nullable();
            $table->string('name_a1')->nullable();
            $table->string('force_number')->nullable();
            $table->string('police_station')->nullable();
            $table->date('date_of_accident')->nullable();
            $table->time('time')->nullable();
            $table->string('vehicle_number')->nullable();
            $table->string('driver_name')->nullable();
            $table->integer('id_no')->nullable();
            $table->integer('dl_no')->nullable();
            $table->time('triage_time')->nullable();
            $table->string('emergency')->nullable();
            $table->string('urgent')->nullable();
            $table->string('semi_urgent')->nullable();
            $table->string('non_urgent')->nullable();
            $table->string('pr')->nullable();
            $table->string('rr')->nullable();
            $table->string('temp')->nullable();
            $table->string('oxygen_sat')->nullable();
            $table->string('lmp')->nullable();
            $table->string('wt')->nullable();
            $table->string('phmx')->nullable();
            $table->string('allergies')->nullable();
            $table->string('medications')->nullable();
            $table->string('valuables')->nullable();
            $table->string('history_and_examination')->nullable();
            $table->time('time_seen')->nullable();
            $table->string('lab_sent')->nullable();


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
        Schema::dropIfExists('patient_file_accident_and_emergencies');
    }
}
