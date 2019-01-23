<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('auth.main');
});

Auth::routes();

Route::get('/home', ['uses'=>'HomeController@index', 'descriptive'=>'This is home page'])->name('home');


Route::prefix('finance')->group(function () {
    Route::get('/','FinanceController@index')->name('finance_home');

    Route::prefix('banking')->group(function(){

        Route::get('/','FinanceController@banking')->name('finance_banking');
        Route::post('/_post','FinanceController@banking_post')->name('finance_banking_post');

        Route::get('/bankandcreditcards','FinanceController@bankandcreditcards')->name('finance_banking_bankandcreditcards');
        Route::post('/bankandcreditcards_post','FinanceController@bankandcreditcards_post')->name('finance_banking_bankandcreditcards_post');

        Route::get('/bankrules','FinanceController@bankrules')->name('finance_banking_bankrules');
        Route::post('/bankrules_post','FinanceController@bankrules_post')->name('finance_banking_bankrules_post');

    });

    Route::get('/billing','FinanceController@billing')->name('finance_billing');
    Route::post('/billing_post','FinanceController@billing_post')->name('finance_billing_post');


    Route::get('/budgets','FinanceController@budgets')->name('finance_budgets');
    Route::get('/budgets_post','FinanceController@budgets_post')->name('finance_budgets_post');

    Route::get('/employees','FinanceController@employees')->name('finance_employees');
    Route::post('/employees_post','FinanceController@employees_post')->name('finance_employees_post');

    Route::prefix('expenses')->group(function (){
        Route::get('/','FinanceController@expenses')->name('finance_expenses');
        Route::post('/_post','FinanceController@expenses_post')->name('finance_expenses_post');

        Route::get('/addsupplier','FinanceController@expenses_addsupplier')->name('finance_expenses_addsupplier');
        Route::post('/addsupplier_post','FinanceController@expenses_addsupplier_post')->name('finance_expenses_addsupplier_post');

        Route::get('/addexpense','FinanceController@expenses_addexpense')->name('finance_expenses_addexpense');
        Route::post('/addexpense_post','FinanceController@expenses_addexpense_post')->name('finance_expenses_addexpense_post');

    });

    Route::get('/insurance','FinanceController@insurance')->name('finance_insurance');
    Route::post('/insurance_post','FinanceController@insurance_post')->name('finance_insurance_post');

    Route::get('/invoice','FinanceController@invoice')->name('finance_invoice');
    Route::get('/patient_payment','FinanceController@patient_payment')->name('patient_payment');
    Route::get('/process_payment/{id}','FinanceController@process_payment')->name('process_payment');
    Route::post('/invoice_post','FinanceController@invoice_post')->name('finance_invoice_post');

    Route::get('/invoice/{patient_id}','FinanceController@invoice_id')->name('finance_invoice_id');

    Route::prefix('sales')->group(function(){
        Route::get('/','FinanceController@sales')->name('finance_sales');
        Route::post('/_post','FinanceController@sales_post')->name('finance_sales_post');

        Route::get('/addcustomer','FinanceController@sales_add_customer')->name('finance_sales_add_customer');
        Route::post('/addcustomer_post','FinanceController@sales_add_customer_post')->name('finance_sales_add_customer_post');

        Route::get('/addproductservice','FinanceController@sales_add_product_service')->name('finance_sales_add_product_service');
        Route::post('/addproductservice_post','FinanceController@sales_add_product_service_post')->name('finance_sales_add_product_service_post');

        Route::get('/invoice','FinanceController@sales_invoice')->name('finance_sales_invoice');
        Route::post('/invoice_post','FinanceController@sales_invoice_post')->name('finance_sales_invoice_post');
    });

    Route::get('/reports','FinanceController@reports')->name('finance_reports');

    Route::prefix('taxes')->group(function (){
        Route::get('/','FinanceController@taxes')->name('finance_taxes');

        Route::get('addtax','FinanceController@add_tax')->name('finance_taxes_add');
        Route::post('addtax_post','FinanceController@add_tax_post')->name('finance_taxes_add_post');

    });

    Route::prefix('accounting')->group(function (){

        Route::get('/','FinanceController@accounting')->name('finance_accounting');

        Route::get('/add_account','FinanceController@add_account')->name('finance_accounting_add');
        Route::post('/add_account_post','FinanceController@add_account_post')->name('finance_accounting_add_post');

    });

});

//DIAGNOSTICS SERVICES
Route::prefix('publichealth')->group(function () {

    Route::get('/', 'PublicHealthController@index')->name('public_health_home');
});

    Route::prefix('diagnosticservices')->group(function ()
    {
    Route::get('/', 'DiagnosticServicesController@diagnosticservices')->name('diagnosticservices');

    Route::get('/laboratory_department', 'DiagnosticServicesController@laboratory_department')->name('laboratory_department');

    Route::get('/radiology_department', 'DiagnosticServicesController@radiology_department')->name('radiology_department');

    //Route::get('/generallabrequestform/{patient_id}', 'DiagnosticServicesController@generallabrequestform')->name('generallabrequestform');
    Route::get('generallabrequestform/{patient_id}',['uses'=>'DiagnosticServicesController@generallabrequestform','as'=>'generallabrequestform','pretty_name'=>'General Laboratory Request Form',]);
    Route::post('/generallabrequestform_post/{patient_id}', 'DiagnosticServicesController@generallabrequestform_post')->name('generallabrequestform_post');


    //Route::get('/moh240/{patient_id}', 'DiagnosticServicesController@moh240')->name('moh240');
    Route::get('moh240/{patient_id}',['uses'=>'DiagnosticServicesController@moh240','as'=>'moh240','pretty_name'=>'MOH 240',]);
    Route::post('/moh240_post/{patient_id}', 'DiagnosticServicesController@moh240_post')->name('moh240_post');

    //Route::get('/upload_xray_file/{patient_id}', 'DiagnosticServicesController@upload_xray_file')->name('upload_xray_file');
    Route::get('upload_xray_file/{patient_id}',['uses'=>'DiagnosticServicesController@upload_xray_file','as'=>'upload_xray_file','pretty_name'=>'Upload X-ray File',]);
    Route::post('/upload_xray_file_post/{patient_id}', 'DiagnosticServicesController@upload_xray_file_post')->name('upload_xray_file_post');


    //Route::get('/ecgrequestform/{patient_id}', 'DiagnosticServicesController@ecgrequestform')->name('ecgrequestform');
    Route::get('ecgrequestform/{patient_id}',['uses'=>'DiagnosticServicesController@ecgrequestform','as'=>'ecgrequestform','pretty_name'=>'ECG Request Form',]);
    Route::post('/ecgrequestform_post/{patient_id}', 'DiagnosticServicesController@ecgrequestform_post')->name('ecgrequestform_post');

    //Route::get('/moh209/{patient_id}', 'DiagnosticServicesController@moh209')->name('moh209');
    Route::get('moh209/{patient_id}',['uses'=>'DiagnosticServicesController@moh209','as'=>'moh209','pretty_name'=>'MOH 209',]);
    Route::post('/moh209_post/{patient_id}', 'DiagnosticServicesController@moh209_post')->name('moh209_post');

    //Route::get('/radiologyrequestform/{patient_id}', 'DiagnosticServicesController@radiologyrequestform')->name('radiologyrequestform');
    Route::get('radiologyrequestform/{patient_id}',['uses'=>'DiagnosticServicesController@radiologyrequestform','as'=>'radiologyrequestform','pretty_name'=>'Radiology Request Form',]);
    Route::post('/radiologyrequestform_post/{patient_id}', 'DiagnosticServicesController@radiologyrequestform_post')->name('radiologyrequestform_post');

  //Route::get('blood_donation_unit/{patient_id}', 'DiagnosticServicesController@blood_donation_unit')->name('blood_donation_unit');
  Route::get('blood_donation_unit/{patient_id}',['uses'=>'DiagnosticServicesController@blood_donation_unit','as'=>'blood_donation_unit','pretty_name'=>'Blood Donation unit',]);
  Route::post('blood_donation_unit_post/{patient_id}', 'DiagnosticServicesController@blood_donation_unit_post')->name('blood_donation_unit_post');

        //LAB ROLES

        //laboratory report sheet
        Route::get('laboratory_report_sheet/{patient_id}',['uses'=>'DiagnosticServicesController@laboratory_report_sheet','as'=>'laboratory_report_sheet','pretty_name'=>'Result:Pending:Laboratory Report Sheet',]);
        Route::post('laboratory_report_sheet_post/{patient_id}', 'DiagnosticServicesController@laboratory_report_sheet_post')->name('laboratory_report_sheet_post');

        //laboratory sample form
        Route::get('laboratory_sample_form/{patient_id}',['uses'=>'DiagnosticServicesController@laboratory_sample_form','as'=>'laboratory_sample_form','pretty_name'=>'Request:Pending:Sample Form',]);
        Route::post('laboratory_sample_form_post/{patient_id}', 'DiagnosticServicesController@laboratory_sample_form_post')->name('laboratory_sample_form_post');



    });

Route::prefix('farewellparlour')->group(function (){
    Route::get('/', 'FarewellPalourController@farewellpalour')->name('farewellparlour');

    Route::get('moh387', 'FarewellPalourController@moh387')->name('moh387');
    Route::post('moh387_post', 'FarewellPalourController@moh387_post')->name('moh387_post');
});

Route::prefix('clinicalservices')->group(function () {


    Route::get('/lab_current_dept','ClinicalServicesController@lab_current_dept')->name('lab_current_dept');
    Route::get('/radio_current_dept','ClinicalServicesController@radio_current_dept')->name('radio_current_dept');
    Route::get('/pharmacy_current_dept','ClinicalServicesController@pharmacy_current_dept')->name('pharmacy_current_dept');


    // CANCER MANAGEMENT
    Route::get('/cancer_management','ClinicalServicesController@clinical_services_cancer_management')->name('cancer_records_management');
    Route::post('/cancer_management_post','ClinicalServicesController@clinical_services_cancer_management_post')->name('cancer_records_management_post');
    Route::get('/canregdata','ClinicalServicesController@canregdata')->name('canregdata');
    Route::post('/canregdata_post','ClinicalServicesController@canregdata_post')->name('canregdata_post');
    Route::get('/canregimport','ClinicalServicesController@canregimport')->name('canregimport');
    Route::post('/canregimport_post','ClinicalServicesController@canregimport_post')->name('canregimport_post');
    Route::get('/canreg_analytics','ClinicalServicesController@canreg_analytics')->name('canreg_analytics');
    //OUTPATIENT NAVIGATION
    Route::prefix('outpatient')->group(function () {
            Route::get('/','ClinicalServicesController@clinicalservices_outpatient_home')->name('clinicalservices_outpatient_home');

    });
    // INPATIENT NAVIGATION
    Route::prefix('inpatient')->group(function () {

        Route::get('/','ClinicalServicesController@clinicalservices_inpatient_home')->name('clinicalservices_inpatient_home');

        Route::prefix('medical_services')->group(function (){
            Route::get('/','ClinicalServicesController@clinicalservices_ms_home')->name('clinicalservices_ms_home');

            Route::get('/medical_ward','ClinicalServicesController@patient_file_home')->name('clinicalservices_ms_medical_ward');
            Route::get('/renal_unit','ClinicalServicesController@patient_file_home')->name('clinicalservices_ms_renal_unit');
            Route::get('/oncology_unit','ClinicalServicesController@patient_file_home')->name('clinicalservices_ms_oncology_unit');
        });

        Route::prefix('surgical_services')->group(function (){
            Route::get('/','ClinicalServicesController@clinicalservices_ss_home')->name('clinicalservices_ss_home');

            Route::get('/surgical_ward','ClinicalServicesController@patient_file_home')->name('clinicalservices_ss_sw');
            Route::get('/burns_unit','ClinicalServicesController@patient_file_home')->name('clinicalservices_ss_bu');
            Route::get('/orthopaedic_unit','ClinicalServicesController@patient_file_home')->name('clinicalservices_ss_ou');
        });

        Route::prefix('paediatric_services')->group(function (){
            Route::get('/','ClinicalServicesController@clinicalservices_ps_home')->name('clinicalservices_ps_home');

            Route::get('/paediatric_ward','ClinicalServicesController@patient_file_home')->name('clinicalservices_ps_pw');
            Route::get('/new_born_unit','ClinicalServicesController@patient_file_home')->name('clinicalservices_ps_nbu');
            Route::get('/neonatal_intensive_care_unit','ClinicalServicesController@patient_file_home')->name('clinicalservices_ps_nicu');
        });

        Route::prefix('maternity_services')->group(function (){
            Route::get('/','ClinicalServicesController@clinicalservices_maternity_home')->name('clinicalservices_maternity_home');

            Route::prefix('labor_ward')->group(function (){
                Route::get('/','ClinicalServicesController@clinicalservices_maternity_lw')->name('clinicalservices_maternity_lw');

                Route::get('/pre_delivery_room','ClinicalServicesController@patient_file_home')->name('clinicalservices_maternity_pdr');
                Route::get('/delivery_room','ClinicalServicesController@patient_file_home')->name('clinicalservices_maternity_dr');
                Route::get('/post_delivery_room','ClinicalServicesController@patient_file_home')->name('clinicalservices_maternity_podr');
            });
            Route::get('/gynaecology_ward','ClinicalServicesController@patient_file_home')->name('clinicalservices_maternity_gw');
        });

        Route::prefix('critical_care_services')->group(function (){
            Route::get('/','ClinicalServicesController@clinicalservices_ccs_home')->name('clinicalservices_ccs_home');

            Route::get('/intensive_care_unit','ClinicalServicesController@patient_file_home')->name('clinicalservices_ccs_icu');
            Route::get('/high_dependency_unit','ClinicalServicesController@patient_file_home')->name('clinicalservices_ccs_hdu');
        });

        Route::prefix('anaesthesia_theatre_services')->group(function (){
            Route::get('/','ClinicalServicesController@clinicalservices_ats_home')->name('clinicalservices_ats_home');

            Route::get('/maternity_theatre','ClinicalServicesController@clinicalservices_ra_or_rr')->name('clinicalservices_ats_mt');
            Route::get('/opthamology','ClinicalServicesController@clinicalservices_ra_or_rr')->name('clinicalservices_ats_opthamology');
            Route::get('/cardiology','ClinicalServicesController@clinicalservices_ra_or_rr')->name('clinicalservices_ats_cardiology');
            Route::get('/ear_nose_throat','ClinicalServicesController@clinicalservices_ra_or_rr')->name('clinicalservices_ats_ent');
            Route::get('/orthopaedics','ClinicalServicesController@clinicalservices_ra_or_rr')->name('clinicalservices_ats_orthopaedics');
            Route::get('/general','ClinicalServicesController@clinicalservices_ra_or_rr')->name('clinicalservices_ats_general');
        });


        Route::group(array('prefix'=>'clinicalregisters'), function () {
            Route::get('/', 'ClinicalRegisterController@registers')->name('registers');
        });
        Route::group(array('prefix'=>'summaryforms'), function () {
            Route::get('/', 'SummaryFormsController@summaryforms')->name('summaryforms');
        });
        Route::group(array('prefix'=>'tallysheets'), function () {
            Route::get('/', 'TallySheetsController@tallysheets')->name('tallysheets');
        });
        Route::group(array('prefix'=>'indexcards'), function () {
            Route::get('/', 'IndexCardsController@indexcards')->name('indexcards');
        });

        Route::group(array('prefix'=>'patient_charge_sheet'), function () {
            Route::get('/', 'ClinicalServicesController@patient_charge_sheet_home')->name('patient_charge_sheet_home');
        });

        //Route::get('medical', 'ClinicalServicesController@medical')->name('medical');
        Route::prefix('medical')->group(function () {
            Route::get('/', function () {
                return view('departments.clinical_services.inpatient.medical_services.medical');
            })->name('medical_home');
            Route::prefix('medical_icu_hdu')->group(function (){
                Route::get('/', 'ClinicalServicesController@medical_icu_icu_hdu')->name('medical_icu_hdu');



            });
            //head injury
            //icu observation
            Route::group(array('prefix'=>'medical_ward'), function () {
                Route::get('/','ClinicalServicesController@medical_medical_ward')->name('medical_medical_ward');
                Route::get('moh301', 'GeneralPatientFilesController@moh301')->name('moh301');
                //patient file
                //moh 301

            });

        });


        Route::group(array('prefix'=>'nutrition'), function () {
            Route::get('/', 'ClinicalServicesController@nutrition_home')->name('nutrition_home');


            //nutrition forms

            Route::get('adult_feeding','ClinicalServicesController@adult_feeding' )->name('adult_feeding');
            Route::post('adult_feeding_post','ClinicalServicesController@adult_feeding_post')->name('adult_feeding_post');

            //no post route specified
            Route::get('inpatient_nutrition','ClinicalServicesController@inpatient_nutrition' )->name('inpatient_nutrition');


        });



        Route::group(array('prefix'=>'ot'), function () {
            //home route
            Route::get('/', 'ClinicalServicesController@ot_home')->name('ot_home');
        });
        Route::group(array('prefix'=>'maternity'), function () {
            //home route
            Route::get('/', 'ClinicalServicesController@maternity_home')->name('maternity_home');
        });

        Route::group(array('prefix'=>'paediatric'), function () {
            //paediatric home
            Route::get('/', 'ClinicalServicesController@paediatric_home')->name('paediatric_home');

            //paediatric forms
            Route::get('maternity_sheet', 'ClinicalServicesController@maternity_sheet')->name('maternity_sheet');

            Route::get('patient_file', 'ClinicalServicesController@patient_file')->name('patient_file');
            Route::get('partograph', 'ClinicalServicesController@partograph')->name('partograph');
            Route::get('foetal_chart', 'ClinicalServicesController@foetal_chart')->name('foetal_chart');

        });
        //physiotherapy/occupational therapy
        Route::group(array('prefix'=>'physiotherapy'), function () {
            Route::get('/', 'ClinicalServicesController@physiotherapy_home')->name('physiotherapy_home');
            Route::get('physiotherapy_form', 'ClinicalServicesController@physiotherapy_form')->name('physiotherapy_form');
//            Route::get('continuation_form', 'ClinicalServicesController@continuation_form')->name('continuation_form');
        });

        Route::group(array('prefix'=>'surgical'), function () {
            //general surgical services
            //home route
            Route::get('/', 'ClinicalServicesController@surgical_home')->name('surgical_home');

            Route::prefix('general_surgical')->group(function () {
                Route::get('/', function () {
                    return view('departments.clinical_services.inpatient.surgical.general_surgical_ward.general_surgical');
                })->name('general_surgical');
            });

            //anaesthesia
            Route::prefix('anaesthesia')->group(function () {
                Route::get('/', function () {
                    return view('departments/clinical_services/inpatient/surgical/anaesthesia/anaesthesia_home');
                })->name('anaesthesia_home');
                Route::get('anaesthetic_record', 'ClinicalServicesController@anaesthetic_record')->name('anaesthetic_record');
                Route::get('theater_form', 'ClinicalServicesController@theater_form')->name('theater_form');
                Route::get('consent_form', 'ClinicalServicesController@consent_form')->name('consent_form');
                Route::get('operative_checklist', 'ClinicalServicesController@operative_checklist')->name('operative_checklist');

            });
            //general surgery
            Route::prefix('generalsurgery')->group(function () {
                Route::get('/', function () {
                    return view('departments.clinical_services.inpatient.surgical.general_surgery.general_surgery');
                })->name('general_surgery');
                //moh 301
                Route::get('moh301', 'GeneralPatientFilesController@moh301_generalsurgery')->name('moh301_generalsurgery');
                Route::post('moh301_post', 'GeneralPatientFilesController@moh301_post_generalsurgery')->name('moh301_post_generalsurgery');

                //surgical ward
                //!not available


            });

            //specialized surgical services

            Route::prefix('specialized_surgical_services')->group(function () {
                //no forms available here
                Route::get('/', function () {
                    return view('departments.clinical_services.inpatient.surgical.specialized_surgical_services.ent_theatre.specialized');
                })->name('specialized_surgical_services');
            });


        });

    });


    Route::get('/','ClinicalServicesController@clinicalservices_home')->name('clinicalservices_home');
    Route::prefix('inpatient')->group(function () {
        Route::get('/','ClinicalServicesController@clinicalservices_inpatient_home')->name('clinicalservices_inpatient_home');

Route::get('/wards','ClinicalServicesController@wards')->name('wards');
        Route::post('/wards_post','ClinicalServicesController@wards_post')->name('wards_post');

        Route::get('/wards_bed','ClinicalServicesController@wards_bed')->name('wards_bed');


        Route::get('/bed','ClinicalServicesController@bed')->name('bed');
        Route::post('/bed_post','ClinicalServicesController@bed_post')->name('bed_post');

        //PATIENT FILE ROUTES

        Route::group(array('prefix'=>'patient_file'), function () {
            Route::get('/', 'ClinicalServicesController@patient_file_home')->name('patient_file_home');

            Route::get('/triage/{patient_id}',['uses'=> 'ClinicalServicesController@triage','as'=>'triage','pretty_name'=>'triage',]);
            Route::post('triage_post/{patient_id}', 'ClinicalServicesController@triage_post')->name('triage_post');

            Route::get('orthopaedic_examination_form/{patient_id}', 'ClinicalServicesController@orthopaedic_examination_form')->name('orthopaedic_examination_form');
            Route::post('orthopaedic_examination_form_post/{patient_id}', 'ClinicalServicesController@orthopaedic_examination_form_post')->name('orthopaedic_examination_form_post');

            Route::get('orthopaedic_examination_test/{patient_id}', 'ClinicalServicesController@orthopaedic_examination_test')->name('orthopaedic_examination_test');
            Route::post('orthopaedic_examination_test_post/{patient_id}', 'ClinicalServicesController@orthopaedic_examination_test_post')->name('orthopaedic_examination_test_post');

            Route::get('orthopaedic_examination_patient_standing/{patient_id}', 'ClinicalServicesController@orthopaedic_examination_patient_standing')->name('orthopaedic_examination_patient_standing');
            Route::post('orthopaedic_examination_patient_standing_post/{patient_id}', 'ClinicalServicesController@orthopaedic_examination_patient_standing_post')->name('orthopaedic_examination_patient_standing_post');

            Route::get('orthopaedic_examination_length_of_motion/{patient_id}', 'ClinicalServicesController@orthopaedic_examination_length_of_motion')->name('orthopaedic_examination_length_of_motion');
            Route::post('orthopaedic_examination_length_of_motion_post/{patient_id}', 'ClinicalServicesController@orthopaedic_examination_length_of_motion_post')->name('orthopaedic_examination_length_of_motion_post');

            Route::get('diet_sheet/{patient_id}',['uses'=>'ClinicalServicesController@diet_sheet','as'=>'diet_sheet','pretty_name'=>'Diet Sheet',]);
            Route::post('patient_file_diet_sheet_post/{patient_id}', 'ClinicalServicesController@patient_file_diet_sheet_post')->name('patient_file_diet_sheet_post');


            Route::get('nutrition_care_process_form/{patient_id}',['uses'=>'ClinicalServicesController@nutrition_care_process_form','as'=>'nutrition_care_process_form','pretty_name'=>'Nutrition Care Process Form',]);
            Route::post('patient_file_nutrition_care_post/{patient_id}', 'ClinicalServicesController@patient_file_nutrition_care_post')->name('patient_file_nutrition_care_post');


            Route::get('occupational_therapy_initial_assessment_form/{patient_id}',['uses'=>'ClinicalServicesController@occupational_therapy_initial_assessment_form','as'=>'occupational_therapy_initial_assessment_form','pretty_name'=>'Occupational Therapy Initial Assessment Form',]);
            Route::post('patient_file_occupational_therapy_initial_assessment__post/{patient_id}', 'ClinicalServicesController@patient_file_occupational_therapy_initial_assessment__post')->name('patient_file_occupational_therapy_initial_assessment__post');


            //Route::get('ear_nose_throat_examination_form/{patient_id}', 'ClinicalServicesController@ear_nose_throat_examination_form')->name('ear_nose_throat_examination_form');
            Route::get('ear_nose_throat_examination_form/{patient_id}',['uses'=>'ClinicalServicesController@ear_nose_throat_examination_form','as'=>'ear_nose_throat_examination_form','pretty_name'=>'Ear Nose Throat Examination Form',]);
            Route::post('ear_nose_throat_examination_form_post/{patient_id}', 'ClinicalServicesController@ear_nose_throat_examination_form_post')->name('ear_nose_throat_examination_form_post');


            //Route::get('dental_examination_form/{patient_id}', 'ClinicalServicesController@dental_examination_form')->name('dental_examination_form');
            Route::get('dental_examination_form/{patient_id}',['uses'=>'ClinicalServicesController@dental_examination_form','as'=>'dental_examination_form','pretty_name'=>'Dental Examination Form',]);
            Route::post('dental_examination_form_post/{patient_id}', 'ClinicalServicesController@dental_examination_form_post')->name('dental_examination_form_post');


            //Route::get('oncology_cbe_results_case_management/{patient_id}', 'ClinicalServicesController@oncology_cbe_results_case_management')->name('oncology_cbe_results_case_management');
            Route::get('oncology_cbe_results_case_management/{patient_id}',['uses'=>'ClinicalServicesController@oncology_cbe_results_case_management','as'=>'oncology_cbe_results_case_management','pretty_name'=>'Oncology CBE Results Case Management',]);
            Route::post('oncology_cbe_results_case_management_post/{patient_id}', 'ClinicalServicesController@oncology_cbe_results_case_management_post')->name('oncology_cbe_results_case_management_post');


            //Route::get('oncology_cbe_results_discrete_mass/{patient_id}', 'ClinicalServicesController@oncology_cbe_results_discrete_mass')->name('oncology_cbe_results_discrete_mass');
            Route::get('oncology_cbe_results_discrete_mass/{patient_id}',['uses'=>'ClinicalServicesController@oncology_cbe_results_discrete_mass','as'=>'oncology_cbe_results_discrete_mass','pretty_name'=>'Oncology_cbe_results_discrete_mass',]);
            Route::post('oncology_cbe_results_discrete_mass_post/{patient_id}', 'ClinicalServicesController@oncology_cbe_results_discrete_mass_post')->name('oncology_cbe_results_discrete_mass_post');


            //Route::get('oncology_cbe_results_final_diagnosis/{patient_id}', 'ClinicalServicesController@oncology_cbe_results_final_diagnosis')->name('oncology_cbe_results_final_diagnosis');
            Route::get('oncology_cbe_results_final_diagnosis/{patient_id}',['uses'=>'ClinicalServicesController@oncology_cbe_results_final_diagnosis','as'=>'oncology_cbe_results_final_diagnosis','pretty_name'=>'Oncology CBE Results Final Diagnosis',]);
            Route::post('oncology_cbe_results_final_diagnosis_post/{patient_id}', 'ClinicalServicesController@oncology_cbe_results_final_diagnosis_post')->name('oncology_cbe_results_final_diagnosis_post');


            //Route::get('oncology_cbe_results_overall_summary/{patient_id}', 'ClinicalServicesController@oncology_cbe_results_overall_summary')->name('oncology_cbe_results_overall_summary');
            Route::get('oncology_cbe_results_overall_summary/{patient_id}',['uses'=>'ClinicalServicesController@oncology_cbe_results_overall_summary','as'=>'oncology_cbe_results_overall_summary','pretty_name'=>'Oncology CBE Results Overall Summary',]);
            Route::post('oncology_cbe_results_overall_summary_post/{patient_id}', 'ClinicalServicesController@oncology_cbe_results_overall_summary_post')->name('oncology_cbe_results_overall_summary_post');


            //Route::get('oncology_cbe_results_physical_exam/{patient_id}', 'ClinicalServicesController@oncology_cbe_results_physical_exam')->name('oncology_cbe_results_physical_exam');
            Route::get('oncology_cbe_results_physical_exam/{patient_id}',['uses'=>'ClinicalServicesController@oncology_cbe_results_physical_exam','as'=>'oncology_cbe_results_physical_exam','pretty_name'=>'Oncology CBE Results Physical Exam',]);
            Route::post('oncology_cbe_results_physical_exam_post/{patient_id}', 'ClinicalServicesController@oncology_cbe_results_physical_exam_post')->name('oncology_cbe_results_physical_exam_post');


            //Route::get('oncology_cbe_results_examination_form/{patient_id}', 'ClinicalServicesController@oncology_cbe_results_examination_form')->name('oncology_cbe_results_examination_form');
            Route::get('oncology_cbe_results_examination_form/{patient_id}',['uses'=>'ClinicalServicesController@oncology_cbe_results_examination_form','as'=>'oncology_cbe_results_examination_form','pretty_name'=>'Oncology CBE Results Examination Form',]);
            Route::post('oncology_cbe_results_examination_form_post/{patient_id}', 'ClinicalServicesController@oncology_cbe_results_examination_form_post')->name('oncology_cbe_results_examination_form_post');




            //Route::get('morphine_administration_chart', 'ClinicalServicesController@morphine_administration_chart')->name('morphine_administration_chart');
            Route::get('morphine_administration_chart/{patient_id}',['uses'=>'ClinicalServicesController@morphine_administration_chart','as'=>'morphine_administration_chart','pretty_name'=>'Morphine Administration Chart',]);
            Route::post('morphine_administration_chart_post', 'ClinicalServicesController@morphine_administration_chart_post')->name('morphine_administration_chart_post');


            ////Route::get('/{patient_id}',['uses'=>'ClinicalServicesController@','as'=>'','pretty_name'=>'',]);
            Route::get('inpatient_charge_sheet', 'ClinicalServicesController@inpatient_charge_sheet')->name('inpatient_charge_sheet');


            //Route::get('allergyform/{patient_id}', 'ClinicalServicesController@allergyform')->name('allergyform');
            Route::get('allergyform/{patient_id}',['uses'=>'ClinicalServicesController@allergyform','as'=>'allergyform','pretty_name'=>'Allergy Form',]);
            Route::post('allergyform_post/{patient_id}','ClinicalServicesController@allergyform_post')->name('allergyform_post');



            //Route::get('/{patient_id}',['uses'=>'ClinicalServicesController@','as'=>'','pretty_name'=>'',]);
            Route::get('investigation_sheet', 'ClinicalServicesController@investigation_sheet')->name('investigation_sheet');


            //Route::get('ecg_form/{patient_id}', 'ClinicalServicesController@ecg_form')->name('ecg_form');
            Route::get('ecg_form/{patient_id}',['uses'=>'ClinicalServicesController@ecg_form','as'=>'ecg_form','pretty_name'=>'ECG Form',]);
            Route::post('ecg_form_post/{patient_id}', 'ClinicalServicesController@ecg_form_post')->name('ecg_form_post');


            //Route::get('/{patient_id}',['uses'=>'ClinicalServicesController@','as'=>'','pretty_name'=>'',]);
            Route::get('secg_request_form', 'ClinicalServicesController@secg_request_form')->name('secg_request_form');


            //Route::get('allergy_form/{patient_id}', 'ClinicalServicesController@allergy_form')->name('allergy_form');
            Route::get('allergy_form/{patient_id}',['uses'=>'ClinicalServicesController@allergy_form','as'=>'allergy_form','pretty_name'=>'Allergy Form',]);
            Route::post('allergyform_post/{patient_id}','ClinicalServicesController@allergyform_post')->name('allergyform_post');


            //Route::get('/{patient_id}',['uses'=>'ClinicalServicesController@','as'=>'','pretty_name'=>'',]);
            Route::get('audiogram', 'ClinicalServicesController@audiogram')->name('audiogram');



            //Route::get('treatment_sheet/{patient_id}', 'ClinicalServicesController@treatment_sheet')->name('treatment_sheet');
            Route::get('treatment_sheet/{patient_id}',['uses'=>'ClinicalServicesController@treatment_sheet','as'=>'treatment_sheet','pretty_name'=>'Treatment Sheet Form',]);
            Route::post('treatment_sheet_post/{patient_id}', 'ClinicalServicesController@treatment_sheet_post')->name('treatment_sheet_post');



            //Route::get('/{patient_id}',['uses'=>'ClinicalServicesController@','as'=>'','pretty_name'=>'',]);
            Route::get('pressure', 'ClinicalServicesController@pressure')->name('pressure');



            //Route::get('diabetic_charts/{patient_id}', 'ClinicalServicesController@diabetic_charts')->name('diabetic_charts');
            Route::get('diabetic_charts/{patient_id}',['uses'=>'ClinicalServicesController@diabetic_charts','as'=>'diabetic_charts','pretty_name'=>'Diabetic Charts Form',]);
            Route::post('diabetic_charts_post/{patient_id}', 'ClinicalServicesController@diabetic_charts_post')->name('diabetic_charts_post');



            //Route::get('fluid_in_out_chart/{patient_id}', 'ClinicalServicesController@fluid_in_out_chart')->name('fluid_in_out_chart');
            Route::get('fluid_in_out_chart/{patient_id}',['uses'=>'ClinicalServicesController@fluid_in_out_chart','as'=>'fluid_in_out_chart','pretty_name'=>'Fluid Input and Output Chart',]);
            Route::post('fluid_in_out_chart_post/{patient_id}', 'ClinicalServicesController@fluid_in_out_chart_post')->name('fluid_in_out_chart_post');




            //Route::get('four_hourly_temp_chart/{patient_id}', 'ClinicalServicesController@four_hourly_temp_chart')->name('four_hourly_temp_chart');
            Route::get('four_hourly_temp_chart/{patient_id}',['uses'=>'ClinicalServicesController@four_hourly_temp_chart','as'=>'four_hourly_temp_chart','pretty_name'=>'Four Hourly Temperature Chart',]);
            Route::post('four_hourly_temp_chart_post/{patient_id}', 'ClinicalServicesController@four_hourly_temp_chart_post')->name('four_hourly_temp_chart_post');










            //Route::get('morning_and_evening_temp_chart/{patient_id}', 'ClinicalServicesController@morning_and_evening_temp_chart')->name('morning_and_evening_temp_chart');
            Route::get('morning_and_evening_temp_chart/{patient_id}',['uses'=>'ClinicalServicesController@morning_and_evening_temp_chart','as'=>'morning_and_evening_temp_chart','pretty_name'=>'Morning And Evening Temperature Chart',]);
            Route::post('morning_and_evening_temp_chart_post/{patient_id}', 'ClinicalServicesController@morning_and_evening_temp_chart_post')->name('morning_and_evening_temp_chart_post');


            //Route::get('pulse_chart/{patient_id}', 'ClinicalServicesController@pulse_chart')->name('pulse_chart');
            Route::get('pulse_chart/{patient_id}',['uses'=>'ClinicalServicesController@pulse_chart','as'=>'pulse_chart','pretty_name'=>'Pulse Chart Form',]);
            Route::post('pulse_chart_post/{patient_id}', 'ClinicalServicesController@pulse_chart_post')->name('pulse_chart_post');



            //Route::get('/{patient_id}',['uses'=>'ClinicalServicesController@','as'=>'','pretty_name'=>'',]);
            Route::get('diet_chart', 'ClinicalServicesController@diet_chart')->name('diet_chart');

            //Route::get('nursing_notes/{patient_id}', 'ClinicalServicesController@nursing_notes')->name('nursing_notes');
            Route::get('nursing_notes/{patient_id}',['uses'=>'ClinicalServicesController@nursing_notes','as'=>'nursing_notes','pretty_name'=>'Nursing Notes Forms',]);
            Route::post('nursing_notes_post/{patient_id}', 'ClinicalServicesController@nursing_notes_post')->name('nursing_notes_post');
//          Route::get('continuation_sheets', 'GeneralPatientFilesController@continuation_sheets')->name('continuation_sheets');


            //Route::get('allergyform/{patient_id}', 'ClinicalServicesController@allergyform')->name('allergyform');
            Route::get('allergyform/{patient_id}',['uses'=>'ClinicalServicesController@allergyform','as'=>'allergyform','pretty_name'=>'Allergy Form',]);
            Route::post('allergyform_post/{patient_id}','ClinicalServicesController@allergyform_post')->name('allergyform_post');


            //Route::get('fallassessmentform/{patient_id}', 'ClinicalServicesController@fallassessmentform')->name('fallassessmentform');
            Route::get('fallassessmentform/{patient_id}',['uses'=>'ClinicalServicesController@fallassessmentform','as'=>'fallassessmentform','pretty_name'=>'Fall Assessment Form',]);
            Route::post('fallassessmentform_post/{patient_id}','ClinicalServicesController@fallassessmentform_post')->name('fallassessmentform_post');


            //Route::get('physicalexaminationonadmission/{patient_id}', 'ClinicalServicesController@physicalexaminationonadmission')->name('physicalexaminationonadmission');
            Route::get('physicalexaminationonadmission/{patient_id}',['uses'=>'ClinicalServicesController@physicalexaminationonadmission','as'=>'physicalexaminationonadmission','pretty_name'=>'Physical Examination On Admission Form',]);
            Route::post('physicalexaminationonadmission_post/{patient_id}','ClinicalServicesController@physicalexaminationonadmission_post')->name('physicalexaminationonadmission_post');


            //Route::get('pressure_score_card/{patient_id}', 'ClinicalServicesController@pressure_score_card')->name('pressure_score_card');
            Route::get('pressure_score_card/{patient_id}',['uses'=>'ClinicalServicesController@pressure_score_card','as'=>'pressure_score_card','pretty_name'=>'Pressure Score Card',]);
            Route::post('pressure_score_card_post/{patient_id}', 'ClinicalServicesController@pressure_score_card_post')->name('pressure_score_card_post');


            //Route::get('nursingcareform/{patient_id}', 'ClinicalServicesController@nursingcareform')->name('nursingcareform');
            Route::get('nursingcareform/{patient_id}',['uses'=>'ClinicalServicesController@nursingcareform','as'=>'nursingcareform','pretty_name'=>'Nursing Care Form',]);
            Route::post('nursingcareform_post/{patient_id}','ClinicalServicesController@nursingcareform_post')->name('nursingcareform_post');


            //Route::get('morphine/{patient_id}', 'ClinicalServicesController@morphine')->name('morphine');
            Route::get('morphine/{patient_id}',['uses'=>'ClinicalServicesController@morphine','as'=>'morphine','pretty_name'=>'Morphine Form',]);
            Route::post('morphine_post/{patient_id}', 'ClinicalServicesController@morphine_post')->name('morphine_post');


            //Route::get('nursing/{patient_id}', 'ClinicalServicesController@nursing')->name('nursing');
            Route::get('nursing/{patient_id}',['uses'=>'ClinicalServicesController@nursing','as'=>'nursing','pretty_name'=>'Nursing Intervention Checklist',]);
            Route::post('nursing_post/{patient_id}', 'ClinicalServicesController@nursing_post')->name('nursing_post');




            //Route::get('laboratoryrequestform/{patient_id}', 'ClinicalServicesController@laboratoryrequestform')->name('laboratoryrequestform');
            Route::get('laboratoryrequestform/{patient_id}',['uses'=>'ClinicalServicesController@laboratoryrequestform','as'=>'laboratoryrequestform','pretty_name'=>'Laboratory Request Form',]);
            Route::post('laboratoryrequestform_post/{patient_id}', 'ClinicalServicesController@laboratoryrequestform_post')->name('laboratoryrequestform_post');


            //Route::get('/{patient_id}',['uses'=>'ClinicalServicesController@','as'=>'','pretty_name'=>'',]);
            Route::get('maternity_record', 'ClinicalServicesController@maternity_record')->name('maternity_record');






            //Route::get('/{patient_id}',['uses'=>'ClinicalServicesController@','as'=>'','pretty_name'=>'',]);
            Route::get('admission_form', 'ClinicalServicesController@admission_form')->name('admission_form');
            Route::post('admission_form_post','ClinicalServicesController@admission_form_post')->name('admission_form_post');



            //Route::get('anaesthetic_records/{patient_id}', 'ClinicalServicesController@anaesthetic_records')->name('anaesthetic_records');
            Route::get('anaesthetic_records/{patient_id}',['uses'=>'ClinicalServicesController@anaesthetic_records','as'=>'anaesthetic_records','pretty_name'=>'Anaesthetic Records Form',]);
            Route::post('anaesthetic_records_post/{patient_id}','ClinicalServicesController@anaesthetic_records_post')->name('anaesthetic_records_post');


            //Route::get('/{patient_id}',['uses'=>'ClinicalServicesController@','as'=>'','pretty_name'=>'',]);
            Route::get('infant_record', 'ClinicalServicesController@infant_record')->name('infant_record');
            Route::post('infant_record_post', 'ClinicalServicesController@infant_record_post')->name('infant_record_post');


            //Route::get('fluid_intake_output_chart/{patient_id}', 'ClinicalServicesController@fluid_intake_output_chart')->name('fluid_intake');
            Route::get('fluid_intake_output_chart/{patient_id}',['uses'=>'ClinicalServicesController@fluid_intake_output_chart','as'=>'fluid_intake_output_chart','pretty_name'=>'Fluid Intake Output Chart',]);
            Route::post('fluid_intake_output_chart_post/{patient_id}', 'ClinicalServicesController@fluid_intake_output_chart_post')->name('fluid_intake_output_chart_post');


            //Route::get('consent_form/{patient_id}', 'ClinicalServicesController@consent_form')->name('consent_form');
            Route::get('consent_form/{patient_id}',['uses'=>'ClinicalServicesController@consent_form','as'=>'consent_form','pretty_name'=>'Patient Consent Form',]);
            Route::post('consent_form_post/{patient_id}', 'ClinicalServicesController@consent_form_post')->name('consent_form_post');


            //Route::get('/{patient_id}',['uses'=>'ClinicalServicesController@','as'=>'','pretty_name'=>'',]);
            Route::get('foetal_kit_chart', 'ClinicalServicesController@foetal_kit_chart')->name('foetal_kit_chart');
            Route::post('foetal_kit_chart_post', 'ClinicalServicesController@foetal_kit_chart_post')->name('foetal_kit_chart_post');


            //Route::get('/{patient_id}',['uses'=>'ClinicalServicesController@','as'=>'','pretty_name'=>'',]);
            Route::get('anc_card', 'ClinicalServicesController@anc_card')->name('anc_card');
            Route::post('anc_card_post', 'ClinicalServicesController@anc_card_post')->name('anc_card_post');


            //Route::get('/{patient_id}',['uses'=>'ClinicalServicesController@','as'=>'','pretty_name'=>'',]);
            Route::get('audiogram', 'ClinicalServicesController@audiogram')->name('audiogram');
            Route::post('audiogram_post', 'ClinicalServicesController@audiogram_post')->name('audiogram_post');


            //Route::get('blood_transfusion_observation_form/{patient_id}', 'ClinicalServicesController@blood_transfusion_observation_form')->name('blood_transfusion_observation_form');
            Route::get('blood_transfusion_observation_form/{patient_id}',['uses'=>'ClinicalServicesController@blood_transfusion_observation_form','as'=>'blood_transfusion_observation_form','pretty_name'=>'Blood Transfusion Observation_form',]);
            Route::post('blood_transfusion_observation_form_post/{patient_id}', 'ClinicalServicesController@blood_transfusion_observation_form_post')->name('blood_transfusion_observation_form_post');



            //Route::get('consultation_request_form/{patient_id}', 'ClinicalServicesController@consultation_request_form')->name('consultation_request_form');
            Route::get('consultation_request_form/{patient_id}',['uses'=>'ClinicalServicesController@consultation_request_form','as'=>'consultation_request_form','pretty_name'=>'Consultation Request Form',]);
            Route::post('consultation_request_form_post/{patient_id}', 'ClinicalServicesController@consultation_request_form_post')->name('consultation_request_form_post');



            //Route::get('continuation_form/{patient_id}', 'ClinicalServicesController@continuation_form')->name('continuation_form');
            Route::get('continuation_form/{patient_id}',['uses'=>'ClinicalServicesController@continuation_form','as'=>'continuation_form','pretty_name'=>'Continuation Form',]);
            Route::post('continuation_form_post/{patient_id}', 'ClinicalServicesController@continuation_form_post')->name('continuation_form_post');





            //Route::get('/{patient_id}',['uses'=>'ClinicalServicesController@','as'=>'','pretty_name'=>'',]);
            Route::get('diet_requisition_sheet', 'ClinicalServicesController@diet_requisition_sheet')->name('diet_requisition_sheet');

//            Route::get('ecg_form', 'ClinicalServicesController@ecg_form')->name('ecg_form');


            //Route::get('eeg_report/{patient_id}', 'ClinicalServicesController@eeg_report')->name('eeg_report');
            Route::get('eeg_report/{patient_id}',['uses'=>'ClinicalServicesController@eeg_report','as'=>'eeg_report','pretty_name'=>'EEG_report',]);
            Route::post('eeg_report_post/{patient_id}', 'ClinicalServicesController@eeg_report_post')->name('eeg_report_post');



            //Route::get('/{patient_id}',['uses'=>'ClinicalServicesController@','as'=>'','pretty_name'=>'',]);
            Route::get('head_injury_and_craniotomy_chart_form', 'ClinicalServicesController@head_injury_and_craniotomy_chart_form')->name('head_injury_and_craniotomy_chart_form');


            //Route::get('icu_observation_chart/{patient_id}', 'ClinicalServicesController@icu_observation_chart')->name('icu_observation_chart');
            Route::get('icu_observation_chart/{patient_id}',['uses'=>'ClinicalServicesController@icu_observation_chart','as'=>'icu_observation_chart','pretty_name'=>'ICU Observation Chart',]);
            Route::post('icu_observation_chart_post/{patient_id}', 'ClinicalServicesController@icu_observation_chart_post')->name('icu_observation_chart_post');



            //Route::get('intensive_care_unit_respiratory_sheet/{patient_id}', 'ClinicalServicesController@intensive_care_unit_respiratory_sheet')->name('intensive_care_unit_respiratory_sheet');
            Route::get('intensive_care_unit_respiratory_sheet/{patient_id}',['uses'=>'ClinicalServicesController@intensive_care_unit_respiratory_sheet','as'=>'intensive_care_unit_respiratory_sheet','pretty_name'=>'Intensive Care Unit Respiratory Sheet',]);
            Route::post('intensive_care_unit_respiratory_sheet_post/{patient_id}', 'ClinicalServicesController@intensive_care_unit_respiratory_sheet_post')->name('intensive_care_unit_respiratory_sheet_post');


            //Route::get('ipom_chart/{patient_id}', 'ClinicalServicesController@ipom_chart')->name('ipom_chart');
            Route::get('ipom_chart/{patient_id}',['uses'=>'ClinicalServicesController@ipom_chart','as'=>'ipom_chart','pretty_name'=>'Immediate Post Operative Monitoring Chart',]);
            Route::post('ipom_chart_post/{patient_id}', 'ClinicalServicesController@ipom_chart_post')->name('ipom_chart_post');


            //Route::get('/{patient_id}',['uses'=>'ClinicalServicesController@','as'=>'','pretty_name'=>'',]);
            Route::get('laboratory_report_sheet_patient_file', 'ClinicalServicesController@laboratory_report_sheet_patient_file')->name('laboratory_report_sheet_patient_file');
            
            //Route::get('', 'ClinicalServicesController@')->name('');


            //Route::get('operation_note/{patient_id}', 'ClinicalServicesController@operation_note')->name('operation_note');
            Route::get('operation_note/{patient_id}',['uses'=>'ClinicalServicesController@operation_note','as'=>'operation_note','pretty_name'=>'Operation Notes Form',]);
            Route::post('operation_note_post/{patient_id}','ClinicalServicesController@operation_note_post')->name('operation_note_post');


            //Route::get('/{patient_id}',['uses'=>'ClinicalServicesController@','as'=>'','pretty_name'=>'',]);

            //Route::get('/{patient_id}',['uses'=>'ClinicalServicesController@','as'=>'','pretty_name'=>'',]);
            Route::get('partograph_form', 'ClinicalServicesController@partograph_form')->name('partograph_form');


            //Route::get('patient_assessment_and_progress_card/{patient_id}', 'ClinicalServicesController@patient_assessment_and_progress_card')->name('patient_assessment_and_progress_card');
            Route::get('patient_assessment_and_progress_card/{patient_id}',['uses'=>'ClinicalServicesController@patient_assessment_and_progress_card','as'=>'patient_assessment_and_progress_card','pretty_name'=>'Patient Assessment And Progress Card',]);
            Route::post('patient_assessment_and_progress_card_post/{patient_id}', 'ClinicalServicesController@patient_assessment_and_progress_card_post')->name('patient_assessment_and_progress_card_post');


            //Route::get('patient_property_declaration_form/{patient_id}', 'ClinicalServicesController@patient_property_declaration_form')->name('patient_property_declaration_form');
            Route::get('patient_property_declaration_form/{patient_id}',['uses'=>'ClinicalServicesController@patient_property_declaration_form','as'=>'patient_property_declaration_form','pretty_name'=>'Patient Property Declaration Form',]);
            Route::post('patient_property_declaration_form_post/{patient_id}', 'ClinicalServicesController@patient_property_declaration_form_post')->name('patient_property_declaration_form_post');


            //Route::get('/{patient_id}',['uses'=>'ClinicalServicesController@','as'=>'','pretty_name'=>'',]);
            Route::get('pending_patient_file', 'ClinicalServicesController@pending_patient_file')->name('pending_patient_file');

            //Route::get('physiotherapy_form', 'ClinicalServicesController@physiotherapy_form')->name('physiotherapy_form');
            Route::get('physiotherapy_form/{patient_id}',['uses'=>'ClinicalServicesController@physiotherapy_form','as'=>'physiotherapy_form','pretty_name'=>'Physiotherapy Form',]);
            Route::post('physiotherapy_form_post/{patient_id}','ClinicalServicesController@physiotherapy_form_post')->name('physiotherapy_form_post');

            //Route::get('preoperative_checklist/{patient_id}', 'ClinicalServicesController@preoperative_checklist')->name('preoperative_checklist');
            Route::get('preoperative_checklist/{patient_id}',['uses'=>'ClinicalServicesController@preoperative_checklist','as'=>'preoperative_checklist','pretty_name'=>'preoperative_checklist',]);
            Route::post('preoperative_checklist_post/{patient_id}', 'ClinicalServicesController@preoperative_checklist_post')->name('preoperative_checklist_post');




            //Route::get('radiology_report_sheet_patient_file/{patient_id}', 'ClinicalServicesController@radiology_report_sheet_patient_file')->name('radiology_report_sheet_patient_file');
            Route::get('radiology_report_sheet_patient_file/{patient_id}',['uses'=>'ClinicalServicesController@radiology_report_sheet_patient_file','as'=>'radiology_report_sheet_patient_file','pretty_name'=>'Result:Pending:Radiology Report Sheet',]);
            Route::post('radiology_report_sheet_patient_file_post/{patient_id}','ClinicalServicesController@radiology_report_sheet_patient_file_post')->name('radiology_report_sheet_patient_file_post');


            Route::get('request_for_post_modern_examination', 'ClinicalServicesController@request_for_post_modern_examination')->name('request_for_post_modern_examination');



            //Route::get('/{patient_id}',['uses'=>'ClinicalServicesController@','as'=>'','pretty_name'=>'',]);
            Route::get('secg_request_form', 'ClinicalServicesController@secg_request_form')->name('secg_request_form');

//            Route::get('treatment_sheet', 'ClinicalServicesController@treatment_sheet')->name('treatment_sheetRoute::get('/{patient_id}',['uses'=>'ClinicalServicesController@','as'=>'','pretty_name'=>'',]);
            Route::get('opthalmic_general_examination_form', 'ClinicalServicesController@opthalmic_general_examination_form')->name('opthalmic_general_examination_form');


            //Route::get('blood_pressure_chart/{patient_id}', 'ClinicalServicesController@blood_pressure_chart')->name('blood_pressure_chart');
            Route::get('blood_pressure_chart/{patient_id}',['uses'=>'ClinicalServicesController@blood_pressure_chart','as'=>'blood_pressure_chart','pretty_name'=>'Blood Pressure Chart',]);
            Route::post('blood_pressure_chart_post/{patient_id}', 'ClinicalServicesController@blood_pressure_chart_post')->name('blood_pressure_chart_post');


            //Route::get('blood_donation_request_form/{patient_id}', 'ClinicalServicesController@blood_donation_request_form')->name('blood_donation_request_form');
            Route::get('blood_donation_request_form/{patient_id}',['uses'=>'ClinicalServicesController@blood_donation_request_form','as'=>'blood_donation_request_form','pretty_name'=>'Blood Donation Request Form',]);
            Route::post('blood_donation_request_form_post/{patient_id}', 'ClinicalServicesController@blood_donation_request_form_post')->name('blood_donation_request_form_post');


            //Route::get('pharmacy_withdrawal_form/{patient_id}', 'ClinicalServicesController@pharmacy_withdrawal_form')->name('pharmacy_withdrawal_form');
            Route::get('pharmacy_withdrawal_form/{patient_id}',['uses'=>'ClinicalServicesController@pharmacy_withdrawal_form','as'=>'pharmacy_withdrawal_form','pretty_name'=>'Pharmacy Withdrawal Form',]);
            Route::post('pharmacy_withdrawal_form_post/{patient_id}', 'ClinicalServicesController@pharmacy_withdrawal_form_post')->name('pharmacy_withdrawal_form_post');




            //Route::get('/{patient_id}',['uses'=>'ClinicalServicesController@','as'=>'','pretty_name'=>'',]);
            Route::get('radio_therapy_treatment_form', 'ClinicalServicesController@radio_therapy_treatment_form')->name('radio_therapy_treatment_form');


            //Route::get('casedeath/{patient_id}', 'ClinicalServicesController@case_death')->name('case_death');
            Route::get('casedeath/{patient_id}',['uses'=>'ClinicalServicesController@case_death','as'=>'case_death','pretty_name'=>'Case Death Summary',]);
            Route::post('casedeath_post/{patient_id}', 'ClinicalServicesController@case_death_post')->name('case_death_post');


            //Route::get('/{patient_id}',['uses'=>'ClinicalServicesController@','as'=>'','pretty_name'=>'',]);
            Route::get('request_for_palliative_care/{patient_id}', 'ClinicalServicesController@request_for_palliative_care')->name('request_for_palliative_care');
            Route::post('request_for_palliative_care_post/{patient_id}', 'ClinicalServicesController@request_for_palliative_care_post')->name('request_for_palliative_care_post');


            //Route::get('accident_and_emergency/{patient_id}', 'ClinicalServicesController@accident_and_emergency')->name('accident_and_emergency');
            Route::get('accident_and_emergency/{patient_id}',['uses'=>'ClinicalServicesController@accident_and_emergency','as'=>'accident_and_emergency','pretty_name'=>'Accident And Emergency Form',]);
            Route::post('accident_and_emergency_post/{patient_id}','ClinicalServicesController@accident_and_emergency_post')->name('accident_and_emergency_post');



            //Route::get('initial_assessment_form/{patient_id}', 'ClinicalServicesController@initial_assessment_form')->name('initial_assessment_form');
            Route::get('initial_assessment_form/{patient_id}',['uses'=>'ClinicalServicesController@initial_assessment_form','as'=>'initial_assessment_form','pretty_name'=>'Initial Assessment Form',]);
            Route::post('initial_assessment_form_post/{patient_id}', 'ClinicalServicesController@initial_assessment_form_post')->name('initial_assessment_form_post');



            //Route::get('/{patient_id}',['uses'=>'ClinicalServicesController@','as'=>'','pretty_name'=>'',]);
            Route::get('general_outpatient_card/{patient_id}', 'ClinicalServicesController@general_outpatient_card')->name('general_outpatient_card');



            //Route::get('maternity_records/{patient_id}', 'ClinicalServicesController@maternity_records')->name('maternity_records');
            Route::get('maternity_records/{patient_id}',['uses'=>'ClinicalServicesController@maternity_records','as'=>'maternity_records','pretty_name'=>'maternity Records Form',]);
            Route::post('maternity_records_post/{patient_id}', 'ClinicalServicesController@maternity_records_post')->name('maternity_records_post');



            //Route::get('initial_nursing_assessment_form/{patient_id}', 'ClinicalServicesController@initial_nursing_assessment_form')->name('initial_nursing_assessment_form');
            Route::get('initial_nursing_assessment_form/{patient_id}',['uses'=>'ClinicalServicesController@initial_nursing_assessment_form','as'=>'initial_nursing_assessment_form','pretty_name'=>'Initial Nursing Assessment Form',]);
            Route::post('initial_nursing_assessment_form_post/{patient_id}', 'ClinicalServicesController@initial_nursing_assessment_form_post')->name('initial_nursing_assessment_form_post');



            //Route::get('prescriptionform/{patient_id}', 'ClinicalServicesController@prescriptionform')->name('prescriptionform');
            Route::get('prescriptionform/{patient_id}',['uses'=>'ClinicalServicesController@prescriptionform','as'=>'prescriptionform','pretty_name'=>'Prescription Form',]);
            Route::post('prescriptionform_post/{patient_id}', 'ClinicalServicesController@prescription_form_post')->name('prescription_form_post');



            //Route::get('xray_request_form/{patient_id}', 'ClinicalServicesController@xray_request_form')->name('xray_request_form');
            Route::get('xray_request_form/{patient_id}',['uses'=>'ClinicalServicesController@xray_request_form','as'=>'xray_request_form','pretty_name'=>'Xray Request Form',]);
            Route::post('xray_request_form_post/{patient_id}','ClinicalServicesController@xray_request_form_post')->name('xray_request_form_post');

            Route::post('/send_department_links_post/{patient_id}', 'ClinicalServicesController@send_department_links_post')->name('send_department_links_post');

        });

        Route::group(array('prefix'=>'patient_charge_sheet'), function () {
            Route::get('/', 'ClinicalServicesController@patient_charge_sheet_home')->name('patient_charge_sheet_home');
        });




        //Route::get('medical', 'ClinicalServicesController@medical')->name('medical');
        Route::prefix('medical')->group(function () {
            Route::get('/', function () {
                return view('departments.clinical_services.inpatient.medical_services.medical');
            })->name('medical_home');
            Route::prefix('medical_icu_hdu')->group(function (){
                Route::get('/', 'ClinicalServicesController@medical_icu_icu_hdu')->name('medical_icu_hdu');



            });
            //head injury
            //icu observation
            Route::group(array('prefix'=>'medical_ward'), function () {
                Route::get('/','ClinicalServicesController@medical_medical_ward')->name('medical_medical_ward');
                Route::get('moh301', 'GeneralPatientFilesController@moh301')->name('moh301');
                //patient file
                //moh 301

            });

        });


        Route::group(array('prefix'=>'nutrition'), function () {
            Route::get('/', 'ClinicalServicesController@nutrition_home')->name('nutrition_home');


            //nutrition forms

            Route::get('adult_feeding','ClinicalServicesController@adult_feeding' )->name('adult_feeding');
            Route::post('adult_feeding_post','ClinicalServicesController@adult_feeding_post')->name('adult_feeding_post');

            //no post route specified
            Route::get('inpatient_nutrition','ClinicalServicesController@inpatient_nutrition' )->name('inpatient_nutrition');

        });


        Route::group(array('prefix'=>'ot'), function () {
            //home route
            Route::get('/', 'ClinicalServicesController@ot_home')->name('ot_home');
        });
        Route::group(array('prefix'=>'maternity'), function () {
            //home route
            Route::get('/', 'ClinicalServicesController@maternity_home')->name('maternity_home');
        });



        Route::group(array('prefix'=>'paediatric'), function () {
            //paediatric home
            Route::get('/', 'ClinicalServicesController@paediatric_home')->name('paediatric_home');

            //paediatric forms
            Route::get('maternity_sheet', 'ClinicalServicesController@maternity_sheet')->name('maternity_sheet');

            Route::get('patient_file', 'ClinicalServicesController@patient_file')->name('patient_file');
            Route::get('partograph', 'ClinicalServicesController@partograph')->name('partograph');
            Route::get('foetal_chart', 'ClinicalServicesController@foetal_chart')->name('foetal_chart');

        });


        //physiotherapy/occupational therapy
        Route::group(array('prefix'=>'physiotherapy'), function () {
            Route::get('/', 'ClinicalServicesController@physiotherapy_home')->name('physiotherapy_home');
            Route::get('physiotherapy_form', 'ClinicalServicesController@physiotherapy_form')->name('physiotherapy_form');
//            Route::get('continuation_form', 'ClinicalServicesController@continuation_form')->name('continuation_form');
        });

        Route::group(array('prefix'=>'surgical'), function () {
            //general surgical services
            //home route
            Route::get('/', 'ClinicalServicesController@surgical_home')->name('surgical_home');

            Route::prefix('general_surgical')->group(function () {
                Route::get('/', function () {
                    return view('departments.clinical_services.inpatient.surgical.general_surgical_ward.general_surgical');
                })->name('general_surgical');
            });

            //anaesthesia
            Route::prefix('anaesthesia')->group(function () {
                Route::get('/', function () {
                    return view('departments/clinical_services/inpatient/surgical/anaesthesia/anaesthesia_home');
                })->name('anaesthesia_home');
                Route::get('anaesthetic_record', 'ClinicalServicesController@anaesthetic_record')->name('anaesthetic_record');
                Route::get('theater_form', 'ClinicalServicesController@theater_form')->name('theater_form');
                Route::get('consent_form', 'ClinicalServicesController@consent_form')->name('consent_form');
                Route::get('operative_checklist', 'ClinicalServicesController@operative_checklist')->name('operative_checklist');

            });
            //general surgery
            Route::prefix('generalsurgery')->group(function () {
                Route::get('/', function () {
                    return view('departments.clinical_services.inpatient.surgical.general_surgery.general_surgery');
                })->name('general_surgery');
                //moh 301
                Route::get('moh301', 'GeneralPatientFilesController@moh301_generalsurgery')->name('moh301_generalsurgery');
                Route::post('moh301_post', 'GeneralPatientFilesController@moh301_post_generalsurgery')->name('moh301_post_generalsurgery');

                //surgical ward
                //!not available


            });

            //specialized surgical services

            Route::prefix('specialized_surgical_services')->group(function () {
                //no forms available here
                Route::get('/', function () {
                    return view('departments.clinical_services.inpatient.surgical.specialized_surgical_services.ent_theatre.specialized');
                })->name('specialized_surgical_services');
            });



//            Route::get('casedeath', 'GeneralPatientFilesController@general_files_case_death')->name('general_files_case_death');
            Route::get('labrequest', 'GeneralPatientFilesController@labrequest')->name('labrequest');
            Route::get('consultationrequest', 'GeneralPatientFilesController@consultationrequest')->name('consultationrequest');
//            Route::get('ecgrequest', 'GeneralPatientFilesController@ecgrequest')->name('ecgrequest');
            Route::get('fluidintake', 'GeneralPatientFilesController@fluidintake')->name('fluidintake');
            Route::get('general', 'GeneralPatientFilesController@general')->name('general');
            Route::get('pressure', 'GeneralPatientFilesController@pressure')->name('pressure');
            Route::get('xrayrequest', 'GeneralPatientFilesController@xrayrequest')->name('xrayrequest');
            Route::get('theatre', 'GeneralPatientFilesController@theatre')->name('theatre');
//            Route::get('treatment_sheet', 'GeneralPatientFilesController@treatment_sheet')->name('treatment_sheet');
            Route::get('request_for_appliance', 'GeneralPatientFilesController@request_for_appliance')->name('request_for_appliance');
            Route::get('radiology_request_form', 'GeneralPatientFilesController@radiology_request_form')->name('radiology_request_form');
            Route::get('patient_consent', 'GeneralPatientFilesController@patient_consent')->name('patient_consent');
            Route::get('daily_ward_report', 'GeneralPatientFilesController@daily_ward_report')->name('daily_ward_report');

            //general ward forms
            Route::get('pressure', 'GeneralPatientFilesController@pressure')->name('pressure');

//            Route::get('nursing', 'GeneralPatientFilesController@nursing')->name('nursing');


            //common forms
            Route::get('btu', 'GeneralPatientFilesController@btu')->name('btu');
            Route::get('laboratory', 'GeneralPatientFilesController@laboratory')->name('laboratory');
            Route::get('moh301', 'GeneralPatientFilesController@moh301')->name('moh301');
            Route::get('moh303', 'GeneralPatientFilesController@moh303')->name('moh303');
            Route::get('moh406', 'GeneralPatientFilesController@moh406')->name('moh406');
            Route::get('moh717', 'GeneralPatientFilesController@moh717')->name('moh717');
//            Route::get('prescription', 'GeneralPatientFilesController@prescription')->name('prescription');
//            Route::get('xray_request', 'GeneralPatientFilesController@xray_request')->name('xray_request');

        });

    });

    Route::get('outpatient_clinics', 'ClinicalServicesController@outpatient_clinics')->name('outpatient_clinics');
    Route::prefix('outpatient_clinics')->group(function () {
        Route::prefix('cardiology_clinic')->group(function () {
            Route::get('/', function () {
                return view('departments/clinical_services/outpatient/outpatient_clinics/cardiology_clinic');
            })->name('cardiology_clinic');
        });

        Route::prefix('dental_clinic')->group(function () {
            Route::get('/', function () {
                return view('departments.clinical_services.outpatient.outpatient_clinics.dental_clinic');
            })->name('dental_clinic');
        });
        Route::prefix('ent_clinic')->group(function () {
            Route::get('/', function () {
                return view('departments.clinical_services.outpatient.outpatient_clinics.ent_clinic');
            })->name('ent_clinic');
        });

        Route::prefix('eye_ophthalmology_clinic')->group(function () {
            Route::get('/', function () {
                return view('departments.clinical_services.outpatient.outpatient_clinics.eye_ophthalmology_clinic');
            })->name('eye_ophthalmology_clinic');
        });
        Route::prefix('mopc_clinic')->group(function () {
            Route::get('/', function () {
                return view('departments.clinical_services.outpatient.outpatient_clinics.mopc_clinic');
            })->name('mopc_clinic');
        });
        Route::prefix('obs_gyne_clinic')->group(function () {
            Route::get('/', function () {
                return view('departments.clinical_services.outpatient.outpatient_clinics.obs_gyne_clinic');
            })->name('obs_gyne_clinic');
        });
        Route::prefix('orthopedic_clinic')->group(function () {
            Route::get('/', function () {
                return view('departments.clinical_services.outpatient.outpatient_clinics.orthopedic_clinic');
            })->name('orthopedic_clinic');
        });
        Route::prefix('ot_clinic')->group(function () {
            Route::get('/', function () {
                return view('departments.clinical_services.outpatient.outpatient_clinics.ot_clinic');
            })->name('ot_clinic');
        });
        Route::prefix('physiotherapy_clinic')->group(function () {
            Route::get('/', function () {
                return view('departments.clinical_services.outpatient.outpatient_clinics.physiotherapy_clinic');
            })->name('physiotherapy_clinic');
        });
        Route::prefix('popc_clinic')->group(function () {
            Route::get('/', function () {
                return view('departments.clinical_services.outpatient.outpatient_clinics.popc_clinic');
            })->name('popc_clinic');
        });
        Route::prefix('sopc_surgical_clinic')->group(function () {
            Route::get('/', function () {
                return view('departments.clinical_services.outpatient.outpatient_clinics.sopc_surgical_clinic');
            })->name('sopc_surgical_clinic');
        });
        Route::prefix('tb')->group(function () {
            Route::get('/', function () {
                return view('departments.clinical_services.outpatient.outpatient_clinics.tb');
            })->name('tb');
        });


        Route::prefix('gynecology')->group(function () {
            Route::get('/', function () {
                return view('departments.clinical_services.outpatient.outpatient_clinics.gynecology');
            })->name('gynecology');
        });

        Route::get('consultant_clinic', 'ClinicalServicesController@consultant_clinic')->name('consultant_clinic');
        Route::group(array('prefix'=>'consultant_clinic'), function () {

        });


        Route::get('general_outpatient', 'ClinicalServicesController@general_outpatient')->name('general_outpatient');
        Route::group(array('prefix'=>'general_outpatient'), function () {

        });

        Route::prefix('doctors_office')->group(function () {
            Route::get('/', function () {
                return view('departments.clinical_services.outpatient.outpatient_clinics.doctors_office_home');
            })->name('doctors_office_home');
        });
        Route::prefix('well_baby')->group(function () {
            Route::get('/', function () {
                return view('departments.clinical_services.outpatient.outpatient_clinics.well_baby');
            })->name('well_baby');
        });

        //emergency department
        Route::prefix('emergency')->group(function () {
            Route::get('/', function () {
                return view('departments/clinical_services/outpatient/outpatient_clinics/emergency/emergency');
            })->name('emergency_home');
        });

    });

});

