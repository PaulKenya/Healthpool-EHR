@extends('layouts.master')

@section('content')
    @include('departments.clinical_services.inpatient.patient_file.patient_bio_information')
    <!-- Title & Breadcrumbs-->
    <div class="row page-titles">
        <div class="col-md-12 align-self-center">
            <h4 class="theme-cl">Anaesthetic Record</h4>
        </div>
    </div>
    <!-- Title & Breadcrumbs-->
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Anaesthetic Record</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable" class="table table-striped">
                            <thead>
                            <tr>
                                <th>op_ip_number</th>
                                <th>ward_clinic</th>
                                <th>date</th>
                                <th>operation</th>
                                <th>anaesthetists</th>
                                <th>surgeons</th>
                                <th>type_of_premedication</th>
                                <th>time_given</th>
                                <th>effect</th>
                                <th>weight</th>
                                <th>height</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                            @if(isset($anaesthetic_records))
                                @foreach($anaesthetic_records as $anaesthetic_records_result)
                                    <tr>
                                        <td>{{$anaesthetic_records_result->op_ip_number}}</td>
                                        <td>{{$anaesthetic_records_result->ward_clinic}}</td>
                                        <td>{{$anaesthetic_records_result->date}}</td>
                                        <td>{{$anaesthetic_records_result->operation}}</td>
                                        <td>{{$anaesthetic_records_result->anaesthetists}}</td>
                                        <td>{{$anaesthetic_records_result->surgeons}}</td>
                                        <td>{{$anaesthetic_records_result->type_of_premedication}}</td>
                                        <td>{{$anaesthetic_records_result->time_given}}</td>
                                        <td>{{$anaesthetic_records_result->effect}}</td>
                                        <td>{{$anaesthetic_records_result->weight}}</td>
                                        <td>{{$anaesthetic_records_result->height}}</td>
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
                                <h4 class="modal-title">Add anaesthetic record</h4>
                            </div>
                            <div class="modal-body">

                                <div class="col-md-12">
                                    <div class="card">

                                        <div class="container-fluid">
                                            <form action="{{ route('anaesthetic_records_post', ['patient_id'=>$patient_id]) }}" enctype="multipart/form-data" method="post">
                                                {!! csrf_field() !!}
                                                <h4>Anaesthetic Record</h4>
                                                <div class="form-row">
                                                    <div class="form-group col">
                                                        <label for="op_ip_number">OP/IP Number</label>
                                                        <input type="number" name="op_ip_number" id="op_ip_number" class="form-control" placeholder="" >
                                                    </div>
                                                    <div class="form-group col">
                                                        <label for="ward_clinic">Ward/Clinic</label>
                                                        <input type="text" name="ward_clinic" id="ward_clinic" class="form-control" placeholder="" >
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label for="date">Date</label>
                                                        <input type="date"  id="myDate" name="date" id="date" class="form-control" placeholder="" readonly>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="operation">Operation</label>
                                                        <input type="text"
                                                               name="operation" id="operation" class="form-control" placeholder="" >
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col">
                                                        <label for="anaesthetists">Anaesthetists</label>
                                                        <select class="form-control" name="anaesthetists" id="anaesthetists">
                                                            <option>Anaesthetist A</option>
                                                            <option>Anaesthetist B</option>
                                                            <option>Anaesthetist C</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col">
                                                        <label for="surgeons">Surgeons</label>
                                                        <select class="form-control" name="surgeons" id="surgeons">
                                                            <option>Surgeon A</option>
                                                            <option>Surgeon B</option>
                                                            <option>Surgeon C</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col">
                                                        <label for="type_of_premedication">Type of Pre-medication</label>
                                                        <textarea class="form-control" name="type_of_premedication" id="type_of_premedication" rows="2"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col">
                                                        <label for="time_given">Time Given</label>
                                                        <input type="time"
                                                               name="time_given" id="time_given" class="form-control" placeholder="" >
                                                    </div>
                                                    <div class="form-group col">
                                                        <label for="effect">Effect</label>
                                                        <textarea class="form-control" name="effect" id="effect" rows="1"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col">
                                                        <label for="weight">Weight</label>
                                                        <input type="number"
                                                               name="weight" id="weight" class="form-control" placeholder="" >
                                                    </div>
                                                    <div class="form-group col">
                                                        <label for="height">Height</label>
                                                        <input type="number"
                                                               name="height" id="height" class="form-control" placeholder="" >
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
