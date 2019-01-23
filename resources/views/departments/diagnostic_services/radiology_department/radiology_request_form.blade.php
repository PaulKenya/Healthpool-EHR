@extends('layouts.master')

@section('content')
	@include('departments.clinical_services.inpatient.patient_file.patient_bio_information')
<div class="card"> 
        <div class="card-header">
            <h4>VIEW RADIOLOGY REQUEST FORM</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="datatable" class="table table-bordered">
                    <thead>
                        <tr>
							<th>PRINT VIEW</th>
                            <th>WD/CLINIC/PVT</th>
                            <th>PT.TEL.NO</th>
                            <th>APPOINTMENT DATE</th>
                            <th>TIME</th>
                            <th>PORTABLE</th>
                            <th>XRAY NO</th>
                            <th>INT NO</th>
                            <th>CHARGES</th>
                            <th>INVOICE NO</th>
                            <th>RECEIPT/CS NO</th>
                            <th>NHIF NO</th>
                            <th>BRIEF CLINICAL SUMMARY</th>
                            <th>DATE OF LMP</th>
                            <th>DOCTOR NAME</th>
							<th>SIGNATURE</th>
                            <th>DATE</th>
                            <th>REQUESTING DOCTOR TEL NO.</th>
                            <th>RADIOGRAPHER NAME</th>
                            <th>SIGNATURE</th>
                            <th>DATE</th>
                        </tr>
                    </thead>
					<tbody>
					@if(isset($radiologyrequestform_results))

						@php
							$i=0
						@endphp

						@foreach($radiologyrequestform_results as $radiologyrequestform_result)

							@php
								$i++;
							@endphp

							<tr>

								<td>
									<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{$i}}">PRINT VIEW</button>
								</td>

								<td>{{ $radiologyrequestform_result->wd_clinic_pvt }}</td>
								<td>{{ $radiologyrequestform_result->pt_tel_no }}</td>
								<td>{{ $radiologyrequestform_result->appointment_date }}</td>
								<td>{{ $radiologyrequestform_result->time }}</td>
								<td>{{ $radiologyrequestform_result->portable }}</td>
								<td>{{ $radiologyrequestform_result->xray_no }}</td>
								<td>{{ $radiologyrequestform_result->int_no }}</td>
								<td>{{ $radiologyrequestform_result->charges }}</td>
								<td>{{ $radiologyrequestform_result->invoice_no }}</td>
								<td>{{ $radiologyrequestform_result->receipt_no }}</td>
								<td>{{ $radiologyrequestform_result->nhif_no }}</td>
								<td>{{ $radiologyrequestform_result->brief_clinical_summary }}</td>
								<td>{{ $radiologyrequestform_result->date_of_lmp }}</td>
								<td>{{ $radiologyrequestform_result->doctor_name }}</td>
								<td>{{ $radiologyrequestform_result->signature }}</td>
								<td>{{ $radiologyrequestform_result->date }}</td>
								<td>{{ $radiologyrequestform_result->req_doc_tel_no }}</td>
								<td>{{ $radiologyrequestform_result->radiographer_name }}</td>
								<td>{{ $radiologyrequestform_result->signature_radiographer }}</td>
								<td>{{ $radiologyrequestform_result->date_radiographer }}</td>
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
												<h2>VIEW RADIOLOGY REQUEST FORM</h2>
												<p><b>PATIENT NAME : </b>{{$patient->name}}</p>
												<p><b>WD/CLINIC/PVT : </b>{{$radiologyrequestform_result->wd_clinic_pvt}}</p>
												<p><b>PT.TEL.NO : </b>{{$radiologyrequestform_result->pt_tel_no}}</p>
												<p><b>APPOINTMENT  : </b>{{$radiologyrequestform_result->appointment_date}}</p>
												<p><b>TIME : </b>{{$radiologyrequestform_result->time}}</p>
												<p><b>PORTABLE : </b>{{$radiologyrequestform_result->portable}}</p>
												<p><b>XRAY NO : </b>{{$radiologyrequestform_result->xray_no}}</p>
												<p><b>INT NO : </b>{{$radiologyrequestform_result->int_no}}</p>
												<p><b>CHARGES : </b>{{$radiologyrequestform_result->charges}}</p>
												<p><b>INVOICE NO : </b>{{$radiologyrequestform_result->invoice_no}}</p>
												<p><b>RECEIPT/CS NO : </b>{{$radiologyrequestform_result->receipt_no}}</p>
												<p><b>NHIF NO : </b>{{$radiologyrequestform_result->nhif_no}}</p>
												<p><b>BRIEF CLINICAL SUMMARY : </b>{{$radiologyrequestform_result->brief_clinical_summary}}</p>
												<p><b>DATE OF LMP : </b>{{$radiologyrequestform_result->date_of_lmp}}</p>
												<p><b>DOCTOR NAME : </b>{{$radiologyrequestform_result->doctor_name}}</p>
												<p><b>SIGNATURE : </b>{{$radiologyrequestform_result->signature}}</p>
												<p><b>DATE : </b>{{$radiologyrequestform_result->date}}</p>
												<p><b>REQUESTING DOCTOR TEL NO. : </b>{{$radiologyrequestform_result->req_doc_tel_no}}</p>
												<p><b>RADIOGRAPHER NAME : </b>{{$radiologyrequestform_result->radiographer_name}}</p>
												<p><b>SIGNATURE : </b>{{$radiologyrequestform_result->signature_radiographer}}</p>
												<p><b>DATE : </b>{{$radiologyrequestform_result->date_radiographer}}</p>
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
                        <button type="button" class="close" data-dismiss="modal">&times;QUIT</button>
                        <h4 class="modal-title">Add Record</h4>
                    </div>
                    <div class="modal-body">
                        <div class="col-md-12">
                            <div class="card">
								<div class="row page-titles">
									<div class="col-md-12 align-self-center text-center">
										<h4 class="theme-cl">RADIOLOGY REQUEST FORM</h4>
									</div>
								</div>
								<div class="align-self-center text-center">
									<p id="demo"></p>
									<script>
                                        var d = new Date();
                                        document.getElementById("demo").innerHTML = d;
									</script>
								</div>
								<div class="container-fluid">
									<form action="{{route('radiologyrequestform_post',['patient_id'=>$patient_id])}}" method="post" >{!! csrf_field() !!}
										<br>
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
									<br>
										<table class=" table table-bordered">
											<thead>
												<tr>

												</tr>
											</thead>
											<tbody>
												<tr>
													<td>WD/CLINIC/PVT:<input type="text" name="wd_clinic_pvt" class="form-control" placeholder=""></td>
													<td>PT.TEL.No.<input type="number" name="pt_tel_no" class="form-control" placeholder=""></td>
												</tr>
											</tbody>
										</table>
										<table class="table table-bordered">
											<thead>
												<tr>
													<th>Appointment Date:<input type="date" name="appointment_date" class="form-control" placeholder=""></th>
													<th>Time:<input type="time" name="time" class="form-control" placeholder=""></th>
													<th>Portable:<input type="text" name="portable" class="form-control" placeholder=""></th>
													<th>X-RAY No:<input type="number" name="xray_no" class="form-control" placeholder=""></th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td >INT No.<input type="number" name="int_no" class="form-control" placeholder=""></td>
													<td>Charges<input type="number" name="charges" class="form-control" placeholder=""></td>
													<td>INVOICE NUMBER:<input type="number" name="invoice_no" class="form-control" placeholder=""></td>
													<td>RECEIPT/ C/S.No<input type="number" name="receipt_no" class="form-control" placeholder=""></td>
													<td>NHIF NO.<input type="number" name="nhif_no" class="form-control" placeholder=""></td>
												</tr>
												<tr>
													<td colspan="5">Brief Clinical Summary:<textarea type="text" name="brief_clinical_summary" class="form-control" placeholder=""></textarea></td>
												</tr>
												<tr>
													<td colspan="2">Date of LMP<input type="date" name="date_of_lmp" class="form-control" placeholder=""></td>
												</tr>
											</tbody>
										</table>
										<h3>Type of Investigation Requested:</h3>
										<table class="table table-bordered">
											<thead>
												<tr>
													<th></th>
													<th>Tick</th>
													<th>Type of Investigation</th>
													<th>Specification</th>
													<th>Charge</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>1</td>
													<td><input type="checkbox" name="1" class="form-control" placeholder="" value="True"></td>
													<td>General radiography</td>
													<td><input type="text" name="1_specification" class="form-control" placeholder=""></td>
													<td><input type="number" name="1_charge" class="form-control" placeholder=""></td>
												</tr>
												<tr>
													<td>2</td>
													<td><input type="checkbox" name="2" class="form-control" placeholder="" value="True"></td>
													<td>Computerized Tomography(CT scan)</td>
													<td><input type="text" name="2_specification" class="form-control" placeholder=""></td>
													<td><input type="number" name="2_charge" class="form-control" placeholder=""></td>
												</tr>
												<tr>
													<td>3</td>
													<td><input type="checkbox" name="3" class="form-control" placeholder="" value="True"></td>
													<td>Magnetic Resonance Imaging(MRI scan)</td>
													<td><input type="text" name="3_specification" class="form-control" placeholder=""></td>
													<td><input type="number" name="3_charge" class="form-control" placeholder=""></td>
												</tr>
												<tr>
													<td>4</td>
													<td><input type="checkbox" name="4" class="form-control" placeholder="" value="True"></td>
													<td>Ultrasound(U/S)</td>
													<td><input type="text" name="4_specification" class="form-control" placeholder=""></td>
													<td><input type="number" name="4_charge" class="form-control" placeholder=""></td>
												</tr>
												<tr>
													<td>5</td>
													<td><input type="checkbox" name="5" class="form-control" placeholder="" value="True"></td>
													<td>Fluoroscopy</td>
													<td><input type="text" name="5_specification" class="form-control" placeholder=""></td>
													<td><input type="number" name="5_charge" class="form-control" placeholder=""></td>
												</tr>
												<tr>
													<td>6</td>
													<td><input type="checkbox" name="6" class="form-control" placeholder="" value="True"></td>
													<td>Interventional Radiology</td>
													<td><input type="text" name="6_specification" class="form-control" placeholder=""></td>
													<td><input type="number" name="6_charge" class="form-control" placeholder=""></td>
												</tr>
												<tr>
													<td>7</td>
													<td><input type="checkbox" name="7" class="form-control" placeholder="" value="True"></td>
													<td>Mammography</td>
													<td><input type="text" name="7_specification" class="form-control" placeholder=""></td>
													<td><input type="number" name="7_charge" class="form-control" placeholder=""></td>
												</tr>
												<tr>
													<td>8</td>
													<td><input type="checkbox" name="8" class="form-control" placeholder="" value="True"></td>
													<td>Others:(Specify)<input type="text" name="8_name" class="form-control" placeholder=""></td>
													<td><input type="text" name="8_specification" class="form-control" placeholder=""></td>
													<td><input type="number" name="8_charge" class="form-control" placeholder=""></td>
												</tr>
											</tbody>
										</table>
										<div class="row">
											<div class="form-group row col-md-6">
												<label for="staticEmail" class="col-sm-6 col-form-label">Requested by:<br>Doctor's Name</label>
												<div class="col-sm-10">
													<input type="text" name="doctor_name" class=" form-control" placeholder="">
												</div>
											</div>
											<div class="form-group row col-md-6">
												<label for="staticEmail" class="col-sm-6 col-form-label"><br>Signature</label>
												<div class="col-sm-10">
													<input type="text" name="signature" class=" form-control" placeholder="">
												</div>
											</div>
											<div class="form-group row col-md-6">
												<label for="staticEmail" class="col-sm-2 col-form-label">Date</label>
												<div class="col-sm-10">
													<input type="date" name="date" class=" form-control" placeholder="">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-4">Requesting Doctor's Tel. No.:</div>
											<div class="col-md-6">
												<input type="number" name="req_doc_tel_no" class=" form-control" placeholder="">
											</div>
										</div>
										<h5>INSTRUCTIONS</h5>
										<p>
											1.Patients to avail previous Scans/X-Ray films during the procedure.<br>
											2.Pelvic Ultra Sound and early Obsterics patients to have full bladder by taking(4-6) glasses of water 30 minutes before the procedure.<br>
											3.Barium Meal /Abdominal Ultra Sound Scan /CT Scan the patients should starve for 6 hours before examination.<br>
											4.Preparation for other specific examinations will be advised on booking the exam<br>
											For official use:<br><br>
										</p>
										<div class="row">
											<div class="form-group row col-md-6">
												<label for="staticEmail" class="col-sm-6 col-form-label">Radiographer Name</label>
												<div class="col-sm-10">
												  <input type="text" name="radiographer_name" class=" form-control" placeholder="">
												</div>
											 </div>
											<div class="form-group row col-md-6">
												<label for="staticEmail" class="col-sm-6 col-form-label">Signature</label>
												<div class="col-sm-10">
												  <input type="text" name="signature_radiographer" class=" form-control" placeholder="">
												</div>
											</div>
											<div class="form-group row col-md-6">
												<label for="staticEmail" class="col-sm-2 col-form-label">Date</label>
												<div class="col-sm-10">
													<input type="date" name="date_radiographer" class=" form-control" placeholder="">
												</div>
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
            </div>
        </div>
</div>
@endsection
