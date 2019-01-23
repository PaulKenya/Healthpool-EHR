<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsentFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consent_forms', function (Blueprint $table) {
            $table->increments('id');

            $table->string("name_of_surgeon")->nullable();
            $table->string("name_of_anaesthetist")->nullable();
            $table->string("next_of_kin")->nullable();
            $table->string("relationship")->nullable();
            $table->string("type_of_operation")->nullable();
            $table->string("doctor_explanation")->nullable();
            $table->string("pcf_1")->nullable();
            $table->string("pcf_2")->nullable();
            $table->string("pcf_3")->nullable();
            $table->string("pcf_4")->nullable();
            $table->string("pcf_5")->nullable();
            $table->string("pcf_6" )->nullable();
            $table->string("pcf_7" )->nullable();
            $table->string("pcf_8" )->nullable();
            $table->string("pcf_9" )->nullable();
            $table->string("pcf_10" )->nullable();
            $table->string("law_protection" )->nullable();
            $table->string("patient_signature")->nullable();
            $table->date("patient_date")->nullalble();
            $table->string("nok_signature")->nullable();
            $table->string("nok_name")->nullable();
            $table->date("nok_date")->nullable();
            $table->string("smp_signature")->nullable();
            $table->string("smp_name")->nullable();
            $table->date("smp_date")->nullable();
            $table->string("a_signature")->nullable();
            $table->string("a_name")->nullable();
            $table->date("a_date")->nullable();
            $table->string("practitioners_name")->nullable();
            $table->string("samp_signature")->nullable();

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
        Schema::dropIfExists('consent_forms');
    }
}
