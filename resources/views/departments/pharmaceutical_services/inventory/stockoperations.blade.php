@extends('layouts.master')

@section('content')

    <div class="row page-titles">
        <div class="col-md-12 align-self-center text-center">
            <h4 class="theme-cl">STOCK OPERATIONS</h4>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h4>STOCK OPERATIONS</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="datatable" class="table table-bordered">
                    <thead>
                        <tr>
                            <th>PARTNER</th>
                            <th>SCHEDULED DATE</th>
                            <th>SOURCE DOCUMENT</th>
                            <th>PRODUCT</th>
                            <th>INITIAL DEMAND</th>
                            <th>RESERVED</th>
                            <th>DONE</th>
                            <th>SHIPPING POLICY</th>
                            <th>OPERATION TYPE</th>
                            <th>PRIORITY</th>
                        </tr>
                    </thead>
                    <tbody>
                    @if(isset($stockoperations_results))
                        @foreach($stockoperations_results as $stockoperations_result)
                        <tr>
                            <td>{{ $stockoperations_result->partner}}</td>
                            <td>{{ $stockoperations_result->scheduled_date}}</td>
                             <td>{{ $stockoperations_result->source_document}}</td>
                            <td>{{ $stockoperations_result->product}}</td>
                            <td>{{ $stockoperations_result->initial_demand}}</td>
                            <td>{{ $stockoperations_result->reserved}}</td>
                            <td>{{ $stockoperations_result->done}}</td>
                            <td>{{ $stockoperations_result->shipping_policy}}</td>
                            <td>{{ $stockoperations_result->operation_type}}</td>
                            <td>{{ $stockoperations_result->priority}}</td>


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
                        <h4 class="modal-title">STOCK OPERATIONS</h4>
                    </div>
                    <div class="modal-body">

                        <div class="col-md-12">
                            <div class="card">
                                <div class="container-fluid">
                                    <!-- <h1 class="text-center">GENERAL LABORATORY REQUEST FORM</h1> -->
                                    <br>
                                    <form action="{{route('pharmacy_stockoperations_post')}}" method="post" >{!! csrf_field() !!}
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label>Partner:</label>
                                                <input type="text" class="form-control" name="partner">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label>Scheduled Date:</label>
                                                <input type="date" class="form-control" name="scheduled_date">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label>Source Document:</label>
                                                <input type="text" class="form-control" name="source_document">
                                            </div>
                                        </div>
                                        <h5><b>Operations</b></h5>
                                        <div class="form-row">
                                            <div class="form-group col-md-3">
                                                <label>Product:</label>
                                                <input type="text" class="form-control" name="product">
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label>Initial Demand:</label>
                                                <input type="number" class="form-control" name="initial_demand">
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label>Reserved:</label>
                                                <input type="number" class="form-control" name="reserved">
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label>Done:</label>
                                                <input type="number" class="form-control" name="done">
                                            </div>
                                        </div>
                                        <h5><b>Additional Information</b></h5>
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label>Shipping Policy:</label>
                                                <input type="text" class="form-control" name="shipping_policy">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label>Operation Type:</label>
                                                <input type="text" class="form-control" name="operation_type">
                                            </div>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label >Priority:</label>
                                            <select class="custom-select" name="priority">
                                                <option value="Not Urgent">Not Urgent</option>
                                                <option value="Normal">Normal</option>
                                                <option value="Urgent">Urgent</option>
                                                <option value="Very Urgent">Very Urgent</option>
                                            </select>
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
    </div>
    </div>
@endsection