@extends('layouts.master')

@section('content')
      @include('departments.clinical_services.inpatient.patient_file.patient_bio_information')
    <div class="row page-titles">
        <div class="col-md-12 align-self-center text-center">
            <h4 class="theme-cl"> CHILD PROFILE</h4>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h4> CHILD PROFILE</h4>
        </div>
        <div class="card-body">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="datatable" class="table table-bordered">
                        <thead>
                        <tr>
                            <th>VIEW</th>
                            <th>child_name</th>
                            <th>date_of_birth</th>
                            <th>mothers_name</th>
                            <th>parity</th>
                            <th>weight</th>
                            <th>status</th>
                            {{--<th>delete</th>--}}
                        </tr>
                        </thead>
                        <tbody>
                        @if(isset($create_child_results))
                            @php
                                $i=0
                            @endphp
                            @foreach($create_child_results as $create_child_result)
                                @php
                                    $i++;
                                @endphp
                                <tr>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{$i}}">
                                        VIEW
                                    </button>
                                <td>{{  $create_child_result->child_name }}</td>
                                <td>{{  $create_child_result->date_of_birth }}</td>
                                <td>{{  $create_child_result->mothers_name}}</td>
                                <td>{{  $create_child_result->parity }}</td>
                                <td>{{  $create_child_result->weight}}</td>
                                <td>{{  $create_child_result->status}}</td>
                                {{--@if (Auth::user()->user_type==2)--}}
                                    {{--<td><form role="form" action="/create_child_delete/{{$create_child_result->id}}" enctype="multipart/form-data" method="post" >@csrf--}}

                                            {{--<div>--}}
                                                {{--<button type="submit" class="btn btn-info btn-lg"  data-toggle="modal" data-target="#myModal">Delete</button>--}}
                                            {{--</div>--}}
                                        {{--</form></td>--}}
                                {{--@endif--}}
                                    <div class="modal fade" id="exampleModal{{$i}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">CHILD PROFILE</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div id="printableArea{{$i}}">
                                                        <h2>CHILD PROFILE</h2>
                                                        <p><b>Patient Name : </b>{{$patient->name}}</p>

                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="row">
                                                                    <label for="staticEmail" class="col-sm-3 col-form-label">CHILDS NAME</label>
                                                                    <div class="col-sm-6">
                                                                        {{  $create_child_result->child_name }}
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <label for="staticEmail" class="col-sm-3 col-form-label">DATE OF BIRTH:</label>
                                                                    <div class="col-sm-6">
                                                                       {{  $create_child_result->date_of_birth }}
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <label for="staticEmail" class="col-sm-3 col-form-label">MOTHERS NAME</label>
                                                                    <div class="col-sm-6">
                                                                       {{  $create_child_result->mothers_name}}
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <label for="staticEmail" class="col-sm-3 col-form-label">PARITY:</label>
                                                                    <div class="col-sm-6">
                                                                       {{  $create_child_result->parity }}
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <label for="staticEmail" class="col-sm-3 col-form-label">WEIGHT:</label>
                                                                    <div class="col-sm-6">
                                                                       {{  $create_child_result->weight}}
                                                                    </div>
                                                                </div>




                                                                <div class="row">
                                                                    <label for="staticEmail" class="col-sm-3 col-form-label"> STATUS:</label>
                                                                    <div class="col-sm-6">
                                                                     {{  $create_child_result->status}}
                                                                    </div>


                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <input type="button" class="btn btn-success" onclick="printDiv('printableArea{{$i}}')" value="print" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                            </tr>

                        @endforeach
                        @endif

                        </tbody>

                    </table>
                </div>
            </div>
    <div class="col-md-4">

        <div class="content">
            <button class="btn btn-success" data-toggle="modal" data-target="#myModal">Add  Information</button>
            {{--<button class="btn btn-info" data-toggle="modal" data-target="#myModal">Print</button>--}}
        </div>
    </div>
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog modal-lg">

            <!— Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"> CHILD PROFILE</h4>
                </div>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header" data-background-color="black">

                            </div>
                            <div class="card-content table-responsive">

                                <div class="col-m-3 offset-md-2">
                                    <H3 class="mt-20 ">

                                    </H3>
                                </div>
                                <form action="{{route('create_child_post',['patient_id'=>$patient_id])}}" method="POST" >{!! csrf_field() !!}
                                    <table class="table table-bordered">
                                        <div class="col-m-3 offset-md-2">
                                            <H3 class="mt-20 ">
                                                CHILD PROFILE
                                            </H3>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="row">
                                                    <label for="staticEmail" class="col-sm-3 col-form-label">CHILDS NAME</label>
                                                    <div class="col-sm-6">
                                                        <input type="text" name="child_name" class="form-control" placeholder="">
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <label for="staticEmail" class="col-sm-3 col-form-label">DATE OF BIRTH:</label>
                                                    <div class="col-sm-6">
                                                        <input type="date" name="date_of_birth" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <label for="staticEmail" class="col-sm-3 col-form-label">MOTHERS NAME</label>
                                                    <div class="col-sm-6">
                                                        <input type="text" name="mothers_name" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <label for="staticEmail" class="col-sm-3 col-form-label">PARITY:</label>
                                                    <div class="col-sm-6">
                                                        <input type="text" name="parity" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <label for="staticEmail" class="col-sm-3 col-form-label">WEIGHT:</label>
                                                    <div class="col-sm-6">
                                                        <input type="number" name="weight" class="form-control" placeholder="">
                                                    </div>
                                                </div>




                                                <div class="row">
                                                    <label for="staticEmail" class="col-sm-3 col-form-label"> STATUS:</label>
                                                    <div class="col-sm-6">
                                                        <select name="status" align="center">
                                                            <option value="">-select-</option>
                                                            <option value="HEALTHY">HEALTHY</option>
                                                            <option value="UNDERWEIGHT">UNDERWEIGHT</option>
                                                            <option value="OVERWEIGHT">OVERWEIGHT</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <input name="administration_patient_informations_id" type="text" class="form-control d-none" value="{{$patient_id}}">
                                                <input name="institution_id" type="text"  class="form-control d-none" value="{{ Auth::user()->institution->id }}">
                                                <input name="user_id" type="text" value="{{ Auth::user()->id }}" class="form-control d-none">
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </div>
                                            </div>


                                            </div>
                                        </div>
                                    </table>
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