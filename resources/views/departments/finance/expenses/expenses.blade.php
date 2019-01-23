@extends('layouts.master')

@section('content')

    <!-- Title & Breadcrumbs-->
    <div class="row page-titles">
        <div class="col-md-12 align-self-center">
            <h4 class="theme-cl">Expenses</h4>
        </div>
    </div>
    <!-- Title & Breadcrumbs-->

    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Expenses</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-responsive table-bordered table-striped" id="datatable">
                            <thead>
                            <tr>
                                <th>Payment Date</th>
                                <th>Description of Expense</th>
                                <th>Department</th>
                                <th>Unit Cost</th>
                                <th>Number of Units</th>
                                <th>Total Cost</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
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
                                <h4 class="modal-title">Add Expenses record</h4>
                            </div>
                            <div class="modal-body">

                                <div class="col-md-12">
                                    <div class="card">

                                        <div class="container-fluid">
                                            <form action="{{route('finance_expenses_post')}}" method="post">{!! csrf_field() !!}

                                                <div class="form-group">
                                                    <label>Payment Date</label>
                                                    <input type="date" name="payment_date" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>Description of Expense</label>
                                                    <textarea name="description_of_expense"  class="form-control"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label>Department</label>
                                                    <input type="text" name="department" class="form-control" id="exampleInputEmail1" aria-describedby="" placeholder="">
                                                </div>
                                                <div class="form-group">
                                                    <label>Unit Cost</label>
                                                    <input type="number" name="unit_cost" class="form-control" id="exampleInputEmail1" aria-describedby="" placeholder="">
                                                </div>

                                                <div class="form-group">
                                                    <label>Number of Units</label>
                                                    <input type="number" name="number_of_units"  class="form-control" id="exampleInputEmail1" aria-describedby="" placeholder="">
                                                </div>
                                                <div class="form-group">
                                                    <label>Total Cost</label>
                                                    <input type="number" name="total_cost"  class="form-control" id="exampleInputEmail1" aria-describedby="" placeholder="">
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

