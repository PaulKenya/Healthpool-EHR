@extends('layouts.master')

@section('content')

    <!-- Title & Breadcrumbs-->
    <div class="row page-titles">
        <div class="col-md-12 align-self-center">
            <h4 class="theme-cl">INVOICE</h4>
        </div>
    </div>
    <!-- Title & Breadcrumbs-->

    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Create Invoice</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable" class="table table-bordered">
                            <thead>
                            <tr>
                                <th>customer</th>
                                <th>email</th>
                                <th>address</th>
                                <th>payment</th>
                                <th>invoicedate</th>
                                <th>duedate</th>
                                <th>message</th>
                                <th>statement</th>
                                <th>attachments</th>
                                <th>productservice</th>
                                <th>description</th>
                                <th>quantity</th>
                                <th>rate</th>
                                <th>amount</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(isset($si_results))
                                @foreach($si_results as $si_result)
                                    <tr>
                                        <td>{{ $si_result->customer }}</td>
                                        <td>{{ $si_result->email }}</td>
                                        <td>{{ $si_result->address }}</td>
                                        <td>{{ $si_result->payment }}</td>
                                        <td>{{ $si_result->invoicedate }}</td>
                                        <td>{{ $si_result->duedate }}</td>
                                        <td>{{ $si_result->message }}</td>
                                        <td>{{ $si_result->statement }}</td>
                                        <td>{{ $si_result->attachments }}</td>
                                        <td>{{ $si_result->productservice }}</td>
                                        <td>{{ $si_result->description }}</td>
                                        <td>{{ $si_result->quantity }}</td>
                                        <td>{{ $si_result->rate }}</td>
                                        <td>{{ $si_result->amount }}</td>
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
                                <h4 class="modal-title">Add Invoice Information</h4>
                            </div>
                            <div class="modal-body">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="container">
                                            <form action="{{route('finance_sales_invoice_post')}}" method="post" >{!! csrf_field() !!}
                                                <div class="form-row">
                                                    <div class="col-md-6">
                                                        <div class="form-row">
                                                            <div class="col-md-6">
                                                                <label for="exampleInputEmail1">Choose A Customer:</label>
                                                                <input type="text" class="form-control" name="customer" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" ">
                                                                <small id="emailHelp" class="form-text text-muted"> .</small>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="exampleInputEmail1">Email:</label>
                                                                <input type="text" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" ">
                                                                <small id="emailHelp" class="form-text text-muted"> .</small>
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="col-md-6">
                                                                <label for="exampleInputEmail1">Billing Address:</label>
                                                                <input type="number" class="form-control" name="address" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" ">
                                                                <small id="emailHelp" class="form-text text-muted"> .</small>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="exampleInputEmail1">Terms:</label>
                                                                <select name="payment" class="form-control" id="exampleSelect1">
                                                                    <option value="1">Due on receipt</option>
                                                                    <option value="2">Net 15</option>
                                                                    <option value="3">Net 30</option>
                                                                    <option value="4">Net 60</option>
                                                                </select>
                                                                <small id="emailHelp" class="form-text text-muted"> .</small>
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="col-md-6">
                                                                <label for="exampleInputEmail1">Invoice Date:</label>
                                                                <input type="date" class="form-control" name="invoicedate" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                                                                <small id="emailHelp" class="form-text text-muted"> .</small>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="exampleInputEmail1">Due Date:</label>
                                                                <input type="date" class="form-control" name="duedate" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                                                                <small id="emailHelp" class="form-text text-muted"> .</small>
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="col-md-4">
                                                                <label for="exampleInputEmail1">Message displayed on invoice:</label>
                                                                <input type="text" class="form-control" name="message" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                                                                <small id="emailHelp" class="form-text text-muted"> .</small>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label for="exampleInputEmail1">Statement Memo:</label>
                                                                <input type="text" class="form-control" name="statement" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                                                                <small id="emailHelp" class="form-text text-muted"> .</small>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label for="exampleInputEmail1">Attachments:</label>
                                                                <input type="text" class="form-control" name="attachments" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                                                                <small id="emailHelp" class="form-text text-muted"> .</small>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-row">
                                                            <div class="col-md-12">
                                                                <table class="table table-bordered">
                                                                    <thead>
                                                                    <tr>
                                                                        <th>#</th>
                                                                        <th>PRODUCT/SERVICE</th>
                                                                        <th>DESCRIPTION</th>
                                                                        <th>QUANTITY</th>
                                                                        <th>RATE</th>
                                                                        <th>AMOUNT</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <tr>
                                                                        <td>1</td>
                                                                        <td><input type="text" name="productservice" class="form-control" placeholder=""></td>
                                                                        <td><input type="text" name="description" class="form-control" placeholder=""></td>
                                                                        <td><input type="number" name="quantity" class="form-control" placeholder=""></td>
                                                                        <td><input type="text" name="rate" class="form-control" placeholder=""></td>
                                                                        <td><input type="number" name="amount" class="form-control" placeholder=""></td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                                <small id="emailHelp" class="form-text text-muted"> .</small>
                                                            </div>
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