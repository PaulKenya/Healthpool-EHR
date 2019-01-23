@extends('layouts.app')

@section('content')
<div class="col-md-12">
    <div class="card">
       

<div class="row">
	<h3 class="offset-3"> REQUEST FOR PALIATIVE CARE</h3> 
</div>
<BR>
<BR>

<div class="row">
	<div class="form-group row offset-9">
	    <label for="staticEmail" class="col-sm-3 col-form-label">Date</label>
	    <div class="col-sm-9">
	      <input type="date"  class="form-control" id="staticEmail" value="">
	    </div>
  </div>
</div>
<div class=" offset-1">
	<div class="row">
		<div class="form-group row col-md-6">
		    <label for="staticEmail" class="col-sm-3 col-form-label">Name of patient</label>
		    <div class="col-sm-9">
		      <input type="text"  class="form-control" id="staticEmail" value="">
		    </div>
	 	</div>
	 	<div class="form-group row col-md-6">
		    <label for="staticEmail" class="col-sm-3 col-form-label">Unit No</label>
		    <div class="col-sm-9">
		      <input type="text"  class="form-control" id="staticEmail" value="">
		    </div>
	 	</div>
 	</div>
 	<div class="row">
	 	<div class="form-group row col-md-4">
		    <label for="staticEmail" class="col-sm-3 col-form-label">Date of Birth</label>
		    <div class="col-sm-9">
		      <input type="date"  class="form-control" id="staticEmail" value="">
		    </div>
	 	</div>
	 	<div class="form-group row col-md-4">
		    <label for="staticEmail" class="col-sm-3 col-form-label">Age</label>
		    <div class="col-sm-9">
		      <input type="number"  class="form-control" id="staticEmail" value="" readonly="readonly">
		    </div>
	 	</div>
	 	<div class="form-group row col-md-4 col-form-label">
		    <label for="staticEmail" class="col-sm-3 col-form-label">Gender</label>
		   <div class="form-check form-check-inline col-form-label">
			  <input class="form-check-input " type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
			  <label class="form-check-label" for="inlineRadio1">male</label>
			</div>
			<div class="form-check form-check-inline col-form-label">
			  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
			  <label class="form-check-label" for="inlineRadio2">female</label>
			</div>
	 	</div>
	 </div>

 	<div class="row"> 
 		<div class="col-md-5">
		  <div class="form-group row">
		    <label for="staticEmail" class="col-sm-2 col-form-label">Refferd from( Ward /Clinic)</label>
		    <div class="col-sm-10">
		      <input type="text"  class="form-control" id="staticEmail" value="">
		    </div>
		  </div>
		</div>
		<div class="col-md-6">
			  <div class="form-group row">
			    <label for="staticEmail" class="col-sm-3 col-form-label">Bed No</label>
			    <div class="col-sm-9">
			      <input type="text"  class="form-control" id="staticEmail" value="">
			    </div>
			  </div>
	 	</div>
	 </div> 
	 <div class="col-md-12"> 
		<div class="form-group row">
			    <label for="staticEmail" class="col-sm-2 col-form-label">Previous Treatment</label>
			    <div class="col-sm-10">
			      <textarea class="form-control" id="staticEmail" value="" cols="30">
			      </textarea>
			    </div>
		</div>
	 </div>
	 <div class="col-md-12"> 
		<div class="form-group row">
			    <label for="staticEmail" class="col-sm-2 col-form-label">Current medication, drugs and doses</label>
			    <div class="col-sm-10">
			      <textarea class="form-control" id="staticEmail" value="">
			      </textarea>
			    </div>
		</div>
	 </div>
	  <div class="col-md-12"> 
		<div class="form-group row">
			    <label for="staticEmail" class="col-sm-2 col-form-label">Reason for referral</label>
			    <div class="col-sm-10">
			      <textarea class="form-control" id="staticEmail" value="">
			      </textarea>
			    </div>
		</div>
	 </div>
	 <div class="row"> 
		<div class="col-md-6"> 
			<p><b> Urgency</b></p>
			<div class="form-check">
			  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
			  <label class="form-check-label" for="exampleRadios1">
			   very  urgent
			  </label>
			</div>
			<div class="form-check">
			  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
			  <label class="form-check-label" for="exampleRadios2">
			    urgent
			  </label>
			</div>
			<div class="form-check ">
			  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" >
			  <label class="form-check-label" for="exampleRadios3">
			    Fairly urgent
			  </label>
			</div>
		</div>
		<div class="col-md-6"> 
			<p>Reffered By</p>
			<div class="form-group row">
			    <label for="inputPassword" class="col-sm-2 col-form-label">Name</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="inputPassword" >
			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="inputPassword" class="col-sm-2 col-form-label">Designation</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="inputPassword" >
			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="inputPassword" class="col-sm-2 col-form-label">Signature</label>
			    <div class="col-sm-10">
			      <input type="password" class="form-control" id="inputPassword" >
			    </div>
			  </div>
		</div>
	 </div>





	 	
</div>
</table>

       
    </div>
</div> 
@endsection