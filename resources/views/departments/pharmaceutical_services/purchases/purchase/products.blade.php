@extends('layouts.master')
@section('content')

    <div class="card">
        <div class="card-header">
            <h4>products</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="datatable" class="table table-bordered">
                    <thead>
                    <tr>
                        <th>product name</th>
                        <th>image</th>
                        <th>can be sold</th>
                        <th>can be purchased</th>
                        <th>product type</th>
                        <th>sale price</th>
                        <th>category</th>
                        <th>cost</th>
                        <th>internal reference</th>
                        <th>barcode</th>
                        <th>vendor </th>
                        <th>minimum quantity</th>
                        <th>price</th>
                        <th>start date</th>
                        <th>end date</th>
                        <th>buy</th>
                        <th>make order</th>
                        <th>internal reference</th>
                        <th>volume</th>
                        <th>customer lead time</th>
                        <th>responsible</th>
                        <th>customer taxes</th>
                        <th>vendor taxes</th>
                        <th>description of customers</th>
                        <th>description of vendors</th>
                        <th>description of delivery orders</th>
                        <th>description of reception</th>
                        <th>description of internal transfers</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(isset($spp_results))
                        @foreach($spp_results as $spp_result)
                            <tr>
                                <td>{{ $spp_result->product_name }}</td>
                                <td>N/A</td>
                                <td>{{ $spp_result->can_be_sold}}</td>
                                <td>{{ $spp_result->can_be_purchased}}</td>
                                <td>{{ $spp_result->product_type}}</td>
                                <td>{{ $spp_result->sale_price}}</td>
                                <td>{{ $spp_result->category}}</td>
                                <td>{{ $spp_result->cost}}</td>
                                <td>{{ $spp_result->internal_reference}}</td>
                                <td>{{ $spp_result->barcode}}</td>
                                <td>{{ $spp_result->vendor}}</td>
                                <td>{{ $spp_result->minimum_quantity}}</td>
                                <td>{{ $spp_result->price}}</td>
                                <td>{{ $spp_result->start_date}}</td>
                                <td>{{ $spp_result->end_date}}</td>
                                <td>{{ $spp_result->routes_buy}}</td>
                                <td>{{ $spp_result->routes_make_order}}</td>
                                <td>{{ $spp_result->weight}}</td>
                                <td>{{ $spp_result->volume}}</td>
                                <td>{{ $spp_result->customer_lead_time}}</td>
                                <td>{{ $spp_result->responsible}}</td>
                                <td>{{ $spp_result->receivables}}</td>
                                <td>{{ $spp_result->payables}}</td>
                                <td>{{ $spp_result->description_for_customers}}</td>
                                <td>{{ $spp_result->description_for_vendors}}</td>
                                <td>{{ $spp_result->description_for_delivery_orders}}</td>
                                <td>{{ $spp_result->description_for_reception}}</td>
                                <td>{{ $spp_result->description_for_internal_transfers}}</td>
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
                                            <h4 class="theme-cl">PRODUCTS</h4>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <form enctype="multipart/form-data" action="{{route('pharmacy_purchase_products_post')}}" method="post">
                                            {{csrf_field()}}
                                            <h3 class="mt-20">Product</h3>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label>Product Name</label>
                                                    <input type="text" class="form-control" name="product_name" placeholder="Product Name">
                                                </div>
                                                {{--<div class="form-group col-md-6">--}}
                                                {{--<div class="form-group">--}}
                                                {{--<label for="exampleInputFile">INPUT IMAGE</label>--}}
                                                {{--<input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">--}}
                                                {{--<small id="fileHelp" class="form-text text-muted">image input.</small>--}}
                                                {{--</div>--}}
                                                {{--</div>--}}
                                            </div>
                                            <div class="form-row">
                                                <div class="col-sm-2">
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" name="can_be_sold" id="optionsRadios2" value="option2">
                                                        <label class="form-check-label">Can be Sold</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" name="can_be_purchased" id="optionsRadios2" value="option2">
                                                        <label class="form-check-label">Can be Purchased</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="exampleSelect1">Product Type</label>
                                                    <select class="form-control" id="exampleSelect1" name="product_type">
                                                        <option value="opt1">Consumable</option>
                                                        <option value="opt2">Service</option>
                                                        <option value="opt3">Stockable Product</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Sale Price</label>
                                                    <input type="number" class="form-control" name="sale_price" placeholder="sale price">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="exampleSelect1">Category</label>
                                                    <select class="form-control" id="exampleSelect1" name="category">
                                                        <option value="opt1"></option>
                                                        <option value="opt2"></option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Cost</label>
                                                    <input type="number" class="form-control" name="cost" placeholder="cost">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label>Internal Reference</label>
                                                    <input type="text" class="form-control" name="internal_reference" placeholder="internal reference">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Barcode</label>
                                                    <input type="text" class="form-control" name="barcode" placeholder="Barcode">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <h4 class="modal-title">SALES</h4>
                                            </div>
                                            <div class="form-row">
                                                <h4 class="modal-title">PURCHASE</h4>
                                                <div class="table-responsive">
                                                    <table id="datatable" class="table table-bordered">
                                                        <thead>
                                                        <tr>
                                                            <th>vendor</th>
                                                            <th>minimum quantity</th>
                                                            <th>price</th>
                                                            <th>start date</th>
                                                            <th>end date</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td><input type="text" class="form-control" name="vendor" ></td>
                                                            <td><input type="text" class="form-control" name="minimum_quantity" ></td>
                                                            <td><input type="number" class="form-control" name="price" ></td>
                                                            <td><input type="date" class="form-control" name="start_date" ></td>
                                                            <td><input type="date" class="form-control" name="end_date" ></td>

                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <h4 class="modal-title">INVENTORY</h4>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <h4 class="modal-title">Operations</h4>
                                                    <label>Routes</label>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" name="routes_buy" id="optionsRadios2" value="option2">
                                                        <label class="form-check-label">Buy</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" name="routes_make_order" id="optionsRadios2" value="option2">
                                                        <label class="form-check-label">Make Order</label>
                                                    </div>
                                                </div>

                                                <div class="form-group col-md-6">
                                                    <h4 class="modal-title">Logistics</h4>
                                                    <label>Weight</label>
                                                    <input type="number" class="form-control" name="weight" placeholder="weight">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6"></div>
                                                <div class="form-group col-md-6">
                                                    <label>Volume</label>
                                                    <input type="text" class="form-control" name="volume" placeholder="volume">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label>Customer Lead Time(Days)</label>
                                                    <input type="number" class="form-control" name="customer_lead_time" placeholder="customer lead time">
                                                </div>
                                                <div class="form-group col-md-6" >
                                                    <label for="exampleSelect1">Responsible</label>
                                                    <select class="form-control" id="exampleSelect1" name="responsible">
                                                        <option value="opt1"></option>
                                                        <option value="opt2"></option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <h4 class="modal-title">INVOICING</h4>
                                                </div>
                                                <div class="form-group col-md-6" >
                                                    <label>RECEIVABLES: </label>
                                                    <label for="exampleSelect1">Customer Taxes</label>
                                                    <select class="form-control" id="exampleSelect1" name="receivables">
                                                        <option value="10"></option>
                                                        <option value="20"></option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>PAYABLES: </label>
                                                    <label for="exampleSelect1">Vendor Taxes</label>
                                                    <select class="form-control" id="exampleSelect1" name="payables">
                                                        <option value="10"></option>
                                                        <option value="20"></option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <h4 class="modal-title">NOTES</h4>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <div class="form-group">
                                                        <h4 class="modal-title">Description for customers</h4>
                                                        <label for="exampleTextarea">This note will show up on customer orders</label>
                                                        <textarea name="description_for_customers" class="form-control" id="exampleTextarea" rows="3"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <div class="form-group">
                                                        <h4 class="modal-title">Description for vendors</h4>
                                                        <label for="exampleTextarea">This note will show up on vendor orders</label>
                                                        <textarea name="description_for_vendors" class="form-control" id="exampleTextarea" rows="3"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <div class="form-group">
                                                        <h4 class="modal-title">Description for delivery orders</h4>
                                                        <label for="exampleTextarea">This note will show up on delivery orders</label>
                                                        <textarea name="description_for_delivery_orders" class="form-control" id="exampleTextarea" rows="3"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <div class="form-group">
                                                        <h4 class="modal-title">Description for reception</h4>
                                                        <label for="exampleTextarea">This note will show up on receeption  orders</label>
                                                        <textarea name="description_for_reception" class="form-control" id="exampleTextarea" rows="3"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <h4 class="modal-title">Description for internal transfers</h4>
                                                    <label for="exampleTextarea">This note will show up on transfer orders</label>
                                                    <textarea name="description_for_internal_transfers" class="form-control" id="exampleTextarea" rows="3"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <button class="btn btn-primary" type="submit">Submit</button>
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
