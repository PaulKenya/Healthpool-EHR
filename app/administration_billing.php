<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class administration_billing extends Model
{
    protected $fillable= ['administration_billings','name_of_person_responsible_for_bill','address','phone_number','occupational','employer','employers_address','employers_phone_no','contributers_relationship_to_patient','primary_insurance','deposit_paid','payment_method','receipt_number','previous_account_balance','customer_type','patient_guardian_signature','date','administration_patient_informations_id', 'institution_id', 'user_id'];
    public function patient(){
        return $this->belongsTo(administration_patient_information::class);
    }
}
