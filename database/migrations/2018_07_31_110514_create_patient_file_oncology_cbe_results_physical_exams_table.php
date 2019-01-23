<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientFileOncologyCbeResultsPhysicalExamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_file_oncology_cbe_results_physical_exams', function (Blueprint $table) {
            $table->increments('id');
            $table->text('none_1')->nullable();
            $table->text('none_2')->nullable();
            $table->text('none_3')->nullable();
            $table->text('none_4')->nullable();
            $table->text('none_5')->nullable();
            $table->text('none_6')->nullable();
            $table->text('fine_1')->nullable();
            $table->text('fine_2')->nullable();
            $table->text('fine_3')->nullable();
            $table->text('fine_4')->nullable();
            $table->text('fine_5')->nullable();
            $table->text('fine_6')->nullable();
            $table->text('dense')->nullable();
            $table->text('dense_1')->nullable();
            $table->text('dense_2')->nullable();
            $table->text('dense_3')->nullable();
            $table->text('dense_4')->nullable();
            $table->text('dense_5')->nullable();
            $table->text('skin_edema')->nullable();
            $table->text('skin_1')->nullable();
            $table->text('skin_2')->nullable();
            $table->text('skin_3')->nullable();
            $table->text('skin_4')->nullable();
            $table->text('skin_5')->nullable();
            $table->text('nipple_charge')->nullable();
            $table->text('nipple_charge_1')->nullable();
            $table->text('nipple_charge_2')->nullable();
            $table->text('nipple_charge_3')->nullable();
            $table->text('nipple_charge_4')->nullable();
            $table->text('nipple_charge_5')->nullable();
            $table->text('tenderness')->nullable();
            $table->text('tenderness_1')->nullable();
            $table->text('tenderness_2')->nullable();
            $table->text('tenderness_3')->nullable();
            $table->text('tenderness_4')->nullable();
            $table->text('tenderness_5')->nullable();
            $table->text('discharge')->nullable();
            $table->text('discharge_1')->nullable();
            $table->text('discharge_2')->nullable();
            $table->text('discharge_3')->nullable();
            $table->text('discharge_4')->nullable();
            $table->text('discharge_5')->nullable();
            $table->text('mass')->nullable();
            $table->text('mass_1')->nullable();
            $table->text('mass_2')->nullable();
            $table->text('mass_3')->nullable();
            $table->text('mass_4')->nullable();
            $table->text('mass_5')->nullable();
            $table->text('None')->nullable();
            $table->text('yes')->nullable();
            $table->text('no')->nullable();
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
        Schema::dropIfExists('patient_file_oncology_cbe_results_physical_exams');
    }
}
