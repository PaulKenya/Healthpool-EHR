@extends('layouts.master')
@section('content')
    @include('departments.clinical_services.inpatient.patient_file.patient_bio_information')
    <!-- Title & Breadcrumbs-->
<div class="row page-titles">
    <div class="col-md-12 align-self-center">
        <h4 class="theme-cl">EEG REQUEST FORM</h4>
    </div>
</div>
<!-- Title & Breadcrumbs-->

<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>EEG REQUEST FORM</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="datatable" class="table table-striped table-bordered table-responsive">
                        <thead>
                        <tr>
                            <th>PRINT VIEW</th>
                            <th>UNIT NUMBER</th>
                            <th>WARD CLINIC</th>
                            <th>BED</th>
                            <th>PREVIOUS ECG</th>
                            <th>REPORT TO BE SENT TO</th>
                            <th>MEDICATION</th>
                            <th>DIGOXIN/DIUREIICS/OTHERS</th>
                            <th>RELEVANT HISTORY AND CLINICAL FINDINGS</th>
                            <th>DATE</th>
                            <th>SIGNED</th>
                            <th>PRINTED</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(isset($eeg_report_results))

                            @php
                                $i=0
                            @endphp

                            @foreach($eeg_report_results as $eeg_report_result)

                                @php
                                    $i++;
                                @endphp

                                <tr>

                                    <td>
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{$i}}">PRINT VIEW</button>
                                    </td>

                                    <td>{{ $eeg_report_result->unit_number}}</td>
                                    <td>{{ $eeg_report_result->ward_clinic}}</td>
                                    <td>{{ $eeg_report_result->bed}}</td>
                                    <td>{{ $eeg_report_result->previous_ecg}}</td>
                                    <td>{{ $eeg_report_result->report_to_be_sent_to}}</td>
                                    <td>{{ $eeg_report_result->medication}}</td>
                                    <td>{{ $eeg_report_result->diuretics}}</td>
                                    <td>{{ $eeg_report_result->provisional_diagnosis}}</td>
                                    <td>{{ $eeg_report_result->date}}</td>
                                    <td>{{ $eeg_report_result->signed}}</td>
                                    <td>{{ $eeg_report_result->printed}}</td>
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
                                                    <h2>VIEW  EEG REQUEST FORM</h2>
                                                    <p><b>PATIENT NAME : </b>{{$patient->name}}</p>
                                                    <p><b>UNIT NUMBER : </b>{{$eeg_report_result->unit_number}}</p>
                                                    <p><b>WARD CLINIC : </b>{{$eeg_report_result->ward_clinic}}</p>
                                                    <p><b>BED : </b>{{$eeg_report_result->bed}}</p>
                                                    <p><b>PREVIOUS  : </b>{{$eeg_report_result->previous_ecg}}</p>
                                                    <p><b>REPORT TO BE SENT TO : </b>{{$eeg_report_result->report_to_be_sent_to}}</p>
                                                    <p><b>MEDICATION : </b>{{$eeg_report_result->medication}}</p>
                                                    <p><b>DIGOXIN/DIUREIICS/OTHERS : </b>{{$eeg_report_result->diuretics}}</p>
                                                    <p><b>RELEVANT HISTORY AND CLINICAL FINDINGS : </b>{{$eeg_report_result->provisional_diagnosis}}</p>
                                                    <p><b>DATE : </b>{{$eeg_report_result->date}}</p>
                                                    <p><b>SIGNED : </b>{{$eeg_report_result->signed}}</p>
                                                    <p><b>PRINTED : </b>{{$eeg_report_result->printed}}</p>
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
                    <button class="btn btn-success" data-toggle="modal" data-target="#myModal">Add RecordS</button>
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
                                        <form action="{{route('eeg_report_post',['patient_id'=>$patient_id])}}" method="post" >{!! csrf_field() !!}

                                            <div class="offset-md-6">
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
                                            </div>
                                            <div class="col-md-12">
                                                <div class="card">
                                                    <div class="container-fluid">
                                                        <h1 class="text-center"></h1>
                                                        <h2 class="text-center">E.C.G REQUEST FORM</h2>
                                                        <br>
                                                        <div class="align-self-center text-center">
                                                            <p id="demo"></p>
                                                            <script>
                                                                var d = new Date();
                                                                document.getElementById("demo").innerHTML = d;
                                                            </script>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-3">
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
                                                                <input type="text" name="bed" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-7">
                                                                <label for="">Previous E.C.G</label>
                                                            </div>
                                                            <div class="form-check-inline">
                                                                <label class="form-check-label">
                                                                    <input type="radio" class="form-check-input" name="previous_ecg" value="Yes">Yes
                                                                </label>
                                                            </div>
                                                            <div class="form-check-inline">
                                                                <label class="form-check-label">
                                                                    <input type="radio" class="form-check-input" name="previous_ecg" value="No">No
                                                                </label>
                                                            </div>

                                                        </div>
                                                        <div>
                                                            <div class="form-group col-md-11">
                                                                <label for="">Report to be sent to:</label>
                                                                <input type="text" name="report_to_be_sent_to" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">Medication</label>
                                                            <input type="text" name="medication" class="form-control">
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="row">
                                                            <label for="">Digoxin / Diuretics / Others</label>
                                                            </div>
                                                            <div class="form-check-inline">
                                                                <label class="form-check-label">
                                                                    <input type="radio" class="form-check-input" name="diuretics">Yes
                                                                </label>
                                                            </div>
                                                            <div class="form-check-inline">
                                                                <label class="form-check-label">
                                                                    <input type="radio" class="form-check-input" name="diuretics">No
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">Relevant history and clinical findings and provisional diagnosis</label>
                                                            <textarea name="provisional_diagnosis" class="form-control"></textarea>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-4">
                                                                <label for="">Date</label>
                                                                <input id="myDate" type="date" name="date"readonly  class="form-control">
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label for="">Signature</label>
                                                                <input type="password" name="signed" class="form-control">
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label for="">Printed</label>
                                                                <input type="text" name="printed" class="form-control">
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
