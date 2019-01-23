@extends('layouts.master')

@section('content')
    @include('departments.clinical_services.inpatient.patient_file.patient_bio_information')


    <!-- Title & Breadcrumbs-->
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>TRIAGE FORM</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable" class="table table-striped table-bordered table-responsive">
                            <thead>
                            <tr>


                                <th>COLOR CODE</th>
                                <th>PRINT</th>
                                <th>DESTINATION</th>
                                <th>VIA</th>
                                {{--<th>SALIVATION</th>--}}
                                {{--<th>LACRIMATION</th>--}}
                                {{--<th>URINATION</th>--}}
                                {{--<th>DEFECATION</th>--}}
                                {{--<th>DISTRESS</th>--}}
                                {{--<th>EMESIS</th>--}}
                                {{--<th>AUTO INJECTOR 1</th>--}}
                                {{--<th>AUTO INJECTOR 2</th>--}}
                                {{--<th>AUTO INJECTOR 3</th>--}}
                                {{--<th>AUTO INJECTOR 4</th>--}}
                                {{--<th>AUTO INJECTOR 5</th>--}}
                                {{--<th>GROSS DECON</th>--}}
                                {{--<th>SECONDARY DECON</th>--}}
                                {{--<th>Blunt Trauma</th>--}}
                                {{--<th>Burn</th>--}}
                                {{--<th>C-spine</th>--}}
                                {{--<th>Cardiac</th>--}}
                                {{--<th>Crushing</th>--}}
                                {{--<th>Fracture</th>--}}
                                {{--<th>Laceration</th>--}}
                                {{--<th>Penetrating Injury</th>--}}
                                <th>Others</th>
                                <th>Time</th>
                                <th>B/P</th>
                                <th>Pulse</th>
                                <th>Respiration</th>
                                <th>Drug Solution</th>
                                <th>Dose</th>
                                <th>Temperature</th>
                                <th>Weight</th>
                                <th>Pressure</th>
                                <th>Comments</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(isset($triage_results))


                                @php
                                    $i=0
                                @endphp


                                @foreach($triage_results as $triage_result)


                                    @php
                                        $i++;
                                    @endphp


                                    <tr>
                                        <td><div style="background-color:#{{ $triage_result->status}}"><span style="color:#{{ $triage_result->status}} ">color code</span></div></td>
                                        <td>
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{$i}}">PRINT VIEW</button>
                                        </td>
                                        <td>{{ $triage_result->destination}}</td>
                                        <td>{{ $triage_result->via}}</td>
                                        {{--<td>{{ $triage_result->salivation}}</td>--}}
                                        {{--<td>{{ $triage_result->lacrimation}}</td>--}}
                                        {{--<td>{{ $triage_result->urination}}</td>--}}
                                        {{--<td>{{ $triage_result->defecation}}</td>--}}
                                        {{--<td>{{ $triage_result->distress}}</td>--}}
                                        {{--<td>{{ $triage_result->emesis}}</td>--}}
                                        {{--<td>{{ $triage_result->auto_injector_1}}</td>--}}
                                        {{--<td>{{ $triage_result->auto_injector_2}}</td>--}}
                                        {{--<td>{{ $triage_result->auto_injector_3}}</td>--}}
                                        {{--<td>{{ $triage_result->auto_injector_4}}</td>--}}
                                        {{--<td>{{ $triage_result->auto_injector_5}}</td>--}}
                                        {{--<td>{{ $triage_result->gross_decon}}</td>--}}
                                        {{--<td>{{ $triage_result->secondary_deacon}}</td>--}}
                                        {{--<td>{{ $triage_result->blunt_trauma}}</td>--}}
                                        {{--<td>{{ $triage_result->burn}}</td>--}}
                                        {{--<td>{{ $triage_result->cspine}}</td>--}}
                                        {{--<td>{{ $triage_result->cardiac}}</td>--}}
                                        {{--<td>{{ $triage_result->crushing}}</td>--}}
                                        {{--<td>{{ $triage_result->fracture}}</td>--}}
                                        {{--<td>{{ $triage_result->laceration}}</td>--}}
                                        {{--<td>{{ $triage_result->penetrating_injury}}</td>--}}
                                        <td>{{ $triage_result->others}}</td>
                                        <td>{{ $triage_result->time}}</td>
                                        <td>{{ $triage_result->bp}}</td>
                                        <td>{{ $triage_result->pulse}}</td>
                                        <td>{{ $triage_result->respiration}}</td>
                                        <td>{{ $triage_result->drug_solution}}</td>
                                        <td>{{ $triage_result->dose}}</td>
                                        <td>{{ $triage_result->temperature}}</td>
                                        <th>{{ $triage_result->weight}}</th>
                                        <th>{{ $triage_result->pressure}}</th>
                                        <th>{{ $triage_result->comments}}</th>

                                        <!-- Triage Modal -->
                                        <div class="modal fade" id="exampleModal{{$i}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Triage Record</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div id="printableArea{{$i}}">
                                                        <h2>PATIENT TRIAGE TAG</h2>


                                                        <h4>Color Status:
                                                            <div style="background-color:#{{ $triage_result->status}}">
                                                                @if(str_contains($triage_result->status,'000000'))
                                                                    <H3 style="color:#{{ $triage_result->status}} ">MORGUE</H3>
                                                                @elseif(str_contains($triage_result->status,'8a1f11'))
                                                                    <H3 style="color:#{{ $triage_result->status}} ">IMMEDIATE</H3>
                                                                @elseif(str_contains($triage_result->status,'856404'))
                                                                    <H3 style="color:#{{ $triage_result->status}} ">DELAYED</H3>
                                                                @else
                                                                    <H3 style="color:#{{ $triage_result->status}} ">MINOR</H3>
                                                                @endif
                                                            </div>
                                                        </h4>

                                                        <p><b>Destination : </b>{{ $triage_result->destination}}</p>
                                                        <p><b>Via: </b>{{ $triage_result->via}}</p>
                                                        {{--<p><b>Salivation:</b>{{ $triage_result->salivation}}</p>--}}
                                                        {{--<p><b>Lacrimation : </b>{{ $triage_result->lacrimation}}</p>--}}
                                                        {{--<p><b>URINATION : </b>{{ $triage_result->urination}}</p>--}}
                                                        {{--<p><b>DEFECATION : </b>{{ $triage_result->defecation}}</p>--}}
                                                        {{--<p><b>DISTRESS : </b>{{ $triage_result->distress}}</p>--}}
                                                        {{--<p><b>EMESIS : </b>{{ $triage_result->emesis}}</p>--}}
                                                        {{--<p><b>AUTO INJECTOR 1  : </b>{{ $triage_result->auto_injector_1}}</p>--}}
                                                        {{--<p><b>AUTO INJECTOR 2  : </b>{{ $triage_result->auto_injector_2}}</p>--}}
                                                        {{--<p><b>AUTO INJECTOR 3  : </b>{{ $triage_result->auto_injector_3}}</p>--}}
                                                        {{--<p><b>AUTO INJECTOR 4  : </b>{{ $triage_result->auto_injector_4}}</p>--}}
                                                        {{--<p><b>AUTO INJECTOR 5  : </b>{{ $triage_result->auto_injector_5}}</p>--}}
                                                        {{--<p><b>GROSS DECON : </b>{{ $triage_result->gross_decon}}</p>--}}
                                                        {{--<p><b>SECONDARY DECON : </b>{{ $triage_result->secondary_deacon}}</p>--}}
                                                        {{--<p><b>Blunt Trauma : </b>{{ $triage_result->blunt_trauma}}</p>--}}
                                                        {{--<p><b>Burn : </b>{{ $triage_result->burn}}</p>--}}
                                                        {{--<p><b>C-spine : </b>{{ $triage_result->cspine}}</p>--}}
                                                        {{--<p><b>Cardiac : </b>{{ $triage_result->cardiac}}</p>--}}
                                                        {{--<p><b>Crushing : </b>{{ $triage_result->crushing}}</p>--}}
                                                        {{--<p><b>Fracture : </b>{{ $triage_result->fracture}}</p>--}}
                                                        {{--<p><b>Laceration : </b>{{ $triage_result->laceration}}</p>--}}
                                                        {{--<p><b>Penetrating Injury : </b>{{ $triage_result->penetrating_injury}}</p>--}}
                                                        <p><b>Others : </b>{{ $triage_result->others}}</p>
                                                        <p><b>Time : </b>{{ $triage_result->time}}</p>
                                                        <p><b>B/P : </b>{{ $triage_result->bp}}</p>
                                                        <p><b>Pulse : </b>{{ $triage_result->pulse}}</p>
                                                        <p><b>Respiration : </b>{{ $triage_result->respiration}}</p>
                                                        <p><b>Drug Solution : </b>{{ $triage_result->drug_solution}}</p>
                                                        <p><b>Dose : </b>{{ $triage_result->dose}}</p>
                                                            <p><b>Temperature : </b>{{ $triage_result->temperature}}</p>
                                                            <p><b>Weight : </b>{{ $triage_result->weight}}</p>
                                                            <p><b>Pressure : </b>{{ $triage_result->pressure}}</p>
                                                            <p><b>Comments : </b>{{ $triage_result->comments}}</p>


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
                                <h4 class="modal-title">Add Triage Information</h4>
                            </div>
                            <div class="modal-body">

                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="container-fluid">
                                            <form action="{{route('triage_post',['patient_id'=>$patient_id]) }}" method="post" >{!! csrf_field() !!}

                                                    <div class="col-md-12 align-self-center text-center">
                                                        <H3><u>TRIAGE TAG FORM</u></H3>
                                                    </div>
                                                    <br><br>
                                                    <div class="offset-md-1">

                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <p>DESTINATION</p>
                                                            </div>
                                                            <div class="col-md-9">
                                                                <input type="text"  name="destination" class="form-control" placeholder="">
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <p>VIA</p>
                                                            </div>
                                                            <div class="col-md-9">
                                                                <input type="text"  name="via" class="form-control" placeholder="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    {{--<div class="row">--}}
                                                        {{--<div class="col-md-6">--}}
                                                            {{--<div class="col-md-4">--}}
                                                                {{--<p>Salivation</p>--}}
                                                            {{--</div>--}}
                                                            {{--<div class="col-md-2">--}}
                                                                {{--<input type="checkbox" value="salivation" name="salivation" class="form-control" placeholder="">--}}
                                                            {{--</div>--}}

                                                        {{--</div>--}}
                                                        {{--<div class="col-md-6">--}}
                                                            {{--<div class="col-md-4">--}}
                                                                {{--<p>Lacrimation</p>--}}
                                                            {{--</div>--}}
                                                            {{--<div class="col-md-2">--}}
                                                                {{--<input type="checkbox" value="lacrimation" name="lacrimation" class="form-control" placeholder="">--}}
                                                            {{--</div>--}}

                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                    {{--<div class="row">--}}
                                                        {{--<div class="col-md-6">--}}
                                                            {{--<div class="col-md-4">--}}
                                                                {{--<p>Urination</p>--}}
                                                            {{--</div>--}}
                                                            {{--<div class="col-md-2">--}}
                                                                {{--<input type="checkbox" value="urination" name="urination" class="form-control" placeholder="">--}}
                                                            {{--</div>--}}

                                                        {{--</div>--}}
                                                        {{--<div class="col-md-6">--}}
                                                            {{--<div class="col-md-4">--}}
                                                                {{--<p>Defecation</p>--}}
                                                            {{--</div>--}}
                                                            {{--<div class="col-md-2">--}}
                                                                {{--<input type="checkbox" value="defecation" name="defecation" class="form-control" placeholder="">--}}
                                                            {{--</div>--}}

                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                    {{--<div class="row">--}}
                                                        {{--<div class="col-md-6">--}}
                                                            {{--<div class="col-md-4">--}}
                                                                {{--<p>Distress</p>--}}
                                                            {{--</div>--}}
                                                            {{--<div class="col-md-2">--}}
                                                                {{--<input type="checkbox" value="distress" name="distress" class="form-control" placeholder="">--}}
                                                            {{--</div>--}}

                                                        {{--</div>--}}
                                                        {{--<div class="col-md-6">--}}
                                                            {{--<div class="col-md-4">--}}
                                                                {{--<p>Emesis</p>--}}
                                                            {{--</div>--}}
                                                            {{--<div class="col-md-2">--}}
                                                                {{--<input type="checkbox" value="emesis" name="emesis" class="form-control" placeholder="">--}}
                                                            {{--</div>--}}

                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                    {{--<br>--}}
                                                    {{--<div class="row">--}}

                                                            {{--<div class="col-md-3">--}}
                                                                {{--<p>Auto Injector</p>--}}
                                                            {{--</div>--}}
                                                            {{--<div class="col-md-1">--}}
                                                                {{--<p>1</p>--}}
                                                                {{--<input type="checkbox" value="1" name="auto_injector_1" class="form-control" placeholder="">--}}
                                                            {{--</div>--}}
                                                        {{--<div class="col-md-1">--}}
                                                            {{--<p>2</p>--}}
                                                            {{--<input type="checkbox" value="2" name="auto_injector_2" class="form-control" placeholder="">--}}
                                                        {{--</div>--}}
                                                        {{--<div class="col-md-1">--}}
                                                            {{--<p>3</p>--}}
                                                            {{--<input type="checkbox" value="3" name="auto_injector_3" class="form-control" placeholder="">--}}
                                                        {{--</div>--}}
                                                        {{--<div class="col-md-1">--}}
                                                            {{--<p>4</p>--}}
                                                            {{--<input type="checkbox" value="4" name="auto_injector_4" class="form-control" placeholder="">--}}
                                                        {{--</div>--}}
                                                        {{--<div class="col-md-1">--}}
                                                            {{--<p>5</p>--}}
                                                            {{--<input type="checkbox" value="5" name="auto_injector_5" class="form-control" placeholder="">--}}
                                                        {{--</div>--}}

                                                    {{--</div><br>--}}
                                                {{--<div class="row">--}}

                                                    {{--<div class="col-md-3">--}}
                                                        {{--<p >Gross Decon</p>--}}
                                                    {{--</div>--}}
                                                    {{--<div class="col-md-1">--}}
                                                        {{--<p>Yes</p>--}}
                                                        {{--<input type="radio" value="yes" name="gross_decon" class="form-control" placeholder="">--}}
                                                    {{--</div>--}}
                                                    {{--<div class="col-md-1">--}}
                                                        {{--<p>No</p>--}}
                                                        {{--<input type="radio" value="No" name="gross_decon" class="form-control" placeholder="">--}}
                                                    {{--</div>--}}
                                                {{--</div><br>--}}
                                                {{--<div class="row">--}}

                                                    {{--<div class="col-md-3">--}}
                                                        {{--<p >Secondary Decon</p>--}}
                                                    {{--</div>--}}
                                                    {{--<div class="col-md-1">--}}
                                                        {{--<p>Yes</p>--}}
                                                        {{--<input type="radio" value="yes" name="secondary_deacon" class="form-control" placeholder="">--}}
                                                    {{--</div>--}}
                                                    {{--<div class="col-md-1">--}}
                                                        {{--<p>No</p>--}}
                                                        {{--<input type="radio" value="No" name="secondary_deacon" class="form-control" placeholder="">--}}
                                                    {{--</div>--}}
                                                {{--</div><br>--}}

                                                {{--<div class="col-md-12 align-self-center text-center">--}}
                                                    {{--<H6>Solution</H6>--}}
                                                {{--</div>--}}
                                                {{--<div class="row">--}}


                                                    {{--<div class="col-md-3">--}}
                                                        {{--<p>Blunt Trauma</p>--}}
                                                        {{--<input type="checkbox" value="Blunt Trauma" name="blunt_trauma" class="form-control" placeholder="">--}}
                                                    {{--</div>--}}
                                                    {{--<div class="col-md-3">--}}
                                                        {{--<p>Burn</p>--}}
                                                        {{--<input type="checkbox" value="burn" name="burn" class="form-control" placeholder="">--}}
                                                    {{--</div>--}}
                                                    {{--<div class="col-md-3">--}}
                                                        {{--<p>C-spine</p>--}}
                                                        {{--<input type="checkbox" value="C spine" name="cspine" class="form-control" placeholder="">--}}
                                                    {{--</div>--}}
                                                    {{--<div class="col-md-3">--}}
                                                        {{--<p>Cardiac</p>--}}
                                                        {{--<input type="checkbox" value="Cardiac" name="cardiac" class="form-control" placeholder="">--}}
                                                    {{--</div>--}}
                                                    {{--<div class="col-md-3">--}}
                                                        {{--<p>Crushing</p>--}}
                                                        {{--<input type="checkbox" value="crushing" name="crushing" class="form-control" placeholder="">--}}
                                                    {{--</div>--}}
                                                    {{--<div class="col-md-3">--}}
                                                        {{--<p>Fracture</p>--}}
                                                        {{--<input type="checkbox" value="fracture" name="fracture" class="form-control" placeholder="">--}}
                                                    {{--</div>--}}
                                                    {{--<div class="col-md-3">--}}
                                                        {{--<p>Laceration</p>--}}
                                                        {{--<input type="checkbox" value="laceration" name="laceration" class="form-control" placeholder="">--}}
                                                    {{--</div>--}}
                                                    {{--<div class="col-md-3">--}}
                                                        {{--<p>Penetrating Injury</p>--}}
                                                        {{--<input type="checkbox" value="Penetrating Injury" name="penetrating_injury" class="form-control" placeholder="">--}}
                                                    {{--</div>--}}


                                                {{--</div>--}}
                                                <div class="row">
                                                    <p>Others</p>
                                                    <input type="text"  name="others" class="form-control" placeholder="">
                                                </div><br>
