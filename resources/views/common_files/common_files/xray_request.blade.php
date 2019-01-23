@extends('layouts.master')

@section('content')
<div class="row page-titles">
    <div class="col-md-12 align-self-center text-center">
        <h4 class="theme-cl">X-Ray Request Form</h4>
    </div>
</div> 
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h4> Records</h4>
        </div>
        <div class="card-body">
            <div class="">
                <table class="table table-responsive table-bordered table-striped" id="datatable">
                    <thead>
                    <tr>
                        <th>Date</th>
                        <th>IP/OPD No</th>
                        <th>REF No</th>
                        <th>Patient</th>
                        <th>Cell</th>
                        <th>Age</th>
                        <th>Weight</th>
                        <th>Sex</th>
                        <th>Clinical Information</th>
                        <th>LMP</th>
                        <th>Investigations Required</th>
                        <th>Report</th>
                        <th>Referring Doctor</th>
                        <th>Branch</th>
                        <th>Signature</th>
                        <th>Cell</th>
                        <th>Reported By</th>
                        <th>Time</th>
                        <th>Department</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(isset($xray_request_results))
                        @foreach($xray_request_results as $xray_request_result)
                            <tr>
                                <td>{{ $xray_request_result->date }}</td>
                                <td>{{ $xray_request_result->ip_op_number }}</td>
                                <td>{{ $xray_request_result->ref_no }}</td>
                                <td>{{ $xray_request_result->patient }}</td>
                                <td>{{ $xray_request_result->cell }}</td>
                                <td>{{ $xray_request_result->age }}</td>
                                <td>{{ $xray_request_result->weight }}</td>
                                <td>{{ $xray_request_result->sex }}</td>
                                <td>{{ $xray_request_result->clinical_info }}</td>
                                <td>{{ $xray_request_result->lmp }}</td>
                                <td>{{ $xray_request_result->invenstigation_required }}</td>
                                <td>{{ $xray_request_result->report }}</td>
                                <td>{{ $xray_request_result->referring_doctor }}</td>
                                <td>{{ $xray_request_result->branch }}</td>
                                <td>{{ $xray_request_result->signature }}</td>
                                <td>{{ $xray_request_result->cell2 }}</td>
                                <td>{{ $xray_request_result->reported_by }}</td>
                                <td>{{ $xray_request_result->time }}</td>
                                <td>{{ $xray_request_result->departments }}</td>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
        </div>
        <div class="col-md-4">

            <div class="content">
                <button class="btn btn-success" data-toggle="modal" data-target="#myModal">Add Records</button>
                {{--<button class="btn btn-info" data-toggle="modal" data-target="#myModal">Print</button>--}}
            </div>
        </div>
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog modal-lg">
            <!— Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Add new record</h4>
                </div>
                <div class="modal-body">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="row page-titles">
                                <div class="col-md-12 align-self-center text-center">
                                    <h4 class="theme-cl">X-RAY REQUEST FORM</h4>
                                </div>
                            </div>
                            <div class="container-fluid">
                                <form action="{{route('xray_request_post')}}" method="post" >{!! csrf_field() !!}
                                    <div class="row ">
                                        <div class="col-md-4">
                                            <div class="form-group row ">
                                                <label for="staticEmail" class="col-form-label ">Date:</label>
                                                <div class="col-sm-8">
                                                  <input type="date" name="date" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group row ">
                                                <label for="staticEmail" class="col-form-label ">IP/OPD No:</label>
                                                <div class="col-sm-8">
                                                    <input type=" datetime" name="ip_op_number" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="staticEmail" class="col-form-label ">REF No:</label>
                                            <div class="col-sm-8">
                                                <input type="number" name="ref_no" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group row col-md-8">
                                            <label for="inputPassword" class=" col-form-label">Patient:</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="patient" class="form-control" id="inputPassword" placeholder="Patient">
                                            </div>
                                        </div>
                                        <div class="form-group row col-md-4">
                                            <label for="inputPassword" class=" col-form-label">Cell:</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="cell" class="form-control" id="inputPassword" placeholder="Cell:">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class=" col-md-4">
                                            <label for="inputPassword" class=" col-form-label">Age:</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="age" class="form-control" id="inputPassword" placeholder="Age">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="inputPassword" class=" col-form-label">Weight:</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="weight" class="form-control" id="inputPassword" placeholder="Weight">
                                            </div>
                                        </div>
                                        <div class=" col-md-4">
                                            <label for="inputPassword" class=" col-form-label">Sex:</label>
                                            <div class="col-sm-8">
                                                <div class="form-group">
                                                    <div class="form-check form-check-inline  col-form-label">
                                                      <input class="form-check-input" type="radio" name="sex" id="inlineRadio1" value="option1">
                                                      <label class="form-check-label" for="inlineRadio1">Male</label>
                                                    </div>
                                                    <br>
                                                    <div class="form-check form-check-inline  col-form-label">
                                                      <input class="form-check-input" type="radio" name="sex" id="inlineRadio2" value="option2">
                                                      <label class="form-check-label" for="inlineRadio2">Female</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group row col-md-12">
                                            <label for="inputPassword" class=" col-form-label">Clinical Information:</label>
                                            <div class="col-sm-12">
                                                <textarea  class="form-control" name="clinical_info" id="" ></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group row col-md-12">
                                            <label for="inputPassword" class=" col-form-label">LMP:</label>
                                            <div class="col-sm-12">
                                                <textarea  class="form-control" name="lmp" id="" ></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group row col-md-12">
                                            <label for="inputPassword" class=" col-form-label">Investigations Required:</label>
                                            <div class="col-sm-12">
                                                <textarea  class="form-control" name="invenstigation_required" id="" ></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group row col-md-12">
                                            <label>Report</label>
                                            <div class="col-sm-12">
                                                <textarea  rows="4" cols="15" name="report" class="form-control" id="" ></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group row col-md-6">
                                            <label for="inputPassword" class=" col-form-label">Referring Doctor</label>
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control"  name="referring_doctor" id="inputPassword" placeholder="Referring Doctor">
                                            </div>
                                        </div>
                                        <div class="form-group row col-md-6">
                                            <label for="inputPassword" class=" col-form-label">Branch:</label>
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" name="branch" id="inputPassword" placeholder="Branch:">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group row col-md-6">
                                            <label for="inputPassword" class=" col-form-label">Signature</label>
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" name="signature" id="inputPassword" placeholder="Signature">
                                            </div>
                                        </div>
                                        <div class="form-group row col-md-6">
                                            <label for="inputPassword" class=" col-form-label">cell:</label>
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" name="cell2" id="inputPassword" placeholder="Cell:">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group row col-md-6">
                                            <label for="inputPassword" class=" col-form-label">Reported By</label>
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" name="reported_by" id="inputPassword" placeholder="Signature">
                                            </div>
                                        </div>
                                        <div class="form-group row col-md-6">
                                            <label for="inputPassword" class=" col-form-label">Time:</label>
                                            <div class="col-sm-12">
                                                <input type="time" class="form-control" name="time" id="inputPassword" placeholder="Cell:">
                                            </div>
                                        </div>
                                    </div>
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
@endsection