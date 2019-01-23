@extends('layouts.master')

@section('content')
    <div class="row page-titles">
        <div class="col-md-12 align-self-center text-center">
            <h4 class="theme-cl">MOH 405</h4>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h4>MOH 405</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="datatable" class="table table-bordered">
                    <thead>
                    <tr>
                        <th>DATE</th>
                        <th>ANC NO</th>
                        <th>RE-ATTENDANT</th>
                        <th>NO OF VISITS</th>
                        <th>FULL NAMES</th>
                        <th>AGE</th>
                        <th>MARITAL STATUS</th>
                        <th>SUB LOCATION</th>
                        <th>VILLAGE/STATE</th>
                        <th>PARITY</th>
                        <th>GRAVIDAE</th>
                        <th>LMP DATE</th>
                        <th>EDD DATE</th>
                        <th>GESTATION AGE(WEEKS)</th>
                        <th>WEIGHT(KG)</th>
                        <th>BLOOD PRESSURE</th>
                        <th>HB</th>
                        <th>RPR/VDRL POS/NEG</th>
                        <th>HIV-POS/NEG</th>
                        <th>SCREENED FOR TB</th>
                        <th>RECEIVED HIV RESULTS</th>
                        <th>OTHER CONDITIONS</th>
                        <th>COTRIMOXAZOLE GIVEN</th>
                        <th>DOSE OF TT GIVEN</th>
                        <th>GIVEN IRON SUPPLEMENTATION</th>
                        <th>GIVEN FOLLIC</th>
                        <th>GIVEN IPT1</th>
                        <th>GIVEN IPT2</th>
                        <th>RECEIVED ARV PROPHYLAXIS MOTHER</th>
                        <th>RECEIVED ARV PROPHYLAXIS BABY</th>
                        <th>RECEIVED ITN</th>
                        <th>COUNSELLED ON</th>
                        <th>ADDITIONAL TREATMENT</th>
                        <th>PARTNERS</th>
                        <th>PARTNERS STATUS</th>
                        <th>HIV+ PARTNERS REFERRED FOR FOLLOW-UP</th>
                        <th>REMARKS</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(isset($moh_405_results))
                        @foreach($moh_405_results as $moh_405_result)
                            <tr>
                                <td>{{ $moh_405_result->date }}</td>
                                <td>{{ $moh_405_result->anc_no }}</td>
                                <td>{{ $moh_405_result->re_attendant }}</td>
                                <td>{{ $moh_405_result->no_of_visits }}</td>
                                <td>{{ $moh_405_result->full_names }}</td>
                                <td>{{ $moh_405_result->age }}</td>
                                <td>{{ $moh_405_result->marital_status }}</td>
                                <td>{{ $moh_405_result->sub_location }}</td>
                                <td>{{ $moh_405_result->village }}</td>
                                <td>{{ $moh_405_result->parity }}</td>
                                <td>{{ $moh_405_result->gravidae }}</td>
                                <td>{{ $moh_405_result->lmp_date }}</td>
                                <td>{{ $moh_405_result->edd_date }}</td>
                                <td>{{ $moh_405_result->gestation_age }}</td>
                                <td>{{ $moh_405_result->weight }}</td>
                                <td>{{ $moh_405_result->blood_pressure }}</td>
                                <td>{{ $moh_405_result->hb }}</td>
                                <td>{{ $moh_405_result->rpr }}</td>
                                <td>{{ $moh_405_result->hiv_status }}</td>
                                <td>{{ $moh_405_result->screened_for_tb }}</td>
                                <td>{{ $moh_405_result->received_hiv_results }}</td>
                                <td>{{ $moh_405_result->other_conditions }}</td>
                                <td>{{ $moh_405_result->cotrixamole_given }}</td>
                                <td>{{ $moh_405_result->dose_of_tt_given }}</td>
                                <td>{{ $moh_405_result->given_iron_supplementation }}</td>
                                <td>{{ $moh_405_result->given_folic }}</td>
                                <td>{{ $moh_405_result->given_ipt1 }}</td>
                                <td>{{ $moh_405_result->given_ipt2 }}</td>
                                <td>{{ $moh_405_result->received_arv_prophylaxis_mother }}</td>
                                <td>{{ $moh_405_result->received_arv_prophylaxis_baby }}</td>
                                <td>{{ $moh_405_result->received_itn }}</td>
                                <td>{{ $moh_405_result->counselled_on }}</td>
                                <td>{{ $moh_405_result->additional_treatment }}</td>
                                <td>{{ $moh_405_result->partners }}</td>
                                <td>{{ $moh_405_result->partners_status }}</td>
                                <td>{{ $moh_405_result->hiv_positive_partners_referred_for_follow_up }}</td>
                                <td>{{ $moh_405_result->remarks }}</td>
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
                        <h4 class="modal-title">Add new record</h4>
                    </div>
                    <div class="modal-body">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="row page-titles">
                                    <div class="col-md-12 align-self-center text-center">
                                        <h4 class="theme-cl">MOH 405</h4>
                                    </div>
                                </div>
                                <div class="container-fluid">
                                    <p>MOH 405 ANTENATAL REGISTER STEP BY STEP FILLING IN THE REGISTER GUIDLINES FOR THE HEALTH PROVIDERS</p>
                                    <form action="{{route('moh405_post')}}" method="post" >{!! csrf_field() !!}
                                        <table class="table table-bordered">
                                            <thead>

                                            <tr class="color background-color:black">
                                                <th scope="col">COLUMN</th>
                                                <th scope="col">DATA</th>
                                                <th scope="col">DEFINITIONS/EXPLANATIONS</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>A</td>
                                                <td>DATE</td>
                                                <td><input type="date" name="date" class="form-control" placeholder=""></td>
                                            </tr>
                                            <tr>
                                                <td>B</td>
                                                <td>ANC NO</td>
                                                <td><input type="number" name="anc_no" class="form-control" placeholder=""></td>
                                            </tr>
                                            <tr>
                                                <td>C</td>
                                                <td>RE-ATTENDANT</td>
                                                <td><input type="text" name="re_attendant" class="form-control" placeholder=""></td>
                                            </tr>
                                            <tr>
                                                <td>D</td>
                                                <td>NO OF VISITS</td>
                                                <td><input type="number" name="no_of_visits" class="form-control" placeholder=""></td>
                                            </tr>
                                            <tr>
                                                <td>E</td>
                                                <td>FULL NAMES</td>
                                                <td><input type="text" name="full_names" class="form-control" placeholder=""></td>
                                            </tr>
                                            <tr>
                                                <td>F</td>
                                                <td>AGE</td>
                                                <td><input type="number" name="age" class="form-control" placeholder=""></td>
                                            </tr>
                                            <tr>
                                                <td>G</td>
                                                <td>MARITAL STATUS</td>
                                                <td>
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <div class="form-check form-check-inline  col-form-label">
                                                                <input class="form-check-input" type="radio" name="marital_status" id="#Married" value="Married">
                                                                <label for="#Married">Married</label>
                                                            </div>
                                                            <br>
                                                            <div class="form-check form-check-inline  col-form-label">
                                                                <input class="form-check-input" type="radio" name="marital_status" id="#Widowed" value="Widowed">
                                                                <label for="#Widowed">Widowed</label>
                                                            </div>
                                                            <br>
                                                            <div class="form-check form-check-inline  col-form-label">
                                                                <input class="form-check-input" type="radio" name="marital_status" id="#Divorced" value="Divorced">
                                                                <label for="#Divorced">Divorced</label>
                                                            </div>
                                                            <br>
                                                            <div class="form-check form-check-inline  col-form-label">
                                                                <input class="form-check-input" type="radio" name="marital_status" id="#Single" value="Single">
                                                                <label for="#Single">Single</label>
                                                            </div>
                                                            <br>
                                                            <div class="form-check form-check-inline  col-form-label">
                                                                <input class="form-check-input" type="radio" name="marital_status" id="#Separated" value="Separated">
                                                                <label for="#Separated">Separated</label>
                                                            </div>
                                                        </div>
                                                    </div></td>
                                            </tr>
                                            <tr>
                                                <td>H</td>
                                                <td>SUB LOCATION</td>
                                                <td><input type="text" name="sub_location" class="form-control" placeholder=""></td>
                                            </tr>
                                            <tr>
                                                <td>I</td>
                                                <td>VILLAGE/STATE</td>
                                                <td><input type="text" name="village" class="form-control" placeholder=""></td>
                                            </tr>
                                            <tr>
                                                <td>J</td>
                                                <td>PARITY</td>
                                                <td><input type="number" name="parity" class="form-control" placeholder=""></td>
                                            </tr>
                                            <tr>
                                                <td>K</td>
                                                <td>GRAVIDAE</td>
                                                <td><input type="number" name="gravidae" class="form-control" placeholder=""></td>
                                            </tr>
                                            <tr>
                                                <td>L</td>
                                                <td>LMP DATE</td>
                                                <td><input type="date" name="lmp_date" class="form-control" placeholder=""></td>
                                            </tr>
                                            <tr>
                                                <td>M</td>
                                                <td>EDD DATE</td>
                                                <td><input type="date" name="edd_date" class="form-control" placeholder=""></td>
                                            </tr>
                                            <tr>
                                                <td>N</td>
                                                <td>GESTATION AGE(WEEKS)</td>
                                                <td><input type="number" name="gestation_age" class="form-control" placeholder=""></td>
                                            </tr>
                                            <tr>
                                                <td>O</td>
                                                <td>WEIGHT(KG)</td>
                                                <td><input type="number" name="weight" class="form-control" placeholder=""></td>
                                            </tr>
                                            <tr>
                                                <td>P</td>
                                                <td>BLOOD PRESSURE</td>
                                                <td><input type="number" name="blood_pressure" class="form-control" placeholder=""></td>
                                            </tr>
                                            <tr>
                                                <td>Q</td>
                                                <td>HB</td>
                                                <td><input type="number" name="hb" class="form-control" placeholder=""></td>
                                            </tr>
                                            <tr>
                                                <td>R</td>
                                                <td>RPR/VDRL POS/NEG(ONLY THOSE TESTED DURING THIS VISIT)</td>
                                                <td><input type="text" name="rpr" class="form-control" placeholder=""></td>
                                            </tr>
                                            <tr>
                                                <td>S</td>
                                                <td>HIV-POS/NEG(ONLY THOSE TESTED DURING THIS VISIT)</td>
                                                <td>
                                                    <div class="col-sm-8">
                                                        <div class="form-group">
                                                            <div class="form-check form-check-inline  col-form-label">
                                                                <input class="form-check-input" type="radio" name="hiv_status" id="#Positive" value="Positive">
                                                                <label for="#Positive">Positive</label>
                                                            </div>
                                                            <br>
                                                            <div class="form-check form-check-inline  col-form-label">
                                                                <input class="form-check-input" type="radio" name="hiv_status" id="#Negative" value="Negative">
                                                                <label for="#Negative">Negative</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>T</td>
                                                <td>SCREENED FOR TB?Y/N</td>
                                                <td><div class="col-sm-8">
                                                        <div class="form-group">
                                                            <div class="form-check form-check-inline  col-form-label">
                                                                <input class="form-check-input" type="radio" name="screened_for_tb" id="#Yes_1" value="Yes">
                                                                <label for="#Yes_1">Yes</label>
                                                            </div>
                                                            <br>
                                                            <div class="form-check form-check-inline  col-form-label">
                                                                <input class="form-check-input" type="radio" name="screened_for_tb" id="#No_1" value="No">
                                                                <label for="#No_1">No</label>
                                                            </div>
                                                        </div>
                                                    </div></td>
                                            </tr>
                                            <tr>
                                                <td>U</td>
                                                <td>RECEIVED HIV RESULTS?Y/N</td>
                                                <td>
                                                    <div class="col-sm-8">
                                                        <div class="form-group">
                                                            <div class="form-check form-check-inline  col-form-label">
                                                                <input class="form-check-input" type="radio" name="received_hiv_results" id="#Yes_2" value="Yes">
                                                                <label for="#Yes_2">Yes</label>
                                                            </div>
                                                            <br>
                                                            <div class="form-check form-check-inline  col-form-label">
                                                                <input class="form-check-input" type="radio" name="received_hiv_results" id="#No_2" value="No">
                                                                <label for="#No_2">No</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>U2</td>
                                                <td>OTHER CONDITIONS (USE KEY PROVIDED)</td>
                                                <td>
                                                    <div class="col-sm-8">
                                                        <div class="form-group">
                                                            <div class="form-check form-check-inline  col-form-label">
                                                                <input class="form-check-input" type="radio" name="other_conditions" id="#Hypertension" value="Hypertension">
                                                                <label for="#Hypertension">Hypertension</label>
                                                            </div>
                                                            <br>
                                                            <div class="form-check form-check-inline  col-form-label">
                                                                <input class="form-check-input" type="radio" name="other_conditions" id="#Diabetes" value="Diabetes">
                                                                <label for="#Diabetes">Diabetes</label>
                                                            </div>
                                                            <br>
                                                            <div class="form-check form-check-inline  col-form-label">
                                                                <input class="form-check-input" type="radio" name="other_conditions" id="#Epilepsy" value="Epilepsy">
                                                                <label for="#Epilepsy">Epilepsy</label>
                                                            </div>
                                                            <br>
                                                            <div class="form-check form-check-inline  col-form-label">
                                                                <input class="form-check-input" type="radio" name="other_conditions" id="#Malaria_in_pregnancy" value="Malaria in pregnancy">
                                                                <label for="#Malaria_in_pregnancy">Malaria in pregnancy</label>
                                                            </div>
                                                            <br>
                                                            <div class="form-check form-check-inline  col-form-label">
                                                                <input class="form-check-input" type="radio" name="other_conditions" id="#std" value="Sexually Transmitted Infections/Reproductive Tract Infections">
                                                                <label for="#std">Sexually Transmitted Infections/Reproductive Tract Infections</label>
                                                            </div>
                                                            <br>
                                                            <div class="form-check form-check-inline  col-form-label">
                                                                <input class="form-check-input" type="radio" name="other_conditions" id="#Others_1" value="Others">
                                                                <label for="#Others_1">Others</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>v</td>
                                                <td>COTRIMOXAZOLE GIVEN?</td>
                                                <td>
                                                    <div class="col-sm-8">
                                                        <div class="form-group">
                                                            <div class="form-check form-check-inline  col-form-label">
                                                                <input class="form-check-input" type="radio" name="cotrixamole_given" id="#Yes_3" value="Yes">
                                                                <label for="#Yes_3">Yes</label>
                                                            </div>
                                                            <br>
                                                            <div class="form-check form-check-inline  col-form-label">
                                                                <input class="form-check-input" type="radio" name="cotrixamole_given" id="#No_3" value="No">
                                                                <label for="#No_3">No</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>W</td>
                                                <td>DOSE OF TT GIVEN</td>
                                                <td>
                                                    <div class="col-sm-8">
                                                        <div class="form-group">
                                                            <div class="form-check form-check-inline  col-form-label">
                                                                <input class="form-check-input" type="radio" name="dose_of_tt_given" id="#TT1" value="TT1">
                                                                <label for="#TT1">TT1</label>
                                                            </div>
                                                            <br>
                                                            <div class="form-check form-check-inline  col-form-label">
                                                                <input class="form-check-input" type="radio" name="dose_of_tt_given" id="#TT2" value="TT2">
                                                                <label for="#TT2">TT2</label>
                                                            </div>
                                                            <br>
                                                            <div class="form-check form-check-inline  col-form-label">
                                                                <input class="form-check-input" type="radio" name="dose_of_tt_given" id="#TT3" value="TT3">
                                                                <label for="#TT3">TT3</label>
                                                            </div>
                                                            <br>
                                                            <div class="form-check form-check-inline  col-form-label">
                                                                <input class="form-check-input" type="radio" name="dose_of_tt_given" id="#TT4" value="TT4">
                                                                <label for="#TT4">TT4</label>
                                                            </div>
                                                            <br>
                                                            <div class="form-check form-check-inline  col-form-label">
                                                                <input class="form-check-input" type="radio" name="dose_of_tt_given" id="#TT5" value="TT5">
                                                                <label for="#TT5">TT5</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>X</td>
                                                <td>GIVEN IRON SUPPLEMENTATION?</td>
                                                <td>
                                                    <div class="col-sm-8">
                                                        <div class="form-group">
                                                            <div class="form-check form-check-inline  col-form-label">
                                                                <input class="form-check-input" type="radio" name="given_iron_supplementation" id="#Yes_4" value="Yes">
                                                                <label for="#Yes_4">Yes</label>
                                                            </div>
                                                            <br>
                                                            <div class="form-check form-check-inline  col-form-label">
                                                                <input class="form-check-input" type="radio" name="given_iron_supplementation" id="#No_4" value="No">
                                                                <label for="#No_4">No</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Y</td>
                                                <td>GIVEN FOLLIC</td>
                                                <td>
                                                    <div class="col-sm-8">
                                                        <div class="form-group">
                                                            <div class="form-check form-check-inline  col-form-label">
                                                                <input class="form-check-input" type="radio" name="given_folic" id="#Yes_5" value="Yes">
                                                                <label for="#Yes_5">Yes</label>
                                                            </div>
                                                            <br>
                                                            <div class="form-check form-check-inline  col-form-label">
                                                                <input class="form-check-input" type="radio" name="given_folic" id="#No_5" value="No">
                                                                <label for="#No_5">No</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Z</td>
                                                <td>GIVEN IPT1?</td>
                                                <td>
                                                    <div class="col-sm-8">
                                                        <div class="form-group">
                                                            <div class="form-check form-check-inline  col-form-label">
                                                                <input class="form-check-input" type="radio" name="given_ipt1" id="#Yes_6" value="Yes">
                                                                <label for="#Yes_6">Yes</label>
                                                            </div>
                                                            <br>
                                                            <div class="form-check form-check-inline  col-form-label">
                                                                <input class="form-check-input" type="radio" name="given_ipt1" id="#No_6" value="No">
                                                                <label for="#No_6">No</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>AA</td>
                                                <td>GIVEN IPT2?</td>
                                                <td>
                                                    <div class="col-sm-8">
                                                        <div class="form-group">
                                                            <div class="form-check form-check-inline  col-form-label">
                                                                <input class="form-check-input" type="radio" name="given_ipt2" id="#Yes_7" value="Yes">
                                                                <label for="#Yes_7">Yes</label>
                                                            </div>
                                                            <br>
                                                            <div class="form-check form-check-inline  col-form-label">
                                                                <input class="form-check-input" type="radio" name="given_ipt2" id="#No_7" value="No">
                                                                <label for="#No_7">No</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>AB</td>
                                                <td>RECEIVED ARV PROPHYLAXIS MOTHER?</td>
                                                <td>
                                                    <div class="col-sm-8">
                                                        <div class="form-group">
                                                            <div class="form-check form-check-inline  col-form-label">
                                                                <input class="form-check-input" type="radio" name="received_arv_prophylaxis_mother" id="#Yes_8" value="Yes">
                                                                <label for="#Yes_8">Yes</label>
                                                            </div>
                                                            <br>
                                                            <div class="form-check form-check-inline  col-form-label">
                                                                <input class="form-check-input" type="radio" name="received_arv_prophylaxis_mother" id="#No_8" value="No">
                                                                <label for="#No_8">No</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>AC</td>
                                                <td>RECEIVED ARV PROPHYLAXIS BABY?</td>
                                                <td>
                                                    <div class="col-sm-8">
                                                        <div class="form-group">
                                                            <div class="form-check form-check-inline  col-form-label">
                                                                <input class="form-check-input" type="radio" name="received_arv_prophylaxis_baby" id="#Yes_9" value="Yes">
                                                                <label for="#Yes_9">Yes</label>
                                                            </div>
                                                            <br>
                                                            <div class="form-check form-check-inline  col-form-label">
                                                                <input class="form-check-input" type="radio" name="received_arv_prophylaxis_baby" id="#No_9" value="No">
                                                                <label for="#No_9">No</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>AD</td>
                                                <td>RECEIVED ITN?(INDICATE THE VISIT NO)</td>
                                                <td><input type="number" name="received_itn" class="form-control" placeholder=""></td>
                                            </tr>
                                            <tr>
                                                <td>AE</td>
                                                <td>COUNSELLED ON?</td>
                                                <td>
                                                    <div class="col-sm-8">
                                                        <div class="form-group">
                                                            <div class="form-check form-check-inline  col-form-label">
                                                                <input class="form-check-input" type="radio" name="counselled_on" id="#Birth_Plan" value="Birth Plan">
                                                                <label for="#Birth_Plan">Birth Plan</label>
                                                            </div>
                                                            <br>
                                                            <div class="form-check form-check-inline  col-form-label">
                                                                <input class="form-check-input" type="radio" name="counselled_on" id="#Danger_Signs" value="Danger Signs">
                                                                <label for="#Danger_Signs">Danger Signs</label>
                                                            </div>
                                                            <br>
                                                            <div class="form-check form-check-inline  col-form-label">
                                                                <input class="form-check-input" type="radio" name="counselled_on" id="#FP" value="FP">
                                                                <label for="#FP">FP</label>
                                                            </div>
                                                            <br>
                                                            <div class="form-check form-check-inline  col-form-label">
                                                                <input class="form-check-input" type="radio" name="counselled_on" id="#HIV" value="HIV">
                                                                <label for="#HIV">HIV</label>
                                                            </div>
                                                            <br>
                                                            <div class="form-check form-check-inline  col-form-label">
                                                                <input class="form-check-input" type="radio" name="counselled_on" id="#Supplemental_Feeding" value="Supplemental Feeding">
                                                                <label for="#Supplemental_Feeding">Supplemental Feeding</label>
                                                            </div>
                                                            <br>
                                                            <div class="form-check form-check-inline  col-form-label">
                                                                <input class="form-check-input" type="radio" name="counselled_on" id="#Breast_Care" value="Breast Care">
                                                                <label for="#Breast_Care">Breast Care</label>
                                                            </div>
                                                            <br>
                                                            <div class="form-check form-check-inline  col-form-label">
                                                                <input class="form-check-input" type="radio" name="counselled_on" id="#Infant_Feeding" value="Infant Feeding">
                                                                <label for="#Infant_Feeding">Infant Feeding</label>
                                                            </div>
                                                            <br>
                                                            <div class="form-check form-check-inline  col-form-label">
                                                                <input class="form-check-input" type="radio" name="counselled_on" id="#ITN_Use" value="ITN Use">
                                                                <label for="#ITN_Use">ITN Use</label>
                                                            </div>
                                                            <br>
                                                            <div class="form-check form-check-inline  col-form-label">
                                                                <input class="form-check-input" type="radio" name="counselled_on" id="#STIs/RTIs" value="STIs/RTIs">
                                                                <label for="#STIs/RTIs">STIs/RTIs</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>AF</td>
                                                <td>ADDITIONAL TREATMENT GIVEN?</td>
                                                <td>
                                                    <div class="col-sm-8">
                                                        <div class="form-group">
                                                            <div class="form-check form-check-inline  col-form-label">
                                                                <input class="form-check-input" type="radio" name="additional_treatment" id="#Hypertension_1" value="Hypertension">
                                                                <label for="#Hypertension_1">Hypertension</label>
                                                            </div>
                                                            <br>
                                                            <div class="form-check form-check-inline  col-form-label">
                                                                <input class="form-check-input" type="radio" name="additional_treatment" id="#Diabetes_1" value="Diabetes">
                                                                <label for="#Diabetes_1">Diabetes</label>
                                                            </div>
                                                            <br>
                                                            <div class="form-check form-check-inline  col-form-label">
                                                                <input class="form-check-input" type="radio" name="additional_treatment" id="#Epilepsy_1" value="Epilepsy">
                                                                <label for="#Epilepsy_1">Epilepsy</label>
                                                            </div>
                                                            <br>
                                                            <div class="form-check form-check-inline  col-form-label">
                                                                <input class="form-check-input" type="radio" name="additional_treatment" id="#Malaria_in_pregnancy_1" value="Malaria in pregnancy">
                                                                <label for="#Malaria_in_pregnancy_1">Malaria in pregnancy</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>AG</td>
                                                <td>PARTNERS?</td>
                                                <td>
                                                    <div class="col-sm-8">
                                                        <div class="form-group">
                                                            <div class="form-check form-check-inline  col-form-label">
                                                                <input class="form-check-input" type="radio" name="partners" id="#Counselled" value="Counselled">
                                                                <label for="#Counselled">Counselled</label>
                                                            </div>
                                                            <br>
                                                            <div class="form-check form-check-inline  col-form-label">
                                                                <input class="form-check-input" type="radio" name="partners" id="#Tested" value="Tested">
                                                                <label for="#Tested">Tested</label>
                                                            </div>
                                                            <br>
                                                            <div class="form-check form-check-inline  col-form-label">
                                                                <input class="form-check-input" type="radio" name="partners" id="#Referred_for_HIV" value="Referred for HIV">
                                                                <label for="#Referred_for_HIV">Referred for HIV</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>AH</td>
                                                <td>PARTNERS STATUS?</td>
                                                <td>
                                                    <div class="col-sm-8">
                                                        <div class="form-group">
                                                            <div class="form-check form-check-inline  col-form-label">
                                                                <input class="form-check-input" type="radio" name="partners_status" id="#Positive_1" value="Positive">
                                                                <label for="#Positive_1">Positive</label>
                                                            </div>
                                                            <br>
                                                            <div class="form-check form-check-inline  col-form-label">
                                                                <input class="form-check-input" type="radio" name="partners_status" id="#Negative_1" value="Negative">
                                                                <label for="#Negative_1">Negative</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>AI</td>
                                                <td>HIV+ PARTNERS REFERRED FOR FOLLOW-UP?</td>
                                                <td>
                                                    <div class="col-sm-8">
                                                        <div class="form-group">
                                                            <div class="form-check form-check-inline  col-form-label">
                                                                <input class="form-check-input" type="radio" name="hiv_positive_partners_referred_for_follow_up" id="#Yes_10" value="Yes">
                                                                <label for="#Yes_10">Yes</label>
                                                            </div>
                                                            <br>
                                                            <div class="form-check form-check-inline  col-form-label">
                                                                <input class="form-check-input" type="radio" name="hiv_positive_partners_referred_for_follow_up" id="#No_10" value="No">
                                                                <label for="#No_10">No</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>AJ</td>
                                                <td>REMARKS</td>
                                                <td><textarea type="text" name="remarks" class="form-control" placeholder=""></textarea></td>
                                            </tr>
                                            </tbody>
                                        </table>
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
        </div>
    </div>

@endsection