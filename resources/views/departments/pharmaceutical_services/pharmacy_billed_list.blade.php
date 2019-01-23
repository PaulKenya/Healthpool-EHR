@extends('layouts.master')
@section('content')
    @include('departments.clinical_services.inpatient.patient_file.patient_bio_information')
    <div class="card">
        <div class="card-header">
            <h4>BILLED LIST</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="datatable" class="table table-bordered">
                    <thead>
                    <tr>
                        <th>order date</th>
                        <th>Patient name</th>
                        <th>Drug Name</th>
                        <th>Quantity to be ordered</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(isset($pharmacy_billed_list_resultss))
                        @php
                            $i=0
                        @endphp
                        @foreach($pharmacy_billed_list_resultss as $pharmacy_billed_list_resultsss)
                            @php
                                $i++;
                            @endphp
                            <tr>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{$i}}">
                                    VIEW
                                </button>
                                <td>{{ $pharmacy_billed_list_resultsss->order_date}}</td>
                                <td>{{ $pharmacy_billed_list_resultsss->cust_name}}</td>
                                <td>{{ $pharmacy_billed_list_resultsss->product_name}}</td>
                                <td>{{ $pharmacy_billed_list_resultsss->quantity}}</td>
                                <div class="modal fade" id="exampleModal{{$i}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">BILLED LIST</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div id="printableArea{{$i}}">
                                                    <h2>BILLED LIST</h2>
                                                    <p><b>Patient Name : </b>{{$patient->name}}</p>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label for="">order date</label>
                                                      {{ $pharmacy_billed_list_resultsss->order_date}}
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="">Patient name</label>
                                                          {{ $pharmacy_billed_list_resultsss->cust_name}}
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label for="">Drug Name</label>
                                                            {{ $pharmacy_billed_list_resultsss->product_name}}
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="">Quantity to be ordered</label>
                                                           {{ $pharmacy_billed_list_resultsss->quantity}}
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <input type="button" class="btn btn-success" onclick="printDiv('printableArea{{$i}}')" value="print" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

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
                        <h4 class="modal-title">BILLED LIST</h4>
                    </div>
                    <div class="modal-body">
    <div class="card">
        <div class="card-header">
            <h3>Pharmacy billed list</h3>
        </div>
        <div class="card-body">
            <div class="col-md-9 mx-auto">
                <form action="{{route('pharmacy_billed_list_post',['patient_id'=>$patient_id])}}" method="post" enctype="multipart/form-data">
                    {!! csrf_field() !!}
                    <input name="administration_patient_informations_id" type="text" class="form-control d-none" value="{{$patient_id}}">
                    <input name="institution_id" type="text" class="form-control d-none" value="{{ Auth::user()->institution->id }}">
                    <input name="user_id" type="text" value="{{ Auth::user()->id }}" class="form-control d-none">
                    <div class="row">
                        <div class="form-group">
                            <label for="order_date">Order Date: </label>
                            <input type="date" name="order_date"  id="myDate" id="order_date" readonly  class="form-control" placeholder="" value="{!! date('Y-m-d') !!}" readonly>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <label for="cust_name">Patient Name</label>
                            <input type="text" name="cust_name" id="cust_name" class="form-control" placeholder="" value="{{$patient->name}}" required>
                        </div>
                    </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        Patient drugs
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                <tr>
                                                    <th>Drug Name</th>
                                                    <th>Quantity to be ordered</th>
                                                </tr>
                                                </thead>
                                                <tbody>


                                                @if(isset($manage_product))
                                                    @foreach($manage_product as $manage_products)
                                                        <tr>
                                                            <td><select class="form-control"><OPTION name="product_name" value={{ $manage_products->product_name }}>{{ $manage_products->product_name }}</OPTION></select></td>
                                                            <td><input name="quantity" type="text" class="form-control "></td>
                                                        </tr>
                                                    @endforeach
                                                @endif
                                                </tbody>

                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Submit</button>
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
@endsection