Route::prefix('administration')->group(function () {
    Route::get('/','AdministrationController@administration_home')->name('administration_home');
    Route::get('/billing/{patient_id}',['uses'=> 'AdministrationController@billing','as'=>'billing','pretty_name'=>'billing',]);
    Route::get('/official_use/{patient_id}',['uses'=> 'AdministrationController@official_use','as'=>'official_use','pretty_name'=>'official_use',]);
    Route::post('/billing_post/{patient_id}', 'administrationController@billing_post')->name('billing_post');
    Route::get('/attendances', 'AdministrationController@attendances')->name('attendances');
    Route::post('/attendances_post', 'AdministrationController@attendances_post')->name('attendances_post');
    Route::post('/official_use_post/{patient_id}', 'administrationController@official_use_post')->name('official_use_post');
    Route::get('/patient_information', 'AdministrationController@patient_information')->name('patient_information');
    Route::post('/patient_information_post', 'administrationController@patient_information_post')->name('patient_information_post');
    Route::get('/patient_information_a', 'AdministrationController@patient_information_a')->name('patient_information_a');

    Route::get('/patient_information/{patient_id}', 'AdministrationController@single_patient')->name('single_patient');

    Route::get('/employees', 'AdministrationController@employees')->name('employees');
    Route::post('/employees_post', 'AdministrationController@employees_post')->name('employees_post');

    Route::get('recruitment', 'AdministrationController@recruitment')->name('recruitment');
    Route::post('recruitments_post', 'AdministrationController@recruitments_post')->name('recruitments_post');

});

