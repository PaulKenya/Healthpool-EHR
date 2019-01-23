@extends('layouts.master')
@section('content')
    <!-- Title &
    Breadcrumbs-->
    @include('departments.clinical_services.inpatient.patient_file.patient_bio_information')
    <div class="row page-titles">
        <div class="col-md-12 align-self-center">
            <h4 class="theme-cl">Orthopedic clinic</h4>
        </div>
    </div>
    <!-- Title & Breadcrumbs-->
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Orthopedic clinic</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable" class="table table-bordered">
                            <thead>
                            <tr>
                                <th>compalints</th>
                                <th>height</th>
                                <th>weight</th>
                                <th>temp</th>
                                <th>pulse_rate</th>
                                <th>resp_rate</th>
                                <th>major_hand_r_or_l</th>
                                <th>blood_pressure_lying</th>
                                <th>standing</th>
                                <th>diagnosis</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(isset($orthopaedic_examination_form_results))
                                @foreach($orthopaedic_examination_form_results as $orthopaedic_examination_form_result)
                                    <tr>

                                        <td>{{ $orthopaedic_examination_form_result->compalints}}</td>
                                        <td>{{ $orthopaedic_examination_form_result->height}}</td>
                                        <td>{{ $orthopaedic_examination_form_result->weight}}</td>
                                        <td>{{ $orthopaedic_examination_form_result->temp}}</td>
                                        <td>{{ $orthopaedic_examination_form_result->pulse_rate}}</td>
                                        <td>{{ $orthopaedic_examination_form_result->resp_rate}}</td>
                                        <td>{{ $orthopaedic_examination_form_result->major_hand_r_or_l}}</td>
                                        <td>{{ $orthopaedic_examination_form_result->blood_pressure_lying}}</td>
                                        <td>{{ $orthopaedic_examination_form_result->standing}}</td>
                                        <td>{{ $orthopaedic_examination_form_result->diagnosis}}</td>
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
                                <h4 class="modal-title">Add  Information</h4>
                            </div>
                            <div class="container-fluid">
                                <h1 class="text-center">orthoepedic clinic</h1>
                                <form action="{{route('orthopaedic_examination_form_post', ['patient_id'=>$patient_id])}}" method="post" >{!! csrf_field() !!}
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="">compalints</label>
                                            <input name="compalints" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-3">
                                            <label for="">height</label>
                                            <input name="height" type="text" class="form-control">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="">weight</label>
                                            <input name="weight" type="text" class="form-control">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="">temp</label>
                                            <input name="temp" type="text" class="form-control">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="">pulse rate</label>
                                            <input name="pulse_rate" type="text" class="form-control">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="">resp rate</label>
                                            <input name="resp_rate" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-3">
                                            <label for="">major hand R or L</label>
                                            <input name="major_hand_r_or_l" type="text" class="form-control">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="">blood pressure lying</label>
                                            <input name="blood_pressure_lying" type="text" class="form-control">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="">standing</label>
                                            <input name="standing" type="text" class="form-control">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="">diagnosis</label>
                                            <input name="diagnosis" type="text" class="form-control">
                                        </div>
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
    </div>

@endsection