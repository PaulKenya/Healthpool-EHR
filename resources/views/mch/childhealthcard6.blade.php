@extends('layouts.master')

@section('content')
     @include('departments.clinical_services.inpatient.patient_file.patient_bio_information')
    <div class="row page-titles">
        <div class="col-md-12 align-self-center text-center">
            <h4 class="theme-cl">   PMTCT</h4>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h4>   PMTCT</h4>
        </div>
        <div class="card-body">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="datatable" class="table table-bordered">
                        <thead>
                        <tr>
                            <th>VIEW</th>
                            <th>Hospital<br> Name</th>
                            <th>Admission<br>Number</th>
                            <th>Date of<br>Admission</th>
                            <th>Date of<br>Discharge</th>
                            <th>Discharge Diagnosis</th>
                            {{--<th>delete</th>--}}
                        </tr>
                        </thead>
                        <tbody>
                        @if(isset($childhealthcard6_results))
                            @php
                                $i=0
                            @endphp
                            @foreach($childhealthcard6_results as $childhealthcard6_results)
                                @php
                                    $i++;
                                @endphp
                                <tr>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{$i}}">
                                        VIEW
                                    </button>
                                <td>{{  $childhealthcard6_results-> hospitalname}}</td>
                                <td>{{  $childhealthcard6_results-> admissionnumber}}</td>
                                <td>{{  $childhealthcard6_results-> dateofadmission}}</td>
                                <td>{{  $childhealthcard6_results-> dateofdischarge}}</td>
                                <td>{{  $childhealthcard6_results-> dischargediagnosis}}</td>
                                {{--<td><form role="form" action="/childhealthcard6_delete/{{$childhealthcard6_results->id}}" enctype="multipart/form-data" method="post" >@csrf--}}

                                        {{--<div>--}}
                                            {{--<button type="submit" class="btn btn-info btn-lg"  data-toggle="modal" data-target="#myModal">Delete</button>--}}
                                        {{--</div>--}}
                                    {{--</form></td>--}}
                                    <div class="modal fade" id="exampleModal{{$i}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">PMTCT</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div id="printableArea{{$i}}">
                                                        <h2>PMTCT</h2>
                                                        <p><b>Patient Name : </b>{{$patient->name}}</p>

                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for=""></label>
{{  $childhealthcard6_results-> hospitalname}}
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for=""></label>
{{  $childhealthcard6_results-> admissionnumber}}
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for=""></label>
{{  $childhealthcard6_results-> dateofadmission}}
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for=""></label>
{{  $childhealthcard6_results-> dateofdischarge}}
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for=""></label>
{{  $childhealthcard6_results-> dischargediagnosis}}
                                                            </div>
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
                    <h4 class="modal-title">   PMTCT</h4>
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
                                            PUBLIC HEALTH
                                        </H3>
                                    </div>
                                    <div class="col-m-3 offset-md-2">
                                        <H3 class="mt-20 ">
                                           PMTCT
                                        </H3>
                                    </div>
                                    <form action="{{route('childhealthcard6_post',['patient_id'=>$patient_id])}}" method="post" enctype="multipart/form-data">{!! csrf_field() !!}
                                    <table class="table table-bordered">

                                            <table class="table-responsive">
                                                <thead>
                                                <tr>
                                                    <th>HOSPITAL ADMISSIONS</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>Hospital<br> Name</td>
                                                    <td>Admission<br>Number</td>
                                                    <td>Date of<br>Admission</td>
                                                    <td>Date of<br>Discharge</td>
                                                    <td>Discharge Diagnosis</td>
                                                </tr>
                                                <tr>
                                                    <td><input type="text"   name="hospitalname" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input type="number"  name="admissionnumber"  class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input type="date"   name="dateofadmission" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input type="date"   name="dateofdischarge" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><textarea type="text"   name="dischargediagnosis" class="form-control" id="" aria-describedby="" placeholder=""></textarea></td>

                                                </tr>

                                                </tbody>
                                            </table>
                                        <input name="administration_patient_informations_id" type="text" class="form-control d-none" value="{{$patient_id}}">
                                        <input name="institution_id" type="text"  class="form-control d-none" value="{{ Auth::user()->institution->id }}">
                                        <input name="user_id" type="text" value="{{ Auth::user()->id }}" class="form-control d-none">

                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                            <br>

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


                                <br>





    </div>
    </div>
    </div>

@endsection