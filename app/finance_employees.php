<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class finance_employees extends Model
{
    protected $fillable=['title',
        'first_name',
        'middle_name',
        'last_name',
        'display_name',
        'address',
        'email',
        'phone_no',
        'salary',
        'employee_id_no',
        'national_id_no',
        'gender',
        'hire_date',
        'released',
        'date_of_birth'];  //
}
