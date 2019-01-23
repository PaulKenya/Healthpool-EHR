@extends('layouts.master')
@section('content')

    {{--@include('departments\clinical_services\inpatient\patient_file\patient_file_bread_crumbs')--}}
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>PATIENT INFORMATION</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable" class="table table-striped table-bordered table-responsive">
                            <thead>
                            <tr>
                                <td>PRINT FORM</td>
                                <td>ACTIONS</td>
                                <td>NAME</td>
                                <td>SEX</td>
                                <td>TITLE</td>
                                <td>SEX</td>
                                <td>MARRIED</td>
                                <td>COMPANY</td>
                                <td>DISTRICT</td>
                                <td>LOCATION</td>
                                <td>BIRTH DATE</td>
                                <td>PHONE NUMBER</td>
                                <td>SUB LOCATION</td>
                                <td>DIVISION</td>
                                <td>VILLAGE</td>
                                <td>ID PASSPORT NO</td>
                                <td>NEXT OF KIN NAME</td>
                                <td>NEXT OF KIN RELATIONSHIP</td>
                                <td>PHONE NO</td>
                                <td>DISCHARGE PATIENT</td>
                            </tr>
                            </thead>
                            <tbody>
                            @if(isset($patient_information))

                                @php
                                    $i=0
                                @endphp

                                @foreach($patient_information as $patient_information)

                                    @php
                                        $i++;
                                    @endphp

                                    <tr>

                                        <td>
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{$i}}">
                                                Print record
                                            </button>
                                        </td>

                                        <td>
                                            <a href="{{ route('single_patient', [ 'patient_id'=>$patient_information->id]) }}">View</a>
                                        </td>
                                        <td>{{ $patient_information->name}}</td>
                                        <td>{{ $patient_information->sex }}</td>

                                        <td>{{ $patient_information->title}}</td>
                                        <td>{{ $patient_information->sex}}</td>
                                        <td>{{ $patient_information->married}}</td>
                                        <td>{{ $patient_information->company}}</td>
                                        <td>{{ $patient_information->district}}</td>
                                        <td>{{ $patient_information->location}}</td>
                                        <td>{{ $patient_information->birth_date}}</td>
                                        <td>{{ $patient_information->phone_number}}</td>
                                        <td>{{ $patient_information->sub_location}}</td>
                                        <td>{{ $patient_information->division}}</td>
                                        <td>{{ $patient_information->village}}</td>
                                        <td>{{ $patient_information->id_passport_no}}</td>
                                        <td>{{ $patient_information->next_of_kin_name}}</td>
                                        <td>{{ $patient_information->next_of_kin_relationship}}</td>
                                        <td>{{ $patient_information->phone_no}}</td>

                                        <td>
                                            <form action="{{ route('patient_information_post') }}" method="post" >{!! csrf_field() !!}
                                                <input type="hidden" name="delete_patient_id" value="{{$patient_information->id}}">
                                                <input type="submit" class="btn btn-danger" value="0">
                                            </form>
                                        </td>

                                        <!-- Triage Modal -->
                                        <div class="modal fade" id="exampleModal{{$i}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div id="printableArea{{$i}}">
                                                            <h2>VIEW PATIENT INFORMATION FORM</h2>
                                                            <p><b>PATIENT NAME : </b>{{$patient_information->name}}</p>
                                                            <p><b>NAME : </b>{{$patient_information->name}}</p>
                                                            <p><b>SEX : </b>{{$patient_information->sex }}</p>
                                                            <p><b>TITLE : </b>{{$patient_information->title}}</p>
                                                            <p><b>SEX : </b>{{$patient_information->sex}}</p>
                                                            <p><b>MARRIED : </b>{{$patient_information->married}}</p>
                                                            <p><b>COMPANY : </b>{{$patient_information->company}}</p>
                                                            <p><b>DISTRICT : </b>{{$patient_information->district}}</p>
                                                            <p><b>LOCATION : </b>{{$patient_information->location}}</p>
                                                            <p><b>BIRTH DATE : </b>{{$patient_information->birth_date}}</p>
                                                            <p><b>PHONE NUMBER : </b>{{$patient_information->phone_number}}</p>
                                                            <p><b>SUB LOCATION : </b>{{$patient_information->sub_location}}</p>
                                                            <p><b>DIVISION : </b>{{$patient_information->division}}</p>
                                                            <p><b>VILLAGE : </b>{{$patient_information->village}}</p>
                                                            <p><b>ID PASSPORT NO : </b>{{$patient_information->id_passport_no}}</p>
                                                            <p><b>NEXT OF KIN NAME : </b>{{$patient_information->next_of_kin_name}}</p>
                                                            <p><b>NEXT OF KIN RELATIONSHIP : </b>{{$patient_information->next_of_kin_relationship}}</p>
                                                            <p><b>PHONE NO:</b>{{$patient_information->phone_no}}</p>
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
                                    </tr>
                                    @endif
                            </tbody>
                        </table>



                        <div class="col-md-4">

                            <div class="content">
                                <button class="btn btn-success" data-toggle="modal" data-target="#myModal">Add Patient Records</button>
                                {{--<button class="btn btn-info" data-toggle="modal" data-target="#myModal">Print</button>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog modal-lg">

                <!— Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Add Patient Information</h4>
                    </div>
                    <div class="modal-body">

                        <div class="col-md-12">
                            <div class="card">
                                <div class="container">
                                    <h2 class="text-center"></h2>
                                    <p class="text-center">.</p>
                                    <p class="text-center"></p>

                                    <b><p>PATIENT INFORMATION APPLICATION FORM- <i>To be completed by administrator in charge of case.</i></p></b>
                                    <div class="row page-titles">
                                        <div class="col-md-12 align-self-center text-center">
                                            <h4 class="theme-cl">PATIENT INFORMATION APPLICATION FORM</h4>
                                        </div>
                                    </div>


                                    <H3 class="mt-20 col-m-3 offset-md-2">
                                        PATIENT INFORMATION
                                    </H3>
                                    <form action="{{ route('patient_information_post') }}" method="post" >{!! csrf_field() !!}

                                        <div class="form-group row ">
                                            <label for="staticEmail" class="col-sm-3 col-form-label">NAME:</label>
                                            <div class="col-sm-6">
                                                <input type="name" name="name" class="form-control" placeholder="" required>
                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <label for="staticEmail" class="col-sm-3 col-form-label">TITLE:</label>
                                            <div class="col-sm-6">
                                                <select class="form-control" name="title" id="title" required>
                                                    <option value="">--Enter Your Title--</option>
                                                    <option value="Sir">Sir</option>
                                                    <option value="Dr">Dr</option>
                                                    <option value="Mr">Mr</option>
                                                    <option value="Ms">Ms</option>
                                                    <option value="Mrs">Mrs</option>
                                                    <option value="Pr">Pr</option>
                                                    <option value="Other">Other</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <label for="staticEmail" class="col-sm-3 col-form-label">SEX:</label>
                                            <div class="col-sm-6">
                                                <input type="radio" value="male" name="sex" required>Male<br>
                                                <input type="radio" value="female" name="sex" required>Female<br>
                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <label for="staticEmail" class="col-sm-3 col-form-label">MARRIED:</label>
                                            <div class="col-sm-6">
                                                <input type="radio" placeholder="" name="married" value="single" required>Single<br>
                                                <input type="radio" placeholder="" name="married" value="married" required>Married<br>
                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <label for="staticEmail" class="col-sm-3 col-form-label">COMPANY:</label>
                                            <div class="col-sm-6">
                                                <input type="radio" value="self" name="company" required>Self<br>
                                                <input type="radio" value="not self" name="company">Not Self<br>
                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <label for="staticEmail" class="col-sm-3 col-form-label">DISTRICT:</label>
                                            <div class="col-sm-6">
                                                <input type="text" name="district" class="form-control" placeholder="" required>
                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <label for="staticEmail" class="col-sm-3 col-form-label">LOCATION:</label>
                                            <div class="col-sm-6">
                                                <input type="text" name="location" class="form-control" placeholder="" required>
                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <label for="staticEmail" class="col-sm-3 col-form-label">BIRTH DATE:</label>
                                            <div class="col-sm-6">
                                                <input type="date" name="birth_date" class="form-control" placeholder="" required>
                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <label for="staticEmail" class="col-sm-3 col-form-label">PHONE NUMBER:</label>
                                            <div class="col-sm-6">
                                                <input type="number" name="phone_number" class="form-control" placeholder="" required>
                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <label for="staticEmail" class="col-sm-3 col-form-label">SUB LOCATION:</label>
                                            <div class="col-sm-6">
                                                <input type="text" name="sub_location" class="form-control" placeholder="" required>
                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <label for="staticEmail" class="col-sm-3 col-form-label">DIVISION:</label>
                                            <div class="col-sm-6">
                                                <input type="text" name="division" class="form-control" placeholder="" required>
                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <label for="staticEmail" class="col-sm-3 col-form-label">VILLAGE:</label>
                                            <div class="col-sm-6">
                                                <input type="text" name="village" class="form-control" placeholder="" required>
                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <label for="staticEmail" class="col-sm-3 col-form-label">ID/PASSPORT NO:</label>
                                            <div class="col-sm-6">
                                                <input type="number" name="id_passport_no" class="form-control" placeholder="" required>
                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <label for="staticEmail" class="col-sm-3 col-form-label">NEXT OF KIN NAME:</label>
                                            <div class="col-sm-6">
                                                <input type="name" name="next_of_kin_name" class="form-control" placeholder="" required>
                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <label for="staticEmail" class="col-sm-3 col-form-label">NEXT OF KIN RELATIONSHIP:</label>
                                            <div class="col-sm-6">
                                                <select class="form-control" name="next_of_kin_relationship" id="relationship" required>
                                                    <option value="">--Enter Your Kin Relationship--</option>
                                                    <option value="Father">Father</option>
                                                    <option value="Mother">Mother</option>
                                                    <option value="Grand Father">Grand Father</option>
                                                    <option value="Grand Mother">Grand Mother</option>
                                                    <option value="Sister">Sister</option>
                                                    <option value="Brother">Brother</option>
                                                    <option value="Uncle">Uncle</option>
                                                    <option value="Aunt">Aunt</option>
                                                    <option value="Cousin">Cousin</option>
                                                    <option value="Husband">Husband</option>
                                                    <option value="Wife">Wife</option>
                                                    <option value="Son">Son</option>
                                                    <option value="Daughter">Daughter</option>
                                                    <option value="In-law">In-law</option>
                                                    <option value="Other">Other</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <label for="staticEmail" class="col-sm-3 col-form-label">PHONE NO:</label>
                                            <div class="col-sm-6">
                                                <input type="number" name="phone_no" class="form-control" placeholder="" required>
                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <label for="staticEmail" class="col-sm-3 col-form-label">RELIGION:</label>
                                            <div class="col-sm-6">
                                                <select class="form-control" name="religion" id="religion" required>
                                                    <option value="">--Enter Your Religion--</option>
                                                    <option value="Christian">Christian</option>
                                                    <option value="Muslim">Muslim</option>
                                                    <option value="Hindu">Hindu</option>
                                                    <option value="Jew">Jew</option>
                                                    <option value="Pagan">Pagan</option>
                                                    <option value="Other">Other</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <label for="staticEmail" class="col-sm-3 col-form-label">OCCUPATION:</label>
                                            <div class="col-sm-6">
                                                <select class="form-control" name="occupation" id="occupation" required>
                                                    <option value="">--Enter Your Occupation--</option>
                                                    <option value="Doctor">Doctor</option>
                                                    <option value="Nurse">Nurse</option>
                                                    <option value="Engineer">Engineer</option>
                                                    <option value="Teacher">Teacher</option>
                                                    <option value="computer scientist">computer scientist</option>
                                                    <option value="Lecturer">Lecturer</option>
                                                    <option value="Accountant">Accountant</option>
                                                    <option value="Cashier">Cashier</option>
                                                    <option value="Other">Other</option>
                                                </select>
                                            </div>
                                        </div>
                                        <input type="submit" class="btn btn-info" data-toggle="modal" value="Save">

                                    </form>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
