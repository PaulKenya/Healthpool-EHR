@extends('layouts.master')

@section('content')
    <!-- Title & Breadcrumbs-->
    <div class="row page-titles">
        <div class="col-md-12 align-self-center">
            <h4 class="theme-cl">CUSTOMER INFORMATION</h4>
        </div>
    </div>
    <!-- Title & Breadcrumbs-->

    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Add A Customer</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable" class="table table-bordered">
                            <thead>
                            <tr>
                                <th>title</th>
                                <th>first_name</th>
                                <th>middle_name</th>
                                <th>last_name</th>
                                <th>suffix</th>
                                <th>company</th>
                                <th>display_name_as</th>
                                <th>street</th>
                                <th>city</th>
                                <th>state</th>
                                <th>postal_code</th>
                                <th>country</th>
                                <th>notes</th>
                                <th>email</th>
                                <th>phone_no</th>
                                <th>mobile_no</th>
                                <th>fax</th>
                                <th>other</th>
                                <th>website</th>
                                <th>preferred_payment_method</th>
                                <th>preferred_delivery_method</th>
                                <th>opening_balance</th>
                                <th>date_as_of</th>
                                <th>account_no</th>
                                <th>tax_registration_number</th>
                                <th>attachments</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(isset($customer_results))
                                @foreach($customer_results as $customer_result)
                                    <tr>
                                        <td>{{ $customer_result->title }}</td>
                                        <td>{{ $customer_result->first_name }}</td>
                                        <td>{{ $customer_result->middle_name }}</td>
                                        <td>{{ $customer_result->last_name }}</td>
                                        <td>{{ $customer_result->suffix }}</td>
                                        <td>{{ $customer_result->company }}</td>
                                        <td>{{ $customer_result->display_name_as }}</td>
                                        <td>{{ $customer_result->street }}</td>
                                        <td>{{ $customer_result->city }}</td>
                                        <td>{{ $customer_result->state }}</td>
                                        <td>{{ $customer_result->postal_code }}</td>
                                        <td>{{ $customer_result->country }}</td>
                                        <td>{{ $customer_result->notes }}</td>
                                        <td>{{ $customer_result->email }}</td>
                                        <td>{{ $customer_result->phone_no }}</td>
                                        <td>{{ $customer_result->mobile_no }}</td>
                                        <td>{{ $customer_result->fax }}</td>
                                        <td>{{ $customer_result->other }}</td>
                                        <td>{{ $customer_result->website }}</td>
                                        <td>{{ $customer_result->preferred_payment_method }}</td>
                                        <td>{{ $customer_result->preferred_delivery_method }}</td>
                                        <td>{{ $customer_result->opening_balance }}</td>
                                        <td>{{ $customer_result->date_as_of }}</td>
                                        <td>{{ $customer_result->account_no }}</td>
                                        <td>{{ $customer_result->tax_registration_number }}</td>
                                        <td>{{ $customer_result->attachments }}</td>
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
                                            <form action="{{route('finance_sales_add_customer_post')}}" method="post" >{!! csrf_field() !!}
                                                <div class="form-row">
                                                    <div class="col-md-6">
                                                        <div class="form-row">
                                                            <div class="col-md-12">
                                                                <label for="exampleInputEmail1">Title:</label>
                                                                <input type="text" class="form-control" name="title" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" ">
                                                                <small id="emailHelp" class="form-text text-muted"> .</small>
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="col-md-4">
                                                                <label for="exampleInputEmail1">First Name:</label>
                                                                <input type="text" class="form-control" name="first_name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" ">
                                                                <small id="emailHelp" class="form-text text-muted"> .</small>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label for="exampleInputEmail1">Middle Name:</label>
                                                                <input type="text" class="form-control" name="middle_name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" ">
                                                                <small id="emailHelp" class="form-text text-muted"> .</small>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label for="exampleInputEmail1">Last Name:</label>
                                                                <input type="text" class="form-control" name="last_name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" ">
                                                                <small id="emailHelp" class="form-text text-muted"> .</small>
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="col-md-12">
                                                                <label for="exampleInputEmail1">Suffix:</label>
                                                                <input type="text" class="form-control" name="suffix" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                                                                <small id="emailHelp" class="form-text text-muted"> .</small>
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="col-md-6">
                                                                <label for="exampleInputEmail1">Company:</label>
                                                                <input type="text" class="form-control" name="company" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                                                                <small id="emailHelp" class="form-text text-muted"> .</small>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="exampleInputEmail1">Display Name as:</label>
                                                                <input type="text" class="form-control" name="display_name_as" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                                                                <small id="emailHelp" class="form-text text-muted"> .</small>
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="col-md-6">
                                                                <label for="exampleInputEmail1">Address:</label>
                                                                <input type="text" class="form-control" name="street" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                                                                <small id="emailHelp" class="form-text text-muted">Street.</small>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="exampleInputEmail1"></label>
                                                                <input type="text" class="form-control" name="city" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                                                                <small id="emailHelp" class="form-text text-muted">City/Town.</small>
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="col-md-4">
                                                                <label for="exampleInputEmail1"></label>
                                                                <input type="text" class="form-control" name="state" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                                                                <small id="emailHelp" class="form-text text-muted">State/Province.</small>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label for="exampleInputEmail1"></label>
                                                                <input type="text" class="form-control" name="postal_code" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
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
                                                        <div class="form-row">
                                                            <div class="col-md-12">
                                                                <label for="exampleInputEmail1">Notes:</label>
                                                                <input type="text" class="form-control" name="notes" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" ">
                                                                <small id="emailHelp" class="form-text text-muted"> .</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-row">
                                                            <div class="col-md-12">
                                                                <label for="exampleInputEmail1">Email:</label>
                                                                <input type="text" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" ">
                                                                <small id="emailHelp" class="form-text text-muted"> .</small>
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="col-md-4">
                                                                <label for="exampleInputEmail1">Phone No:</label>
                                                                <input type="text" class="form-control" name="phone_no" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" ">
                                                                <small id="emailHelp" class="form-text text-muted"> .</small>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label for="exampleInputEmail1">Mobile No:</label>
                                                                <input type="text" class="form-control" name="mobile_no" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" ">
                                                                <small id="emailHelp" class="form-text text-muted"> .</small>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label for="exampleInputEmail1">Fax:</label>
                                                                <input type="text" class="form-control" name="fax" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" ">
                                                                <small id="emailHelp" class="form-text text-muted"> .</small>
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
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
                                                        <div class="form-row">
                                                            <div class="col-md-6">
                                                                <label for="exampleInputEmail1">Preferred Payment Method:</label>
                                                                <select name="preferred_payment_method" class="form-control" id="exampleSelect1">
                                                                    <option>Cash</option>
                                                                    <option>Cheque</option>
                                                                    <option>Credit Card</option>
                                                                    <option>Direct Debit</option>
                                                                </select>
                                                                <small id="emailHelp" class="form-text text-muted"> .</small>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="exampleInputEmail1">Preferred Delivery Method:</label>
                                                                <select name="preferred_delivery_method" class="form-control" id="exampleSelect1">
                                                                    <option>Send Later</option>
                                                                    <option>Print Later</option>
                                                                    <option>None</option>
                                                                </select>
                                                                <small id="emailHelp" class="form-text text-muted"> .</small>
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="col-md-6">
                                                                <label for="exampleInputEmail1">Opening Balance:</label>
                                                                <input type="number" class="form-control" name="opening_balance" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" ">
                                                                <small id="emailHelp" class="form-text text-muted"> .</small>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="exampleInputEmail1">Date As Of:</label>
                                                                <input type="date" class="form-control" name="date_as_of" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" ">
                                                                <small id="emailHelp" class="form-text text-muted"> .</small>
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="col-md-6">
                                                                <label for="exampleInputEmail1">Account No:</label>
                                                                <input type="number" class="form-control" name="account_no" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" ">
                                                                <small id="emailHelp" class="form-text text-muted"> .</small>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="exampleInputEmail1">Tax Reg No:</label>
                                                                <input type="number" class="form-control" name="tax_registration_number" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" ">
                                                                <small id="emailHelp" class="form-text text-muted"> .</small>
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="col-md-12">
                                                                <label for="exampleInputEmail1">Attachments:</label>
                                                                <input type="text" class="form-control" name="attachments" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" ">
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
@endsection