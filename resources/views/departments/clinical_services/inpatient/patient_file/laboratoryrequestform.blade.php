@extends('layouts.master')
@section('content')
	@include('departments.clinical_services.inpatient.patient_file.patient_bio_information')
    <!-- Title & Breadcrumbs-->
<div class="row page-titles">
	<div class="col-md-12 align-self-center">
		<h4 class="theme-cl">Laboratory Request Form</h4>
	</div>
</div>
<!-- Title & Breadcrumbs-->

<div class="row">
	<div class="col-sm-12 col-md-12">
		<div class="card">
			<div class="card-header">
				<h4>Laboratory Request Form</h4>
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
							<th>DATE</th>
							<th>CELL</th>
							<th>LOCATION</th>
							<th>WEIGHT</th>
							<th>CLINICAL NOTES</th>
							<th>REFFERING DOCTOR</th>
							<th>BRANCH</th>
							<th>SIGNATURE</th>
							<th>TECHNOLOGISTS</th>
							<th>TIME</th>
							<th>TIME OF SPECIMEN</th>
							<th>ACCOUNTS</th>
						</tr>
						</thead>
						<tbody>
						@if(isset($laboratoryrequestform_results))

							@php
								$i=0
							@endphp

							@foreach($laboratoryrequestform_results as $laboratoryrequestform_resultss)

								@php
									$i++;
								@endphp

								<tr>

									<td>
										<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{$i}}">PRINT VIEW</button>
									</td>

									<td>{{ $laboratoryrequestform_resultss->bio_date}}</td>
									<td>{{ $laboratoryrequestform_resultss->bio_ward}}</td>
									<td>{{ $laboratoryrequestform_resultss->bio_bed_number}}</td>
									<td>{{ $laboratoryrequestform_resultss->date}}</td>
									<td>{{ $laboratoryrequestform_resultss->cell}}</td>
									<td>{{ $laboratoryrequestform_resultss->location}}</td>
									<td>{{ $laboratoryrequestform_resultss->weight}}</td>
									<td>{{ $laboratoryrequestform_resultss->clinicalnotes}}</td>
									<td>{{ $laboratoryrequestform_resultss->refferingdoctor}}</td>
									<td>{{ $laboratoryrequestform_resultss->branch}}</td>
									<td>{{ $laboratoryrequestform_resultss->signature}}</td>
									<td>{{ $laboratoryrequestform_resultss->technologists}}</td>
									<td>{{ $laboratoryrequestform_resultss->time}}</td>
									<td>{{ $laboratoryrequestform_resultss->timeofspecimen}}</td>
									<td>{{ $laboratoryrequestform_resultss->accounts}}</td>
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

													<div class="col-m-3 offset-md-2">
														<H3 class="mt-20 ">
															LABORATORY REQUEST FORM
														</H3>
													</div>
													<div class="offset-md-6">
														<div class="row">
															<div class="col-md-6">
																<p>PATIENT NAME:</p>
															</div>
															<div class="col-md-6">
																{{$patient->name}}
															</div>
														</div>
														<div class="row">
															<div class="col-md-6">
																<p>DATE:</p>
															</div>
															<div class="col-md-6">
																{{ $laboratoryrequestform_resultss->bio_date}}
															</div>
														</div>
														<div class="row">
															<div class="col-md-6">
																<p>WARD:</p>
															</div>
															<div class="col-md-6">
																{{ $laboratoryrequestform_resultss->bio_ward}}
															</div>
														</div>
														<div class="row">
															<div class="col-md-6">
																<p>BED NUMBER:</p>
															</div>
															<div class="col-md-6">
																{{ $laboratoryrequestform_resultss->bio_bed_number}}
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-md-12">
															<label for="staticEmail" class="col-sm-3 col-form-label">DATE:</label>
																{{ $laboratoryrequestform_resultss->date}}
															</div>
													</div>
													<div class="row">
														<div class="col-md-12">
															<label for="inputPassword" class="col-sm-3 col-form-label">CELL:</label>
																{{ $laboratoryrequestform_resultss->cell}}
															</div>
													</div>
													<div class="row">
														<div class="col-md-12">
															<label for="inputPassword" class="col-sm-3 col-form-label">LOCATION:</label>
																{{ $laboratoryrequestform_resultss->location}}
															</div>
													</div>
													<div class="row ">
														<div class="col-md-12">
															<label for="staticEmail" class="col-sm-3 col-form-label">WEIGHT:</label>
																{{ $laboratoryrequestform_resultss->weight}}
															</div>
													</div>
													<div class="row">
														<div class="col-md-12">
															<label for="inputPassword" class="col-sm-8 col-form-label">CLINICAL INFORMATION:</label>
																{{ $laboratoryrequestform_resultss->clinicalnotes}}
															</div>
													</div>
													<div class="row">
														<div class="col-md-12">
															<label for="inputPassword" class="col-sm-8 col-form-label">REFERRING DOCTOR:</label>
																{{ $laboratoryrequestform_resultss->refferingdoctor}}
															</div>
													</div>
													<div class="row ">
														<div class="col-md-12">
															<label for="staticEmail" class="col-sm-3 col-form-label">BRANCH:</label>
																{{ $laboratoryrequestform_resultss->branch}}
															</div>
													</div>
													<div class="row">
														<div class="col-md-12">
															<label for="inputPassword" class=" col-form-label">SIGNATURE</label>
																{{ $laboratoryrequestform_resultss->signature}}
															</div>
													</div>
													<div class="row">
														<div class="col-md-12">
															<label for="inputPassword" class="col-sm-8 col-form-label">TECHNOLOGISTS:</label>
																{{ $laboratoryrequestform_resultss->technologists}}
															</div>
													</div>
													<div class="row ">
														<div class="col-md-12">
															<label for="staticEmail" class="col-sm-3 col-form-label ">TIME:</label>
																{{ $laboratoryrequestform_resultss->time}}
															</div>
													</div>
													<div class="row">
														<div class="col-md-12">
															<label for="inputPassword" class="col-sm-8 col-form-label">TIME OF SPECIMEN COLLECTION:</label>
																{{ $laboratoryrequestform_resultss->timeofspecimen}}
															</div>
													</div>
													<div class="row">
														<div class="col-md-12">
															<label for="inputPa12word" class="col-sm-8 col-form-label">ACCOUNTS (PLEASE TICK):</label>
															<div class="col-sm-oup">
																	{{ $laboratoryrequestform_resultss->accounts}}
																</div>
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
										<form action="{{route('laboratoryrequestform_post',['patient_id'=>$patient_id])}}" method="post" >{!! csrf_field() !!}
												<div class="offset-md-6">
													<div class="row">
														<div class="col-md-8">
															<p>DATE:</p>
														</div>
														<div class="col-md-9">
															<input type="date"  id="myDate" name="bio_date"  readonly class="form-control" placeholder="click to enter date">
														</div>
													</div>
													<div class="row">
														<div class="col-md-8">
															<p>WARD:</p>
														</div>
														<div class="col-md-9">
															<input type="text" name="bio_ward" class="form-control" placeholder="click to enter ward number">
														</div>
													</div>
													<div class="row">
														<div class="col-md-8">
															<p>BED NUMBER:</p>
														</div>
														<div class="col-md-9">
															<input type="text" name="bio_bed_number" class="form-control" placeholder="click to enter bed number">
														</div>
													</div>
														<div class="row">
															<div class="col-md-8">
																<p></p>
															</div>
															<div class="col-md-9">
																<input name="administration_patient_informations_id" type="text" class="form-control d-none" value="{{$patient_id}}">
															</div>
														</div>
														<div class="row">
															<div class="col-md-8">
																<p></p>
															</div>
															<div class="col-md-9">
																<input name="institution_id" type="text" class="form-control d-none" value="{{ Auth::user()->institution->id }}">
															</div>
														</div>
														<div class="row">
															<div class="col-md-8">
																<p></p>
															</div>
															<div class="col-md-9">
																<input name="user_id" type="text" value="{{ Auth::user()->id }}" class="form-control d-none">
															</div>
														</div>
												</div>
											<div class="col-m-3 offset-md-2">
												<H3 class="mt-20 ">
													LABORATORY REQUEST FORM
												</H3>
											</div>
											<div class="row">
												<div class="col-md-9">
													<label for="staticEmail" class="col-sm-8 col-form-label">DATE:</label>
													<div class="col-sm-12">
														<input type="date"  id="myDate1" name="date" readonly  class="form-control" placeholder="">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-11">
													<label for="inputPassword" class="col-sm-8 col-form-label">CELL:</label>
													<div class="col-sm-12">
														<input type="text" name="cell" class="form-control" id="inputPassword" placeholder="">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-11">
													<label for="inputPassword" class="col-sm-8 col-form-label">LOCATION:</label>
													<div class="col-sm-12">
														<input type="text" name="location" class="form-control" id="inputPassword" placeholder="">
													</div>
												</div>
											</div>
											<div class="row ">
												<div class="col-md-11">
													<label for="staticEmail" class="col-sm-8 col-form-label">WEIGHT:</label>
													<div class="col-sm-12">
														<input type="number" name="weight" class="form-control" placeholder="">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-11">
													<label for="inputPassword" class="col-sm-8 col-form-label">CLINICAL INFORMATION:</label>
													<div class="col-sm-12">
														<textarea  name="clinicalnotes" class="form-control" id="" ></textarea>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-11">
													<label for="inputPassword" class="col-sm-8 col-form-label">REFERRING DOCTOR:</label>
													<div class="col-sm-12">
														<input type="text" name="refferingdoctor" class="form-control" id="inputPassword" placeholder="">
													</div>
												</div>
											</div>
											<div class="row ">
												<div class="col-md-11">
													<label for="staticEmail" class="col-sm-8 col-form-label">BRANCH:</label>
													<div class="col-sm-12">
														<input type="text" name="branch" class="form-control" placeholder="">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-11">
													<label for="inputPassword" class="col-sm-8 col-form-label">SIGNATURE:</label>
													<div class="col-sm-8">
														<input type="password" name="signature" class="form-control" id="inputPassword" placeholder="">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-11">
													<label for="inputPassword" class="col-sm-8 col-form-label">TECHNOLOGISTS:</label>
													<div class="col-sm-12">
														<input type="text" name="technologists" class="form-control" id="inputPassword" placeholder="">
													</div>
												</div>
											</div>
											<div class="row ">
												<div class="col-md-11">
													<label for="staticEmail" class="col-sm-8 col-form-label ">TIME:</label>
													<div class="col-sm-12">
														<input type="time" name="time" class="form-control" placeholder="">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-11">
													<label for="inputPassword" class="col-sm-8 col-form-label">TIME OF SPECIMEN COLLECTION:</label>
													<div class="col-sm-12">
														<input type="time" name="timeofspecimen" class="form-control" id="inputPassword" placeholder="">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-11">
													<label for="inputPassword" class="col-sm-8 col-form-label">ACCOUNTS (PLEASE TICK):</label>
													<div class="col-sm-12">
														<div class="form-group">
															<div class="form-check form-check-inline  col-form-label">
																<input class="form-check-input" type="radio" name="accounts" id="inlineRadio1" value="Patient">
																<label class="form-check-label" for="inlineRadio1">Patient</label>
															</div>
															<div class="form-check form-check-inline  col-form-label">
																<input class="form-check-input" type="radio" name="accounts" id="inlineRadio2" value="Company">
																<label class="form-check-label" for="inlineRadio2">Company</label>
															</div>
															<div class="form-check form-check-inline  col-form-label">
																<input class="form-check-input" type="radio" name="accounts" id="inlineRadio2" value="Doctor">
																<label class="form-check-label" for="inlineRadio2">Doctor</label>
															</div>
														</div>
													</div>
												</div>
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
<!-- end container -->
@endsection






