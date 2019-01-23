@extends('layouts.master')
@section('content')
    @include('departments.clinical_services.inpatient.patient_file.patient_bio_information')
    <!-- Title & Breadcrumb
    s-->
<div class="row page-titles">
    <div class="col-md-12 align-self-center">
        <h4 class="theme-cl">Fluid intake output chart</h4>
    </div>
</div>
<!-- Title & Breadcrumbs-->

<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Fluid intake output chart</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="datatable" class="table table-striped">
                        <thead>
                        <tr>
                            <th>Print</th>
                            <th>date</th>
                            <th>bed</th>
                            <th>body_weight</th>
                            <th>balance_yesterday</th>
                            <th>time</th>
                            <th>systole_bp</th>
                            <th>type_of_fluid</th>
                            <th>litra_vol</th>
                            <th>oral</th>
                            <th>noso_gastric_suction</th>
                            <th>vomituous</th>
                            <th>dried_stool_fistula</th>
                            <th>urine_amount</th>
                            <th>urine_sp_gr</th>
                            <th>instruction_for_intravenous_fluid_today</th>
                            <th>instruction_for_oral_fluids_today</th>
                            <th>instruction_for_noso_gastric_suction_today</th>
                            <th>urine</th>
                            <th>drain_stool_or_fistula</th>
                            <th>vomitous</th>
                            <th>naso_gastric_suction</th>
                            <th>insensible_loss</th>
                            <th>total_output</th>
                            <th>intake</th>
                            <th>intravenous</th>
                            <th>oral_</th>
                            <th>total_intake</th>
                            <th>balance_today</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(isset($fluid_in_out_charts_table))
                            @php
                                $i=0
                            @endphp
                            @foreach($fluid_in_out_charts_table as $fluid_in_out_charts_tabl)
                                @php
                                    $i++
                                @endphp
                                <tr>
                                    <td>
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{$i}}">Print Record</button>
                                    </td>
                                    <td>{{$fluid_in_out_charts_tabl->date}}</td>>
                                    <td>{{$fluid_in_out_charts_tabl->bed}}</td>
                                    <td>{{$fluid_in_out_charts_tabl->body_weight}}</td>
                                    <td>{{$fluid_in_out_charts_tabl->balance_yesterday}}</td>
                                    <td>{{$fluid_in_out_charts_tabl->time}}</td>
                                    <td>{{$fluid_in_out_charts_tabl->systole_bp}}</td>
                                    <td>{{$fluid_in_out_charts_tabl->type_of_fluid}}</td>
                                    <td>{{$fluid_in_out_charts_tabl->litra_vol}}</td>
                                    <td>{{$fluid_in_out_charts_tabl->oral}}</td>
                                    <td>{{$fluid_in_out_charts_tabl->noso_gastric_suction}}</td>
                                    <td>{{$fluid_in_out_charts_tabl->vomituous}}</td>
                                    <td>{{$fluid_in_out_charts_tabl->dried_stool_fistula}}</td>
                                    <td>{{$fluid_in_out_charts_tabl->urine_amount}}</td>
                                    <td>{{$fluid_in_out_charts_tabl->urine_sp_gr}}</td>
                                    <td>{{$fluid_in_out_charts_tabl->instruction_for_intravenous_fluid_today}}</td>
                                    <td>{{$fluid_in_out_charts_tabl->instruction_for_oral_fluids_today}}</td>
                                    <td>{{$fluid_in_out_charts_tabl->instruction_for_noso_gastric_suction_today}}</td>
                                    <td>{{$fluid_in_out_charts_tabl->urine}}</td>
                                    <td>{{$fluid_in_out_charts_tabl->drain_stool_or_fistula}}</td>
                                    <td>{{$fluid_in_out_charts_tabl->vomitous}}</td>
                                    <td>{{$fluid_in_out_charts_tabl->naso_gastric_suction}}</td>
                                    <td>{{$fluid_in_out_charts_tabl->insensible_loss}}</td>
                                    <td>{{$fluid_in_out_charts_tabl->total_output}}</td>
                                    <td>{{$fluid_in_out_charts_tabl->intake}}</td>
                                    <td>{{$fluid_in_out_charts_tabl->intravenous}}</td>
                                    <td>{{$fluid_in_out_charts_tabl->oral_}}</td>
                                    <td>{{$fluid_in_out_charts_tabl->total_intake}}</td>
                                    <td>{{$fluid_in_out_charts_tabl->balance_today}}</td>
                                    <!-- Triage Modal -->
                                    <div class="modal fade" id="exampleModal{{$i}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Blood Transfusion Observation</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div id="printableArea{{$i}}">
                                                        <h2>PATIENT RECORD</h2>
                                                        <p><b>Patient Name : </b> {{$patient->name}}</p>
                                                        <p><b>Date : </b>{{$fluid_in_out_charts_tabl->date}} </p>
                                                        <p><b>Bed : </b>{{$fluid_in_out_charts_tabl->bed}} </p>
                                                        <p><b>Body Weight : </b>{{$fluid_in_out_charts_tabl->body_weight}} </p>
                                                        <p><b>Balance Yesterday : </b>{{$fluid_in_out_charts_tabl->balance_yesterday}} </p>
                                                        <p><b>Time : </b>{{$fluid_in_out_charts_tabl->time}} </p>
                                                        <p><b>Systole BP : </b>{{$fluid_in_out_charts_tabl->systole_bp}} </p>
                                                        <p><b>Type of Fluid : </b>{{$fluid_in_out_charts_tabl->type_of_fluid}} </p>
                                                        <p><b>Litra Vol : </b>{{$fluid_in_out_charts_tabl->litra_vol}} </p>
                                                        <p><b>Oral : </b>{{$fluid_in_out_charts_tabl->oral}} </p>
                                                        <p><b>Noso Gastric Suction : </b>{{$fluid_in_out_charts_tabl->noso_gastric_suction}} </p>
                                                        <p><b>Vomituous : </b>{{$fluid_in_out_charts_tabl->vomituous}} </p>
                                                        <p><b>Dried stool Fistula : </b>{{$fluid_in_out_charts_tabl->dried_stool_fistula}} </p>
                                                        <p><b>Urine amount : </b>{{$fluid_in_out_charts_tabl->urine_amount}} </p>
                                                        <p><b>Urine sp gr : </b>{{$fluid_in_out_charts_tabl->urine_sp_gr}} </p>
                                                        <p><b>Instruction for intravenous fluid today : </b>{{$fluid_in_out_charts_tabl->instruction_for_intravenous_fluid_today}} </p>
                                                        <p><b>Instruction_for oral fluids today : </b>{{$fluid_in_out_charts_tabl->instruction_for_oral_fluids_today}} </p>
                                                        <p><b>Instruction for noso gastric suction today : </b>{{$fluid_in_out_charts_tabl->instruction_for_noso_gastric_suction_today}} </p>
                                                        <p><b>Urine : </b>{{$fluid_in_out_charts_tabl->urine}} </p>
                                                        <p><b>Drain stool or fistula : </b>{{$fluid_in_out_charts_tabl->drain_stool_or_fistula}} </p>
                                                        <p><b>Vomitous : </b>{{$fluid_in_out_charts_tabl->vomitous}} </p>
                                                        <p><b>Naso gastric suction : </b>{{$fluid_in_out_charts_tabl->naso_gastric_suction}} </p>
                                                        <p><b>Insensible loss : </b>{{$fluid_in_out_charts_tabl->insensible_loss}} </p>
                                                        <p><b>Total Output : </b>{{$fluid_in_out_charts_tabl->total_output}} </p>
                                                        <p><b>Intake : </b>{{$fluid_in_out_charts_tabl->intake}} </p>
                                                        <p><b>Intravenous : </b>{{$fluid_in_out_charts_tabl->intravenous}} </p>
                                                        <p><b>Oral : </b>{{$fluid_in_out_charts_tabl->oral_}} </p>
                                                        <p><b>Total Intake : </b>{{$fluid_in_out_charts_tabl->total_intake}} </p>
                                                        <p><b>Balance Today : </b>{{$fluid_in_out_charts_tabl->balance_today}} </p>
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

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Add record</h4>
                        </div>
                        <div class="modal-body">

                            <div class="col-md-12">
                                <div class="card">

                                    <div class="container-fluid">
                                        <form enctype="multipart/form-data" method="post" action="{{ route('fluid_in_out_chart_post',['patient_id'=>$patient_id])}}">
                                            {!! csrf_field() !!}
                                            <input name="administration_patient_informations_id" type="text" class="form-control d-none" value="{{$patient_id}}">
                                            <input name="institution_id" type="text" class="form-control d-none" value="{{ Auth::user()->institution->id }}">
                                            <input name="user_id" type="text" value="{{ Auth::user()->id }}" class="form-control d-none">
                                            <h4>FLUID INTAKE OUTPUT CHART</h4>
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <label for=" ">Date</label>
                                                    <input type="date" id="myDate" name="date"  readonly class="form-control" placeholder="" value="{{ date('d/m/Y') }}">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <label for="bed">Bed_number</label>
                                                    <input type="number" name="bed" id="bed" class="form-control" placeholder="" >
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col">
                                                    <label for="body_weight">Body Weight(kg)</label>
                                                    <input type="number" name="body_weight" id="body_weight" class="form-control" placeholder="" >
                                                </div>
                                                <div class="form-group col">
                                                    <label for="balance_yesterday">Balance Yesterday</label>
                                                    <input type="number" name="balance_yesterday" id="balance_yesterday" class="form-control" placeholder="" >
                                                </div>
                                            </div>
                                            <hr>
                                            <h5>TO BE COMPLETED BY NURSING STAFF</h5>
                                            <div class="form-row">
                                                <div class="form-group col">
                                                    <label for="time">Time</label>
                                                    <select class="form-control" name="time" id="time">
                                                        <option value="9_am">9 AM</option>
                                                        <option value="10_am">10 AM</option>
                                                        <option value="11_am">11 AM</option>
                                                        <option value="12_am">12 AM</option>
                                                        <option value="1_pm">1 PM</option>
                                                        <option value="2_pm">2 PM</option>
                                                        <option value="3_pm">3 PM</option>
                                                        <option value="4_pm">4 PM</option>
                                                        <option value="5_pm">5 PM</option>
                                                        <option value="6_pm">6 PM</option>
                                                        <option value="7_pm">7 PM</option>
                                                        <option value="8_pm">8 PM</option>
                                                        <option value="9_pm">9 PM</option>
                                                        <option value="10_pm">10 PM</option>
                                                        <option value="11_pm">11 PM</option>
                                                        <option value="12_pm">12 PM</option>
                                                        <option value="1_am">1 AM</option>
                                                        <option value="2_am">2 AM</option>
                                                        <option value="3_am">3 AM</option>
                                                        <option value="4_am">4 AM</option>
                                                        <option value="5_am">5 AM</option>
                                                        <option value="6_am">6 AM</option>
                                                        <option value="7_am">7 AM</option>
                                                        <option value="8_am">8 AM</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col">
                                                    <label for="systole_bp">Systole B.P</label>
                                                    <input type="number" name="systole_bp" id="systole_bp" class="form-control" placeholder="" >
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <h5>INTAKE</h5>
                                                <div class="form-group col">
                                                    <label for="type_of_fluid">Type of Fluid</label>
                                                    <input type="text" name="type_of_fluid" id="type_of_fluid" class="form-control" placeholder="" >
                                                </div>
                                                <div class="form-group col">
                                                    <label for="litra_vol">Litra vol.</label>
                                                    <input type="number" name="litra_vol" id="litra_vol" class="form-control" placeholder="" >
                                                </div>
                                                <div class="form-group col">
                                                    <label for="oral">Oral</label>
                                                    <input type="number" name="oral" id="oral" class="form-control" placeholder="" >
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <h5>OUTPUT</h5>
                                                <div class="form-group col">
                                                    <label for="noso_gastric_suction">Noso Gastric Suction</label>
                                                    <input type="text" name="noso_gastric_suction" id="noso_gastric_suction" class="form-control" placeholder="" >
                                                </div>
                                                <div class="form-group col">
                                                    <label for="vomituous">Vomituous</label>
                                                    <input type="text" name="vomituous" id="vomituous" class="form-control" placeholder="" >
                                                </div>
                                                <div class="form-group col">
                                                    <label for="dried_stool_fistula">Dried stool or Fistula</label>
                                                    <input type="text" name="dried_stool_fistula" id="dried_stool_fistula" class="form-control" placeholder="" >
                                                </div>
                                                <div class="form-group col">
                                                    <label for="urine_amount">Urine: Amount</label>
                                                    <input type="number" name="urine_amount" id="urine_amount" class="form-control" placeholder="" >
                                                </div>
                                                <div class="form-group col">
                                                    <label for="urine_sp_gr">Urine: Sp Gr</label>
                                                    <input type="number" name="urine_sp_gr" id="urine_sp_gr" class="form-control" placeholder="" >
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col">
                                                    <label for="instruction_for_intravenous_fluid_today">Instruction for Intravenous Fluid Today</label>
                                                    <textarea class="form-control" name="instruction_for_intravenous_fluid_today" id="instruction_for_intravenous_fluid_today" rows="3"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col">
                                                    <label for="instruction_for_oral_fluids_today">Instruction for Oral Fluids Today</label>
                                                    <textarea class="form-control" name="instruction_for_oral_fluids_today" id="instruction_for_oral_fluids_today" rows="3"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col">
                                                    <label for="instruction_for_noso_gastric_suction_today">Instruction for Noso Gastric Suction Today</label>
                                                    <textarea class="form-control" name="instruction_for_noso_gastric_suction_today" id="instruction_for_noso_gastric_suction_today" rows="3"></textarea>
                                                </div>
                                            </div>
                                            <hr>
                                            <h5>TO BE COMPLETED BY MEDICAL OFFICER</h5>
                                            <h6>OUTPUT</h6>
                                            <div class="form-row">
                                                <div class="form-group col">
                                                    <label for="urine">Urine</label>
                                                    <input type="number" name="urine" id="urine" class="form-control" placeholder="" >
                                                </div>
                                                <div class="form-group col">
                                                    <label for="drain_stool_or_fistula">Drain stool or fistula</label>
                                                    <input type="text" name="drain_stool_or_fistula" id="drain_stool_or_fistula" class="form-control" placeholder="" >
                                                </div>
                                                <div class="form-group col">
                                                    <label for="vomitous">Vomitous</label>
                                                    <input type="text" name="vomitous" id="vomitous" class="form-control" placeholder="" >
                                                </div>
                                                <div class="form-group col">
                                                    <label for="naso_gastric_suction">Naso-gastric Suction</label>
                                                    <input type="text" name="naso_gastric_suction" id="naso_gastric_suction" class="form-control" placeholder="" >
                                                </div>
                                                <div class="form-group col">
                                                    <label for="insensible_loss">Insensible Loss</label>
                                                    <input type="text" name="insensible_loss" id="insensible_loss" class="form-control" placeholder="" >
                                                </div>
                                                <div class="form-group col">
                                                    <label for="total_output">Total Output</label>
                                                    <input type="number" name="total_output" id="total_output" class="form-control" placeholder="" >
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col">
                                                    <label for="intake">Intake</label>
                                                    <input type="number" name="intake" id="intake" class="form-control" placeholder="" >
                                                </div>
                                                <div class="form-group col">
                                                    <label for="intravenous">Intravenous</label>
                                                    <input type="text" name="intravenous" id="intravenous" class="form-control" placeholder="" >
                                                </div>
                                                <div class="form-group col">
                                                    <label for="oral_">Oral</label>
                                                    <input type="number" name="oral_" id="oral_" class="form-control" placeholder="" >
                                                </div>
                                                <div class="form-group col">
                                                    <label for="a_total_intake">A Total Intake</label>
                                                    <input type="text" name="total_intake" id="a_total_intake" class="form-control" placeholder="" >
                                                </div>
                                                <div class="form-group col">
                                                    <label for="balance_today">Balance Today(C.C)</label>
                                                    <input type="number" name="balance_today" id="balance_today" class="form-control" placeholder="" >
                                                </div>
                                            </div>
                                            <div class="form-row">
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