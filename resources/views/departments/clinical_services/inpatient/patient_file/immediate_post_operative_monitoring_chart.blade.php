@extends('layouts.master')
@section('content')
    @include('departments.clinical_services.inpatient.patient_file.patient_bio_information')
    <!-- Title &
    Breadcrumbs-->
<div class="row page-titles">
    <div class="col-md-12 align-self-center">
        <h4 class="theme-cl">Immediate post operative monitoring chart record</h4>
    </div>
</div>
<!-- Title & Breadcrumbs-->

<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Immediate post operative monitoring chart record</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="datatable" class="table table-striped">
                        <thead>
                        <tr>
                            <th>date</th>
                            <th>age</th>
                            <th>ward</th>
                            <th>bed</th>
                            <th>sex</th>
                            <th>time</th>
                            <th>gcs</th>
                            <th>bp</th>
                            <th>hr</th>
                            <th>rr</th>
                            <th>t</th>
                            <th>bleeding</th>
                            <th>feeding</th>
                            <th>pain</th>
                            <th>ivfs</th>
                            <th>medication</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(isset($ipom_charts))
                            @foreach($ipom_charts as $ipom_charts_result)
                                <tr>
                                    <td>{{ $ipom_charts_result->date}}</td>
                                    <td>{{ $ipom_charts_result->dob}}</td>
                                    <td>{{ $ipom_charts_result->ward}}</td>
                                    <td>{{ $ipom_charts_result->bed}}</td>
                                    <td>{{ $ipom_charts_result->sex}}</td>
                                    <td>{{ $ipom_charts_result->time}}</td>
                                    <td>{{ $ipom_charts_result->gcs}}</td>
                                    <td>{{ $ipom_charts_result->bp}}</td>
                                    <td>{{ $ipom_charts_result->hr}}</td>
                                    <td>{{ $ipom_charts_result->rr}}</td>
                                    <td>{{ $ipom_charts_result->t}}</td>
                                    <td>{{ $ipom_charts_result->bleeding}}</td>
                                    <td>{{ $ipom_charts_result->feeding}}</td>
                                    <td>{{ $ipom_charts_result->pain}}</td>
                                    <td>{{ $ipom_charts_result->ivfs}}</td>
                                    <td>{{ $ipom_charts_result->medication}}</td>
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
                            <h4 class="modal-title">Add Immediate post operative monitoring chart record</h4>
                        </div>
                        <div class="modal-body">

                            <div class="col-md-12">
                                <div class="card">

                                    <div class="container-fluid">
                                        <form enctype="multipart/form-data" method="post" action="{{ route('ipom_chart_post', ['patient_id'=>$patient_id]) }}">
                                            {!! csrf_field() !!}
                                            <div class="form-row">

                                                <div class="form-group col-md-12">
                                                    <label for="date">Date</label>
                                                    <input type="date"  id="myDate" name="date"   readonly class="form-control" placeholder="" >
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-3">
                                                    <label for="age">Date of Birth</label>
                                                    <input type="date" name="dob" id="age" class="form-control" placeholder="" >
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label for="ward">Ward</label>
                                                    <input type="text" name="ward" id="ward" class="form-control" placeholder="" >
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label for="bed">Bed</label>
                                                    <input type="number" name="bed" id="bed" class="form-control" placeholder="" >
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label for="sex">Sex</label>
                                                    <select class="form-control" name="sex" id="sex">
                                                        <option value="male">Male</option>
                                                        <option value="female">Female</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <h5>Measurements</h5>
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <label for="time">Time</label>
                                                    <select class="form-control" name="time" id="time">
                                                        <option value="0_min">0 mins (Patient has just arrived from the theatre)</option>
                                                        <option value="15_mins">15 mins</option>
                                                        <option value="30_mins">30 mins</option>
                                                        <option value="45_mins">45 mins</option>
                                                        <option value="1_hr">1 hr</option>
                                                        <option value="1.5_hrs">1.5 hrs</option>
                                                        <option value="2_hrs">2 hrs</option>
                                                        <option value="3_hrs">3 hrs</option>
                                                        <option value="4_hrs">4 hrs</option>
                                                        <option value="8_hrs">8 hrs</option>
                                                        <option value="12_hrs">12 hrs</option>
                                                        <option value="16_hrs">16 hrs</option>
                                                        <option value="20_hrs">20 hrs</option>
                                                        <option value="24_hrs">24 hrs</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col">
                                                    <label for="gcs">GCS (1-15)</label>
                                                    <input type="number" name="gcs" id="gcs" class="form-control" placeholder="" >
                                                </div>
                                                <div class="form-group col">
                                                    <label for="bp">BP</label>
                                                    <input type="number" name="bp" id="bp" class="form-control" placeholder="" >
                                                </div>
                                                <div class="form-group col">
                                                    <label for="hr">HR</label>
                                                    <input type="number" name="hr" id="hr" class="form-control" placeholder="" >
                                                </div>
                                                <div class="form-group col">
                                                    <label for="rr">RR</label>
                                                    <input type="number" name="rr" id="rr" class="form-control" placeholder="" >
                                                </div>
                                                <div class="form-group col">
                                                    <label for="t">T</label>
                                                    <input type="number" name="t" id="t" class="form-control" placeholder="" >
                                                </div>
                                                <div class="form-group col">
                                                    <label for="bleeding">Bleeding</label>
                                                    <input type="number" name="bleeding" id="bleeding" class="form-control" placeholder="" >
                                                </div>
                                                <div class="form-group col">
                                                    <label for="feeding">Feeding</label>
                                                    <input type="number" name="feeding" id="feeding" class="form-control" placeholder="" >
                                                </div>
                                                <div class="form-group col">
                                                    <label for="pain">Pain</label>
                                                    <input type="number" name="pain" id="pain" class="form-control" placeholder="" >
                                                </div>
                                                <div class="form-group col">
                                                    <label for="ivfs">IVFs</label>
                                                    <input type="number" name="ivfs" id="ivfs" class="form-control" placeholder="" >
                                                </div>
                                                <div class="form-group col">
                                                    <label for="medication">Medication</label>
                                                    <input type="number" name="medication" id="medication" class="form-control" placeholder="" >
                                                </div>
                                            </div>
                                            <input name="administration_patient_informations_id" type="text" class="form-control d-none" value="{{$patient_id}}">
                                            <input name="institution_id" type="text" class="form-control d-none" value="{{ Auth::user()->institution->id }}">
                                            <input name="user_id" type="text" value="{{ Auth::user()->id }}" class="form-control d-none">
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