@extends('layouts.master')

@section('content')
     @include('departments.clinical_services.inpatient.patient_file.patient_bio_information')
    <div class="row page-titles">
        <div class="col-md-12 align-self-center text-center">
            <h4 class="theme-cl">CHILD HEALTH CARD</h4>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h4>CHILD HEALTH CARD</h4>
        </div>
        <div class="card-body">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="datatable" class="table table-bordered">
                        <thead>
                        <tr>
                            <th>VIEW</th>
                            <th>HEALTHCARE FACILITY NAME:</th>
                            <th>SERVICE DELIVERY POINT(SDP) No:</th>
                            <th>CHILD'S NAME:</th>
                            <th>DATE OF BIRTH:</th>
                            <th>GESTATION AGE(weeks)</th>
                            <th>PLACE OF BIRTH</th>
                            <th>HOME</th>
                            <th>HEALTH FACILITY</th>
                            <th>FATHER'S NAME</th>
                            <th>MOTHER'S NAME</th>
                            <th>PROVINCE</th>
                            <th>DISTRICT</th>
                            <th>DIVISION</th>
                            <th>LOCATION</th>
                            <th>ESTATE/VILLAGE</th>
                            <th>P.O BOX </th>
                            <th>Telephone</th>
                            <th>DATE</th>
                            <th>Describe</th>
                            <th>ANTIGEN/VACCINE</th>
                            <th>BATCH NUMBER</th>
                            <th>MANUFACTURE DATE</th>
                            <th>EXPIRY DATE</th>
                            <th>MANUFACTURER'S NAME</th>
                            {{--<th>delete</th>--}}
                        </tr>
                        </thead>
                        <tbody>
                        @if(isset($childhealthcard_results))
                            @php
                                $i=0
                            @endphp
                            @foreach($childhealthcard_results as $childhealthcard_result)
                                @php
                                    $i++;
                                @endphp
                                <tr>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{$i}}">
                                        VIEW
                                    </button>
                                <td>{{ $childhealthcard_result->health_facility_name}}</td>
                                <td>{{ $childhealthcard_result->service_delivery_point_no}}</td>
                                <td>{{ $childhealthcard_result->childs_name}}</td>
                                <td>{{ $childhealthcard_result->date_of_birth}}</td>
                                <td>{{ $childhealthcard_result->gestation_age}}</td>
                                <td>{{ $childhealthcard_result->place_of_birth}}</td>
                                <td>{{ $childhealthcard_result->health_facility}}</td>
                                <td>{{ $childhealthcard_result->fathers_name}}</td>
                                <td>{{ $childhealthcard_result->mothers_name}}</td>
                                <td>{{ $childhealthcard_result->province}}</td>
                                <td>{{ $childhealthcard_result->district}}</td>
                                <td>{{ $childhealthcard_result->division}}</td>
                                <td>{{ $childhealthcard_result->location}}</td>
                                <td>{{ $childhealthcard_result->estate}}</td>
                                <td>{{ $childhealthcard_result->po_box}}</td>
                                <td>{{ $childhealthcard_result->town}}</td>
                                <td>{{ $childhealthcard_result->telephone}}</td>
                                <td>{{ $childhealthcard_result->date}}</td>
                                <td>{{ $childhealthcard_result->description}}</td>
                                <td>{{ $childhealthcard_result->antigen}}</td>
                                <td>{{ $childhealthcard_result->batch_no}}</td>
                                <td>{{ $childhealthcard_result->manufacture_date}}</td>
                                <td>{{ $childhealthcard_result->expiry_date}}</td>
                                <td>{{ $childhealthcard_result->manufacturer_name}}</td>
                                {{--<td><form role="form" action="/childhealthcard_delete/{{$childhealthcard_result->id}}" enctype="multipart/form-data" method="post" >@csrf--}}

                                        {{--<div>--}}
                                            {{--<button type="submit" class="btn btn-info btn-lg"  data-toggle="modal" data-target="#myModal">Delete</button>--}}
                                        {{--</div>--}}
                                    {{--</form></td>--}}
                                    <div class="modal fade" id="exampleModal{{$i}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">CHILD HEALTH CARD</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div id="printableArea{{$i}}">
                                                        <h2>CHILD HEALTH CARD</h2>
                                                        <p><b>Patient Name : </b>{{$patient->name}}</p>

                                                        <div class="row">
                                                            <div class="col-sm-3">


                                                                <div><span class="row">
        <span class="col-md-6"><label>&ensp;&ensp;&ensp;HEALTHCARE FACILITY NAME:</label></span>
     <span class="col-md">{{ $childhealthcard_result->health_facility_name}}</span>
