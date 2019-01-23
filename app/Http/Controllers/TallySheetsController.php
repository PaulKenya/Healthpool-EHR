<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TallySheetsController extends Controller
{
    public function tallysheets()
    {
        return view('common_files/tallysheets/tallysheets');
    }
}
