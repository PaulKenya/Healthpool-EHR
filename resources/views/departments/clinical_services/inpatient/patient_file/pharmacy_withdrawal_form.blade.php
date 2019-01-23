@extends('layouts.master')
@section('content')
    @include('departments.clinical_services.inpatient.patient_file.patient_bio_information')
    <!-- Title & Breadcrumbs-->
<div class="row page-titles">
    <div class="col-md-12 align-self-center">
        <h4 class="theme-cl">PHARMACY WITHDRAWAL FORM</h4>
    </div>
</div>
<!-- Title & Breadcrumbs-->

<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>PHARMACY WITHDRAWAL FORM</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="datatable" class="table table-striped table-bordered table-responsive">
                        <thead>
                        <tr>
                            <th>VIEW</th>
                            <th>UNIT NUMBER</th>
                            <th>DATE</th>
                            <th>DESCRIPTION</th>
                            <th>TOTAL RETURNED</th>
                            <th>UNIT PRICE</th>
                            <th>TOTAL COST</th>
                            <th>WARD WITHDRAWAL</th>
                            <th>SIGN</th>
                            <th>PHARMACY OFFICER</th>
                            <th>DESIGNATION</th>
                            <th>SIGNATURE</th>
                            <th>DEPARTMENT</th>
                            <th>NAME</th>
                            <th>SIGN</th>

                        </tr>
                        </thead>
                        <tbody>
                        @if(isset($pharmacy_withdrawal_form_results))
                            @php
                                $i=0
                            @endphp
                            @foreach($pharmacy_withdrawal_form_results as $pharmacy_withdrawal_form_result)
                                @php
                                    $i++;
                                @endphp
                                <tr>
                                    <td>
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{$i}}">
                                           VIEW
                                        </button>
                                    </td>
                                    <td>{{ $pharmacy_withdrawal_form_result->doa}}</td>
                                    <td>{{ $pharmacy_withdrawal_form_result->dod}}</td>
                                    <td>{{ $pharmacy_withdrawal_form_result->unit_no}}</td>
                                    <td>{{ $pharmacy_withdrawal_form_result->date_a}}</td>
                                    <td>{{ $pharmacy_withdrawal_form_result->description}}</td>
                                    <td>{{ $pharmacy_withdrawal_form_result->total_returned}}</td>
                                    <td>{{ $pharmacy_withdrawal_form_result->unit_price}}</td>
                                    <td>{{ $pharmacy_withdrawal_form_result->total_cost}}</td>
                                    <td>{{ $pharmacy_withdrawal_form_result->ward_withdrawal}}</td>
                                    <td>{{ $pharmacy_withdrawal_form_result->sign}}</td>
                                    <td>{{ $pharmacy_withdrawal_form_result->name_a}}</td>
                                    <td>{{ $pharmacy_withdrawal_form_result->designation}}</td>
                                    <td>{{ $pharmacy_withdrawal_form_result->sign_a}}</td>
                                    <td>{{ $pharmacy_withdrawal_form_result->department}}</td>
                                    <td>{{ $pharmacy_withdrawal_form_result->name_b}}</td>
                                    <td>{{ $pharmacy_withdrawal_form_result->sign_b}}</td>
                                    <!-- Triage Modal -->
                                    <div class="modal fade" id="exampleModal{{$i}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">PHARMACY WITHDRAWAL FORM</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div id="printableArea{{$i}}">
                                                        <h2>PHARMACY WITHDRAWAL FORM</h2>
                                                        <p><b>Patient Name : </b>{{$patient->name}}</p>
                                                        <div class="form-group row">
                                                            <label for="staticEmail" class="col-sm-3 col-form-label">DOA:</label>
                                                            <div class="col-sm-4">
                                                                {{ $pharmacy_withdrawal_form_result->doa}}
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="staticEmail" class="col-sm-3 col-form-label">DOD:</label>
                                                            <div class="col-sm-4">
                                                                {{ $pharmacy_withdrawal_form_result->dod}}
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="staticEmail" class="col-sm-3 col-form-label">Unit No:</label>
                                                            <div class="col-sm-4">
                                                                {{ $pharmacy_withdrawal_form_result->unit_no}}
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="staticEmail" class="col-sm-3 col-form-label">DATE</label>
                                                            <div class="col-sm-4">{{ $pharmacy_withdrawal_form_result->date_a}}

                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="staticEmail" class="col-sm-3 col-form-label">ITEM DESCRIPTION</label>
                                                            <div class="col-sm-4">{{ $pharmacy_withdrawal_form_result->description}}
{{ $pharmacy_withdrawal_form_result->total_returned}}
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="staticEmail" class="col-sm-3 col-form-label">TOTAL RETURNED</label>
                                                            <div class="col-sm-4">{{ $pharmacy_withdrawal_form_result->unit_price}}

                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="staticEmail" class="col-sm-3 col-form-label">UNIT PRICE</label>
                                                            <div class="col-sm-4">{{ $pharmacy_withdrawal_form_result->total_cost}}

                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="staticEmail" class="col-sm-3 col-form-label">TOTAL COST</label>
                                                            <div class="col-sm-4">{{ $pharmacy_withdrawal_form_result->ward_withdrawal}}

                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="staticEmail" class="col-sm-3 col-form-label">WARD WITHDRAWAL</label>
                                                            <div class="col-sm-4">

                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="staticEmail" class="col-sm-3 col-form-label">SIGN/TITLE/WARD/PHARMACY</label>
                                                            <div class="col-sm-4">{{ $pharmacy_withdrawal_form_result->sign}}

                                                            </div>
                                                        </div>
                                                        <div class="row ">
                                                            <div class="col-md-4">
                                                                <div class="form-group row ">
                                                                    <label for="staticEmail" class="col-form-label ">Pharmacy Officer's Name:</label>
                                                                    <div class="col-sm-8">{{ $pharmacy_withdrawal_form_result->name_a}}

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group row ">
                                                                    <label for="staticEmail" class="col-form-label ">Designation:</label>
                                                                    <div class="col-sm-8">{{ $pharmacy_withdrawal_form_result->designation}}

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row col-md-4">
                                                                <label for="staticEmail" class="col-form-label ">Sign:</label>
                                                                <div class="col-sm-8">{{ $pharmacy_withdrawal_form_result->sign_a}}

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row ">
                                                            <div class="col-md-3">
                                                                <div class="form-group row ">
                                                                    <label for="staticEmail" class="col-form-label ">Ward/Department:</label>
                                                                    <div class="col-sm-8">{{ $pharmacy_withdrawal_form_result->department}}

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group row ">
                                                                    <label for="staticEmail" class="col-form-label ">Name:</label>
                                                                    <div class="col-sm-8">{{ $pharmacy_withdrawal_form_result->name_b}}

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row col-md-4">
                                                                <label for="staticEmail" class="col-form-label ">Sign:</label>
                                                                <div class="col-sm-8">{{ $pharmacy_withdrawal_form_result->sign_b}}

                                                                </div>
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
                            <h4 class="modal-title">Add  Information</h4>
                        </div>
                        <div class="modal-body">

                            <div class="col-md-12">
                                <div class="card">
                                    <div class="container">
                                        <form action="{{route('pharmacy_withdrawal_form_post' ,['patient_id'=>$patient_id])}}" method="post" >{!! csrf_field() !!}
                                            <div class="">

                                                    <input name="administration_patient_informations_id" type="text" class="form-control d-none" value="{{$patient_id}}">
                                                    <input name="institution_id" type="text" class="form-control" class="form-control d-none" value="{{ Auth::user()->institution->id }}">
                                                    <input name="user_id" type="text" value="{{ Auth::user()->id }}" class="form-control d-none">
                                                    <div class="row">

                                            <div class="col-m-3 offset-md-2">
                                                <H3 class="mt-20 ">
                                                    <u>PHARMACY WITHDRAWAL FORM</u>
                                                </H3>
                                            </div>
                                            <div class="form-group row">
                                                <label for="staticEmail" class="col-sm-3 col-form-label">DOA:</label>
                                                <div class="col-sm-4">
                                                    <input type="text" name="doa" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="staticEmail" class="col-sm-3 col-form-label">DOD:</label>
                                                <div class="col-sm-4">
                                                    <input type="text" name="dod" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="staticEmail" class="col-sm-3 col-form-label">Unit No:</label>
                                                <div class="col-sm-4">
                                                    <input type="text" name="unit_no" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <table class="table table-bordered">
                                                <thead>
                                                <tr>
                                                    <th scope="col">DATE</th>
                                                    <th scope="col">ITEM DESCRIPTION</th>
                                                    <th scope="col">TOTAL RETURNED</th>
                                                    <th scope="col">UNIT PRICE</th>
                                                    <th scope="col">TOTAL COST</th>
                                                    <th scope="col">WARD WITHDRAWAL</th>
                                                    <th scope="col">SIGN/TITLE/WARD/PHARMACY</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td><input type="date" id="myDate" name="date_a"readonly  class="form-control" placeholder=""></td>
                                                    <td><input type="text" name="description" class="form-control" placeholder=""></td>
                                                    <td><input type="number" name="total_returned" class="form-control" placeholder=""></td>
                                                    <td><input type="number" name="unit_price" class="form-control" placeholder=""></td>
                                                    <td><input type="number" name="total_cost" class="form-control" placeholder=""></td>
                                                    <td><input type="text" name="ward_withdrawal" class="form-control" placeholder=""></td>
                                                    <td><input type="text" name="sign" class="form-control" placeholder=""></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <div class="row ">
                                                <div class="col-md-4">
                                                    <div class="form-group row ">
                                                        <label for="staticEmail" class="col-form-label ">Pharmacy Officer's Name:</label>
                                                        <div class="col-sm-8">
                                                            <input type="name" name="name_a" class="form-control" placeholder="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group row ">
                                                        <label for="staticEmail" class="col-form-label ">Designation:</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" name="designation" class="form-control" placeholder="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row col-md-4">
                                                    <label for="staticEmail" class="col-form-label ">Sign:</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="sign_a" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row ">
                                                <div class="col-md-3">
                                                    <div class="form-group row ">
                                                        <label for="staticEmail" class="col-form-label ">Ward/Department:</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" name="department" class="form-control" placeholder="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group row ">
                                                        <label for="staticEmail" class="col-form-label ">Name:</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" name="name_b" class="form-control" placeholder="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row col-md-4">
                                                    <label for="staticEmail" class="col-form-label ">Sign:</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="sign_b" class="form-control" placeholder="">
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
