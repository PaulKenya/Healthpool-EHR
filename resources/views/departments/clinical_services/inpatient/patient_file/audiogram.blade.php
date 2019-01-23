@extends('layouts.master')

@section('content')
    @include('departments.clinical_services.inpatient.patient_file.patient_bio_information')
    <!-- Title & Breadcrumbs-->
    <div class="row page-titles">
        <div class="col-md-12 align-self-center">
            <h4 class="theme-cl">AUDIOGRAM</h4>
        </div>
    </div>
    <!-- Title & Breadcrumbs-->
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>AUDIOGRAM</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable" class="table table-striped table-bordered table-responsive">
                            <thead>
                            <tr>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>

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
                                <h4 class="modal-title">Add  Information</h4>
                            </div>
<div class="container-fluid">
    <h1 class="text-center">audiogram</h1>

    <form>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="">NAME</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group col-md-3">
                <label for="">AGE</label>
                <input type="number" class="form-control">
            </div>
            <div class="form-group col-md-3">
                <label for="">DOB</label>
                <input type="date" class="form-control">
            </div>
            <div class="form-group col-md-3">
                <label for="">MOBILE NUMBER</label>
                <input type="number" class="form-control">
            </div>
            <div class="form-group col-md-6">
                <label for="">reffered by:</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group col-md-6">

            </div>
        </div>

        <h1 class="text-center">reason:</h1>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="">accompanied by</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group col-md-6">
                <label for="">relationship</label>
                <input type="text" class="form-control">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="">physician</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group col-md-6">
                <label for="">name/address</label>
                <input type="number" class="form-control">
            </div>
        </div>
        <div class="form-group col-md-6">
            <label for="">tested by</label>
            <input type="date" class="form-control">
        </div>

</div>
<div class="form-row">
    <div class="form-group col-md-3">
        <label for="">Npi</label>
        <input type="text" class="form-control">
    </div>
    <div class="form-group col-md-3">
        <label for="">LIC</label>
        <input type="number" class="form-control">
    </div>
    <div class="form-group col-md-3">
        <label for="">hearing aid info:</label>
        <input type="date" class="form-control">
    </div>
    <div class="form-group col-md-3">
        <label for="">Right aid</label>
        <input type="number" class="form-control">
    </div>
    <div class="form-group col-md-6">
        <label for="">left aid:</label>
        <input type="text" class="form-control">
    </div>
    <div class="form-group col-md-6">
        <div class="form-group col-md-6">
            <label for="">otopsy</label>
            <input type="text" class="form-control">
        </div>
    </div>
