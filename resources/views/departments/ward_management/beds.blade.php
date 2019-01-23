@extends('layouts.master')

@section('content')






    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>BED MANAGEMENT</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable" class="table table-striped table-bordered table-responsive">
                            <thead>
                            <tr>

                                <th>PATIENT IDENTIFICATION NUMBER</th>
                                <th>PATIENT NAME</th>
                                <th>WARD</th>
                                <th>BED NUMBER</th>
                                <th>DATE WHEN ADMITTED</th>
                                <th>DATE WHEN DISCHARGED</th>
                                <th>NUMBER OF DAYS SPENT IN WARD</th>
                                <th>COMMENTS</th>
                                <th>DISCHARGE</th>



                            </tr>
                            </thead>
                            <tbody>
                            @if(isset($bed_results))
                                @foreach($bed_results as $bed_result)
                                    <tr>
                                    <td>{{$bed_result->patient_id}}</td>
                                    <td>{{$bed_result->name}}</td>

                                    <td>{{ \App\ward::where('ward_number',$bed_result->ward_number)->first()->ward_name}}
                                    <td>{{ $bed_result->bed_number}}</td>
                                    <td>{{ $bed_result->date_admitted}}</td>
                                    <td>{{ $bed_result->updated_at}}</td>
                                        <td></td>
                                    <td>{{ $bed_result->comments}}</td>
                                        <td>
                                            <form action="{{route("bed_post")}}" method="post" >{!! csrf_field() !!}

                                                <input name="bed_id" type="hidden" value="{{$bed_result->id}}" class="form-control d-none">
                                                <input name="discharge_ward_number" type="hidden" value="{{$bed_result->ward_number}}" class="form-control d-none">
                                                <input type="submit" class="btn btn-info" value="Discharge">

                                            </form>
                                        </td>
                                    </tr>

                                @endforeach
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="content">
                        <button class="btn btn-success" data-toggle="modal" data-target="#myModal">ADMIT A PATIENT HERE</button>
                        {{--<button class="btn btn-info" data-toggle="modal" data-target="#myModal">Print</button>--}}
                    </div>
                </div>
                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog modal-lg">

                        <!— Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Admit A Patient</h4>
                            </div>
                            <div class="modal-body">

                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="container-fluid">
                                            <form action="{{route("bed_post")}}" method="post" >{!! csrf_field() !!}

                                                <div class="col-md-12 align-self-center text-center">
                                                    <H3><u>Bed Allocation</u></H3>
                                                </div>
                                                <br><br>
                                                <div class="row">
                                                    <div class="col-md-6 mb-4">
                                                        <label>Patient Name:</label>
                                                        @php
                                                            $patients_in_ward=App\administration_patient_information::where('current_department',Auth::user()->roles->departments->id)
                                                        @endphp
                                                        <input name="name" type="text" class="form-control" value="" placeholder=""><p>\sfgd</p>
                                                        @if(isset($patients_in_ward))
                                                            @foreach($patients_in_ward as $patient)
                                                                <p>{{ $patient->name }}</p>

                                                            @endforeach
                                                        @endif
                                                    </div>
                                                    <div class="col-md-6 mb-4">
                                                        <label>Ward:</label>
                                                        <select class="form-control {{ $errors->has('ward_number') ? ' is-invalid' : '' }}" name="ward_number" id="ward_number"  required autofocus>
                                                            @php
                                                                $ward_results=\App\ward::all();
                                                            @endphp
                                                            @if(isset($ward_results))
                                                                @foreach($ward_results as $ward_results)
                                                                    <option value="{{$ward_results->ward_number}}">{{$ward_results->ward_name}}</option>
                                                                @endforeach
                                                            @else
                                                                <option value="none" >The available wards should appear here</option>
                                                            @endif
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row">

                                                        <label>Bed Number</label>
                                                        <input name="bed_number" type="text" class="form-control" value="" placeholder="">


                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 mb-4">
                                                        <label>Date When Admitted:</label>
                                                        <input name="date_admitted" type="date" class="form-control" value="" placeholder="">
                                                    </div>
                                                    <div class="col-md-6 mb-4">
                                                        <label>Comments:</label>
                                                        <textarea name="comments" type="text" class="form-control" value=""  placeholder=""></textarea>
                                                    </div>
                                                </div>




                                                <input name="discharge" type="hidden" value="0" class="form-control d-none">




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

