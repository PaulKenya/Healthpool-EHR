@extends('layouts.master')

@section('content')

    <!-- Title & Breadcrumbs-->
    <div class="row page-titles">
        <div class="col-md-12 align-self-center">
            <h4 class="theme-cl">SUPPLIER INFORMATION</h4>
        </div>
    </div>
    <!-- Title & Breadcrumbs-->

    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Add A Supplier</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable" class="table table-striped">
                            <thead>
                            <tr>
                                <th>TITLE</th>
                                <th>FIRST NAME</th>
                                <th>MIDDLE NAME</th>
                                <th>LAST NAME</th>
                                <th>SUFFIX</th>
                                <th>COMPANY</th>
                                <th>DISPLAY NAME</th>
                                <th>ADDRESS</th>
                                <th>NOTES</th>
                                <th>EMAIL</th>
                                <th>PHONE</th>
                                <th>MOBILE</th>
                                <th>FAX</th>
                                <th>OTHER</th>
                                <th>WEBSITE</th>
                                <th>BILLING RATE</th>
                                <th>TERMS</th>
                                <th>OPENING BALANCE</th>
                                <th>AS OF</th>
                                <th>ACCOUNT NO</th>
                                <th>BUSINESS ID NO</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(isset($addsupplier_results))
                                @foreach($addsupplier_results as $addsupplier_result)
                                    <tr>
                                        <td>{{$addsupplier_result->title}}</td>
                                        <td>{{$addsupplier_result->firstname}}</td>
                                        <td>{{$addsupplier_result->middlename}}</td>
                                        <td>{{$addsupplier_result->lastname}}</td>
                                        <td>{{$addsupplier_result->suffix}}</td>
                                        <td>{{$addsupplier_result->company}}</td>
                                        <td>{{$addsupplier_result->display}}</td>
                                        <td>{{$addsupplier_result->address}}</td>
                                        <td>{{$addsupplier_result->city}}</td>
                                        <td>{{$addsupplier_result->state}}</td>
                                        <td>{{$addsupplier_result->postalcode}}</td>
                                        <td>{{$addsupplier_result->country}}</td>
                                        <td>{{$addsupplier_result->email}}</td>
                                        <td>{{$addsupplier_result->phoneno}}</td>
                                        <td>{{$addsupplier_result->mobileno}}</td>
                                        <td>{{$addsupplier_result->fax}}</td>
                                        <td>{{$addsupplier_result->other}}</td>
                                        <td>{{$addsupplier_result->website}}</td>
                                        <td>{{$addsupplier_result->billing}}</td>
                                        <td>{{$addsupplier_result->terms}}</td>
                                        <td>{{$addsupplier_result->balance}}</td>
                                        <td>{{$addsupplier_result->date}}</td>
                                        <td>{{$addsupplier_result->accountno}}</td>
                                        <td>{{$addsupplier_result->business}}</td>

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
                                <h4 class="modal-title">Add Supplier Information</h4>
                            </div>
                            <div class="modal-body">

                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="container">
                                                <form action="{{route('finance_expenses_addsupplier_post')}}" method="post" >{!! csrf_field() !!}


                                                    <div class="form-group row">
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <div class="col-md-12">
                                                                    <label for="exampleInputEmail1">Title:</label>
                                                                    <input type="text" class="form-control" name="title" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" ">
                                                                    <small id="emailHelp" class="form-text text-muted"> .</small>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-md-4">
                                                                    <label for="exampleInputEmail1">First Name:</label>
                                                                    <input type="text" class="form-control" name="firstname" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" ">
                                                                    <small id="emailHelp" class="form-text text-muted"> .</small>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label for="exampleInputEmail1">Middle Name:</label>
                                                                    <input type="text" class="form-control" name="middlename" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" ">
                                                                    <small id="emailHelp" class="form-text text-muted"> .</small>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label for="exampleInputEmail1">Last Name:</label>
                                                                    <input type="text" class="form-control" name="lastname" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" ">
                                                                    <small id="emailHelp" class="form-text text-muted"> .</small>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-md-12">
                                                                    <label for="exampleInputEmail1">Suffix:</label>
                                                                    <input type="text" class="form-control" name="suffix" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                                                                    <small id="emailHelp" class="form-text text-muted"> .</small>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-md-6">
                                                                    <label for="exampleInputEmail1">Company:</label>
                                                                    <input type="text" class="form-control" name="company" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                                                                    <small id="emailHelp" class="form-text text-muted"> .</small>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label for="exampleInputEmail1">Display Name as:</label>
                                                                    <input type="text" class="form-control" name="display" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                                                                    <small id="emailHelp" class="form-text text-muted"> .</small>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-md-6">
                                                                    <label for="exampleInputEmail1">Address <a hreff="https://www.google.com/maps/@-1.2683843,36.7981071,15z">maps</a>:</label>
                                                                    <input type="number" class="form-control" name="address" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                                                                    <small id="emailHelp" class="form-text text-muted">Street.</small>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label for="exampleInputEmail1"></label>
                                                                    <input type="text" class="form-control" name="city" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                                                                    <small id="emailHelp" class="form-text text-muted">City/Town.</small>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-md-4">
                                                                    <label for="exampleInputEmail1"></label>
                                                                    <input type="text" class="form-control" name="state" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                                                                    <small id="emailHelp" class="form-text text-muted">State/Province.</small>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label for="exampleInputEmail1"></label>
                                                                    <input type="number" class="form-control" name="postalcode" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                                                                    <small id="emailHelp" class="form-text text-muted">Postal Code.</small>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label for="exampleInputEmail1"></label>
                                                                    <select name="country" class="form-control" id="exampleSelect1">
                                                                        <option>Kenya</option>
                                                                        <option>Uganda</option>
                                                                        <option>Tanzania</option>
                                                                        <option>Rwanda</option>
                                                                        <option>Burundi</option>
                                                                    </select>
                                                                    <small id="emailHelp" class="form-text text-muted">Country.</small>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <div class="col-md-12">
                                                                    <label for="exampleInputEmail1">Email:</label>
                                                                    <input type="text" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" ">
                                                                    <small id="emailHelp" class="form-text text-muted"> .</small>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-md-4">
                                                                    <label for="exampleInputEmail1">Phone No:</label>
                                                                    <input type="number" class="form-control" name="phoneno" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" ">
                                                                    <small id="emailHelp" class="form-text text-muted"> .</small>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label for="exampleInputEmail1">Mobile No:</label>
                                                                    <input type="number" class="form-control" name="mobileno" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" ">
                                                                    <small id="emailHelp" class="form-text text-muted"> .</small>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label for="exampleInputEmail1">Fax:</label>
                                                                    <input type="text" class="form-control" name="fax" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" ">
                                                                    <small id="emailHelp" class="form-text text-muted"> .</small>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-md-6">
                                                                    <label for="exampleInputEmail1">Other:</label>
                                                                    <input type="text" class="form-control" name="other" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" ">
                                                                    <small id="emailHelp" class="form-text text-muted"> .</small>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label for="exampleInputEmail1">Website:</label>
                                                                    <input type="text" class="form-control" name="website" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" ">
                                                                    <small id="emailHelp" class="form-text text-muted"> .</small>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-md-6">
                                                                    <label for="exampleInputEmail1">Billing Rate(/hr):</label>
                                                                    <input type="text" class="form-control" name="billing" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" ">
                                                                    <small id="emailHelp" class="form-text text-muted"> .</small>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label for="exampleInputEmail1">Terms:</label>
                                                                    <select name="terms" class="form-control" id="exampleSelect1">
                                                                        <option>Due on receipt</option>
                                                                        <option>Net 10</option>
                                                                        <option>Net 30</option>
                                                                        <option>Net 60</option>
                                                                        <option>Net 100</option>
                                                                    </select>
                                                                    <small id="emailHelp" class="form-text text-muted"> .</small>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-md-6">
                                                                    <label for="exampleInputEmail1">Opening Balance:</label>
                                                                    <input type="number" class="form-control" name="balance" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" ">
                                                                    <small id="emailHelp" class="form-text text-muted"> .</small>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label for="exampleInputEmail1">Date As Of:</label>
                                                                    <input type="date" class="form-control" name="date" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" ">
                                                                    <small id="emailHelp" class="form-text text-muted"> .</small>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-md-6">
                                                                    <label for="exampleInputEmail1">Account No:</label>
                                                                    <input type="number" class="form-control" name="accountno" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" ">
                                                                    <small id="emailHelp" class="form-text text-muted"> .</small>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label for="exampleInputEmail1">Business ID No:</label>
                                                                    <input type="number" class="form-control" name="business" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" ">
                                                                    <small id="emailHelp" class="form-text text-muted"> .</small>
                                                                </div>
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

@endsection()