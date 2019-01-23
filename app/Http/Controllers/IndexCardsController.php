<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexCardsController extends Controller
{
    public function indexcards()
    {
        return view('common_files/indexcards/indexcards');
    }
}
