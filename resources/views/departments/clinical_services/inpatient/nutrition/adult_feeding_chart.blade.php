@extends('layouts.master  ')

@section('content')
<div class="row page-titles">
    <div class="col-md-12 align-self-center text-center">
        <h4 class="theme-cl">Adult Feeding Chart</h4>
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
                        <th>Title1</th>
                        <th>Title2</th>
                        <th>Title3</th>
                        <th>Title4</th>
                        <th>Title5</th>
                        <th>Title6</th>
                        <th>Title7</th>
						<th>Title8</th>
						<th>Title9</th>
						<th>Title10</th>
						<th>Title11</th>
						<th>Title12</th>
                        <th>Title14</th>
						<th>Title15</th>
						
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
					</div>
				
					</div>
                    <div class="modal-body">
					</div>
    <div class="col-md-12">
        <div class="card">
            <div class="container">
                <div class="col-m-3 offset-md-3">
                    <form action="{{route('adult_feeding_post')}}" method="post" >{!! csrf_field() !!}
                        <input type="hidden" name="departments" value="default">
                    <H3 class="mt-20">
                        ADULT FEEDING CHAT
                    </H3>
                </div>

                <span class="row"> <span class="col-md-4">OP/IP NO</span> <span class="col-md-8"> <input type="	text" name="op_ip_no" class=" form-control" placeholder=""></span></span>
                <br>
                <span class="row"> <span class="col-md-4">NAME</span> <span class="col-md-8"> <input type="	text" name="name" class=" form-control" placeholder=""></span></span>
                <br>

                <span class="row">
				  <span class="col-md-3">AGE<input type="text" name="" class=" form-control" placeholder=""></span>
				  <span class="col-md-3">SEX<input type="	text" name="sex" class=" form-control" placeholder=""></span>
		        </span>

                <br>
                <span class="row"> <span class="col-md-4">Diagnosis/Nutrition interpretation</span> <span class="col-md-8"> <textarea type="text" name="diagnostics_nutrition_interpretation" class=" form-control" placeholder=""></textarea></span></span>

                <h1>PATIENT NUTRITION REQUIREMENT</h1>
                <br>
                <span class="">
			  <span class="row">
				  <span class="col-md-3">PROT(gms)<input type="number" name="" class=" form-control" placeholder=""></span>
				  <span class="col-md-3">CHO(gms)<input type="number" name="cho" class=" form-control" placeholder=""></span>
				  <span class="col-md-3">FAT(gms)<input type="number" name="" class=" form-control" placeholder=""></span>
				  <span class="col-md-3">FLUIDS(MLS)<input type="number" name="fluid" class=" form-control" placeholder=""></span>
				   <span class="col-md-3">TOTAL KCALS<input type="number" name="total_kcals" class=" form-control" placeholder=""></span>
			  </span>
			</span>
                <br>
                <span class="row"> <span class="col-md-4">Route of Admission</span> <span class="col-md-8"> <input type="text" name="" class=" form-control" placeholder=""></span></span>

                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>TIME</th>
                        <th>FEED</th>
                        <th>AMOUNT(gms or mls)</th>
                        <th>FLOW RATE(mls/hr)</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><input type="time" name="time" class=" form-control" placeholder=""></td>
                        <td><input type="text" name="feed" class=" form-control" placeholder=""></td>
                        <td><input type="number" name="amount" class=" form-control" placeholder=""></td>
                        <td><input type="number" name="flow_rate" class=" form-control" placeholder=""></td>
                    </tr>

                    </tbody>
                </table>

                <span class="row"> <span class="col-md-4">Comments/Recommendations</span> <span class="col-md-8"> <textarea type="	text" name="comments_recommendations" class=" form-control" placeholder=""></textarea></span></span>
                <span class="">
			  <span class="row">
				  <span class="col-md-3">Nutritionist Name<input type="text" name="nutritionists_name" class=" form-control" placeholder=""></span>
				  <span class="col-md-3">Sign<input type="text" name="sign" class=" form-control" placeholder=""></span>
				  <span class="col-md-3">Date<input type="date" name="date" class=" form-control" placeholder=""></span>

			  </span>
		  </span>
                <br><br>
                <div align="center">
                    <button type="">add</button>
                    <button type="">edit</button>
                    <button type="">delete</button>
                    <button type="">modify</button>
                    <button type="">print</button>
                </div>
                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>



                <div class="col-m-3 offset-md-5">
                    <H3 class="mt-20">
                        DIET REQUISITION FORM
                    </H3>
                </div>
                <span class="row"> <span class="col-md-4">Ward</span> <span class="col-md-8"> <input type="text" name="ward" class=" form-control" placeholder=""></span></span><br>
                <span class="row"> <span class="col-md-4">Date</span> <span class="col-md-8"> <input type="date" name="oncall" class=" form-control" placeholder=""></span></span><br>
                On call:
                <input type="radio"  name="On call:"> YES
                <input type="radio"  name="On call:"> NO
                <br><br><br>



                <span class="row"> <span class="col-md-4">Total number of patients</span> <span class="col-md-8"> <input type="number" name="" class=" form-control" placeholder=""></span></span><br>
                <span class="row"> <span class="col-md-4">Children</span> <span class="col-md-8"> <input type="number" name="children" class=" form-control" placeholder=""></span></span><br>
                <span class="row"> <span class="col-md-4">Adults</span> <span class="col-md-8"> <input type="number" name="adults" class=" form-control" placeholder=""></span></span><br>
                <span class="row"> <span class="col-md-4">Well people</span> <span class="col-md-8"> <input type="number" name="well_done" class=" form-control" placeholder=""></span></span><br>
                <span class="row"> <span class="col-md-4">Patients on NGT</span> <span class="col-md-8"> <input type="number" name="patients_on_ngt" class=" form-control" placeholder=""></span></span><br>

                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th></th>
                        <th>Description of item/diet</th>
                        <th>No. of Pts</th>
                        <th>Amount required</th>
                        <th>Amount Issued</th>
                    </tr>

                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>Regular Diet</td>
                        <td><input type="number" name="no_of_patient" class=" form-control" placeholder=""></td>
                        <td><input type="number" name="amount_required" class=" form-control" placeholder=""></td>
                        <td><input type="number" name="amount_issued" class=" form-control" placeholder=""></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Low salt Diet</td>
                        <td><input type="number" name="" class=" form-control" placeholder=""></td>
                        <td><input type="number" name="" class=" form-control" placeholder=""></td>
                        <td><input type="number" name="" class=" form-control" placeholder=""></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Diabetic Diet</td>
                        <td><input type="number" name="" class=" form-control" placeholder=""></td>
                        <td><input type="number" name="" class=" form-control" placeholder=""></td>
                        <td><input type="number" name="" class=" form-control" placeholder=""></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Low fat Diet</td>
                        <td><input type="number" name="" class=" form-control" placeholder=""></td>
                        <td><input type="number" name="" class=" form-control" placeholder=""></td>
                        <td><input type="number" name="" class=" form-control" placeholder=""></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Renal Diet</td>
                        <td><input type="number" name="" class=" form-control" placeholder=""></td>
                        <td><input type="number" name="" class=" form-control" placeholder=""></td>
                        <td><input type="number" name="" class=" form-control" placeholder=""></td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Soft light Diet</td>
                        <td><input type="number" name="" class=" form-control" placeholder=""></td>
                        <td><input type="number" name="" class=" form-control" placeholder=""></td>
                        <td><input type="number" name="" class=" form-control" placeholder=""></td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>High protein diet(HBV)</td>
                        <td><input type="number" name="" class=" form-control" placeholder=""></td>
                        <td><input type="number" name="" class=" form-control" placeholder=""></td>
                        <td><input type="number" name="" class=" form-control" placeholder=""></td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>Toto Diet</td>
                        <td><input type="number" name="" class=" form-control" placeholder=""></td>
                        <td><input type="number" name="" class=" form-control" placeholder=""></td>
                        <td><input type="number" name="" class=" form-control" placeholder=""></td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>Tea/cocoa with sugar</td>
                        <td><input type="number" name="" class=" form-control" placeholder=""></td>
                        <td><input type="number" name="" class=" form-control" placeholder=""></td>
                        <td><input type="number" name="" class=" form-control" placeholder=""></td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>Porridge with sugar</td>
                        <td><input type="number" name="" class=" form-control" placeholder=""></td>
                        <td><input type="number" name="" class=" form-control" placeholder=""></td>
                        <td><input type="number" name="" class=" form-control" placeholder=""></td>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td>White bread(slices)</td>
                        <td><input type="number" name="" class=" form-control" placeholder=""></td>
                        <td><input type="number" name="" class=" form-control" placeholder=""></td>
                        <td><input type="number" name="" class=" form-control" placeholder=""></td>
                    </tr>
                    <tr>
                        <td>12</td>
                        <td>Specify any other</td>
                        <td><input type="number" name="" class=" form-control" placeholder=""></td>
                        <td><input type="number" name="" class=" form-control" placeholder=""></td>
                        <td><input type="number" name="" class=" form-control" placeholder=""></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    </tbody>
                </table>

                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th></th>
                        <th>Description of item/diet</th>
                        <th>No. of Pts</th>
                        <th>Amount required</th>
                        <th>Amount Issued</th>
                    </tr>

                    </thead>
                    <tbody>
                    <tr>
                        <td></td>
                        <td>Special feeds</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td rowspan="2">Milk packets:Fresh<br><br><br>Mala</td>
                        <td><input type="number" name="" class=" form-control" placeholder=""></td>
                        <td><input type="number" name="" class=" form-control" placeholder=""></td>
                        <td><input type="number" name="" class=" form-control" placeholder=""></td>
                    </tr>
                    <tr>
                        <td></td>

                        <td><input type="number" name="" class=" form-control" placeholder=""></td>
                        <td><input type="number" name="" class=" form-control" placeholder=""></td>
                        <td><input type="number" name="" class=" form-control" placeholder=""></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>F75</td>
                        <td><input type="number" name="" class=" form-control" placeholder=""></td>
                        <td><input type="number" name="" class=" form-control" placeholder=""></td>
                        <td><input type="number" name="" class=" form-control" placeholder=""></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>F100</td>
                        <td><input type="number" name="" class=" form-control" placeholder=""></td>
                        <td><input type="number" name="" class=" form-control" placeholder=""></td>
                        <td><input type="number" name="" class=" form-control" placeholder=""></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Special uji</td>
                        <td><input type="number" name="" class=" form-control" placeholder=""></td>
                        <td><input type="number" name="" class=" form-control" placeholder=""></td>
                        <td><input type="number" name="" class=" form-control" placeholder=""></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Special soup</td>
                        <td><input type="number" name="" class=" form-control" placeholder=""></td>
                        <td><input type="number" name="" class=" form-control" placeholder=""></td>
                        <td><input type="number" name="" class=" form-control" placeholder=""></td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Enriched Lactose free uji</td>
                        <td><input type="number" name="" class=" form-control" placeholder=""></td>
                        <td><input type="number" name="" class=" form-control" placeholder=""></td>
                        <td><input type="number" name="" class=" form-control" placeholder=""></td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Uji without sugar</td>
                        <td><input type="number" name="" class=" form-control" placeholder=""></td>
                        <td><input type="number" name="" class=" form-control" placeholder=""></td>
                        <td><input type="number" name="" class=" form-control" placeholder=""></td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>Tea without sugar</td>
                        <td><input type="number" name="" class=" form-control" placeholder=""></td>
                        <td><input type="number" name="" class=" form-control" placeholder=""></td>
                        <td><input type="number" name="" class=" form-control" placeholder=""></td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>Brown bread</td>
                        <td><input type="number" name="" class=" form-control" placeholder=""></td>
                        <td><input type="number" name="" class=" form-control" placeholder=""></td>
                        <td><input type="number" name="" class=" form-control" placeholder=""></td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>fruits</td>
                        <td><input type="number" name="" class=" form-control" placeholder=""></td>
                        <td><input type="number" name="" class=" form-control" placeholder=""></td>
                        <td><input type="number" name="" class=" form-control" placeholder=""></td>
                    </tr>

                    <tr>
                        <td>11</td>
                        <td rowspan="2">Eggs:Boiled<br><br><br>Fried</td>
                        <td><input type="number" name="" class=" form-control" placeholder=""></td>
                        <td><input type="number" name="" class=" form-control" placeholder=""></td>
                        <td><input type="number" name="" class=" form-control" placeholder=""></td>
                    </tr>
                    <tr>
                        <td></td>

                        <td><input type="number" name="" class=" form-control" placeholder=""></td>
                        <td><input type="number" name="" class=" form-control" placeholder=""></td>
                        <td><input type="number" name="" class=" form-control" placeholder=""></td>
                    </tr>

                    </tbody>
                </table>
                <span class="row"> <span class="col-md-4">Remarks</span> <span class="col-md-8"> <textarea type="	text" name="remarks" class=" form-control" placeholder=""></textarea></span></span><br>
                <span class="row"> <span class="col-md-4">ORDERED BY: Name</span> <span class="col-md-8"> <input type="	text" name="ordered_by" class=" form-control" placeholder=""></span></span><br>
                <span class="row"> <span class="col-md-4">Designation</span> <span class="col-md-8"> <input type="	text" name="signature" class=" form-control" placeholder=""></span></span><br>
                <span class="row"> <span class="col-md-4">Signature</span> <span class="col-md-8"> <input type="	text" name="patient_name" class=" form-control" placeholder=""></span></span><br>
                <span class="row"> <span class="col-md-4">Date</span> <span class="col-md-8"> <input type="date" name="doa" class=" form-control" placeholder=""></span></span>
                <br><br>
                <div align="center">
                    <button type="">add</button>
                    <button type="">edit</button>
                    <button type="">delete</button>
                    <button type="">modify</button>
                    <button type="">print</button>
                </div>
                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

                <h1>NUTRITION CARE PROCESS FORM</h1>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Patient name:<input type="text" name="patient_name" class=" form-control" placeholder=""></th>
                        <th>DOA:<input type="	text" name="" class=" form-control" placeholder="">DOD:<input type="	text" name="doa" class=" form-control" placeholder=""></th>
                        <th>Ward:<input type="	text" name="" class=" form-control" placeholder="">BED:<input type="	text" name="" class=" form-control" placeholder=""></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>IP/NO:<input type="	text" name="" class=" form-control" placeholder=""></td>
                        <td>Age:<input type="number" name="" class=" form-control" placeholder=""></td>
                        <td>Sex:<select name="sex">
                                <option value="sex">Male</option>

                                <option value="sex">Female</option>
                            </select></td>
                    </tr>
                    <tr>
                        <td>Principle diagnosis:<textarea type="text" name="principle_diagnosis" class=" form-control" placeholder=""></textarea></td>
                    </tr>
                    </tbody>
                </table>
                <h3>NUTRITION ASSESSMENT DATA</h3>
                <hr>
                <h4>Biochemical Data,Medical Tests and procedures &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Antropometric Measurements</h4>
                <span class="">
			  <span class="row">
				  <span class="col-md-3">Height(m)<input type="number" name="height" class=" form-control" placeholder=""></span>
				  <span class="col-md-3">Weight(Kg)<input type="number" name="weight" class=" form-control" placeholder=""></span>
				  <span class="col-md-3">BMI(kg/m2)<input type="number" name="bmi" class=" form-control" placeholder=""></span>
				  <span class="col-md-3">MUAC(cm)<input type="number" name="muac" class=" form-control" placeholder=""></span>
				  <span class="col-md-3">Z-Score<input type="number" name="z_score" class=" form-control" placeholder=""></span>
				  <span class="col-md-3">Others<input type="text" name="others" class=" form-control" placeholder=""></span>
			  </span>
		  </span>
                <hr>
                <h4>Physical Exam findings/Clinical Assessment &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Food and Nutrition History</h4>
                <textarea type="text" name="" class=" form-control" placeholder=""></textarea>
                <hr>
                <h4>Client's History</h4>
                <span class="row">
	Medications:<textarea type="text" name="medication" class=" form-control" placeholder=""></textarea>
	Procedures:<textarea type="text" name="procedure" class=" form-control" placeholder=""></textarea>
	Prescribed Diet:<textarea type="text" name="prescribed_diet" class=" form-control" placeholder=""></textarea>

</span>
                <hr>
                <h4>NUTRITION DIAGNOSIS</h4>
                <hr>
                #1 Problem:<textarea type="text" name="1patient" class=" form-control" placeholder=""></textarea><br>
                Etiology:<textarea type="text" name="etiology" class=" form-control" placeholder=""></textarea><br>
                #2 Problems:<textarea type="text" name="2patient" class=" form-control" placeholder=""></textarea><br>
                Etiology:<textarea type="text" name="" class=" form-control" placeholder=""></textarea><br>
                Signs/Symptoms:<textarea type="text" name="sign_symptoms" class=" form-control" placeholder=""></textarea>
                <hr>
                <h4>NUTRITION INTERVENTION</h4>
                Nutrition Prescription:<textarea type="text" name="nutrition_prescription" class=" form-control" placeholder=""></textarea><br>
                Prescribed Diet:<textarea type="text" name="" class=" form-control" placeholder=""></textarea>
                <span class="">
			  <span class="row">
				  <span class="col-md-3">Prot(gms)<input type="number" name="prot" class=" form-control" placeholder=""></span>
				  <span class="col-md-3">CHOs(gm)<input type="number" name="chos" class=" form-control" placeholder=""></span>
				  <span class="col-md-3">Fat(gm)<input type="number" name="fat" class=" form-control" placeholder=""></span>
				  <span class="col-md-3">Kcal<input type="number" name="kcal" class=" form-control" placeholder=""></span>
		        </span>
            </span>


                <span class="">
			  <span class="row">
				  <span class="col-md-3">Others<input type="text" name="others2" class=" form-control" placeholder=""></span>
				  <span class="col-md-3">Route of Administration<input type="	text" name="route_of_admission" class=" form-control" placeholder=""></span>
		        </span>
            </span>
                Other interventions:<textarea type="text" name="other_interventions" class=" form-control" placeholder=""></textarea>

                <span class="">
			  <span class="row">
				  <span class="col-md-3">Nutritionist<input type="text" name="nutritionists" class=" form-control" placeholder=""></span>
				  <span class="col-md-3">Sign<input type="	text" name="sign2" class=" form-control" placeholder=""></span>
				  <span class="col-md-3">Date<input type="date" name="" class=" form-control" placeholder=""></span>
		        </span>
            </span>
                <br><br>
                <div align="center">
                    <button type="">add</button>
                    <button type="">edit</button>
                    <button type="">delete</button>
                    <button type="">modify</button>
                    <button type="">print</button>
                </div>
                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>



                <div class="col-m-3 offset-md-5">
                    <H3 class="mt-20">
                        MONITORING & EVALUATION
                    </H3>
                </div>


                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>DATE</th>
                        <th>TIME</th>
                        <th>NUTRITION REVIEW NOTES/REMARKS</th>
                        <th>NUTRITION OFFICER</th>
                        <th>SIGNATURE</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><input type="date" name="" class=" form-control" placeholder=""></td>
                        <td><input type="time" name="" class=" form-control" placeholder=""></td>
                        <td><textarea type="text" name="" class=" form-control" placeholder=""></textarea></td>
                        <td><input type="text" name="nutrition_officer" class=" form-control" placeholder=""></td>
                        <td><input type="text" name="signature2" class=" form-control" placeholder=""></td>

                    </tr>
                    <tr>
                        <td><input type="date" name="" class=" form-control" placeholder=""></td>
                        <td><input type="time" name="" class=" form-control" placeholder=""></td>
                        <td><textarea type="text" name="" class=" form-control" placeholder=""></textarea></td>
                        <td><input type="text" name="" class=" form-control" placeholder=""></td>
                        <td><input type="text" name="" class=" form-control" placeholder=""></td>

                    </tr>
                    <tr>
                        <td><input type="date" name="" class=" form-control" placeholder=""></td>
                        <td><input type="time" name="" class=" form-control" placeholder=""></td>
                        <td><textarea type="text" name="" class=" form-control" placeholder=""></textarea></td>
                        <td><input type="text" name="" class=" form-control" placeholder=""></td>
                        <td><input type="text" name="" class=" form-control" placeholder=""></td>

                    </tr>
                    </tbody>
                </table>
                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

                <div class="col-m-3 offset-md-5">
                    <H3 class="mt-20">
                        NUTRITION DEPARTMENT DAILY WARD REPORT
                    </H3>
                </div>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>NO</th>
                        <th>NAME OF PATIENT</th>
                        <th>IP NO.</th>
                        <th>WARD</th>
                        <th>SERVICE CODE No.</th>
                        <th>SUPPLEMENT CODE No.</th>
                        <th>CHARGESHEET No./Bill No.</th>
                        <th>Date</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td><input type="text" name="" class="form-control" placeholder=""></td>
                        <td><input type="number" name="" class="form-control" placeholder=""></td>
                        <td><input type="text" name="" class="form-control" placeholder=""></td>
                        <td><input type="number" name="" class="form-control" placeholder=""></td>
                        <td><input type="number" name="" class="form-control" placeholder=""></td>
                        <td><input type="number" name="" class="form-control" placeholder=""></td>
                        <td><input type="date" name="" class="form-control" placeholder=""></td>


                    </tr>
                    <tr>
                        <td>2</td>
                        <td><input type="text" name="" class="form-control" placeholder=""></td>
                        <td><input type="number" name="" class="form-control" placeholder=""></td>
                        <td><input type="text" name="" class="form-control" placeholder=""></td>
                        <td><input type="number" name="" class="form-control" placeholder=""></td>
                        <td><input type="number" name="" class="form-control" placeholder=""></td>
                        <td><input type="number" name="" class="form-control" placeholder=""></td>
                        <td><input type="date" name="" class="form-control" placeholder=""></td>


                    </tr>
                    <tr>
                        <td>3</td>
                        <td><input type="text" name="" class="form-control" placeholder=""></td>
                        <td><input type="number" name="" class="form-control" placeholder=""></td>
                        <td><input type="text" name="" class="form-control" placeholder=""></td>
                        <td><input type="number" name="" class="form-control" placeholder=""></td>
                        <td><input type="number" name="" class="form-control" placeholder=""></td>
                        <td><input type="number" name="" class="form-control" placeholder=""></td>
                        <td><input type="date" name="" class="form-control" placeholder=""></td>


                    </tr>
                    <tr>
                        <td>4</td>
                        <td><input type="text" name="" class="form-control" placeholder=""></td>
                        <td><input type="number" name="" class="form-control" placeholder=""></td>
                        <td><input type="text" name="" class="form-control" placeholder=""></td>
                        <td><input type="number" name="" class="form-control" placeholder=""></td>
                        <td><input type="number" name="" class="form-control" placeholder=""></td>
                        <td><input type="number" name="" class="form-control" placeholder=""></td>
                        <td><input type="date" name="" class="form-control" placeholder=""></td>


                    </tr>
                    <tr>
                        <td>5</td>
                        <td><input type="text" name="" class="form-control" placeholder=""></td>
                        <td><input type="number" name="" class="form-control" placeholder=""></td>
                        <td><input type="text" name="" class="form-control" placeholder=""></td>
                        <td><input type="number" name="" class="form-control" placeholder=""></td>
                        <td><input type="number" name="" class="form-control" placeholder=""></td>
                        <td><input type="number" name="" class="form-control" placeholder=""></td>
                        <td><input type="date" name="" class="form-control" placeholder=""></td>


                    </tr>
                    <tr>
                        <td>6</td>
                        <td><input type="text" name="" class="form-control" placeholder=""></td>
                        <td><input type="number" name="" class="form-control" placeholder=""></td>
                        <td><input type="text" name="" class="form-control" placeholder=""></td>
                        <td><input type="number" name="" class="form-control" placeholder=""></td>
                        <td><input type="number" name="" class="form-control" placeholder=""></td>
                        <td><input type="number" name="" class="form-control" placeholder=""></td>
                        <td><input type="date" name="" class="form-control" placeholder=""></td>


                    </tr>
                    <tr>
                        <td>7</td>
                        <td><input type="text" name="" class="form-control" placeholder=""></td>
                        <td><input type="number" name="" class="form-control" placeholder=""></td>
                        <td><input type="text" name="" class="form-control" placeholder=""></td>
                        <td><input type="number" name="" class="form-control" placeholder=""></td>
                        <td><input type="number" name="" class="form-control" placeholder=""></td>
                        <td><input type="number" name="" class="form-control" placeholder=""></td>
                        <td><input type="date" name="" class="form-control" placeholder=""></td>


                    </tr>
                    <tr>
                        <td>8</td>
                        <td><input type="text" name="" class="form-control" placeholder=""></td>
                        <td><input type="number" name="" class="form-control" placeholder=""></td>
                        <td><input type="text" name="" class="form-control" placeholder=""></td>
                        <td><input type="number" name="" class="form-control" placeholder=""></td>
                        <td><input type="number" name="" class="form-control" placeholder=""></td>
                        <td><input type="number" name="" class="form-control" placeholder=""></td>
                        <td><input type="date" name="" class="form-control" placeholder=""></td>


                    </tr>
                    <tr>
                        <td>9</td>
                        <td><input type="text" name="" class="form-control" placeholder=""></td>
                        <td><input type="number" name="" class="form-control" placeholder=""></td>
                        <td><input type="text" name="" class="form-control" placeholder=""></td>
                        <td><input type="number" name="" class="form-control" placeholder=""></td>
                        <td><input type="number" name="" class="form-control" placeholder=""></td>
                        <td><input type="number" name="" class="form-control" placeholder=""></td>
                        <td><input type="date" name="" class="form-control" placeholder=""></td>


                    </tr>
                    <tr>
                        <td>10</td>
                        <td><input type="text" name="" class="form-control" placeholder=""></td>
                        <td><input type="number" name="" class="form-control" placeholder=""></td>
                        <td><input type="text" name="" class="form-control" placeholder=""></td>
                        <td><input type="number" name="" class="form-control" placeholder=""></td>
                        <td><input type="number" name="" class="form-control" placeholder=""></td>
                        <td><input type="number" name="" class="form-control" placeholder=""></td>
                        <td><input type="date" name="" class="form-control" placeholder=""></td>


                    </tr>
                    <tr>
                        <td>11</td>
                        <td><input type="text" name="" class="form-control" placeholder=""></td>
                        <td><input type="number" name="" class="form-control" placeholder=""></td>
                        <td><input type="text" name="" class="form-control" placeholder=""></td>
                        <td><input type="number" name="" class="form-control" placeholder=""></td>
                        <td><input type="number" name="" class="form-control" placeholder=""></td>
                        <td><input type="number" name="" class="form-control" placeholder=""></td>
                        <td><input type="date" name="" class="form-control" placeholder=""></td>


                    </tr>
                    <tr>
                        <td>12</td>
                        <td><input type="text" name="" class="form-control" placeholder=""></td>
                        <td><input type="number" name="" class="form-control" placeholder=""></td>
                        <td><input type="text" name="" class="form-control" placeholder=""></td>
                        <td><input type="number" name="" class="form-control" placeholder=""></td>
                        <td><input type="number" name="" class="form-control" placeholder=""></td>
                        <td><input type="number" name="" class="form-control" placeholder=""></td>
                        <td><input type="date" name="" class="form-control" placeholder=""></td>


                    </tr>
                    <tr>
                        <td>13</td>
                        <td><input type="text" name="" class="form-control" placeholder=""></td>
                        <td><input type="number" name="" class="form-control" placeholder=""></td>
                        <td><input type="text" name="" class="form-control" placeholder=""></td>
                        <td><input type="number" name="" class="form-control" placeholder=""></td>
                        <td><input type="number" name="" class="form-control" placeholder=""></td>
                        <td><input type="number" name="" class="form-control" placeholder=""></td>
                        <td><input type="date" name="" class="form-control" placeholder=""></td>


                    </tr>
                    <tr>
                        <td>14</td>
                        <td><input type="text" name="" class="form-control" placeholder=""></td>
                        <td><input type="number" name="" class="form-control" placeholder=""></td>
                        <td><input type="text" name="" class="form-control" placeholder=""></td>
                        <td><input type="number" name="" class="form-control" placeholder=""></td>
                        <td><input type="number" name="" class="form-control" placeholder=""></td>
                        <td><input type="number" name="" class="form-control" placeholder=""></td>
                        <td><input type="date" name="" class="form-control" placeholder=""></td>


                    </tr>
                    <tr>
                        <td>15</td>
                        <td><input type="text" name="" class="form-control" placeholder=""></td>
                        <td><input type="number" name="" class="form-control" placeholder=""></td>
                        <td><input type="text" name="" class="form-control" placeholder=""></td>
                        <td><input type="number" name="" class="form-control" placeholder=""></td>
                        <td><input type="number" name="" class="form-control" placeholder=""></td>
                        <td><input type="number" name="" class="form-control" placeholder=""></td>
                        <td><input type="date" name="" class="form-control" placeholder=""></td>


                    </tr>
                    <tr>
                        <td>16</td>
                        <td><input type="text" name="" class="form-control" placeholder=""></td>
                        <td><input type="number" name="" class="form-control" placeholder=""></td>
                        <td><input type="text" name="" class="form-control" placeholder=""></td>
                        <td><input type="number" name="" class="form-control" placeholder=""></td>
                        <td><input type="number" name="" class="form-control" placeholder=""></td>
                        <td><input type="number" name="" class="form-control" placeholder=""></td>
                        <td><input type="date" name="" class="form-control" placeholder=""></td>


                    </tr>
                    <tr>
                        <td>17</td>
                        <td><input type="text" name="" class="form-control" placeholder=""></td>
                        <td><input type="number" name="" class="form-control" placeholder=""></td>
                        <td><input type="text" name="" class="form-control" placeholder=""></td>
                        <td><input type="number" name="" class="form-control" placeholder=""></td>
                        <td><input type="number" name="" class="form-control" placeholder=""></td>
                        <td><input type="number" name="" class="form-control" placeholder=""></td>
                        <td><input type="date" name="" class="form-control" placeholder=""></td>


                    </tr>
                    <tr>
                        <td>18</td>
                        <td><input type="text" name="" class="form-control" placeholder=""></td>
                        <td><input type="number" name="" class="form-control" placeholder=""></td>
                        <td><input type="text" name="" class="form-control" placeholder=""></td>
                        <td><input type="number" name="" class="form-control" placeholder=""></td>
                        <td><input type="number" name="" class="form-control" placeholder=""></td>
                        <td><input type="number" name="" class="form-control" placeholder=""></td>
                        <td><input type="date" name="" class="form-control" placeholder=""></td>


                    </tr>
                    <tr>
                        <td>19</td>
                        <td><input type="text" name="" class="form-control" placeholder=""></td>
                        <td><input type="number" name="" class="form-control" placeholder=""></td>
                        <td><input type="text" name="" class="form-control" placeholder=""></td>
                        <td><input type="number" name="" class="form-control" placeholder=""></td>
                        <td><input type="number" name="" class="form-control" placeholder=""></td>
                        <td><input type="number" name="" class="form-control" placeholder=""></td>
                        <td><input type="date" name="" class="form-control" placeholder=""></td>


                    </tr>
                    <tr>
                        <td>20</td>
                        <td><input type="text" name="" class="form-control" placeholder=""></td>
                        <td><input type="number" name="" class="form-control" placeholder=""></td>
                        <td><input type="text" name="" class="form-control" placeholder=""></td>
                        <td><input type="number" name="" class="form-control" placeholder=""></td>
                        <td><input type="number" name="" class="form-control" placeholder=""></td>
                        <td><input type="number" name="" class="form-control" placeholder=""></td>
                        <td><input type="date" name="" class="form-control" placeholder=""></td>


                    </tr>






                    </tbody>
                </table>
                <br><br>
                <div align="center">
                    <button type="">add</button>
                    <button type="">edit</button>
                    <button type="">delete</button>
                    <button type="">modify</button>
                    <button type="">print</button>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
@endsection