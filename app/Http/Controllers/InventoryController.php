<?php

namespace App\Http\Controllers;

use App\inventory_inventory_adjustments;
use App\inventory_reorderingrules;
use App\inventory_scraporders;
use App\inventory_stockoperations;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class InventoryController extends Controller
{
    //
    public function inventory()
    {
        return view('departments.inventory');
    }
    public function inventoryadjustments()
    {
        $inventoryadjustments_results = DB::table('inventory_inventory_adjustments')  ->latest() ->get();
        return view('departments.inventory.inventory_adjustments',['inventoryadjustments_results'=>$inventoryadjustments_results]);
    }
    public function inventoryadjustments_post()
    {
        $inventoryadjustments_post= new inventory_inventory_adjustments(Input::all());
        $inventoryadjustments_post->save();

        return redirect(route('inventoryadjustments'));
    }
    public function reorderingrules()
    {
        $reorderingrules_results = DB::table('inventory_reorderingrules')  ->latest() ->get();
        return view('departments.inventory.reorderingrules',['reorderingrules_results'=>$reorderingrules_results]);
    }
    public function reorderingrules_post()
    {
        $reorderingrules_post= new inventory_reorderingrules(Input::all());
        $reorderingrules_post->save();

        return redirect(route('reorderingrules'));
    }
    public function scraporders()
    {
        $scraporders_results = DB::table('inventory_scraporders') ->latest() ->get();

        return view('departments.inventory.scraporders',['scraporders_results'=>$scraporders_results]);

    }
    public function scraporders_post()
    {
        $scraporders_post= new inventory_scraporders(Input::all());
        $scraporders_post->save();

        return redirect(route('scraporders'));
    }
    public function stockoperations()
    {
        $stockoperations_results = DB::table('inventory_stockoperations') ->latest() ->get();

        return view('departments.inventory.stockoperations',['stockoperations_results'=>$stockoperations_results]);
    }
    public function stockoperations_post()
    {
        $stockoperations_post= new inventory_stockoperations(Input::all());
        $stockoperations_post->save();

        return redirect(route('stockoperations'));
    }
}