<table class="table-bordered">
    <thead>
    <th>Time</th>
    <th>B/P</th>
    <th>Pulse</th>
    <th>Respiration</th>
    <th>Drug Solution</th>
    <th>Dose</th>
    </thead>
    <tbody>
    <td><input type="time"  name="time" class="form-control" placeholder=""></td>
    <td><input type="text"  name="bp" class="form-control" placeholder=""></td>
    <td><input type="text"  name="pulse" class="form-control" placeholder=""></td>
    <td><input type="text"  name="respiration" class="form-control" placeholder=""></td>
    <td><input type="text"  name="drug_solution" class="form-control" placeholder=""></td>
    <td><input type="text"  name="dose" class="form-control" placeholder=""></td>

    </tbody>
</table>
                                                <table class="table-bordered">
                                                    <thead>
                                                    <th>Temperature</th>
                                                    <th>Weight</th>
                                                    <th>Pressure</th>
                                                    <th>Comments</th>

                                                    </thead>
                                                    <tbody>
                                                    <td><input type="text"  name="temperature" class="form-control" placeholder=""></td>
                                                    <td><input type="text"  name="weight" class="form-control" placeholder=""></td>
                                                    <td><input type="text"  name="pressure" class="form-control" placeholder=""></td>
                                                    <td><textarea type="text"  name="comments" class="form-control" placeholder=""></textarea></td>


                                                    </tbody>
                                                </table>
                                                <div class="form-group col-md-6 p-20">
                                                    <label for="">Status</label>
                                                    <select class="form-control" name="status">
                                                        <option>-Select status-</option>
                                                        <option value="000000" style="background-color:#000000">Morgue</option>
                                                        <option value="8a1f11" style="background-color: #FF0000">Immediate</option>
                                                        <option value="856404" style="background-color: #FFFF00">Delayed</option>
                                                        <option value="1c7430" style="background-color: #008000">Minor</option>
                                                    </select>

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
