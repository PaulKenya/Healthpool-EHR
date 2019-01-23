<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class diagnostic_services_general_lab_request_form extends Model
{
    protected $fillable=['to_be_sent_to','tel_no','nhif_no','invoice_no','receipt_no','specimen_type','requesting_clinician_name','sign','time','tel','priority','clinician_information','microbiology','endocrinology','tb_investigation','virology','hepatitis_serology','other_serology','ubc','liver_function_tests','fasting_lipid_profile','amylase','lipase','total_billirubin','direct_billirubin','bone_chemistry','creatinine_kinase','uric_acid','ck_mb','hba1c','fbs','rbs','lactate','ldh','fluid_chemistry','csf_chemistry','d_dimers','crp','csf_microprotein','csf_sugar','urine_microalbumin','blood_gas_analysis','neonatal_billirubin','pev_hb','procalcitonin','cyclosporine','tacrolimus','thyroid_function_test','tsh','b_hcg','fsh','lh','oestradiol','progesterone','prolactin','testosterone','afp','pth','cortisol_am','cortisol_pm','cea','ca_125','ca_15_3','ca_19_9','tpsa','fpsa','ferritin','vit_b_12','folates','troponin_i','troponin_t','troponin_hs','growth_hormone','vitamin_d','dhea_s','myoglobin','routine_mc_s','csf_cell_count_mc_s','blood_culture','fungal_m_c','urine_routine','urine_mc_s','stool_mc_s','microscopy','culture','sensitivity','hiv_serology','hiv_viral_load','pcr_hiv','a','b','c','cmv','ebv','hsv','vzv','rubelia','measles','mumps','vdrl','cd4','crp2','anf','asot','toxoplasma','rf','syphillis_serology','stool','blood_slide','pdt','urinalysis','fbc_esr','fbf','reticulocyte_count','factor_assays','bleeding_time_test','platelet_aggregation','lupus_anticoagulant','d_dimer','inr','aptt','fibrinogen','thrombin_time','hb_electrophoresis','bma_cytology','inhibitor_scree','l_e_cells','kct','fna_csf_cytology','other_tests_remarks','administration_patient_informations_id', 'institution_id', 'user_id'];

public function patient()
    {
        return $this->belongsTo(administration_patient_information::class);
    }

}
