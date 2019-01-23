<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePublichealthMoh405sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publichealth_moh405s', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date');
            $table->integer('anc_no');
            $table->string('re_attendant');
            $table->integer('no_of_visits');
            $table->string('full_names');
            $table->integer('age');
            $table->string('marital_status');
            $table->string('sub_location');
            $table->string('village');
            $table->string('parity');
            $table->string('gravidae');
            $table->date('lmp_date');
            $table->date('edd_date');
            $table->integer('gestation_age');
            $table->float('weight');
            $table->integer('blood_pressure');
            $table->integer('hb');
            $table->string('rpr');
            $table->string('hiv_status');
            $table->string('screened_for_tb');
            $table->string('received_hiv_results');
            $table->string('other_conditions');
            $table->string('cotrixamole_given');
            $table->string('dose_of_tt_given');
            $table->string('given_iron_supplementation');
            $table->string('given_folic');
            $table->string('given_ipt1');
            $table->string('given_ipt2');
            $table->string('received_arv_prophylaxis_mother');
            $table->string('received_arv_prophylaxis_baby');
            $table->string('received_itn');
            $table->string('counselled_on');
            $table->string('additional_treatment');
            $table->string('partners');
            $table->string('partners_status');
            $table->string('hiv_positive_partners_referred_for_follow_up');
            $table->string('remarks');
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
        Schema::dropIfExists('publichealth_moh405s');
    }
}