</span>
                                                                </div><br></div> <div class="col-sm-3">


                                                                <div><span class="row">
        <span class="col-md-6"><label>&ensp;&ensp;&ensp;SERVICE DELIVERY POINT(SDP) No:</label></span>
     <span class="col-md-6">{{ $childhealthcard_result->service_delivery_point_no}}</span>
</span>
                                                                </div><br></div>

                                                            <div class="col-sm-3">
                                                                <div><span class="row">
        <span class="col-md-6"><label>&ensp;&ensp;&ensp;CHILD'S NAME:</label></span>
     <span class="col-md-6">{{ $childhealthcard_result->childs_name}}</span>
</span>
                                                                </div><br></div> <div class="col-sm-3">

                                                                <div >

                                                        <div class="row">
                                                            <div class="col-sm-3">
                                                                <div><span class="row">
        <span class="col-md-6"><label>&ensp;&ensp;&ensp;DATE OF BIRTH:</label></span>
     <span class="col-md-6">{{ $childhealthcard_result->date_of_birth}}</span>
</span>
                                                                </div><br></div> <div class="col-sm-3">
                                                                <div><span class="row">
        <span class="col-md-6"><label>&ensp;&ensp;&ensp;GESTATION AGE(weeks)</label></span>
     <span class="col-md-6">{{ $childhealthcard_result->gestation_age}}</span>
</span>
                                                                </div><br></div>

                                                            <div class="col-sm-3">
                                                                <div><span class="row">
        <span class="col-md-6"><label>&ensp;&ensp;&ensp;PLACE OF BIRTH</label></span>
     <span class="col-md-6">{{ $childhealthcard_result->place_of_birth}}</span>
</span>
                                                                </div><br></div> <div class="col-sm-3">
                                                                <div>
                                                                </div><br></div></div>
                                                        <div class="row">
                                                            <div class="col-sm-3">
                                                                <div><span class="row">
        <span class="col-md-6"><label>&ensp;&ensp;&ensp;HEALTH FACILITY</label></span>
     <span class="col-md-6">{{ $childhealthcard_result->health_facility}}</span>
</span>
                                                                </div><br></div> <div class="col-sm-3">
                                                                <div><span class="row">
        <span class="col-md-6"><label>&ensp;&ensp;&ensp;FATHER'S NAME</label></span>
     <span class="col-md-6">{{ $childhealthcard_result->fathers_name}}</span>
</span>
                                                                </div><br></div>

                                                            <div class="col-sm-3">
                                                                <div><span class="row">
        <span class="col-md-6"><label>&ensp;&ensp;&ensp;MOTHER'S NAME</label></span>
     <span class="col-md-6">{{ $childhealthcard_result->mothers_name}}</span>
</span>
                                                                </div><br></div> <div class="col-sm-3">
                                                                <div><span class="row">
        <span class="col-md-6"><label>&ensp;&ensp;&ensp;PROVINCE</label></span>
     <span class="col-md-6">{{ $childhealthcard_result->province}}</span>
</span>
                                                                </div><br></div></div>
                                                        <div class="row">
                                                            <div class="col-sm-3">
                                                                <div><span class="row">
        <span class="col-md-6"><label>&ensp;&ensp;&ensp;DISTRICT</label></span>
     <span class="col-md-6">{{ $childhealthcard_result->district}}</span>
</span>
                                                                </div><br></div> <div class="col-sm-3">
                                                                <div><span class="row">
        <span class="col-md-6"><label>&ensp;&ensp;&ensp;DIVISION</label></span>
     <span class="col-md-6">{{ $childhealthcard_result->division}}</span>
</span>
                                                                </div><br></div>

                                                            <div class="col-sm-3">
                                                                <div><span class="row">
        <span class="col-md-6"><label>&ensp;&ensp;&ensp;LOCATION</label></span>
     <span class="col-md-6">{{ $childhealthcard_result->location}}</span>
</span>
                                                                </div><br></div> <div class="col-sm-3">
                                                                <div><span class="row">
        <span class="col-md-6"><label>&ensp;&ensp;&ensp;ESTATE/VILLAGE</label></span>
     <span class="col-md-6">{{ $childhealthcard_result->estate}}</span>
</span>
                                                                </div><br></div></div>
                                                        <h5>ANY ADVERSE EVENTS FOLLOWING IMMUNIZATION(AEFI)</h5>
                                                        <div class="row">
                                                            <div class="col-sm-3">
                                                                <div><span class="row">
        <span class="col-md-3"><label>&ensp;&ensp;&ensp;P.O BOX</label></span>
     <span class="col-md-3">{{ $childhealthcard_result->po_box}}</span>
            <span class="col-md-3"><label>&ensp;&ensp;&ensp;Town</label></span>
     <span class="col-md-3">{{ $childhealthcard_result->town}}</span>
</span>
                                                                </div><br></div> <div class="col-sm-3">
                                                                <div><span class="row">
        <span class="col-md-6"><label>&ensp;&ensp;&ensp;Telephone</label></span>
     <span class="col-md-6">{{ $childhealthcard_result->telephone}}</span>
</span>
                                                                </div><br></div>




                                                            <div class="col-sm-3">

                                                                <div><span class="row">
        <span class="col-md-6"><label>&ensp;&ensp;&ensp;DATE</label></span>
     <span class="col-md-6">{{ $childhealthcard_result->date}}</span>
</span>
                                                                </div><br></div> <div class="col-sm-3">
                                                                <div><span class="row">
        <span class="col-md-6"><label>&ensp;&ensp;&ensp;Describe</label></span>
     <span class="col-md-6">{{ $childhealthcard_result->description}}</span>
</span>
                                                                </div><br></div></div>
                                                        <div class="row">
                                                            <div class="col-sm-3">
                                                                <div><span class="row">
        <span class="col-md-6"><label>&ensp;&ensp;&ensp;ANTIGEN/VACCINE</label></span>
     <span class="col-md-6">{{ $childhealthcard_result->antigen}}</span>
</span>
                                                                </div><br></div> <div class="col-sm-3">
                                                                <div><span class="row">
        <span class="col-md-6"><label>&ensp;&ensp;&ensp;BATCH NUMBER</label></span>
     <span class="col-md-6">{{ $childhealthcard_result->batch_no}}</span>
</span>
                                                                </div><br></div>

                                                            <div class="col-sm-3">
                                                                <div><span class="row">
        <span class="col-md-6"><label>&ensp;&ensp;&ensp;MANUFACTURE DATE</label></span>
     <span class="col-md-6">{{ $childhealthcard_result->manufacture_date}}</span>
</span>
                                                                </div><br></div> <div class="col-sm-3">
                                                                <div><span class="row">
        <span class="col-md-6"><label>&ensp;&ensp;&ensp;EXPIRY DATE</label></span>
     <span class="col-md-6">{{ $childhealthcard_result->expiry_date}}</span>
</span>
                                                                </div><br></div></div>
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div><span class="row">
        <span class="col-md-6"><label>&ensp;&ensp;&ensp;MANUFACTURER'S NAME</label></span>
     <span class="col-md-6">{{ $childhealthcard_result->manufacturer_name}}</span>
</span>
                                                                </div><br></div></div>
                                                        <hr>
                                                        <p align="center">IF YOUR CHILD DEVELOPS ANY ADVERSE EVENTS FOLLOWING IMMUNIZATION (AEFI)<br>PLEASE REPORT IMMEDIATELY TO THE NEAREST<br>HEALTH FACILITY</p>


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
                            <h4 class="modal-title">CHILD HEALTH CARD</h4>
                        </div>
                        <div class="content">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-header" data-background-color="blackF">

                                            </div>
                                            <div class="card-content table-responsive">

                                                <div class="col-m-3 offset-md-2">
                                                    <H3 class="mt-20 ">
                                                        PUBLIC HEALTH
                                                    </H3>
                                                </div>
                                                <form action="{{route('childhealthcard_post', ['patient_id'=>$patient_id])}}"method="post" >{!! csrf_field() !!}
                                                    <table class="table table-bordered">
                                                        <div class="col-m-3 offset-md-5">
                                                            <H2 class="mt-20">CHILD HEALTH CARD

                                                            </H2>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-3">


                                                                <div><span class="row">
        <span class="col-md-6"><label>&ensp;&ensp;&ensp;HEALTHCARE FACILITY NAME:</label></span>
     <span class="col-md-6"><input name="health_facility_name" type="text" class="form-control"  aria-describedby="" placeholder=""></span>
</span>
                                                                </div><br></div> <div class="col-sm-3">


                                                                <div><span class="row">
        <span class="col-md-6"><label>&ensp;&ensp;&ensp;SERVICE DELIVERY POINT(SDP) No:</label></span>
     <span class="col-md-6"><input name="service_delivery_point_no" type="text" class="form-control" id="" aria-describedby="" placeholder=""></span>
</span>
                                                                </div><br></div>

                                                            <div class="col-sm-3">
                                                                <div><span class="row">
        <span class="col-md-6"><label>&ensp;&ensp;&ensp;CHILD'S NAME:</label></span>
     <span class="col-md-6"><input name="childs_name" type="text" class="form-control" id="" aria-describedby="" placeholder=""></span>
