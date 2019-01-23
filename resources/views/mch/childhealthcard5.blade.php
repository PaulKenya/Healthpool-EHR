@extends('layouts.master')

@section('content')
      @include('departments.clinical_services.inpatient.patient_file.patient_bio_information')
    <div class="row page-titles">
        <div class="col-md-12 align-self-center text-center">
            <h4 class="theme-cl">HEALTH WORKER CONSULTATIONS</h4>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h4>HEALTH WORKER CONSULTATIONS</h4>
        </div>
        <div class="card-body">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="datatable" class="table table-bordered">
                        <thead>
                        <tr>
                            <th>VIEW</th>
                            <th>DATE</th>
                            <th> Clinical Notes,Diagnosis & Treatment(and signature)<br>(use key words,2 to 8 lines per visit)</th>
                            {{--<th>delete</th>--}}
                        </tr>
                        </thead>
                        <tbody>
                        @if(isset($childhealthcard5_results))
                            @php
                                $i=0
                            @endphp
                            @foreach($childhealthcard5_results as $childhealthcard5_resultsS)
                                @php
                                    $i++;
                                @endphp
                                <tr>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{$i}}">
                                        VIEW
                                    </button>
                                <td>{{  $childhealthcard5_resultsS-> date}}</td>
                                <td>{{  $childhealthcard5_resultsS->clinicalnotes }}</td>
                                {{--<td><form role="form" action="/childhealthcard5_delete/{{$childhealthcard5_results->id}}" enctype="multipart/form-data" method="post" >@csrf--}}

                                        {{--<div>--}}
                                            {{--<button type="submit" class="btn btn-info btn-lg"  data-toggle="modal" data-target="#myModal">Delete</button>--}}
                                        {{--</div>--}}
                                    {{--</form></td>--}}
                                    <div class="modal fade" id="exampleModal{{$i}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">HEALTH WORKER CONSULTATIONS</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div id="printableArea{{$i}}">
                                                        <h2>HEALTH WORKER CONSULTATIONS</h2>
                                                        <p><b>Patient Name : </b>{{$patient->name}}</p>

                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="">DATE</label>{{  $childhealthcard5_resultsS-> date}}

                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for=""> Clinical Notes,Diagnosis & Treatment(and signature)<br>(use key words,2 to 8 lines per visit)</label>{{  $childhealthcard5_resultsS->clinicalnotes }}

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
                    <h4 class="modal-title">HEALTH WORKER CONSULTATIONS</h4>
                </div>
            <div class="content">
                <div class="container-fluid">
                    <form class="row">
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
                                    <form action="{{route('childhealthcard5_post',['patient_id'=>$patient_id])}}" method="post" >{!! csrf_field() !!}
                                    <table class="table table-bordered">

                                            <table class="table-responsive">
                                                <thead>
                                                <tr>
                                                    <th colspan="2">HEALTH WORKER CONSULTATIONS</th>
                                                </tr>
                                                <tr>
                                                    <th>DATE</th>
                                                    <th>Clinical Notes,Diagnosis & Treatment(and signature)<br>(use key words,2 to 8 lines per visit)</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td><input name="date"  id="myDate" type="date"  readonly class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><textarea name="clinicalnotes"  type="text" class="form-control" id="" aria-describedby="" placeholder=""></textarea> </td>
                                                </tr>

                                                </tbody>
                                            </table>
                                            <br>
                                            <div class="form-group  ">
                                                <label for="staticEmail" class="col-sm-3 col-form-label"></label>
                                                <div class="col-sm-6">

                                                </div>
                                                <br>
                                                <input name="administration_patient_informations_id" type="text" class="form-control d-none" value="{{$patient_id}}">
                                                <input name="institution_id" type="text"  class="form-control d-none" value="{{ Auth::user()->institution->id }}">
                                                <input name="user_id" type="text" value="{{ Auth::user()->id }}" class="form-control d-none">
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </div>
                                            </div>
                                    </table>
                                    </form>
                                </div>
                            </div>
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