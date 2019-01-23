@extends('layouts.master')
@section('content')
    @include('departments.clinical_services.inpatient.patient_file.patient_bio_information')
    <!-- Title &
    Breadcrumbs-->
    <div class="row page-titles">
        <div class="col-md-12 align-self-center">
            <h4 class="theme-cl">CBE RESULTS</h4>
        </div>
    </div>
    <!-- Title & Breadcrumbs-->
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>CBE RESULTS</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable" class="table table-bordered ">
                            <thead>
                            <tr>
                                <th>none_1</th>
                                <th>fine_1</th>
                                <th>dense</th>
                                <th>skin_edema</th>
                                <th>nipple_charge</th>
                                <th>tenderness</th>
                                <th>discharge</th>
                                <th>mass</th>
                                <th>None</th>
                                <th>yes</th>
                                <th>no</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(isset($oncology_cbe_results_physical_exams_results))
                                @foreach($oncology_cbe_results_physical_exams_results as $oncology_cbe_results_physical_exams_result)
                                    <tr>
                                        <td>{{ $oncology_cbe_results_physical_exams_result->none_1 }}</td>
                                        <td>{{ $oncology_cbe_results_physical_exams_result->fine_1 }}</td>
                                        <td>{{ $oncology_cbe_results_physical_exams_result->dense }}</td>
                                        <td>{{ $oncology_cbe_results_physical_exams_result->skin_edema }}</td>
                                        <td>{{ $oncology_cbe_results_physical_exams_result->nipple_charge }}</td>
                                        <td>{{ $oncology_cbe_results_physical_exams_result->tenderness }}</td>
                                        <td>{{ $oncology_cbe_results_physical_exams_result->discharge }}</td>
                                        <td>{{ $oncology_cbe_results_physical_exams_result->mass }}</td>
                                        <td>{{ $oncology_cbe_results_physical_exams_result->None }}</td>
                                        <td>{{ $oncology_cbe_results_physical_exams_result->yes }}</td>
                                        <td>{{ $oncology_cbe_results_physical_exams_result->no }}</td>
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
                            <div class="col-md-12">
                                <div class="card">
                                    <form action="{{route('oncology_cbe_results_physical_exam_post', ['patient_id'=>$patient_id])}}" method="post" >{!! csrf_field() !!}
                                        <h2>PHYSICAL EXAM </h2>
                                        <table class="table table-bordered">
                                            <thead>
                                            <tr>
                                                <th>Breast findings </th>
                                                <th> R</th>
                                                <th> L</th>
                                                <th> Deapth of pressure </th>
                                                <th>O clock</th>
                                                <th>Distance from nipple</th>
                                            </tr>

                                            </thead>
                                            <tbody>
                                            <tr>

                                                <td>
                                                    <div class="form-check">

                                                        <label class="form-check-label">none</label>
                                                        <input type="checkbox" class="form-check-label" name="none_1">
                                                    </div>
                                                </td>


                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-label" name="none_2">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-label" name="none_3">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check">
                                                        <input type="text" class="form-check-label" name="none_4">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check">
                                                        <input type="text" class="form-check-label" name="none_5">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check">

                                                        <input type="text" class="form-check-label" name="none_6">


                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>

                                                <td>
                                                    <div class="form-check">

                                                        <label class="form-check-label">fine modularity</label>
                                                        <input type="checkbox" class="form-check-label" name="fine_1">
                                                    </div>
                                                </td>


                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-label" name="fine_2">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-label" name="fine_3">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check">
                                                        <input type="text" class="form-check-label" name="fine_4">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check">
                                                        <input type="text" class="form-check-label" name="fine_5">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check">

                                                        <input type="text" class="form-check-label" name="fine_6">


                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>

                                                <td>
                                                    <div class="form-check">

                                                        <label class="form-check-label">Dense nodularity</label>
                                                        <input type="checkbox" class="form-check-label" name="dense">
                                                    </div>
                                                </td>


                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-label" name="dense_1">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-label" name="dense_2">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check">
                                                        <input type="text" class="form-check-label" name="dense_3">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check">
                                                        <input type="text" class="form-check-label" name="dense_4">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check">

                                                        <input type="text" class="form-check-label" name="dense_5">


                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>

                                                <td>
                                                    <div class="form-check">

                                                        <label class="form-check-label">skin edema</label>
                                                        <input type="checkbox" class="form-check-label" name="skin_edema">
                                                    </div>
                                                </td>


                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-label" name="skin_1">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-label" name="skin_2">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check">
                                                        <input type="text" class="form-check-label" name="skin_3">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check">
                                                        <input type="text" class="form-check-label" name="skin_4">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check">

                                                        <input type="text" class="form-check-label" name="skin_5">


                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>

                                                <td>
                                                    <div class="form-check">

                                                        <label class="form-check-label">Nipple/areolar charge</label>
                                                        <input type="checkbox" class="form-check-label" name="nipple_charge">
                                                    </div>
                                                </td>


                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-label" name="nipple_charge_1">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-label" name="nipple_charge_2">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check">
                                                        <input type="text" class="form-check-label" name="nipple_charge_3">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check">
                                                        <input type="text" class="form-check-label" name="nipple_charge_4">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check">

                                                        <input type="text" class="form-check-label" name="nipple_charge_5">


                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>

                                                <td>
                                                    <div class="form-check">

                                                        <label class="form-check-label">Tenderness</label>
                                                        <input type="checkbox" class="form-check-label" name="tenderness">
                                                    </div>
                                                </td>


                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-label" name="tenderness_1">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-label" name="tenderness_2">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check">
                                                        <input type="text" class="form-check-label" name="tenderness_3">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check">
                                                        <input type="text" class="form-check-label" name="tenderness_4">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check">

                                                        <input type="text" class="form-check-label" name="tenderness_5">


                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>

                                                <td>
                                                    <div class="form-check">

                                                        <label class="form-check-label">nipple discharge</label>
                                                        <input type="checkbox" class="form-check-label" name="discharge">
                                                    </div>
                                                </td>


                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-label" name="discharge_1">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-label" name="discharge_2">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check">
                                                        <input type="text" class="form-check-label" name="discharge_3">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check">
                                                        <input type="text" class="form-check-label" name="discharge_4">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check">

                                                        <input type="text" class="form-check-label" name="discharge_5">


                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>

                                                <td>
                                                    <div class="form-check">

                                                        <label class="form-check-label">mass</label>
                                                        <input type="checkbox" class="form-check-label" name="mass">
                                                    </div>
                                                </td>


                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-label" name="mass_1">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-label" name="mass_2">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check">
                                                        <input type="text" class="form-check-label" name="mass_3">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check">
                                                        <input type="text" class="form-check-label" name="mass_4">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check">

                                                        <input type="text" class="form-check-label" name="mass_5">


                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>

                                                <td>
                                                    <div class="form-check">

                                                        <label class="form-check-label">none</label>
                                                        <input type="checkbox" class="form-check-label" name="None">
                                                    </div>
                                                </td>


                                                <td>
                                                    <div class="form-check">
                                                        <label class="form-check-label">yes</label>
                                                        <input type="checkbox" class="form-check-label" name="yes">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check">
                                                        <label class="form-check-label">no</label>
                                                        <input type="checkbox" class="form-check-label" name="no">
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
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
