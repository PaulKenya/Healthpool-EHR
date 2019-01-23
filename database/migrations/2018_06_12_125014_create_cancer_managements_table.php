<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCancerManagementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cancer_managements', function (Blueprint $table) {
            $table->increments('id');

            $table->string('health_facility_name')->nullable();
            $table->string('sub_county')->nullable();
            $table->string('county')->nullable();
            $table->integer('year')->nullable();
            $table->string('month')->nullable();
            $table->integer('registry_number')->nullable();
            $table->string('surname')->nullable();
            $table->string('middle_name')->nullable();
            $table->string('last_name')->nullable();

            $table->integer('identification_number')->nullable();
            $table->string('marital_status')->nullable();
            $table->integer('telephone_number_patient')->nullable();
            $table->integer('telephone_number_next_of_kin')->nullable();
            $table->integer('age')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('sex')->nullable();
            $table->string('county_residence')->nullable();
            $table->string('division_residence')->nullable();

            $table->string('location_residence')->nullable();
            $table->string('place_of_birth')->nullable();
            $table->string('tribe')->nullable();
            $table->string('religion')->nullable();
            $table->string('education_level')->nullable();
            $table->string('occupation')->nullable();
            $table->string('smoking_status')->nullable();
            $table->string('drinking_status')->nullable();
            $table->date('incidence_date')->nullable();

            $table->string('basis_of_diagnosis')->nullable();
            $table->string('primary_site')->nullable();
            $table->integer('code_no')->nullable();
            $table->string('laterality_unilat')->nullable();
            $table->string('laterality_bil')->nullable();
            $table->string('laterality_rt')->nullable();
            $table->string('laterality_lt')->nullable();
            $table->string('laterality_unk')->nullable();
            $table->string('histology')->nullable();

            $table->integer('morphology_code')->nullable();
            $table->string('behaviour')->nullable();
            $table->string('grade')->nullable();
            $table->string('stage')->nullable();
            $table->string('t')->nullable();
            $table->string('n')->nullable();
            $table->string('m')->nullable();
            $table->string('surgery_first_course_of_treatment')->nullable();
            $table->date('surgery_date')->nullable();

            $table->string('radiotherapy_first_course_of_treatment')->nullable();
            $table->date('radiotherapy_date')->nullable();
            $table->string('chemotherapy_first_course_of_treatment')->nullable();
            $table->date('chemotherapy_date')->nullable();
            $table->string('hormone_therapy_first_course_of_treatment')->nullable();
            $table->date('hormone_therapy_date')->nullable();
            $table->string('immuno_first_course_of_treatment')->nullable();
            $table->date('immuno_date')->nullable();
            $table->string('other_fct')->nullable();

            $table->date('other_fct_date')->nullable();
            $table->string('lrap_file')->nullable();
            $table->integer('lab_no')->nullable();
            $table->integer('cd4_count')->nullable();
            $table->string('sicn_file')->nullable();
            $table->string('specifically')->nullable();
            $table->string('other_concurrent_illness')->nullable();
            $table->string('source_1_hospital')->nullable();
            $table->integer('hospital_number')->nullable();

            $table->date('src_date_1')->nullable();
            $table->string('source_2_lab')->nullable();
            $table->integer('lab_number')->nullable();
            $table->date('src_date_2')->nullable();
            $table->string('referred_from')->nullable();
            $table->integer('rf_ip_number')->nullable();
            $table->string('referred_to')->nullable();
            $table->integer('rt_ip_number')->nullable();
            $table->string('present_status')->nullable();

            $table->integer('hospice_number')->nullable();
            $table->date('dlc_dod')->nullable();
            $table->string('cause_of_death')->nullable();
            $table->string('remarks')->nullable();
            $table->string('form_filled_by')->nullable();
            $table->date('form_fill_date')->nullable();
            $table->string('checked_by')->nullable();
            $table->string('data_entered_by')->nullable();
            $table->date('data_entered_by_date')->nullable();

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
        Schema::dropIfExists('cancer_managements');
    }
}
