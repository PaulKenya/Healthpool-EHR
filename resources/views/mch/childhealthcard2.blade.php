@extends('layouts.master')

@section('content')
      @include('departments.clinical_services.inpatient.patient_file.patient_bio_information')
    <div class="row page-titles">
        <div class="col-md-12 align-self-center text-center">
            <h4 class="theme-cl">VITAMIN A CAPSULES FROM 6 MONTHS</h4>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h4>VITAMIN A CAPSULES FROM 6 MONTHS</h4>
        </div>
        <div class="card-body">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="datatable" class="table table-bordered">
                        <thead>
                        <tr>
                            <th>VIEW</th>
                            <th>at 6 months</th>
                            <th>at 6 months</th>
                            <th>at 12 months(1 Year)</th>
                            <th>at 12 months(1 Year)</th>
                            <th>at 18 months(1 1/2 Years)</th>
                            <th>at 18 months(1 1/2 Years)</th>
                            <th>at 24 months(2 Years)</th>
                            <th>at 24 months(2 Years)</th>
                            <th>at 30 months(2 1/2 Years</th>
                            <th>at 30 months(2 1/2 Years</th>
                            <th>at 36 months(3 Years)</th>
                            <th>at 36 months(3 Years)</th>
                            <th>at 42 months(3 1/2 Years)</th>
                            <th>at 42 months(3 1/2 Years)</th>
                            <th>at 48 months(4 Years)</th>
                            <th>at 48 months(4 Years)</th>
                            <th>at 54 months(4 1/2 Years)</th>
                            <th>at 54 months(4 1/2 Years)</th>
                            <th>at 60 months(5 Years)</th>
                            <th>at 60 months(5 Years)</th>
                            <th>VACCINE</th>
                            <th>DATE GIVEN</th>
                            {{--<th>delete</th>--}}
                        </tr>
                        </thead>
                        <tbody>
                        @if(isset($childhealthcard2_results))
                            @php
                                $i=0
                            @endphp
                            @foreach($childhealthcard2_results as $childhealthcard2_results)
                                @php
                                    $i++;
                                @endphp
                                <tr>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{$i}}">
                                        VIEW
                                    </button>
                                <td>{{  $childhealthcard2_results->check6}}</td>
                                <td>{{  $childhealthcard2_results->date6}}</td>
                                <td>{{  $childhealthcard2_results->check12}}</td>
                                <td>{{  $childhealthcard2_results->date12}}</td>
                                <td>{{  $childhealthcard2_results->check18}}</td>
                                <td>{{  $childhealthcard2_results->date18}}</td>
                                <td>{{  $childhealthcard2_results->check24}}</td>
                                <td>{{  $childhealthcard2_results->date24}}</td>
                                <td>{{  $childhealthcard2_results->check30 }}</td>
                                <td>{{  $childhealthcard2_results->date30}}</td>
                                <td>{{  $childhealthcard2_results->check36}}</td>
                                <td>{{  $childhealthcard2_results->date36}}</td>
                                <td>{{  $childhealthcard2_results->check42}}</td>
                                <td>{{  $childhealthcard2_results->date42 }}</td>
                                <td>{{  $childhealthcard2_results->check48}}</td>
                                <td>{{  $childhealthcard2_results->date48}}</td>
                                <td>{{  $childhealthcard2_results->check54 }}</td>
                                <td>{{  $childhealthcard2_results->date54 }}</td>
                                <td>{{  $childhealthcard2_results->check60 }}</td>
                                <td>{{  $childhealthcard2_results->date60}}</td>
                                <td>{{  $childhealthcard2_results-> vaccine}}</td>
                                <td>{{  $childhealthcard2_results-> date_given}}</td>
                                {{--<td><form role="form" action="/childhealthcard2_delete/{{$childhealthcard2_results->id}}" enctype="multipart/form-data" method="post" >@csrf--}}

                                        {{--<div>--}}
                                            {{--<button type="submit" class="btn btn-info btn-lg"  data-toggle="modal" data-target="#myModal">Delete</button>--}}
                                        {{--</div>--}}
                                    {{--</form></td>--}}
                                    <div class="modal fade" id="exampleModal{{$i}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">VITAMIN A CAPSULES FROM 6 MONTHS</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div id="printableArea{{$i}}">
                                                        <h2>VITAMIN A CAPSULES FROM 6 MONTHS</h2>
                                                        <p><b>Patient Name : </b>{{$patient->name}}</p>

                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="">at 6 months</label>
{{  $childhealthcard2_results->check6}}
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="">at 6 months</label>
{{  $childhealthcard2_results->date6}}
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="">at 12 months(1 Year)</label>
{{  $childhealthcard2_results->check12}}
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="">at 12 months(1 Year)</label>
{{  $childhealthcard2_results->date12}}
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="">at 18 months(1 1/2 Years)</label>
{{  $childhealthcard2_results->check18}}
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="">at 18 months(1 1/2 Years)</label>
{{  $childhealthcard2_results->date18}}
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="">at 24 months(2 Years)</label>
{{  $childhealthcard2_results->check24}}
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="">at 24 months(2 Years)</label>
{{  $childhealthcard2_results->date24}}
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="">t 30 months(2 1/2 Years</label>
{{  $childhealthcard2_results->check30 }}
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="">t 30 months(2 1/2 Years</label>
{{  $childhealthcard2_results->date30}}
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="">at 36 months(3 Years)</label>
{{  $childhealthcard2_results->check36}}
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="">at 36 months(3 Years)</label>
{{  $childhealthcard2_results->date36}}
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="">at 42 months(3 1/2 Years)</label>
{{  $childhealthcard2_results->check42}}
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="">at 42 months(3 1/2 Years)</label>
{{  $childhealthcard2_results->date42 }}
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="">at 48 months(4 Years)</label>
{{  $childhealthcard2_results->check48}}
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="">at 48 months(4 Years)</label>
{{  $childhealthcard2_results->date48}}
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="">at 54 months(4 1/2 Years)</label>
{{  $childhealthcard2_results->check54 }}
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="">at 54 months(4 1/2 Years)</label>
{{  $childhealthcard2_results->date54 }}
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="">at 60 months(5 Years)</label>
{{  $childhealthcard2_results->check60 }}
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="">at 60 months(5 Years)</label>
{{  $childhealthcard2_results->date60}}
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="">VACCINE</label>
{{  $childhealthcard2_results-> vaccine}}
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="">DATE GIVEN</label>
{{  $childhealthcard2_results-> date_given}}
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
                    <h4 class="modal-title">VITAMIN A CAPSULES FROM 6 MONTHS</h4>
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
                                    <form action="{{route('childhealthcard2_post', ['patient_id'=>$patient_id])}}" method="post" >{!! csrf_field() !!}
                                    <table class="table table-bordered">
                                        <div class="col-m-3 offset-md-5">
                                            <H2 class="mt-10">
                                                VITAMIN A CAPSULES FROM 6 MONTHS

                                            </H2>
                                        </div>

                                            <table class="table-responsive">
                                                <thead>
                                                <tr>
                                                    <th colspan="2">VITAMIN A CAPSULE:Given orally<br><br>At 6 months or at .rst contract after 6 months</th>
                                                    <th>Tick Age Given</th>
                                                    <th>Date of next visit</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>Dose</td>
                                                    <td>Age</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>100,000 IU</td>
                                                    <td>at 6 months</td>
                                                    <td><input NAME="check6" VALUE="6 MONTHS" type="checkbox" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input NAME='date6' type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                </tr>
                                                <tr>
                                                    <td>200,000 IU</td>
                                                    <td>at 12 months(1 Year)</td>
                                                    <td><input NAME="check12" VALUE="12 MONTHS" type="checkbox" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input NAME='date12' type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                </tr>
                                                <tr>
                                                    <td>200,000 IU</td>
                                                    <td>at 18 months(1 1/2 Years)</td>
                                                    <td><input NAME="check18" VALUE="18 MONTHS" type="checkbox" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input NAME='date18' type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                </tr>
                                                <tr>
                                                    <td>200,000 IU</td>
                                                    <td>at 24 months(2 Years)</td>
                                                    <td><input NAME="check24" VALUE="24 MONTHS" type="checkbox" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input NAME='date24' type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                </tr>
                                                <tr>
                                                    <td>200,000 IU</td>
                                                    <td>at 30 months(2 1/2 Years)</td>
                                                    <td><input NAME="check30" VALUE="30 MONTHS" type="checkbox" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input NAME='date30' type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                </tr>
                                                <tr>
                                                    <td>200,000 IU</td>
                                                    <td>at 36 months(3 Years)</td>
                                                    <td><input NAME="check36" VALUE="36 MONTHS" type="checkbox" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input NAME='date36' type="date" class="form-control" id="" aria-describedby="" placeholder="">  </tr>
                                                <tr>
                                                    <td>200,000 IU</td>
                                                    <td>at 42 months(3 1/2 Years)</td>
                                                    <td><input NAME="check42" VALUE="42 MONTHS" type="checkbox" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input NAME='date42' type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                </tr>
                                                <tr>
                                                    <td>200,000 IU</td>
                                                    <td>at 48 months(4 Years)</td>
                                                    <td><input NAME="check48" VALUE="48 MONTHS" type="checkbox" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input NAME='date48' type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                </tr>
                                                <tr>
                                                    <td>200,000 IU</td>
                                                    <td>at 54 months(4 1/2 Years)</td>
                                                    <td><input NAME="check54" VALUE="54 MONTHS" type="checkbox" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input NAME='date54' type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                </tr>
                                                <tr>
                                                    <td>200,000 IU</td>
                                                    <td>at 60 months(5 Years)</td>
                                                    <td><input NAME="check60" VALUE="60 MONTHS" type="checkbox" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input NAME='date60' type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <br><br>


                                            <table class="table-responsive">
                                                <thead>
                                                <tr>
                                                    <th  colspan="2">SUPPLEMENTAL VACCINES</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>VACCINE</td>
                                                    <td>DATE GIVEN</td>
                                                </tr>
                                                <tr>
                                                    <td><input name="vaccine" type="text" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="date_given" type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                </tr>


                                                </tbody>
                                            </table>

                                            <br><br>
                                        <input name="administration_patient_informations_id" type="text" class="form-control d-none" value="{{$patient_id}}">
                                        <input name="institution_id" type="text"  class="form-control d-none" value="{{ Auth::user()->institution->id }}">
                                        <input name="user_id" type="text" value="{{ Auth::user()->id }}" class="form-control d-none">
                                            <div class="form-group  ">
                                                <label for="staticEmail" class="col-sm-3 col-form-label"></label>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                    </div>
                                                </div>
                                                <br>
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