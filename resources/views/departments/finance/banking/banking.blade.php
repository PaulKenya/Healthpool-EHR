@extends('layouts.master')

@section('content')

    <!-- Title & Breadcrumbs-->
    <div class="row page-titles">
        <div class="col-md-12 align-self-center">
            <h4 class="theme-cl">Banking</h4>
        </div>
    </div>
    <!-- Title & Breadcrumbs-->
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Banking</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable" class="table table-striped table-bordered table-responsive">
                            <thead>
                            <tr>
                                <th>DATE</th>
                                <th>BANK NAME</th>
                                <th>CHEQUE NUMBER</th>
                                <th>RECEIVED FROM</th>
                                <th>PAID FOR</th>
                                <th>RECEIVED AT</th>
                                <th>NAME OF CLIENT</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><input type="date" name=""></td>
                                <td><input type="text" name=""></td>
                                <td><input type="number" name=""></td>
                                <td><input type="text" name=""></td>
                                <td><input type="text" name=""></td>
                                <td><input type="time" name=""></td>
                                <td><input type="text" name=""></td>
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
                                <h4 class="modal-title">Add cheque record</h4>
                            </div>
                            <div class="modal-body">

                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="container">
                                            <form action="{{route('finance_banking_post')}}" method="post" accept-charset="utf-8">
                                                {!! csrf_field() !!}
                                                <h3>ENTER CHEQUE INFORMATION</h3><br>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">DATE</label>
                                                    <input name="date" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="date">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">BANK NAME</label>
                                                    <input name="bank_name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">CHEQUE NUMBER</label>
                                                    <input name="cheque_number" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">RECEIVED FROM</label>
                                                    <input name="received_from" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">PAID FOR</label>
                                                    <input name="paid_for" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">RECEIVED AT</label>
                                                    <input name="received_at" type="time" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">NAME OF CLIENT</label>
                                                    <input name="name_of_client" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                                                </div>
                                                {{--<div class="form-row">--}}
                                                    {{--<div class="form-group col-md-12">--}}
                                                        {{--<div class="float-right">--}}
                                                            {{--<button class="btn btn-primary" type="submit">Edit</button>--}}
                                                            {{--<button class="btn btn-success" type="submit">Save</button>--}}
                                                            {{--<button class="btn btn-danger" type="submit">Delete</button>--}}
                                                            {{--<button class="btn btn-primary" type="submit">Print</button>--}}
                                                            {{--<button class="btn btn-success" type="submit">Export</button>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
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

