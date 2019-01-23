@extends('layouts.master')

@section('content')
    <!-- Title & Breadcrumbs-->

    @include('departments.clinical_services.inpatient.patient_file.patient_bio_information')

        <div class="row">
            <div class="col-sm-12 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Case Death Summary</h4>
                    </div>
                    <div class="card-body">

                        <div class="table-responsive">
                            <table id="datatable" class="table table-bordred">
                                <thead>
                                <tr>

                                    <th>CLINICAL/WARD</th>
                                    <th>DATE OF ADMISSION</th>
                                    <th>DATE OF DISCHARGE</th>
                                    <th>CONSULTANTS</th>
                                    <th>DIAGNOSIS</th>
                                    <th>COMPLAINTS</th>
                                    <th>PHYSICAL FINDINGS</th>
                                    <th>INVESTIGATIONS</th>
                                    <th>MANAGEMENT</th>
                                    <th>OUTCOME/DISCHARGE INSTRUCTIONS</th>
                                    <th>NAME OF THE CLINIC</th>
                                    <th>FIRM</th>
                                    <th>DAY</th>
                                    <th>DATE</th>
                                    <th>TIME</th>
                                    <th>DOCTOR'S NAME</th>
                                    <th>SIGN</th>
                                    <th>DEPARTMENT</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(isset($case_death_results))
                                    @foreach($case_death_results as $case_death_result)
                                        <tr>

                                            <td>{{ $case_death_result->clinic_ward }}</td>
                                            <td>{{ $case_death_result->date_of_admission }}</td>
                                            <td>{{ $case_death_result->date_of_discharge }}</td>
                                            <td>{{ $case_death_result->consultants }}</td>
                                            <td>{{ $case_death_result->diagnosis }}</td>
                                            <td>{{ $case_death_result->complaints }}</td>
                                            <td>{{ $case_death_result->physical_findings }}</td>
                                            <td>{{ $case_death_result->investigations }}</td>
                                            <td>{{ $case_death_result->management }}</td>
                                            <td>{{ $case_death_result->outcome_discharge_instructions }}</td>
                                            <td>{{ $case_death_result->name_of_clinic }}</td>
                                            <td>{{ $case_death_result->firm }}</td>
                                            <td>{{ $case_death_result->day }}</td>
                                            <td>{{ $case_death_result->date }}</td>
                                            <td>{{ $case_death_result->time }}</td>
                                            <td>{{ $case_death_result->doctors_name }}</td>
                                            <td>{{ $case_death_result->sign }}</td>
                                            <td>{{ $case_death_result->department }}</td>
                                        </tr>
                                    @endforeach
                                @endif
                                </tbody>
                            </table>
                            <div class="col-md-4">

                                <div class="content">
                                    <button class="btn btn-success" data-toggle="modal" data-target="#case_death_modal">Add Records</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    <div class="modal fade" id="case_death_modal" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Add Record</h4>
                </div>
                <div class="modal-body">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="container-fluid">

                                <h2 class="text-center">CASE/DEATH SUMMARY</h2>
                                <form action="{{route('case_death_post', ['patient_id'=>$patient_id])}}" method="post" >{!! csrf_field() !!}
                                    <input type="hidden" name="department" value="default">
                                    <div class="form-row">
                                        <div class="form-group col-md-2">
                                            <label for="">Clinic/Ward</label>
                                            <input name="clinic_ward" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="">Date of Admission</label>
                                            <input name="date_of_admission" type="date" class="form-control">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="">Date of Discharge</label>
                                            <input name="date_of_discharge" type="date" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Consultants</label>
                                        <input name="consultants" type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Diagnosis</label>
                                        <input name="diagnosis" type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Complaints</label>
                                        <textarea name="complaints" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Physical Findings</label>
                                        <textarea name="physical_findings" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Investigations</label>
                                        <textarea name="investigations" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Management</label>
                                        <textarea name="management" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Outcome/Discharge Instructions</label>
                                        <textarea name="outcome_discharge_instructions" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <b><p>Follow Up Clinic</p></b>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="">Name of the clinic</label>
                                            <input name="name_of_clinic" type="text" class="form-control">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="">Firm</label>
                                            <input name="firm" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="">Day</label>
                                            <input name="day" type="text" class="form-control">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="">Date</label>
                                            <input name="date" type="date" id="myDate" class="form-control" readonly>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="">Time</label>
                                            <input name="time" type="text" class="form-control">
                                        </div>
                                        <div class="form-group col-md-4 d-none">
                                            <input name="administration_patient_informations_id" type="text" class="form-control" value="{{$patient_id}}">
                                        </div>
                                        <div class="form-group col-md-4 d-none">
                                            <input name="institution_id" type="text" class="form-control" value="{{ Auth::user()->institution->id }}">
                                        </div>
                                        <div class="form-group col-md-4 d-none">
                                            <input name="user_id" type="text" value="{{ Auth::user()->id }}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-9">
                                            <label for="">Doctor's Name(Print)</label>
                                            <input name="doctors_name" type="text" class="form-control" value="{{ Auth::user()->name }}" readonly>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="">Sign</label>
                                            <input name="sign" type="text" class="form-control" value="{{ Auth::user()->id }}" readonly>
                                        </div>
                                    </div>
                                    <input name="administration_patient_informations_id" type="text" class="form-control d-none" value="{{$patient_id}}">
                                    <input name="institution_id" type="text" class="form-control d-none" value="{{ Auth::user()->institution->id }}">
                                    <input name="user_id" type="text" value="{{ Auth::user()->id }}" class="form-control d-none">
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
@endsection