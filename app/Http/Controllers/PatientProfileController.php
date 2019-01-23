<?php

namespace App\Http\Controllers;

use App\PatientRegistration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;

class PatientProfileController extends Controller
{
    //
    public function patient_home(Request $data)
    {
        if(!$data->session()->exists('patient.is_logged_in')){
            return redirect(route('patient_login'));
        }else{
            return view('departments.patient_profile.home');
        }
    }
    public function patient_cards()
    {
        return view('departments.patient_profile.cards');
    }
    public function patient_forms()
    {
        return view('departments.patient_profile.forms');
    }
    public function patient_booklets()
    {
        return view('departments.patient_profile.booklets');
    }
    public function case_summary()
    {
        return view('departments.patient_profile.case_summary');
    }
    public function prescription_form()
    {
        return view('departments.patient_profile.prescription_form');
    }
    public function allergy_form ()
    {
        return view('departments.patient_profile.allergy_form');
    }
    public function laboratory_report_sheet()
    {
        return view('departments.patient_profile.laboratory_report_sheet');
    }
    public function radiology_report_sheet()
    {
        return view('departments.patient_profile.radiology_report_sheet');
    }
    public function childhealthcard1()
    {
        return view('departments.patient_profile.childhealthcard1');
    }

    public function physical()
    {
        return view('departments.patient_profile.physical');
    }
    public function presentpregnancy()
    {
        return view('departments.patient_profile.presentpregnancy');
    }
    public function previouspregnancy()
    {
        return view('departments.patient_profile.previouspregnancy');
    }
    public function weightchart()
    {
        return view('departments.patient_profile.weightchart');
    }
    public function childmonitoring()
    {
        return view('departments.patient_profile.childmonitoring');
    }
    public function immunization()
    {
        return view('departments.patient_profile.immunization');
    }
    public function attendancecard()
    {
        return view('departments.patient_profile.attendance');
    }
    public function patient_appointments()
    {
        return view('departments.patient_profile.appointments');
    }
    public function emergency_services()
    {
        return view('departments.patient_profile.emergency_services');
    }
    public function patient_homebased()
    {
        return view('departments.patient_profile.homebased');

    }
    public function firstaid()
    {
        return view('departments.patient_profile.firstaid');
    }
    public function ambulance()
    {
        return view('departments.patient_profile.ambulance');
    }
    public function telemedicine()
{
    return view('departments.patient_profile.telemedicine');
}
    public function hospitals()
    {
        return view('departments.patient_profile.hospitals');
    }
    public function agencies()
    {
        return view('departments.patient_profile.agencies');
    }
    public function nurse()
    {
        return view('departments.patient_profile.nurse');
    }
    public function prescription()
    {
        return view('departments.patient_profile.prescription');
    }
    public function yellow()
    {
        return view('departments.patient_profile.yellow');
    }
    public function registration()
    {
        return view('departments.patient_profile.registration');
    }
    public function registration_data()
    {
        return view('departments.patient_profile.registration_data');
    }
    public function medical_surgical()
    {
        return view('departments.patient_profile.medical_surgical');
    }

    public function general_information()
    {
        return view('departments.patient_profile.general_information');
    }


    public function anc_generalinformation()
    {
        return view('departments.patient_profile.anc_generalinformation');
    }
    public function preventive_services()
    {
        return view('departments.patient_profile.preventive_services');
    }
    public function delivery()
    {
        return view('departments.patient_profile.delivery');
    }
    public function postnatal_examination()
    {
        return view('departments.patient_profile.postnatal_examination');
    }
    public function family_planning()
    {
        return view('departments.patient_profile.family_planning');
    }
    public function clinical_notes()
    {
        return view('departments.patient_profile.clinical_notes');
    }

