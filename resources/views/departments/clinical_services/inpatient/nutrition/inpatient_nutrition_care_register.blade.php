@extends('layouts.master')

@section('content')
<div class="row page-titles">
    <div class="col-md-12 align-self-center text-center">
        <h4 class="theme-cl">Inpatient Nutrition Care Register</h4>
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
        
        <div class="col-m-3 offset-md-2">
	<H3 class="mt-20">
		INPATIENT NUTRITION CARE REGISTER<br> MOH(368)
	</H3>
</div>
		<form action="{{route('prescription_post')}}" method="post" >{!! csrf_field() !!}


COUNTY<input type="	text" name="" class="form-control" placeholder=""><br>
SUBCOUNTY<input type="	text" name="" class="form-control" placeholder=""><br>
HEALTH FACILITY<input type="	text" name="" class="form-control" placeholder=""><br>
HEALTH FACILITY CODE(MFL)<input type="	text" name="" class="form-control" placeholder="">



</form>
<br><br>
<div align="center">
<button type="">add</button>
<button type="">edit</button>
<button type="">delete</button>
<button type="">modify</button>
<button type="">print</button>
</div>
<br><br><br><br><br><br><br><br><br><br><br>

<div class="col-m-3 offset-md-5">
	<H3 class="mt-20">
		INPATIENT NUTRITION CARE REGISTER INSTRUCTIONS
	</H3>
