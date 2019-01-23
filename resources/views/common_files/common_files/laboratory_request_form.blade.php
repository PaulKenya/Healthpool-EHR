@extends('layouts.master')

@section('content')
<div class="row page-titles">
    <div class="col-md-12 align-self-center text-center">
        <h4 class="theme-cl">X-RAY REQUEST FORM</h4>
    </div>
</div> 
<div class="col-md-12">


    <div class="card">
        <div class="card-header">
            <h4> Records</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="datatable" class="table table-bordered">
                    <thead>
                    <tr>
                        <th>DATE</th>
                        <th>IP/OP No.</th>
                        <th>PATIENT</th>
                        <th>CELL</th>
                        <th>LOCATION</th>
                        <th>AGE</th>
                        <th>WEIGHT</th>
						<th>SEX</th>
						<th>CLINCAL NOTES</th>
						<th>REFERRING DOCTOR</th>
						<th>BRANCH</th>
						<th>TECHNOLOGIST </th>
                        <th>TIME</th>
						<th>TIME OF SPECIMEN COLLECTION</th>
						
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
		</div>
		</div>
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog modal-lg">

                
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Add X-Ray Request Record</h4>
                    </div>
                    <div class="modal-body">

                        <div class="col-md-12">



<div class="col-md-12">
    <div class="card">
   <form>     
<div class="offset-1 panel 	">

	<H3 class="">X-RAY REQUEST FORM</H3>
	<br><br>
	
	<div class="row ">
			<div class="col-md-6">
				<div class="form-group row ">
					<label for="staticEmail" class="col-form-label ">Date:</label>
					<div class="col-sm-8">
					  <input type="date" name="" class="form-control" placeholder="">
					</div>
				</div>
			</div>
			<div class="col-md-4">
			 <div class="form-group row ">
						<label for="staticEmail" class="col-form-label ">IP/OPD No:</label>
						<div class="col-sm-8">
						  <input type="	datetime" name="" class="form-control" placeholder="">
						</div>
					</div>
			</div>
	</div>
	<br><br>
	<div class="row">
		<div class="form-group row col-md-4">
			<label for="inputPassword" class=" col-form-label">Patient</label>
			<div class="col-sm-8">
			  <input type="text" class="form-control" id="inputPassword" placeholder="Patient">
			</div>
		  </div>
		  <div class="form-group row col-md-4">
			<label for="inputPassword" class=" col-form-label">Cell:</label>
			<div class="col-sm-8">
			  <input type="text" class="form-control" id="inputPassword" placeholder="Cell:">
			</div>
		  </div>
		  <div class="form-group row col-md-4">
			<label for="inputPassword" class=" col-form-label">Location:</label>
			<div class="col-sm-6">
			  <input type="text" class="form-control" id="inputPassword" placeholder="Location:">
			</div>
		  </div>
	</div>
	<br><br>
	<div class="row">

		<div class="form-group row col-md-3">
			<label for="inputPassword" class=" col-form-label">Age</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" id="inputPassword" placeholder="Age">
			</div>
		  </div>
		  <div class="form-group row col-md-3">
			<label for="inputPassword" class=" col-form-label">Weight</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" id="inputPassword" placeholder="Weight">
			</div>
		  </div>
		  <div class="form-group row col-md-4">
			<label for="inputPassword" class=" col-form-label">SEX:</label>
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
	<br><br>
	<div class="row">
		<p class="text-center offset-4" class=" ">Clinical Notes</label>
		<div class="form-group row col-md-10">
			
			<div class="col-sm-10">
			  <textarea  rows="4" cols="15" class="form-control" id="" ></textarea>
			</div>
		  </div>
	</div>
	<div class="row">
		<div class="form-group row col-md-6">
			<label for="inputPassword" class=" col-form-label">Referring Doctor</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" id="inputPassword" placeholder="Referring Doctor">
			</div>
		  </div>
		  <div class="form-group row col-md-4">
			<label for="inputPassword" class=" col-form-label">Branch:</label>
			<div class="col-sm-8">
			  <input type="text" class="form-control" id="inputPassword" placeholder="Branch:">
			</div>
		  </div>
	</div>
	<div class="row">
		<div class="form-group row col-md-6">
			<label for="inputPassword" class=" col-form-label">Signature</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" id="inputPassword" placeholder="Signature">
			</div>
		  </div>
		  <div class="form-group row col-md-4">
			<label for="inputPassword" class=" col-form-label">cell:</label>
			<div class="col-sm-8">
			  <input type="text" class="form-control" id="inputPassword" placeholder="Cell:">
			</div>
		  </div>
	</div>
	<div class="row">
		<div class="form-group row col-md-6">
			<label for="inputPassword" class=" col-form-label">Technologists:</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" id="inputPassword" placeholder="Signature">
			</div>
		  </div>
		  <div class="form-group row col-md-4">
			<label for="inputPassword" class=" col-form-label">Time:</label>
			<div class="col-sm-8">
			  <input type="time" class="form-control" id="inputPassword" placeholder="Cell:">
			</div>
		  </div>
	<div class="form-group row col-md-12">
			<label for="inputPassword" class=" col-form-label">Time of specimen collection:</label>
			<div class="col-sm-8">
			  <input type="time" class="form-control" id="inputPassword" placeholder="Cell:">
			</div>
		  </div>
		  <div class="form-group row col-md-8">
			<label for="inputPassword" class=" col-form-label">Accounts (please tick):</label>
			<div class="col-sm-8">
				<div class="form-group">
					<div class="form-check form-check-inline  col-form-label">
					  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
					  <label class="form-check-label" for="inlineRadio1">Patient</label>
					</div>
					<div class="form-check form-check-inline  col-form-label">
					  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
					  <label class="form-check-label" for="inlineRadio2">Company</label>
					</div>
					<div class="form-check form-check-inline  col-form-label">
					  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
					  <label class="form-check-label" for="inlineRadio2">Doctor</label>
					</div>
				</div>
				</div>
		  </div>
		  </div>
		  <div class="content">
                        <input type="submit" value="Save" class="btn btn-info" />
                    
                </div>
		  
</div>
</form>
                  
      </div>
	  </div>
	  </div>


        
    </div>
</div> 
@endsection