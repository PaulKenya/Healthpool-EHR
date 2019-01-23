@extends('layouts.master')

@section('content')

    <!-- Title & Breadcrumbs-->
    <div class="row page-titles">
        <div class="col-md-12 align-self-center">
            <h4 class="theme-cl">Insurance</h4>
        </div>
    </div>
    <!-- Title & Breadcrumbs-->

    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Insurance</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-responsive table-bordered table-striped" id="datatable">
                            <thead>
                            <tr>
                                <th>Insurance Provider Name</th>
                                <th>Member Name</th>
                                <th>Insurance Member ID</th>
                                <th>Date of Birth</th>
                                <th>Blood Group</th>
                                <th>Known Allergies</th>
                                <th>Insurance Valid From</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(isset($insurance_results))
                                @foreach($insurance_results as $insurance_result)
                                    <tr>
                                        <td>{{ $insurance_result->insurance_provider_name }}</td>
                                        <td>{{ $insurance_result->member_name }}</td>
                                        <td>{{ $insurance_result->insurance_member_id }}</td>
                                        <td>{{ $insurance_result->date_of_birth }}</td>
                                        <td>{{ $insurance_result->blood_group }}</td>
                                        <td>{{ $insurance_result->known_allergies }}</td>
                                        <td>{{ $insurance_result->insurance_valid_from }}</td>
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
                                <h4 class="modal-title">Add Insurance record</h4>
                            </div>
                            <div class="modal-body">

                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="container">
                                            <form action="{{route('finance_insurance_post')}}" method="post">{!! csrf_field() !!}
                                                <div class="form-group">
                                                    <label for="">Insurance Provider Name</label>
                                                    <input type="text" name="insurance_provider_name" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Member Name</label>
                                                    <input type="text" name="member_name" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Insurance Member ID</label>
                                                    <input type="text" name="insurance_member_id" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Date Of Birth</label>
                                                    <input type="date" name="date_of_birth" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Blood Group</label>
                                                    <input type="text" name="blood_group" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Known Allergies</label>
                                                    <input type="text" name="known_allergies" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Insurance Valid From</label>
                                                    <input type="date" name="insurance_valid_from" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <button class="btn btn-success" type="submit">Save</button>
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

