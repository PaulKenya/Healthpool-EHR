@extends('layouts.master')
@section('content')
    @include('departments.clinical_services.inpatient.patient_file.patient_bio_information')
    <!-- Title & Breadcrumbs-->
    <!-- Title & Breadcrumbs-->
    <div class="row page-titles">
        <div class="col-md-12 align-self-center">
            <h4 class="theme-cl">LABORATORY REPORT SHEET</h4>
        </div>
    </div>
    <!-- Title & Breadcrumbs-->

    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>LABORATORY REPORT SHEET</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable" class="table table-striped table-bordered table-responsive">
                            <thead>
                            <tr>
                                <th>PATIENT NAME</th>
                                <th>IP NUMBER</th>
                                <th>DATE</th>
                                <th>AGE</th>
                                <th>WARD</th>
                                <th>BED NUMBER</th>
                                <th>SEX</th>
                                <th>DATE</th>
                                <th>IP NUMBER</th>
                                <th>PATIENT NAME</th>
                                <th>CELL</th>
                                <th>LOCATION</th>
                                <th>AGE</th>
                                <th>WEIGHT</th>
                                <th>SEX</th>
                                <th>CLINICAL NOTES</th>
                                <th>REFFERING DOCTOR</th>
                                <th>BRANCH</th>
                                <th>SIGNATURE</th>
                                <th>CELL2</th>
                                <th>TECHNOLOGISTS</th>
                                <th>TIME</th>
                                <th>TIME OF SPECIMEN</th>
                                <th>ACCOUNTS</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(isset($laboratoryrequestform_results))
                                @foreach($laboratoryrequestform_results as $laboratoryrequestform_result)
                                    <tr>
                                        <td>{{ $laboratoryrequestform_result->bio_patient_name}}</td>
                                        <td>{{ $laboratoryrequestform_result->bio_ip_no}}</td>
                                        <td>{{ $laboratoryrequestform_result->bio_date}}</td>
                                        <td>{{ $laboratoryrequestform_result->bio_age}}</td>
                                        <td>{{ $laboratoryrequestform_result->bio_ward}}</td>
                                        <td>{{ $laboratoryrequestform_result->bio_bed_number}}</td>
                                        <td>{{ $laboratoryrequestform_result->bio_sex}}</td>
                                        <td>{{ $laboratoryrequestform_result->date}}</td>
                                        <td>{{ $laboratoryrequestform_result->ipnumber}}</td>
                                        <td>{{ $laboratoryrequestform_result->patient}}</td>
                                        <td>{{ $laboratoryrequestform_result->cell}}</td>
                                        <td>{{ $laboratoryrequestform_result->location}}</td>
                                        <td>{{ $laboratoryrequestform_result->age}}</td>
                                        <td>{{ $laboratoryrequestform_result->weight}}</td>
                                        <td>{{ $laboratoryrequestform_result->sex}}</td>
                                        <td>{{ $laboratoryrequestform_result->clinicalnotes}}</td>
                                        <td>{{ $laboratoryrequestform_result->refferingdoctor}}</td>
                                        <td>{{ $laboratoryrequestform_result->branch}}</td>
                                        <td>{{ $laboratoryrequestform_result->signature}}</td>
                                        <td>{{ $laboratoryrequestform_result->cellb}}</td>
                                        <td>{{ $laboratoryrequestform_result->technologists}}</td>
                                        <td>{{ $laboratoryrequestform_result->time}}</td>
                                        <td>{{ $laboratoryrequestform_result->timeofspecimen}}</td>
                                        <td>{{ $laboratoryrequestform_result->accounts}}</td>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>

                {{--<div class="col-md-4">--}}
                    {{--<div class="content">--}}
                        {{--<button class="btn btn-success" data-toggle="modal" data-target="#myModal">Add more Items</button>--}}
                        {{--<button class="btn btn-info" data-toggle="modal" data-target="#myModal">Print</button>--}}
                    {{--</div>--}}
                {{--</div>--}}
            </div>
        </div>
    </div>

@endsection