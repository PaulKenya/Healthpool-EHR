@extends('layouts.master')

@section('content')
  @include('departments.clinical_services.inpatient.patient_file.patient_bio_information')
    <div class="row page-titles">
        <div class="col-md-12 align-self-center text-center">
            <h4 class="theme-cl">IDENTIFICATION OF THE EXPOSED CHILDREN AT 6 WEEKS OR SOON THEREAFTER</h4>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h4>IDENTIFICATION OF THE EXPOSED CHILDREN AT 6 WEEKS OR SOON THEREAFTER</h4>
        </div>
        <div class="card-body">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="datatable" class="table table-bordered">
                        <thead>
                        <tr>
                            <th>VIEW</th>
                            <th>mother </th>
                            <th>antibody</th>
                            <th>pcr </th>
                            <th>mother 1</th>
                            <th>antibody 1</th>
                            <th> pcr 1</th>
                            <th> mother 2</th>
                            <th>antibody 2</th>
                            <th> pcr 2</th>
                            {{--<th>delete</th>--}}
                        </tr>
                        </thead>
                        <tbody>
                        @if(isset($childhealthcard4_results))
                            @php
                                $i=0
                            @endphp
                            @foreach($childhealthcard4_results as $childhealthcard4_results)
                                @php
                                    $i++;
                                @endphp
                                <tr>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{$i}}">
                                        VIEW
                                    </button>

                                <td>{{  $childhealthcard4_results-> mother}}</td>
                                <td>{{  $childhealthcard4_results->antibody }}</td>
                                <td>{{  $childhealthcard4_results-> pcr }}</td>
                                <td>{{  $childhealthcard4_results-> mother1 }}</td>
                                <td>{{  $childhealthcard4_results-> antibody1 }}</td>
                                <td>{{  $childhealthcard4_results-> pcr1 }}</td>
                                <td>{{  $childhealthcard4_results-> mother2 }}</td>
                                <td>{{  $childhealthcard4_results->antibody2 }}</td>
                                <td>{{  $childhealthcard4_results-> pcr2}}</td>
                                {{--<td><form role="form" action="/childhealthcard4_delete/{{$childhealthcard4_results->id}}" enctype="multipart/form-data" method="post" >@csrf--}}

                                        {{--<div>--}}
                                            {{--<button type="submit" class="btn btn-info btn-lg"  data-toggle="modal" data-target="#myModal">Delete</button>--}}
                                        {{--</div>--}}
                                    {{--</form></td>--}}
                                    <div class="modal fade" id="exampleModal{{$i}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">IDENTIFICATION OF THE EXPOSED CHILDREN AT 6 WEEKS OR SOON THEREAFTER</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div id="printableArea{{$i}}">
                                                        <h2>IDENTIFICATION OF THE EXPOSED CHILDREN AT 6 WEEKS OR SOON THEREAFTER</h2>
                                                        <p><b>Patient Name : </b>{{$patient->name}}</p>

                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="">mother</label>
{{  $childhealthcard4_results-> mother}}
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="">antibody</label>
{{  $childhealthcard4_results->antibody }}
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="">pcr</label>
{{  $childhealthcard4_results-> pcr }}
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="">mother 1</label>
{{  $childhealthcard4_results-> mother1 }}
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="">antibody 1</label>
{{  $childhealthcard4_results-> antibody1 }}
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="">pcr 1</label>
{{  $childhealthcard4_results-> pcr1 }}
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="">mother 2</label>
{{  $childhealthcard4_results-> mother2 }}
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="">antibody 2</label>
{{  $childhealthcard4_results->antibody2 }}
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="">pcr 2<</label>
{{  $childhealthcard4_results-> pcr2}}
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
                    <h4 class="modal-title">IDENTIFICATION OF THE EXPOSED CHILDREN AT 6 WEEKS OR SOON THEREAFTER</h4>
                </div>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="black">

                                </div>
                                <div class="card-content table-responsive">

                                    <div class="col-m-3 offset-md-6">
                                        <H3 class="mt-20 ">
                                            PUBLIC HEALTH
                                        </H3>
                                    </div>
                                    <form action="{{route('childhealthcard4_post', ['patient_id'=>$patient_id])}}" method="post" >{!! csrf_field() !!}
                                    <table class="table table-bordered">

                                            <h5>IDENTIFICATION OF THE EXPOSED CHILDREN AT 6 WEEKS OR SOON THEREAFTER</h5><br>
                                            <table class="table-responsive">
                                                <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>MOTHER SEROLOGY</th>
                                                    <th colspan="6">BABY SEROLOGY</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td>ANTIBODY</td>
                                                    <td>PCR</td>
                                                </tr>
                                                <tr>
                                                    <td>REACTIVE</td>
                                                    <td><input name="mother" type="text" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="antibody" type="text" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="pcr" type="text" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                </tr>
                                                <tr>
                                                    <td>NON-REACTIVE</td>
                                                    <td><input name="mother1" type="text" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="antibody1" type="text" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name='pcr1'  type="text" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                </tr>
                                                <tr>
                                                    <td>NON TESTED</td>
                                                    <td><input name="mother2" type="text" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="antibody2"  type="text" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="pcr2" type="text" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <br>
                                            <h5>CO-TRIMOXAZOLE PROPHYLAXIS FOR EXPOSED CHILDREN AT 6 WEEKS OR SOON THEREAFTER</h5>


                                            <table class="table-responsive">
                                                <thead>
                                                <tr>
                                                    <th>Age</th>
                                                    <th>Date Given</th>
                                                    <th>Quantity dispensed in mls</th>
                                                    <th>Date of the next appointment </th>
                                                    <th>Comments</th>
                                                </tr>
                                                </thead>
                                                <tbody>

                                                <tr>
                                                    <td>6 weeks</td>
                                                    <td><input name="6wk_date_given" type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="6wk_quantity_dispensed" type="number" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="6wk_date_appointment" type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><textarea name="6wk_comments" type="text" class="form-control" id="" aria-describedby="" placeholder=""></textarea></td>
                                                </tr>
                                                <tr>
                                                    <td>10 weeks</td>
                                                    <td><input name="10wk_date_given" type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="10wk_quantity_dispensed" type="number" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="10wk_date_appointment" type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><textarea name="10wk_comments" type="text" class="form-control" id="" aria-describedby="" placeholder=""></textarea></td>
                                                </tr>
                                                <tr>
                                                    <td>14 weeks</td>
                                                    <td><input name="14date_given" type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="14quantity_dispensed" type="number" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="14date_appointment" type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><textarea name="14comments" type="text" class="form-control" id="" aria-describedby="" placeholder=""></textarea></td>
                                                </tr>
                                                <tr>
                                                    <td>4 months</td>
                                                    <td><input name="4date_given" type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="4quantity_dispensed" type="number" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="4date_appointment" type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><textarea name="4comments" type="text" class="form-control" id="" aria-describedby="" placeholder=""></textarea></td>
                                                </tr>
                                                <tr>
                                                    <td>5 months</td>
                                                    <td><input name="5date_given" type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="5quantity_dispensed" type="number" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="5date_appointment" type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><textarea name="5comments" type="text" class="form-control" id="" aria-describedby="" placeholder=""></textarea></td>
                                                </tr>
                                                <tr>
                                                    <td>6 months</td>
                                                    <td><input name="6date_given" type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="6quantity_dispensed" type="number" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="6date_appointment" type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><textarea name="6comments" type="text" class="form-control" id="" aria-describedby="" placeholder=""></textarea></td>
                                                </tr>
                                                <tr>
                                                    <td>7 months</td>
                                                    <td><input name="7date_given" type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="7quantity_dispensed" type="number" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="7date_appointment" type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><textarea name="7comments" type="text" class="form-control" id="" aria-describedby="" placeholder=""></textarea></td>
                                                </tr>
                                                <tr>
                                                    <td>8 months</td>
                                                    <td><input name="8date_given" type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="8quantity_dispensed" type="number" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="8date_appointment" type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><textarea name="8comments" type="text" class="form-control" id="" aria-describedby="" placeholder=""></textarea></td>
                                                </tr>
                                                <tr>
                                                    <td>9 months</td>
                                                    <td><input name="9date_given" type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="9quantity_dispensed" type="number" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="9date_appointment" type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><textarea name="9comments" type="text" class="form-control" id="" aria-describedby="" placeholder=""></textarea></td>
                                                </tr>
                                                <tr>
                                                    <td>10 months</td>
                                                    <td><input name="10date_given" type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="10quantity_dispensed" type="number" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="10date_appointment" type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><textarea name="10comments" type="text" class="form-control" id="" aria-describedby="" placeholder=""></textarea></td>
                                                </tr>
                                                <tr>
                                                    <td>11 months</td>
                                                    <td><input name="11date_given" type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="11quantity_dispensed" type="number" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="11date_appointment" type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><textarea name="11comments" type="text" class="form-control" id="" aria-describedby="" placeholder=""></textarea></td>
                                                </tr>
                                                <tr>
                                                    <td>12 months</td>
                                                    <td><input name="12date_given" type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="12quantity_dispensed" type="number" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="12date_appointment" type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><textarea name="12comments" type="text" class="form-control" id="" aria-describedby="" placeholder=""></textarea></td>
                                                </tr>
                                                <tr>
                                                    <td>18 months</td>
                                                    <td><input name="18date_given" type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="18quantity_dispensed" type="number" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="18date_appointment" type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><textarea name="18comments" type="text" class="form-control" id="" aria-describedby="" placeholder=""></textarea></td>
                                                </tr>



                                                </tbody>
                                            </table>
                                            <br>
                                            <h5>IMMUNOLOGY STAGING FOR EXPOSED CHILDREN</h5>
                                            <table class="table-responsive">

                                                <thead>
                                                <tr>
                                                    <th>Child's Age</th>
                                                    <th>Date</th>
                                                    <th>HB</th>
                                                    <th>DBS/PCR</th>
                                                    <th>Antibody test</th>
                                                    <th colspan="2">%CD4 COUNT</th>
                                                    <th colspan="2">Total Lymphocyte Count</th>

                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td><p> <20% </td>
                                                    <td>>20%</td>
                                                    <td><3500/mm3</td>
                                                    <td>>3500mm3</td>
                                                </tr>
                                                <tr>
                                                    <td>6 weeks</td>
                                                    <td><input name="6wks_date_givendate" type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="6wks_date_givenhb" type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="6wks_date_givendbs_pcr" type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="6wks_date_givenantibody_test" type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="6wks_date_givencd4count<20" type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="6wks_date_givencd4count>20" type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="6wks_date_givenlymphocyte_count<3500" type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="6wks_date_givenlymphocyte_count>3500" type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>

                                                </tr>
                                                <tr>
                                                    <td>6 months</td>
                                                    <td><input name="6_date" type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="6_hb" type="text" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="6_dbs_pcr" type="text" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="6_antibody_test" type="text" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="6_cd4count<20" type="text" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="6_cd4count>20" type="text" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="6_lymphocyte_count<3500" type="text" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="6_lymphocyte_count>3500" type="text" class="form-control" id="" aria-describedby="" placeholder=""></td>

                                                </tr>
                                                <tr>
                                                    <td>12 months</td>
                                                    <td><input name="12_date" type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="12_hb" type="text" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="12_dbs_pcr" type="text" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="12_antibody_test" type="text" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="12_cd4count<20" type="text" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="12_cd4count>20" type="text" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="12_lymphocyte_count<3500" type="text" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="12_lymphocyte_count>3500" type="text" class="form-control" id="" aria-describedby="" placeholder=""></td>

                                                </tr>
                                                <tr>
                                                    <td>18 month</td>
                                                    <td><input name="18_date" type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="18_hb" type="text" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="18_dbs_pcr" type="text" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="18_antibody_test" type="text" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="18_cd4count<20" type="text" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="18_cd4count>20" type="text" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="18_lymphocyte_count<3500" type="text" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="18_lymphocyte_count>3500" type="text" class="form-control" id="" aria-describedby="" placeholder=""></td>

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
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
        </div>
    </div>

@endsection