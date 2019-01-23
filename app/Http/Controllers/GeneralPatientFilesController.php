<?php

namespace App\Http\Controllers;

use App\administration_patient_information;
use App\clinical_btu;
use App\clinical_moh_303;
use App\clinical_moh_333;
use App\clinical_moh_406;
use App\clinicalservices_casedeathsummary;
use App\clinicalservices_consultationrequestform;
use App\clinicalservices_ecgrequest;
use App\clinicalservices_fluidintakeform;
use App\clinicalservices_moh301;
use App\clinicalservices_nursing;
use App\clinicalservices_patientconsent;
use App\clinicalservices_presuresorescorecard;
use App\clinicalservices_radiologyrequestform;
use App\clinicalservices_treatmentsheet;
use App\clinicalservices_xrayrequestform;
use App\treatment_sheet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class GeneralPatientFilesController extends Controller
{
 public function labrequest()
    {
        return view('common_files.general_patient_files.lab_request_form');
    }
    public function consultationrequest()
    {
        $consultationrequest_results = DB::table('clinicalservices_consultationrequestforms')->get();
        return view('common_files.general_patient_files.consultation_request_form',['consultationrequest_results' => $consultationrequest_results]);
    }
    public function ecgrequest()
    {
        $ecgrequest_results = DB::table('clinicalservices_ecgrequests')->get();
        return view('common_files.general_patient_files.ecg_request_form',['ecgrequest_results' => $ecgrequest_results]);
    }
    public function fluidintake()
    {
        $fluidintake_results = DB::table('clinicalservices_fluidintakeforms')->get();
        return view('common_files.general_patient_files.fluid_intake_output_chart',['fluidintake_results'=>$fluidintake_results]);
    }



    public function general()
    {
        return view('common_files.general_patient_files.general');
    }public function theatre()
    {
        return view('common_files.general_patient_files.theatre');
    }public function treatment_sheet()
{
    $treatment_sheet_results = DB::table('clinicalservices_treatmentsheets')->get();
    return view('common_files.general_patient_files.treatment_sheet',['treatment_sheet_results' => $treatment_sheet_results]);
}public function request_for_appliance()
    {
        return view('common_files.general_patient_files.request_for_appliance');
    }public function radiology_request_form()
{
    $radiology_request_form_results = DB::table('clinicalservices_radiologyrequestforms')->get();
    return view('common_files.general_patient_files.radiology_request_form',[
        'radiology_request_form_results'=>$radiology_request_form_results
    ]);
    }
    public function patient_consent()
{
    $patient_consent_results = DB::table('clinicalservices_patientconsents')->get();
    return view('common_files.general_patient_files.patient_consent',[
        'patient_consent_results'=>$patient_consent_results
    ]);
    }public function daily_ward_report(){
        return view('common_files.general_patient_files.daily_ward_report');
    }

    public function pressure()
    {
        return view('common_files.general_patient_files.general_ward_forms.blood_pressure_chart');
    }
    public function morphine()
    {
        return view('common_files.general_patient_files.general_ward_forms.morphine');
    }
    public function nursing()
    {
        $nursing_results = DB::table('clinicalservices_nursings')->get();
        return view('common_files.general_patient_files.general_ward_forms.nursing_forms',[
            'nursing_results'=>$nursing_results
        ]);
    }





    //common files- NOT GENERAL PATIENT FILES

    public function btu()
    {
        $btu_results = DB::table('clinical_btus')->get();
        return view('common_files.common_files.btu',['btu_results' => $btu_results]);
    }public function laboratory()
    {
        return view('common_files.common_files.laboratory_request_form');
    }

    public function moh333()
    {
        $moh333_results = DB::table('clinical_moh_333s')->get();
        //return $moh333_results;
        return view('common_files.common_files.moh333',['moh333_results' => $moh333_results]);
    }public function moh406()
    {
        return view('common_files.common_files.moh406');
    }public function moh717()
    {
        return view('common_files.common_files.moh717');
    }public function prescription()
    {
        return view('common_files.common_files.prescription');
    }
    public function pressure_score_card()
    {
        $pressure_score_card_results = DB::table('clinicalservices_presuresorescorecards')->get();
        return view('departments.clinical_services.inpatient.oncology.oncology_ward.pressure_scores_record_card',['pressure_score_card_results'=>$pressure_score_card_results]);
    }
    public function xray_request()
    {
        $xray_request_results = DB::table('clinicalservices_xrayrequestforms')->get();
        return view('common_files.common_files.xray_request',['xray_request_results'=>$xray_request_results]);
    }


    //general surgery
    public function moh301_moh301_generalsurgery()
    {
        $moh301 = DB::table('clinicalservices_moh301s')->get();
        return view('common_files.common_files.moh301',[
            'moh301'=>$moh301
        ]);

    }
    public function moh301_post_moh301_generalsurgery()
    {
        $invoice = new clinicalservices_moh301(Input::all());
        $invoice->save();
        return redirect(route('moh301'));
    }


    public function btu_post(){
        $btu = new clinical_btu(Input::all());
        $btu->save();
        return redirect(route('btu'));
    }
    public function moh333_post(){
        $moh333 = new clinical_moh_333(Input::all());
        $moh333->save();
        return redirect(route('moh333'));
    }

    public function general_files_case_death_post(){
        $case_death = new clinicalservices_casedeathsummary(Input::all());
        $case_death->save();
        return redirect(route('general_files_case_death'));
    }

    public function treatment_sheet_post(){
        $treatment_sheet = new clinicalservices_treatmentsheet(Input::all());
        $treatment_sheet->save();
        return redirect(route('treatment_sheet'));
    }

    public function ecgrequest_post(){
        $ecg_request = new clinicalservices_ecgrequest(Input::all());
        $ecg_request->save();
        return redirect(route('ecgrequest'));
    }
    public function consultationrequest_post()
    {
        $consultationrequest = new clinicalservices_consultationrequestform(Input::all());
        $consultationrequest->save();
        return redirect(route('consultationrequest'));
    }
    public function fluidintake_post()
    {
        $fluidintake = new clinicalservices_fluidintakeform(Input::all());
        $fluidintake->save();
        return redirect(route('fluidintake'));

    }
    public function moh406_post()
    {
        $moh406 = new clinical_moh_406(Input::all());
        $moh406->save();


        return redirect(route('moh406'));
    }








    public function pressure_score_card_post()
    {
        $pressure_score_card= new clinicalservices_presuresorescorecard(Input::all());
        $pressure_score_card->save();


        return redirect(route('pressure_score_card'));
    }
    public function xray_request_post()
    {
        $banking = new clinicalservices_xrayrequestform(
            [   'date'=>request('date'),
                'ip_op_number'=>request('ip_op_number'),
                'ref_no'=>request('ref_no'),
                'patient'=>request('patient'),
                'cell'=>request('cell'),
                'age'=>request('age'),
                'sex'=>request('sex'),
                'weight'=>request('weight'),
                'clinical_info'=>request('clinical_info'),
                'lmp'=>request('lmp'),
                'invenstigation_required'=>request('invenstigation_required'),
                'report'=>request('report'),
                'referring_doctor'=>request('referring_doctor'),
                'branch'=>request('branch'),
                'signature'=>request('signature'),
                'cell2'=>request('cell2'),
                'reported_by'=>request('reported_by'),
                'time'=>request('time'),
                'departments'=>Route::currentRouteName(),
            ]
        );
        $banking->save();
        return redirect(route('xray_request'));
    }
    public function radiology_request_form_post()
    {
        $radiology = new clinicalservices_radiologyrequestform(Input::all());
        $radiology->save();


        return redirect(route('radiology_request_form'));
    }


    public function patient_consent_post()
    {
        $patientconsent = new clinicalservices_patientconsent(Input::all());
        $patientconsent->save();


        return redirect(route('patient_consent'));
    }

    public function nursing_post()
    {
        $nursing = new clinicalservices_nursing(Input::all());
        $nursing->save();


        return redirect(route('nursing'));
    }
}
