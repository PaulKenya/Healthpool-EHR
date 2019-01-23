@extends('layouts.master')
@section('content')
    @include('departments.clinical_services.inpatient.patient_file.patient_bio_information')
    <!-- Title &
    Breadcrumbs-->
    <div class="row page-titles">
        <div class="col-md-12 align-self-center">
            <h4 class="theme-cl">CBE RESULTS</h4>
        </div>
    </div>
    <!-- Title & Breadcrumbs-->
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>CBE RESULTS</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable" class="table table-striped table-bordered table-responsive">
                            <thead>
                            <tr>
                                <th>referral_for_risk_assessment_counselling</th>
                                <th>radiology_imaging_workup</th>
                                <th>cbe_imaging_discondant</th>
                                <th>surgical_consult</th>
                                <th>patient_notified_of_mammogram_results</th>
                                <th>return_for_cbe_in_months</th>
                                <th>patient_informed_and_referral</th>
                                <th>return_for_cbe_in_six_months</th>
                                <th>return_in_one_year_for_annual_cbe</th>
                                <th>other</th>
                                <th>date</th>
                                <th>diagnosis</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(isset($oncology_cbe_results_case_management_results))
                                @foreach($oncology_cbe_results_case_management_results as $oncology_cbe_results_case_management_result)
                                    <tr>
                                        <td>{{ $oncology_cbe_results_case_management_result->referral_for_risk_assessment_counselling }}</td>
                                        <td>{{ $oncology_cbe_results_case_management_result->radiology_imaging_workup }}</td>
                                        <td>{{ $oncology_cbe_results_case_management_result->cbe_imaging_discondant }}</td>
                                        <td>{{ $oncology_cbe_results_case_management_result->surgical_consult }}</td>
                                        <td>{{ $oncology_cbe_results_case_management_result->patient_notified_of_mammogram_results }}</td>
                                        <td>{{ $oncology_cbe_results_case_management_result->return_for_cbe_in_months }}</td>
                                        <td>{{ $oncology_cbe_results_case_management_result->patient_informed_and_referral }}</td>
                                        <td>{{ $oncology_cbe_results_case_management_result->return_for_cbe_in_six_months }}</td>
                                        <td>{{ $oncology_cbe_results_case_management_result->return_in_one_year_for_annual_cbe }}</td>
                                        <td>{{ $oncology_cbe_results_case_management_result->other }}</td>
                                        <td>{{ $oncology_cbe_results_case_management_result->date }}</td>
                                        <td>{{ $oncology_cbe_results_case_management_result->diagnosis }}</td>
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

                        <!— Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Add  Information</h4>
                            </div>
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="container">
                                        <form action="{{route('oncology_cbe_results_case_management_post', ['patient_id'=>$patient_id])}}" method="post" >{!! csrf_field() !!}
                                            <h3>case management</h3>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label>referral for risk assesment counseling</label>
                                                    <input type="date" class="form-control" name="referral_for_risk_assessment_counselling">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Radiology/imaging workup</label>
                                                    <input type="date" class="form-control" name="radiology_imaging_workup">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label>CBE & imaging discondant</label>
                                                    <input type="date" class="form-control" name="cbe_imaging_discondant">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>surgical consult</label>
                                                    <input type="date" class="form-control" name="surgical_consult">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label>Patient notified of mammogram results</label>
                                                    <input type="date" class="form-control" name="patient_notified_of_mammogram_results">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Return for CBE in 1 2 3 mos</label>
                                                    <input type="date" class="form-control" name="return_for_cbe_in_months">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label>Patient informed and referred</label>
                                                    <input type="date" class="form-control" name="patient_informed_and_referral">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>return for cbe in 6 months</label>
                                                    <input type="date" class="form-control" name="return_for_cbe_in_six_months">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label>Referral for risk assesment counselling</label>
                                                    <input type="date" class="form-control" name="referral_for_risk_assessment_counselling">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>return in one year for annual CBE</label>
                                                    <input type="date" class="form-control" name="return_in_one_year_for_annual_cbe">
                                                </div>
                                            </div>
                                            <div class="form-row">

                                                <div class="form-group col-md-6">
                                                    <label>other</label>
                                                    <input type="date" class="form-control" name="other">
                                                </div>
                                            </div>
                                            <h3>final diagnosis</h3>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label >date</label>
                                                    <input type="date" class="form-control" name="date">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label >diagnosis</label>
                                                    <input type="text" class="form-control" name="diagnosis">
                                                </div>
                                            </div>
                                            <input name="administration_patient_informations_id" type="text" class="form-control d-none" value="{{$patient_id}}">
                                            <input name="institution_id" type="text" class="form-control d-none" value="{{ Auth::user()->institution->id }}">
                                            <input name="user_id" type="text" value="{{ Auth::user()->id }}" class="form-control d-none">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary">Submit</button>
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
@endsection
