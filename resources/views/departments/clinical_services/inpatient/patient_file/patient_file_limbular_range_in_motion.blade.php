@extends('layouts.master')
@section('content')
    <!-- Title &
    Breadcrumbs-->
    @include('departments.clinical_services.inpatient.patient_file.patient_bio_information')
    <div class="row page-titles">
        <div class="col-md-12 align-self-center">
            <h4 class="theme-cl">ORTHOPEDIC LUMBAR RANGE OF MOTION</h4>
        </div>
    </div>
    <!-- Title & Breadcrumbs-->
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>ORTHOPEDIC LUMBAR RANGE OF MOTION</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable" class="table table-bordered">
                            <thead>
                            <tr>
                                <th>flexion_a</th>
                                <th>flexion_b</th>
                                <th>extension_a</th>
                                <th>extension_b</th>
                                <th>flexion_1_a</th>
                                <th>extension_1_a</th>
                                <th>extension_1_b</th>
                                <th>right_lateral_a</th>
                                <th>left_lateral_a</th>
                                <th>left_lateral_b</th>
                                <th>right_a</th>
                                <th>right_b</th>
                                <th>left_a</th>
                                <th>left_b</th>
                                <th>adams_sign_a</th>
                                <th>adams_sign_b</th>
                                <th>from_front_a</th>
                                <th>from_front_b</th>
                                <th>Dynamometer_grip_1a</th>
                                <th>Dynamometer_grip_1b</th>
                                <th>Dynamometer_grip_2a</th>
                                <th>Dynamometer_grip_2b</th>
                                <th>Dynamometer_grip_3a</th>
                                <th>Dynamometer_grip_3b</th>
                                <th>arms_1l</th>
                                <th>arms_1r</th>
                                <th>neck_1l</th>
                                <th>neck_1r</th>
                                <th>leg_1l</th>
                                <th>leg_1r</th>
                                <th>back_1l</th>
                                <th>back_1r</th>
                                <th>hypertensia</th>
                                <th>paresthia</th>
                                <th>positional</th>
                                <th>anesthia</th>
                                <th>hypesthesia</th>
                                <th>ROMBERG</th>
                                <th>finger_to_nose</th>
                                <th>toe_to_shin</th>
                                <th>finger_to_finger</th>
                                <th>kEMPS_r</th>
                                <th>kEMPS_l</th>
                                <th>TRENDELENBERG_r</th>
                                <th>TRENDELENBERG_l</th>
                                <th>LEWINS_test_r</th>
                                <th>LEWINS_test_l</th>
                                <th>MINORS_SIGN_r</th>
                                <th>MINORS_SIGN_l</th>
                                <th>NORMAL_a</th>
                                <th>NORMAL_b</th>
                                <th>IMPAIRED_a</th>
                                <th>IMPAIRED_b</th>
                                <th>PAIN_a</th>
                                <th>PAIN_b</th>
                                <th>NEED_ASSISTANCE</th>
                                <th>WALK_TOE</th>
                                <th>HEEL_WALK_r</th>
                                <th>HEEL_WALK_l</th>
                                <th>TOE_WALK_r</th>
                                <th>TOE_WALK_l</th>
                                <th>BABY_WALK</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(isset($orthopaedic_examination_length_of_motion_results))
                                @foreach($orthopaedic_examination_length_of_motion_results as $orthopaedic_examination_patient_standing_result)
                                    <tr>
                                        <td>{{ $orthopaedic_examination_patient_standing_result->flexion_a}}</td>
                                        <td>{{ $orthopaedic_examination_patient_standing_result->flexion_b}}</td>
                                        <td>{{ $orthopaedic_examination_patient_standing_result->extension_a}}</td>
                                        <td>{{ $orthopaedic_examination_patient_standing_result->extension_b}}</td>
                                        <td>{{ $orthopaedic_examination_patient_standing_result->flexion_1_a}}</td>
                                        <td>{{ $orthopaedic_examination_patient_standing_result->extension_1_a}}</td>
                                        <td>{{ $orthopaedic_examination_patient_standing_result->extension_1_b}}</td>
                                        <td>{{ $orthopaedic_examination_patient_standing_result->right_lateral_a}}</td>
                                        <td>{{ $orthopaedic_examination_patient_standing_result->left_lateral_a}}</td>
                                        <td>{{ $orthopaedic_examination_patient_standing_result->left_lateral_b}}</td>
                                        <td>{{ $orthopaedic_examination_patient_standing_result->right_a}}</td>
                                        <td>{{ $orthopaedic_examination_patient_standing_result->right_b}}</td>
                                        <td>{{ $orthopaedic_examination_patient_standing_result->left_a}}</td>
                                        <td>{{ $orthopaedic_examination_patient_standing_result->left_b}}</td>
                                        <td>{{ $orthopaedic_examination_patient_standing_result->adams_sign_a}}</td>
                                        <td>{{ $orthopaedic_examination_patient_standing_result->adams_sign_b}}</td>
                                        <td>{{ $orthopaedic_examination_patient_standing_result->from_front_a}}</td>
                                        <td>{{ $orthopaedic_examination_patient_standing_result->from_front_b}}</td>
                                        <td>{{ $orthopaedic_examination_patient_standing_result->Dynamometer_grip_1a}}</td>
                                        <td>{{ $orthopaedic_examination_patient_standing_result->Dynamometer_grip_1b}}</td>
                                        <td>{{ $orthopaedic_examination_patient_standing_result->Dynamometer_grip_2a}}</td>
                                        <td>{{ $orthopaedic_examination_patient_standing_result->Dynamometer_grip_2b}}</td>
                                        <td>{{ $orthopaedic_examination_patient_standing_result->Dynamometer_grip_3a}}</td>
                                        <td>{{ $orthopaedic_examination_patient_standing_result->Dynamometer_grip_3b}}</td>
                                        <td>{{ $orthopaedic_examination_patient_standing_result->arms_1l}}</td>
                                        <td>{{ $orthopaedic_examination_patient_standing_result->arms_1r}}</td>
                                        <td>{{ $orthopaedic_examination_patient_standing_result->neck_1l}}</td>
                                        <td>{{ $orthopaedic_examination_patient_standing_result->neck_1r}}</td>
                                        <td>{{ $orthopaedic_examination_patient_standing_result->leg_1l}}</td>
                                        <td>{{ $orthopaedic_examination_patient_standing_result->leg_1r}}</td>
                                        <td>{{ $orthopaedic_examination_patient_standing_result->back_1l}}</td>
                                        <td>{{ $orthopaedic_examination_patient_standing_result->back_1r}}</td>
                                        <td>{{ $orthopaedic_examination_patient_standing_result->hypertensia}}</td>
                                        <td>{{ $orthopaedic_examination_patient_standing_result->paresthia}}</td>
                                        <td>{{ $orthopaedic_examination_patient_standing_result->positional}}</td>
                                        <td>{{ $orthopaedic_examination_patient_standing_result->anesthia}}</td>
                                        <td>{{ $orthopaedic_examination_patient_standing_result->hypesthesia}}</td>
                                        <td>{{ $orthopaedic_examination_patient_standing_result->ROMBERG}}</td>
                                        <td>{{ $orthopaedic_examination_patient_standing_result->finger_to_nose}}</td>
                                        <td>{{ $orthopaedic_examination_patient_standing_result->toe_to_shin}}</td>
                                        <td>{{ $orthopaedic_examination_patient_standing_result->finger_to_finger}}</td>
                                        <td>{{ $orthopaedic_examination_patient_standing_result->kEMPS_r}}</td>
                                        <td>{{ $orthopaedic_examination_patient_standing_result->kEMPS_l}}</td>
                                        <td>{{ $orthopaedic_examination_patient_standing_result->TRENDELENBERG_r}}</td>
                                        <td>{{ $orthopaedic_examination_patient_standing_result->TRENDELENBERG_l}}</td>
                                        <td>{{ $orthopaedic_examination_patient_standing_result->LEWINS_test_r}}</td>
                                        <td>{{ $orthopaedic_examination_patient_standing_result->LEWINS_test_l}}</td>
                                        <td>{{ $orthopaedic_examination_patient_standing_result->MINORS_SIGN_r}}</td>
                                        <td>{{ $orthopaedic_examination_patient_standing_result->MINORS_SIGN_l}}</td>
                                        <td>{{ $orthopaedic_examination_patient_standing_result->NORMAL_a}}</td>
                                        <td>{{ $orthopaedic_examination_patient_standing_result->NORMAL_b}}</td>
                                        <td>{{ $orthopaedic_examination_patient_standing_result->IMPAIRED_a}}</td>
                                        <td>{{ $orthopaedic_examination_patient_standing_result->IMPAIRED_b}}</td>
                                        <td>{{ $orthopaedic_examination_patient_standing_result->PAIN_a}}</td>
                                        <td>{{ $orthopaedic_examination_patient_standing_result->PAIN_b}}</td>
                                        <td>{{ $orthopaedic_examination_patient_standing_result->NEED_ASSISTANCE}}</td>
                                        <td>{{ $orthopaedic_examination_patient_standing_result->WALK_TOE}}</td>
                                        <td>{{ $orthopaedic_examination_patient_standing_result->HEEL_WALK_r}}</td>
                                        <td>{{ $orthopaedic_examination_patient_standing_result->HEEL_WALK_l}}</td>
                                        <td>{{ $orthopaedic_examination_patient_standing_result->TOE_WALK_r}}</td>
                                        <td>{{ $orthopaedic_examination_patient_standing_result->TOE_WALK_l}}</td>
                                        <td>{{ $orthopaedic_examination_patient_standing_result->BABY_WALK}}</td>
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
                                <h1 class="text-center">ORTHOPEDIC LUMBAR RANGE OF MOTION</h1>
                                <form action="{{route('orthopaedic_examination_length_of_motion_post', ['patient_id'=>$patient_id])}}" method="post" >{!! csrf_field() !!}
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th> DEG</th>
                                                <th> PAIN</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">flexion(93)</label>
                                                    <input name="flexion_a" type="text" class="form-check-label">
                                                    <input name="flexion_b" type="text" class="form-check-label">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">extension()35</label>

                                                    <input name="extension_a" type="text" class="form-check-label">

                                                    <input name="extension_b" type="text" class="form-check-label">
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>

                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">flexion(93)</label>

                                                    <input name="flexion_1_a" type="text" class="form-check-label">

                                                    <input name="flexion_1_b" type="text" class="form-check-label">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">extension(35)</label>

                                                    <input name="extension_1_a" type="text" class="form-check-label">

                                                    <input name="extension_1_b" type="text" class="form-check-label">
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>

                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">right lateral(40)</label>

                                                    <input name="right_lateral_a" type="text" class="form-check-label">

                                                    <input name="right_lateral_b" type="text" class="form-check-label">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">left lateral(35)</label>

                                                    <input name="left_lateral_a" type="text" class="form-check-label">

                                                    <input name="left_lateral_b" type="text" class="form-check-label">
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>

                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">right (35)</label>

                                                    <input name="right_a" type="text" class="form-check-label">

                                                    <input name="right_b" type="text" class="form-check-label">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">left(35)</label>

                                                    <input name="left_a" type="text" class="form-check-label">

                                                    <input name="left_b" type="text" class="form-check-label">
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>

                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">adams sign</label>

                                                    <input name="adams_sign_a" type="text" class="form-check-label">

                                                    <input name="adams_sign_b" type="text" class="form-check-label">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">from front</label>

                                                    <input name="from_front_a" type="text" class="form-check-label">

                                                    <input name="from_front_b" type="text" class="form-check-label">
                                                </div>
                                            </td>

                                        </tr>
                                        </tbody>
                                    </table>
                                    <h2>PATIENT SEATED</h2>
                                    <table class="table table-bordered">


                                        <tbody>
                                        <tr>

                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">Dynamometer grip 1st</label>
                                                    <label class="form-check-label">L</label>
                                                    <input name="Dynamometer_grip_1a" type="text" class="form-check-label">
                                                    <label class="form-check-label">R</label>
                                                    <input name="Dynamometer_grip_1b" type="text" class="form-check-label">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">Dynamometer grip 2nd</label>
                                                    <label class="form-check-label">L</label>
                                                    <input name="Dynamometer_grip_2a" type="text" class="form-check-label">
                                                    <label class="form-check-label">R</label>
                                                    <input name="Dynamometer_grip_2b" type="text" class="form-check-label">
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>

                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">Dynamometer grip 3rd</label>
                                                    <label class="form-check-label">L</label>
                                                    <input name="Dynamometer_grip_3a" type="text" class="form-check-label">
                                                    <label class="form-check-label">R</label>
                                                    <input name="Dynamometer_grip_3b" type="text" class="form-check-label">
                                                </div>
                                            </td>

                                        </tr>

                                        </tbody>
                                    </table>
                                    <h2>peripheral sensitivity test</h2>
                                    <table class="table table-bordered">


                                        <tbody>
                                        <tr>

                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">arms</label>
                                                    <label class="form-check-label">L</label>
                                                    <input name="arms_1l" type="text" class="form-check-label">
                                                    <label class="form-check-label">R</label>
                                                    <input name="arms_1r" type="text" class="form-check-label">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">neck</label>
                                                    <label class="form-check-label">L</label>
                                                    <input name="neck_1l" type="text" class="form-check-label">
                                                    <label class="form-check-label">R</label>
                                                    <input name="neck_1r" type="text" class="form-check-label">
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>

                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">leg</label>
                                                    <label class="form-check-label">L</label>
                                                    <input name="leg_1l" type="text" class="form-check-label">
                                                    <label class="form-check-label">R</label>
                                                    <input name="leg_1r" type="text" class="form-check-label">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">back</label>
                                                    <label class="form-check-label">L</label>
                                                    <input name="back_1l" type="text" class="form-check-label">
                                                    <label class="form-check-label">R</label>
                                                    <input name="back_1r" type="text" class="form-check-label">
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>

                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">hypertensia</label>

                                                    <input name="hypertensia" type="text" class="form-check-label">

                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">paresthia</label>

                                                    <input name="paresthia" type="text" class="form-check-label">

                                                </div>
                                            </td>

                                        </tr>
                                        <tr>

                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">positional</label>

                                                    <input name="positional" type="text" class="form-check-label">

                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">anesthia</label>

                                                    <input name="anesthia" type="text" class="form-check-label">

                                                </div>
                                            </td>

                                        </tr>
                                        <tr>

                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">hypesthesia</label>

                                                    <input name="hypesthesia" type="text" class="form-check-label">

                                                </div>
                                            </td>


                                        </tr>
                                        </tbody>
                                    </table>
                                    <h2>NEOROLOGICAL</h2>
                                    <table class="table table-bordered">


                                        <tbody>
                                        <tr>

                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">ROMBERG</label>

                                                    <input name="ROMBERG" type="text" class="form-check-label">

                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">finger to nose</label>

                                                    <input name="finger_to_nose" ype="text" class="form-check-label">

                                                </div>
                                            </td>

                                        </tr>
                                        <tr>

                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">toe to shin</label>

                                                    <input name="toe_to_shin" type="text" class="form-check-label">

                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">finger to finger</label>

                                                    <input name="finger_to_finger" type="text" class="form-check-label">

                                                </div>
                                            </td>

                                        </tr>

                                        </tbody>
                                    </table>
                                    <h2>ORTHOEPEDIC TEST</h2>
                                    <table class="table table-bordered">


                                        <tbody>
                                        <tr>

                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">kEMPS</label>
                                                    <label class="form-check-label">R</label>
                                                    <input name="kEMPS_r" type="text" class="form-check-label">
                                                    <label class="form-check-label">L</label>
                                                    <input name="kEMPS_l" type="text" class="form-check-label">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">TRENDELENBERG</label>
                                                    <label class="form-check-label">R</label>
                                                    <input name="TRENDELENBERG_r" type="text" class="form-check-label">
                                                    <label class="form-check-label">L</label>
                                                    <input name="TRENDELENBERG_l" type="text" class="form-check-label">
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>

                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">LEWINS TEST </label>
                                                    <label class="form-check-label">R</label>
                                                    <input name="LEWINS_test_r" type="text" class="form-check-label">
                                                    <label class="form-check-label">L</label>
                                                    <input name="LEWINS_test_l" type="text" class="form-check-label">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">MINORS SIGN</label>
                                                    <label class="form-check-label">R</label>
                                                    <input name="MINORS_SIGN_r" type="text" class="form-check-label">
                                                    <label class="form-check-label">L</label>
                                                    <input name="MINORS_SIGN_l" type="text" class="form-check-label">
                                                </div>
                                            </td>

                                        </tr>

                                        </tbody>
                                    </table>
                                    <h2>ORTHOEPEDIC TEST</h2>
                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th>AMBULATION</th>
                                            <th> GATE</th>

                                        </tr>

                                        </thead>

                                        <tbody>
                                        <tr>

                                            <td>
                                                <div class="form-check">

                                                    <input name="NORMAL_a" type="text" class="form-check-label">
                                                    <label class="form-check-label">NORMAL</label>

                                                </div>
                                            </td>
                                            <td>    <div class="form-check">
                                                    <input type="text" class="form-check-label">
                                                    <label name="NORMAL_b" class="form-check-label">NORMAL</label>
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>

                                            <td>
                                                <div class="form-check">

                                                    <input name="IMPAIRED_a" type="text" class="form-check-label">
                                                    <label class="form-check-label">IMPAIRED</label>

                                                </div>
                                            </td>
                                            <td>    <div class="form-check">
                                                    <input name="IMPAIRED_b" type="text" class="form-check-label">
                                                    <label class="form-check-label">VISUAL LIMP</label>
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>

                                            <td>
                                                <div class="form-check">

                                                    <input name="PAIN_a" type="text" class="form-check-label">
                                                    <label class="form-check-label">PAIN</label>

                                                </div>
                                            </td>
                                            <td>    <div class="form-check">
                                                    <input name="PAIN_b" type="text" class="form-check-label">
                                                    <label class="form-check-label">WALK TENSION</label>
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>

                                            <td>
                                                <div class="form-check">

                                                    <input name="NEED_ASSISTANCE" type="text" class="form-check-label">
                                                    <label class="form-check-label">NEED ASSISTANCE</label>

                                                </div>
                                            </td>
                                            <td>    <div class="form-check">
                                                    <input name="WALK_TOE" type="text" class="form-check-label">
                                                    <label class="form-check-label">WALK TOE</label>
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>

                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">HEEL WALK</label>
                                                    <label class="form-check-label">R</label>
                                                    <input name="HEEL_WALK_r" type="text" class="form-check-label">
                                                    <label class="form-check-label">L</label>
                                                    <input name="HEEL_WALK_l" type="text" class="form-check-label">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">TOE WALK</label>
                                                    <label class="form-check-label">R</label>
                                                    <input name="TOE_WALK_r" type="text" class="form-check-label">
                                                    <label class="form-check-label">L</label>
                                                    <input name="TOE_WALK_l" type="text" class="form-check-label">
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input name="BABY_WALK" type="text" class="form-check-label">
                                                    <label class="form-check-label">BABY WALK</label>
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
