<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePublichealthMoh702sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publichealth_moh702s', function (Blueprint $table) {
            $table->increments('id');
            $table->string('province');
            $table->string('district');
            $table->string('constituency');
            $table->string('facility_name');
            $table->string('agency');
            $table->string('month');
            $table->integer('year');
            $table->integer('bcg_under_1');
            $table->integer('bcg_over_1');
            $table->integer('dpt_hep_b_hb_1_under_1');
            $table->integer('dpt_hep_b_hb_1_over_1');
            $table->integer('dpt_hep_b_hb_2_under_1');
            $table->integer('dpt_hep_b_hb_2_over_1');
            $table->integer('dpt_hep_b_hb_3_under_1');
            $table->integer('dpt_hep_b_hb_3_over_1');
            $table->integer('opv_birth_under_1');
            $table->integer('opv_birth_over_1');
            $table->integer('opv_1_under_1');
            $table->integer('opv_1_over_1');
            $table->integer('opv_2_under_1');
            $table->integer('opv_2_over_1');
            $table->integer('opv_3_under_1');
            $table->integer('opv_3_over_1');
            $table->integer('measles_under_1');
            $table->integer('measles_over_1');
            $table->integer('yellow_fever_under_1');
            $table->integer('yellow_fever_over_1');
            $table->integer('fic_under_1');
            $table->integer('fic_over_1');
            $table->integer('vitamin_a_6_to_12_months');
            $table->integer('vitamin_a_above_1_year');
            $table->integer('vitamin_a_lactating_mothers');
            $table->integer('bcg_a');
            $table->integer('bcg_b');
            $table->integer('bcg_c');
            $table->integer('bcg_d');
            $table->integer('bcg_e');
            $table->integer('bcg_f');
            $table->integer('bcg_g');
            $table->integer('bcg_h');
            $table->integer('opv_a');
            $table->integer('opv_b');
            $table->integer('opv_c');
            $table->integer('opv_d');
            $table->integer('opv_e');
            $table->integer('opv_f');
            $table->integer('opv_g');
            $table->integer('opv_h');
            $table->integer('measles_a');
            $table->integer('measles_b');
            $table->integer('measles_c');
            $table->integer('measles_d');
            $table->integer('measles_e');
            $table->integer('measles_f');
            $table->integer('measles_g');
            $table->integer('measles_h');
            $table->integer('dpt_hlb_hepb_a');
            $table->integer('dpt_hlb_hepb_b');
            $table->integer('dpt_hlb_hepb_c');
            $table->integer('dpt_hlb_hepb_d');
            $table->integer('dpt_hlb_hepb_e');
            $table->integer('dpt_hlb_hepb_f');
            $table->integer('dpt_hlb_hepb_g');
            $table->integer('dpt_hlb_hepb_h');
            $table->integer('tt_a');
            $table->integer('tt_b');
            $table->integer('tt_c');
            $table->integer('tt_d');
            $table->integer('tt_e');
            $table->integer('tt_f');
            $table->integer('tt_g');
            $table->integer('tt_h');
            $table->integer('vitamin_a_100000_a');
            $table->integer('vitamin_a_100000_b');
            $table->integer('vitamin_a_100000_c');
            $table->integer('vitamin_a_100000_d');
            $table->integer('vitamin_a_100000_e');
            $table->integer('vitamin_a_100000_f');
            $table->integer('vitamin_a_100000_g');
            $table->integer('vitamin_a_100000_h');
            $table->integer('vitamin_a_200000_a');
            $table->integer('vitamin_a_200000_b');
            $table->integer('vitamin_a_200000_c');
            $table->integer('vitamin_a_200000_d');
            $table->integer('vitamin_a_200000_e');
            $table->integer('vitamin_a_200000_f');
            $table->integer('vitamin_a_200000_g');
            $table->integer('vitamin_a_200000_h');
            $table->date('form_submit_date');
            $table->string('form_submitted_by');
            $table->string('form_submit_designation');
            $table->string('signature');
            $table->string('received_by');
            $table->string('received_designation');
            $table->string('received_signature');
            $table->date('received_date');
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
        Schema::dropIfExists('publichealth_moh702s');
    }
}
