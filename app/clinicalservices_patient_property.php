<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clinicalservices_patient_property extends Model
{
    protected $fillable=[

'bio_bed_number',
'jewellery',
'weapon_declaration',
'necklace',
'model_type',
'ring',
'clothing',
'watch',
'belt',
'type_and_make',
'blouse_skirt',
'cash',
'coat_jacket',
'shillings_kenya',
'dress_skirt',
'foreign_currency',
'dressing_gown',
'travellers_cheque',
'underwear',
'personal_documents',
'socks',
'id_card',
'shoes',
'passport',
'shirt_others',
'credit_cards',
'personal_items',
'license',
'glasses_contact',
'medical_insurance',
'hearing_aid',
'left_right',
'model',
'assistive_devices',
'phone_number',
'prothesis',
'vehicle_deposit',
'others',
'reg_no',
'denture',
'model2',
'partials',
'color',
'uper_lower',
'electronics',
'miscellaneous',
'radio',
'laptop',
'walkman',
'calculator',
'camera_video',
'names',
'signature_a',
'date_b',
'valuables_to_safe',
'taken_by_name',
'signature',
'cut_served',
'soilage',
'taken_by_security_police',
'signatures',
'date_c',
'valuables_to_safe2',
'inventory_recorded_by',
'date_d',
'signature3',
'name_of_patient',
'ward',
'signature4',
'date_e','administration_patient_informations_id', 'institution_id', 'user_id'


    ];
    public function patient(){
        return $this->belongsTo(administration_patient_information::class);
    }

}
