<?php

namespace App\Http\Controllers;

use App\administration_patient_information;
use App\anaesthetic_record;
use App\bed;
use App\blood_pressure_chart;
use App\blood_transfusion_observation;
use App\cancer_file;
use App\CancerManagement;
use App\clinical_services_allergyform;
use App\clinical_services_fallassessmentform;
use App\clinical_services_initial_assessment_form;
use App\clinical_services_pharmacy_withdrawal_form;
use App\clinical_services_physicalexaminationonadmission;
use App\clinicalservices_adultfeedingchart;
use App\clinicalservices_blood_donation_requestform;
use App\clinicalservices_casedeathsummary;
use App\clinicalservices_consultationrequestform;
use App\clinicalservices_continuation_form;
use App\clinicalservices_ecgform;
use App\clinicalservices_eeg_report;
use App\clinicalservices_inpatientnutritioncareregister;
use App\clinicalservices_labrequestform;
use App\clinicalservices_morphine;
use App\clinicalservices_nursing;
use App\clinicalservices_nursingcareform;
use App\clinicalservices_patient_property;
use App\clinicalservices_physiotherapy_form;
use App\clinicalservices_prescriptionform;
use App\clinicalservices_presuresorescorecard;
use App\clinicalservices_radiology_report_sheet;
use App\clinicalservices_treatmentsheet;
use App\clinicalservices_xrayrequestform;
use App\consent_form;
use App\department;
use App\diabetic_charts;
use App\fluid_in_out_chart;
use App\four_hourly_temp_chart;
use App\icu_observation_chart;
use App\intensive_care_unit_respiratory_sheet;
use App\ipom_chart;
use App\operation_note;
use App\morning_everning_temp;
use App\patient_assesment;
use App\patient_file_accident_and_emergency;
use App\patient_file_dental_examination_form;
use App\patient_file_diet_requisition_sheet;
use App\patient_file_diet_sheets;
use App\patient_file_ear_nose_throat_examination_form;
use App\patient_file_infant_record;
use App\patient_file_initial_nursing_assessment;
use App\patient_file_maternity_records;
use App\patient_file_nutrition_care_process_form;
use App\patient_file_occupational_therapy_initial_assessment_form;
use App\patient_file_oncology_cbe_results_case_management_form;
use App\patient_file_oncology_cbe_results_discrete_mass;
use App\patient_file_oncology_cbe_results_examination_form;
use App\patient_file_oncology_cbe_results_overall_summary;
use App\patient_file_oncology_cbe_results_physical_exam;
use App\patient_file_orthopaedic_examination_form;
use App\patient_file_orthopeadic_clinic;
use App\patient_file_orthopedic_limbular_range_in_motion;
use App\patient_file_orthopedic_patient_standing;
use App\patient_file_orthopedic_tests;
use App\patient_file_request_for_mortem_examination;
use App\patient_file_request_for_palliative_care;
use App\preoperative_checklist;
use App\pulse_chart;
use App\send_department_link;
use App\treatment_sheet;
use App\triage;
use App\ward;
use function foo\func;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use Maatwebsite\Excel;




class ClinicalServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
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



    public function lab_current_dept()
    {
        $current_dept='lab';

        return view('departments/clinical_services/send_to_department/current_dept',['current_dept'=>$current_dept]);
    }


    public function radio_current_dept()
    {
        $current_dept='radio';
        return view('departments/clinical_services/send_to_department/current_dept',['current_dept'=>$current_dept]);
    }
    public function pharmacy_current_dept()
    {
        $current_dept='pham';
        return view('departments/clinical_services/send_to_department/current_dept',['current_dept'=>$current_dept]);
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
    public function destroy($id)
    {
        //
    }

    public function clinicalservices_inpatient_home()
    {
        return view('departments.clinical_services.clinicalservices_inpatient');
    }

    public function clinicalservices_ms_home()
    {
        return view('departments.clinical_services.clinicalservices_inpatient_ms');
    }

    public function clinicalservices_ss_home()
    {
        return view('departments.clinical_services.clinicalservices_inpatient_ss');
    }

    public function clinicalservices_ats_home()
    {
        return view('departments.clinical_services.clinicalservices_inpatient_at');
    }

    public function clinicalservices_ccs_home()
    {
        return view('departments.clinical_services.clinicalservices_inpatient_cc');
    }

    public function clinicalservices_maternity_home()
    {
        return view('departments.clinical_services.clinicalservices_inpatient_maternity');
    }

    public function clinicalservices_maternity_lw()
    {
        return view('departments.clinical_services.clinicalservices_inpatient_maternity_lw');
    }

    public function clinicalservices_ps_home()
    {
        return view('departments.clinical_services.clinicalservices_inpatient_ps');
    }

    public function clinicalservices_ra_or_rr()
    {
        return view('departments.clinical_services.clinicalservices_ra_or_rr');
    }

    public function clinical_services_cancer_management()
    {
        $cancer_records = DB::table('cancer_managements')->get();
        return view('departments.clinical_services.cancer_record_management',['cancer_records'=>$cancer_records,]);
    }

    public function clinical_services_cancer_management_post(){
        $new_cancer_record = new CancerManagement(Input::all());
        $new_cancer_record->save();
        return redirect(route('cancer_records_management'));
    }


    //patientfile fuction

    public function fallassessmentform($patient_id)
    {
        $fallassessmentform_results= administration_patient_information::find($patient_id)->fall_assessment_form->where('institution_id',$this->authenticated_user->institution->id);
        $patient=administration_patient_information::find($patient_id);
        return view('departments.clinical_services.inpatient.patient_file.fall_assessment_form',[
            'fallassessmentform_results'=>$fallassessmentform_results, 'patient_id'=>$patient_id, 'patient'=>$patient,
        ]);

    }

    public function fallassessmentform_post($patient_id){
        $fall_assessment_form = new clinical_services_fallassessmentform(Input::all());
        $fall_assessment_form->save();
        return redirect(route('fallassessmentform',[
            'patient_id'=>$patient_id,
        ]));
    }

    public function nursingcareform($patient_id)
    {
        $nursing_care_form= administration_patient_information::find($patient_id)->nursing_care_form->where('institution_id',$this->authenticated_user->institution->id);
        $patient=administration_patient_information::find($patient_id);
        return view('departments.clinical_services.inpatient.patient_file.nursing_care_form',[
            'nursing_care_form'=>$nursing_care_form,'patient_id'=>$patient_id, 'patient'=>$patient
        ]);

    }

    public function morphine($patient_id)
    {
        $morphine_results=administration_patient_information::find($patient_id)->morphine->where('institution_id',$this->authenticated_user->institution->id);
        $patient=administration_patient_information::find($patient_id);
        return view('departments.clinical_services.inpatient.patient_file.morphine',[
            'morphine_results'=>$morphine_results,'patient_id'=>$patient_id, 'patient'=>$patient
        ]);
    }
    public function nursing($patient_id)
    {
        $nursingforms_results = administration_patient_information::find($patient_id)->nursing->where('institution_id',$this->authenticated_user->institution->id);
        $patient=administration_patient_information::find($patient_id);
        return view('departments.clinical_services.inpatient.patient_file.nursingforms',[
            'nursingforms_results'=>$nursingforms_results,'patient'=>$patient,'patient_id'=>$patient_id,
        ]);
    }



    public function admission_form()
    {
        return view('departments.clinical_services.inpatient.patient_file.admission_form');
    }
    public function anaesthetic_records($patient_id)
    {
        $anaesthetic_records=administration_patient_information::find($patient_id)->anaesthetic_record->where('institution_id',$this->authenticated_user->institution->id);

        $patient=administration_patient_information::find($patient_id);

        return view('departments.clinical_services.inpatient.patient_file.anaesthetic_records',[
            'anaesthetic_records'=>$anaesthetic_records,'patient_id'=>$patient_id, 'patient'=>$patient
        ]);

    }
    public function anaesthetic_records_post($patient_id)
    {
        $anaesthetic_records = new anaesthetic_record(Input::all());
        $anaesthetic_records->save();
        return redirect(route('anaesthetic_records',['patient_id' => $patient_id]));
    }

    public function operation_note($patient_id)
    {
        $operation_note_records=administration_patient_information::find($patient_id)->operation_note->where('institution_id',$this->authenticated_user->institution->id);

        $patient=administration_patient_information::find($patient_id);

        return view('departments.clinical_services.inpatient.patient_file.operation_notes',[
            'operation_note_records'=>$operation_note_records,'patient_id'=>$patient_id, 'patient'=>$patient
        ]);

    }
    public function operation_note_post($patient_id)
    {
        $operation_note_records = new operation_note(Input::all());
        $operation_note_records->save();
        return redirect(route('operation_note',['patient_id' => $patient_id]));
    }
    public function fluid_intake_output_chart()
    {
        return view('departments.clinical_services.inpatient.patient_file.fluid_intake_output_chart');
    }

    public function consent_form($patient_id)
    {
        $consent_forms= administration_patient_information::find($patient_id)->consent_form->where('institution_id',$this->authenticated_user->institution->id);
        $patient=administration_patient_information::find($patient_id);
        return view('departments.clinical_services.inpatient.patient_file.consent_form',[
            'consent_forms'=>$consent_forms,'patient_id'=>$patient_id, 'patient'=>$patient
        ]);
    }
    public function consent_form_post($patient_id)
    {
        $consent_form_post = new consent_form(Input::all());
        $consent_form_post->save();
        return redirect(route('consent_form',['patient_id' => $patient_id] ));
    }

    public function foetal_kit_chart()
    {
        return view('departments.clinical_services.inpatient.patient_file.foetal_kit_chart');
    }
    public function anc_card()
    {
        return view('departments.clinical_services.inpatient.patient_file.anc_card');
    }
    public function audiogram()
    {
        return view('departments.clinical_services.inpatient.patient_file.audiogram');
    }
    public function morphine_administration_chart(){
        return view('departments.clinical_services.inpatient.patient_file.morphine_administration_chart');
    }

    public function blood_transfusion_observation_form($patient_id)
    {
        $blood_transfusion_results=administration_patient_information::find($patient_id)->blood_transfusion_observation_form->where('institution_id',$this->authenticated_user->institution->id);
        $patient=administration_patient_information::find($patient_id);
        return view('departments.clinical_services.inpatient.patient_file.blood_transfusion_observation_form',[
            'blood_transfusion_results'=>$blood_transfusion_results,'patient_id'=>$patient_id, 'patient'=>$patient
        ]);
    }
    public function blood_transfusion_observation_form_post($patient_id)
    {
        $blood_transfusion = new blood_transfusion_observation(Input::all());
        $blood_transfusion->save();
        return redirect(route('blood_transfusion_observation_form',['patient_id' => $patient_id]));
    }

    public function continuation_form($patient_id )
    {
        $continuation_sheets_results =administration_patient_information::find($patient_id)->clinicalservices_continuation_form->where('institution_id',$this->authenticated_user->institution->id);
        $patient=administration_patient_information::find($patient_id);
        return view('departments.clinical_services.inpatient.patient_file.continuation_sheets',['continuation_sheets_results' => $continuation_sheets_results,'patient_id'=>$patient_id, 'patient'=>$patient]);

    }

    public function continuation_form_post($patient_id)
    {
        $continuation_form = new clinicalservices_continuation_form(Input::all());
        $continuation_form->save();
        return redirect(route('continuation_form',['patient_id' => $patient_id]));
    }
//    public function ()
//    {
//        $_results = DB::table('clinical_services_')->get();
//        return view('department.clinical_services.patient_file',['_results' => $_results]);
//    }

    public function fluid_in_out_chart($patient_id)
    {
        $fluid_in_out_charts_table= administration_patient_information::find($patient_id)->fluid_in_out_chart->where('institution_id',$this->authenticated_user->institution->id);
        $patient=administration_patient_information::find($patient_id);
        return view('departments.clinical_services.inpatient.patient_file.fluid_intake_output_chart',[
            'fluid_in_out_charts_table'=>$fluid_in_out_charts_table,
            'patient_id'=>$patient_id,
            'patient'=>$patient,
        ]);
    }
    public function fluid_in_out_chart_post($patient_id)
    {
        $fluid_in_out_charts_table = new fluid_in_out_chart(Input::all());
        $fluid_in_out_charts_table->save();
        return redirect(route('fluid_in_out_chart',['patient_id'=>$patient_id]));
    }
    public function diabetic_charts($patient_id)
    {
        $diabetic_charts =administration_patient_information::find($patient_id)->diabetic_charts->where('institution_id',$this->authenticated_user->institution->id);
        $patient=administration_patient_information::find($patient_id);
        return view('departments.clinical_services.inpatient.patient_file.diabetic_charts',[
            'diabetic_charts'=>$diabetic_charts,'patient_id'=>$patient_id,'patient'=>$patient
        ]);
    }
//    public function case_death($patient_id)
//    {
//        //query casedeathsummary records related to the patient id passed via the url
//        //clinicalservices_casedeathsummary is the name of the function you declared in administration_patient_information model
//        $case_death_results=administration_patient_information::find($patient_id)->clinicalservices_casedeathsummary->where('institution_id',$this->authenticated_user->institution->id);
//        //get patient information also
//        $patient=administration_patient_information::find($patient_id);
//
//        //return view and pass the variables
//        return view('departments.clinical_services.inpatient.patient_file.case_death_summary',[
//            'case_death_results'=>$case_death_results,'patient_id'=>$patient_id, 'patient'=>$patient
//        ]);
//    }
    public function diabetic_charts_post($patient_id)
    {
        $diabetic_charts = new diabetic_charts(Input::all());
        $diabetic_charts->save();
        return redirect(route('diabetic_charts',['patient_id' => $patient_id]));
    }



    public function head_injury_and_craniotomy_chart_form()
    {
        return view('departments.clinical_services.inpatient.patient_file.head_injury_and_craniotomy_chart');
    }
    public function icu_observation_chart($patient_id)
    {

        $icu_observation_chart=administration_patient_information::find($patient_id)->icu_observation_chart->where('institution_id',$this->authenticated_user->institution->id);

        $patient=administration_patient_information::find($patient_id);
        return view('departments.clinical_services.inpatient.patient_file.icu_observation_chart',[
            'icu_observation_chart'=>$icu_observation_chart,'patient_id'=>$patient_id, 'patient'=>$patient
        ]);

    }
    public function icu_observation_chart_post($patient_id)
    {
        $icu_observation_chart = new icu_observation_chart(Input::all());
        $icu_observation_chart->save();
        return redirect(route('icu_observation_chart',['patient_id' => $patient_id]));
    }
    public function intensive_care_unit_respiratory_sheet($patient_id)
    {
        $intensive_care_unit_respiratory_sheet=administration_patient_information::find($patient_id)->intensive_care_unit_respiratory_sheet->where('institution_id',$this->authenticated_user->institution->id);

        $patient=administration_patient_information::find($patient_id);
        return view('departments.clinical_services.inpatient.patient_file.icu_respiratory_sheet',[
            'intensive_care_unit_respiratory_sheet'=>$intensive_care_unit_respiratory_sheet,'patient_id'=>$patient_id, 'patient'=>$patient
        ]);

    }
    public function intensive_care_unit_respiratory_sheet_post($patient_id)
    {
        $intensive_care_unit_respiratory_sheet=new intensive_care_unit_respiratory_sheet(Input::all());
        $intensive_care_unit_respiratory_sheet->save();
        return redirect(route('intensive_care_unit_respiratory_sheet',['patient_id' => $patient_id]));
    }
    public function ipom_chart($patient_id)
    {
        $ipom_charts=administration_patient_information::find($patient_id)->ipom_chart->where('institution_id',$this->authenticated_user->institution->id);
        $patient=administration_patient_information::find($patient_id);
        return view('departments/clinical_services/inpatient/patient_file/immediate_post_operative_monitoring_chart',[
            'ipom_charts'=>$ipom_charts,'patient_id'=>$patient_id, 'patient'=>$patient
        ]);

    }
    public function ipom_chart_post($patient_id)
    {
        $ipom_charts = new ipom_chart(Input::all());
        $ipom_charts->save();
        return redirect(route('ipom_chart',['patient_id' => $patient_id]));
    }

    public function partograph_form()
    {
        return view('departments.clinical_services.inpatient.patient_file.partograph_form');
    }
    public function patient_assessment_and_progress_card($patient_id)
    {
        $patient_assessment_and_progress_card= administration_patient_information::find($patient_id)->patient_assessments->where('institution_id',$this->authenticated_user->institution->id);
        $patient=administration_patient_information::find($patient_id);
        return view('departments.clinical_services.inpatient.patient_file.patient_assessment_and_progress_card',[
            'patient_assessment_and_progress_card'=>$patient_assessment_and_progress_card,'patient_id'=>$patient_id, 'patient'=>$patient
        ]);
    }
    public function patient_assessment_and_progress_card_post($patient_id)
    {
        $patient_assessment_and_progress_card = new patient_assesment(Input::all());
        $patient_assessment_and_progress_card->save();
        return redirect(route('patient_assessment_and_progress_card',['patient_id' => $patient_id] ));
    }
    public function patient_property_declaration_form($patient_id)
    {
        $patient_property_declaration_form_results =administration_patient_information::find($patient_id)->clinicalservices_patient_property->where('institution_id',$this->authenticated_user->institution->id);
        $patient=administration_patient_information::find($patient_id);
        return view('departments.clinical_services.inpatient.patient_file.patient_property_declaration_form',['patient_property_declaration_form_results' => $patient_property_declaration_form_results,'patient_id'=>$patient_id, 'patient'=>$patient]);

    }
    public function patient_property_declaration_form_post($patient_id)
    {
        $patient_property_declaration_form = new clinicalservices_patient_property(Input::all());
        $patient_property_declaration_form->save();
        return redirect(route('patient_property_declaration_form',['patient_id' => $patient_id]));

    }
    public function pending_patient_file()
    {
        return view('departments.clinical_services.inpatient.patient_file.pending_patient_file');
    }

    public function physiotherapy_form($patient_id)
    {
        $physiotherapy_form_results= administration_patient_information::find($patient_id)->physiotherapy_form->where('institution_id',$this->authenticated_user->institution->id);
        $patient=administration_patient_information::find($patient_id);
        return view('departments.clinical_services.inpatient.patient_file.physiotherapy_form',['physiotherapy_form_results' => $physiotherapy_form_results,'patient_id'=>$patient_id, 'patient'=>$patient]);
    }
    public function physiotherapy_form_post($patient_id)
    {
        $physiotherapy_form = new clinicalservices_physiotherapy_form(Input::all());
        $physiotherapy_form->save();
        return redirect(route('physiotherapy_form',['patient_id' => $patient_id] ));
    }

    public function preoperative_checklist($patient_id)
    {
        $preoperative_checklist= administration_patient_information::find($patient_id)->preoperative_checklist->where('institution_id',$this->authenticated_user->institution->id);
        $patient=administration_patient_information::find($patient_id);
        return view('departments.clinical_services.inpatient.patient_file.preoperative_checklist',['preoperative_checklist'=>$preoperative_checklist,'patient_id'=>$patient_id, 'patient'=>$patient]);
    }
    public function preoperative_checklist_post($patient_id)
    {
        $preoperative_checklist = new preoperative_checklist(Input::all());
        $preoperative_checklist->save();
        return redirect(route('preoperative_checklist',['patient_id' => $patient_id] ));
    }

    public function secg_request_form()
    {
        return view('departments.clinical_services.inpatient.patient_file.secg_request_form');
    }
    public function treatment_sheet($patient_id)
    {
        $treatment_sheet_results =administration_patient_information::find($patient_id)->clinicalservices_treatmentsheet->where('institution_id',$this->authenticated_user->institution->id);
        $patient=administration_patient_information::find($patient_id);
        return view('departments.clinical_services.inpatient.patient_file.treatment_sheet',['treatment_sheet_results' => $treatment_sheet_results,'patient_id'=>$patient_id, 'patient'=>$patient]);
    }
    public function treatment_sheet_post($patient_id){
        $treatment_sheet = new clinicalservices_treatmentsheet(Input::all());
        $treatment_sheet->save();
        return redirect(route('treatment_sheet',['patient_id' => $patient_id]));
    }
    public function opthalmic_general_examination_form()
    {
        return view('departments.clinical_services.inpatient.patient_file.opthalmic_general_examination_form');
    }

    public function pharmacy_withdrawal_form($patient_id)
    {
        $pharmacy_withdrawal_form_results =administration_patient_information::find($patient_id)->clinical_services_pharmacy_withdrawal_form->where('institution_id',$this->authenticated_user->institution->id);
        $patient=administration_patient_information::find($patient_id);
        return view('departments.clinical_services.inpatient.patient_file.pharmacy_withdrawal_form',['pharmacy_withdrawal_form_results' => $pharmacy_withdrawal_form_results,'patient_id'=>$patient_id, 'patient'=>$patient]);

    }
    public function pharmacy_withdrawal_form_post($patient_id)
    {
        $pharmacy_withdrawal_form = new clinical_services_pharmacy_withdrawal_form(Input::all());
        $pharmacy_withdrawal_form->save();
        return redirect(route('pharmacy_withdrawal_form',['patient_id' => $patient_id]));

    }

    public function nursing_notes($patient_id)
    {
        $nursing_notes_results =administration_patient_information::find($patient_id)->clinicalservices_nursing->where('institution_id',$this->authenticated_user->institution->id);
        $patient=administration_patient_information::find($patient_id);
        return view('departments.clinical_services.inpatient.patient_file.nursing_notes',['nursing_notes_results' => $nursing_notes_results,'patient_id'=>$patient_id, 'patient'=>$patient]);

    }
    public function nursing_notes_post($patient_id)
    {
        $nursing_notes = new clinicalservices_nursing(Input::all());
        $nursing_notes->save();
        return redirect(route('nursing_notes',['patient_id' => $patient_id]));
    }

    public function pressure_score_card($patient_id)
    {
        $pressure_score_card_results= administration_patient_information::find($patient_id)->pressure_score_card->where('institution_id',$this->authenticated_user->institution->id);
        $patient=administration_patient_information::find($patient_id);
        return view('departments.clinical_services.inpatient.patient_file.pressurescoresrecordcard',[
            'pressure_score_card_results'=>$pressure_score_card_results,
            'patient_id'=>$patient_id,
            'patient'=>$patient,
        ]);
    }
    public function pressure_score_card_post ($patient_id)
    {
        $pressure_score_card = new clinicalservices_presuresorescorecard(Input::all());
        $pressure_score_card->save();
        return redirect(route('pressure_score_card',['patient_id'=>$patient_id]));
    }

    //patient file posts

    public function nursingcareform_post($patient_id)
    {
        $nursingcareform = new clinicalservices_nursingcareform(Input::all());
        $nursingcareform->save();
        return redirect(route('nursingcareform',['patient_id' => $patient_id] ));
    }

    public function morphine_post($patient_id)
    {
        $morphine = new clinicalservices_morphine(Input::all());
        $morphine->save();
        return redirect(route('morphine',['patient_id' => $patient_id] ));
    }
    public function nursing_post($patient_id)
    {
        $nursing = new clinicalservices_nursing(Input::all());
        $nursing->save();
        return redirect(route('nursing',['patient_id' => $patient_id] ));
    }

    public function inpatient_nutrition_care_register_post()
    {
        $inpatient_nutrition_care_register = new clinicalservices_inpatientnutritioncareregister(Input::all());
        $inpatient_nutrition_care_register->save();
        return redirect(route('inpatient_nutrition_care_register'));
    }

    public function adult_feeding_post()
    {
        $adult = new clinicalservices_adultfeedingchart(Input::all());
        $adult->save();
        return redirect(route('adult_feeding'));
    }



    public function medical_icu_icu_hdu()
    {
        return view('departments.clinical_services.inpatient.medical_services.icu_hdu.medical_icu_hdu');
    }

    public function medical_medical_ward()
    {
        return view('departments.clinical_services.inpatient.medical_services.medical_ward.medical_medical_ward');
    }


    public function maternity_sheet()
    {
        return view('departments/clinical_services/inpatient/paediatric/maternity_sheet');
    }



    //patient file
    public function patient_file_home()
    {
        return view('departments/clinical_services/inpatient/patient_file/patient_file');
    }
























    public function canregdata()
    {
        $cancer_files_results= DB::table('cancer_files')->latest()->get();
        return view('departments.clinical_services.canreg.cancer_file_upload',['cancer_files_results'=>$cancer_files_results]);
    }

    public function canregimport()
    {
        return view('departments.clinical_services.canreg.canregimport');
    }
    public function canregimport_post()
    {
        Excel\Excel::load(Input::file("health_facility_file"),function($reader){
            $reader->each(function($sheet){
                cancer_file::firstOrCreate($sheet->toArray());
            });
        });
    }
    public function canregdata_post(Request $request)
    {

        $uploadedFile = $request->file('health_facility_file');
        //$path=$request->file('health_facility_file')->store('uploads/canreg');

        if ($uploadedFile->isValid())
        {
            $fileName=time().'.'.$uploadedFile->getClientOriginalExtension();
            $path = $uploadedFile->storeAs('canreg', $fileName, 'uploads');
            echo $path;
        }

        $cancer_file = new cancer_file
        (
            [
                'date'=>request('date'),
                'health_facility_name'=>request('health_facility_name'),
                'health_facility_location'=>request('health_facility_location'),
                'administration_patient_informations_id'=>request('administration_patient_informations_id'),
                'institution_id'=>request('institution_id'),
                'user_id'=>request('user_id'),
                'health_facility_file'=>$fileName,
            ]
        );
        $cancer_file->save();

        return redirect(route('canregdata'));


    }



    public function clinicalservices_outpatient_home()
    {
        return view('departments.clinical_services.clinicalservices_outpatient');
    }
    public function clinicalservices_outpatient_doctorsoffice()
    {
        return view('departments.clinical_services.clinicalservices_oupatient_doctorsoffice');
    }
    public function clinicalservices_outpatient_emergencydpt()
    {
        return view('departments.clinical_services.clinicalservices_oupatient_emergencydpt');
    }
    public function clinicalservices_outpatient_orthoepedicdpt()
    {
        return view('departments.clinical_services.inpatient.patient_file.patient_file');
    }
    public function clinicalservices_outpatient_nutritiondpt()
    {
        return view('departments.clinical_services.inpatient.patient_file.patient_file');
    }
    public function clinicalservices_outpatient_occupationaldpt()
    {
        return view('departments.clinical_services.inpatient.patient_file.patient_file');
    }
    public function clinicalservices_outpatient_physiotherapy()
    {
        return view('departments.clinical_services.inpatient.patient_file.patient_file');
    }
    public function clinicalservices_outpatient_dental()
{
    return view('departments.clinical_services.inpatient.patient_file.patient_file');
}
    public function wellbabyclinic()
    {
        return view('departments.clinical_services.inpatient.patient_file.patient_file');
    }
    public function earnosethroat()
    {
        return view('departments.clinical_services.inpatient.patient_file.patient_file');
    }
    public function meadicaloutpatient()
    {
        return view('departments.clinical_services.inpatient.patient_file.patient_file');
    }
    public function gynecology()
    {
        return view('departments.clinical_services.inpatient.patient_file.patient_file');
    }
    public function pediatricoutpatient()
    {
        return view('departments.clinical_services.inpatient.patient_file.patient_file');
    }
    public function surgicaloutpatient()
    {
        return view('departments.clinical_services.inpatient.patient_file.patient_file');
    }
    public function opthalmicclinic()
    {
        return view('departments.clinical_services.inpatient.patient_file.patient_file');
    }
    public function tbclinic()
    {
        return view('departments.clinical_services.inpatient.patient_file.patient_file');
    }
    public function clinicalservices_outpatient_outpatientclinic()
{
    return view('departments.clinical_services.clinicalservices_oupatient_outpatientclinic');
}
    public function doctorsoffice_administration()
    {
        return view('departments.clinical_services.doctorsoffice_administration');
    }
    public function doctorsoffice_clinical()
    {
        return view('departments.clinical_services.doctorsoffice_clinical');
    }
    public function doctorsoffice_billing()
    {
        return view('departments.clinical_services.doctorsoffice_billing');
    }
    public function doctorsoffice_patientprofile()
    {
        return view('departments.clinical_services.doctorsoffice_patientprofile');
    }
    public function doctorsoffice_report()
    {
        return view('departments.clinical_services.doctorsoffice_report');
    }
    public function doctors_administration_registration()
    {
        return view('departments.clinical_services.administration_registration');
    }
    public function doctors_administration_scheduling()
    {
        return view('departments.clinical_services.administration_scheduling');
    }
    public function doctors_administration_appointments()
    {
        return view('departments.clinical_services.administration_appointments');
    }
    public function doctors_administration_attendance()
    {
        return view('departments.clinical_services.administration_attendances');
    }
    public function doctors_administration_alerts()
    {
        return view('departments.clinical_services.administration_alerts');
    }
    public function doctors_administration_reminders()
    {
        return view('departments.clinical_services.administration_reminders');
    }
    public function clinical_consultationform()
    {
        return view('departments.clinical_services.clinical_consultationform');
    }
    public function clinical_consultationrequestform()
    {
        return view('departments.clinical_services.clinical_consultationrequestform');
    }

    public function clinical_radiologurequest()
    {
        return view('departments.clinical_services.clinical_radiologurequest');
    }
    public function clinical_radiologyreportsheet()
    {
        return view('departments.clinical_services.clinical_radiologyreport');
    }
    public function clinical_labrequest()
    {
        return view('departments.clinical_services.clinical_labrequest');
    }
    public function clinical_labreport()
    {
        return view('departments.clinical_services.clinical_labreport');
    }
    public function doctorsoffice_billling()
    {
        return view('departments.clinical_services.doctorsoffice_billling');
    }
    public function doctorsoffice_invoicing()
    {
        return view('departments.clinical_services.doctorsoffice_invoicing');
    }
    public function triage($patient_id)
    {
        $triage_results=administration_patient_information::find($patient_id)->triage;

        $patient=administration_patient_information::find($patient_id);

        return view('departments.clinical_services.inpatient.patient_file.triage',[
            'triage_results'=>$triage_results,'patient_id'=>$patient_id, 'patient'=>$patient
        ]);

    }
    public function triage_post($patient_id)
    {
        $triage = new triage(Input::all());
        $triage->save();
        return redirect(route('triage',['patient_id' => $patient_id]));
    }
    public function immunization_room()
    {
        return view('departments.clinical_services.inpatient.patient_file.patient_file');
    }
    public function injection_room()
    {
        return view('departments.clinical_services.inpatient.patient_file.patient_file');
    }

    public function minor_theatre()
    {
        return view('departments.clinical_services.inpatient.patient_file.patient_file');
    }

    public function clinicalservices_home()
    {
        return view('departments.clinical_services.clinicalservices');
    }



    public function ent_services()
    {
        return view('departments.clinical_services.inpatient.ent_services.ent_services');
    }public function maternity_home()
    {
    return view('departments.clinical_services.inpatient.maternity_services.maternity');
    }
    public function medical_home()
    {
    return view('departments.clinical_services.inpatient.medical_services.medical');
    }
    public function nutrition_home()
    {
    return view('departments.clinical_services.inpatient.nutrition.nutrition');
    }
    public function oncology()
    {
    return view('departments.clinical_services.inpatient.oncology.oncology');
    }
    public function ophthalmic()
    {
    return view('departments.clinical_services.inpatient.ophthalmic.ophthalmic');
    }
    public function ot_home()
    {
    return view('departments.clinical_services.inpatient.ot.ot');
    }
    public function paediatric_home()
    {
    return view('departments.clinical_services.inpatient.paediatric.paediatric');
    }
    public function physiotherapy_home()
    {
    return view('departments.clinical_services.inpatient.physiotherapy.physiotherapy');
    }
    public function renal()
    {
    return view('departments.clinical_services.inpatient.renal.renal');
    }
    public function surgical_home()
    {
        return view('departments.clinical_services.inpatient.surgical.surgical');
    }
    public function canreg_analytics()
    {
        return view('departments.clinical_services.canreg_imports.canreg_analytics');
    }
    public function theater_form()
    {
        return view('departments.clinical_services.inpatient.surgical.anaesthesia.theater_form');
    }
//    public function consent_form(){
//        return view('departments.clinical_services.inpatient.surgical.anaesthesia.consent_form');
//    }
    public function operative_checklist(){
        return view('departments.clinical_services.inpatient.surgical.anaesthesia.operative_checklist');
    }








    public function consultant_clinic(){
        return view('departments.clinical_services.outpatient.consultant_clinic_doctors_office.consultant_clinic');
    }public function general_outpatient(){
    return view('departments.clinical_services.outpatient.general_outpatient.general_outpatient');
    }
    public function outpatient_clinics(){
    return view('departments.clinical_services.outpatient.outpatient_clinics.outpatient_clinics');
    }
    public function adult_feeding(){
    return view('departments.clinical_services.inpatient.nutrition.adult_feeding_chart');
    }
    public function inpatient_nutrition(){
    return view('departments.clinical_services.inpatient.nutrition.inpatient_nutrition_care_register');
    }
    public function moh301(){
    return view('departments.clinical_services.inpatient.nutrition.moh301');}
    public function moh303(){
        return view('departments.clinical_services.inpatient.nutrition.moh301');
    }
    public function moh717(){
    return view('departments.clinical_services.inpatient.nutrition.moh717');
    }
//    public function prescription_form(){
//    return view('departments.clinical_services.inpatient.nutrition.prescription_form');
//    }

    public function morning_and_evening_temp_chart($patient_id)
    {    $morning_and_evening_temp_chart =administration_patient_information::find($patient_id)->morning_everning_temp->where('institution_id',$this->authenticated_user->institution->id);
        $patient=administration_patient_information::find($patient_id);
        return view('departments.clinical_services.inpatient.patient_file.morning_and_evening_temp_chart',[
            'morning_and_evening_temp_chart'=> $morning_and_evening_temp_chart,'patient_id'=>$patient_id, 'patient'=>$patient
        ]);
    }

    public function morning_and_evening_temp_chart_post($patient_id)
    {
        $morning_and_evening_temp_chart_post = new morning_everning_temp(Input::all());
        $morning_and_evening_temp_chart_post->save();
        return redirect(route('morning_and_evening_temp_chart',['patient_id' => $patient_id]));

    }
    public function pulse_chart($patient_id)
    {    $pulse_chart =administration_patient_information::find($patient_id)->pulse_chart->where('institution_id',$this->authenticated_user->institution->id);
        $patient=administration_patient_information::find($patient_id);
        return view('departments.clinical_services.inpatient.patient_file.pulse_chart',['pulse_chart'=> $pulse_chart,'patient_id'=>$patient_id, 'patient'=>$patient]);
    }

    public function pulse_chart_post($patient_id)
    {
        $pulse_chart_post = new pulse_chart(Input::all());
        $pulse_chart_post->save();
        return redirect(route('pulse_chart',['patient_id' => $patient_id]));

    }
    public function four_hourly_temp_chart($patient_id)
    {
        $four_hourly_temp_charts =administration_patient_information::find($patient_id)->four_hourly_temp_chart->where('institution_id',$this->authenticated_user->institution->id);
        $patient=administration_patient_information::find($patient_id);
        return view('departments.clinical_services.inpatient.patient_file.four_hourly_temp_chart',[
            'four_hourly_temp_charts'=>$four_hourly_temp_charts,'patient_id'=>$patient_id, 'patient'=>$patient
        ]);
    }

     public function four_hourly_temp_chart_post($patient_id)
        {
            $four_hourly_temp_chart_var = new four_hourly_temp_chart(Input::all());
            $four_hourly_temp_chart_var->save();
            return redirect(route('four_hourly_temp_chart',['patient_id' => $patient_id]));

        }


    public function blood_pressure_chart($patient_id)
    {
        $blood_pressure_chart =administration_patient_information::find($patient_id)->blood_pressure_chart->where('institution_id',$this->authenticated_user->institution->id);
        $patient=administration_patient_information::find($patient_id);
        return view('departments.clinical_services.inpatient.patient_file.blood_pressure_chart',[
            'blood_pressure_chart'=>$blood_pressure_chart,'patient_id'=>$patient_id, 'patient'=>$patient
        ]);

    }
    public function blood_pressure_chart_post($patient_id)
    {
        $blood_pressure_chart = new blood_pressure_chart(Input::all());
        $blood_pressure_chart->save();
        return redirect(route('blood_pressure_chart',['patient_id' => $patient_id]));
    }
    public function patient_charge_sheet_home()
    {
        return view('departments.clinical_services.inpatient.patient_charge_sheet.patient_charge_sheet');
    }

    public function patient_file_infant_record_post()
    {
        $banking = new patient_file_infant_record(Input::all());
        $banking->save();
        return redirect(route('infant_record'));
    }
    public function infant_record()
    {
        $infant_record_results = DB::table('patient_file_infant_records')->get();
        return view('departments.clinical_services.inpatient.patient_file.infant_record',[
            'infant_record_results'=>$infant_record_results
        ]);
    }
    public function patient_file_diet_requisition_post()
    {
        $banking = new patient_file_diet_requisition_sheet(Input::all());
        $banking->save();
        return redirect(route('diet_requisition_sheet'));
    }
    public function diet_requisition_sheet()
    {
        $diet_requisition_sheet_results = DB::table('patient_file_diet_requisition_sheets')->get();
        return view('departments.clinical_services.inpatient.patient_file.diet_requisition_sheet',[
            'diet_requisition_sheet_results'=>$diet_requisition_sheet_results
        ]);
    }

    /*Start Paul*/
    public function orthopaedic_examination_form_post($patient_id)
    {
        $banking = new patient_file_orthopeadic_clinic(Input::all());
        $banking->save();
        return redirect(route('orthopaedic_examination_form',['patient_id' => $patient_id] ));
    }
    public function orthopaedic_examination_form($patient_id)
    {
        $orthopaedic_examination_form_results=administration_patient_information::find($patient_id)->patient_file_orthopeadic_clinic->where('institution_id',$this->authenticated_user->institution->id);
        $patient=administration_patient_information::find($patient_id);
        return view('departments.clinical_services.inpatient.patient_file.orthopaedic_examination_form',[
            'orthopaedic_examination_form_results'=>$orthopaedic_examination_form_results,'patient_id'=>$patient_id, 'patient'=>$patient
        ]);
    }
    public function orthopaedic_examination_test_post($patient_id)
    {
        $banking = new patient_file_orthopedic_tests(Input::all());
        $banking->save();
        return redirect(route('orthopaedic_examination_test',['patient_id' => $patient_id]));
    }
    public function orthopaedic_examination_test($patient_id)
    {
        $orthopedic_tests_results=administration_patient_information::find($patient_id)->patient_file_orthopedic_tests->where('institution_id',$this->authenticated_user->institution->id);
        $patient=administration_patient_information::find($patient_id);
        return view('departments.clinical_services.inpatient.patient_file.patient_file_orthopeadic_tests',[
            'orthopedic_tests_results'=>$orthopedic_tests_results,'patient_id'=>$patient_id, 'patient'=>$patient
        ]);
    }
    public function orthopaedic_examination_patient_standing_post($patient_id)
    {
        $banking = new patient_file_orthopedic_patient_standing(Input::all());
        $banking->save();
        return redirect(route('orthopaedic_examination_patient_standing',['patient_id' => $patient_id]));
    }
    public function orthopaedic_examination_patient_standing($patient_id)
    {
        $orthopaedic_examination_patient_standing_results=administration_patient_information::find($patient_id)->patient_file_orthopedic_patient_standing->where('institution_id',$this->authenticated_user->institution->id);
        $patient=administration_patient_information::find($patient_id);
        return view('departments.clinical_services.inpatient.patient_file.patient_file_orthopeadic_patient_standing',[
            'orthopaedic_examination_patient_standing_results'=>$orthopaedic_examination_patient_standing_results,'patient_id'=>$patient_id, 'patient'=>$patient
        ]);
    }
    public function orthopaedic_examination_length_of_motion_post($patient_id)
    {
        $banking = new patient_file_orthopedic_limbular_range_in_motion(Input::all());
        $banking->save();
        return redirect(route('orthopaedic_examination_length_of_motion',['patient_id' => $patient_id]));
    }
    public function orthopaedic_examination_length_of_motion($patient_id)
    {
        $orthopaedic_examination_length_of_motion_results=administration_patient_information::find($patient_id)->patient_file_orthopedic_limbular_range_in_motion->where('institution_id',$this->authenticated_user->institution->id);
        $patient=administration_patient_information::find($patient_id);
        return view('departments.clinical_services.inpatient.patient_file.patient_file_limbular_range_in_motion',[
            'orthopaedic_examination_length_of_motion_results'=>$orthopaedic_examination_length_of_motion_results,'patient_id'=>$patient_id, 'patient'=>$patient
        ]);
    }
    public function oncology_cbe_results_case_management($patient_id)
    {
        $oncology_cbe_results_case_management_results=administration_patient_information::find($patient_id)->patient_file_oncology_cbe_results_case_management_form->where('institution_id',$this->authenticated_user->institution->id);
        $patient=administration_patient_information::find($patient_id);
        return view('departments.clinical_services.inpatient.patient_file.oncology_cbe_results_case_management',[
            'oncology_cbe_results_case_management_results'=>$oncology_cbe_results_case_management_results,'patient_id'=>$patient_id, 'patient'=>$patient
        ]);
    }
    public function oncology_cbe_results_case_management_post($patient_id)
    {
        $banking = new patient_file_oncology_cbe_results_case_management_form(Input::all());
        $banking->save();
        return redirect(route('oncology_cbe_results_case_management',['patient_id' => $patient_id]));
    }
    public function oncology_cbe_results_discrete_mass($patient_id)
    {
        $oncology_cbe_results_discrete_mass_results=administration_patient_information::find($patient_id)->patient_file_oncology_cbe_results_discrete_mass->where('institution_id',$this->authenticated_user->institution->id);
        $patient=administration_patient_information::find($patient_id);
        return view('departments.clinical_services.inpatient.patient_file.oncology_cbe_results_discrete_mass',[
            'oncology_cbe_results_discrete_mass_results'=>$oncology_cbe_results_discrete_mass_results,'patient_id'=>$patient_id, 'patient'=>$patient
        ]);
    }
    public function oncology_cbe_results_discrete_mass_post($patient_id)
    {
        $banking = new patient_file_oncology_cbe_results_discrete_mass(Input::all());
        $banking->save();
        return redirect(route('oncology_cbe_results_discrete_mass',['patient_id' => $patient_id]));
    }
    public function oncology_cbe_results_examination_form($patient_id)
    {
        $oncology_cbe_results_examination_forms_results=administration_patient_information::find($patient_id)->patient_file_oncology_cbe_results_examination_form->where('institution_id',$this->authenticated_user->institution->id);
        $patient=administration_patient_information::find($patient_id);
        return view('departments.clinical_services.inpatient.patient_file.oncology_cbe_results_examination_form',['oncology_cbe_results_examination_forms_results'=>$oncology_cbe_results_examination_forms_results,'patient_id'=>$patient_id, 'patient'=>$patient]);
    }
    public function oncology_cbe_results_examination_form_post($patient_id)
    {
        $banking = new patient_file_oncology_cbe_results_examination_form(Input::all());
        $banking->save();
        return redirect(route('oncology_cbe_results_examination_form',['patient_id' => $patient_id]));
    }
    public function oncology_cbe_results_overall_summary($patient_id)
    {
        $oncology_cbe_results_overall_results=administration_patient_information::find($patient_id)->patient_file_oncology_cbe_results_overall_summary->where('institution_id',$this->authenticated_user->institution->id);
        $patient=administration_patient_information::find($patient_id);
        return view('departments.clinical_services.inpatient.patient_file.oncology_cbe_results_overall_summary',[
            'oncology_cbe_results_overall_results'=>$oncology_cbe_results_overall_results,'patient_id'=>$patient_id, 'patient'=>$patient
        ]);
    }
    public function oncology_cbe_results_overall_summary_post($patient_id)
    {
        $banking = new patient_file_oncology_cbe_results_overall_summary(Input::all());
        $banking->save();
        return redirect(route('oncology_cbe_results_overall_summary',['patient_id' => $patient_id]));
    }
    public function oncology_cbe_results_physical_exam($patient_id)
    {
        $oncology_cbe_results_physical_exams_results=administration_patient_information::find($patient_id)->patient_file_oncology_cbe_results_physical_exam->where('institution_id',$this->authenticated_user->institution->id);
        $patient=administration_patient_information::find($patient_id);
        return view('departments.clinical_services.inpatient.patient_file.oncology_cbe_results_physical_exam',[
            'oncology_cbe_results_physical_exams_results'=>$oncology_cbe_results_physical_exams_results,'patient_id'=>$patient_id, 'patient'=>$patient
        ]);
    }
    public function oncology_cbe_results_physical_exam_post($patient_id)
    {
        $banking = new patient_file_oncology_cbe_results_physical_exam(Input::all());
        $banking->save();
        return redirect(route('oncology_cbe_results_physical_exam',['patient_id' => $patient_id]));
    }
    public function ear_nose_throat_examination_form_post($patient_id)
    {
        $banking = new patient_file_ear_nose_throat_examination_form(Input::all());
        $banking->save();
        return redirect(route('ear_nose_throat_examination_form',['patient_id' => $patient_id]));
    }
    public function ear_nose_throat_examination_form($patient_id)
    {
        $ear_nose_throat_examination_form_results=administration_patient_information::find($patient_id)->patient_file_ear_nose_throat_examination_form->where('institution_id',$this->authenticated_user->institution->id);
        $patient=administration_patient_information::find($patient_id);
        return view('departments.clinical_services.inpatient.patient_file.ear_nose_throat_examination_form',[
            'ear_nose_throat_examination_form_results'=>$ear_nose_throat_examination_form_results,'patient'=>$patient,'patient_id'=>$patient_id
        ]);
    }
    public function dental_examination_form_post($patient_id)
    {
        $banking = new patient_file_dental_examination_form(Input::all());
        $banking->save();
        return redirect(route('dental_examination_form',['patient_id' => $patient_id]));
    }
    public function dental_examination_form($patient_id)
    {
        $dental_examination_form_results=administration_patient_information::find($patient_id)->patient_file_dental_examination_form->where('institution_id',$this->authenticated_user->institution->id);
        $patient=administration_patient_information::find($patient_id);
        return view('departments.clinical_services.inpatient.patient_file.dental_examination_form',[
            'dental_examination_form_results'=>$dental_examination_form_results,'patient'=>$patient,'patient_id'=>$patient_id
        ]);
    }

    public function patient_file_diet_sheet_post($patient_id)
    {
        $banking = new patient_file_diet_sheets(Input::all());
        $banking->save();
        return redirect(route('diet_sheet',['patient_id' => $patient_id] ));
    }
    public function diet_sheet($patient_id)
    {
        $diet_sheet_results=administration_patient_information::find($patient_id)->patient_file_diet_sheets->where('institution_id',$this->authenticated_user->institution->id);
        $patient=administration_patient_information::find($patient_id);
        return view('departments.clinical_services.inpatient.patient_file.diet_sheet',[
            'diet_sheet_results'=>$diet_sheet_results,'patient_id'=>$patient_id, 'patient'=>$patient
        ]);
    }
    public function patient_file_nutrition_care_post($patient_id)
    {
        $banking = new patient_file_nutrition_care_process_form(Input::all());
        $banking->save();
        return redirect(route('nutrition_care_process_form',['patient_id' => $patient_id]));
    }
    public function nutrition_care_process_form($patient_id)
    {
        $nutrition_care_process_form_results=administration_patient_information::find($patient_id)->patient_file_nutrition_care_process_form->where('institution_id',$this->authenticated_user->institution->id);
        $patient=administration_patient_information::find($patient_id);
        return view('departments.clinical_services.inpatient.patient_file.nutrition_care_process_form',[
            'nutrition_care_process_form_results'=>$nutrition_care_process_form_results,'patient'=>$patient,'patient_id'=>$patient_id
        ]);
    }
    public function patient_file_occupational_therapy_initial_assessment__post($patient_id)
    {
        $banking = new patient_file_occupational_therapy_initial_assessment_form(Input::all());
        $banking->save();
        return redirect(route('occupational_therapy_initial_assessment_form',['patient_id' => $patient_id]));
    }
    public function occupational_therapy_initial_assessment_form($patient_id)
    {
        $occupational_therapy_initial_assessment_form_results=administration_patient_information::find($patient_id)->patient_file_occupational_therapy_initial_assessment_form->where('institution_id',$this->authenticated_user->institution->id);
        $patient=administration_patient_information::find($patient_id);
        return view('departments.clinical_services.inpatient.patient_file.occupational_therapy_initial_assessment_form',[
            'occupational_therapy_initial_assessment_form_results'=>$occupational_therapy_initial_assessment_form_results,'patient'=>$patient,'patient_id'=>$patient_id
        ]);
    }
    /*End Paul*/

    public function request_for_post_modern_examination_post()
    {
        $banking = new patient_file_request_for_mortem_examination(Input::all());
        $banking->save();
        return redirect(route('request_for_post_modern_examination'));
    }
    public function request_for_post_modern_examination()
    {
        $request_for_mortem_examination_results = DB::table('patient_file_request_for_mortem_examinations')->get();
        return view('departments.clinical_services.inpatient.patient_file.request_for_post_modern_examination',['request_for_mortem_examination_results'=>$request_for_mortem_examination_results]);
    }

    //LAMECH

    //radiology_report_sheet_patient_file
    public function radiology_report_sheet_patient_file($patient_id)
    {
        $radiology_report_sheet_results =administration_patient_information::find($patient_id)->clinicalservices_radiology_report_sheets->where('institution_id',$this->authenticated_user->institution->id);
        $patient=administration_patient_information::find($patient_id);
        return view('departments.clinical_services.inpatient.patient_file.radiology_report_sheet',['radiology_report_sheet_results' => $radiology_report_sheet_results,'patient_id'=>$patient_id, 'patient'=>$patient]);
    }
    public function radiology_report_sheet_patient_file_post($patient_id)
    {
        $radiology_report_sheet = new clinicalservices_radiology_report_sheet(Input::all());
        $radiology_report_sheet->save();
        return redirect(route('radiology_report_sheet_patient_file',['patient_id' => $patient_id]));
    }

    //laboratoryrequestform
    public function laboratoryrequestform($patient_id)
    {
        $laboratoryrequestform_results = DB::table('clinicalservices_labrequestforms')->get();
        $laboratoryrequestform_result =administration_patient_information::find($patient_id)->clinicalservices_labrequestform;
        $patient=administration_patient_information::find($patient_id);
        return view('departments.clinical_services.inpatient.patient_file.laboratoryrequestform',['laboratoryrequestform_results' => $laboratoryrequestform_results,'patient_id'=>$patient_id, 'patient'=>$patient,'laboratoryrequestform_result' => $laboratoryrequestform_result]);
    }
    public function laboratoryrequestform_post($patient_id)
    {
        $laboratoryrequestform = new clinicalservices_labrequestform(Input::all());
        $laboratoryrequestform->save();
        return redirect(route('laboratoryrequestform',['patient_id' => $patient_id]));
    }

    //laboratory_report_sheet_patient_file
    public function laboratory_report_sheet_patient_file($patient_id)
    {
        $laboratoryrequestform_results =administration_patient_information::find($patient_id)->clinicalservices_labrequestforms->where('institution_id',$this->authenticated_user->institution->id);
        $patient=administration_patient_information::find($patient_id);
        return view('departments.clinical_services.inpatient.patient_file.laboratory_report_sheet',['laboratoryrequestform_results' => $laboratoryrequestform_results,'patient_id'=>$patient_id, 'patient'=>$patient]);
    }

    //blood_donation_request_form
    public function blood_donation_request_form($patient_id)
    {
        $blood_donation_request_form_results =administration_patient_information::find($patient_id)->clinicalservices_blood_donation_requestforms->where('institution_id',$this->authenticated_user->institution->id);
        $patient=administration_patient_information::find($patient_id);
        return view('departments.clinical_services.inpatient.patient_file.blood_donation_request_form',['blood_donation_request_form_results' => $blood_donation_request_form_results,'patient_id'=>$patient_id, 'patient'=>$patient]);

    }
    public function blood_donation_request_form_post($patient_id)
    {
        $blood_donation_request_form = new clinicalservices_blood_donation_requestform(Input::all());
        $blood_donation_request_form->save();
        return redirect(route('blood_donation_request_form',['patient_id' => $patient_id]));

    }

    //eeg_report
    public function eeg_report($patient_id)
    {
        $eeg_report_results =administration_patient_information::find($patient_id)->clinicalservices_eeg_reports->where('institution_id',$this->authenticated_user->institution->id);
        $patient=administration_patient_information::find($patient_id);
        return view('departments.clinical_services.inpatient.patient_file.eeg_report',['eeg_report_results' => $eeg_report_results,'patient_id'=>$patient_id, 'patient'=>$patient]);
    }
    public function eeg_report_post($patient_id)
    {
        $eeg_report = new clinicalservices_eeg_report(Input::all());
        $eeg_report->save();
        return redirect(route('eeg_report',['patient_id' => $patient_id]));
    }

    //ecg_form
    public function ecg_form($patient_id)
    {
        $eeg_report_results =administration_patient_information::find($patient_id)->clinicalservices_ecgforms->where('institution_id',$this->authenticated_user->institution->id);
        $patient=administration_patient_information::find($patient_id);
        return view('departments.clinical_services.inpatient.patient_file.ecg_form',['eeg_report_results' => $eeg_report_results,'patient_id'=>$patient_id, 'patient'=>$patient]);
    }
    public function ecg_form_post($patient_id)
    {
        $ecg_form = new clinicalservices_ecgform(Input::all());
        $ecg_form->save();
        return redirect(route('ecg_form',['patient_id' => $patient_id]));
    }

    //consultation_request_form
    public function consultation_request_form($patient_id)
    {
        $consultation_request_form_results =administration_patient_information::find($patient_id)->clinicalservices_consultationrequestforms->where('institution_id',$this->authenticated_user->institution->id);
        $patient=administration_patient_information::find($patient_id);
        return view('departments.clinical_services.inpatient.patient_file.consultation_request_form',['consultation_request_form_results' => $consultation_request_form_results,'patient_id'=>$patient_id, 'patient'=>$patient]);
    }
    public function consultation_request_form_post($patient_id)
    {
        $consultation_request_form = new clinicalservices_consultationrequestform(Input::all());
        $consultation_request_form->save();
        return redirect(route('consultation_request_form',['patient_id' => $patient_id]));
    }

    //physicalexaminationonadmission
    public function physicalexaminationonadmission($patient_id)
    {
        $physicalexaminationonadmission_results =administration_patient_information::find($patient_id)->clinical_services_physicalexaminationonadmissions->where('institution_id',$this->authenticated_user->institution->id);
        $patient=administration_patient_information::find($patient_id);
        return view('departments.clinical_services.inpatient.patient_file.physical_examination_on_admission',['physicalexaminationonadmission_results' => $physicalexaminationonadmission_results,'patient_id'=>$patient_id, 'patient'=>$patient]);
    }
    public function physicalexaminationonadmission_post($patient_id)
    {
        $physicalexaminationonadmission = new clinical_services_physicalexaminationonadmission(Input::all());
        $physicalexaminationonadmission->save();
        return redirect(route('physicalexaminationonadmission',['patient_id' => $patient_id]));
    }

    //allergy_form
    public function allergy_form($patient_id)
    {
        $allergyform_results =administration_patient_information::find($patient_id)->clinical_services_allergyforms->where('institution_id',$this->authenticated_user->institution->id);
        $patient=administration_patient_information::find($patient_id);
        return view('departments.clinical_services.inpatient.patient_file.allergy_form',['allergyform_results' => $allergyform_results,'patient_id'=>$patient_id, 'patient'=>$patient]);
    }
    public function allergyform_post($patient_id)
    {
        $allergyform = new clinical_services_allergyform(Input::all());
        $allergyform->save();
        return redirect(route('allergy_form',['patient_id' => $patient_id]));
    }



    //sams work start here

    public function radio_therapy_treatment_form()
    {
        return view('departments.clinical_services.inpatient.patient_file.radio_therapy_treatment_form');
    }


    public function case_death($patient_id)
    {
        $case_death_results=administration_patient_information::find($patient_id)->clinicalservices_casedeathsummary->where('institution_id',$this->authenticated_user->institution->id);
        $patient=administration_patient_information::find($patient_id);
        return view('departments.clinical_services.inpatient.patient_file.case_death_summary',[
            'case_death_results'=>$case_death_results,'patient_id'=>$patient_id, 'patient'=>$patient
        ]);
    }


    public function case_death_post($patient_id)
    {
        $banking = new clinicalservices_casedeathsummary(Input::all());
        $banking->save();
        return redirect(route('case_death',['patient_id' => $patient_id] ));
    }

    public function request_for_palliative_care($patient_id)
    {
        $request_for_palliative_careh_results=administration_patient_information::find($patient_id)->patient_file_request_for_palliative_care->where('institution_id',$this->authenticated_user->institution->id);
        $patient=administration_patient_information::find($patient_id);

        return view('departments.clinical_services.inpatient.patient_file.request_for_palliative_care',[
            'request_for_palliative_careh_results'=>$request_for_palliative_careh_results,'patient_id'=>$patient_id, 'patient'=>$patient
        ]);
    }
    public function request_for_palliative_care_post($patient_id)
    {
        $banking = new patient_file_request_for_palliative_care(Input::all());
        $banking->save();
        return redirect(route('request_for_palliative_care' ,['patient_id' => $patient_id]));
    }



    public function accident_and_emergency($patient_id)
    {
        $accident_and_emergency_results = administration_patient_information::find($patient_id )->patient_file_accident_and_emergency->where('institution_id',$this->authenticated_user->institution->id);

        //get patient information also
        $patient=administration_patient_information::find($patient_id);
        return view('departments.clinical_services.inpatient.patient_file.accident_and_emergency',['accident_and_emergency_results' => $accident_and_emergency_results,
            'patient_id'=>$patient_id, 'patient'=>$patient
        ]);

    }
    public function accident_and_emergency_post($patient_id)
    {
        $accidents_and_emergency=new patient_file_accident_and_emergency(Input::all());
        $accidents_and_emergency->save();
        return redirect(route('accident_and_emergency' ,['patient_id' => $patient_id]));
    }


    public function initial_assessment_form($patient_id)
    {
        $initial_assessment_form_results = administration_patient_information::find($patient_id)->clinical_services_initial_assessment_form->where('institution_id',$this->authenticated_user->institution->id);
        //get patient information also
        $patient=administration_patient_information::find($patient_id);
        return view('departments.clinical_services.inpatient.patient_file.initial_assessment_form',['initial_assessment_form_results' => $initial_assessment_form_results
            , 'patient_id'=>$patient_id, 'patient'=>$patient
        ]);


    }
    public function initial_assessment_form_post($patient_id)
    {

        $initial_assessment_form = new clinical_services_initial_assessment_form(Input::all());
        $initial_assessment_form->save();
        return redirect(route('initial_assessment_form' ,['patient_id' => $patient_id]));

    }

    public function general_outpatient_card($patient_id)
    {
        return view('departments.clinical_services.inpatient.patient_file.general_outpatient_card');
    }

    public function maternity_records($patient_id)
    {
        $maternity_records = administration_patient_information::find($patient_id)->patient_file_maternity_records->where('institution_id',$this->authenticated_user->institution->id);
        //get patient information also
        $patient=administration_patient_information::find($patient_id);
        return view('departments/clinical_services/inpatient/patient_file/maternity_record',['maternity_records' => $maternity_records
            , 'patient_id'=>$patient_id, 'patient'=>$patient
        ]);


    }
    public function maternity_records_post($patient_id)
    {
        $maternity_records=new patient_file_maternity_records(Input::all());
        $maternity_records->save();
        return redirect(route('maternity_records' ,['patient_id' => $patient_id]));
    }

    public function initial_nursing_assessment_form($patient_id)
    {
        $initial_nursing_assessment_form_results = administration_patient_information::find($patient_id)->patient_file_initial_nursing_assessment->where('institution_id',$this->authenticated_user->institution->id);
        //get patient information also
        $patient=administration_patient_information::find($patient_id);
        return view('departments.clinical_services.inpatient.patient_file.initial_nursing_assessment_form',['initial_nursing_assessment_form_results' => $initial_nursing_assessment_form_results
            , 'patient_id'=>$patient_id, 'patient'=>$patient
        ]);

    }
    public function initial_nursing_assessment_form_post($patient_id)
    {
        $initial_nursing_assessment = new patient_file_initial_nursing_assessment(Input::all());
        $initial_nursing_assessment->save();
        return redirect(route('initial_nursing_assessment_form' ,['patient_id' => $patient_id]));

    }


    public function prescriptionform($patient_id)
    {
        $prescriptionform_results = administration_patient_information::find($patient_id)->clinicalservices_prescriptionform->where('institution_id',$this->authenticated_user->institution->id);
        //get patient information also
        $patient=administration_patient_information::find($patient_id);
        return view('departments.clinical_services.inpatient.patient_file.prescriptionform',['prescriptionform_results' => $prescriptionform_results
            ,'patient_id'=>$patient_id, 'patient'=>$patient
        ]);

    }

    public function prescription_form_post($patient_id)
    {
        $prescriptionform = new clinicalservices_prescriptionform(Input::all());
        $prescriptionform->save();
        return redirect(route('prescriptionform' ,['patient_id' => $patient_id]));
    }

    public function xray_request_form($patient_id)
    {
        $xray_request_form_results = administration_patient_information::find($patient_id)->clinicalservices_xrayrequestform->where('institution_id',$this->authenticated_user->institution->id);
        //get patient information also
        $patient=administration_patient_information::find($patient_id);


        return view('departments.clinical_services.inpatient.patient_file.xray_request_form',['xray_request_form_results' => $xray_request_form_results
            ,'patient_id'=>$patient_id, 'patient'=>$patient
        ]);


    }
    public function xray_request_form_post($patient_id)
    {
        $xray_request=new clinicalservices_xrayrequestform(Input::all());
        $xray_request->save();
        return redirect(route('xray_request_form',['patient_id' => $patient_id]));
    }


    public function send_department_links_post(Request $request, $patient_id)
    {
        $send_department_links=new send_department_link;
        $send_department_links->administration_patient_informations_id=$request->input('administration_patient_informations_id');
        $send_department_links->institution_id=$request->input('institution_id');
        $send_department_links->user_id=$request->input('user_id');
        $send_department_links->department_id=$request->input('department_id');
        $send_department_links->links=$request->input('links');
        $send_department_links->seen=$request->input('seen');
        $send_department_links->discharged=$request->input('discharged');
        $send_department_links->price=$request->input('price');
        $send_department_links->description=$request->input('description');
        $send_department_links->is_paid=0;

        $send_department_links->save();


        $select_patient=administration_patient_information::find($patient_id);
        $select_patient->current_department=$request->input('department_id');
        $select_patient->name=$request->name;
        $select_patient->title=$request->input('title');
        $select_patient->sex=$request->input('sex');
        $select_patient->married=$request->input('married');
        $select_patient->company=$request->input('company');
        $select_patient->district=$request->input('district');
        $select_patient->location=$request->input('location');
        $select_patient->birth_date=$request->input('birth_date');
        $select_patient->phone_number=$request->input('phone_number');
        $select_patient->sub_location=$request->input('sub_location');
        $select_patient->division=$request->input('division');
        $select_patient->village=$request->input('village');
        $select_patient->id_passport_no=$request->input('id_passport_no');
        $select_patient->next_of_kin_name=$request->input('next_of_kin_name');
        $select_patient->next_of_kin_relationship=$request->input('next_of_kin_relationship');
        $select_patient->phone_no=$request->input('phone_no');
        $select_patient->religion=$request->input('religion');
        $select_patient->occupation=$request->input('occupation');

        $department=$request->input('destination');

        $select_patient->save();



        session()->flash('message','Patient sent to Finance Department for Payment.');
        return Redirect::back();
    }
    public function bed()
    {
        $bed_results = bed::where('discharge','=','0')->get();
        return view('departments.ward_management.beds',['bed_results'=>$bed_results]);

    }
    public function bed_post()
    {
        if(request('discharge_ward_number')){
            $ward = ward::where('ward_number',request('discharge_ward_number'))->first();
            $ward->available += 1;
            $ward->save();

            $bed = bed::find(request('bed_id'));
            $bed->discharge = 1;
            $bed->save();

            return redirect(route('bed'));
        }

        $bed=new bed(Input::all());
        $bed->save();

        $ward = ward::where('ward_number',request('ward_number'))->first();
        $ward->available -= 1;
        $ward->save();

        return redirect(route('bed'));
    }


    public function wards()
    {
        $ward_results = ward::all();


        return view('departments.ward_management.wards',['ward_results'=>$ward_results]);
    }
    public function wards_post()
    {
        $ward=new ward(Input::all());
        $ward->available = request('total_number');
        $ward->save();
        return redirect(route('wards'));
    }

    public function wards_bed()
    {
        return view('departments.ward_management.wards_bed');
    }

    //ends here



}
