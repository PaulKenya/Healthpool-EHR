@extends('layouts.master')
@section('content')
    @include('departments.clinical_services.inpatient.patient_file.patient_bio_information')

    <div class="page-titles">
        <div class="col-md-12 align-self-center">
            <h4 class="theme-cl">Maternity Record for {{ $patient->name }}</h4>
        </div>
    </div>
    <!-- Title & Breadcrumbs-->

    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Maternity Record</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable" class="table table-bordered">
                            <thead>
                                <tr>

                                    <th>date_of_admission</th>
                                    <th>age</th>
                                    <th>marital_status</th>
                                    <th>residence</th>
                                    <th>education_level</th>
                                    <th>occupation</th>
                                    <th>next_of_kin</th>
                                    <th>telephone_number_of_kin</th>
                                    <th>present_history</th>
                                    <th>pastt_history</th>
                                    <th>menarchy</th>
                                    <th>cycle</th>
                                    <th>duration</th>
                                    <th>flow</th>
                                    <th>fp</th>
                                    <th>anc</th>
                                    <th>tt</th>
                                    <th>hb</th>
                                    <th>vdrl</th>
                                    <th>blood_group</th>
                                    <th>hiv</th>
                                    <th>hiv_status_of_partner</th>
                                    <th>lmp</th>
                                    <th>edd</th>
                                    <th>med</th>
                                    <th>parity</th>
                                    <th>gravida</th>
                                    <th>year</th>
                                    <th>place_of_delivery</th>
                                    <th>type_of_delivery</th>
                                    <th>sex</th>
                                    <th>weight</th>
                                    <th>date</th>
                                    <th>peuperium</th>
                                    <th>year</th>
                                    <th>place_of_delivery</th>
                                    <th>type_of_delivery</th>
                                    <th>sex</th>
                                    <th>weight</th>
                                    <th>date</th>
                                    <th>peuperium</th>
                                    <th>bp</th>
                                    <th>pulse</th>
                                    <th>rr</th>
                                    <th>temperature</th>
                                    <th>fh_rate</th>
                                </tr>
                            </thead>
                            <tbody>
                            @if(isset($maternity_records))
                                @foreach($maternity_records as $maternity_record)
                                    <tr>

                                        <td>{{ $maternity_record->date_of_admission }}</td>
                                        <td>{{ $maternity_record->age }}</td>
                                        <td>{{ $maternity_record->marital_status }}</td>
                                        <td>{{ $maternity_record->residence }}</td>
                                        <td>{{ $maternity_record->education_level }}</td>
                                        <td>{{ $maternity_record->occupation }}</td>
                                        <td>{{ $maternity_record->next_of_kin }}</td>
                                        <td>{{ $maternity_record->telephone_number_of_kin }}</td>
                                        <td>{{ $maternity_record->present_history }}</td>
                                        <td>{{ $maternity_record->pastt_history }}</td>
                                        <td>{{ $maternity_record->menarchy }}</td>
                                        <td>{{ $maternity_record->cycle }}</td>
                                        <td>{{ $maternity_record->duration }}</td>
                                        <td>{{ $maternity_record->flow }}</td>
                                        <td>{{ $maternity_record->fp }}</td>
                                        <td>{{ $maternity_record->anc }}</td>
                                        <td>{{ $maternity_record->tt }}</td>
                                        <td>{{ $maternity_record->hb }}</td>
                                        <td>{{ $maternity_record->vdrl }}</td>
                                        <td>{{ $maternity_record->blood_group }}</td>
                                        <td>{{ $maternity_record->hiv }}</td>
                                        <td>{{ $maternity_record->hiv_status_of_partner }}</td>
                                        <td>{{ $maternity_record->lmp }}</td>
                                        <td>{{ $maternity_record->edd }}</td>
                                        <td>{{ $maternity_record->med }}</td>
                                        <td>{{ $maternity_record->parity }}</td>
                                        <td>{{ $maternity_record->gravida }}</td>
                                        <td>{{ $maternity_record->year }}</td>
                                        <td>{{ $maternity_record->place_of_delivery }}</td>
                                        <td>{{ $maternity_record->type_of_delivery }}</td>
                                        <td>{{ $maternity_record->sex }}</td>
                                        <td>{{ $maternity_record->weight }}</td>
                                        <td>{{ $maternity_record->date }}</td>
                                        <td>{{ $maternity_record->peuperium }}</td>
                                        <td>{{ $maternity_record->year1 }}</td>
                                        <td>{{ $maternity_record->place_of_delivery1 }}</td>
                                        <td>{{ $maternity_record->type_of_delivery1 }}</td>
                                        <td>{{ $maternity_record->sex1 }}</td>
                                        <td>{{ $maternity_record->weight1 }}</td>
                                        <td>{{ $maternity_record->date1 }}</td>
                                        <td>{{ $maternity_record->peuperium1 }}</td>
                                        <td>{{ $maternity_record->bp }}</td>
                                        <td>{{ $maternity_record->pulse }}</td>
                                        <td>{{ $maternity_record->rr }}</td>
                                        <td>{{ $maternity_record->temperature }}</td>
                                        <td>{{ $maternity_record->fh_rate }}</td>
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
                                <h4 class="modal-title">Add Maternity record</h4>
                            </div>
                            <div class="modal-body">

                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="container-fluid">
                                            <form action="{{route('maternity_records_post' , ['patient_id'=>$patient_id])}}" method="post">
                                                {!! csrf_field() !!}
                                                <br>

                                                <div class="form-row">
                                                    <div class="form-group col">
                                                        <label for="date_of_admission">Date of Admission</label>
                                                        <input type="date" name="date_of_admission" id="date_of_admission" class="form-control" placeholder="" required>
                                                    </div>

                                                </div>

                                                <div class="form-row">
                                                    <div class="form-group col">
                                                        <label for="next_of_kin">Next of Kin</label>
                                                        <input type="text" name="next_of_kin" id="next_of_kin" class="form-control" placeholder="" >
                                                    </div>
                                                    <div class="form-group col">
                                                        <label for="telephone_number_of_kin">Telephone number of kin</label>
                                                        <input type="number" name="telephone_number_of_kin" id="telephone_number_of_kin" class="form-control" placeholder="" >
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col">
                                                        <label for="present_history">Present History</label>
                                                        <textarea class="form-control" name="present_history" id="present_history" rows="3"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col">
                                                        <label for="past_history">Past Medical/Surgical History</label>
                                                        <textarea class="form-control" name="pastt_history" id="past_history" rows="3"></textarea>
                                                    </div>
                                                </div>
                                                <h5>Obsteric History</h5>
                                                <div class="form-row">
                                                    <div class="form-group col">
                                                        <label for="menarchy">Menarchy</label>
                                                        <input type="text" name="menarchy" id="menarchy" class="form-control" placeholder="" >
                                                    </div>
                                                    <div class="form-group col">
                                                        <label for="cycle">Cycle</label>
                                                        <input type="number" name="cycle" id="cycle" class="form-control" placeholder="" >
                                                    </div>
                                                    <div class="form-group col">
                                                        <label for="duration">Duration</label>
                                                        <input type="number" name="duration" id="duration" class="form-control" placeholder="" >
                                                    </div>
                                                    <div class="form-group col">
                                                        <label for="flow">Flow</label>
                                                        <input type="number" name="flow" id="flow" class="form-control" placeholder="" >
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col">
                                                        <label for="fp">FP</label>
                                                        <input type="text" name="fp" id="fp" class="form-control" placeholder="" >
                                                    </div>
                                                    <div class="form-group col">
                                                        <label for="anc">ANC</label>
                                                        <input type="text" name="anc" id="anc" class="form-control" placeholder="" >
                                                    </div>
                                                    <div class="form-group col">
                                                        <label for="tt">TT</label>
                                                        <input type="text" name="tt" id="tt" class="form-control" placeholder="" >
                                                    </div>
                                                    <div class="form-group col">
                                                        <label for="hb">HB</label>
                                                        <input type="text" name="hb" id="hb" class="form-control" placeholder="" >
                                                    </div>
                                                    <div class="form-group col">
                                                        <label for="vdrl">VDRL</label>
                                                        <input type="text" name="vdrl" id="vdrl" class="form-control" placeholder="" >
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col">
                                                        <label for="blood_group">Blood Group</label>
                                                        <input type="text" name="blood_group" id="blood_group" class="form-control" placeholder="" >
                                                    </div>
                                                    <div class="form-group col">
                                                        <label for="hiv">HIV</label>
                                                        <input type="text" name="hiv" id="hiv" class="form-control" placeholder="" >
                                                    </div>
                                                    <div class="form-group col">
                                                        <label for="hiv_status_of_partner">HIV status of husband or partner</label>
                                                        <input type="text" name="hiv_status_of_partner" id="hiv_status_of_partner" class="form-control" placeholder="" >
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col">
                                                        <label for="lmp">LMP</label>
                                                        <input type="text" name="lmp" id="lmp" class="form-control" placeholder="" >
                                                    </div>
                                                    <div class="form-group col">
                                                        <label for="edd">EDD</label>
                                                        <input type="text" name="edd" id="edd" class="form-control" placeholder="" >
                                                    </div>
                                                    <div class="form-group col">
                                                        <label for="med">MED</label>
                                                        <input type="text" name="med" id="med" class="form-control" placeholder="" >
                                                    </div>
                                                    <div class="form-group col">
                                                        <label for="parity">PARITY</label>
                                                        <input type="text" name="parity" id="parity" class="form-control" placeholder="" >
                                                    </div>
                                                    <div class="form-group col">
                                                        <label for="gravida">GRAVIDA</label>
                                                        <input type="text" name="gravida" id="gravida" class="form-control" placeholder="" >
                                                    </div>
                                                </div>
                                                <h5>Previous Pregnancies</h5>
                                                <div class="form-row">
                                                    <div class="table-responsive">
                                                        <table class="table">
                                                            <thead>
                                                            <tr>
                                                                <th>Year</th>
                                                                <th>Place of Delivery</th>
                                                                <th>Type of Delivery</th>
                                                                <th>Sex</th>
                                                                <th>Weight</th>
                                                                <th>Date</th>
                                                                <th>Peuperium</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr>
                                                                <td scope="row">
                                                                    <div class="form-group">
                                                                        <input type="number" class="form-control" name="year" placeholder="">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control" name="place_of_delivery" placeholder="">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control" name="type_of_delivery" placeholder="">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <select class="form-control" name="sex" >
                                                                        <option value="male">Male</option>
                                                                        <option value="female">Female</option>
                                                                    </select>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <input type="number" class="form-control" name="weight" placeholder="">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <input type="date " id="myDate" class="form-control" name="date" readonly placeholder="">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control" name="peuperium" placeholder="">
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td scope="row">
                                                                    <div class="form-group">
                                                                        <input type="number" class="form-control" name="year1" placeholder="">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control" name="place_of_delivery1" placeholder="">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control" name="type_of_delivery1" placeholder="">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <select class="form-control" name="sex1" >
                                                                        <option value="male">Male</option>
                                                                        <option value="female">Female</option>
                                                                    </select>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <input type="number" class="form-control" name="weight1" placeholder="">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <input type="date"  id="myDate1" class="form-control"  readonly name="date1" placeholder="">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control" name="peuperium1" placeholder="">
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <h5>Observations on Admission</h5>
                                                <div class="form-row">
                                                    <div class="form-group col">
                                                        <label for="bp">BP</label>
                                                        <input type="number" name="bp" id="bp" class="form-control" placeholder="">
                                                    </div>
                                                    <div class="form-group col">
                                                        <label for="pulse">Pulse</label>
                                                        <input type="number" name="pulse" id="pulse" class="form-control" placeholder="">
                                                    </div>
                                                    <div class="form-group col">
                                                        <label for="rr">RR</label>
                                                        <input type="number" name="rr" id="rr" class="form-control" placeholder="">
                                                    </div>
                                                    <div class="form-group col">
                                                        <label for="temperature">Temperature</label>
                                                        <input type="number" name="temperature" id="temperature" class="form-control" placeholder="">
                                                    </div>
                                                    <div class="form-group col">
                                                        <label for="fh_rate">FH Rate</label>
                                                        <input type="number" name="fh_rate" id="fh_rate" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <input name="administration_patient_informations_id" type="text" class="form-control d-none" value="{{$patient_id}}">
                                                <input name="institution_id" type="text" class="form-control d-none" value="{{ Auth::user()->institution->id }}">
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