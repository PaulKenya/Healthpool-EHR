@extends('layouts.master')

@section('content')
    @include('departments.clinical_services.inpatient.patient_file.patient_bio_information')
    <!-- Title & Breadcrumbs-->
    <div class="row page-titles">
        <div class="col-md-12 align-self-center">
            <h4 class="theme-cl">DENTAL EXAMINATION</h4>
        </div>
    </div>
    <!-- Title & Breadcrumbs-->
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>DENTAL EXAMINATION</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable" class="table table-bordered">
                            <thead>
                            <tr>
                                <th>name</th>
                                <th>address</th>
                                <th>date</th>
                                <th>estimate</th>
                                <th>remarks</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(isset($dental_examination_form_results))
                                @foreach($dental_examination_form_results as $dental_examination_form_result)
                                    <tr>
                                        <td>{{$dental_examination_form_result->name}}</td>
                                        <td>{{$dental_examination_form_result->address}}</td>
                                        <td>{{$dental_examination_form_result->date}}</td>
                                        <td>{{$dental_examination_form_result->estimate}}</td>
                                        <td>{{$dental_examination_form_result->remarks}}</td>
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
                                <h1 class="text-center">examination</h1>
                                <form action="{{route('dental_examination_form_post',['patient_id'=>$patient_id])}}" method="post" >{!! csrf_field() !!}
                                    <div class="form-row">
                                        <div class="form-group col-md-3">
                                            <label for="">name</label>
                                            <input type="text" name="name" class="form-control">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="">address</label>
                                            <input type="text"name="address"  class="form-control">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="">date</label>
                                            <input id="myDate" type="date"name="date"  readonly class="form-control">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="">estimate</label>
                                            <input type="text" name="estimate" class="form-control">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="">remarks</label>
                                            <input type="text" name="remarks" class="form-control">
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