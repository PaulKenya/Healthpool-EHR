@extends('layouts.master')
@section('content')
    @include('departments.clinical_services.inpatient.patient_file.patient_bio_information')
    <!-- Title &
    Breadcrumbs-->
<div class="row page-titles">
    <div class="col-md-12 align-self-center">
        <h4 class="theme-cl">CARDEX/NURSING NOTES</h4>
    </div>
</div>
<!-- Title & Breadcrumbs-->

<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>CARDEX/NURSING NOTES</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="datatable" class="table table-striped table-bordered table-responsive">
                        <thead>
                        <tr>
                            <th>VIEW</th>
                            <th>NUTRITION DAY</th>
                            <th>NUTRITION NIGHT</th>
                            <th>PSYCHOLOGICAL DAY</th>
                            <th>PSYCHOLOGICAL NIGHT</th>
                            <th>HYGIENE AND SKIN CARE DAY</th>
                            <th>HYGIENE AND SKIN CARE NIGHT</th>
                            <th>EXERCISES DAY</th>
                            <th>EXERCISES NIGHT</th>
                            <th>ELIMINATION OF WASTE DAY</th>
                            <th>ELIMINATION OF WASTE NIGHT</th>
                            <th>SAFETY DAY</th>
                            <th>SAFETY NIGHT</th>
                            <th>SOCIOLOGICAL DAY</th>
                            <th>SOCIOLOGICAL NIGHT</th>
                            <th>HEALTH EDUCATION DAY</th>
                            <th>HEALTH EDUCATION NIGHT</th>
                            <th>REST DAY</th>
                            <th>REST NIGHT</th>
                            <th>INFECTION CONTROL DAY</th>
                            <th>INFECTION CONTROL NIGHT</th>
                            <th>CONSTANT'S VISIT DAY</th>
                            <th>CONSTANT'S VISIT NIGHT</th>
                            <th>NURSE'S NAME DAY</th>
                            <th>NURSE'S NAME NIGHT</th>
                            <th>CHECKED BY HOD DAY</th>
                            <th>CHECKED BY HOD NIGHT</th>

                        </tr>
                        </thead>
                        <tbody>
                        @if(isset($nursing_notes_results))
                            @php
                                $i=0
                            @endphp
                            @foreach($nursing_notes_results as $nursing_notes_result)
                                @php
                                    $i++;
                                @endphp
                                <tr>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{$i}}">
                                        VIEW
                                    </button>
                                    <td>{{ $nursing_notes_result->nutrition_day}}</td>
                                    <td>{{ $nursing_notes_result->nutrition_night}}</td>
                                    <td>{{ $nursing_notes_result->psychological_day}}</td>
                                    <td>{{ $nursing_notes_result->psychological_night}}</td>
                                    <td>{{ $nursing_notes_result->hygiene_day}}</td>
                                    <td>{{ $nursing_notes_result->hygiene_night}}</td>
                                    <td>{{ $nursing_notes_result->exercises_day}}</td>
                                    <td>{{ $nursing_notes_result->exercises_night}}</td>
                                    <td>{{ $nursing_notes_result->waste_day}}</td>
                                    <td>{{ $nursing_notes_result->waste_night}}</td>
                                    <td>{{ $nursing_notes_result->safety_day}}</td>
                                    <td>{{ $nursing_notes_result->safety_night}}</td>
                                    <td>{{ $nursing_notes_result->sociology_day}}</td>
                                    <td>{{ $nursing_notes_result->sociology_night}}</td>
                                    <td>{{ $nursing_notes_result->health_day}}</td>
                                    <td>{{ $nursing_notes_result->health_night}}</td>
                                    <td>{{ $nursing_notes_result->rest_day}}</td>
                                    <td>{{ $nursing_notes_result->rest_night}}</td>
                                    <td>{{ $nursing_notes_result->infection_day}}</td>
                                    <td>{{ $nursing_notes_result->infection_night}}</td>
                                    <td>{{ $nursing_notes_result->visit_day}}</td>
                                    <td>{{ $nursing_notes_result->visit_night}}</td>
                                    <td>{{ $nursing_notes_result->nurse_day}}</td>
                                    <td>{{ $nursing_notes_result->nurse_night}}</td>
                                    <td>{{ $nursing_notes_result->hod_day}}</td>
                                    <td>{{ $nursing_notes_result->hod_night}}</td>
                                    <div class="modal fade" id="exampleModal{{$i}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">CARDEX/NURSING NOTES</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div id="printableArea{{$i}}">
                                                        <h2>CARDEX/NURSING NOTES</h2>
                                                        <p><b>Patient Name : </b>{{$patient->name}}</p>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="">NUTRITION DAY</label>
                                                                {{ $nursing_notes_result->nutrition_day}}
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="">NUTRITION NIGHT</label>
                                                               {{ $nursing_notes_result->nutrition_night}}
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="">PSYCHOLOGICAL DAY</label>
{{ $nursing_notes_result->psychological_day}}
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="">PSYCHOLOGICAL NIGHT</label>
{{ $nursing_notes_result->psychological_night}}
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="">HYGIENE AND SKIN CARE DAY</label>
{{ $nursing_notes_result->hygiene_day}}
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="">HYGIENE AND SKIN CARE NIGHT</label>
{{ $nursing_notes_result->hygiene_night}}
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="">EXERCISES DAY</label>
{{ $nursing_notes_result->exercises_day}}
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="">EXERCISES NIGHT</label>
{{ $nursing_notes_result->exercises_night}}
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="">ELIMINATION OF WASTE DAY</label>
{{ $nursing_notes_result->waste_day}}
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="">ELIMINATION OF WASTE NIGHT</label>
{{ $nursing_notes_result->waste_night}}
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="">SAFETY DAY</label>
{{ $nursing_notes_result->safety_day}}
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="">SAFETY NIGHT</label>
{{ $nursing_notes_result->safety_night}}
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="">SOCIOLOGICAL DAY</label>
{{ $nursing_notes_result->sociology_day}}
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="">SOCIOLOGICAL NIGHT</label>
{{ $nursing_notes_result->sociology_night}}
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="">HEALTH EDUCATION DAY</label>
{{ $nursing_notes_result->health_day}}
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="">HEALTH EDUCATION NIGHT</label>
{{ $nursing_notes_result->health_night}}
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="">REST DAY</label>
{{ $nursing_notes_result->rest_day}}
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="">REST NIGHT</label>
{{ $nursing_notes_result->rest_night}}
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="">INFECTION CONTROL DAY</label>
{{ $nursing_notes_result->infection_day}}
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="">INFECTION CONTROL NIGHT</label>
{{ $nursing_notes_result->infection_night}}
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="">CONSTANT'S VISIT DAY</label>
{{ $nursing_notes_result->visit_day}}
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="">CONSTANT'S VISIT NIGHT</label>
{{ $nursing_notes_result->visit_night}}
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="">NURSE'S NAME DAY</label>
{{ $nursing_notes_result->nurse_day}}
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="">NURSE'S NAME NIGHT</label>
{{ $nursing_notes_result->nurse_night}}
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="">CHECKED BY HOD DAY</label>
{{ $nursing_notes_result->hod_day}}
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="">CHECKED BY HOD NIGHT</label>
{{ $nursing_notes_result->hod_night}}
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
                            <h4 class="modal-title">Add  Information</h4>
                        </div>
                        <div class="modal-body">

                            <div class="col-md-12">
                                <div class="card">
                                    <div class="container">
                                        <form action="{{route('nursing_notes_post',['patient_id'=>$patient_id])}}" method="post" >{!! csrf_field() !!}

                                            <div class="">

                                                </div>
                                            </div>
                                            <div class="col-m-3 offset-md-2">
                                                <H3 class="mt-20">
                                                    NURSING DAILY PROGRESS REPORT/CARDEX<br><br>
                                                    HAVE YOU ADDRESSED THE FOLLOWING PATIENTS NEEDS
                                                </H3>
                                            </div>
                                            <table class="table table-bordered">
                                                <thead>
                                                <tr>
                                                    <th scope="col-md-2">DATE</th>
                                                    <th scope="col-md-2" colspan="2"></th>
                                                    <th scope="col-md-2" colspan="2">CRITERIA PLAN</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr class="col-md-4">
                                                    <td>PATIENT'S NEED</td>
                                                    <td>DAY</td>
                                                    <td>NIGHT</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>1.NUTRITION</td>
                                                    <td><input type="checkbox"  name="nutrition_day" class="form-control" placeholder=""></td>
                                                    <td><input type="checkbox" name="nutrition_night" class="form-control" placeholder=""></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>2.PSYCHOLOGICAL</td>
                                                    <td><input type="checkbox" name="psychological_day" class="form-control" placeholder=""></td>
                                                    <td><input type="checkbox" name="psychological_night" class="form-control" placeholder=""></td>
                                                    <td>ASSESSMENT</td>
                                                </tr>
                                                <tr>
                                                    <td>3.HYGIENE AND SKIN CARE</td>
                                                    <td><input type="checkbox" name="hygiene_day" class="form-control" placeholder=""></td>
                                                    <td><input type="checkbox" name="hygiene_night" class="form-control" placeholder=""></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>4.EXERCISES</td>
                                                    <td><input type="checkbox" name="exercises_day" class="form-control" placeholder=""></td>
                                                    <td><input type="checkbox" name="exercises_night" class="form-control" placeholder=""></td>
                                                    <td>INTERVIEW</td>
                                                </tr>
                                                <tr>
                                                    <td>5.ELIMINATION OF WASTE</td>
                                                    <td><input type="checkbox" name="waste_day" class="form-control" placeholder=""></td>
                                                    <td><input type="checkbox" name="waste_night" class="form-control" placeholder=""></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>6.SAFETY</td>
                                                    <td><input type="checkbox" name="safety_day" class="form-control" placeholder=""></td>
                                                    <td><input type="checkbox" name="safety_night" class="form-control" placeholder=""></td>
                                                    <td>REASSESSMENTS</td>

                                                </tr>
                                                <tr>
                                                    <td>7.SOCIOLOGICAL</td>
                                                    <td><input type="checkbox" name="sociology_day" class="form-control" placeholder=""></td>
                                                    <td><input type="checkbox" name="sociology_night" class="form-control" placeholder=""></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>8.HEALTH EDUCATION</td>
                                                    <td><input type="checkbox" name="health_day" class="form-control" placeholder=""></td>
                                                    <td><input type="checkbox" name="health_night" class="form-control" placeholder=""></td>
                                                    <td>ESCALATION</td>
                                                </tr>
                                                <tr>
                                                    <td>9.REST</td>
                                                    <td><input type="checkbox" name="rest_day" class="form-control" placeholder=""></td>
                                                    <td><input type="checkbox" name="rest_night" class="form-control" placeholder=""></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>10.INFECTION CONTROL</td>
                                                    <td><input type="checkbox" name="infection_day" class="form-control" placeholder=""></td>
                                                    <td><input type="checkbox" name="infection_night" class="form-control" placeholder=""></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>11.CONSTANT'S VISIT</td>
                                                    <td><input type="checkbox" name="visit_day" class="form-control" placeholder=""></td>
                                                    <td><input type="checkbox" name="visit_night" class="form-control" placeholder=""></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>12.NURSE'S NAME</td>
                                                    <td><input type="checkbox" name="nurse_day" class="form-control" placeholder=""></td>
                                                    <td><input type="checkbox" name="nurse_night" class="form-control" placeholder=""></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>12.CHECKED BY HOD</td>
                                                    <td><input type="checkbox" name="hod_day" class="form-control" placeholder=""></td>
                                                    <td><input type="checkbox" name="hod_night" class="form-control" placeholder=""></td>
                                                    <td></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                    <input name="administration_patient_informations_id" type="text" class="form-control d-none" value="{{$patient_id}}">
                                    <input name="institution_id" type="text" class="form-control" class="form-control d-none" value="{{ Auth::user()->institution->id }}">
                                    <input name="user_id" type="text" value="{{ Auth::user()->id }}" class="form-control d-none">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </form>
                                        <!--form here--->
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