    public function immunization_card()
    {
        return view('departments.patient_profile.immunization_card');
    }
    public function vit_a()
    {
        return view('departments.patient_profile.vit_a');
    }
    public function supplemental_vaccines()
    {
        return view('departments.patient_profile.supplemental_vaccines');
    }
    public function milestones_chart()
    {
        return view('departments.patient_profile.milestones_chart');
    }
    public function id_children()
    {
        return view('departments.patient_profile.id_children');
    }
    public function co_trimoxazole()
    {
        return view('departments.patient_profile.co_trimoxazole');
    }
    public function immunologic()
    {
        return view('departments.patient_profile.immunologic');
    }
    public function health_worker()
    {
        return view('departments.patient_profile.health_worker');
    }


    //Authentication
    public function login(Request $data){
        $login_errors = [];

        if($data->session()->exists('no_user')){
            array_push($login_errors,$data->session()->get('no_user'));
        }

        if($data->session()->exists('false_password')){
            array_push($login_errors,$data->session()->get('false_password'));
        }

        return view('departments.patient_profile.login',[
            'login_errors'=>$login_errors,
        ]);
    }

    public function register(Request $data){
        $registration_errors = [];

        if($data->session()->exists('password_confirm_error')){
            array_push($registration_errors,$data->session()->get('password_confirm_error'));
        }

        return view('departments.patient_profile.register',[
            'registration_errors'=>$registration_errors,
        ]);
    }

    public function register_post(Request $data){

        if($data['password'] !== $data['confirm_password']){
            $data->session()->flash('password_confirm_error',"Password mismatch during confirmation");
            return back()->withInput($data->post());
        }

        $new_patient = new PatientRegistration([
            'date' => $data['date'],
            'mrn_number' => $data['mrn_number'],
            'ipad_number' => $data['ipad_number'],
            'sex' => $data['sex'],
            'full_names' => $data['full_names'],
            'id_number' => $data['id_number'],
            'po_box' => $data['po_box'],
            'postal_code' => $data['postal_code'],
            'town' => $data['town'],
            'email_address' => $data['email_address'],
            'telephone_home' => $data['telephone_home'],
            'office' => $data['office'],
            'current_residence' => $data['current_residence'],
            'sublocation_residence_town' => $data['sublocation_residence_town'],
            'home_district' => $data['home_district'],
            'date_of_birth' => $data['date_of_birth'],
            'religion' => $data['religion'],
            'nationality' => $data['nationality'],
            'password' => Hash::make($data['password']),
            'nok_full_names' => $data['nok_full_names'],
            'nok_po_box' => $data['nok_po_box'],
            'nok_postal_code' => $data['nok_postal_code'],
            'nok_town' => $data['nok_town'],
            'nok_email_address' => $data['nok_email_address'],
            'nok_telephone_home' => $data['nok_telephone_home'],
            'nok_office' => $data['nok_office'],
            'nok_current_residence' => $data['nok_current_residence'],
            'nok_sublocation_residence_town' => $data['nok_sublocation_residence_town'],
            'nok_id_number' => $data['nok_id_number'],
            'nok_occupation' => $data['nok_occupation'],
            'nok_relationship_patient' => $data['nok_relationship_patient'],
        ]);
        $new_patient->save();

        return redirect(route('patient_login'));
    }

    public function login_post(Request $data){
        $patient = DB::table('patient_registrations')->where(['email_address'=>$data['email_address']])->get();

        if($patient->count() == 0){
            $data->session()->flash('no_user',"Sorry, user does not exist.");
            return redirect(route('patient_login'));
        }

        if(password_verify($data['password'],$patient[0]->password)){
            $data->session()->put('patient.name',$patient[0]->full_names);
            $data->session()->put('patient.is_logged_in',true);
            return redirect(route('patient_home'));
        }
        else{
            $data->session()->flash('false_password',"Invalid password.");
            return redirect(route('patient_login'));
        }

    }

    public function logout(Request $data){
        $data->session()->flush();
        return redirect(route('patient_login'));
    }
}
