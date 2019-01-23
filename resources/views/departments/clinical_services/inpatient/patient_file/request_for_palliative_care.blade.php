@extends('layouts.master')
@section('content')
    @include('departments.clinical_services.inpatient.patient_file.patient_bio_information')
<!-- Title &
Breadcrumbs-->
<div class="page-titles">
    <div class="col-md-12 align-self-center">
        <h4 class="theme-cl">REQUEST FOR PALLIATIVE</h4>
    </div>
</div>
<!-- Title & Breadcrumbs-->
<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>REQUEST FOR PALLIATIVE</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="datatable" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>date</th>
                                <th>name_of_patient</th>
                                <th>unit_no</th>
                                <th>dob</th>
                                <th>age</th>
                                <th>gender</th>
                                <th>date1</th>
                                <th>referred_from</th>
                                <th>bed_no</th>
                                <th>previous_treatment</th>
                                <th>current_medication</th>
                                <th>reason_for_referral</th>
                                <th>urgent</th>
                                <th>referred_by1</th>
                                <th>designation1</th>
                                <th>signature1</th>
                            </tr>
                        </thead>
                        <tbody>
                        @if(isset($request_for_palliative_careh_results))
                            @foreach($request_for_palliative_careh_results as $request_for_palliative_careh_result)
                                <tr>
                                    <td>{{$request_for_palliative_careh_result->date}}</td>
                                    <td>{{$request_for_palliative_careh_result->name_of_patient}}</td>
                                    <td>{{$request_for_palliative_careh_result->unit_no}}</td>
                                    <td>{{$request_for_palliative_careh_result->dob}}</td>
                                    <td>{{$request_for_palliative_careh_result->age}}</td>
                                    <td>{{$request_for_palliative_careh_result->gender}}</td>
                                    <td>{{$request_for_palliative_careh_result->date1}}</td>
                                    <td>{{$request_for_palliative_careh_result->referred_from}}</td>
                                    <td>{{$request_for_palliative_careh_result->bed_no}}</td>
                                    <td>{{$request_for_palliative_careh_result->previous_treatment}}</td>
                                    <td>{{$request_for_palliative_careh_result->current_medication}}</td>
                                    <td>{{$request_for_palliative_careh_result->reason_for_referral}}</td>
                                    <td>{{$request_for_palliative_careh_result->urgent}}</td>
                                    <td>{{$request_for_palliative_careh_result->referred_by1}}</td>
                                    <td>{{$request_for_palliative_careh_result->designation1}}</td>
                                    <td>{{$request_for_palliative_careh_result->signature1}}</td>
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
                        <div class="row">
                            <h3 class="offset-3"> REQUEST FOR PALIATIVE CARE</h3>
                        </div>
                        <BR>
                        <BR>

                        <form action="{{route('request_for_palliative_care_post', ['patient_id'=>$patient_id])}}" method="post" >{!! csrf_field() !!}
                            <div class="row">
                                <div class="form-group row offset-6">
                                    <label for="staticEmail" class="col-sm-3 col-form-label">Date</label>
                                    <div class="col-sm-9">
                                        <input type="date" id="myDate"    name="date" readonly  class="form-control" id="staticEmail" value="">
                                    </div>
                                </div>
                            </div>
                            <div class=" offset-1">
                                <div class="row">
                                    <div class="form-group row col-md-6">
                                        <label for="staticEmail" class="col-sm-3 col-form-label">Name of patient</label>
                                        <div class="col-sm-9">
                                            <input type="text"    name="name_of_patient"    class="form-control" id="staticEmail" value="">
                                        </div>
                                    </div>
                                    <div class="form-group row col-md-6">
                                        <label for="staticEmail" class="col-sm-3 col-form-label">Unit No</label>
                                        <div class="col-sm-9">
                                            <input type="text"     name="unit_no"   class="form-control" id="staticEmail" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group row col-md-6">
                                        <label for="staticEmail" class="col-sm-3 col-form-label">Date of Birth</label>
                                        <div class="col-sm-9">
                                            <input type="date"    name="dob"    class="form-control" id="staticEmail" value="">
                                        </div>
                                    </div>
                                    <div class="form-group row col-md-6">
                                        <label for="staticEmail" class="col-sm-3 col-form-label">age</label>
                                        <div class="col-sm-9">
                                            <input type="number"    name="age"    class="form-control" id="staticEmail" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group row col-md-6 col-form-label">
                                        <label for="staticEmail" class="col-sm-3 col-form-label">Gender</label>
                                        <div class="form-check form-check-inline col-form-label">
                                            <input class="form-check-input "    name="gender"   type="radio"  id="inlineRadio1" value="option1">
                                            <label class="form-check-label" for="inlineRadio1">male</label>
                                        </div>
                                        <div class="form-check form-check-inline col-form-label">
                                            <input class="form-check-input"    name="gender"   type="radio" id="inlineRadio2" value="option2">
                                            <label class="form-check-label" for="inlineRadio2">female</label>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group row offset-6">
                                            <label for="staticEmail" class="col-sm-3 col-form-label">Date</label>
                                            <div class="col-sm-9">
                                                <input type="date"   id="myDate1"  name="date1" readonly  class="form-control" id="staticEmail" value="">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="staticEmail" class="col-sm-2 col-form-label">Reffered from( Ward /Clinic)</label>
                                            <div class="col-sm-10">
                                                <input type="text"     name="referred_from"   class="form-control" id="staticEmail" value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="staticEmail" class="col-sm-3 col-form-label">Bed No</label>
                                            <div class="col-sm-9">
                                                <input type="text"    name="bed_no"    class="form-control" id="staticEmail" value="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label for="staticEmail" class="col-sm-2 col-form-label">Previous Treatment</label>
                                        <div class="col-sm-10">
                                                      <textarea class="form-control"    name="previous_treatment"   id="staticEmail"  cols="30">
                                                      </textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label for="staticEmail" class="col-sm-2 col-form-label">Current medication, drugs and doses</label>
                                        <div class="col-sm-10">
                                                      <textarea class="form-control"   name="current_medication"    id="staticEmail">
                                                      </textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label for="staticEmail" class="col-sm-2 col-form-label">Reason for referral</label>
                                        <div class="col-sm-10">
                                                      <textarea class="form-control"   name="reason_for_referral"    id="staticEmail">
                                                      </textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p><b> Urgency</b></p>
                                        <div class="form-check">
                                            <input class="form-check-input"    name="urgent"   type="radio"  id="exampleRadios1" value="very_urgency" checked>
                                            <label class="form-check-label" for="exampleRadios1">
                                                very  urgent
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input"    name="urgent"   type="radio"  id="exampleRadios2" value="urgent">
                                            <label class="form-check-label" for="exampleRadios2">
                                                urgent
                                            </label>
                                        </div>
                                        <div class="form-check ">
                                            <input class="form-check-input"    name="urgent"   type="radio"  id="exampleRadios3" value="fairly_urgent" >
                                            <label class="form-check-label" for="exampleRadios3">
                                                Fairly urgent
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <p>Reffered By</p>
                                        <div class="form-group row">
                                            <label for="inputPassword" class="col-sm-2 col-form-label">Name</label>
                                            <div class="col-sm-10">
                                                <input type="text"    name="referred_by1"   class="form-control" >
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputPassword" class="col-sm-2 col-form-label">Designation</label>
                                            <div class="col-sm-10">
                                                <input type="text"    name="designation1"   class="form-control" >
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputPassword" class="col-sm-2 col-form-label">Signature</label>
                                            <div class="col-sm-10">
                                                <input type="password"    name="signature1"   class="form-control">
                                            </div>
                                        </div>
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
@endsection