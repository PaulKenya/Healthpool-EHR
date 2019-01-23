@extends('layouts.master')
@section('content')
<div class="row page-titles">
    <div class="col-md-12 align-self-center text-center">
        <h4 class="theme-cl">PRESCRIPTION FORM</h4>
    </div>
</div> 
<div class="col-md-12">


    <div class="card">
        <div class="card-header">
            <h4>Prescription records</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="datatable" class="table table-bordered">
                    <thead>
                    <tr>
                        <th>PATIENT'S NAME</th>
                        <th>IP/OP NO.</th>
                        <th>SEX</th>
                        <th>AGE</th>
                        <th>WARD</th>
                        <th>BED</th>
                        <th>REASON FOR TRANSFUSION</th>
						<th>CONSULTANT INCHARGE</th>
						<th>HOUSEMAN</th>
						<th>PATIENT BLOOD GROUP</th>
						<th>RHESUS</th>
						<th>HB</th>
                        <th>DATE OF PREVIOUS TRANSFUSION</th>
						<th>DETAILS OF ANY REACTION</th>
						
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                       
                        <td>data </td>
                        <td>data </td>
                        <td>data </td>
                        <td>data </td>
                        <td>data </td>
						<td>data </td>
						<td>data </td>
                        <td>data1 </td>
                        <td>data </td>
                        <td>data </td>
                        <td>data </td>
                        <td>data </td>
                        <td>data </td>
						<td>data </td>
                    </tr>
                    <tr>
                        
                        <td>data </td>
                        <td>data </td>
                        <td>data </td>
                        <td>data </td>
                        <td>data </td>
						<td>data </td>
                        <td>data1 </td>
                        <td>data </td>
                        <td>data </td>
                        <td>data </td>
                        <td>data </td>
                        <td>data </td>
						<td>data </td>
						<td>data </td>
                    </tr>
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

                
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Add Record</h4>
                    </div>
                    <div class="modal-body">

                        <div class="col-md-12">
                            <div class="card">
                                <div class="container-fluid">
								<form>
								<div class="col-m-3 offset-md-1">
	
<br><br>
    <div class="row" class="col-md-12">
            <label for="staticEmail" class="col-sm-2">Date:</label>
                <div class="col-sm-10">
                <input type="datetime" name="" class="form-control" placeholder="">
            </div>
    </div>
	<div class="row ">
			<div class="col-md-3">
				<div class="form-group row ">
					<label for="staticEmail" class="col-sm-6 col-form-label ">Patient:</label>
					<div class="col-sm-6">
					  <input type="name" name="" class="form-control" placeholder="">
					</div>
				</div>
			</div>
			<div class="col-md-3">
			 <div class="form-group row ">
						<label for="staticEmail" class="col-sm-6 col-form-label ">Cell:</label>
						<div class="col-sm-6">
						  <input type="	name" name="" class="form-control" placeholder="">
						</div>
					</div>
			</div>
		 <div class="form-group row col-md-4">
					<label for="staticEmail" class="col-sm-6 col-form-label ">Location:</label>
					<div class="col-sm-6">
					  <input type="	name" name="" class="form-control" placeholder="">
					</div>
				</div>
	</div>
	<div class="row ">
			<div class="col-md-8">
				<div class="form-group row ">
					<label for="staticEmail" class="col-form-label ">Other Names:</label>
					<div class="col-sm-8">
					  <input type="name" name="" class="form-control" placeholder="">
					</div>
				</div>
			</div>
			<div class="form-group row col-md-4">
			
					<label for="inputPassword" class=" col-form-label">Sex:</label>
					<div class="col-sm-8">
						<div class="form-group">
							<div class="form-check form-check-inline  col-form-label">
							  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
							  <label class="form-check-label" for="inlineRadio1">Male</label>
							</div>
							<div class="form-check form-check-inline  col-form-label">
							  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
							  <label class="form-check-label" for="inlineRadio2">Female</label>
							</div>
						</div>
					</div>
			</div>
	</div>
	<div class="row ">
			<div class="col-md-5">
				<div class="form-group row ">
					<label for="staticEmail" class="col-form-label ">Allergies:</label>
					<div class="col-sm-8">
					  <input type="text" name="" class="form-control" placeholder="">
					</div>
				</div>
			</div>
			<div class="col-md-3">
			 <div class="form-group row ">
						<label for="staticEmail" class="col-form-label ">Age:</label>
						<div class="col-sm-8">
						  <input type="	name" name="" class="form-control" placeholder="">
						</div>
					</div>
			</div>
		 <div class="form-group row col-md-4">
					<label for="staticEmail" class="col-form-label ">Weight:</label>
					<div class="col-sm-8">
					  <input type="number" name="" class="form-control" placeholder="">
					</div>
		 </div>
	</div>
	
	<br><br>
	<div class="row">
		<p class="text-center offset-4" class=" ">Report</label>
		<div class="form-group row col-md-10">
			
			<div class="col-sm-10">
			  <textarea  rows="4" cols="15" class="form-control" id="" ></textarea>
			</div>
		  </div>
	</div>
	<div class="row">
		<div class="form-group row col-md-8">
			<label for="inputPassword" class=" col-form-label">Substitute if not available</label>
			<div class="col-sm-8">
			  <input type="text" class="form-control" id="inputPassword" placeholder="">
			</div>
		  </div>
		  <div class="form-group row col-md-4">
			<label for="inputPassword" class=" col-form-label">Do not substitute:</label>
			<div class="col-sm-8">
			  <input type="text" class="form-control" id="inputPassword" placeholder="">
			</div>
		  </div>
	</div>
	<div class="row ">
			<div class="col-md-8">
				<div class="form-group row ">
					<label for="staticEmail" class="col-form-label ">Doctor's Name:</label>
					<div class="col-sm-8">
					  <input type="name" name="" class="form-control" placeholder="">
					</div>
				</div>
			</div>
			<div class="col-md-4">
			 <div class="form-group row ">
						<label for="staticEmail" class="col-form-label ">Time:</label>
						<div class="col-sm-8">
						  <input type="time" name="" class="form-control" placeholder="">
					</div>
			</div>
	</div>
	<div class="row ">
			<div class="col-md-8">
				<div class="form-group row ">
					<label for="staticEmail" class="col-form-label ">Signature:</label>
					<div class="col-sm-8">
					  <input type="text" name="" class="form-control" placeholder="">
					</div>
				</div>
			</div>
			<div class="col-md-4">
			 <div class="form-group row ">
						<label for="staticEmail" class="col-form-label ">Branch:</label>
						<div>
						  <input type="	name" name="" class="form-control col-sm-8" placeholder="">
						</div>
					</div>
			</div>
			
          </div>
    </div>
</div>
								
								
								
								
								<br><br>
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