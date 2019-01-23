@extends('layouts.master')

@section('content')
    <!-- Title & Breadcrumbs-->
    <div class="row page-titles">
        <div class="col-md-12 align-self-center">
            <h4 class="theme-cl">Invoice Detail</h4>
        </div>
    </div>
    <!-- Title & Breadcrumbs-->

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="detail-wrapper padd-top-30 padd-bot-30">

                    <div class="row text-center">
                        <div class="col-md-12">
                            <a href="javascript:window.print()" class="btn theme-btn">Print this invoice</a>
                        </div>
                    </div>

                    <div class="row mrg-0">
                        <div class="col-md-6">
                            <div id="logo"><img src="img/logo.png" class="img-responsive" alt=""></div>
                        </div>

                        <div class="col-md-6">
                            <p id="invoice-info">
                                <strong>Order:</strong> #7075872 <br>
                                <strong>Issued:</strong> {{ date('d-M-Y') }}<br>
                            </p>
                        </div>

                    </div>

                    <div class="row  mrg-0 detail-invoice">

                        <div class="col-md-12">
                            <h2>PATIENT INVOICE</h2>
                        </div>

                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-lg-7 col-md-7 col-sm-7">
                                    <h5>{{$patient->name}}</h5>
                                </div>
                            </div>
                        </div>
                        <hr />

                        <div class="col-12 col-md-12">
                            <strong>ITEM DESCRIPTION & DETAILS :</strong>
                        </div>
                        <hr>

                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="invoice-table">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered">
                                        <thead>
                                        <tr>
                                            <th>Product Name</th>
                                            <th>Quantity</th>
                                            <th>Unit Price</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if(isset($drugs))
                                            @for($a=0;$a<count($drugs);$a++)
                                                <tr>
                                                    <td>{{$drugs[$a]->product_name}}</td>
                                                    <td>{{$drugs[$a]->product_qty}}</td>
                                                    <td>{{$drugs[$a]->product_price}}</td>
                                                </tr>
                                            @endfor
                                        @endif
                                        </tbody>
                                    </table>
                                </div>
                                <hr>
                                <div>
                                    <h5>Total : KES {{ $patient_orders[0]->total }} </h5>
                                </div>
                                <hr>
                                <div>
                                    <h5>Taxes : KES {{ $patient_orders[0]->gst }} </h5>
                                </div>
                                <hr>
                                <div>
                                    <h4>Bill Amount : KES {{ $patient_orders[0]->net_total }} </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection