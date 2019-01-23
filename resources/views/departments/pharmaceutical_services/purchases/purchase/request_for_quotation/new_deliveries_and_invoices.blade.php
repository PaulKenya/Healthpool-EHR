@extends('layouts.master')
@section('content')

    <div class="card">
        <div class="card-header">
            <h4>NEW PRODUCTS</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="datatable" class="table table-bordered">
                    <thead>
                    <tr>
                        <th>VENDOR</th>
                        <th>ORDER DATE</th>
                        <th>VENDOR REFERENCE</th>
                        <th>SCHEDULED DATE</th>
                        <th>PAYMENT TERMS</th>
                        <th>INCOTERM</th>
                        <th>FISCAL POSITION</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(isset($ndi_results))
                        @foreach($ndi_results as $ndi_result)
                            <tr>
                                <td>{{ $ndi_result->vendor }}</td>
                                <td>{{ $ndi_result->order_date }}</td>
                                <td>{{ $ndi_result->vendor_reference }}</td>
                                <td>{{ $ndi_result->scheduled_date }}</td>
                                <td>{{ $ndi_result->payment_terms }}</td>
                                <td>{{ $ndi_result->incoterm }}</td>
                                <td>{{ $ndi_result->fiscal_position }}</td>
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
                <!-- Modal content-->
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
                                            <h4 class="theme-cl">NEW DELIVERIES AND INVOICES</h4>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <form method="post" action="{{route('pharmacy_rfq_new_deliveries_and_invoices_post')}}" enctype="multipart/form-data">
                                            {{csrf_field()}}
                                            <h4 class="modal-title">REQUEST FOR QUOTATION</h4>
                                            <div class="form-row">
                                                <div class="form-group col-md-6" >
                                                    <label for="exampleSelect1">Vendor</label>
                                                    <select class="form-control" id="exampleSelect1" name="vendor">
                                                        <option value="opt1">A</option>
                                                        <option value="opt2">B</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Order Date</label>
                                                    <input type="date" class="form-control" name="order_date" placeholder="order date">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label>Vendor Reference</label>
                                                    <input type="date" class="form-control" name="vendor_reference" placeholder="vendor reference">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label>Scheduled Date</label>
                                                    <input type="date" class="form-control" name="scheduled_date" placeholder="scheduled date">
                                                </div>
                                                <div class="form-group col-md-6" >
                                                    <label for="exampleSelect1">Payment Terms</label>
                                                    <select class="form-control" id="exampleSelect1" name="payment_terms">
                                                        <option value="opt1">A</option>
                                                        <option value="opt2">B</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6" >
                                                    <label for="exampleSelect1">Incoterm</label>
                                                    <select class="form-control" id="exampleSelect1" name="incoterm">
                                                        <option value="opt1">A</option>
                                                        <option value="opt2">B</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-6" >
                                                    <label for="exampleSelect1">Fiscal Position</label>
                                                    <select class="form-control" id="exampleSelect1" name="fiscal_position">
                                                        <option value="opt1">A</option>
                                                        <option value="opt2">B</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <label>Billing Status:&nbsp;</label>
                                                <p>Nothing to bill</p>
                                            </div>
                                            <div class="form-group">
                                                <button class="btn btn-primary" type="submit">Submit</button>
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
