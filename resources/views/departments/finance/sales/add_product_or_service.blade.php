@extends('layouts.master')

@section('content')

    <!-- Title & Breadcrumbs-->
    <div class="row page-titles">
        <div class="col-md-12 align-self-center">
            <h4 class="theme-cl">PRODUCT AND SERVICE INFORMATION</h4>
        </div>
    </div>
    <!-- Title & Breadcrumbs-->

    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Add A Product or Service</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable" class="table table-bordered">
                            <thead>
                            <tr>
                                <th>sku</th>
                                <th>category</th>
                                <th>quantity</th>
                                <th>date</th>
                                <th>reorder</th>
                                <th>account</th>
                                <th>picture</th>
                                <th>info</th>
                                <th>price</th>
                                <th>income</th>
                                <th>purchase</th>
                                <th>cost</th>
                                <th>expense</th>
                                <th>supplier</th>
                                <th>name</th>
                                <th>service_sku</th>
                                <th>service_category</th>
                                <th>service_picture</th>
                                <th>service_product</th>
                                <th>income_account</th>
                                <th>sales_price</th>
                                <th>purchase_service_product</th>
                                <th>sales_description</th>
                                <th>expenses_account</th>
                                <th>purchase_cost</th>
                                <th>preferred_supplier</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(isset($ps_results))
                                @foreach($ps_results as $ps_result)
                                    <tr>
                                        <td>{{ $ps_result->sku }}</td>
                                        <td>{{ $ps_result->category }}</td>
                                        <td>{{ $ps_result->quantity }}</td>
                                        <td>{{ $ps_result->date }}</td>
                                        <td>{{ $ps_result->reorder }}</td>
                                        <td>{{ $ps_result->account }}</td>
                                        <td>{{ $ps_result->picture }}</td>
                                        <td>{{ $ps_result->info }}</td>
                                        <td>{{ $ps_result->price }}</td>
                                        <td>{{ $ps_result->income }}</td>
                                        <td>{{ $ps_result->purchase }}</td>
                                        <td>{{ $ps_result->cost }}</td>
                                        <td>{{ $ps_result->expense }}</td>
                                        <td>{{ $ps_result->supplier }}</td>
                                        <td>{{ $ps_result->name }}</td>
                                        <td>{{ $ps_result->service_sku }}</td>
                                        <td>{{ $ps_result->service_category }}</td>
                                        <td>{{ $ps_result->service_picture }}</td>
                                        <td>{{ $ps_result->service_product }}</td>
                                        <td>{{ $ps_result->income_account }}</td>
                                        <td>{{ $ps_result->sales_price }}</td>
                                        <td>{{ $ps_result->purchase_service_product }}</td>
                                        <td>{{ $ps_result->sales_description }}</td>
                                        <td>{{ $ps_result->expenses_account }}</td>
                                        <td>{{ $ps_result->purchase_cost }}</td>
                                        <td>{{ $ps_result->preferred_supplier }}</td>
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
                                <h4 class="modal-title">Add Product and Service Information</h4>
                            </div>
                            <div class="modal-body">

                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="container">
                                            <form action="{{route('finance_sales_add_product_service_post')}}" method="post" >{!! csrf_field() !!}

                                                <div class="form-group row">
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <div class="col-md-12">
                                                                <label for="exampleInputEmail1">SKU:</label>
                                                                <input type="text" class="form-control" name="sku" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" ">
                                                                <small id="emailHelp" class="form-text text-muted"> .</small>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-md-12">
                                                                <label for="exampleInputEmail1">Category:</label>
                                                                <input type="text" class="form-control" name="category" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" ">
                                                                <small id="emailHelp" class="form-text text-muted"> .</small>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-md-12">
                                                                <label for="exampleInputEmail1">Initial Quantity On Hand:</label>
                                                                <input type="text" class="form-control" name="quantity" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" ">
                                                                <small id="emailHelp" class="form-text text-muted"> .</small>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-md-12">
                                                                <label for="exampleInputEmail1">Date As Of:</label>
                                                                <input type="date" class="form-control" name="date" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" ">
                                                                <small id="emailHelp" class="form-text text-muted"> .</small>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-md-12">
                                                                <label for="exampleInputEmail1">Reorder Point:</label>
                                                                <input type="text" class="form-control" name="reorder" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                                                                <small id="emailHelp" class="form-text text-muted"> .</small>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-md-12">
                                                                <label for="exampleInputEmail1">Inventory Asset Account:</label>
                                                                <select name="account" class="form-control" id="exampleSelect1">
                                                                    <option>Inventory</option>
                                                                    <option>Inventory Asset</option>
                                                                </select>
                                                                <small id="emailHelp" class="form-text text-muted"> .</small>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-md-12">
                                                                <label for="exampleInputEmail1">Attach Picture:</label>
                                                                <input type="file" class="form-control" name="picture" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                                                                <small id="emailHelp" class="form-text text-muted"> .</small>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <div class="col-md-12">
                                                                <label for="exampleInputEmail1">Sales Information:</label>
                                                                <input type="text" class="form-control" name="info" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" ">
                                                                <small id="emailHelp" class="form-text text-muted"> .</small>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-md-6">
                                                                <label for="exampleInputEmail1">Sales Price/Rate:</label>
                                                                <input type="number" class="form-control" name="price" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" ">
                                                                <small id="emailHelp" class="form-text text-muted"> .</small>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label for="exampleInputEmail1">Income Account:</label>
                                                                <input type="number" class="form-control" name="income" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" ">
                                                                <small id="emailHelp" class="form-text text-muted"> .</small>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-md-12">
                                                                <label for="exampleInputEmail1">Purchasing Information:</label>
                                                                <input type="text" class="form-control" name="purchase" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" ">
                                                                <small id="emailHelp" class="form-text text-muted"> .</small>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-md-6">
                                                                <label for="exampleInputEmail1">Cost:</label>
                                                                <input type="number" class="form-control" name="cost" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" ">
                                                                <small id="emailHelp" class="form-text text-muted"> .</small>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="exampleInputEmail1">Expense Account:</label>
                                                                <select name="expense" class="form-control" id="exampleSelect1">
                                                                    <option>Cost of sales</option>
                                                                    <option>Other</option>
                                                                </select>
                                                                <small id="emailHelp" class="form-text text-muted"> .</small>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-md-12">
                                                                <label for="exampleInputEmail1">Preferred Supplier:</label>
                                                                <input type="text" class="form-control" name="supplier" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" ">
                                                                <small id="emailHelp" class="form-text text-muted"> .</small>
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <br>
                                                    </div>
                                                </div>
                                                <h3><u>SERVICE</u></h3>
                                                <div class="form-group row">
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <div class="col-md-12">
                                                                <label for="exampleInputEmail1">Name:</label>
                                                                <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" ">
                                                                <small id="emailHelp" class="form-text text-muted"> .</small>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-md-12">
                                                                <label for="exampleInputEmail1">SKU:</label>
                                                                <input type="text" class="form-control" name="service_sku" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" ">
                                                                <small id="emailHelp" class="form-text text-muted"> .</small>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-md-12">
                                                                <label for="exampleInputEmail1">Category:</label>
                                                                <input type="text" class="form-control" name="service_category" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" ">
                                                                <small id="emailHelp" class="form-text text-muted"> .</small>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-md-12">
                                                                <label for="exampleInputEmail1">Attach Picture:</label>
                                                                <input type="file" class="form-control" name="service_picture" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" ">
                                                                <small id="emailHelp" class="form-text text-muted"> .</small>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <p>1.SALES INFORMATION</p>
                                                            <div class="col-md-12">
                                                                <label for="exampleInputEmail1">I sell this service/product :</label>
                                                                <input type="checkbox" class="form-control" name="service_product" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                                                                <small id="emailHelp" class="form-text text-muted"> .</small>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-md-12">
                                                                <label for="exampleInputEmail1">Income Account:</label>
                                                                <select name="income_account" class="form-control" id="exampleSelect1">
                                                                    <option>Sales</option>
                                                                    <option>Sales - retail</option>
                                                                    <option>Sales - wholesale</option>
                                                                    <option>Sales of Product Income</option>
                                                                    <option>categorised Income</option>
                                                                    <option>Uncategorised Income</option>
                                                                    <option>Change in inventory - COS</option>
                                                                    <option>Cost of sales</option>
                                                                    <option>Direct labour - COS</option>
                                                                    <option>Discounts given - COS</option>
                                                                    <option>Freight and delivery - COS</option>
                                                                    <option>Materials - COS</option>
                                                                </select>
                                                                <small id="emailHelp" class="form-text text-muted"> .</small>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-md-12">
                                                                <label for="exampleInputEmail1">Sales Price/Rate:</label>
                                                                <input type="text" class="form-control" name="sales_price" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                                                                <small id="emailHelp" class="form-text text-muted"> .</small>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <p>2.PURCHASE INFORMATION</p>
                                                            <div class="col-md-12">
                                                                <label for="exampleInputEmail1">I purchase this service/product :</label>
                                                                <input type="checkbox" class="form-control" name="purchase_service_product" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                                                                <small id="emailHelp" class="form-text text-muted"> .</small>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-md-12">
                                                                <label for="exampleInputEmail1">Sales Description Forms:</label>
                                                                <input type="text" class="form-control" name="sales_description" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                                                                <small id="emailHelp" class="form-text text-muted"> .</small>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-md-12">
                                                                <label for="exampleInputEmail1">Expense Account:</label>
                                                                <select name="expenses_account" class="form-control" id="exampleSelect1">
                                                                    <option>Purchases</option>
                                                                    <option>Rent or lease payments</option>
                                                                    <option>Repairs and Maintenance</option>
                                                                    <option>Shipping and delivery expense</option>
                                                                    <option>Stationery and printing</option>
                                                                    <option>Supplies</option>
                                                                    <option>Travel expenses - general and admin expenses</option>
                                                                    <option>Travel expenses - selling expenses</option>
                                                                    <option>Uncategorised Expense</option>
                                                                    <option>Uncategorised Expense</option>
                                                                    <option>Utilities</option>
                                                                    <option>Wage expenses</option>
                                                                </select>
                                                                <small id="emailHelp" class="form-text text-muted"> .</small>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-md-12">
                                                                <label for="exampleInputEmail1">Cost:</label>
                                                                <input type="number" class="form-control" name="purchase_cost" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                                                                <small id="emailHelp" class="form-text text-muted"> .</small>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-md-12">
                                                                <label for="exampleInputEmail1">Preferred Supplier:</label>
                                                                <input type="text" class="form-control" name="preferred_supplier" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
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