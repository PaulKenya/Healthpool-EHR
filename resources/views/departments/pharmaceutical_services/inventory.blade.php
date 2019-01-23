@extends('layouts.master')
@section('content')

    <div class="card">
        <div class="card-header">
            <h4>INVENTORY</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="datatable" class="table table-bordered">
                    <thead>
                    <tr>
                        <th>ITEM CODE</th>
                        <th>ITEM NAME</th>
                        <th>QUANTITY</th>
                        <th>EXPIRY DATE</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(isset($inventory_results))
                        @foreach($inventory_results as $inventory_result)
                            <tr>
                                <td>{{ $inventory_result->item_code }}</td>
                                <td>{{ $inventory_result->item_name }}</td>
                                <td>{{ $inventory_result->quantity }}</td>
                                <td>{{ $inventory_result->expiry_date }}</td>
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
                                    <h2 class="text-center"></h2>
                                    <p class="text-center"></p>
                                    <p class="text-center"></p>

                                    <b><p><i>To be completed by administrator in charge of case.</i></p></b>
                                    <div class="row page-titles">
                                        <div class="col-md-12 align-self-center text-center">
                                            <h4 class="theme-cl">INVENTORY APPLICATION FORM</h4>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="card">

                                            <form action="{{route('pharmacy_inventory_post')}}" method="post" >{!! csrf_field() !!}
                                                <div class="col-m-3 offset-md-3">
                                                    <h3 class="mt-20 ">
                                                        INVENTORY
                                                    </h3>
                                                    <div class="form-group row">
                                                        <label for="staticEmail" class="col-sm-3 col-form-label">ITEM CODE:</label>
                                                        <div class="col-sm-6">
                                                            <input name="item_code" type="text" class="form-control" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row ">
                                                        <label for="staticEmail" class="col-sm-3 col-form-label">ITEM NAME:</label>
                                                        <div class="col-sm-6">
                                                            <input name="item_name" type="name" class="form-control" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row ">
                                                        <label for="staticEmail" class="col-sm-3 col-form-label">QUANTITY:</label>
                                                        <div class="col-sm-6">
                                                            <input name="quantity" type="number" class="form-control" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row ">
                                                        <label for="staticEmail" class="col-sm-3 col-form-label">EXPIRY DATE:</label>
                                                        <div class="col-sm-6">
                                                            <input name="expiry_date" type="date" class="form-control" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                    </div>
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
    </div>
    </div>
    </div>
    </div>
    </div>

@endsection
