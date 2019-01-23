<?php

namespace App\Http\Controllers;

use App\publichealth_family_planning;
use App\publichealth_moh405;
use App\publichealth_moh510;
use App\publichealth_moh511;
use App\publichealth_moh702;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class PublicHealthController extends Controller
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
        return view('departments.public_health.home');
    }

    public function comprehensive_care_centre(){
        return view('departments.public_health.comprehensive_care_centre.home');
    }

    public function counselling(){
        return view('departments.public_health.counselling.home');
    }

    public function malaria_surveillance(){
        return view('departments.public_health.malaria_surveillance.home');
    }

    public function mother_and_child_health_clinic(){
        return view('departments.public_health.mother_and_child_health_clinic.home');
    }

    public function vaccines(){
        return view('departments.public_health.vaccines.home');
    }

    public function voluntary_counselling_and_testing(){
        return view('departments.public_health.voluntary_counselling_and_testing.home');
    }

    public function youth_friendly_clinic(){
        return view('departments.public_health.youth_friendly_clinic.home');
    }

    public function show_moh_405_page(){
        $moh_405_results = DB::table('publichealth_moh405s')->get();
        return view('departments.public_health.mother_and_child_health_clinic.ante_natal_clinic.moh_405',['moh_405_results'=>$moh_405_results]);
    }

    public function show_anc_home_page(){
        return view('departments.public_health.mother_and_child_health_clinic.ante_natal_clinic.home');
    }

    public function show_cwc_home_page(){
        return view('departments.public_health.mother_and_child_health_clinic.child_welfare_clinic.home');
    }

    public function show_moh_511_page(){
        $show_moh_511_page = DB::table('publichealth_moh511s')->get();
        return view('departments.public_health.mother_and_child_health_clinic.child_welfare_clinic.moh_511',[
            'show_moh_511_page'=>$show_moh_511_page
        ]);
    }

    public function show_moh_511_cwc_register_page(){
        return view('departments.public_health.mother_and_child_health_clinic.child_welfare_clinic.moh_511_child_welfare_clinic_cwc_register');
    }

    public function show_fpc_home_page(){
        return view('departments.public_health.mother_and_child_health_clinic.family_planning_clinic.home');
    }

    public function show_family_planning_page(){
        $show_family_planning_page_results = DB::table('publichealth_family_plannings')->get();
        return view('departments.public_health.mother_and_child_health_clinic.family_planning_clinic.family_planning',[
            'show_family_planning_page_results'=>$show_family_planning_page_results
        ]);
    }

    public function show_ic_home_page(){
        return view('departments.public_health.mother_and_child_health_clinic.immunization_clinic.home');
    }

    public function show_pnc_home_page(){
        return view('departments.public_health.mother_and_child_health_clinic.post_natal_clinic.home');
    }

    public function show_moh_406_pnc_register_page(){
        $moh406_results = DB::table('publichealth_moh406s')->get();
        return view('departments.public_health.mother_and_child_health_clinic.post_natal_clinic.moh_406_post_natal_register',['moh406_results' => $moh406_results]);
    }

    public function cold_chain_monitoring(){
        return view('departments.public_health.mother_and_child_health_clinic.immunization_clinic.cold_chain_monitoring.home');
    }

    public function immunization_register(){
        return view('departments.public_health.mother_and_child_health_clinic.immunization_clinic.immunization_register.home');
    }

    public function show_moh510_page(){
        $show_moh510_page_results = DB::table('publichealth_moh510s')->get();
        return view('departments.public_health.mother_and_child_health_clinic.immunization_clinic.immunization_register.moh_510',[
            'show_moh510_page_results'=>$show_moh510_page_results
        ]);

    }

    public function show_moh510_ir_for_children_page(){
        return view('departments.public_health.mother_and_child_health_clinic.immunization_clinic.immunization_register.moh_510_immunization_register_for_children');
    }

    public function cancertreatment_home(){
        return view('departments.public_health.cancer_treatment.home');
    }

    public function show_moh702_ir_and_vitamin_a_tally_sheet_page(){
        $vitamin_a_tally_sheet = DB::table('publichealth_moh702s')->get();
        return view('departments.public_health.mother_and_child_health_clinic.immunization_clinic.immunization_register.moh_702_immunization_and_vitamin_a_tally_sheet',[
            'vitamin_a_tally_sheet'=>$vitamin_a_tally_sheet
        ]);    }

    public function show_moh710_ir_and_vitamin_a_summary_sheet_page(){
        return view('departments.public_health.mother_and_child_health_clinic.immunization_clinic.immunization_register.moh_710_immunization_and_vitamin_a_summary_sheet');
    }

    public function moh_406_post(){
        $banking = new publichealth_moh406(Input::all());
        $banking->save();
        return redirect(route('pnc_moh_406_post_natal_register'));

    }

    public function moh511_post()
    {
        $cwc_moh511 = new publichealth_moh511(Input::all());
        $cwc_moh511->save();
        return redirect(route('cwc_moh_511'));
    }

    public function show_moh_511_page_post(){
        $moh_511 = new publichealth_moh511(Input::all());
        $moh_511->save();


        return redirect(route('cwc_moh_511'));

    }
    public function show_moh702_ir_and_vitamin_a_tally_sheet_page_post(){

        $publichealth_moh702 = new publichealth_moh702(Input::all());
        $publichealth_moh702->save();


        return redirect(route('ic_ir_and_vitamin_a_tally_sheet'));
    }

    public function show_moh510_page_post ()
    {
        $mohfive = new publichealth_moh510(Input::all());
        $mohfive->save();
        return redirect(route('ic_ir_moh_510'));
    }
    public function show_family_planning_post ()
    {
        $family = new publichealth_family_planning(Input::all());
        $family->save();
        return redirect(route('fpc_family_planning'));
    }

    public function moh405_post(){
        $moh405_post= new publichealth_moh405(Input::all());
        $moh405_post->save();

        return redirect(route('anc_moh_405'));
    }

}
