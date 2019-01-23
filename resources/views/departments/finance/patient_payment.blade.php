@extends('layouts.master')

@section('content')

    <!-- Title & Breadcrumbs-->
    <div class="row page-titles">
        <div class="col-md-12 align-self-center">
            <h4 class="theme-cl">Patient Payment</h4>
        </div>
    </div>
    <!-- Title & Breadcrumbs-->

    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Patient Payment</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="datatable">
                            @php
                                $institution_id=Illuminate\Support\Facades\Auth::user()->institution_id;
                                $links_for_dept=\App\send_department_link::all()->where('is_paid',0)->where('institution_id',$institution_id);
                            @endphp
                            <thead>
                            <tr>
                                <th>Patient Name</th>
                                <th>From Department</th>
                                <th>To Department</th>
                                <th>Price</th>
                                <th>Description</th>
                                <th>Paid</th>
                            </tr>
                            </thead>
                            <tbody>

                            @if(isset($links_for_dept))
                                @foreach($links_for_dept as $link)
                                    @php
                                        $patient_id=$link->administration_patient_informations_id;
                                        $for_patient=\App\administration_patient_information::find($patient_id);
                                        $name=$link->administration_patient_informations_id;
                                        $actual_patient_id=$link->administration_patient_informations_id;
                                    @endphp
                                    <tr>
                                        <td>{{ $for_patient->name }}</td>
                                        <td>{{$link->links}}</td>
                                        <td>{{App\department::find($link->department_id)->department_name}}</td>
                                        <td>{{$link->price}}</td>
                                        <td>{{$link->description}}</td>
                                        <td>
                                            <a class="btn btn-success" href="{{route('process_payment',['id'=>$link->id])}}">Paid</a>
                                        </td>
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
@endsection
