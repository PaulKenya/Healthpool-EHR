@extends('layouts.master')

@section('content')

    <div class="row page-titles">
        <div class="col-md-12 align-self-center text-center">
            <h4 class="theme-cl">INVENTORY ADJUSTMENTS</h4>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h4>INVENTORY ADJUSTMENTS</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="datatable" class="table table-bordered">
                    <thead>
                        <tr>
                            <th>INVENTORY REFERENCE</th>
                            <th>INVENTORY OF</th>
                            <th>INVENTORY DATE</th>
                        </tr>
                    </thead>
                    @if(isset($inventoryadjustments_results))
                        @foreach($inventoryadjustments_results as $inventoryadjustments_result)
                            <tr>
                                <td>{{ $inventoryadjustments_result->inventory_reference}}</td>
                                <td>{{ $inventoryadjustments_result->inventory_of}}</td>
                                <td>{{ $inventoryadjustments_result->inventory_date}}</td>

                            </tr>
                        @endforeach
                    @endif

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
                        <h4 class="modal-title">GENERAL LABORATORY REQUEST FORM</h4>
                    </div>
                    <div class="modal-body">

                        <div class="col-md-12">
                            <div class="card">


                                <div class="container-fluid">
                                    <!-- <h1 class="text-center">GENERAL LABORATORY REQUEST FORM</h1> -->
                                    <br>
                                    <form action="{{route('pharmacy_inventoryadjustments_post')}}" method="post" >{!! csrf_field() !!}
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label for="">Inventory Reference:</label>
                                                <input type="text" class="form-control" name="inventory_reference">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label class="col-md-2" for="">Inventory Of:</label>
                                                <div class="form-group col-md-3 form-check">
                                                    <input class="form-check-input" type="radio" name="inventory_of" value="All Products" id="#AllProducts">
                                                    <label for="#AllProducts">All Products</label><br>
                                                    <input class="form-check-input" type="radio" name="inventory_of" value="One Product Category" id="#OneProductCategory">
                                                    <label for="#OneProductCategory">One Product Category</label><br>
                                                    <input class="form-check-input" type="radio" name="inventory_of" value="One Product Only" id="#OneProductOnly">
                                                    <label for="#OneProductOnly">One Product Only</label><br>
                                                    <input class="form-check-input" type="radio" name="inventory_of" value="Select Product Manually" id="#SelectProductManually">
                                                    <label for="#SelectProductManually">Select Product Manually</label><br>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label for="">Inventory Date:</label>
                                                <input type="date" class="form-control" name="inventory_date">
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
    </div>
    </div>
    </div>
@endsection