@extends('layouts.master')
@section('content')
    <div class="card">
        <div class="card-header">
            <h4>vendors</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="datatable" class="table table-bordered">
                    <thead>
                    <tr>
                        <th>type </th>
                        <th>name </th>
                        <th>company </th>
                        <th>job_position </th>
                        <th>title </th>
                        <th>street </th>
                        <th>city </th>
                        <th>state </th>
                        <th>zip </th>
                        <th>country </th>
                        <th>tin </th>
                        <th>tags </th>
                        <th>phone </th>
                        <th>mobile </th>
                        <th>website </th>
                        <th>title </th>
                        <th>language </th>
                        <th>is_a_customer </th>
                        <th>is_a_vendor </th>
                        <th>salesperson </th>
                        <th>internal_reference </th>
                        <th>customer_payment_terms </th>
                        <th>vendor_payment_terms </th>
                        <th>fiscal_position </th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(isset($spv_results))
                        @foreach($spv_results as $spv_result)
                            <tr>
                                <td>{{ $spv_result->type }}</td>
                                <td>{{ $spv_result->name }}</td>
                                <td>{{ $spv_result->company }}</td>
                                <td>{{ $spv_result->job_position }}</td>
                                <td>{{ $spv_result->title }}</td>
                                <td>{{ $spv_result->street }}</td>
                                <td>{{ $spv_result->city }}</td>
                                <td>{{ $spv_result->state }}</td>
                                <td>{{ $spv_result->zip }}</td>
                                <td>{{ $spv_result->country }}</td>
                                <td>{{ $spv_result->tin }}</td>
                                <td>{{ $spv_result->tags }}</td>
                                <td>{{ $spv_result->phone }}</td>
                                <td>{{ $spv_result->mobile }}</td>
                                <td>{{ $spv_result->website }}</td>
                                <td>{{ $spv_result->title }}</td>
                                <td>{{ $spv_result->language }}</td>
                                <td>{{ $spv_result->is_a_customer }}</td>
                                <td>{{ $spv_result->is_a_vendor }}</td>
                                <td>{{ $spv_result->salesperson }}</td>
                                <td>{{ $spv_result->internal_reference }}</td>
                                <td>{{ $spv_result->customer_payment_terms }}</td>
                                <td>{{ $spv_result->vendor_payment_terms }}</td>
                                <td>{{ $spv_result->fiscal_position }}</td>
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
                                            <h4 class="theme-cl">VENDORS</h4>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <form action="{{route('stores_purchase_vendors_post')}}" method="post" enctype="multipart/form-data">
                                            {{csrf_field()}}
                                            <div class="form-row">
                                                <div class="form-group col-sm-12">
                                                    <input type="radio" name="type" id="type" value="individual">
                                                    <label for="type">Individual</label>
                                                    <input type="radio" name="type" id="type" value="company">
                                                    <label for="type">Company</label>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label>Name</label>
                                                    <input class="form-control" type="text" name="name">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Company</label>
                                                    <input class="form-control" type="text" name="company">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <h4 class="m-20">Individual Only</h4>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Job Position</label>
                                                    <input type="text" class="form-control" name="job_position">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Title</label>
                                                    <select class="form-control" name="title">
                                                        <option></option>
                                                        <option value="1">Doctor</option>
                                                        <option value="2">Madam</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <h4 class="m-20">Address</h4>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-3">
                                                    <label>Street</label>
                                                    <input type="text" class="form-control" name="street">
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label>City</label>
                                                    <input type="text" class="form-control" name="city">
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label>State</label>
                                                    <input type="text" class="form-control" name="state">
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label>Zip</label>
                                                    <input type="text" class="form-control" name="zip">
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label>Country</label>
                                                    <input type="text" class="form-control" name="country">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label>TIN</label>
                                                    <input type="text" class="form-control" name="tin">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Tags</label>
                                                    <input type="text" class="form-control" name="tags">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                    <label>Phone</label>
                                                    <input type="text" class="form-control" name="phone">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label>Mobile</label>
                                                    <input type="text" class="form-control" name="mobile">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label>Website</label>
                                                    <input type="url" class="form-control" name="website">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label>Language</label>
                                                    <select class="form-control" name="language">
                                                        <option></option>
                                                        <option value="1">English</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <h4 class="m-20">Sales & Purchases</h4>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="check1" name="is_a_customer">
                                                        <label for="check1" class="form-check-label">Sale: Is a customer?</label>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="check2" name="is_a_vendor">
                                                        <label for="check2" class="form-check-label">Purchase: Is a vendor?</label>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label>Sale: Salesperson</label>
                                                    <input class="form-control" type="text" name="salesperson">
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label>Misc: Internal Reference</label>
                                                    <input class="form-control" type="text" name="internal_reference">
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <h4 class="m-20">Invoicing</h4>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label>Sale: Customer Payment Terms</label>
                                                    <select class="form-control" name="customer_payment_terms">
                                                        <option>Immediate Payment</option>
                                                        <option>15 Days</option>
                                                        <option>30 Net Days</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label>Purchase: Vendor Payment Terms</label>
                                                    <select class="form-control" name="vendor_payment_terms">
                                                        <option>Immediate Payment</option>
                                                        <option>15 Days</option>
                                                        <option>30 Net Days</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label>Fiscal Position</label>
                                                    <input type="text" class="form-control" name="fiscal_position">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <button class="btn btn-primary" type="submit">Submit</button>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6"></div>
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
