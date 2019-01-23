@extends('layouts.master')
@section('content')
    <!-- Title & Breadcrumbs-->

    @include('departments.clinical_services.inpatient.patient_file.patient_bio_information')

    <div class="page-titles">
    <div class="col-md-12 align-self-center">
        <h4 class="theme-cl">Initial nursing assessment form for {{ $patient->name }}</h4>
    </div>
</div>
<!-- Title & Breadcrumbs-->

<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>INITIAL NURSING ASSESSMENT FORM</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="datatable" class="table table-striped table-bordered table-responsive">
                        <thead>
                        <tr>

                            <th>SEX</th>
                            <th>PAIN SCALE</th>
                            <th>PAIN NUMERIC INTENSITY</th>
                            <th>NO HURT</th>
                            <th>HURTS LITTLE BIT</th>
                            <th>HURTS LITTLE MORE</th>
                            <th>HURTS EVEN MORE</th>
                            <th>HURTS ALOT</th>
                            <th>HURTS WHOLE LOT</th>
                            <th>INTERVENTION</th>
                            <th>HISTORY OF PRESENT ILLNAESS</th>
                            <th>PAST MEDICAL/SURGICAL HISTORY</th>
                            <th>FAMILY SOCIAL HISTORY</th>
                            <th>ANY OTHER INFORMATION</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(isset($initial_nursing_assessment_form_results))
                            @foreach($initial_nursing_assessment_form_results as $initial_nursing_assessment_form_result)
                                <tr>

                                    <td>{{ $initial_nursing_assessment_form_result->bio_ward}}</td>
                                    <td>{{ $initial_nursing_assessment_form_result->bio_bed_number}}</td>
                                    <td>{{ $initial_nursing_assessment_form_result->bio_sex}}</td>
                                    <td>{{ $initial_nursing_assessment_form_result->pain}}</td>
                                    <td>{{ $initial_nursing_assessment_form_result->pain_b}}</td>
                                    <td>{{ $initial_nursing_assessment_form_result->mood}}</td>
                                    <td>{{ $initial_nursing_assessment_form_result->sent_satisfied}}</td>
                                    <td>{{ $initial_nursing_assessment_form_result->sent_dissatisfied}}</td>
                                    <td>{{ $initial_nursing_assessment_form_result->neutral}}</td>
                                    <td>{{ $initial_nursing_assessment_form_result->very_dissatisfied}}</td>
                                    <td>{{ $initial_nursing_assessment_form_result->very_very_dissatisfied}}</td>
                                    <td>{{ $initial_nursing_assessment_form_result->intervention}}</td>
                                    <td>{{ $initial_nursing_assessment_form_result->present_illness}}</td>
                                    <td>{{ $initial_nursing_assessment_form_result->past_medical_history}}</td>
                                    <td>{{ $initial_nursing_assessment_form_result->family_social_history}}</td>








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
                        <div class="modal-body">

                            <div class="col-md-12">
                                <div class="card">
                                    <div class="container">
                                        <form action="{{route('initial_nursing_assessment_form_post', ['patient_id'=>$patient_id])}}" method="post" >{!! csrf_field() !!}

                                                <div class="offset-md-6">

                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <p>DATE:</p>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <input  id="myDate" type="date" name="bio_date"  readonly  class="form-control" placeholder="click to enter date">
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <p>WARD:</p>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <input type="text" name="bio_ward" class="form-control" placeholder="click to enter ward number">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <p>BED NUMBER:</p>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <input type="text" name="bio_bed_number" class="form-control" placeholder="click to enter bed number">
                                                        </div>
                                                    </div>

                                                </div>
                                            <div class="col-m-3 offset-md-2">
                                                <H3 class="mt-20 ">
                                                    <u>INITIAL NURSING ASSESSMENT FORM</u>
                                                </H3>
                                            </div>
                                            <br><br>
                                            <p>A SIMPLE DESCRIPTIVE PAIN INTENSITY SCALE</p>
                                            <div class="stepwizard">
                                                <div class="stepwizard-row setup-panel">
                                                    <div class="form-wizard-setup first">
                                                        <a href="#step-1" class="btn btn-default circle-button"><input class="form-check-input" type="radio" name="pain" id="inlineRadio1" value="No Possible Pain"></i></a>
                                                        <p>No Possible Pain</p>
                                                    </div>
                                                    <div class="form-wizard-setup">
                                                        <a href="#step-2" class="btn btn-default circle-button"><input class="form-check-input" type="radio" name="pain" id="inlineRadio1" value="Mild Pain"></i></a>
                                                        <p>Mild Pain</p>
                                                    </div>
                                                    <div class="form-wizard-setup">
                                                        <a href="#step-3" class="btn btn-default circle-button"><input class="form-check-input" type="radio" name="pain" id="inlineRadio1" value="Moderate Pain"></i></a>
                                                        <p>Moderate Pain</p>
                                                    </div>
                                                    <div class="form-wizard-setup">
                                                        <a href="#step-4" class="btn btn-default circle-button"><input class="form-check-input" type="radio" name="pain" id="inlineRadio1" value="Severe Pain"></i></a>
                                                        <p>Severe Pain</p>
                                                    </div>
                                                    <div class="form-wizard-setup">
                                                        <a href="#step-5" class="btn btn-default circle-button"><input class="form-check-input" type="radio" name="pain" id="inlineRadio1" value="Very Severe Pain"></i></a>
                                                        <p>Very Severe Pain</p>
                                                    </div>
                                                    <div class="form-wizard-setup last">
                                                        <a href="#step-6" class="btn btn-default circle-button"><input class="form-check-input" type="radio" name="pain" id="inlineRadio1" value="Worst Pain"></i></a>
                                                        <p>Worst Pain</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <p>A NUMERIC PAIN INTENSITY SCALE</p>
                                            <div class="stepwizard">
                                                <div class="stepwizard-row setup-panel">
                                                    <div class="form-wizard-setup first">
                                                        <a href="#step-1" class="btn btn-default circle-button"><input class="form-check-input" type="radio" name="pain_b" id="inlineRadio1" value="1"></i></a>
                                                        <p>1</p><br><p>No Pain</p>
                                                    </div>
                                                    <div class="form-wizard-setup">
                                                        <a href="#step-2" class="btn btn-default circle-button"><input class="form-check-input" type="radio" name="pain_b" id="inlineRadio1" value="2"></i></a>
                                                        <p>2</p>
                                                    </div>
                                                    <div class="form-wizard-setup">
                                                        <a href="#step-3" class="btn btn-default circle-button"><input class="form-check-input" type="radio" name="pain_b" id="inlineRadio1" value="3"></i></a>
                                                        <p>3</p>
                                                    </div>
                                                    <div class="form-wizard-setup">
                                                        <a href="#step-4" class="btn btn-default circle-button"><input class="form-check-input" type="radio" name="pain_b" id="inlineRadio1" value="4"></i></a>
                                                        <p>4</p>
                                                    </div>
                                                    <div class="form-wizard-setup">
                                                        <a href="#step-5" class="btn btn-default circle-button"><input class="form-check-input" type="radio" name="pain_b" id="inlineRadio1" value="5"></i></a>
                                                        <p>5</p><br><p>Moderate Pain</p>
                                                    </div>
                                                    <div class="form-wizard-setup">
                                                        <a href="#step-6" class="btn btn-default circle-button"><input class="form-check-input" type="radio" name="pain_b" id="inlineRadio1" value="6"></i></a>
                                                        <p>6</p>
                                                    </div>
                                                    <div class="form-wizard-setup">
                                                        <a href="#step-7" class="btn btn-default circle-button"><input class="form-check-input" type="radio" name="pain_b" id="inlineRadio1" value="7"></i></a>
                                                        <p>7</p>
                                                    </div>
                                                    <div class="form-wizard-setup">
                                                        <a href="#step-8" class="btn btn-default circle-button"><input class="form-check-input" type="radio" name="pain_b" id="inlineRadio1" value="8"></i></a>
                                                        <p>8</p>
                                                    </div>
                                                    <div class="form-wizard-setup">
                                                        <a href="#step-9" class="btn btn-default circle-button"><input class="form-check-input" type="radio" name="pain_b" id="inlineRadio1" value="9"></i></a>
                                                        <p>9</p>
                                                    </div>
                                                    <div class="form-wizard-setup last">
                                                        <a href="#step-10" class="btn btn-default circle-button"><input class="form-check-input" type="radio" name="pain_b" id="inlineRadio1" value="10"></i></a>
                                                        <p>10</p><br><p>Worst Possible Pain</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <p>WONG-BAKER FACES PAIN RATING SCALE</p>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <meta name="viewport" content="width=device-width, initial-scale=1">
                                                    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
                                                    <i class="material-icons">mood</i>
                                                    <i class="material-icons" style="font-size:36px">mood</i>
                                                    <i class="material-icons" style="font-size:48px;color:yellow">mood</i>
                                                    <p>0:</p>
                                                    <input type="checkbox" placeholder="" name="mood">NO HURT<br>
                                                </div>

                                                <div class="col-md-2">
                                                    <i class="material-icons">sentiment_satisfied</i>
                                                    <i class="material-icons" style="font-size:36px">sentiment_satisfied</i>
                                                    <i class="material-icons" style="font-size:48px;color:blue">sentiment_satisfied</i>
                                                    <p>2:</p>
                                                    <input type="checkbox" placeholder="" name="sent_satisfied">HURTS LITTLE BIT<br>
                                                </div>

                                                <div class="col-md-2">
                                                    <i class="material-icons">sentiment_dissatisfied</i>
                                                    <i class="material-icons" style="font-size:36px">sentiment_dissatisfied</i>
                                                    <i class="material-icons" style="font-size:48px;color:blue">sentiment_dissatisfied</i>
                                                    <p>4:</p>
                                                    <input type="checkbox" placeholder="" name="sent_dissatisfied">HURTS A LITTLE MORE<br>
                                                </div>

                                                <div class="col-md-2">
                                                    <i class="material-icons">sentiment_neutral</i>
                                                    <i class="material-icons" style="font-size:36px">sentiment_neutral</i>
                                                    <i class="material-icons" style="font-size:48px;color:blue">sentiment_neutral</i>
                                                    <p>6:</p>
                                                    <input type="checkbox" placeholder="" name="neutral">HURTS EVEN MORE<br>
                                                </div>

                                                <div class="col-md-2">
                                                    <i class="material-icons">sentiment_very_dissatisfied</i>
                                                    <i class="material-icons" style="font-size:36px">sentiment_very_dissatisfied</i>
                                                    <i class="material-icons" style="font-size:48px;color:blue">sentiment_very_dissatisfied</i>
                                                    <p>8:</p>
                                                    <input type="checkbox" placeholder="" name="very_dissatisfied">HURTS A LOT<br>
                                                </div>

                                                <div class="col-md-2">
                                                    <i class="material-icons">sentiment_very_dissatisfied</i>
                                                    <i class="material-icons" style="font-size:36px">sentiment_very_dissatisfied</i>
                                                    <i class="material-icons" style="font-size:48px;color:red">sentiment_very_dissatisfied</i>
                                                    <p>8:</p>
                                                    <input type="checkbox" placeholder="" name="very_very_dissatisfied">HURTS WHOLE LOT<br>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label class="text-center offset-4" class=" ">INTERVENTION:</label>
                                                <div class="form-group row col-md-10">
                                                    <div class="col-sm-10">
                                                        <textarea  rows="4" cols="15" name="intervention" class="form-control" id="" ></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label class="text-center offset-4" class=" ">PRESENTING COMPLAINTS AND HISTORY OF PRESENT ILLNAESS:</label>
                                                <div class="form-group row col-md-10">
                                                    <div class="col-sm-10">
                                                        <textarea  rows="4" cols="15" name="present_illness" class="form-control" id="" ></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label class="text-center offset-4" class=" ">PAST MEDICAL/SURGICAL HISTORY:</label>
                                                <div class="form-group row col-md-10">
                                                    <div class="col-sm-10">
                                                        <textarea  rows="4" cols="15" name="past_medical_history" class="form-control" id="" ></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label class="text-center offset-4" class=" ">FAMILY SOCIAL HISTORY:</label>
                                                <div class="form-group row col-md-10">
                                                    <div class="col-sm-10">
                                                        <textarea  rows="4" cols="15" name="family_social_history" class="form-control" id="" ></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label class="text-center offset-4" class=" ">ANY OTHER INFORMATION:</label>
                                                <div class="form-group row col-md-10">
                                                    <div class="col-sm-10">
                                                        <textarea  rows="4" cols="15" name="information" class="form-control" id="" ></textarea>
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
