@extends('layouts.master')

@section('content')
    @include('departments.clinical_services.inpatient.patient_file.patient_bio_information')
    <!-- Title & Breadcrumbs-->
    <div class="row page-titles">
        <div class="col-md-12 align-self-center">
            <h4 class="theme-cl">ALLERGY FORM</h4>
        </div>
    </div>
    <!-- Title & Breadcrumbs-->

    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>VIEW ALLERGY FORM</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable" class="table table-striped table-bordered table-responsive">
                            <thead>
                            <tr>
                                <th>PRINT VIEW</th>
                                <th>DATE</th>
                                <th>WARD</th>
                                <th>BED NUMBER</th>
                                <th>ADMISSION DATE</th>
                                <th>PENINCILLIN</th>
                                <th>ALLERGY</th>
                                <th>HYDROCORTISONE</th>
                                <th>SIGNATURE</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(isset($allergyform_results))

                                @php
                                    $i=0
                                @endphp

                                @foreach($allergyform_results as $allergyform_result)

                                    @php
                                        $i++;
                                    @endphp

                                    <tr>

                                        <td>
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{$i}}">PRINT VIEW</button>
                                        </td>

                                        <td>{{ $allergyform_result->bio_date}}</td>
                                        <td>{{ $allergyform_result->bio_ward}}</td>
                                        <td>{{ $allergyform_result->bio_bed_number}}</td>
                                        <td>{{ $allergyform_result->admissiondate}}</td>
                                        <td>{{ $allergyform_result->penincillin}}</td>
                                        <td>{{ $allergyform_result->allergy}}</td>
                                        <td>{{ $allergyform_result->hydrocortisone}}</td>
                                        <td>{{ $allergyform_result->signature}}</td>
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
                                                        <h2>VIEW ALLERGY FORM</h2>
                                                        <p><b>PATIENT NAME : </b>{{$patient->name}}</p>
                                                        <p><b>DATE : </b>{{$allergyform_result->bio_date}}</p>
                                                        <p><b>WARD : </b>{{$allergyform_result->bio_ward}}</p>
                                                        <p><b>BED NUMBER : </b>{{$allergyform_result->bio_bed_number}}</p>
                                                        <p><b>ADMISSION DATE : </b>{{$allergyform_result->admissiondate}}</p>
                                                        <p><b>PENINCILLIN : </b>{{$allergyform_result->penincillin}}</p>
                                                        <p><b>ALLERGY : </b>{{$allergyform_result->allergy}}</p>
                                                        <p><b>HYDROCORTISONE : </b>{{$allergyform_result->hydrocortisone}}</p>
                                                        <p><b>SIGNATURE : </b>{{$allergyform_result->signature}}</p>
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
                        <button class="btn btn-success" data-toggle="modal" data-target="#myModal">Add Records</button>
                        {{--<button class="btn btn-info" data-toggle="modal" data-target="#myModal">Print</button>--}}
                    </div>
                </div>
                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog modal-lg">

                        <!— Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">QUIT</h4>
                            </div>
                            <div class="modal-body">

                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="container">
                                            <form action="{{route('allergyform_post',['patient_id'=>$patient_id])}}" method="post" >{!! csrf_field() !!}
                                                <br>
                                                <div class="align-self-center text-center">
                                                    <p id="demo"></p>
                                                    <script>
                                                        var d = new Date();
                                                        document.getElementById("demo").innerHTML = d;
                                                    </script>
                                                </div>

                                                    <div class="offset-md-6">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <p>DATE:</p>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <input type="date" name="bio_date" class="form-control" id="myDate" placeholder="click to enter date" readonly>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <p>WARD:</p>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <input type="text" name="bio_ward" class="form-control" placeholder="click to enter ward number">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <p>BED NUMBER:</p>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <input type="text" name="bio_bed_number" class="form-control" placeholder="click to enter bed number">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <p></p>
                                                            </div>
                                                            <div class="col-md-6">
                                                              <input name="administration_patient_informations_id" type="text" class="form-control d-none" value="{{$patient_id}}">
                                                            </div>
                                                         </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <p></p>
                                                            </div>
                                                            <div class="col-md-6">
                                                              <input name="institution_id" type="text" class="form-control d-none" value="{{ Auth::user()->institution->id }}">
                                                            </div>
                                                         </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <p></p>
                                                            </div>
                                                            <div class="col-md-6">
                                                              <input name="user_id" type="text" value="{{ Auth::user()->id }}" class="form-control d-none">
                                                            </div>
                                                         </div>
                                                        </div>



                                                <div class="col-m-3 offset-md-3">
                                                    <H3 class="mt-20">
                                                        ALLERGY FORM
                                                    </H3>
                                                    </div>
                                                    <table class="table table-bordered">
                                                        <tbody>
                                                        <tr class="col-md-4">
                                                            <td>
                                                                <div class="row">
                                                                    <div class="form-group row col-md-12">
                                                                        <label for="staticEmail" class="col-sm-6 col-form-label">DATE OF ADMISSION</label>
                                                                        <div class="col-sm-5">
                                                                            <input type="date" name="admissiondate" class=" form-control" placeholder="">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <br>
                                                                <span class="row"> <span class="col-md-12">1.Have you ever at any tim e had a reaction to any drug e.g penincillin? If so give details</span> <span class="col-md-12"> <textarea type="text" name="penincillin" class=" form-control" placeholder=""></textarea></span></span>

                                                                <span class="row"> <span class="col-md-12">2.Do you suffer from any allergy? If so give dtails</span> <span class="col-md-12"> <textarea type="text" name="allergy" class=" form-control" placeholder=""></textarea></span></span>

                                                                <span class="row"> <span class="col-md-12">3.Have you ever received any treatment with a cortico steroid e.g Hydrocortisone in the last three months?</span> <span class="col-md-12"> <textarea type="text" name="hydrocortisone" class=" form-control" placeholder=""></textarea></span></span>

                                                                <br><br><br>

                                                                <div class="row">
                                                                    <div class="form-group row col-md-6">
                                                                        <label for="staticEmail" class="col-sm-8 col-form-label">Patient's Signature</label>
                                                                        <div class="col-sm-8">
                                                                            <input type="password" name="signature" class=" form-control" placeholder="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>

                                        </tbody>
                                        </table>
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
