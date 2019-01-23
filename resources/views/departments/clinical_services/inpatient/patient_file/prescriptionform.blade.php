@extends('layouts.master')
@section('content')

	@include('departments.clinical_services.inpatient.patient_file.patient_bio_information')

	<!-- Title &Breadcrumbs-->

<div class="page-titles">
	<div class="col-md-12 align-self-center">
		<h4 class="theme-cl">Prescription Form for {{ $patient->name }}</h4>
	</div>
</div>
<!-- Title & Breadcrumbs-->

<div class="row">
	<div class="col-sm-12 col-md-12">
		<div class="card">
			<div class="card-header">
				<h4>Prescription Form</h4>
			</div>
			<div class="card-body">
				<div class="table-responsive">
					<table id="datatable" class="table table-striped table-bordered table-responsive">
						<thead>
						<tr>

							<th>WARD</th>
							<th>BED NUMBER</th>
							<th>SEX</th>
							<th>DATE</th>
							<th>PATIENT NAME</th>
							<th>CELL</th>
							<th>LOCATION</th>
							<th>OTHER NAMES</th>
							<th>SEX</th>
							<th>ALLERGIES</th>
							<th>AGE</th>
							<th>WEIGHT</th>
							<th>REPORT</th>
							<th>SUBSTITUTE</th>
							<th>DO NOT SUBSTITUTE</th>
							<th>DOCTOR'S NAME</th>
							<th>TIME</th>
							<th>SIGNATURE</th>
							<th>BRANCH</th>
						</tr>
						</thead>
						<tbody>
						@if(isset($prescriptionform_results))
							@foreach($prescriptionform_results as $prescriptionform_result)
								<tr>

									<td>{{ $prescriptionform_result->bio_ward}}</td>
									<td>{{ $prescriptionform_result->bio_bed_number}}</td>
									<td>{{ $prescriptionform_result->bio_sex}}</td>
									<td>{{ $prescriptionform_result->date}}</td>
									<td>{{ $prescriptionform_result->patient}}</td>
									<td>{{ $prescriptionform_result->cell}}</td>
									<td>{{ $prescriptionform_result->location}}</td>
									<td>{{ $prescriptionform_result->other_names}}</td>
									<td>{{ $prescriptionform_result->sex}}</td>
									<td>{{ $prescriptionform_result->allergies}}</td>
									<td>{{ $prescriptionform_result->age}}</td>
									<td>{{ $prescriptionform_result->weight}}</td>
									<td>{{ $prescriptionform_result->report}}</td>
									<td>{{ $prescriptionform_result->substitute}}</td>
									<td>{{ $prescriptionform_result->dont_substitute}}</td>
									<td>{{ $prescriptionform_result->doctors_name}}</td>
									<td>{{ $prescriptionform_result->time}}</td>
									<td>{{ $prescriptionform_result->signature}}</td>
									<td>{{ $prescriptionform_result->branch}}</td>
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
							<h4 class="modal-title">Add Prescription record</h4>
						</div>
						<div class="modal-body">

							<div class="col-md-12">
								<div class="card">
									<div class="container">
										<form action="{{route('prescription_form_post' , ['patient_id'=>$patient_id])}}" method="post" >{!! csrf_field() !!}
											<div class="">
												<div class="offset-md-6">

													<div class="row">
														<div class="col-md-3">
															<p>DATE:</p>
														</div>
														<div class="col-md-9">
															<input type="date"  id="myDate" name="bio_date"  readonly class="form-control" placeholder="click to enter date">
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
											</div>
											<div class="col-m-3 offset-md-2">
												<H3 class="mt-20 ">
													PRESCRIPTION FORM
												</H3>
											</div>
											<br><br>
											<div class="row">
												<div class="col-md-9">
													<label for="staticEmail" class="col-sm-3 col-form-label">DATE:</label>
													<div class="col-sm-12">
														<input type="date"  id="myDate1" name="date"  readonly class="form-control" placeholder="">
													</div>
												</div>
											</div>

											<div class="row">
												<div class="col-md-11">
													<label for="staticEmail" class="col-sm-3 col-form-label ">OTHER NAMES:</label>
													<div class="col-sm-12">
														<input type="name" name="other_names" class="form-control" placeholder="">
													</div>
												</div>
											</div>

											<div class="row ">
												<div class="col-md-11">
													<label for="staticEmail" class="col-sm-3 col-form-label ">ALLERGIES:</label>
													<div class="col-sm-12">
														<input type="text" name="allergies" class="form-control" placeholder="">
													</div>
												</div>
											</div>

											<div class="row ">
												<div class="col-md-11">
													<label for="staticEmail" class="col-sm-3 col-form-label">WEIGHT:</label>
													<div class="col-sm-12">
														<input type="number" name="weight" class="form-control" placeholder="">
													</div>
												</div>
											</div>
											<div class="row ">
												<div class="col-md-11">
													<label for="staticEmail" class="col-sm-3 col-form-label">REPORT:</label>
													<div class="col-sm-12">
														<textarea  rows="4" cols="20"name="report" class="form-control" id="" ></textarea>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-11">
													<label for="inputPassword" class="col-sm-3 col-form-label">Substitute If Not Available</label>
													<div class="col-sm-12">
														<input type="text" name="substitute" class="form-control" id="inputPassword" placeholder="">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-11">
													<label for="inputPassword" class="col-sm-3 col-form-label">Do Not Substitute:</label>
													<div class="col-sm-12">
														<input type="text" name="dont_substitute" class="form-control" id="inputPassword" placeholder=":">
													</div>
												</div>
											</div>
											<div class="row ">
												<div class="col-md-11">
													<label for="staticEmail" class="col-sm-3 col-form-label">DOCTOR'S NAME:</label>
													<div class="col-sm-12">
														<input type="name" name="doctors_name" class="form-control" placeholder="" value="{{Auth::user()->name}}">
													</div>
												</div>
											</div>
											<div class="row ">
												<div class="col-md-11">
													<label for="staticEmail" class="col-sm-3 col-form-label ">TIME:</label>
													<div class="col-sm-12">
														<input type="time" name="time" class="form-control" placeholder="">
													</div>
												</div>
											</div>
											<div class="row ">
												<div class="col-md-11">
													<div class="form-group row ">
														<label for="staticEmail" class="col-sm-3 col-form-label ">SIGNATURE:</label>
														<div class="col-sm-12">
															<input type="text" name="signature" class="form-control" placeholder="" value="{{Auth::user()->id_number}}" readonly>
														</div>
													</div>
												</div>
											</div>
											<div class="row ">
												<div class="col-md-11">
													<label for="staticEmail" class="col-sm-3 col-form-label">BRANCH:</label>
													<div class="col-sm-12">
														<input type="text" name="branch" class="form-control" placeholder="">
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
