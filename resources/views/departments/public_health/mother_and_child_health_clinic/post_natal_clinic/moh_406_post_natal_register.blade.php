
@extends('layouts.master')

@section('content')

    <div class="card">
        <div class="card-header">
            <h4>BTU</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="datatable" class="table table-bordered">
                    <thead>
                    <tr>
                        <th>DATE</th>
                        <th>PNC No</th>
                        <th>IN-PATIENT NO</th>
                        <th>FULL NAMES</th>
                        <th>AGE</th>
                        <th>LEVEL OF EDUCATION</th>
                        <th>VILLAGE/ESTATE</th>
                        <th>DATE OF DELIVERY</th>
                        <th>PLACE OF DELIVERY</th>
                        <th>STATE OF BABY</th>
                        <th>TEMPERATURE</th>
                        <th>PULSE</th>
                        <th>BP</th>
                        <th>PALOR</th>
                        <th>BREAST EXAM</th>
                        <th>UTERUS</th>
                        <th>PPH</th>
                        <th>C/S SITE</th>
                        <th>LOCHIA</th>
                        <th>EPISOTOMY</th>
                        <th>HIV STATUS</th>
                        <th>DIAGNOSIS</th>
                        <th>MOTHERS</th>
                        <th>COUNSELLED ON NEONATAL CARE</th>
                        <th>COUNSELLED ON FP</th>
                        <th>COUNSELLED ARVS</th>
                        <th>CSP</th>
                        <th>SCREENED FOR CANCER</th>
                        <th>OTHER CONDITIONS</th>
                        <th>REMARKS</th>
                        <th>TOTAL ATTENDANCES</th>
                        <th>TOTAL NUMBER COUNSELLED</th>
                        <th>TOTAL NO OF ARVS</th>
                        <th>TOTAL HIV +VE</th>
                        <th>MOTHERS</th>
                        <th>INFANTS</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(isset($moh406_results))
                        @foreach($moh406_results as $moh406_result)
                            <tr>
                                <td>{{ $moh406_result->date }}</td>
                                <td>{{ $moh406_result->pnc_no }}</td>
                                <td>{{ $moh406_result->in_patient_no }}</td>
                                <td>{{ $moh406_result->full_names }}</td>
                                <td>{{ $moh406_result->age }}</td>
                                <td>{{ $moh406_result->level_of_education }}</td>
                                <td>{{ $moh406_result->sub_location }}</td>
                                <td>{{ $moh406_result->village }}</td>
                                <td>{{ $moh406_result->date_of_delivery }}</td>
                                <td>{{ $moh406_result->state_of_baby }}</td>
                                <td>{{ $moh406_result->temperature }}</td>
                                <td>{{ $moh406_result->pulse }}</td>
                                <td>{{ $moh406_result->bp }}</td>
                                <td>{{ $moh406_result->palor_and_hb }}</td>
                                <td>{{ $moh406_result->breast_exam }}</td>
                                <td>{{ $moh406_result->uterus }}</td>
                                <td>{{ $moh406_result->pph }}</td>
                                <td>{{ $moh406_result->cs_site }}</td>
                                <td>{{ $moh406_result->lochia }}</td>
                                <td>{{ $moh406_result->episiotomy }}</td>
                                <td>{{ $moh406_result->hiv_status }}</td>
                                <td>{{ $moh406_result->diagnosis }}</td>
                                <td>{{ $moh406_result->mothers }}</td>
                                <td>{{ $moh406_result->counselled_on_neonatal_care }}</td>
                                <td>{{ $moh406_result->counselled_on_fp }}</td>
                                <td>{{ $moh406_result->on_arvs }}</td>
                                <td>{{ $moh406_result->cotrimazole }}</td>
                                <td>{{ $moh406_result->screened_for_cancer_of_the_cervix }}</td>
                                <td>{{ $moh406_result->other_conditions }}</td>
                                <td>{{ $moh406_result->remarks }}</td>
                                <td>{{ $moh406_result->total_attendances }}</td>
                                <td>{{ $moh406_result->total_number_counselled }}</td>
                                <td>{{ $moh406_result->total_no_arvs }}</td>
                                <td>{{ $moh406_result->total_hiv_positive }}</td>
                                <td>{{ $moh406_result->infants }}</td>
                                <td>{{ $moh406_result->total_mothers }}</td>
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
                        <h4 class="modal-title">Add record</h4>
                    </div>
                    <div class="modal-body">

                        <div class="col-md-12">
                            <div class="card">
                                <div class="container">
                                    <div class="row page-titles">
                                        <div class="col-md-12 align-self-center text-center">
                                            <h4 class="theme-cl">PASTNATAL REGISTER</h4>
                                        </div>
                                    </div>
                                    <p class="text-center">REPUBLIC OF KENYA - MINISTRY OF HEALTH</p>
                                    <p class="text-center">MOH 406 POSTNATAL REGISTER</p>
                                    <form action="{{route('pnc_moh_406_post_natal_register_post')}}" method="post" >{!! csrf_field() !!}
                                        <div class="container">
                                            <div class="table-responsive">
                                                <table class="table table-bordered">
                                                    <thead>
                                                    <tr>
                                                        <th>Date</th>
                                                        <th>PNC No.</th>
                                                        <th>In-Patient No./Ref.No.</th>
                                                        <th>Full Names</th>
                                                        <th>Age</th>
                                                        <th>Level of Education</th>
                                                        <th>Sub Location</th>
                                                        <th>Village/Estate</th>
                                                        <th>Date of Delivery</th>
                                                        <th>Place of Delivery</th>
                                                        <th>State of Baby</th>
                                                        <th>Temparature</th>
                                                        <th>Pulse</th>
                                                        <th>BP</th>
                                                        <th>Palor:(Mild=1 Moderate=2 Severe=3) and HB</th>
                                                        <th>Breast Exam: (1= Normal; 2=Cracked; 3=Engorged; 4=Mastitis; 5=Abscess)</th>
                                                        <th>Uterus:(1=Normal; 2=-Tender; 3=Sub-involuted)</th>
                                                        <th>PPH Y/N</th>
                                                        <th>C/S site: 1=Normal; 2=Bleeding; 3=Infected</th>
                                                        <th>Lochia: 1=Normal; 2=Foul smelling; 3=Excessive</th>
                                                        <th>Episiotomy/tear: 1=Healed; 2=Repaired; 3=Gaping; 4=Infected</th>
                                                        <th>HIV status: (1=+ve; 2=-ve)</th>
                                                        <th>Diagnosis</th>
                                                        <th>Mothers 1=Counselled; 2=Tested; 3=Recieved results; 4=HIV+; 5=follow-up</th>
                                                        <th>Counselled on Neonatal care (Y/N)</th>
                                                        <th>Counselled on FP (Y/N)</th>
                                                        <th>On ARVs (Y/N)</th>
                                                        <th>Cotrimoxazole/Septrin Prophylaxis (Y/N)</th>
                                                        <th>Screened for Cancer of the Cervis: (Y/N)</th>
                                                        <th>Other Condition</th>
                                                        <th>Remarks</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
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
                                                        <th>L</th>
                                                        <th>M</th>
                                                        <th>N</th>
                                                        <th>O</th>
                                                        <th>P</th>
                                                        <th>Q</th>
                                                        <th>R</th>
                                                        <th>S</th>
                                                        <th>T</th>
                                                        <th>U</th>
                                                        <th>V</th>
                                                        <th>W</th>
                                                        <th>X</th>
                                                        <th>Y</th>
                                                        <th>Z</th>
                                                        <th>AA</th>
                                                        <th>AB</th>
                                                        <th>AC</th>
                                                        <th>AE</th>
                                                        <th>AF</th>
                                                        <th>AG</th>
                                                    </tr>
                                                    <tr>
                                                        <th>
                                                            <input name="date" type="date" class="form-control" id="exampleFormControlInput1">
                                                        </th>
                                                        <th>
                                                            <input name="pnc_no" type="text" class="form-control" id="exampleFormControlInput1">
                                                        </th>
                                                        <th>
                                                            <input name="in_patient_no" type="text" class="form-control" id="exampleFormControlInput1">
                                                        </th>
                                                        <th>
                                                            <input name="full_names" type="text" class="form-control" id="exampleFormControlInput1">
                                                        </th>
                                                        <th>
                                                            <input name="age" type="text" class="form-control" id="exampleFormControlInput1">
                                                        </th>
                                                        <th>
                                                            <input name="level_of_education" type="text" class="form-control" id="exampleFormControlInput1">
                                                        </th>
                                                        <th>
                                                            <input name="sub_location" type="text" class="form-control" id="exampleFormControlInput1">
                                                        </th>
                                                        <th>
                                                            <input name="village" type="text" class="form-control" id="exampleFormControlInput1">
                                                        </th>
                                                        <th>
                                                            <input name="date_of_delivery" type="date" class="form-control" id="exampleFormControlInput1">
                                                        </th>
                                                        <th>
                                                            <input name="place_of_delivery" type="text" class="form-control" id="exampleFormControlInput1">
                                                        </th>
                                                        <th>
                                                            <input name="state_of_baby" type="text" class="form-control" id="exampleFormControlInput1">
                                                        </th>
                                                        <th>
                                                            <input name="temperature" type="text" class="form-control" id="exampleFormControlInput1">
                                                        </th>
                                                        <th>
                                                            <input name="pulse" type="text" class="form-control" id="exampleFormControlInput1">
                                                        </th>
                                                        <th>
                                                            <input name="bp" type="text" class="form-control" id="exampleFormControlInput1">
                                                        </th>
                                                        <th>
                                                            <input name="palor_and_hb" type="text" class="form-control" id="exampleFormControlInput1">
                                                        </th>
                                                        <th>
                                                            <input name="breast_exam" type="text" class="form-control" id="exampleFormControlInput1">
                                                        </th>
                                                        <th>
                                                            <input name="uterus" type="text" class="form-control" id="exampleFormControlInput1">
                                                        </th>
                                                        <th>
                                                            <input name="pph" type="text" class="form-control" id="exampleFormControlInput1">
                                                        </th>
                                                        <th>
                                                            <input name="cs_site" type="text" class="form-control" id="exampleFormControlInput1">
                                                        </th>
                                                        <th>
                                                            <input name="lochia" type="text" class="form-control" id="exampleFormControlInput1">
                                                        </th>
                                                        <th>
                                                            <input name="episiotomy" type="text" class="form-control" id="exampleFormControlInput1">
                                                        </th>
                                                        <th>
                                                            <input name="hiv_status" type="text" class="form-control" id="exampleFormControlInput1">
                                                        </th>
                                                        <th>
                                                            <input name="diagnosis" type="text" class="form-control" id="exampleFormControlInput1">
                                                        </th>
                                                        <th>
                                                            <input name="mothers" type="text" class="form-control" id="exampleFormControlInput1">
                                                        </th>
                                                        <th>
                                                            <input name="counselled_on_neonatal_care" type="text" class="form-control" id="exampleFormControlInput1">
                                                        </th>
                                                        <th>
                                                            <input name="counselled_on_fp" type="text" class="form-control" id="exampleFormControlInput1">
                                                        </th>
                                                        <th>
                                                            <input name="on_arvs" type="text" class="form-control" id="exampleFormControlInput1">
                                                        </th>
                                                        <th>
                                                            <input name="cotrimazole" type="text" class="form-control" id="exampleFormControlInput1">
                                                        </th>
                                                        <th>
                                                            <input name="screened_for_cancer_of_the_cervix" type="text" class="form-control" id="exampleFormControlInput1">
                                                        </th>
                                                        <th>
                                                            <input name="other_conditions" type="text" class="form-control" id="exampleFormControlInput1">
                                                        </th>
                                                        <th>
                                                            <input name="remarks" type="text" class="form-control" id="exampleFormControlInput1">
                                                        </th>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="table-responsive">
                                                <table class="table table-bordered">
                                                    <thead>
                                                    <tr>
                                                        <th colspan="4">Total attendances:
                                                            <div class="col-sm-8">
                                                                <input name="total_attendances" type="Number" class="form-control" id="exampleFormControlInput1" >
                                                            </div>
                                                        </th>
                                                        <th>Total Number Counselled:
                                                            <div class="col-sm-8">
                                                                <input name="total_number_counselled" type="Number" class="form-control" id="exampleFormControlInput1" >
                                                            </div>
                                                        </th>
                                                        <th>Total No. of ARVs:
                                                            <div class="col-sm-8">
                                                                <input name="total_no_arvs" type="Number" class="form-control" id="exampleFormControlInput1" >
                                                            </div>
                                                        </th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        {{--<th>--}}
                                                        {{--<input type="text" class="form-control" id="exampleFormControlInput1">--}}
                                                        {{--</th>--}}
                                                        {{--<th>--}}
                                                        {{--<input type="text" class="form-control" id="exampleFormControlInput1">--}}
                                                        {{--</th>--}}
                                                        {{--<th>--}}
                                                        {{--<input type="text" class="form-control" id="exampleFormControlInput1">--}}
                                                        {{--</th>--}}
                                                        {{--<th>--}}
                                                        {{--<input type="text" class="form-control" id="exampleFormControlInput1">--}}
                                                        {{--</th>--}}
                                                        <th>Total HIV +ve:
                                                            <div class="col-sm-8">
                                                                <input name="total_hiv_positive" type="number" class="form-control" id="exampleFormControlInput1" >
                                                            </div>
                                                        </th>
                                                        <th>Mothers:
                                                            <div class="col-sm-8">
                                                                <input name="total_mothers" type="number" class="form-control" id="exampleFormControlInput1" >
                                                            </div>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        {{--<th>--}}
                                                        {{--<input name= type="text" class="form-control" id="exampleFormControlInput1">--}}
                                                        {{--</th>--}}
                                                        {{--<th>--}}
                                                        {{--<input name= type="text" class="form-control" id="exampleFormControlInput1">--}}
                                                        {{--</th>--}}
                                                        {{--<th>--}}
                                                        {{--<input name= type="text" class="form-control" id="exampleFormControlInput1">--}}
                                                        {{--</th>--}}
                                                        {{--<th>--}}
                                                        {{--<input name= type="text" class="form-control" id="exampleFormControlInput1">--}}
                                                        {{--</th>--}}
                                                        {{--<th></th>--}}
                                                        <th>Infants:
                                                            <div class="col-sm-8">
                                                                <input name="infants" type="Number" class="form-control" id="exampleFormControlInput1" >
                                                            </div>
                                                        </th>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
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