@extends('layouts.app')

@section('content')
<div class="col-md-12">
    <div class="card">
        
        <div class="col-m-3 offset-md-5">
	<H2 class="mt-20">
	 FLUID INTAKE OUTPUT CHART<br>

	</H2>
</div>
<h4>TO BE COMPLETED BY NURSING STAFF</h4>
<br>
			  <div class="row">
	            <div class="form-group row col-md-6">
				    <label for="staticEmail" class="col-sm-2 col-form-label">NAME</label>
				    <div class="col-sm-10">
				      <input type="	text" name="" class=" form-control" placeholder="">
				    </div>
				 </div>
				 <div class="form-group row col-md-6">
				    <label for="staticEmail" class="col-sm-2 col-form-label">IPNO</label>
				    <div class="col-sm-10">
				      <input type="	text" name="" class=" form-control" placeholder="">
				    </div>
				 </div>
			</div>

			  <div class="row">
	            <div class="form-group row col-md-6">
				    <label for="staticEmail" class="col-sm-2 col-form-label">AGE</label>
				    <div class="col-sm-10">
				      <input type="number" name="" class=" form-control" placeholder="">
				    </div>
				 </div>
				 <div class="form-group row col-md-6">
				    <label for="staticEmail" class="col-sm-2 col-form-label">SEX
                   
				    </label>
				    <div class="col-sm-10">
				       <select name="SEX">
                    	<option value="SEX">Male</option>
                    	<option value="SEX">Female</option>
                    </select>
				   
				 </div>
				</div>
				<div class="row">
				 <div class="form-group row col-md-6">
				    <label for="staticEmail" class="col-sm-2 col-form-label">WARD</label>
				    <div class="col-sm-10">
				      <input type="text" name="" class=" form-control" placeholder="">
				    </div>
				 </div>
			
                    <div class="form-group row col-md-6">
				    <label for="staticEmail" class="col-sm-2 col-form-label">BED</label>
				    <div class="col-sm-10">
				      <input type="text" name="" class=" form-control" placeholder="">
				    </div>
				 </div>
		</div>
					  <div class="row">
	            <div class="form-group row col-md-6">
				    <label for="staticEmail" class="col-sm-2 col-form-label">BODY WEIGHT(kg)</label>
				    <div class="col-sm-10">
				      <input type="	text" name="" class=" form-control" placeholder="">
				    </div>
				 </div>
				 <div class="form-group row col-md-6">
				    <label for="staticEmail" class="col-sm-2 col-form-label">balance yesterday C.C</label>
				    <div class="col-sm-10">
				      <input type="	text" name="" class=" form-control" placeholder="">
				    </div>
				 </div>
			</div>
<span class="col-md-4"><span class="row"><span class="col-md-5">DATE  </span><span class="col-md-7"><input type="date" name="" class=" form-control" placeholder=""></span></span></span>

<table class="table-bordered">
	<thead>
		<tr>
			<th>INSTRUCTIONS</th>
			<th>TIME</th>
			<th>SYSTOLE B.P</th>
			<th colspan="3">INTAKE</th>
			<th colspan="5">OUTPUT(C.C.'s)</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td>Type of fluid</td>
			<td>Litra vol.</td>
			<td>Oral</td>
			<td>Noso Gastric Sunction</td>
			<td>Vomitous</td>
			<td>Dried stool or Fistula</td>
			<td>Urine Amount</td>
			<td>Urine Sp. Gr.</td>
		</tr>
		<tr>
			<td></td>
			<td>9.am</td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
		</tr>
			<tr>
			<td></td>
			<td>10.am</td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
		</tr>
			<tr>
			<td></td>
			<td>11.am</td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
		</tr>
			<tr>
			<td rowspan="2">INSTRUCTION FOR INTRAVENOUS FLUID TODAY</td>
			<td>12.noon</td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
		</tr>
			<tr>
			
			<td>1.pm</td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
		</tr>
			<tr>
			<td><input type="text" name=""></td>
			<td>2</td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
		</tr>
		</tr>
			<tr>
			<td><input type="text" name=""></td>
			<td>3</td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
		</tr>
				</tr>
			<tr>
			<td><input type="text" name=""></td>
			<td>4</td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
		</tr>
				</tr>
			<tr>
			<td><input type="text" name=""></td>
			<td>4</td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
		</tr>
				</tr>
			<tr>
			<td><input type="text" name=""></td>
			<td>5</td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
		</tr>
				</tr>
			<tr>
			<td><input type="text" name=""></td>
			<td>6</td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
		</tr>
				</tr>
			<tr>
			<td><input type="text" name=""></td>
			<td>7</td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
		</tr>

<tr>
			<td rowspan="2">INSTRUCTION FOR ORAL FLUIDS TODAY</td>
			<td>8</td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
		</tr>
			<tr>
			
			<td>9</td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
		</tr>
			<tr>
			<td><input type="text" name=""></td>
			<td>10</td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
		</tr>
					<tr>
			<td><input type="text" name=""></td>
			<td>11</td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
		</tr>
					<tr>
			<td><input type="text" name=""></td>
			<td>12 MN</td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
		</tr>
					<tr>
			<td><input type="text" name=""></td>
			<td>1am</td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
		</tr>
					<tr>
			<td>INSTRUCTION FOR NOSO-GASTRIC SUNCTION TODAY</td>
			<td>2</td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
		</tr>
					<tr>
			<td><input type="text" name=""></td>
			<td>3</td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
		</tr>
					<tr>
			<td><input type="text" name=""></td>
			<td>4</td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
		</tr>
					<tr>
			<td><input type="text" name=""></td>
			<td>5</td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
		</tr>
					<tr>
			<td><input type="text" name=""></td>
			<td>6</td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
		</tr>
					<tr>
			<td><input type="text" name=""></td>
			<td>7</td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
		</tr>
					<tr>
			<td><input type="text" name=""></td>
			<td>8 am</td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
			<td><input type="number" name=""></td>
		</tr>
	</tbody>
</table>
<br><br><br>
<div class="col-m-3 offset-md-3">
	<H3 class="mt-20">
		TO BE COMPLETED BY MEDICAL OFFICER
	</H3>
</div>
<br><br>
<table class="table-bordered">
	<thead>
		<tr>
			<th colspan="2">OUTPUT</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>Urine</td>
			<td><input type="number" name=""></td>
		</tr>
		<tr>
			<td>Drain stool,or fistula</td>
			<td><input type="number" name=""></td>
		</tr>
		<tr>
			<td>Vomitous</td>
			<td><input type="number" name=""></td>
		</tr>
		<tr>
			<td>Naso-gastric Suntion</td>
			<td><input type="number" name=""></td>
		</tr>
		<tr>
			<td>Insensible loss</td>
			<td><input type="number" name=""></td>
		</tr>
		<tr>
			<td><h6>Total Output</h6></td>
			<td><input type="number" name=""></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
		</tr>

		<tr>
			<td><h6>INTAKE</h6></td>
			<td></td>
		</tr>
			<tr>
			<td>INTRAVENOUS</td>
			<td><input type="number" name=""></td>
		</tr>
       <tr>
			<td>ORAL</td>
			<td><input type="number" name=""></td>
		</tr>
		<tr>
			<td><h6>A TOTAL INTAKE</h6></td>
			<td><input type="number" name=""></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td>BALANCE FOR TODAY(A+B=+/-___CC)</td>
			<td><input type="number" name=""></td>
		</tr>

	</tbody>
</table>
















        
    </div>
</div> 
@endsection