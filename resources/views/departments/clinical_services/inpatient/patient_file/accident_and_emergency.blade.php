@extends('layouts.master')

@section('content')
    <!-- Title & Breadcrumbs-->
    @include('departments.clinical_services.inpatient.patient_file.patient_bio_information')

    <div class=" page-titles">
    <div class="col-md-12 align-self-center">
        <h4 class="theme-cl">Accident and emergency record initial assessment form for {{ $patient->name }}</h4>
    </div>
</div>
<!-- Title & Breadcrumbs-->
<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>ACCIDENT AND EMERGENCY RECORD INITIAL ASSESSMENT FORM</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="datatable" class="table table-striped table-bordered table-responsive">
                        <thead>
                        <tr>

                            <th>Date</th>
                            <th>Time</th>
                            <th>Air</th>
                            <th>Cyclist</th>
                            <th>Assault</th>
                            <th>Pedestrian</th>
                            <th>Burns</th>
                            <th>Self Inflicted</th>
                            <th>Other Form of Accident</th>
                            <th>Patient Brought By:</th>
                            <th>Telephone</th>
                            <th>Relationship</th>
                            <th>Patient Reffered From</th>
                            <th>Walking</th>
                            <th>Stretcher</th>
                            <th>Wheel Chair</th>
                            <th>Carried</th>
                            <th>Name Of Police Officer</th>
                            <th>Force Number</th>
                            <th>Police Station</th>
                            <th>Date Of Accident</th>
                            <th>Time</th>
                            <th>Vehicle Number</th>
                            <th>Driver Name</th>
                            <th>ID Number</th>
                            <th>Driving License Number</th>
                            <th>Triage Time</th>
                            <th>Emergency</th>
                            <th>Urgent</th>
                            <th>Semi Urgent</th>
                            <th>Non Urgent</th>
                            <th>PR</th>
                            <th>RR</th>
                            <th>Temperature</th>
                            <th>Oxygen Sat</th>
                            <th>LMP</th>
                            <th>Weight</th>
                            <th>PHMX</th>
                            <th>Allergies</th>
                            <th>Medication</th>
                            <th>Valuables</th>
                            <th>History and Examination</th>
                            <th>Time</th>
                            <th>Laboratory Sent</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(isset($accident_and_emergency_results))
                            @foreach($accident_and_emergency_results as $accident_and_emergency_result)
                                <tr>

                                    <td>{{ $accident_and_emergency_result->bio_bed_date}}</td>
                                    <td>{{ $accident_and_emergency_result->bio_bed_time}}</td>
                                    <td>{{ $accident_and_emergency_result->air}}</td>
                                    <td>{{ $accident_and_emergency_result->cyclist}}</td>
                                    <td>{{ $accident_and_emergency_result->assault}}</td>
                                    <td>{{ $accident_and_emergency_result->pedestrian}}</td>
                                    <td>{{ $accident_and_emergency_result->burns}}</td>
                                    <td>{{ $accident_and_emergency_result->self_inflicted}}</td>
                                    <td>{{ $accident_and_emergency_result->other_form_of_accident}}</td>
                                    <td>{{ $accident_and_emergency_result->name_a}}</td>
                                    <td>{{ $accident_and_emergency_result->telephone_no}}</td>
                                    <td>{{ $accident_and_emergency_result->relationship}}</td>
                                    <td>{{ $accident_and_emergency_result->patient_referred_from}}</td>
                                    <td>{{ $accident_and_emergency_result->walking}}</td>
                                    <td>{{ $accident_and_emergency_result->stretcher}}</td>
                                    <td>{{ $accident_and_emergency_result->wheel_chair}}</td>
                                    <td>{{ $accident_and_emergency_result->carried}}</td>
                                    <td>{{ $accident_and_emergency_result->name_a1}}</td>
                                    <td>{{ $accident_and_emergency_result->force_number}}</td>
                                    <td>{{ $accident_and_emergency_result->police_station}}</td>
                                    <td>{{ $accident_and_emergency_result->date_of_accident}}</td>
                                    <td>{{ $accident_and_emergency_result->time}}</td>
                                    <td>{{ $accident_and_emergency_result->vehicle_number}}</td>
                                    <td>{{ $accident_and_emergency_result->driver_name}}</td>
                                    <td>{{ $accident_and_emergency_result->id_no}}</td>
                                    <td>{{ $accident_and_emergency_result->dl_no}}</td>
                                    <td>{{ $accident_and_emergency_result->triage_time}}</td>
                                    <td>{{ $accident_and_emergency_result->emergency}}</td>
                                    <td>{{ $accident_and_emergency_result->urgent}}</td>
                                    <td>{{ $accident_and_emergency_result->semi_urgent}}</td>
                                    <td>{{ $accident_and_emergency_result->non_urgent}}</td>
                                    <td>{{ $accident_and_emergency_result->pr}}</td>
                                    <td>{{ $accident_and_emergency_result->rr}}</td>
                                    <td>{{ $accident_and_emergency_result->temp}}</td>
                                    <td>{{ $accident_and_emergency_result->oxygen_sat}}</td>
                                    <td>{{ $accident_and_emergency_result->lmp}}</td>
                                    <td>{{ $accident_and_emergency_result->wt}}</td>
                                    <td>{{ $accident_and_emergency_result->phmx}}</td>
                                    <td>{{ $accident_and_emergency_result->allergies}}</td>
                                    <td>{{ $accident_and_emergency_result->medications}}</td>
                                    <td>{{ $accident_and_emergency_result->valuables}}</td>
                                    <td>{{ $accident_and_emergency_result->history_and_examination}}</td>
                                    <td>{{ $accident_and_emergency_result->time_seen}}</td>
                                    <td>{{ $accident_and_emergency_result->lab_sent}}</td>


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
                            <h4 class="modal-title">Add Assessment Information</h4>
                        </div>
                        <div class="modal-body">

                            <div class="col-md-12">
                                <div class="card">
                                    <div class="container-fluid">
                                        <form action="{{route('accident_and_emergency_post',['patient_id'=>$patient_id]) }}" method="post" >{!! csrf_field() !!}

                                                    <div class="tab-content tabs" id="home">

                                                            <div class="col-md-12 align-self-center text-center">
                                                                <H3><u>ACCIDENT AND EMERGENCY RECORD INITIAL ASSESSMENT FORM</u></H3>
                                                            </div>
                                                            <br><br>
                                                            <div class="offset-md-6">

                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                        <p>DATE:</p>
                                                                    </div>
                                                                    <div class="col-md-9">
                                                                        <input type="date" name="bio_bed_date" class="form-control" placeholder="click to enter date">
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                        <p>TIME:</p>
                                                                    </div>
                                                                    <div class="col-md-9">
                                                                        <input type="time" name="bio_bed_time" class="form-control" placeholder="click to enter time">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row ">
                                                                <div class="col-md-12 align-self-center text-center">
                                                                    <H3><u>ACCIDENT AND EMERGENCY RECORD</u></H3>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12 align-self-center text-center">
                                                                    <H4>TYPE OF ACCIDENT:</H4>
                                                                </div>
                                                                <div class="col-md-2">
                                                                        <input type="checkbox" value="Air"  placeholder="" name="air">AIR
                                                                </div>
                                                                <div class="col-md-2">
                                                                        <input type="checkbox" value="Cyclist" placeholder="" name="cyclist">CYCLIST
                                                                </div>
                                                                <div class="col-md-2">
                                                                        <input type="checkbox" value="Assault" placeholder="" name="assault">ASSAULT
                                                                </div>
                                                                <div class="col-md-2">
                                                                        <input type="checkbox" value="Pedestrian" placeholder="" name="pedestrian">PEDESTRIAN
                                                                </div>
                                                                <div class="col-md-2">
                                                                        <input type="checkbox" value="Burns" placeholder="" name="burns">BURNS
                                                                </div>
                                                                <div class="col-md-2">
                                                                        <input type="checkbox" value="Self Inflicted" placeholder="" name="self_inflicted">SELF INFLICTED
                                                                </div>
                                                            </div>
                                                            <br><br>
                                                            <div class="row">
                                                                <div class="col-md-11">
                                                                    <p>Other form of accident:</p>
                                                                </div>
                                                                <div class="col-md-11">
                                                                    <input type="text" name="other_form_of_accident" class="form-control" placeholder="">
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12 align-self-center text-center">
                                                                    <H4>PATIENT BROUGHT BY:</H4>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <label for="staticEmail" class="col-sm-6 col-form-label">NAME:</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" name="name_a" class="form-control" placeholder="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <label for="staticEmail" class="col-sm-6 col-form-label">TEL:</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" name="telephone_no" class="form-control" placeholder="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <label for="staticEmail" class="col-sm-6 col-form-label">RELATIONSHIP:</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" name="relationship" class="form-control" placeholder="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <label for="staticEmail" class="col-sm-10 col-form-label">PATIENT REFERRED FROM:</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" name="patient_referred_from" class="form-control" placeholder="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <br><br>
                                                            <div class="row">
                                                                <div class="col-md-12 align-self-center text-center">
                                                                    <H4>MODE OF ARRIVAL:</H4>
                                                                </div>
                                                                <div class="col-md-3">
                                                                        <input type="checkbox"  value="Walking" placeholder="" name="walking">WALKING
                                                                </div>
                                                                <div class="col-md-3">
                                                                        <input type="checkbox" value="Stretcher" placeholder="" name="stretcher">STRETCHER
                                                                </div>
                                                                <div class="col-md-3">
                                                                        <input type="checkbox" value="Wheel Chair" placeholder="" name="wheel_chair">WHEEL CHAIR
                                                                </div>
                                                                <div class="col-md-3">
                                                                        <input type="checkbox" value="Carried" placeholder="" name="carried">CARRIED
                                                                </div>
                                                            </div>
                                                        <br><br>
                                                            <div class="row">
                                                                <div class="col-md-12 align-self-center text-center">
                                                                    <H4>OTHER DETAILS:</H4>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <label for="staticEmail" class="col-sm-8 col-form-label">NAME OF POLICE OFFICER:</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" name="name_a1" class="form-control" placeholder="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <label for="staticEmail" class="col-sm-8 col-form-label">FORCE NUMBER:</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" name="force_number" class="form-control" placeholder="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <label for="staticEmail" class="col-sm-8 col-form-label">POLICE STATION:</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" name="police_station" class="form-control" placeholder="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <label for="staticEmail" class="col-sm-8 col-form-label">DATE OF ACCIDENT:</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="date" name="date_of_accident" class="form-control" placeholder="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <label for="staticEmail" class="col-sm-3 col-form-label">TIME:</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="time" name="time" class="form-control" placeholder="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <label for="staticEmail" class="col-sm-8 col-form-label">VEHICLE NUMBER:</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" name="vehicle_number" class="form-control" placeholder="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <label for="staticEmail" class="col-sm-8 col-form-label">DRIVER NAME:</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" name="driver_name" class="form-control" placeholder="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <label for="staticEmail" class="col-sm-8 col-form-label">ID NO:</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" name="id_no" class="form-control" placeholder="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <label for="staticEmail" class="col-sm-8 col-form-label">DL NO:</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="number" name="dl_no" class="form-control" placeholder="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-11">
                                                                    <label for="staticEmail" class="col-sm-8 col-form-label">TRIAGE TIME:</label>
                                                                    <div class="col-sm-12">
                                                                        <input type="time" name="triage_time" class="form-control" placeholder="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <br><br>
                                                            <div class="row">
                                                                <div class="col-md-12 align-self-center text-center">
                                                                    <H4>STATUS:</H4>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <label for="staticEmail" class="col-sm-8 col-form-label">EMERGENCY:</label>
                                                                    <div class="col-sm-2">
                                                                        <input type="checkbox" value="Emergency" placeholder="" name="emergency">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <label for="staticEmail" class="col-sm-8 col-form-label">URGENT:</label>
                                                                    <div class="col-sm-2">
                                                                        <input type="checkbox" value="Urgent" placeholder="" name="urgent">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <label for="staticEmail" class="col-sm-8 col-form-label">SEMI URGENT:</label>
                                                                    <div class="col-sm-2">
                                                                        <input type="checkbox" value="Semi-Urgent" placeholder="" name="semi_urgent">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <label for="staticEmail" class="col-sm-8 col-form-label">NON URGENT:</label>
                                                                    <div class="col-sm-2">
                                                                        <input type="checkbox" value="Non Urgent" placeholder="" name="non_urgent">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <br><br>
                                                            <div class="row">
                                                                <div class="col-md-12 align-self-center text-center">
                                                                    <H4>VITALS:</H4>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <label for="staticEmail" class="col-sm-6 col-form-label">PR:</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="number" name="pr" class="form-control" placeholder="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <label for="staticEmail" class="col-sm-6 col-form-label">RR:</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="number" name="rr" class="form-control" placeholder="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <label for="staticEmail" class="col-sm-8 col-form-label">TEMP:</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="number" name="temp" class="form-control" placeholder="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <label for="staticEmail" class="col-sm-8 col-form-label">OXYGEN SAT:</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="number" name="oxygen_sat" class="form-control" placeholder="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <label for="staticEmail" class="col-sm-6 col-form-label">LMP:</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="number" name="lmp" class="form-control" placeholder="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <label for="staticEmail" class="col-sm-6 col-form-label">WT:</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="number" name="wt" class="form-control" placeholder="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <label for="staticEmail" class="col-sm-3 col-form-label">PHMX:</label>
                                                                    <div class="col-sm-12">
                                                                        <select class="form-control" name="phmx" id="phmx">
                                                                            <option >DM</option>
                                                                            <option >HTN</option>
                                                                            <option >CA</option>
                                                                            <option >RES</option>
                                                                            <option >SEIZURE</option>
                                                                            <option >RENAL</option>
                                                                            <option >CA</option>
                                                                            <option >NONE</option>
                                                                            <option >OTHER</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12 align-self-center text-center">
                                                                    <H4></H4>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label for="staticEmail" class="col-sm-8 col-form-label">ALLERGIES:</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" name="allergies" class="form-control" placeholder="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label for="staticEmail" class="col-sm-8 col-form-label">MEDICATIONS(dose+frequency):</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" name="medications" class="form-control" placeholder="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label for="staticEmail" class="col-sm-8 col-form-label">VALUABLES:</label>
                                                                    <div class="col-sm-10">
                                                                        <select class="form-control" name="valuables" id="valuables">
                                                                            <option value="with patient">WITH PATIENT</option>
                                                                            <option value="family">FAMILY</option>
                                                                            <option value="friend">FRIEND</option>
                                                                            <option value="safe keeping">SAFE KEEPING</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12 align-self-center text-center">
                                                                    <H4></H4>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label for="staticEmail" class="col-sm-8 col-form-label">HISTORY AND EXAMINATION:</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" name="history_and_examination" class="form-control" placeholder="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label for="staticEmail" class="col-sm-8 col-form-label">TIME SEEN:</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="time" name="time_seen" class="form-control" placeholder="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label for="staticEmail" class="col-sm-8 col-form-label">LAB SENT AM/PM:</label>
                                                                    <div class="col-sm-10">
                                                                        <select class="form-control" name="lab_sent" id="valuables">
                                                                            <option >MPS</option>
                                                                            <option >TBC</option>
                                                                            <option >UEC</option>
                                                                            <option >TFT</option>
                                                                            <option >WIDAL</option>
                                                                            <option >LFT</option>
                                                                            <option >URIC/ACID</option>
                                                                            <option >PPT/INR</option>
                                                                            <option >HIV</option>
                                                                            <option >CK MB</option>
                                                                            <option >TROPONI</option>
                                                                            <option >FBS/RBS</option>
                                                                            <option >PDT</option>
                                                                            <option >HBsAG</option>
                                                                            <option >URINE/MCS</option>
                                                                            <option >HVSMCS</option>
                                                                            <option >PUSSWAB</option>
                                                                            <option >STOOL MCS</option>
                                                                            <option >ECG</option>
                                                                            <option >X-RAY</option>
                                                                            <option >CHEST</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <input name="administration_patient_informations_id" type="text" class="form-control d-none" value="{{$patient_id}}">
                                                        <input name="institution_id" type="text" class="form-control d-none" value="{{ Auth::user()->institution->id }}">
                                                        <input name="user_id" type="text" value="{{ Auth::user()->id }}" class="form-control d-none">
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
