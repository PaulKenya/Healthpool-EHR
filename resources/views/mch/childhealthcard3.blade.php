@extends('layouts.master')

@section('content')
    @include('departments.clinical_services.inpatient.patient_file.patient_bio_information')
    <div class="row page-titles">
        <div class="col-md-12 align-self-center text-center">
            <h4 class="theme-cl">DEVELOPMENT MILESTONES</h4>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h4>DEVELOPMENT MILESTONES</h4>
        </div>
        <div class="card-body">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="datatable" class="table table-bordered">
                        <thead>
                        <tr>
                            <th>VIEW</th>
                            <th> Social Smile</th>
                            <th> Head Holding/Control</th>
                            <th>Turns towards the origin of sound</th>
                            <th>Extend hand to grasp a toy</th>
                            <th>Sitting</th>
                            <th> Standing</th>
                            <th> Walking</th>
                            <th> Talking </th>
                            {{--<td>delete</td>--}}
                        </tr>
                        </thead>
                        <tbody>
                        @if(isset($childhealthcard3_results))
                            @php
                                $i=0
                            @endphp
                            @foreach($childhealthcard3_results as $childhealthcard3_results)
                                @php
                                    $i++;
                                @endphp
                                <tr>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{$i}}">
                                        VIEW
                                    </button>
                                <td>{{  $childhealthcard3_results->  social}}</td>
                                <td>{{  $childhealthcard3_results-> head}}</td>
                                <td>{{  $childhealthcard3_results-> turn}}</td>
                                <td>{{  $childhealthcard3_results-> extend}}</td>
                                <td>{{  $childhealthcard3_results-> sitting}}</td>
                                <td>{{  $childhealthcard3_results->standing}}</td>
                                <td>{{  $childhealthcard3_results->walking}}</td>
                                <td>{{  $childhealthcard3_results->talking}}</td>

                                {{--<td><form role="form" action="/childhealthcard3_delete/{{$childhealthcard3_results->id}}" enctype="multipart/form-data" method="post" >@csrf--}}

                                        {{--<div>--}}
                                            {{--<button type="submit" class="btn btn-info btn-lg"  data-toggle="modal" data-target="#myModal">Delete</button>--}}
                                        {{--</div>--}}
                                    {{--</form></td>--}}
                                    <div class="modal fade" id="exampleModal{{$i}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">DEVELOPMENT MILESTONES</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div id="printableArea{{$i}}">
                                                        <h2>DEVELOPMENT MILESTONES</h2>
                                                        <p><b>Patient Name : </b>{{$patient->name}}</p>

                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="">Social Smile</label>
{{  $childhealthcard3_results->  social}}
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="">Head Holding/Contro</label>
{{  $childhealthcard3_results-> head}}
                                                            </div>
                                                        </div>

                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="">Turns towards the origin of sound</label>
{{  $childhealthcard3_results-> turn}}
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="">Extend hand to grasp a toy</label>
{{  $childhealthcard3_results-> extend}}
                                                            </div>
                                                        </div>

                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="">Sitting</label>
{{  $childhealthcard3_results-> sitting}}
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="">Standing</label>
{{  $childhealthcard3_results->standing}}
                                                            </div>
                                                        </div>

                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="">Walking</label>
{{  $childhealthcard3_results->walking}}
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="">Talking</label>
{{  $childhealthcard3_results->talking}}
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
                    <h4 class="modal-title">DEVELOPMENT MILESTONES</h4>
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
                                    <form action="{{route('childhealthcard3_post', ['patient_id'=>$patient_id])}}" method="post" >{!! csrf_field() !!}
                                    <table class="table table-bordered">



                                            <table class="table-responsive">
                                                <thead>
                                                <tr>
                                                    <th colspan="3">DEVELOPMENT MILESTONES</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td></td>
                                                    <td>AGE ACHIEVED</td>
                                                    <td>NORMAL LIMITS</td>
                                                </tr>
                                                <tr>
                                                    <td>Social Smile</td>
                                                    <td><input name="social" type="number" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td>4-6 weeks</td>
                                                </tr>
                                                <tr>
                                                    <td>Head Holding/Control</td>
                                                    <td><input name="head" type="number" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td>1-3 months</td>
                                                </tr>
                                                <tr>
                                                    <td>Turns towards the origin of sound</td>
                                                    <td><input name="turn" type="numbers" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td>2-3 months</td>
                                                </tr>
                                                <tr>
                                                    <td>Extend hand to grasp a toy</td>
                                                    <td><input name="extend" type="number" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td>2-3 moths</td>
                                                </tr>
                                                <tr>
                                                    <td>Sitting</td>
                                                    <td><input name="sitting" type="number" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td>5-9 months</td>
                                                </tr>
                                                <tr>
                                                    <td>Standing</td>
                                                    <td><input name="standing" type="number" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td>7-13 months</td>
                                                </tr>
                                                <tr>
                                                    <td>Walking</td>
                                                    <td><input name="walking" type="number" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td>12-18 moths</td>
                                                </tr>
                                                <tr>
                                                    <td>Talking</td>
                                                    <td><input name="talking" type="number" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td>9-24 months</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="3">Refer for further assessment if a milestone delays beyond the normal age limit indicated above</td>
                                                </tr>
                                                </tbody>
                                            </table>

                                            <br><br>
                                            <div class="form-group  ">
                                                <label for="staticEmail" class="col-sm-3 col-form-label"></label>
                                                <div class="col-sm-6">

                                                </div>
                                                <br>

                                                <input name="administration_patient_informations_id" type="text" class="form-control d-none" value="{{$patient_id}}">
                                                <input name="institution_id" type="text"  class="form-control d-none" value="{{ Auth::user()->institution->id }}">
                                                <input name="user_id" type="text" value="{{ Auth::user()->id }}" class="form-control d-none">
                                            </div>
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
            </div>

        </div>
        </div>
    </div>
        </div>
    </div>



@endsection