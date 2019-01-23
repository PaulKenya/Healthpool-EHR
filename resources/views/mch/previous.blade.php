@extends('layouts.master')

@section('content')
      @include('departments.clinical_services.inpatient.patient_file.patient_bio_information')
    <div class="row page-titles">
        <div class="col-md-12 align-self-center text-center">
            <h4 class="theme-cl">  PREVIOUS PREGNANCY </h4>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h4>  PREVIOUS PREGNANCY </h4>
        </div>
        <div class="card-body">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="datatable" class="table table-bordered">
                        <thead>
                        <tr>
                            <th>VIEW</th>
                            <th>pregnancy order</th>
                            <th> year</th>
                            <th>place of delivery</th>
                            <th>maturity </th>
                            <th>duration of labour</th>
                            <th>type of delivery</th>
                            <th>weight</th>\
                            <th> sex</th>
                            <th>outcome</th>
                            <th>perpetium</th>
                            {{--<th>delete</th>--}}

                        </tr>
                        </thead>
                        <tbody>
                        @if(isset($previousreport_results))
                            @php
                                $i=0
                            @endphp
                            @foreach($previousreport_results as $previousreport_result)
                                @php
                                    $i++;
                                @endphp
                                <tr>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{$i}}">
                                        VIEW
                                    </button>
                                <td>{{  $previousreport_result->pregnancyorder}}</td>
                                <td>{{  $previousreport_result-> year}}</td>
                                <td>{{  $previousreport_result->placeofdelivery}}</td>
                                <td>{{  $previousreport_result->maturity}}</td>
                                <td>{{  $previousreport_result->durationoflabour}}</td>
                                <td>{{  $previousreport_result->typeofdelivery}}</td>
                                <td>{{  $previousreport_result->weight}}</td>
                                <td>{{  $previousreport_result-> sex}}</td>
                                <td>{{  $previousreport_result->outcome}}</td>
                                <td>{{  $previousreport_result->perpetium}}</td>
                                {{--<td><form role="form" action="/previous_delete/{{$previousreport_result->id}}" enctype="multipart/form-data" method="post" >@csrf--}}

                                        {{--<div>--}}
                                            {{--<button type="submit" class="btn btn-info btn-lg"  data-toggle="modal" data-target="#myModal">Delete</button>--}}
                                        {{--</div>--}}
                                    {{--</form></td>--}}
                                    <div class="modal fade" id="exampleModal{{$i}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">PREVIOUS PREGNANCY</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div id="printableArea{{$i}}">
                                                        <h2>PREVIOUS PREGNANCY</h2>
                                                        <p><b>Patient Name : </b>{{$patient->name}}</p>

                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="">pregnancy order</label>
{{  $previousreport_result->pregnancyorder}}
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="">year</label>
{{  $previousreport_result-> year}}
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="">place of delivery</label>
{{  $previousreport_result->placeofdelivery}}
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="">maturity</label>
{{  $previousreport_result->maturity}}
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="">duration of labour</label>
{{  $previousreport_result->durationoflabour}}
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="">type of delivery</label>
{{  $previousreport_result->typeofdelivery}}
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="">weight</label>
{{  $previousreport_result->weight}}
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="">sex</label>
{{  $previousreport_result-> sex}}
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="">outcome</label>
{{  $previousreport_result->outcome}}
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="">perpetium</label>
{{  $previousreport_result->perpetium}}
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
                    <h4 class="modal-title">  PREVIOUS PREGNANCY </h4>
                </div>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="black">

                                    <p class="category">public health</p>
                                </div>
                                <div class="card-content table-responsive">

                                    <div class="col-m-3 offset-md-2">
                                        <H3 class="mt-20 ">
                                            PUBLIC HEALTH
                                        </H3>
                                    </div>
                                    <form action="{{route('previous_post',['patient_id'=>$patient_id])}}" method="post" >{!! csrf_field() !!}
                                    <table class="table table-bordered">
                                        <H3 class="mt-20 ">
                                           PREVIOUS PREGNANCY
                                        </H3>
                                </div>

                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th colspan="10" >PREVIOUS PREGNANCY</th>
                                        </tr>
                                        <tr>
                                            <th scope="col">PREGNANCY ORDER</th>
                                            <th scope="col">YEAR</th>
                                            <th scope="col">PLACE OF DELIVERY</th>
                                            <th scope="col">MATURITY</th>
                                            <th scope="col">DURATION OF LABOUR</th>
                                            <th scope="col">TYPE OF DELIVERY</th>
                                            <th scope="col">WEIGHT(kg)</th>
                                            <th scope="col">SEX</th>
                                            <th scope="col">OUTCOME</th>
                                            <th scope="col">PUERPERIUM</th>
                                        </tr>
                                        </thead>

                                        <tbody>

                                        <tr>
                                            <td> <input type="date" id="myDate" name="pregnancyorder" readonly class="form-control" placeholder=""></td>
                                           <td> <input type="text" name="year" class="form-control" placeholder=""></td>
                                           <td> <input type="text" name="placeofdelivery" class="form-control" placeholder=""></td>
                                          <td>  <input type="text" name="maturity" class="form-control" placeholder=""></td>
                                           <td> <input type="text" name="durationoflabour" class="form-control" placeholder=""></td>
                                          <td>  <input type="text" name="typeofdelivery" class="form-control" placeholder=""></td>
                                          <td>  <input type="text" name="weight" class="form-control" placeholder=""></td>
                                          <td>  <div class="form-group" name="sex">
                                                <div class="form-check form-check-inline  col-form-label">
                                                    <input class="form-check-input" type="radio" name="sex" id="inlineRadio1" value="male">
                                                    <label class="form-check-label" for="inlineRadio1">Male</label>
                                                </div>
                                                  <div class="form-check form-check-inline  col-form-label">
                                                      <input class="form-check-input" type="radio" name="sex" id="female" value="option2">
                                                      <label class="form-check-label" for="inlineRadio2">Female</label>
                                                  </div>
                                              </div>
                                          </td>
                                            <td>  <input type="text" name="outcome" class="form-control" placeholder=" "></td>
                                            <td>  <input type="text" name="perpetium" class="form-control" placeholder=""></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                            </div>


                                        </tr>



                                        </tbody>
                                    </table>


                            <input name="administration_patient_informations_id" type="text" class="form-control d-none" value="{{$patient_id}}">
                            <input name="institution_id" type="text"  class="form-control d-none" value="{{ Auth::user()->institution->id }}">
                            <input name="user_id" type="text" value="{{ Auth::user()->id }}" class="form-control d-none">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Submit</button>
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

@endsection