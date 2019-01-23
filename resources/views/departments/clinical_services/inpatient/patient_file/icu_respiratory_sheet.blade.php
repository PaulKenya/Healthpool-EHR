@extends('layouts.master')
@section('content')
    @include('departments.clinical_services.inpatient.patient_file.patient_bio_information')
    <!-- Title &
    Breadcrumbs-->
<div class="row page-titles">
    <div class="col-md-12 align-self-center">
        <h4 class="theme-cl">ICU Respiratory Sheet Record</h4>
    </div>
</div>
<!-- Title & Breadcrumbs-->

<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>ICU Respiratory Sheet Record</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="datatable" class="table table-striped">
                        <thead>
                        <tr>

                            <th>date</th>
                            <th>age</th>
                            <th>sex</th>
                            <th>day_in_unit</th>
                            <th>diagnosis</th>
                            <th>pulse_time</th>
                            <th>bp_time</th>
                            <th>temperature_time</th>
                            <th>cvp_time</th>
                            <th>arterial_ph_time</th>
                            <th>co2_time</th>
                            <th>po2_time</th>
                            <th>blood_so2_time</th>
                            <th>gas_be_time</th>
                            <th>hco3_time</th>
                            <th>na_time</th>
                            <th>k_time</th>
                            <th>lab_tech_time</th>
                            <th>doctor_signs_time</th>
                            <th>respirator_time</th>
                            <th>pressure_time</th>
                            <th>rate_set_time</th>
                            <th>patient_time</th>
                            <th>mv_or_tv_actual_time</th>
                            <th>mv_or_tv_set_time</th>
                            <th>assist_control_time</th>
                            <th>o2_time</th>
                            <th>trach_size_time</th>
                            <th>nebulizer_time</th>
                            <th>endo_tube_size_time</th>
                            <th>cutt_deflates_time</th>
                            <th>5_min_time</th>
                            <th>physiotherapy_time</th>
                            <th>suction_time</th>
                            <th>sign_time</th>
                            <th>position_of_pt_time</th>
                            <th>weaning_time</th>
                            <th>spontaneous_breathing_time</th>
                            <th>remarks</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(isset($intensive_care_unit_respiratory_sheet))
                            @foreach($intensive_care_unit_respiratory_sheet as $intensive_care_unit_respiratory_sheet_result)
                                <tr>
                                    <td>{{$intensive_care_unit_respiratory_sheet_result->date}}</td>
                                    <td>{{$intensive_care_unit_respiratory_sheet_result->age}}</td>
                                    <td>{{$intensive_care_unit_respiratory_sheet_result->sex}}</td>
                                    <td>{{$intensive_care_unit_respiratory_sheet_result->day_in_unit}}</td>
                                    <td>{{$intensive_care_unit_respiratory_sheet_result->diagnosis}}</td>
                                    <td>{{$intensive_care_unit_respiratory_sheet_result->pulse_time}}</td>
                                    <td>{{$intensive_care_unit_respiratory_sheet_result->bp_time}}</td>
                                    <td>{{$intensive_care_unit_respiratory_sheet_result->temperature_time}}</td>
                                    <td>{{$intensive_care_unit_respiratory_sheet_result->cvp_time}}</td>
                                    <td>{{$intensive_care_unit_respiratory_sheet_result->arterial_ph_time}}</td>
                                    <td>{{$intensive_care_unit_respiratory_sheet_result->co2_time}}</td>
                                    <td>{{$intensive_care_unit_respiratory_sheet_result->po2_time}}</td>
                                    <td>{{$intensive_care_unit_respiratory_sheet_result->blood_so2_time}}</td>
                                    <td>{{$intensive_care_unit_respiratory_sheet_result->gas_be_time}}</td>
                                    <td>{{$intensive_care_unit_respiratory_sheet_result->hco3_time}}</td>
                                    <td>{{$intensive_care_unit_respiratory_sheet_result->na_time}}</td>
                                    <td>{{$intensive_care_unit_respiratory_sheet_result->k_time}}</td>
                                    <td>{{$intensive_care_unit_respiratory_sheet_result->lab_tech_time}}</td>
                                    <td>{{$intensive_care_unit_respiratory_sheet_result->doctor_signs_time}}</td>
                                    <td>{{$intensive_care_unit_respiratory_sheet_result->respirator_time}}</td>
                                    <td>{{$intensive_care_unit_respiratory_sheet_result->pressure_time}}</td>
                                    <td>{{$intensive_care_unit_respiratory_sheet_result->rate_set_time}}</td>
                                    <td>{{$intensive_care_unit_respiratory_sheet_result->patient_time}}</td>
                                    <td>{{$intensive_care_unit_respiratory_sheet_result->mv_or_tv_actual_time}}</td>
                                    <td>{{$intensive_care_unit_respiratory_sheet_result->mv_or_tv_set_time}}</td>
                                    <td>{{$intensive_care_unit_respiratory_sheet_result->assist_control_time}}</td>
                                    <td>{{$intensive_care_unit_respiratory_sheet_result->o2_time}}</td>
                                    <td>{{$intensive_care_unit_respiratory_sheet_result->trach_size_time}}</td>
                                    <td>{{$intensive_care_unit_respiratory_sheet_result->nebulizer_time}}</td>
                                    <td>{{$intensive_care_unit_respiratory_sheet_result->endo_tube_size_time}}</td>
                                    <td>{{$intensive_care_unit_respiratory_sheet_result->cutt_deflates_time}}</td>
                                    <td>{{$intensive_care_unit_respiratory_sheet_result->five_min_time}}</td>
                                    <td>{{$intensive_care_unit_respiratory_sheet_result->physiotherapy_time}}</td>
                                    <td>{{$intensive_care_unit_respiratory_sheet_result->suction_time}}</td>
                                    <td>{{$intensive_care_unit_respiratory_sheet_result->sign_time}}</td>
                                    <td>{{$intensive_care_unit_respiratory_sheet_result->position_of_pt_time}}</td>
                                    <td>{{$intensive_care_unit_respiratory_sheet_result->weaning_time}}</td>
                                    <td>{{$intensive_care_unit_respiratory_sheet_result->spontaneous_breathing_time}}</td>
                                    <td>{{$intensive_care_unit_respiratory_sheet_result->remarks}}</td>
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
                            <h4 class="modal-title">Add ICU Respiratory Sheet Record</h4>
                        </div>
                        <div class="modal-body">

                            <div class="col-md-12">
                                <div class="card">

                                    <div class="container-fluid">
                                        <form action="{{ route('intensive_care_unit_respiratory_sheet_post',['patient_id' => $patient_id]) }}" enctype="multipart/form-data" method="post">
                                            {!! csrf_field() !!}

                                            <h4>I.C.U RESPIRATORY SHEET</h4>
                                            <div class="form-row">

                                                <div class="form-group">
                                                    <label for="  ">Date</label>
                                                    <input type="date"  id="myDate" name="date"  readonly  class="form-control" placeholder="" >
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col">
                                                    <label for="age">Age</label>
                                                    <input type="number" name="age" id="age" class="form-control" placeholder="" >
                                                </div>
                                                <div class="form-group col">
                                                    <label for="sex">Sex</label>
                                                    <select class="form-control" name="sex" id="sex">
                                                        <option value="male">Male</option>
                                                        <option value="female">Female</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col">
                                                    <label for="day_in_unit">Day in Unit</label>
                                                    <input type="number" name="day_in_unit" id="day_in_unit" class="form-control" placeholder="" >
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <label for="diagnosis">Diagnosis</label>
                                                    <textarea class="form-control" name="diagnosis" id="diagnosis" rows="3"></textarea>
                                                </div>
                                            </div>
                                            <h5>INSTRUCTIONS</h5>
                                            <div class="form-row">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                        <tr>
                                                            <th>Measurement</th>
                                                            <th>Time</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td>Pulse</td>
                                                            <td>
                                                                <select multiple class="form-control" name="pulse_time" >
                                                                    <option value="8_am">8 AM</option>
                                                                    <option value="9_am">9 AM</option>
                                                                    <option value="10_am">10 AM</option>
                                                                    <option value="11_am">11 AM</option>
                                                                    <option value="12_pm">12 PM</option>
                                                                    <option value="1_pm">1 PM</option>
                                                                    <option value="2_pm">2 PM</option>
                                                                    <option value="3_pm">3 PM</option>
                                                                    <option value="4_pm">4 PM</option>
                                                                    <option value="5_pm">5 PM</option>
                                                                    <option value="6_pm">6 PM</option>
                                                                    <option value="7_pm">7 PM</option>
                                                                    <option value="8_pm">8 PM</option>
                                                                    <option value="9_pm">9 PM</option>
                                                                    <option value="10_pm">10 PM</option>
                                                                    <option value="11_pm">11 PM</option>
                                                                    <option value="12_am">12 AM</option>
                                                                    <option value="1_am">1 AM</option>
                                                                    <option value="2_am">2 AM</option>
                                                                    <option value="3_am">3 AM</option>
                                                                    <option value="4_am">4 AM</option>
                                                                    <option value="5_am">5 AM</option>
                                                                    <option value="6_am">6 AM</option>
                                                                    <option value="7_am">7 AM</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>B.P</td>
                                                            <td>
                                                                <select multiple class="form-control" name="bp_time" >
                                                                    <option value="8_am">8 AM</option>
                                                                    <option value="9_am">9 AM</option>
                                                                    <option value="10_am">10 AM</option>
                                                                    <option value="11_am">11 AM</option>
                                                                    <option value="12_pm">12 PM</option>
                                                                    <option value="1_pm">1 PM</option>
                                                                    <option value="2_pm">2 PM</option>
                                                                    <option value="3_pm">3 PM</option>
                                                                    <option value="4_pm">4 PM</option>
                                                                    <option value="5_pm">5 PM</option>
                                                                    <option value="6_pm">6 PM</option>
                                                                    <option value="7_pm">7 PM</option>
                                                                    <option value="8_pm">8 PM</option>
                                                                    <option value="9_pm">9 PM</option>
                                                                    <option value="10_pm">10 PM</option>
                                                                    <option value="11_pm">11 PM</option>
                                                                    <option value="12_am">12 AM</option>
                                                                    <option value="1_am">1 AM</option>
                                                                    <option value="2_am">2 AM</option>
                                                                    <option value="3_am">3 AM</option>
                                                                    <option value="4_am">4 AM</option>
                                                                    <option value="5_am">5 AM</option>
                                                                    <option value="6_am">6 AM</option>
                                                                    <option value="7_am">7 AM</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Temperature</td>
                                                            <td>
                                                                <select multiple class="form-control" name="temperature_time" >
                                                                    <option value="8_am">8 AM</option>
                                                                    <option value="9_am">9 AM</option>
                                                                    <option value="10_am">10 AM</option>
                                                                    <option value="11_am">11 AM</option>
                                                                    <option value="12_pm">12 PM</option>
                                                                    <option value="1_pm">1 PM</option>
                                                                    <option value="2_pm">2 PM</option>
                                                                    <option value="3_pm">3 PM</option>
                                                                    <option value="4_pm">4 PM</option>
                                                                    <option value="5_pm">5 PM</option>
                                                                    <option value="6_pm">6 PM</option>
                                                                    <option value="7_pm">7 PM</option>
                                                                    <option value="8_pm">8 PM</option>
                                                                    <option value="9_pm">9 PM</option>
                                                                    <option value="10_pm">10 PM</option>
                                                                    <option value="11_pm">11 PM</option>
                                                                    <option value="12_am">12 AM</option>
                                                                    <option value="1_am">1 AM</option>
                                                                    <option value="2_am">2 AM</option>
                                                                    <option value="3_am">3 AM</option>
                                                                    <option value="4_am">4 AM</option>
                                                                    <option value="5_am">5 AM</option>
                                                                    <option value="6_am">6 AM</option>
                                                                    <option value="7_am">7 AM</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>CVP</td>
                                                            <td>
                                                                <select multiple class="form-control" name="cvp_time" >
                                                                    <option value="8_am">8 AM</option>
                                                                    <option value="9_am">9 AM</option>
                                                                    <option value="10_am">10 AM</option>
                                                                    <option value="11_am">11 AM</option>
                                                                    <option value="12_pm">12 PM</option>
                                                                    <option value="1_pm">1 PM</option>
                                                                    <option value="2_pm">2 PM</option>
                                                                    <option value="3_pm">3 PM</option>
                                                                    <option value="4_pm">4 PM</option>
                                                                    <option value="5_pm">5 PM</option>
                                                                    <option value="6_pm">6 PM</option>
                                                                    <option value="7_pm">7 PM</option>
                                                                    <option value="8_pm">8 PM</option>
                                                                    <option value="9_pm">9 PM</option>
                                                                    <option value="10_pm">10 PM</option>
                                                                    <option value="11_pm">11 PM</option>
                                                                    <option value="12_am">12 AM</option>
                                                                    <option value="1_am">1 AM</option>
                                                                    <option value="2_am">2 AM</option>
                                                                    <option value="3_am">3 AM</option>
                                                                    <option value="4_am">4 AM</option>
                                                                    <option value="5_am">5 AM</option>
                                                                    <option value="6_am">6 AM</option>
                                                                    <option value="7_am">7 AM</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Arterial pH</td>
                                                            <td>
                                                                <select multiple class="form-control" name="arterial_ph_time" >
                                                                    <option value="8_am">8 AM</option>
                                                                    <option value="9_am">9 AM</option>
                                                                    <option value="10_am">10 AM</option>
                                                                    <option value="11_am">11 AM</option>
                                                                    <option value="12_pm">12 PM</option>
                                                                    <option value="1_pm">1 PM</option>
                                                                    <option value="2_pm">2 PM</option>
                                                                    <option value="3_pm">3 PM</option>
                                                                    <option value="4_pm">4 PM</option>
                                                                    <option value="5_pm">5 PM</option>
                                                                    <option value="6_pm">6 PM</option>
                                                                    <option value="7_pm">7 PM</option>
                                                                    <option value="8_pm">8 PM</option>
                                                                    <option value="9_pm">9 PM</option>
                                                                    <option value="10_pm">10 PM</option>
                                                                    <option value="11_pm">11 PM</option>
                                                                    <option value="12_am">12 AM</option>
                                                                    <option value="1_am">1 AM</option>
                                                                    <option value="2_am">2 AM</option>
                                                                    <option value="3_am">3 AM</option>
                                                                    <option value="4_am">4 AM</option>
                                                                    <option value="5_am">5 AM</option>
                                                                    <option value="6_am">6 AM</option>
                                                                    <option value="7_am">7 AM</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>CO<sub>2</sub></td>
                                                            <td>
                                                                <select multiple class="form-control" name="co2_time" >
                                                                    <option value="8_am">8 AM</option>
                                                                    <option value="9_am">9 AM</option>
                                                                    <option value="10_am">10 AM</option>
                                                                    <option value="11_am">11 AM</option>
                                                                    <option value="12_pm">12 PM</option>
                                                                    <option value="1_pm">1 PM</option>
                                                                    <option value="2_pm">2 PM</option>
                                                                    <option value="3_pm">3 PM</option>
                                                                    <option value="4_pm">4 PM</option>
                                                                    <option value="5_pm">5 PM</option>
                                                                    <option value="6_pm">6 PM</option>
                                                                    <option value="7_pm">7 PM</option>
                                                                    <option value="8_pm">8 PM</option>
                                                                    <option value="9_pm">9 PM</option>
                                                                    <option value="10_pm">10 PM</option>
                                                                    <option value="11_pm">11 PM</option>
                                                                    <option value="12_am">12 AM</option>
                                                                    <option value="1_am">1 AM</option>
                                                                    <option value="2_am">2 AM</option>
                                                                    <option value="3_am">3 AM</option>
                                                                    <option value="4_am">4 AM</option>
                                                                    <option value="5_am">5 AM</option>
                                                                    <option value="6_am">6 AM</option>
                                                                    <option value="7_am">7 AM</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>PO<sub>2</sub></td>
                                                            <td>
                                                                <select multiple class="form-control" name="po2_time" >
                                                                    <option value="8_am">8 AM</option>
                                                                    <option value="9_am">9 AM</option>
                                                                    <option value="10_am">10 AM</option>
                                                                    <option value="11_am">11 AM</option>
                                                                    <option value="12_pm">12 PM</option>
                                                                    <option value="1_pm">1 PM</option>
                                                                    <option value="2_pm">2 PM</option>
                                                                    <option value="3_pm">3 PM</option>
                                                                    <option value="4_pm">4 PM</option>
                                                                    <option value="5_pm">5 PM</option>
                                                                    <option value="6_pm">6 PM</option>
                                                                    <option value="7_pm">7 PM</option>
                                                                    <option value="8_pm">8 PM</option>
                                                                    <option value="9_pm">9 PM</option>
                                                                    <option value="10_pm">10 PM</option>
                                                                    <option value="11_pm">11 PM</option>
                                                                    <option value="12_am">12 AM</option>
                                                                    <option value="1_am">1 AM</option>
                                                                    <option value="2_am">2 AM</option>
                                                                    <option value="3_am">3 AM</option>
                                                                    <option value="4_am">4 AM</option>
                                                                    <option value="5_am">5 AM</option>
                                                                    <option value="6_am">6 AM</option>
                                                                    <option value="7_am">7 AM</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Blood SO<sub>2</sub></td>
                                                            <td>
                                                                <select multiple class="form-control" name="blood_so2_time" >
                                                                    <option value="8_am">8 AM</option>
                                                                    <option value="9_am">9 AM</option>
                                                                    <option value="10_am">10 AM</option>
                                                                    <option value="11_am">11 AM</option>
                                                                    <option value="12_pm">12 PM</option>
                                                                    <option value="1_pm">1 PM</option>
                                                                    <option value="2_pm">2 PM</option>
                                                                    <option value="3_pm">3 PM</option>
                                                                    <option value="4_pm">4 PM</option>
                                                                    <option value="5_pm">5 PM</option>
                                                                    <option value="6_pm">6 PM</option>
                                                                    <option value="7_pm">7 PM</option>
                                                                    <option value="8_pm">8 PM</option>
                                                                    <option value="9_pm">9 PM</option>
                                                                    <option value="10_pm">10 PM</option>
                                                                    <option value="11_pm">11 PM</option>
                                                                    <option value="12_am">12 AM</option>
                                                                    <option value="1_am">1 AM</option>
                                                                    <option value="2_am">2 AM</option>
                                                                    <option value="3_am">3 AM</option>
                                                                    <option value="4_am">4 AM</option>
                                                                    <option value="5_am">5 AM</option>
                                                                    <option value="6_am">6 AM</option>
                                                                    <option value="7_am">7 AM</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gas B.E</td>
                                                            <td>
                                                                <select multiple class="form-control" name="gas_be_time" >
                                                                    <option value="8_am">8 AM</option>
                                                                    <option value="9_am">9 AM</option>
                                                                    <option value="10_am">10 AM</option>
                                                                    <option value="11_am">11 AM</option>
                                                                    <option value="12_pm">12 PM</option>
                                                                    <option value="1_pm">1 PM</option>
                                                                    <option value="2_pm">2 PM</option>
                                                                    <option value="3_pm">3 PM</option>
                                                                    <option value="4_pm">4 PM</option>
                                                                    <option value="5_pm">5 PM</option>
                                                                    <option value="6_pm">6 PM</option>
                                                                    <option value="7_pm">7 PM</option>
                                                                    <option value="8_pm">8 PM</option>
                                                                    <option value="9_pm">9 PM</option>
                                                                    <option value="10_pm">10 PM</option>
                                                                    <option value="11_pm">11 PM</option>
                                                                    <option value="12_am">12 AM</option>
                                                                    <option value="1_am">1 AM</option>
                                                                    <option value="2_am">2 AM</option>
                                                                    <option value="3_am">3 AM</option>
                                                                    <option value="4_am">4 AM</option>
                                                                    <option value="5_am">5 AM</option>
                                                                    <option value="6_am">6 AM</option>
                                                                    <option value="7_am">7 AM</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>HCO<sub>3</sub></td>
                                                            <td>
                                                                <select multiple class="form-control" name="hco3_time" >
                                                                    <option value="8_am">8 AM</option>
                                                                    <option value="9_am">9 AM</option>
                                                                    <option value="10_am">10 AM</option>
                                                                    <option value="11_am">11 AM</option>
                                                                    <option value="12_pm">12 PM</option>
                                                                    <option value="1_pm">1 PM</option>
                                                                    <option value="2_pm">2 PM</option>
                                                                    <option value="3_pm">3 PM</option>
                                                                    <option value="4_pm">4 PM</option>
                                                                    <option value="5_pm">5 PM</option>
                                                                    <option value="6_pm">6 PM</option>
                                                                    <option value="7_pm">7 PM</option>
                                                                    <option value="8_pm">8 PM</option>
                                                                    <option value="9_pm">9 PM</option>
                                                                    <option value="10_pm">10 PM</option>
                                                                    <option value="11_pm">11 PM</option>
                                                                    <option value="12_am">12 AM</option>
                                                                    <option value="1_am">1 AM</option>
                                                                    <option value="2_am">2 AM</option>
                                                                    <option value="3_am">3 AM</option>
                                                                    <option value="4_am">4 AM</option>
                                                                    <option value="5_am">5 AM</option>
                                                                    <option value="6_am">6 AM</option>
                                                                    <option value="7_am">7 AM</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Na</td>
                                                            <td>
                                                                <select multiple class="form-control" name="na_time" >
                                                                    <option value="8_am">8 AM</option>
                                                                    <option value="9_am">9 AM</option>
                                                                    <option value="10_am">10 AM</option>
                                                                    <option value="11_am">11 AM</option>
                                                                    <option value="12_pm">12 PM</option>
                                                                    <option value="1_pm">1 PM</option>
                                                                    <option value="2_pm">2 PM</option>
                                                                    <option value="3_pm">3 PM</option>
                                                                    <option value="4_pm">4 PM</option>
                                                                    <option value="5_pm">5 PM</option>
                                                                    <option value="6_pm">6 PM</option>
                                                                    <option value="7_pm">7 PM</option>
                                                                    <option value="8_pm">8 PM</option>
                                                                    <option value="9_pm">9 PM</option>
                                                                    <option value="10_pm">10 PM</option>
                                                                    <option value="11_pm">11 PM</option>
                                                                    <option value="12_am">12 AM</option>
                                                                    <option value="1_am">1 AM</option>
                                                                    <option value="2_am">2 AM</option>
                                                                    <option value="3_am">3 AM</option>
                                                                    <option value="4_am">4 AM</option>
                                                                    <option value="5_am">5 AM</option>
                                                                    <option value="6_am">6 AM</option>
                                                                    <option value="7_am">7 AM</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>K</td>
                                                            <td>
                                                                <select multiple class="form-control" name="k_time" >
                                                                    <option value="8_am">8 AM</option>
                                                                    <option value="9_am">9 AM</option>
                                                                    <option value="10_am">10 AM</option>
                                                                    <option value="11_am">11 AM</option>
                                                                    <option value="12_pm">12 PM</option>
                                                                    <option value="1_pm">1 PM</option>
                                                                    <option value="2_pm">2 PM</option>
                                                                    <option value="3_pm">3 PM</option>
                                                                    <option value="4_pm">4 PM</option>
                                                                    <option value="5_pm">5 PM</option>
                                                                    <option value="6_pm">6 PM</option>
                                                                    <option value="7_pm">7 PM</option>
                                                                    <option value="8_pm">8 PM</option>
                                                                    <option value="9_pm">9 PM</option>
                                                                    <option value="10_pm">10 PM</option>
                                                                    <option value="11_pm">11 PM</option>
                                                                    <option value="12_am">12 AM</option>
                                                                    <option value="1_am">1 AM</option>
                                                                    <option value="2_am">2 AM</option>
                                                                    <option value="3_am">3 AM</option>
                                                                    <option value="4_am">4 AM</option>
                                                                    <option value="5_am">5 AM</option>
                                                                    <option value="6_am">6 AM</option>
                                                                    <option value="7_am">7 AM</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Lab Tech</td>
                                                            <td>
                                                                <select multiple class="form-control" name="lab_tech_time" >
                                                                    <option value="8_am">8 AM</option>
                                                                    <option value="9_am">9 AM</option>
                                                                    <option value="10_am">10 AM</option>
                                                                    <option value="11_am">11 AM</option>
                                                                    <option value="12_pm">12 PM</option>
                                                                    <option value="1_pm">1 PM</option>
                                                                    <option value="2_pm">2 PM</option>
                                                                    <option value="3_pm">3 PM</option>
                                                                    <option value="4_pm">4 PM</option>
                                                                    <option value="5_pm">5 PM</option>
                                                                    <option value="6_pm">6 PM</option>
                                                                    <option value="7_pm">7 PM</option>
                                                                    <option value="8_pm">8 PM</option>
                                                                    <option value="9_pm">9 PM</option>
                                                                    <option value="10_pm">10 PM</option>
                                                                    <option value="11_pm">11 PM</option>
                                                                    <option value="12_am">12 AM</option>
                                                                    <option value="1_am">1 AM</option>
                                                                    <option value="2_am">2 AM</option>
                                                                    <option value="3_am">3 AM</option>
                                                                    <option value="4_am">4 AM</option>
                                                                    <option value="5_am">5 AM</option>
                                                                    <option value="6_am">6 AM</option>
                                                                    <option value="7_am">7 AM</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Doctor Signs</td>
                                                            <td>
                                                                <select multiple class="form-control" name="doctor_signs_time" >
                                                                    <option value="8_am">8 AM</option>
                                                                    <option value="9_am">9 AM</option>
                                                                    <option value="10_am">10 AM</option>
                                                                    <option value="11_am">11 AM</option>
                                                                    <option value="12_pm">12 PM</option>
                                                                    <option value="1_pm">1 PM</option>
                                                                    <option value="2_pm">2 PM</option>
                                                                    <option value="3_pm">3 PM</option>
                                                                    <option value="4_pm">4 PM</option>
                                                                    <option value="5_pm">5 PM</option>
                                                                    <option value="6_pm">6 PM</option>
                                                                    <option value="7_pm">7 PM</option>
                                                                    <option value="8_pm">8 PM</option>
                                                                    <option value="9_pm">9 PM</option>
                                                                    <option value="10_pm">10 PM</option>
                                                                    <option value="11_pm">11 PM</option>
                                                                    <option value="12_am">12 AM</option>
                                                                    <option value="1_am">1 AM</option>
                                                                    <option value="2_am">2 AM</option>
                                                                    <option value="3_am">3 AM</option>
                                                                    <option value="4_am">4 AM</option>
                                                                    <option value="5_am">5 AM</option>
                                                                    <option value="6_am">6 AM</option>
                                                                    <option value="7_am">7 AM</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Respirator</td>
                                                            <td>
                                                                <select multiple class="form-control" name="respirator_time" >
                                                                    <option value="8_am">8 AM</option>
                                                                    <option value="9_am">9 AM</option>
                                                                    <option value="10_am">10 AM</option>
                                                                    <option value="11_am">11 AM</option>
                                                                    <option value="12_pm">12 PM</option>
                                                                    <option value="1_pm">1 PM</option>
                                                                    <option value="2_pm">2 PM</option>
                                                                    <option value="3_pm">3 PM</option>
                                                                    <option value="4_pm">4 PM</option>
                                                                    <option value="5_pm">5 PM</option>
                                                                    <option value="6_pm">6 PM</option>
                                                                    <option value="7_pm">7 PM</option>
                                                                    <option value="8_pm">8 PM</option>
                                                                    <option value="9_pm">9 PM</option>
                                                                    <option value="10_pm">10 PM</option>
                                                                    <option value="11_pm">11 PM</option>
                                                                    <option value="12_am">12 AM</option>
                                                                    <option value="1_am">1 AM</option>
                                                                    <option value="2_am">2 AM</option>
                                                                    <option value="3_am">3 AM</option>
                                                                    <option value="4_am">4 AM</option>
                                                                    <option value="5_am">5 AM</option>
                                                                    <option value="6_am">6 AM</option>
                                                                    <option value="7_am">7 AM</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Pressure</td>
                                                            <td>
                                                                <select multiple class="form-control" name="pressure_time" >
                                                                    <option value="8_am">8 AM</option>
                                                                    <option value="9_am">9 AM</option>
                                                                    <option value="10_am">10 AM</option>
                                                                    <option value="11_am">11 AM</option>
                                                                    <option value="12_pm">12 PM</option>
                                                                    <option value="1_pm">1 PM</option>
                                                                    <option value="2_pm">2 PM</option>
                                                                    <option value="3_pm">3 PM</option>
                                                                    <option value="4_pm">4 PM</option>
                                                                    <option value="5_pm">5 PM</option>
                                                                    <option value="6_pm">6 PM</option>
                                                                    <option value="7_pm">7 PM</option>
                                                                    <option value="8_pm">8 PM</option>
                                                                    <option value="9_pm">9 PM</option>
                                                                    <option value="10_pm">10 PM</option>
                                                                    <option value="11_pm">11 PM</option>
                                                                    <option value="12_am">12 AM</option>
                                                                    <option value="1_am">1 AM</option>
                                                                    <option value="2_am">2 AM</option>
                                                                    <option value="3_am">3 AM</option>
                                                                    <option value="4_am">4 AM</option>
                                                                    <option value="5_am">5 AM</option>
                                                                    <option value="6_am">6 AM</option>
                                                                    <option value="7_am">7 AM</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Rate Set</td>
                                                            <td>
                                                                <select multiple class="form-control" name="rate_set_time" >
                                                                    <option value="8_am">8 AM</option>
                                                                    <option value="9_am">9 AM</option>
                                                                    <option value="10_am">10 AM</option>
                                                                    <option value="11_am">11 AM</option>
                                                                    <option value="12_pm">12 PM</option>
                                                                    <option value="1_pm">1 PM</option>
                                                                    <option value="2_pm">2 PM</option>
                                                                    <option value="3_pm">3 PM</option>
                                                                    <option value="4_pm">4 PM</option>
                                                                    <option value="5_pm">5 PM</option>
                                                                    <option value="6_pm">6 PM</option>
                                                                    <option value="7_pm">7 PM</option>
                                                                    <option value="8_pm">8 PM</option>
                                                                    <option value="9_pm">9 PM</option>
                                                                    <option value="10_pm">10 PM</option>
                                                                    <option value="11_pm">11 PM</option>
                                                                    <option value="12_am">12 AM</option>
                                                                    <option value="1_am">1 AM</option>
                                                                    <option value="2_am">2 AM</option>
                                                                    <option value="3_am">3 AM</option>
                                                                    <option value="4_am">4 AM</option>
                                                                    <option value="5_am">5 AM</option>
                                                                    <option value="6_am">6 AM</option>
                                                                    <option value="7_am">7 AM</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Patient</td>
                                                            <td>
                                                                <select multiple class="form-control" name="patient_time" >
                                                                    <option value="8_am">8 AM</option>
                                                                    <option value="9_am">9 AM</option>
                                                                    <option value="10_am">10 AM</option>
                                                                    <option value="11_am">11 AM</option>
                                                                    <option value="12_pm">12 PM</option>
                                                                    <option value="1_pm">1 PM</option>
                                                                    <option value="2_pm">2 PM</option>
                                                                    <option value="3_pm">3 PM</option>
                                                                    <option value="4_pm">4 PM</option>
                                                                    <option value="5_pm">5 PM</option>
                                                                    <option value="6_pm">6 PM</option>
                                                                    <option value="7_pm">7 PM</option>
                                                                    <option value="8_pm">8 PM</option>
                                                                    <option value="9_pm">9 PM</option>
                                                                    <option value="10_pm">10 PM</option>
                                                                    <option value="11_pm">11 PM</option>
                                                                    <option value="12_am">12 AM</option>
                                                                    <option value="1_am">1 AM</option>
                                                                    <option value="2_am">2 AM</option>
                                                                    <option value="3_am">3 AM</option>
                                                                    <option value="4_am">4 AM</option>
                                                                    <option value="5_am">5 AM</option>
                                                                    <option value="6_am">6 AM</option>
                                                                    <option value="7_am">7 AM</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>MV or TV Actual</td>
                                                            <td>
                                                                <select multiple class="form-control" name="mv_or_tv_actual_time" >
                                                                    <option value="8_am">8 AM</option>
                                                                    <option value="9_am">9 AM</option>
                                                                    <option value="10_am">10 AM</option>
                                                                    <option value="11_am">11 AM</option>
                                                                    <option value="12_pm">12 PM</option>
                                                                    <option value="1_pm">1 PM</option>
                                                                    <option value="2_pm">2 PM</option>
                                                                    <option value="3_pm">3 PM</option>
                                                                    <option value="4_pm">4 PM</option>
                                                                    <option value="5_pm">5 PM</option>
                                                                    <option value="6_pm">6 PM</option>
                                                                    <option value="7_pm">7 PM</option>
                                                                    <option value="8_pm">8 PM</option>
                                                                    <option value="9_pm">9 PM</option>
                                                                    <option value="10_pm">10 PM</option>
                                                                    <option value="11_pm">11 PM</option>
                                                                    <option value="12_am">12 AM</option>
                                                                    <option value="1_am">1 AM</option>
                                                                    <option value="2_am">2 AM</option>
                                                                    <option value="3_am">3 AM</option>
                                                                    <option value="4_am">4 AM</option>
                                                                    <option value="5_am">5 AM</option>
                                                                    <option value="6_am">6 AM</option>
                                                                    <option value="7_am">7 AM</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>MV or TV Set</td>
                                                            <td>
                                                                <select multiple class="form-control" name="mv_or_tv_set_time" >
                                                                    <option value="8_am">8 AM</option>
                                                                    <option value="9_am">9 AM</option>
                                                                    <option value="10_am">10 AM</option>
                                                                    <option value="11_am">11 AM</option>
                                                                    <option value="12_pm">12 PM</option>
                                                                    <option value="1_pm">1 PM</option>
                                                                    <option value="2_pm">2 PM</option>
                                                                    <option value="3_pm">3 PM</option>
                                                                    <option value="4_pm">4 PM</option>
                                                                    <option value="5_pm">5 PM</option>
                                                                    <option value="6_pm">6 PM</option>
                                                                    <option value="7_pm">7 PM</option>
                                                                    <option value="8_pm">8 PM</option>
                                                                    <option value="9_pm">9 PM</option>
                                                                    <option value="10_pm">10 PM</option>
                                                                    <option value="11_pm">11 PM</option>
                                                                    <option value="12_am">12 AM</option>
                                                                    <option value="1_am">1 AM</option>
                                                                    <option value="2_am">2 AM</option>
                                                                    <option value="3_am">3 AM</option>
                                                                    <option value="4_am">4 AM</option>
                                                                    <option value="5_am">5 AM</option>
                                                                    <option value="6_am">6 AM</option>
                                                                    <option value="7_am">7 AM</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Assist Control</td>
                                                            <td>
                                                                <select multiple class="form-control" name="assist_control_time" >
                                                                    <option value="8_am">8 AM</option>
                                                                    <option value="9_am">9 AM</option>
                                                                    <option value="10_am">10 AM</option>
                                                                    <option value="11_am">11 AM</option>
                                                                    <option value="12_pm">12 PM</option>
                                                                    <option value="1_pm">1 PM</option>
                                                                    <option value="2_pm">2 PM</option>
                                                                    <option value="3_pm">3 PM</option>
                                                                    <option value="4_pm">4 PM</option>
                                                                    <option value="5_pm">5 PM</option>
                                                                    <option value="6_pm">6 PM</option>
                                                                    <option value="7_pm">7 PM</option>
                                                                    <option value="8_pm">8 PM</option>
                                                                    <option value="9_pm">9 PM</option>
                                                                    <option value="10_pm">10 PM</option>
                                                                    <option value="11_pm">11 PM</option>
                                                                    <option value="12_am">12 AM</option>
                                                                    <option value="1_am">1 AM</option>
                                                                    <option value="2_am">2 AM</option>
                                                                    <option value="3_am">3 AM</option>
                                                                    <option value="4_am">4 AM</option>
                                                                    <option value="5_am">5 AM</option>
                                                                    <option value="6_am">6 AM</option>
                                                                    <option value="7_am">7 AM</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>O<sub>2</sub></td>
                                                            <td>
                                                                <select multiple class="form-control" name="o2_time" >
                                                                    <option value="8_am">8 AM</option>
                                                                    <option value="9_am">9 AM</option>
                                                                    <option value="10_am">10 AM</option>
                                                                    <option value="11_am">11 AM</option>
                                                                    <option value="12_pm">12 PM</option>
                                                                    <option value="1_pm">1 PM</option>
                                                                    <option value="2_pm">2 PM</option>
                                                                    <option value="3_pm">3 PM</option>
                                                                    <option value="4_pm">4 PM</option>
                                                                    <option value="5_pm">5 PM</option>
                                                                    <option value="6_pm">6 PM</option>
                                                                    <option value="7_pm">7 PM</option>
                                                                    <option value="8_pm">8 PM</option>
                                                                    <option value="9_pm">9 PM</option>
                                                                    <option value="10_pm">10 PM</option>
                                                                    <option value="11_pm">11 PM</option>
                                                                    <option value="12_am">12 AM</option>
                                                                    <option value="1_am">1 AM</option>
                                                                    <option value="2_am">2 AM</option>
                                                                    <option value="3_am">3 AM</option>
                                                                    <option value="4_am">4 AM</option>
                                                                    <option value="5_am">5 AM</option>
                                                                    <option value="6_am">6 AM</option>
                                                                    <option value="7_am">7 AM</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Trach Size</td>
                                                            <td>
                                                                <select multiple class="form-control" name="trach_size_time" >
                                                                    <option value="8_am">8 AM</option>
                                                                    <option value="9_am">9 AM</option>
                                                                    <option value="10_am">10 AM</option>
                                                                    <option value="11_am">11 AM</option>
                                                                    <option value="12_pm">12 PM</option>
                                                                    <option value="1_pm">1 PM</option>
                                                                    <option value="2_pm">2 PM</option>
                                                                    <option value="3_pm">3 PM</option>
                                                                    <option value="4_pm">4 PM</option>
                                                                    <option value="5_pm">5 PM</option>
                                                                    <option value="6_pm">6 PM</option>
                                                                    <option value="7_pm">7 PM</option>
                                                                    <option value="8_pm">8 PM</option>
                                                                    <option value="9_pm">9 PM</option>
                                                                    <option value="10_pm">10 PM</option>
                                                                    <option value="11_pm">11 PM</option>
                                                                    <option value="12_am">12 AM</option>
                                                                    <option value="1_am">1 AM</option>
                                                                    <option value="2_am">2 AM</option>
                                                                    <option value="3_am">3 AM</option>
                                                                    <option value="4_am">4 AM</option>
                                                                    <option value="5_am">5 AM</option>
                                                                    <option value="6_am">6 AM</option>
                                                                    <option value="7_am">7 AM</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Nebulizer</td>
                                                            <td>
                                                                <select multiple class="form-control" name="nebulizer_time" >
                                                                    <option value="8_am">8 AM</option>
                                                                    <option value="9_am">9 AM</option>
                                                                    <option value="10_am">10 AM</option>
                                                                    <option value="11_am">11 AM</option>
                                                                    <option value="12_pm">12 PM</option>
                                                                    <option value="1_pm">1 PM</option>
                                                                    <option value="2_pm">2 PM</option>
                                                                    <option value="3_pm">3 PM</option>
                                                                    <option value="4_pm">4 PM</option>
                                                                    <option value="5_pm">5 PM</option>
                                                                    <option value="6_pm">6 PM</option>
                                                                    <option value="7_pm">7 PM</option>
                                                                    <option value="8_pm">8 PM</option>
                                                                    <option value="9_pm">9 PM</option>
                                                                    <option value="10_pm">10 PM</option>
                                                                    <option value="11_pm">11 PM</option>
                                                                    <option value="12_am">12 AM</option>
                                                                    <option value="1_am">1 AM</option>
                                                                    <option value="2_am">2 AM</option>
                                                                    <option value="3_am">3 AM</option>
                                                                    <option value="4_am">4 AM</option>
                                                                    <option value="5_am">5 AM</option>
                                                                    <option value="6_am">6 AM</option>
                                                                    <option value="7_am">7 AM</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Endo Tube Size</td>
                                                            <td>
                                                                <select multiple class="form-control" name="endo_tube_size_time" >
                                                                    <option value="8_am">8 AM</option>
                                                                    <option value="9_am">9 AM</option>
                                                                    <option value="10_am">10 AM</option>
                                                                    <option value="11_am">11 AM</option>
                                                                    <option value="12_pm">12 PM</option>
                                                                    <option value="1_pm">1 PM</option>
                                                                    <option value="2_pm">2 PM</option>
                                                                    <option value="3_pm">3 PM</option>
                                                                    <option value="4_pm">4 PM</option>
                                                                    <option value="5_pm">5 PM</option>
                                                                    <option value="6_pm">6 PM</option>
                                                                    <option value="7_pm">7 PM</option>
                                                                    <option value="8_pm">8 PM</option>
                                                                    <option value="9_pm">9 PM</option>
                                                                    <option value="10_pm">10 PM</option>
                                                                    <option value="11_pm">11 PM</option>
                                                                    <option value="12_am">12 AM</option>
                                                                    <option value="1_am">1 AM</option>
                                                                    <option value="2_am">2 AM</option>
                                                                    <option value="3_am">3 AM</option>
                                                                    <option value="4_am">4 AM</option>
                                                                    <option value="5_am">5 AM</option>
                                                                    <option value="6_am">6 AM</option>
                                                                    <option value="7_am">7 AM</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Cutt Deflates</td>
                                                            <td>
                                                                <select multiple class="form-control" name="cutt_deflates_time" >
                                                                    <option value="8_am">8 AM</option>
                                                                    <option value="9_am">9 AM</option>
                                                                    <option value="10_am">10 AM</option>
                                                                    <option value="11_am">11 AM</option>
                                                                    <option value="12_pm">12 PM</option>
                                                                    <option value="1_pm">1 PM</option>
                                                                    <option value="2_pm">2 PM</option>
                                                                    <option value="3_pm">3 PM</option>
                                                                    <option value="4_pm">4 PM</option>
                                                                    <option value="5_pm">5 PM</option>
                                                                    <option value="6_pm">6 PM</option>
                                                                    <option value="7_pm">7 PM</option>
                                                                    <option value="8_pm">8 PM</option>
                                                                    <option value="9_pm">9 PM</option>
                                                                    <option value="10_pm">10 PM</option>
                                                                    <option value="11_pm">11 PM</option>
                                                                    <option value="12_am">12 AM</option>
                                                                    <option value="1_am">1 AM</option>
                                                                    <option value="2_am">2 AM</option>
                                                                    <option value="3_am">3 AM</option>
                                                                    <option value="4_am">4 AM</option>
                                                                    <option value="5_am">5 AM</option>
                                                                    <option value="6_am">6 AM</option>
                                                                    <option value="7_am">7 AM</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>5 Min</td>
                                                            <td>
                                                                <select multiple class="form-control" name="five_min_time" >
                                                                    <option value="8_am">8 AM</option>
                                                                    <option value="9_am">9 AM</option>
                                                                    <option value="10_am">10 AM</option>
                                                                    <option value="11_am">11 AM</option>
                                                                    <option value="12_pm">12 PM</option>
                                                                    <option value="1_pm">1 PM</option>
                                                                    <option value="2_pm">2 PM</option>
                                                                    <option value="3_pm">3 PM</option>
                                                                    <option value="4_pm">4 PM</option>
                                                                    <option value="5_pm">5 PM</option>
                                                                    <option value="6_pm">6 PM</option>
                                                                    <option value="7_pm">7 PM</option>
                                                                    <option value="8_pm">8 PM</option>
                                                                    <option value="9_pm">9 PM</option>
                                                                    <option value="10_pm">10 PM</option>
                                                                    <option value="11_pm">11 PM</option>
                                                                    <option value="12_am">12 AM</option>
                                                                    <option value="1_am">1 AM</option>
                                                                    <option value="2_am">2 AM</option>
                                                                    <option value="3_am">3 AM</option>
                                                                    <option value="4_am">4 AM</option>
                                                                    <option value="5_am">5 AM</option>
                                                                    <option value="6_am">6 AM</option>
                                                                    <option value="7_am">7 AM</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Physiotherapy</td>
                                                            <td>
                                                                <select multiple class="form-control" name="physiotherapy_time" >
                                                                    <option value="8_am">8 AM</option>
                                                                    <option value="9_am">9 AM</option>
                                                                    <option value="10_am">10 AM</option>
                                                                    <option value="11_am">11 AM</option>
                                                                    <option value="12_pm">12 PM</option>
                                                                    <option value="1_pm">1 PM</option>
                                                                    <option value="2_pm">2 PM</option>
                                                                    <option value="3_pm">3 PM</option>
                                                                    <option value="4_pm">4 PM</option>
                                                                    <option value="5_pm">5 PM</option>
                                                                    <option value="6_pm">6 PM</option>
                                                                    <option value="7_pm">7 PM</option>
                                                                    <option value="8_pm">8 PM</option>
                                                                    <option value="9_pm">9 PM</option>
                                                                    <option value="10_pm">10 PM</option>
                                                                    <option value="11_pm">11 PM</option>
                                                                    <option value="12_am">12 AM</option>
                                                                    <option value="1_am">1 AM</option>
                                                                    <option value="2_am">2 AM</option>
                                                                    <option value="3_am">3 AM</option>
                                                                    <option value="4_am">4 AM</option>
                                                                    <option value="5_am">5 AM</option>
                                                                    <option value="6_am">6 AM</option>
                                                                    <option value="7_am">7 AM</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Suction</td>
                                                            <td>
                                                                <select multiple class="form-control" name="suction_time" >
                                                                    <option value="8_am">8 AM</option>
                                                                    <option value="9_am">9 AM</option>
                                                                    <option value="10_am">10 AM</option>
                                                                    <option value="11_am">11 AM</option>
                                                                    <option value="12_pm">12 PM</option>
                                                                    <option value="1_pm">1 PM</option>
                                                                    <option value="2_pm">2 PM</option>
                                                                    <option value="3_pm">3 PM</option>
                                                                    <option value="4_pm">4 PM</option>
                                                                    <option value="5_pm">5 PM</option>
                                                                    <option value="6_pm">6 PM</option>
                                                                    <option value="7_pm">7 PM</option>
                                                                    <option value="8_pm">8 PM</option>
                                                                    <option value="9_pm">9 PM</option>
                                                                    <option value="10_pm">10 PM</option>
                                                                    <option value="11_pm">11 PM</option>
                                                                    <option value="12_am">12 AM</option>
                                                                    <option value="1_am">1 AM</option>
                                                                    <option value="2_am">2 AM</option>
                                                                    <option value="3_am">3 AM</option>
                                                                    <option value="4_am">4 AM</option>
                                                                    <option value="5_am">5 AM</option>
                                                                    <option value="6_am">6 AM</option>
                                                                    <option value="7_am">7 AM</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Sign : 2 min, 1/2 hr 1</td>
                                                            <td>
                                                                <select multiple class="form-control" name="sign_time" >
                                                                    <option value="8_am">8 AM</option>
                                                                    <option value="9_am">9 AM</option>
                                                                    <option value="10_am">10 AM</option>
                                                                    <option value="11_am">11 AM</option>
                                                                    <option value="12_pm">12 PM</option>
                                                                    <option value="1_pm">1 PM</option>
                                                                    <option value="2_pm">2 PM</option>
                                                                    <option value="3_pm">3 PM</option>
                                                                    <option value="4_pm">4 PM</option>
                                                                    <option value="5_pm">5 PM</option>
                                                                    <option value="6_pm">6 PM</option>
                                                                    <option value="7_pm">7 PM</option>
                                                                    <option value="8_pm">8 PM</option>
                                                                    <option value="9_pm">9 PM</option>
                                                                    <option value="10_pm">10 PM</option>
                                                                    <option value="11_pm">11 PM</option>
                                                                    <option value="12_am">12 AM</option>
                                                                    <option value="1_am">1 AM</option>
                                                                    <option value="2_am">2 AM</option>
                                                                    <option value="3_am">3 AM</option>
                                                                    <option value="4_am">4 AM</option>
                                                                    <option value="5_am">5 AM</option>
                                                                    <option value="6_am">6 AM</option>
                                                                    <option value="7_am">7 AM</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Position of pt</td>
                                                            <td>
                                                                <select multiple class="form-control" name="position_of_pt_time" >
                                                                    <option value="8_am">8 AM</option>
                                                                    <option value="9_am">9 AM</option>
                                                                    <option value="10_am">10 AM</option>
                                                                    <option value="11_am">11 AM</option>
                                                                    <option value="12_pm">12 PM</option>
                                                                    <option value="1_pm">1 PM</option>
                                                                    <option value="2_pm">2 PM</option>
                                                                    <option value="3_pm">3 PM</option>
                                                                    <option value="4_pm">4 PM</option>
                                                                    <option value="5_pm">5 PM</option>
                                                                    <option value="6_pm">6 PM</option>
                                                                    <option value="7_pm">7 PM</option>
                                                                    <option value="8_pm">8 PM</option>
                                                                    <option value="9_pm">9 PM</option>
                                                                    <option value="10_pm">10 PM</option>
                                                                    <option value="11_pm">11 PM</option>
                                                                    <option value="12_am">12 AM</option>
                                                                    <option value="1_am">1 AM</option>
                                                                    <option value="2_am">2 AM</option>
                                                                    <option value="3_am">3 AM</option>
                                                                    <option value="4_am">4 AM</option>
                                                                    <option value="5_am">5 AM</option>
                                                                    <option value="6_am">6 AM</option>
                                                                    <option value="7_am">7 AM</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Weaning</td>
                                                            <td>
                                                                <select multiple class="form-control" name="weaning_time" >
                                                                    <option value="8_am">8 AM</option>
                                                                    <option value="9_am">9 AM</option>
                                                                    <option value="10_am">10 AM</option>
                                                                    <option value="11_am">11 AM</option>
                                                                    <option value="12_pm">12 PM</option>
                                                                    <option value="1_pm">1 PM</option>
                                                                    <option value="2_pm">2 PM</option>
                                                                    <option value="3_pm">3 PM</option>
                                                                    <option value="4_pm">4 PM</option>
                                                                    <option value="5_pm">5 PM</option>
                                                                    <option value="6_pm">6 PM</option>
                                                                    <option value="7_pm">7 PM</option>
                                                                    <option value="8_pm">8 PM</option>
                                                                    <option value="9_pm">9 PM</option>
                                                                    <option value="10_pm">10 PM</option>
                                                                    <option value="11_pm">11 PM</option>
                                                                    <option value="12_am">12 AM</option>
                                                                    <option value="1_am">1 AM</option>
                                                                    <option value="2_am">2 AM</option>
                                                                    <option value="3_am">3 AM</option>
                                                                    <option value="4_am">4 AM</option>
                                                                    <option value="5_am">5 AM</option>
                                                                    <option value="6_am">6 AM</option>
                                                                    <option value="7_am">7 AM</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Spontaneous Breathing</td>
                                                            <td>
                                                                <select multiple class="form-control" name="spontaneous_breathing_time" >
                                                                    <option value="8_am">8 AM</option>
                                                                    <option value="9_am">9 AM</option>
                                                                    <option value="10_am">10 AM</option>
                                                                    <option value="11_am">11 AM</option>
                                                                    <option value="12_pm">12 PM</option>
                                                                    <option value="1_pm">1 PM</option>
                                                                    <option value="2_pm">2 PM</option>
                                                                    <option value="3_pm">3 PM</option>
                                                                    <option value="4_pm">4 PM</option>
                                                                    <option value="5_pm">5 PM</option>
                                                                    <option value="6_pm">6 PM</option>
                                                                    <option value="7_pm">7 PM</option>
                                                                    <option value="8_pm">8 PM</option>
                                                                    <option value="9_pm">9 PM</option>
                                                                    <option value="10_pm">10 PM</option>
                                                                    <option value="11_pm">11 PM</option>
                                                                    <option value="12_am">12 AM</option>
                                                                    <option value="1_am">1 AM</option>
                                                                    <option value="2_am">2 AM</option>
                                                                    <option value="3_am">3 AM</option>
                                                                    <option value="4_am">4 AM</option>
                                                                    <option value="5_am">5 AM</option>
                                                                    <option value="6_am">6 AM</option>
                                                                    <option value="7_am">7 AM</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col">
                                                    <label for="remarks">Remarks</label>
                                                    <textarea class="form-control" name="remarks" id="remarks" rows="3"></textarea>
                                                </div>
                                            </div>
                                            <input name="administration_patient_informations_id" type="text" class="form-control d-none" value="{{$patient_id}}">
                                            <input name="institution_id" type="text" class="form-control d-none" value="{{ Auth::user()->institution->id }}">
                                            <input name="user_id" type="text" value="{{ Auth::user()->id }}" class="form-control d-none">
                                            <div class="form-row">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
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