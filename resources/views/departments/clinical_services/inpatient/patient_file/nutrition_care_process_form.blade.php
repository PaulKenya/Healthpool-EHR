@extends('layouts.master')
@section('content')
    @include('departments.clinical_services.inpatient.patient_file.patient_bio_information')
    <!-- Title &
    Breadcrumbs-->
    <div class="row page-titles">
        <div class="col-md-12 align-self-center">
            <h4 class="theme-cl">NUTRITION CARE PROGRESS</h4>
        </div>
    </div>
    <!-- Title & Breadcrumbs-->
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>NUTRITION CARE PROGRESS VIEWS</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable" class="table table-bordered">
                            <thead>
                            <tr>
                                <th>DATE OF ARRIVAL</th>
                                <th>DATE OF DISCHARGE</th>
                                <th>WARD</th>
                                <th>BED NO</th>
                                <th>PRINCIPLE DIAGNOSIS</th>
                                <th>HEIGHT</th>
                                <th>WEIGTH</th>
                                <th>BMI</th>
                                <th>MUAC</th>
                                <th>Z SCORE</th>
                                <th>OTHERS</th>
                                <th>PHYSICAL EXAM</th>
                                <th>MEDICATIONS</th>
                                <th>PROCEDURES</th>
                                <th>PRESCRIBED DIET</th>
                                <th>1ST PROBLEM</th>
                                <th>ETIOLOGY</th>
                                <th>2ND PROBLEM</th>
                                <th>ETIOLOGY 1</th>
                                <th>SIGNS AND SYMPTOMS</th>
                                <th>NUTRITION PRESCRIPTION</th>
                                <th>PRESCRIBED DIET</th>
                                <th>PROT(gms)</th>
                                <th>CHOs(gms)</th>
                                <th>FAT(gms)</th>
                                <th>KCALS</th>
                                <th>OTHERS</th>
                                <th>ROUTE OF ADMINISTRATION</th>
                                <th>OTHER INTERVENTIONS</th>
                                <th>NUTRITIONISTS</th>
                                <th>SIGNATURE</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(isset($nutrition_care_process_form_results))
                                @foreach($nutrition_care_process_form_results as $nutrition_care_process_form_result)
                                    <tr>
                                        <td>{{$nutrition_care_process_form_result->doa}}</td>
                                        <td>{{$nutrition_care_process_form_result->dod}}</td>
                                        <td>{{$nutrition_care_process_form_result->ward}}</td>
                                        <td>{{$nutrition_care_process_form_result->bed}}</td>
                                        <td>{{$nutrition_care_process_form_result->principle_diagnosis}}</td>
                                        <td>{{$nutrition_care_process_form_result->height}}</td>
                                        <td>{{$nutrition_care_process_form_result->weight}}</td>
                                        <td>{{$nutrition_care_process_form_result->bmi}}</td>
                                        <td>{{$nutrition_care_process_form_result->muac}}</td>
                                        <td>{{$nutrition_care_process_form_result->z_score}}</td>
                                        <td>{{$nutrition_care_process_form_result->others}}</td>
                                        <td>{{$nutrition_care_process_form_result->physical_exam}}</td>
                                        <td>{{$nutrition_care_process_form_result->medications}}</td>
                                        <td>{{$nutrition_care_process_form_result->procedures}}</td>
                                        <td>{{$nutrition_care_process_form_result->prescribed_diet}}</td>
                                        <td>{{$nutrition_care_process_form_result->problem1}}</td>
                                        <td>{{$nutrition_care_process_form_result->etiology}}</td>
                                        <td>{{$nutrition_care_process_form_result->problem2}}</td>
                                        <td>{{$nutrition_care_process_form_result->etiology1}}</td>
                                        <td>{{$nutrition_care_process_form_result->signs_symptoms}}</td>
                                        <td>{{$nutrition_care_process_form_result->nutrition_prescription}}</td>
                                        <td>{{$nutrition_care_process_form_result->prescribed_diet1}}</td>
                                        <td>{{$nutrition_care_process_form_result->prot}}</td>
                                        <td>{{$nutrition_care_process_form_result->chos}}</td>
                                        <td>{{$nutrition_care_process_form_result->fat}}</td>
                                        <td>{{$nutrition_care_process_form_result->kcals}}</td>
                                        <td>{{$nutrition_care_process_form_result->others1}}</td>
                                        <td>{{$nutrition_care_process_form_result->route_of_administration}}</td>
                                        <td>{{$nutrition_care_process_form_result->other_interventions}}</td>
                                        <td>{{$nutrition_care_process_form_result->nutritionist}}</td>
                                        <td>{{$nutrition_care_process_form_result->sign}}</td>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="content">
                        <button class="btn btn-success" data-toggle="modal" data-target="#myModal">Add Data</button>
                        {{--<button class="btn btn-info" data-toggle="modal" data-target="#myModal">Print</button>--}}
                    </div>
                </div>
                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog modal-lg">

                        <!— Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">NUTRITION CARE PROCESS FORM</h4>
                            </div>
                            <form action="{{route('patient_file_nutrition_care_post', ['patient_id'=>$patient_id])}}" method="post" >{!! csrf_field() !!}
                                <div class="container-fluid card card-body">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>DOA:<input type="date" name="doa" class=" form-control" placeholder=""></th>
                                        <th>DOD:<input type="date" name="dod" class=" form-control" placeholder=""></th>
                                        <th>Ward:<input type="text" name="ward" class=" form-control" placeholder=""></th>
                                        <th>BED NO:<input type="text" name="bed" class=" form-control" placeholder=""></th>
                                    </tr>
                                    </thead>
                                    <tbody>
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
                                <textarea type="text" name="physical_exam" class=" form-control" placeholder=""></textarea>
                                <hr>
                                <h4>Client's History</h4>
                                <span class="row">
                                Medications:<textarea type="text" name="medications" class=" form-control" placeholder=""></textarea>
                                Procedures:<textarea type="text" name="procedures" class=" form-control" placeholder=""></textarea>
                                Prescribed Diet:<textarea type="text" name="prescribed_diet" class=" form-control" placeholder=""></textarea>

                            </span>
                                <hr>
                                <h4>NUTRITION DIAGNOSIS</h4>
                                <hr>
                                #1 Problem:<textarea type="text" name="problem1" class=" form-control" placeholder=""></textarea><br>
                                Etiology:<textarea type="text" name="etiology" class=" form-control" placeholder=""></textarea><br>
                                #2 Problems:<textarea type="text" name="problem2" class=" form-control" placeholder=""></textarea><br>
                                Etiology:<textarea type="text" name="etiology1" class=" form-control" placeholder=""></textarea><br>
                                Signs/Symptoms:<textarea type="text" name="signs_symptoms" class=" form-control" placeholder=""></textarea>
                                <hr>
                                <h4>NUTRITION INTERVENTION</h4>
                                Nutrition Prescription:<textarea type="text" name="nutrition_prescription" class=" form-control" placeholder=""></textarea><br>
                                Prescribed Diet:<textarea type="text" name="prescribed_diet1" class=" form-control" placeholder=""></textarea>
                                <span class="">
                                    <span class="row">
                                        <span class="col-md-3">Prot(gms)<input type="number" name="prot" class=" form-control" placeholder=""></span>
                                        <span class="col-md-3">CHOs(gm)<input type="number" name="chos" class=" form-control" placeholder=""></span>
                                        <span class="col-md-3">Fat(gm)<input type="number" name="fat" class=" form-control" placeholder=""></span>
                                        <span class="col-md-3">Kcal<input type="number" name="kcals" class=" form-control" placeholder=""></span>
                                    </span>
                                </span>
                                <span class="">
                                    <span class="row">
                                        <span class="col-md-3">Others<input type="text" name="others1" class=" form-control" placeholder=""></span>
                                        <span class="col-md-3">Route of Administration<input type="text" name="route_of_administration" class=" form-control" placeholder=""></span>
                                    </span>
                                </span>
                                Other interventions:<textarea type="text" name="other_interventions" class=" form-control" placeholder=""></textarea>

                                <span class="">
                                    <span class="row">
                                        <span class="col-md-3">Nutritionist<input type="text" name="nutritionist" class=" form-control" placeholder=""></span>
                                        <span class="col-md-3">Sign<input type="text" name="sign" class=" form-control" placeholder=""></span>
                                    </span>
                                </span>
                                <br><br>
                                </div>
                                <input name="administration_patient_informations_id" type="text" class="form-control d-none" value="{{$patient_id}}">
                                <input name="institution_id" type="text" class="form-control d-none" value="{{ Auth::user()->institution->id }}">
                                <input name="user_id" type="text" value="{{ Auth::user()->id }}" class="form-control d-none">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection