<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePublichealthMoh510sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publichealth_moh510s', function (Blueprint $table) {
            $table->increments('id');
            $table->date("date");
            $table->string("serial_number");
            $table->string("childs_number");
            $table->string("childs_names");
            $table->string("sex");
            $table->date("date_of_birth");
            $table->date("date_first_seen");
            $table->string("fathers_full_names");
            $table->string("mothers_full_names");
            $table->string("location");
            $table->string("address");
            $table->date("bcg_vaccine");
            $table->date("revaccination_date");
            $table->date("polio_birth_dose_vaccination");
            $table->date("first_polio_vaccine_date");
            $table->date("second_polio_vaccine_date");
            $table->date("third_polio_vaccine_date");
            $table->date("dpt_hepb_hb1_vaccine_date");
            $table->date("dpt_hepb_hb2_vaccine_date");
            $table->date("dpt_hepb_hb3_vaccine_date");
            $table->date("measles_vaccine_date");
            $table->date("yellow_fever_vaccine_date");
            $table->date("vitamin_a_vaccine_date");
            $table->date("fully_immunized_vaccine_date");
            $table->string("remarks");
            $table->string("departments");











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
        Schema::dropIfExists('publichealth_moh510s');
    }
}
