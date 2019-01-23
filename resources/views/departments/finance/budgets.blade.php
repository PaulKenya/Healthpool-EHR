@extends('layouts.master')

@section('content')
    <!-- Title & Breadcrumbs-->
    <div class="row page-titles">
        <div class="col-md-12 align-self-center">
            <h4 class="theme-cl">Budgets</h4>
        </div>
    </div>
    <!-- Title & Breadcrumbs-->

    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Budgets</h4>
                </div>


                    <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-responsive table-bordered table-striped" id="datatable">
                            <thead>
                            <tr>
                                <th>Date</th>
                                <th>Department</th>
                                <th>Allocation in KES</th>
                                <th>Year</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
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
                                <h4 class="modal-title">Add budget record</h4>
                            </div>
                            <form action="{{route('finance_budgets_post')}}" method="post" >{!! csrf_field() !!}
                            <div class="modal-body">

                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="container">
                                                <div class="form-group">
                                                    <label>Date</label>
                                                    <input type="date" name="date" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>Department</label>
                                                    <input type="text" name="department" class="form-control" id="exampleInputEmail1" aria-describedby="" placeholder="">
                                                </div>
                                                <div class="form-group">
                                                    <label>Allocation in KES</label>
                                                    <input type="number" name="allocation_in_kes" class="form-control" id="exampleInputEmail1" aria-describedby="" placeholder="">
                                                </div>

                                                <div class="form-group">
                                                    <label>Year</label>
                                                    <input type="number" name="year" class="form-control" id="exampleInputEmail1" aria-describedby="" placeholder="">
                                                </div>

                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>

                                        </div>
                                    </div>
                                </div>
                            </form><!--form here--->
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- end container -->
@endsection

