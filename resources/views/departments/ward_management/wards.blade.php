@extends('layouts.master')

@section('content')






    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>WARD MANAGEMENT</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable" class="table table-striped table-bordered table-responsive">
                            <thead>
                            <tr>


                                <th>WARD NUMBER</th>
                                <th>WARD NAME</th>
                                <th>TOTAL NUMBER OF BEDS</th>
                                <th>AVAILABLE BEDS</th>



                            </tr>
                            </thead>
                            <tbody>
                            @if(isset($ward_results))
                                @foreach($ward_results as $ward_result)
                                    <tr>
                                        <td>{{$ward_result->ward_number}}</td>
                                        <td>{{$ward_result->ward_name}}</td>

                                        <td>{{ $ward_result->total_number}}</td>
                                        <td>{{ $ward_result->available}}</td>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="content">
                        <button class="btn btn-success" data-toggle="modal" data-target="#myModal">Add A New Ward</button>
                        {{--<button class="btn btn-info" data-toggle="modal" data-target="#myModal">Print</button>--}}
                    </div>
                </div>
                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog modal-lg">

                        <!— Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Add A New Ward</h4>
                            </div>
                            <div class="modal-body">

                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="container-fluid">
                                            <form action="{{route("wards_post")}}" method="post" >{!! csrf_field() !!}

                                                <div class="col-md-12 align-self-center text-center">
                                                    <H3><u>Ward Registration</u></H3>
                                                </div>
                                                <br><br>
                                                <div class="row">
                                                    <div class="col-md-6 mb-4">
                                                        <label>Ward Number:</label>
                                                           <input name="ward_number" type="text" class="form-control"  placeholder="">
                                                   </div>
                                                <div class="col-md-6 mb-4">
                                                    <label>Ward Name:</label>
                                                    <input name="ward_name" type="text" class="form-control"  placeholder="">
                                                </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label>Total Number Of Beds:</label>
                                                        <input name="total_number" type="number" class="form-control"  placeholder="">
                                                    </div>

                                                </div>









                                                <input name="institution_id" type="text" class="form-control d-none" value="{{ Auth::user()->institution->id }}">
                                                <input name="user_id" type="text" value="{{ Auth::user()->id }}" class="form-control d-none">
                                                <br><br>
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
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

