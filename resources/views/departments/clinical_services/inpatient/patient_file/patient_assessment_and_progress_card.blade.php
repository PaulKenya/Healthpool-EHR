@extends('layouts.master')
@section('content')
    @include('departments.clinical_services.inpatient.patient_file.patient_bio_information')
    <!-- Title & Breadcrumbs-->
    <div class="page-titles">
        <div class="col-md-12 align-self-center">
            <h4 class="theme-cl">Patient assessment and progress card record</h4>
        </div>
    </div>
    <!-- Title & Breadcrumbs-->

    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Patient assessment and progress card record</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable" class="table table-striped">
                            <thead>
                            <tr>
                                <th>Print Record</th>
                                <th>bed room no</th>
                                <th>time of ward arrival</th>
                                <th>date of admission</th>
                                <th>admission diagnosis</th>
                                <th>confirmed diagnosis</th>
                                <th>reg no</th>
                                <th>ward</th>
                                <th>surname</th>
                                <th>other names</th>
                                <th>address</th>
                                <th>date of birth</th>
                                <th>sex</th>
                                <th>doctors name</th>
                                <th>marital status</th>
                                <th>nationality</th>
                                <th>religion</th>
                                <th>language spoken</th>
                                <th>mobile number</th>
                                <th>occupation</th>
                                <th>residence</th>
                                <th>patient special request</th>
                                <th>ht</th>
                                <th>wt</th>
                                <th>bmi</th>
                                <th>lmp</th>
                                <th>blood group</th>
                                <th>preferred </th>
                                <th>next of kin</th>
                                <th>name</th>
                                <th>mobile number</th>
                                <th>address</th>
                                <th>relationship</th>
                                <th>residence</th>
                                <th>admission form</th>
                                <th>WARD </th>
                                <th>I</th>
                                <th>admission book entry</th>
                                <th>urinalysis results</th>
                                <th>patient relatives informed of visiting hours</th>
                                <th>doctor informed</th>
                                <th>nurse care plan</th>
                                <th>medication commenced</th>
                                <th>valuable forms filled</th>
                                <th>allergy form filled</th>
                                <th>kitchen informed</th>
                                <th>client feedback form</th>
                                <th>patient admitted by</th>
                                <th>signature</th>
                                <th>received by</th>
                                <th>signature</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(isset($patient_assessment_and_progress_card))
                                @php
                                    $i=0
                                @endphp
                                @foreach($patient_assessment_and_progress_card as $patient_assessment_and_progress_cards)
                                    @php
                                        $i++;
                                    @endphp
                                    <tr>
                                        <td>
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{$i}}">Print Record</button>
                                        </td>
                                        <td>{{ $patient_assessment_and_progress_cards->bed_room_no}}</td>
                                        <td>{{ $patient_assessment_and_progress_cards->time_of_ward_arrival}}</td>
                                        <td>{{ $patient_assessment_and_progress_cards->date_of_admission}}</td>
                                        <td>{{ $patient_assessment_and_progress_cards->admission_diagnosis}}</td>
                                        <td>{{ $patient_assessment_and_progress_cards->confirmed_diagnosis}}</td>
                                        <td>{{ $patient_assessment_and_progress_cards->reg_no}}</td>
                                        <td>{{ $patient_assessment_and_progress_cards->ward}}</td>
                                        <td>{{ $patient_assessment_and_progress_cards->surname}}</td>
                                        <td>{{ $patient_assessment_and_progress_cards->other_names}}</td>
                                        <td>{{ $patient_assessment_and_progress_cards->address}}</td>
                                        <td>{{ $patient_assessment_and_progress_cards->date_of_birth}}</td>
                                        <td>{{ $patient_assessment_and_progress_cards->sex}}</td>
                                        <td>{{ $patient_assessment_and_progress_cards->doctors_name}}</td>
                                        <td>{{ $patient_assessment_and_progress_cards->marital_status}}</td>
                                        <td>{{ $patient_assessment_and_progress_cards->nationality}}</td>
                                        <td>{{ $patient_assessment_and_progress_cards->religion}}</td>
                                        <td>{{ $patient_assessment_and_progress_cards->language_spoken}}</td>
                                        <td>{{ $patient_assessment_and_progress_cards->occupation}}</td>
                                        <td>{{ $patient_assessment_and_progress_cards->residence}}</td>
                                        <td>{{ $patient_assessment_and_progress_cards->patient_special_request}}</td>
                                        <td>{{ $patient_assessment_and_progress_cards->ht}}</td>
                                        <td>{{ $patient_assessment_and_progress_cards->wt}}</td>
                                        <td>{{ $patient_assessment_and_progress_cards->bmi}}</td>
                                        <td>{{ $patient_assessment_and_progress_cards->lmp}}</td>
                                        <td>{{ $patient_assessment_and_progress_cards->blood_group}}</td>
                                        <td>{{ $patient_assessment_and_progress_cards->preferred_accomodation}}</td>
                                        <td>{{ $patient_assessment_and_progress_cards->next_of_kin}}</td>
                                        <td>{{ $patient_assessment_and_progress_cards->name}}</td>
                                        <td>{{ $patient_assessment_and_progress_cards->mobile_number}}</td>
                                        <td>{{ $patient_assessment_and_progress_cards->address}}</td>
                                        <td>{{ $patient_assessment_and_progress_cards->relationship}}</td>
                                        <td>{{ $patient_assessment_and_progress_cards->residence}}</td>
                                        <td>{{ $patient_assessment_and_progress_cards->admission_form}}</td>
                                        <td>{{ $patient_assessment_and_progress_cards->ward_orientation_routine_gowns}}</td>
                                        <td>{{ $patient_assessment_and_progress_cards->id_band_given}}</td>
                                        <td>{{ $patient_assessment_and_progress_cards->admission_book_entry}}</td>
                                        <td>{{ $patient_assessment_and_progress_cards->urinalysis_results}}</td>
                                        <td>{{ $patient_assessment_and_progress_cards->patient_relatives_informed_of_visiting_hours}}</td>
                                        <td>{{ $patient_assessment_and_progress_cards->doctor_informed}}</td>
                                        <td>{{ $patient_assessment_and_progress_cards->nurse_care_plan}}</td>
                                        <td>{{ $patient_assessment_and_progress_cards->medication_commenced}}</td>
                                        <td>{{ $patient_assessment_and_progress_cards->valuable_forms_filled}}</td>
                                        <td>{{ $patient_assessment_and_progress_cards->allergy_form_filled}}</td>
                                        <td>{{ $patient_assessment_and_progress_cards->kitchen_informed}}</td>
                                        <td>{{ $patient_assessment_and_progress_cards->client_feedback_form}}</td>
                                        <td>{{ $patient_assessment_and_progress_cards->patient_admitted_by}}</td>
                                        <td>{{ $patient_assessment_and_progress_cards->signature}}</td>
                                        <td>{{ $patient_assessment_and_progress_cards->received_by}}</td>
                                        <td>{{ $patient_assessment_and_progress_cards->signature}}</td>
                                        <!-- Triage Modal -->
                                        <div class="modal fade" id="exampleModal{{$i}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Patient Assessment and Progress Card</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div id="printableArea{{$i}}">
                                                            <h2>PATIENT RECORD</h2>
                                                            <p><b>Patient Name : </b> {{$patient->name}}</p>
                                                            <p><b>Bed room no : </b>{{ $patient_assessment_and_progress_cards->bed_room_no}}</p>
                                                            <p><b>time of ward arrival : </b>{{ $patient_assessment_and_progress_cards->time_of_ward_arrival}}</p>
                                                            <p><b>date of admission : </b>{{ $patient_assessment_and_progress_cards->date_of_admission}}</p>
                                                            <p><b>admission diagnosis : </b>{{ $patient_assessment_and_progress_cards->admission_diagnosis}}</p>
                                                            <p><b>confirmed diagnosis : </b>{{ $patient_assessment_and_progress_cards->confirmed_diagnosis}}</p>
                                                            <p><b>registration number : </b>{{ $patient_assessment_and_progress_cards->reg_no}}</p>
                                                            <p><b>ward : </b>{{ $patient_assessment_and_progress_cards->ward}}</p>
                                                            <p><b>surname : </b>{{ $patient_assessment_and_progress_cards->surname}}</p>
                                                            <p><b>other names : </b>{{ $patient_assessment_and_progress_cards->other_names}}</p>
                                                            <p><b>address : </b>{{ $patient_assessment_and_progress_cards->address}}</p>
                                                            <p><b>date of birth : </b>{{ $patient_assessment_and_progress_cards->date_of_birth}}</p>
                                                            <p><b>sex : </b>{{ $patient_assessment_and_progress_cards->sex}}</p>
                                                            <p><b>doctors name : </b>{{ $patient_assessment_and_progress_cards->doctors_name}}</p>
                                                            <p><b>marital status : </b>{{ $patient_assessment_and_progress_cards->marital_status}}</p>
                                                            <p><b>nationality : </b>{{ $patient_assessment_and_progress_cards->nationality}}</p>
                                                            <p><b>religion : </b>{{ $patient_assessment_and_progress_cards->religion}}</p>
                                                            <p><b>language spoken : </b>{{ $patient_assessment_and_progress_cards->language_spoken}}</p>
                                                            <p><b>occupation : </b>{{ $patient_assessment_and_progress_cards->occupation}}</p>
                                                            <p><b>residence : </b>{{ $patient_assessment_and_progress_cards->residence}}</p>
                                                            <p><b>patient special request : </b>{{ $patient_assessment_and_progress_cards->patient_special_request}}</p>
                                                            <p><b>ht : </b>{{ $patient_assessment_and_progress_cards->ht}}</p>
                                                            <p><b>wt : </b>{{ $patient_assessment_and_progress_cards->wt}}</p>
                                                            <p><b>bmi : </b>{{ $patient_assessment_and_progress_cards->bmi}}</p>
                                                            <p><b>lmp : </b>{{ $patient_assessment_and_progress_cards->lmp}}</p>
                                                            <p><b>blood group : </b>{{ $patient_assessment_and_progress_cards->blood_group}}</p>
                                                            <p><b>preferred accomodation : </b>{{ $patient_assessment_and_progress_cards->preferred_accomodation}}</p>
                                                            <p><b>next of kin : </b>{{ $patient_assessment_and_progress_cards->next_of_kin}}</p>
                                                            <p><b>name : </b>{{ $patient_assessment_and_progress_cards->name}}</p>
                                                            <p><b>mobile number : </b>{{ $patient_assessment_and_progress_cards->mobile_number}}</p>
                                                            <p><b>address : </b>{{ $patient_assessment_and_progress_cards->address}}</p>
                                                            <p><b>relationship : </b>{{ $patient_assessment_and_progress_cards->relationship}}</p>
                                                            <p><b>residence : </b>{{ $patient_assessment_and_progress_cards->residence}}</p>
                                                            <p><b>admission form : </b>{{ $patient_assessment_and_progress_cards->admission_form}}</p>
                                                            <p><b>ward orientation routine gowns : </b>{{ $patient_assessment_and_progress_cards->ward_orientation_routine_gowns}}</p>
                                                            <p><b>id band given : </b>{{ $patient_assessment_and_progress_cards->id_band_given}}</p>
                                                            <p><b>admission book entry : </b>{{ $patient_assessment_and_progress_cards->admission_book_entry}}</p>
                                                            <p><b>urinalysis results : </b>{{ $patient_assessment_and_progress_cards->urinalysis_results}}</p>
                                                            <p><b>patient relatives informed of visiting hours : </b>{{ $patient_assessment_and_progress_cards->patient_relatives_informed_of_visiting_hours}}</p>
                                                            <p><b>doctor informed : </b>{{ $patient_assessment_and_progress_cards->doctor_informed}}</p>
                                                            <p><b>nurse care plan : </b>{{ $patient_assessment_and_progress_cards->nurse_care_plan}}</p>
                                                            <p><b>medication commenced : </b>{{ $patient_assessment_and_progress_cards->medication_commenced}}</p>
                                                            <p><b>valuable forms filled : </b>{{ $patient_assessment_and_progress_cards->valuable_forms_filled}}</p>
                                                            <p><b>allergy form filled : </b>{{ $patient_assessment_and_progress_cards->allergy_form_filled}}</p>
                                                            <p><b>kitchen informed : </b>{{ $patient_assessment_and_progress_cards->kitchen_informed}}</p>
                                                            <p><b>client feedback form : </b>{{ $patient_assessment_and_progress_cards->client_feedback_form}}</p>
                                                            <p><b>patient admitted by : </b>{{ $patient_assessment_and_progress_cards->patient_admitted_by}}</p>
                                                            <p><b>signature : </b>{{ $patient_assessment_and_progress_cards->signature}}</p>
                                                            <p><b>received by : </b>{{ $patient_assessment_and_progress_cards->received_by}}</p>
                                                            <p><b>signature : </b>{{ $patient_assessment_and_progress_cards->signature}}</p>
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
                        <button class="btn btn-success" data-toggle="modal" data-target="#myModal">Add more Items</button>
                        {{--<button class="btn btn-info" data-toggle="modal" data-target="#myModal">Print</button>--}}
                    </div>
                </div>
                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog modal-lg">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Add Patient assessment and progress card record</h4>
                            </div>
                            <div class="modal-body">

                                <div class="col-md-12">
                                    <div class="card">

                                        <div class="container-fluid">
                                            <form action="{{ route('patient_assessment_and_progress_card_post',['patient_id'=>$patient_id])}}" method="post" enctype="multipart/form-data">
                                                {!! csrf_field() !!}
                                                <input name="administration_patient_informations_id" type="text" class="form-control d-none" value="{{$patient_id}}">
                                                <input name="institution_id" type="text" class="form-control d-none" value="{{ Auth::user()->institution->id }}">
                                                <input name="user_id" type="text" value="{{ Auth::user()->id }}" class="form-control d-none">
                                                <div class="col-m-3">
                                                    <h3 class="mt-20">PATIENT ASSESSMENT & PROGRESS RECORD</h3>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <table class="table table-bordered">

                                                            <tbody>
                                                            <tr class="col-md-4">
                                                                <td ><span class="row"> <span class="col-md-4">BED/ROOM NO</span> <span class="col-md-8"> <input type="text" name="bed_room_no" class=" form-control" placeholder=""></span></span>
                                                                    <br><span class="row"> <span class="col-md-4">TIME OF ARRIVAL IN THE WARD</span> <span class="col-md-8"><input type="time" name="time_of_ward_arrival" class="form-control" placeholder=""></span></span>
                                                                    <span class="row"> <span class="col-md-4">DATE OF ADMISSION</span> <span class="col-md-8"> <input type="date" name="date_of_admission" class=" form-control" placeholder=""></span></span>
                                                                    <br>
                                                                    <span class="row"> <span class="col-md-4">ADMISSION DIAGNOSIS</span> <span class="col-md-8"> <input type="text" name="admission_diagnosis" class=" form-control" placeholder=""></span></span>
                                                                    <br>
                                                                    <span class="row"> <span class="col-md-4">CONFIRMED DIAGNOSIS</span> <span class="col-md-8"> <textarea type="text" name="confirmed_diagnosis" class=" form-control" placeholder=""></textarea></span></span>
                                                                    <br>
                                                                </td>
                                                                <td>
                                                                <span class="row">
                                                                <span class="col-md-4"><span class="row"><span class="col-md-4">REG.NO  </span><span class="col-md-8"><input type="text" name="reg_no" class=" form-control" placeholder=""></span></span></span>
                                                                 <span class="col-md-6"><span class="row">
                                                                <span class="col-md-3"> WARD </span> <span class="col-md-9"><input type="text" name="ward" class=" form-control" placeholder=""></span></span></span></span>
                                                                    <br>
                                                                    <span class="row"> <span class="col-md-4">SURNAME</span> <span class="col-md-8"> <input type="text" name="surname" class=" form-control" placeholder=""></span></span>
                                                                    <br>
                                                                    <span class="row"> <span class="col-md-4">OTHER NAMES</span> <span class="col-md-8"> <input type="text" name="other_names" class=" form-control" placeholder=""></span></span>
                                                                    <br>
                                                                    <span class="row"> <span class="col-md-4">ADDRESS</span> <span class="col-md-8"> <input type="text" name="address" class=" form-control" placeholder=""></span></span>
                                                                    <br>

                                                                    <span class="row">
                                                                        <span class="col-md-12">
                                                                            <span class="row">
                                                                                <span class="col-md-5">D.O.B/AGE  </span>
                                                                                <span class="col-md-7">
                                                                                    <input type="date" name="date_of_birth" class=" form-control" placeholder="">
                                                                                </span>
                                                                            </span>
                                                                        </span>
		     <span class="col-md-6"><span class="row">
			<span class="col-md-3"> SEX </span> <span class="col-md-9"><input type="text" name="sex" class=" form-control" placeholder=""></span></span></span></span>
                                                                    <br>
                                                                    <span class="row"> <span class="col-md-4">DOCTOR'S NAME</span> <span class="col-md-8"> <textarea type="text" name="doctors_name" class=" form-control" placeholder=""></textarea></span></span>
                                                                    <br>
                                                                </td>
                                                                </td>


                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                        <tbody>
                                                        <table class="table table-bordered">
                                                            <tbody>
                                                            <tr>
                                                                <td>
                                                                    <span class="row"> <span class="col-md-4">MARITAL STATUS</span> <span class="col-md-8"> <input type="text" name="marital_status" class=" form-control" placeholder=""></span></span>
                                                                    <br>
                                                                    <span class="">
                                                                  <span class="row">
                                                                      <span class="col-md-3">NATIONALITY<input type="text" name="nationality" class=" form-control" placeholder=""></span>
                                                                      <span class="col-md-3">RELIGION<input type="text" name="religion" class=" form-control" placeholder=""></span>
                                                                    </span>
                                                                </span>
                                                                    <br>
                                                                    <span class="">
                                                                  <span class="row">
                                                                      <span class="col-md-3">LANGUAGE(S) SPOKEN<input type="text" name="language_spoken" class=" form-control" placeholder=""></span>
                                                                      <span class="col-md-3">MOBILE NO.<input type="text" name="mobile_number" class=" form-control" placeholder=""></span>
                                                                    </span>
                                                                </span><br>
                                                                    <span class="col-md-4"><span class="row"><span class="col-md-4">OCCUPATION</span><span class="col-md-8"><input type="text" name="occupation" class=" form-control" placeholder=""></span></span></span>
                                                                    <span class="col-md-6"><span class="row">
                                                                <span class="col-md-4">RESIDENCE</span> <span class="col-md-8"><input type="text" name="residence" class=" form-control" placeholder=""></span></span></span></span>
                                                                    <br>
                                                                    <span class="row"> <span class="col-md-4">PATIENT'S SPECIAL REQUEST</span> <span class="col-md-8"> <input type="text" name="patient_special_request" class=" form-control" placeholder=""></span></span>
                                                                    <br>
                                                                    <span class="">
                                                                      <span class="row">
                                                                          <span class="col-md-3">HT(kg)<input type="text" name="ht" class=" form-control" placeholder=""></span>
                                                                          <span class="col-md-3">WT(cm)<input type="text" name="wt" class=" form-control" placeholder=""></span>
                                                                          <span class="col-md-3">BMI<input type="text" name="bmi" class=" form-control" placeholder=""></span>
                                                                          <span class="col-md-3">LMP<input type="text" name="lmp" class=" form-control" placeholder=""></span>
                                                                      </span>
                                                                  </span>
                                                                    <br>
                                                                    <span class="row"> <span class="col-md-4">BLOOD GROUP</span> <span class="col-md-8"> <input type="text" name="blood_group" class=" form-control" placeholder=""></span></span>
                                                                    <br>
                                                                    PREFERRED ACCOMODATION:
                                                                    <input type="radio"  name="preferred_accomodation"> WARD BED
                                                                    <input type="radio"  name="preferred_accomodation"> PRIVATE ROOM

                                                                </td>



                                                            </tr>
                                                            </tbody>
                                                        </table>


                                                        <table class="table table-bordered">
                                                            <tbody>
                                                            <tr>
                                                                <td>
                                                                    <span class="row"> <span class="col-md-4">NEXT OF KIN:</span> <span class="col-md-8"> <input type="text" name="next_of_kin" class=" form-control" placeholder=""></span></span>
                                                                    <span class=""><br>

			  <div class="row">
	            <div class="form-group row col-md-6">
				    <label  class="col-sm-2 col-form-label">NAME(S)</label>
				    <div class="col-sm-10">
				      <input type="text" name="name" class=" form-control" placeholder="">
				    </div>
				 </div>
				 <div class="form-group row col-md-6">
				    <label  class="col-sm-2 col-form-label">MOBILE NO.</label>
				    <div class="col-sm-10">
				      <input type="text" name="mobile_number" class=" form-control" placeholder="">
				    </div>
				 </div>
			</div>


			 <br>

            <div class="row">
	            <div class="form-group row col-md-6">
				    <label  class="col-sm-2 col-form-label">ADDRESS</label>
				    <div class="col-sm-10">
				      <input type="text" name="address" class=" form-control" placeholder="">
				    </div>
				 </div>
				 <div class="form-group row col-md-6">
				    <label  class="col-sm-2 col-form-label">RELATIONSHIP</label>
				    <div class="col-sm-10">
				      <input type="text" name="relationship" class=" form-control" placeholder="">
				    </div>
				 </div>
			</div>


	    	<br>
				<span class="row"> <span class="col-md-4">RESIDENCE</span> <span class="col-md-8"> <input type="text" name="residence" class=" form-control" placeholder=""></span></span></span>
                                                                </td>


                                                            </tr>
                                                            </tbody>
                                                        </table>

                                                        <div class="col-m-3 md-3">
                                                            <H3 class="mt-20">
                                                                ADMISSION CHECKLIST
                                                            </H3>
                                                        </div>
                                                        <table class="table table-bordered">
                                                            <thead>
                                                            <tr>
                                                                <th scope="col">TO BE COMPLETED BY CASUALTY NURSE</th>
                                                                <th scope="col">YES NO N/A</th>

                                                                <th scope="col">TO BE COMPLETED BY WARD NURSE</th>
                                                                <th scope="col">YES NO N/A</th>
                                                            </tr>
                                                            </thead>

                                                            <tbody>
                                                            <tr>
                                                                <td><span class="col-md-4">ADMISSION FORM</span></td>
                                                                <td> <input type="radio"  name="admission_form"> YES
                                                                    <input type="radio"  name="admission_form"> NO
                                                                    <input type="radio"  name="admission_form"> N/A
                                                                </td>
                                                                <td><span class="col-md-4">WARD ORIENTATION/ROUTINE/GOWNS</span></td>
                                                                <td> <input type="radio"  name="ward_orientation_routine_gowns"> YES
                                                                    <input type="radio"  name="ward_orientation_routine_gowns"> NO
                                                                    <input type="radio"  name="ward_orientation_routine_gowns"> N/A</td>

                                                            </tr>

                                                            <tr>
                                                                <td><span class="col-md-4">I.D BAND GIVEN</span></td>
                                                                <td> <input type="radio"  name="id_band_given"> YES
                                                                    <input type="radio"  name="id_band_given"> NO
                                                                    <input type="radio"  name="id_band_given"> N/A
                                                                </td>
                                                                <td><span class="col-md-4">ADMISSION BOOK ENTRY</span></td>
                                                                <td> <input type="radio"  name="admission_book_entry"> YES
                                                                    <input type="radio"  name="admission_book_entry"> NO
                                                                    <input type="radio"  name="admission_book_entry"> N/A</td>

                                                            </tr>

                                                            <tr>
                                                                <td><span class="col-md-4">URINALYSIS- RESULTS</span></td>
                                                                <td> <input type="radio"  name="urinalysis_results"> YES
                                                                    <input type="radio"  name="urinalysis_results"> NO
                                                                    <input type="radio"  name="urinalysis_results"> N/A
                                                                </td>
                                                                <td><span class="col-md-4">PATIENT/RELATIVES INFORMED OF VISITING HOURS</span></td>
                                                                <td> <input type="radio"  name="patient_relatives_informed_of_visiting_hours"> YES
                                                                    <input type="radio"  name="patient_relatives_informed_of_visiting_hours"> NO
                                                                    <input type="radio"  name="patient_relatives_informed_of_visiting_hours"> N/A</td>

                                                            </tr>

                                                            <tr>
                                                                <td><span class="col-md-4">DOCTOR INFORMED</span></td>
                                                                <td> <input type="radio"  name="doctor_informed"> YES
                                                                    <input type="radio"  name="doctor_informed"> NO
                                                                    <input type="radio"  name="doctor_informed"> N/A
                                                                </td>
                                                                <td><span class="col-md-4">NURSE CARE PLAN</span></td>
                                                                <td> <input type="radio"  name="nurse_care_plan"> YES
                                                                    <input type="radio"  name="nurse_care_plan"> NO
                                                                    <input type="radio"  name="nurse_care_plan"> N/A</td>

                                                            </tr>

                                                            <tr>
                                                                <td><span class="col-md-4">MEDICATION COMMENCED</span></td>
                                                                <td> <input type="radio"  name="medication_commenced"> YES
                                                                    <input type="radio"  name="medication_commenced"> NO
                                                                    <input type="radio"  name="medication_commenced"> N/A
                                                                </td>
                                                                <td><span class="col-md-4">VALUABLE FORMS FILLED</span></td>
                                                                <td> <input type="radio"  name="valuable_forms_filled"> YES
                                                                    <input type="radio"  name="valuable_forms_filled"> NO
                                                                    <input type="radio"  name="valuable_forms_filled"> N/A</td>

                                                            </tr>


                                                            <tr>
                                                                <td><span class="col-md-4">ALLERGY FORM FILLED</span><br>
                                                                    <span class="col-md-4">KITCHEN INFORMED</span> </td>
                                                                <td> <input type="radio"  name="allergy_form_filled"> YES
                                                                    <input type="radio"  name="allergy_form_filled"> NO
                                                                    <input type="radio"  name="allergy_form_filled"> N/A
                                                                    <br>
                                                                    <input type="radio"  name="kitchen_informed"> YES
                                                                    <input type="radio"  name="kitchen_informed"> NO
                                                                    <input type="radio"  name="kitchen_informed"> N/A

                                                                </td>
                                                                <td><span class="col-md-4">CLIENT FEEDBACK FORM</span></td>
                                                                <td> <input type="radio"  name="client_feedback_form"> YES
                                                                    <input type="radio"  name="client_feedback_form"> NO
                                                                    <input type="radio"  name="client_feedback_form"> N/A
                                                                </td>

                                                            </tr>
                                                            <hr>
                                                            </tbody>
                                                        </table>

                                                        <table class="table table-bordered">
                                                            <tbody>
                                                            <tr>
                                                                <td>

                                                                    <div class="row">
                                                                        <div class="form-group row col-md-6">
                                                                            <label  class="col-sm-2 col-form-label">PATIENT ADMITTED BY:</label>
                                                                            <div class="col-sm-10">
                                                                                <input type="text" name="patient_admitted_by" class=" form-control" placeholder="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row col-md-6">
                                                                            <label  class="col-sm-2 col-form-label">SIGNATURE:</label>
                                                                            <div class="col-sm-10">
                                                                                <input type="text" name="signature" class=" form-control" placeholder="">
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row">
                                                                        <div class="form-group row col-md-6">
                                                                            <label  class="col-sm-2 col-form-label">RECEIVED BY:</label>
                                                                            <div class="col-sm-10">
                                                                                <input type="text" name="received_by" class=" form-control" placeholder="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row col-md-6">
                                                                            <label  class="col-sm-2 col-form-label">SIGNATURE:</label>
                                                                            <div class="col-sm-10">
                                                                                <input type="text" name="signature" class=" form-control" placeholder="">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                        </tbody>
                                                    </div>
                                                </div>
                                                <div class="form-row">
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