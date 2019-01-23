<?php

namespace App\Http\Controllers;

use App\administration_patient_information;
use App\cancer_file;
use App\diagnostic_billed_list;
use App\diagnostic_laboratory_report_sheet;
use App\diagnostic_laboratory_sample_form;
use App\diagnostic_services_blood_donation_unit;
use App\diagnostic_services_ecg_request_form;
use App\diagnostic_services_general_lab_request_form;
use App\diagnostic_services_moh209;
use App\diagnostic_services_radiology_request_form;
use App\diagnostic_services_upload_file;
use App\laboratory_department_moh240;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class DiagnosticServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //DESTROY
    public function destroy($id)
    {
        //
    }

    //DIAGNOSTIC SERVICES
    public function diagnosticservices()
    {
        return view ('departments.diagnostic_services.diagnostic_services');
    }

    //LABORATORY DEPARTMENT
    public function laboratory_department()
    {
        return view ('departments\diagnostic_services\laboratory_department\laboratory_department');
    }

    //RADIOLOGY DEPARTMENT
    public function radiology_department()
    {
        return view ('departments\diagnostic_services\radiology_department\radiology_department');
    }


    //UPLOAD FILE
    public function upload_xray_file($patient_id)
    {

        $upload_xray_file_results =administration_patient_information::find($patient_id)->diagnostic_services_upload_files;
        $patient=administration_patient_information::find($patient_id);
//        return $upload_xray_file_results;
        return view('departments.diagnostic_services.radiology_department.upload_file',['upload_xray_file_results'=>$upload_xray_file_results,'patient_id'=>$patient_id, 'patient'=>$patient]);
    }
    public function upload_xray_file_post(Request $request,$patient_id)
    {

        $uploadedFile = $request->file('xray_file');
        //$path=$request->file('xray_file')->store('uploads/xray_uploads');
        $fileName='';
        if ($uploadedFile->isValid())
        {
            $fileName= time() . '.' . $uploadedFile->getClientOriginalExtension();
            $path = $uploadedFile->storeAs('xray_uploads', $fileName, 'uploads');
            echo $path;
        }
        $upload_xray_file = new diagnostic_services_upload_file
        (
            [
                //'date'=>request('date'),
                'administration_patient_informations_id'=>request('administration_patient_informations_id'),
                'institution_id'=>request('institution_id'),
                'user_id'=>request('user_id'),
                'xray_file'=>request('xray_file'),
                'xray_date'=>request('xray_date'),
                'x_ray_body_part'=>request('x_ray_body_part'),
                'name_of_radiologist'=>request('name_of_radiologist'),
                'report'=>request('report'),
                'radiologist_reg_no'=>request('radiologist_reg_no'),
                'xray_file'=>$fileName,
            ]
        );
        //(Input::all());
        $upload_xray_file->save();
        return redirect(route('upload_xray_file',['patient_id' => $patient_id]));
    }

    //BLOOD DONATION UNIT
    public function blood_donation_unit($patient_id)
    {
        $blood_donation_unit_results =administration_patient_information::find($patient_id)->diagnostic_services_blood_donation_units;
        $patient=administration_patient_information::find($patient_id);
        return view('departments.diagnostic_services.laboratory_department.blood_donation_unit',['blood_donation_unit_results'=>$blood_donation_unit_results,'patient_id'=>$patient_id, 'patient'=>$patient]);
    }
    public function blood_donation_unit_post($patient_id)
    {
        $blood_donation_unit_post= new diagnostic_services_blood_donation_unit(Input::all());
        $blood_donation_unit_post->save();
        return redirect(route('blood_donation_unit',['patient_id' => $patient_id]));
    }

    //GENERAL LABORATORY REQUEST FORM
    public function generallabrequestform($patient_id)
    {
        $generallabrequestform_results =administration_patient_information::find($patient_id)->diagnostic_services_general_lab_request_forms;
        $patient=administration_patient_information::find($patient_id);
        return view('departments.diagnostic_services.laboratory_department.general_lab_request_form',['generallabrequestform_results'=>$generallabrequestform_results,'patient_id'=>$patient_id, 'patient'=>$patient]);
    }
    public function generallabrequestform_post($patient_id)
    {
        $generallabrequestform_post= new diagnostic_services_general_lab_request_form(Input::all());
        $generallabrequestform_post->save();

        return redirect(route('generallabrequestform',['patient_id' => $patient_id]));
    }

    //MOH 240
    public function moh240($patient_id)
    {
        $moh240_results =administration_patient_information::find($patient_id)->laboratory_department_moh240s;
        $patient=administration_patient_information::find($patient_id);
        return view('departments.diagnostic_services.laboratory_department.moh240',['moh240_results'=>$moh240_results,'patient_id'=>$patient_id, 'patient'=>$patient]);
    }
    public function moh240_post($patient_id)
    {
        $moh240_post= new laboratory_department_moh240(Input::all());
        $moh240_post->save();
        return redirect(route('moh240',['patient_id' => $patient_id]));
    }

    //ECG REQUEST FORM
    public function ecgrequestform($patient_id)
    {
        $ecgrequestform_results =administration_patient_information::find($patient_id)->diagnostic_services_ecg_request_forms;
        $patient=administration_patient_information::find($patient_id);
        return view('departments.diagnostic_services.radiology_department.ecg_request_form',['ecgrequestform_results'=>$ecgrequestform_results,'patient_id'=>$patient_id, 'patient'=>$patient]);

    }
    public function ecgrequestform_post($patient_id)
    {
        $ecgrequestform_post_post= new diagnostic_services_ecg_request_form(Input::all());
        $ecgrequestform_post_post->save();
        return redirect(route('ecgrequestform',['patient_id' => $patient_id]));
    }

    //MOH 209
    public function moh209($patient_id)
    {
        $moh209_results =administration_patient_information::find($patient_id)->diagnostic_services_moh209s;
        $patient=administration_patient_information::find($patient_id);
        return view('departments.diagnostic_services.radiology_department.moh209',['moh209_results'=>$moh209_results,'patient_id'=>$patient_id, 'patient'=>$patient]);
    }
    public function moh209_post($patient_id)
    {
        $moh209_post= new diagnostic_services_moh209(Input::all());
        $moh209_post->save();
        return redirect(route('moh209',['patient_id' => $patient_id]));
    }

    //RADIOLOGY REQUEST FORM
    public function radiologyrequestform($patient_id)
    {
        $radiologyrequestform_results =administration_patient_information::find($patient_id)->diagnostic_services_radiology_request_forms;
        $patient=administration_patient_information::find($patient_id);
        return view('departments.diagnostic_services.radiology_department.radiology_request_form',['radiologyrequestform_results'=>$radiologyrequestform_results,'patient_id'=>$patient_id, 'patient'=>$patient]);
    }
    public function radiologyrequestform_post($patient_id)
    {
        $radiologyrequestform_post= new diagnostic_services_radiology_request_form(Input::all());
        $radiologyrequestform_post->save();
        return redirect(route('radiologyrequestform',['patient_id' => $patient_id]));
    }

    //LAB ROLES
    //laboratory report sheet
    public function laboratory_report_sheet($patient_id)
    {
        $laboratory_report_sheet_results =administration_patient_information::find($patient_id)->laboratory_report_sheet;
        $patient=administration_patient_information::find($patient_id);
        return view('departments.diagnostic_services.laboratory_department.lab_roles.laboratory_report_sheet',['laboratory_report_sheet_results'=>$laboratory_report_sheet_results,'patient_id'=>$patient_id, 'patient'=>$patient]);
    }
    public function laboratory_report_sheet_post($patient_id)
    {
        $laboratory_report_sheet_post= new diagnostic_laboratory_report_sheet(Input::all());
        $laboratory_report_sheet_post->save();
        return redirect(route('laboratory_report_sheet',['patient_id' => $patient_id]));
    }

    //laboratory sample form
    public function laboratory_sample_form($patient_id)
    {
        $laboratory_sample_form_result = DB::table('diagnostic_laboratory_sample_forms')->get();
        $laboratory_sample_form_results =administration_patient_information::find($patient_id)->laboratory_sample_for;
        $patient=administration_patient_information::find($patient_id);
        return view('departments.diagnostic_services.laboratory_department.lab_roles.laboratory_sample_form',['laboratory_sample_form_results'=>$laboratory_sample_form_results,'patient_id'=>$patient_id, 'patient'=>$patient,'laboratory_sample_form_result'=>$laboratory_sample_form_result]);
    }
    public function laboratory_sample_form_post(Request $request,$patient_id)
    {
        $laboratory_sample_form_post= new diagnostic_laboratory_sample_form(Input::all());
        $laboratory_sample_form_post->save();
        return redirect(route('laboratory_sample_form',['patient_id' => $patient_id]));
    }





}
