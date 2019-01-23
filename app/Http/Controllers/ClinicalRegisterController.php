<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClinicalRegisterController extends Controller
{

    public function registers()
    {
        return view('common_files/clinicalregisters/registers');
    }

}
