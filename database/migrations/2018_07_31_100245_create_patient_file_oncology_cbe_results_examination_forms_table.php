->nullable()<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientFileOncologyCbeResultsExaminationFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_file_oncology_cbe_results_examination_forms', function (Blueprint $table) {
            $table->increments('id');
            $table->text('pt_name')->nullable();
            $table->text('new_id')->nullable();
            $table->text('dob')->nullable();
            $table->text('date_of_lact')->nullable();
            $table->text('annual_screening')->nullable();
            $table->text('normal')->nullable();
            $table->text('patient_age_dx')->nullable();
            $table->text('patient_age_dx_1')->nullable();
            $table->text('new_problem')->nullable();
            $table->text('abnormal')->nullable();
            $table->text('mother_age_of_dx_1')->nullable();
            $table->text('mother_age_of_dx')->nullable();
            $table->text('recall')->nullable();
            $table->text('unknown')->nullable();
            $table->text('sister_age_of_dx')->nullable();
            $table->text('n_a')->nullable();
            $table->text('short_term_f_u')->nullable();
            $table->text('mos')->nullable();
            $table->text('daughter_age_of_dx')->nullable();
            $table->text('n_a_1')->nullable();
            $table->text('other')->nullable();
            $table->text('other_1')->nullable();
            $table->text('aunt_age_of_dx')->nullable();
            $table->text('n_a_2')->nullable();
            $table->text('male_realtives_age_of_dx')->nullable();
            $table->text('n_a_3')->nullable();
            $table->text('patient_concerns_1')->nullable();
            $table->text('r_1')->nullable();
            $table->text('l_1')->nullable();
            $table->text('cyclic_1')->nullable();
            $table->text('date_pt_found')->nullable();
            $table->text('last_mammogram')->nullable();
            $table->text('lump')->nullable();
            $table->text('lump1')->nullable();
            $table->text('lump_2')->nullable();
            $table->text('lump_3')->nullable();
            $table->text('lump_4')->nullable();
            $table->text('last_menstral_period')->nullable();
            $table->text('nipple_discharge')->nullable();
            $table->text('discharge_1')->nullable();
            $table->text('discharge_2')->nullable();
            $table->text('discharge_3')->nullable();
            $table->text('discharge_4')->nullable();
            $table->text('byopsy_1')->nullable();
            $table->text('byopsy_2')->nullable();
            $table->text('byopsy_3')->nullable();
            $table->text('nipple_skin_retention')->nullable();
            $table->text('retention_1')->nullable();
            $table->text('retention_2')->nullable();
            $table->text('retention_3')->nullable();
            $table->text('retention_4')->nullable();
            $table->text('diets')->nullable();
            $table->text('swelling')->nullable();
            $table->text('swelling_1')->nullable();
            $table->text('swelling_2')->nullable();
            $table->text('swelling_3')->nullable();
            $table->text('swelling_4')->nullable();
            $table->text('years_1')->nullable();
            $table->text('years_2')->nullable();
            $table->text('years_3')->nullable();
            $table->text('rash')->nullable();
            $table->text('rash_1')->nullable();
            $table->text('rash_2')->nullable();
            $table->text('rash_3')->nullable();
            $table->text('rash_4')->nullable();
            $table->text('last_used')->nullable();
            $table->text('breast_pain')->nullable();
            $table->text('pain_1')->nullable();
            $table->text('pain_2')->nullable();
            $table->text('pain_3')->nullable();
            $table->text('pain_4')->nullable();
            $table->text('augmentation')->nullable();
            $table->text('augmentation_dates')->nullable();
            $table->text('Others_2')->nullable();
            $table->text('Others_3')->nullable();
            $table->text('Others_4')->nullable();
            $table->text('Others_1')->nullable();
            $table->text('Others_5')->nullable();
            $table->text('Others_6')->nullable();
            $table->text('Others_7')->nullable();
            $table->text('Others_8')->nullable();
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
        Schema::dropIfExists('patient_file_oncology_cbe_results_examination_forms');
    }
}