Route::prefix('stores')->group(function () {
    Route::get('/','StoresController@stores_home')->name('stores_home');
    Route::get('/inventory', 'InventoryController@inventory')->name('stores_inventory');
    Route::get('/orders', 'StoresController@orders')->name('orders');
    Route::post('/manage_brand_post', 'StoresController@manage_brand_post')->name('manage_brand_post');
    Route::post('/manage_categories_post', 'StoresController@manage_categories_post')->name('manage_categories_post');
    Route::post('/manage_products_post', 'StoresController@manage_products_post')->name('manage_products_post');

    Route::get('/manage_product', 'StoresController@manage_product')->name('manage_product');

    Route::get('/new_order/{patient_id}',['uses'=> 'StoresController@new_order','as'=>'new_order','pretty_name'=>'new_order',]);
    Route::post('/new_order_post/{patient_id}', 'StoresController@new_order_post')->name('new_order_post');

    Route::get('/invoice/{patient_id}/{new_order_id}','StoresController@stores_invoice')->name('stores_invoice');

    Route::get('/manage_brand', 'StoresController@manage_brand')->name('manage_brand');
    Route::get('/manage_categories', 'StoresController@manage_categories')->name('manage_categories');
    Route::prefix('inventory')->group(function () {
        Route::get('/inventoryadjustments', 'InventoryController@inventoryadjustments')->name('inventoryadjustments');
        Route::post('/inventoryadjustments_post', 'InventoryController@inventoryadjustments_post')->name('inventoryadjustments_post');
        Route::get('/reorderingrules', 'InventoryController@reorderingrules')->name('reorderingrules');
        Route::post('/reorderingrules_post', 'InventoryController@reorderingrules_post')->name('reorderingrules_post');
        Route::get('/scraporders', 'InventoryController@scraporders')->name('scraporders');
        Route::post('/scraporders_post', 'InventoryController@scraporders_post')->name('scraporders_post');
        Route::get('/stockoperations', 'InventoryController@stockoperations')->name('stockoperations');
        Route::post('/stockoperations_post', 'InventoryController@stockoperations_post')->name('stockoperations_post');
    });

    Route::prefix('purchases')->group(function (){

        Route::get('/','StoresController@stores_purchases')->name('stores_purchases');

        Route::prefix('purchase')->group(function (){

            Route::get('/','StoresController@stores_purchase')->name('stores_purchases_purchase');

            Route::prefix('request_for_quotation')->group(function (){

                Route::get('/','StoresController@stores_request_for_quotation')->name('stores_request_for_quotation');

                Route::get('new_products','StoresController@stores_rfq_new_products')->name('stores_rfq_new_products');

                Route::get('new_deliveries_and_invoices','StoresController@stores_rfq_new_deliveries_and_invoices')->name('stores_rfq_new_deliveries_and_invoices');

                Route::post('new_products_post','StoresController@stores_rfq_new_products_post')->name('stores_rfq_new_products_post');

                Route::post('new_deliveries_and_invoices_post','StoresController@stores_rfq_new_deliveries_and_invoices_post')->name('stores_rfq_new_deliveries_and_invoices_post');

            });

            Route::prefix('purchase_orders')->group(function (){
                Route::get('/','StoresController@stores_purchases_purchase_orders')->name('stores_purchases_purchase_orders');

                Route::get('new_products','StoresController@stores_po_new_products')->name('stores_po_new_products');
                Route::post('new_products_post','StoresController@stores_po_new_products_post')->name('stores_po_new_products_post');
                Route::get('new_deliveries_and_invoices','StoresController@stores_po_new_deliveries_and_invoices')->name('stores_po_new_deliveries_and_invoices');
                Route::post('new_deliveries_and_invoices_post','StoresController@stores_po_new_deliveries_and_invoices_post')->name('stores_po_new_deliveries_and_invoices_post');
            });


            Route::get('vendors','StoresController@stores_purchase_vendors')->name('stores_purchase_vendors');
            Route::post('vendors_post','StoresServicesController@stores_purchase_vendors_post')->name('stores_purchase_vendors_post');

            Route::get('products','StoresController@stores_purchase_products')->name('stores_purchase_products');
            Route::post('products_post','StoresServicesController@stores_purchase_products_post')->name('stores_purchase_products_post');

        });

        Route::prefix('control')->group(function (){

            Route::get('/','StoresController@stores_control')->name('stores_purchases_control');

            Route::get('incoming_products','StoresController@stores_control_incoming_products')->name('stores_control_incoming_products');
            Route::post('incoming_products_post','StoresController@stores_control_incoming_products_post')->name('stores_control_incoming_products_post');
            Route::get('vendor_bills','StoresController@stores_control_vendor_bills')->name('stores_control_vendor_bills');
            Route::post('vendor_bills_post','StoresController@stores_control_vendor_bills_post')->name('stores_control_vendor_bills_post');


        });

        Route::prefix('reporting')->group(function (){
            Route::get('/','StoresController@stores_reporting')->name('stores_purchases_reporting');
        });

    });



    Route::get('/requests', 'StoresController@requests')->name('requests');
    Route::post('/requests_post', 'StoresController@requests_post')->name('requests_post');

    Route::get('/suppliers', 'StoresController@suppliers')->name('suppliers');
    Route::post('/suppliers_post', 'StoresController@suppliers_post')->name('suppliers_post');

    Route::get('/requisitions', 'StoresController@requisitions')->name('requisitions');
    Route::post('/requisitions_post', 'StoresController@requisitions_post')->name('requisitions_post');
});