</div>
<table class="table table-bordered">
	<thead>
		<tr>
			<th>TITLE</th>
			<th>DATA DEFINITIONS/EXPLANATIONS</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>Unique Registration Number</td>
			<td>Example:12094/011/13/SC. The first set of numbers (5 digits) refer to the code for the health facility (or site) where treatment is provided, the second and third set of numbers is the Child Welfare Clinic number allocated to the child in section B,Page 20 of their MCH booklet which consists of the sequence of the child seen at the health facility plus the year of admission, the last set of letters refers to the programme component where the child entered such as out-patient(OTP), Stabilization Centre(SC) or Supplementary Feeding Programme(SFP).</td>
		</tr>
		<tr>
			<td>Admission Date</td>
			<td>Record the day the client visits your health facility(recorded as DD:MM:YY)</td>
		</tr>
		<tr>
			<td>Client's Full Name</td>
			<td>Record at least THREE names of the client.</td>
		</tr>
		<tr>
			<td>Physical address/Phone Number</td>
			<td>This refers to client's residential village /estate/any physical land mark. The physical address as well as telephone numbers for the client or closest person should be written here to enable tracing or follow up</td>
		</tr>
		<tr>
			<td>Age</td>
			<td>Record the actual stated age of the Client expressed in figures/numbers. Age here must be indicated in months and NOT 'U5'</td>
		</tr>
		<tr>
			<td>Sex(M/F)</td>
			<td>This should be recorded as M for male and F for female</td>
		</tr>
		<tr>
			<td>In Household food security programme</td>
			<td>May be General Food Distribution, Food/Cash for assets,unconditional cash transfers,or any other household support programme available in the programme area</td>
		</tr>
		<tr>
			<td>Admission criteria</td>
			<td>Enter '1' in this column if the client is admitted based on oedema criteria (+,++,+++)<br>
				Enter '2' if client is admitted based on a MUAC criteria<br>Enter '3' if client was admitted based on a WHZ criteria</td>

		</tr>
		<tr>
			<td>Type of admission</td>
			<td>Type of admission: 1-New cases,2-Re-admission 3-Relapse,4-Transfer from another SC,5-Transfer from OTP or SFP,6-Returned defaulter(e.g.,children who left the service before ending the treatment and return to continue their treatment -same episode)</td>
		</tr>
		<tr>
			<td>Serostatus</td>
			<td>HIV-Status(serostatus) can be entered as S0=negative,S1=positive, S3=unknown</td>
		</tr>
		<tr>
			<td>TB status</td>
			<td>Tuberculosis status can be entered as 'T0' for Negative,'T1' for positive or 'T2' for Unknown.</td>
		</tr>
		<tr>
			<td>Height/Length(cm)</td>
			<td>Record the client's actual height or length in Centimetres to the nearest tenth.</td>
		</tr>
		<tr>
			<td>Weight(Kg)</td>
			<td>Record the client's actual Weight in Kilograms to the nearest tenth</td>
		</tr>
		<tr>
			<td>WHZ score</td>
			<td>Look up the WHZ score and record here</td>
		</tr>
		<tr>
			<td>MUAC (cm)</td>
			<td>Record the Client's Mid-Upper Arm Circumference in Centimetres to the nearest tenth.</td>
		</tr>
		<tr>
			<td>"Weight (kg)/Monitoring Day 1 through 6 columns (column Q-W)"</td>

			<td>Record the weight of the client each day in stabilization centre</td>
		</tr>
         <tr>
         	<td>"Weight (kg) and MUAC (cm)/Monitoring Day 7(column X)" </td>
         	<td>Record the weight and the MUAC of the client on Day 7 in the stabilisation centre</td>
         </tr>
         <tr>
         	<td>"Weight(kg)/Monitoring Day 8 through Day 12 columns(colums Y-AD)</td>
         </tr>
         <tr>
         	<td>Discharge/Transfer Measurements-Colums AE-AG</td>
         	<td>Record rhe weight,length/height,WHZ and MUAC of the client on day of discharge or transfer from the stabilisation centre</td>

         </tr>
         <tr>
         	<td>Exit date(dd/mm/yy</td>
         	<td>Record the date the client is discharged from your health facility (recorded as DD:MM:YY)</td>
         </tr>
         <tr>
         	<td>Length of stay in days</td>
         	<td>Record the number of days from the admission date to the exit date.This only applies to clients who exit the program as cured.</td>
         </tr>
         <tr>
         	<td>Exit Outcome</td>
         	<td>Outcome can be :1-Cured,2-Defaulter,3-Died,4-Transfer to another inpatient (indicate centre) or out-patient (indicate centre), 5-Non-respondent (Non-recovered)</td>

         </tr>
         <tr>
         	<td>Observations/comments</td>
         	<td>Any comments for the individual client (e.g. client referred,advised to return for review)</td>
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
</div>
<br><br><br><br><br><br><br><br><br><br><br>
<div class="col-m-3 offset-md-5">
	<H3 class="mt-20">
		INPATIENT NUTRITION CARE REGISTER
	</H3>
</div>
<table class="table table-bordered">

	<thead>
		<tr>
			<th colspan="13">ADMISSION DETAILS</th>
			<th colspan="4">ADMISSION MEASUREMENTS(admission day)</th>
			<th colspan="4">WEIGHT (kg)/MUAC(cm) MONITORING</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>No</td>
			<td>Unique Nutrition Reg Number</td>
			<td>Admission date(dd/mm/yy</td>
			<td>Client's Name</td>
			<td></td>
			<td>Physical address/phonemobile Number.</td>
			<td>Age(months)</td>
			<td>Sex(M/F)</td>
			<td>In Household food security programme[1] (YES/NO)</td>
			<td>Admission criteria</td>
			<td>[3] Type of admission</td>
			<td>Serostatus[4]</td>
			<td>TB status[5]</td>
			<td>Height/Length(cm)</td>
			<td>Weight(kg)</td>
			<td>WHZ score</td>
			<td>MUAC(cm)</td>
			<td>Day 1:Weight</td>
			<td>Day 1:MUAC</td>
			<td>DAY 2:Weight</td>
			<td>Day 2:MUAC</td>
		</tr>
		<tr>
			<td>A</td>
			<td>B</td>
			<td>C</td>
			<td>D</td>
			<td></td>
			<td>E</td>
			<td>F</td>
			<td>G</td>
			<td>H</td>
			<td>I</td>
			<td>J</td>
			<td>K</td>
			<td>L</td>
			<td>M</td>
			<td>N</td>
			<td>O</td>
			<td>P</td>
			<td>Q</td>
			<td>R</td>
			<td>S</td>
			<td>T</td>
		</tr>
		<tr>
			<td>1</td>
			<td><input type="text" name="nutrition" class="form-control" placeholder=""></td>
			<td><input type="date" name="admission" class="form-control" placeholder=""></td>
			<td><input type="text" name="name" class="form-control" placeholder=""></td>
			<td></td>
			<td><input type="text" name="phone_no" class="form-control" placeholder=""></td>
			<td><input type="number" name="age" class="form-control" placeholder=""></td>
            <td><input type="text" name="sex" class="form-control" placeholder=""></td>
            <td><input type="text" name="household_Food_security" class="form-control" placeholder=""></td>
            <td><input type="text" name="admin_criteria" class="form-control" placeholder=""></td>
            <td><input type="text" name="type_of_admission" class="form-control" placeholder=""></td>
            <td><input type="text" name="serostatus" class="form-control" placeholder=""></td>
            <td><input type="text" name="" class="form-control" placeholder=""></td>
            <td><input type="number" name="weight" class="form-control" placeholder=""></td>
            <td><input type="number" name="muac" class="form-control" placeholder=""></td>
            <td><input type="number" name="" class="form-control" placeholder=""></td>
           <td><input type="number" name="" class="form-control" placeholder=""></td>
           <td><input type="number" name="" class="form-control" placeholder=""></td>
           <td><input type="number" name="" class="form-control" placeholder=""></td>
           <td><input type="number" name="" class="form-control" placeholder=""></td>
           <td><input type="number" name="" class="form-control" placeholder=""></td>

		</tr>
		<tr>
			<td>2</td>
			<td><input type="text" name="nutrition" class="form-control" placeholder=""></td>
			<td><input type="date" name="admission" class="form-control" placeholder=""></td>
			<td><input type="text" name="name" class="form-control" placeholder=""></td>
			<td></td>
			<td><input type="text" name="phone_no" class="form-control" placeholder=""></td>
			<td><input type="number" name="age" class="form-control" placeholder=""></td>
            <td><input type="text" name="sex" class="form-control" placeholder=""></td>
            <td><input type="text" name="household_Food_security" class="form-control" placeholder=""></td>
            <td><input type="text" name="admin_criteria" class="form-control" placeholder=""></td>
            <td><input type="text" name="type_of_admission" class="form-control" placeholder=""></td>
            <td><input type="text" name="serostatus" class="form-control" placeholder=""></td>
            <td><input type="text" name="" class="form-control" placeholder=""></td>
            <td><input type="number" name="weight" class="form-control" placeholder=""></td>
            <td><input type="number" name="muac" class="form-control" placeholder=""></td>
            <td><input type="number" name="" class="form-control" placeholder=""></td>
           <td><input type="number" name="" class="form-control" placeholder=""></td>
           <td><input type="number" name="" class="form-control" placeholder=""></td>
           <td><input type="number" name="" class="form-control" placeholder=""></td>
           <td><input type="number" name="" class="form-control" placeholder=""></td>
           <td><input type="number" name="" class="form-control" placeholder=""></td>

		</tr>
		<tr>
			<td>3</td>
			<td><input type="text" name="nutrition" class="form-control" placeholder=""></td>
			<td><input type="date" name="admission" class="form-control" placeholder=""></td>
			<td><input type="text" name="name" class="form-control" placeholder=""></td>
			<td></td>
			<td><input type="text" name="phone_no" class="form-control" placeholder=""></td>
			<td><input type="number" name="age" class="form-control" placeholder=""></td>
            <td><input type="text" name="sex" class="form-control" placeholder=""></td>
            <td><input type="text" name="household_Food_security" class="form-control" placeholder=""></td>
            <td><input type="text" name="admin_criteria" class="form-control" placeholder=""></td>
            <td><input type="text" name="type_of_admission" class="form-control" placeholder=""></td>
            <td><input type="text" name="serostatus" class="form-control" placeholder=""></td>
            <td><input type="text" name="" class="form-control" placeholder=""></td>
            <td><input type="number" name="weight" class="form-control" placeholder=""></td>
            <td><input type="number" name="muac" class="form-control" placeholder=""></td>
            <td><input type="number" name="" class="form-control" placeholder=""></td>
           <td><input type="number" name="" class="form-control" placeholder=""></td>
           <td><input type="number" name="" class="form-control" placeholder=""></td>
           <td><input type="number" name="" class="form-control" placeholder=""></td>
           <td><input type="number" name="" class="form-control" placeholder=""></td>
           <td><input type="number" name="" class="form-control" placeholder=""></td>

	</tbody>
</table>

<br><br><br><br><br>

<p>[1] May be general food Distribution,Food /cash for assets,Unconditional cash transfers,or any other household support programme available in the programme areea<br>[2]Admission criteria can be 1=oedema(+,++,+++) 2=Marasmus (MUAC) 3-Marasmus(WHZ)<br>[3]Type of admission 1=New cases,2= Re-admission;3=-Transfers from another SC,5= Transfer from OTP or SFP 6=Returned defaulter<br>[4]Serostatus can be S0=negative,S1=positive S2=exposed (exposed infant under 18 months whose biological mother is HIV positive),S3=unknown<br>[5]TB can be T0=Negative,T1=Positiveand or T2=Unknown<br>[6] Count of days from the date of admission to the date of exit from the program : for all exits who are cured only Record the number of days from the admission date to the exit date.This only applies to the clients who exit the program as cured.<br>[7]can be 1-cured 2-defaulter 3-died 4-transfer to another Inpatient (indicate centre) or out-patient (indicate centre,5-non-respondent(non-recovered)</p>

<br><br>
<div align="center">
<button type="">add</button>
<button type="">edit</button>
<button type="">delete</button>
<button type="">modify</button>
<button type="">print</button>
</div>


<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>






<table class="table table-bordered">
	<thead>
		<tr>
			<th></th>
			<th colspan="20">WEIGHT(Kg)/MUAC(cm)MONITORING</th>
			<th colspan="4">DISCHARGE/TRANSFER MEASUREMENTS</th>
			<th colspan="3">EXIT DETAILS</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>No</td>
			<td colspan="2">Day 3</td>
			<td colspan="2">Day 4</td>
			<td colspan="2">Day 5</td>
			<td colspan="2">Day 6</td>
			<td colspan="2">Day 7</td>
			<td colspan="2">Day 8</td>
			<td colspan="2">Day 9</td>
			<td colspan="2">Day 10</td>
			<td colspan="2">Day 11</td>
			<td colspan="2">Day 12</td>
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
			<td></td>
			<td>Weight</td>
			<td>MUAC</td>
			<td>Weight</td>
			<td>MUAC</td>
			<td>Weight</td>
			<td>MUAC</td>
			<td>Weight</td>
			<td>MUAC</td>
			<td>Weight</td>
			<td>MUAC</td>
			<td>Weight</td>
			<td>MUAC</td>
			<td>Weight</td>
			<td>MUAC</td>
			<td>Weight</td>
			<td>MUAC</td>
			<td>Weight</td>
			<td>MUAC</td>
			<td>Weight</td>
			<td>MUAC</td>
			<td>Weight(kg)</td>
			<td>Length/height</td>
			<td>WHZ</td>
			<td>MUAC(cm)</td>
			<td>Exit date(dd/mm/yy)</td>
			<td>Length of stay in days(6)</td>
			<td>Exit Outcome(7)</td>
			<td>Observations/comments</td>


		</tr>
		<tr>
			<td>A</td>
			<td>U</td>
			<td>V</td>
			<td>W</td>
			<td>X</td>
			<td>Y</td>
			<td>Z</td>
			<td>AA</td>
			<td>AB</td>
			<td>AC</td>
			<td>AD</td>
			<td>AF</td>
			<td>AE</td>
			<td>AF</td>
			<td>AG</td>
			<td>AH</td>
			<td>AB</td>
			<td>AC</td>
			<td>AD</td>
			<td>AE</td>
			<td>AF</td>
			<td>AG</td>
			<td>AH</td>
			<td>AI</td>
			<td>AG</td>
			<td>AH</td>
			<td>AI</td>
			<td>AJ</td>
			<td>AK</td>
		</tr>

		<tr>
			<td>1</td>
			<td><input type="number" name="" class="form-control" placeholder=""></td>
			<td><input type="number" name="" class="form-control" placeholder=""></td>
			<td><input type="number" name="" class="form-control" placeholder=""></td>
			<td><input type="number" name="" class="form-control" placeholder=""></td>
			<td><input type="number" name="" class="form-control" placeholder=""></td>
			<td><input type="number" name="" class="form-control" placeholder=""></td>
			<td><input type="number" name="" class="form-control" placeholder=""></td>
			<td><input type="number" name="" class="form-control" placeholder=""></td>
			<td><input type="number" name="" class="form-control" placeholder=""></td>
			<td><input type="number" name="" class="form-control" placeholder=""></td>
			<td><input type="number" name="" class="form-control" placeholder=""></td>
			<td><input type="number" name="" class="form-control" placeholder=""></td>
			<td><input type="number" name="" class="form-control" placeholder=""></td>
			<td><input type="number" name="" class="form-control" placeholder=""></td>
			<td><input type="number" name="" class="form-control" placeholder=""></td>
			<td><input type="number" name="" class="form-control" placeholder=""></td>
			<td><input type="number" name="" class="form-control" placeholder=""></td>
			<td><input type="number" name="" class="form-control" placeholder=""></td>
			<td><input type="number" name="" class="form-control" placeholder=""></td>
			<td><input type="number" name="" class="form-control" placeholder=""></td>
			<td><input type="number" name="" class="form-control" placeholder=""></td>
			<td><input type="number" name="" class="form-control" placeholder=""></td>
			<td><input type="number" name="" class="form-control" placeholder=""></td>
			<td><input type="number" name="" class="form-control" placeholder=""></td>
			<td><input type="date" name="" class="form-control" placeholder=""></td>
			<td><input type="number" name="" class="form-control" placeholder=""></td>
			<td><input type="text" name="" class="form-control" placeholder=""></td>
			<td><textarea type="text" name="" class="form-control" placeholder=""></textarea></td>

		</tr>

		<tr>
			<td>2</td>
			<td><input type="number" name="" class="form-control" placeholder=""></td>
			<td><input type="number" name="" class="form-control" placeholder=""></td>
			<td><input type="number" name="" class="form-control" placeholder=""></td>
			<td><input type="number" name="" class="form-control" placeholder=""></td>
			<td><input type="number" name="" class="form-control" placeholder=""></td>
			<td><input type="number" name="" class="form-control" placeholder=""></td>
			<td><input type="number" name="" class="form-control" placeholder=""></td>
			<td><input type="number" name="" class="form-control" placeholder=""></td>
			<td><input type="number" name="" class="form-control" placeholder=""></td>
			<td><input type="number" name="" class="form-control" placeholder=""></td>
			<td><input type="number" name="" class="form-control" placeholder=""></td>
			<td><input type="number" name="" class="form-control" placeholder=""></td>
			<td><input type="number" name="" class="form-control" placeholder=""></td>
			<td><input type="number" name="" class="form-control" placeholder=""></td>
			<td><input type="number" name="" class="form-control" placeholder=""></td>
			<td><input type="number" name="" class="form-control" placeholder=""></td>
			<td><input type="number" name="" class="form-control" placeholder=""></td>
			<td><input type="number" name="" class="form-control" placeholder=""></td>
			<td><input type="number" name="" class="form-control" placeholder=""></td>
			<td><input type="number" name="" class="form-control" placeholder=""></td>
			<td><input type="number" name="" class="form-control" placeholder=""></td>
			<td><input type="number" name="" class="form-control" placeholder=""></td>
			<td><input type="number" name="" class="form-control" placeholder=""></td>
			<td><input type="number" name="" class="form-control" placeholder=""></td>
			<td><input type="date" name="" class="form-control" placeholder=""></td>
			<td><input type="number" name="" class="form-control" placeholder=""></td>
			<td><input type="text" name="" class="form-control" placeholder=""></td>
			<td><textarea type="text" name="" class="form-control" placeholder=""></textarea></td>

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
</div>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>




<div class="col-m-3 offset-md-5">
	<H3 class="mt-20">
		MOH 704 CHILD HEALTH AND NUTRITION INFORMATION SYSTEM TALLY SHEET FOR CHILD HEALTH WELFARE CLINICS
	</H3>
</div>

<h1>REPUBLIC OF KENYA - MINISTRY OF HEALTH<br>CHILD HEALTH AND NUTRITION INFORMATION SYSTEM<br>TALLY SHEET FOR CHILD HEALTH WELFARE CLINICS</h1>
<div class="row">
	            <div class="form-group row col-md-6">
				    <label for="staticEmail" class="col-sm-2 col-form-label">FACILITY NAME:</label>
				    <div class="col-sm-10">
				      <input type="	text" name="" class=" form-control" placeholder="">
				    </div>
				 </div>
				 <div class="form-group row col-md-6">
				    <label for="staticEmail" class="col-sm-2 col-form-label">MONTH/YEAR</label>
				    <div class="col-sm-10">
				      <input type="month" name="" class=" form-control" placeholder="">
				    </div>
				 </div>
				 
			</div>

			<div class="row">
	            <div class="form-group row col-md-6">
				    <label for="staticEmail" class="col-sm-2 col-form-label">Data sheet started:</label>
				    <div class="col-sm-10">
				      <input type="date" name="" class=" form-control" placeholder="">
				    </div>
				 </div>
				 <div class="form-group row col-md-6">
				    <label for="staticEmail" class="col-sm-2 col-form-label">Data sheet finshed:</label>
				    <div class="col-sm-10">
				      <input type="date" name="" class=" form-control" placeholder="">
				    </div>
				 </div>
			</div>
			<p>(Reminder to make only ONE TALLY per child per FOR WEIGHT)</p>

<table class="table table-bordered">
	<thead>
		<tr>
			<th></th>
			<th></th>
			<th>FEMALES</th>
			<th>MALES</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td rowspan="14">Age 0 to 11 months</td>
		    <td rowspan="8">NORMAL WEIGHT (HEALTHY CHILD)</td>
			<td><input type="number" name="" class="form-control" placeholder=""></td>
			<td><input type="number" name="" class="form-control" placeholder=""></td>
		</tr>
		<tr>
			<td><input type="number" name="" class="form-control" placeholder=""></td>
			<td><input type="number" name="" class="form-control" placeholder=""></td>
		</tr>

	
		<tr>
			<td>UNDERWEIGHT</td>
		
			<td><input type="number" name="" class="form-control" placeholder=""></td>
			<td><input type="number" name="" class="form-control" placeholder=""></td>
		</tr>
		
		<tr>
			<td>FOLLOW-UP-MARASMUS</td>
			<td><input type="number" name="" class="form-control" placeholder=""></td>
			<td><input type="number" name="" class="form-control" placeholder=""></td>
		</tr>
		<tr>
			<td>FOLLOW-UP-KWARSHIORKOR</td>
			<td><input type="number" name="" class="form-control" placeholder=""></td>
			<td><input type="number" name="" class="form-control" placeholder=""></td>
		</tr>
		<tr>
			<td>FOLLOW-UP-ANAEMIA</td>
			<td><input type="number" name="" class="form-control" placeholder=""></td>
			<td><input type="number" name="" class="form-control" placeholder=""></td>
		</tr>
		<tr>
			<td>FOLLOW-UP-FALTERING WT</td>
			<td><input type="number" name="" class="form-control" placeholder=""></td>
			<td><input type="number" name="" class="form-control" placeholder=""></td>
		</tr>
		<tr>
			<td>FOLLOW-UP-OTHER</td>
			<td><input type="number" name="" class="form-control" placeholder=""></td>
			<td><input type="number" name="" class="form-control" placeholder=""></td>
		</tr>
	</tbody>
</table>
<table class="table table-bordered">
	<thead>
		<tr>
			<th></th>
			<th></th>
			<th>FEMALES</th>
			<th>MALES</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td rowspan="14">Age 12 to 35 months</td>
		    <td rowspan="8">NORMAL WEIGHT (HEALTHY CHILD)</td>
			<td><input type="number" name="" class="form-control" placeholder=""></td>
			<td><input type="number" name="" class="form-control" placeholder=""></td>
		</tr>
		<tr>
			<td><input type="number" name="" class="form-control" placeholder=""></td>
			<td><input type="number" name="" class="form-control" placeholder=""></td>
		</tr>
		<tr>
			<td>UNDERWEIGHT</td>
		
			<td><input type="number" name="" class="form-control" placeholder=""></td>
			<td><input type="number" name="" class="form-control" placeholder=""></td>
		</tr>
		
		<tr>
			<td>FOLLOW-UP-MARASMUS</td>
			<td><input type="number" name="" class="form-control" placeholder=""></td>
			<td><input type="number" name="" class="form-control" placeholder=""></td>
		</tr>
		<tr>
			<td>FOLLOW-UP-KWARSHIORKOR</td>
			<td><input type="number" name="" class="form-control" placeholder=""></td>
			<td><input type="number" name="" class="form-control" placeholder=""></td>
		</tr>
		<tr>
			<td>FOLLOW-UP-ANAEMIA</td>
			<td><input type="number" name="" class="form-control" placeholder=""></td>
			<td><input type="number" name="" class="form-control" placeholder=""></td>
		</tr>
		<tr>
			<td>FOLLOW-UP-FALTERING WT</td>
			<td><input type="number" name="" class="form-control" placeholder=""></td>
			<td><input type="number" name="" class="form-control" placeholder=""></td>
		</tr>
		<tr>
			<td>FOLLOW-UP-OTHER</td>
			<td><input type="number" name="" class="form-control" placeholder=""></td>
			<td><input type="number" name="" class="form-control" placeholder=""></td>
		</tr>
	</tbody>
</table>
<table class="table table-bordered">
	<thead>
		<tr>
			<th></th>
			<th></th>
			<th>FEMALES</th>
			<th>MALES</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td rowspan="14">Age 36 to 59 months</td>
		    <td rowspan="8">NORMAL WEIGHT (HEALTHY CHILD)</td>
			<td><input type="number" name="" class="form-control" placeholder=""></td>
			<td><input type="number" name="" class="form-control" placeholder=""></td>
		</tr>
		<tr>
			<td><input type="number" name="" class="form-control" placeholder=""></td>
			<td><input type="number" name="" class="form-control" placeholder=""></td>
		</tr>
		<tr>
			<td>UNDERWEIGHT</td>
		
			<td><input type="number" name="" class="form-control" placeholder=""></td>
			<td><input type="number" name="" class="form-control" placeholder=""></td>
		</tr>
		
		<tr>
			<td>FOLLOW-UP-MARASMUS</td>
			<td><input type="number" name="" class="form-control" placeholder=""></td>
			<td><input type="number" name="" class="form-control" placeholder=""></td>
		</tr>
		<tr>
			<td>FOLLOW-UP-KWARSHIORKOR</td>
			<td><input type="number" name="" class="form-control" placeholder=""></td>
			<td><input type="number" name="" class="form-control" placeholder=""></td>
		</tr>
		<tr>
			<td>FOLLOW-UP-ANAEMIA</td>
			<td><input type="number" name="" class="form-control" placeholder=""></td>
			<td><input type="number" name="" class="form-control" placeholder=""></td>
		</tr>
		<tr>
			<td>FOLLOW-UP-FALTERING WT</td>
			<td><input type="number" name="" class="form-control" placeholder=""></td>
			<td><input type="number" name="" class="form-control" placeholder=""></td>
		</tr>
		<tr>
			<td>FOLLOW-UP-OTHER</td>
			<td><input type="number" name="" class="form-control" placeholder=""></td>
			<td><input type="number" name="" class="form-control" placeholder=""></td>
		</tr>
	</tbody>
</table>
<p>CHILDREN WITH NORMAL WEIGHT</p>
<P>CHILDREN WHO ARE UNDERWEIGHT</P>
<br><br>
<div align="center">
<button type="">add</button>
<button type="">edit</button>
<button type="">delete</button>
<button type="">modify</button>
<button type="">print</button>
</div>
		<div class="form-group">
			<button type="submit" class="btn btn-primary">Submit</button>
		</div>
		</form>
    </div>
</div> 
@endsection