<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class recruitments_form extends Model
{
    protected $fillable =['subject','applicants_name','tags','contact','responsible','email','appreciation','phone','source','mobile','referred','degree','applied_job','department','expected_salary','proposed_salary','availability','application_summary'];

}
