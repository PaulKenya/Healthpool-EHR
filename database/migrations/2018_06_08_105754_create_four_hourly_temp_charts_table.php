->nullable()<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFourHourlyTempChartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('four_hourly_temp_charts', function (Blueprint $table) {
            $table->increments('id');

            $table->date('date_of_admission')->nullable();
            $table->string('date_of_disease')->nullable();
            $table->string('temp')->nullable();
            $table->string('pulse')->nullable();
            $table->string('resp')->nullable();
            $table->string('bowels')->nullable();
            $table->string('urine')->nullable();
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
        Schema::dropIfExists('four_hourly_temp_charts');
    }
}
