<?php

namespace App\Http\Controllers;

use App\administration_patient_information;
use App\pharmacy_billed_list;
use App\pharmacy_control_incoming_products;
use App\pharmacy_control_vendor_bills;
use App\pharmacy_dispensed_list;
use App\pharmacy_inventory_inventory_adjustments;
use App\pharmacy_inventory_reorderingrules;
use App\pharmacy_inventory_scraporders;
use App\pharmacy_inventory_stockoperations;
use App\pharmacy_purchase_orders_new_deliveries_and_invoices;
use App\pharmacy_purchase_orders_new_products;
use App\pharmacy_purchase_products;
use App\pharmacy_purchase_vendors;
use App\pharmacy_request_for_quotation_new_deliveries_and_invoices;
use App\pharmacy_request_for_quotation_new_products;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class PharmaceuticalServicesController extends Controller
{

    public function pharmacy_home()
    {
        return view('departments.pharmaceutical_services.home');
    }

    public function pharmacy_purchases()
    {
        return view('departments.pharmaceutical_services.purchases.home');
    }
    public function pharmacy_billed_list($patient_id)

    {    $pharmacy_billed_list_resultss = DB::table('pharmacy_billed_lists')->get();
        $manage_product = DB::table('manage_products')->get();
        $pharmacy_billed_list_results=administration_patient_information::find($patient_id)->pharmacy_billed_list;
        $patient=administration_patient_information::find($patient_id);
        return view('departments.pharmaceutical_services.pharmacy_billed_list',[
            'pharmacy_billed_list_results'=>$pharmacy_billed_list_results,'patient_id'=>$patient_id, 'patient'=>$patient,'manage_product'=>$manage_product,'pharmacy_billed_list_resultss'=>$pharmacy_billed_list_resultss
        ]);
    }
    public function pharmacy_paid_list($patient_id)
    {
        $patient_order = DB::table('new_orders')->get();
        $pharmacy_paid_list_results=administration_patient_information::find($patient_id)->pharmacy_paid_list;
        $patient=administration_patient_information::find($patient_id);
        return view('departments.pharmaceutical_services.pharmacy_paid_list',[
            'pharmacy_paid_list_results'=>$pharmacy_paid_list_results,'patient_id'=>$patient_id, 'patient'=>$patient,'patient_order'=>$patient_order
        ]);
    }
    public function pharmacy_dispensed_list($patient_id)
    {
        $patient_order = DB::table('new_orders')->get();
        $pharmacy_dispensed_list_results=administration_patient_information::find($patient_id)->pharmacy_dispensed_list;
        $patient=administration_patient_information::find($patient_id);
        return view('departments.pharmaceutical_services.pharmacy_dispensed_list',[
            'pharmacy_dispensed_list_results'=>$pharmacy_dispensed_list_results,'patient_id'=>$patient_id, 'patient'=>$patient,'patient_order'=>$patient_order
        ]);
    }


    public function pharmacy_billed_list_post($patient_id)
    {
        $billed_list = new pharmacy_billed_list(Input::all());
        $billed_list->save();
        return redirect(route('pharmacy_billed_list',['patient_id' => $patient_id] ));
    }
    public function pharmacy_dispensed_post($patient_id)
    {
        $billed_list = new pharmacy_dispensed_list(Input::all());
        $billed_list->save();
        return redirect(route('pharmacy_dispensed_list',['patient_id' => $patient_id] ));
    }

    public function pharmacy_control()
    {
        return view('departments.pharmaceutical_services.purchases.control.home');
    }

    public function pharmacy_purchase()
    {
        return view('departments.pharmaceutical_services.purchases.purchase.home');
    }

    public function pharmacy_reporting()
    {
        return view('departments.pharmaceutical_services.purchases.reporting.home');
    }
    public function pharmacy_withdrawal_form()
    {
        $pharmacy_withdrawal_form_results = DB::table('pharmacy_pharmacy_withdrawal')->get();
        return view('departments.pharmaceutical_services',['pharmacy_withdrawal_form_results'=>$pharmacy_withdrawal_form_results,
        ]);
    }
    public function pharmacy_control_incoming_products()
    {
        $incoming_results = DB::table('pharmacy_control_incoming_products')->get();
        return view('departments.pharmaceutical_services.purchases.control.incoming_products',[
            'incoming_results'=>$incoming_results
        ]);
    }
    public function pharmacy_control_vendor_bills()
    {
        $vendor_results = DB::table('pharmacy_control_vendor_bills')->get();
        return view('departments.pharmaceutical_services.purchases.control.vendor_bills',[
            'vendor_results'=>$vendor_results
        ]);
    }



    public function pharmacy_request_for_quotation()
    {
        return view('departments.pharmaceutical_services.purchases.purchase.request_for_quotation.home');
    }

    public function pharmacy_rfq_new_products()
    {
        $np_results = DB::table('pharmacy_request_for_quotation_new_products')->get();
        return view('departments.pharmaceutical_services.purchases.purchase.request_for_quotation.new_products',[
            'np_results'=>$np_results,
        ]);
    }

    public function pharmacy_rfq_new_deliveries_and_invoices()
    {
        $ndi_results = DB::table('pharmacy_request_for_quotation_new_deliveries_and_invoices')->get();
        return view('departments.pharmaceutical_services.purchases.purchase.request_for_quotation.new_deliveries_and_invoices',[
            'ndi_results'=>$ndi_results,
        ]);
    }

    public function pharmacy_purchases_purchase_orders()
    {
        return view('departments.pharmaceutical_services.purchases.purchase.purchase_orders.home');
    }
    public function pharmacy_po_new_products()
    {
        $products_results = DB::table('pharmacy_purchase_orders_new_products')->get();
        return view('departments.pharmaceutical_services.purchases.purchase.purchase_orders.new_products',[
            'products_results'=>$products_results
        ]);
    }
    public function pharmacy_po_new_deliveries_and_invoices()
    {
        $deliveries_results = DB::table('pharmacy_purchase_orders_new_deliveries_and_invoices')->get();
        return view('departments.pharmaceutical_services.purchases.purchase.purchase_orders.new_deliveries_and_invoices',[
            'deliveries_results'=>$deliveries_results
        ]);
    }
    public function pharmacy_purchase_vendors()
    {
        $spv_results = DB::table('pharmacy_purchase_vendors')->get();
        return view('departments.pharmaceutical_services.purchases.purchase.vendors',[
            'spv_results'=>$spv_results,
        ]);
    }

    public function pharmacy_purchase_products()
    {
        $spp_results = DB::table('pharmacy_purchase_products')->get();
        return view('departments.pharmaceutical_services.purchases.purchase.products',[
            'spp_results'=>$spp_results,
        ]);
    }

    public function pharmacy_control_incoming_products_post()
    {
        $products = new pharmacy_control_incoming_products(Input::all());
        $products->save();
        return redirect(route('pharmacy_control_incoming_products'));
    }

    public function pharmacy_po_new_products_post()
    {
        $newproducts = new pharmacy_purchase_orders_new_products(Input::all());
        $newproducts->save();
        return redirect(route('pharmacy_po_new_products'));
    }
    public function pharmacy_po_new_deliveries_and_invoices_post()
    {
        $newdeliveries = new pharmacy_purchase_orders_new_deliveries_and_invoices(Input::all());
        $newdeliveries->save();
        return redirect(route('pharmacy_po_new_deliveries_and_invoices'));
    }
    public function pharmacy_control_vendor_bills_post()
    {
        $vendorbill = new pharmacy_control_vendor_bills(Input::all());
        $vendorbill->save();
        return redirect(route('pharmacy_control_vendor_bills'));
    }

    public function pharmacy_rfq_new_deliveries_and_invoices_post()
    {
        $rfq_new_deliveries = new pharmacy_request_for_quotation_new_deliveries_and_invoices(Input::all());
        $rfq_new_deliveries->save();
        return redirect(route('pharmacy_rfq_new_deliveries_and_invoices'));
    }

    public function pharmacy_rfq_new_products_post()
    {
        $rfq_new_products = new pharmacy_request_for_quotation_new_products(Input::all());
        $rfq_new_products->save();
        return redirect(route('pharmacy_rfq_new_products'));
    }

    public function pharmacy_purchase_products_post()
    {
        $pharmacy_purchase_products = new pharmacy_purchase_products(Input::all());
        $pharmacy_purchase_products->save();
        return redirect(route('pharmacy_purchase_products'));
    }

    public function pharmacy_purchase_vendors_post()
    {
        $pharmacy_purchase_vendors = new pharmacy_purchase_vendors(Input::all());
        $pharmacy_purchase_vendors->save();
        return redirect(route('pharmacy_purchase_vendors'));
    }


    /*----------Inventory----------*/
    //
    public function inventory_home()
    {
        return view('departments.pharmaceutical_services.inventory.home');
    }
    public function inventoryadjustments()
    {
        $inventoryadjustments_results = DB::table('pharmacy_inventory_inventory_adjustments')  ->latest() ->get();
        return view('departments.pharmaceutical_services.inventory.inventory_adjustments',['inventoryadjustments_results'=>$inventoryadjustments_results]);
    }
    public function inventoryadjustments_post()
    {
        $inventoryadjustments_post= new pharmacy_inventory_inventory_adjustments(Input::all());
        $inventoryadjustments_post->save();

        return redirect(route('pharmacy_inventoryadjustments'));
    }
    public function reorderingrules()
    {
        $reorderingrules_results = DB::table('pharmacy_inventory_reorderingrules')  ->latest() ->get();
        return view('departments.pharmaceutical_services.inventory.reorderingrules',['reorderingrules_results'=>$reorderingrules_results]);
    }
    public function reorderingrules_post()
    {
        $reorderingrules_post= new pharmacy_inventory_reorderingrules(Input::all());
        $reorderingrules_post->save();

        return redirect(route('pharmacy_reorderingrules'));
    }
    public function scraporders()
    {
        $scraporders_results = DB::table('pharmacy_inventory_scraporders') ->latest() ->get();

        return view('departments.pharmaceutical_services.inventory.scraporders',['scraporders_results'=>$scraporders_results]);

    }
    public function scraporders_post()
    {
        $scraporders_post= new pharmacy_inventory_scraporders(Input::all());
        $scraporders_post->save();

        return redirect(route('pharmacy_scraporders'));
    }
    public function stockoperations()
    {
        $stockoperations_results = DB::table('pharmacy_inventory_stockoperations') ->latest() ->get();

        return view('departments.pharmaceutical_services.inventory.stockoperations',['stockoperations_results'=>$stockoperations_results]);
    }
    public function stockoperations_post()
    {
        $stockoperations_post= new pharmacy_inventory_stockoperations(Input::all());
        $stockoperations_post->save();

        return redirect(route('pharmacy_stockoperations'));
    }

}