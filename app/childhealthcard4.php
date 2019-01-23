<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class childhealthcard4 extends Model
{
    protected $fillable= ['mother','antibody','pcr','mother1','antibody1','pcr1','mother2','antibody2','pcr2','6wk_date_given','6wk_quantity_dispensed','6wk_date_appointment','6wk_comments','10wk_date_given','10wk_quantity_dispensed','10wk_date_appointment','10wk_comments','14date_given','14quantity_dispensed','14date_appointment','14comments','4date_given','4quantity_dispensed','4date_appointment','4comments','5date_given','5quantity_dispensed','5date_appointment','5comments','6date_given','6quantity_dispensed','6date_appointment','6comments','7date_given','7quantity_dispensed','7date_appointment','7comments','8date_given','8quantity_dispensed','8date_appointment','8comments','9date_given','9quantity_dispensed','9date_appointment','9comments','10date_given','10quantity_dispensed','10date_appointment','10comments','11date_given','11quantity_dispensed','11date_appointment','11comments','12date_given','12quantity_dispensed','12date_appointment','12comments','18date_given','18quantity_dispensed','18date_appointment','18comments','6wks_date_givendate','6wks_date_givenhb','6wks_date_givendbs_pcr','6wks_date_givenantibody_test','6wks_date_givencd4count<20','6wks_date_givencd4count>20','6wks_date_givenlymphocyte_count<3500','6wks_date_givenlymphocyte_count>3500'
,'6_date','6_hb','6_dbs_pcr','6_antibody_test','6_cd4count<20','6_cd4count>20','6_lymphocyte_count<3500','6_lymphocyte_count>3500','12_date','12_hb','12_dbs_pcr','12_antibody_test','12_cd4count<20','12_cd4count>20','12_lymphocyte_count<3500','12_lymphocyte_count>3500','18_date','18_hb','18_dbs_pcr','18_antibody_test','18_cd4count<20','18_cd4count>20','18_lymphocyte_count<3500','18_lymphocyte_count>3500','administration_patient_informations_id', 'institution_id', 'user_id'];
    public function patient(){
        return $this->belongsTo(administration_patient_information::class);
    }
}
