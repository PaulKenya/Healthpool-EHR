@extends('layouts.master')

@section('content')
    <div class="row page-titles">
        <div class="col-md-12 align-self-center text-center">
            <h4 class="theme-cl">BTU</h4>
        </div>
    </div>
    <div class="col-md-12">


        <div class="card">
            <div class="card-header">
                <h4>BTU Records</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="datatable" class="table table-bordered">
                        <thead>
                        <tr>
                            <th>PATIENT_NAME</th>
                            <th>IP_NO</th>
                            <th>SEX</th>
                            <th>AGE</th>
                            <th>WARD</th>
                            <th>BED</th>
                            <th>REASON_FOR_TRANSFUSION</th>
                            <th>CONSULTANT_IN_CHARGE</th>
                            <th>HOUSE_MAN</th>
                            <th>PATIENTS_GROUP</th>
                            <th>HB</th>
                            <th>DATE_OF_PREVIOUS_TRANSFUSION</th>
                            <th>DETAILS_OF_ANY_REACTION</th>
                            <th>DEGREE_OF_URGENCY</th>
                            <th>NUMBER_OF_PINTS</th>
                            <th>PACKAGED</th>
                            <th>DATE_TIME_REQUIRED</th>
                            <th>NAME</th>
                            <th>DATE</th>
                            <th>TIME</th>
                            <th>TIME_AM_PM</th>
                            <th>SIGNATURE</th>
                            <th>BLOOD_GROUP</th>
                            <th>RHESUS</th>
                            <th>PACKED_NO</th>
                            <th>GROUP</th>
                            <th>EXPIRY_DATE</th>
                            <th>COMPATIBILITY</th>
                            <th>IT</th>
                            <th>DETAILS_OF_TRANSFUSION</th>
                            <th>DEPARTMENT</th>
                            <th>DATE_RECEIVED</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(isset($btu_results))
                            @foreach($btu_results as $btu_result)
                                <tr>
                                    <td>{{ $btu_result->patient_name }}</td>
                                    <td>{{ $btu_result->ip_no }}</td>
                                    <td>{{ $btu_result->sex }}</td>
                                    <td>{{ $btu_result->age }}</td>
                                    <td>{{ $btu_result->ward }}</td>
                                    <td>{{ $btu_result->bed }}</td>
                                    <td>{{ $btu_result->reason_for_transfusion }}</td>
                                    <td>{{ $btu_result->consultant_in_charge }}</td>
                                    <td>{{ $btu_result->house_man }}</td>
                                    <td>{{ $btu_result->patients_group }}</td>
                                    <td>{{ $btu_result->hb }}</td>
                                    <td>{{ $btu_result->date_of_previous_transfusion }}</td>
                                    <td>{{ $btu_result->details_of_any_reaction }}</td>
                                    <td>{{ $btu_result->degree_of_urgency }}</td>
                                    <td>{{ $btu_result->number_of_pints }}</td>
                                    <td>{{ $btu_result->packaged }}</td>
                                    <td>{{ $btu_result->date_time_required }}</td>
                                    <td>{{ $btu_result->name }}</td>
                                    <td>{{ $btu_result->date }}</td>
                                    <td>{{ $btu_result->time }}</td>
                                    <td>{{ $btu_result->time_am_pm }}</td>
                                    <td>{{ $btu_result->signature }}</td>
                                    <td>{{ $btu_result->blood_group }}</td>
                                    <td>{{ $btu_result->rhesus }}</td>
                                    <td>{{ $btu_result->packed_no }}</td>
                                    <td>{{ $btu_result->group }}</td>
                                    <td>{{ $btu_result->expiry_date }}</td>
                                    <td>{{ $btu_result->compatibility }}</td>
                                    <td>{{ $btu_result->it }}</td>
                                    <td>{{ $btu_result->details_of_transfusion }}</td>
                                    <td>{{ $btu_result->department }}</td>
                                    <td>{{ $btu_result->date_received }}</td>
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
                <button class="btn btn-success" data-toggle="modal" data-target="#myModal">Add Record</button>
                {{--<button class="btn btn-info" data-toggle="modal" data-target="#myModal">Print</button>--}}
            </div>
        </div>
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog modal-lg">

            </div>
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Add BTU Record</h4>
                </div>
                <div class="modal-body">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="container">
                                <h2 class="text-center">REQUEST FOR BLOOD GROUPING AND TRANSFUSION</h2>
                                <p class="text-center">"Matched" blood will not be available until 24 hrs after receipt of specimen.</p>
                                <p class="text-center">Patient's blood (5ml. clotted) in a labelled bottle must accompany this form.</p>

                                <b><p>PART A- <i>To be completed by doctor in charge of case.</i></p></b>
                                <form action="{{route('btu_post')}}" method="post" >
                                    {!! csrf_field() !!}
                                    <input type="hidden" name="department" value="ent_ward">
                                    <div class="form-group">
                                        <label for="patients_name">Patient's name(BLOCK LETTERS)</label>
                                        <input name="patient_name" type="text" class="form-control" id="patients_name" placeholder="">
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-3">
                                            <label>IP/OP. No.</label>
                                            <input name="ip_no" type="number" class="form-control">
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label>Sex</label>
                                            <select name="sex" class="custom-select">
                                                <option selected>Sex...</option>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-1">
                                            <label>Age</label>
                                            <input name="age" type="number" class="form-control">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label>Ward</label>
                                            <input name="ward" type="number" class="form-control">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label>Bed</label>
                                            <input name="bed" type="number" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Reason for transfusion</label>
                                        <input name="reason_for_transfusion" type="text" class="form-control" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Consultant in charge(Name)</label>
                                        <input name="consultant_in_charge" type="text" class="form-control" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Houseman(BLOCK LETTERS)</label>
                                        <input name="house_man" type="text" class="form-control" placeholder="">
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="">Patient's Group</label>
                                            <input name="patients_group" type="text" class="form-control" placeholder="">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="">Rhesus</label>
                                            <input name="rhesus" type="text" class="form-control" placeholder="">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="">Hb</label>
                                            <input name="hb" type="text" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Date of previous transfusions</label>
                                        <input name="date_of_previous_transfusion" type="date" class="form-control" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Details of any reaction to transfusion</label>
                                        <input name="details_of_any_reaction" type="text" class="form-control" placeholder="">
                                    </div>
                                    <hr>
                                    <b><p>DEGREE OF URGENCY.<i> Indicate thus</i></p></b>
                                    <div class="form-check">
                                        <input name="degree_of_urgency" value="desperate" class="form-check-input" type="radio" >
                                        <label class="form-check-label" >Desperate(Blood needed at once without matching).</label>
                                    </div>
                                    <div class="form-check">
                                        <input name="degree_of_urgency" value="urgent" class="form-check-input" type="radio" >
                                        <label class="form-check-label" >Urgent(Blood needed after quick X-match).</label>
                                    </div>
                                    <small class="form-text text-muted">In these circumstances above the clinician bears responsibility.</small>
                                    <div class="form-check">
                                        <input name="degree_of_urgency" value="non_urgent" class="form-check-input" type="radio" >
                                        <label class="form-check-label" >Non-urgent</label>
                                    </div>
                                    <div class="form-check">
                                        <input name="degree_of_urgency" value="reserve_for_operations" class="form-check-input" type="radio" >
                                        <label class="form-check-label" >Reserve for operations</label>
                                    </div>
                                    <div class="form-check">
                                        <input name="degree_of_urgency" value="group_only" class="form-check-input" type="radio" >
                                        <label class="form-check-label" >Group only.</label>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-11">
                                            <label for="">Number of pints required</label>
                                            <input name="number_of_pints" type="number" class="form-control" placeholder="">
                                        </div>
                                        <div class="form-group col-md-1">
                                            <label for="">Packed?</label>
                                            <div class="form-check">
                                                <input name="packaged" value="yes" class="form-check-input" type="radio" >
                                                <label class="form-check-label" >Yes</label>
                                            </div>
                                            <div class="form-check">
                                                <input name="packaged" value="no" class="form-check-input" type="radio" >
                                                <label class="form-check-label" >No</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Date and time required</label>
                                        <input name="date_time_required" type="date" class="form-control" placeholder="">
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="">Name</label>
                                            <input name="name" type="text" class="form-control" placeholder="">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="">Signature</label>
                                            <input name="signature" type="text" class="form-control" placeholder="">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="">Date</label>
                                            <input name="date" type="date" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                    <hr>
                                    <b><p>PART B-<i>to be completed by the laboratory</i></p></b>
                                    <div class="form-group">
                                        <p>Specimen received by:</p>
                                        <div class="form-row">
                                            <div class="form-group col-md-3">
                                                <label for="">Name</label>
                                                <input name="name" type="text" class="form-control" placeholder="">
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="">Date</label>
                                                <input name="date_received" type="date" class="form-control" placeholder="">
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="">Time</label>
                                                <div class="input-group">
                                                    <input name="time" type="text" class="form-control" >
                                                    <div class="input-group-append">
                                                        <select name="time_am_pm" class="custom-select">
                                                            <option selected value="">A.M/P.M</option>
                                                            <option value="am">A.M</option>
                                                            <option value="pm">P.M</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="">Sign</label>
                                                <input name="signature" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="">Blood group</label>
                                                <input name="blood_group" type="text" class="form-control" placeholder="">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">Rhesus</label>
                                                <input name="rhesus1" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <p>Units X-matched</p>
                                        </div>
                                        <div class="form-group">
                                            <table class="table">
                                                <thead>
                                                <tr>
                                                    <th scope="col">Pack No.</th>
                                                    <th scope="col">Group</th>
                                                    <th scope="col">Expiry Date</th>
                                                    <th scope="col">Compatibility</th>
                                                    <th scope="col">Signature</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td><input name="packed_no" type="number" class="form-control"></td>
                                                    <td><input name="group" type="text" class="form-control"></td>
                                                    <td><input name="expiry_date" type="date" class="form-control"></td>
                                                    <td><input name="compatibility" type="text" class="form-control"></td>
                                                    <td><input name="signature" type="text" class="form-control"></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <p>
                                                <b>It/They will be reserved for the patient until 9.a.m on</b>
                                                <input name="it" type="date" class="form-control">
                                            </p>
                                        </div>
                                    </div>
                                    <hr>
                                    <b><p>PART C-<i>to be completed by the doctor in charge of case</i></p></b>
                                    <div class="form-group">
                                        <label>Full details of transfusion reaction if any:</label>
                                        <textarea name="details_of_transfusion" class="form-control"></textarea>
                                    </div>
                                    <p>Please return form to the laboratory with remains of unit of blood,post transfusion specimen of blood and a specimen of urine.</p>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div></div></div>
@endsection