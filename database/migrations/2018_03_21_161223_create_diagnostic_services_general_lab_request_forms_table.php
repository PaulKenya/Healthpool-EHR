<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiagnosticServicesGeneralLabRequestFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diagnostic_services_general_lab_request_forms', function (Blueprint $table) {
            $table->increments('id');

            $table->text('to_be_sent_to')->nullable();
            $table->integer('tel_no')->nullable();
            $table->integer('nhif_no')->nullable();
            $table->integer('invoice_no')->nullable();
            $table->integer('receipt_no')->nullable();
            $table->text('specimen_type')->nullable();
            $table->text('requesting_clinician_name')->nullable();
            $table->text('sign')->nullable();
            $table->time('time')->nullable();
            $table->integer('tel')->nullable();
            $table->text('priority')->nullable();
            $table->text('clinician_information')->nullable();
            $table->text('ubc')->nullable();
            $table->text('liver_function_tests')->nullable();
            $table->text('fasting_lipid_profile')->nullable();
            $table->text('amylase')->nullable();
            $table->text('lipase')->nullable();
            $table->text('total_billirubin')->nullable();
            $table->text('direct_billirubin')->nullable();
            $table->text('bone_chemistry')->nullable();
            $table->text('creatinine_kinase')->nullable();
            $table->text('uric_acid')->nullable();
            $table->text('ck_mb')->nullable();
            $table->text('hba1c')->nullable();
            $table->text('fbs')->nullable();
            $table->text('rbs')->nullable();
            $table->text('lactate')->nullable();
            $table->text('ldh')->nullable();
            $table->text('fluid_chemistry')->nullable();
            $table->text('csf_chemistry')->nullable();
            $table->text('d_dimers')->nullable();
            $table->text('crp')->nullable();
            $table->text('csf_microprotein')->nullable();
            $table->text('csf_sugar')->nullable();
            $table->text('urine_microalbumin')->nullable();
            $table->text('blood_gas_analysis')->nullable();
            $table->text('neonatal_billirubin')->nullable();
            $table->text('pev_hb')->nullable();
            $table->text('procalcitonin')->nullable();
            $table->text('cyclosporine')->nullable();
            $table->text('tacrolimus')->nullable();
            $table->text('thyroid_function_test')->nullable();
            $table->text('tsh')->nullable();
            $table->text('b_hcg')->nullable();
            $table->text('fsh')->nullable();
            $table->text('lh')->nullable();
            $table->text('oestradiol')->nullable();
            $table->text('progesterone')->nullable();
            $table->text('prolactin')->nullable();
            $table->text('testosterone')->nullable();
            $table->text('afp')->nullable();
            $table->text('pth')->nullable();
            $table->text('cortisol_am')->nullable();
            $table->text('cortisol_pm')->nullable();
            $table->text('cea')->nullable();
            $table->text('ca_125')->nullable();
            $table->text('ca_15_3')->nullable();
            $table->text('ca_19_9')->nullable();
            $table->text('tpsa')->nullable();
            $table->text('fpsa')->nullable();
            $table->text('ferritin')->nullable();
            $table->text('vit_b_12')->nullable();
            $table->text('folates')->nullable();
            $table->text('troponin_i')->nullable();
            $table->text('troponin_t')->nullable();
            $table->text('troponin_hs')->nullable();
            $table->text('growth_hormone')->nullable();
            $table->text('vitamin_d')->nullable();
            $table->text('dhea_s')->nullable();
            $table->text('myoglobin')->nullable();
            $table->text('routine_mc_s')->nullable();
            $table->text('csf_cell_count_mc_s')->nullable();
            $table->text('blood_culture')->nullable();
            $table->text('fungal_m_c')->nullable();
            $table->text('urine_routine')->nullable();
            $table->text('urine_mc_s')->nullable();
            $table->text('stool_mc_s')->nullable();
            $table->text('microscopy')->nullable();
            $table->text('culture')->nullable();
            $table->text('sensitivity')->nullable();
            $table->text('hiv_serology')->nullable();
            $table->text('hiv_viral_load')->nullable();
            $table->text('pcr_hiv')->nullable();
            $table->text('a')->nullable();
            $table->text('b')->nullable();
            $table->text('c')->nullable();
            $table->text('cmv')->nullable();
            $table->text('ebv')->nullable();
            $table->text('hsv')->nullable();
            $table->text('vzv')->nullable();
            $table->text('rubelia')->nullable();
            $table->text('measles')->nullable();
            $table->text('mumps')->nullable();
            $table->text('vdrl')->nullable();
            $table->text('cd4')->nullable();
            $table->text('crp2')->nullable();
            $table->text('anf')->nullable();
            $table->text('asot')->nullable();
            $table->text('toxoplasma')->nullable();
            $table->text('rf')->nullable();
            $table->text('syphillis_serology')->nullable();
            $table->text('stool')->nullable();
            $table->text('blood_slide')->nullable();
            $table->text('pdt')->nullable();
            $table->text('urinalysis')->nullable();
            $table->text('fbc_esr')->nullable();
            $table->text('fbf')->nullable();
            $table->text('reticulocyte_count')->nullable();
            $table->text('factor_assays')->nullable();
            $table->text('bleeding_time_test')->nullable();
            $table->text('platelet_aggregation')->nullable();
            $table->text('lupus_anticoagulant')->nullable();
            $table->text('d_dimer')->nullable();
            $table->text('inr')->nullable();
            $table->text('aptt')->nullable();
            $table->text('fibrinogen')->nullable();
            $table->text('thrombin_time')->nullable();
            $table->text('hb_electrophoresis')->nullable();
            $table->text('bma_cytology')->nullable();
            $table->text('inhibitor_scree')->nullable();
            $table->text('l_e_cells')->nullable();
            $table->text('kct')->nullable();
            $table->text('fna_csf_cytology')->nullable();
            $table->text('other_tests_remarks')->nullable();

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
        Schema::dropIfExists('diagnostic_services_general_lab_request_forms');
    }
}
