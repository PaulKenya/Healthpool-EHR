@extends('layouts.master')

@section('content')
    @include('departments.clinical_services.inpatient.patient_file.patient_bio_information')
    <!-- Title & Breadcrumbs-->
    <div class="row page-titles">
        <div class="col-md-12 align-self-center">
            <h4 class="theme-cl offset-4">REQUESTS:COMPLETED</h4>
        </div>
    </div>
    <div class="row page-titles">
        <div class="col-md-12 align-self-center">
            <h4 class="theme-cl offset-4">SAMPLES</h4>
        </div>
    </div>
    <!-- Title & Breadcrumbs-->

    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="card">
                <div class="card-header text-center">
                    <h4 class="offset-4">VIEW SAMPLES</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable" class="table table-striped">
                            <thead>
                            <tr>
                                <th>PRINT VIEW</th>
                                <th>DATE SAMPLE COLLECTED</th>
                                <th>NAME OF SAMPLE COLLECTED</th>
                                <th>NAME OF LAB TECHNICIAN</th>
                                <th>SAMPLE AVAILABILITY</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(isset($laboratory_sample_form_result))

                                @php
                                    $i=0
                                @endphp

                                @foreach($laboratory_sample_form_result as $laboratory_sample_form_resultss)

                                    @php
                                        $i++;
                                    @endphp

                                    <tr>

                                        <td>
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{$i}}">PRINT VIEW</button>
                                        </td>

                                        <td>{{$laboratory_sample_form_resultss->date}}</td>
                                        <td>{{$laboratory_sample_form_resultss->sample_name}}</td>
                                        <td>{{$laboratory_sample_form_resultss->tech_name}}</td>
                                        <td>{{$laboratory_sample_form_resultss->sample_availability}}</td>
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
                                                        <h2>VIEW LABORATORY SAMPLE FORM</h2>
                                                        <p><b>PATIENT NAME : </b>{{$patient->name}}</p>
                                                        <p><b>DATE SAMPLE COLLECTED : </b>{{$laboratory_sample_form_resultss->date}}</p>
                                                        <p><b>NAME OF SAMPLE COLLECTED : </b>{{$laboratory_sample_form_resultss->sample_name}}</p>
                                                        <p><b>NAME OF LAB TECHNICIAN : </b>{{$laboratory_sample_form_resultss->tech_name}}</p>
                                                        <p><b>SAMPLE AVAILABILITY : </b>{{$laboratory_sample_form_resultss->sample_availability}}</p>
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


                <div class="col-md-4 offset-5">
                    <div class="content">
                        <button class="btn btn-success" data-toggle="modal" data-target="#myModal">Add Records</button>
                        {{--<button class="btn btn-info" data-toggle="modal" data-target="#myModal">Print</button>--}}
                    </div>
                </div>
                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog modal-lg">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">QUIT</h4>
                            </div>
                            <div class="modal-body">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="col-md-12 align-self-center">
                                            <h4 class="theme-cl offset-4">REQUESTS:PENDING</h4>
                                        </div>
                                        <div class="card-header">
                                            <h4 class="header-title m-t-0">SAMPLE FORM</h4>
                                        </div>
                                        <br>
                                        <div class="align-self-center text-center">
                                            <p id="demo"></p>
                                            <script>
                                                var d = new Date();
                                                document.getElementById("demo").innerHTML = d;
                                            </script>
                                        </div>
                                        <br>
                                        <div class="card-body">
                                            <form action="{{ route('laboratory_sample_form_post',['patient_id'=>$patient_id])}}" enctype="multipart/form-data" method="post" >{{csrf_field()}}

                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <p></p>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input name="administration_patient_informations_id" type="text" class="form-control d-none" value="{{$patient_id}}">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <p></p>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input name="institution_id" type="text" class="form-control d-none" value="{{ Auth::user()->institution->id }}">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <p></p>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input name="user_id" type="text" value="{{ Auth::user()->id }}" class="form-control d-none">
                                                    </div>
                                                </div>
                                                <br>

                                                <div class="form-group row">
                                                    <label for="date" class="col-md-6 col-form-label text-md-right">DATE SAMPLE COLLECTED:</label>

                                                    <div class="col-md-6">
                                                        <input id="date" type="date" class="form-control" name="date" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="sample_name" class="col-md-6 col-form-label text-md-right">NAME OF SAMPLE COLLECTED:</label>

                                                    <div class="col-md-6">
                                                        <input id="sample_name" type="text" class="form-control" name="sample_name" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="tech_name" class="col-md-6 col-form-label text-md-right">NAME OF LAB TECHNICIAN:</label>

                                                    <div class="col-md-6">
                                                        <input id="tech_name" type="text" class="form-control" name="tech_name" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="sample_availability" class="col-md-6 col-form-label text-md-right">SAMPLE AVAILABILITY:</label>

                                                    <div class="col-md-6">
                                                        <input class="form-check-input" type="radio" name="sample_availability" value="COLLECTED">COLLECTED
                                                        <br>
                                                        <input class="form-check-input" type="radio" name="sample_availability" value="NOT COLLECTED">NOT COLLECTED
                                                    </div>
                                                </div>

                                                <button type="submit" class="btn btn-primary">Submit</button>
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
