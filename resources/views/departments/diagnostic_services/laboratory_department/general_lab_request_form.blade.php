@extends('layouts.master')

@section('content')
    @include('departments.clinical_services.inpatient.patient_file.patient_bio_information')

<div class="row page-titles">
    <div class="col-md-12 align-self-center text-center">
        <h4 class="theme-cl">GENERAL LABORATORY REQUEST FORM</h4>
    </div>
</div>
<div class="card"> 
        <div class="card-header">
            <h4>GENERAL LABORATORY REQUEST FORM</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="datatable" class="table table-bordered">
                    <thead>
                    <tr>
                        <th>PRINT VIEW</th>
                        <th>TO BE SENT TO</th>
                        <th>TEL NO</th>
                        <th>NHIF NO</th>
                        <th>INVOICE NO</th>
                        <th>RECEIPT NO </th>
                        <th>SPECIMEN TYPE</th>
                        <th>REQUESTING CLINICIAN NAME</th>
                        <th>SIGNATURE</th>
                        <th>TIME</th>
                        <th>TEL:</th>
                        <th>PRIORITY</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(isset($generallabrequestform_results))

                        @php
                            $i=0
                        @endphp

                        @foreach($generallabrequestform_results as $generallabrequestform_result)

                            @php
                                $i++;
                            @endphp

                            <tr>

                                <td>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{$i}}">PRINT VIEW</button>
                                </td>

                                <td>{{ $generallabrequestform_result->to_be_sent_to }}</td>
                                <td>{{ $generallabrequestform_result->tel_no }}</td>
                                <td>{{ $generallabrequestform_result->nhif_no }}</td>
                                <td>{{ $generallabrequestform_result->invoice_no }}</td>
                                <td>{{ $generallabrequestform_result->receipt_no }}</td>
                                <td>{{ $generallabrequestform_result->specimen_type }}</td>
                                <td>{{ $generallabrequestform_result->requesting_clinician_name }}</td>
                                <td>{{ $generallabrequestform_result->sign }}</td>
                                <td>{{ $generallabrequestform_result->time }}</td>
                                <td>{{ $generallabrequestform_result->tel }}</td>
                                <td>{{ $generallabrequestform_result->priority }}</td>
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
                                                <h2>VIEW  FORM</h2>
                                                <p><b>PATIENT NAME : </b>{{$patient->name}}</p>
                                                <p><b>TO BE SENT TO : </b>{{$generallabrequestform_result->to_be_sent_to }}</p>
                                                <p><b>TEL NO : </b>{{$generallabrequestform_result->tel_no }}</p>
                                                <p><b>NHIF NO : </b>{{$generallabrequestform_result->nhif_no }}</p>
                                                <p><b>INVOICE NO : </b>{{$generallabrequestform_result->invoice_no }}</p>
                                                <p><b>RECEIPT NO  : </b>{{$generallabrequestform_result->receipt_no }}</p>
                                                <p><b>SPECIMEN TYPE : </b>{{$generallabrequestform_result->specimen_type }}</p>
                                                <p><b>REQUESTING CLINICIAN NAME : </b>{{$generallabrequestform_result->requesting_clinician_name }}</p>
                                                <p><b>SIGNATURE : </b>{{$generallabrequestform_result->sign }}</p>
                                                <p><b>TIME : </b>{{$generallabrequestform_result->time }}</p>
                                                <p><b>TEL : </b>{{$generallabrequestform_result->tel }}</p>
                                                <p><b>PRIORITY : </b>{{$generallabrequestform_result->priority }}</p>
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
                        <br>
                    </div>
                    <div class="modal-body">

                        <div class="col-md-12">
                            <div class="card">

        <div class="container-fluid">
        <h1 class="text-center">GENERAL LABORATORY REQUEST FORM</h1>

            <div class="align-self-center text-center">
                <p id="demo"></p>
                <script>
                    var d = new Date();
                    document.getElementById("demo").innerHTML = d;
                </script>
            </div>

        <br>
            <form action="{{route('generallabrequestform_post',['patient_id'=>$patient_id])}}" method="post" >{!! csrf_field() !!}
                <br>
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
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="" >To be sent to:</label>
                    <input type="text" class="form-control" name="to_be_sent_to">
                </div>
                <div class="form-group col-md-6">
                    <label for="">Tel. No.</label>
                    <input type="number" class="form-control" name="tel_no">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="">NHIF No.</label>
                    <input type="number" class="form-control" name="nhif_no">
                </div>
                <div class="form-group col-md-3">
                    <label for="">Invoice No.</label>
                    <input type="number" class="form-control" name="invoice_no">
                </div>
                <div class="form-group col-md-3">
                    <label for="">Receipt No.</label>
                    <input type="number" class="form-control" name="receipt_no">
                </div>
                <div class="form-group col-md-3">
                    <label for="">Specimen type:</label>
                    <input type="text" class="form-control" name="specimen_type">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="" >Requesting clinician Name:</label>
                    <input type="text" class="form-control" name="requesting_clinician_name">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="">Signature:</label>
                            <input type="text" class="form-control" name="sign">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Time:</label>
                            <input type="time" class="form-control" name="time">
                        </div>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <br>
                    <br>
                    <br>
                    <label for="">Tel:</label>
                    <input type="number" class="form-control" name="tel">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-8">
                    <label class="col-md-2" for="">Priority</label>
                    <div class="form-group col-md-3 form-check">
                        <input class="form-check-input" type="radio" name="priority" value="Urgent">
                        <div class="form-check-label">Urgent</div>
                        <input class="form-check-input" type="radio" name="priority" value="Routine">
                        <div class="form-check-label">Routine</div>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="">Clinical Information/Provisional Dx:</label>
                    <textarea class="form-control" name="clinician_information"></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th colspan="2">BIOCHEMISTRY</th>
                                <th>MICROBIOLOGY</th>
                                <th>IMMUNOLOGY</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label" name="ubc" value="True">
                                        <label class="form-check-label">UBC</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label" name="liver_function_tests" value="True">
                                        <label class="form-check-label">Liver function tests</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label" name="fasting_lipid_profile" value="True">
                                        <label class="form-check-label">Fasting Lipid Profile</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label" name="amylase" value="True">
                                        <label class="form-check-label">Amylase</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label" name="lipase" value="True">
                                        <label class="form-check-label">Lipase</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label" name="total_billirubin" value="True">
                                        <label class="form-check-label">Total Billirubin</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label" name="direct_billirubin" value="True">
                                        <label class="form-check-label">Direct Billirubin</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label" name="bone_chemistry" value="True">
                                        <label class="form-check-label">Bone Chemistry</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label" name="creatinine_kinase" value="True">
                                        <label class="form-check-label">Creatinine Kinase(CK)</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label" name="uric_acid" value="True">
                                        <label class="form-check-label">Uric Acid</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label" name="ck_mb" value="True">
                                        <label class="form-check-label">CK-MB</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label" name="hba1c" value="True">
                                        <label class="form-check-label">HbA1C</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label" name="fbs" value="True">
                                        <label class="form-check-label">FBS</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label" name="rbs" value="True">
                                        <label class="form-check-label">RBS</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label" name="lactate" value="True">
                                        <label class="form-check-label">Lactate</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label" name="ldh" value="True">
                                        <label class="form-check-label">LDH</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label" name="fluid_chemistry" value="True">
                                        <label class="form-check-label">Fluid chemistry</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label" name="csf_chemistry" value="True">
                                        <label class="form-check-label">CSF Chemistry</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label" name="d_dimers" value="True">
                                        <label class="form-check-label">D-Dimers</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label" name="crp" value="True">
                                        <label class="form-check-label">CRP</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label" name="csf_microprotein" value="True">
                                        <label class="form-check-label">CSF Microprotein</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label" name="csf_sugar" value="True">
                                        <label class="form-check-label">CSF Sugar</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label" name="urine_microalbumin" value="True">
                                        <label class="form-check-label">Urine Microalbumin</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label" name="blood_gas_analysis" value="True">
                                        <label class="form-check-label">Blood Gas Analysis</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label" name="neonatal_billirubin" value="True">
                                        <label class="form-check-label">Neonatal Billirubin</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label" name="pev_hb" value="True">
                                        <label class="form-check-label">Pev/Hb</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label" name="procalcitonin" value="True">
                                        <label class="form-check-label">Procalcitonin</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label" name="cyclosporine" value="True">
                                        <label class="form-check-label">Cyclosporine</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label" name="tacrolimus" value="True">
                                        <label class="form-check-label">Tacrolimus</label>
                                    </div>
                                </td>
                                <td>
                                    <p><b><u>Endocrinology</u></b></p>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label" name="thyroid_function_test" value="True">
                                        <label class="form-check-label">Thyroid Function Test</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label" name="tsh" value="True">
                                        <label class="form-check-label">TSH</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label" name="b_hcg" value="True">
                                        <label class="form-check-label">B-HCG</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label" name="fsh" value="True">
                                        <label class="form-check-label">FSH</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label" name="lh" value="True">
                                        <label class="form-check-label">LH</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label" name="oestradiol" value="True">
                                        <label class="form-check-label">Oestradiol(E2)</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label" name="progesterone" value="True">
                                        <label class="form-check-label">Progesterone</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label" name="prolactin" value="True">
                                        <label class="form-check-label">Prolactin</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label" name="testosterone" value="True">
                                        <label class="form-check-label">Testosterone</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label" name="afp" value="True">
                                        <label class="form-check-label">AFP</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label" name="pth" value="True">
                                        <label class="form-check-label">PTH</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label" name="cortisol_am" value="True">
                                        <label class="form-check-label">Cortisol AM</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label" name="cortisol_pm" value="True">
                                        <label class="form-check-label">Cortisol PM</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label" name="cea" value="True">
                                        <label class="form-check-label">CEA</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label" name="ca_125" value="True">
                                        <label class="form-check-label">CA 125</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label" name="ca_15_3" value="True">
                                        <label class="form-check-label">CA 15-3</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label" name="ca_19_9" value="True">
                                        <label class="form-check-label">CA 19-9</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label" name="tpsa" value="True">
                                        <label class="form-check-label">TPSA</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label" name="fpsa" value="True">
                                        <label class="form-check-label">FPSA</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label" name="ferritin" value="True">
                                        <label class="form-check-label">FERRITIN</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label" name="vit_b_12" value="True">
                                        <label class="form-check-label">VIT B-12</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label" name="folates" value="True">
                                        <label class="form-check-label">Folates</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label" name="troponin_i" value="True">
                                        <label class="form-check-label">TROPONIN I</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label" name="troponin_t" value="True">
                                        <label class="form-check-label">TROPONIN T</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label" name="troponin_hs" value="True">
                                        <label class="form-check-label">TROPONIN HS</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label" name="growth_hormone" value="True">
                                        <label class="form-check-label">Growth Hormone</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label" name="vitamin_d" value="True">
                                        <label class="form-check-label">Vitamin D</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label" name="dhea_s" value="True">
                                        <label class="form-check-label">DHEA-S</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label" name="myoglobin" value="True">
                                        <label class="form-check-label">MYOGLOBIN</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label" name="routine_mc_s" value="True">
                                        <label class="form-check-label">Routine MC&S</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label" name="csf_cell_count_mc_s" value="True">
                                        <label class="form-check-label">CSF cell count MC&S</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label" name="blood_culture" value="True">
                                        <label class="form-check-label">Blood culture</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label" name="fungal_m_c" value="True">
                                        <label class="form-check-label">Fungal M&C</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label" name="urine_routine" value="True">
                                        <label class="form-check-label">Urine routine</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label" name="urine_mc_s" value="True">
                                        <label class="form-check-label">Urine MC&S</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label" name="stool_mc_s" value="True">
                                        <label class="form-check-label">Stool MC&S</label>
                                    </div>
                                    <p><b><u>TB Investigation</u></b></p>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label" name="microscopy" value="True">
                                        <label class="form-check-label">Microscopy</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label" name="culture" value="True">
                                        <label class="form-check-label">Culture</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label" name="sensitivity" value="True">
                                        <label class="form-check-label">Sensitivity</label>
                                    </div>
                                    <p><b><u>VIROLOGY</u></b></p>
                                    <p>HIV testing</p>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label" name="hiv_serology" value="True">
                                        <label class="form-check-label">HIV serology</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label" name="hiv_viral_load" value="True">
                                        <label class="form-check-label">HIV viral load</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label" name="pcr_hiv" value="True">
                                        <label class="form-check-label">PCR: HIV</label>
                                    </div>
                                    <p>Hepatitis serology</p>
                                    <p>Y Clinical hepatitis</p>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label" name="a" value="True">
                                        <label class="form-check-label">A</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label" name="b" value="True">
                                        <label class="form-check-label">B</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label" name="c" value="True">
                                        <label class="form-check-label">C</label>
                                    </div>
                                    <p>Other serology</p>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label" name="cmv" value="True">
                                        <label class="form-check-label">CMV</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label" name="ebv" value="True">
                                        <label class="form-check-label">EBV</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label" name="hsv" value="True">
                                        <label class="form-check-label">HSV</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label" name="vzv" value="True">
                                        <label class="form-check-label">VZV</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label" name="rubelia" value="True">
                                        <label class="form-check-label">Rubelia</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label" name="measles" value="True">
                                        <label class="form-check-label">Measles</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label" name="mumps" value="True">
                                        <label class="form-check-label">Mumps</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label" name="vdrl" value="True">
                                        <label class="form-check-label">VDRL</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label" name="cd4" value="True">
                                        <label class="form-check-label">CD4</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label" name="crp2" value="True">
                                        <label class="form-check-label">CRP</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label" name="anf" value="True">
                                        <label class="form-check-label">ANF</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label" name="asot" value="True">
                                        <label class="form-check-label">ASOT</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label" name="toxoplasma" value="True">
                                        <label class="form-check-label">Toxoplasma</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label" name="rf" value="True">
                                        <label class="form-check-label">RF</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label" name="syphillis_serology" value="True">
                                        <label class="form-check-label">Syphillis serology</label>
                                    </div>
                                    <p><b><u>PARASITOLOGY</u></b></p>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label" name="stool" value="True">
                                        <label class="form-check-label">Stool</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label" name="blood_slide" value="True">
                                        <label class="form-check-label">Blood slide/mps</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label" name="pdt" value="True">
                                        <label class="form-check-label">PDT</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label" name="urinalysis" value="True">
                                        <label class="form-check-label">Urinalysis</label>
                                    </div>
                                    <p><b><u>HAEMATOLOGY</u></b></p>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label" name="fbc_esr" value="True">
                                        <label class="form-check-label">FBC & ESR</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label" name="fbf" value="True">
                                        <label class="form-check-label">FBF</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label" name="reticulocyte_count" value="True">
                                        <label class="form-check-label">Reticulocyte count</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label" name="factor_assays" value="True">
                                        <label class="form-check-label">Factor assays(VIII & IX)</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label" name="bleeding_time_test" value="True">
                                        <label class="form-check-label">Bleeding time test</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label" name="platelet_aggregation" value="True">
                                        <label class="form-check-label">Platelet aggregation</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label" name="lupus_anticoagulant" value="True">
                                        <label class="form-check-label">Lupus anticoagulant</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label" name="d_dimer" value="True">
                                        <label class="form-check-label">D-Dimer</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label" name="inr" value="True">
                                        <label class="form-check-label">INR</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label" name="aptt" value="True">
                                        <label class="form-check-label">APTT</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label" name="fibrinogen" value="True">
                                        <label class="form-check-label">Fibrinogen</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label" name="thrombin_time" value="True">
                                        <label class="form-check-label">Thrombin time</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label" name="hb_electrophoresis" value="True">
                                        <label class="form-check-label">Hb Electrophoresis</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label" name="bma_cytology" value="True">
                                        <label class="form-check-label">BMA cytology</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label" name="inhibitor_scree" value="True">
                                        <label class="form-check-label">Inhibitor Screen</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label" name="l_e_cells" value="True">
                                        <label class="form-check-label">L.E Cells</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label" name="kct" value="True">
                                        <label class="form-check-label">KCT</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-label" name="fna_csf_cytology" value="True">
                                        <label class="form-check-label">FNA/CSF Cytology</label>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="form-group">
                <label for="">OTHER TESTS/REMARKS</label>
                <textarea class="form-control" name="other_tests_remarks"></textarea>
            </div>
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
    </div>
@endsection
