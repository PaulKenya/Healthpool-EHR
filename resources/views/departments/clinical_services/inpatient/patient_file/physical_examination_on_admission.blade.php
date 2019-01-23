@extends('layouts.master')
@section('content')
    @include('departments.clinical_services.inpatient.patient_file.patient_bio_information')
    <!-- Title & Breadcrumbs-->
    <div class="row page-titles">
        <div class="col-md-12 align-self-center">
            <h4 class="theme-cl">PHYSICAL EXAMINATION ON ADMISSION</h4>
        </div>
    </div>
    <!-- Title & Breadcrumbs-->

    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>VIEW PHYSICAL EXAMINATION ON ADMISSION</h4>
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
                                <th>GENERAL_CONDITION</th>
                                <th>HYGIENE</th>
                                <th>NUTRITION</th>
                                <th>BEHAVIOUR</th>
                                <th>OEDEMA</th>
                                <th>OTHER</th>
                                <th>ABDOMEN</th>
                                <th>SCARS</th>
                                <th>TENDERNESS</th>
                                <th>BOWEL_PATTERN</th>
                                <th>LAST_BOWEL_ACTION</th>
                                <th>LAXATIVES_IN_USE</th>
                                <th>BOWEL_SOUND_</th>
                                <th>OTHERS</th>
                                <th>HAIR</th>
                                <th>FACE </th>
                                <th>EYES</th>
                                <th>NOSE</th>
                                <th>MOUTH</th>
                                <th>OTHER</th>
                                <th>MOBILITY</th>
                                <th>GAIT </th>
                                <th>LIMBS</th>
                                <th>DIGITS</th>
                                <th>MUSCLE </th>
                                <th>G_C_SCORE</th>
                                <th>HEARING</th>
                                <th>SPEECH</th>
                                <th>CRY</th>
                                <th>OTHERS</th>
                                <th>BLADDER_PALPABLE</th>
                                <th>VOIDING </th>
                                <th>PAIN</th>
                                <th>DISCHARGE</th>
                                <th>OTHERS</th>
                                <th>PULSE_RATE</th>
                                <th>BLOOD_PRESSURE</th>
                                <th>BLOOD_PRESSURE</th>
                                <th>APEX_BEAT</th>
                                <th>OTHERS</th>
                                <th>COLOR</th>
                                <th>RASHES</th>
                                <th>SCARS</th>
                                <th>WOUNDS</th>
                                <th>BRUISES</th>
                                <th>TEMPERATURE</th>
                                <th>WATER </th>
                                <th>OTHERS</th>
                                <th>RESPIRATION</th>
                                <th>RATE</th>
                                <th>COUGH</th>
                                <th>WOUNDS</th>
                                <th>OTHERS</th>
                                <th>PHYSICAL_EXAMINATION_COMPLETED_BY</th>
                                <th>DATE</th>
                                <th>TIME</th>
                                <th>DESIGNATION</th>
                                <th>SIGNATURE</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(isset($physicalexaminationonadmission_results))

                                @php
                                    $i=0
                                @endphp

                                @foreach($physicalexaminationonadmission_results as $physicalexaminationonadmission_result)

                                    @php
                                        $i++;
                                    @endphp

                                    <tr>

                                        <td>
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{$i}}">PRINT VIEW</button>
                                        </td>

                                        <td>{{ $physicalexaminationonadmission_result->bio_date}}</td>
                                        <td>{{ $physicalexaminationonadmission_result->bio_ward}}</td>
                                        <td>{{ $physicalexaminationonadmission_result->bio_bed_number}}</td>
                                        <td>{{ $physicalexaminationonadmission_result->condition}}</td>
                                        <td>{{ $physicalexaminationonadmission_result->hygiene}}</td>
                                        <td>{{ $physicalexaminationonadmission_result->nutrition}}</td>
                                        <td>{{ $physicalexaminationonadmission_result->behaviour}}</td>
                                        <td>{{ $physicalexaminationonadmission_result->oedema}}</td>
                                        <td>{{ $physicalexaminationonadmission_result->other}}</td>
                                        <td>{{ $physicalexaminationonadmission_result->abdomen}}</td>
                                        <td>{{ $physicalexaminationonadmission_result->scars}}</td>
                                        <td>{{ $physicalexaminationonadmission_result->tenderness}}</td>
                                        <td>{{ $physicalexaminationonadmission_result->bowelpattern}}</td>
                                        <td>{{ $physicalexaminationonadmission_result->bowelaction}}</td>
                                        <td>{{ $physicalexaminationonadmission_result->laxatives}}</td>
                                        <td>{{ $physicalexaminationonadmission_result->bowelsound}}</td>
                                        <td>{{ $physicalexaminationonadmission_result->othersb}}</td>
                                        <td>{{ $physicalexaminationonadmission_result->Hair}}</td>
                                        <td>{{ $physicalexaminationonadmission_result->Face}}</td>
                                        <td>{{ $physicalexaminationonadmission_result->Eyes}}</td>
                                        <td>{{ $physicalexaminationonadmission_result->Nose}}</td>
                                        <td>{{ $physicalexaminationonadmission_result->Mouth}}</td>
                                        <td>{{ $physicalexaminationonadmission_result->Otherc}}</td>
                                        <td>{{ $physicalexaminationonadmission_result->Mobility}}</td>
                                        <td>{{ $physicalexaminationonadmission_result->Gait}}</td>
                                        <td>{{ $physicalexaminationonadmission_result->Limbs}}</td>
                                        <td>{{ $physicalexaminationonadmission_result->Digits}}</td>
                                        <td>{{ $physicalexaminationonadmission_result->Muscletone}}</td>
                                        <td>{{ $physicalexaminationonadmission_result->Scored}}</td>
                                        <td>{{ $physicalexaminationonadmission_result->Hearingd}}</td>
                                        <td>{{ $physicalexaminationonadmission_result->Speechd}}</td>
                                        <td>{{ $physicalexaminationonadmission_result->Cryd}}</td>
                                        <td>{{ $physicalexaminationonadmission_result->Othersd}}</td>
                                        <td>{{ $physicalexaminationonadmission_result->Bladder}}</td>
                                        <td>{{ $physicalexaminationonadmission_result->Voiding }}</td>
                                        <td>{{ $physicalexaminationonadmission_result->Pain}}</td>
                                        <td>{{ $physicalexaminationonadmission_result->Discharge}}</td>
                                        <td>{{ $physicalexaminationonadmission_result->Otherse}}</td>
                                        <td>{{ $physicalexaminationonadmission_result->pulse}}</td>
                                        <td>{{ $physicalexaminationonadmission_result->bloodpressure}}</td>
                                        <td>{{ $physicalexaminationonadmission_result->apexbeat}}</td>
                                        <td>{{ $physicalexaminationonadmission_result->otherss}}</td>
                                        <td>{{ $physicalexaminationonadmission_result->color}}</td>
                                        <td>{{ $physicalexaminationonadmission_result->rashes}}</td>
                                        <td>{{ $physicalexaminationonadmission_result->scars}}</td>
                                        <td>{{ $physicalexaminationonadmission_result->woundsburns}}</td>
                                        <td>{{ $physicalexaminationonadmission_result->bruises}}</td>
                                        <td>{{ $physicalexaminationonadmission_result->temperaturec}}</td>
                                        <td>{{ $physicalexaminationonadmission_result->waterlowscore}}</td>
                                        <td>{{ $physicalexaminationonadmission_result->otherf}}</td>
                                        <td>{{ $physicalexaminationonadmission_result->respirationpattern}}</td>
                                        <td>{{ $physicalexaminationonadmission_result->ratebmin}}</td>
                                        <td>{{ $physicalexaminationonadmission_result->cough}}</td>
                                        <td>{{ $physicalexaminationonadmission_result->woundssputum}}</td>
                                        <td>{{ $physicalexaminationonadmission_result->othersg}}</td>
                                        <td>{{ $physicalexaminationonadmission_result->completion}}</td>
                                        <td>{{ $physicalexaminationonadmission_result->date}}</td>
                                        <td>{{ $physicalexaminationonadmission_result->time}}</td>
                                        <td>{{ $physicalexaminationonadmission_result->designation}}</td>
                                        <td>{{ $physicalexaminationonadmission_result->signature}}</td>
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
                                                    <div class="row">
                                                    <div id="printableArea{{$i}}">
                                                        <div class="col-md-6">
                                                        <h2>VIEW PHYSICAL EXAMINATION ON ADMISSION</h2>
                                                        <p><b>PATIENT NAME : </b>{{$patient->name}}</p>
                                                        <p><b>DATE : </b>{{$physicalexaminationonadmission_result->bio_date}}</p>
                                                        <p><b>WARD : </b>{{$physicalexaminationonadmission_result->bio_ward}}</p>
                                                        <p><b>BED  : </b>{{$physicalexaminationonadmission_result->bio_bed_number}}</p>
                                                        <p><b>GENERAL_CONDITION : </b>{{$physicalexaminationonadmission_result->condition}}</p>
                                                        <p><b>HYGIENE : </b>{{$physicalexaminationonadmission_result->hygiene}}</p>
                                                        <p><b>NUTRITION : </b>{{$physicalexaminationonadmission_result->nutrition}}</p>
                                                        <p><b>BEHAVIOUR : </b>{{$physicalexaminationonadmission_result->behaviour}}</p>
                                                        <p><b>OEDEMA : </b>{{$physicalexaminationonadmission_result->oedema}}</p>
                                                        <p><b>OTHER : </b>{{$physicalexaminationonadmission_result->other}}</p>
                                                        <p><b>ABDOMEN : </b>{{$physicalexaminationonadmission_result->abdomen}}</p>
                                                        <p><b>SCARS : </b>{{$physicalexaminationonadmission_result->scars}}</p>
                                                        <p><b>TENDERNESS : </b>{{$physicalexaminationonadmission_result->tenderness}}</p>
                                                        <p><b>BOWEL_PATTERN : </b>{{$physicalexaminationonadmission_result->bowelpattern}}</p>
                                                        <p><b>LAST_BOWEL_ACTION : </b>{{$physicalexaminationonadmission_result->bowelaction}}</p>
                                                        <p><b>LAXATIVES_IN_USE : </b>{{$physicalexaminationonadmission_result->laxatives}}</p>
                                                        <p><b>BOWEL_SOUND_ : </b>{{$physicalexaminationonadmission_result->bowelsound}}</p>
                                                        <p><b>OTHERS : </b>{{$physicalexaminationonadmission_result->othersb}}</p>
                                                        <p><b>HAIR : </b>{{$physicalexaminationonadmission_result->Hair}}</p>
                                                        <p><b>FACE  : </b>{{$physicalexaminationonadmission_result->Face}}</p>
                                                        <p><b>EYES : </b>{{$physicalexaminationonadmission_result->Eyes}}</p>
                                                        <p><b>NOSE : </b>{{$physicalexaminationonadmission_result->Nose}}</p>
                                                        <p><b>MOUTH : </b>{{$physicalexaminationonadmission_result->Mouth}}</p>
                                                        <p><b>OTHER : </b>{{$physicalexaminationonadmission_result->Otherc}}</p>
                                                        <p><b>MOBILITY : </b>{{$physicalexaminationonadmission_result->Mobility}}</p>
                                                        <p><b>GAIT  : </b>{{$physicalexaminationonadmission_result->Gait}}</p>
                                                        <p><b>LIMBS : </b>{{$physicalexaminationonadmission_result->Limbs}}</p>
                                                        <p><b>DIGITS : </b>{{$physicalexaminationonadmission_result->Digits}}</p>
                                                        <p><b>MUSCLE  : </b>{{$physicalexaminationonadmission_result->Muscletone}}</p>
                                                        <p><b>G_C_SCORE : </b>{{$physicalexaminationonadmission_result->Scored}}</p>
                                                        </div>
                                                        <div class="col-md-6">
                                                        <p><b>HEARING : </b>{{$physicalexaminationonadmission_result->Hearingd}}</p>
                                                        <p><b>SPEECH : </b>{{$physicalexaminationonadmission_result->Speechd}}</p>
                                                        <p><b>CRY : </b>{{$physicalexaminationonadmission_result->Cryd}}</p>
                                                        <p><b>OTHERS : </b>{{$physicalexaminationonadmission_result->Othersd}}</p>
                                                        <p><b>BLADDER_PALPABLE : </b>{{$physicalexaminationonadmission_result->Bladder}}</p>
                                                        <p><b>VOIDING  : </b>{{$physicalexaminationonadmission_result->Voiding }}</p>
                                                        <p><b>PAIN : </b>{{$physicalexaminationonadmission_result->Pain}}</p>
                                                        <p><b>DISCHARGE : </b>{{$physicalexaminationonadmission_result->Discharge}}</p>
                                                        <p><b>OTHERS : </b>{{$physicalexaminationonadmission_result->Otherse}}</p>
                                                        <p><b>PULSE_RATE : </b>{{$physicalexaminationonadmission_result->pulse}}</p>
                                                        <p><b>BLOOD_PRESSURE : </b>{{$physicalexaminationonadmission_result->bloodpressure}}</p>
                                                        <p><b>APEX_BEAT : </b>{{$physicalexaminationonadmission_result->apexbeat}}</p>
                                                        <p><b>OTHERS : </b>{{$physicalexaminationonadmission_result->otherss}}</p>
                                                        <p><b>COLOR : </b>{{$physicalexaminationonadmission_result->color}}</p>
                                                        <p><b>RASHES : </b>{{$physicalexaminationonadmission_result->rashes}}</p>
                                                        <p><b>SCARS : </b>{{$physicalexaminationonadmission_result->scars}}</p>
                                                        <p><b>WOUNDS : </b>{{$physicalexaminationonadmission_result->woundsburns}}</p>
                                                        <p><b>BRUISES : </b>{{$physicalexaminationonadmission_result->bruises}}</p>
                                                        <p><b>TEMPERATURE : </b>{{$physicalexaminationonadmission_result->temperaturec}}</p>
                                                        <p><b>WATER  : </b>{{$physicalexaminationonadmission_result->waterlowscore}}</p>
                                                        <p><b>OTHERS : </b>{{$physicalexaminationonadmission_result->otherf}}</p>
                                                        <p><b>RESPIRATION : </b>{{$physicalexaminationonadmission_result->respirationpattern}}</p>
                                                        <p><b>RATE : </b>{{$physicalexaminationonadmission_result->ratebmin}}</p>
                                                        <p><b>COUGH : </b>{{$physicalexaminationonadmission_result->cough}}</p>
                                                        <p><b>WOUNDS : </b>{{$physicalexaminationonadmission_result->woundssputum}}</p>
                                                        <p><b>OTHERS : </b>{{$physicalexaminationonadmission_result->othersg}}</p>
                                                        <p><b>PHYSICAL_EXAMINATION_COMPLETED_BY : </b>{{$physicalexaminationonadmission_result->completion}}</p>
                                                        <p><b>DATE : </b>{{$physicalexaminationonadmission_result->date}}</p>
                                                        <p><b>TIME : </b>{{$physicalexaminationonadmission_result->time}}</p>
                                                        <p><b>DESIGNATION : </b>{{$physicalexaminationonadmission_result->designation}}</p>
                                                        <p><b>SIGNATURE : </b>{{$physicalexaminationonadmission_result->signature}}</p>
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
                                            <form action="{{route('physicalexaminationonadmission_post',['patient_id'=>$patient_id])}}" method="post" >{!! csrf_field() !!}

                                                <div class="col-m-3 offset-md-0">
                                                    <H3 class="mt-20">
                                                        PHYSICAL EXAMINATION ON ADMISSION
                                                    </H3>
                                                </div>
                                                <br>
                                                <div class="align-self-center text-center">
                                                    <p id="demo"></p>
                                                    <script>
                                                        var d = new Date();
                                                        document.getElementById("demo").innerHTML = d;
                                                    </script>
                                                </div>
                                                <div class="offset-md-6">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <p>DATE:</p>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <input type="date" id="myDate" name="bio_date" readonly class="form-control" placeholder="click to enter date">
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
                                                <table class="table table-bordered">
                                                    <tbody>

                                                    <tr class="col-md-4">

                                                        <td>
                                                            <p>1.OVERAL APPEARANCE ON ADMISSION</p>

                                                            <span class="row">General_condition<span class="col-md-4"></span> <span class="col-md-8"> <input type="text" name="condition" class="form-control" placeholder=""></span></span><br>
                                                            <span class="row">Hygiene<span class="col-md-4"></span> <span class="col-md-8"> <input type="text" name="hygiene" class=" form-control" placeholder=""></span></span><br>
                                                            <span class="row">Nutrition<span class="col-md-4"></span> <span class="col-md-8"> <input type="text" name="nutrition" class=" form-control" placeholder=""></span></span><br>
                                                            <span class="row">Behaviour<span class="col-md-4"></span> <span class="col-md-8"> <input type="text" name="behaviour" class=" form-control" placeholder=""></span></span><br>
                                                            <span class="row">Oedema<span class="col-md-4"></span> <span class="col-md-8"> <input type="text" name="oedema" class=" form-control" placeholder=""></span></span><br>
                                                            <span class="row">Other<span class="col-md-4"></span> <span class="col-md-8"> <input type="text" name="other" class=" form-control" placeholder=""></span></span><br>


                                                        </td>
                                                        <td>
                                                            <p>6.GASTROINTESTISNAL</p>

                                                            <span class="row"> Abdomen<span class="col-md-4"></span> <span class="col-md-8"> <input type="text" name="abdomen" class="form-control" placeholder=""></span></span><br>
                                                            <span class="row">Scars<span class="col-md-4"></span> <span class="col-md-8"> <input type="text" name="scars" class=" form-control" placeholder=""></span></span><br>
                                                            <span class="row">Tenderness<span class="col-md-4"></span> <span class="col-md-8"> <input type="text" name="tenderness" class=" form-control" placeholder=""></span></span><br>
                                                            <span class="row">Bowel_Pattern<span class="col-md-4"></span> <span class="col-md-8"> <input type="text" name="bowelpattern" class=" form-control" placeholder=""></span></span><br>
                                                            <span class="row">Last_bowel_action<span class="col-md-4"></span> <span class="col-md-8"> <input type="text" name="bowelaction" class=" form-control" placeholder=""></span></span><br>
                                                            <span class="row">Laxatives_in_use<span class="col-md-4"></span> <span class="col-md-8"> <input type="text" name="laxatives" class=" form-control" placeholder=""></span></span><br>
                                                            <span class="row">Bowel_sound_(where_applicable)<span class="col-md-4"></span> <span class="col-md-8"> <input type="text" name="bowelsound" class=" form-control" placeholder=""></span></span><br>
                                                            <span class="row">Others<span class="col-md-4"></span> <span class="col-md-8"> <input type="text" name="othersb" class=" form-control" placeholder=""></span></span>



                                                        </td>

                                                    </tr>
                                                    <tr>

                                                        <td>
                                                            <p>2.HEAD AND NECK</p>

                                                            <span class="row">Hair<span class="col-md-4"></span> <span class="col-md-8"> <input type="text" name="Hair" class="form-control" placeholder=""></span></span><br>
                                                            <span class="row">Face <span class="col-md-4"></span> <span class="col-md-8"> <input type="text" name="Face" class=" form-control" placeholder=""></span></span><br>
                                                            <span class="row">Eyes<span class="col-md-4"></span> <span class="col-md-8"> <input type="text" name="Eyes" class=" form-control" placeholder=""></span></span><br>
                                                            <span class="row">Nose<span class="col-md-4"></span> <span class="col-md-8"> <input type="text" name="Nose" class=" form-control" placeholder=""></span></span><br>
                                                            <span class="row">Mouth<span class="col-md-4"></span> <span class="col-md-8"> <input type="text" name="Mouth" class=" form-control" placeholder=""></span></span><br>
                                                            <span class="row">Other<span class="col-md-4"></span> <span class="col-md-8"> <input type="text" name="Otherc" class=" form-control" placeholder=""></span></span>



                                                        </td>
                                                        <td>
                                                            <p>7.MUSCULO-SKELETAL</p>

                                                            <span class="row">Mobility<span class="col-md-4"></span> <span class="col-md-8"> <input type="text" name="Mobility" class="form-control" placeholder=""></span></span><br>
                                                            <span class="row">Gait <span class="col-md-4"></span> <span class="col-md-8"> <input type="text" name="Gait" class=" form-control" placeholder=""></span></span><br>
                                                            <span class="row">Limbs<span class="col-md-4"></span> <span class="col-md-8"> <input type="text" name="Limbs" class=" form-control" placeholder=""></span></span><br>
                                                            <span class="row">Digits<span class="col-md-4"></span> <span class="col-md-8"> <input type="text" name="Digits" class=" form-control" placeholder=""></span></span><br>
                                                            <span class="row">Muscle tone<span class="col-md-4"></span> <span class="col-md-8"> <input type="text" name="Muscletone" class=" form-control" placeholder=""></span></span>



                                                        </td>

                                                    </tr>

                                                    <td>
                                                        <p>3.CENTRAL NERVOUS SYSTEM(WHERE APPLICABLE)</p>

                                                        <span class="row">G_C_Score<span class="col-md-4"></span> <span class="col-md-8"> <input type="text" name="Scored" class="form-control" placeholder=""></span></span><br>
                                                        <span class="row">Hearing<span class="col-md-4"></span> <span class="col-md-8"> <input type="text" name="Hearingd" class=" form-control" placeholder=""></span></span><br>
                                                        <span class="row">Speech<span class="col-md-4"></span> <span class="col-md-8"> <input type="text" name="Speechd" class=" form-control" placeholder=""></span></span><br>
                                                        <span class="row">Cry<span class="col-md-4"></span> <span class="col-md-8"> <input type="text" name="Cryd" class=" form-control" placeholder=""></span></span><br>
                                                        <span class="row">Others<span class="col-md-4"></span> <span class="col-md-8"> <input type="text" name="Othersd" class=" form-control" placeholder=""></span></span>

                                                    </td>


                                                    <td>
                                                        <p>8.UPRINOGENITAL</p>

                                                        <span class="row">Bladder_palpable/not palpable<span class="col-md-4"></span> <span class="col-md-8"> <input type="text" name="Bladder" class="form-control" placeholder=""></span></span><br>
                                                        <span class="row">Voiding pattern<span class="col-md-4"></span> <span class="col-md-8"> <input type="text" name="Voiding" class=" form-control" placeholder=""></span></span><br>
                                                        <span class="row">Pain<span class="col-md-4"></span> <span class="col-md-8"> <input type="text" name="Pain" class=" form-control" placeholder=""></span></span><br>
                                                        <span class="row">Discharge<span class="col-md-4"></span> <span class="col-md-8"> <input type="text" name="Discharge" class=" form-control" placeholder=""></span></span><br>
                                                        <span class="row">Others<span class="col-md-4"></span> <span class="col-md-8"> <input type="text" name="Otherse" class=" form-control" placeholder=""></span></span>

                                                    </td>



                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>4.CARDIOVASCULAR</p>

                                                            <span class="row">Pulse_rate(b/min)<span class="col-md-4"></span> <span class="col-md-8"> <input type="text" name="pulse" class="form-control" placeholder=""></span></span><br>
                                                            <span class="row">Blood_pressure(mmHg)<span class="col-md-4"></span> <span class="col-md-8"> <input type="text" name="bloodpressure" class=" form-control" placeholder=""></span></span><br>
                                                            <span class="row">Apex_beat(where applicable) <span class="col-md-4"></span> <span class="col-md-8"> <input type="text" name="apexbeat" class=" form-control" placeholder=""></span></span><br>
                                                            <span class="row">Others<span class="col-md-4"></span> <span class="col-md-8"> <input type="text" name="otherss" class=" form-control" placeholder=""></span></span>

                                                        </td>


                                                        <td>
                                                            <bold><p>9.SKIN STATUS</p></bold>

                                                            <span class="row">Color<span class="col-md-4"></span> <span class="col-md-8"> <input type="text" name="color" class="form-control" placeholder=""></span></span><br>
                                                            <span class="row">Rashes<span class="col-md-4"></span> <span class="col-md-8"> <input type="text" name="rashes" class=" form-control" placeholder=""></span></span><br>
                                                            <span class="row">Scars<span class="col-md-4"></span> <span class="col-md-8"> <input type="text" name="scarsb" class=" form-control" placeholder=""></span></span><br>
                                                            <span class="row">Wounds/burns<span class="col-md-4"></span> <span class="col-md-8"> <input type="text" name="woundsburns" class=" form-control" placeholder=""></span></span><br>
                                                            <span class="row">Bruises<span class="col-md-4"></span> <span class="col-md-8"> <input type="text" name="bruises" class=" form-control" placeholder=""></span></span><br>
                                                            <span class="row">Temperature(°C)<span class="col-md-4"></span> <span class="col-md-8"> <input type="text" name="temperaturec" class=" form-control" placeholder=""></span></span><br>
                                                            <span class="row">Water low score<span class="col-md-4"></span> <span class="col-md-8"> <input type="text" name="waterlowscore" class=" form-control" placeholder=""></span></span><br>
                                                            <span class="row">Others<span class="col-md-4"></span> <span class="col-md-8"> <input type="text" name="otherf" class=" form-control" placeholder=""></span></span>

                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <p>5.RESPIRATORY SYSTEM</p>

                                                            <span class="row">Respiration(pattern)<span class="col-md-4"></span> <span class="col-md-8"> <input type="text" name="respirationpattern" class="form-control" placeholder=""></span></span><br>
                                                            <span class="row">Rate(b/min)<span class="col-md-4"></span> <span class="col-md-8"> <input type="text" name="ratebmin" class=" form-control" placeholder=""></span></span><br>
                                                            <span class="row">Cough<span class="col-md-4"></span> <span class="col-md-8"> <input type="text" name="cough" class=" form-control" placeholder=""></span></span><br>
                                                            <span class="row">Wounds/Sputum<span class="col-md-4"></span> <span class="col-md-8"> <input type="text" name="woundssputum" class=" form-control" placeholder=""></span></span><br>

                                                            <span class="row">Others<span class="col-md-4"></span> <span class="col-md-8"> <input type="text" name="othersg" class=" form-control" placeholder=""></span></span>


                                                        </td>

                                                    </tr>



                                                    </tbody>
                                                </table>
                                                <br><br>


                                                <table class="table table-bordered">
                                                    <tbody>

                                                    <tr class="col-md-4">

                                                        <td>
                                                            <div class="row">
                                                                <div class="form-group row col-md-8">
                                                                    <label for="staticEmail" class="col-sm-8 col-form-label">PHYSICAL_EXAMINATION_COMPLETED_BY</label>
                                                                    <div class="col-sm-4">
                                                                        <input type="text" name="completion" class=" form-control" placeholder="">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row col-md-4">
                                                                    <label for="staticEmail" class="col-sm-4 col-form-label">DATE</label>
                                                                    <div class="col-sm-8">
                                                                        <input type="date" id="myDate1"  name="date" class="  form-control" readonly placeholder="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <br>

                                                            <div class="row">
                                                                <div class="form-group row col-md-4">
                                                                    <label for="staticEmail" class="col-sm-8 col-form-label">TIME</label>
                                                                    <div class="col-sm-12">
                                                                        <input type="time" name="time" class=" form-control" placeholder="">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row col-md-4">
                                                                    <label for="staticEmail" class="col-sm-8 col-form-label">DESIGNATION</label>
                                                                    <div class="col-sm-12">
                                                                        <input type="text" name="designation" class=" form-control" placeholder="">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row col-md-4">
                                                                    <label for="staticEmail" class="col-sm-8 col-form-label">SIGNATURE</label>
                                                                    <div class="col-sm-12">
                                                                        <input type="text" name="signature" class=" form-control" placeholder="">
                                                                    </div>
                                                                </div>
                                                            </div>



                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>

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