Route::prefix('pharmaceutical_services')->group(function () {
    Route::get('/','PharmaceuticalServicesController@pharmacy_home')->name('pharmaceuticalservices');
    Route::get('/inventory', 'PharmaceuticalServicesController@inventory_home')->name('pharmacy_inventory');
    Route::prefix('inventory')->group(function () {
        Route::get('/inventoryadjustments', 'PharmaceuticalServicesController@inventoryadjustments')->name('pharmacy_inventoryadjustments');
        Route::post('/inventoryadjustments_post', 'PharmaceuticalServicesController@inventoryadjustments_post')->name('pharmacy_inventoryadjustments_post');
        Route::get('/reorderingrules', 'PharmaceuticalServicesController@reorderingrules')->name('pharmacy_reorderingrules');
        Route::post('/reorderingrules_post', 'PharmaceuticalServicesController@reorderingrules_post')->name('pharmacy_reorderingrules_post');
        Route::get('/scraporders', 'PharmaceuticalServicesController@scraporders')->name('pharmacy_scraporders');
        Route::post('/scraporders_post', 'PharmaceuticalServicesController@scraporders_post')->name('pharmacy_scraporders_post');
        Route::get('/stockoperations', 'PharmaceuticalServicesController@stockoperations')->name('pharmacy_stockoperations');
        Route::post('/stockoperations_post', 'PharmaceuticalServicesController@stockoperations_post')->name('pharmacy_stockoperations_post');
//        Route::get('pharmacy_withdrawal_form', 'PharmaceuticalServicesController@pharmacy_withdrawal_form')->name('pharmacy_withdrawal_form');
//        Route::post('pharmacy_withdrawal_form_post', 'PharmaceuticalServicesController@pharmacy_withdrawal_form_post')->name('pharmacy_withdrawal_form_post');
    });

    Route::prefix('purchases')->group(function (){

        Route::get('/','PharmaceuticalServicesController@pharmacy_purchases')->name('pharmacy_purchases');

        Route::prefix('purchase')->group(function (){

            Route::get('/','PharmaceuticalServicesController@pharmacy_purchase')->name('pharmacy_purchases_purchase');

            Route::prefix('request_for_quotation')->group(function (){

                Route::get('/','PharmaceuticalServicesController@pharmacy_request_for_quotation')->name('pharmacy_request_for_quotation');

                Route::get('new_products','PharmaceuticalServicesController@pharmacy_rfq_new_products')->name('pharmacy_rfq_new_products');
                Route::post('new_products_post','PharmaceuticalServicesController@pharmacy_rfq_new_products_post')->name('pharmacy_rfq_new_products_post');

                Route::get('new_deliveries_and_invoices','PharmaceuticalServicesController@pharmacy_rfq_new_deliveries_and_invoices')->name('pharmacy_rfq_new_deliveries_and_invoices');
                Route::post('new_deliveries_and_invoices_post','PharmaceuticalServicesController@pharmacy_rfq_new_deliveries_and_invoices_post')->name('pharmacy_rfq_new_deliveries_and_invoices_post');

            });

            Route::prefix('purchase_orders')->group(function (){
                Route::get('/','PharmaceuticalServicesController@pharmacy_purchases_purchase_orders')->name('pharmacy_purchases_purchase_orders');

                Route::get('new_products','PharmaceuticalServicesController@pharmacy_po_new_products')->name('pharmacy_po_new_products');
                Route::post('new_products_post','PharmaceuticalServicesController@pharmacy_po_new_products_post')->name('pharmacy_po_new_products_post');
                Route::get('new_deliveries_and_invoices','PharmaceuticalServicesController@pharmacy_po_new_deliveries_and_invoices')->name('pharmacy_po_new_deliveries_and_invoices');
                Route::post('new_deliveries_and_invoices_post','PharmaceuticalServicesController@pharmacy_po_new_deliveries_and_invoices_post')->name('pharmacy_po_new_deliveries_and_invoices_post');
            });

            Route::get('vendors','PharmaceuticalServicesController@pharmacy_purchase_vendors')->name('pharmacy_purchase_vendors');
            Route::post('vendors_post','PharmaceuticalServicesController@pharmacy_purchase_vendors_post')->name('pharmacy_purchase_vendors_post');

            Route::get('products','PharmaceuticalServicesController@pharmacy_purchase_products')->name('pharmacy_purchase_products');
            Route::post('products_post','PharmaceuticalServicesController@pharmacy_purchase_products_post')->name('pharmacy_purchase_products_post');

        });

        Route::prefix('control')->group(function (){

            Route::get('/','PharmaceuticalServicesController@pharmacy_control')->name('pharmacy_purchases_control');

            Route::get('incoming_products','PharmaceuticalServicesController@pharmacy_control_incoming_products')->name('pharmacy_control_incoming_products');
            Route::post('incoming_products_post','PharmaceuticalServicesController@pharmacy_control_incoming_products_post')->name('pharmacy_control_incoming_products_post');
            Route::get('vendor_bills','PharmaceuticalServicesController@pharmacy_control_vendor_bills')->name('pharmacy_control_vendor_bills');
            Route::post('vendor_bills_post','PharmaceuticalServicesController@pharmacy_control_vendor_bills_post')->name('pharmacy_control_vendor_bills_post');


        });

        Route::prefix('reporting')->group(function (){
            Route::get('/','PharmaceuticalServicesController@pharmacy_reporting')->name('pharmacy_purchases_reporting');
        });

    });
});



