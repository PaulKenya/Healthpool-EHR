@extends('layouts.app')

@section('content')
<div class="col-md-12">
    <div class="card">
       

<div class="col-m-3 offset-md-5">
	<H3 class="mt-20">
		PRIVATE WING
	</H3>
</div>
<h4>PRESSURE SORE PREVENTION SCORE CARD</h4>


<div class="row">
	            <div class="form-group row col-md-6">
				    <label for="staticEmail" class="col-sm-2 col-form-label">PATIENT'S NAME</label>
				    <div class="col-sm-10">
				      <input type="	text" name="" class=" form-control" placeholder="">
				    </div>
				 </div>
				 <div class="form-group row col-md-6">
				    <label for="staticEmail" class="col-sm-2 col-form-label">IP/NO</label>
				    <div class="col-sm-10">
				      <input type="number" name="" class=" form-control" placeholder="">
				    </div>
				 </div>
				  <div class="form-group row col-md-6">
				    <label for="staticEmail" class="col-sm-2 col-form-label">WARD</label>
				    <div class="col-sm-10">
				      <input type="text" name="" class=" form-control" placeholder="">
				    </div>
				 </div>
			</div>

<div class="row">
	            <div class="form-group row col-md-6">
				    <label for="staticEmail" class="col-sm-2 col-form-label">SEX</label>
				    <div class="col-sm-10">
				      <select name="SEX" >
				      	<option value="SEX">Male</option>
				        <option value="SEX">Female</option>
				      </select>
				    </div>
				 </div>
				 <div class="form-group row col-md-6">
				    <label for="staticEmail" class="col-sm-2 col-form-label">DATE OF ADMISSION</label>
				    <div class="col-sm-10">
				      <input type="date" name="" class=" form-control" placeholder="">
				    </div>
				 </div>
				  <div class="form-group row col-md-6">
				    <label for="staticEmail" class="col-sm-2 col-form-label">DATE OF DISCHARGE</label>
				    <div class="col-sm-10">
				      <input type="date" name="" class=" form-control" placeholder="">
				    </div>
				 </div>
			</div>

<table class="table table-bordered">
	<thead>
		<tr>
			<th colspan="2"></th>
			<th colspan="13">DATES</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td></td>
			<td>SCORE</td>
			<td><input type="date" name="" class=" form-control" placeholder=""></td>
			<td><input type="date" name="" class=" form-control" placeholder=""></td>
			<td><input type="date" name="" class=" form-control" placeholder=""></td>
			<td><input type="date" name="" class=" form-control" placeholder=""></td>
			<td><input type="date" name="" class=" form-control" placeholder=""></td>
			<td><input type="date" name="" class=" form-control" placeholder=""></td>
			<td><input type="date" name="" class=" form-control" placeholder=""></td>
			<td><input type="date" name="" class=" form-control" placeholder=""></td>
			<td><input type="date" name="" class=" form-control" placeholder=""></td>
			<td><input type="date" name="" class=" form-control" placeholder=""></td>
			<td><input type="date" name="" class=" form-control" placeholder=""></td>
			<td><input type="date" name="" class=" form-control" placeholder=""></td>
			<td><input type="date" name="" class=" form-control" placeholder=""></td>


		</tr>
		<tr>
			<td>BUILD(Weight for height)</td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>

		</tr>
		<tr>
			<td>Average</td>
			<td>0</td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			
			

		</tr>
		<tr>
			<td>Above average</td>
			<td>1</td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			
			

		</tr>
		<tr>
			<td>Obese</td>
			<td>2</td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			
			

		</tr>
		<tr>
			<td>Below Average</td>
			<td>4</td>
						<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>

			
			

		</tr>
     

     <tr>
			<td>SKIN TYPE(In Risk areas)</td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>

		</tr>
		<tr>
			<td>HEALTHY</td>
			<td>0</td>
						<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>

			

		</tr>
				<tr>
			<td>Soft</td>
			<td>1</td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>

			

		</tr>
				<tr>
			<td>Dry</td>
			<td>1</td>
