@extends('layouts.master')

@section('content')
    <!-- Title & Breadcrumbs-->
    <div class="row page-titles">
        <div class="col-md-12 align-self-center">
            <h4 class="theme-cl offset-4">Canreg5 Cancer File Import</h4>
        </div>
    </div>
    <!-- Title & Breadcrumbs-->

    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="card">
                <div class="card-header text-center">
                    <h4 class="offset-4">Canreg5 Cancer File Import</h4>
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

                <div class="col-md-4 offset-5">
                    <div class="content">
                        <button class="btn btn-success" data-toggle="modal" data-target="#myModal">Add New Canreg file</button>
                        {{--<button class="btn btn-info" data-toggle="modal" data-target="#myModal">Print</button>--}}
                    </div>
                </div>
                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog modal-lg">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Cancer File Upload</h4>
                            </div>
                            <div class="modal-body">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="header-title m-t-0">Cancer File Upload</h4>
                                        </div>
                                        <div class="card-body">
                                            <form enctype="multipart/form-data" method="post" action="{{route('canregimport_post')}}">
                                                {{csrf_field()}}


                                                <div class="form-group">
                                                    <label for="health_facility_file">Health Facility</label>
                                                    <input type="file" class="form-control-file" name="health_facility_file" id="health_facility_file" placeholder="" aria-describedby="fileHelpId"  value="{{csrf_token()}}">
                                                    <small id="fileHelpId" class="form-text text-muted">Import CanReg Excel File Spreadsheet</small>
                                                </div>
                                                <a href="{{URL::to('canregimport')}}">  <button type="submit" class="btn btn-primary">   Submit</button></a>
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
