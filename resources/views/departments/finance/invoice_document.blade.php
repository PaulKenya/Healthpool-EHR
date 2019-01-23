@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="detail-wrapper padd-top-30 padd-bot-30">

                    <div class="row text-center">
                        <div class="col-md-12">
                            <a href="javascript:window.print()" class="btn theme-btn">Print this invoice</a>
                        </div>
                    </div>

                    <div class="row mrg-0">
                        <div class="col-md-6">
                            <div id="logo"><img src="{{asset('/logo.png')}}" class="img-responsive" alt="" style="width: 210px;"></div>
                        </div>

                        <div class="col-md-6">
                            <p id="invoice-info">
                                <strong>Order:</strong> #hp0001 <br>
                                <strong>Issued:</strong> {{date("Y-m-d")}} <br>
                                Due 7 days from date of issue
                            </p>
                        </div>

                    </div>

                    <div class="row  mrg-0 detail-invoice">

                        <div class="col-md-12">
                            <h2>INVOICE</h2>
                        </div>

                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-lg-7 col-md-7 col-sm-7">
                                    @php
                                        $institution_id=Illuminate\Support\Facades\Auth::user()->institution_id;
                                        $institution_details=\App\Institution::find($institution_id);
                                    @endphp
                                    <h4>Hospital: </h4>
                                    @if(isset($institution_details))
                                        <h5>{{$institution_details->name}}</h5>
                                        <p>
                                            {{$institution_details->email}}<br>

                                            {{$institution_details->telephone}}<br>

                                            {{$institution_details->address}},{{$institution_details->street_address}},{{$institution_details->city}},{{$institution_details->sub_county}},{{$institution_details->county}},
                                            <br> Kenya
                                        </p>
                                    @endif

                                </div>
                                <div class="col-lg-5 col-md-5 col-sm-5">
                                    @php
                                        $patient_details=\App\administration_patient_information::find($patient_id);
                                    @endphp
                                    <h4>Patient Details :</h4>
                                    @if(isset($institution_details))
                                        <h5>{{$patient_details->title}}. {{$patient_details->name}}</h5>
                                        <p>
                                            {{$patient_details->sex}}<br>

                                            {{$patient_details->phone_number}}<br>

                                            {{$patient_details->village}}, {{$patient_details->division}}, {{$patient_details->sub_location}}, {{$patient_details->location}}
                                            <br> Kenya
                                        </p>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <hr>

                        <div class="col-12 col-md-12">
                            <strong>INVOICE DESCRIPTION &amp; DETAILS :</strong>
                        </div>
                        <hr>
                        @php
                            $institution_id=Illuminate\Support\Facades\Auth::user()->institution_id;
                            $links_for_dept=\App\send_department_link::all()->where('is_paid',0)->where('administration_patient_informations_id',$patient_id)->where('institution_id',$institution_id);
                            $cost=0;
                        @endphp
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="invoice-table">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th>Department</th>
                                            <th>Price</th>
                                            <th>Description</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if(isset($links_for_dept))
                                            @foreach($links_for_dept as $link)
                                                @php
                                                    $patient_id=$link->administration_patient_informations_id;
                                                    $for_patient=\App\administration_patient_information::find($patient_id);
                                                    $name=$link->administration_patient_informations_id;
                                                    $actual_patient_id=$link->administration_patient_informations_id;
                                                    $cost=$cost+$link->price;
                                                @endphp
                                                <tr>
                                                    <td>{{App\department::find($link->department_id)->department_name}}</td>
                                                    <td>{{$link->price}}</td>
                                                    <td>{{$link->description}}</td>
                                                </tr>
                                            @endforeach
                                        @endif
                                        </tbody>
                                    </table>
                                </div>
                                <hr>
                                <div>
                                    <h5>Total : KSHS {{$cost}} </h5>
                                </div>
                                <hr>
                                <div>
                                    @php
                                        $after_tax=0.16*$cost;
                                    @endphp
                                    <h5>Taxes : KSHS {{$after_tax}} ( 16 % on Total Bill ) </h5>
                                </div>
                                <hr>
                                <div>
                                    <h4>Bill Amount : KSHS {{$after_tax+$cost}} </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection