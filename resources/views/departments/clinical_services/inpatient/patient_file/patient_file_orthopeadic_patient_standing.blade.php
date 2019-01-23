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
                                <th>well_nourished</th>
                                <th>diabiliated</th>
                                <th>fair</th>
                                <th>disfigured</th>
                                <th>poor</th>
                                <th>obese</th>
                                <th>head_tilt_l_n_r</th>
                                <th>rotation_l_n_r</th>
                                <th>shoulder_tilt_l_n_r</th>
                                <th>rotation_l_n_r_1</th>
                                <th>hip_tilt_l_n_r</th>
                                <th>rotation_l_n_r_2</th>
                                <th>biceps_l</th>
                                <th>biceps_r</th>
                                <th>triceps_l</th>
                                <th>triceps_r</th>
                                <th>radial_l</th>
                                <th>radial_r</th>
                                <th>patellar_l</th>
                                <th>patellar_r</th>
                                <th>achelles_l</th>
                                <th>achelles_l</th>
                                <th>dejerines_dejerines_l</th>
                                <th>dejerines_dejerines_r</th>
                                <th>Bechtew_l</th>
                                <th>Bechtew_r</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(isset($orthopaedic_examination_patient_standing_results))
                                @foreach($orthopaedic_examination_patient_standing_results as $orthopaedic_examination_patient_standing_result)
                                    <tr>

                                        <td>{{ $orthopaedic_examination_patient_standing_result->well_nourished}}</td>
                                        <td>{{ $orthopaedic_examination_patient_standing_result->diabiliated}}</td>
                                        <td>{{ $orthopaedic_examination_patient_standing_result->fair}}</td>
                                        <td>{{ $orthopaedic_examination_patient_standing_result->disfigured}}</td>
                                        <td>{{ $orthopaedic_examination_patient_standing_result->poor}}</td>
                                        <td>{{ $orthopaedic_examination_patient_standing_result->obese}}</td>
                                        <td>{{ $orthopaedic_examination_patient_standing_result->head_tilt_l_n_r}}</td>
                                        <td>{{ $orthopaedic_examination_patient_standing_result->rotation_l_n_r}}</td>
                                        <td>{{ $orthopaedic_examination_patient_standing_result->shoulder_tilt_l_n_r}}</td>
                                        <td>{{ $orthopaedic_examination_patient_standing_result->rotation_l_n_r_1}}</td>
                                        <td>{{ $orthopaedic_examination_patient_standing_result->hip_tilt_l_n_r}}</td>
                                        <td>{{ $orthopaedic_examination_patient_standing_result->rotation_l_n_r_2}}</td>
                                        <td>{{ $orthopaedic_examination_patient_standing_result->biceps_l}}</td>
                                        <td>{{ $orthopaedic_examination_patient_standing_result->biceps_r}}</td>
                                        <td>{{ $orthopaedic_examination_patient_standing_result->triceps_l}}</td>
                                        <td>{{ $orthopaedic_examination_patient_standing_result->triceps_r}}</td>
                                        <td>{{ $orthopaedic_examination_patient_standing_result->radial_l}}</td>
                                        <td>{{ $orthopaedic_examination_patient_standing_result->radial_r}}</td>
                                        <td>{{ $orthopaedic_examination_patient_standing_result->patellar_l}}</td>
                                        <td>{{ $orthopaedic_examination_patient_standing_result->patellar_r}}</td>
                                        <td>{{ $orthopaedic_examination_patient_standing_result->achelles_l}}</td>
                                        <td>{{ $orthopaedic_examination_patient_standing_result->achelles_r}}</td>
                                        <td>{{ $orthopaedic_examination_patient_standing_result->dejerines_dejerines_l}}</td>
                                        <td>{{ $orthopaedic_examination_patient_standing_result->dejerines_dejerines_r}}</td>
                                        <td>{{ $orthopaedic_examination_patient_standing_result->Bechtew_l}}</td>
                                        <td>{{ $orthopaedic_examination_patient_standing_result->Bechtew_r}}</td>
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
                                <h1 class="text-center">ORTHOPEDIC PATIENT STANDING</h1>
                                <form action="{{route('orthopaedic_examination_patient_standing_post', ['patient_id'=>$patient_id])}}" method="post" >{!! csrf_field() !!}
                                    <h3>appearance</h3>
                                    <div class="form-row">
                                        <div class="form-group col-md-3">
                                            <label for="">well nourished</label>
                                            <input name="well_nourished" type="text" class="form-control">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="">diabiliated</label>
                                            <input name="diabiliated" type="text" class="form-control">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="">fair</label>
                                            <input name="fair" type="text" class="form-control">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="">disfigured</label>
                                            <input name="disfigured" type="text" class="form-control">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="">poor</label>
                                            <input name="poor" type="text" class="form-control">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="">obese</label>
                                            <input name="obese" type="text" class="form-control">
                                        </div>

                                    </div>
                                    <h2>spinal posture</h2>

                                    <div class="form-row">
                                        <div class="form-group col-md-3">
                                            <label for="">Head tilt L N R</label>
                                            <input name="head_tilt_l_n_r" type="text" class="form-control">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="">rotation L N R</label>
                                            <input name="rotation_l_n_r" type="text" class="form-control">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="">Shoulder tilt L N R</label>
                                            <input name="shoulder_tilt_l_n_r" type="text" class="form-control">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="">rotation L N R</label>
                                            <input name="rotation_l_n_r_1" type="text" class="form-control">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="">Hip tilt L N R</label>
                                            <input name="hip_tilt_l_n_r" type="text" class="form-control">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="">rotation L N R</label>
                                            <input name="rotation_l_n_r_2" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <h2>reflexes</h2>
                                    <table class="table table-bordered">
                                        <tbody>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">biceps(c 5-6)</label>
                                                    <label class="form-check-label">L</label>
                                                    <input name="biceps_l" type="text" class="form-check-label">
                                                    <label class="form-check-label">R</label>
                                                    <input name="biceps_r" type="text" class="form-check-label">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">triceps(c 7-8)</label>
                                                    <label class="form-check-label">L</label>
                                                    <input name="triceps_l" type="text" class="form-check-label">
                                                    <label class="form-check-label">R</label>
                                                    <input name="triceps_r" type="text" class="form-check-label">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">radial(c 5-6)</label>
                                                    <label class="form-check-label">L</label>
                                                    <input name="radial_l" type="text" class="form-check-label">
                                                    <label class="form-check-label">R</label>
                                                    <input name="radial_r" type="text" class="form-check-label">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">patellar(1-4)</label>
                                                    <label class="form-check-label">L</label>
                                                    <input name="patellar_l" type="text" class="form-check-label">
                                                    <label class="form-check-label">R</label>
                                                    <input name="patellar_r" type="text" class="form-check-label">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">achelles(si)</label>
                                                    <label class="form-check-label">L</label>
                                                    <input name="achelles_l" type="text" class="form-check-label">
                                                    <label class="form-check-label">R</label>
                                                    <input name="achelles_r" type="text" class="form-check-label">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">dejerines dejerines</label>
                                                    <label class="form-check-label">L</label>
                                                    <input name="dejerines_dejerines_l" type="text" class="form-check-label">
                                                    <label class="form-check-label">R</label>
                                                    <input name="dejerines_dejerines_r" type="text" class="form-check-label">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">Bechtew's</label>
                                                    <label class="form-check-label">L</label>
                                                    <input name="Bechtew_l" type="text" class="form-check-label">
                                                    <label class="form-check-label">R</label>
                                                    <input name="Bechtew_r" type="text" class="form-check-label">
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