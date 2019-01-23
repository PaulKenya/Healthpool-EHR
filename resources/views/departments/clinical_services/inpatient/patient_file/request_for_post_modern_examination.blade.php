@extends('layouts.master')
@section('content')
    @include('departments.clinical_services.inpatient.patient_file.patient_bio_information')
<!-- Title &
Breadcrumbs-->
<!-- Title & Breadcrumbs-->
<div class="row page-titles">
    <div class="col-md-12 align-self-center">
        <h4 class="theme-cl">POST MOTERM EXAMINJHATION</h4>
    </div>
</div>
<!-- Title & Breadcrumbs-->
<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>POST MOTERM EXAMINATION</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="datatable" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>name</th>
                                <th>relationship</th>
                                <th>signature</th>
                                <th>witness</th>
                                <th>date</th>
                            </tr>
                        </thead>
                        <tbody>
                        @if(isset($request_for_mortem_examination_results))
                            @foreach($request_for_mortem_examination_results as $request_for_mortem_examination_result)
                                <tr>
                                    <td>{{$request_for_mortem_examination_result->name}}</td>
                                    <td>{{$request_for_mortem_examination_result->relationship}}</td>
                                    <td>{{$request_for_mortem_examination_result->signature}}</td>
                                    <td>{{$request_for_mortem_examination_result->witness}}</td>
                                    <td>{{$request_for_mortem_examination_result->date}}</td>
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

                        <div class="col-md-12">
                            <div class="card">
                                <form action="{{route('request_for_post_modern_examination_post')}}" method="post" >{!! csrf_field() !!}
                                    <div class="col-m-3 offset-md-3">
                                        <H3 class="mt-20 ">
                                            POST-MORTEM EXAMINATION REQUEST
                                        </H3>
                                        <b><p><i>I here by give permission for a post-mortem examination to be performed on</i></p></b>
                                        <div class="form-group row">

                                            <div class="col-sm-6">
                                                <input type="text" name="name" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Relationship:</label>
                                            <input type="text" name="relationship"   class="form-control"  aria-describedby="" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label>Signature:</label>
                                            <input type="text" name="signature"   class="form-control"  aria-describedby="" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label>Witness:</label>
                                            <input type="text" name="witness"   class="form-control"  aria-describedby="" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label>Date:</label>
                                            <input type="date" id="myDate" name="date"  readonly  class="form-control"  aria-describedby="" placeholder="">
                                        </div>
                                    </div>
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