<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientFileMaternityRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_file_maternity_records', function (Blueprint $table) {
            $table->increments('id');

            $table->text('next_of_kin')->nullable();
            $table->integer('telephone_number_of_kin')->nullable();
            $table->text('present_history')->nullable();
            $table->text('pastt_history')->nullable();
            $table->text('menarchy')->nullable();
            $table->integer('cycle')->nullable();
            $table->integer('duration')->nullable();
            $table->integer('flow')->nullable();
            $table->text('fp')->nullable();
            $table->text('anc')->nullable();
            $table->text('tt')->nullable();
            $table->text('hb')->nullable();
            $table->text('vdrl')->nullable();
            $table->text('blood_group')->nullable();
            $table->text('hiv')->nullable();
            $table->text('hiv_status_of_partner')->nullable();
            $table->text('lmp')->nullable();
            $table->text('edd')->nullable();
            $table->string('med')->nullable();
            $table->string('parity')->nullable();
            $table->string('gravida')->nullable();
            $table->integer('year')->nullable();
            $table->string('place_of_delivery')->nullable();
            $table->string('type_of_delivery')->nullable();
            $table->string('sex')->nullable();
            $table->integer('weight')->nullable();
            $table->date('date')->nullable();
            $table->string('peuperium')->nullable();
            $table->integer('year1')->nullable();
            $table->string('place_of_delivery1')->nullable();
            $table->string('type_of_delivery1')->nullable();
            $table->string('sex1')->nullable();
            $table->integer('weight1')->nullable();
            $table->date('date1')->nullable();
            $table->date('date_of_admission')->nullable();
            $table->string('peuperium1')->nullable();
            $table->integer('bp')->nullable();
            $table->integer('pulse')->nullable();
            $table->integer('rr')->nullable();
            $table->integer('temperature')->nullable();
            $table->integer('fh_rate')->nullable();

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
        Schema::dropIfExists('patient_file_maternity_records');
    }
}
