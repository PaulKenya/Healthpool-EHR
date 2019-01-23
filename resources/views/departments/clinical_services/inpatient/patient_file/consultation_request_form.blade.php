@extends('layouts.master')

@section('content')
    @include('departments.clinical_services.inpatient.patient_file.patient_bio_information')
    <!-- Title & Breadcrumbs-->
<div class="row page-titles">
    <div class="col-md-12 align-self-center">
        <h4 class="theme-cl">CONSULTATION REQUEST FORM</h4>
    </div>
</div>
<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>CONSULTATION REQUEST FORM</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="datatable" class="table table-striped table-bordered table-responsive">
                        <thead>
                        <tr>
                            <th>PRINT VIEW</th>
                            <th>DATE</th>
                            <th>WARD</th>
                            <th>BED NUMBER</th>
                            <th>THE OPINION OF MR/DR</th>
                            <th>IN THE</th>
                            <th>PATIENT FULL NAME</th>
                            <th>REFERRED FROM WARD</th>
                            <th>CLINIC</th>
                            <th>UNIT NUMBER</th>
                            <th>CASUALTY NUMBER</th>
                            <th>OTHERS</th>
                            <th>DIAGNOSIS</th>
                            <th>BRIEF DETAILS</th>
                            <th>DEGREE OF URGENCY</th>
                            <th>SIGNATURE</th>
                            <th>NAME PRINTED</th>

                        </tr>
                        </thead>
                        <tbody>
                        @if(isset($consultation_request_form_results))

                            @php
                                $i=0
                            @endphp

                            @foreach($consultation_request_form_results as $consultation_request_form_result)

                                @php
                                    $i++;
                                @endphp

                                <tr>

                                    <td>
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{$i}}">PRINT VIEW</button>
                                    </td>

                                    <td>{{$consultation_request_form_result->bio_date}}</td>
                                    <td>{{$consultation_request_form_result->bio_ward}}</td>
                                    <td>{{$consultation_request_form_result->bio_bed_number}}</td>
                                    <td>{{$consultation_request_form_result->dr_mr}}</td>
                                    <td>{{$consultation_request_form_result->in_the}}</td>
                                    <td>{{$consultation_request_form_result->referred_from_ward}}</td>
                                    <td>{{$consultation_request_form_result->bed_number}}</td>
                                    <td>{{$consultation_request_form_result->clinic}}</td>
                                    <td>{{$consultation_request_form_result->unit_no}}</td>
                                    <td>{{$consultation_request_form_result->casualty_no}}</td>
                                    <td>{{$consultation_request_form_result->others}}</td>
                                    <td>{{$consultation_request_form_result->diagnosis}}</td>
                                    <td>{{$consultation_request_form_result->reasons_for_consultations}}</td>
                                    <td>{{$consultation_request_form_result->urgent}}</td>
                                    <td>{{$consultation_request_form_result->signature}}</td>
                                    <td>{{$consultation_request_form_result->name_printed}}</td>
                                </tr>

                                <!-- Triage Modal -->
                                <div class="modal fade" id="exampleModal{{$i}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div id="printableArea{{$i}}">
                                                    <h2>VIEW  FORM</h2>
                                                    <p><b>PATIENT NAME : </b>{{$patient->name}}</p>
                                                    <p><b>DATE : </b>{{$consultation_request_form_result->bio_date}}</p>
                                                    <p><b>WARD : </b>{{$consultation_request_form_result->bio_ward}}</p>
                                                    <p><b>BED NUMBER : </b>{{$consultation_request_form_result->bio_bed_number}}</p>
                                                    <p><b>THE OPINION OF MR/DR : </b>{{$consultation_request_form_result->dr_mr}}</p>
                                                    <p><b>IN THE : </b>{{$consultation_request_form_result->in_the}}</p>
                                                    <p><b>PATIENT FULL NAME : </b>{{$consultation_request_form_result->referred_from_ward}}</p>
                                                    <p><b>REFERRED FROM WARD : </b>{{$consultation_request_form_result->bed_number}}</p>
                                                    <p><b>CLINIC : </b>{{$consultation_request_form_result->clinic}}</p>
                                                    <p><b>UNIT NUMBER : </b>{{$consultation_request_form_result->unit_no}}</p>
                                                    <p><b>CASUALTY NUMBER : </b>{{$consultation_request_form_result->casualty_no}}</p>
                                                    <p><b>OTHERS : </b>{{$consultation_request_form_result->others}}</p>
                                                    <p><b>DIAGNOSIS : </b>{{$consultation_request_form_result->diagnosis}}</p>
                                                    <p><b>BRIEF DETAILS : </b>{{$consultation_request_form_result->reasons_for_consultations}}</p>
                                                    <p><b>DEGREE OF URGENCY : </b>{{$consultation_request_form_result->urgent}}</p>
                                                    <p><b>SIGNATURE : </b>{{$consultation_request_form_result->signature}}</p>
                                                    <p><b>NAME PRINTED : </b>{{$consultation_request_form_result->name_printed}}</p>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <input type="button" class="btn btn-success" onclick="printDiv('printableArea{{$i}}')" value="print" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            @endforeach
                        @endif
                        </tbody>
                    </table>
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
                            <h4 class="modal-title">QUIT</h4>
                        </div>
                        <div class="modal-body">

                            <div class="col-md-12">
                                <div class="card">
                                    <div class="container">
                                        <form action="{{route('consultation_request_form_post',['patient_id'=>$patient_id])}}" method="post" >{!! csrf_field() !!}
                                            <div class="col-md-12">
                                                <div class="">
                                                    <div class="offset-md-6">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <p>DATE:</p>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <input type="date" id="myDate"  name="bio_date" class="form-control"  readonly placeholder="click to enter date">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <p>WARD:</p>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <input type="text" name="bio_ward" class="form-control" placeholder="click to enter ward number">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <p>BED NUMBER:</p>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <input type="text" name="bio_bed_number" class="form-control" placeholder="click to enter bed number">
                                                            </div>
                                                        </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <p></p>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <input name="administration_patient_informations_id" type="text" class="form-control d-none" value="{{$patient_id}}">
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <p></p>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <input name="institution_id" type="text" class="form-control d-none" value="{{ Auth::user()->institution->id }}">
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <p></p>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <input name="user_id" type="text" value="{{ Auth::user()->id }}" class="form-control d-none">
                                                                </div>
                                                            </div>
                                                    </div>
                                                </div>
                                                <div class="container-fluid">
                                                    <h2 class="text-center">CONSULTATION REQUEST FORM</h2>
                                                    <br>
                                                    <div class="align-self-center text-center">
                                                        <p id="demo"></p>
                                                        <script>
                                                            var d = new Date();
                                                            document.getElementById("demo").innerHTML = d;
                                                        </script>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-2">
                                                            <p>The opinion of DR/MR</p>
                                                        </div>
                                                        <div class="form-group col-md-3">
                                                            <input type="text" name="dr_mr" class="form-control">
                                                        </div>
                                                        <div class="form-group col-md-1 text-center">
                                                            <p>in the</p>
                                                        </div>
                                                        <div class="form-group col-md-3">
                                                            <input type="text" name="in_the" class="form-control">
                                                        </div>
                                                        <div class="form-group col-md-3">
                                                            <p>CONSULTANT CLINIC would be appreciated in this case.</p>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Full name of patient</label>
                                                        <input type="text" name="full_name_of_patient" class="form-control">
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-12">
                                                            <label for="">Referred from ward</label>
                                                            <input type="text" name="referred_from_ward" class="form-control">
                                                        </div>
                                                    </div>
                                                    <p class="text-center">OR</p>
                                                    <div class="form-group">
                                                        <label for="">Clinic</label>
                                                        <input type="text" name="clinic" class="form-control">
                                                    </div>
                                                    <p><b>Previous patient numbers</b></p>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-4">
                                                            <label for="">Unit No.</label>
                                                            <input type="number" name="unit_no" class="form-control">
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label for="">Casualty No.</label>
                                                            <input type="number" name="casualty_no" class="form-control">
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label for="">Others</label>
                                                            <input type="number" name="others" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Diagnosis</label>
                                                        <textarea type="text" name="diagnosis" class="form-control"></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Brief details indicating reasons for consultations</label>
                                                        <textarea name="reasons_for_consultations" class="form-control"></textarea>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-4">
                                                            <p>Please circle degree of urgency</p>
                                                            <div class="radio-inline">
                                                                <input name="urgent" value="Very urgent" class="form-check-input" type="radio">
                                                                <label for="" class="form-check-label">Very urgent</label>
                                                            </div>
                                                            <div class="radio-inline">
                                                                <input name="urgent" value="Urgent" class="form-check-input" type="radio">
                                                                <label for="" class="form-check-label">Urgent</label>
                                                            </div>
                                                            <div class="radio-inline">
                                                                <input name="urgent" value="Fairly urgent" class="form-check-input" type="radio">
                                                                <label for="" class="form-check-label">Fairly urgent</label>
                                                            </div>
                                                            <div class="radio-inline">
                                                                <input name="urgent" value="Not urgent" class="form-check-input" type="radio">
                                                                <label for="" class="form-check-label">Not urgent</label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-md-8">
                                                            <div class="form-group">
                                                                <label for="">Signature</label>
                                                                <input type="password" name="signature" class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="">Name printed</label>
                                                                <input type="text" name="name_printed" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </form>
                                        <!--form here--->
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
