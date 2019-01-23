@extends('layouts.master')

@section('content')
    <!-- Title & Breadcrumbs-->
    <div class="row page-titles">
        <div class="col-md-12 align-self-center">
            <h4 class="theme-cl offset-4">Canreg5 Cancer File Upload</h4>
        </div>
    </div>
    <!-- Title & Breadcrumbs-->

    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="card">
                <div class="card-header text-center">
                    <h4 class="offset-4">Canreg5 Cancer File Upload</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable" class="table table-striped">
                            <thead>
                            <tr>
                                <th>Health Facility Name</th>
                                <th>Location</th>
                                <th>Health Facility File</th>
                            </tr>
                            </thead>
                            <tbody>
                        @if(isset($cancer_files_results))
                                @foreach($cancer_files_results as $cancer_files_result)
                                    <tr>
                                        <td>{{$cancer_files_result->health_facility_name}}</td>
                                        <td>{{$cancer_files_result->health_facility_location}}</td>
                                        <td><a class="btn btn-success" href="<?php echo asset("uploads/canreg/$cancer_files_result->health_facility_file")?>" download><i class="fa fa-download"></i> Download</a></td>

                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-md-4 offset-5">
                    <div class="content">
                        <button class="btn btn-success" data-toggle="modal" data-target="#myModal">Add New Canreg file</button>
                        {{--<button class="btn btn-info" data-toggle="modal" data-target="#myModal">Print</button>--}}
                    </div>
                </div>
                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog modal-lg">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Cancer File Upload</h4>
                            </div>
                            <div class="modal-body">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="header-title m-t-0">Cancer File Upload</h4>
                                        </div>
                                        <div class="card-body">
                                            <form action="{{ route('canregdata_post')}}" enctype="multipart/form-data" method="post" action="" >
                                                {{csrf_field()}}
                                                <div class="form-group">
                                                    <label for="health_facility_name">Health Facility Name</label>
                                                    <input type="text" name="health_facility_name" id="health_facility_name" class="form-control" placeholder="" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="health_facility_location">Location</label>
                                                    <input type="text" name="health_facility_location" id="health_facility_location" class="form-control" placeholder="" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="health_facility_file">Health Facility</label>
                                                    <input type="file" class="form-control-file" name="health_facility_file" id="health_facility_file" placeholder="" aria-describedby="fileHelpId" required>
                                                    <small id="fileHelpId" class="form-text text-muted">Upload CanReg Excel File Spreadsheet</small>
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
