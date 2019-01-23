@extends('layouts.app')

@section('content')
<div class="col-md-12">
    <div class="card">
       

<div id="">
<div class="col-m-3 offset-md-5">
	<H3 class="mt-20">
		RADIOLOGY REQUEST FORM
	</H3>
</div>

<table class=" table table-bordered">
	<thead>
		<tr>
			<th colspan="">PATIENT NAME:<input type="text" name="" class="form-control" placeholder=""></th>
			
			<th>Hosp. No.<input type="text" name="" class="form-control" placeholder=""></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>D.O.B<input type="date" name="" class="form-control" placeholder=""></td>
			<td>AGE<input type="number" name="" class="form-control" placeholder=""></td>
			<td>GENDER:
			<select class="custom-select">
                        <option selected>-select Gender-</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select></td>
			<td>WD/CLINIC/PVT:<input type="text" name="" class="form-control" placeholder=""></td>
			<td>PT.TEL.No.<input type="number" name="" class="form-control" placeholder=""></td>

		</tr>
	</tbody>
</table>
<table class="table table-bordered">
	<thead>
		<tr>
			<th>Appointment Date:<input type="date" name="" class="form-control" placeholder=""></th>
			<th>Time:<input type="time" name="" class="form-control" placeholder=""></th>
			<th>Portable:<input type="text" name="" class="form-control" placeholder=""></th>
			<th>X-RAY No:<input type="number" name="" class="form-control" placeholder=""></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td >INT No.<input type="number" name="" class="form-control" placeholder=""></td>
			<td>Charges<input type="number" name="" class="form-control" placeholder=""></td>
			<td>INVOICE NUMBER:<input type="number" name="" class="form-control" placeholder=""></td>
			<td>RECEIPT/ C/S.No<input type="number" name="" class="form-control" placeholder=""></td>
			<td>NHIF NO.<input type="text" name="" class="form-control" placeholder=""></td>
		</tr>
		<tr>
			<td colspan="5">Brief Clinical Summary:<textarea type="text" name="" class="form-control" placeholder=""></textarea></td>
		</tr>
		<tr>
			<td colspan="2">Date of LMP<input type="date" name="" class="form-control" placeholder=""></td>
		</tr>
	</tbody>
</table>
<div class="col-m-3 offset-md-5">
	<H3 class="mt-20">
		Type of Investigation Requested:
	</H3>
</div>
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
			<td><input type="checkbox" name="" class="form-control" placeholder=""></td>
			<td>General radiography</td>
			<td><input type="text" name="" class="form-control" placeholder=""></td>
			<td><input type="number" name="" class="form-control" placeholder=""></td>


		</tr>
		<tr>
			<td>2</td>
			<td><input type="checkbox" name="" class="form-control" placeholder=""></td>
			<td>Computerized Tomography(CT scan)</td>
			<td><input type="text" name="" class="form-control" placeholder=""></td>
			<td><input type="number" name="" class="form-control" placeholder=""></td>


		</tr>
		<tr>
			<td>3</td>
			<td><input type="checkbox" name="" class="form-control" placeholder=""></td>
			<td>Magnetic Resonance Imaging(MRI scan)</td>
			<td><input type="text" name="" class="form-control" placeholder=""></td>
			<td><input type="number" name="" class="form-control" placeholder=""></td>


		</tr>
		<tr>
			<td>4</td>
			<td><input type="checkbox" name="" class="form-control" placeholder=""></td>
			<td>Ultrasound(U/S)</td>
			<td><input type="text" name="" class="form-control" placeholder=""></td>
			<td><input type="number" name="" class="form-control" placeholder=""></td>


		</tr>
		<tr>
			<td>5</td>
			<td><input type="checkbox" name="" class="form-control" placeholder=""></td>
			<td>Fluoroscopy</td>
			<td><input type="text" name="" class="form-control" placeholder=""></td>
			<td><input type="number" name="" class="form-control" placeholder=""></td>


		</tr>
		<tr>
			<td>6</td>
			<td><input type="checkbox" name="" class="form-control" placeholder=""></td>
			<td>Interventional Radiology</td>
			<td><input type="text" name="" class="form-control" placeholder=""></td>
			<td><input type="number" name="" class="form-control" placeholder=""></td>


		</tr>
		<tr>
			<td>7</td>
			<td><input type="checkbox" name="" class="form-control" placeholder=""></td>
			<td>Mammography</td>
			<td><input type="text" name="" class="form-control" placeholder=""></td>
			<td><input type="number" name="" class="form-control" placeholder=""></td>


		</tr>
		<tr>
			<td>8</td>
			<td><input type="checkbox" name="" class="form-control" placeholder=""></td>
			<td>Others:(Specify)<input type="text" name="" class="form-control" placeholder=""></td>
			<td><input type="text" name="" class="form-control" placeholder=""></td>
			<td><input type="number" name="" class="form-control" placeholder=""></td>


		</tr>
	</tbody>
</table>


            <div class="row">
	            <div class="form-group row col-md-6">
				    <label for="staticEmail" class="col-sm-2 col-form-label">Requested by:Doctor's Name</label>
				    <div class="col-sm-10">
				      <input type="	text" name="" class=" form-control" placeholder="">
				    </div>
				 </div>
				 <div class="form-group row col-md-6">
				    <label for="staticEmail" class="col-sm-2 col-form-label">Signature</label>
				    <div class="col-sm-10">
				      <input type="	text" name="" class=" form-control" placeholder="">
				    </div>
				 </div>
				  <div class="form-group row col-md-6">
				    <label for="staticEmail" class="col-sm-2 col-form-label">Date</label>
				    <div class="col-sm-10">
				      <input type="date" name="" class=" form-control" placeholder="">
				    </div>
				 </div>
			</div>


<span class="row"> <span class="col-md-4">Requesting Doctor's Tel. No.:</span> <span class="col-md-8"> <input type="text" name="" class=" form-control" placeholder=""></span></span>
	    	<span class=""></span>



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
				    <label for="staticEmail" class="col-sm-2 col-form-label">Radiographer Name</label>
				    <div class="col-sm-10">
				      <input type="	text" name="" class=" form-control" placeholder="">
				    </div>
				 </div>
				 <div class="form-group row col-md-6">
				    <label for="staticEmail" class="col-sm-2 col-form-label">Signature</label>
				    <div class="col-sm-10">
				      <input type="	text" name="" class=" form-control" placeholder="">
				    </div>
				 </div>
				  <div class="form-group row col-md-6">
				    <label for="staticEmail" class="col-sm-2 col-form-label">Date</label>
				    <div class="col-sm-10">
				      <input type="date" name="" class=" form-control" placeholder="">
				    </div>
				 </div>
			</div>







       
    </div>
</div> 
@endsection