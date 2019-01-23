<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePublichealthMoh406sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publichealth_moh406s', function (Blueprint $table) {
            $table->increments('id');

            $table->date("date");
            $table->string("pnc_no");
            $table->string("in_patient_no");
            $table->string("full_names");
            $table->integer("age");
            $table->string("level_of_education");
            $table->string("sub_location");
            $table->string("village");
            $table->date("date_of_delivery");
            $table->string("state_of_baby");
            $table->integer("temperature");
            $table->integer("pulse");
            $table->string("bp");
            $table->string("palor_and_hb");
            $table->string("breast_exam");
            $table->string("uterus");
            $table->string("pph");
            $table->string("cs_site");
            $table->string("lochia");
            $table->string("episiotomy");
            $table->string("hiv_status");
            $table->string("diagnosis");
            $table->string("mothers");
            $table->string("counselled_on_neonatal_care");
            $table->string("counselled_on_fp");
            $table->string("on_arvs");
            $table->string("cotrimazole");
            $table->string("screened_for_cancer_of_the_cervix");
            $table->string("other_conditions");
            $table->string("remarks");

            $table->integer("total_attendances");
            $table->integer("total_number_counselled");
            $table->integer("total_no_arvs");
            $table->integer("total_hiv_positive");
            $table->integer("total_mothers");
            $table->integer("infants");

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
        Schema::dropIfExists('publichealth_moh406s');
    }
}
