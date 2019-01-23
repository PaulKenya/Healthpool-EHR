@extends('layouts.master')
@section('content')
    @include('departments.clinical_services.inpatient.patient_file.patient_bio_information')

<div class="card"> 
        <div class="card-header">
            <h4>VIEW BILLING INFORMATION REPORT</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="datatable" class="table table-bordered">
                    <thead>
                    <tr>
                        <th>PRINT VIEW</th>
                        <th>NAME OF PERSON RESPONSIBLE FOR BILL</th>
                        <th>ADDRESS</th>
                        <th>PHONE NUMBER</th>
                        <th>OCCUPATION</th>
                        <th>EMPLOYER</th>
                        <th>EMPLOYER'S ADDRESS</th>
                        <th>EMPLOYER'S PHONE NO</th>
                        <th>CONTRIBUTER'S RELATIONSHIP TO PATIENT</th>
                        <th>PLEASE INDICATE PRIMARY INSURANCE</th>
                        <th>DEPOSIT PAID</th>
                        <th>PAYMENT METHOD</th>
                        <th>RECEIPT NUMBER</th>
                        <th>PREVIOUS ACCOUNT BALANCE</th>
                        <th>CUSTOMER TYPE</th>
                        <th>PATIENT/GUARDIAN SIGNATURE</th>
                        <th>DATE</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(isset($billing))

                        @php
                            $i=0
                        @endphp

                        @foreach($billing as $billing)

                            @php
                                $i++;
                            @endphp

                            <tr>

                                <td>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{$i}}">PRINT VIEW</button>
                                </td>

                                <td>{{ $billing->name_of_person_responsible_for_bill}}</td>
                                <td>{{ $billing->address}}</td>
                                <td>{{ $billing->phone_number}}</td>
                                <td>{{ $billing->occupational}}</td>
                                <td>{{ $billing->employer}}</td>
                                <td>{{ $billing->employers_address}}</td>
                                <td>{{ $billing->employers_phone_no}}</td>
                                <td>{{ $billing->contributers_relationship_to_patient}}</td>
                                <td>{{ $billing->primary_insurance}}</td>
                                <td>{{ $billing->deposit_paid}}</td>
                                <td>{{ $billing->payment_method}}</td>
                                <td>{{ $billing->receipt_number}}</td>
                                <td>{{ $billing->previous_account_balance}}</td>
                                <td>{{ $billing->customer_type}}</td>
                                <td>{{ $billing->patient_guardian_signature}}</td>
                                <td>{{ $billing->date}}</td>
                            </tr>

                            <!-- Triage Modal -->
                            <div class="modal fade" id="exampleModal{{$i}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div id="printableArea{{$i}}">
                                                <h2>VIEW BILLING INFORMATION REPORT</h2>
                                                <p><b>PATIENT NAME : </b>{{$patient->name}}</p>
                                                <p><b>NAME OF PERSON RESPONSIBLE FOR BILL : </b>{{$billing->name_of_person_responsible_for_bill}}</p>
                                                <p><b>ADDRESS : </b>{{$billing->address}}</p>
                                                <p><b>PHONE NUMBER : </b>{{$billing->phone_number}}</p>
                                                <p><b>OCCUPATION : </b>{{$billing->occupational}}</p>
                                                <p><b>EMPLOYER : </b>{{$billing->employer}}</p>
                                                <p><b>EMPLOYER'S ADDRESS : </b>{{$billing->employers_address}}</p>
                                                <p><b>EMPLOYER'S PHONE NO : </b>{{$billing->employers_phone_no}}</p>
                                                <p><b>CONTRIBUTER'S RELATIONSHIP TO PATIENT : </b>{{$billing->contributers_relationship_to_patient}}</p>
                                                <p><b>PLEASE INDICATE PRIMARY INSURANCE : </b>{{$billing->primary_insurance}}</p>
                                                <p><b>DEPOSIT PAID : </b>{{$billing->deposit_paid}}</p>
                                                <p><b>PAYMENT METHOD : </b>{{$billing->payment_method}}</p>
                                                <p><b>RECEIPT NUMBE : </b>{{$billing->receipt_number}}</p>
                                                <p><b>PREVIOUS ACCOUNT BALANCE : </b>{{$billing->previous_account_balance}}</p>
                                                <p><b>CUSTOMER TYPE : </b>{{$billing->customer_type}}</p>
                                                <p><b>PATIENT/GUARDIAN SIGNATURE : </b>{{$billing->patient_guardian_signature}}</p>
                                                <p><b>DATE : </b>{{$billing->date}}</p>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <input type="button" class="btn btn-success" onclick="printDiv('printableArea{{$i}}')" value="print" />
                                        </div>
                                    </div>
                                </div>
                            </div>

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
                        <h4 class="modal-title">Add Billing Information</h4>
                    </div>
                    <div class="modal-body">

                        <div class="col-md-12">
                            <div class="card">
                                <div class="container">

                                    <div class="row page-titles">
                                        <div class="col-md-12 align-self-center text-center">
                                            <h4 class="theme-cl">BILLING APPLICATION FORM</h4>
                                        </div>
                                    </div>

                                        <div class="col-m-3 offset-md-2">
                                          <H3 class="mt-20 ">
                                            BILLING INFORMATION
                                          </H3>
                                            <form action="{{ route('billing_post',['patient_id'=>$patient_id]) }}"  method="post" >
                                                {!! csrf_field() !!}
                                                <input name="administration_patient_informations_id" type="text" class="form-control d-none" value="{{$patient_id}}">
                                                <input name="institution_id" type="text" class="form-control" class="form-control d-none" value="{{ Auth::user()->institution->id }}">
                                                <input name="user_id" type="text" value="{{ Auth::user()->id }}" class="form-control d-none">
                                                <div class="form-group row ">
                                                        <label for="staticEmail" class=" col-form-label">NAME OF PERSON RESPONSIBLE FOR BILL:</label>
                                                         <div class="">
                                                            <input type="text" name="name_of_person_responsible_for_bill" class="form-control" placeholder="">
                                                        </div>
                                                </div>


                                                <div class="form-group row  ">
                                                        <label for="staticEmail" class="  col-form-label">ADDRESS(if different):</label>
                                                         <div class=" ">
                                                        <input type="text" name="address" class="form-control" placeholder="">
                                                 </div>
                                                </div>
                                                 <div class="form-group row ">
                                                        <label for="staticEmail" class="  col-form-label">PHONE NUMBER:</label>
                                                         <div class=" ">
                                                        <input type="number" name="phone_number" class="form-control" placeholder="">
                                                </div>
                                                 </div>
                                                <div class="form-group row ">
                                                        <label for="staticEmail" class="  col-form-label">OCCUPATION:</label>
                                                         <div class=" ">
                                                        <input type="text" name="occupational" class="form-control" placeholder="">
                                                </div>
                                                </div>

                                                <div class="form-group row ">
                                                        <label for="staticEmail" class="  col-form-label">EMPLOYER:</label>
                                                         <div class=" ">
                                                        <input type="text" name="employer" class="form-control" placeholder="">
                                                </div>
                                                </div>
                                                <div class="form-group row ">
                                                        <label for="staticEmail" class="  col-form-label">EMPLOYER'S ADDRESS:</label>
                                                         <div class=" ">
                                                        <input type="text" name="employers_address" class="form-control" placeholder="">
                                                </div>
                                                </div>
                                                <div class="form-group row ">
                                                        <label for="staticEmail" class="  col-form-label">EMPLOYER'S PHONE NO:</label>
                                                         <div class=" ">
                                                        <input type="number" name="employers_phone_no" class="form-control" placeholder="">
                                                </div>
                                                </div>
                                                <div class="form-group row ">
                                                        <label for="staticEmail" class="  col-form-label">CONTRIBUTER'S RELATIONSHIP TO PATIENT:</label>
                                                         <div class=" ">
                                                        <input type="text" name="contributers_relationship_to_patient" class="form-control" placeholder="">
                                                </div>
                                                </div>
                                                <div class="form-group row ">
                                                        <label for="staticEmail" class="  col-form-label">PLEASE INDICATE PRIMARY INSURANCE:</label>
                                                         <div class=" ">
                                                        <input type="text" name="primary_insurance" class="form-control" placeholder="">
                                                </div>
                                                </div>



                                                <div class="form-group row ">
                                                        <label for="staticEmail" class="  col-form-label">DEPOSIT PAID Ksh.:</label>
                                                         <div class=" ">
                                                        <input type="number" name="deposit_paid" class="form-control" placeholder="">
                                                </div>
                                                </div>
                                                <div class="form-group row ">
                                                        <label for="staticEmail" class="  col-form-label">PAYMENT METHOD:</label>
                                                         <div class=" ">
                                                        <input type="text" name="payment_method" class="form-control" placeholder="">
                                                </div>
                                                </div>
                                                <div class="form-group row ">
                                                        <label for="staticEmail" class="  col-form-label">RECEIPT NUMBER(if any):</label>
                                                         <div class=" ">
                                                        <input type="text" name="receipt_number" class="form-control" placeholder="">
                                                </div>
                                                </div>
                                                <div class="form-group row ">
                                                        <label for="staticEmail" class="  col-form-label">PREVIOUS ACCOUNT BALANCE:</label>
                                                         <div class=" ">
                                                        <input type="number" name="previous_account_balance" class="form-control" placeholder="">
                                                </div>
                                                </div>
                                                <div class="form-group row ">
                                                        <label for="staticEmail" class="col-form-label">CUSTOMER TYPE:</label>
                                                        <div class=" ">
                                                            <input type="radio" name="customer_type" value="prepaid">Prepaid<br>
                                                            <input type="radio" name="customer_type" value="postpaid">Prepaid<br>
                                                        </div>
                                                </div>



                                                <div class="form-group row ">
                                                        <label for="staticEmail" class="  col-form-label">PATIENT/GUARDIAN SIGNATURE:</label>
                                                         <div class=" ">
                                                            <input type="text" name="patient_guardian_signature" class="form-control" placeholder="">
                                                        </div>
                                                </div>
                                                <div class="form-group row ">
                                                        <label for="staticEmail" class="  col-form-label">DATE:</label>
                                                         <div class=" ">
                                                        <input type="date" name="date" class="form-control" placeholder="">
                                                </div>
                                                </div>

                                                <input type="submit" class="btn btn-info" data-toggle="modal" value="Save">

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


@endsection