</div>
<h3>Right ear frequency</h3>
<table class="table table-bordered">

    <thead>
    <tr>
        <th></th>
        <th>125</th>
        <th>250</th>
        <th>500</th>
        <th>750</th>
        <th>1K</th>
        <th>1.5K</th>
        <th>2K</th>
        <th>3K</th>
        <th>4K</th>
        <th>6K</th>
        <th>8K</th>


    </tr>

    </thead>
    <tbody>
    <tr>

        <td>
            <div class="form-check">

                <label class="form-check-label">-10</label>
            </div>
        </td>

        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
    </tr>
    <tr>

        <td>
            <div class="form-check">

                <label class="form-check-label">-10</label>
            </div>
        </td>

        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
    </tr>
    <tr>

        <td>
            <div class="form-check">

                <label class="form-check-label">-10</label>
            </div>
        </td>

        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
    </tr>
    <tr>

        <td>
            <div class="form-check">

                <label class="form-check-label">-10</label>
            </div>
        </td>

        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
    </tr>
    <tr>

        <td>
            <div class="form-check">

                <label class="form-check-label">-10</label>
            </div>
        </td>

        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
    </tr>
    <tr>

        <td>
            <div class="form-check">

                <label class="form-check-label">-10</label>
            </div>
        </td>

        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
    </tr>
    <tr>

        <td>
            <div class="form-check">

                <label class="form-check-label">-10</label>
            </div>
        </td>

        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
    </tr>
    <tr>

        <td>
            <div class="form-check">

                <label class="form-check-label">0</label>
            </div>
        </td>

        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
    </tr>
    <tr>

        <td>
            <div class="form-check">

                <label class="form-check-label">10</label>
            </div>
        </td>

        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
    </tr>
    <tr>

        <td>
            <div class="form-check">

                <label class="form-check-label">20</label>
            </div>
        </td>

        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
    </tr>
    <tr>

        <td>
            <div class="form-check">

                <label class="form-check-label">30</label>
            </div>
        </td>

        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
    </tr>
    <tr>

        <td>
            <div class="form-check">

                <label class="form-check-label">40</label>
            </div>
        </td>

        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
    </tr>
    <tr>

        <td>
            <div class="form-check">

                <label class="form-check-label">50</label>
            </div>
        </td>

        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
    </tr>
    <tr>

        <td>
            <div class="form-check">

                <label class="form-check-label">60</label>
            </div>
        </td>

        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
    </tr>

    <tr>

        <td>
            <div class="form-check">

                <label class="form-check-label">70</label>
            </div>
        </td>

        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
    </tr>
    <tr>

        <td>
            <div class="form-check">

                <label class="form-check-label">80</label>
            </div>
        </td>

        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
    </tr>
    <tr>

        <td>
            <div class="form-check">

                <label class="form-check-label">90</label>
            </div>
        </td>

        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
    </tr>
    <tr>

        <td>
            <div class="form-check">

                <label class="form-check-label">100</label>
            </div>
        </td>

        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
    </tr>
    <tr>

        <td>
            <div class="form-check">

                <label class="form-check-label">110</label>
            </div>
        </td>

        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
    </tr>

    </tbody>
</table>
<h3>LEFT ear frequency</h3>
<table class="table table-bordered">

    <thead>
    <tr>
        <th></th>
        <th>125</th>
        <th>250</th>
        <th>500</th>
        <th>750</th>
        <th>1K</th>
        <th>1.5K</th>
        <th>2K</th>
        <th>3K</th>
        <th>4K</th>
        <th>6K</th>
        <th>8K</th>


    </tr>

    </thead>
    <tbody>
    <tr>

        <td>
            <div class="form-check">

                <label class="form-check-label">-10</label>
            </div>
        </td>

        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
    </tr>
    <tr>

        <td>
            <div class="form-check">

                <label class="form-check-label">-10</label>
            </div>
        </td>

        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
    </tr>
    <tr>

        <td>
            <div class="form-check">

                <label class="form-check-label">-10</label>
            </div>
        </td>

        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
    </tr>
    <tr>

        <td>
            <div class="form-check">

                <label class="form-check-label">-10</label>
            </div>
        </td>

        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
    </tr>
    <tr>

        <td>
            <div class="form-check">

                <label class="form-check-label">-10</label>
            </div>
        </td>

        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
    </tr>
    <tr>

        <td>
            <div class="form-check">

                <label class="form-check-label">-10</label>
            </div>
        </td>

        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
    </tr>
    <tr>

        <td>
            <div class="form-check">

                <label class="form-check-label">-10</label>
            </div>
        </td>

        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
    </tr>
    <tr>

        <td>
            <div class="form-check">

                <label class="form-check-label">0</label>
            </div>
        </td>

        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
    </tr>
    <tr>

        <td>
            <div class="form-check">

                <label class="form-check-label">10</label>
            </div>
        </td>

        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
    </tr>
    <tr>

        <td>
            <div class="form-check">

                <label class="form-check-label">20</label>
            </div>
        </td>

        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
    </tr>
    <tr>

        <td>
            <div class="form-check">

                <label class="form-check-label">30</label>
            </div>
        </td>

        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
    </tr>
    <tr>

        <td>
            <div class="form-check">

                <label class="form-check-label">40</label>
            </div>
        </td>

        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
    </tr>
    <tr>

        <td>
            <div class="form-check">

                <label class="form-check-label">50</label>
            </div>
        </td>

        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
    </tr>
    <tr>

        <td>
            <div class="form-check">

                <label class="form-check-label">60</label>
            </div>
        </td>

        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
    </tr>

    <tr>

        <td>
            <div class="form-check">

                <label class="form-check-label">70</label>
            </div>
        </td>

        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
    </tr>
    <tr>

        <td>
            <div class="form-check">

                <label class="form-check-label">80</label>
            </div>
        </td>

        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
    </tr>
    <tr>

        <td>
            <div class="form-check">

                <label class="form-check-label">90</label>
            </div>
        </td>

        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
    </tr>
    <tr>

        <td>
            <div class="form-check">

                <label class="form-check-label">100</label>
            </div>
        </td>

        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
    </tr>
    <tr>

        <td>
            <div class="form-check">

                <label class="form-check-label">110</label>
            </div>
        </td>

        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">

            </div>
        </td>
    </tr>

    </tbody>
