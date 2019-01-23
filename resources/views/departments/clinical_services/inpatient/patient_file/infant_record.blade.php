@extends('layouts.master')
@section('content')
    @include('departments.clinical_services.inpatient.patient_file.patient_bio_information')


<div class="row page-titles">
    <div class="col-md-12 align-self-center">
        <h4 class="theme-cl">INFANT RECORD </h4>
    </div>
</div>
<!-- Title & Breadcrumbs-->
<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>INFANT RECORD</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="datatable" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>mothers_hospital_no</th>
                                <th>name</th>
                                <th>fathers_occupation</th>
                                <th>address</th>
                                <th>infant_name</th>
                                <th>age</th>
                                <th>sex</th>
                                <th>age1</th>
                                <th>para</th>
                                <th>edd</th>
                                <th>year</th>
                                <th>outcome</th>
                                <th>parental_clinic</th>
                                <th>toxaemia_a_phaem</th>
                                <th>others</th>
                                <th>Diabetes</th>
                                <th>Tb</th>
                                <th>Renal</th>
                                <th>Cardiac</th>
                                <th>others1</th>
                                <th>ABO</th>
                                <th>RH</th>
                                <th>kalin</th>
                                <th>VDRL</th>
                                <th>X_Ray</th>
                                <th>result</th>
                                <th>duration</th>
                                <th>second_stage</th>
                                <th>mode_of_delivery</th>
                                <th>placenta</th>
                                <th>wt</th>
                                <th>condition</th>
                                <th>membranes_raptured</th>
                                <th>amniotic_fluid</th>
                                <th>foul</th>
                                <th>meconium</th>
                                <th>analgesia</th>
                                <th>anasthesia</th>
                                <th>born_on</th>
                                <th>at</th>
                                <th>resuscitation</th>
                                <th>mucous_extraction</th>
                                <th>given_duration</th>
                                <th>incubation_duration</th>
                                <th>spontaneous_response</th>
                                <th>drugs_during_resuscitation</th>
                                <th>birth_weight</th>
                                <th>birth_length</th>
                                <th>malformation</th>
                                <th>blood_group</th>
                                <th>highest_bilirubin</th>
                                <th>urine</th>
                                <th>drugs</th>
                                <th>bye_drops</th>
                                <th>vit_k</th>
                                <th>bcg</th>
                                <th>perinantal_problems</th>
                                <th>admitted_to_nursery</th>
                                <th>time</th>
                                <th>dismissal_weight</th>
                                <th>remiscitation</th>
                                <th>anomalies</th>
                                <th>apgar_score_at_1_min</th>
                                <th>5_min</th>
                            </tr>
                        </thead>
                        <tbody>
                        @if(isset($infant_record_results))
                            @foreach($infant_record_results as $infant_record_result)
                                <tr>
                                    <td>{{ $infant_record_result->mothers_hospital_no }}</td>
                                    <td>{{ $infant_record_result->name }}</td>
                                    <td>{{ $infant_record_result->fathers_occupation }}</td>
                                    <td>{{ $infant_record_result->address }}</td>
                                    <td>{{ $infant_record_result->infant_name }}</td>
                                    <td>{{ $infant_record_result->age }}</td>
                                    <td>{{ $infant_record_result->sex }}</td>
                                    <td>{{ $infant_record_result->age1 }}</td>
                                    <td>{{ $infant_record_result->para }}</td>
                                    <td>{{ $infant_record_result->edd }}</td>
                                    <td>{{ $infant_record_result->year }}</td>
                                    <td>{{ $infant_record_result->outcome }}</td>
                                    <td>{{ $infant_record_result->parental_clinic }}</td>
                                    <td>{{ $infant_record_result->toxaemia_a_phaem }}</td>
                                    <td>{{ $infant_record_result->others }}</td>
                                    <td>{{ $infant_record_result->Diabetes }}</td>
                                    <td>{{ $infant_record_result->Tb }}</td>
                                    <td>{{ $infant_record_result->Renal }}</td>
                                    <td>{{ $infant_record_result->Cardiac }}</td>
                                    <td>{{ $infant_record_result->others1 }}</td>
                                    <td>{{ $infant_record_result->ABO }}</td>
                                    <td>{{ $infant_record_result->RH }}</td>
                                    <td>{{ $infant_record_result->kalin }}</td>
                                    <td>{{ $infant_record_result->VDRL }}</td>
                                    <td>{{ $infant_record_result->X_Ray }}</td>
                                    <td>{{ $infant_record_result->result }}</td>
                                    <td>{{ $infant_record_result->duration }}</td>
                                    <td>{{ $infant_record_result->second_stage }}</td>
                                    <td>{{ $infant_record_result->mode_of_delivery }}</td>
                                    <td>{{ $infant_record_result->placenta }}</td>
                                    <td>{{ $infant_record_result->wt }}</td>
                                    <td>{{ $infant_record_result->condition }}</td>
                                    <td>{{ $infant_record_result->membranes_raptured }}</td>
                                    <td>{{ $infant_record_result->amniotic_fluid }}</td>
                                    <td>{{ $infant_record_result->foul }}</td>
                                    <td>{{ $infant_record_result->meconium }}</td>
                                    <td>{{ $infant_record_result->analgesia }}</td>
                                    <td>{{ $infant_record_result->anasthesia }}</td>
                                    <td>{{ $infant_record_result->born_on }}</td>
                                    <td>{{ $infant_record_result->at }}</td>
                                    <td>{{ $infant_record_result->resuscitation }}</td>
                                    <td>{{ $infant_record_result->mucous_extraction }}</td>
                                    <td>{{ $infant_record_result->given_duration }}</td>
                                    <td>{{ $infant_record_result->incubation_duration }}</td>
                                    <td>{{ $infant_record_result->spontaneous_response }}</td>
                                    <td>{{ $infant_record_result->drugs_during_resuscitation }}</td>
                                    <td>{{ $infant_record_result->birth_weight }}</td>
                                    <td>{{ $infant_record_result->birth_length }}</td>
                                    <td>{{ $infant_record_result->malformation }}</td>
                                    <td>{{ $infant_record_result->blood_group }}</td>
                                    <td>{{ $infant_record_result->highest_bilirubin }}</td>
                                    <td>{{ $infant_record_result->urine }}</td>
                                    <td>{{ $infant_record_result->drugs }}</td>
                                    <td>{{ $infant_record_result->bye_drops }}</td>
                                    <td>{{ $infant_record_result->vit_k }}</td>
                                    <td>{{ $infant_record_result->bcg }}</td>
                                    <td>{{ $infant_record_result->perinantal_problems }}</td>
                                    <td>{{ $infant_record_result->admitted_to_nursery }}</td>
                                    <td>{{ $infant_record_result->time }}</td>
                                    <td>{{ $infant_record_result->dismissal_weight }}</td>
                                    <td>{{ $infant_record_result->remiscitation }}</td>
                                    <td>{{ $infant_record_result->anomalies }}</td>
                                    <td>{{ $infant_record_result->apgar_score_at_1_min }}</td>
                                    <td>{{ $infant_record_result->five_min }}</td>
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

                        <div class="col-m-3 offset-md-3">
                            <H3 class="mt-20">
                                INFANT RECORD
                            </H3>
                        </div>
                        <form action="{{route('patient_file_infant_record_post')}}" method="post" >{!! csrf_field() !!}
                        <form action="" method="get" accept-charset="utf-8">


                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label>Mother's Hospital No.</label>
                                    <input type="number" class="form-control" id="" name="mothers_hospital_no" aria-describedby="" placeholder="">
                                </div>

                                <div class="form-group col-md-3">
                                    <label>NAME</label>
                                    <input type="text" class="form-control" id="" name="name" aria-describedby="" placeholder="">
                                </div>
                                <div class="form-group col-md-3">
                                    <label>Father's Occupation</label>
                                    <input type="text" class="form-control" id="" name="fathers_occupation" aria-describedby="" placeholder="">
                                </div>

                                <div class="form-group col-md-3">
                                    <label>Address</label>
                                    <input type="text" class="form-control" id="" name="address" aria-describedby="" placeholder="">
                                </div>

                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label>INFANT NAME</label>
                                    <input type="text" class="form-control" id="" name="infant_name" aria-describedby="" placeholder="">
                                </div>
                                <div class="form-group col-md-4">
                                    <label>AGE</label>
                                    <input type="number" class="form-control" id="" name="age" aria-describedby="" placeholder="">
                                </div>
                                <div class="form-group col-md-4">
                                    <label>SEX</label>
                                    <select  name="sex"  >
                                        <option value="">-select-</option>
                                        <option value="sex">MALE</option>
                                        <option value="sex">FEMALE</option>}
                                    </select>
                                </div>
                            </div>
                            <br><br>
                            <hr>
                            <h1>MOTHER</h1>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label>AGE</label>
                                    <input type="number" class="form-control" name="age1" aria-describedby="" placeholder="">
                                </div>
                                <div class="form-group col-md-4">
                                    <label>PARA</label>
                                    <input type="number" class="form-control" name="para" aria-describedby="" placeholder="">
                                </div>
                                <div class="form-group col-md-4">
                                    <label>E.D.D.</label>
                                    <input type="date" class="form-control"name="edd"  aria-describedby="" placeholder="">
                                </div>
                            </div>
                            <h4>PREVIOUS PREGNANCIES<br></h4>
                            <h6> </h6>
                            <div>
                                    <span class="row">
                           <span class="col-md-2"><label>&ensp;&ensp;1.</label></span>
                                        <span class="col-md-5"><label>Year</label><input type="date" name="year" id="" aria-describedby="" placeholder=""></span>
                            <span class="col-md-5"><label>outcome</label><input type="text" name="outcome" id="" aria-describedby="" placeholder=""></span>
                        </span>
                            </div>






                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <h5>PRESENT PREGNANCY</h5><br>
                                    <h6>COMPLICATIONS</h6>

                                    <br>
                                    <div><span class="row">
                                <span class="col-md-6"><label>&ensp;&ensp;&ensp;Parental Clinic:</label></span>
                             <span class="col-md-6"><input type="text" class="form-control" id="" aria-describedby="" name="parental_clinic" holder=""></span>
                        </span>
                                    </div><br>
                                    <div><span class="row">

                           <span class="col-md-6"><label>&ensp;&ensp;&ensp;Toxaemia A-Phaem</label></span>
                             <span class="col-md-6"><input type="text" class="form-control" id="" aria-describedby="" name="toxaemia_a_phaem" holder=""></span>
                        </span>
                                    </div><br>
                                    <div><span class="row">
                           <span class="col-md-6"><label>&ensp;&ensp;&ensp;Others</label></span>
                             <span class="col-md-6"><textarea type="text" class="form-control" id="" aria-describedby="" name="others" holder=""></textarea></span>
                        </span>
                                    </div><br>


                                    <div>

                                        <label>&ensp;&ensp;Diabetes&ensp;&ensp;</label>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Diabetes" id="inlineRadio1" value="Yes">
                                            <label class="form-check-label" for="inlineRadio1">Yes</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Diabetes" id="inlineRadio2" value="No">
                                            <label class="form-check-label" for="inlineRadio2">No</label>
                                        </div>

                                    </div>
                                    <div>

                                        <label>&ensp;&ensp;Tb&ensp;&ensp;</label>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Tb" id="inlineRadio1" value="Yes">
                                            <label class="form-check-label" for="inlineRadio1">Yes</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Tb" id="inlineRadio2" value="No">
                                            <label class="form-check-label" for="inlineRadio2">No</label>
                                        </div>

                                    </div>
                                    <div>

                                        <label>&ensp;&ensp;Renal&ensp;&ensp;</label>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Renal" id="inlineRadio1" value="Yes">
                                            <label class="form-check-label" for="inlineRadio1">Yes</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Renal" id="inlineRadio2" value="No">
                                            <label class="form-check-label" for="inlineRadio2">No</label>
                                        </div>

                                    </div>
                                    <div>

                                        <label>&ensp;&ensp;Cardiac&ensp;&ensp;</label>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Cardiac" id="inlineRadio1" value="Yes">
                                            <label class="form-check-label" for="inlineRadio1">Yes</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Cardiac" id="inlineRadio2" value="No">
                                            <label class="form-check-label" for="inlineRadio2">No</label>
                                        </div>

                                    </div>
                                    <div><span class="row">
                           <span class="col-md-6"><label>&ensp;&ensp;&ensp;Others</label></span>
                             <span class="col-md-6"><textarea type="text" name="others1" id="" aria-describedby="" placeholder=""></textarea></span>
                        </span>
                                    </div><br>

                                    <div>
                            <span class="row">
                                <div>
                                    <span class="col-md-6">
                           <label>ABO</label>
                            <select name="ABO">
                                <option value="">-select BLOOD GROUP-</option>
                                <option value="ABO">A</option>
                                <option value="ABO">B</option>
                                <option value="ABO">AB</option>
                                <option value="ABO">O</option>
                            </select>
                        </span>
                          </div>

                           <div>
                            <span class="col-md-6">
                           <label>RH</label>
                            <select name="RH">
                                <option value="">-select RHESUS-</option>
                                <option value="RH">+</option>
                                <option value="RH">-</option>

                            </select>
                        </span>
                          </div>
                        </span>
                                    </div>
                                    <div><span class="row">
                                <span class="col-md-6"><label>&ensp;&ensp;&ensp;Kalin</label></span>
                             <span class="col-md-6"><input type="text" class="form-control"name="kalin"  aria-describedby="" placeholder=""></span>
                        </span>
                                    </div><br>
                                    <div><span class="row">
                                <span class="col-md-6"><label>&ensp;&ensp;&ensp;VDRL</label></span>
                             <span class="col-md-6"><input type="text" class="form-control"name="VDRL" aria-describedby="" placeholder=""></span>
                        </span>
                                    </div><br>
                                    <div>

                                        <label>&ensp;&ensp;X-Ray&ensp;&ensp;</label>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="X_Ray" value="Yes">
                                            <label class="form-check-label" for="inlineRadio1">Yes</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="X_Ray"  value="No">
                                            <label class="form-check-label" for="inlineRadio2">No</label>
                                        </div>

                                    </div><br>
                                    <div><span class="row">
                                <span class="col-md-6"><label>&ensp;&ensp;&ensp;Result</label></span>
                             <span class="col-md-6"><textarea type="text" class="form-control"name="result"  aria-describedby="" placeholder=""></textarea></span>
                        </span>
                                    </div>
                                </div>







                                <br><br>
                                <hr>
                                <br>
                                <div class="form-group col-md-6">
                                    <h5>LABOUR</h5>
                                    <br><br><BR>


                                    <div><span class="row">
                                <span class="col-md-6"><label>&ensp;&ensp;&ensp;DURATION</label></span>
                             <span class="col-md-6"><input type="number" class="form-control"name="duration"  aria-describedby="" placeholder=""></span>
                        </span>
                                    </div>
                                    <br>
                                    <div><span class="row">
                                <span class="col-md-6"><label>&ensp;&ensp;&ensp;Second stage</label></span>
                             <span class="col-md-6"><textarea type="text" class="form-control"name="second_stage"  aria-describedby="" placeholder=""></textarea></span>
                        </span>
                                    </div><br>
                                    <div><span class="row">
                                <span class="col-md-6"><label>&ensp;&ensp;&ensp;Mode of Delivery</label></span>
                             <span class="col-md-6"><input type="text" class="form-control"name="mode_of_delivery"  aria-describedby="" placeholder=""></span>
                        </span>
                                    </div><br>
                                    <div><span class="row">
                                <span class="col-md-6"><label>&ensp;&ensp;&ensp;Placenta</label></span>
                             <span class="col-md-6"><input type="text" class="form-control"name="placenta"  aria-describedby="" placeholder=""></span>
                        </span>
                                    </div><br>
                                    <div><span class="row">
                                <span class="col-md-6"><label>&ensp;&ensp;&ensp;Wt(kg)</label></span>
                             <span class="col-md-6"><input type="number" class="form-control" name="wt" aria-describedby="" placeholder=""></span>
                        </span>
                                    </div>
                                    <div><span class="row">
                                <span class="col-md-6"><label>&ensp;&ensp;&ensp;Condition</label></span>
                             <span class="col-md-6"><input type="text" class="form-control" name="condition" aria-describedby="" placeholder=""></span>
                        </span>
                                    </div>
                                    <div><span class="row">
                                <span class="col-md-6"><label>&ensp;&ensp;&ensp;Membranes Raptured at:</label></span>
                             <span class="col-md-6"><input type="text" class="form-control"name="membranes_raptured"  aria-describedby="" placeholder=""></span>
                        </span>
                                    </div>
                                    <div><span class="row">
                                <span class="col-md-6"><label>&ensp;&ensp;&ensp;Amniotic Fluid: Clear:</label></span>
                             <span class="col-md-6"><input type="text" class="form-control" name="amniotic_fluid" aria-describedby="" placeholder=""></span>
                        </span>
                                    </div>
                                    <div><span class="row">
                                <span class="col-md-6"><label>&ensp;&ensp;&ensp;Foul:</label></span>
                             <span class="col-md-6"><input type="text" class="form-control"name="foul"  aria-describedby="" placeholder=""></span>
                        </span>
                                    </div>
                                    <div><span class="row">
                                <span class="col-md-6"><label>&ensp;&ensp;&ensp;Meconium</label></span>
                             <span class="col-md-6"><input type="text" class="form-control" name="meconium" aria-describedby="" placeholder=""></span>
                        </span>
                                    </div>
                                    <div><span class="row">
                                <span class="col-md-6"><label>&ensp;&ensp;&ensp;Analgesia</label></span>
                             <span class="col-md-6"><input type="text" class="form-control" name="analgesia" aria-describedby="" placeholder=""></span>
                        </span>
                                    </div>
                                    <div><span class="row">
                                <span class="col-md-6"><label>&ensp;&ensp;&ensp;Anaethesia</label></span>
                             <span class="col-md-6"><input type="text" class="form-control" name="anasthesia" aria-describedby="" placeholder=""></span>
                        </span>
                                    </div>
                                    <hr>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <h> INFANT</h>

                                    <div><span class="row">
                                <span class="col-md-2"><label>&ensp;&ensp;&ensp;Born on</label></span>
                             <span class="col-md-4"><input type="date" class="form-control" name="born_on" aria-describedby="" placeholder=""></span>
                             <span class="col-md-2"><label>&ensp;&ensp;&ensp;At</label></span>
                             <span class="col-md-4"><input type="time" class="form-control" name="at" aria-describedby="" placeholder=""></span>
                        </span>
                                    </div><br>
                                    <div><span class="row">
                                <span class="col-md-6"><label>&ensp;&ensp;&ensp;Resuscitation</label></span>
                             <span class="col-md-6"><input type="text" class="form-control" name="resuscitation" aria-describedby="" placeholder=""></span>
                        </span>
                                    </div><br>
                                    <div><span class="row">
                                <span class="col-md-6"><label>&ensp;&ensp;&ensp;Mucous Extraction</label></span>
                             <span class="col-md-6"><input type="text" class="form-control" name="mucous_extraction" aria-describedby="" placeholder=""></span>
                        </span>
                                    </div>
                                    <div><span class="row">
                                <span class="col-md-6"><label>&ensp;&ensp;&ensp;O given-Duration</label></span>
                             <span class="col-md-6"><input type="text" class="form-control" name="given_duration" aria-describedby="" placeholder=""></span>
                        </span>
                                    </div>
                                    <div><span class="row">
                                <span class="col-md-6"><label>&ensp;&ensp;&ensp;Incubation -Duration</label></span>
                             <span class="col-md-6"><input type="text" class="form-control" name="incubation_duration" aria-describedby="" placeholder=""></span>
                        </span>
                                    </div>
                                    <div><span class="row">
                                <span class="col-md-6"><label>&ensp;&ensp;&ensp;Spontaneous Resp.</label></span>
                             <span class="col-md-6"><input type="text" class="form-control" name="spontaneous_response" aria-describedby="" placeholder=""></span>
                        </span>
                                    </div>
                                    <div><span class="row">
                                <span class="col-md-6"><label>&ensp;&ensp;&ensp;Drugs During Resuscitation</label></span>
                             <span class="col-md-6"><input type="text" class="form-control" name="drugs_during_resuscitation" aria-describedby="" placeholder=""></span>
                        </span>
                                    </div>

                                </div>
                                <div class="form-group col-md-6">

                                    <h6>MATURITY</h6>
                                    <h6>Normal/Premature/Small for date</h6><br><br>
                                    <div><span class="row">
                                <span class="col-md-6"><label>&ensp;&ensp;&ensp;Birth Weight:</label></span>
                             <span class="col-md-6"><input type="number" class="form-control" name="birth_weight" aria-describedby="" placeholder=""></span>
                        </span>
                                    </div>
                                    <div><span class="row">
                                <span class="col-md-6"><label>&ensp;&ensp;&ensp;Birth Length</label></span>
                             <span class="col-md-6"><input type="number" class="form-control"name="birth_length"  aria-describedby="" placeholder=""></span>
                        </span>
                                    </div>
                                    <div><span class="row">
                                <span class="col-md-6"><label>&ensp;&ensp;&ensp;Malformations</label></span>
                             <span class="col-md-6"><input type="text" class="form-control"name="malformation"  aria-describedby="" placeholder=""></span>
                        </span>
                                    </div>
                                    <div><span class="row">
                                <span class="col-md-3"><label>&ensp;&ensp;&ensp;Blood Group</label></span>
                             <span class="col-md-3"><input type="text" class="form-control" name="blood_group" aria-describedby="" placeholder=""></span>
                                    <span class="col-md-3"><label>&ensp;&ensp;&ensp;Highest Bilirubin</label></span>
                             <span class="col-md-3"><input type="number" class="form-control"name="highest_bilirubin"  aria-describedby="" placeholder=""></span>
                        </span>

                                    </div>
                                    <div><span class="row">
                                <span class="col-md-6"><label>&ensp;&ensp;&ensp;Urine</label></span>
                             <span class="col-md-6"><input type="text" class="form-control"name="urine"  aria-describedby="" placeholder=""></span>
                        </span>
                                    </div>
                                    <div><span class="row">
                                <span class="col-md-6"><label>&ensp;&ensp;&ensp;Drugs</label></span>
                             <span class="col-md-6"><input type="text" class="form-control"name="drugs"  aria-describedby="" placeholder=""></span>
                        </span>
                                    </div>
                                    <div><span class="row">
                                <span class="col-md-6"><label>&ensp;&ensp;&ensp;Bye Drops</label></span>
                             <span class="col-md-6"><input type="text" class="form-control" name="bye_drops" aria-describedby="" placeholder=""></span>
                        </span>
                                    </div>
                                    <div><span class="row">
                                <span class="col-md-6"><label>&ensp;&ensp;&ensp;Vit. K</label></span>
                             <span class="col-md-6"><input type="text" class="form-control"name="vit_k"  aria-describedby="" placeholder=""></span>
                        </span>
                                    </div>
                                    <div><span class="row">
                                <span class="col-md-6"><label>&ensp;&ensp;&ensp;BCG</label></span>
                             <span class="col-md-6"><input type="text" class="form-control"name="bcg"  aria-describedby="" placeholder=""></span>
                        </span>
                                    </div>

                                    <br><br>
                                    <hr>
                                    <br>
                                </div>
                            </div>
                            <br><br>
                            <div><span class="row">
                                <span class="col-md-6"><label>&ensp;&ensp;&ensp;PERINANTAL PROBLEMS</label></span>
                             <span class="col-md-6"><input type="text" class="form-control" name="perinantal_problems" aria-describedby="" placeholder=""></span>
                        </span>
                            </div><br><br>
                            <div><span class="row">
                                <span class="col-md-1.5"><label>&ensp;&ensp;&ensp;Admitted to Nursery</label></span>
                             <span class="col-md-1.5"><input type="text" class="form-control" name="admitted_to_nursery" aria-describedby="" placeholder=""></span>
                                    <span class="col-md-1.5"><label>&ensp;&ensp;&ensp;time</label></span>
                             <span class="col-md-1.5"><input type="time" class="form-control" name="time" aria-describedby="" placeholder=""></span>
                                    <span class="col-md-1.5"><label>&ensp;&ensp;&ensp;Dismissal Weight</label></span>
                             <span class="col-md-1.5"><input type="number" class="form-control" name="dismissal_weight" aria-describedby="" placeholder=""></span>
                        </span>
                            </div>
                            <div><span class="row">
                                <span class="col-md-3"><label>&ensp;&ensp;&ensp;Remiscitation</label></span>
                             <span class="col-md-3"><input type="text" class="form-control" name="remiscitation" aria-describedby="" placeholder=""></span>
                                    <span class="col-md-3"><label>&ensp;&ensp;&ensp;Anomalies</label></span>
                             <span class="col-md-3"><input type="number" class="form-control" name="anomalies" aria-describedby="" placeholder=""></span>
                        </span>

                            </div>
                            <div><span class="row">
                                <span class="col-md-3"><label>&ensp;&ensp;&ensp;Apgar Score at 1 min</label></span>
                             <span class="col-md-3"><input type="text" class="form-control" name="apgar_score_at_1_min" aria-describedby="" placeholder=""></span>
                                    <span class="col-md-3"><label>&ensp;&ensp;&ensp;5 mins</label></span>
                             <span class="col-md-3"><input type="number" class="form-control" name="five_min" aria-describedby="" placeholder=""></span>
                        </span>

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

@endsection
