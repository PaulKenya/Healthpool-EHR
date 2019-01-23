@extends('layouts.master')

@section('content')
     @include('departments.clinical_services.inpatient.patient_file.patient_bio_information')
    <div class="row page-titles">
        <div class="col-md-12 align-self-center text-center">
            <h4 class="theme-cl">CHILD IMMUNIZATION CARD</h4>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h4>CHILD IMMUNIZATION CARD</h4>
        </div>
        <div class="card-body">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="datatable" class="table table-bordered">
                        <thead>
                        <tr>
                            <th>VIEW</th>
                            <th>Date given at 9 months</th>
                            <th>Date of next visit at 9 months</th>
                            <th>Date given at 10 months</th>
                            <th>Date of next visit at 10 months</th>
                            <th>Present </th>
                            <th>date checked</th>
                            <th>absent</th>
                            <th>date redone</th>
                            <th>date given</th>
                            <th>date of next visit</th>
                            <th>date given 1 wks</th>
                            <th>date of next visit 1 wks</th>
                            <th>date given 2 wks</th>
                            <th>date of next visit 2 wks </th>
                            <th>date given 3 wks</th>
                            <th>date of next visit 3 wks</th>
                            <th>date given 4 wks</th>
                            <th>date of next visit 4 wks</th>
                            <th>date given 5 wks</th>
                            <th>date of next visit 5 wks</th>
                            <th>date given 6 wks</th>
                            <th>date of next visit 6 wks</th>
                            <th>date given 7 wks</th>
                            <th>date given 8 wks</th>
                            {{--<th>delete</th>--}}


                        </tr>
                        </thead>
                        <tbody>
                        @if(isset($childhealthcard1_results))
                            @php
                                $i=0
                            @endphp
                            @foreach($childhealthcard1_results as $childhealthcard1_result)
                                @php
                                    $i++;
                                @endphp
                                <tr>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{$i}}">
                                        VIEW
                                    </button>
                                <td>{{ $childhealthcard1_result->date_given9}}</td>
                                <td>{{ $childhealthcard1_result-> date_of_next_visit9}}</td>
                                <td>{{ $childhealthcard1_result-> date_given10}}</td>
                                <td>{{ $childhealthcard1_result-> date_of_next_visit10}}</td>
                                <td>{{ $childhealthcard1_result->present }}</td>
                                <td>{{ $childhealthcard1_result->date_checked }}</td>
                                <td>{{ $childhealthcard1_result->absent }}</td>
                                <td>{{ $childhealthcard1_result->date_redone }}</td>
                                <td>{{ $childhealthcard1_result->date_given }}</td>
                                <td>{{ $childhealthcard1_result-> date_of_next_visit }}</td>
                                <td>{{ $childhealthcard1_result-> date_given1 }}</td>
                                <td>{{ $childhealthcard1_result-> date_of_next_visit1 }}</td>
                                <td>{{ $childhealthcard1_result->date_given2 }}</td>
                                <td>{{ $childhealthcard1_result->date_of_next_visit2 }}</td>
                                <td>{{ $childhealthcard1_result->date_given3 }}</td>
                                <td>{{ $childhealthcard1_result->date_of_next_visit3 }}</td>
                                <td>{{ $childhealthcard1_result->date_given4 }}</td>
                                <td>{{ $childhealthcard1_result-> date_of_next_visit4 }}</td>
                                <td>{{ $childhealthcard1_result-> date_given5 }}</td>
                                <td>{{ $childhealthcard1_result-> date_of_next_visit5 }}</td>
                                <td>{{ $childhealthcard1_result->date_given6 }}</td>
                                <td>{{ $childhealthcard1_result->date_of_next_visit6 }}</td>
                                <td>{{ $childhealthcard1_result-> date_given7 }}</td>
                                <td>{{ $childhealthcard1_result->date_given8 }}</td>
                                {{--<td><form role="form" action="/childhealthcard1_delete/{{$childhealthcard1_result->id}}" enctype="multipart/form-data" method="post" >@csrf--}}

                                        {{--<div>--}}
                                            {{--<button type="submit" class="btn btn-info btn-lg"  data-toggle="modal" data-target="#myModal">Delete</button>--}}
                                        {{--</div>--}}
                                    {{--</form></td>--}}
                                    <div class="modal fade" id="exampleModal{{$i}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">CHILD IMMUNIZATION CARD</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div id="printableArea{{$i}}">
                                                        <h2>CHILD IMMUNIZATION CARD</h2>
                                                        <p><b>Patient Name : </b>{{$patient->name}}</p>

                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="">Date given at 9 months</label>
{{ $childhealthcard1_result->date_given9}}
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="">Date of next visit at 9 months</label>
{{ $childhealthcard1_result-> date_of_next_visit9}}
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="">Date given at 10 months</label>
{{ $childhealthcard1_result-> date_given10}}
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="">Date of next visit at 10 months</label>
{{ $childhealthcard1_result-> date_of_next_visit10}}
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="">Present </label>
{{ $childhealthcard1_result->present }}
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="">date checked</label>
{{ $childhealthcard1_result->date_checked }}
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="">absent</label>
{{ $childhealthcard1_result->absent }}
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="">date redone</label>
{{ $childhealthcard1_result->date_redone }}
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="">date given</label>
{{ $childhealthcard1_result->date_given }}
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="">date of next visit</label>
{{ $childhealthcard1_result-> date_of_next_visit }}
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="">date given 1 wks</label>
{{ $childhealthcard1_result-> date_given1 }}
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="">date of next visit 1 wks</label>
{{ $childhealthcard1_result-> date_of_next_visit1 }}
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="">date given 2 wks</label>
{{ $childhealthcard1_result->date_given2 }}
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="">date of next visit 2 wks</label>
{{ $childhealthcard1_result->date_of_next_visit2 }}
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="">date given 3 wks</label>
{{ $childhealthcard1_result->date_given3 }}
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="">date of next visit 3 wks</label>
{{ $childhealthcard1_result->date_of_next_visit3 }}
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="">date given 4 wks</label>
{{ $childhealthcard1_result->date_given4 }}
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="">date of next visit 4 wks</label>
{{ $childhealthcard1_result-> date_of_next_visit4 }}
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="">date given 5 wks</label>
{{ $childhealthcard1_result-> date_given5 }}
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="">date of next visit 5 wks</label>
{{ $childhealthcard1_result-> date_of_next_visit5 }}
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="">date given 6 wks</label>
{{ $childhealthcard1_result->date_given6 }}
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="">date of next visit 6 wks</label>
{{ $childhealthcard1_result->date_of_next_visit6 }}
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="">date given 7 wks</label>
{{ $childhealthcard1_result-> date_given7 }}
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="">date given 8 wks</label>
{{ $childhealthcard1_result->date_given8 }}
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
                    <h4 class="modal-title">CHILD IMMUNIZATION CARD</h4>
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
                                    <form action="{{route('childhealthcard1_post', ['patient_id'=>$patient_id])}}" method="post" >{!! csrf_field() !!}

                                        <div class="col-m-3 offset-md-12">
                                            <H2 class="mt-10">CHILD IMMUNIZATION CARD

                                            </H2>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-6">
                                            <table class="table-responsive">
                                                <thead>
                                                <tr>
                                                    <th>BCG VACCINE:at birth<br>(Intra-dermal left arm)</th>
                                                    <th>Date Given</th>
                                                    <th>Date of next visit</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>Dose:(0.05mls for child below 1 year)</td>
                                                    <td><input name="date_given9" type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="date_of_next_visit9" type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                </tr>
                                                <tr>
                                                    <td>Dose:(0.1 mls for child above 1 year)</td>
                                                    <td><input name="date_given10" type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="date_of_next_visit10" type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                </tr>
                                                <tr>
                                                    <td>BCG Scar checked</td>
                                                    <td>DATE CHECKED</td>
                                                    <td>PRESENT<input value='present' name="present" type="checkbox" class="form-control" id="" aria-describedby="" placeholder=""></td>

                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td><input name='date_checked' type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td>ABSENT<input name="absent" value='absent' type="checkbox" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>DATE REDONE</td>
                                                    <td><input name='date_redone' type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <br>
                                            </div>
                                            <div class="col-sm-6">
                                            <table class="table-responsive">
                                                <thead>
                                                <tr>
                                                    <th>DIPTHERIA/PERTUSSIS/TETANUS/HEPATITIS B/HAEMOPHILUS INFLUENZAE Type b<br>Dose:(0.5mls) Intra Muscular outer right thigh</th>
                                                    <th>Date Given</th>
                                                    <th>Date of next visit</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>1st dose at 6 weeks</td>
                                                    <td><input name='date_given' type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name='date_of_next_visit' type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                </tr>
                                                <tr>
                                                    <td>2nd dose at 10 weeks</td>
                                                    <td><input name='date_given1' type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name='date_of_next_visit1' type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                </tr>
                                                <tr>
                                                    <td>3rd dose at 14 weeks</td>
                                                    <td><input name='date_given2' type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name='date_of_next_visit2' type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <br>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                            <table class="table-responsive">
                                                <thead>
                                                <tr>
                                                    <th>ORAL POLIO VACCINE(OPV)<br><br>Dose:2 drops orally</th>
                                                    <th>Date Given</th>
                                                    <th>Date of next visit</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>Birth Dose:at birth or within 2 wks (OPV 0)</td>
                                                    <td><input name='date_given3' type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name='date_of_next_visit3' type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                </tr>

                                                <tr>
                                                    <td>1st dose at 6 weeks(OPV 1)</td>
                                                    <td><input name='date_given4' type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name='date_of_next_visit4' type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                </tr>
                                                <tr>
                                                    <td>2nd dose at 10 weeks(OPV 2)</td>
                                                    <td><input name='date_given5' type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name='date_of_next_visit5' type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                </tr>
                                                <tr>
                                                    <td>3rd dose at 14 weeks(OPV 3)</td>
                                                    <td><input name='date_given6' type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name='date_of_next_visit6' type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <br>
                                            </div>
                                                <div class="col-sm-6">
                                            <table class="table-responsive">
                                                <thead>
                                                <tr>
                                                    <th>YELLOW FEVER VACCINE at 9 Months</th>
                                                    <th>Date Given</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>Dose:(0.5mls) Intra-Muscular left upper deltoid</td>
                                                    <td><input name='date_given7' type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <br>
                                                </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                            <table class="table-responsive">
                                                <thead>
                                                <tr>
                                                    <th>MEASLES VACCINE at 9 Months</th>
                                                    <th>Date Given</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>Dose:(0.5mls) Subcutaneously right upper arm</td>
                                                    <td><input name='date_given8' type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            </div>
                                        </div>
                                        <input name="administration_patient_informations_id" type="text" class="form-control d-none" value="{{$patient_id}}">
                                        <input name="institution_id" type="text"  class="form-control d-none" value="{{ Auth::user()->institution->id }}">
                                        <input name="user_id" type="text" value="{{ Auth::user()->id }}" class="form-control d-none">
                                            <br>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>


                                        <div class="form-group  ">
                                            <label for="staticEmail" class="col-sm-3 col-form-label"></label>
                                            <div class="col-sm-6">

                                            </div>
                                            <br>

                                        </div>

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