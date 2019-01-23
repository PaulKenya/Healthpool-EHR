@extends('layouts.master')
@section('content')
    @include('departments.clinical_services.inpatient.patient_file.patient_bio_information')
    <div class="card">
        <div class="card-header">
            <h4>PHARMACY DISPENSED LIST</h4>
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
                        @php
                            $i=0
                        @endphp
                        @foreach($patient_order as $patient_orders)
                            @php
                                $i++;
                            @endphp
                            <tr>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{$i}}">
                                    VIEW
                                </button>
                                <td>{{ $patient_orders->order_date }}</td>
                                <td>{{ $patient_orders->cust_name }}</td>
                                <td>{{ $patient_orders->name }}</td>
                                <td>{{ $patient_orders->total }}</td>
                                <td>{{ $patient_orders->quantity}}</td>
                                <div class="modal fade" id="exampleModal{{$i}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">PHARMACY DISPENSED LIST</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div id="printableArea{{$i}}">
                                                    <h2>PHARMACY DISPENSED LISTG</h2>
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
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>
            </div>
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
                    <h4 class="modal-title">PHARMACY DISPENSED LIST</h4>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-header">
                            <h3>PHARMACY DISPENSED LIST</h3>
                        </div>
                        <div class="card-body">
                            <div class="col-md-9 mx-auto">
                                <form action="{{route('pharmacy_dispensed_post',['patient_id'=>$patient_id])}}" method="post" enctype="multipart/form-data">
                                    {!! csrf_field() !!}
                                    <input name="administration_patient_informations_id" type="text" class="form-control d-none" value="{{$patient_id}}">
                                    <input name="institution_id" type="text" class="form-control d-none" value="{{ Auth::user()->institution->id }}">
                                    <input name="user_id" type="text" value="{{ Auth::user()->id }}" class="form-control d-none">
                                    <div class="row">
                                        <div class="form-group">
                                            <label for="order_date">Order Date: </label>
                                            <input type="date" name="order_date"  id="myDate" id="order_date"  readonly class="form-control" placeholder="" value="{!! date('Y-m-d') !!}" readonly>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <label for="cust_name">Patient Name</label>
                                            <input type="text" name="cust_name" id="cust_name" class="form-control" placeholder="" value="{{$patient->name}}" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    Patient drugs
                                                </div>
                                                <div class="card-body">
                                                    <div class="table-responsive">
                                                        <table class="table">
                                                            <thead>
                                                            <tr>
                                                                <th>DISPENSE</th>
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

                                                                @endforeach
                                                            @endif
                                                            </tbody>

                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">dispense</button>
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
@endsection
