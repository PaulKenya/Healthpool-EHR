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
                        <table id="datatable" class="table table-striped table-bordered table-responsive">
                            <thead>
                            <tr>
                                <th>pt_name</th>
                                <th>new_id</th>
                                <th>dob</th>
                                <th>date_of_lact</th>
                                <th>annual_screening</th>
                                <th>normal</th>
                                <th>patient_age_dx</th>
                                <th>patient_age_dx_1</th>
                                <th>new_problem</th>
                                <th>abnormal</th>
                                <th>mother_age_of_dx_1</th>
                                <th>mother_age_of_dx</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(isset($oncology_cbe_results_examination_forms_results))
                                @foreach($oncology_cbe_results_examination_forms_results as $oncology_cbe_results_examination_forms_result)
                                    <tr>
                                        <td>{{ $oncology_cbe_results_examination_forms_result->pt_name }}</td>
                                        <td>{{ $oncology_cbe_results_examination_forms_result->new_id }}</td>
                                        <td>{{ $oncology_cbe_results_examination_forms_result->dob }}</td>
                                        <td>{{ $oncology_cbe_results_examination_forms_result->date_of_lact }}</td>
                                        <td>{{ $oncology_cbe_results_examination_forms_result->annual_screening }}</td>
                                        <td>{{ $oncology_cbe_results_examination_forms_result->normal }}</td>
                                        <td>{{ $oncology_cbe_results_examination_forms_result->patient_age_dx }}</td>
                                        <td>{{ $oncology_cbe_results_examination_forms_result->patient_age_dx_1 }}</td>
                                        <td>{{ $oncology_cbe_results_examination_forms_result->new_problem }}</td>
                                        <td>{{ $oncology_cbe_results_examination_forms_result->abnormal }}</td>
                                        <td>{{ $oncology_cbe_results_examination_forms_result->mother_age_of_dx_1 }}</td>
                                        <td>{{ $oncology_cbe_results_examination_forms_result->mother_age_of_dx }}</td>
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
                                    <form action="{{route('oncology_cbe_results_examination_form_post', ['patient_id'=>$patient_id])}}" method="post" >{!! csrf_field() !!}
                                        <div class="col-m-3 offset-md-12">
                                            <H1 class="mt-20 ">
                                                CBE RESULTS DOCUMENTATION FORM
                                            </H1>
                                            <div class="form-group">
                                                <label>Pt name:</label>
                                                <input type="text" name="pt_name"   class="form-control"  aria-describedby="" placeholder="">
                                            </div>
                                            <div class="form-group">
                                                <label>ID#:</label>
                                                <input type="text" name="new_id"   class="form-control"  aria-describedby="" placeholder="">
                                            </div>
                                            <div class="form-group">
                                                <label>DOB:</label>
                                                <input type="date" name="dob"   class="form-control"  aria-describedby="" placeholder="">
                                            </div>
                                            <h2></h2>
                                            <table class="table table-bordered">

                                                <thead>
                                                <tr>
                                                    <th>purpose of visit</th>
                                                    <th> <label>Date of lact CBE:</label>
                                                        <input type="date" id="myDate" name="date_of_lact"  readonly  class="form-control"  aria-describedby="" placeholder=""></th>
                                                    <th>breast cancer history</th>

                                                </tr>

                                                </thead>
                                                <tbody>
                                                <tr>

                                                    <td>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-label" name="annual_screening" >
                                                            <label class="form-check-label">annual screening</label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-label" name="normal" >
                                                            <label class="form-check-label">normal </label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check">
                                                            <label class="form-check-label">Patient age of Dx</label>
                                                            <input type="text" class="form-check-label" value="age" name="patient_age_dx">
                                                            <input type="checkbox" class="form-check-label" value="dx" name="patient_age_dx_1">
                                                            <label class="form-check-label">N/A</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>

                                                    <td>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-label" name="new_problem">
                                                            <label class="form-check-label">new problem</label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-label" name="abnormal">
                                                            <label class="form-check-label">abnormal </label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check">
                                                            <label class="form-check-label">mother age of Dx</label>
                                                            <input type="text" class="form-check-label" name="mother_age_of_dx_1">
                                                            <input type="checkbox" class="form-check-label" name="mother_age_of_dx">
                                                            <label class="form-check-label">N/A</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>

                                                    <td>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-label" name="recall">
                                                            <label class="form-check-label">recall</label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-label" name="unknown">
                                                            <label class="form-check-label">unknown </label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check">
                                                            <label class="form-check-label">sister(s) age of Dx</label>
                                                            <input type="text" class="form-check-label" name="sister_age_of_dx">
                                                            <input type="checkbox" class="form-check-label" name="n_a">
                                                            <label class="form-check-label">N/A</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tr>
                                                <tr>

                                                    <td>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-label" name="short_term_f_u">
                                                            <label class="form-check-label">short term F/U</label>
                                                            <input type="text" class="form-check-label" name="mos">
                                                            <label class="form-check-label">mos</label>
                                                        </div>
                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>
                                                        <div class="form-check">
                                                            <label class="form-check-label">daughter(s) age of Dx</label>
                                                            <input type="text" class="form-check-label" name="daughter_age_of_dx">
                                                            <input type="checkbox" class="form-check-label" name="n_a_1">
                                                            <label class="form-check-label">N/A</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>

                                                    <td>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-label" name="other">
                                                            <label class="form-check-label">other</label>
                                                            <input type="text" class="form-check-label" name="other_1">
                                                        </div>
                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>
                                                        <div class="form-check">
                                                            <label class="form-check-label">aunt(s) age of Dx</label>
                                                            <input type="text" class="form-check-label" name="aunt_age_of_dx">
                                                            <input type="checkbox" class="form-check-label" name="n_a_2">
                                                            <label class="form-check-label">N/A</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>

                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>
                                                        <div class="form-check">
                                                            <label class="form-check-label">male relative(s) age of Dx</label>
                                                            <input type="text" class="form-check-label" name="male_realtives_age_of_dx">
                                                            <input type="checkbox" class="form-check-label" name="n_a_3">
                                                            <label class="form-check-label">N/A</label>
                                                        </div>
                                                    </td>
                                                </tr>


                                                </tbody>
                                            </table>

                                            <table class="table table-bordered">
                                                <thead>
                                                <tr>
                                                    <th>patient concerns</th>
                                                    <th> R</th>
                                                    <th> L</th>
                                                    <th> Cyclic</th>
                                                    <th>Date pt found</th>
                                                    <th> Related Breat History</th>
                                                </tr>

                                                </thead>
                                                <tbody>
                                                <tr>

                                                    <td>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-label" name="patient_concerns_1">
                                                            <label class="form-check-label">none</label>
                                                        </div>
                                                    </td>


                                                    <td>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-label" name="r_1">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-label" name="l_1">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-label" name="cyclic_1">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check">
                                                            <input type="date" class="form-check-label" name="date_pt_found">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check">
                                                            <label class="form-check-label">last mammogram</label>
                                                            <input type="text" class="form-check-label" name="last_mammogram">
                                                            <label class="form-check-label">(mo/yr)</label>

                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>

                                                    <td>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-label" name="lump">
                                                            <label class="form-check-label">Lump</label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-label" name="lump1">
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-label" name="lump_2">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-label" name="lump_3">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check">
                                                            <input type="date" class="form-check-label" name="lump_4">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check">
                                                            <label class="form-check-label">last menstrual period</label>
                                                            <input type="text" class="form-check-label" name="last_menstral_period">
                                                            <label class="form-check-label">(mo/yr)</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>

                                                    <td>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-label" name="nipple_discharge">
                                                            <label class="form-check-label">Nipple discharge</label>
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
                                                            <input type="checkbox" class="form-check-label" name="discharge_3">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check">
                                                            <input type="date" class="form-check-label" name="discharge_4">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check">
                                                            <label class="form-check-label">#Breats byopsy(s):</label>
                                                            <input type="checkbox" class="form-check-label" name="byopsy_1">
                                                            <label class="form-check-label">0</label>
                                                            <input type="checkbox" class="form-check-label" name="byopsy_2">
                                                            <label class="form-check-label">1-2</label>
                                                            <input type="checkbox" class="form-check-label" name="byopsy_3">

                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>

                                                    <td>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-label" name="nipple_skin_retention">
                                                            <label class="form-check-label">Nipple skin retraction</label>
                                                        </div>
                                                    </td>


                                                    <td>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-label" name="retention_1">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-label" name="retention_2">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-label" name="retention_3">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check">
                                                            <input type="date" class="form-check-label" name="retention_4">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check">
                                                            <label class="form-check-label"> dates:</label>
                                                            <input type="dates" class="form-check-label" name="diets">
                                                        </div>
                                                    </td>
                                                </tr>

                                                </tr>
                                                <tr>

                                                    <td>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-label" name="swelling">
                                                            <label class="form-check-label">Erythema /swelling</label>
                                                        </div>
                                                    </td>


                                                    <td>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-label" name="swelling_1">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-label" name="swelling_2">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-label" name="swelling_3">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check">
                                                            <input type="date" class="form-check-label" name="swelling_4">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check">
                                                            <label class="form-check-label">#years HRT use or more:</label>
                                                            <input type="checkbox" class="form-check-label" name="years_1">
                                                            <label class="form-check-label">0</label>
                                                            <input type="checkbox" class="form-check-label" name="years_2">
                                                            <label class="form-check-label">1-2</label>
                                                            <input type="checkbox" class="form-check-label" name="years_3">
                                                            <label class="form-check-label">3yrs or more</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>

                                                    <td>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-label" name="rash">
                                                            <label class="form-check-label">Rash/scaling</label>
                                                        </div>
                                                    </td>


                                                    <td>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-label" name="rash_1">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-label" name="rash_2">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-label" name="rash_3">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check">
                                                            <input type="date" class="form-check-label" name="rash_4">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check">
                                                            <label class="form-check-label"> last used</label>
                                                            <input type="dates" class="form-check-label" name="last_used">
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>

                                                    <td>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-label" name="breast_pain">
                                                            <label class="form-check-label">Breast pain</label>
                                                        </div>
                                                    </td>


                                                    <td>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-label" name="pain_1">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-label" name="pain_2">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-label" name="pain_3">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check">
                                                            <input type="date" class="form-check-label" name="pain_4">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-label" name="augmentation">
                                                            <label class="form-check-label"> augmentation</label>
                                                            <input type="dates" class="form-check-label" name="augmentation_dates">
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>

                                                    <td>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-label" name="Others_1">
                                                            <label class="form-check-label">Other</label>
                                                            <input type="text" class="form-check-label" name="Others_2">
                                                        </div>
                                                    </td>


                                                    <td>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-label" name="Others_3">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-label" name="Others_4">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-label" name="Others_5">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check">
                                                            <input type="date" class="form-check-label" name="Others_6">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-label" name="Others_7">
                                                            <label class="form-check-label"> reduction</label>
                                                            <input type="dates" class="form-check-label" name="Others_8">
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
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
    </div>
@endsection
