<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CancerManagement extends Model
{
    protected $fillable = [
        'health_facility_name',
        'sub_county',
        'county',
        'year',
        'month',
        'registry_number',
        'surname',
        'middle_name',
        'last_name',

        'identification_number',
        'marital_status',
        'telephone_number_patient',
        'telephone_number_next_of_kin',
        'age',
        'date_of_birth',
        'sex',
        'county_residence',
        'division_residence',

        'location_residence',
        'place_of_birth',
        'tribe',
        'religion',
        'education_level',
        'occupation',
        'smoking_status',
        'drinking_status',
        'incidence_date',

        'basis_of_diagnosis',
        'primary_site',
        'code_no',
        'laterality_unilat',
        'laterality_bil',
        'laterality_rt',
        'laterality_lt',
        'laterality_unk',
        'histology',

        'morphology_code',
        'behaviour',
        'grade',
        'stage',
        't',
        'n',
        'm',
        'surgery_first_course_of_treatment',
        'surgery_date',

        'radiotherapy_first_course_of_treatment',
        'radiotherapy_date',
        'chemotherapy_first_course_of_treatment',
        'chemotherapy_date',
        'hormone_therapy_first_course_of_treatment',
        'hormone_therapy_date',
        'immuno_first_course_of_treatment',
        'immuno_date',
        'other_fct',

        'other_fct_date',
        'lrap_file',
        'lab_no',
        'cd4_count',
        'sicn_file',
        'specifically',
        'other_concurrent_illness',
        'source_1_hospital',
        'hospital_number',

        'src_date_1',
        'source_2_lab',
        'lab_number',
        'src_date_2',
        'referred_from',
        'rf_ip_number',
        'referred_to',
        'rt_ip_number',
        'present_status',

        'hospice_number',
        'dlc_dod',
        'cause_of_death',
        'remarks',
        'form_filled_by',
        'form_fill_date',
        'checked_by',
        'data_entered_by',
        'data_entered_by_date',

    ];
}
