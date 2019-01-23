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
                        <th>VENDOR</th>
                        <th>ORDER DATE</th>
                        <th>VENDOR REFERENCE</th>
                        <th>PRODUCT</th>
                        <th>DESCRIPTION</th>
                        <th>SCHEDULED DATE</th>
                        <th>QUANTITY</th>
                        <th>UNIT PRICE</th>
                        <th>TAXES</th>
                        <th>SUBTOTAL</th>
                        <th>TERMS AND CONDITION</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(isset($np_results))
                        @foreach($np_results as $np_result)
                            <tr>
                                <td>{{ $np_result->vendor }}</td>
                                <td>{{ $np_result->order_date }}</td>
                                <td>{{ $np_result->vendor_reference }}</td>
                                <td>{{ $np_result->product}}</td>
                                <td>{{ $np_result->description}}</td>
                                <td>{{ $np_result->scheduled_date}}</td>
                                <td>{{ $np_result->quantity}}</td>
                                <td>{{ $np_result->unit_price}}</td>
                                <td>{{ $np_result->taxes}}</td>
                                <td>{{ $np_result->sub_total}}</td>
                                <td>{{ $np_result->terms_and_conditions}}</td>
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
                                        <form enctype="multipart/form-data" action="{{route('pharmacy_rfq_new_products_post')}}" method="post">
                                            {{csrf_field()}}
                                            <h4 class="modal-title">REQUEST FOR QUOTATION</h4>
                                            <div class="form-row">
                                                <div class="form-group col-md-6" >
                                                    <label for="exampleSelect1">Vendor</label>
                                                    <select class="form-control" id="exampleSelect1" name="vendor">
                                                        <option value="opt1"></option>
                                                        <option value="opt2"></option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Order Date</label>
                                                    <input type="date" class="form-control" name="order_date" placeholder="order date">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label>Vendor Reference</label>
                                                    <input type="text" class="form-control" name="vendor_reference" placeholder="vendor reference">
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
                                                        <th>unit price</th>
                                                        <th>taxes</th>
                                                        <th>subtotal</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td><input type="text" class="form-control" name="product" ></td>
                                                        <td><input type="text" class="form-control" name="description" ></td>
                                                        <td><input type="date" class="form-control" name="scheduled_date" ></td>
                                                        <td><input type="number" class="form-control" name="quantity" ></td>
                                                        <td><input type="number" class="form-control" name="unit_price" ></td>
                                                        <td><input type="number" class="form-control" name="taxes" ></td>
                                                        <td><input type="number" class="form-control" name="sub_total" ></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group">
                                                    <label for="exampleTextarea">Define your Terms and Conditions</label>
                                                    <textarea name="terms_and_conditions" class="form-control" id="exampleTextarea" rows="3"></textarea>
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
