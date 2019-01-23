@extends('layouts.master')

@section('content')
    @include('departments.clinical_services.inpatient.patient_file.patient_file_bread_crumbs')
    <!-- Title & Breadcrumbs-->
    <div class="row page-titles">
        <div class="col-md-12 align-self-center text-center">
            <h4 class="theme-cl">ADMISSION FORM</h4>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h4>ADMISSION FORM</h4>
        </div>
        <div class="card-body">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="datatable" class="table table-bordered">
                        <thead>
                        <tr>
                            <th>PATIENT NAME</th>
                            <th>SIR NAME</th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        {{--@if(isset($admission_form_results))--}}
                            {{--@foreach($admission_form_results as $admission_form_result)--}}
                                {{--<tr>--}}
                                    {{--<td>{{ $admission_form_result->patient_name}}</td>--}}
                                {{--</tr>--}}
                            {{--@endforeach--}}
                        {{--@endif--}}
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="col-md-4">

                <div class="content">
                    <button class="btn btn-success" data-toggle="modal" data-target="#myModal">Add Admission Information</button>
                    {{--<button class="btn btn-info" data-toggle="modal" data-target="#myModal">Print</button>--}}
                </div>
            </div>
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog modal-lg">

                    <!— Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">DOCTORS INITIAL ASSESMENT FORM</h4>
                        </div>
                        <form action="{{ route('admission_form_post') }}" method="post" >{!! csrf_field() !!}

                            <div class="card padd-15">
                                <div class="tab" role="tabpanel">
                                    <!— Nav tabs —>
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation" class="active"><a href="#Section1" aria-controls="home" role="tab" data-toggle="tab">INITIAL ASSESMENT FORM</a></li>
                                        <li role="presentation"><a href="#Section2" role="tab" data-toggle="tab">REVIEW OF SYSTEMS FORM</a></li>
                                        <li role="presentation"><a href="#Section3" role="tab" data-toggle="tab">PHYSICAL EXAMINATION</a></li>
                                        <li role="presentation"><a href="#Section4" role="tab" data-toggle="tab">CURRENT MEDICATIONS</a></li>
                                        <li role="presentation"><a href="#Section5" role="tab" data-toggle="tab">DISCHARGE PLANNING</a></li>
                                    </ul>
                                    <!— Tab panes —>
                                </div>
                            </div>
                                    <div class="tab-content tabs" id="home">

                                        <div role="tabpanel" class="tab-pane fade in active" id="Section1">
                                            <div class="col-m-3 offset-md-2">
                                                <H3 class="mt-20 ">
                                                    DOCTOR'S INITIAL ASSESMENT FORM FOR ADMISSION
                                                </H3>
                                            </div>
                                            <div class="">
                                                <div class="offset-md-6">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <p>PATIENTS NAME:</p>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <input type="text" name="patient_name" class="form-control" placeholder="click to enter patients name"></td>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <p>SURNAME:</p>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <input type="text" name="surname" class="form-control" placeholder="click to enter surname"></td>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <p>MRN NUMBER:</p>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <input type="text" name="mrn" class="form-control" placeholder="click to enter mrn number">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <div class="row">
                                            <div class="col-md-10 offset-md-1">
                                                <table class="table table-bordered">
                                                    <tbody>
                                                    <tr class="col-md-4">
                                                        <td>
                                                            <div class="form-group row">
                                                                <label for="staticEmail" class="col-sm-10 col-form-label">Date:</label>
                                                                <div class="col-sm-8">
                                                                    <input type="text" name="date"  id="myDate" class="form-control" placeholder="" readonly >
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group row">
                                                                <label for="staticEmail" class="col-sm-10 col-form-label">Admission Time:</label>
                                                                <div class="col-sm-8">
                                                                    <input type="text" name="admission_time" class="form-control" placeholder="">
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div class="form-group row">
                                                                <label for="staticEmail" class="col-sm-12 col-form-label">First time encounter:</label>
                                                                <div class="col-sm-8">
                                                                    <input type="text" name="first_time_encounter" class="form-control" placeholder="">
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group row">
                                                                <label for="staticEmail" class="col-sm-10 col-form-label">Age:</label>
                                                                <div class="col-sm-8">
                                                                    <input type="number" name="age" class="form-control" placeholder="">
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div class="form-group row">
                                                                <label for="staticEmail" class="col-sm-10 col-form-label">Marital status:</label>
                                                                <div class="col-sm-8">
                                                                    <input type="text" name="status" class="form-control" placeholder="">
                                                                </div>
                                                            </div>
                                                        <td>
                                                            <div class="form-group row">
                                                                <label for="staticEmail" class="col-sm-10 col-form-label">Occupation:</label>
                                                                <div class="col-sm-3">
                                                                    <input type="text" name="occupation" class="form-control" placeholder="">
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div class="form-group row">
                                                                <label for="staticEmail" class="col-sm-10 col-form-label">No of children:</label>
                                                                <div class="col-sm-8">
                                                                    <input type="text" name="no_of_children" class="form-control" placeholder="">
                                                                </div>
                                                            </div>

                                                    </tr>
                                                    <tr>
                                                    <tr class="col-md-4">
                                                        <td colspan="4">
                                                            <div class="form-group row">
                                                                <label for="staticEmail" class="col-sm-10 col-form-label">Pulse:</label>
                                                                <div class="col-sm-8">
                                                                    <input type="number" name="pulse" class="form-control" placeholder="">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="staticEmail" class="col-sm-10 col-form-label">B.P:</label>
                                                                <div class="col-sm-8">
                                                                    <input type="text" name="bp" class="form-control" placeholder="">
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label for="staticEmail" class="col-sm-10 col-form-label">Temperature:</label>
                                                                <div class="col-sm-8">
                                                                    <input type="number" name="temperature" class="form-control" placeholder="">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="staticEmail" class="col-sm-10 col-form-label">Resp:</label>
                                                                <div class="col-sm-8">
                                                                    <input type="text" name="resp" class="form-control" placeholder="">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="staticEmail" class="col-sm-10 col-form-label">Height:</label>
                                                                <div class="col-sm-8">
                                                                    <input type="number" name="height" class="form-control" placeholder="">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="staticEmail" class="col-sm-10 col-form-label">BMI:</label>
                                                                <div class="col-sm-8">
                                                                    <input type="text" name="bmi" class="form-control" placeholder="">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="staticEmail" class="col-sm-10 col-form-label">SPO2:</label>
                                                                <div class="col-sm-8">
                                                                    <input type="number" name="spo" class="form-control" placeholder="">
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                    <tr class="col-md-4">
                                                        <td colspan="4">
                                                            <div class="form-group row">
                                                                <label for="staticEmail" class="col-sm-10 col-form-label">Is patient cash or insurance?</label>
                                                                <div class="col-sm-8">
                                                                    <input type="text" name="cash_or_insurance" class="form-control" placeholder="">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="staticEmail" class="col-sm-10 col-form-label">If insurance,name of insurer</label>
                                                                <div class="col-sm-8">
                                                                    <input type="text" name="name_of_insurer" class="form-control" placeholder="">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="staticEmail" class="col-sm-10 col-form-label">Allergies(food and drug):</label>
                                                                <div class="col-sm-8">
                                                                    <input type="text" name="allergies" class="form-control" placeholder="">
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2">
                                                            <div class="form-group row">
                                                                <label for="staticEmail" class="col-sm-10 col-form-label">PRESENTING COMPLAINTS:</label>
                                                                <div class="col-sm-8">
                                                                    <input type="text" name="present_complaints" class="form-control" placeholder="">
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group row">
                                                                <label for="staticEmail" class="col-sm-10 col-form-label">LMP:</label>
                                                                <div class="col-sm-8">
                                                                    <input type="text" name="lmp" class="form-control" placeholder="">
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="row">
                                                                <label for="staticEmail" class="cform-label">Current Pain Intensity Scale:</label>
                                                                <div class="text-center offset-2">
                                                                    <p class="" >012345678910</p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="4">
                                                            <div class="form-group col-sm-12">
                                                                <div class="">
		            	                                         <textarea type="text" name="pain_intensity_scale" class="form-control" placeholder="">
						                                        </textarea>
                                                                </div>
                                                                </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="4">
                                                            <div class="form-group col-sm-12">
                                                                <label for="staticEmail" class="col-sm-10 col-form-label">HISTORY OF PRESENTING COMPLAINT:</label>
                                                                <div class="col-sm-8">
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                    <tr>
                                                        <td colspan="4">
                                                            <div class="form-group col-sm-12">
                                                                <div class="">
		            	                                         <textarea type="text" name="history_of_presenting_complaints" class="form-control" placeholder="">
						                                        </textarea>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        </div>

                                            <div role="tabpanel" class="tab-pane fade" id="Section2">
                                                <tr>
                                                    <div class="col-m-3 offset-md-2">
                                                        <H3 class="mt-20 ">
                                                            REVIEW OF SYSTEM FORM
                                                        </H3>
                                                    </div>
                                                    <div class="col-mb-10 offset-md-12">
                                                        <table class="table table-bordered">
                                                            <tr class="col-md-4">
                                                                <td>
                                                                    <H5><U>PAST ILLNESS OF YOUR SELF AND FAMILY:</U></h5><br>
                                                                    <H6>YOU  YOUR FAMILY</h6><br>
                                                                    <input type="checkbox" placeholder="" name="alcoholism">
                                                                    <input type="checkbox" placeholder="" name="alcoholism2">ALCOHOLISM<br>
                                                                    <input type="checkbox" placeholder="" name="anaemia">
                                                                    <input type="checkbox" placeholder="" name="anaemia2">ANAEMIA<br>
                                                                    <input type="checkbox" placeholder="" name="asthma">
                                                                    <input type="checkbox" placeholder="" name="asthma2">ASTHMA<br>
                                                                    <input type="checkbox" placeholder="" name="tumor">
                                                                    <input type="checkbox" placeholder="" name="tumor2">CANCER/TUMOR<br>
                                                                    <input type="checkbox" placeholder="" name="diabetes">
                                                                    <input type="checkbox" placeholder="" name="diabetes2">DIABETES<br>
                                                                    <input type="checkbox" placeholder="" name="drug_abuse">
                                                                    <input type="checkbox" placeholder="" name="drug_abuse2">DRUG ABUSE<br>
                                                                    <input type="checkbox" placeholder="" name="depression">
                                                                    <input type="checkbox" placeholder="" name="depression2">DEPRESSION<br>
                                                                    <input type="checkbox" placeholder="" name="seizures">
                                                                    <input type="checkbox" placeholder="" name="seizures2">EPILEPSY/SEIZURES<br>
                                                                    <input type="checkbox" placeholder="" name="glaucoma">
                                                                    <input type="checkbox" placeholder="" name="glaucoma2">GLAUCOMA<br>
                                                                    <input type="checkbox" placeholder="" name="heart_disease">
                                                                    <input type="checkbox" placeholder="" name="heart_disease2">HEART DISEASE
                                                                </td>
                                                                <td>
                                                                    <br>
                                                                    <br>
                                                                    <br>
                                                                    <br>
                                                                    <input type="checkbox" placeholder="" name="high_blood_pressure">
                                                                    <input type="checkbox" placeholder="" name="high_blood_pressure2">HIGH BLOOD PRESSURE<br>
                                                                    <input type="checkbox" placeholder="" name="kidney_disease">
                                                                    <input type="checkbox" placeholder="" name="kidney_disease2">KIDNEY DISEASE<br>
                                                                    <input type="checkbox" placeholder="" name="silver-disease">
                                                                    <input type="checkbox" placeholder="" name="silver-disease2">LIVER DISEASE<br>
                                                                    <input type="checkbox" placeholder="" name="hepatitis">
                                                                    <input type="checkbox" placeholder="" name="hepatitis2">HEPATITIS<br>
                                                                    <input type="checkbox" placeholder="" name="lung_disease">
                                                                    <input type="checkbox" placeholder="" name="lung_disease2">LUNG DISEASE<br>
                                                                    <input type="checkbox" placeholder="" name="mental_illness">
                                                                    <input type="checkbox" placeholder="" name="mental_illness2">MENTAL ILLNESS<br>
                                                                    <input type="checkbox" placeholder="" name="osteoarthritis">
                                                                    <input type="checkbox" placeholder="" name="osteoarthritis2">OSTEOARTHRITIS<br>
                                                                    <input type="checkbox" placeholder="" name="osteoporosis">
                                                                    <input type="checkbox" placeholder="" name="osteoporosis2">OSTEOPOROSIS<br>
                                                                    <input type="checkbox" placeholder="" name="phlebitis">
                                                                    <input type="checkbox" placeholder="" name="phlebitis2">PHLEBITIS<br>
                                                                    <input type="checkbox" placeholder="" name="rheumatic_arthritis">
                                                                    <input type="checkbox" placeholder="" name="rheumatic_arthritis2">RHEUMATIC ARTHRITIS
                                                                </td>
                                                                <td>
                                                                    <br>
                                                                    <br>
                                                                    <br>
                                                                    <H5><U>PAST ILLNESS OF YOUR SELF AND FAMILY:</U></h5><br>
                                                                    <H6>YOU  YOUR FAMILY</h6><br>
                                                                    <input type="checkbox" placeholder="" name="alcoholism">
                                                                    <input type="checkbox" placeholder="" name="alcoholism2">ALCOHOLISM<br>
                                                                    <input type="checkbox" placeholder="" name="anaemia">
                                                                    <input type="checkbox" placeholder="" name="anaemia2">ANAEMIA<br>
                                                                    <input type="checkbox" placeholder="" name="asthma">
                                                                    <input type="checkbox" placeholder="" name="asthma2">ASTHMA<br>
                                                                    <input type="checkbox" placeholder="" name="tumor">
                                                                    <input type="checkbox" placeholder="" name="tumor2">CANCER/TUMOR<br>
                                                                    <input type="checkbox" placeholder="" name="diabetes">
                                                                    <input type="checkbox" placeholder="" name="diabetes2">DIABETES<br>
                                                                    <input type="checkbox" placeholder="" name="drug_abuse">
                                                                    <input type="checkbox" placeholder="" name="drug_abuse2">DRUG ABUSE<br>
                                                                    <input type="checkbox" placeholder="" name="depression">
                                                                    <input type="checkbox" placeholder="" name="depression2">DEPRESSION<br>
                                                                    <input type="checkbox" placeholder="" name="seizures">
                                                                    <input type="checkbox" placeholder="" name="seizures2">EPILEPSY/SEIZURES<br>
                                                                    <input type="checkbox" placeholder="" name="glaucoma">
                                                                    <input type="checkbox" placeholder="" name="glaucoma2">GLAUCOMA<br>
                                                                    <input type="checkbox" placeholder="" name="heart_disease">
                                                                    <input type="checkbox" placeholder="" name="heart_disease2">HEART DISEASE
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="4">
                                                                    <div class="form-group col-sm-12">
                                                                        <label for="staticEmail" class="col-sm-10 col-form-label">PAST SURGICAL HISTORY INCLUDING DATES:</label>
                                                                        <div class="">
                                                                            <textarea type="text" name="past_surgical_history_including_dates" class="form-control" placeholder="">
                                                                            </textarea>
                                                                        </div>
                                                                        </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="4">
                                                                    <H6>PHYSICAL EXAMINATION</h6><br>
                                                                    <div class="form-group col-sm-12">
                                                                        <label for="staticEmail" class="col-sm-10 col-form-label">Physical Examination - General:</label>
                                                                        <div class="">
                                                                            <textarea type="text" name="physical_examination_general" class="form-control" placeholder="">
                                                                            </textarea>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                            </div>

                                                    <div role="tabpanel" class="tab-pane fade" id="Section3">
                                                        <P>REVIEW OF SYSTEMS - PLEASE CHECK EACH ITEM "YES" OR "NO" AS THEY RELATE TO YOU HEALTH:<P>
                                                        <P>PHYSICAL EXAMINATION - GENERAL</P>
                                                        <div class="col-mb-10 offset-md-12">
                                                            <table class="table table-bordered">
                                                                <tr class="col-md-4">
                                                                    <td>
                                                                        <p><u>CONSTITUTION</u>     Yes No<p/>
                                                                        Weight Loss
                                                                        <input type="checkbox" placeholder="" name="constitution">
                                                                        <input type="checkbox" placeholder="" name="constitution2"><br>
                                                                        Fatigue
                                                                        <input type="checkbox" placeholder="" name="fatigue">
                                                                        <input type="checkbox" placeholder="" name="fatigue2"><br>
                                                                        Fever
                                                                        <input type="checkbox" placeholder="" name="fever">
                                                                        <input type="checkbox" placeholder="" name="fever2"><br>
                                                                        <p><u>EYES</u><p/>
                                                                        Glasses/contacts
                                                                        <input type="checkbox" placeholder="" name="glasses">
                                                                        <input type="checkbox" placeholder="" name="glasses"><br>
                                                                        Eye Pain
                                                                        <input type="checkbox" placeholder="" name="eye_pain">
                                                                        <input type="checkbox" placeholder="" name="eye_pain"><br>
                                                                        Double Vision
                                                                        <input type="checkbox" placeholder="" name="double_vision">
                                                                        <input type="checkbox" placeholder="" name="double_vision"><br>
                                                                        Cataracts
                                                                        <input type="checkbox" placeholder="" name="cataracts">
                                                                        <input type="checkbox" placeholder="" name="cataracts"><br>
                                                                        <p><u>EAR,NOSE,THROAT</u><p/>
                                                                        Difficulty Hearing
                                                                        <input type="checkbox" placeholder="" name="difficulty_hearing">
                                                                        <input type="checkbox" placeholder="" name="difficulty_hearing"><br>
                                                                        Ringing in Ears
                                                                        <input type="checkbox" placeholder="" name="ringing_in_ears">
                                                                        <input type="checkbox" placeholder="" name="ringing_in_ears"><br>
                                                                        Vertigo
                                                                        <input type="checkbox" placeholder="" name="vertigo">
                                                                        <input type="checkbox" placeholder="" name="vertigo"><br>
                                                                        Sinus Trouble
                                                                        <input type="checkbox" placeholder="" name="sinus_trouble">
                                                                        <input type="checkbox" placeholder="" name="sinus_trouble"><br>
                                                                        Nasal Stuffiness
                                                                        <input type="checkbox" placeholder="" name="nasal_stuffiness">
                                                                        <input type="checkbox" placeholder="" name="nasal_stuffiness"><br>
                                                                        Frequent Store Throat
                                                                        <input type="checkbox" placeholder="" name="frequent_store_throat">
                                                                        <input type="checkbox" placeholder="" name="frequent_store_throat"><br>
                                                                        <p><u>CARDIOVASCULAR</u><p/>
                                                                        Murmur
                                                                        <input type="checkbox" placeholder="" name="cardivascular">
                                                                        <input type="checkbox" placeholder="" name="cardivascular"><br>
                                                                        Chest Pain
                                                                        <input type="checkbox" placeholder="" name="chest_pain">
                                                                        <input type="checkbox" placeholder="" name="chest_pain"><br>
                                                                        Palpitations
                                                                        <input type="checkbox" placeholder="" name="palpitations">
                                                                        <input type="checkbox" placeholder="" name="palpitations"><br>
                                                                        Dizziness
                                                                        <input type="checkbox" placeholder="" name="dizziness">
                                                                        <input type="checkbox" placeholder="" name="dizziness"><br>
                                                                        Fainting Spells
                                                                        <input type="checkbox" placeholder="" name="fainting_spells">
                                                                        <input type="checkbox" placeholder="" name="fainting_spells"><br>
                                                                        Shortness of Breath
                                                                        <input type="checkbox" placeholder="" name="shortness_of_breath">
                                                                        <input type="checkbox" placeholder="" name="shortness_of_breath"><br>
                                                                        Difficulty Lying Flat
                                                                        <input type="checkbox" placeholder="" name="difficulty_lying_flat">
                                                                        <input type="checkbox" placeholder="" name="difficulty_lying_flat"><br>
                                                                        Swelling Ankles
                                                                        <input type="checkbox" placeholder="" name="swelling_ankles">
                                                                        <input type="checkbox" placeholder="" name="swelling_ankles"><br>
                                                                        <p><u>ENDOCRINE</u><p/>
                                                                        Loss of Hair
                                                                        <input type="checkbox" placeholder="" name="loss_of_hair">
                                                                        <input type="checkbox" placeholder="" name="loss_of_hair"><br>
                                                                        Heat/Cold Intolerance
                                                                        <input type="checkbox" placeholder="" name="heat_cold_intolerance">
                                                                        <input type="checkbox" placeholder="" name="heat_cold_intolerance"><br>
                                                                    </td>
                                                                    <td>
                                                                        <p><u>RESPIRATORY</u><p/>
                                                                        Cough
                                                                        <input type="checkbox" placeholder="cough" name="">
                                                                        <input type="checkbox" placeholder="cough" name=""><br>
                                                                        Coughing Blood
                                                                        <input type="checkbox" placeholder="" name="coughing_blood">
                                                                        <input type="checkbox" placeholder="" name="coughing_blood"><br>
                                                                        Loss of Hair
                                                                        <input type="checkbox" placeholder="" name="hair_loss">
                                                                        <input type="checkbox" placeholder="" name="hair_loss"><br>
                                                                        Wheezing
                                                                        <input type="checkbox" placeholder="" name="wheezing">
                                                                        <input type="checkbox" placeholder="" name="wheezing"><br>
                                                                        Chills
                                                                        <input type="checkbox" placeholder="" name="chills">
                                                                        <input type="checkbox" placeholder="" name="chills"><br>
                                                                        <p><u>GASTROINTESTINAL</u><p/>
                                                                        Heartburn/Reflux
                                                                        <input type="checkbox" placeholder="" name="reflux">
                                                                        <input type="checkbox" placeholder="" name="reflux"><br>
                                                                        Nausea/Vomiting
                                                                        <input type="checkbox" placeholder="" name="nausea">
                                                                        <input type="checkbox" placeholder="" name="nausea"><br>
                                                                        Constipation
                                                                        <input type="checkbox" placeholder="" name="constipation">
                                                                        <input type="checkbox" placeholder="" name="constipation"><br>
                                                                        Change In BMs
                                                                        <input type="checkbox" placeholder="" name="inbms">
                                                                        <input type="checkbox" placeholder="" name="inbms"><br>
                                                                        Diarrhea
                                                                        <input type="checkbox" placeholder="" name="diarrhea">
                                                                        <input type="checkbox" placeholder="" name="diarrhea"><br>
                                                                        Jaundice
                                                                        <input type="checkbox" placeholder="" name="jaundice">
                                                                        <input type="checkbox" placeholder="" name="jaundice"><br>
                                                                        Abdominal Pain
                                                                        <input type="checkbox" placeholder="" name="abdominal_pain">
                                                                        <input type="checkbox" placeholder="" name="abdominal_pain"><br>
                                                                        Black Bloody BM
                                                                        <input type="checkbox" placeholder="" name="black_bloody">
                                                                        <input type="checkbox" placeholder="" name="black_bloody"><br>
                                                                        <p><u>GENITOURINARY</u><p/>
                                                                        Burning/Frequency
                                                                        <input type="checkbox" placeholder="" name="burning">
                                                                        <input type="checkbox" placeholder="" name="burning"><br>
                                                                        Nighttime
                                                                        <input type="checkbox" placeholder="" name="nighttime">
                                                                        <input type="checkbox" placeholder="" name="nighttime"><br>
                                                                        Blood In Urine
                                                                        <input type="checkbox" placeholder="" name="blood_in_urine">
                                                                        <input type="checkbox" placeholder="" name="blood_in_urine"><br>
                                                                        Erectile Dysfunction
                                                                        <input type="checkbox" placeholder="" name="erectile_dysfunction">
                                                                        <input type="checkbox" placeholder="" name="erectile_dysfunction"><br>
                                                                        Abnormal Discharge
                                                                        <input type="checkbox" placeholder="" name="abnormal_discharge">
                                                                        <input type="checkbox" placeholder="" name="abnormal_discharge"><br>
                                                                        Bladder Leakage
                                                                        <input type="checkbox" placeholder="" name="bladder_leakage">
                                                                        <input type="checkbox" placeholder="" name="bladder_leakage"><br>
                                                                        <p><u>ALLERGIC/IMMUNOLOGIC</u><p/>
                                                                        Hives/Eczema
                                                                        <input type="checkbox" placeholder="" name="hives">
                                                                        <input type="checkbox" placeholder="" name="hives"><br>
                                                                        Hay Fever
                                                                        <input type="checkbox" placeholder="" name="hay_fever">
                                                                        <input type="checkbox" placeholder="" name="hay_fever"><br>
                                                                        <p><u>PSYCHIATRIC</u><p/>
                                                                        Anxiety/Depression
                                                                        <input type="checkbox" placeholder="" name="anxiety_depression">
                                                                        <input type="checkbox" placeholder="" name="anxiety_depression"><br>
                                                                        Mood Swings
                                                                        <input type="checkbox" placeholder="" name="mood_swings">
                                                                        <input type="checkbox" placeholder="" name="mood_swings"><br>
                                                                        Difficult Sleeping
                                                                        <input type="checkbox" placeholder="" name="difficult_sleeping">
                                                                        <input type="checkbox" placeholder="" name="difficult_sleeping"><br>
                                                                    </td>
                                                                    <td>
                                                                        <p><u>HEMATOLOGY/LYMPH</u><p/>
                                                                        Easy Bruising
                                                                        <input type="checkbox" placeholder="easy_bruising" name="">
                                                                        <input type="checkbox" placeholder="easy_bruising" name=""><br>
                                                                        Gums Bleed Easily
                                                                        <input type="checkbox" placeholder="" name="gums_bleed_easily">
                                                                        <input type="checkbox" placeholder="" name="gums_bleed_easily"><br>
                                                                        Enlarged Glands
                                                                        <input type="checkbox" placeholder="" name="enlarged_glands">
                                                                        <input type="checkbox" placeholder="" name="enlarged_glands"><br>
                                                                        <p><u>MUSCULOSKELETAL</u><p/>
                                                                        Joint Pain/Swelling
                                                                        <input type="checkbox" placeholder="" name="joint_pain_swelling">
                                                                        <input type="checkbox" placeholder="" name="joint_pain_swelling"><br>
                                                                        Stiffness
                                                                        <input type="checkbox" placeholder="" name="stiffness">
                                                                        <input type="checkbox" placeholder="" name="stiffness"><br>
                                                                        Muscle Pain
                                                                        <input type="checkbox" placeholder="" name="muscle_pain">
                                                                        <input type="checkbox" placeholder="" name="muscle_pain"><br>
                                                                        Back Pain
                                                                        <input type="checkbox" placeholder="" name="back_pain">
                                                                        <input type="checkbox" placeholder="" name="back_pain"><br>
                                                                        <p><u>SKIN</u><p/>
                                                                        Rash/Sores
                                                                        <input type="checkbox" placeholder="" name="rash_stores">
                                                                        <input type="checkbox" placeholder="" name="rash_stores"><br>
                                                                        Lesions
                                                                        <input type="checkbox" placeholder="" name="lesions">
                                                                        <input type="checkbox" placeholder="" name="lesions"><br>
                                                                        Itching/Burning
                                                                        <input type="checkbox" placeholder="" name="itching_burning">
                                                                        <input type="checkbox" placeholder="" name="itching_burning"><br>
                                                                        <p><u>NEUROLOGICAL</u><p/>
                                                                        Loss of Strength
                                                                        <input type="checkbox" placeholder="" name="loss_of_strength">
                                                                        <input type="checkbox" placeholder="" name="loss_of_strength"><br>
                                                                        Numbness
                                                                        <input type="checkbox" placeholder="" name="numbness">
                                                                        <input type="checkbox" placeholder="" name="numbness"><br>
                                                                        Headaches
                                                                        <input type="checkbox" placeholder="" name="headaches">
                                                                        <input type="checkbox" placeholder="" name="headaches"><br>
                                                                        Tremors
                                                                        <input type="checkbox" placeholder="" name="tremors">
                                                                        <input type="checkbox" placeholder="" name="tremors"><br>
                                                                        Memory Loss
                                                                        <input type="checkbox" placeholder="" name="memory_loss">
                                                                        <input type="checkbox" placeholder="" name="memory_loss"><br>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="4">
                                                                        <p><U>FEMALES ONLY</U></P>
                                                                        <div class="form-group row">
                                                                            <label for="staticEmail" class="col-sm-10 col-form-label">Date Last Mammogram:</label>
                                                                            <div class="col-sm-4">
                                                                                <input type="datetime" name="date_last_memogram" class="form-control" placeholder="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label for="staticEmail" class="col-sm-10 col-form-label">Normal:</label>
                                                                            <div class="col-sm-4">
                                                                                <input type="checkbox" placeholder="" name="normal">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label for="staticEmail" class="col-sm-10 col-form-label">Abnormal:</label>
                                                                            <div class="col-sm-4">
                                                                                <input type="checkbox" placeholder="abnormal" name="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label for="staticEmail" class="col-sm-10 col-form-label">Date Last PAP:</label>
                                                                            <div class="col-sm-4">
                                                                                <input type="datetime" name="date_last_pap" class="form-control" placeholder="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label for="staticEmail" class="col-sm-10 col-form-label">Normal:</label>
                                                                            <div class="col-sm-4">
                                                                                <input type="checkbox" placeholder="" name="normals">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label for="staticEmail" class="col-sm-10 col-form-label">Abnormal:</label>
                                                                            <div class="col-sm-4">
                                                                                <input type="checkbox" placeholder="abnormalss" name="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label for="staticEmail" class="col-sm-10 col-form-label">Age Onset Periods:</label>
                                                                            <div class="col-sm-4">
                                                                                <input type="number" name="age_onset_periods" class="form-control" placeholder="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label for="staticEmail" class="col-sm-10 col-form-label">Age Onset Menopause:</label>
                                                                            <div class="col-sm-4">
                                                                                <input type="number" name="Age_onset_menopause" class="form-control" placeholder="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label for="staticEmail" class="col-sm-10 col-form-label">Periods Regular?:</label>
                                                                            <div class="col-sm-4">
                                                                                <input type="name" name="periods_regular" class="form-control" placeholder="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label for="staticEmail" class="col-sm-10 col-form-label">Yes:</label>
                                                                            <div class="col-sm-4">
                                                                                <input type="checkbox" class="form-check-input" placeholder="" name="yes">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label for="staticEmail" class="col-sm-10 col-form-label">No:</label>
                                                                            <div class="col-sm-4">
                                                                                <input type="checkbox" placeholder="no" name="no">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label for="staticEmail" class="col-sm-10 col-form-label">Number of Pregnancies:</label>
                                                                            <div class="col-sm-4">
                                                                                <input type="number" name="number_of_pregnancies" class="form-control" placeholder="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label for="staticEmail" class="col-sm-10 col-form-label">Number of Births:</label>
                                                                            <div class="col-sm-4">
                                                                                <input type="number" name="number_of_births" class="form-control" placeholder="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label for="staticEmail" class="col-sm-10 col-form-label">Dysmenorrhea?:</label>
                                                                            <div class="col-sm-4">
                                                                                <input type="name" name="dysmenorrhea" class="form-control" placeholder="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label for="staticEmail" class="col-sm-10 col-form-label">Yes:</label>
                                                                            <div class="col-sm-4">
                                                                                <input type="checkbox" placeholder="" name="yesa">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label for="staticEmail" class="col-sm-10 col-form-label">No:</label>
                                                                            <div class="col-sm-4">
                                                                                <input type="checkbox" placeholder="" name="noa">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group col-sm-12">
                                                                            <label for="staticEmail" class="col-sm-10 col-form-label">OTHER:</label>
                                                                            <div class="">
		            	                                                     <textarea input-type="name" name="other" class="form-control" placeholder="">
						                                                    </textarea>
                                                                            </div>
                                                                            </div>
                                                                    </td> <p>Differential Diagnosis:<BR>Diagnosis:<br><br>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>

                                                        <div role="tabpanel" class="tab-pane fade" id="Section4">
                                                            <H3>CURRENT MEDICATIONS:</H3>INCLUDE BIRTH CONTROL PILLS,VITAMINS AND SUPPLEMENTS</p>
                                                            <table class="table table-bordered">
                                                                <thead>
                                                                <tr>
                                                                    <th scope="col">NO</th>
                                                                    <th scope="col">MEDICINE NAME</th>
                                                                    <th scope="col">HOW TAKEN</th>
                                                                    <th scope="col">WHO PRESCRIBES</th>
                                                                    <th scope="col">NEED RX</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                <tr>
                                                                    <th scope="row">1</th>
                                                                    <td><input type="name" name="medicine_name" class="form-control" placeholder=""></td>
                                                                    <td><input type="name" name="how_taken" class="form-control" placeholder=""></td>
                                                                    <td><input type="name" name="who_prescribes" class="form-control" placeholder=""></td>
                                                                    <td><input type="checkbox" name="need_rx" class="form-control" placeholder="">YES<input type="checkbox" name="" class="form-control" placeholder="">NO</td>

                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">2</th>
                                                                    <td><input type="name" name="medicine_name" class="form-control" placeholder=""></td>
                                                                    <td><input type="name" name="how_taken" class="form-control" placeholder=""></td>
                                                                    <td><input type="name" name="who_prescribes" class="form-control" placeholder=""></td>
                                                                    <td><input type="checkbox" name="need_rx" class="form-control" placeholder="">YES<input type="checkbox" name="" class="form-control" placeholder="">NO</td>

                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">3</th>
                                                                    <td><input type="name" name="medicine_name" class="form-control" placeholder=""></td>
                                                                    <td><input type="name" name="how_taken" class="form-control" placeholder=""></td>
                                                                    <td><input type="name" name="who_prescribes" class="form-control" placeholder=""></td>
                                                                    <td><input type="checkbox" name="need_rx" class="form-control" placeholder="">YES<input type="checkbox" name="" class="form-control" placeholder="">NO</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">4</th>
                                                                    <td><input type="name" name="medicine_name" class="form-control" placeholder=""></td>
                                                                    <td><input type="name" name="how_taken" class="form-control" placeholder=""></td>
                                                                    <td><input type="name" name="who_prescribes" class="form-control" placeholder=""></td>
                                                                    <td><input type="checkbox" name="need_rx" class="form-control" placeholder="">YES<input type="checkbox" name="" class="form-control" placeholder="">NO</td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                            <div class="row">
                                                                <div class="col-md-12">
			                                                     <textarea input-type="name" name="notes" class="form-control" placeholder="">
			                                                    </textarea>
                                                                </div>
                                                            </div>
                                                            <table class="table table-bordered">
                                                                <thead>
                                                                <tr>
                                                                    <th scope="col">PLAN</th>
                                                                    <th scope="col">DIAGNOSTICS</th>
                                                                    <th scope="col">MEDICATIONS</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                <tr>
                                                                    <th scope="row"></th>
                                                                </tr>
                                                                <td> <textarea input-type="name" name="plan" class="form-control" placeholder=""></textarea></td>
                                                                <td> <textarea input-type="name" name="diagnostics" class="form-control" placeholder=""></textarea></td>
                                                                <td> <textarea input-type="name" name="medications" class="form-control" placeholder=""></textarea></td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>

                                                        <div role="tabpanel" class="tab-pane fade" id="Section5">
                                                            <div class="col-m-3 offset-md-2">
                                                                <H3 class="mt-20 ">
                                                                    DISHARGE PLANNING
                                                                </H3>
                                                            </div>
                                                            <table class="table table-bordered">
                                                                <thead>
                                                                <tr>
                                                                    <th scope="col"></th>
                                                                    <th scope="col">LOS IN HOSPITAL</th>
                                                                    <th scope="col">EXPECTED DATE OF DISCHARGE</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                <tr>
                                                                    <th scope="row"></th>
                                                                </tr>
                                                                <td> <textarea input-type="name" name="blank" class="form-control" placeholder=""></textarea></td>
                                                                <td> <textarea input-type="text" name="loss_in_hospital" class="form-control" placeholder=""></textarea></td>
                                                                <td> <textarea input-type="date" name="expected_date" class="form-control" placeholder=""></textarea></td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                            <H5>ADMITTING CLINICAN</H5>
                                                            <div class="form-group row">
                                                                <label for="staticEmail" class="col-sm-10 col-form-label">Date:</label>
                                                                <div class="col-sm-4">
                                                                    <input type="datetime" name="dateb" class="form-control" placeholder="">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="staticEmail" class="col-sm-10 col-form-label">Time:</label>
                                                                <div class="col-sm-4">
                                                                    <input type="time" name="timea" class="form-control" placeholder="">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="staticEmail" class="col-sm-10 col-form-label">Sign In:</label>
                                                                <div class="col-sm-4">
                                                                    <input type="name" name="sign_in" class="form-control" placeholder="">
                                                                </div>
                                                            </div>
                                                            <div class="col-m-3 offset-md-2">
                                                                <H3 class="mt-20 ">
                                                                    MULTI-DISCIPLINARY PATIENTS EDUCATION TOOL
                                                                </H3>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="staticEmail" class="col-sm-10 col-form-label">Department/Unit:</label>
                                                                <div class="col-sm-4">
                                                                    <input type="name" name="department_unit" class="form-control" placeholder="">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="staticEmail" class="col-sm-10 col-form-label">Patient Name:</label>
                                                                <div class="col-sm-4">
                                                                    <input type="name" name="patient_names" class="form-control" placeholder="">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="staticEmail" class="col-sm-10 col-form-label">Visit/MR Number:</label>
                                                                <div class="col-sm-4">
                                                                    <input type="name" name="visit_mrn_number" class="form-control" placeholder="">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="staticEmail" class="col-sm-10 col-form-label">Learning barriers:</label>
                                                                <div class="col-sm-4">
                                                                    <input type="name" name="learning_barriers" class="form-control" placeholder="">
                                                                </div>
                                                            </div>
                                                            <table class="table table-bordered">
                                                                <thead>
                                                                <tr>
                                                                    <th scope="col">NO</th>
                                                                    <th scope="col">Identified Learning Needs</th>
                                                                    <th scope="col">Contents (What was taught) ,Methods and Tools Used</th>
                                                                    <th scope="col">Target (patient or next of kin) </th>
                                                                    <th scope="col">Date</th>
                                                                    <th scope="col">Designation and Signature</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                <tr>
                                                                    <th scope="row">1</th>
                                                                    <td>Diagnosis and Prognosis</td>
                                                                    <td><input type="name" name="contents" class="form-control" placeholder=""></td>
                                                                    <td><input type="text" name="target_patient_or_next" class="form-control" placeholder=""></td>
                                                                    <td><input type="date_and_time" name="date_a" class="form-control" placeholder=""></td>
                                                                    <td><input type="password" name="designation_signature" class="form-control" placeholder=""></td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">2</th>
                                                                    <td>Treatment required (associated medication,procedures and equipment) </td>
                                                                    <td><input type="name" name="contents" class="form-control" placeholder=""></td>
                                                                    <td><input type="text" name="target_patient_or_next" class="form-control" placeholder=""></td>
                                                                    <td><input type="date_and_time" name="date_a" class="form-control" placeholder=""></td>
                                                                    <td><input type="password" name="designation_signature" class="form-control" placeholder=""></td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">3</th>
                                                                    <td>Nutrition</td>
                                                                    <td><input type="name" name="contents" class="form-control" placeholder=""></td>
                                                                    <td><input type="text" name="target_patient_or_next" class="form-control" placeholder=""></td>
                                                                    <td><input type="date_and_time" name="date_a" class="form-control" placeholder=""></td>
                                                                    <td><input type="password" name="designation_signature" class="form-control" placeholder=""></td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">4</th>
                                                                    <td>Pain management</td>
                                                                    <td><input type="name" name="contents" class="form-control" placeholder=""></td>
                                                                    <td><input type="text" name="target_patient_or_next" class="form-control" placeholder=""></td>
                                                                    <td><input type="date_and_time" name="date_a" class="form-control" placeholder=""></td>
                                                                    <td><input type="password" name="designation_signature" class="form-control" placeholder=""></td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">1</th>
                                                                    <td>Blood and blood products</td>
                                                                    <td><input type="name" name="contents" class="form-control" placeholder=""></td>
                                                                    <td><input type="text" name="target_patient_or_next" class="form-control" placeholder=""></td>
                                                                    <td><input type="date_and_time" name="date_a" class="form-control" placeholder=""></td>
                                                                    <td><input type="password" name="designation_signature" class="form-control" placeholder=""></td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">2</th>
                                                                    <td>Prevention and control of infections</td>
                                                                    <td><input type="name" name="contents" class="form-control" placeholder=""></td>
                                                                    <td><input type="text" name="target_patient_or_next" class="form-control" placeholder=""></td>
                                                                    <td><input type="date_and_time" name="date_a" class="form-control" placeholder=""></td>
                                                                    <td><input type="password" name="designation_signature" class="form-control" placeholder=""></td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">3</th>
                                                                    <td>Patients rights (informed consent and treatment choices)</td>
                                                                    <td><input type="name" name="contents" class="form-control" placeholder=""></td>
                                                                    <td><input type="text" name="target_patient_or_next" class="form-control" placeholder=""></td>
                                                                    <td><input type="date_and_time" name="date_a" class="form-control" placeholder=""></td>
                                                                    <td><input type="password" name="designation_signature" class="form-control" placeholder=""></td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">4</th>
                                                                    <td>Others (please specify)</td>
                                                                    <td><input type="name" name="contents" class="form-control" placeholder=""></td>
                                                                    <td><input type="text" name="target_patient_or_next" class="form-control" placeholder=""></td>
                                                                    <td><input type="date_and_time" name="date_a" class="form-control" placeholder=""></td>
                                                                    <td><input type="password" name="designation_signature" class="form-control" placeholder=""></td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                            <div class="form-group row">
                                                                <label for="staticEmail" class="col-sm-12 col-form-label">Patient/Next of Kin signature(where applicable):</label>
                                                                <div class="col-sm-4">
                                                                    <input type="name" name="" class="form-control" placeholder="">
                                                                </div>
                                                            </div>
                                                            <p>This form must be used in all patient care areas and by all clinical staff, and whoever has provided the education must sign and indicate his/her designation and the one who has been taught</p>
                                                            <p> must sign in appropriate. It may as well be used at different times for the same patient. Only add another form have been used up or the need you are addressing has already been filled up.</p>
                                                            <div class="">
                                                                <div class="col-md-6">
                                                                    <div class="row">
                                                                        <div class="col-md-3">
                                                                            <p>SURNAME:</p>
                                                                        </div>
                                                                        <div class="col-md-9">
                                                                            <input type=" text" name="sir_name" class="form-control" placeholder="click to enter patients name"></td>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-3">
                                                                            <p>OTHER NAMES:</p>
                                                                        </div>
                                                                        <div class="col-md-9">
                                                                            <input type=" text" name="other_names" class="form-control" placeholder="click to enter surname"></td>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-3">
                                                                            <p>MRN NUMBER:</p>
                                                                        </div>
                                                                        <div class="col-md-9">
                                                                            <input type=" text" name="mrn" class="form-control" placeholder="click to enter mrn number">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <table class="table table-bordered">
                                                                <thead>
                                                                <tr>
                                                                    <th scope="col">DATE AND TIME</th>
                                                                    <th scope="col">CLINICAL NOTES</th>
                                                                    <th scope="col">VERBAL ORDERS</th>
                                                                    <th scope="col">NAME SIGNATURE AND DESIGNATION</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                <tr>
                                                                    <td><input type="datetime" name="date_and_time" class="form-control" placeholder=""></td>
                                                                    <td><textarea input type="name" name="clinical_notes" class="form-control" placeholder=""></textarea></td>
                                                                    <td><textarea input type="name" name="verbal_orders" class="form-control" placeholder=""></textarea></td>
                                                                    <td><input type="name" name="name_signature_and_designation" class="form-control" placeholder=""></td>
                                                                </tr>
                                                                <tr>
                                                                    <td><input type="datetime" name="date_and_time" class="form-control" placeholder=""></td>
                                                                    <td><textarea input type="name" name="clinical_notes" class="form-control" placeholder=""></textarea></td>
                                                                    <td><textarea input type="name" name="verbal_orders" class="form-control" placeholder=""></textarea></td>
                                                                    <td><input type="name" name="name_signature_and_designation" class="form-control" placeholder=""></td>
                                                                </tr>
                                                                <tr>
                                                                    <td><input type="datetime" name="date_and_time" class="form-control" placeholder=""></td>
                                                                    <td><textarea input type="name" name="clinical_notes" class="form-control" placeholder=""></textarea></td>
                                                                    <td><textarea input type="name" name="verbal_orders" class="form-control" placeholder=""></textarea></td>
                                                                    <td><input type="name" name="name_signature_and_designation" class="form-control" placeholder=""></td>
                                                                </tr>
                                                                <tr>
                                                                    <td><input type="datetime" name="date_and_time" class="form-control" placeholder=""></td>
                                                                    <td><textarea input type="name" name="clinical_notes" class="form-control" placeholder=""></textarea></td>
                                                                    <td><textarea input type="name" name="verbal_orders" class="form-control" placeholder=""></textarea></td>
                                                                    <td><input type="name" name="name_signature_and_designation" class="form-control" placeholder=""></td>
                                                                </tr>
                                                                <tr>
                                                                    <td><input type="datetime" name="date_and_time" class="form-control" placeholder=""></td>
                                                                    <td><textarea input type="name" name="clinical_notes" class="form-control" placeholder=""></textarea></td>
                                                                    <td><textarea input type="name" name="verbal_orders" class="form-control" placeholder=""></textarea></td>
                                                                    <td><input type="name" name="name_signature_and_designation" class="form-control" placeholder=""></td>
                                                                </tr>
                                                                <tr>
                                                                    <td><input type="datetime" name="date_and_time" class="form-control" placeholder=""></td>
                                                                    <td><textarea input type="name" name="clinical_notes" class="form-control" placeholder=""></textarea></td>
                                                                    <td><textarea input type="name" name="verbal_orders" class="form-control" placeholder=""></textarea></td>
                                                                    <td><input type="name" name="name_signature_and_designation" class="form-control" placeholder=""></td>
                                                                </tr>
                                                                <tr>
                                                                    <td><input type="datetime" name="date_and_time" class="form-control" placeholder=""></td>
                                                                    <td><textarea input type="name" name="clinical_notes" class="form-control" placeholder=""></textarea></td>
                                                                    <td><textarea input type="name" name="verbal_orders" class="form-control" placeholder=""></textarea></td>
                                                                    <td><input type="name" name="name_signature_and_designation" class="form-control" placeholder=""></td>
                                                                </tr>
                                                                <tr>
                                                                    <td><input type="datetime" name="date_and_time" class="form-control" placeholder=""></td>
                                                                    <td><textarea input type="name" name="clinical_notes" class="form-control" placeholder=""></textarea></td>
                                                                    <td><textarea input type="name" name="verbal_orders" class="form-control" placeholder=""></textarea></td>
                                                                    <td><input type="name" name="name_signature_and_designation" class="form-control" placeholder=""></td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
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


@endsection
