@extends('layouts.master')

@section('content')
      @include('departments.clinical_services.inpatient.patient_file.patient_bio_information')
    <div class="row page-titles">
        <div class="col-md-12 align-self-center text-center">
            <h4 class="theme-cl">PHYSICAL EXAMINATION</h4>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h4>PHYSICAL EXAMINATION</h4>
        </div>
        <div class="card-body">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="datatable" class="table table-bordered">
                        <thead>
                        <tr>
                            <th>VIEW</th>
                            <th>GENERAL</th>
                            <th>CVS:</th>
                            <th>RESPIRATION:</th>
                            <th>BREASTS: </th>
                            <th>ABDOMEN:</th>
                            <th>VAGINAL EXAMINATION:</th>
                            <th>DISCHARGE/DUD: </th>
                            {{--<th>delete</th>--}}
                        </tr>
                        </thead>
                        <tbody>
                        @if(isset($physicalexaminationreport_results))
                            @php
                                $i=0
                            @endphp
                            @foreach($physicalexaminationreport_results as $physicalexaminationreport_results)
                                @php
                                    $i++;
                                @endphp
                                <tr>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{$i}}">
                                        VIEW
                                    </button>
                                <td>{{  $physicalexaminationreport_results->general}}</td>
                                <td>{{  $physicalexaminationreport_results->cvs}}</td>
                                <td>{{  $physicalexaminationreport_results->respiration}}</td>
                                <td>{{  $physicalexaminationreport_results->breasts}}</td>
                                <td>{{  $physicalexaminationreport_results->abdomen}}</td>
                                <td>{{  $physicalexaminationreport_results->vaginal_examination}}</td>
                                <td>{{  $physicalexaminationreport_results->discharge_dud}}</td>
                                {{--<td><form role="form" action="/physicalexamination_delete/{{$physicalexaminationreport_results->id}}" enctype="multipart/form-data" method="post" >@csrf--}}

                                        {{--<div>--}}
                                            {{--<button type="submit" class="btn btn-info btn-lg"  data-toggle="modal" data-target="#myModal">Delete</button>--}}
                                        {{--</div>--}}
                                    {{--</form></td>--}}
                                    <div class="modal fade" id="exampleModal{{$i}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">PHYSICAL EXAMINATION</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div id="printableArea{{$i}}">
                                                        <h2>PHYSICAL EXAMINATION</h2>
                                                        <p><b>Patient Name : </b>{{$patient->name}}</p>

                                                        <div class="form-group  row">
                                                            <label for="staticEmail" class="col-sm-1 col-form-label">GENERAL:</label>
                                                            <div class="col-sm-9">
                                                                {{  $physicalexaminationreport_results->general}}
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class="row ">
                                                            <div class="col-md-6">
                                                                <div class="form-group row ">
                                                                    <label for="staticEmail" class="col-sm-1 col-form-label ">CVS:</label>
                                                                    <div class="col-sm-8">
                                                                       {{  $physicalexaminationreport_results->cvs}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group row ">
                                                                    <label for="staticEmail" class="col-sm-1 col-form-label ">RESPIRATION:</label>
                                                                    <div class="col-sm-8">
                                                                        {{  $physicalexaminationreport_results->respiration}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row ">
                                                            <div class="col-md-6">
                                                                <div class="form-group row ">
                                                                    <label for="staticEmail" class="col-sm-1 col-form-label ">BREASTS:</label>
                                                                    <div class="col-sm-8">
                                                                        {{  $physicalexaminationreport_results->breasts}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group row ">
                                                                    <label for="staticEmail" class="col-sm-1 col-form-label ">ABDOMEN:</label>
                                                                    <div class="col-sm-8">
                                                                        {{  $physicalexaminationreport_results->abdomen}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row ">
                                                            <div class="col-md-6">
                                                                <div class="form-group row ">
                                                                    <label for="staticEmail" class="col-sm-1 col-form-label ">VAGINAL EXAMINATION:</label>
                                                                    <div class="col-sm-8">
                                                                       {{  $physicalexaminationreport_results->vaginal_examination}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group row ">
                                                                    <label for="staticEmail" class="col-sm-1 col-form-label ">DISCHARGE/DUD:</label>
                                                                    <div class="col-sm-8">
                                                                        {{  $physicalexaminationreport_results->discharge_dud}}
                                                                    </div>
                                                                </div>
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
                                @endforeach
                                    @endif
                            </tr>

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
                    <h4 class="modal-title">PHYSICAL EXAMINATION</h4>
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
                                    <form action="{{route('physicalexamination_post',['patient_id'=>$patient_id])}}" method="post" >{!! csrf_field() !!}
                                    <table class="table table-bordered">
                                        <H3 class="mt-20 ">
                                            <u>PHYSICAL EXAMINATION</u>
                                        </H3>

                                            <div class="form-group  row">
                                                <label for="staticEmail" class="col-sm-1 col-form-label">GENERAL:</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="general" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row ">
                                                <div class="col-md-6">
                                                    <div class="form-group row ">
                                                        <label for="staticEmail" class="col-sm-1 col-form-label ">CVS:</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" name="cvs" class="form-control" placeholder="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group row ">
                                                        <label for="staticEmail" class="col-sm-1 col-form-label ">RESPIRATION:</label>
                                                        <div class="col-sm-8">
                                                            <input type=" datetime" name="respiration" class="form-control" placeholder="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row ">
                                                <div class="col-md-6">
                                                    <div class="form-group row ">
                                                        <label for="staticEmail" class="col-sm-1 col-form-label ">BREASTS:</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" name="breasts" class="form-control" placeholder="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group row ">
                                                        <label for="staticEmail" class="col-sm-1 col-form-label ">ABDOMEN:</label>
                                                        <div class="col-sm-8">
                                                            <input type=" datetime" name="abdomen" class="form-control" placeholder="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row ">
                                                <div class="col-md-6">
                                                    <div class="form-group row ">
                                                        <label for="staticEmail" class="col-sm-1 col-form-label ">VAGINAL EXAMINATION:</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" name="vaginal_examination" class="form-control" placeholder="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group row ">
                                                        <label for="staticEmail" class="col-sm-1 col-form-label ">DISCHARGE/DUD:</label>
                                                        <div class="col-sm-8">
                                                            <input type=" datetime" name="discharge_dud" class="form-control" placeholder="">
                                                        </div>
                                                    </div>
                                                </div>
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
            </div>
        </div>

    </div>

    </div>
        </div>
    </div>

@endsection