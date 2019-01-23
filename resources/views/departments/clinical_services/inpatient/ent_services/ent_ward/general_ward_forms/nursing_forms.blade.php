@extends('layouts.app')

@section('content')
<div class="col-md-12">
    <div class="card">
       



<div class="col-m-3 offset-md-2">
	<H3 class="mt-20 ">
		DIABETIC CHART
	</H3>
</div>
<br>
	<div class="row ">
			<div class="col-md-4">
				<div class="form-group row ">
					<label for="staticEmail" class="col-form-label ">PATIENT'S NAME:</label>
					<div class="col-sm-8">
					  <input type="date" name="" class="form-control" placeholder="">
					</div>
				</div>
			</div>
			<div class="col-md-3">
			 <div class="form-group row ">
						<label for="staticEmail" class="col-form-label ">I.P.NUMBER:</label>
						<div class="col-sm-8">
						  <input type="	datetime" name="" class="form-control" placeholder="">
						</div>
					</div>
			</div>
		 <div class="form-group row col-md-3">
					<label for="staticEmail" class="col-form-label ">MONTH:</label>
					<div class="col-sm-8">
					  <input type="number" name="" class="form-control" placeholder="">
				 </div>
		 </div>
		 <div class="form-group row col-md-2">
					<label for="staticEmail" class="col-form-label ">YEAR:</label>
					<div class="col-sm-8">
					  <input type="number" name="" class="form-control" placeholder="">
					</div>
				</div>
	</div>