<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			
			

		</tr>
						<tr>
			<td>Oedematous</td>
			<td>2</td>
<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>

			
			

		</tr>
						<tr>
			<td>Cold and clammy</td>
			<td>2</td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>

			

		</tr>
						<tr>
			<td>Discoloured</td>
			<td>3</td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>

			

		</tr>
		<tr>
			<td>Sore</td>
			<td>3</td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>

			

		</tr>
		<tr>
			<td>Broken Skin</td>
			<td>8</td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>

			

		</tr>
<tr>
			<td>AGE</td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>

		</tr>
	  <tr>
			<td>14-44</td>
			<td>1</td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>

			

		</tr>

				<tr>
			<td>45-64</td>
			<td>2</td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>

			

		</tr>
				<tr>
			<td>65+</td>
			<td>4</td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>

			

		</tr>
			<tr>
			<td>CONTINENCE</td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>

		</tr>
		  <tr>
			<td>Complete/catheterised</td>
			<td>0</td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>

			
</tr>
  <tr>
			<td>Occasional incontinence</td>
			<td>1</td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>

			
</tr>
  <tr>
			<td>Catheterised/incontinence of feaces</td>
			<td>2</td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>

			
</tr>
  <tr>
			<td>Doubly incontinence</td>
			<td>3</td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>

			
</tr>
	<tr>
			<td>APPETITE</td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>

		</tr>

		  <tr>
			<td>Average</td>
			<td>0</td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>

			
</tr>
  <tr>
			<td>Poor</td>
			<td>2</td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>

			
</tr>
  <tr>
			<td>NG Tube/TPN</td>
			<td>2</td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>

			
</tr>
  <tr>
			<td>NBM/Anorexic/Fluid only</td>
			<td>4</td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>

			
</tr>

	<tr>
			<td>MOBILITY</td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>

		</tr>

	  <tr>
			<td>Fully</td>
			<td>0</td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>

			
</tr>

	  <tr>
			<td>Restless/Fidgety</td>
			<td>1</td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>

			
</tr>
	  <tr>
			<td>Restricted</td>
			<td>3</td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>

			
</tr>
	  <tr>
			<td>Inert/Traction/Post-Op</td>
			<td>4</td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>

			
</tr>
	  <tr>
			<td>Chairbound</td>
			<td>5</td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>

			
</tr>
	<tr>
			<td>SPECIAL RISKS</td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>

		</tr>
	  <tr>
			<td>Terminal Illness</td>
			<td>8</td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>

			
</tr>
	  <tr>
			<td>Cardiac Failure</td>
			<td>5</td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>

			
</tr>
	  <tr>
			<td>Peripheral Vascular Diseases</td>
			<td>5</td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>

			
</tr>
	  <tr>
			<td>Anaemia</td>
			<td>2</td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>

			
</tr>
	  <tr>
			<td>Smoking</td>
			<td>1</td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>

			
</tr>
<tr>
			<td>Neurological deficit:</td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>

		</tr>




	  <tr>
			<td>Motoe/Sensory,Paraplegia,Tetraplegia,Quadriplegia</td>
			<td>5</td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>

			
</tr>

	  <tr>
			<td>Diabetes ,MS,CVA</td>
			<td>5</td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>

			
</tr>

	<tr>
			<td>MEDICATION</td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>

		</tr>




	  <tr>
			<td>Steroids/Cytotoxics/Anticoagulants</td>
			<td>4</td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>

			
</tr>
	  <tr>
			<td>High Dose Anti-inflammatory drugs</td>
			<td>2</td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>
			<td><input type="checkbox" name="" class=" form-control" placeholder=""></td>

			
</tr>
	<tr>
			<td>TOTAL SCORE</td>
			<td><input type="number" name="" class=" form-control" placeholder=""></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>

		</tr>
</tbody>


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
</table>

<br><br>
<div align="center">
<button type="">add</button>
<button type="">edit</button>
<button type="">delete</button>
<button type="">modify</button>
<button type="">print</button>
</div>

       
    </div>
</div> 
@endsection