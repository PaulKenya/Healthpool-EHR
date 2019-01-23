<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pharmaceutical_pharmacy extends Model
{
    protected $fillable =['id','age','ward','doa','dod','unit_no','date','item_description','total_returned','unit_price','total_cost','ward_withdrawal','sign_title_ward','pharmacy_officers_name','designation','designation_sign','ward_department','ward_name','ward_sign'];
}
