@extends('layouts.master')

@section('content')
    @include('departments.clinical_services.inpatient.patient_file.patient_bio_information')
<div class="card"> 
        <div class="card-header">
            <h4>VIEW ECG REQUEST FORM</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="datatable" class="table table-bordered">
                    <thead>
                    <tr>
                        <th>PRINT VIEW</th>
                        <th>UNIT NUMBER</th>
                        <th>WARD CLINIC</th>
                        <th>BED NO</th>
                        <th>PREVIOUS ECG</th>
                        <th>REPORT TO BE SENT TO</th>
                        <th>MEDICATION</th>
                        <th>DIGOXIN/DIURETICS/OTHERS</th>
                        <th>RELEVANT HISTORY</th>
                        <th>DATE</th>
                        <th>SIGNED BY</th>
                        <th> PRINTED</th>

                    </tr>
                    </thead>
                    <tbody>
                    @if(isset($ecgrequestform_results))

                        @php
                            $i=0
                        @endphp

                        @foreach($ecgrequestform_results as $ecgrequestform_result)

                            @php
                                $i++;
                            @endphp

                            <tr>

                                <td>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{$i}}">PRINT VIEW</button>
                                </td>

                                <td>{{ $ecgrequestform_result->unit_number}}</td>
                                <td>{{ $ecgrequestform_result->ward_clinic}}</td>
                                <td>{{ $ecgrequestform_result->bed_no}}</td>
                                <td>{{ $ecgrequestform_result->previous_ecg}}</td>
                                <td>{{ $ecgrequestform_result->report_to_be_sent_to}}</td>
                                <td>{{ $ecgrequestform_result->medication}}</td>
                                <td>{{ $ecgrequestform_result->digoxin_diuretics_others}}</td>
                                <td>{{ $ecgrequestform_result->relevant_history}}</td>
                                <td>{{ $ecgrequestform_result->date}}</td>
                                <td>{{ $ecgrequestform_result->signed_by}}</td>
                                <td>{{ $ecgrequestform_result->printed}}</td>
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
                                                <h2>VIEW ECG REQUEST FORM</h2>
                                                <p><b>PATIENT NAME : </b>{{$patient->name}}</p>
                                                <p><b>UNIT NUMBER : </b>{{$ecgrequestform_result->unit_number}}</p>
                                                <p><b>WARD CLINIC : </b>{{$ecgrequestform_result->ward_clinic}}</p>
                                                <p><b>BED NO : </b>{{$ecgrequestform_result->bed_no}}</p>
                                                <p><b>PREVIOUS ECG : </b>{{$ecgrequestform_result->previous_ecg}}</p>
                                                <p><b>REPORT TO BE SENT TO : </b>{{$ecgrequestform_result->report_to_be_sent_to}}</p>
                                                <p><b>MEDICATION</th> : </b>{{$ecgrequestform_result->medication}}</p>
                                                <p><b>DIGOXIN/DIURETICS/OTHERS : </b>{{$ecgrequestform_result->digoxin_diuretics_others}}</p>
                                                <p><b>RELEVANT HISTORY : </b>{{$ecgrequestform_result->relevant_history}}</p>
                                                <p><b>DATE : </b>{{$ecgrequestform_result->date}}</p>
                                                <p><b>SIGNED BY : </b>{{$ecgrequestform_result->signed_by}}</p>
                                                <p><b>PRINTED : </b>{{$ecgrequestform_result->printed}}</p>
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
<div class="row page-titles">
    <div class="col-md-12 align-self-center text-center">
        <h4 class="theme-cl">E.C.G REQUEST FORM</h4>
    </div>
</div>
<div class="col-md-12">
    <div class="card">
        <div class="container-fluid">
            <form action="{{route('ecgrequestform_post',['patient_id'=>$patient_id])}}" method="post" >{!! csrf_field() !!}
            <h1 class="text-center"></h1>
            <br>
            <!-- <h2 class="text-center">E.C.G REQUEST FORM</h2> -->
                <br>
                <div class="row">
                    <div class="col-md-3">
                        <p></p>
                    </div>
                    <div class="col-md-9">
                        <input name="administration_patient_informations_id" type="text" class="form-control d-none" value="{{$patient_id}}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <p></p>
                    </div>
                    <div class="col-md-9">
                        <input name="institution_id" type="text" class="form-control d-none" value="{{ Auth::user()->institution->id }}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <p></p>
                    </div>
                    <div class="col-md-9">
                        <input name="user_id" type="text" value="{{ Auth::user()->id }}" class="form-control d-none">
                    </div>
                </div>
                <br>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="">Unit Number</label>
                        <input type="number" name="unit_number" class="form-control">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="">Ward Clinic</label>
                        <input type="text" name="ward_clinic" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Bed</label>
                        <input type="text" name="bed_no" class="form-control">
                    </div>
                </div>
                <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="">Previous E.C.G</label>
                        </div>
                        <div class="form-group col-md-6">
                            <div class="form-check col-md-10">
                                <input type="radio" class="form-check-input" name="previous_ecg"  value="Yes">Yes<br>
                                <input type="radio" class="form-check-input" name="previous_ecg" value="No">No
                            </div>
                        </div>
                    <div class="form-group col-md-12">
                        <label for="">Report to be sent to:</label>
                        <input type="text" name="report_to_be_sent_to" class="form-control">
                    </div>
                </div>
                <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="">Medication</label>
                    <input type="text" name="medication" class="form-control">
                </div>
                <div class="form-group col-md-12">
                    <div class="form-group col-md-4">
                            <label for="">Digoxin / Diuretics / Others</label>
                    </div>
                    <div class="form-group col-md-4">
                        <div class="form-check col-md-10">
                            <input type="radio" class="form-check-input" name="digoxin_diuretics_others"  value="Yes">Yes<br>
                            <input type="radio" class="form-check-input" name="digoxin_diuretics_others" value="No">No
                        </div>
                    </div>
                </div>
                </div>
                <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="">Relevant history and clinical findings and provisional diagnosis</label>
                    <textarea class="form-control" name="relevant_history"></textarea>
                </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="">Date</label>
                        <input type="date" name="date" class="form-control">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="">Signed</label>
                        <input type="password" name="signed_by" class="form-control">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="">Printed</label>
                        <input type="text" name="printed" class="form-control">
                    </div>
                </div>
                                <div class="content">
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
