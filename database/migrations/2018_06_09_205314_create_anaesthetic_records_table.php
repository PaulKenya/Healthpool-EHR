<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnaestheticRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anaesthetic_records', function (Blueprint $table) {
            $table->increments('id');
            $table->string('op_ip_number')->nullable();
            $table->string('ward_clinic')->nullable();
            $table->date('date')->nullable();
            $table->string('operation')->nullable();
            $table->string('anaesthetists')->nullable();
            $table->string('surgeons')->nullable();
            $table->string('type_of_premedication')->nullable();
            $table->time('time_given')->nullable();
            $table->string('effect')->nullable();
            $table->integer('weight')->nullable();
            $table->integer('height')->nullable();
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
        Schema::dropIfExists('anaesthetic_records');
    }
}
