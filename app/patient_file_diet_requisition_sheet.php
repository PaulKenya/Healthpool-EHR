<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class patient_file_diet_requisition_sheet extends Model
{
    protected $fillable=['ward','date','On_call','children','adults','well_people','patients_on_ngt','regular_diet','low_salt_diet','diabetic_diet','low_fat_diet','renal_diet','soft_light_diet','high_protein_diet','toto_diet','cocoa_with_sugar','porridge_with_sugar','white_bread','specify_any_other','MilkpacketsFresh','mala','f_seventy_five','f_one_hundred','special_uji','special_soup','enriched_lactose_free_uji','uji_without_sugar','tea_without_sugar','brown_bread','fruits','Eggs_Boiled','remarks','ordered_by','designation','signature','date1'];
}
