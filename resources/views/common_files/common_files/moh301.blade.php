@extends('layouts.master')

@section('content')
<div class="row page-titles">
    <div class="col-md-12 align-self-center text-center">
        <h4 class="theme-cl">MOH 301</h4>
    </div>
</div> 
<div class="col-md-12">


    <div class="card">
        <div class="card-header">
            <h4>RECORDS</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">

                        <table id="datatable" class="table table-bordered">
                            <thead>
                            <tr>
                                <th>DATE OF ADMISSION</th>
                                <th>IN PATIENT FULL NAME</th>
                                <th>FULL NAMES</th>
                                <th>AGE</th>
                                <th>SEX</th>
                                <th>SUB LOCATION</th>
                                <th>VILLAGE/ESTATE</th>
                                <th>ADDRESS</th>
                                <th>HIV</th>
                                <th>NUTRITION_EDUCATION</th>
                                <th>DIAGNOSIS</th>
                                <th>TREATMENT PRESCFORM</th>
                                <th>DATE OF DISCHARGE</th>
                                <th>OUTCOME</th>
                                <th>REFERRAL</th>
                                <th>REMARK</th>
                                <th>DEPARTMENT</th>


                            </tr>
                            </thead>
                            <tbody>

                            @if(isset($moh301))
                                @foreach($moh301 as $moh301)
                                    <tr>


                            <td>{{ $moh301->date_of_admission}}</td>
                            <td>{{ $moh301->inpatient_no}}</td>
                            <td>{{ $moh301->full_names}}</td>
                            <td>{{ $moh301->age_in_years}}</td>
                            <td>{{ $moh301->sex}}</td>
                            <td>{{ $moh301->sublocation}}</td>
                            <td>{{ $moh301->village_estate}}</td>
                            <td>{{ $moh301->address}}</td>
                            <td>{{ $moh301->hiv}}</td>
                            <td>{{ $moh301->nutrition_education}}</td>
                            <td>{{ $moh301->diagnosis}}</td>
                            <td>{{ $moh301->treatment_prescform}}</td>
                            <td>{{ $moh301->date_of_discharge}}</td>
                            <td>{{ $moh301->outcome}}</td>
                            <td>{{ $moh301->referral}}</td>
                            <td>{{ $moh301->remark}}</td>
                            <td>{{ $moh301->department}}</td>
                                    </tr>
                                    @endforeach
                                @endif

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
             </div>
                
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Add Record</h4>
                    </div>
                    <div class="modal-body">
					</div>
			    </div>
		
<div class="col-md-12">
    <div class="card">
        <div class="container-fluid">
        <h1 class="text-center">MOH 301 IN-PATIENT REGISTER</h1>
        <div class="table-responsive">
            <form action="{{ route('moh301_post') }}" method="post" >
                {!! csrf_field() !!}
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Date of Admission</th>
                            <th>In-patient No.</th>
                            <th>Full Names</th>
                            <th>Age in Years</th>
                            <th>Sex</th>
                            <th>Sub Location</th>
                            <th>Village/Estate</th>
                            <th>Address</th>
                            <th>HIV-(1=Counselled),(2=Tested)</th>
                            <th>HIV(Pos/Neg)</th>
                            <th>3=Nutrition education<br>4=Nutrition supplements</th>
                            <th>Diagnosis</th>
                            <th>Treatment/Prescription number</th>
                            <th>Date of Discharge</th>
                            <th>Outcome(A=Alive D=Dead)</th>
                            <th>Referral</th>
                            <th>Remarks</th>




                        </tr>
                        <tr>

                            <th>A</th>
                            <th>B</th>
                            <th>C</th>
                            <th>D</th>
                            <th>E</th>
                            <th>F</th>
                            <th>G</th>
                            <th>H</th>
                            <th>I</th>
                            <th>J</th>
                            <th>K</th>
                            <th>L</th>
                            <th>M</th>
                            <th>N</th>
                            <th>O</th>
                            <th>P</th>
                            <th>Q</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>

                            <td>
                                <input  name="date_of_admission" type="date" class="form-control">
                            </td>
                            <td>
                                <input  name="inpatient_no" type="number" class="form-control">
                            </td>
                            <td>
                                <input  name="full_names" type="text" class="form-control">
                            </td>
                            <td>
                                <input  name="age_in_years" type="number" class="form-control">
                            </td>
                            <td>
                                <select name="sex"  class="custom-select">
                                    <option selected>Sex...</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </td>
                            <td>
                                <input  name="sublocation" type="text" class="form-control">
                            </td>
                            <td>
                                <input  name="village_estate" type="text" class="form-control">
                            </td>
                            <td>
                                <input  name="address" type="text" class="form-control">
                            </td>
                            <td>
                                <select  name="hiv" class="custom-select">
                                    <option selected></option>
                                    <option value="1" >1</option>
                                    <option value="2" >2</option>
                                </select>
                            </td>
                            <td>
                                <input type="text" name="hiv_status">
                            </td>
                            <td>
                                <select  name="nutrition_education" class="custom-select">
                                    <option selected></option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                            </td>
                            <td>
                                <input  name="diagnosis" type="text" class="form-control">
                            </td>
                            <td>
                                <input  name="treatment_prescform" type="text" class="form-control">
                            </td>
                            <td>
                                <input  name="date_of_discharge" type="date" class="form-control">
                            </td>
                            <td>
                                <select name="outcome"  class="custom-select">
                                    <option selected></option>
                                    <option>A</option>
                                    <option>D</option>
                                </select>
                            </td>
                            <td>
                                <input  name="referral" type="text" class="form-control">
                            </td>
                            <td>
                                <input  name="remark" type="text" class="form-control">
                            </td>
                            <input type="text" name="department" value="{{ Route::currentRouteName() }}"  >
                        </tr>
                        </tbody>
                    </table>
                <input type="submit" class="btn btn-info" value="Save">
            </form>
        </div>
        <br>
        <p class="font-weight-bold">The register is for all patients to be admitted to the hospital/hospitalized for treatment care regardless of age</p>
    </div>  
  </div>



        
    </div>
</div> 
@endsection