@extends('layouts.master')
@section('content')
    @include('departments.clinical_services.inpatient.patient_file.patient_bio_information')
    <!-- Title &Breadcrumbs-->
    <div class="row page-titles">
        <div class="col-md-12 align-self-center">
            <h4 class="theme-cl offset-4">RESULTS:COMPLETED</h4>
        </div>
    </div>
    <div class="row page-titles">
        <div class="col-md-12 align-self-center">
            <h4 class="theme-cl">RADIOLOGY REPORT SHEET</h4>
        </div>
    </div>
    <!-- Title & Breadcrumbs-->

    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>VIEW RADIOLOGY REPORT SHEET</h4>
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
                                <th>DATE OF BIRTH</th>
                                <th>WD/CLINIC/PVT</th>
                                <th>PATIENT TELEPHONE NUMBER</th>
                                <th>APPOINTMENT DATE</th>
                                <th>TIME</th>
                                <th>PORTABLE</th>
                                <th>X-RAY NUMBER</th>
                                <th>INT NO</th>
                                <th>CHARGES</th>
                                <th>INVOICE NUMBER</th>
                                <th>RECEIPT/ C/S.No</th>
                                <th>NHIF NO</th>
                                <th>BRIEF CLINICAL SUMMARY</th>
                                <th>DATE OF LMP</th>
                                <th>TICK</th>
                                <th>SPECIFICATION</th>
                                <th>DOCTOR'S NAME</th>
                                <th>SIGNATURE</th>
                                <th>DATE</th>
                                <th>RADIOGRAPHER NAME</th>
                                <th>SIGNATURE</th>
                                <th>DATE</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(isset($radiology_report_sheet_results))

                                @php
                                    $i=0
                                @endphp

                                @foreach($radiology_report_sheet_results as $radiology_report_sheet_result)

                                    @php
                                        $i++;
                                    @endphp

                                    <tr>

                                        <td>
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{$i}}">PRINT VIEW</button>
                                        </td>

                                        <td>{{ $radiology_report_sheet_result->bio_date}}</td>
                                        <td>{{ $radiology_report_sheet_result->bio_ward}}</td>
                                        <td>{{ $radiology_report_sheet_result->bio_bed_number}}</td>
                                        <td>{{ $radiology_report_sheet_result->d_o_b}}</td>
                                        <td>{{ $radiology_report_sheet_result->wd_clinic_pvt}}</td>
                                        <td>{{ $radiology_report_sheet_result->pt_tel_no}}</td>
                                        <td>{{ $radiology_report_sheet_result->appointment_date}}</td>
                                        <td>{{ $radiology_report_sheet_result->time}}</td>
                                        <td>{{ $radiology_report_sheet_result->portable}}</td>
                                        <td>{{ $radiology_report_sheet_result->xray_no}}</td>
                                        <td>{{ $radiology_report_sheet_result->int_no}}</td>
                                        <td>{{ $radiology_report_sheet_result->charges}}</td>
                                        <td>{{ $radiology_report_sheet_result->invoice_number}}</td>
                                        <td>{{ $radiology_report_sheet_result->receipt_cs_no}}</td>
                                        <td>{{ $radiology_report_sheet_result->nhif_no}}</td>
                                        <td>{{ $radiology_report_sheet_result->brief_clinical_summary}}</td>
                                        <td>{{ $radiology_report_sheet_result->date_of_lmp}}</td>
                                        <td>{{ $radiology_report_sheet_result->tick}}</td>
                                        <td>{{ $radiology_report_sheet_result->specification}}</td>
                                        <td>{{ $radiology_report_sheet_result->doctors_name}}</td>
                                        <td>{{ $radiology_report_sheet_result->signature}}</td>
                                        <td>{{ $radiology_report_sheet_result->date_a}}</td>
                                        <td>{{ $radiology_report_sheet_result->radiographer_name}}</td>
                                        <td>{{ $radiology_report_sheet_result->signature_a}}</td>
                                        <td>{{ $radiology_report_sheet_result->date_b}}</td>
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
                                                        <h2>VIEW RADIOLOGY REPORT SHEET</h2>
                                                        <p><b>PATIENT NAME : </b>{{$patient->name}}</p>
                                                        <p><b>DATE : </b>{{$radiology_report_sheet_result->bio_date}}</p>
                                                        <p><b>WARD : </b>{{$radiology_report_sheet_result->bio_ward}}</p>
                                                        <p><b>BED NUMBER : </b>{{$radiology_report_sheet_result->bio_bed_number}}</p>
                                                        <p><b>DATE OF BIRTH : </b>{{$radiology_report_sheet_result->d_o_b}}</p>
                                                        <p><b>WD/CLINIC/PVT : </b>{{$radiology_report_sheet_result->wd_clinic_pvt}}</p>
                                                        <p><b>PATIENT TELEPHONE NUMBER : </b>{{$radiology_report_sheet_result->pt_tel_no}}</p>
                                                        <p><b>APPOINTMENT DATE : </b>{{$radiology_report_sheet_result->appointment_date}}</p>
                                                        <p><b>TIME : </b>{{$radiology_report_sheet_result->time}}</p>
                                                        <p><b>PORTABLE : </b>{{$radiology_report_sheet_result->portable}}</p>
                                                        <p><b>X-RAY NUMBER : </b>{{$radiology_report_sheet_result->xray_no}}</p>
                                                        <p><b>INT  : </b>{{$radiology_report_sheet_result->int_no}}</p>
                                                        <p><b>CHARGES : </b>{{$radiology_report_sheet_result->charges}}</p>
                                                        <p><b>INVOICE NUMBER : </b>{{$radiology_report_sheet_result->invoice_number}}</p>
                                                        <p><b>RECEIPT/ C/S.No : </b>{{$radiology_report_sheet_result->receipt_cs_no}}</p>
                                                        <p><b>NHIF NO : </b>{{$radiology_report_sheet_result->nhif_no}}</p>
                                                        <p><b>BRIEF CLINICAL SUMMAR : </b>{{$radiology_report_sheet_result->brief_clinical_summary}}</p>
                                                        <p><b>DATE OF LMP : </b>{{$radiology_report_sheet_result->date_of_lmp}}</p>
                                                        <p><b>TICK : </b>{{$radiology_report_sheet_result->tick}}</p>
                                                        <p><b>SPECIFICATION : </b>{{$radiology_report_sheet_result->specification}}</p>
                                                        <p><b>DOCTOR'S NAME : </b>{{$radiology_report_sheet_result->doctors_name}}</p>
                                                        <p><b>SIGNATURE : </b>{{$radiology_report_sheet_result->signature}}</p>
                                                        <p><b>DATE : </b>{{$radiology_report_sheet_result->date_a}}</p>
                                                        <p><b>RADIOGRAPHER NAME : </b>{{$radiology_report_sheet_result->radiographer_name}}</p>
                                                        <p><b>SIGNATURE : </b>{{$radiology_report_sheet_result->signature_a}}</p>
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
                                            <form action="{{route('radiology_report_sheet_patient_file_post',['patient_id'=>$patient_id])}}" method="post" >{!! csrf_field() !!}
                                                <div class="col-md-12 align-self-center">
                                                    <h4 class="theme-cl offset-4">RESULTS:PENDING</h4>
                                                </div>
                                                <br>
                                                <div class="align-self-center text-center">
                                                    <p id="demo"></p>
                                                    <script>
                                                        var d = new Date();
                                                        document.getElementById("demo").innerHTML = d;
                                                    </script>
                                                </div>
                                                <div class="">
                                                    <div class="offset-md-6">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <p>DATE:</p>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <input type="date" name="bio_date" id="myDate" class="form-control" placeholder="" readonly>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <p>WARD:</p>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <input type="text" name="bio_ward" class="form-control" placeholder="">
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
                                                </div>
                                                <div class="col-m-3 offset-md-5">
                                                    <H3 class="mt-20">
                                                        RADIOLOGY REQUEST FORM
                                                    </H3>
                                                </div>

                                                <table class=" table table-bordered">
                                                    <thead>
                                                    <tr>

                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>D.O.B<input type="date" name="d_o_b" class="form-control" placeholder=""></td>
                                                        <td>WD/CLINIC/PVT:<input type="text" name="wd_clinic_pvt" class="form-control" placeholder=""></td>
                                                        <td>PT.TEL.No.<input type="number" name="pt_tel_no" class="form-control" placeholder=""></td>

                                                    </tr>
                                                    </tbody>
                                                </table>
                                                <table class="table table-bordered">
                                                    <thead>
                                                    <tr>
                                                        <th>Appointment Date:<input type="date" name="appointment_date" class="form-control" placeholder=""></th>
                                                        <th>Time:<input type="time" name="time" class="form-control" placeholder=""></th>
                                                        <th>Portable:<input type="text" name="portable" class="form-control" placeholder=""></th>
                                                        <th>X-RAY No:<input type="number" name="xray_no" class="form-control" placeholder=""></th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td >INT No.<input type="number" name="int_no" class="form-control" placeholder=""></td>
                                                        <td>Charges<input type="number" name="charges" class="form-control" placeholder=""></td>
                                                        <td>INVOICE NUMBER:<input type="number" name="invoice_number" class="form-control" placeholder=""></td>
                                                        <td>RECEIPT/ C/S.No<input type="number" name="receipt_cs_no" class="form-control" placeholder=""></td>
                                                        <td>NHIF NO.<input type="text" name="nhif_no" class="form-control" placeholder=""></td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="5">Brief Clinical Summary:<textarea type="text" name="brief_clinical_summary" class="form-control" placeholder=""></textarea></td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2">Date of LMP<input type="date" name="date_of_lmp" class="form-control" placeholder=""></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                                <div class="col-m-3 offset-md-5">
                                                    <H3 class="mt-20">
                                                        Type of Investigation Requested:
                                                    </H3>
                                                </div>
                                                <table class="table table-bordered">
                                                    <thead>
                                                    <tr>
                                                        <th></th>
                                                        <th>Tick</th>
                                                        <th>Type of Investigation</th>
                                                        <th>Specification</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td><input type="checkbox" name="tick" class="form-control" placeholder=""></td>
                                                        <td>General radiography</td>
                                                        <td><input type="text" name="specification" class="form-control" placeholder=""></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                                <div class="row">
                                                    <div class="form-group row col-md-6">
                                                        <label for="staticEmail" class="col-sm-8 col-form-label">Requested by:Doctor's Name</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" name="doctors_name" class=" form-control" placeholder="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group row col-md-6">
                                                        <label for="staticEmail" class="col-sm-8 col-form-label">Signature</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" name="signature" class=" form-control" placeholder="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group row col-md-6">
                                                        <label for="staticEmail" class="col-sm-8 col-form-label">Date</label>
                                                        <div class="col-sm-10">
                                                            <input type="date" id="myDate1" name="date_a" readonly class=" form-control" placeholder="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <span class="row"> <span class="col-md-4">Requesting Doctor's Tel. No.:</span> <span class="col-md-8"> <input type="text" name="" class=" form-control" placeholder=""></span></span>
                                                <span class=""></span>
                                                <h5>INSTRUCTIONS</h5>
                                                <p>
                                                    1.Patients to avail previous Scans/X-Ray films during the procedure.<br>
                                                    2.Pelvic Ultra Sound and early Obsterics patients to have full bladder by taking(4-6) glasses of water 30 minutes before the procedure.<br>
                                                    3.Barium Meal /Abdominal Ultra Sound Scan /CT Scan the patients should starve for 6 hours before examination.<br>
                                                    4.Preparation for other specific examinations will be advised on booking the exam<br>
                                                    For official use:<br><br>
                                                </p>
                                                <div class="row">
                                                    <div class="form-group row col-md-6">
                                                        <label for="staticEmail" class="col-sm-8 col-form-label">Radiographer Name</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" name="radiographer_name" class=" form-control" placeholder="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group row col-md-6">
                                                        <label for="staticEmail" class="col-sm-8 col-form-label">Signature</label>
                                                        <div class="col-sm-10">
                                                            <input type="password" name="signature_a" class=" form-control" placeholder="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group row col-md-6">
                                                        <label for="staticEmail" class="col-sm-8 col-form-label">Date</label>
                                                        <div class="col-sm-10">
                                                            <input type="date" id="myDate2" name="date_b" readonly class=" form-control" placeholder="">
                                                        </div>
                                                    </div>
                                                </div>
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
