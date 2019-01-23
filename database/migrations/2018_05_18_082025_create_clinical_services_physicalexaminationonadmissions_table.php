<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClinicalServicesPhysicalexaminationonadmissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinical_services_physicalexaminationonadmissions', function (Blueprint $table) {
            $table->increments('id');

            $table->date('bio_date')->nullable();
            $table->string('bio_ward')->nullable();
            $table->string('bio_bed_number')->nullable();
            $table->string('condition')->nullable();
            $table->string('hygiene')->nullable();
            $table->string('nutrition')->nullable();
            $table->string('behaviour')->nullable();
            $table->string('oedema')->nullable();
            $table->string('other')->nullable();
            $table->string('abdomen')->nullable();
            $table->string('scars')->nullable();
            $table->string('tenderness')->nullable();
            $table->string('bowelpattern')->nullable();
            $table->string('bowelaction')->nullable();
            $table->string('laxatives')->nullable();
            $table->string('bowelsound')->nullable();
            $table->string('othersb')->nullable();
            $table->string('Hair')->nullable();
            $table->string('Face')->nullable();
            $table->string('Eyes')->nullable();
            $table->string('Nose')->nullable();
            $table->string('Mouth')->nullable();
            $table->string('Otherc')->nullable();
            $table->string('Mobility')->nullable();
            $table->string('Gait')->nullable();
            $table->string('Limbs')->nullable();
            $table->string('Digits')->nullable();
            $table->string('Muscletone')->nullable();
            $table->string('Scored')->nullable();
            $table->string('Hearingd')->nullable();
            $table->string('Speechd')->nullable();
            $table->string('Cryd')->nullable();
            $table->string('Othersd')->nullable();
            $table->string('Bladder')->nullable();
            $table->string('Voiding')->nullable();
            $table->string('Pain')->nullable();
            $table->string('Discharge')->nullable();
            $table->string('Otherse')->nullable();
            $table->string('pulse')->nullable();
            $table->string('bloodpressure')->nullable();
            $table->string('apexbeat')->nullable();
            $table->string('otherss')->nullable();
            $table->string('color')->nullable();
            $table->string('rashes')->nullable();
            $table->string('scarsb')->nullable();
            $table->string('woundsburns')->nullable();
            $table->string('bruises')->nullable();
            $table->string('temperaturec')->nullable();
            $table->string('waterlowscore')->nullable();
            $table->string('otherf')->nullable();
            $table->string('respirationpattern')->nullable();
            $table->string('ratebmin')->nullable();
            $table->string('cough')->nullable();
            $table->string('woundssputum')->nullable();
            $table->string('othersg')->nullable();
            $table->string('completion')->nullable();
            $table->string('date')->nullable();
            $table->string('time')->nullable();
            $table->string('designation')->nullable();
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
        Schema::dropIfExists('clinical_services_physicalexaminationonadmissions');
    }
}
