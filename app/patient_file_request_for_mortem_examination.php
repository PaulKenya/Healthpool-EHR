<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class patient_file_request_for_mortem_examination extends Model
{
    protected $fillable=['name','relationship','signature','witness','date'];
}