Route::prefix('/manage_accounts')->group(function () {
    Route::get('/profile', 'AccountsManagementController@profile')->name('profile');
    Route::post('/profile_avatar_post', 'AccountsManagementController@profile_avatar_post')->name('profile_avatar_post');
    Route::post('/profile_cover_post', 'AccountsManagementController@profile_cover_post')->name('profile_cover_post');
});

//hospital page
Route::prefix('/hospital_admin')->group(function () {
    Route::get('/hospital_profile', 'InstitutionController@hospital_profile')->name('hospital_profile');
    Route::post('/update_hospital_profile', 'InstitutionController@update_hospital_profile')->name('update_hospital_profile');
    Route::get('/manage_users', 'InstitutionController@manage_users')->name('manage_users');
    Route::post('/manage_users/{user_id}', 'InstitutionController@admin_update_profile')->name('admin_update_profile');
    Route::post('/set_logo', 'InstitutionController@set_logo')->name('set_logo');
    Route::post('/delete_profile/{user_id}', 'InstitutionController@delete_profile')->name('delete_profile');
    Route::post('/make_admin/{user_id}', 'InstitutionController@make_admin')->name('make_admin');
    Route::post('/remove_admin/{user_id}', 'InstitutionController@remove_admin')->name('remove_admin');

    Route::prefix('/user_settings')->group(function (){
        Route::get('/','InstitutionController@user_settings')->name('us_home');
        Route::get('/add_role','InstitutionController@add_user_role')->name('us_add_role');
        Route::post('/add_role_post','InstitutionController@add_user_role_post')->name('us_add_role_post');
        Route::post('/edit_role_post/{role_id}','InstitutionController@edit_user_role_post')->name('edit_user_role_post');

        Route::post('/add_department','InstitutionController@add_department')->name('add_department');
        Route::post('/edit_department{$department_id}','InstitutionController@edit_department')->name('edit_department');
        Route::get('/manage_role_permissions','InstitutionController@manage_role_permissions_get');
        Route::post('/manage_role_permissions','InstitutionController@manage_role_permissions')->name('us_manage_role_permissions');

        Route::post('/assign_permissions_post','InstitutionController@assign_permissions')->name('us_assign_permissions');

    });

});