</table>
<table class="table table-bordered">

    <thead>
    <tr>
        <th></th>
        <th> R</th>
        <th>L</th>
        <th>B </th>
        <th>Masking</th>

    </tr>

    </thead>
    <tbody>
    <tr>

        <td>
            <div class="form-check">
                <label class="form-check-label">Pure Tone average</label>

            </div>
        </td>
        <td>
            <div class="form-check">
                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">
                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">
                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">
                <input type="text" class="form-check-label">

            </div>
        </td>
    </tr>
    <tr>

        <td>
            <div class="form-check">
                <label class="form-check-label">2 freq. avg</label>

            </div>
        </td>
        <td>
            <div class="form-check">
                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">
                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">
                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">
                <input type="text" class="form-check-label">

            </div>
        </td>
    </tr>
    <tr>

        <td>
            <div class="form-check">
                <label class="form-check-label">MCL</label>

            </div>
        </td>
        <td>
            <div class="form-check">
                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">
                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">
                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">
                <input type="text" class="form-check-label">

            </div>
        </td>
    </tr>
    <tr>

        <td>
            <div class="form-check">
                <label class="form-check-label">UCL</label>

            </div>
        </td>
        <td>
            <div class="form-check">
                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">
                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">
                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">
                <input type="text" class="form-check-label">

            </div>
        </td>
    </tr>
    <tr>

        <td>
            <div class="form-check">
                <label class="form-check-label">SRT</label>

            </div>
        </td>
        <td>
            <div class="form-check">
                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">
                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">
                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">
                <input type="text" class="form-check-label">

            </div>
        </td>
    </tr>
    <tr>

        <td>
            <div class="form-check">
                <label class="form-check-label">DISCRIM(PIPB)</label>
                <input type="text" class="form-check-label">
                <label class="form-check-label">dB</label>
            </div>
        </td>
        <td>
            <div class="form-check">
                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">
                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">
                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">
                <input type="text" class="form-check-label">

            </div>
        </td>
    </tr>
    <tr>

        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">
                <label class="form-check-label">dB</label>
            </div>
        </td>
        <td>
            <div class="form-check">
                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">
                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">
                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">
                <input type="text" class="form-check-label">

            </div>
        </td>
    </tr>
    <tr>

        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">
                <label class="form-check-label">90dB</label>
            </div>
        </td>
        <td>
            <div class="form-check">
                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">
                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">
                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">
                <input type="text" class="form-check-label">

            </div>
        </td>
    </tr>
    <tr>

        <td>
            <div class="form-check">
                <label class="form-check-label">Rollover (Y/N)</label>

            </div>
        </td>
        <td>
            <div class="form-check">
                <input type="text" class="form-check-label">


            </div>
        </td>
        <td>
            <div class="form-check">
                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">
                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">
                <input type="text" class="form-check-label">

            </div>
        </td>
    </tr>
    <tr>
        <td>
            <div class="form-check">


            </div>
        </td>

        <td>
            <div class="form-check">

                <label class="form-check-label">R</label>

            </div>
        </td>
        <td>
            <div class="form-check">
                <label class="form-check-label">L</label>

            </div>
        </td>
        <td>
            <div class="form-check">
                <label class="form-check-label">B</label>

            </div>
        </td>
        <td>
            <div class="form-check">
                <input type="text" class="form-check-label">

            </div>
        </td>
    </tr>
    <tr>

        <td>
            <div class="form-check">
                <label class="form-check-label">TONE DECAY 4KHZ</label>

            </div>
        </td>
        <td>
            <div class="form-check">
                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">
                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">
                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">
                <input type="text" class="form-check-label">

            </div>
        </td>
    </tr>
    <tr>

        <td>
            <div class="form-check">
                <label class="form-check-label">3KHZ</label>

            </div>
        </td>
        <td>
            <div class="form-check">
                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">
                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">
                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">
                <input type="text" class="form-check-label">

            </div>
        </td>
    </tr>
    <tr>

        <td>
            <div class="form-check">
                <label class="form-check-label">2KHZ</label>

            </div>
        </td>
        <td>
            <div class="form-check">
                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">
                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">
                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">
                <input type="text" class="form-check-label">

            </div>
        </td>
    </tr>
    <tr>

        <td>
            <div class="form-check">
                <label class="form-check-label">1KHZ</label>

            </div>
        </td>
        <td>
            <div class="form-check">
                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">
                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">
                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">
                <input type="text" class="form-check-label">

            </div>
        </td>
    </tr>
    <tr>

        <td>
            <div class="form-check">
                <label class="form-check-label">500HZ</label>

            </div>
        </td>
        <td>
            <div class="form-check">
                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">
                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">
                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">
                <input type="text" class="form-check-label">

            </div>
        </td>
    </tr>
    <tr>

        <td>
            <div class="form-check">
                <label class="form-check-label">Tympanometry</label>

            </div>
        </td>
        <td>
            <div class="form-check">
                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">
                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">
                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">
                <input type="text" class="form-check-label">

            </div>
        </td>
    </tr>
    <tr>

        <td>
            <div class="form-check">
                <label class="form-check-label">Reflexes Ipsilateral</label>

            </div>
        </td>
        <td>
            <div class="form-check">
                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">
                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">
                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">
                <input type="text" class="form-check-label">

            </div>
        </td>
    </tr>
    <tr>

        <td>
            <div class="form-check">
                <label class="form-check-label">Contralateral R</label>

            </div>
        </td>
        <td>
            <div class="form-check">
                <label class="form-check-label">500Hz</label>

            </div>
        </td>
        <td>
            <div class="form-check">
                <label class="form-check-label">1KHz</label>
            </div>
        </td>
        <td>
            <div class="form-check">
                <label class="form-check-label">2KHz</label>

            </div>
        </td>
        <td>
            <div class="form-check">
                <label class="form-check-label">4KHz</label>

            </div>
        </td>
    </tr>
    <tr>

        <td>
            <div class="form-check">

                <input type="text" class="form-check-label">
            </div>
        </td>
        <td>
            <div class="form-check">
                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">
                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">
                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">
                <input type="text" class="form-check-label">

            </div>
        </td>
    </tr>
    <tr>

        <td>
            <div class="form-check">
                <label class="form-check-label">REFLEX DECAY</label>

            </div>
        </td>
        <td>
            <div class="form-check">
                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">
                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">
                <input type="text" class="form-check-label">

            </div>
        </td>
        <td>
            <div class="form-check">
                <input type="text" class="form-check-label">

            </div>
        </td>
    </tr>
    <tr>

        <td>
            <div class="form-check">
                <label class="form-check-label">R</label>

            </div>
        </td>
        <td>
            <div class="form-check">
                <label class="form-check-label">500Hz</label>

            </div>
        </td>
        <td>
            <div class="form-check">
                <label class="form-check-label">1KHz</label>

            </div>
        </td>
        <td>
            <div class="form-check">
                <label class="form-check-label">2KHz</label>

            </div>
        </td>
        <td>
            <div class="form-check">
                <label class="form-check-label">4KHz</label>

            </div>
        </td>
    </tr>


    </tbody>
</table>

</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection