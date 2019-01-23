<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SummaryFormsController extends Controller
{
    public function summaryforms()
    {
        return view('common_files/summaryforms/summaryforms');
    }
}