Route::prefix('/register')->group(function () {
    Route::get('/institution', 'InstitutionController@register_institution')->name('institution');
    Route::post('/institution_post', 'InstitutionController@create')->name('institution_post');
});

 Route::get('/import', 'ImportController@getImport')->name('import');
Route::post('/import_parse', 'ImportController@parseImport')->name('import_parse');
Route::post('/import_process', 'ImportController@processImport')->name('import_process');
Route::get('/contact', 'ImportController@contact')->name('contact');


//PATIENT PROFILE
Route::prefix('patient_profile')->group(function ()
{

    Route::get('login','PatientProfileController@login')->name('patient_login');
    Route::post('login_post','PatientProfileController@login_post')->name('patient_login_post');

    Route::get('register','PatientProfileController@register')->name('patient_register');
    Route::post('register_post','PatientProfileController@register_post')->name('patient_register_post');

    Route::post('patient_logout','PatientProfileController@logout')->name('patient_logout');

    Route::get('patient_appointments', 'PatientProfileController@patient_appointments')->name('patient_appointments');
    Route::get('emergency_services', 'PatientProfileController@emergency_services')->name('emergency_services');
    Route::get('patient_homebased', 'PatientProfileController@patient_homebased')->name('patient_homebased');
    Route::get('patient_home', 'PatientProfileController@patient_home')->name('patient_home');
    Route::get('patient_cards', 'PatientProfileController@patient_cards')->name('patient_cards');
    Route::get('patient_forms', 'PatientProfileController@patient_forms')->name('patient_forms');
    Route::get('patient_booklets', 'PatientProfileController@patient_booklets')->name('patient_booklets');
    Route::get('case_summary', 'PatientProfileController@case_summary')->name('case_summary');
//    Route::get('prescription_form', 'PatientProfileController@prescription_form')->name('prescription_form');
//    Route::get('allergy_form', 'PatientProfileController@allergy_form')->name('allergy_form');
//    Route::get('laboratory_report_sheet', 'PatientProfileController@laboratory_report_sheet')->name('laboratory_report_sheet');
//    Route::get('radiology_report_sheet', 'PatientProfileController@radiology_report_sheet')->name('radiology_report_sheet');
    Route::get('childhealthcard1', 'PatientProfileController@childhealthcard1')->name('childhealthcard1');
    Route::get('physical', 'PatientProfileController@physical')->name('physical');
    Route::get('presentpregnancy', 'PatientProfileController@presentpregnancy')->name('presentpregnancy');
    Route::get('weightchart', 'PatientProfileController@weightchart')->name('weightchart');
    Route::get('childmonitoring', 'PatientProfileController@childmonitoring')->name('childmonitoring');
    Route::get('previouspregnancy', 'PatientProfileController@previouspregnancy')->name('previouspregnancy');
    Route::get('immunization', 'PatientProfileController@immunization')->name('immunization');
    Route::get('attendancecard', 'PatientProfileController@attendancecardcard')->name('attendancecardcard');
    Route::get('telemedicine', 'PatientProfileController@telemedicine')->name('telemedicine');
    Route::get('ambulance', 'PatientProfileController@ambulance')->name('ambulance');
    Route::get('firstaid', 'PatientProfileController@firstaid')->name('firstaid');
    Route::get('hospitals', 'PatientProfileController@hospitals')->name('hospitals');
    Route::get('agencies', 'PatientProfileController@agencies')->name('agencies');
    Route::get('nurse', 'PatientProfileController@nurse')->name('nurse');
//    Route::get('prescription', 'PatientProfileController@prescription')->name('prescription');
    Route::get('yellow', 'PatientProfileController@yellow')->name('yellow');
    Route::get('registration', 'PatientProfileController@registration')->name('registration');
    Route::get('registration_data', 'PatientProfileController@registration_data')->name('registration_data');
    Route::get('medical_surgical', 'PatientProfileController@medical_surgical')->name('medical_surgical');
    Route::get('previous_pregnancy', 'PatientProfileController@previous_pregnancy')->name('previous_pregnancy');
    Route::get('general_information', 'PatientProfileController@general_information')->name('general_information');
    Route::get('weight', 'PatientProfileController@weight')->name('weight');
    Route::get('present_pregnancy', 'PatientProfileController@present_pregnancy')->name('present_pregnancy');
    Route::get('anc_generalinformation', 'PatientProfileController@anc_generalinformation')->name('anc_generalinformation');
    Route::get('preventive_services', 'PatientProfileController@preventive_services')->name('preventive_services');
    Route::get('delivery', 'PatientProfileController@delivery')->name('delivery');
    Route::get('postnatal_examination', 'PatientProfileController@postnatal_examination')->name('postnatal_examination');
    Route::get('family_planning', 'PatientProfileController@family_planning')->name('family_planning');
    Route::get('clinical_notes', 'PatientProfileController@clinical_notes')->name('clinical_notes');

    Route::get('immunization_card', 'PatientProfileController@immunization_card')->name('immunization_card');
    Route::get('vit_a', 'PatientProfileController@vit_a')->name('vit_a');
    Route::get('supplemental_vaccines', 'PatientProfileController@supplemental_vaccines')->name('supplemental_vaccines');
    Route::get('milestones_chart', 'PatientProfileController@milestones_chart')->name('milestones_chart');
    Route::get('id_children', 'PatientProfileController@id_children')->name('id_children');
    Route::get('co_trimoxazole', 'PatientProfileController@co_trimoxazole')->name('co_trimoxazole');
    Route::get('immunologic', 'PatientProfileController@immunologic')->name('immunologic');
    Route::get('health_worker', 'PatientProfileController@health_worker')->name('health_worker');

});

