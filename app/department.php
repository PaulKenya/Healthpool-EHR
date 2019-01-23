<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class department extends Model
{
    protected $fillable=[
        'department_name',
    ];

    public function roles(){
        return $this->hasMany(roles::class);
    }

    public function send_to_dept_links(){
        return $this->hasMany(send_department_link::class);
    }
}
