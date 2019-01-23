@extends('layouts.master')
@section('content')

    <div class="card">
        <div class="card-header">
            <h4>Incoming Products</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="datatable" class="table table-bordered">
                    <thead>
                    <tr>
                        <th>source location </th>
                        <th>products</th>
                        <th>destination location</th>
                        <th>initial demand</th>
                        <th>source document</th>
                        <th>procurement group</th>
                        <th>purchase order line</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(isset($incoming_results))
                        @foreach($incoming_results as $incoming_result)
                            <tr>
                                <td>{{ $incoming_result->source_location }}</td>
                                <td>{{ $incoming_result->products }}</td>
                                <td>{{ $incoming_result->destination_location }}</td>
                                <td>{{ $incoming_result->initial_demand}}</td>
                                <td>{{ $incoming_result->source_document }}</td>
                                <td>{{ $incoming_result->procurement_group }}</td>
                                <td>{{ $incoming_result->purchase_order_line }}</td>
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
                                            <h4 class="theme-cl">INCOMING PRODUCTS</h4>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <form action="{{route('stores_control_incoming_products_post')}}" method="post" >{!! csrf_field() !!}
                                                <h3 class="mt-20">
                                                    Incoming Products
                                                </h3>
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                            <label for="exampleSelect1">Source Location</label>
                                                            <select class="form-control" id="exampleSelect1" name="source_location">
                                                                <option value="opt1">1</option>
                                                                <option value="opt2">2</option>
                                                            </select>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="exampleSelect1">Product</label>
                                                        <select class="form-control" id="exampleSelect1" name="products">
                                                            <option value="opt1">1</option>
                                                            <option value="opt2">2</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label for="exampleSelect1">Destination Location</label>
                                                        <select class="form-control" id="exampleSelect1" name="destination_location">
                                                            <option value="opt1">1</option>
                                                            <option value="opt2">2</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>Initial Demand</label>
                                                        <input type="text" class="form-control" name="initial_demand" placeholder="initial demand">
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <h4 class="mt-20">Origin</h4>
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label>Source Document</label>
                                                    <input type="text" class="form-control" name="source_document" placeholder="source document">
                                                </div>
                                                <div class="form-group col-md-12" >
                                                    <label for="exampleSelect1">Procurement Group</label>
                                                    <select class="form-control" id="exampleSelect1" name="procurement_group">
                                                        <option value="opt1">2</option>
                                                        <option value="opt2">1</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label>Purchase Order Line</label>
                                                    <input type="text" class="form-control" name="purchase_order_line">
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
