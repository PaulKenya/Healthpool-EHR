@extends('layouts.master')

@section('content')
    @include('departments.clinical_services.inpatient.patient_file.patient_bio_information')
    <!-- Title & Breadcrumbs-->
<div class="row page-titles">
    <div class="col-md-12 align-self-center">
        <h4 class="theme-cl">BLOOD DONATION REQUEST FORM</h4>
    </div>
</div>
<!-- Title & Breadcrumbs-->

<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>VIEW BLOOD DONATION REQUEST FORM</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="datatable" class="table table-striped table-bordered table-responsive">
                        <thead>
                        <tr>
                            <th>PRINT VIEW</th>
                            <th>WARD</th>
                            <th>NAME OF REQUESTING OFFICER</th>
                            <th>DATE</th>
                            <th>COMMENTS ON BTU</th>

                        </tr>
                        </thead>
                        <tbody>
                        @if(isset($blood_donation_request_form_results))

                            @php
                                $i=0
                            @endphp

                            @foreach($blood_donation_request_form_results as $blood_donation_request_form_result)

                                @php
                                    $i++;
                                @endphp

                                <tr>

                                    <td>
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{$i}}">PRINT VIEW</button>
                                    </td>

                                    <td>{{ $blood_donation_request_form_result->ward}}</td>
                                    <td>{{ $blood_donation_request_form_result->requesting}}</td>
                                    <td>{{ $blood_donation_request_form_result->date}}</td>
                                    <td>{{ $blood_donation_request_form_result->comments}}</td>
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
                                                    <h2>VIEW BLOOD DONATION REQUEST FORM</h2>
                                                    <p><b>PATIENT NAME : </b>{{$patient->name}}</p>
                                                    <p><b>WARD : </b>{{$blood_donation_request_form_result->ward}}</p>
                                                    <p><b>NAME OF REQUESTING OFFICER : </b>{{$blood_donation_request_form_result->requesting}}</p>
                                                    <p><b>DATE</th> : </b>{{$blood_donation_request_form_result->date}}</p>
                                                    <p><b>COMMENTS ON BTU : </b>{{$blood_donation_request_form_result->comments}}</p>
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
                                    <div class="container">
                                        <form action="{{route('blood_donation_request_form_post',['patient_id'=>$patient_id])}}" method="post" >{!! csrf_field() !!}
                                            <div class="">
                                                {{--<div class="offset-md-6">--}}
                                                    {{--<div class="row">--}}
                                                        {{--<div class="col-md-3">--}}
                                                            {{--<p>PATIENTS NAME:</p>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="col-md-9">--}}
                                                            {{--<input type=" text" name="bio_patient_name" class="form-control" placeholder="click to enter patients name"></td>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                    {{--<div class="row">--}}
                                                        {{--<div class="col-md-3">--}}
                                                            {{--<p>IP NUMBER:</p>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="col-md-9">--}}
                                                            {{--<input type=" text" name="bio_ip_no" class="form-control" placeholder="click to enter IP number"></td>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                    {{--<div class="row">--}}
                                                        {{--<div class="col-md-3">--}}
                                                            {{--<p>DATE:</p>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="col-md-9">--}}
                                                            {{--<input type="date" name="bio_date" class="form-control" placeholder="click to enter date">--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                    {{--<div class="row">--}}
                                                        {{--<div class="col-md-3">--}}
                                                            {{--<p>AGE:</p>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="col-md-9">--}}
                                                            {{--<input type="number" name="bio_age" class="form-control" placeholder="click to enter age">--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                    {{--<div class="row">--}}
                                                        {{--<div class="col-md-3">--}}
                                                            {{--<p>WARD:</p>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="col-md-9">--}}
                                                            {{--<input type="text" name="bio_ward" class="form-control" placeholder="click to enter ward number">--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                    {{--<div class="row">--}}
                                                        {{--<div class="col-md-3">--}}
                                                            {{--<p>BED NUMBER:</p>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="col-md-9">--}}
                                                            {{--<input type="text" name="bio_bed_number" class="form-control" placeholder="click to enter bed number">--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                    {{--<div class="row">--}}
                                                        {{--<div class="col-md-3">--}}
                                                            {{--<p>SEX:</p>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="col-md-9">--}}
                                                            {{--<select class="form-control" name="bio_sex" id="sex">--}}
                                                                {{--<option value="male">--Choose sex--</option>--}}
                                                                {{--<option value="male">Male</option>--}}
                                                                {{--<option value="female">Female</option>--}}
                                                            {{--</select>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            </div>
                                            <div class="col-m-3 offset-md-2">
                                                <H3 class="mt-20">
                                                    BLOOD DONATION REQUEST FORM
                                                </H3>
                                            </div>
                                            <br>
                                            <div class="align-self-center text-center">
                                                <p id="demo"></p>
                                                <script>
                                                    var d = new Date();
                                                    document.getElementById("demo").innerHTML = d;
                                                </script>
                                            </div>
                                            <div class="offset-md-6">
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
                                            </div>
                                            <div class="col-md-10">
                                                WARD:<input type="text" name="ward" class="form-control" placeholder=""><br>
                                                NAME OF REQUESTING OFFICER:<input type="text" name="requesting" class="form-control" placeholder="">
                                                DATE:<input type="date" id="myDate" name="date" class="form-control" placeholder="" readonly>
                                                COMMENTS FROM BTU:<input type="text" name="comments" class="form-control" placeholder="">
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </form>
                                        <!--form here--->
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
