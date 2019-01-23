@extends('layouts.master')

@section('content')
      @include('departments.clinical_services.inpatient.patient_file.patient_bio_information')
    <div class="row page-titles">
        <div class="col-md-12 align-self-center text-center">
            <h4 class="theme-cl">MEDICAL AND SURGICAL HISTORY</h4>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h4>MEDICAL AND SURGICAL HISTORY</h4>
        </div>
        <div class="card-body">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="datatable" class="table table-bordered">
                        <thead>
                        <tr>
                            <th>VIEW</th>
                            <th>SURGICAL OPERATION</th>
                            <th>BLOOD TRANSFUSION</th>
                            <th>FAMILY HISTORY</th>
                            <th>TWINS</th>
                            <th>TUBERCULOSIS</th>
                            <th>DIABETES</th>
                            <th>HYPERTENSION</th>
                            {{--<th>delete</th>--}}
                        </tr>
                        </thead>
                        <tbody>
                        @if(isset($surgicalreport_results))
                            @php
                                $i=0
                            @endphp
                            @foreach($surgicalreport_results as $surgicalreport_result)
                                @php
                                    $i++;
                                @endphp
                                <tr>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{$i}}">
                                        VIEW
                                    </button>
                                <td>{{ $surgicalreport_result->surgicaloperation }}</td>
                                <td>{{ $surgicalreport_result->bloodtransfusion }}</td>
                                <td>{{ $surgicalreport_result->familyhistory }}</td>
                                <td>{{ $surgicalreport_result->twins }}</td>
                                <td>{{ $surgicalreport_result->tuberculosis }}</td>
                                <td>{{ $surgicalreport_result->diabetes }}</td>
                                <td>{{ $surgicalreport_result->hypertension}}</td>
                                {{--<td><form role="form" action="/surgical_delete/{{$surgicalreport_result->id}}" enctype="multipart/form-data" method="post" >@csrf--}}

                                        {{--<div>--}}
                                            {{--<button type="submit" class="btn btn-info btn-lg"  data-toggle="modal" data-target="#myModal">Delete</button>--}}
                                        {{--</div>--}}
                                    {{--</form></td>--}}
                                    <div class="modal fade" id="exampleModal{{$i}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">MEDICAL AND SURGICAL HISTORY</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div id="printableArea{{$i}}">
                                                        <h2>MEDICAL AND SURGICAL HISTORY</h2>
                                                        <p><b>Patient Name : </b>{{$patient->name}}</p>

                                                        <div class="row">
                                                            <div class="col-sm-4">
                                                                <label for="staticEmail" class="col-sm-2 col-form-label">SURGICAL OPERATION:</label>
                                                               {{ $surgicalreport_result->surgicaloperation }}
                                                            </div>

                                                            <div class="col-sm-4">
                                                                <label for="staticEmail" class="col-sm-2 col-form-label">BLOOD TRANSFUSION:</label>
                                                               {{ $surgicalreport_result->bloodtransfusion }}
                                                            </div>


                                                            <div class="col-sm-4">
                                                                <label for="staticEmail" class="col-sm-2 col-form-label">FAMILY HISTORY:</label>
                                                               {{ $surgicalreport_result->familyhistory }}
                                                            </div>
                                                        </div>
                                                        <div class="row ">
                                                            <div class="col-sm-4">
                                                                <label for="staticEmail" class="col-sm-3 col-form-label">TWINS:</label>
                                                                {{ $surgicalreport_result->twins }}
                                                            </div>


                                                            <div class="col-sm-4">
                                                                <label for="staticEmail" class="col-sm-3 col-form-label">TUBERCULOSIS:</label>
                                                             {{ $surgicalreport_result->tuberculosis }}
                                                            </div>


                                                            <div class="col-sm-4">
                                                                <label for="staticEmail" class="col-sm-3 col-form-label">DIABETES:</label>
                                                                {{ $surgicalreport_result->diabetes }}
                                                            </div>
                                                        </div>
                                                        <div class="row ">
                                                            <div class="col-sm-4">
                                                                <label for="staticEmail" class="col-sm-3 col-form-label">HYPERTENSION:</label>
                                                              {{ $surgicalreport_result->hypertension}}
                                                            </div>
                                                            <br>

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
                    <h4 class="modal-title">ATTENDANCE</h4>
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
                                        <H3 class="mt-20 "> PUBLIC HEALTH

                                        </H3>
                                    </div>
                                    <form action="{{route('surgical_post',['patient_id'=>$patient_id])}}" method="post" >{!! csrf_field() !!}
                                        <table class="table table-bordered">
                                            <H3>MEDICAL AND SURGICAL HISTORY</H3>

                                            <div class="row">
                                                <div class="col-sm-4">
                                                <label for="staticEmail" class="col-sm-2 col-form-label">SURGICAL OPERATION:</label>
                                                    <input type="text" name="surgicaloperation" class="form-control" placeholder="">
                                                </div>

                                                    <div class="col-sm-4">
                                                    <label for="staticEmail" class="col-sm-2 col-form-label">BLOOD TRANSFUSION:</label>
                                                        <input type="text" name="bloodtransfusion" class="form-control" placeholder="">
                                                    </div>


                                                        <div class="col-sm-4">
                                                        <label for="staticEmail" class="col-sm-2 col-form-label">FAMILY HISTORY:</label>
                                                            <input type="text" name="familyhistory" class="form-control" placeholder="">
                                                        </div>
                                            </div>
                                            <div class="row ">
                                                            <div class="col-sm-4">
                                                            <label for="staticEmail" class="col-sm-3 col-form-label">TWINS:</label>
                                                                <input type="text" name="twins" class="form-control" placeholder="">
                                                            </div>


                                                                <div class="col-sm-4">
                                                                <label for="staticEmail" class="col-sm-3 col-form-label">TUBERCULOSIS:</label>
                                                                    <input type="text" name="tuberculosis" class="form-control" placeholder="">
                                                                </div>


                                                                    <div class="col-sm-4">
                                                                    <label for="staticEmail" class="col-sm-3 col-form-label">DIABETES:</label>
                                                                        <input type="text" name="diabetes" class="form-control" placeholder="">
                                                                    </div>
                                            </div>
                                            <div class="row ">
                                                                        <div class="col-sm-4">
                                                                        <label for="staticEmail" class="col-sm-3 col-form-label">HYPERTENSION:</label>
                                                                            <input type="text" name="hypertension" class="form-control" placeholder="">
                                                                        </div>
                                                                        <br>

                                                                </div>
                                            <input name="administration_patient_informations_id" type="text" class="form-control d-none" value="{{$patient_id}}">
                                            <input name="institution_id" type="text"  class="form-control d-none" value="{{ Auth::user()->institution->id }}">
                                            <input name="user_id" type="text" value="{{ Auth::user()->id }}" class="form-control d-none">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>

                                        </table>
                                    </form>
                                                            </div>
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






@endsection