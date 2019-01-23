<?php

namespace App\Http\Controllers;

use App\department;
use App\finance_accounting_add_accounts;
use App\finance_add_customer;
use App\finance_add_expense;
use App\finance_add_product_or_service;
use App\finance_add_supplier;
use App\finance_add_tax;
use App\finance_bank_and_credit_cards;
use App\finance_banking;
use App\finance_banking_bank_rules;
use App\finance_billing;
use App\finance_create_invoice;
use App\finance_insurance;
use App\finance_invoice;
use App\finance_sales;
use App\send_department_link;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class FinanceController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('departments.finance.home');
    }

    public function accounting()
    {
        return view('departments.finance.accounting.home');
    }

    public function invoice_id($patient_id)
    {
        return view('departments.finance.invoice_document',['patient_id'=>$patient_id]);
    }
    public function patient_payment()
    {
        return view('departments.finance.patient_payment');
    }
    public function process_payment($id)
    {
        $gift = send_department_link::find($id);
        $gift->is_paid=1;
        $to_department_id=$gift->department_id;
        $to_department=department::find($to_department_id);
        $gift->save();
        session()->flash('message','Patient sent to '.$to_department->department_name.' Department.');
        return redirect(route('patient_payment'));
    }

    public function banking()
    {
        return view('departments.finance.banking.home');
    }

    public function billing()
    {
        $billing_results = DB::table('finance_billings')->get();
        return view('departments.finance.billing',['billing_results' => $billing_results]);
    }

    public function budgets()
    {
        return view('departments.finance.budgets');
    }

    public function employees()
    {
        return view('departments.finance.employees');
    }

    public function expenses()
    {
        return view('departments.finance.expenses.home');
    }

    public function insurance()
    {

        $insurance_results = DB::table('finance_insurances')->get();

        return view('departments.finance.insurance',[
            'insurance_results'=>$insurance_results
        ]);
    }

    public function invoice()
    {
        $invoice = DB::table('finance_invoices')->get();
        return view('departments.finance.invoice',[
            'invoice'=>$invoice
        ]);
    }

    public function sales()
    {
        return view('departments.finance.sales.home');
    }
    public function bankandcreditcards()
    {
        $creditcards_results = DB::table('finance_bank_and_credit_cards')->get();
        return view('departments.finance.banking.bank_and_credit_cards',[
            'creditcards_results'=>$creditcards_results
        ]);
    }

    public function bankrules()
    {
        $bankrule_results = DB::table('finance_banking_bank_rules')->get();
        return view('departments.finance.banking.bank_rules',[
            'bankrule_results'=>$bankrule_results
        ]);
    }


    public function taxes(){
        return view('departments.finance.taxes.home');
    }
    public function add_account()
    {
        $accounts_results = DB::table('finance_accounting_add_accounts')->get();
        return view('departments.finance.accounting.add_account',[
            'accounts_results'=>$accounts_results
        ]);
    }


    public function sales_add_customer(){
        $customer_results = DB::table('finance_add_customers')->get();
        return view('departments.finance.sales.add_customer',[
            'customer_results'=>$customer_results,
        ]);
    }

    public function sales_add_product_service(){
        $ps_results = DB::table('finance_add_product_or_services')->get();
        return view('departments.finance.sales.add_product_or_service',[
            'ps_results'=>$ps_results,
        ]);
    }

    public function sales_invoice(){
        $si_results = DB::table('finance_create_invoices')->get();
        return view('departments.finance.sales.create_invoice',[
            'si_results'=>$si_results,
        ]);
    }

    public function expenses_addsupplier()
    {
        $addsupplier_results = DB::table('finance_add_suppliers')->get();
        return view('departments.finance.expenses.add_a_supplier',[
            'addsupplier_results'=>$addsupplier_results
        ]);
    }

    public function expenses_addexpense()
    {
        $addexpense_results = DB::table('finance_add_expenses')->get();
        return view('departments.finance.expenses.add_an_expense',[
            'addexpense_results'=>$addexpense_results
        ]);
    }


    public function add_tax(){
        $taxes_results = DB::table('finance_add_taxes')->get();
        return view('departments.finance.taxes.add_tax',[
            'taxes_results'=>$taxes_results,
        ]);
    }


    //Joe
    public function add_account_post()
    {
        $addaccount = new finance_accounting_add_accounts(Input::all());
        $addaccount->save();
        return redirect(route('finance_accounting_add'));
    }
    public function bankrules_post()
    {
        $bankrules = new finance_banking_bank_rules(Input::all());
        $bankrules->save();
        return redirect(route('finance_banking_bankrules'));
    }


    //Lamech
    public function sales_add_customer_post()
    {
        $add_customer = new finance_add_customer(Input::all());
        $add_customer->save();
        return redirect(route('finance_sales_add_customer'));
    }

    public function sales_add_product_service_post()
    {
        $add_product_or_service= new finance_add_product_or_service(Input::all());
        $add_product_or_service->save();
        return redirect(route('finance_add_product_service'));

    }

    public function sales_invoice_post()
    {
        $create_invoice = new finance_create_invoice(Input::all());
        $create_invoice->save();
        return redirect(route('finance_sales_invoice'));
    }

    public function expenses_addsupplier_post()
    {
        $add_supplier = new finance_add_supplier(Input::all());
        $add_supplier->save();
        return redirect(route('finance_expenses_addsupplier'));
    }

    public function expenses_addexpense_post()
    {
        $add_expense = new finance_add_expense(Input::all());
        $add_expense->save();
        return redirect(route('finance_expenses_addexpense'));
    }

    public function add_tax_post()
    {
        $add_tax = new finance_add_tax(Input::all());
        $add_tax->save();
        return redirect(route('finance_taxes_add'));
    }


    //Default
    public function banking_post(){
        $banking = new finance_banking(Input::all());
        $banking->save();
        return redirect(route('finance_banking'));
    }

    public function billing_post(){
        $banking = new finance_billing(Input::all());
        $banking->save();
        return redirect(route('finance_billing'));
    }

    public function expenses_post()
    {
        $expenses = new finance_expenses(Input::all());
        $expenses->save();
        return redirect(route('finance_expenses'));

    }

    public function insurance_post()
    {
        $insurance = new finance_insurance(Input::all());
        $insurance->save();
        return redirect(route('finance_insurance'));
    }

    public function sales_post()
    {
        $sales = new finance_sales(Input::all());
        $sales->save();
        return redirect(route('finance_sales'));
    }

    public function invoice_post()
    {
        $invoice = new finance_invoice(Input::all());
        $invoice->save();
        return redirect(route('finance_invoice'));
    }
    public function bankandcreditcards_post()
    {
        $invoice = new finance_bank_and_credit_cards(Input::all());
        $invoice->save();
        return redirect(route('finance_banking_bankandcreditcards'));
    }

}
