<?php

namespace App\Http\Controllers;

use App\administration_patient_information;
use App\manage_brand;
use App\manage_categories;
use App\manage_products;
use App\new_order;
use App\stores_control_incoming_products;
use App\stores_control_vendor_bills;
use App\stores_inventory;
use App\stores_purchase_orders_new_deliveries_and_invoices;
use App\stores_purchase_orders_new_products;
use App\stores_purchase_products;
use App\stores_purchase_vendors;
use App\stores_request_for_quotation_new_deliveries_and_invoices;
use App\stores_request_for_quotation_new_products;
use App\stores_requisitions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

Class StoresController extends Controller
{

    public function stores_home()
    {
        return view('departments.stores.home');
    }
    public function orders()
    {
        $manage_brand = DB::table('manage_brands')->get();
        $manage_categories = DB::table('manage_categories')->get();
        return view('departments.stores.newstores.newstores',[
            'manage_brand'=>$manage_brand, 'manage_categories'=>$manage_categories
        ]);
    }
    public function manage_brand_post()
    {
        $manage_brand= new manage_brand(Input::all());
        $manage_brand->save();
        return redirect(route('orders'));
    }
    public function manage_categories_post()
    {
        $manage_categories= new manage_categories(Input::all());
        $manage_categories->save();
        return redirect(route('orders'));
    }
    public function manage_products_post()
    {
        $manage_product= new manage_products(Input::all());
        $manage_product->save();
        return redirect(route('orders'));
    }

    public function new_order($patient_id)
    {
        $manage_product=administration_patient_information::find($patient_id)->new_order;
        $patient=administration_patient_information::find($patient_id);
        $role = Auth()->user()->roles;
        $all_products = DB::table('manage_products')->get();


        if(strcmp($role->role_name,  "Finance")==0) {

            $patient_order = DB::table('new_orders')->where('administration_patient_informations_id',$patient_id)->get()[0];
            $drug_ids = explode(',',$patient_order->name);
            $drug_quantities = explode(',',$patient_order->quantity);

            $drugs = [];
            $all_products = DB::table('manage_products')->get();
            $total_price = 0;

            for($a=0;$a<count($drug_ids);$a++){
                for($i=0;$i<$all_products->count();$i++){
                    if($all_products[$i]->id == $drug_ids[$a]){
                        $total_price += ($all_products[$i]->product_price) * $drug_quantities[$a];
                        array_push($drugs,$all_products[$i]);
                    }
                }
            }

            //dd($drugs);

            return view('departments.stores.newstores.new_order',[
                'manage_product'=>$manage_product,
                'patient_id'=>$patient_id,
                'patient'=>$patient,
                'role'=>$role,
                'all_products'=>$all_products,
                'drugs'=>$drugs,
                'drug_quantities'=>$drug_quantities,
                'total_price'=>$total_price,
            ]);
        }else{
            return view('departments.stores.newstores.new_order',[
                'manage_product'=>$manage_product,
                'patient_id'=>$patient_id,
                'patient'=>$patient,
                'role'=>$role,
                'all_products'=>$all_products,
            ]);
        }
    }
    public function new_order_post($patient_id)
    {

        $role = DB::table('roles')->where('id',Auth()->user()->role)->get()[0];
        if($role->role_name == "Finance"){
            $old_order = new_order::where('administration_patient_informations_id',request()->post('administration_patient_informations_id'))->get()[0];
            $old_order->total = request()->post('total');
            $old_order->gst = request()->post('gst');
            $old_order->net_total = request()->post('net_total');
            $old_order->paid = request()->post('paid');
            $old_order->due = request()->post('due');
            $old_order->payment_type = request()->post('payment_type');
            $old_order->save();
            return redirect(route('stores_invoice',[
                'patient_id' => $patient_id,'new_order_id'=>$old_order->id
            ]));
        }else{
            $new_order= new new_order([
                'administration_patient_informations_id'=>request()->post('administration_patient_informations_id'),
                'institution_id'=>request()->post('institution_id'),
                'user_id'=>request()->post('user_id'),
                'order_date'=>request()->post('order_date'),
                'cust_name'=>request()->post('cust_name'),
                'name'=>implode(',',request()->post('name')),
                'quantity'=>implode(',',request()->post('quantity')),
            ]);
            $new_order->save();
            return redirect(route('new_order',['patient_id'=>$patient_id]));
        }


//        dd(request()->post());

    }

    public function stores_invoice($patient_id,$new_order_id){
        $patient_orders = DB::table('new_orders')->where('id',$new_order_id)->get();
        $patient = DB::table('administration_patient_informations')->where('id',$patient_id)->get();

        $drug_ids = explode(',',$patient_orders[0]->name);
        $drug_quantities = explode(',',$patient_orders[0]->quantity);

        $drugs = [];
        $all_products = DB::table('manage_products')->get();

        for($a=0;$a<count($drug_ids);$a++){
            for($i=0;$i<$all_products->count();$i++){
                if($all_products[$i]->id == $drug_ids[$a]){
                    array_push($drugs,$all_products[$i]);
                }
            }
        }

        return view('departments.stores.newstores.patient_invoice',[
            'patient'=>$patient[0],
            'patient_orders'=>$patient_orders,
            'drugs'=>$drugs,
            'drug_quantities'=>$drug_quantities,
        ]);

    }

    public function manage_brand()
    {
        $manage_brand = DB::table('manage_brands')->get();
        return view('departments.stores.newstores.manage_brand',[
            'manage_brand'=>$manage_brand
        ]);
    }
    public function manage_categories()
    {
    $manage_categories = DB::table('manage_categories')->get();
        return view('departments.stores.newstores.manage_categories',[
            'manage_categories'=>$manage_categories
        ]);
    }
    public function manage_product()
    {
        $manage_product = DB::table('manage_products')->get();
        return view('departments.stores.newstores.manage_product',[
            'manage_product'=>$manage_product
        ]);
    }



    public function stores_purchases()
    {
        return view('departments.stores.purchases.home');
    }

    public function stores_control(){
        return view('departments.stores.purchases.control.home');
    }

    public function stores_purchase(){
        return view('departments.stores.purchases.purchase.home');
    }

    public function stores_reporting(){
        return view('departments.stores.purchases.reporting.home');
    }
    public function stores_control_incoming_products()
    {
        $incoming_results = DB::table('stores_control_incoming_products')->get();
        return view('departments.stores.purchases.control.incoming_products',[
            'incoming_results'=>$incoming_results
        ]);
    }
    public function stores_control_vendor_bills()
    {
        $vendor_results = DB::table('stores_control_vendor_bills')->get();
        return view('departments.stores.purchases.control.vendor_bills',[
            'vendor_results'=>$vendor_results
        ]);
    }



    public function stores_request_for_quotation(){
        return view('departments.stores.purchases.purchase.request_for_quotation.home');
    }

    public function stores_rfq_new_products(){
        $np_results = DB::table('stores_request_for_quotation_new_products')->get();
        return view('departments.stores.purchases.purchase.request_for_quotation.new_products',[
            'np_results'=>$np_results,
        ]);
    }

    public function stores_rfq_new_deliveries_and_invoices(){
        $ndi_results = DB::table('stores_request_for_quotation_new_deliveries_and_invoices')->get();
        return view('departments.stores.purchases.purchase.request_for_quotation.new_deliveries_and_invoices',[
            'ndi_results'=>$ndi_results,
        ]);
    }

    public function stores_purchases_purchase_orders(){
        return view('departments.stores.purchases.purchase.purchase_orders.home');
    }
    public function stores_po_new_products()
    {
        $products_results = DB::table('stores_purchase_orders_new_products')->get();
        return view('departments.stores.purchases.purchase.purchase_orders.new_products',[
            'products_results'=>$products_results
        ]);
    }
    public function stores_po_new_deliveries_and_invoices()
    {
        $deliveries_results = DB::table('stores_purchase_orders_new_deliveries_and_invoices')->get();
        return view('departments.stores.purchases.purchase.purchase_orders.new_deliveries_and_invoices',[
            'deliveries_results'=>$deliveries_results
        ]);
    }


    public function stores_purchase_vendors(){
        $spv_results = DB::table('stores_purchase_vendors')->get();
        return view('departments.stores.purchases.purchase.vendors',[
            'spv_results'=>$spv_results,
        ]);
    }

    public function stores_purchase_products(){
        $spp_results = DB::table('stores_purchase_products')->get();
        return view('departments.stores.purchases.purchase.products',[
            'spp_results'=>$spp_results,
        ]);
    }



    public function inventory()
    {
        $inventory_results = DB::table('stores_inventories')->get();
        return view('departments.stores.inventory',[
            'inventory_results'=>$inventory_results
        ]);
    }


    public function requests()
    {
        $requests_results = DB::table('stores_requests')->get();
        return view('departments.stores.requests',['requests_results' => $requests_results]);
    }


    public function suppliers()
    {
        $suppliers_results = DB::table('stores_suppliers')->get();
        return view('departments.stores.suppliers',['suppliers_results' => $suppliers_results]);
    }
    public function requisitions()
    {

        $requisitions_results = DB::table('stores_requisitions')->get();
        return view('departments.stores.requisitions',['requisitions_results'=>$requisitions_results]);
    }
    public function inventory_post()
    {
        $inventory = new stores_inventory(Input::all());
        $inventory->save();
        return redirect(route('inventory'));
    }
    public function requisitions_post()
    {
        $inventory = new stores_requisitions(Input::all());
        $inventory->save();
        return redirect(route('requisitions'));
    }

    public function stores_control_incoming_products_post()
    {
        $products = new stores_control_incoming_products(Input::all());
        $products->save();
        return redirect(route('stores_control_incoming_products'));
    }

    public function stores_po_new_products_post()
    {
        $newproducts = new stores_purchase_orders_new_products(Input::all());
        $newproducts->save();
        return redirect(route('stores_po_new_products'));
    }
    public function stores_po_new_deliveries_and_invoices_post()
    {
        $newdeliveries = new stores_purchase_orders_new_deliveries_and_invoices(Input::all());
        $newdeliveries->save();
        return redirect(route('stores_po_new_deliveries_and_invoices'));
    }
    public function stores_control_vendor_bills_post()
    {
        $vendorbill = new stores_control_vendor_bills(Input::all());
        $vendorbill->save();
        return redirect(route('stores_control_vendor_bills'));
    }

    public function stores_rfq_new_deliveries_and_invoices_post(){
        $rfq_new_deliveries = new stores_request_for_quotation_new_deliveries_and_invoices(Input::all());
        $rfq_new_deliveries->save();
        return redirect(route('stores_rfq_new_deliveries_and_invoices'));
    }

    public function stores_rfq_new_products_post(){
        $rfq_new_products = new stores_request_for_quotation_new_products(Input::all());
        $rfq_new_products->save();
        return redirect(route('stores_rfq_new_products'));
    }

    public function stores_purchase_products_post(){
        $stores_purchase_products = new stores_purchase_products(Input::all());
        $stores_purchase_products->save();
        return redirect(route('stores_purchase_products'));
    }

    public function stores_purchase_vendors_post(){
        $stores_purchase_vendors = new stores_purchase_vendors(Input::all());
        $stores_purchase_vendors->save();
        return redirect(route('stores_purchase_vendors'));
    }

}