<br><br>
<table class="table table-bordered">
  <tbody>
    <tr>
	  <td>DATE</td>
      <td></td>
      <td><input type="date" name="" class="form-control" placeholder=""></td>
      <td><input type="date" name="" class="form-control" placeholder=""></td>
      <td><input type="date" name="" class="form-control" placeholder=""></td>
      <td><input type="date" name="" class="form-control" placeholder=""></td>
      <td><input type="date" name="" class="form-control" placeholder=""></td>
      <td><input type="date" name="" class="form-control" placeholder=""></td>
      <td><input type="date" name="" class="form-control" placeholder=""></td>
      <td><input type="date" name="" class="form-control" placeholder=""></td>
      <td><input type="date" name="" class="form-control" placeholder=""></td>
      <td><input type="date" name="" class="form-control" placeholder=""></td>
      <td><input type="date" name="" class="form-control" placeholder=""></td>
      <td><input type="date" name="" class="form-control" placeholder=""></td>
      <td><input type="date" name="" class="form-control" placeholder=""></td>
      <td><input type="date" name="" class="form-control" placeholder=""></td>
      <td><input type="date" name="" class="form-control" placeholder=""></td>
      <td><input type="date" name="" class="form-control" placeholder=""></td>
      <td><input type="date" name="" class="form-control" placeholder=""></td>
      <td><input type="date" name="" class="form-control" placeholder=""></td>
      <td><input type="date" name="" class="form-control" placeholder=""></td>
      <td><input type="date" name="" class="form-control" placeholder=""></td>
    </tr>
	<tr>
	  <td>TIME</td>
      <td></td>
      <td><input type="time" name="" class="form-control" placeholder=""></td>
      <td><input type="time" name="" class="form-control" placeholder=""></td>
      <td><input type="time" name="" class="form-control" placeholder=""></td>
      <td><input type="time" name="" class="form-control" placeholder=""></td>
      <td><input type="time" name="" class="form-control" placeholder=""></td>
      <td><input type="time" name="" class="form-control" placeholder=""></td>
      <td><input type="time" name="" class="form-control" placeholder=""></td>
      <td><input type="time" name="" class="form-control" placeholder=""></td>
      <td><input type="time" name="" class="form-control" placeholder=""></td>
      <td><input type="time" name="" class="form-control" placeholder=""></td>
      <td><input type="time" name="" class="form-control" placeholder=""></td>
      <td><input type="time" name="" class="form-control" placeholder=""></td>
      <td><input type="time" name="" class="form-control" placeholder=""></td>
      <td><input type="time" name="" class="form-control" placeholder=""></td>
      <td><input type="time" name="" class="form-control" placeholder=""></td>
      <td><input type="time" name="" class="form-control" placeholder=""></td>
      <td><input type="time" name="" class="form-control" placeholder=""></td>
      <td><input type="time" name="" class="form-control" placeholder=""></td>
      <td><input type="time" name="" class="form-control" placeholder=""></td>
      <td><input type="time" name="" class="form-control" placeholder=""></td>
    </tr>
	<tr>
	  <td rowspan="6">URINE TESTING</td>
      <td>SUGAR 2%</td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
	  <td><input type="number" name="" class="form-control" placeholder=""></td>
	  <td><input type="number" name="" class="form-control" placeholder=""></td>
	  <td><input type="number" name="" class="form-control" placeholder=""></td>
	  <td><input type="number" name="" class="form-control" placeholder=""></td>
	  <td><input type="number" name="" class="form-control" placeholder=""></td>
	  <td><input type="number" name="" class="form-control" placeholder=""></td>
	  <td><input type="number" name="" class="form-control" placeholder=""></td>
	  <td><input type="number" name="" class="form-control" placeholder=""></td>
	  <td><input type="number" name="" class="form-control" placeholder=""></td>
	  <td><input type="number" name="" class="form-control" placeholder=""></td>
	  <td><input type="number" name="" class="form-control" placeholder=""></td>
	  <td><input type="number" name="" class="form-control" placeholder=""></td>
	  <td><input type="number" name="" class="form-control" placeholder=""></td>
	  <td><input type="number" name="" class="form-control" placeholder=""></td>
	  <td><input type="number" name="" class="form-control" placeholder=""></td>
	  <td><input type="number" name="" class="form-control" placeholder=""></td>
	  <td><input type="number" name="" class="form-control" placeholder=""></td>
	  <td><input type="number" name="" class="form-control" placeholder=""></td>
	  <td><input type="number" name="" class="form-control" placeholder=""></td>
    </tr>
	<tr>
      <td>SUGAR 1%</td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
    </tr>
	<tr>
      <td>SUGAR 1/2%</td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
    </tr>
	<tr>
      <td>SUGAR 1/4%</td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
    </tr><tr>
      <td>SUGAR NIL</td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
    </tr>
	<tr>
      <td>ACETONE</td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
    </tr>
	<tr>
      <td>INSULIN (Dose) unit</td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
	  <td><input type="number" name="" class="form-control" placeholder=""></td>
    </tr>
	<tr>
      <td>ORAL DRUG (Dose) mg.</td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
	  <td><input type="number" name="" class="form-control" placeholder=""></td>
    </tr>
	<tr>
      <td>BLOOD SUGAR mgm.%</td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
	  <td><input type="number" name="" class="form-control" placeholder=""></td>
    </tr>
	<tr>
      <td>WEIGHT (kg)</td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
	  <td><input type="number" name="" class="form-control" placeholder=""></td>
    </tr>
	<tr>
      <td>DATE</td>
      <td><input type="date" name="" class="form-control" placeholder=""></td>
	  <td><input type="date" name="" class="form-control" placeholder=""></td>
	  <td><input type="date" name="" class="form-control" placeholder=""></td>
	  <td><input type="date" name="" class="form-control" placeholder=""></td>
	  <td><input type="date" name="" class="form-control" placeholder=""></td>
	  <td><input type="date" name="" class="form-control" placeholder=""></td>
	  <td><input type="date" name="" class="form-control" placeholder=""></td>
	  <td><input type="date" name="" class="form-control" placeholder=""></td>
	  <td><input type="date" name="" class="form-control" placeholder=""></td>
	  <td><input type="date" name="" class="form-control" placeholder=""></td>
	  <td><input type="date" name="" class="form-control" placeholder=""></td>
	  <td><input type="date" name="" class="form-control" placeholder=""></td>
	  <td><input type="date" name="" class="form-control" placeholder=""></td>
	  <td><input type="date" name="" class="form-control" placeholder=""></td>
	  <td><input type="date" name="" class="form-control" placeholder=""></td>
	  <td><input type="date" name="" class="form-control" placeholder=""></td>
	  <td><input type="date" name="" class="form-control" placeholder=""></td>
	  <td><input type="date" name="" class="form-control" placeholder=""></td>
	  <td><input type="date" name="" class="form-control" placeholder=""></td>
	  <td><input type="date" name="" class="form-control" placeholder=""></td>
	  <td><input type="date" name="" class="form-control" placeholder=""></td>
    </tr>
	<tr>
      <td>TIME</td>
      <td><input type="time" name="" class="form-control" placeholder=""></td>
	  <td><input type="time" name="" class="form-control" placeholder=""></td>
	  <td><input type="time" name="" class="form-control" placeholder=""></td>
	  <td><input type="time" name="" class="form-control" placeholder=""></td>
	  <td><input type="time" name="" class="form-control" placeholder=""></td>
	  <td><input type="time" name="" class="form-control" placeholder=""></td>
	  <td><input type="time" name="" class="form-control" placeholder=""></td>
	  <td><input type="time" name="" class="form-control" placeholder=""></td>
	  <td><input type="time" name="" class="form-control" placeholder=""></td>
	  <td><input type="time" name="" class="form-control" placeholder=""></td>
	  <td><input type="time" name="" class="form-control" placeholder=""></td>
	  <td><input type="time" name="" class="form-control" placeholder=""></td>
	  <td><input type="time" name="" class="form-control" placeholder=""></td>
	  <td><input type="time" name="" class="form-control" placeholder=""></td>
	  <td><input type="time" name="" class="form-control" placeholder=""></td>
	  <td><input type="time" name="" class="form-control" placeholder=""></td>
	  <td><input type="time" name="" class="form-control" placeholder=""></td>
	  <td><input type="time" name="" class="form-control" placeholder=""></td>
	  <td><input type="time" name="" class="form-control" placeholder=""></td>
	  <td><input type="time" name="" class="form-control" placeholder=""></td>
	  <td><input type="time" name="" class="form-control" placeholder=""></td>
    </tr>
	<tr>
	  <td rowspan="6">URINE TESTING</td>
      <td>SUGAR 2%</td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
	  <td><input type="number" name="" class="form-control" placeholder=""></td>
	  <td><input type="number" name="" class="form-control" placeholder=""></td>
	  <td><input type="number" name="" class="form-control" placeholder=""></td>
	  <td><input type="number" name="" class="form-control" placeholder=""></td>
	  <td><input type="number" name="" class="form-control" placeholder=""></td>
	  <td><input type="number" name="" class="form-control" placeholder=""></td>
	  <td><input type="number" name="" class="form-control" placeholder=""></td>
	  <td><input type="number" name="" class="form-control" placeholder=""></td>
	  <td><input type="number" name="" class="form-control" placeholder=""></td>
	  <td><input type="number" name="" class="form-control" placeholder=""></td>
	  <td><input type="number" name="" class="form-control" placeholder=""></td>
	  <td><input type="number" name="" class="form-control" placeholder=""></td>
	  <td><input type="number" name="" class="form-control" placeholder=""></td>
	  <td><input type="number" name="" class="form-control" placeholder=""></td>
	  <td><input type="number" name="" class="form-control" placeholder=""></td>
	  <td><input type="number" name="" class="form-control" placeholder=""></td>
	  <td><input type="number" name="" class="form-control" placeholder=""></td>
	  <td><input type="number" name="" class="form-control" placeholder=""></td>
	  <td><input type="number" name="" class="form-control" placeholder=""></td>
    </tr>
	<tr>
      <td>SUGAR 1%</td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
    </tr>
	<tr>
      <td>SUGAR 1/2%</td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
    </tr>
	<tr>
      <td>SUGAR 1/4%</td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
    </tr><tr>
      <td>SUGAR NIL</td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
    </tr>
	<tr>
      <td>ACETONE</td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
    </tr>
	<tr>
      <td>INSULIN (Dose) unit</td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
	  <td><input type="number" name="" class="form-control" placeholder=""></td>
    </tr>
	<tr>
      <td>ORAL DRUG (Dose) mg.</td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
	  <td><input type="number" name="" class="form-control" placeholder=""></td>
    </tr>
	<tr>
      <td>BLOOD SUGAR mgm.%</td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
	  <td><input type="number" name="" class="form-control" placeholder=""></td>
    </tr>
	<tr>
      <td>WEIGHT (kg)</td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
	  <td><input type="number" name="" class="form-control" placeholder=""></td>
    </tr>
	<tr>
      <td>DATE</td>
      <td><input type="date" name="" class="form-control" placeholder=""></td>
	  <td><input type="date" name="" class="form-control" placeholder=""></td>
	  <td><input type="date" name="" class="form-control" placeholder=""></td>
	  <td><input type="date" name="" class="form-control" placeholder=""></td>
	  <td><input type="date" name="" class="form-control" placeholder=""></td>
	  <td><input type="date" name="" class="form-control" placeholder=""></td>
	  <td><input type="date" name="" class="form-control" placeholder=""></td>
	  <td><input type="date" name="" class="form-control" placeholder=""></td>
	  <td><input type="date" name="" class="form-control" placeholder=""></td>
	  <td><input type="date" name="" class="form-control" placeholder=""></td>
	  <td><input type="date" name="" class="form-control" placeholder=""></td>
	  <td><input type="date" name="" class="form-control" placeholder=""></td>
	  <td><input type="date" name="" class="form-control" placeholder=""></td>
	  <td><input type="date" name="" class="form-control" placeholder=""></td>
	  <td><input type="date" name="" class="form-control" placeholder=""></td>
	  <td><input type="date" name="" class="form-control" placeholder=""></td>
	  <td><input type="date" name="" class="form-control" placeholder=""></td>
	  <td><input type="date" name="" class="form-control" placeholder=""></td>
	  <td><input type="date" name="" class="form-control" placeholder=""></td>
	  <td><input type="date" name="" class="form-control" placeholder=""></td>
	  <td><input type="date" name="" class="form-control" placeholder=""></td>
    </tr>
	<tr>
      <td>TIME</td>
      <td><input type="time" name="" class="form-control" placeholder=""></td>
	  <td><input type="time" name="" class="form-control" placeholder=""></td>
	  <td><input type="time" name="" class="form-control" placeholder=""></td>
	  <td><input type="time" name="" class="form-control" placeholder=""></td>
	  <td><input type="time" name="" class="form-control" placeholder=""></td>
	  <td><input type="time" name="" class="form-control" placeholder=""></td>
	  <td><input type="time" name="" class="form-control" placeholder=""></td>
	  <td><input type="time" name="" class="form-control" placeholder=""></td>
	  <td><input type="time" name="" class="form-control" placeholder=""></td>
	  <td><input type="time" name="" class="form-control" placeholder=""></td>
	  <td><input type="time" name="" class="form-control" placeholder=""></td>
	  <td><input type="time" name="" class="form-control" placeholder=""></td>
	  <td><input type="time" name="" class="form-control" placeholder=""></td>
	  <td><input type="time" name="" class="form-control" placeholder=""></td>
	  <td><input type="time" name="" class="form-control" placeholder=""></td>
	  <td><input type="time" name="" class="form-control" placeholder=""></td>
	  <td><input type="time" name="" class="form-control" placeholder=""></td>
	  <td><input type="time" name="" class="form-control" placeholder=""></td>
	  <td><input type="time" name="" class="form-control" placeholder=""></td>
	  <td><input type="time" name="" class="form-control" placeholder=""></td>
	  <td><input type="time" name="" class="form-control" placeholder=""></td>
    </tr>
	<tr>
	  <td rowspan="6">URINE TESTING</td>
      <td>SUGAR 2%</td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
	  <td><input type="number" name="" class="form-control" placeholder=""></td>
	  <td><input type="number" name="" class="form-control" placeholder=""></td>
	  <td><input type="number" name="" class="form-control" placeholder=""></td>
	  <td><input type="number" name="" class="form-control" placeholder=""></td>
	  <td><input type="number" name="" class="form-control" placeholder=""></td>
	  <td><input type="number" name="" class="form-control" placeholder=""></td>
	  <td><input type="number" name="" class="form-control" placeholder=""></td>
	  <td><input type="number" name="" class="form-control" placeholder=""></td>
	  <td><input type="number" name="" class="form-control" placeholder=""></td>
	  <td><input type="number" name="" class="form-control" placeholder=""></td>
	  <td><input type="number" name="" class="form-control" placeholder=""></td>
	  <td><input type="number" name="" class="form-control" placeholder=""></td>
	  <td><input type="number" name="" class="form-control" placeholder=""></td>
	  <td><input type="number" name="" class="form-control" placeholder=""></td>
	  <td><input type="number" name="" class="form-control" placeholder=""></td>
	  <td><input type="number" name="" class="form-control" placeholder=""></td>
	  <td><input type="number" name="" class="form-control" placeholder=""></td>
	  <td><input type="number" name="" class="form-control" placeholder=""></td>
	  <td><input type="number" name="" class="form-control" placeholder=""></td>
    </tr>
	<tr>
      <td>SUGAR 1%</td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
    </tr>
	<tr>
      <td>SUGAR 1/2%</td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
    </tr>
	<tr>
      <td>SUGAR 1/4%</td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
    </tr><tr>
      <td>SUGAR NIL</td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
    </tr>
	<tr>
      <td>ACETONE</td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
    </tr>
	<tr>
      <td>INSULIN (Dose) unit</td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
	  <td><input type="number" name="" class="form-control" placeholder=""></td>
    </tr>
	<tr>
      <td>ORAL DRUG (Dose) mg.</td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
	  <td><input type="number" name="" class="form-control" placeholder=""></td>
    </tr>
	<tr>
      <td>BLOOD SUGAR mgm.%</td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
	  <td><input type="number" name="" class="form-control" placeholder=""></td>
    </tr>
	<tr>
      <td>WEIGHT (kg)</td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
	  <td><input type="number" name="" class="form-control" placeholder=""></td>
    </tr>
	<tr>
      <td>DATE</td>
      <td><input type="date" name="" class="form-control" placeholder=""></td>
	  <td><input type="date" name="" class="form-control" placeholder=""></td>
	  <td><input type="date" name="" class="form-control" placeholder=""></td>
	  <td><input type="date" name="" class="form-control" placeholder=""></td>
	  <td><input type="date" name="" class="form-control" placeholder=""></td>
	  <td><input type="date" name="" class="form-control" placeholder=""></td>
	  <td><input type="date" name="" class="form-control" placeholder=""></td>
	  <td><input type="date" name="" class="form-control" placeholder=""></td>
	  <td><input type="date" name="" class="form-control" placeholder=""></td>
	  <td><input type="date" name="" class="form-control" placeholder=""></td>
	  <td><input type="date" name="" class="form-control" placeholder=""></td>
	  <td><input type="date" name="" class="form-control" placeholder=""></td>
	  <td><input type="date" name="" class="form-control" placeholder=""></td>
	  <td><input type="date" name="" class="form-control" placeholder=""></td>
	  <td><input type="date" name="" class="form-control" placeholder=""></td>
	  <td><input type="date" name="" class="form-control" placeholder=""></td>
	  <td><input type="date" name="" class="form-control" placeholder=""></td>
	  <td><input type="date" name="" class="form-control" placeholder=""></td>
	  <td><input type="date" name="" class="form-control" placeholder=""></td>
	  <td><input type="date" name="" class="form-control" placeholder=""></td>
	  <td><input type="date" name="" class="form-control" placeholder=""></td>
    </tr>
	<tr>
      <td>TIME</td>
      <td><input type="time" name="" class="form-control" placeholder=""></td>
	  <td><input type="time" name="" class="form-control" placeholder=""></td>
	  <td><input type="time" name="" class="form-control" placeholder=""></td>
	  <td><input type="time" name="" class="form-control" placeholder=""></td>
	  <td><input type="time" name="" class="form-control" placeholder=""></td>
	  <td><input type="time" name="" class="form-control" placeholder=""></td>
	  <td><input type="time" name="" class="form-control" placeholder=""></td>
	  <td><input type="time" name="" class="form-control" placeholder=""></td>
	  <td><input type="time" name="" class="form-control" placeholder=""></td>
	  <td><input type="time" name="" class="form-control" placeholder=""></td>
	  <td><input type="time" name="" class="form-control" placeholder=""></td>
	  <td><input type="time" name="" class="form-control" placeholder=""></td>
	  <td><input type="time" name="" class="form-control" placeholder=""></td>
	  <td><input type="time" name="" class="form-control" placeholder=""></td>
	  <td><input type="time" name="" class="form-control" placeholder=""></td>
	  <td><input type="time" name="" class="form-control" placeholder=""></td>
	  <td><input type="time" name="" class="form-control" placeholder=""></td>
	  <td><input type="time" name="" class="form-control" placeholder=""></td>
	  <td><input type="time" name="" class="form-control" placeholder=""></td>
	  <td><input type="time" name="" class="form-control" placeholder=""></td>
	  <td><input type="time" name="" class="form-control" placeholder=""></td>
    </tr>
	<tr>
	  <td rowspan="6">URINE TESTING</td>
      <td>SUGAR 2%</td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
	  <td><input type="number" name="" class="form-control" placeholder=""></td>
	  <td><input type="number" name="" class="form-control" placeholder=""></td>
	  <td><input type="number" name="" class="form-control" placeholder=""></td>
	  <td><input type="number" name="" class="form-control" placeholder=""></td>
	  <td><input type="number" name="" class="form-control" placeholder=""></td>
	  <td><input type="number" name="" class="form-control" placeholder=""></td>
	  <td><input type="number" name="" class="form-control" placeholder=""></td>
	  <td><input type="number" name="" class="form-control" placeholder=""></td>
	  <td><input type="number" name="" class="form-control" placeholder=""></td>
	  <td><input type="number" name="" class="form-control" placeholder=""></td>
	  <td><input type="number" name="" class="form-control" placeholder=""></td>
	  <td><input type="number" name="" class="form-control" placeholder=""></td>
	  <td><input type="number" name="" class="form-control" placeholder=""></td>
	  <td><input type="number" name="" class="form-control" placeholder=""></td>
	  <td><input type="number" name="" class="form-control" placeholder=""></td>
	  <td><input type="number" name="" class="form-control" placeholder=""></td>
	  <td><input type="number" name="" class="form-control" placeholder=""></td>
	  <td><input type="number" name="" class="form-control" placeholder=""></td>
	  <td><input type="number" name="" class="form-control" placeholder=""></td>
    </tr>
	<tr>
      <td>SUGAR 1%</td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
    </tr>
	<tr>
      <td>SUGAR 1/2%</td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
    </tr>
	<tr>
      <td>SUGAR 1/4%</td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
    </tr><tr>
      <td>SUGAR NIL</td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
    </tr>
	<tr>
      <td>ACETONE</td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
    </tr>
	<tr>
      <td>INSULIN (Dose) unit</td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
	  <td><input type="number" name="" class="form-control" placeholder=""></td>
    </tr>
	<tr>
      <td>ORAL DRUG (Dose) mg.</td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
	  <td><input type="number" name="" class="form-control" placeholder=""></td>
    </tr>
	<tr>
      <td>BLOOD SUGAR mgm.%</td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
	  <td><input type="number" name="" class="form-control" placeholder=""></td>
    </tr>
	<tr>
      <td>WEIGHT (kg)</td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
	  <td><input type="number" name="" class="form-control" placeholder=""></td>
    </tr>
	<tr>
      <td>DATE</td>
      <td><input type="date" name="" class="form-control" placeholder=""></td>
	  <td><input type="date" name="" class="form-control" placeholder=""></td>
	  <td><input type="date" name="" class="form-control" placeholder=""></td>
	  <td><input type="date" name="" class="form-control" placeholder=""></td>
	  <td><input type="date" name="" class="form-control" placeholder=""></td>
	  <td><input type="date" name="" class="form-control" placeholder=""></td>
	  <td><input type="date" name="" class="form-control" placeholder=""></td>
	  <td><input type="date" name="" class="form-control" placeholder=""></td>
	  <td><input type="date" name="" class="form-control" placeholder=""></td>
	  <td><input type="date" name="" class="form-control" placeholder=""></td>
	  <td><input type="date" name="" class="form-control" placeholder=""></td>
	  <td><input type="date" name="" class="form-control" placeholder=""></td>
	  <td><input type="date" name="" class="form-control" placeholder=""></td>
	  <td><input type="date" name="" class="form-control" placeholder=""></td>
	  <td><input type="date" name="" class="form-control" placeholder=""></td>
	  <td><input type="date" name="" class="form-control" placeholder=""></td>
	  <td><input type="date" name="" class="form-control" placeholder=""></td>
	  <td><input type="date" name="" class="form-control" placeholder=""></td>
	  <td><input type="date" name="" class="form-control" placeholder=""></td>
	  <td><input type="date" name="" class="form-control" placeholder=""></td>
	  <td><input type="date" name="" class="form-control" placeholder=""></td>
    </tr>
	<tr>
      <td>TIME</td>
      <td><input type="time" name="" class="form-control" placeholder=""></td>
	  <td><input type="time" name="" class="form-control" placeholder=""></td>
	  <td><input type="time" name="" class="form-control" placeholder=""></td>
	  <td><input type="time" name="" class="form-control" placeholder=""></td>
	  <td><input type="time" name="" class="form-control" placeholder=""></td>
	  <td><input type="time" name="" class="form-control" placeholder=""></td>
	  <td><input type="time" name="" class="form-control" placeholder=""></td>
	  <td><input type="time" name="" class="form-control" placeholder=""></td>
	  <td><input type="time" name="" class="form-control" placeholder=""></td>
	  <td><input type="time" name="" class="form-control" placeholder=""></td>
	  <td><input type="time" name="" class="form-control" placeholder=""></td>
	  <td><input type="time" name="" class="form-control" placeholder=""></td>
	  <td><input type="time" name="" class="form-control" placeholder=""></td>
	  <td><input type="time" name="" class="form-control" placeholder=""></td>
	  <td><input type="time" name="" class="form-control" placeholder=""></td>
	  <td><input type="time" name="" class="form-control" placeholder=""></td>
	  <td><input type="time" name="" class="form-control" placeholder=""></td>
	  <td><input type="time" name="" class="form-control" placeholder=""></td>
	  <td><input type="time" name="" class="form-control" placeholder=""></td>
	  <td><input type="time" name="" class="form-control" placeholder=""></td>
	  <td><input type="time" name="" class="form-control" placeholder=""></td>
    </tr>
	
  </tbody>
</table>


       
    </div>
</div> 
@endsection