@extends('layouts.master')
@section('content')
    @include('departments.clinical_services.inpatient.patient_file.patient_bio_information')

<div class="card"> 
        <div class="card-header">
            <h4>VIEW OFFICIAL REPORT</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="datatable" class="table table-bordered">
                    <thead>
                    <tr>
                        <th>PRINT VIEW</th>
                        <th>ADMITTING DOCTOR</th>
                        <th>WARD</th>
                        <th>BED NUMBER</th>
                        <th>REFERRED FROM</th>
                        <th>DIAGNOSIS</th>
                        <th>CHARGE SHEET</th>
                        <th>DATE OF ADMISSION</th>
                        <th>UNIT NUMBER</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(isset($official_use))

                        @php
                            $i=0
                        @endphp

                        @foreach($official_use as $official_use)

                            @php
                                $i++;
                            @endphp

                            <tr>

                                <td>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{$i}}">PRINT VIEW</button>
                                </td>

                                <td>{{ $official_use->admitting_doctor}}</td>
                                <td>{{ $official_use->ward}}</td>
                                <td>{{ $official_use->bed_number}}</td>
                                <td>{{ $official_use->referred_from}}</td>
                                <td>{{ $official_use->diagnosis}}</td>
                                <td>{{ $official_use->charge_sheet}}</td>
                                <td>{{ $official_use->date_of_admission}}</td>
                                <td>{{ $official_use->unit_number}}</td>
                            </tr>

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
                                                <h2>VIEW VIEW OFFICIAL REPORT FORM</h2>
                                                <p><b>PATIENT NAME : </b>{{$patient->name}}</p>
                                                <p><b>ADMITTING DOCTOR : </b>{{$official_use->admitting_doctor}}</p>
                                                <p><b>WARD : </b>{{$official_use->ward}}</p>
                                                <p><b>BED NUMBER : </b>{{$official_use->bed_number}}</p>
                                                <p><b>REFERRED FROM : </b>{{$official_use->referred_from}}</p>
                                                <p><b>DIAGNOSIS : </b>{{$official_use->diagnosis}}</p>
                                                <p><b>CHARGE SHEET : </b>{{$official_use->charge_sheet}}</p>
                                                <p><b>DATE OF ADMISSION : </b>{{$official_use->date_of_admission}}</p>
                                                <p><b>UNIT NUMBER : </b>{{$official_use->unit_number}}</p>
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
                    </tbody>
                </table>
            </div>
        </div>

        <div class="col-md-4">

                <div class="content">
                    <button class="btn btn-success" data-toggle="modal" data-target="#myModal">Add more Items</button>
                    {{--<button class="btn btn-info" data-toggle="modal" data-target="#myModal">Print</button>--}}
                </div>
        </div>
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog modal-lg">

                <!— Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Add Record</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row page-titles">
                            <div class="col-md-12 align-self-center text-center">
                                <h4 class="theme-cl">OFFICIAL ADMISSION REGISTER</h4>
                            </div>
                        </div>
                        
                            <div class="offset-md-3">
                              <H3 class="mt-20 ">
                                 OFFICIAL USE ONLY
                              </H3>
                                <form action="{{ route('official_use_post',['patient_id'=>$patient_id]) }}"  method="post" >
                                    {!! csrf_field() !!}
                                    <input name="administration_patient_informations_id" type="text" class="form-control d-none" value="{{$patient_id}}">
                                    <input name="institution_id" type="text" class="form-control" class="form-control d-none" value="{{ Auth::user()->institution->id }}">
                                    <input name="user_id" type="text" value="{{ Auth::user()->id }}" class="form-control d-none">
                                    <div class="form-group row">
                                            <label for="staticEmail" class="col-sm-3 col-form-label">ADMITTING DOCTOR:</label>
                                             <div class="  ">
                                            <input type="name" name="admitting_doctor" class="form-control" placeholder="">
                                    </div>
                                    </div>
                                    <div class="form-group row ">
                                            <label for="staticEmail" class="col-sm-3 col-form-label">WARD:</label>
                                             <div class="  ">
                                            <input type="text" name="ward" class="form-control" placeholder="">
                                     </div>
                                    </div>
                                     <div class="form-group row ">
                                            <label for="staticEmail" class="col-sm-3 col-form-label">BED NUMBER:</label>
                                             <div class="  ">
                                            <input type="number" name="bed_number" class="form-control" placeholder="">
                                    </div>
                                    </div>
                                    <div class="form-group row ">
                                            <label for="staticEmail" class="col-sm-3 col-form-label">REFERRED FROM:</label>
                                             <div class="  ">
                                            <input type="text" name="referred_from" class="form-control" placeholder="">
                                    </div>
                                    </div>
                                    <div class="form-group row ">
                                            <label for="staticEmail" class="col-sm-3 col-form-label">DIAGNOSIS:</label>
                                             <div class="  ">
                                            <input type="text" name="diagnosis" class="form-control" placeholder="">
                                    </div>
                                    </div>
                                    <div class="form-group row ">
                                            <label for="staticEmail" class="col-sm-3 col-form-label">CHARGE SHEET NO:Interviewer/PW Records Officer</label>
                                             <div class="  ">
                                            <input type="text" name="charge_sheet" class="form-control" placeholder="">
                                    </div>
                                    </div>
                                    <div class="form-group row ">
                                            <label for="staticEmail" class="col-sm-3 col-form-label">DATE OF ADMISSION:</label>
                                             <div class="  ">
                                            <input type="date" name="date_of_admission" class="form-control" placeholder="">
                                    </div>
                                    </div>
                                    <div class="form-group row ">
                                            <label for="staticEmail" class="col-sm-3 col-form-label">UNIT NUMBER:</label>
                                             <div class="  ">
                                            <input type="number" name="unit_number" class="form-control" placeholder="">
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


@endsection
