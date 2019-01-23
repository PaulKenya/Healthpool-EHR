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
                                <th>wnl_r</th>
                                <th>wnl_l</th>
                                <th>supra_r</th>
                                <th>supra_l</th>
                                <th>infra_r</th>
                                <th>infra_l</th>
                                <th>enlarged_r</th>
                                <th>enlarged_l</th>
                                <th>en_supra_r</th>
                                <th>en_supra_l</th>
                                <th>en_infra_r</th>
                                <th>en_infra_l</th>
                                <th>fixed_r</th>
                                <th>fixed_l</th>
                                <th>mobile_r</th>
                                <th>mobile_l</th>
                                <th>cbe_result_date</th>
                                <th>imaging_referral_date</th>
                                <th>normal</th>
                                <th>screening_imaging</th>
                                <th>importance_of_annual_screen</th>
                                <th>benign_finding</th>
                                <th>diagnostic_imaging</th>
                                <th>referral_follow_up</th>
                                <th>anormality</th>
                                <th>ultra_sound_only</th>
                                <th>breast_self_examination</th>
                                <th>other</th>
                                <th>other_1</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(isset($oncology_cbe_results_discrete_mass_results))
                                @foreach($oncology_cbe_results_discrete_mass_results as $oncology_cbe_results_discrete_mass_result)
                                    <tr>
                                        <td>{{ $oncology_cbe_results_discrete_mass_result->wnl_r }}</td>
                                        <td>{{ $oncology_cbe_results_discrete_mass_result->wnl_l }}</td>
                                        <td>{{ $oncology_cbe_results_discrete_mass_result->supra_r }}</td>
                                        <td>{{ $oncology_cbe_results_discrete_mass_result->supra_l }}</td>
                                        <td>{{ $oncology_cbe_results_discrete_mass_result->infra_r }}</td>
                                        <td>{{ $oncology_cbe_results_discrete_mass_result->infra_l }}</td>
                                        <td>{{ $oncology_cbe_results_discrete_mass_result->enlarged_r }}</td>
                                        <td>{{ $oncology_cbe_results_discrete_mass_result->enlarged_l }}</td>
                                        <td>{{ $oncology_cbe_results_discrete_mass_result->en_supra_r }}</td>
                                        <td>{{ $oncology_cbe_results_discrete_mass_result->en_supra_l }}</td>
                                        <td>{{ $oncology_cbe_results_discrete_mass_result->en_infra_r }}</td>
                                        <td>{{ $oncology_cbe_results_discrete_mass_result->en_infra_l }}</td>
                                        <td>{{ $oncology_cbe_results_discrete_mass_result->fixed_r }}</td>
                                        <td>{{ $oncology_cbe_results_discrete_mass_result->fixed_l }}</td>
                                        <td>{{ $oncology_cbe_results_discrete_mass_result->mobile_r }}</td>
                                        <td>{{ $oncology_cbe_results_discrete_mass_result->mobile_l }}</td>
                                        <td>{{ $oncology_cbe_results_discrete_mass_result->cbe_result_date }}</td>
                                        <td>{{ $oncology_cbe_results_discrete_mass_result->imaging_referral_date }}</td>
                                        <td>{{ $oncology_cbe_results_discrete_mass_result->normal }}</td>
                                        <td>{{ $oncology_cbe_results_discrete_mass_result->screening_imaging }}</td>
                                        <td>{{ $oncology_cbe_results_discrete_mass_result->importance_of_annual_screen }}</td>
                                        <td>{{ $oncology_cbe_results_discrete_mass_result->benign_finding }}</td>
                                        <td>{{ $oncology_cbe_results_discrete_mass_result->diagnostic_imaging }}</td>
                                        <td>{{ $oncology_cbe_results_discrete_mass_result->referral_follow_up }}</td>
                                        <td>{{ $oncology_cbe_results_discrete_mass_result->anormality }}</td>
                                        <td>{{ $oncology_cbe_results_discrete_mass_result->ultra_sound_only }}</td>
                                        <td>{{ $oncology_cbe_results_discrete_mass_result->breast_self_examination }}</td>
                                        <td>{{ $oncology_cbe_results_discrete_mass_result->other }}</td>
                                        <td>{{ $oncology_cbe_results_discrete_mass_result->other_1 }}</td>
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
                                <div class="card container">
                                    <form action="{{route('oncology_cbe_results_discrete_mass_post', ['patient_id'=>$patient_id])}}" method="post" >{!! csrf_field() !!}
                                        <h2>Discrete mass</h2>
                                        <table class="table table-bordered">
                                            <thead>
                                            <tr>
                                                <th>Lymph nodes </th>
                                                <th>Axiliary</th>
                                                <th>clavicular</th>
                                            </tr>

                                            </thead>

                                            <tbody>
                                            <tr>

                                                <td>
                                                    <div class="form-check">

                                                        <label class="form-check-label">WNL</label>
                                                    </div>
                                                </td>


                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-label" name="wnl_r">
                                                        <label class="form-check-label"> R</label>
                                                        <input type="checkbox" class="form-check-label" name="wnl_l">
                                                        <label class="form-check-label">L</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-label" name="supra_r">
                                                        <label class="form-check-label">supra R</label>
                                                        <input type="checkbox" class="form-check-label" name="supra_l">
                                                        <label class="form-check-label">supra L</label>
                                                        <input type="checkbox" class="form-check-label" name="infra_r">
                                                        <label class="form-check-label">Infra R</label>
                                                        <input type="checkbox" class="form-check-label" name="infra_l">
                                                        <label class="form-check-label">Infra L</label>
                                                    </div>
                                                </td>

                                            </tr>
                                            <tr>

                                                <td>
                                                    <div class="form-check">

                                                        <label class="form-check-label">Enlarged</label>
                                                    </div>
                                                </td>


                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-label" name="enlarged_r">
                                                        <label class="form-check-label"> R</label>
                                                        <input type="checkbox" class="form-check-label" name="enlarged_l">
                                                        <label class="form-check-label"> L</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-label" name="en_supra_r">
                                                        <label class="form-check-label">supra R</label>
                                                        <input type="checkbox" class="form-check-label" name="en_supra_l">
                                                        <label class="form-check-label">supra L</label>
                                                        <input type="checkbox" class="form-check-label" name="en_infra_r">
                                                        <label class="form-check-label">Infra R</label>
                                                        <input type="checkbox" class="form-check-label" name="en_infra_l">
                                                        <label class="form-check-label">Infra L</label>
                                                    </div>
                                                </td>

                                            </tr>
                                            <tr>

                                                <td>
                                                    <div class="form-check">

                                                        <label class="form-check-label">Fixed</label>
                                                    </div>
                                                </td>


                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-label" name="fixed_r">
                                                        <label class="form-check-label"> R</label>
                                                        <input type="checkbox" class="form-check-label" name="fixed_l">
                                                        <label class="form-check-label"> L</label>
                                                    </div>
                                                </td>
                                                <td>

                                                </td>

                                            </tr>
                                            <tr>

                                                <td>
                                                    <div class="form-check">

                                                        <label class="form-check-label">Mobile</label>
                                                    </div>
                                                </td>


                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-label" name="mobile_r">
                                                        <label class="form-check-label"> R</label>
                                                        <input type="checkbox" class="form-check-label" name="mobile_l">
                                                        <label class="form-check-label"> L</label>
                                                    </div>
                                                </td>
                                                <td>

                                                </td>

                                            </tr>

                                            </tbody>
                                        </table>
                                        <table class="table table-bordered">
                                            <thead>
                                            <tr>
                                                <th>CBE result date <input type="date" class="form-check-label" name="cbe_result_date"></th>
                                                <th>Imaging referral date<input type="checkbox" class="form-check-label" name="imaging_referral_date"></th>
                                                <th>patient education</th>


                                            </tr>

                                            </thead>

                                            <tbody>
                                            <tr>

                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-label" name="normal">
                                                        <label class="form-check-label">normal</label>
                                                    </div>
                                                </td>


                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-label" name="screening_imaging">
                                                        <label class="form-check-label">screening imaging</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-label" name="importance_of_annual_screen">
                                                        <label class="form-check-label">importance of annual screen</label>
                                                    </div>
                                                </td>

                                            </tr>
                                            <tr>

                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-label" name="benign_finding">
                                                        <label class="form-check-label">benign finding</label>
                                                    </div>
                                                </td>


                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-label" name="diagnostic_imaging">
                                                        <label class="form-check-label">diagnostic imaging</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-label" name="referral_follow_up">
                                                        <label class="form-check-label">referral follow up</label>
                                                    </div>
                                                </td>

                                            </tr>
                                            <tr>

                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-label" name="anormality">
                                                        <label class="form-check-label">anormality:suspicioous for cancer</label>
                                                    </div>
                                                </td>


                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-label" name="ultra_sound_only">
                                                        <label class="form-check-label">ultrsound(only)</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-label" name="breast_self_examination">
                                                        <label class="form-check-label">breast self examination</label>
                                                    </div>
                                                </td>

                                            </tr>
                                            <tr>

                                                <td>

                                                </td>


                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-label" name="other">
                                                        <label class="form-check-label">other</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-label" name="other_1">
                                                        <label class="form-check-label">other</label>
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
