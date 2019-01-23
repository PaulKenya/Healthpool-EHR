@extends('layouts.master')
@section('content')
    @include('departments.clinical_services.inpatient.patient_file.patient_bio_information')
    <div class="row page-titles">
        <div class="col-md-12 align-self-center">
            <h4 class="theme-cl">ORTHOPEDIC PATIENT STANDING</h4>
        </div>
    </div>
    <!-- Title & Breadcrumbs-->
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>ORTHOPEDIC PATIENT STANDING</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable" class="table table-bordered">
                            <thead>
                            <tr>
                                <th>adisons_l</th>
                                <th>adisons_r</th>
                                <th>wrights_l</th>
                                <th>wrights_r</th>
                                <th>allens_l</th>
                                <th>allens_r</th>
                                <th>bdens_test_l</th>
                                <th>bdens_test_r</th>
                                <th>cervical_compressions_l</th>
                                <th>cervical_compressions_r/th>
                                <th>jacksons_compressions_l</th>
                                <th>jacksons_compressions_r</th>
                                <th>rotation_l_3</th>
                                <th>rotation_r_3</th>
                                <th>cervical_decompressions_l</th>
                                <th>cervical_decompressions_r</th>
                                <th>George_test_l</th>
                                <th>George_test_r</th>
                                <th>arc_of_abduction_l</th>
                                <th>arc_of_abduction_r</th>
                                <th>deltoid_extension_l</th>
                                <th>deltoid_extension_r</th>
                                <th>wrist_wrist_l</th>
                                <th>wrist_wrist_r</th>
                                <th>wrist_flexion_l</th>
                                <th>wrist_flexion_r</th>
                                <th>finger_cud_l</th>
                                <th>finger_cud_r</th>
                                <th>finger_spread_l</th>
                                <th>finger_spread_r</th>
                                <th>cold_hands_l</th>
                                <th>cold_hands_r</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(isset($orthopedic_tests_results))
                                @foreach($orthopedic_tests_results as $orthopedic_tests_result)
                                    <tr>
                                        <td>{{ $orthopedic_tests_result->adisons_l}}</td>
                                        <td>{{ $orthopedic_tests_result->adisons_r}}</td>
                                        <td>{{ $orthopedic_tests_result->wrights_l}}</td>
                                        <td>{{ $orthopedic_tests_result->wrights_r}}</td>
                                        <td>{{ $orthopedic_tests_result->allens_l}}</td>
                                        <td>{{ $orthopedic_tests_result->allens_r}}</td>
                                        <td>{{ $orthopedic_tests_result->bdens_test_l}}</td>
                                        <td>{{ $orthopedic_tests_result->bdens_test_r}}</td>
                                        <td>{{ $orthopedic_tests_result->cervical_compressions_l}}</td>
                                        <td>{{ $orthopedic_tests_result->cervical_compressions_r}}</td>
                                        <td>{{ $orthopedic_tests_result->jacksons_compressions_l}}</td>
                                        <td>{{ $orthopedic_tests_result->jacksons_compressions_r}}</td>
                                        <td>{{ $orthopedic_tests_result->rotation_l_3}}</td>
                                        <td>{{ $orthopedic_tests_result->rotation_r_3}}</td>
                                        <td>{{ $orthopedic_tests_result->cervical_decompressions_l}}</td>
                                        <td>{{ $orthopedic_tests_result->cervical_decompressions_r}}</td>
                                        <td>{{ $orthopedic_tests_result->George_test_l}}</td>
                                        <td>{{ $orthopedic_tests_result->George_test_r}}</td>
                                        <td>{{ $orthopedic_tests_result->arc_of_abduction_l}}</td>
                                        <td>{{ $orthopedic_tests_result->arc_of_abduction_r}}</td>
                                        <td>{{ $orthopedic_tests_result->deltoid_extension_l}}</td>
                                        <td>{{ $orthopedic_tests_result->deltoid_extension_r}}</td>
                                        <td>{{ $orthopedic_tests_result->wrist_wrist_l}}</td>
                                        <td>{{ $orthopedic_tests_result->wrist_wrist_r}}</td>
                                        <td>{{ $orthopedic_tests_result->wrist_flexion_l}}</td>
                                        <td>{{ $orthopedic_tests_result->wrist_flexion_r}}</td>
                                        <td>{{ $orthopedic_tests_result->finger_cud_l}}</td>
                                        <td>{{ $orthopedic_tests_result->finger_cud_r}}</td>
                                        <td>{{ $orthopedic_tests_result->finger_spread_l}}</td>
                                        <td>{{ $orthopedic_tests_result->finger_spread_r}}</td>
                                        <td>{{ $orthopedic_tests_result->cold_hands_l}}</td>
                                        <td>{{ $orthopedic_tests_result->cold_hands_r}}</td>
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
                            <div class="container-fluid">
                                <h1 class="text-center">Orthopedic Clinic Tests</h1>
                                <form action="{{route('orthopaedic_examination_test_post', ['patient_id'=>$patient_id])}}" method="post" >{!! csrf_field() !!}
                                    <table class="table table-bordered">
                                        <tbody>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">adisons</label>
                                                    <label class="form-check-label">L</label>
                                                    <input name="adisons_l" type="text" class="form-check-label">
                                                    <label class="form-check-label">R</label>
                                                    <input name="adisons_r" type="text" class="form-check-label">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">wrights</label>
                                                    <label class="form-check-label">L</label>
                                                    <input name="wrights_l" type="text" class="form-check-label">
                                                    <label class="form-check-label">R</label>
                                                    <input name="wrights_r" type="text" class="form-check-label">
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>

                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">allens(vascular)</label>
                                                    <label class="form-check-label">L</label>
                                                    <input name="allens_l" type="text" class="form-check-label">
                                                    <label class="form-check-label">R</label>
                                                    <input name="allens_r" type="text" class="form-check-label">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">bdens test</label>
                                                    <label class="form-check-label">L</label>
                                                    <input name="bdens_test_l" type="text" class="form-check-label">
                                                    <label class="form-check-label">R</label>
                                                    <input name="bdens_test_r" type="text" class="form-check-label">
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>

                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">cervical compressions</label>
                                                    <label class="form-check-label">L</label>
                                                    <input name="cervical_compressions_l" type="text" class="form-check-label">
                                                    <label class="form-check-label">R</label>
                                                    <input name="cervical_compressions_r" type="text" class="form-check-label">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">jacksons compressions</label>
                                                    <label class="form-check-label">L</label>
                                                    <input name="jacksons_compressions_l" type="text" class="form-check-label">
                                                    <label class="form-check-label">R</label>
                                                    <input name="jacksons_compressions_r" type="text" class="form-check-label">
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>

                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">rotation</label>
                                                    <label class="form-check-label">L</label>
                                                    <input name="rotation_l_3" type="text" class="form-check-label">
                                                    <label class="form-check-label">R</label>
                                                    <input name="rotation_r_3" type="text" class="form-check-label">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">cervical decompressions</label>
                                                    <label class="form-check-label">L</label>
                                                    <input name="cervical_decompressions_l" type="text" class="form-check-label">
                                                    <label class="form-check-label">R</label>
                                                    <input name="cervical_decompressions_r" type="text" class="form-check-label">
                                                </div>
                                            </td>

                                        </tr>

                                        <tr>

                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">George's test</label>
                                                    <label class="form-check-label">L</label>
                                                    <input name="George_test_l" type="text" class="form-check-label">
                                                    <label class="form-check-label">R</label>
                                                    <input name="George_test_r" type="text" class="form-check-label">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">arc of abduction</label>
                                                    <label class="form-check-label">L</label>
                                                    <input name="arc_of_abduction_l" type="text" class="form-check-label">
                                                    <label class="form-check-label">R</label>
                                                    <input name="arc_of_abduction_r" type="text" class="form-check-label">
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>

                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">deltoid extension</label>
                                                    <label class="form-check-label">L</label>
                                                    <input name="deltoid_extension_l" type="text" class="form-check-label">
                                                    <label class="form-check-label">R</label>
                                                    <input name="deltoid_extension_r" type="text" class="form-check-label">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">wrist extension</label>
                                                    <label class="form-check-label">L</label>
                                                    <input name="wrist_wrist_l" type="text" class="form-check-label">
                                                    <label class="form-check-label">R</label>
                                                    <input name="wrist_wrist_r" type="text" class="form-check-label">
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>

                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">wrist flexion</label>
                                                    <label class="form-check-label">L</label>
                                                    <input name="wrist_flexion_l" type="text" class="form-check-label">
                                                    <label class="form-check-label">R</label>
                                                    <input name="wrist_flexion_r" type="text" class="form-check-label">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">finger cud</label>
                                                    <label class="form-check-label">L</label>
                                                    <input name="finger_cud_l" type="text" class="form-check-label">
                                                    <label class="form-check-label">R</label>
                                                    <input name="finger_cud_r" type="text" class="form-check-label">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">finger spread</label>
                                                    <label class="form-check-label">L</label>
                                                    <input name="finger_spread_l" type="text" class="form-check-label">
                                                    <label class="form-check-label">R</label>
                                                    <input name="finger_spread_r" type="text" class="form-check-label">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">cold hands</label>
                                                    <label class="form-check-label">L</label>
                                                    <input name="cold_hands_l" type="text" class="form-check-label">
                                                    <label class="form-check-label">R</label>
                                                    <input name="cold_hands_r" type="text" class="form-check-label">
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
    @endsection