</span>
                                                                </div><br></div> <div class="col-sm-3">

                                                                <div >
                                                                    &ensp;&ensp;&ensp;&ensp;<label>SEX</label>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
                                                                    <select name="sex" align="center">
                                                                        <option value="">-select sex-</option>
                                                                        <option value="male">MALE</option>
                                                                        <option value="female">FEMALE</option>}
                                                                    </select>
                                                                </div><br></div></div>
                                                        <div class="row">
                                                            <div class="col-sm-3">
                                                                <div><span class="row">
        <span class="col-md-6"><label>&ensp;&ensp;&ensp;DATE OF BIRTH:</label></span>
     <span class="col-md-6"><input name="date_of_birth" type="date" class="form-control" id="" aria-describedby="" placeholder=""></span>
</span>
                                                                </div><br></div> <div class="col-sm-3">
                                                                <div><span class="row">
        <span class="col-md-6"><label>&ensp;&ensp;&ensp;GESTATION AGE(weeks)</label></span>
     <span class="col-md-6"><input name="gestation_age" type="number" class="form-control" id="" aria-describedby="" placeholder=""></span>
</span>
                                                                </div><br></div>

                                                            <div class="col-sm-3">
                                                                <div><span class="row">
        <span class="col-md-6"><label>&ensp;&ensp;&ensp;PLACE OF BIRTH</label></span>
     <span class="col-md-6"><input name="place_of_birth" type="text" class="form-control" id="" aria-describedby="" placeholder=""></span>
</span>
                                                                </div><br></div> <div class="col-sm-3">
                                                                <div><span class="row">
        <span class="col-md-6"><label>&ensp;&ensp;&ensp;HOME</label></span>
     <span class="col-md-6"><input name="home" type="text" class="form-control" id="" aria-describedby="" placeholder=""></span>
</span>
                                                                </div><br></div></div>
                                                        <div class="row">
                                                            <div class="col-sm-3">
                                                                <div><span class="row">
        <span class="col-md-6"><label>&ensp;&ensp;&ensp;HEALTH FACILITY</label></span>
     <span class="col-md-6"><input name="health_facility" type="text" class="form-control" id="" aria-describedby="" placeholder=""></span>
</span>
                                                                </div><br></div> <div class="col-sm-3">
                                                                <div><span class="row">
        <span class="col-md-6"><label>&ensp;&ensp;&ensp;FATHER'S NAME</label></span>
     <span class="col-md-6"><input name="fathers_name" type="text" class="form-control" id="" aria-describedby="" placeholder=""></span>
</span>
                                                                </div><br></div>

                                                            <div class="col-sm-3">
                                                                <div><span class="row">
        <span class="col-md-6"><label>&ensp;&ensp;&ensp;MOTHER'S NAME</label></span>
     <span class="col-md-6"><input name="mothers_name" type="text" class="form-control" id="" aria-describedby="" placeholder=""></span>
</span>
                                                                </div><br></div> <div class="col-sm-3">
                                                                <div><span class="row">
        <span class="col-md-6"><label>&ensp;&ensp;&ensp;PROVINCE</label></span>
     <span class="col-md-6"><input name="province" type="text" class="form-control" id="" aria-describedby="" placeholder=""></span>
</span>
                                                                </div><br></div></div>
                                                        <div class="row">
                                                            <div class="col-sm-3">
                                                                <div><span class="row">
        <span class="col-md-6"><label>&ensp;&ensp;&ensp;DISTRICT</label></span>
     <span class="col-md-6"><input name="district" type="text" class="form-control" id="" aria-describedby="" placeholder=""></span>
</span>
                                                                </div><br></div> <div class="col-sm-3">
                                                                <div><span class="row">
        <span class="col-md-6"><label>&ensp;&ensp;&ensp;DIVISION</label></span>
     <span class="col-md-6"><input name="division" type="text" class="form-control" id="" aria-describedby="" placeholder=""></span>
</span>
                                                                </div><br></div>

                                                            <div class="col-sm-3">
                                                                <div><span class="row">
        <span class="col-md-6"><label>&ensp;&ensp;&ensp;LOCATION</label></span>
     <span class="col-md-6"><input name="location" type="text" class="form-control" id="" aria-describedby="" placeholder=""></span>
</span>
                                                                </div><br></div> <div class="col-sm-3">
                                                                <div><span class="row">
        <span class="col-md-6"><label>&ensp;&ensp;&ensp;ESTATE/VILLAGE</label></span>
     <span class="col-md-6"><input name="estate" type="text" class="form-control" id="" aria-describedby="" placeholder=""></span>
