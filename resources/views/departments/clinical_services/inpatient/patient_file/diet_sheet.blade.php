@extends('layouts.master')
@section('content')
    @include('departments.clinical_services.inpatient.patient_file.patient_bio_information')
    <!-- Title & Breadcrumbs-->
    <div class="row page-titles">
        <div class="col-md-12 align-self-center">
            <h4 class="theme-cl">DIET SHEETS</h4>
        </div>
    </div>
    <!-- Title & Breadcrumbs-->
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>DIET SHEETS</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>op_ip_no</th>
                                    <th>name</th>
                                    <th>age</th>
                                    <th>address</th>
                                    <th>clinic_ward</th>
                                    <th>date_of_admission</th>
                                    <th>date_of_discharge</th>
                                    <th>comments</th>
                                    <th>mondayBREAKFAST</th>
                                    <th>tuesdayBREAKFAST</th>
                                    <th>wednesdayBREAKFAST</th>
                                    <th>thursdayBREAKFAST</th>
                                    <th>fridayBREAKFAST</th>
                                    <th>saturdayBREAKFAST</th>
                                    <th>sundayBREAKFAST</th>
                                    <th>mondaySNACK</th>
                                    <th>tuesdaySNACK</th>
                                    <th>wednesdaySNACK</th>
                                    <th>thursdaySNACK</th>
                                    <th>fridaySNACK</th>
                                    <th>saturdaySNACK</th>
                                    <th>sundaySNACK</th>
                                    <th>mondayLUNCH</th>
                                    <th>tuesdayLUNCH</th>
                                    <th>wednesdayLUNCH</th>
                                    <th>thursdayLUNCH</th>
                                    <th>fridayLUNCH</th>
                                    <th>saturdayLUNCH</th>
                                    <th>sundayLUNCH</th>
                                    <th>mondaySNACK1</th>
                                    <th>tuesdaySNACK1</th>
                                    <th>wednesdaySNACK1</th>
                                    <th>thursdaySNACK1</th>
                                    <th>fridaySNACK1</th>
                                    <th>saturdaySNACK1</th>
                                    <th>sundaySNACK1</th>
                                    <th>mondayDINNER</th>
                                    <th>tuesdayDINNER</th>
                                    <th>wednesdayDINNER</th>
                                    <th>thursdayDINNER</th>
                                    <th>fridayDINNER</th>
                                    <th>saturdayDINNER</th>
                                    <th>sundayDINNER</th>
                                    <th>mondayBEDTIME</th>
                                    <th>tuesdayBEDTIME</th>
                                    <th>wednesdayBEDTIME</th>
                                    <th>thursdayBEDTIME</th>
                                    <th>fridayBEDTIME</th>
                                    <th>saturdayBEDTIME</th>
                                    <th>sundayBEDTIME</th>
                                </tr>
                            </thead>
                            <tbody>
                            @if(isset($diet_sheet_results))
                                @foreach($diet_sheet_results as $diet_sheet_result)
                                    <tr>
                                        <td>{{$diet_sheet_result->op_ip_no}}</td>
                                        <td>{{$diet_sheet_result->name}}</td>
                                        <td>{{$diet_sheet_result->age}}</td>
                                        <td>{{$diet_sheet_result->address}}</td>
                                        <td>{{$diet_sheet_result->clinic_ward}}</td>
                                        <td>{{$diet_sheet_result->date_of_admission}}</td>
                                        <td>{{$diet_sheet_result->date_of_discharge}}</td>
                                        <td>{{$diet_sheet_result->comments}}</td>
                                        <td>{{$diet_sheet_result->mondayBREAKFAST}}</td>
                                        <td>{{$diet_sheet_result->tuesdayBREAKFAST}}</td>
                                        <td>{{$diet_sheet_result->wednesdayBREAKFAST}}</td>
                                        <td>{{$diet_sheet_result->thursdayBREAKFAST}}</td>
                                        <td>{{$diet_sheet_result->fridayBREAKFAST}}</td>
                                        <td>{{$diet_sheet_result->saturdayBREAKFAST}}</td>
                                        <td>{{$diet_sheet_result->sundayBREAKFAST}}</td>
                                        <td>{{$diet_sheet_result->mondaySNACK}}</td>
                                        <td>{{$diet_sheet_result->tuesdaySNACK}}</td>
                                        <td>{{$diet_sheet_result->wednesdaySNACK}}</td>
                                        <td>{{$diet_sheet_result->thursdaySNACK}}</td>
                                        <td>{{$diet_sheet_result->fridaySNACK}}</td>
                                        <td>{{$diet_sheet_result->saturdaySNACK}}</td>
                                        <td>{{$diet_sheet_result->sundaySNACK}}</td>
                                        <td>{{$diet_sheet_result->mondayLUNCH}}</td>
                                        <td>{{$diet_sheet_result->tuesdayLUNCH}}</td>
                                        <td>{{$diet_sheet_result->wednesdayLUNCH}}</td>
                                        <td>{{$diet_sheet_result->thursdayLUNCH}}</td>
                                        <td>{{$diet_sheet_result->fridayLUNCH}}</td>
                                        <td>{{$diet_sheet_result->saturdayLUNCH}}</td>
                                        <td>{{$diet_sheet_result->sundayLUNCH}}</td>
                                        <td>{{$diet_sheet_result->mondaySNACK1}}</td>
                                        <td>{{$diet_sheet_result->tuesdaySNACK1}}</td>
                                        <td>{{$diet_sheet_result->wednesdaySNACK1}}</td>
                                        <td>{{$diet_sheet_result->thursdaySNACK1}}</td>
                                        <td>{{$diet_sheet_result->fridaySNACK1}}</td>
                                        <td>{{$diet_sheet_result->saturdaySNACK1}}</td>
                                        <td>{{$diet_sheet_result->sundaySNACK1}}</td>
                                        <td>{{$diet_sheet_result->mondayDINNER}}</td>
                                        <td>{{$diet_sheet_result->tuesdayDINNER}}</td>
                                        <td>{{$diet_sheet_result->wednesdayDINNER}}</td>
                                        <td>{{$diet_sheet_result->thursdayDINNER}}</td>
                                        <td>{{$diet_sheet_result->fridayDINNER}}</td>
                                        <td>{{$diet_sheet_result->saturdayDINNER}}</td>
                                        <td>{{$diet_sheet_result->sundayDINNER}}</td>
                                        <td>{{$diet_sheet_result->mondayBEDTIME}}</td>
                                        <td>{{$diet_sheet_result->tuesdayBEDTIME}}</td>
                                        <td>{{$diet_sheet_result->wednesdayBEDTIME}}</td>
                                        <td>{{$diet_sheet_result->thursdayBEDTIME}}</td>
                                        <td>{{$diet_sheet_result->fridayBEDTIME}}</td>
                                        <td>{{$diet_sheet_result->saturdayBEDTIME}}</td>
                                        <td>{{$diet_sheet_result->sundayBEDTIME}}</td>
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
                                <h4 class="modal-title">QUIT</h4>
                            </div>

                            <div class="container-fluid ">
                                <div class="">
                                    <div class="card">
                                        <div class="card-header">
                                            <form action="{{route('patient_file_diet_sheet_post', ['patient_id'=>$patient_id])}}" method="post" >{!! csrf_field() !!}
                                                <div class="col-md-12">
                                                    <div class="form-row">
                                                        <div class="form-group col-md-2">
                                                            <label>OP/IP NO</label>
                                                            <input type="number" class="form-control"name="op_ip_no">
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label>Name</label>
                                                            <input type="text" class="form-control"name="name">
                                                        </div>
                                                        <div class="form-group col-md-1">
                                                            <label>Age</label>
                                                            <input type="number" class="form-control"name="age">
                                                        </div>
                                                        <div class="form-group col-md-3">
                                                            <label>Address</label>
                                                            <input type="text" class="form-control"name="address">
                                                        </div>
                                                        <div class="form-group col-md-2">
                                                            <label>Clinic/Ward</label>
                                                            <input type="text" class="form-control"name="clinic_ward">
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label>Date of Admission</label>
                                                            <input type="date" class="form-control"name="date_of_admission">
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label>Date of Discharge</label>
                                                            <input type="date" class="form-control"name="date_of_discharge">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>comments</label>
                                                        <textarea class="form-control"name="comments"></textarea>
                                                    </div>
                                                    <div class="card">
                                                        <table class="table table-bordered">

                                                            <thead>
                                                            <tr>
                                                                <th></th>
                                                                <th> MONDAY</th>
                                                                <th>TUESDAY</th>
                                                                <th> WEDNESDAY</th>
                                                                <th>THURSDAY</th>
                                                                <th> FRIDAY</th>
                                                                <th>SATURDAY</th>
                                                                <th>SUNDAY </th>
                                                                <th></th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr>
                                                                <td>
                                                                    <div class="form-check">
                                                                        <label class="form-check-label">BREAKFAST</label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-check">
                                                                        <input type="text"name="mondayBREAKFAST" class="form-check-label">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-check">
                                                                        <input type="text" name="tuesdayBREAKFAST" class="form-check-label">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-check">
                                                                        <input type="text"name="wednesdayBREAKFAST" class="form-check-label">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-check">
                                                                        <input type="text" name="thursdayBREAKFAST" class="form-check-label">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-check">
                                                                        <input type="text" name="fridayBREAKFAST" class="form-check-label">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-check">
                                                                        <input type="text"name="saturdayBREAKFAST" class="form-check-label">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-check">
                                                                        <input type="text"name="sundayBREAKFAST" class="form-check-label">
                                                                    </div>
                                                                </td>

                                                            </tr>
                                                            <tr>

                                                                <td>
                                                                    <div class="form-check">

                                                                        <label class="form-check-label">SNACK</label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-check">
                                                                        <input type="text" name="mondaySNACK" class="form-check-label">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-check">
                                                                        <input type="text"name="tuesdaySNACK" class="form-check-label">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-check">
                                                                        <input type="text" name="wednesdaySNACK" class="form-check-label">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-check">
                                                                        <input type="text"name="thursdaySNACK" class="form-check-label">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-check">
                                                                        <input type="text"name="fridaySNACK" class="form-check-label">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-check">
                                                                        <input type="text"name="saturdaySNACK" class="form-check-label">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-check">
                                                                        <input type="text"name="sundaySNACK" class="form-check-label">
                                                                    </div>
                                                                </td>

                                                            </tr>
                                                            <tr>

                                                                <td>
                                                                    <div class="form-check">

                                                                        <label class="form-check-label">LUNCH</label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-check">
                                                                        <input type="text"name="mondayLUNCH" class="form-check-label">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-check">
                                                                        <input type="text"name="tuesdayLUNCH" class="form-check-label">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-check">
                                                                        <input type="text" name="wednesdayLUNCH" class="form-check-label">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-check">
                                                                        <input type="text"name="thursdayLUNCH" class="form-check-label">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-check">
                                                                        <input type="text"name="fridayLUNCH" class="form-check-label">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-check">
                                                                        <input type="text"name="saturdayLUNCH" class="form-check-label">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-check">
                                                                        <input type="text"name="sundayLUNCH" class="form-check-label">
                                                                    </div>
                                                                </td>

                                                            </tr>
                                                            <tr>

                                                                <td>
                                                                    <div class="form-check">

                                                                        <label class="form-check-label">SNACK</label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-check">
                                                                        <input type="text"name="mondaySNACK1" class="form-check-label">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-check">
                                                                        <input type="text"name="tuesdaySNACK1" class="form-check-label">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-check">
                                                                        <input type="text" name="wednesdaySNACK1" class="form-check-label">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-check">
                                                                        <input type="text"name="thursdaySNACK1" class="form-check-label">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-check">
                                                                        <input type="text"name="fridaySNACK1" class="form-check-label">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-check">
                                                                        <input type="text"name="saturdaySNACK1" class="form-check-label">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-check">
                                                                        <input type="text"name="sundaySNACK1" class="form-check-label">
                                                                    </div>
                                                                </td>

                                                            </tr>
                                                            <tr>

                                                                <td>
                                                                    <div class="form-check">

                                                                        <label class="form-check-label">DINNER</label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-check">
                                                                        <input type="text" name="mondayDINNER" class="form-check-label">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-check">
                                                                        <input type="text" name="tuesdayDINNER" class="form-check-label">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-check">
                                                                        <input type="text" name="wednesdayDINNER" class="form-check-label">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-check">
                                                                        <input type="text" name="thursdayDINNER" class="form-check-label">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-check">
                                                                        <input type="text" name="fridayDINNER" class="form-check-label">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-check">
                                                                        <input type="text" name="saturdayDINNER" class="form-check-label">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-check">
                                                                        <input type="text" name="sundayDINNER" class="form-check-label">
                                                                    </div>
                                                                </td>

                                                            </tr>
                                                            <tr>

                                                                <td>
                                                                    <div class="form-check">

                                                                        <label class="form-check-label">BEDTIME SNACK</label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-check">
                                                                        <input type="text" name="mondayBEDTIME" class="form-check-label">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-check">
                                                                        <input type="text" name="tuesdayBEDTIME" class="form-check-label">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-check">
                                                                        <input type="text" name="wednesdayBEDTIME" class="form-check-label">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-check">
                                                                        <input type="text" name="thursdayBEDTIME" class="form-check-label">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-check">
                                                                        <input type="text" name="fridayBEDTIME" class="form-check-label">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-check">
                                                                        <input type="text" name="saturdayBEDTIME" class="form-check-label">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-check">
                                                                        <input type="text" name="sundayBEDTIME" class="form-check-label">
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                        <input name="administration_patient_informations_id" type="text" class="form-control d-none" value="{{$patient_id}}">
                                                        <input name="institution_id" type="text" class="form-control d-none" value="{{ Auth::user()->institution->id }}">
                                                        <input name="user_id" type="text" value="{{ Auth::user()->id }}" class="form-control d-none">
                                                        <div class="form-group">
                                                            <button type="submit" class="btn btn-primary">Submit</button>
                                                        </div>
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

@endsection