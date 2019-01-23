@extends('layouts.master')

@section('content')

    <div class="row page-titles">
        <div class="col-md-12 align-self-center text-center">
            <h4 class="theme-cl">SCRAP ORDERS</h4>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h4>SCRAP ORDERS</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="datatable" class="table table-bordered">
                    <thead>
                        <tr>
                            <th>PRODUCT</th>
                            <th>QUANTITY</th>
                            <th>SOURCE DOCUMENT</th>
                            <th>EXPECTED DATE</th>
                        </tr>
                    </thead>
                    <tbody>
                    @if(isset($scraporders_results))
                        @foreach($scraporders_results as $scraporders_result)
                        <tr>
                                <td>{{ $scraporders_result->product}}</td>
                                <td>{{ $scraporders_result->quantity}}</td>
                                <td>{{ $scraporders_result->source_document}}</td>
                                <td>{{ $scraporders_result->expected_date}}</td>
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
                        <h4 class="modal-title">SCRAP ORDERS</h4>
                    </div>
                    <div class="modal-body">

                        <div class="col-md-12">
                            <div class="card">
                                <div class="container-fluid">
                                    <!-- <h1 class="text-center">GENERAL LABORATORY REQUEST FORM</h1> -->
                                    <br>
                                    <form action="{{route('scraporders_post')}}" method="post" >{!! csrf_field() !!}
                                        <h5><b>New</b></h5>
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label for="">Product:</label>
                                                <input type="text" class="form-control" name="product">
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label for="">Quantity:</label>
                                                <input type="number" class="form-control" name="quantity">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label for="">Source Document:</label>
                                                <input type="text" class="form-control" name="source_document">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label for="">Expected Date:</label>
                                                <input type="date" class="form-control" name="expected_date">
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