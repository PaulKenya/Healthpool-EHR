<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Institution extends Model
{
    protected $fillable = [
        'name', 'email','registration_number','avatar','cover', 'telephone','account_active','telephone','type','keph_level','facility_type','owner','regulatory_body','bed_capacity','branches','working_days','brief_description_of_services','insurance','company_name','legal_name','cots','tax_id','street_address','city','county','address','sub_county','ward'
    ];

    public function user(){
        return $this->hasMany(User::class);
    }
}
