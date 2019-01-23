@extends('layouts.master')
@section('content')
    @include('departments.clinical_services.inpatient.patient_file.patient_bio_information')
    <div class="card">
        <div class="card-header">
            <h4>PHARMACY PAID LIST</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="datatable" class="table table-bordered">
                    <thead>
                    <tr>
                        <th>ORDER DATE</th>
                        <th>CUSTOMER NAME</th>
                        <th>DRUG NAME</th>
                        <th>DRUG TOTAL</th>
                        <th>QUANTITY PAID FOR</th>
                    </tr>
                    </thead>
                    <tbody>

                    @if(isset($patient_order))
                        @foreach($patient_order as $patient_orderss)
                            <tr>
                                <TD><input type="checkbox" id="dispense" name="dispense" /></TD>
                                <td>{{ $patient_orderss->order_date }}</td>
                                <td>{{ $patient_orderss->cust_name }}</td>
                                <td>{{ $patient_orderss->name }}</td>
                                <td>{{ $patient_orderss->total }}</td>
                                <td>{{ $patient_orderss->quantity}}</td>
                                <div class="modal fade" id="exampleModal{{$i}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">PHARMACY PAID LIST</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div id="printableArea{{$i}}">
                                                    <h2>PHARMACY PAID LIST</h2>
                                                    <p><b>Patient Name : </b>{{$patient->name}}</p>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label for="">DISPENSE</label>{{ $patient_orderss->order_date }}

                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="">ORDER DATE</label>{{ $patient_orderss->cust_name }}

                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label for="">CUSTOMER NAME</label>{{ $patient_orderss->name }}

                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="">DRUG NAME</label>{{ $patient_orderss->total }}

                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="">QUANTITY PAID LIST</label>{{ $patient_orderss->quantity}}

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
    </div>
@endsection
