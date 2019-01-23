@extends('layouts.master')

@section('content')
    <!-- Title & Breadcrumbs-->
    <div class="row page-titles">
        <div class="col-md-12 align-self-center">
            <h4 class="theme-cl">Employees</h4>
        </div>
    </div>
    <!-- Title & Breadcrumbs-->

    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Employees</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable" class="table table-striped">
                            <thead>
                            <tr>
                                <th>Title</th>
                                <th>First name</th>
                                <th>Middle name</th>
                                <th>Last name</th>
                                <th>Display name</th>
                                <th>Address</th>
                                <th>Email</th>
                                <th>Phone No</th>
                                <th>Salary</th>
                                <th>Employee ID No</th>
                                <th>National ID No</th>
                                <th>Gender</th>
                                <th>Hire Date</th>
                                <th>Released</th>
                                <th>Date of Birth</th>

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
                                <td></td>
                                <td></td>
                                <td></td>
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
                                <h4 class="modal-title">Add Employees record</h4>
                            </div>
                            <div class="modal-body">

                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="container">
                                            <form action="" method="get" accept-charset="utf-8">
                                                <div class="form-group">
                                                    <label>Title</label>
                                                    <input type="text" name="" class="form-control">
                                                </div>
<form action="{{route('finance_employees_post')}}" method="post" >{!! csrf_field() !!}

                                                    <div class="form-group">
                                                    <label>First name</label>
                                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="" placeholder="">
                                                </div>
                                                <div class="form-group">
                                                    <label>Middle name</label>
                                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="" placeholder="">
                                                </div>
                                                <div class="form-group">
                                                    <label>Last name</label>
                                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="" placeholder="">
                                                </div>

                                                <div class="form-group">
                                                    <label>Display Name</label>
                                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="" placeholder="">
                                                </div>

                                                <div class="form-group">
                                                    <label>Address</label>
                                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="" placeholder="">
                                                </div>
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input type="mail" class="form-control" id="exampleInputEmail1" aria-describedby="" placeholder="">
                                                </div>
                                                <div class="form-group">
                                                    <label>Phone No.</label>
                                                    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="" placeholder="">
                                                </div>
                                                <div class="form-group">
                                                    <label>Salary</label>
                                                    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="" placeholder="">
                                                </div>
                                                <div class="form-group">
                                                    <label>Employee ID No.</label>
                                                    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="" placeholder="">
                                                </div>
                                                <div class="form-group">
                                                    <label>National ID No.</label>
                                                    <input type="number" class="form-control" id="" aria-describedby="" placeholder="">
                                                </div>


                                                <div class="form-group">
                                                    <label>Gender</label>
                                                    <select class="form-control" id="">
                                                        <option>-select gender-</option>
                                                        <option>Male</option>
                                                        <option>Female</option>

                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Hire Date</label>
                                                    <input type="date" class="form-control" id="" aria-describedby="" placeholder="">
                                                </div>
                                                <div class="form-group">
                                                    <label>National ID No.</label>
                                                    <input type="number" class="form-control" id="" aria-describedby="" placeholder="">
                                                </div>
                                                <div class="form-group">
                                                    <label>Released</label>
                                                    <input type="date" class="form-control" id="" aria-describedby="" placeholder="">
                                                </div>
                                                <div class="form-group">
                                                    <label>Date of Birth</label>
                                                    <input type="date" class="form-control" id="" aria-describedby="" placeholder="">
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
@endsection

