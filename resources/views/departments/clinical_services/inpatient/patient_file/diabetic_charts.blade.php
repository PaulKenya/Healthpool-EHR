@extends('layouts.master')
@section('content')
    @include('departments.clinical_services.inpatient.patient_file.patient_bio_information')
    <!-- Title & Breadcrumbs-->
<div class="row page-titles">
    <div class="col-md-12 align-self-center">
        <h4 class="theme-cl">Diabetic Record</h4>
    </div>
</div>
<!-- Title & Breadcrumbs-->

<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Diabetic Record</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="datatable" class="table table-striped">
                        <thead>
                        <tr>

                            <th>date_of_recording</th>
                            <th>time_of_recording</th>
                            <th>sugar_testing</th>
                            <th>has_acetone</th>
                            <th>insulin_dose</th>
                            <th>oral_drug_dose</th>
                            <th>blood_sugar_dose</th>
                            <th>weight_dose</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(isset($diabetic_charts))
                            @foreach($diabetic_charts as $diabetic_chart)
                                <tr>

                                    <td>{{ $diabetic_chart->date_of_recording}}</td>
                                    <td>{{ $diabetic_chart->time_of_recording}}</td>
                                    <td>{{ $diabetic_chart->sugar_testing}}</td>
                                    <td>{{ $diabetic_chart->has_acetone}}</td>
                                    <td>{{ $diabetic_chart->insulin_dose}}</td>
                                    <td>{{ $diabetic_chart->oral_drug_dose}}</td>
                                    <td>{{ $diabetic_chart->blood_sugar_dose}}</td>
                                    <td>{{ $diabetic_chart->weight_dose}}</td>
                                </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="col-md-4">
                <div class="content">
                    <button class="btn btn-success" data-toggle="modal" data-target="#myModal">Add more Items</button>
                    {{--<button class="btn btn-info" data-toggle="modal" data-target="#myModal">Print</button>--}}
                </div>
            </div>
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog modal-lg">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Add Diabetic Record</h4>
                        </div>
                        <div class="modal-body">

                            <div class="col-md-12">
                                <div class="card">

                                    <div class="container-fluid">
                                        <form method="post" action="{{ route('diabetic_charts_post',['patient_id'=>$patient_id])}}" enctype="multipart/form-data">
                                            {!! csrf_field() !!}
                                            <h4>DIABETIC CHARTS</h4>
                                            <div class="form-row">

                                                <div class="form-group col-md-2">
                                                    <label for="date_of_recording">Date of Recording</label>
                                                    <input type="date" id="myDate"
                                                           readonly
                                                           name="date_of_recording" id="date_of_recording" class="form-control" placeholder="" aria-describedby="helpId">
                                                </div>
                                                <div class="form-group col-md-2">
                                                    <label for="time_of_recording">Time of Recording</label>
                                                    <input type="time"
                                                           name="time_of_recording" id="time_of_recording" class="form-control" placeholder="" aria-describedby="helpId">
                                                </div>
                                                <input name="administration_patient_informations_id" type="text" class="form-control d-none" value="{{$patient_id}}">
                                                <input name="institution_id" type="text" class="form-control" class="form-control d-none" value="{{ Auth::user()->institution->id }}">
                                                <input name="user_id" type="text" value="{{ Auth::user()->id }}" class="form-control d-none">
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-2">
                                                    <label for="sugar_testing">Urine Testing Sugar</label>
                                                    <select class="form-control" name="sugar_testing" id="sugar_testing">
                                                        <option value="0.02">2%</option>
                                                        <option value="0.01">1%</option>
                                                        <option value="0.005">1/2 %</option>
                                                        <option value="0.0025">1/4 %</option>
                                                        <option value="0">NIL</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-2">
                                                    <p>Has acetone?</p>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input type="checkbox" class="form-check-input" name="has_acetone" id="has_acetone" value="yes" >Acetone
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-2">
                                                    <label for="insulin_dose">Insulin (Dose) unit</label>
                                                    <input type="number" name="insulin_dose" id="insulin_dose" class="form-control" placeholder="">
                                                </div>
                                                <div class="form-group col-md-2">
                                                    <label for="insulin_dose">Oral Drug (Dose) mg</label>
                                                    <input type="number" name="oral_drug_dose" id="oral_drug_dose" class="form-control" placeholder="">
                                                </div>
                                                <div class="form-group col-md-2">
                                                    <label for="insulin_dose">Blood Sugar mgm. %</label>
                                                    <input type="number" name="blood_sugar_dose" id="blood sugar_level" class="form-control" placeholder="">
                                                </div>
                                                <div class="form-group col-md-2">
                                                    <label for="insulin_dose">Weight (kg)</label>
                                                    <input type="number" name="weight_dose" id="weight" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <button class="btn btn-success" type="submit">Submit</button>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection