<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class roles extends Model
{
    protected $fillable =['role_name', 'role_description', 'department_id'];


    public function user()
    {
        return $this->hasMany(User::class);
    }


    public function departments(){
        return $this->belongsTo(department::class,'department_id');
    }


}
