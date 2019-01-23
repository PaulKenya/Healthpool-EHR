@extends('layouts.master')

@section('content')
    <!-- Title & Breadcrumbs-->
    <div class="row page-titles">
        <div class="col-md-12 align-self-center">
            <h4 class="theme-cl">Cancer Record Management</h4>
        </div>
    </div>
    <!-- Title & Breadcrumbs-->

    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Cancer Record Management</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable" class="table table-striped">
                            <thead>
                            <tr>
                                <th>health_facility_name</th>
                                <th>sub_county</th>
                                <th>county</th>
                                <th>year</th>
                                <th>month</th>
                                <th>registry_number</th>
                                <th>surname</th>
                                <th>middle_name</th>
                                <th>last_name</th>
                                <th>identification_number</th>
                                <th>marital_status</th>
                                <th>telephone_number_patient</th>
                                <th>telephone_number_next_of_kin</th>
                                <th>age</th>
                                <th>date_of_birth</th>
                                <th>sex</th>
                                <th>county_residence</th>
                                <th>division_residence</th>
                                <th>location_residence</th>
                                <th>place_of_birth</th>
                                <th>tribe</th>
                                <th>religion</th>
                                <th>education_level</th>
                                <th>occupation</th>
                                <th>smoking_status</th>
                                <th>drinking_status</th>
                                <th>incidence_date</th>
                                <th>basis_of_diagnosis</th>
                                <th>primary_site</th>
                                <th>code_no</th>
                                <th>laterality_unilat</th>
                                <th>laterality_bil</th>
                                <th>laterality_rt</th>
                                <th>laterality_lt</th>
                                <th>laterality_unk</th>
                                <th>histology</th>
                                <th>morphology_code</th>
                                <th>behaviour</th>
                                <th>grade</th>
                                <th>stage</th>
                                <th>t</th>
                                <th>n</th>
                                <th>m</th>
                                <th>surgery_first_course_of_treatment</th>
                                <th>surgery_date</th>
                                <th>radiotherapy_first_course_of_treatment</th>
                                <th>radiotherapy_date</th>
                                <th>chemotherapy_first_course_of_treatment</th>
                                <th>chemotherapy_date</th>
                                <th>hormone_therapy_first_course_of_treatment</th>
                                <th>hormone_therapy_date</th>
                                <th>immuno_first_course_of_treatment</th>
                                <th>immuno_date</th>
                                <th>other_fct</th>
                                <th>other_fct_date</th>
                                <th>lrap_file</th>
                                <th>lab_no</th>
                                <th>cd4_count</th>
                                <th>sicn_file</th>
                                <th>specifically</th>
                                <th>other_concurrent_illness</th>
                                <th>source_1_hospital</th>
                                <th>hospital_number</th>
                                <th>src_date_1</th>
                                <th>source_2_lab</th>
                                <th>lab_number</th>
                                <th>src_date_2</th>
                                <th>referred_from</th>
                                <th>rf_ip_number</th>
                                <th>referred_to</th>
                                <th>rt_ip_number</th>
                                <th>present_status</th>
                                <th>hospice_number</th>
                                <th>dlc_dod</th>
                                <th>cause_of_death</th>
                                <th>remarks</th>
                                <th>form_filled_by</th>
                                <th>form_fill_date</th>
                                <th>checked_by</th>
                                <th>data_entered_by</th>
                                <th>data_entered_by_date</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(isset($cancer_records))
                                @foreach($cancer_records as $cancer_record)
                                    <tr>
                                        <td>{{ $cancer_record->health_facility_name }}</td>
                                        <td>{{ $cancer_record->sub_county }}</td>
                                        <td>{{ $cancer_record->county }}</td>
                                        <td>{{ $cancer_record->year }}</td>
                                        <td>{{ $cancer_record->month }}</td>
                                        <td>{{ $cancer_record->registry_number }}</td>
                                        <td>{{ $cancer_record->surname }}</td>
                                        <td>{{ $cancer_record->middle_name }}</td>
                                        <td>{{ $cancer_record->last_name }}</td>
                                        <td>{{ $cancer_record->identification_number }}</td>
                                        <td>{{ $cancer_record->marital_status }}</td>
                                        <td>{{ $cancer_record->telephone_number_patient }}</td>
                                        <td>{{ $cancer_record->telephone_number_next_of_kin }}</td>
                                        <td>{{ $cancer_record->age }}</td>
                                        <td>{{ $cancer_record->date_of_birth }}</td>
                                        <td>{{ $cancer_record->sex }}</td>
                                        <td>{{ $cancer_record->county_residence }}</td>
                                        <td>{{ $cancer_record->division_residence }}</td>
                                        <td>{{ $cancer_record->location_residence }}</td>
                                        <td>{{ $cancer_record->place_of_birth }}</td>
                                        <td>{{ $cancer_record->tribe }}</td>
                                        <td>{{ $cancer_record->religion }}</td>
                                        <td>{{ $cancer_record->education_level }}</td>
                                        <td>{{ $cancer_record->occupation }}</td>
                                        <td>{{ $cancer_record->smoking_status }}</td>
                                        <td>{{ $cancer_record->drinking_status }}</td>
                                        <td>{{ $cancer_record->incidence_date }}</td>
                                        <td>{{ $cancer_record->basis_of_diagnosis }}</td>
                                        <td>{{ $cancer_record->primary_site }}</td>
                                        <td>{{ $cancer_record->code_no }}</td>
                                        <td>{{ $cancer_record->laterality_unilat }}</td>
                                        <td>{{ $cancer_record->laterality_bil }}</td>
                                        <td>{{ $cancer_record->laterality_rt }}</td>
                                        <td>{{ $cancer_record->laterality_lt }}</td>
                                        <td>{{ $cancer_record->laterality_unk }}</td>
                                        <td>{{ $cancer_record->histology }}</td>
                                        <td>{{ $cancer_record->morphology_code }}</td>
                                        <td>{{ $cancer_record->behaviour }}</td>
                                        <td>{{ $cancer_record->grade }}</td>
                                        <td>{{ $cancer_record->stage }}</td>
                                        <td>{{ $cancer_record->t }}</td>
                                        <td>{{ $cancer_record->n }}</td>
                                        <td>{{ $cancer_record->m }}</td>
                                        <td>{{ $cancer_record->surgery_first_course_of_treatment }}</td>
                                        <td>{{ $cancer_record->surgery_date }}</td>
                                        <td>{{ $cancer_record->radiotherapy_first_course_of_treatment }}</td>
                                        <td>{{ $cancer_record->radiotherapy_date }}</td>
                                        <td>{{ $cancer_record->chemotherapy_first_course_of_treatment }}</td>
                                        <td>{{ $cancer_record->chemotherapy_date }}</td>
                                        <td>{{ $cancer_record->hormone_therapy_first_course_of_treatment }}</td>
                                        <td>{{ $cancer_record->hormone_therapy_date }}</td>
                                        <td>{{ $cancer_record->immuno_first_course_of_treatment }}</td>
                                        <td>{{ $cancer_record->immuno_date }}</td>
                                        <td>{{ $cancer_record->other_fct }}</td>
                                        <td>{{ $cancer_record->other_fct_date }}</td>
                                        <td>{{ $cancer_record->lrap_file }}</td>
                                        <td>{{ $cancer_record->lab_no }}</td>
                                        <td>{{ $cancer_record->cd4_count }}</td>
                                        <td>{{ $cancer_record->sicn_file }}</td>
                                        <td>{{ $cancer_record->specifically }}</td>
                                        <td>{{ $cancer_record->other_concurrent_illness }}</td>
                                        <td>{{ $cancer_record->source_1_hospital }}</td>
                                        <td>{{ $cancer_record->hospital_number }}</td>
                                        <td>{{ $cancer_record->src_date_1 }}</td>
                                        <td>{{ $cancer_record->source_2_lab }}</td>
                                        <td>{{ $cancer_record->lab_number }}</td>
                                        <td>{{ $cancer_record->src_date_2 }}</td>
                                        <td>{{ $cancer_record->referred_from }}</td>
                                        <td>{{ $cancer_record->rf_ip_number }}</td>
                                        <td>{{ $cancer_record->referred_to }}</td>
                                        <td>{{ $cancer_record->rt_ip_number }}</td>
                                        <td>{{ $cancer_record->present_status }}</td>
                                        <td>{{ $cancer_record->hospice_number }}</td>
                                        <td>{{ $cancer_record->dlc_dod }}</td>
                                        <td>{{ $cancer_record->cause_of_death }}</td>
                                        <td>{{ $cancer_record->remarks }}</td>
                                        <td>{{ $cancer_record->form_filled_by }}</td>
                                        <td>{{ $cancer_record->form_fill_date }}</td>
                                        <td>{{ $cancer_record->checked_by }}</td>
                                        <td>{{ $cancer_record->data_entered_by }}</td>
                                        <td>{{ $cancer_record->data_entered_by_date }}</td>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="content">
                        <button class="btn btn-success" data-toggle="modal" data-target="#myModal">Add more Items</button>
                        {{--<button class="btn btn-info" data-toggle="modal" data-target="#myModal">Print</button>--}}
                    </div>
                </div>
                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog modal-lg">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Cancer Record Management</h4>
                            </div>
                            <div class="modal-body">

                                <div class="col-md-12">
                                    <div class="card">

                                        <div class="container-fluid">
                                            <h1></h1>
                                            <form enctype="multipart/form-data" method="post" action="{{route('cancer_records_management_post')}}">
                                                {{csrf_field()}}
                                                <h4>M.O.H HOSPITAL BASED CANCER ABSTRACT FORM</h4>

                                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" id="institution-tab" data-toggle="tab" href="#institution" role="tab" aria-controls="institution" aria-selected="true">
                                                            <b>Institution</b>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="patient-tab" data-toggle="tab" href="#patient" role="tab" aria-controls="patient" aria-selected="false">
                                                            <b>A. Patient</b>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="tumuor-tab" data-toggle="tab" href="#tumuor" role="tab" aria-controls="tumuor" aria-selected="false">
                                                            <b>B. Tumuor</b>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="treatment-tab" data-toggle="tab" href="#treatment" role="tab" aria-controls="treatment" aria-selected="false">
                                                            <b>C. Treatment</b>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="concurrent_illness-tab" data-toggle="tab" href="#concurrent_illness" role="tab" aria-controls="concurrent_illness" aria-selected="false">
                                                            <b>D. Concurrent Illness</b>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="sources-tab" data-toggle="tab" href="#sources" role="tab" aria-controls="sources" aria-selected="false">
                                                            <b>E. Sources</b>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="follow_up-tab" data-toggle="tab" href="#follow_up" role="tab" aria-controls="follow_up" aria-selected="false">
                                                            <b>F. Follow Up</b>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <div class="tab-content" id="myTabContent">
                                                    <div class="tab-pane fade show active" id="institution" role="tabpanel" aria-labelledby="institution-tab">
                                                        <div class="container-fluid">
                                                            <div class="form-row">
                                                                <div class="form-group col">
                                                                    <label for="health_facility_name"><b>Health Facility Name</b></label>
                                                                    <input type="text" name="health_facility_name" id="health_facility_name" class="form-control" placeholder="">
                                                                </div>
                                                                <div class="form-group col">
                                                                    <label for="sub_county"><b>Sub County</b></label>
                                                                    <input type="text" name="sub_county" id="sub_county" class="form-control" placeholder="">
                                                                </div>
                                                                <div class="form-group col">
                                                                    <label for="county"><b>County</b></label>
                                                                    <input type="text" name="county" id="county" class="form-control" placeholder="">
                                                                </div>
                                                            </div>
                                                            <div class="form-row">
                                                                <div class="form-group col">
                                                                    <label for="year"><b>Year</b></label>
                                                                    <input type="number" name="year" id="year" class="form-control" placeholder="">
                                                                </div>
                                                                <div class="form-group col">
                                                                    <label for="month"><b>Month</b></label>
                                                                    <input type="text" name="month" id="month" class="form-control" placeholder="">
                                                                </div>
                                                            </div>
                                                            <div class="form-row">
                                                                <div class="form-group col">
                                                                    <label for="registry_number"><b>Registry Number</b></label>
                                                                    <input type="number" name="registry_number" id="registry_number" class="form-control" placeholder="" >
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="patient" role="tabpanel" aria-labelledby="patient-tab">
                                                        <div class="container-fluid">
                                                            <div class="form-row">1. Name</div>
                                                            <div class="form-row">
                                                                <div class="form-group col">
                                                                    <label for="surname">Surname</label>
                                                                    <input type="text" name="surname" id="surname" class="form-control" placeholder="" >
                                                                </div>
                                                                <div class="form-group col">
                                                                    <label for="middle_name">Middle Name</label>
                                                                    <input type="text" name="middle_name" id="middle_name" class="form-control" placeholder="" >
                                                                </div>
                                                                <div class="form-group col">
                                                                    <label for="last_name">Last Name</label>
                                                                    <input type="text" name="last_name" id="last_name" class="form-control" placeholder="" >
                                                                </div>
                                                            </div>
                                                            <div class="form-row">
                                                                <div class="form-group col">
                                                                    <label for="identification_number">2. Identification Number</label>
                                                                    <input type="number" name="identification_number" id="identification_number" class="form-control" placeholder="" >
                                                                </div>
                                                                <div class="form-group col">
                                                                    <label for="marital_status">3. Marital Status</label>
                                                                    <select class="form-control" name="marital_status" id="marital_status">
                                                                        <option value="single">1. Single</option>
                                                                        <option value="married">2. Married</option>
                                                                        <option value="widowed">3. Widowed</option>
                                                                        <option value="separated">4. Separated</option>
                                                                        <option value="cohabiting">5. Cohabiting</option>
                                                                        <option value="divorced">6. Divorced</option>
                                                                        <option value="child">7. Child</option>
                                                                        <option value="unknown">8. Unknown</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-row">
                                                                <div class="form-group col">
                                                                    <label for="telephone_number_patient">4. Telephone Number (Patient)</label>
                                                                    <input type="number" name="telephone_number_patient" id="telephone_number_patient" class="form-control" placeholder="" >
                                                                </div>
                                                                <div class="form-group col">
                                                                    <label for="telephone_number_next_of_kin">5. Telephone Number (Next of Kin)</label>
                                                                    <input type="number" name="telephone_number_next_of_kin" id="telephone_number_next_of_kin" class="form-control" placeholder="" >
                                                                </div>
                                                            </div>
                                                            <div class="form-row">
                                                                <div class="form-group col">
                                                                    <label for="age">6. Age</label>
                                                                    <input type="number" name="age" id="age" class="form-control" placeholder="" >
                                                                </div>
                                                                <div class="form-group col">
                                                                    <label for="date_of_birth">7. Date of Birth</label>
                                                                    <input type="date" name="date_of_birth" id="date_of_birth" class="form-control" placeholder="" >
                                                                </div>
                                                                <div class="form-group col">
                                                                    <div class="form-group">
                                                                        <label for="sex">8. Sex</label>
                                                                        <select class="form-control" name="sex" id="sex">
                                                                            <option value="male">1. Male</option>
                                                                            <option value="female">2. Female</option>
                                                                            <option value="unk">9. Unk</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-row">9. Place of Residence</div>
                                                            <div class="form-row">
                                                                <div class="form-group col">
                                                                    <label for="county_residence">A. County</label>
                                                                    <input type="text" name="county_residence" id="county_residence" class="form-control" placeholder="" >
                                                                </div>
                                                                <div class="form-group col">
                                                                    <label for="division_residence">B. Division</label>
                                                                    <input type="text" name="division_residence" id="division_residence" class="form-control" placeholder="" >
                                                                </div>
                                                                <div class="form-group col">
                                                                    <label for="location_residence">C. Location / Estate</label>
                                                                    <input type="text" name="location_residence" id="location_residence" class="form-control" placeholder="" >
                                                                </div>
                                                            </div>
                                                            <div class="form-row">
                                                                <div class="form-group col">
                                                                    <label for="place_of_birth">10. Place of Birth</label>
                                                                    <input type="text" name="place_of_birth" id="place_of_birth" class="form-control" placeholder="" >
                                                                </div>
                                                                <div class="form-group col">
                                                                    <label for="tribe">11. Tribe</label>
                                                                    <input type="text" name="tribe" id="tribe" class="form-control" placeholder="" >
                                                                </div>
                                                            </div>
                                                            <div class="form-row">
                                                                <div class="form-group col">
                                                                    <label for="religion">12. Religion</label>
                                                                    <select class="form-control" name="religion" id="religion">
                                                                        <option value="christian">1. Christian</option>
                                                                        <option value="muslim">2. Muslim</option>
                                                                        <option value="hindu">3. Hindu</option>
                                                                        <option value="other">4. Other</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group col">
                                                                    <label for="education_level">13. Education Level</label>
                                                                    <input type="text" name="education_level" id="education_level" class="form-control" placeholder="" >
                                                                </div>
                                                                <div class="form-group col">
                                                                    <label for="occupation">14. Occupation</label>
                                                                    <input type="text" name="occupation" id="occupation" class="form-control" placeholder="" >
                                                                </div>
                                                            </div>
                                                            <div class="form-row">
                                                                <div class="form-group col">
                                                                    <label for="smoking_status">15. Smoking Status</label>
                                                                    <select class="form-control" name="smoking_status" id="smoking_status">
                                                                        <option value="never">1. Never</option>
                                                                        <option value="smoker">2. Smoker</option>
                                                                        <option value="ex_smoker">3. Ex-Smoker</option>
                                                                        <option value="unknown">9. Unknown</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group col">
                                                                    <label for="drinking_status">16. Drinking Status</label>
                                                                    <select class="form-control" name="drinking_status" id="drinking_status">
                                                                        <option value="never">1. Never</option>
                                                                        <option value="alcoholic">2. Alcoholic</option>
                                                                        <option value="ex_alcoholic">3. Ex-Alcoholic</option>
                                                                        <option value="unknown">9. Unknown</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="tumuor" role="tabpanel" aria-labelledby="tumuor-tab">
                                                        <div class="container-fluid">
                                                            <div class="form-row">
                                                                <div class="form-group col">
                                                                    <label for="incidence_date">17. Incidence Date</label>
                                                                    <input type="date" name="incidence_date" id="incidence_date" class="form-control" placeholder="">
                                                                </div>
                                                                <div class="form-group col">
                                                                    <label for="basis_of_diagnosis">18. Basis of Diagnosis</label>
                                                                    <select class="form-control" name="basis_of_diagnosis" id="basis_of_diagnosis">
                                                                        <option value="death_cert_only">0. Death cert only</option>
                                                                        <option value="clinical_only">1. Clinical only</option>
                                                                        <option value="clinic_invest_or_radio_imaging">2. Clinic. Invest / radio-imaging</option>
                                                                        <option value="biochem_immuno_test">4. Biochem. Immuno test</option>
                                                                        <option value="cytology_haematology">5. Cytology/Haematology</option>
                                                                        <option value="histology_of_metastasis">6. Histology of metastasis</option>
                                                                        <option value="histology_of_primary">7. Histology of primary</option>
                                                                        <option value="unknown">9. Unknown</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-row">
                                                                <div class="form-group col">
                                                                    <label for="primary_site">19. Primary Site</label>
                                                                    <input type="text" name="primary_site" id="primary_site" class="form-control" placeholder="" >
                                                                </div>
                                                                <div class="form-group col">
                                                                    <label for="code_no">Code No.</label>
                                                                    <input type="text" name="code_no" id="code_no" class="form-control" placeholder="" >
                                                                </div>
                                                            </div>
                                                            <div class="form-row">
                                                                <div class="form-group col">
                                                                    <label>20. Laterality</label>
                                                                </div>
                                                                <div class="form-check col">
                                                                    <label class="form-check-label">
                                                                        <input type="checkbox" class="form-check-input" value="yes" name="laterality_unilat" >
                                                                        1. Unilat.
                                                                    </label>
                                                                </div>
                                                                <div class="form-check col">
                                                                    <label class="form-check-label">
                                                                        <input type="checkbox" class="form-check-input" value="yes" name="laterality_bil" >
                                                                        2. Bil.
                                                                    </label>
                                                                </div>
                                                                <div class="form-check col">
                                                                    <label class="form-check-label">
                                                                        <input type="checkbox" class="form-check-input" value="yes" name="laterality_rt" >
                                                                        3. Rt.
                                                                    </label>
                                                                </div>
                                                                <div class="form-check col">
                                                                    <label class="form-check-label">
                                                                        <input type="checkbox" class="form-check-input" value="yes" name="laterality_lt" >
                                                                        4. Lt.
                                                                    </label>
                                                                </div>
                                                                <div class="form-check col">
                                                                    <label class="form-check-label">
                                                                        <input type="checkbox" class="form-check-input" value="yes" name="laterality_unk" >
                                                                        9. Unk.
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="form-row">
                                                                <div class="form-group col">
                                                                    <label for="histology">21. Histology</label>
                                                                    <textarea class="form-control" name="histology" id="histology" rows="3"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="form-row">
                                                                <div class="form-group col">
                                                                    <label for="morphology_code">Morphology Code</label>
                                                                    <input type="text" name="morphology_code" id="morphology_code" class="form-control" placeholder="" >
                                                                </div>
                                                            </div>
                                                            <div class="form-row">
                                                                <div class="form-group col">
                                                                    <label for="behaviour">22. Behaviour</label>
                                                                    <select class="form-control" name="behaviour" id="behaviour">
                                                                        <option value="benign">0. Benign</option>
                                                                        <option value="uncertain">1. Uncertain</option>
                                                                        <option value="in_situ">2. In situ</option>
                                                                        <option value="malignant">3. Malignant</option>
                                                                        <option value="malignant_metastatic">6. Malignant metastatic</option>
                                                                        <option value="malignant_unknown">9. Malignant unknown</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group col">
                                                                    <label for="grade">23. Grade</label>
                                                                    <select class="form-control" name="grade" id="grade">
                                                                        <option value="well_diff">1. Well Diff</option>
                                                                        <option value="moderately_diff">2. Moderately Diff</option>
                                                                        <option value="poorly_diff">3. Poorly Diff</option>
                                                                        <option value="undifferentiated_anaplastic">4. Undifferentiated / Anaplastic</option>
                                                                        <option value="t_cell">5. T Cell</option>
                                                                        <option value="b_cell">6. B Cell</option>
                                                                        <option value="null_cell">7. Null Cell</option>
                                                                        <option value="killer_cell">8. Killer Cell</option>
                                                                        <option value="unknown">9. Unknown</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group col">
                                                                    <label for="stage">24. Stage</label>
                                                                    <select class="form-control" name="stage" id="stage">
                                                                        <option value="benign">0. Benign</option>
                                                                        <option value="uncertain">1. Uncertain</option>
                                                                        <option value="in_situ">2. In situ</option>
                                                                        <option value="malignant">3. Malignant</option>
                                                                        <option value="malignant_metastatic">6. Malignant metastatic</option>
                                                                        <option value="malignant_unknown">9. Malignant unknown</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-row">
                                                                <div class="form-group col">
                                                                    <label for="t">T</label>
                                                                    <input type="number" name="t" id="t" class="form-control" placeholder="" >
                                                                </div>
                                                                <div class="form-group col">
                                                                    <label for="n">N</label>
                                                                    <input type="number" name="n" id="n" class="form-control" placeholder="" >
                                                                </div>
                                                                <div class="form-group col">
                                                                    <label for="m">M</label>
                                                                    <input type="number" name="m" id="m" class="form-control" placeholder="" >
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="treatment" role="tabpanel" aria-labelledby="treatment-tab">
                                                        <div class="container-fluid">
                                                            <div class="form_row">25. FIRST COURSE OF TREATMENT</div>
                                                            <div class="form-row">
                                                                <div class="form-group col-md-6">
                                                                    <label for="surgery_first_course_of_treatment">Surgery</label>
                                                                    <select class="form-control" name="surgery_first_course_of_treatment" id="surgery_first_course_of_treatment">
                                                                        <option value="no">1. NO</option>
                                                                        <option value="yes">2. YES</option>
                                                                        <option value="unknown">9. UNKNOWN</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <label for="surgery_date">Date</label>
                                                                    <input type="date" name="surgery_date" id="surgery_date" class="form-control" placeholder="" >
                                                                </div>

                                                                <div class="form-group col-md-6">
                                                                    <label for="radiotherapy_first_course_of_treatment">Radiotherapy</label>
                                                                    <select class="form-control" name="radiotherapy_first_course_of_treatment" id="radiotherapy_first_course_of_treatment">
                                                                        <option value="no">1. NO</option>
                                                                        <option value="yes">2. YES</option>
                                                                        <option value="unknown">9. UNKNOWN</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <label for="radiotherapy_date">Date</label>
                                                                    <input type="date" name="radiotherapy_date" id="radiotherapy_date" class="form-control" placeholder="" >
                                                                </div>

                                                                <div class="form-group col-md-6">
                                                                    <label for="chemotherapy_first_course_of_treatment">Chemotherapy</label>
                                                                    <select class="form-control" name="chemotherapy_first_course_of_treatment" id="chemotherapy_first_course_of_treatment">
                                                                        <option value="no">1. NO</option>
                                                                        <option value="yes">2. YES</option>
                                                                        <option value="unknown">9. UNKNOWN</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <label for="chemotherapy_date">Date</label>
                                                                    <input type="date" name="chemotherapy_date" id="chemotherapy_date" class="form-control" placeholder="" >
                                                                </div>

                                                                <div class="form-group col-md-6">
                                                                    <label for="hormone_therapy_first_course_of_treatment">Hormone Therapy</label>
                                                                    <select class="form-control" name="hormone_therapy_first_course_of_treatment" id="hormone_therapy_first_course_of_treatment">
                                                                        <option value="no">1. NO</option>
                                                                        <option value="yes">2. YES</option>
                                                                        <option value="unknown">9. UNKNOWN</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <label for="hormone_therapy_date">Date</label>
                                                                    <input type="date" name="hormone_therapy_date" id="hormone_therapy_date" class="form-control" placeholder="" >
                                                                </div>

                                                                <div class="form-group col-md-6">
                                                                    <label for="immuno_first_course_of_treatment">Immuno.</label>
                                                                    <select class="form-control" name="immuno_first_course_of_treatment" id="immuno_first_course_of_treatment">
                                                                        <option value="no">1. NO</option>
                                                                        <option value="yes">2. YES</option>
                                                                        <option value="unknown">9. UNKNOWN</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <label for="immuno_date">Date</label>
                                                                    <input type="date" name="immuno_date" id="immuno_date" class="form-control" placeholder="" >
                                                                </div>

                                                                <div class="form-group col-md-6">
                                                                    <label for="other_fct">Other</label>
                                                                    <input type="text" name="other_fct" id="other_fct" class="form-control" placeholder="">
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <label for="other_fct_date">Date</label>
                                                                    <input type="date" name="other_fct_date" id="other_fct_date" class="form-control" placeholder="" >
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="concurrent_illness" role="tabpanel" aria-labelledby="concurrent_illness-tab">
                                                        <div class="container-fluid">
                                                            <div class="form-row">26. DOCUMENTATION OF HIV STATUS</div>
                                                            <div class="form-row">
                                                                <div class="form-group col">
                                                                    <label>Lab Report Available in Pt File.</label>
                                                                    <div class="form-check">
                                                                        <label class="form-check-label">
                                                                            <input type="radio" class="form-check-input" name="lrap_file" value="yes" >
                                                                            Yes
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <label class="form-check-label">
                                                                            <input type="radio" class="form-check-input" name="lrap_file" value="no" >
                                                                            No
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group col">
                                                                    <label for="lab_no">Lab No</label>
                                                                    <input type="number" name="lab_no" id="lab_no" class="form-control" placeholder="">
                                                                </div>
                                                                <div class="form-group col">
                                                                    <label for="cd4_count">CD4 Count</label>
                                                                    <input type="number" name="cd4_count" id="cd4_count" class="form-control" placeholder="">
                                                                </div>
                                                                <div class="form-group col">
                                                                    <label>Status Indicated in the Clinical Notes</label>
                                                                    <div class="form-check">
                                                                        <label class="form-check-label">
                                                                            <input type="radio" class="form-check-input" name="sicn_file" value="yes" >
                                                                            Yes
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <label class="form-check-label">
                                                                            <input type="radio" class="form-check-input" name="sicn_file" value="no" >
                                                                            No
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-row">
                                                                <div class="form-check-inline col-md-2">
                                                                    <label class="form-check-label">
                                                                        <input type="radio" class="form-check-input" name="specifically" value="positive" >
                                                                        27. Specifically (-ve)
                                                                    </label>
                                                                </div>
                                                                <div class="form-check-inline col-md-2">
                                                                    <label class="form-check-label">
                                                                        <input type="radio" class="form-check-input" name="specifically" value="negative" >
                                                                        28. Specifically (+ve)
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="form-row">
                                                                <div class="form-group col">
                                                                    <label for="other_concurrent_illness">29. Other Concurrent Illness</label>
                                                                    <textarea class="form-control" name="other_concurrent_illness" id="other_concurrent_illness" rows="3"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="sources" role="tabpanel" aria-labelledby="sources-tab">
                                                        <div class="container-fluid">
                                                            <div class="form-row">
                                                                <div class="form-group col">
                                                                    <label for="source_1_hospital">30. Source 1 Hospital</label>
                                                                    <input type="text" name="source_1_hospital" id="source_1_hospital" class="form-control" placeholder="">
                                                                </div>
                                                                <div class="form-group col">
                                                                    <label for="hospital_number">Hospital Number</label>
                                                                    <input type="number" name="hospital_number" id="hospital_number" class="form-control" placeholder="">
                                                                </div>
                                                                <div class="form-group col">
                                                                    <label for="src_date_1">SRC date 1</label>
                                                                    <input type="date" name="src_date_1" id="src_date_1" class="form-control" placeholder="">
                                                                </div>
                                                            </div>
                                                            <div class="form-row">
                                                                <div class="form-group col">
                                                                    <label for="source_2_lab">31. Source 2 Lab</label>
                                                                    <input type="text" name="source_2_lab" id="source_2_lab" class="form-control" placeholder="">
                                                                </div>
                                                                <div class="form-group col">
                                                                    <label for="lab_number">Lab Number</label>
                                                                    <input type="number" name="lab_number" id="lab_number" class="form-control" placeholder="">
                                                                </div>
                                                                <div class="form-group col">
                                                                    <label for="src_date_2">SRC date 2</label>
                                                                    <input type="date" name="src_date_2" id="src_date_2" class="form-control" placeholder="">
                                                                </div>
                                                            </div>
                                                            <div class="form-row">
                                                                <div class="form-group col">
                                                                    <label for="referred_from">32. Referred from</label>
                                                                    <input type="text" name="referred_from" id="referred_from" class="form-control" placeholder="">
                                                                </div>
                                                                <div class="form-group col">
                                                                    <label for="rf_ip_number">IP Number</label>
                                                                    <input type="number" name="rf_ip_number" id="rf_ip_number" class="form-control" placeholder="">
                                                                </div>
                                                            </div>
                                                            <div class="form-row">
                                                                <div class="form-group col">
                                                                    <label for="referred_to">33. Referred to</label>
                                                                    <input type="text" name="referred_to" id="referred_to" class="form-control" placeholder="">
                                                                </div>
                                                                <div class="form-group col">
                                                                    <label for="rt_ip_number">IP Number</label>
                                                                    <input type="number" name="rt_ip_number" id="rt_ip_number" class="form-control" placeholder="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="follow_up" role="tabpanel" aria-labelledby="follow_up-tab">
                                                        <div class="container-fluid">
                                                            <div class="form-row">
                                                                <div class="form-group col">
                                                                    <label for="present_status">34. Present Status</label>
                                                                    <select class="form-control" name="present_status" id="present_status">
                                                                        <option value="alive">1. Alive</option>
                                                                        <option value="dead">2. Dead</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group col">
                                                                    <label for="hospice_number">35. Hospice Number</label>
                                                                    <input type="number" name="hospice_number" id="hospice_number" class="form-control" placeholder="" >
                                                                </div>
                                                                <div class="form-group col">
                                                                    <label for="dlc_dod">37. Date Last Contact / Date of death</label>
                                                                    <input type="date" name="dlc_dod" id="dlc_dod" class="form-control" placeholder="" >
                                                                </div>
                                                            </div>
                                                            <div class="form-row">
                                                                <div class="form-group col">
                                                                    <label for="cause_of_death">39. If Dead Cause of Death</label>
                                                                    <textarea class="form-control" name="cause_of_death" id="cause_of_death" rows="3"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="form-row">
                                                                <div class="form-group col">
                                                                    <label for="remarks">Remarks if any</label>
                                                                    <textarea class="form-control" name="remarks" id="remarks" rows="3"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="form-row">
                                                                <div class="form-group col">
                                                                    <label for="form_filled_by">Form filled by</label>
                                                                    <input type="text" name="form_filled_by" id="form_filled_by" class="form-control" placeholder="" >
                                                                </div>
                                                                <div class="form-group col">
                                                                    <label for="form_fill_date">Date</label>
                                                                    <input type="date" name="form_fill_date" id="form_fill_date" class="form-control" placeholder="" >
                                                                </div>
                                                                <div class="form-group col">
                                                                    <label for="checked_by">Checked By</label>
                                                                    <input type="text" name="checked_by" id="checked_by" class="form-control" placeholder="" >
                                                                </div>
                                                            </div>
                                                            <div class="form-row">
                                                                <div class="form-group col">
                                                                    <label for="data_entered_by">Data entered by</label>
                                                                    <input type="text" name="data_entered_by" id="data_entered_by" class="form-control" placeholder="" >
                                                                </div>
                                                                <div class="form-group col">
                                                                    <label for="data_entered_by_date">Date</label>
                                                                    <input type="date" name="data_entered_by_date" id="data_entered_by_date" class="form-control" placeholder="" >
                                                                </div>
                                                            </div>
                                                            <div class="form-row">
                                                                <button type="submit" class="btn btn-primary">Submit</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection