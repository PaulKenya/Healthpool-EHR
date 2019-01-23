@extends('layouts.master')

@section('content')
<div class="card"> 
        <div class="card-header">
            <h4>pharmacy</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="datatable" class="table table-bordered">
                    <thead>
                    <tr>
                        <th>AGE</th>
                        <th>WARD</th>
                        <th>DOA</th>
                        <th>DOD</th>
                        <th>UNIT NO</th>
                        <th>DATE</th>
                        <th>ITEM DESCRIPTION</th>
                        <th>TOTAL RETURNED</th>
                        <th>UNIT PRICE</th>
                        <th>TOTAL COST</th>
                        <th>WARD WITHDRAWAL</th>
                        <th>SIGN/TITLE/WARD/PHARMACY</th>
                        <th>PHARMACY OFFICERS NAME</th>
                        <th>DESIGNATION</th>
                        <th>SIGN</th>
                        <th>WARD DEPT</th>
                        <th>NAME</th>
                        <th>SIGN</th>
                        

                    </tr>
                    </thead>
                    <tbody>

					@if(isset($pharmacy))
						@foreach($pharmacy as $pharmacy)
							<tr>
					<td>{{ $pharmacy->age}}</td>
					<td>{{ $pharmacy->ward}}</td>
					<td>{{ $pharmacy->doa}}</td>
					<td>{{ $pharmacy->dod}}</td>
					<td>{{ $pharmacy->unit_no}}</td>
					<td>{{ $pharmacy->date}}</td>
					<td>{{ $pharmacy->item_description}}</td>
					<td>{{ $pharmacy->total_returned}}</td>
					<td>{{ $pharmacy->unit_price}}</td>
					<td>{{ $pharmacy->total_cost}}</td>
					<td>{{ $pharmacy->ward_withdrawal}}</td>
					<td>{{ $pharmacy->sign_title_ward}}</td>
					<td>{{ $pharmacy->pharmacy_officers_name}}</td>
					<td>{{ $pharmacy->designation}}</td>
					<td>{{ $pharmacy->designation_sign}}</td>
					<td>{{ $pharmacy->ward_department}}</td>
					<td>{{ $pharmacy->ward_name}}</td>
					<td>{{ $pharmacy->ward_sign}}</td>
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
                        <h4 class="modal-title">pharmacy</h4>
                    </div>
                    <div class="modal-body">

                        <div class="col-md-12">
                            <div class="card">
									<div class="row page-titles">
										<div class="col-md-12 align-self-center text-center">
											<h4 class="theme-cl">PHARMACY WITHDRAWAL FORM</h4>
										</div>
									</div>

								   <div class="container-fluid">
											<br>
									   <form action="{{ route('pharmacy_pharmacy_post') }}" method="post" >
										   {!! csrf_field() !!}
										   <div class=" row">
													<div class="col-sm-3">
														<label for="staticEmail" class="col-sm-3 col-form-label">Age:</label>
													 </div>
													 <div class="col-sm-4">
														 <input type="name" name="age" class="form-control" placeholder="">
													 </div>

										   </div><br>
												<div class=" row">
														<label for="staticEmail" class="col-sm-3 col-form-label">Ward:</label>
															<div class="col-sm-4">
															<input type="name" name="ward" class="form-control" placeholder="">
														</div>
												</div>
									   			<br>
												<div class=" row">
														<label for="staticEmail" class="col-sm-3 col-form-label">DOA:</label>
															<div class="col-sm-4">
															<input type="name" name="doa" class="form-control" placeholder="">
														</div>
												</div><br>

												<div class=" row">
														<label for="staticEmail" class="col-sm-3 col-form-label">DOD:</label>
															<div class="col-sm-4">
															<input type="name" name="dod" class="form-control" placeholder="">
													</div>
												</div><br>

												<div class=" row">
														<label for="staticEmail" class="col-sm-3 col-form-label">Unit No:</label>
															<div class="col-sm-4">
															<input type="name" name="unit_no" class="form-control" placeholder="">
														</div>
											 	</div><br>

												<div class=" row">
														<label for="staticEmail" class="col-sm-3 col-form-label">DATE:</label>
															<div class="col-sm-4">
															<input type="date" name="date" class="form-control" placeholder="">
														</div>
											 	</div><br>

												<div class=" row">
														<label for="staticEmail" class="col-sm-3 col-form-label">ITEM DESCRIPTION:</label>
															<div class="col-sm-4">
															<input type="text" name="item_description" class="form-control" placeholder="">
														</div>
											 	</div><br>

												<div class=" row">
														<label for="staticEmail" class="col-sm-3 col-form-label">TOTAL RETURNED:</label>
															<div class="col-sm-4">
															<input type="number" name="total_returned" class="form-control" placeholder="">
														</div>
											 	</div><br>

												<div class=" row">
														<label for="staticEmail" class="col-sm-3 col-form-label">UNIT PRICE:</label>
															<div class="col-sm-4">
															<input type="number" name="unit_price" class="form-control" placeholder="">
														</div>
											 	</div><br>

												<div class=" row">
														<label for="staticEmail" class="col-sm-3 col-form-label">TOTAL COST:</label>
															<div class="col-sm-4">
															<input type="number" name="total_cost" class="form-control" placeholder="">
														</div>
											 	</div><br>

												<div class=" row">
														<label for="staticEmail" class="col-sm-3 col-form-label">WARD WITHDRAWAL:</label>
															<div class="col-sm-4">
															<input type="name" name="ward_withdrawal" class="form-control" placeholder="">
														</div>
											 	</div><br>

												<div class=" row">
														<label for="staticEmail" class="col-sm-3 col-form-label">SIGN/TITLE/WARD/PHARMACY:</label>
															<div class="col-sm-4">
															<input type="name" name="sign_title_ward" class="form-control" placeholder="">
														</div>
											 	</div><br>

											<div class="row ">
												<div class="col-md-4">
													<label for="staticEmail" class="col-form-label col-sm-8">Pharmacy Officer's Name:</label>
													<div class="col-sm-12">
													  <input type="name" name="pharmacy_officers_name" class="form-control" placeholder="">
													</div>
												</div>
												<div class="form-group row col-md-4">
													<label for="staticEmail" class="col-form-label col-sm-8">Designation:</label>
													<div class="col-sm-12">
													  <input type="	name" name="designation" class="form-control" placeholder="">
													</div>
												</div>
												<div class="form-group row col-md-4">
													<label for="staticEmail" class="col-form-label col-sm-8">Sign:</label>
													<div class="col-sm-12">
													  <input type="	datetime" name="designation_sign" class="form-control" placeholder="">
													</div>
												</div>
											</div>
											<div class="row ">
												<div class="col-md-4">
													<label for="staticEmail" class="col-form-label col-sm-8">Ward/Department:</label>
													<div class="col-sm-12">
														<input type="name" name="ward_department" class="form-control" placeholder="">
													</div>
												</div>
												<div class="col-md-4">
													<label for="staticEmail" class="col-form-label col-sm-8">Name:</label>
													<div class="col-sm-12">
														<input type="name" name="ward_name" class="form-control" placeholder="">
													</div>
												</div>
												<div class="form-group row col-md-4">
													<label for="staticEmail" class="col-form-label col-sm-8">Sign:</label>
													<div class="col-sm-12">
													  <input type="	datetime" name="ward_sign" class="form-control" placeholder="">
													</div>
												</div>
											</div>
										   <div class="content">
											   <input type="submit" value="Save" class="btn btn-info" />
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