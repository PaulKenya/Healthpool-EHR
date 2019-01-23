@extends('layouts.master')

@section('content')

    <div class="row page-titles">
        <div class="col-md-12 align-self-center text-center">
            <h4 class="theme-cl">RE-ORDERING RULES</h4>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h4>RE-ORDERING RULES</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="datatable" class="table table-bordered">
                    <thead>
                    <tr>
                        <th>NAME</th>
                        <th>PRODUCT</th>
                        <th>MINIMUM QUANTITY</th>
                        <th>MAXIMUM QUANTITY</th>
                        <th>QUANTITY MULTIPLE</th>
                        <th>LEAD TIME</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(isset($reorderingrules_results))
                        @foreach($reorderingrules_results as $reorderingrules_result)
                            <tr>
                                <td>{{ $reorderingrules_result->name}}</td>
                                <td>{{ $reorderingrules_result->product}}</td>
                                <td>{{ $reorderingrules_result->minimum_quantity}}</td>
                                <td>{{ $reorderingrules_result->maximum_quantity}}</td>
                                <td>{{ $reorderingrules_result->quantity_multiple}}</td>
                                <td>{{ $reorderingrules_result->lead_time}}</td>
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
                        <h4 class="modal-title">RE-ORDERING RULES</h4>
                    </div>
                    <div class="modal-body">

                        <div class="col-md-12">
                            <div class="card">
                                <div class="container-fluid">
                                    <!-- <h1 class="text-center">GENERAL LABORATORY REQUEST FORM</h1> -->
                                    <br>
                                    <form action="{{route('reorderingrules_post')}}" method="post" >{!! csrf_field() !!}
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label for="">Name:</label>
                                                <input type="text" class="form-control" name="name">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label for="">Product:</label>
                                                <input type="text" class="form-control" name="product">
                                            </div>
                                        </div>
                                        <h5><b>Rules</b></h5>
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label for="">Minimum Quantity:</label>
                                                <input type="number" class="form-control" name="minimum_quantity">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label for="">Maximum Quantity:</label>
                                                <input type="number" class="form-control" name="maximum_quantity">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label for="">Quantity Multiple:</label>
                                                <input type="number" class="form-control" name="quantity_multiple">
                                            </div>
                                        </div>
                                        <h5><b>Misc</b></h5>
                                        <div class="form-group col-md-12">
                                            <label for="" >Lead Time:</label>
                                            <select class="custom-select" name="lead_time">
                                                <option value="Day(s) to get the products">Day(s) to get the products</option>
                                                <option value="Days(s) to purchase">Days(s) to purchase</option>
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