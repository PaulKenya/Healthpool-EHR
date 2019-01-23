<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientFileInfantRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_file_infant_records', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('mothers_hospital_no');
            $table->string('name');
            $table->string('fathers_occupation');
            $table->string('address');
            $table->string('infant_name');
            $table->integer('age');
            $table->string('sex');
            $table->integer('age1');
            $table->integer('para');
            $table->date('edd');
            $table->date('year');
            $table->string('outcome');
            $table->string('parental_clinic');
            $table->string('toxaemia_a_phaem');
            $table->string('others');
            $table->string('Diabetes');
            $table->string('Tb');
            $table->string('Renal');
            $table->string('Cardiac');
            $table->string('others1');
            $table->string('ABO');
            $table->string('RH');
            $table->string('kalin');
            $table->string('VDRL');
            $table->string('X_Ray');
            $table->string('result');
            $table->integer('duration');
            $table->string('second_stage');
            $table->string('mode_of_delivery');
            $table->string('placenta');
            $table->integer('wt');
            $table->string('condition');
            $table->string('membranes_raptured');
            $table->string('amniotic_fluid');
            $table->string('foul');
            $table->string('meconium');
            $table->string('analgesia');
            $table->string('anasthesia');
            $table->date('born_on');
            $table->time('at');
            $table->string('resuscitation');
            $table->string('mucous_extraction');
            $table->string('given_duration');
            $table->string('incubation_duration');
            $table->string('spontaneous_response');
            $table->string('drugs_during_resuscitation');
            $table->integer('birth_weight');
            $table->integer('birth_length');
            $table->string('malformation');
            $table->string('blood_group');
            $table->string('highest_bilirubin');
            $table->string('urine');
            $table->string('drugs');
            $table->string('bye_drops');
            $table->string('vit_k');
            $table->string('bcg');
            $table->string('perinantal_problems');
            $table->string('admitted_to_nursery');
            $table->time('time');
            $table->integer('dismissal_weight');
            $table->string('remiscitation');
            $table->integer('anomalies');
            $table->string('apgar_score_at_1_min');
            $table->integer('five_min');
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
        Schema::dropIfExists('patient_file_infant_records');
    }
}
