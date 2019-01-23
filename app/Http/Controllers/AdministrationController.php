<?php

namespace App\Http\Controllers;

use App\administration_attendances;
use App\administration_billing;
use App\administration_employees;
use App\administration_official_use;
use App\administration_patient_information;
use App\administration_patient_information_a;
use App\recruitment;
use App\recruitments_form;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class administrationController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    private $authenticated_user;

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(function ($request, $next){
            $this->authenticated_user=Auth::user();
            return $next($request);

        });

    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('departments.administration.home');
    }
    //PATIENT INFORMATION
    public function patient_information()
    {
        $patient_information =DB::table('administration_patient_informations')->where('discharged','=',0)->get();
        return view('departments.administration.registration_desk.front_office_desk.patient_information',['patient_information'=>$patient_information]);
    }
    public function patient_information_post()
    {
        if(request('delete_patient_id'))
        {
            $patient = administration_patient_information::find(request('delete_patient_id'));
            $patient->discharged = 1;
            $patient->save();
            return redirect(route('patient_information'));
        }

        $patient_information = new administration_patient_information(Input::all());
        $patient_information->save();
        return redirect(route('patient_information'));
    }

    public function attendances()
    {
        $attendances_results = DB::table('administration_attendances')->get();
        return view('departments.administration.human_resource.attendances',['attendances'=>$attendances_results]);
    }

    public function billing($patient_id)
    {
        $billing = DB::table('administration_billings')->get();
        $billings = administration_patient_information::find($patient_id)->administration_billing->where('institution_id',$this->authenticated_user->institution->id);
        $patient=administration_patient_information::find($patient_id);
        return view('departments.administration.registration_desk.front_office_desk.billing',[
            'patient'=>$patient,'patient_id'=>$patient_id,'billings'=>$billings,'billing'=>$billing
        ]);
    }
    public function administration_home()
    {
        return view('departments.administration.administration');
    }

    public function official_use($patient_id)
    {
        $official_use = DB::table('administration_official_uses')->get();
        $official_uses = administration_patient_information::find($patient_id)->administration_official_use->where('institution_id',$this->authenticated_user->institution->id);
        $patient=administration_patient_information::find($patient_id);
        return view('departments.administration.registration_desk.front_office_desk.official_use',[
            'patient'=>$patient,'patient_id'=>$patient_id,'official_use'=>$official_use,'official_uses'=>$official_uses
        ]);
    }

    public function recruitment()
    {
        $recruitment_results =DB::table('recruitments_forms') ->latest() ->get();
        return view('departments.administration.human_resource.recruitment',[
            'recruitment_results'=>$recruitment_results
        ]);
    }
    public function recruitments_post()
    {
        $recruitment = new recruitments_form((request()->all()));
        $recruitment->save();
        return redirect(route('recruitment'));
    }




    public function patient_information_a()
    {
        return view('departments.administration.registration_desk.reservations.patient_information_a');
    }

    public function attendances_post()
    {
        $attendances = new administration_attendances(Input::all());
        $attendances->save();
        return redirect(route('attendances'));
    }
    public function patient_information_a_post()
    {
        $patient_information_a = new administration_patient_information_a(Input::all());
        $patient_information_a->save();
        return redirect(route('patient_information_a'));
    }
    public function employees()
    {
        $employees = DB::table('administration_employees')->get();
        return view('departments.administration.human_resource.employees',[
            'employees'=> $employees
        ]);
    }
    public function employees_post()
    {
        $employee = new administration_employees(Input::all());
        $employee->save();


        return redirect(route('employees'));
    }
    public function billing_post($patient_id)
    {
        $billing = new administration_billing(Input::all());
        $billing->save();


        return redirect(route('billing',['patient_id' => $patient_id]));
    }
    public function official_use_post($patient_id)
    {
        $official_use = new administration_official_use(Input::all());
        $official_use->save();


        return redirect(route('official_use',['patient_id' => $patient_id]));
    }

    public function single_patient($patient_id)
    {
        $single_patient = DB::table('administration_patient_informations')->where('id',$patient_id)->get();
        return view('/departments/administration/registration_desk/front_office_desk/single_patient',['single_patient'=>$single_patient, 'patient_id'=>$patient_id]);
    }
}
