@extends('layouts.master')

@section('content')

    <!-- Title & Breadcrumbs-->
    <div class="row page-titles">
        <div class="col-md-12 align-self-center">
            <h4 class="theme-cl">Invoice</h4>
        </div>
    </div>
    <!-- Title & Breadcrumbs-->

    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Invoice</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        {{--<table class="table table-responsive table-bordered table-striped" id="datatable">
                            <thead>
                            <tr>
                                <th>Payment Date</th>
                                <th>Description of Expense</th>
                                <th>Department</th>
                                <th>Unit Cost</th>
                                <th>Number of Units</th>
                                <th>Total Cost</th>
                            </tr>
                            </thead>
                            <tbody>

                            @if(isset($invoice))
                                @foreach($invoice as $invoice)
                                    <tr>
                                        <td>{{ $invoice->payment_date}}</td>
                                        <td>{{ $invoice->description_of_expense}}</td>
                                        <td>{{ $invoice->department}}</td>
                                        <td>{{ $invoice->unit_cost}}</td>
                                        <td>{{ $invoice->number_of_units}}</td>
                                        <td>{{ $invoice->total_unit}}</td>
                                    </tr>
                                @endforeach
                            @endif

                            </tbody>
                        </table>--}}
                        <table class="table table-bordered" id="datatable">
                            @php
                                $institution_id=Illuminate\Support\Facades\Auth::user()->institution_id;
                                $links_for_dept=\App\send_department_link::all()->where('is_paid',0)->where('institution_id',$institution_id);
                            @endphp
                            <thead>
                                <tr>
                                    <th>Patient Name</th>
                                    <th>From Department</th>
                                    <th>To Department</th>
                                    <th>Price</th>
                                    <th>Description</th>
                                    <th>Invoice</th>
                                </tr>
                            </thead>
                            <tbody>

                            @if(isset($links_for_dept))
                                @foreach($links_for_dept as $link)
                                    @php
                                        $patient_id=$link->administration_patient_informations_id;
                                        $for_patient=\App\administration_patient_information::find($patient_id);
                                        $name=$link->administration_patient_informations_id;
                                        $actual_patient_id=$link->administration_patient_informations_id;
                                    @endphp
                                    <tr>
                                        <td>{{ $for_patient->name }}</td>
                                        <td>{{$link->links}}</td>
                                        <td>{{App\department::find($link->department_id)->department_name}}</td>
                                        <td>{{$link->price}}</td>
                                        <td>{{$link->description}}</td>
                                        <td>
                                            <a class="btn btn-success" href="{{route('finance_invoice_id',['patient_id'=>$actual_patient_id])}}">View Invoice</a>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>

                {{--<div class="col-md-4">
                    <div class="content">
                        <button class="btn btn-success" data-toggle="modal" data-target="#myModal">Add more Items</button>
                        --}}{{--<button class="btn btn-info" data-toggle="modal" data-target="#myModal">Print</button>--}}{{--
                    </div>
                </div>
                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog modal-lg">

                        <!— Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Add Expenses record</h4>
                            </div>
                            <div class="modal-body">

                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="container">
                                           <form action="{{ route('finance_invoice_post') }}" method="post" >
                                                {!! csrf_field() !!}
                                                <div class="form-group">
                                                    <label>Payment Date</label>
                                                    <input type="date" name=" payment_date" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>Description of Expense</label>
                                                    <textarea  name="description_of_expense" class="form-control"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label>Department</label>
                                                    <input type="text" name="department"  class="form-control" id="exampleInputEmail1" aria-describedby="" placeholder="">
                                                </div>
                                                <div class="form-group">
                                                    <label>Unit Cost</label>
                                                    <input type="number" name="unit_cost"  class="form-control" id="exampleInputEmail1" aria-describedby="" placeholder="">
                                                </div>

                                                <div class="form-group">
                                                    <label>Number of Units</label>
                                                    <input type="number"  name="number_of_units" class="form-control" id="exampleInputEmail1" aria-describedby="" placeholder="">
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-12">
                                                        <div class="float-right">
                                                            <button class="btn btn-primary" type="">Edit</button>
                                                            <input type="submit" class="btn btn-success" value="Save" >
                                                            <button class="btn btn-danger" type="">Delete</button>
                                                            <button class="btn btn-primary" type="">Print</button>
                                                            <button class="btn btn-success" type="">Export</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            <!--form here--->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>--}}
            </div>
        </div>
    </div>
@endsection
