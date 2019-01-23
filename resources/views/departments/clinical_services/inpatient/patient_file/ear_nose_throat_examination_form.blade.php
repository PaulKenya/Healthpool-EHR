
@extends('layouts.master')
@section('content')
    @include('departments.clinical_services.inpatient.patient_file.patient_bio_information')
    <!-- Title &
    Breadcrumbs-->
    <div class="row page-titles">
        <div class="col-md-12 align-self-center">
            <h4 class="theme-cl">EAR NOSE AND THROAT EXAMINATION FORM</h4>
        </div>
    </div>
    <!-- Title & Breadcrumbs-->
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>EAR NOSE AND THROAT EXAMINATION FORM</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable" class="table table-striped table-bordered table-responsive">
                            <thead>
                            <tr>
                                <th>name</th>
                                <th>grade</th>
                                <th>ward</th>
                                <th>date</th>
                                <th>age</th>
                                <th>diagnosis</th>
                                <th>examination_required</th>
                                <th>symptoms_referrable</th>
                                <th>nose</th>
                                <th>sinusesr</th>
                                <th>sinusesl</th>
                                <th>pharynx</th>
                                <th>larynx</th>
                                <th>ears</th>
                                <th>ad1</th>
                                <th>ad2</th>
                                <th>as1</th>
                                <th>as2</th>
                                <th>diagnosis_b</th>
                                <th>treatment_and_recommendation</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(isset($ear_nose_throat_examination_form_results))
                                @foreach($ear_nose_throat_examination_form_results as $ear_nose_throat_examination_form_result)
                                    <td>{{$ear_nose_throat_examination_form_result->name}}</td>
                                    <td>{{$ear_nose_throat_examination_form_result->grade}}</td>
                                    <td>{{$ear_nose_throat_examination_form_result->ward}}</td>
                                    <td>{{$ear_nose_throat_examination_form_result->date}}</td>
                                    <td>{{$ear_nose_throat_examination_form_result->age}}</td>
                                    <td>{{$ear_nose_throat_examination_form_result->diagnosis}}</td>
                                    <td>{{$ear_nose_throat_examination_form_result->examination_required}}</td>
                                    <td>{{$ear_nose_throat_examination_form_result->symptoms_referrable}}</td>
                                    <td>{{$ear_nose_throat_examination_form_result->nose}}</td>
                                    <td>{{$ear_nose_throat_examination_form_result->sinusesr}}</td>
                                    <td>{{$ear_nose_throat_examination_form_result->sinusesl}}</td>
                                    <td>{{$ear_nose_throat_examination_form_result->pharynx}}</td>
                                    <td>{{$ear_nose_throat_examination_form_result->larynx}}</td>
                                    <td>{{$ear_nose_throat_examination_form_result->ears}}</td>
                                    <td>{{$ear_nose_throat_examination_form_result->ad1}}</td>
                                    <td>{{$ear_nose_throat_examination_form_result->ad2}}</td>
                                    <td>{{$ear_nose_throat_examination_form_result->as1}}</td>
                                    <td>{{$ear_nose_throat_examination_form_result->as2}}</td>
                                    <td>{{$ear_nose_throat_examination_form_result->diagnosis_b}}</td>
                                    <td>{{$ear_nose_throat_examination_form_result->treatment_and_recommendation}}</td>
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
                            <div class="row page-titles">
                                <div class="col-md-12 align-self-center">
                                    <h4 class="theme-cl">EAR NOSE AND THROAT EXAMINATION FORM</h4>
                                </div>
                            </div>
                            <!-- Title & Breadcrumbs-->

                             <div class="container-fluid">
                                <h1 class="text-center">ear nose and throat examination</h1>

                                 <form action="{{route('ear_nose_throat_examination_form_post',['patient_id'=>$patient_id])}}" method="post" >{!! csrf_field() !!}
                                    <div class="form-row">
                                        <div class="form-group col-md-3">
                                            <label for="">name</label>
                                            <input type="text"name="name" class="form-control">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="">grade</label>
                                            <input type="text"name="grade" class="form-control">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="">ward</label>
                                            <input type="text"name="ward" class="form-control">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="">date</label>
                                            <input type="date" id="myDate" name="date" readonly  class="form-control">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="">age</label>
                                            <input type="number"name="age" class="form-control">
                                        </div>

                                    </div>


                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="">diagnosis</label>
                                            <input type="text"name="diagnosis" class="form-control">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="">examination required</label>
                                            <input type="text"name="examination_required" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="">symptoms refferable to ent</label>
                                            <input type="text"name="symptoms_referrable" class="form-control">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="">nose</label>
                                            <input type="text"name="nose" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="">sinuses</label>
                                        <label for="">R</label>
                                        <input type="text"name="sinusesr" class="form-control">
                                        <label for="">L</label>
                                        <input type="text"name="sinusesl" class="form-control">
                                    </div>


                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="">pharynx</label>
                                            <input type="text"name="pharynx" class="form-control">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="">larynx</label>
                                            <input type="text"name="larynx" class="form-control">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="">Ears</label>
                                            <input type="text"name="ears" class="form-control">
                                        </div>
                                    </div>

                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th>hearing </th>
                                            <th> long concentration series</th>
                                            <th> watch</th>
                                            <th> audiometer </th>

                                        </tr>

                                        </thead>
                                        <tbody>
                                        <tr>

                                            <td>
                                                <div class="form-check">

                                                    <label class="form-check-label">A.D</label>

                                                </div>
                                            </td>



                                            <td>
                                                <div class="form-check">
                                                    <input type="text"name="ad1" class="form-check-label">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <input type="text"name="ad2" class="form-check-label">
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>

                                            <td>
                                                <div class="form-check">

                                                    <label class="form-check-label">A.S</label>

                                                </div>
                                            </td>



                                            <td>
                                                <div class="form-check">
                                                    <input type="text"name="as1" class="form-check-label">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <input type="text"name="as2" class="form-check-label">
                                                </div>
                                            </td>

                                        </tr>

                                        </tbody>
                                    </table>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="">diagnosis</label>
                                            <input type="text"name="diagnosis_b" class="form-control">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="">treatment and recommendation</label>
                                            <input type="text"name="treatment_and_recommendation" class="form-control">
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