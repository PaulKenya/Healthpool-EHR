@extends('layouts.master')

@section('content')

<div class="card"> 
        <div class="card-header">
            <h4>Immunization Tally Sheet</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="datatable" class="table table-bordered">
                    <thead>
                    <tr>
                        <th>PROVINCE</th>
                        <TD>PROVINCE</TD>
                        <TD>DISTRICT</TD>
                        <TD>CONSTITUENCY</TD>
                        <TD>FACILITY_NAME</TD>
                        <TD>AGENCY</TD>
                        <TD>MONTH</TD>
                        <TD>YEAR</TD>
                        <TD>BCG UNDER 1</TD>
                        <TD>BCG OVER 1</TD>
                        <TD>DPT HEP B_HB 1 UNDER 1</TD>
                        <TD>DPT HEP B_HB 1 OVER 1</TD>
                        <TD>DPT HEP B_HB 2 UNDER 1</TD>
                        <TD>DPT HEP B_HB 2 OVER 1</TD>
                        <TD>DPT HEP B_HB 3 UNDER 1</TD>
                        <TD>DPT HEP B_HB 3 OVER 1</TD>
                        <TD>OPV BIRTH_UNDER 1</TD>
                        <TD>OPV BIRTH OVER 1</TD>
                        <TD>OPV 1 UNDER 1</TD>
                        <TD>OPV 1 OVER 1</TD>
                        <TD>OPV 2 UNDER 1</TD>
                        <TD>OPV 2 OVER 1</TD>
                        <TD>OPV 3 UNDER 1</TD>
                        <TD>OPV 3 OVER 1</TD>
                        <TD>MEASLES_UNDER_1</TD>
                        <TD>MEASLES_OVER_1</TD>
                        <TD>YELLOW_FEVER_UNDER_1</TD>
                        <TD>YELLOW_FEVER_OVER_1</TD>
                        <TD>FIC_UNDER_1</TD>
                        <TD>FIC_OVER_1</TD>
                        <TD>VITAMIN_A_6_TO_12_MONTHS</TD>
                        <TD>VITAMIN_A_ABOVE_1_YEAR</TD>
                        <TD>VITAMIN_A_LACTATING_MOTHERS</TD>
                        <TD>BCG A</TD>
                        <TD>BCG B</TD>
                        <TD>BCG C</TD>
                        <TD>BCG D</TD>
                        <TD>BCG E</TD>
                        <TD>BCG F</TD>
                        <TD>BCG G</TD>
                        <TD>BCG H</TD>
                        <TD>OPV A</TD>
                        <TD>OPV B</TD>
                        <TD>OPV C</TD>
                        <TD>OPV D</TD>
                        <TD>OPV E</TD>
                        <TD>OPV F</TD>
                        <TD>OPV G</TD>
                        <TD>OPV H</TD>
                        <TD>MEASLES A</TD>
                        <TD>MEASLES B</TD>
                        <TD>MEASLES C</TD>
                        <TD>MEASLES D</TD>
                        <TD>MEASLES E</TD>
                        <TD>MEASLES F</TD>
                        <TD>MEASLES G</TD>
                        <TD>MEASLES H</TD>
                        <TD>DPT HLB HEPB A</TD>
                        <TD>DPT HLB HEPB B</TD>
                        <TD>DPT HLB HEPB C</TD>
                        <TD>DPT HLB HEPB D</TD>
                        <TD>DPT HLB HEPB E</TD>
                        <TD>DPT HLB HEPB F</TD>
                        <TD>DPT HLB HEPB G</TD>
                        <TD>DPT HLB HEPB H</TD>
                        <TD>TT A</TD>
                        <TD>TT B</TD>
                        <TD>TT C</TD>
                        <TD>TT D</TD>
                        <TD>TT E</TD>
                        <TD>TT F</TD>
                        <TD>TT G</TD>
                        <TD>TT H</TD>
                        <TD>VITAMIN A 100000 A</TD>
                        <TD>VITAMIN A 100000 B</TD>
                        <TD>VITAMIN A 100000 C</TD>
                        <TD>VITAMIN A 100000 D</TD>
                        <TD>VITAMIN A 100000 E</TD>
                        <TD>VITAMIN A 100000 F</TD>
                        <TD>VITAMIN A 100000 G</TD>
                        <TD>VITAMIN A 100000 H</TD>
                        <TD>VITAMIN A 200000 A</TD>
                        <TD>VITAMIN A 200000 B</TD>
                        <TD>VITAMIN A 200000 C</TD>
                        <TD>VITAMIN A 200000 D</TD>
                        <TD>VITAMIN A 200000 E</TD>
                        <TD>VITAMIN A 200000 F</TD>
                        <TD>VITAMIN A 200000 G</TD>
                        <TD>VITAMIN A 200000 H</TD>
                        <TD>FORM_SUBMIT_DATE</TD>
                        <TD>FORM_SUBMITTED_BY</TD>
                        <TD>FORM_SUBMIT_DESIGNATION</TD>
                        <TD>SIGNATURE</TD>
                        <TD>RECEIVED_BY</TD>
                        <TD>RECEIVED_DESIGNATION</TD>
                        <TD>RECEIVED_SIGNATURE</TD>
                        <TD>RECEIVED_DATE</TD>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>

                    @if(isset($vitamin_a_tally_sheet))
                        @foreach($vitamin_a_tally_sheet as $vitamin_a_tally_sheet)
                            <tr>
                                <td>{{ $vitamin_a_tally_sheet->province}}</td>
                                <td>{{ $vitamin_a_tally_sheet->district}}</td>
                                <td>{{ $vitamin_a_tally_sheet->constituency}}</td>
                                <td>{{ $vitamin_a_tally_sheet->facility_name}}</td>
                                <td>{{ $vitamin_a_tally_sheet->agency}}</td>
                                <td>{{ $vitamin_a_tally_sheet->month}}</td>
                                <td>{{ $vitamin_a_tally_sheet->year}}</td>
                                <td>{{ $vitamin_a_tally_sheet->bcg_under_1}}</td>
                                <td>{{ $vitamin_a_tally_sheet->bcg_over_1}}</td>
                                <td>{{ $vitamin_a_tally_sheet->dpt_hep_b_hb_1_under_1}}</td>
                                <td>{{ $vitamin_a_tally_sheet->dpt_hep_b_hb_1_over_1}}</td>
                                <td>{{ $vitamin_a_tally_sheet->dpt_hep_b_hb_2_under_1}}</td>
                                <td>{{ $vitamin_a_tally_sheet->dpt_hep_b_hb_2_over_1}}</td>
                                <td>{{ $vitamin_a_tally_sheet->dpt_hep_b_hb_3_under_1}}</td>
                                <td>{{ $vitamin_a_tally_sheet->dpt_hep_b_hb_3_over_1}}</td>
                                <td>{{ $vitamin_a_tally_sheet->opv_birth_under_1}}</td>
                                <td>{{ $vitamin_a_tally_sheet->opv_birth_over_1}}</td>
                                <td>{{ $vitamin_a_tally_sheet->opv_1_under_1}}</td>
                                <td>{{ $vitamin_a_tally_sheet->opv_1_over_1}}</td>
                                <td>{{ $vitamin_a_tally_sheet->opv_2_under_1}}</td>
                                <td>{{ $vitamin_a_tally_sheet->opv_2_over_1}}</td>
                                <td>{{ $vitamin_a_tally_sheet->opv_3_under_1}}</td>
                                <td>{{ $vitamin_a_tally_sheet->opv_3_over_1}}</td>
                                <td>{{ $vitamin_a_tally_sheet->measles_under_1}}</td>
                                <td>{{ $vitamin_a_tally_sheet->measles_over_1}}</td>
                                <td>{{ $vitamin_a_tally_sheet->yellow_fever_under_1}}</td>
                                <td>{{ $vitamin_a_tally_sheet->yellow_fever_over_1}}</td>
                                <td>{{ $vitamin_a_tally_sheet->fic_under_1}}</td>
                                <td>{{ $vitamin_a_tally_sheet->fic_over_1}}</td>
                                <td>{{ $vitamin_a_tally_sheet->vitamin_a_6_to_12_months}}</td>
                                <td>{{ $vitamin_a_tally_sheet->vitamin_a_above_1_year}}</td>
                                <td>{{ $vitamin_a_tally_sheet->vitamin_a_lactating_mothers}}</td>
                                <td>{{ $vitamin_a_tally_sheet->bcg_a}}</td>
                                <td>{{ $vitamin_a_tally_sheet->bcg_b}}</td>
                                <td>{{ $vitamin_a_tally_sheet->bcg_c}}</td>
                                <td>{{ $vitamin_a_tally_sheet->bcg_d}}</td>
                                <td>{{ $vitamin_a_tally_sheet->bcg_e}}</td>
                                <td>{{ $vitamin_a_tally_sheet->bcg_f}}</td>
                                <td>{{ $vitamin_a_tally_sheet->bcg_g}}</td>
                                <td>{{ $vitamin_a_tally_sheet->bcg_h}}</td>
                                <td>{{ $vitamin_a_tally_sheet->opv_a}}</td>
                                <td>{{ $vitamin_a_tally_sheet->opv_b}}</td>
                                <td>{{ $vitamin_a_tally_sheet->opv_c}}</td>
                                <td>{{ $vitamin_a_tally_sheet->opv_d}}</td>
                                <td>{{ $vitamin_a_tally_sheet->opv_e}}</td>
                                <td>{{ $vitamin_a_tally_sheet->opv_f}}</td>
                                <td>{{ $vitamin_a_tally_sheet->opv_g}}</td>
                                <td>{{ $vitamin_a_tally_sheet->opv_h}}</td>
                                <td>{{ $vitamin_a_tally_sheet->measles_a}}</td>
                                <td>{{ $vitamin_a_tally_sheet->measles_b}}</td>
                                <td>{{ $vitamin_a_tally_sheet->measles_c}}</td>
                                <td>{{ $vitamin_a_tally_sheet->measles_d}}</td>
                                <td>{{ $vitamin_a_tally_sheet->measles_e}}</td>
                                <td>{{ $vitamin_a_tally_sheet->measles_f}}</td>
                                <td>{{ $vitamin_a_tally_sheet->measles_g}}</td>
                                <td>{{ $vitamin_a_tally_sheet->measles_h}}</td>
                                <td>{{ $vitamin_a_tally_sheet->dpt_hlb_hepb_a}}</td>
                                <td>{{ $vitamin_a_tally_sheet->dpt_hlb_hepb_b}}</td>
                                <td>{{ $vitamin_a_tally_sheet->dpt_hlb_hepb_c}}</td>
                                <td>{{ $vitamin_a_tally_sheet->dpt_hlb_hepb_d}}</td>
                                <td>{{ $vitamin_a_tally_sheet->dpt_hlb_hepb_e}}</td>
                                <td>{{ $vitamin_a_tally_sheet->dpt_hlb_hepb_f}}</td>
                                <td>{{ $vitamin_a_tally_sheet->dpt_hlb_hepb_g}}</td>
                                <td>{{ $vitamin_a_tally_sheet->dpt_hlb_hepb_h}}</td>
                                <td>{{ $vitamin_a_tally_sheet->tt_a}}</td>
                                <td>{{ $vitamin_a_tally_sheet->tt_b}}</td>
                                <td>{{ $vitamin_a_tally_sheet->tt_c}}</td>
                                <td>{{ $vitamin_a_tally_sheet->tt_d}}</td>
                                <td>{{ $vitamin_a_tally_sheet->tt_e}}</td>
                                <td>{{ $vitamin_a_tally_sheet->tt_f}}</td>
                                <td>{{ $vitamin_a_tally_sheet->tt_g}}</td>
                                <td>{{ $vitamin_a_tally_sheet->tt_h}}</td>
                                <td>{{ $vitamin_a_tally_sheet->vitamin_a_100000_a}}</td>
                                <td>{{ $vitamin_a_tally_sheet->vitamin_a_100000_b}}</td>
                                <td>{{ $vitamin_a_tally_sheet->vitamin_a_100000_c}}</td>
                                <td>{{ $vitamin_a_tally_sheet->vitamin_a_100000_d}}</td>
                                <td>{{ $vitamin_a_tally_sheet->vitamin_a_100000_e}}</td>
                                <td>{{ $vitamin_a_tally_sheet->vitamin_a_100000_f}}</td>
                                <td>{{ $vitamin_a_tally_sheet->vitamin_a_100000_g}}</td>
                                <td>{{ $vitamin_a_tally_sheet->vitamin_a_100000_h}}</td>
                                <td>{{ $vitamin_a_tally_sheet->vitamin_a_200000_a}}</td>
                                <td>{{ $vitamin_a_tally_sheet->vitamin_a_200000_b}}</td>
                                <td>{{ $vitamin_a_tally_sheet->vitamin_a_200000_c}}</td>
                                <td>{{ $vitamin_a_tally_sheet->vitamin_a_200000_d}}</td>
                                <td>{{ $vitamin_a_tally_sheet->vitamin_a_200000_e}}</td>
                                <td>{{ $vitamin_a_tally_sheet->vitamin_a_200000_f}}</td>
                                <td>{{ $vitamin_a_tally_sheet->vitamin_a_200000_g}}</td>
                                <td>{{ $vitamin_a_tally_sheet->vitamin_a_200000_h}}</td>
                                <td>{{ $vitamin_a_tally_sheet->form_submit_date}}</td>
                                <td>{{ $vitamin_a_tally_sheet->form_submitted_by}}</td>
                                <td>{{ $vitamin_a_tally_sheet->form_submit_designation}}</td>
                                <td>{{ $vitamin_a_tally_sheet->signature}}</td>
                                <td>{{ $vitamin_a_tally_sheet->received_by}}</td>
                                <td>{{ $vitamin_a_tally_sheet->received_designation}}</td>
                                <td>{{ $vitamin_a_tally_sheet->received_signature}}</td>
                                <td>{{ $vitamin_a_tally_sheet->received_date}}</td>
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

                <!— Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Add cheque record</h4>
                    </div>
                    <div class="modal-body">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="container">
                                    <div class="row page-titles">
                                        <div class="col-md-12 align-self-center text-center">
                                            <h4 class="theme-cl">IMMUNIZATION AND VITAMIN A TALLY SHEET</h4>
                                        </div>
                                        <p class="text-center">REPUBLIC OF KENYA - MINISTRY OF HEALTH, DIVISION OF VACCINE AND IMMUNIZATION </p>
                                        <p class="text-center">IMMUNIZATION AND VITAMIN A TALLY SHEET</p>
                                    </div>
                                    <form action="{{ route('ic_ir_and_vitamin_a_tally_sheet_post') }}" method="post" >
                                        {!! csrf_field() !!}



                                                <div class="row">


                                                <div class="form-group row col-md-4">
                                                    <label for="date" class="col-sm-4 col-form-label">PROVINCE:</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="province"  class="form-control form-control-full" id="  ">
                                                    </div>
                                                </div>
                                                <div class="form-group row col-md-4">
                                                    <label for="date" class="col-sm-4 col-form-label">DISTRICT:</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="district"  class="form-control form-control-full" id="  " >
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row col-md-6">
                                                <label for="date" class="col-sm-4 col-form-label">CONSTITUENCY:</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="constituency"  class="form-control form-control-full" id="  " >
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group row col-md-4">
                                                    <label for="date" class="col-sm-4 col-form-label">FACILITY NAME:</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="facility_name"  class="form-control form-control-full" id="  " >
                                                    </div>
                                                </div>
                                                <div class="form-group row col-md-4">
                                                    <label for="date" class="col-sm-4 col-form-label">AGENCY:</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="agency"  class="form-control form-control-full" id="  " >
                                                    </div>
                                                </div>
                                                <div class="form-group row col-md-4">
                                                    <label for="date" class="col-sm-4 col-form-label">MONTH:</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="month"  class="form-control form-control-full" id="  " >
                                                    </div>
                                                </div>
                                                <div class="form-group row col-md-4">
                                                    <label for="date" class="col-sm-4 col-form-label">YEAR:</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="year"  class="form-control form-control-full" id="  " >
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <p class="text-center">FILL SECTION A AND B OF THIS FORM AS COMPLETELY AS POSSIBLE; IN SECTION B ONLY MONTHLY TOTAL SHOULD BE FILLED OUT AT HEALTH FACILITY LEVEL</p>
                                                <table class="table table-bordered">
                                                    <thead>
                                                    <tr>
                                                        <th></th>
                                                        <th colspan="2">ANTIGEN FACILITY</th>
                                                        <th rowspan="2" class="text-center">TOTALS</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <th rowspan="2" scope="row">1</th>
                                                        <th rowspan="2">BCG</th>
                                                        <th>Under 1 Year</th>
                                                        <th>
                                                            <input type="text" name="bcg_under_1"  class="form-control" id="  ">
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th>Above 1 Year</th>
                                                        <th>
                                                            <input type="text" name="bcg_over_1"  class="form-control" id="  ">
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th rowspan="2" scope="row">2</th>
                                                        <th rowspan="2">DPT;Hep B/HB<sub>1</sub></th>
                                                        <th>Under 1 Year</th>
                                                        <th>
                                                            <input type="text" name="dpt_hep_b_hb_1_under_1"  class="form-control" id="  ">
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th>Above 1 Year</th>
                                                        <th>
                                                            <input type="text" name="dpt_hep_b_hb_1_over_1"  class="form-control" id="  ">
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th rowspan="2" scope="row">3</th>
                                                        <th rowspan="2">DPT;Hep B/HB<sub>2</sub></th>
                                                        <th>Under 1 Year</th>
                                                        <th>
                                                            <input type="text" name="dpt_hep_b_hb_2_under_1"  class="form-control" id="  ">
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th>Above 1 Year</th>
                                                        <th>
                                                            <input type="text" name="dpt_hep_b_hb_2_over_1"  class="form-control" id="  ">
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th rowspan="2" scope="row">4</th>
                                                        <th rowspan="2">DPT;Hep B/HB<sub>3</sub></th>
                                                        <th>Under 1 Year</th>
                                                        <th>
                                                            <input type="text" name="dpt_hep_b_hb_3_under_1"  class="form-control" id="  ">
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th>Above 1 Year</th>
                                                        <th>
                                                            <input type="text" name="dpt_hep_b_hb_3_over_1"  class="form-control" id="  ">
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th rowspan="2" scope="row">5</th>
                                                        <th rowspan="2">OPV (Birth dose)</th>
                                                        <th>Under 1 Year</th>
                                                        <th>
                                                            <input type="text" name="opv_birth_under_1"  class="form-control" id="  ">
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th>Above 1 Year</th>
                                                        <th>
                                                            <input type="text" name="opv_birth_over_1"  class="form-control" id="  ">
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th rowspan="2" scope="row">7</th>
                                                        <th rowspan="2">OPV<sub>1</sub></th>
                                                        <th>Under 1 Year</th>
                                                        <th>
                                                            <input type="text" name="opv_1_under_1"  class="form-control" id="  ">
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th>Above 1 Year</th>
                                                        <th>
                                                            <input type="text" name="opv_1_over_1"  class="form-control" id="  ">
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th rowspan="2" scope="row">7</th>
                                                        <th rowspan="2">OPV<sub>2</sub></th>
                                                        <th>Under 1 Year</th>
                                                        <th>
                                                            <input type="text" name="opv_2_under_1"  class="form-control" id="  ">
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th>Above 1 Year</th>
                                                        <th>
                                                            <input type="text" name="opv_2_over_1"  class="form-control" id="  ">
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th rowspan="2" scope="row">8</th>
                                                        <th rowspan="2">OPV<sub>3</sub></th>
                                                        <th>Under 1 Year</th>
                                                        <th>
                                                            <input type="text" name="opv_3_under_1"  class="form-control" id="  ">
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th>Above 1 Year</th>
                                                        <th>
                                                            <input type="text" name="opv_3_over_1"  class="form-control" id="  ">
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th rowspan="2" scope="row">9</th>
                                                        <th rowspan="2">Measles</th>
                                                        <th>Under 1 Year</th>
                                                        <th>
                                                            <input type="text" name="measles_under_1"  class="form-control" id="  ">
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th>Above 1 Year</th>
                                                        <th>
                                                            <input type="text" name="measles_over_1"  class="form-control" id="  ">
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th rowspan="2" scope="row">10</th>
                                                        <th rowspan="2">Yellow Fever</th>
                                                        <th>Under 1 Year</th>
                                                        <th>
                                                            <input type="text" name="yellow_fever_under_1"  class="form-control" id="  ">
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th>Above 1 Year</th>
                                                        <th>
                                                            <input type="text" name="yellow_fever_over_1"  class="form-control" id="  ">
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th rowspan="2" scope="row">11</th>
                                                        <th rowspan="2">Fully Immunized Child(FIC)</th>
                                                        <th>Under 1 Year</th>
                                                        <th>
                                                            <input type="text" name="fic_under_1"  class="form-control" id="  ">
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th>Above 1 Year</th>
                                                        <th>
                                                            <input type="text" name="fic_over_1"  class="form-control" id="  ">
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th rowspan="3" scope="row">13</th>
                                                        <th rowspan="3">Vitamin A</th>
                                                        <th>6 Months to 12 Months(100,000 IU)</th>
                                                        <th>
                                                            <input type="text" name="vitamin_a_6_to_12_months"  class="form-control" id="  ">
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th>Above 1 Year (200,000 IU)</th>
                                                        <th>
                                                            <input type="text" name="vitamin_a_above_1_year"  class="form-control" id="  ">
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th>Lactating Mothers (200,000 IU)</th>
                                                        <th>
                                                            <input type="text" name="vitamin_a_lactating_mothers"  class="form-control" id="  ">
                                                        </th>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                                <table class="table table-bordered">
                                                    <thead>
                                                    <tr>
                                                        <th></th>
                                                        <th colspan="2">ANTIGEN FACILITY</th>
                                                        <th rowspan="2" class="text-center">TOTALS</th>
                                                    </tr>
                                                    <tr>
                                                        <th></th>
                                                        <th colspan="2">DAYS OF THE MONTH</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td rowspan="8">14</td>
                                                        <td rowspan="8">BCG</td>
                                                        <td>[A]Doses in stock at the beginning of the month</td>
                                                        <td>
                                                            <input type="text" name="bcg_a"  class="form-control" id="  ">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>[B]Doses recieved within the month</td>
                                                        <td>
                                                            <input type="text" name="bcg_b"  class="form-control" id="  ">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>[C]Total doses stocked in the month[A+B]</td>
                                                        <td>
                                                            <input type="text" name="bcg_c" class="form-control" id="  ">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>[D]Doses remaining at the end of the month</td>
                                                        <td>
                                                            <input type="text" name="bcg_d"  class="form-control" id="  ">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>[E]Doses used in the month[C-D]</td>
                                                        <td>
                                                            <input type="text" name="bcg_e"  class="form-control" id="  ">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>[F]Number of children vaccinated during the month</td>
                                                        <td>
                                                            <input type="text" name="bcg_f"  class="form-control" id="  ">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>[G]doses wasted in he month[E-F]</td>
                                                        <td>
                                                            <input type="text" name="bcg_g"  class="form-control" id="  ">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>[H]Wastage rate in the month= [G/E]*100</td>
                                                        <td>
                                                            <input type="text" name="bcg_h"  class="form-control" id="  ">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td rowspan="8">15</td>
                                                        <td rowspan="8">OPV</td>
                                                        <td>[A]Doses in stock at the beginning of the month</td>
                                                        <td>
                                                            <input type="text" name="opv_a"  class="form-control" id="  ">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>[B]Doses recieved within the month</td>
                                                        <td>
                                                            <input type="text" name="opv_b"  class="form-control" id="  ">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>[C]Total doses stocked in the month[A+B]</td>
                                                        <td>
                                                            <input type="text" name="opv_c"  class="form-control" id="  ">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>[D]Doses remaining at the end of the month</td>
                                                        <td>
                                                            <input type="text" name="opv_d"  class="form-control" id="  ">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>[E]Doses used in the month[C-D]</td>
                                                        <td>
                                                            <input type="text" name="opv_e"  class="form-control" id="  ">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>[F]Number of children vaccinated during the month</td>
                                                        <td>
                                                            <input type="text" name="opv_f"  class="form-control" id="  ">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>[G]doses wasted in he month[E-F]</td>
                                                        <td>
                                                            <input type="text" name="opv_g"  class="form-control" id="  ">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>[H]Wastage rate in the month= [G/E]*100</td>
                                                        <td>
                                                            <input type="text" name="opv_h"  class="form-control" id="  ">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td rowspan="8">16</td>
                                                        <td rowspan="8">MEASLES</td>
                                                        <td>[A]Doses in stock at the beginning of the month</td>
                                                        <td>
                                                            <input type="text" name="measles_a"   class="form-control" id="  ">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>[B]Doses recieved within the month</td>
                                                        <td>
                                                            <input type="text" name="measles_b"  class="form-control" id="  ">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>[C]Total doses stocked in the month[A+B]</td>
                                                        <td>
                                                            <input type="text" name="measles_c"  class="form-control" id="  ">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>[D]Doses remaining at the end of the month</td>
                                                        <td>
                                                            <input type="text" name="measles_d"  class="form-control" id="  ">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>[E]Doses used in the month[C-D]</td>
                                                        <td>
                                                            <input type="text" name="measles_e"  class="form-control" id="  ">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>[F]Number of children vaccinated during the month</td>
                                                        <td>
                                                            <input type="text" name="measles_f"  class="form-control" id="  ">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>[G]doses wasted in he month[E-F]</td>
                                                        <td>
                                                            <input type="text" name="measles_g"  class="form-control" id="  ">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>[H]Wastage rate in the month= [G/E]*100</td>
                                                        <td>
                                                            <input type="text" name="measles_h"  class="form-control" id="  ">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td rowspan="8">17</td>
                                                        <td rowspan="8">DPT-HIB-HEP B</td>
                                                        <td>[A]Doses in stock at the beginning of the month</td>
                                                        <td>
                                                            <input type="text" name="dpt_hlb_hepb_a"  class="form-control" id="  ">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>[B]Doses recieved within the month</td>
                                                        <td>
                                                            <input type="text" name="dpt_hlb_hepb_b"  class="form-control" id="  ">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>[C]Total doses stocked in the month[A+B]</td>
                                                        <td>
                                                            <input type="text" name="dpt_hlb_hepb_c"  class="form-control" id="  ">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>[D]Doses remaining at the end of the month</td>
                                                        <td>
                                                            <input type="text" name="dpt_hlb_hepb_d"  class="form-control" id="  ">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>[E]Doses used in the month[C-D]</td>
                                                        <td>
                                                            <input type="text" name="dpt_hlb_hepb_e"  class="form-control" id="  ">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>[F]Number of children vaccinated during the month</td>
                                                        <td>
                                                            <input type="text" name="dpt_hlb_hepb_f"  class="form-control" id="  ">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>[G]doses wasted in he month[E-F]</td>
                                                        <td>
                                                            <input type="text" name="dpt_hlb_hepb_g"   class="form-control" id="  ">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>[H]Wastage rate in the month= [G/E]*100</td>
                                                        <td>
                                                            <input type="text" name="dpt_hlb_hepb_h"   class="form-control" id="  ">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td rowspan="8">18</td>
                                                        <td rowspan="8">TT</td>
                                                        <td>[A]Doses in stock at the beginning of the month</td>
                                                        <td>
                                                            <input type="text" name="tt_a"   class="form-control" id="  ">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>[B]Doses recieved within the month</td>
                                                        <td>
                                                            <input type="text" name="tt_b"  class="form-control" id="  ">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>[C]Total doses stocked in the month[A+B]</td>
                                                        <td>
                                                            <input type="text" name="tt_c"  class="form-control" id="  ">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>[D]Doses remaining at the end of the month</td>
                                                        <td>
                                                            <input type="text" name="tt_d"  class="form-control" id="  ">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>[E]Doses used in the month[C-D]</td>
                                                        <td>
                                                            <input type="text" name="tt_e"  class="form-control" id="  ">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>[F]Number of children vaccinated during the month</td>
                                                        <td>
                                                            <input type="text" name="tt_f"  class="form-control" id="  ">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>[G]doses wasted in he month[E-F]</td>
                                                        <td>
                                                            <input type="text" name="tt_g"  class="form-control" id="  ">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>[H]Wastage rate in the month= [G/E]*100</td>
                                                        <td>
                                                            <input type="text" name="tt_h"  class="form-control" id="  ">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td rowspan="8">19</td>
                                                        <td rowspan="8">Vitamin A- 100,000 IU</td>
                                                        <td>[A]Doses in stock at the beginning of the month</td>
                                                        <td>
                                                            <input type="text" name="vitamin_a_100000_a"  class="form-control" id="  ">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>[B]Doses recieved within the month</td>
                                                        <td>
                                                            <input type="text" name="vitamin_a_100000_b"  class="form-control" id="  ">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>[C]Total doses stocked in the month[A+B]</td>
                                                        <td>
                                                            <input type="text" name="vitamin_a_100000_c"  class="form-control" id="  ">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>[D]Doses remaining at the end of the month</td>
                                                        <td>
                                                            <input type="text" name="vitamin_a_100000_d"  class="form-control" id="  ">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>[E]Doses used in the month[C-D]</td>
                                                        <td>
                                                            <input type="text" name="vitamin_a_100000_e"  class="form-control" id="  ">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>[F]Number of children vaccinated during the month</td>
                                                        <td>
                                                            <input type="text" name="vitamin_a_100000_f"  class="form-control" id="  ">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>[G]doses wasted in he month[E-F]</td>
                                                        <td>
                                                            <input type="text" name="vitamin_a_100000_g"  class="form-control" id="  ">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>[H]Wastage rate in the month= [G/E]*100</td>
                                                        <td>
                                                            <input type="text" name="vitamin_a_100000_h"  class="form-control" id="  ">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td rowspan="8">20</td>
                                                        <td rowspan="8">Vitamin A- 200,000 IU</td>
                                                        <td>[A]Doses in stock at the beginning of the month</td>
                                                        <td>
                                                            <input type="text" name="vitamin_a_200000_a" class="form-control" id="  ">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>[B]Doses recieved within the month</td>
                                                        <td>
                                                            <input type="text" name="vitamin_a_200000_b"  class="form-control" id="  ">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>[C]Total doses stocked in the month[A+B]</td>
                                                        <td>
                                                            <input type="text" name="vitamin_a_200000_c" class="form-control" id="  ">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>[D]Doses remaining at the end of the month</td>
                                                        <td>
                                                            <input type="text" name="vitamin_a_200000_d"  class="form-control" id="  ">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>[E]Doses used in the month[C-D]</td>
                                                        <td>
                                                            <input type="text" name="vitamin_a_200000_e"  class="form-control" id="  ">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>[F]Number of children vaccinated during the month</td>
                                                        <td>
                                                            <input type="text" name="vitamin_a_200000_f"  class="form-control" id="  ">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>[G]doses wasted in he month[E-F]</td>
                                                        <td>
                                                            <input type="text" name="vitamin_a_200000_g"  class="form-control" id="  ">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>[H]Wastage rate in the month= [G/E]*100</td>
                                                        <td>
                                                            <input type="text" name="vitamin_a_200000_h"  class="form-control" id="  ">
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="row">
                                                <div class="form-group row col-md-4">
                                                    <label for="date" class="col-sm-4 col-form-label">Sumary of form submitted on</label>
                                                    <div class="col-sm-8">
                                                        <input type="date" name="form_submit_date"  class="form-control" id="  " >
                                                    </div>
                                                </div>
                                                <div class="form-group row col-md-3">
                                                    <label for="date" class="col-sm-4 col-form-label">By</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="form_submitted_by"  class="form-control form-control-full" id="  " >
                                                    </div>
                                                </div>
                                                <div class="form-group row col-md-5">
                                                    <label for="date" class="col-sm-4 col-form-label">Designation</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="form_submit_designation"  class="form-control form-control-full" id="  " >
                                                    </div>
                                                </div>
                                                <div class="form-group row col-md-4">
                                                    <label for="date" class="col-sm-4 col-form-label">Signature</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="signature"  class="form-control form-control-full" id="  " >
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group row col-md-4">
                                                    <label for="date" class="col-sm-4 col-form-label">Recieved by</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="received_by"  class="form-control" id="  " >
                                                    </div>
                                                </div>
                                                <div class="form-group row col-md-5">
                                                    <label for="date" class="col-sm-4 col-form-label">Designation</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="received_designation"  class="form-control form-control-full" id="  " >
                                                    </div>
                                                </div>
                                                <div class="form-group row col-md-4">
                                                    <label for="date" class="col-sm-4 col-form-label">Signature</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="received_signature"  class="form-control form-control-full" id="  " >
                                                    </div>
                                                </div>
                                                <div class="form-group row col-md-3">
                                                    <label for="date" class="col-sm-4 col-form-label">Date</label>
                                                    <div class="col-sm-8">
                                                        <input type="date" name="received_date"  class="form-control form-control-full" id="  " >
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <p class="text-center">Facilities: Send the completed form to the Medical Officer of Health by 5<sup>th</sup> of the following month</p>
                                                <p class="text-center">Districts: Send the completed form to the PMO, By 15<sup>th</sup> of the following month.</p>
                                                <p class="text-center">Province: Send Electronic copy of the completed Provincial eSumary by district to he DVI Office HEAD DVI P.O BOX 43319 Nairobi by 21<sup>st</sup> of the following month</p>
                                            </div>
                                        <input type="submit" class="btn btn-info" data-toggle="modal" value="Save">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
 
@endsection