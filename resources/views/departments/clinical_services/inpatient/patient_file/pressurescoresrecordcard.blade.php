@extends('layouts.master')

@section('content')
	@include('departments.clinical_services.inpatient.patient_file.patient_bio_information')
	<div class="page-titles">
		<div class="col-md-12 align-self-center text-center">
			<h4 class="theme-cl">PRESSURE SCORE PREVENTION SCORE CARD</h4>
		</div>
	</div>
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<h4>Pressure Score Prevention Card</h4>
			</div>
			<div class="container-fluid">
				<div class="card-body">
					<div class="">
						<table class="table table-responsive table-bordered table-striped" id="datatable">
							<thead>
							<tr>
								<th>Print Record</th>
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
								@php
									$i=0
								@endphp
								@foreach($pressure_score_card_results as $pressure_score_card_result)
									@php
										$i++;
									@endphp
									<tr>
										<td>
											<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{$i}}">Print Record</button>
										</td>
										<td>{{ $pressure_score_card_result->dateofadmission }}</td>
										<td>{{ $pressure_score_card_result->dateofdischarge }}</td>
										<td>{{ $pressure_score_card_result->scorea }}</td>
										<td>{{ $pressure_score_card_result->average }}</td>
										<td>{{ $pressure_score_card_result->aboveaverage }}</td>
										<td>{{ $pressure_score_card_result->obese }}</td>
										<td>{{ $pressure_score_card_result->belowaverage }}</td>
										<td>{{ $pressure_score_card_result->healthy }}</td>
										<td>{{ $pressure_score_card_result->soft }}</td>
										<td>{{ $pressure_score_card_result->dry }}</td>
										<td>{{ $pressure_score_card_result->oedematous }}</td>
										<td>{{ $pressure_score_card_result->coldandclammy }}</td>
										<td>{{ $pressure_score_card_result->discoloured }}</td>
										<td>{{ $pressure_score_card_result->score }}</td>
										<td>{{ $pressure_score_card_result->brokenskin }}</td>
										<td>{{ $pressure_score_card_result->fourteenfortyfour }}</td>
										<td>{{ $pressure_score_card_result->ffsf }}</td>
										<td>{{ $pressure_score_card_result->sixtyfive }}</td>
										<td>{{ $pressure_score_card_result->completecatheterised }}</td>
										<td>{{ $pressure_score_card_result->occasionalincontinence }}</td>
										<td>{{ $pressure_score_card_result->catheterised }}</td>
										<td>{{ $pressure_score_card_result->doublyincontinence }}</td>
										<td>{{ $pressure_score_card_result->averageb }}</td>
										<td>{{ $pressure_score_card_result->poor }}</td>
										<td>{{ $pressure_score_card_result->ngtubetpn }}</td>
										<td>{{ $pressure_score_card_result->nbmanorexic }}</td>
										<td>{{ $pressure_score_card_result->fully }}</td>
										<td>{{ $pressure_score_card_result->restlessfidgety }}</td>
										<td>{{ $pressure_score_card_result->restricted }}</td>
										<td>{{ $pressure_score_card_result->inerttractionpostop }}</td>
										<td>{{ $pressure_score_card_result->chairbound }}</td>
										<td>{{ $pressure_score_card_result->terminalillness }}</td>
										<td>{{ $pressure_score_card_result->cardiacfailure }}</td>
										<td>{{ $pressure_score_card_result->PeripheralVascularDisease }}</td>
										<td>{{ $pressure_score_card_result->anaemia }}</td>
										<td>{{ $pressure_score_card_result->smoking }}</td>
										<td>{{ $pressure_score_card_result->motoesensoryparaplegia }}</td>
										<td>{{ $pressure_score_card_result->diabetesmscva }}</td>
										<td>{{ $pressure_score_card_result->steroidscytotoxics }}</td>
										<td>{{ $pressure_score_card_result->antiinflamatorydrugs }}</td>
										<td>{{ $pressure_score_card_result->totalscore }}</td>
										<div class="modal fade" id="exampleModal{{$i}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
											<div class="modal-dialog" role="document">
												<div class="modal-content">
													<div class="modal-header">
														<h5 class="modal-title" id="exampleModalLabel">Pressure Scores Record Card</h5>
														<button type="button" class="close" data-dismiss="modal" aria-label="Close">
															<span aria-hidden="true">&times;</span>
														</button>
													</div>
													<div class="modal-body">
														<div id="printableArea{{$i}}">
															<h2>PATIENT RECORD</h2>
															<p><b>Patient Name : </b> {{$patient->name}}</p>
															<p><b>Date of Admission : </b>{{ $pressure_score_card_result->dateofadmission }}</p>
															<p><b>Date of Discharge : </b>{{ $pressure_score_card_result->dateofdischarge }}</p>
															<p><b>Score A : </b>{{ $pressure_score_card_result->scorea }}</p>
															<p><b>Average? : </b>{{ $pressure_score_card_result->average }}</p>
															<p><b>Above average? : </b>{{ $pressure_score_card_result->aboveaverage }}</p>
															<p><b>Obese? : </b>{{ $pressure_score_card_result->obese }}</p>
															<p><b>Below Average? : </b>{{ $pressure_score_card_result->belowaverage }}</p>
															<p><b>Healthy? : </b>{{ $pressure_score_card_result->healthy }}</p>
															<p><b>Soft? : </b>{{ $pressure_score_card_result->soft }}</p>
															<p><b>Dry? : </b>{{ $pressure_score_card_result->dry }}</p>
															<p><b>Oedematous? : </b>{{ $pressure_score_card_result->oedematous }}</p>
															<p><b>Cold and clammy? : </b>{{ $pressure_score_card_result->coldandclammy }}</p>
															<p><b>Discoloured? : </b>{{ $pressure_score_card_result->discoloured }}</p>
															<p><b>Score? : </b>{{ $pressure_score_card_result->score }}</p>
															<p><b>Broken Skin? : </b>{{ $pressure_score_card_result->brokenskin }}</p>
															<p><b>Fourteen Forty Four? : </b>{{ $pressure_score_card_result->fourteenfortyfour }}</p>
															<p><b>FFSF? : </b>{{ $pressure_score_card_result->ffsf }}</p>
															<p><b>Sixty Five? : </b>{{ $pressure_score_card_result->sixtyfive }}</p>
															<p><b>Complete Catheterised? : </b>{{ $pressure_score_card_result->completecatheterised }}</p>
															<p><b>Occasional Incontinence? : </b>{{ $pressure_score_card_result->occasionalincontinence }}</p>
															<p><b>Catheterised? : </b>{{ $pressure_score_card_result->catheterised }}</p>
															<p><b>Doubly Incontinence? : </b>{{ $pressure_score_card_result->doublyincontinence }}</p>
															<p><b>Average B? : </b>{{ $pressure_score_card_result->averageb }}</p>
															<p><b>Poor? : </b>{{ $pressure_score_card_result->poor }}</p>
															<p><b>Ng tube tpn? : </b>{{ $pressure_score_card_result->ngtubetpn }}</p>
															<p><b>Nbm anorexic? : </b>{{ $pressure_score_card_result->nbmanorexic }}</p>
															<p><b>Fully? : </b>{{ $pressure_score_card_result->fully }}</p>
															<p><b>Restless Fidgety? : </b>{{ $pressure_score_card_result->restlessfidgety }}</p>
															<p><b>Restricted? : </b>{{ $pressure_score_card_result->restricted }}</p>
															<p><b>Inert traction post op? : </b>{{ $pressure_score_card_result->inerttractionpostop }}</p>
															<p><b>Chair bound? : </b>{{ $pressure_score_card_result->chairbound }}</p>
															<p><b>Terminal illness? : </b>{{ $pressure_score_card_result->terminalillness }}</p>
															<p><b>Cardiac Failure? : </b>{{ $pressure_score_card_result->cardiacfailure }}</p>
															<p><b>PeripheralVascularDisease? : </b>{{ $pressure_score_card_result->PeripheralVascularDisease }}</p>
															<p><b>Anaemia? : </b>{{ $pressure_score_card_result->anaemia }}</p>
															<p><b>Smoking? : </b>{{ $pressure_score_card_result->smoking }}</p>
															<p><b>Motor Sensory Paraplegia? : </b>{{ $pressure_score_card_result->motoesensoryparaplegia }}</p>
															<p><b>Diabetes mscva? : </b>{{ $pressure_score_card_result->diabetesmscva }}</p>
															<p><b>Steroids Cytotoxics? : </b>{{ $pressure_score_card_result->steroidscytotoxics }}</p>
															<p><b>Anti Inflamatory Drugs? : </b>{{ $pressure_score_card_result->antiinflamatorydrugs }}</p>
															<p><b>Total Score? : </b>{{ $pressure_score_card_result->totalscore }}</p>
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

						<!— Modal content-->
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title">Add more Items</h4>
							</div>
							<div class="modal-body">
								<div class="col-md-12">
									<div class="card">
										<div class="page-titles">
											<div class="col-md-12 align-self-center text-center">
												<h4 class="theme-cl">PRESSURE SORE PREVENTION SCORE CARD</h4>
											</div>
										</div>
										<div class="col-md-12">
											<div class="card">
												<div class="container-fluid">
													<form action="{{route('pressure_score_card_post',['patient_id'=>$patient_id])}}" method="post" >{!! csrf_field() !!}
														<input name="administration_patient_informations_id" type="text" class="form-control d-none" value="{{$patient_id}}">
														<input name="institution_id" type="text" class="form-control d-none" value="{{ Auth::user()->institution->id }}">
														<input name="user_id" type="text" value="{{ Auth::user()->id }}" class="form-control d-none">
														<div class="row">


															<div class="row">

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
																	<td><input type="date" name="dates" id="myDate" class="form-control" readonly placeholder=""></td>
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