<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBloodTransfusionObservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blood_transfusion_observations', function (Blueprint $table) {
            $table->increments('id');
//            $table->string('name_of_patient');
//            $table->string('ip_number');
//            $table->string('ward');
//            $table->string('age');
//            $table->string('sex');
            $table->string('diagnosis');


            $table->string('blood_unit_donor_number');
            $table->string('transfusion_started_by');
            $table->string('counter_checked_by');
            $table->string('rate_of_transfusion');
            $table->string('hours_of_observation');
            $table->string('exact_time');
            $table->string('bp');
            $table->integer('temperature');
            $table->string('pr');
            $table->string('rr');
            $table->string('remarks');
            $table->time('time_transfusion_ended');
            $table->string('amount_of_transfused_blood');


            $table->string('other_symptoms');
            $table->string('intervention_drugs_given');
            $table->string('name_of_nurse_doctor_anaesthetist');
            $table->string('signature');
            $table->string('whole_blood')->nullable();
            $table->string('prbcs')->nullable();
            $table->string('plt')->nullable();
            $table->string('ffp')->nullable();
            $table->string('general_symptoms')->nullable();
            $table->string('dermatological_symptoms')->nullable();
            $table->string('cardiac_symptoms')->nullable();
            $table->string('renal_symptoms')->nullable();
            $table->string('haemotological_symptoms')->nullable();
            $table->date('date');

            //add to migrations
            $table->integer('administration_patient_informations_id')->references('id')->on('administration_patient_informations');
            $table->string('institution_id');
            $table->string('user_id');
            //the above three

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
        Schema::dropIfExists('blood_transfusion_observations');
    }
}
