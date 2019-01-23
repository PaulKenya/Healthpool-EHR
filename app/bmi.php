<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bmi extends Model
{
    protected $fillable= ['height','weight','bmi','comment'];
}
