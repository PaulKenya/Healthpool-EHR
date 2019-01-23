<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ward extends Model
{
    protected $fillable=['ward_number','ward_name', 'total_number', 'institution_id', 'user_id'];

    public function bed(){
        return $this->hasMany(bed::class, 'ward_number');
    }
}
