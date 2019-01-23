@extends('layouts.master')

@section('content')
    <!-- Title & Breadcrumbs-->
    @include('departments.clinical_services.inpatient.patient_file.patient_bio_information')
<div class="row page-titles">
    <div class="col-md-12 align-self-center">
        <h4 class="theme-cl">CONTINUATION SHEET</h4>
    </div>
</div>

<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>CONTINUATION SHEET</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="datatable" class="table table-striped table-bordered table-responsive">
                        <thead>
                        <tr>
                            <th>VIEW</th>
                            <th>WARD/CLINIC</th>
                            <th>DATE</th>
                            <th>NOTE</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(isset($continuation_sheets_results))
                            @php
                                $i=0
                            @endphp
                            @foreach($continuation_sheets_results as $continuation_sheets_result)
                                @php
                                    $i++;
                                @endphp
                                <tr>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{$i}}">
                                        VIEW
                                    </button>
                                    <td>{{ $continuation_sheets_result->ward_clinic}}</td>
                                    <td>{{ $continuation_sheets_result->date_a}}</td>
                                    <td>{{ $continuation_sheets_result->notes}}</td>
                                    <div class="modal fade" id="exampleModal{{$i}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">CONTINUATION SHEET</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div id="printableArea{{$i}}">
                                                        <h2>CONTINUATION SHEET</h2>
                                                        <p><b>Patient Name : </b>{{$patient->name}}</p>

                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="">Ward/Clinic</label>
                                                               {{ $continuation_sheets_result->ward_clinic}}
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="">Date</label>
                                                                {{ $continuation_sheets_result->date_a}}
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            {{ $continuation_sheets_result->notes}}
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
                    <button class="btn btn-success" data-toggle="modal" data-target="#myModal">Add more Items</button>
                    {{--<button class="btn btn-info" data-toggle="modal" data-target="#myModal">Print</button>--}}
                </div>
            </div>
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog modal-lg">

                    <!— Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Add Continuation Information</h4>
                        </div>
                        <div class="modal-body">

                            <div class="col-md-12">
                                <div class="card">
                                    <div class="container-fluid">
                                        <form action="{{route('continuation_form_post',['patient_id'=>$patient_id])}}" method="post" >{!! csrf_field() !!}


                                        <h2 class="text-center">IN-PATIENT/OUT-PATIENT CONTINUATION SHEET</h2>
                                        <div class="col-md-12">
                                          
                                                    <div class="offset-md-6">

                                                        </div>
                                                        <input name="administration_patient_informations_id" type="text" class="form-control d-none" value="{{$patient_id}}">
                                                        <input name="institution_id" type="text" class="form-control d-none" class="form-control d-none" value="{{ Auth::user()->institution->id }}">
                                                        <input name="user_id" type="text" value="{{ Auth::user()->id }}" class="form-control d-none">

                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="">Ward/Clinic</label>
                                                                <input type="text" name="ward_clinic" class="form-control">
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="">Date</label>
                                                                <input id="myDate" type="date" name="date_a" readonly  class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <textarea type="text" name="notes" placeholder="Notes" class="form-control"></textarea>
                                                        </div>


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




 @endsection