</span>
                                                                </div><br></div></div>
                                                        <h5>ANY ADVERSE EVENTS FOLLOWING IMMUNIZATION(AEFI)</h5>
                                                        <div class="row">
                                                            <div class="col-sm-3">
                                                                <div><span class="row">
        <span class="col-md-3"><label>&ensp;&ensp;&ensp;P.O BOX</label></span>
     <span class="col-md-3"><input name="po_box" type="text" class="form-control" id="" aria-describedby="" placeholder=""></span>
            <span class="col-md-3"><label>&ensp;&ensp;&ensp;Town</label></span>
     <span class="col-md-3"><input name="town" type="text" class="form-control" id="" aria-describedby="" placeholder=""></span>
</span>
                                                                </div><br></div> <div class="col-sm-3">
                                                                <div><span class="row">
        <span class="col-md-6"><label>&ensp;&ensp;&ensp;Telephone</label></span>
     <span class="col-md-6"><input name="telephone" type="number" class="form-control" id="" aria-describedby="" placeholder=""></span>
</span>
                                                                </div><br></div>




                                                            <div class="col-sm-3">

                                                                <div><span class="row">
        <span class="col-md-6"><label>&ensp;&ensp;&ensp;DATE</label></span>
     <span class="col-md-6"><input name="date"  id="myDate" type="date" readonly  class="form-control" aria-describedby="" placeholder=""></span>
</span>
                                                                </div><br></div> <div class="col-sm-3">
                                                                <div><span class="row">
        <span class="col-md-6"><label>&ensp;&ensp;&ensp;Describe</label></span>
     <span class="col-md-6"><textarea name="description" type="text" class="form-control" id="" aria-describedby="" placeholder=""></textarea></span>
</span>
                                                                </div><br></div></div>
                                                        <div class="row">
                                                            <div class="col-sm-3">
                                                                <div><span class="row">
        <span class="col-md-6"><label>&ensp;&ensp;&ensp;ANTIGEN/VACCINE</label></span>
     <span class="col-md-6"><input name="antigen" type="text" class="form-control" id="" aria-describedby="" placeholder=""></span>
</span>
                                                                </div><br></div> <div class="col-sm-3">
                                                                <div><span class="row">
        <span class="col-md-6"><label>&ensp;&ensp;&ensp;BATCH NUMBER</label></span>
     <span class="col-md-6"><input name="batch_no" type="text" class="form-control" id="" aria-describedby="" placeholder=""></span>
</span>
                                                                </div><br></div>

                                                            <div class="col-sm-3">
                                                                <div><span class="row">
        <span class="col-md-6"><label>&ensp;&ensp;&ensp;MANUFACTURE DATE</label></span>
     <span class="col-md-6"><input name="manufacture_date" type="date" class="form-control" id="" aria-describedby="" placeholder=""></span>
</span>
                                                                </div><br></div> <div class="col-sm-3">
                                                                <div><span class="row">
        <span class="col-md-6"><label>&ensp;&ensp;&ensp;EXPIRY DATE</label></span>
     <span class="col-md-6"><input name="expiry_date" type="date" class="form-control" id="" aria-describedby="" placeholder=""></span>
</span>
                                                                </div><br></div></div>
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div><span class="row">
        <span class="col-md-6"><label>&ensp;&ensp;&ensp;MANUFACTURER'S NAME</label></span>
     <span class="col-md-6"><input name="manufacturer_name" type="text" class="form-control" id="" aria-describedby="" placeholder=""></span>
</span>
                                                                </div><br></div></div>
                                                        <hr>
                                                        <p align="center">IF YOUR CHILD DEVELOPS ANY ADVERSE EVENTS FOLLOWING IMMUNIZATION (AEFI)<br>PLEASE REPORT IMMEDIATELY TO THE NEAREST<br>HEALTH FACILITY</p>

                                                        <input name="administration_patient_informations_id" type="text" class="form-control d-none" value="{{$patient_id}}">
                                                        <input name="institution_id" type="text"  class="form-control d-none" value="{{ Auth::user()->institution->id }}">
                                                        <input name="user_id" type="text" value="{{ Auth::user()->id }}" class="form-control d-none">





                                                        <div class="form-group  ">
                                                            <label for="staticEmail" class="col-sm-3 col-form-label"></label>
                                                            <div class="col-sm-6">

                                                            </div>
                                                            <br>
                                                            <div class="form-group">
                                                                <button type="submit" class="btn btn-primary">Submit</button>
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






@endsection