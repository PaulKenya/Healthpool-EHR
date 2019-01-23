@extends('layouts.master')
@section('content')

    @include('departments.clinical_services.inpatient.patient_file.patient_bio_information')
<!-- Title &Breadcrumbs-->
<div class=" page-titles">
    <div class="col-md-12 align-self-center">
        <h4 class="theme-cl">Xray request form for {{ $patient->name }}</h4>
    </div>
</div>
<!-- Title & Breadcrumbs-->

<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>XRAY REQUEST FORM</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="datatable" class="table table-striped table-bordered table-responsive">
                        <thead>
                        <tr>

                            <th>WEIGHT</th>
                            <th>CLINICAL INFORMATION</th>
                            <th>LMP</th>
                            <th>INVESTIGATIONS REQUIRED</th>
                            <th>REPORT</th>
                            <th>REFERRING DOCTOR</th>
                            <th>BRANCH</th>
                            <th>SIGNATURE</th>
                            <th>REPORTED BY</th>
                            <th>TIME</th>

                        </tr>
                        </thead>
                        <tbody>
                        @if(isset($xray_request_form_results))
                            @foreach($xray_request_form_results as $xray_request_form_result)
                                <tr>
                                    <td>{{ $xray_request_form_result->weight}}</td>
                                    <td>{{ $xray_request_form_result->clinical_info}}</td>
                                    <td>{{ $xray_request_form_result->lmp}}</td>
                                    <td>{{ $xray_request_form_result->investigation_required}}</td>
                                    <td>{{ $xray_request_form_result->report}}</td>
                                    <td>{{ $xray_request_form_result->referring_doctor}}</td>
                                    <td>{{ $xray_request_form_result->branch}}</td>
                                    <td>{{ $xray_request_form_result->signature}}</td>
                                    <td>{{ $xray_request_form_result->reported_by}}</td>
                                    <td>{{ $xray_request_form_result->time}}</td>

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
                            <h4 class="modal-title">Add Xray Information</h4>
                        </div>
                        <div class="modal-body">

                            <div class="col-md-12">
                                <div class="card">
                                    <div class="container">
                                        <form action="{{route('xray_request_form_post' , ['patient_id'=>$patient_id])}}" method="post" >{!! csrf_field() !!}
                                            <div class="col-m-3 offset-md-5">
                                                <H3 class="mt-20">
                                                    X-RAY REQUEST FORM
                                                </H3>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-9">
                                                    <label for="staticEmail" class="col-sm-3 col-form-label">DATE:</label>
                                                    <div class="col-sm-12">
                                                        <input type="date" id="myDate" name="date" readonly class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group row col-md-4">
                                                <label for="staticEmail" class="col-sm-6 col-form-label ">REF NO:</label>
                                                <div class="col-sm-12">
                                                    <input type="number" name="ref_no" class="form-control" placeholder="">
                                                </div>
                                            </div>

                                    <div class="row">
                                        <div class="col-md-11">
                                            <label for="inputPassword" class="col-sm-3 col-form-label">WEIGHT</label>
                                            <div class="col-sm-12">
                                                <input type="text" name="weight" class="form-control" id="inputPassword" placeholder="Weight">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-11">
                                            <label for="inputPassword" class="col-sm-3 col-form-label">CLINICAL INFORMATION</label>
                                            <div class="col-sm-12">
                                                <textarea  name="clinical_info" class="form-control" id="" ></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-11">
                                            <label for="inputPassword" class="col-sm-3 col-form-label">LMP:</label>
                                            <div class="col-sm-12">
                                                <textarea name="lmp" class="form-control" id="" ></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-11">
                                            <label for="inputPassword" class="col-sm-3 col-form-label">INVESTIGATIONS REQUIRED:</label>
                                            <div class="col-sm-12">
                                                <textarea name="investigation_required" class="form-control" id="" ></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row ">
                                        <div class="col-md-11">
                                            <label for="staticEmail" class="col-sm-3 col-form-label">REPORT:</label>
                                            <div class="col-sm-12">
                                                <textarea  rows="4" cols="20"name="report" class="form-control" id="" ></textarea>
                                            </div>
                                        </div>
                                    </div>
                                        <div class="row">
                                            <div class="col-md-11">
                                                <label for="inputPassword" class="col-sm-3 col-form-label">REFERRING DOCTOR</label>
                                                <div class="col-sm-12">
                                                    <input type="text" name="referring_doctor" class="form-control" id="inputPassword" placeholder="Referring Doctor">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-11">
                                                <label for="inputPassword" class="col-sm-3 col-form-label">BRANCH:</label>
                                                <div class="col-sm-12">
                                                    <input type="text" name="branch" class="form-control" id="inputPassword" placeholder="Branch:">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-11">
                                                <label for="inputPassword" class="col-sm-3 col-form-label">SIGNATURE</label>
                                                <div class="col-sm-12">
                                                    <input type="text" name="signature" value="{{ Auth::user()->id_number }}" class="form-control" id="inputPassword" placeholder="Signature" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-11">
                                                <label for="inputPassword" class="col-sm-3 col-form-label">CELL:</label>
                                                <div class="col-sm-12">
                                                    <input type="text" name="cell2" class="form-control" id="inputPassword" placeholder="Cell:">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-11">
                                                <label for="inputPassword" class="col-sm-3 col-form-label">REPORTED BY</label>
                                                <div class="col-sm-12">
                                                    <input type="text" name="reported_by" class="form-control" id="inputPassword" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-11">
                                                <label for="inputPassword" class="col-sm-3 col-form-label">TIME:</label>
                                                <div class="col-sm-12">
                                                    <input type="time" name="time" class="form-control" id="inputPassword" placeholder="Cell:">
                                                </div>
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
</div>


@endsection
