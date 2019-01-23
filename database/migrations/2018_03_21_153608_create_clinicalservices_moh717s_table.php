<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClinicalservicesMoh717sTable extends Migration
{
    /**
     * Run the migrations_
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinicalservices_moh717s', function (Blueprint $table) {
            $table->increments('id');
            $table->string('district');
            $table->string('health_facility');
            $table->string('month');
            $table->string('year');
            $table->string('facility_code');
            $table->string('new_a_1_1');
            $table->string('reatt_a_1_1');
            $table->string('total_a_1_1');
            $table->string('new_a_1_2');
            $table->string('reatt_a_1_2');
            $table->string('total_a_1_2');
            $table->string('new_a_1_3');
            $table->string('reatt_a_1_3');
            $table->string('total_a_1_3');
            $table->string('new_a_1_4');
            $table->string('reatt_a_1_4');
            $table->string('total_a_1_4');
            $table->string('new_a_1_4_new');
            $table->string('reatt_a_1_4_reatt');
            $table->string('total_a_1_4_total');
            $table->string('new_a_3_1');
//            $table->string('reatt_a_3_1');
//            $table->string('total_a_3_1');
//            $table->string('new_a_3_2');
//            $table->string('reatt_a_3_2');
//            $table->string('total_a_3_2');
//            $table->string('new_a_3_3');
//            $table->string('reatt_a_3_3');
//            $table->string('total_a_3_3');
//            $table->string('new_a_3_4');
//            $table->string('reatt_a_3_4');
//            $table->string('total_a_3_4');
//            $table->string('new_a_3_5');
//            $table->string('reatt_a_3_5');
//            $table->string('total_a_3_5');
//            $table->string('new_a_3_6');
//            $table->string('reatt_a_3_6');
//            $table->string('total_a_3_6');
//            $table->string('new_a_3_7');
//            $table->string('reatt_a_3_7');
//            $table->string('total_a_3_7');
//            $table->string('new_a_3_8');
//            $table->string('reatt_a_3_8');
//            $table->string('total_a_3_8');
//            $table->string('new_a_4_1');
//            $table->string('reatt_a_4_1');
//            $table->string('total_a_4_1');
//            $table->string('new_a_4_2');
//            $table->string('reatt_a_4_2');
//            $table->string('total_a_4_2');
//            $table->string('new_a_4_3');
//            $table->string('reatt_a_4_3');
//            $table->string('total_a_4_3');
//            $table->string('new_a_4_4');
//            $table->string('reatt_a_4_4');
//            $table->string('total_a_4_4');
//            $table->string('new_a_4_5');
//            $table->string('reatt_a_4_5');
//            $table->string('total_a_4_5');
//            $table->string('new_a_5_1');
//            $table->string('reatt_a_5_1');
//            $table->string('total_a_5_1');
//            $table->string('new_a_5_2');
//            $table->string('reatt_a_5_2');
//            $table->string('total_a_5_2');
//            $table->string('new_a_5_3');
//            $table->string('reatt_a_5_3');
//            $table->string('total_a_5_3');
//            $table->string('new_a_5_4');
//            $table->string('reatt_a_5_4');
//            $table->string('total_a_5_4');
//            $table->string('new_a_6');
//            $table->string('reatt_a_6');
//            $table->string('total_a_6');
//            $table->string('new_a_7');
//            $table->string('reatt_a_7');
//            $table->string('total_a_7');
//            $table->string('new_a_8');
//            $table->string('reatt_a_8');
//            $table->string('total_a_8');
//            $table->string('new_a_9');
//            $table->string('reatt_a_9');
//            $table->string('total_a_9');
//            $table->string('new_a_10');
//            $table->string('reatt_a_10');
//            $table->string('total_a_10');
//            $table->string('new_a_11');
//            $table->string('reatt_a_11');
//            $table->string('total_a_11');
//            $table->string('new_a_12');
//            $table->string('reatt_a_12');
//            $table->string('total_a_12');
//            $table->string('b_1_1_general');
//            $table->string('b_1_1_paedeatric');
//            $table->string('b_1_1_maternity');
//            $table->string('b_1_1_amenity');
//            $table->string('b_1_1_total');
//            $table->string('b_1_2_general');
//            $table->string('b_1_2_paedeatric');
//            $table->string('b_1_2_maternity');
//            $table->string('b_1_2_amenity');
//            $table->string('b_1_2_total');
//            $table->string('b_1_3_general');
//            $table->string('b_1_3_paedeatric');
//            $table->string('b_1_3_maternity');
//            $table->string('b_1_3_amenity');
//            $table->string('b_1_3_total');
//            $table->string('b_1_4_general');
//            $table->string('b_1_4_paedeatric');
//            $table->string('b_1_4_maternity');
//            $table->string('b_1_4_amenity');
//            $table->string('b_1_4_total');
//            $table->string('b_1_9_general');
//            $table->string('b_1_9_paedeatric');
//            $table->string('b_1_9_maternity');
//            $table->string('b_1_9_amenity');
//            $table->string('b_1_9_total');
//            $table->string('b_1_10_general');
//            $table->string('b_1_10_paedeatric');
//            $table->string('b_1_10_maternity');
//            $table->string('b_1_10_amenity');
//            $table->string('b_1_10_total');
//            $table->string('b_1_11_general');
//            $table->string('b_1_11_paedeatric');
//            $table->string('b_1_11_maternity');
//            $table->string('b_1_11_amenity');
//            $table->string('b_1_11_total');
//            $table->string('b_1_11a_general');
//            $table->string('b_1_11a_paedeatric');
//            $table->string('b_1_11a_maternity');
//            $table->string('b_1_11a_amenity');
//            $table->string('b_1_11a_total');
//            $table->string('b_1_12_general');
//            $table->string('b_1_12_paedeatric');
//            $table->string('b_1_12_maternity');
//            $table->string('b_1_12_amenity');
//            $table->string('b_1_12_total');
//            $table->string('b_1_5_general');
//            $table->string('b_1_5_paedeatric');
//            $table->string('b_1_5_maternity');
//            $table->string('b_1_5_amenity');
//            $table->string('b_1_5_total');
//            $table->string('b_1_6_general');
//            $table->string('b_1_6_paedeatric');
//            $table->string('b_1_6_maternity');
//            $table->string('b_1_6_amenity');
//            $table->string('b_1_6_total');
//            $table->string('b_1_7_general');
//            $table->string('b_1_7_paedeatric');
//            $table->string('b_1_7_maternity');
//            $table->string('b_1_7_amenity');
//            $table->string('b_1_7_total');
//            $table->string('b_1_8_general');
//            $table->string('b_1_8_paedeatric');
//            $table->string('b_1_8_maternity');
//            $table->string('b_1_8_amenity');
//            $table->string('b_1_8_total');
//            $table->string('vaginal');
//            $table->string('caeserian');
//            $table->string('fresh');
//            $table->string('macerate');
//            $table->string('minor');
//            $table->string('circumcision');
//            $table->string('major');
//            $table->string('c_1-routine');
//            $table->string('c_1_special');
//            $table->string('c_1_total');
//            $table->string('plain');
//            $table->string('enhancement');
//            $table->string('ultrasound');
//            $table->string('special');
//            $table->string('total');
//            $table->string('c1__private');
//            $table->string('c1__nonprivate');
//            $table->string('c1__total');
//            $table->string('c2__private');
//            $table->string('c2__nonprivate');
//            $table->string('c2__total');
//            $table->string('c3__private');
//            $table->string('c3__nonprivate');
//            $table->string('c3__total');
//            $table->string('c4__private');
//            $table->string('c4__nonprivate');
//            $table->string('c4__total');
//            $table->string('c5__private');
//            $table->string('c5__nonprivate');
//            $table->string('c5__total');
//            $table->string('common_drugs');
//            $table->string('antibiotics');
//            $table->string('special_drugs');
//            $table->string('for_children');
//            $table->string('body_days');
//            $table->string('embaiment');
//            $table->string('post_morterm');
//            $table->string('unclaimed_body');
//            $table->string('new_file');
//            $table->string('outpatient_record');
//            $table->string('name_preparedby');
//            $table->string('name_checkedby');
//            $table->string('name_enteredby');
//            $table->string('designation_preparedby');
//            $table->string('designation_checkedby');
//            $table->string('designation_enteredby');
//            $table->string('signature_preparedby');
//            $table->string('signature_checkedby');
//            $table->string('signature_enteredby');
//            $table->date('date_preparedby');
//            $table->date('date_checkedby');
//            $table->date('date_enteredby');
//            $table->string('departments');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations_
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clinicalservices_moh717s');
    }
}
