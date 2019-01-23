@extends('layouts.master')

@section('content')
    @include('departments.clinical_services.inpatient.patient_file.patient_bio_information')
<div class="card"> 
    <div class="card-header">
        <h4>MOH 209</h4>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table id="datatable" class="table table-bordered">
                <thead>
                <tr>
                    <th>PRINT VIEW</th>
                    <th>DATE</th>
                    <th>OPD NO</th>
                    <th>X_RAY NO</th>
                    <th>FULL NAMES</th>
                    <th>AGE IN YEARS</th>
                    <th>SEX</th>
                    <th>SUB LOCATION</th>
                    <th>VILLAGE ESTATE</th>
                    <th>ADDRESS</th>
                    <th>X-RAY EXAMINATION TYPE</th>
                    <th>REFERRAL</th>
                    <th>AMOUNT CHARGED</th>
                    <th>REMARKS</th>
                </tr>
                </thead>
                <tbody>
                @if(isset($moh209_results))

                    @php
                        $i=0
                    @endphp

                    @foreach($moh209_results as $moh209_result)

                        @php
                            $i++;
                        @endphp

                        <tr>

                            <td>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{$i}}">PRINT VIEW</button>
                            </td>

                            <td>{{ $moh209_result->date}}</td>
                            <td>{{ $moh209_result->opd_no}}</td>
                            <td>{{ $moh209_result->xray_no}}</td>
                            <td>{{ $moh209_result->full_names}}</td>
                            <td>{{ $moh209_result->age_in_years}}</td>
                            <td>{{ $moh209_result->sex}}</td>
                            <td>{{ $moh209_result->sub_location}}</td>
                            <td>{{ $moh209_result->village_estate}}</td>
                            <td>{{ $moh209_result->address}}</td>
                            <td>{{ $moh209_result->xray_examination_type}}</td>
                            <td>{{ $moh209_result->referral}}</td>
                            <td>{{ $moh209_result->amount_charged}}</td>
                            <td>{{ $moh209_result->remarks}}</td>
                        </tr>

                        <!-- Triage Modal -->
                        <div class="modal fade" id="exampleModal{{$i}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div id="printableArea{{$i}}">
                                            <h2>VIEW MOH 209 FORM</h2>
                                            <p><b>PATIENT NAME : </b>{{$patient->name}}</p>
                                            <p><b>DATE : </b>{{$moh209_result->date}}</p>
                                            <p><b>OPD NO : </b>{{$moh209_result->opd_no}}</p>
                                            <p><b>X_RAY NO : </b>{{$moh209_result->xray_no}}</p>
                                            <p><b>FULL NAMES : </b>{{$moh209_result->full_names}}</p>
                                            <p><b>AGE IN YEARS : </b>{{$moh209_result->age_in_years}}</p>
                                            <p><b>SEX : </b>{{$moh209_result->sex}}</p>
                                            <p><b>SUB LOCATION : </b>{{$moh209_result->sub_location}}</p>
                                            <p><b>VILLAGE ESTATE : </b>{{$moh209_result->village_estate}}</p>
                                            <p><b>ADDRESS : </b>{{$moh209_result->address}}</p>
                                            <p><b>X-RAY EXAMINATION TYPE : </b>{{$moh209_result->xray_examination_type}}</p>
                                            <p><b>REFERRAL</th> : </b>{{$moh209_result->referral}}</p>
                                            <p><b>AMOUNT CHARGED : </b>{{$moh209_result->amount_charged}}</p>
                                            <p><b>REMARKS : </b>{{$moh209_result->remarks}}</p>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <input type="button" class="btn btn-success" onclick="printDiv('printableArea{{$i}}')" value="print" />
                                    </div>
                                </div>
                            </div>
                        </div>

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

            <!— Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">QUIT</h4>
                </div>
                <div class="modal-body">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="row page-titles">
                                <div class="col-md-12 align-self-center text-center">
                                    <h4 class="theme-cl">MOH 209</h4>
                                </div>
                            </div>
                            <br>
                            <div class="align-self-center text-center">
                                <p id="demo"></p>
                                <script>
                                    var d = new Date();
                                    document.getElementById("demo").innerHTML = d;
                                </script>
                            </div>
                            <div class="container-fluid">
                                <p>MOH 209 RADIOLOGY REGISTER IS TO BE USED IN ALL X-RAY UNITS.STEP BY STEP FILLING IN THE REGISTER GUIDELINES FOR THE HEALTH PROVIDERS</p>
                                <form action="{{route('moh209_post',['patient_id'=>$patient_id])}}" method="post" >{!! csrf_field() !!}
                                    <br>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <p></p>
                                        </div>
                                        <div class="col-md-9">
                                            <input name="administration_patient_informations_id" type="text" class="form-control d-none" value="{{$patient_id}}">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <p></p>
                                        </div>
                                        <div class="col-md-9">
                                            <input name="institution_id" type="text" class="form-control d-none" value="{{ Auth::user()->institution->id }}">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <p></p>
                                        </div>
                                        <div class="col-md-9">
                                            <input name="user_id" type="text" value="{{ Auth::user()->id }}" class="form-control d-none">
                                        </div>
                                    </div>
                                    <br>
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
                                                <td>OPD/IN-PT NO</td>
                                                <td><input type="number" name="opd_no" class="form-control" placeholder=""></td>
                                            </tr>
                                            <tr>
                                                <td>C</td>
                                                <td>X-RAY NUMBER</td>
                                                <td><input type="number" name="xray_no" class="form-control" placeholder=""></td>
                                            </tr>
                                            <tr>
                                                <td>D</td>
                                                <td>FULL NAMES</td>
                                                <td><input type="text" name="full_names" class="form-control" placeholder=""></td>
                                            </tr>
                                            <tr>
                                                <td>E</td>
                                                <td>AGE IN YEAR</td>
                                                <td><input type="number" name="age_in_years" class="form-control" placeholder=""></td>
                                            </tr>
                                            <tr>
                                                <td>F</td>
                                                <td>SEX</td>
                                                <td><input type="text" name="sex" class="form-control" placeholder=""></td>
                                            </tr>
                                            <tr>
                                                <td>G</td>
                                                <td>SUB LOCATION</td>
                                                <td><input type="text" name="sub_location" class="form-control" placeholder=""></td>
                                            </tr>
                                            <tr>
                                                <td>H</td>
                                                <td>VILLAGE/ESTATE</td>
                                                <td><input type="text" name="village_estate" class="form-control" placeholder=""></td>
                                            </tr>
                                            <tr>
                                                <td>I</td>
                                                <td>ADDRESS</td>
                                                <td><input type="text" name="address" class="form-control" placeholder=""></td>
                                            </tr>
                                            <tr>
                                                <td>J</td>
                                                <td>TYPE OF X-RAY EXAMINATION</td>
                                                <td><input type="text" name="xray_examination_type" class="form-control" placeholder=""></td>
                                            </tr>
                                            <tr>
                                                <td>K</td>
                                                <td>REFERRAL(Y/N)</td>
                                                <td><input type="text" name="referral" class="form-control" placeholder=""></td>
                                            </tr>
                                            <tr>
                                                <td>L</td>
                                                <td>AMOUNT CHARGED</td>
                                                <td><input type="number" name="amount_charged" class="form-control" placeholder=""></td>
                                            </tr>
                                            <tr>
                                                <td>M</td>
                                                <td>REMARKS</td>
                                                <td><input type="text" name="remarks" class="form-control" placeholder=""></td>
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
