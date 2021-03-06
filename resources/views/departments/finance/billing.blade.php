@extends('layouts.master')

@section('content')
    <!-- Title & Breadcrumbs-->
    <div class="row page-titles">
        <div class="col-md-12 align-self-center">
            <h4 class="theme-cl">Billing</h4>
        </div>
    </div>
    <!-- Title & Breadcrumbs-->

    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Billing</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable" class="table table-striped table-bordered table-responsive">
                            <thead>
                            <tr>
                                <th>CUSTOMER_NAME</th>
                                <th>EMAIL_ADDRESS</th>
                                <th>BILLING_ADDRESS</th>
                                <th>INVOICE_DATE</th>
                                <th>DUE_DATE</th>
                                <th>INVOICE_MESSAGE</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(isset($billing_results))
                                @foreach($billing_results as $billing_result)
                                    <tr>
                                        <td>{{ $billing_result->customer_name}}</td>
                                        <td>{{ $billing_result->email_address}}</td>
                                        <td>{{ $billing_result->billing_address}}</td>
                                        <td>{{ $billing_result->invoice_date}}</td>
                                        <td>{{ $billing_result->due_date}}</td>
                                        <td>{{ $billing_result->invoice_message}}</td>
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
                                <h4 class="modal-title">Add billing record</h4>
                            </div>
                            <div class="modal-body">

                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="container">
                                            <form action="{{route('finance_billing_post')}}" method="post" >{!! csrf_field() !!}
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label for="">Customer Name</label>
                                                        <input name="customer_name" type="text" class="form-control">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="">Email Address</label>
                                                        <input name="email_address" type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-4">
                                                        <label for="">Billing Address</label>
                                                        <textarea name="billing_address" class="form-control"></textarea>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="">Invoice date</label>
                                                        <input name="invoice_date" type="date" class="form-control">
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="">Due Date</label>
                                                        <input name="due_date" type="date" class="form-control">
                                                    </div>
                                                </div>
                                                <hr>
                                                {{--<div class="form-row">--}}
                                                {{--<div class="form-group col-md-12">--}}
                                                {{--<table id='datatable' class="table table-striped table-bordered table-responsive">--}}
                                                {{--<thead>--}}
                                                {{--<tr>--}}
                                                {{--<th>#</th>--}}
                                                {{--<th>Product/Service</th>--}}
                                                {{--<th>Description</th>--}}
                                                {{--<th>Qty</th>--}}
                                                {{--<th>Rate</th>--}}
                                                {{--<th>Amount</th>--}}
                                                {{--</tr>--}}
                                                {{--</thead>--}}
                                                {{--<tbody>--}}
                                                {{--<tr>--}}
                                                {{--<td>1</td>--}}
                                                {{--<td></td>--}}
                                                {{--<td></td>--}}
                                                {{--<td></td>--}}
                                                {{--<td></td>--}}
                                                {{--<td></td>--}}
                                                {{--</tr>--}}
                                                {{--</tbody>--}}
                                                {{--</table>--}}
                                                {{--</div>--}}
                                                {{--</div>--}}
                                                <div class="form-row">
                                                    <div class="form-group col-md-12">
                                                        <label for="">Invoice message</label>
                                                        <textarea name="invoice_message" class="form-control"></textarea>
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
    <!-- end container -->
@endsection

