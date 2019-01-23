@extends('layouts.master')

@section('content')
    @include('departments.clinical_services.inpatient.patient_file.patient_bio_information')
    <!-- Title & Breadcrumbs-->
    <div class="row page-titles">
        <div class="col-md-12 align-self-center">
            <h4 class="theme-cl offset-4">RESULTS:COMPLETED</h4>
        </div>
    </div>
    <div class="row page-titles">
        <div class="col-md-12 align-self-center">
            <h4 class="theme-cl offset-4">LABORATORY REPORT</h4>
        </div>
    </div>
    <!-- Title & Breadcrumbs-->

    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="card">
                <div class="card-header text-center">
                    <h4 class="offset-4">VIEW LABORATORY REPORT SHEET</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable" class="table table-striped">
                            <thead>
                            <tr>
                                <th>PRINT VIEW</th>
                                <th>LAB PARTNER</th>
                                <th>LAB EXPERIMENT</th>
                                <th>STATE STANDARD</th>
                                <th>LAB DATE</th>
                                <th>INTRODUCTION</th>
                                <th>HYPOTHESIS</th>
                                <th>MATERIALS</th>
                                <th>PROCEDURES</th>
                                <th>DATA RECORDING</th>
                                <th>ANALYSIS</th>
                                <th>DISCUSSION</th>
                                <th>CONCLUSION</th>

                            </tr>
                            </thead>
                            <tbody>
                            @if(isset($laboratory_report_sheet_results))

                                @php
                                    $i=0
                                @endphp

                                @foreach($laboratory_report_sheet_results as $laboratory_report_sheet_result)

                                    @php
                                        $i++;
                                    @endphp


                                    <tr>

                                        <td>
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{$i}}">PRINT VIEW</button>
                                        </td>

                                        <td>{{$laboratory_report_sheet_result->name}}</td>
                                        <td>{{$laboratory_report_sheet_result->lab_partner}}</td>
                                        <td>{{$laboratory_report_sheet_result->lab_experiment}}</td>
                                        <td>{{$laboratory_report_sheet_result->state_standard}}</td>
                                        <td>{{$laboratory_report_sheet_result->lab_date}}</td>
                                        <td>{{$laboratory_report_sheet_result->introduction}}</td>
                                        <td>{{$laboratory_report_sheet_result->hypothesis}}</td>
                                        <td>{{$laboratory_report_sheet_result->materials}}</td>
                                        <td>{{$laboratory_report_sheet_result->procedures}}</td>
                                        <td>{{$laboratory_report_sheet_result->data_Recording}}</td>
                                        <td>{{$laboratory_report_sheet_result->analysis}}</td>
                                        <td>{{$laboratory_report_sheet_result->discussion}}</td>
                                        <td>{{$laboratory_report_sheet_result->conclusion}}</td>

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
                                                            <h2>VIEW LABORATORY REPORT SHEET</h2>
                                                            <p><b>PATIENT NAME : </b>{{$patient->name}}</p>
                                                            <p><b>LAB PARTNER : </b>{{$laboratory_report_sheet_result->lab_partner}}</p>
                                                            <p><b>LAB EXPERIMENT : </b>{{$laboratory_report_sheet_result->lab_experiment}}</p>
                                                            <p><b>STATE STANDARD : </b>{{$laboratory_report_sheet_result->state_standard}}</p>
                                                            <p><b>LAB DATE : </b>{{$laboratory_report_sheet_result->lab_date}}</p>
                                                            <p><b>INTRODUCTION : </b>{{$laboratory_report_sheet_result->introduction}}</p>
                                                            <p><b>HYPOTHESIS : </b>{{$laboratory_report_sheet_result->hypothesis}}</p>
                                                            <p><b>MATERIALS : </b>{{$laboratory_report_sheet_result->materials}}</p>
                                                            <p><b>PROCEDURES : </b>{{$laboratory_report_sheet_result->procedures}}</p>
                                                            <p><b>DATA RECORDING : </b>{{$laboratory_report_sheet_result->data_Recording}}</p>
                                                            <p><b>ANALYSIS : </b>{{$laboratory_report_sheet_result->analysis}}</p>
                                                            <p><b>DISCUSSION : </b>{{$laboratory_report_sheet_result->discussion}}</p>
                                                            <p><b>CONCLUSION : </b>{{$laboratory_report_sheet_result->conclusion}}</p>
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
                                            <h4 class="theme-cl offset-4">RESULTS:PENDING</h4>
                                        </div>
                                        <div class="card-header">
                                            <h4 class="header-title m-t-0">LABORATORY REPORT SHEET</h4>
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
                                            <form action="{{ route('laboratory_report_sheet_post',['patient_id'=>$patient_id])}}" enctype="multipart/form-data" method="post" >{{csrf_field()}}

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
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <p>Lab Partner(s):</p>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input id="Data_Recording" type="text" class="form-control" name="lab_partner" >
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <p>Lab Experiment:</p>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input id="Data_Recording" type="text" class="form-control" name="lab_experiment" >
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <p>State Standard:</p>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input id="Data_Recording" type="text" class="form-control" name="state_standard" >
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <p>Lab Date:</p>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input id="Data_Recording" type="date" class="form-control" name="lab_date" >
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="form-group row">
                                                    <label for="Introduction" class="col-md-6 col-form-label text-md-right">Introduction: (What do you expect to learn? What is the purpose of this lab?):</label>

                                                    <div class="col-md-6">
                                                        <input id="Introduction" type="text" class="form-control" name="introduction">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="Hypothesis" class="col-md-6 col-form-label text-md-right">Hypothesis: (Predict the outcome(s) of the experiment, must be in an “if…then format.):</label>

                                                    <div class="col-md-6">
                                                        <input id="Hypothesis" type="text" class="form-control" name="hypothesis">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="Materials" class="col-md-6 col-form-label text-md-right">Materials: (What equipment and materials did you need for this lab assignment? ):</label>

                                                    <div class="col-md-6">
                                                        <input id="Materials" type="text" class="form-control" name="materials">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="Procedures" class="col-md-6 col-form-label text-md-right">Procedures: (What steps did you take to accomplish this lab assignment?):</label>

                                                    <div class="col-md-6">
                                                        <input id="Procedures" type="text" class="form-control" name="procedures">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="Data_Recording" class="col-md-6 col-form-label text-md-right">Data Recording: (Record the data that is required at each step of the lab: tables, charts, graphs, sketches, etc.) :</label>

                                                    <div class="col-md-6">
                                                        <input id="Data_Recording" type="text" class="form-control" name="data_Recording">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="Analysis" class="col-md-6 col-form-label text-md-right">Analysis: (Explain you data in words.):</label>

                                                    <div class="col-md-6">
                                                        <input id="Analysis" type="text" class="form-control" name="analysis">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="Discussion" class="col-md-6 col-form-label text-md-right">Discussion: (Discuss what happened in the lab.):</label>

                                                    <div class="col-md-6">
                                                        <input id="Discussion" type="text" class="form-control" name="discussion">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="Conclusion" class="col-md-6 col-form-label text-md-right">Conclusion: (What did you learn? What conclusions can you draw form the results of this lab assignment?):</label>

                                                    <div class="col-md-6">
                                                        <input id="Conclusion" type="text" class="form-control" name="conclusion">
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
