@extends('layouts.master')
@section('content')

    <div class="card">
        <div class="card-header">
            <h4>vendors</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="datatable" class="table table-bordered">
                    <thead>
                    <tr>
                        <th>bill</th>
                        <th>vendor</th>
                        <th>bill date</th>
                        <th>vendor reference </th>
                        <th>due date</th>
                        <th>all purchase orders</th>
                        <th>product</th>
                        <th>description</th>
                        <th>quantity</th>
                        <th>unit price</th>
                        <th>taxes</th>
                        <th>amount</th>
                        <th>responsible</th>
                        <th>fiscal position</th>

                    </tr>
                    </thead>
                    <tbody>
                    @if(isset($vendor_results))
                        @foreach($vendor_results as $vendor_result)
                            <tr>
                                <td>{{ $vendor_result-> bill}}</td>
                                <td>{{ $vendor_result-> vendor}}</td>
                                <td>{{ $vendor_result-> bill_date}}</td>
                                <td>{{ $vendor_result-> vendor_reference}}</td>
                                <td>{{ $vendor_result-> due_date}}</td>
                                <td>{{ $vendor_result-> all_purchase_orders}}</td>
                                <td>{{ $vendor_result-> product}}</td>
                                <td>{{ $vendor_result-> description}}</td>
                                <td>{{ $vendor_result-> quantity}}</td>
                                <td>{{ $vendor_result-> unit_price}}</td>
                                <td>{{ $vendor_result-> taxes}}</td>
                                <td>{{ $vendor_result-> amount}}</td>
                                <td>{{ $vendor_result-> responsible}}</td>
                                <td>{{ $vendor_result-> fiscal_position}}</td>
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
                        <h4 class="modal-title">Add Items To Store</h4>
                    </div>
                    <div class="modal-body">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="container">
                                    <div class="row page-titles">
                                        <div class="col-md-12 align-self-center text-center">
                                            <h4 class="theme-cl">Vendor Bill</h4>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <form action="{{route('stores_control_vendor_bills_post')}}" method="post" >{!! csrf_field() !!}
                                                <h3 class="mt-20">Vendor Bill</h3>
                                                <div class="form-group col-md-12">
                                                    <label>BILL/2018/</label>
                                                    <input type="number" class="form-control" name="bill" placeholder="">
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label for="exampleSelect1">Vendor</label>
                                                        <select class="form-control" id="exampleSelect1" name="vendor">
                                                            <option value="opt1">1</option>
                                                            <option value="opt2">2</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>Bill Date</label>
                                                        <input type="date" class="form-control" name="bill_date" placeholder="bill date">
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                    <label>Vendor Reference</label>
                                                        <input type="text" class="form-control" name="vendor_reference" placeholder="vendor reference">
                                                    </div>
                                                    <div class="form-group col-md-6"><label>Due Date</label>
                                                        <input type="date" class="form-control" name="due_date" placeholder="due date">
                                                    </div>

                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="exampleSelect1">Add Purchase Order</label>
                                                    <select class="form-control" id="exampleSelect1" name="all_purchase_orders">
                                                        <option value="opt1">1</option>
                                                        <option value="opt2">2</option>
                                                    </select>
                                                </div>
                                                <h4 class="modal-title">Bill</h4>
                                                <div class="table-responsive">
                                                    <table id="datatable" class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th>product</th>
                                                                <th>description</th>
                                                                <th>quantity</th>
                                                                <th>unit price</th>
                                                                <th>taxes</th>
                                                                <th>amount</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td><input type="text" class="form-control" name="product" ></td>
                                                                <td><input type="text" class="form-control" name="description" ></td>
                                                                <td><input type="number" class="form-control" name="quantity" ></td>
                                                                <td><input type="number" class="form-control" name="unit_price" ></td>
                                                                <td><input type="number" class="form-control" name="taxes" ></td>
                                                                <td><input type="number" class="form-control" name="amount" ></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            <h4 class="modal-title">Tax</h4>
                                            <div class="table-responsive">
                                                <table id="datatable" class="table table-bordered">
                                                    <thead>
                                                    <tr>
                                                        <th>Tax Description</th>
                                                        <th>Amount</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td><input type="number" class="form-control" name="taxes" ></td>
                                                        <td><input type="number" class="form-control" name="amount" ></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                                <h4 class="modal-title">Other Info</h4>
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label for="exampleSelect1">Responsible</label>
                                                        <select class="form-control" id="exampleSelect1" name="responsible">
                                                            <option value="opt1">1</option>
                                                            <option value="opt2">2</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="exampleSelect1">Fiscal Position </label>
                                                        <select class="form-control" id="exampleSelect1" name="fiscal_position">
                                                            <option value="opt1">1</option>
                                                            <option value="opt2">2</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6">

                                                    <label for="exampleSelect1">Payment Terms</label>
                                                    <select class="form-control" id="exampleSelect1" name="">
                                                        <option value="opt1">Immediate Payment</option>
                                                        <option value="opt2">15 days</option>
                                                        <option value="opt3">30 net days</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <input type="text" class="form-control" name="" placeholder="reference/description">
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
@endsection
