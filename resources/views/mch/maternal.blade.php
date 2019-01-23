@extends('layouts.master')

@section('content')
      @include('departments.clinical_services.inpatient.patient_file.patient_bio_information')
    <div class="row page-titles">
        <div class="col-md-12 align-self-center text-center">
            <h4 class="theme-cl">MATERNAL</h4>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h4>MATERNAL PROFILE FORM</h4>
        </div>
        <div class="card-body">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="datatable" class="table table-bordered">
                        <thead>
                        <tr>
                            <th>VIEW</th>
                            <th>NAME OF INSTITUTION</th>
                            <th>NAME OF CLIENT</th>
                            <th>DATE OF BIRTH</th>
                            <th> GRAVIDA</th>
                            <th>PARITY</th>
                            <th>HEIGHT</th>
                            <th> L.M.P</th>
                            <th>EDD</th>
                            <th>MARITAL STATUS</th>
                            <th> EDUCATION</th>
                            <th>ADDRESS</th>
                            <th>TELEPHONE</th>
                            <th>OCCUPATION</th>
                            <th>NEXT OF KIN</th>
                            <th>NEXT OF KIN ADDRESS</th>
                            {{--<th>DELETE</th>--}}

                        </tr>
                        </thead>
                        <tbody>
                        @if(isset($maternalreport_results))
                            @php
                                $i=0
                            @endphp
                            @foreach($maternalreport_results as $maternalreport_results)
                                @php
                                    $i++;
                                @endphp
                                <tr>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{$i}}">
                                        VIEW
                                    </button>
                                <td>{{  $maternalreport_results->name_of_institution}}</td>
                                <td>{{  $maternalreport_results->name_of_client}}</td>
                                <td>{{  $maternalreport_results->date_of_birth}}</td>
                                <td>{{  $maternalreport_results->gravida}}</td>
                                <td>{{  $maternalreport_results->parity}}</td>
                                <td>{{  $maternalreport_results->height}}</td>
                                <td>{{  $maternalreport_results->lmp}}</td>
                                <td>{{  $maternalreport_results->edd}}</td>
                                <td>{{  $maternalreport_results->marital_status}}</td>
                                <td>{{  $maternalreport_results->education}}</td>
                                <td>{{  $maternalreport_results->address}}</td>
                                <td>{{  $maternalreport_results->telephone}}</td>
                                <td>{{  $maternalreport_results->occupation}}</td>
                                <td>{{  $maternalreport_results->next_of_kin}}</td>
                                <td>{{  $maternalreport_results->next_of_kin_address}}</td>
                                {{--<td><form role="form" action="/maternal_delete/{{$maternalreport_results->id}}" enctype="multipart/form-data" method="post" >@csrf--}}

                                        {{--<div>--}}
                                            {{--<button type="submit" class="btn btn-info btn-lg"  data-toggle="modal" data-target="#myModal">Delete</button>--}}
                                        {{--</div>--}}
                                    {{--</form></td>--}}
                                    <div class="modal fade" id="exampleModal{{$i}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">MATERNAL</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div id="printableArea{{$i}}">
                                                        <h2>MATERNAL</h2>
                                                        <p><b>Patient Name : </b>{{$patient->name}}</p>

                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="row">
                                                                    <label for="staticEmail" class="col-sm-3 col-form-label">NAME OF INSTITUTION:</label>
                                                                    <div class="col-sm-6">
                                                                        {{  $maternalreport_results->name_of_institution}}
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <label for="staticEmail" class="col-sm-3 col-form-label">NAME OF CLIENT:</label>
                                                                    <div class="col-sm-6">
                                                                        {{  $maternalreport_results->name_of_client}}
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <label for="staticEmail" class="col-sm-3 col-form-label">DATE OF BIRTH:</label>
                                                                    <div class="col-sm-6">
                                                                       {{  $maternalreport_results->date_of_birth}}
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <label for="staticEmail" class="col-sm-3 col-form-label">GRAVIDA:</label>
                                                                    <div class="col-sm-6">
                                                                       {{  $maternalreport_results->gravida}}
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <label for="staticEmail" class="col-sm-3 col-form-label">PARITY:</label>
                                                                    <div class="col-sm-6">
                                                                        {{  $maternalreport_results->parity}}
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <label for="staticEmail" class="col-sm-3 col-form-label">HEIGHT:</label>
                                                                    <div class="col-sm-6">
                                                                        {{  $maternalreport_results->height}}
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <label for="staticEmail" class="col-sm-3 col-form-label">L.M.P:</label>
                                                                    <div class="col-sm-6">
                                                                        {{  $maternalreport_results->lmp}}
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <label for="staticEmail" class="col-sm-3 col-form-label">EDD:</label>
                                                                    <div class="col-sm-6">
                                                                       {{  $maternalreport_results->edd}}
                                                                    </div>
                                                                </div>



                                                                <div class="row">
                                                                    <label for="staticEmail" class="col-sm-3 col-form-label">MARITAL STATUS:</label>
                                                                    <div class="col-sm-6">
                                                                    {{  $maternalreport_results->marital_status}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <br><br>
                                                                <div class="row">
                                                                    <label for="staticEmail" class="col-sm-3 col-form-label">EDUCATION:</label>
                                                                    <div class="col-sm-6">
                                                                        {{  $maternalreport_results->education}}
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <label for="staticEmail" class="col-sm-3 col-form-label">ADDRESS:</label>
                                                                    <div class="col-sm-6">
                                                                        {{  $maternalreport_results->address}}
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <label for="staticEmail" class="col-sm-3 col-form-label">TELEPHONE:</label>
                                                                    <div class="col-sm-6">
                                                                       {{  $maternalreport_results->telephone}}
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <label for="staticEmail" class="col-sm-3 col-form-label">OCCUPATION:</label>
                                                                    <div class="col-sm-6">
                                                                      {{  $maternalreport_results->occupation}}
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <label for="staticEmail" class="col-sm-3 col-form-label">NEXT OF KIN:</label>
                                                                    <div class="col-sm-6">
                                                                       {{  $maternalreport_results->next_of_kin}}
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <label for="staticEmail" class="col-sm-3 col-form-label">NEXT OF KIN ADDRESS:</label>
                                                                    <div class="col-sm-6">
                                                                       {{  $maternalreport_results->next_of_kin_address}}
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
                    <h4 class="modal-title">MATERNAL PROFILE</h4>
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
                                    <form action="{{route('maternal_post',['patient_id'=>$patient_id])}}" method="POST" >{!! csrf_field() !!}
                                    <table class="table table-bordered">
                                        <div class="col-m-3 offset-md-2">
                                            <H3 class="mt-20 ">
                                                MATERNAL PROFILE
                                            </H3>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-6">
                                            <div class="row">
                                                <label for="staticEmail" class="col-sm-3 col-form-label">NAME OF INSTITUTION:</label>
                                                <div class="col-sm-6">
                                                    <input type="text" name="name_of_institution" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label for="staticEmail" class="col-sm-3 col-form-label">NAME OF CLIENT:</label>
                                                <div class="col-sm-6">
                                                    <input type="text" name="name_of_client" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label for="staticEmail" class="col-sm-3 col-form-label">DATE OF BIRTH:</label>
                                                <div class="col-sm-6">
                                                    <input type="date" name="date_of_birth" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label for="staticEmail" class="col-sm-3 col-form-label">GRAVIDA:</label>
                                                <div class="col-sm-6">
                                                    <input type="text" name="gravida" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label for="staticEmail" class="col-sm-3 col-form-label">PARITY:</label>
                                                <div class="col-sm-6">
                                                    <input type="text" name="parity" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label for="staticEmail" class="col-sm-3 col-form-label">HEIGHT:</label>
                                                <div class="col-sm-6">
                                                    <input type="number" name="height" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label for="staticEmail" class="col-sm-3 col-form-label">L.M.P:</label>
                                                <div class="col-sm-6">
                                                    <input type="text" name="lmp" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label for="staticEmail" class="col-sm-3 col-form-label">EDD:</label>
                                                <div class="col-sm-6">
                                                    <input type="text" name="edd" class="form-control" placeholder="">
                                                </div>
                                            </div>



                                            <div class="row">
                                                <label for="staticEmail" class="col-sm-3 col-form-label">MARITAL STATUS:</label>
                                                <div class="col-sm-6">
                                                    <select name="marital_status" align="center">
                                                        <option value="">-select-</option>
                                                        <option value="single">Single</option>
                                                        <option value="married">Married</option>
                                                        <option value="widowed">Widowed</option>
                                                        <option value="divorced">Divorced</option>
                                                    </select>
                                                </div>
                                            </div>
                                            </div>
                                                <div class="col-sm-6">
                                            <br><br>
                                            <div class="row">
                                                <label for="staticEmail" class="col-sm-3 col-form-label">EDUCATION:</label>
                                                <div class="col-sm-6">
                                                    <input type="text" name="education" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label for="staticEmail" class="col-sm-3 col-form-label">ADDRESS:</label>
                                                <div class="col-sm-6">
                                                    <input type="text" name="address" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label for="staticEmail" class="col-sm-3 col-form-label">TELEPHONE:</label>
                                                <div class="col-sm-6">
                                                    <input type="text" name="telephone" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label for="staticEmail" class="col-sm-3 col-form-label">OCCUPATION:</label>
                                                <div class="col-sm-6">
                                                    <input type="text" name="occupation" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label for="staticEmail" class="col-sm-3 col-form-label">NEXT OF KIN:</label>
                                                <div class="col-sm-6">
                                                    <input type="text" name="next_of_kin" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label for="staticEmail" class="col-sm-3 col-form-label">NEXT OF KIN ADDRESS:</label>
                                                <div class="col-sm-6">
                                                    <input type="text" name="next_of_kin_address" class="form-control" placeholder="">
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