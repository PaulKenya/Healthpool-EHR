@extends('layouts.master')
@section('content')

    <div class="card">
        <div class="card-header">
            <h4>NEW PRODUCTS</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="datatable" class="table table-bordered">
                    <thead>
                    <tr>
                        <th>vendor</th>
                        <th>ORDER DATE</th>
                        <th>VENDOR REFERENCE</th>
                        <th>PRODUCT</th>
                        <th>DESCRIPTION</th>
                        <th>SCHEDULED DATE</th>
                        <th>QUANTITY</th>
                        <th>RECEIVABLE QUANTITY</th>
                        <th>BILLABLE QUANTITY</th>
                        <th>UNIT PRICE</th>
                        <th>TAXES</th>
                        <th>SUBTOTAL</th>
                        <th>TERMS AND CONDITION</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(isset($products_results))
                        @foreach($products_results as $products_result)
                            <tr>
                                <td>{{$products_result->vendor }}</td>
                                <td>{{ $products_result-> order_date}}</td>
                                <td>{{ $products_result-> vendor_reference}}</td>
                                <td>{{ $products_result-> product}}</td>
                                <td>{{ $products_result-> description}}</td>
                                <td>{{ $products_result-> scheduled_date}}</td>
                                <td>{{ $products_result-> quantity}}</td>
                                <td>{{ $products_result-> receivable_quantity}}</td>
                                <td>{{ $products_result-> billable_quantity}}</td>
                                <td>{{ $products_result-> unit_price}}</td>
                                <td>{{ $products_result-> taxes}}</td>
                                <td>{{ $products_result-> sub_total}}</td>
                                <td>{{ $products_result-> terms_and_conditions}}</td>


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
                <!-- Modal content-->
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
                                            <h4 class="theme-cl">NEW PRODUCTS</h4>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <form action="{{route('pharmacy_po_new_products_post')}}" method="post" >{!! csrf_field() !!}
                                            <h4 class="modal-title">REQUEST FOR QUOTATION</h4>
                                            <div class="form-row">
                                                <div class="form-group col-md-6" >
                                                    <label for="exampleSelect1">Vendor</label>
                                                    <select class="form-control" id="exampleSelect1" name="VENDOR">
                                                        <option value="opt1">1</option>
                                                        <option value="opt2">2</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Order Date</label>
                                                    <input type="date" class="form-control" name="ORDER_DATE" placeholder="order date">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label>Vendor Reference</label>
                                                    <input type="text" class="form-control" name="VENDOR_REFERENCE" placeholder="vendor reference">
                                                </div>
                                            </div>
                                            <div class="table-responsive">
                                                <table id="datatable" class="table table-bordered">
                                                    <thead>
                                                    <tr>
                                                        <th>product</th>
                                                        <th>description</th>
                                                        <th>scheduled date</th>
                                                        <th>quantity</th>
                                                        <th>received quantity</th>
                                                        <th>billed quantity</th>
                                                        <th>unit price</th>
                                                        <th>taxes</th>
                                                        <th>subtotal</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td><input type="text" class="form-control" name="PRODUCT" ></td>
                                                        <td><input type="text" class="form-control" name="DESCRIPTION" ></td>
                                                        <td><input type="date" class="form-control" name="SCHEDULED_DATE" ></td>
                                                        <td><input type="number" class="form-control" name="QUANTITY" ></td>
                                                        <td><input type="number" class="form-control" name="RECEIVABLE_QUANTITY" ></td>
                                                        <td><input type="number" class="form-control" name="BILLABLE_QUANTITY" ></td>
                                                        <td><input type="number" class="form-control" name="UNIT_PRICE" ></td>
                                                        <td><input type="number" class="form-control" name="TAXES" ></td>
                                                        <td><input type="number" class="form-control" name="SUB_TOTAL" ></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group">
                                                    <label for="exampleTextarea">Define your Terms and Conditions</label>
                                                    <textarea class="form-control" id="exampleTextarea" rows="3" name="TERMS_AND_CONDITIONS"></textarea>
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
