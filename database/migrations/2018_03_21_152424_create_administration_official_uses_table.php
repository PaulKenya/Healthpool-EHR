<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdministrationOfficialUsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('administration_official_uses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('admitting_doctor')->nullable();
            $table->string('ward')->nullable();
            $table->string('bed_number')->nullable();
            $table->string('referred_from')->nullable();
            $table->string('diagnosis')->nullable();
            $table->string('charge_sheet')->nullable();
            $table->date('date_of_admission')->nullable();
            $table->integer('unit_number')->nullable();
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
        Schema::dropIfExists('administration_official_uses');
    }
}
