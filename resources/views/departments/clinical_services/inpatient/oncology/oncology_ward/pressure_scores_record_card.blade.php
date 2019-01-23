@extends('layouts.master')

@section('content')
<div class="row page-titles">
	<div class="col-md-12 align-self-center text-center">
		<h4 class="theme-cl">PRESSURE SORE PREVENTION SCORE CARD</h4>
	</div>
</div>
<div class="col-md-12">
    <div class="card">
    	<div class="container-fluid">
			<div class="card-body">
				<div class="">
					<table class="table table-responsive table-bordered table-striped" id="datatable">
						<thead>
							<tr>
								<th>Patient Name</th>
								<th>Ip/No</th>
								<th>Ward</th>
								<th>Sex</th>
								<th>Date of Admission</th>
								<th>Date of Discharge</th>
								<th>Dates</th>
								<th>Score</th>
								<th>Build</th>
								<th>Average</th>
								<th>Above Average</th>
								<th>Obese</th>
								<th>Below Average</th>
								<th>Healthy</th>
								<th>Soft</th>
								<th>Dry</th>
								<th>Oedematons</th>
								<th>Cold and Clammy</th>
								<th>Discoloured</th>
								<th>Sore</th>
								<th>Broken Skin</th>
								<th>14-44</th>
								<th>45-64</th>
								<th>64+</th>
								<th>Complete Catheterised</th>
								<th>Occasional Incontenence</th>
								<th>Catheterised Incontenense</th>
								<th>Average</th>
								<th>Poor</th>
								<th>Ng-tube</th>
								<th>Nbm</th>
								<th>Fully</th>
								<th>Restless</th>
								<th>Restricted</th>
								<th>Inert</th>
								<th>Chairbound</th>
								<th>Terminal Illness</th>
								<th>Cardiac Failure</th>
								<th>Peripheral Vascular</th>
								<th>Anaemia</th>
								<th>Smoking</th>
								<th>Motoe</th>
								<th>Diabetes Ms</th>
								<th>Steroids</th>
								<th>High Dose</th>
								<th>Departments</th>
							</tr>
						</thead>
						<tbody>
						@if(isset($pressure_score_card_results))
							@foreach($pressure_score_card_results as $pressure_score_card_result)
								<tr>
									<td>{{ $pressure_score_card_result->patient_name }}</td>
									<td>{{ $pressure_score_card_result->ip_no }}</td>
									<td>{{ $pressure_score_card_result->ward }}</td>
									<td>{{ $pressure_score_card_result->sex }}</td>
									<td>{{ $pressure_score_card_result->date_of_administration }}</td>
									<td>{{ $pressure_score_card_result->date_of_discharge }}</td>
									<td>{{ $pressure_score_card_result->dates }}</td>
									<td>{{ $pressure_score_card_result->average }}</td>
									<td>{{ $pressure_score_card_result->above_average }}</td>
									<td>{{ $pressure_score_card_result->obese }}</td>
									<td>{{ $pressure_score_card_result->below_average }}</td>
									<td>{{ $pressure_score_card_result->healthy }}</td>
									<td>{{ $pressure_score_card_result->soft }}</td>
									<td>{{ $pressure_score_card_result->dry }}</td>
									<td>{{ $pressure_score_card_result->oedematons }}</td>
									<td>{{ $pressure_score_card_result->cold_and_clammy }}</td>
									<td>{{ $pressure_score_card_result->discoloured }}</td>
									<td>{{ $pressure_score_card_result->sore }}</td>
									<td>{{ $pressure_score_card_result->broken_skin }}</td>
									<td>{{ $pressure_score_card_result->fourteen_to_forty_four }}</td>
									<td>{{ $pressure_score_card_result->forty_five_to_sixty_three }}</td>
									<td>{{ $pressure_score_card_result->sixty_four_plus}}</td>
									<td>{{ $pressure_score_card_result->complete_catheterised }}</td>
									<td>{{ $pressure_score_card_result->occasional_incontenence }}</td>
									<td>{{ $pressure_score_card_result->catheterised_incontenense }}</td>
									<td>{{ $pressure_score_card_result->doubly_incontenense }}</td>
									<td>{{ $pressure_score_card_result->average2 }}</td>
									<td>{{ $pressure_score_card_result->poor }}</td>
									<td>{{ $pressure_score_card_result->ng_tube }}</td>
									<td>{{ $pressure_score_card_result->nbm }}</td>
									<td>{{ $pressure_score_card_result->fully }}</td>
									<td>{{ $pressure_score_card_result->restless }}</td>
									<td>{{ $pressure_score_card_result->restricted }}</td>
									<td>{{ $pressure_score_card_result->inert }}</td>
									<td>{{ $pressure_score_card_result->chairbound }}</td>
									<td>{{ $pressure_score_card_result->terminal_illness }}</td>
									<td>{{ $pressure_score_card_result->cardiac_failure }}</td>
									<td>{{ $pressure_score_card_result->peripheral_vascular }}</td>
									<td>{{ $pressure_score_card_result->anaemia }}</td>
									<td>{{ $pressure_score_card_result->smoking }}</td>
									<td>{{ $pressure_score_card_result->motoe }}</td>
									<td>{{ $pressure_score_card_result->diabetes_ms }}</td>
									<td>{{ $pressure_score_card_result->steroids }}</td>
									<td>{{ $pressure_score_card_result->high_dose }}</td>
									<td>{{ $pressure_score_card_result->departments }}</td>
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
							<h4 class="modal-title">Add more Items</h4>
						</div>
						<div class="modal-body">
							<div class="col-md-12">
								<div class="card">
									<div class="row page-titles">
										<div class="col-md-12 align-self-center text-center">
											<h4 class="theme-cl">PRESSURE SORE PREVENTION SCORE CARD</h4>
										</div>
									</div>
									<div class="col-md-12">
										<div class="card">
											<div class="container-fluid">
												<form action="{{route('pressure_score_card_post')}}" method="post" >{!! csrf_field() !!}
													<div class="row">
														<div class="form-group row col-md-6">
															<label for="staticEmail" class="col-sm-6 col-form-label">PATIENT'S NAME</label>
															<div class="col-sm-10">
																<input type="text" name="patient_name" class=" form-control" placeholder="">
															</div>
														</div>
														<div class="form-group row col-md-6">
															<label for="staticEmail" class="col-sm-2 col-form-label">IP/NO</label>
															<div class="col-sm-10">
																<input type="number" name="ip_no" class=" form-control" placeholder="">
															</div>
														</div>
														<div class="form-group row col-md-6">
															<label for="staticEmail" class="col-sm-2 col-form-label">WARD</label>
															<div class="col-sm-10">
																<input type="text" name="ward" class=" form-control" placeholder="">
															</div>
														</div>
														<div class="form-group row col-md-6">
															<label for="staticEmail" class="col-sm-7 col-form-label">DATE OF ADMISSION</label>
															<div class="col-sm-10">
																<input type="date" name="date_of_administration" class=" form-control" placeholder="">
															</div>
														</div>
													</div>

													<div class="row">
														<div class="form-group row col-md-6">
															<label for="staticEmail" class="col-sm-2 col-form-label">SEX</label>
															<div class="col-sm-10">
																<select name="sex" >
																	<option value="Male">Male</option>
																	<option value="Female">Female</option>
																</select>
															</div>
														</div>
														<div class="form-group row col-md-6">
															<label for="staticEmail" class="col-sm-8 col-form-label">DATE OF DISCHARGE</label>
															<div class="col-sm-10">
																<input type="date" name="date_of_discharge" class=" form-control" placeholder="">
															</div>
														</div>
													</div>

													<table class="table-responsive table-bordered">
														<thead>
															<tr>
																<th colspan="2"></th>
																<th colspan="1">DATE</th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<th>BUILD(Weight for height)</th>
																<th>SCORE</th>
																<td><input type="date" name="dates" class="form-control" placeholder=""></td>
															</tr>
															<tr>
																<td>Average</td>
																<td>0</td>
																<td><input type="checkbox" name="average" class="form-control" placeholder="" value="True"></td>
															</tr>
															<tr>
																<td>Above average</td>
																<td>1</td>
																<td><input type="checkbox" name="above_average" class=" form-control" placeholder="" value="True"></td>
															</tr>
															<tr>
																<td>Obese</td>
																<td>2</td>
																<td><input type="checkbox" name="obese" class=" form-control" placeholder="" value="True"></td>
															</tr>
															<tr>
																<td>Below Average</td>
																<td>4</td>
																<td><input type="checkbox" name="below_average" class=" form-control" placeholder="" value="True"></td>
															</tr>
															<tr>
																<th colspan="3">SKIN TYPE(In Risk areas)</th>
															</tr>
															<tr>
																<td>HEALTHY</td>
																<td>0</td>
																<td><input type="checkbox" name="healthy" class=" form-control" placeholder="" value="True"></td>
															</tr>
															<tr>
																<td>Soft</td>
																<td>1</td>
																<td><input type="checkbox" name="soft" class=" form-control" placeholder="" value="True"></td>
															</tr>
															<tr>
																<td>Dry</td>
																<td>1</td>
																<td><input type="checkbox" name="dry" class=" form-control" placeholder="" value="True"></td>
															</tr>
															<tr>
																<td>Oedematous</td>
																<td>2</td>
																<td><input type="checkbox" name="oedematons" class=" form-control" placeholder="" value="True"></td>
															</tr>
															<tr>
																<td>Cold and clammy</td>
																<td>2</td>
																<td><input type="checkbox" name="cold_and_clammy" class=" form-control" placeholder="" value="True"></td>
															</tr>
															<tr>
																<td>Discoloured</td>
																<td>3</td>
																<td><input type="checkbox" name="discoloured" class=" form-control" placeholder="" value="True"></td>
															</tr>
															<tr>
																<td>Sore</td>
																<td>3</td>
																<td><input type="checkbox" name="sore" class=" form-control" placeholder="" value="True"></td>
															</tr>
															<tr>
																<td>Broken Skin</td>
																<td>8</td>
																<td><input type="checkbox" name="broken_skin" class=" form-control" placeholder="" value="True"></td>
															</tr>
															<tr>
																<th colspan="3">AGE</th>
															</tr>
															<tr>
																<td>14-44</td>
																<td>1</td>
																<td><input type="checkbox" name="fourteen_to_forty_four" class=" form-control" placeholder="" value="True"></td>
															</tr>
															<tr>
																<td>45-64</td>
																<td>2</td>
																<td><input type="checkbox" name="forty_five_to_sixty_three" class=" form-control" placeholder="" value="True"></td>
															</tr>
															<tr>
																<td>65+</td>
																<td>4</td>
																<td><input type="checkbox" name="sixty_four_plus" class=" form-control" placeholder="" value="True"></td>
															</tr>
															<tr>
																<th colspan="3">CONTINENCE</th>
															</tr>
															<tr>
																<td>Complete/catheterised</td>
																<td>0</td>
																<td><input type="checkbox" name="complete_catheterised" class=" form-control" placeholder="" value="True"></td>
															</tr>
															<tr>
																<td>Occasional incontinence</td>
																<td>1</td>
																<td><input type="checkbox" name="occasional_incontenence" class=" form-control" placeholder="" value="True"></td>
															</tr>
															<tr>
																<td>Catheterised/incontinence of feaces</td>
																<td>2</td>
																<td><input type="checkbox" name="catheterised_incontenense" class=" form-control" placeholder="" value="True"></td>
															</tr>
															<tr>
																<td>Doubly incontinence</td>
																<td>3</td>
																<td><input type="checkbox" name="doubly_incontenense" class=" form-control" placeholder="" value="True"></td>
															</tr>
															<tr>
																<th colspan="3">APPETITE</th>
															</tr>
															<tr>
																<td>Average</td>
																<td>0</td>
																<td><input type="checkbox" name="average2" class=" form-control" placeholder="" value="True"></td>
															</tr>
															<tr>
																<td>Poor</td>
																<td>2</td>
																<td><input type="checkbox" name="poor" class=" form-control" placeholder="" value="True"></td>
															</tr>
															<tr>
																<td>NG Tube/TPN</td>
																<td>2</td>
																<td><input type="checkbox" name="ng_tube" class=" form-control" placeholder="" value="True"></td>
															</tr>
															<tr>
																<td>NBM/Anorexic/Fluid only</td>
																<td>4</td>
																<td><input type="checkbox" name="nbm" class=" form-control" placeholder="" value="True"></td>
															</tr>
															<tr>
																<th colspan="3">MOBILITY</th>
															</tr>
															<tr>
																<td>Fully</td>
																<td>0</td>
																<td><input type="checkbox" name="fully" class=" form-control" placeholder="" value="True"></td>
															</tr>
															<tr>
																<td>Restless/Fidgety</td>
																<td>1</td>
																<td><input type="checkbox" name="restless" class=" form-control" placeholder="" value="True"></td>
															</tr>
															<tr>
																<td>Restricted</td>
																<td>3</td>
																<td><input type="checkbox" name="restricted" class=" form-control" placeholder="" value="True"></td>
															</tr>
															<tr>
																<td>Inert/Traction/Post-Op</td>
																<td>4</td>
																<td><input type="checkbox" name="inert" class=" form-control" placeholder="" value="True"></td>
															</tr>
															<tr>
																<td>Chairbound</td>
																<td>5</td>
																<td><input type="checkbox" name="chairbound" class=" form-control" placeholder="" value="True"></td>
															</tr>
															<tr>
																<th colspan="3">SPECIAL RISKS</th>
															</tr>
															<tr>
																<td>Terminal Illness</td>
																<td>8</td>
																<td><input type="checkbox" name="terminal_illness" class=" form-control" placeholder="" value="True"></td>
															</tr>
															<tr>
																<td>Cardiac Failure</td>
																<td>5</td>
																<td><input type="checkbox" name="cardiac_failure" class=" form-control" placeholder="" value="True"></td>
															</tr>
															<tr>
																<td>Peripheral Vascular Diseases</td>
																<td>5</td>
																<td><input type="checkbox" name="peripheral_vascular" class=" form-control" placeholder="" value="True"></td>>
															</tr>
															<tr>
																<td>Anaemia</td>
																<td>2</td>
																<td><input type="checkbox" name="anaemia" class=" form-control" placeholder="" value="True"></td>
															</tr>
															<tr>
																<td>Smoking</td>
																<td>1</td>
																<td><input type="checkbox" name="smoking" class=" form-control" placeholder="" value="True"></td>
															</tr>
															<tr>
																<th colspan="3">Neurological deficit:</th>
															</tr>
															<tr>
																<td>Motoe/Sensory,Paraplegia,Tetraplegia,Quadriplegia</td>
																<td>5</td>
																<td><input type="checkbox" name="motoe" class=" form-control" placeholder="" value="True"></td>
															</tr>
															<tr>
																<td>Diabetes ,MS,CVA</td>
																<td>5</td>
																<td><input type="checkbox" name="diabetes_ms" class=" form-control" placeholder="" value="True"></td>
															</tr>
															<tr>
																<th colspan="3">MEDICATION</th>
															</tr>
															<tr>
																<td>Steroids/Cytotoxics/Anticoagulants</td>
																<td>4</td>
																<td><input type="checkbox" name="steroids" class=" form-control" placeholder="" value="True"></td>
															</tr>
															<tr>
																<td>High Dose Anti-inflammatory drugs</td>
																<td>2</td>
																<td><input type="checkbox" name="high_dose" class=" form-control" placeholder="" value="True"></td>
															</tr>
														</tbody>
													</table>
													<input name="departments" type="hidden" value="{{Route::currentRouteName() }}">
													<table class="table-bordered">
														<tbody>
															<tr>
																<td>10+&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;AT RISK<br>
																	15+&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;&nbsp;HIGH RISK<br>
																	20+&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;&nbsp;VERY HIGH RISK</td>
															</tr>
														</tbody>
													</table>
													<h5>NB:&nbsp;&nbsp;&nbsp;Several score per category can be used.</h5>
													<br><br>
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
		</div>
    </div>
</div>
@endsection