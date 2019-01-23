@extends('layouts.master')

@section('content')
    @include('departments.clinical_services.inpatient.patient_file.patient_bio_information')
    <div class="row page-titles">
        <div class="col-md-12 align-self-center text-center">
            <h4 class="theme-cl">Treatment Sheet</h4>
        </div>
    </div>
    <div class="col-md-12">


        <div class="card">
            <div class="card-header">
                <h4> Records</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="datatable" class="table table-bordered">
                        <thead>
                        <tr>
                            <th>VIEW</th>
                            <th>CONSULTANT</th>
                            <th>DATE</th>
                            <th>DRUG</th>
                            <th>DOSE</th>
                            <th>RATE</th>
                            <th>FREQUENCY DURATION</th>
                            <th>SIGNATURE</th>

                            <th>TIME</th>
                            <th>DATE</th>
                            <th>DRUG TAKEN</th>
                            <th>DOSE</th>
                            <th>RATE</th>
                            <th>FREQUENCY DURATION</th>
                            <th>SIGNATURE</th>
                            <th>TIME</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(isset($treatment_sheet_results))
                            @php
                                $i=0
                            @endphp
                            @foreach($treatment_sheet_results as $treatment_sheet_result)
                                @php
                                    $i++;
                                @endphp
                                <tr>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{$i}}">
                                        VIEW
                                    </button>
                                    <td>{{ $treatment_sheet_result->consultant }}</td>
                                    <td>{{ $treatment_sheet_result->date }}</td>
                                    <td>{{ $treatment_sheet_result->drug }}</td>
                                    <td>{{ $treatment_sheet_result->dose }}</td>
                                    <td>{{ $treatment_sheet_result->rate }}</td>
                                    <td>{{ $treatment_sheet_result->frequency_duration }}</td>
                                    <td>{{ $treatment_sheet_result->name_signature }}</td>
                                    <td>{{ $treatment_sheet_result->time }}</td>
                                    <td>{{ $treatment_sheet_result->dates }}</td>
                                    <td>{{ $treatment_sheet_result->drug_takens }}</td>
                                    <td>{{ $treatment_sheet_result->doses }}</td>
                                    <td>{{ $treatment_sheet_result->rates }}</td>
                                    <td>{{ $treatment_sheet_result->frequency_durations }}</td>
                                    <td>{{ $treatment_sheet_result->name_signatures }}</td>
                                    <td>{{ $treatment_sheet_result->times }}</td>
                                    <div class="modal fade" id="exampleModal{{$i}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Treatment Sheet</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div id="printableArea{{$i}}">
                                                        <h2>Treatment Sheet</h2>
                                                        <p><b>Patient Name : </b>{{$patient->name}}</p>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="">CONSULTANT</label>
                                                                {{ $treatment_sheet_result->consultant }}
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="">DATE</label>
                                                                {{ $treatment_sheet_result->date }}
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="">DRUG</label>
                                                                {{ $treatment_sheet_result->drug }}
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="">DOSE</label>
                                                                {{ $treatment_sheet_result->dose }}
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="">RATE</label>
                                                                {{ $treatment_sheet_result->rate }}
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="">FREQUENCY DURATION</label>
                                                                {{ $treatment_sheet_result->frequency_duration }}
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="">SIGNATURE</label>
                                                                {{ $treatment_sheet_result->name_signature }}
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="">TIME</label>
                                                                {{ $treatment_sheet_result->time }}
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="">DATE</label>
                                                                {{ $treatment_sheet_result->dates }}
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="">DRUG TAKEN</label>
                                                                {{ $treatment_sheet_result->drug_takens }}
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="">DOSE</label>
                                                                {{ $treatment_sheet_result->doses }}
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="">RATE</label>
                                                                {{ $treatment_sheet_result->rates }}
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="">FREQUENCY DURATION</label>
                                                                {{ $treatment_sheet_result->frequency_durations }}
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="">SIGNATURE</label>
                                                                {{ $treatment_sheet_result->name_signatures }}
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="">TIME</label>
                                                                {{ $treatment_sheet_result->times }}
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <input type="button" class="btn btn-success" onclick="printDiv('printableArea{{$i}}')" value="print" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

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


                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Add Record</h4>
                    </div>


            <div class="modal-body">
                <div class="col-md-12">
                    <div class="card">
                        <div class="container-fluid">

                            <h2 class="text-center">INPATIENT TREATMENT SHEET</h2>
                            <p>NOTE:</p>
                            <ol>
                                <li>All prescriptions must be rewritten weekly. Not later than monday midday</li>
                                <li>Use red pen for DDA</li>
                                <li>Drug allergies</li>
                            </ol>
                            <hr>
                            <form action="{{route('treatment_sheet_post',['patient_id'=>$patient_id])}}" method="post" >{!! csrf_field() !!}


                                <input name="administration_patient_informations_id" type="text" class="form-control d-none" value="{{$patient_id}}">
                                <input name="institution_id" type="text" class="form-control" class="form-control d-none" value="{{ Auth::user()->institution->id }}">
                                <input name="user_id" type="text" value="{{ Auth::user()->id }}" class="form-control d-none">


                                <div class="form-group">
                                    <label for="">Consultant</label>
                                    <input name='consultant' type="text" class="form-control">
                                </div>
                                <hr>
                                <b><p>ONCE ONLY PRESCRIPTION,STAT DOSES,PRE-MED ETC.</p></b>
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">Date</th>
                                        <th scope="col">#</th>
                                        <th scope="col">Drug</th>
                                        <th scope="col">Dose</th>
                                        <th scope="col">Route</th>
                                        <th scope="col">Frequency/Duration(FR/DU)</th>
                                        <th scope="col">Name & Signature</th>
                                        <th scope="col">Time</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><input name="date" id="myDate" type="date" readonly class="form-control"></td>
                                        <th scope="row">1</th>
                                        <td><input name="drug" type="text" class="form-control"></td>
                                        <td><input name="dose" type="text" class="form-control"></td>
                                        <td><input name="rate" type="text" class="form-control"></td>
                                        <td><input name="frequency_duration" type="text" class="form-control"></td>
                                        <td><input name="name_signature" type="text" class="form-control"></td>
                                        <td><input name="time" type="text" class="form-control"></td>
                                    </tr>
                                    </tbody>
                                </table>

                                <hr>
                                <b><p>REGULAR PRESCRIPTIONS</p></b>
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">Date</th>
                                        <th scope="col">#</th>
                                        <th scope="col">Drug</th>
                                        <th scope="col">Dose</th>
                                        <th scope="col">Route</th>
                                        <th scope="col">Frequency/Duration(FR/DU)</th>
                                        <th scope="col">Name & Signature</th>
                                        <th scope="col">AM PM</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><input name="dates" id="myDate1"  type="date" readonly class="form-control"></td>
                                        <th scope="row">1</th>
                                        <td><input name="drug_takens"  type="text" class="form-control"></td>
                                        <td><input name="doses"  type="text" class="form-control"></td>
                                        <td><input name="rates"  type="text" class="form-control"></td>
                                        <td><input name="frequency_durations"  type="text" class="form-control"></td>
                                        <td><input name="name_signatures" type="text" class="form-control"></td>
                                        <td><input name="times"  type="text" class="form-control"></td>
                                    </tr>
                                    </tbody>
                                </table>
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