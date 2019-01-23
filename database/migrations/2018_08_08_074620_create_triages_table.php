<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTriagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('triages', function (Blueprint $table) {
            $table->increments('id');


            $table->string('destination')->nullable();
            $table->string('via')->nullable();
            $table->string('salivation')->nullable();
            $table->string('lacrimation')->nullable();
            $table->string('urination')->nullable();
            $table->string('defecation')->nullable();
            $table->string('distress')->nullable();
            $table->string('emesis')->nullable();
            $table->string('auto_injector_1')->nullable();
            $table->string('auto_injector_2')->nullable();
            $table->string('auto_injector_3')->nullable();
            $table->string('auto_injector_4')->nullable();
            $table->string('auto_injector_5')->nullable();
            $table->string('gross_decon')->nullable();
            $table->string('secondary_deacon')->nullable();
            $table->string('blunt_trauma')->nullable();
            $table->string('burn')->nullable();
            $table->string('cspine')->nullable();
            $table->string('cardiac')->nullable();
            $table->string('crushing')->nullable();
            $table->string('fracture')->nullable();
            $table->string('laceration')->nullable();
            $table->string('penetrating_injury')->nullable();
            $table->string('others')->nullable();
            $table->time('time')->nullable();
            $table->string('bp')->nullable();
            $table->string('pulse')->nullable();
            $table->string('respiration')->nullable();
            $table->string('drug_solution')->nullable();
            $table->string('dose')->nullable();
            $table->string('status')->nullable();
            $table->string('temperature')->nullable();
            $table->string('weight')->nullable();
            $table->string('pressure')->nullable();
            $table->text('comments')->nullable();






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
        Schema::dropIfExists('triages');
    }
}
