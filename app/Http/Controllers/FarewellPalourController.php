<?php

namespace App\Http\Controllers;

use App\moh387;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class FarewellPalourController extends Controller
{
    //
    public function farewellpalour(){
        return view('departments.farewell_palour.farewell_palour');
    }
    public function moh387(){
        $moh387_results =DB::table('moh387s') ->latest() ->get();
        return view('departments.farewell_palour.moh387',['moh387_results'=>$moh387_results]);

    }
    public function moh387_post(){
        $moh387 = new moh387(Input::all());
        $moh387->save();
        return redirect(route('moh387'));
    }
}
