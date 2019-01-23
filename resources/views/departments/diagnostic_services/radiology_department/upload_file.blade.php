@extends('layouts.master')

@section('content')
    @include('departments.clinical_services.inpatient.patient_file.patient_bio_information')
    <!-- Title & Breadcrumbs-->
    <div class="row page-titles">
        <div class="col-md-12 align-self-center">
            <h4 class="theme-cl offset-4">RADIOLOGY X-RAY UPLOAD FORM</h4>
        </div>
    </div>
    <!-- Title & Breadcrumbs-->

    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="card">
                <div class="card-header text-center">
                    <h4 class="offset-4">X-Ray Details</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable" class="table table-striped">
                            <thead>
                            <tr>
                                <th>PRINT VIEW</th>
                                <th>ID NO</th>
                                <th>DATE X-RAY TAKEN</th>
                                <th>PART OF BODY X-RAY TAKEN</th>
                                <th>NAME OF RADIOLOGIST</th>
                                <th>RADIOLOGIST REGISTRATION NUMBER</th>
                                <th>REPORT</th>
                                <th>X-RAY FILE</th>
                                <th>VIEW X-RAY FILE</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(isset($upload_xray_file_results))

                                @php
                                    $i=0
                                @endphp

                                @foreach($upload_xray_file_results as $upload_xray_file_result)

                                    @php
                                        $i++;
                                    @endphp

                                    <tr>

                                        <td>
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{$i}}">PRINT VIEW</button>
                                        </td>

                                        <td>{{$upload_xray_file_result->id}}</td>
                                        <td>{{$upload_xray_file_result->xray_date}}</td>
                                        <td>{{$upload_xray_file_result->x_ray_body_part}}</td>
                                        <td>{{$upload_xray_file_result->name_of_radiologist}}</td>
                                        <td>{{$upload_xray_file_result->radiologist_reg_no}}</td>
                                        <td>{{$upload_xray_file_result->report}}</td>
                                        <td><a class="btn btn-success" href="<?php echo asset("uploads/xray_uploads/$upload_xray_file_result->xray_file")?>" download><i class="fa fa-download"></i> Download</a></td>
                                        <td><a class="btn btn-success" href="modal-{{$upload_xray_file_result->id}}" class="btn-modal" data-toggle="modal" data-target="#modal-{{$upload_xray_file_result->id}}"><i class="fa fa-picture-o" aria-hidden="true"></i> View X-ray File</a></td>
                                    </tr>
                                    <div class="modal modal-box-2 fade " id="modal-{{$upload_xray_file_result->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog modal-lg" style="max-width: 1500px;">
                                            <div class="modal-content" id="myModalLabel" >
                                                <div class="modal-header theme-bg">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                </div>
                                                <div class="modal-body">
                                                    <img src="{{ asset('uploads/xray_uploads/'.$upload_xray_file_result->xray_file) }}" width="auto" height="auto" style="max-width: 1200px;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

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
                                                        <h2>VIEW X-RAY FORM FORM</h2>
                                                        <p><b>PATIENT NAME : </b>{{$patient->name}}</p>
                                                        <p><b>ID NO : </b>{{$upload_xray_file_result->id}}</p>
                                                        <p><b>DATE X-RAY TAKEN : </b>{{$upload_xray_file_result->xray_date}}</p>
                                                        <p><b>PART OF BODY X-RAY TAKEN : </b>{{$upload_xray_file_result->x_ray_body_part}}</p>
                                                        <p><b>NAME OF RADIOLOGIST</th> : </b>{{$upload_xray_file_result->name_of_radiologist}}</p>
                                                        <p><b>RADIOLOGIST REGISTRATION NUMBER : </b>{{$upload_xray_file_result->radiologist_reg_no}}</p>
                                                        <p><b>REPORT : </b>{{$upload_xray_file_result->report}}</p>
                                                        <p><b>X-RAY FILE : </b>{{$upload_xray_file_result->xray_file}}</p>
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


                <div class="col-md-4 offset-5">
                    <div class="content">
                        <button class="btn btn-success" data-toggle="modal" data-target="#myModal">Add Records</button>
                        {{--<button class="btn btn-info" data-toggle="modal" data-target="#myModal">Print</button>--}}
                    </div>
                </div>
                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog modal-lg">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">QUIT</h4>
                            </div>
                            <div class="modal-body">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="header-title m-t-0">X-RAY FORM</h4>
                                        </div>
                                        <br>
                                        <div class="align-self-center text-center">
                                            <p id="demo"></p>
                                            <script>
                                                var d = new Date();
                                                document.getElementById("demo").innerHTML = d;
                                            </script>
                                        </div>
                                        <br>
                                        <div class="card-body">
                                            <form action="{{ route('upload_xray_file_post',['patient_id'=>$patient_id])}}" enctype="multipart/form-data" method="post" >{{csrf_field()}}

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
                                                <div class="form-group row">
                                                    <label for="x-ray_date" class="col-md-6 col-form-label text-md-right">DATE X-RAY TAKEN:</label>

                                                    <div class="col-md-6">
                                                        <input id="x-ray_date" type="date" class="form-control" name="xray_date" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="x_ray_body_part" class="col-md-6 col-form-label text-md-right">PART OF BODY X-RAY TAKEN:</label>

                                                    <div class="col-md-6">
                                                        <input id="x_ray_body_part" type="text" class="form-control" name="x_ray_body_part" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="name_of_radiologist" class="col-md-6 col-form-label text-md-right">NAME OF RADIOLOGIST:</label>

                                                    <div class="col-md-6">
                                                        <input id="name_of_radiologist" type="text" class="form-control" name="name_of_radiologist" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="radiologist_reg_no" class="col-md-6 col-form-label text-md-right">RADIOLOGIST REGISTRATION NUMBER:</label>

                                                    <div class="col-md-6">
                                                        <input id="radiologist_reg_no" type="text" class="form-control" name="radiologist_reg_no" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="report" class="col-md-6 col-form-label text-md-right">REPORT:</label>

                                                    <div class="col-md-6">
                                                        <textarea id="report" type="text" class="form-control" name="report" required></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="health_facility_file">X-ray File</label>
                                                    <input type="file" class="form-control-file" name="xray_file" id="xray_file" placeholder="" aria-describedby="fileHelpId" required>
                                                    <small id="fileHelpId" class="form-text text-muted">Upload x-ray photo</small>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Submit</button>
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
