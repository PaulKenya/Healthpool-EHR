@extends('layouts.master')
@section('content')

    <div class="card">
        <div class="card-header">
            <h4>SUPPLIERS</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="datatable" class="table table-bordered">
                    <thead>
                    <tr>
                        <th>VENDOR CODE</th>
                        <th>VENDOR NAME</th>
                        <th>CATEGORY</th>
                        <th>APPROVAL</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(isset($suppliers_results))
                        @foreach($suppliers_results as $suppliers_result)
                    <tr>
                        <td>{{ $suppliers_result->vendor_code}}</td>
                        <td>{{ $suppliers_result->vendor_name}}</td>
                        <td>{{ $suppliers_result->category}}</td>
                        <td>{{ $suppliers_result->approval}}</td>
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
                        <h4 class="modal-title">Add New Vendor</h4>
                    </div>
                    <div class="modal-body">

                        <div class="col-md-12">
                            <div class="card">
                                <form action="{{route('pharmacy_suppliers_post')}}" method="post" >{!! csrf_field() !!}
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

                                            <div class="col-m-3 offset-md-3">
                                                <H3 class="mt-20 ">
                                                    INVENTORY
                                                </H3>

                                                <div class="form-group row">
                                                    <label for="staticEmail" class="col-sm-3 col-form-label">VENDOR CODE:</label>
                                                    <div class="col-sm-6">
                                                        <input type="text" name="vendor_code" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="form-group row ">
                                                    <label for="staticEmail" class="col-sm-3 col-form-label">VENDOR NAME:</label>
                                                    <div class="col-sm-6">
                                                        <input type="text" name="vendor_name" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="form-group row ">
                                                    <label for="staticEmail" class="col-sm-3 col-form-label">CATEGORY:</label>
                                                    <div class="col-sm-6">
                                                        <input type="text" name="category" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="form-group row ">
                                                    <label for="staticEmail" class="col-sm-3 col-form-label">APPROVAL:</label>
                                                    <div class="col-sm-6">
                                                        <input type="text" name="approval" class="form-control" placeholder="">
                                                    </div>
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
    </div>
    </div>
    </div>
    </div>
    </div>

@endsection
