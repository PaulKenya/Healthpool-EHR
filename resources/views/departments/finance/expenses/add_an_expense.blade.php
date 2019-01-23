@extends('layouts.master')

@section('content')

    <!-- Title & Breadcrumbs-->
    <div class="row page-titles">
        <div class="col-md-12 align-self-center">
            <h4 class="theme-cl">EXPENSE INFORMATION</h4>
        </div>
    </div>
    <!-- Title & Breadcrumbs-->

    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Add An Expense</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable" class="table table-striped">
                            <thead>
                            <tr>
                                <th>ACCOUNT</th>
                                <th>BALANCE</th>
                                <th>PAYMENT DATE</th>
                                <th>PAYMENT </th>
                                <th>MEMO</th>
                                <th>ATTACHMENTS</th>
                                <th>PRODUCT</th>
                                <th>DESCRIPTION</th>
                                <th>QUANTITY</th>
                                <th>AMOUNT</th>
                                <th>SERVICE</th>
                                <th>DESCRIPTION1</th>
                                <th>QUANTITY1</th>
                                <th>SERVICE</th>
                                <th>AMOUNT1</th>



                            </tr>
                            </thead>
                            <tbody>
                            @if(isset($addexpense_results))
                                @foreach($addexpense_results as $addexpense_result)
                                    <tr>
                                        <td>{{$addexpense_result->account}}</td>
                                        <td>{{$addexpense_result->balance}}</td>
                                        <td>{{$addexpense_result->paymentdate}}</td>
                                        <td>{{$addexpense_result->payment}}</td>
                                        <td>{{$addexpense_result->memo}}</td>
                                        <td>{{$addexpense_result->attachments}}</td>
                                        <td>{{$addexpense_result->product}}</td>
                                        <td>{{$addexpense_result->description}}</td>
                                        <td>{{$addexpense_result->quantity}}</td>
                                        <td>{{$addexpense_result->amount}}</td>
                                        <td>{{$addexpense_result->service}}</td>
                                        <td>{{$addexpense_result->sdescription}}</td>
                                        <td>{{$addexpense_result->squantity}}</td>
                                        <td>{{$addexpense_result->rate}}</td>
                                        <td>{{$addexpense_result->samount}}</td>
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
                                <h4 class="modal-title">Add Expense Information</h4>
                            </div>
                            <div class="modal-body">

                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="container">
                                            <form action="{{route('finance_expenses_addexpense_post')}}" method="post" >{!! csrf_field() !!}
                                                <div class="form-group row">
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <div class="col-md-6">
                                                                <label for="exampleInputEmail1">Bank/Credit Account No:</label>
                                                                <input type="number" class="form-control" name="account" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" ">
                                                                <small id="emailHelp" class="form-text text-muted"> .</small>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="exampleInputEmail1">Balance Ksh0.00:</label>
                                                                <select name="balance" class="form-control" id="exampleSelect1">
                                                                    <option>Cash and cash equivalents</option>
                                                                    <option>Allowance for bad debt</option>
                                                                    <option>Available for sale assets (short-term)</option>
                                                                    <option>Inventory</option>
                                                                    <option>Inventory Asset</option>
                                                                    <option>Prepaid expenses</option>
                                                                    <option>Uncategorised Asset</option>
                                                                    <option>Uncategorised Asset</option>
                                                                </select>
                                                                <small id="emailHelp" class="form-text text-muted"> .</small>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-md-6">
                                                                <label for="exampleInputEmail1">Payment Date:</label>
                                                                <input type="date" class="form-control" name="paymentdate" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" ">
                                                                <small id="emailHelp" class="form-text text-muted"> .</small>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="exampleInputEmail1">Payment Method:</label>
                                                                <select name="payment" class="form-control" id="exampleSelect1">
                                                                    <option>Cash</option>
                                                                    <option>credit card</option>
                                                                    <option>cheque</option>
                                                                    <option>direct debit</option>
                                                                </select>
                                                                <small id="emailHelp" class="form-text text-muted"> .</small>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-md-6">
                                                                <label for="exampleInputEmail1">Memo:</label>
                                                                <input type="text" class="form-control" name="memo" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                                                                <small id="emailHelp" class="form-text text-muted"> .</small>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="exampleInputEmail1">Attachments:</label>
                                                                <input type="file" class="form-control" name="attachments" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                                                                <small id="emailHelp" class="form-text text-muted"> .</small>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <div class="col-md-12">
                                                                <table class="table table-bordered">
                                                                    <thead>
                                                                    <tr>
                                                                        <th>#</th>
                                                                        <th>PRODUCT/SERVICE</th>
                                                                        <th>DESCRIPTION</th>
                                                                        <th>QUANTITY</th>
                                                                        <th>AMOUNT</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <tr>
                                                                        <td>1</td>
                                                                        <td><input type="text" name="product" class="form-control" placeholder=""></td>
                                                                        <td><input type="text" name="description" class="form-control" placeholder=""></td>
                                                                        <td><input type="number" name="quantity" class="form-control" placeholder=""></td>
                                                                        <td><input type="number" name="amount" class="form-control" placeholder=""></td>
                                                                    </tr>

                                                                    </tbody>
                                                                </table>
                                                                <small id="emailHelp" class="form-text text-muted"> .</small>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
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
                                                                        <td><input type="text" name="service" class="form-control" placeholder=""></td>
                                                                        <td><input type="text" name="sdescription" class="form-control" placeholder=""></td>
                                                                        <td><input type="number" name="squantity" class="form-control" placeholder=""></td>
                                                                        <td><input type="text" name="rate" class="form-control" placeholder=""></td>
                                                                        <td><input type="number" name="samount" class="form-control" placeholder=""></td>
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