@extends('layouts.app')

@section('content')
<div class="col-md-12">
    <div class="card">
       

<div class="col-m-3 offset-md-2">
	<H3 class="mt-20 ">
		
	</H3>
<br><br>
    <div class="form-group row">
            <label for="staticEmail" class="col-sm-3 col-form-label">Date:</label>
                <div class="col-sm-4">
                <input type="datetime" name="" class="form-control" placeholder="">
            </div>
    </div>
	<div class="row ">
			<div class="col-md-3">
				<div class="form-group row ">
					<label for="staticEmail" class="col-form-label ">Patient:</label>
					<div class="col-sm-8">
					  <input type="name" name="" class="form-control" placeholder="">
					</div>
				</div>
			</div>
			<div class="col-md-3">
			 <div class="form-group row ">
						<label for="staticEmail" class="col-form-label ">Cell:</label>
						<div class="col-sm-8">
						  <input type="	name" name="" class="form-control" placeholder="">
						</div>
					</div>
			</div>
		 <div class="form-group row col-md-4">
					<label for="staticEmail" class="col-form-label ">Location:</label>
					<div class="col-sm-8">
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
			  <input type="text" class="form-control" id="inputPassword" placeholder=":">
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
						  <input type="	time" name="" class="form-control" placeholder="">
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
						<div class="col-sm-8">
						  <input type="	name" name="" class="form-control" placeholder="">
						</div>
					</div>
			</div>

       
    </div>
</div> 
@endsection