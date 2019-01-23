@extends('layouts.master')

@section('content')

    <!-- Title & Breadcrumbs-->
    <div class="row page-titles">
        <div class="col-md-12 align-self-center">
            <h4 class="theme-cl">Sales</h4>
        </div>
    </div>
    <!-- Title & Breadcrumbs-->

    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Sales</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th scope="col">DATE OF PAYMENT</th>
                                <th scope="col">SERVICE OFFERED</th>
                                <th scope="col">AMOUNT</th>
                                <th scope="col">ID NUMBER</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
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
                                <h4 class="modal-title">Add Sales record</h4>
                            </div>
                            <div class="modal-body">

                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="container">
                                            <form action="{{route('finance_sales_post')}}" method="post" >{!! csrf_field() !!}
                                                <div class="form-group">
                                                    <h3>
                                                        SERVICE PAYMENT
                                                    </h3>
                                                </div>
                                                <div class="form-group">
                                                    <label for="staticEmail">DATE OF PAYMENT:</label>
                                                    <input type="date" name="date_of_payment" class="form-control" placeholder="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="staticEmail" >SERVICE OFFERED:</label>
                                                    <input type="text" name="services_offered" class="form-control" placeholder="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="staticEmail">AMOUNT:</label>
                                                    <input type="number" name="amount" class="form-control" placeholder="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="staticEmail">ID NUMBER:</label>
                                                    <input type="number" name="id_number" class="form-control" placeholder="">
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-12">
                                                        <div class="float-right">
                                                            <button class="btn btn-primary" type="submit">Edit</button>
                                                            <button class="btn btn-success" type="submit">Save</button>
                                                            <button class="btn btn-danger" type="submit">Delete</button>
                                                            <button class="btn btn-primary" type="submit">Print</button>
                                                            <button class="btn btn-success" type="submit">Export</button>
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
    <!-- end container -->
@endsection