Route::get('/maternal/{patient_id}',['uses'=> 'MCHController@maternal','as'=>'maternal','pretty_name'=>'maternal',]);
Route::post('/maternal_post/{patient_id}', 'MCHController@maternal_post')->name('maternal_post');

Route::post('/maternal_delete/{id}','MCHController@maternal_delete')->name('maternal_delete');
Route::post('/previous_delete/{id_number}','MCHController@previous_delete')->name('previous_delete');
Route::post('/surgical_delete/{id_number}','MCHController@surgical_delete')->name('surgical_delete');
Route::post('/physicalexamination_delete/{id_number}','MCHController@physicalexamination_delete')->name('physicalexamination_delete');
Route::post('/childhealthcard_delete/{id_number}','MCHController@childhealthcard_delete')->name('childhealthcard_delete');
Route::post('/childhealthcard1_delete/{id_number}','MCHController@childhealthcard1_delete')->name('childhealthcard1_delete');
Route::post('/childhealthcard2_delete/{id_number}','MCHController@childhealthcard2_delete')->name('childhealthcard2_delete');
Route::post('/childhealthcard3_delete/{id_number}','MCHController@childhealthcard3_delete')->name('childhealthcard3_delete');
Route::post('/childhealthcard4_delete/{id_number}','MCHController@childhealthcard4_delete')->name('childhealthcard4_delete');
Route::post('/childhealthcard5_delete/{id_number}','MCHController@childhealthcard5_delete')->name('childhealthcardl5_delete');
Route::post('/childhealthcard6_delete/{id_number}','MCHController@childhealthcard6_delete')->name('childhealthcard6_delete');
Route::post('/create_child_delete/{id_number}','MCHController@create_child_delete')->name('create_child_delete_delete');

Route::get('/mch_booklet/{patient_id}',['uses'=> 'MCHController@mch_booklet','as'=>'mch_booklet','pretty_name'=>'mch_booklet',]);

Route::post('/medicalsurgical_post/{patient_id}', 'MCHController@medicalsurgical_post')->name('medicalsurgical_post');
Route::get('/previous/{patient_id}',['uses'=> 'MCHController@previous','as'=>'previous','pretty_name'=>'previous',]);


Route::get('/surgical/{patient_id}',['uses'=> 'MCHController@surgical','as'=>'surgical','pretty_name'=>'surgical',]);
Route::get('/physicalexamination/{patient_id}',['uses'=> 'MCHController@physicalexamination','as'=>'physicalexamination','pretty_name'=>'physicalexamination',]);

Route::get('/weight/{patient_id}',['uses'=> 'MCHController@weight','as'=>'weight','pretty_name'=>'weight',]);
Route::get('/childmonitoring/{patient_id}',['uses'=> 'MCHController@childmonitoring','as'=>'childmonitoring','pretty_name'=>'childmonitoring',]);
Route::get('/childmonitemp/{patient_id}',['uses'=> 'MCHController@childmonitemp','as'=>'childmonitemp','pretty_name'=>'childmonitemp',]);
Route::get('/mothersbp/{patient_id}',['uses'=> 'MCHController@mothersbp','as'=>'mothersbp','pretty_name'=>'mothersbp',]);
Route::get('/motherstemp/{patient_id}',['uses'=> 'MCHController@motherstemp','as'=>'motherstemp','pretty_name'=>'motherstemp',]);
Route::get('/mothersweight/{patient_id}',['uses'=> 'MCHController@mothersweight','as'=>'mothersweight','pretty_name'=>'mothersweight',]);
Route::post('/weight_post/{patient_id}', 'MCHController@weight_post')->name('weight_post');
Route::post('/childmonitoring_post/{patient_id}', 'MCHController@childmonitoring_post')->name('childmonitoring_post');
Route::post('/childmonitemp_post/{patient_id}', 'MCHController@childmonitemp_post')->name('childmonitemp_post');
Route::post('/mothersbp_post/{patient_id}', 'MCHController@mothersbp_post')->name('mothersbp_post');
Route::post('/motherstemp_post/{patient_id}', 'MCHController@motherstemp_post')->name('motherstemp_post');
Route::post('/mothersweight_post/{patient_id}', 'MCHController@mothersweight_post')->name('mothersweight_post');
Route::get('/bmi/{patient_id}',['uses'=> 'MCHController@bmi','as'=>'bmi','pretty_name'=>'bmi',]);
Route::post('/bmi_post', 'MCHController@bmi_post')->name('bmi_post');

Route::get('/childhealthcard/{patient_id}',['uses'=> 'MCHController@childhealthcard','as'=>'childhealthcard','pretty_name'=>'childhealthcard',]);
Route::post('/childhealthcard_post/{patient_id}', 'MCHController@childhealthcard_post')->name('childhealthcard_post');
Route::get('/childhealthcard1/{patient_id}',['uses'=> 'MCHController@childhealthcard1','as'=>'childhealthcard1','pretty_name'=>'childhealthcard1',]);
Route::get('/childhealthcard2/{patient_id}',['uses'=> 'MCHController@childhealthcard2','as'=>'childhealthcard2','pretty_name'=>'childhealthcard2',]);
Route::get('/childhealthcard3/{patient_id}',['uses'=> 'MCHController@childhealthcard3','as'=>'childhealthcard3','pretty_name'=>'childhealthcard3',]);
Route::get('/childhealthcard4/{patient_id}',['uses'=> 'MCHController@childhealthcard4','as'=>'childhealthcard4','pretty_name'=>'childhealthcard4',]);
Route::get('/childhealthcard5/{patient_id}',['uses'=> 'MCHController@childhealthcard5','as'=>'childhealthcard5','pretty_name'=>'childhealthcard5',]);
Route::get('/childhealthcard6/{patient_id}',['uses'=> 'MCHController@childhealthcard6','as'=>'childhealthcard6','pretty_name'=>'childhealthcard6',]);
Route::post('/previous_post/{patient_id}', 'MCHController@previous_post')->name('previous_post');
Route::post('/surgical_post/{patient_id}', 'MCHController@surgical_post')->name('surgical_post');
Route::post('/physicalexamination_post/{patient_id}', 'MCHController@physicalexamination_post')->name('physicalexamination_post');
Route::get('/create_child/{patient_id}',['uses'=> 'MCHController@create_child','as'=>'create_child','pretty_name'=>'create_child',]);
Route::post('/create_child_post/{patient_id}', 'MCHController@create_child_post')->name('create_child_post');
Route::post('/childmonitoring_post/{patient_id}', 'MCHController@childmonitoring_post')->name('childmonitoring_post');
Route::post('/childhealthcard_post/{patient_id}', 'MCHController@childhealthcard_post')->name('childhealthcard_post');
Route::post('/childhealthcard1_post/{patient_id}', 'MCHController@childhealthcard1_post')->name('childhealthcard1_post');
Route::post('/childhealthcard2_post/{patient_id}', 'MCHController@childhealthcard2_post')->name('childhealthcard2_post');
Route::post('/childhealthcard3_post/{patient_id}', 'MCHController@childhealthcard3_post')->name('childhealthcard3_post');
Route::post('/childhealthcard4_post/{patient_id}', 'MCHController@childhealthcard4_post')->name('childhealthcard4_post');
Route::post('/childhealthcard5_post/{patient_id}', 'MCHController@childhealthcard5_post')->name('childhealthcard5_post');
Route::post('/childhealthcard6_post/{patient_id}', 'MCHController@childhealthcard6_post')->name('childhealthcard6_post');

Route::get('/pharmacy_billed_list/{patient_id}',['uses'=> 'PharmaceuticalServicesController@pharmacy_billed_list','as'=>'pharmacy_billed_list','pretty_name'=>'pharmacy_billed_list',]);
Route::get('/pharmacy_paid_list/{patient_id}',['uses'=> 'PharmaceuticalServicesController@pharmacy_paid_list','as'=>'pharmacy_paid_list','pretty_name'=>'pharmacy_paid_list',]);
Route::get('/pharmacy_dispensed_list/{patient_id}',['uses'=> 'PharmaceuticalServicesController@pharmacy_dispensed_list','as'=>'pharmacy_dispensed_list','pretty_name'=>'pharmacy_dispensed_list',]);
Route::post('/pharmacy_billed_list_post/{patient_id}', 'PharmaceuticalServicesController@pharmacy_billed_list_post')->name('pharmacy_billed_list_post');
Route::post('/pharmacy_dispensed_post/{patient_id}', 'PharmaceuticalServicesController@pharmacy_dispensed_post')->name('pharmacy_dispensed_post');

//AJAX
Route::get('/stores_get_quantity/{id}',function ($id){
    $product = DB::table('manage_products')->where('id',$id)->get()[0];
    return response()->json([
        'quantity'=>$product->product_qty,
    ]);
});

Route::prefix('analytics')->group(function () {
    Route::get('/', 'HomeController@analytics')->name('analytics');
});