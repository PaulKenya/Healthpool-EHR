<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChildhealthcard4sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('childhealthcard4s', function (Blueprint $table) {
            $table->increments('id');
            $table->text('mother')->nullable();
            $table->text('antibody')->nullable();
            $table->text('pcr')->nullable();
            $table->text('mother1')->nullable();
            $table->text('antibody1')->nullable();
            $table->text('pcr1')->nullable();
            $table->text('mother2')->nullable();
            $table->text('antibody2')->nullable();
            $table->text('pcr2')->nullable();
            $table->date('6wk_date_given')->nullable();
            $table->text('6wk_quantity_dispensed')->nullable();
            $table->date('6wk_date_appointment')->nullable();
            $table->text('6wk_comments')->nullable();
            $table->date('10wk_date_given')->nullable();
            $table->text('10wk_quantity_dispensed')->nullable();
            $table->date('10wk_date_appointment')->nullable();
            $table->text('10wk_comments')->nullable();
            $table->date('14date_given')->nullable();
            $table->text('14quantity_dispensed')->nullable();
            $table->date('14date_appointment')->nullable();
            $table->text('14comments')->nullable();
            $table->date('4date_given')->nullable();
            $table->text('4quantity_dispensed')->nullable();
            $table->date('4date_appointment')->nullable();
            $table->text('4comments')->nullable();
            $table->date('5date_given')->nullable();
            $table->text('5quantity_dispensed')->nullable();
            $table->date('5date_appointment')->nullable();
            $table->text('5comments')->nullable();
            $table->date('6date_given')->nullable();
            $table->text('6quantity_dispensed')->nullable();
            $table->date('6date_appointment')->nullable();
            $table->text('6comments')->nullable();
            $table->date('7date_given')->nullable();
            $table->text('7quantity_dispensed')->nullable();
            $table->date('7date_appointment')->nullable();
            $table->text('7comments')->nullable();
            $table->date('8date_given')->nullable();
            $table->text('8quantity_dispensed')->nullable();
            $table->date('8date_appointment')->nullable();
            $table->text('8comments')->nullable();
            $table->date('9date_given')->nullable();
            $table->text('9quantity_dispensed')->nullable();
            $table->date('9date_appointment')->nullable();
            $table->text('9comments')->nullable();
            $table->date('10date_given')->nullable();
            $table->text('10quantity_dispensed')->nullable();
            $table->date('10date_appointment')->nullable();
            $table->text('10comments')->nullable();
            $table->date('11date_given')->nullable();
            $table->text('11quantity_dispensed')->nullable();
            $table->date('11date_appointment')->nullable();
            $table->text('11comments')->nullable();
            $table->date('12date_given')->nullable();
            $table->text('12quantity_dispensed')->nullable();
            $table->date('12date_appointment')->nullable();
            $table->text('12comments')->nullable();
            $table->date('18date_given')->nullable();
            $table->text('18quantity_dispensed')->nullable();
            $table->date('18date_appointment')->nullable();
            $table->text('18comments')->nullable();
            $table->date('6wks_date_givendate')->nullable();
            $table->date('6wks_date_givenhb')->nullable();
            $table->date('6wks_date_givendbs_pcr')->nullable();
            $table->date('6wks_date_givenantibody_test')->nullable();
            $table->date('6wks_date_givencd4count<20')->nullable();
            $table->date('6wks_date_givencd4count>20')->nullable();
            $table->date('6wks_date_givenlymphocyte_count<3500')->nullable();
            $table->date('6wks_date_givenlymphocyte_count>3500')->nullable();
            $table->date('6_date')->nullable();
            $table->text('6_hb')->nullable();
            $table->text('6_dbs_pcr')->nullable();
            $table->text('6_antibody_test')->nullable();
            $table->text('6_cd4count<20')->nullable();
            $table->text('6_cd4count>20')->nullable();
            $table->text('6_lymphocyte_count<3500')->nullable();
            $table->text('6_lymphocyte_count>3500')->nullable();
            $table->date('12_date')->nullable();
            $table->text('12_hb')->nullable();
            $table->text('12_dbs_pcr')->nullable();
            $table->text('12_antibody_test')->nullable();
            $table->text('12_cd4count<20')->nullable();
            $table->text('12_cd4count>20')->nullable();
            $table->text('12_lymphocyte_count<3500')->nullable();
            $table->text('12_lymphocyte_count>3500')->nullable();
            $table->date('18_date')->nullable();
            $table->text('18_hb')->nullable();
            $table->text('18_dbs_pcr')->nullable();
            $table->text('18_antibody_test')->nullable();
            $table->text('18_cd4count<20')->nullable();
            $table->text('18_cd4count>20')->nullable();
            $table->text('18_lymphocyte_count<3500')->nullable();
            $table->text('18_lymphocyte_count>3500')->nullable();
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
        Schema::dropIfExists('childhealthcard4s');
    }
}
