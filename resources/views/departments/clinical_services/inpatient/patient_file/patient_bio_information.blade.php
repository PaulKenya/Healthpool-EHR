
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ Route('patient_information') }}">All Patients</a></li>
        <li class="breadcrumb-item"><a href="{{ Route('single_patient',['patient_id'=>$patient_id]) }}">{{ $patient->name }}</a></li>
        <li class="breadcrumb-item active" aria-current="page">Form</li>
    </ol>
</nav>
<div class="page-titles">

    <div class="col-md-12 align-self-center">
        <h4 class="theme-cl offset-md-2">Your Department : {{ Auth::user()->roles->departments->department_name }} </h4>
    </div>
</div>




<div class="card">
    <div class="card-header">
        <h4 class="mb-0 offset-md-4">Patient Information for {{ $patient->name }}</h4>
    </div>
    <div class="card-body padd-0">
        <div class="table-responsive">
            <table class="table table-lg table-hover">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>sex</th>
                    <th>Marital Status</th>
                    <th>sex</th>
                    <th>Age</th>
                    <th>district</th>
                    <th>Phone number</th>
                    <th>Next of kin name</th>
                    <th>Next of kin relationship</th>
                    <th>Phone no</th>
                    <th>Current Department</th>
                    <th>Send To A department</th>
                </tr>
                </thead>

                <tbody>
                <tr>
                    {{--<td><a href="#"><img src="http://via.placeholder.com/180x180" class="avatar" alt="Avatar">Livka Lice</a></td>--}}

                    {{--<td><div class="label cl-success bg-success-light">Paid</div></td>--}}
                    <td>{{ $patient->name }}</td>
                    <td>{{ $patient->sex }}</td>
                    <td>{{ $patient->married }}</td>
                    <td>{{ $patient->sex }}</td>
                    <td></td>
                    <td>{{ $patient->district }}</td>
                    <td>{{ $patient->phone_number}}</td>
                    <td>{{ $patient->next_of_kin_name}}</td>
                    <td>{{ $patient->next_of_kin_relationship}}</td>
                    <td>{{ $patient->phone_no}}</td>
                    <td>{{ $patient->current_department }}</td>
                    <td><button class="btn btn-purple" data-toggle="modal" data-target="#dept_modal">Click Here</button></td>
                </tr>


                </tbody>
            </table>
        </div>
    </div>
    <a href="{{ Route('patient_information') }}" class=" btn waves-effect waves-light btn-outline-primary">Select Different Patient</a>
</div>


<div class="modal fade" id="dept_modal" role="dialog">
    <div class="modal-dialog modal-lg">

        <!— Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">CHANGE DEPARTMENT</h4>
            </div>
            <div class="modal-body">

                <div class="col-md-12">

                    <div class="container-fluid">
                        <form action="{{route('send_department_links_post', ['patient_id'=>$patient_id])}}" method="post" >{!! csrf_field() !!}

                            <div class="form-group col-md-6 p-20 offset-md-3">
                                <div>
                                    <label for="price">Total Price of Service</label>
                                    <input id="price" class="form-control" name="price" type="number">
                                </div>


                                <div>
                                    <label for="description">Description</label>
                                    <textarea id="description" class="form-control" name="description" type="text"></textarea>
                                </div>
                                <div>
                                    <label for="">Department</label>
                                    <select class="form-control" name="department_id">
                                        @php
                                            $all_departments=\App\department::all();
                                        @endphp
                                        @foreach($all_departments as $department)
                                            <option value="{{ $department->id }}">{{ $department->department_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group offset-md-4">
                                <button type="submit" class="btn btn-primary ">Send To Department</button>
                            </div>
                            {{--<input type="hidden" value="{{\Illuminate\Support\Facades\Route::currentRouteName();}}">--}}


                            @php

                                $links= Illuminate\Support\Facades\Route::currentRouteName();
                            @endphp
                            <input name="name" type="text" class="form-control d-none" value="{{ $patient-> name}}">
                            <input name="title" type="text" class="form-control d-none" value="{{ $patient-> title}}">
                            <input name="sex" type="text" class="form-control d-none" value="{{ $patient-> sex}}">
                            <input name="married" type="text" class="form-control d-none" value="{{ $patient-> married}}">
                            <input name="company" type="text" class="form-control d-none" value="{{ $patient-> company}}">
                            <input name="district" type="text" class="form-control d-none" value="{{ $patient-> district}}">
                            <input name="location" type="text" class="form-control d-none" value="{{ $patient-> location}}">
                            <input name="birth_date" type="text" class="form-control d-none" value="{{ $patient-> birth_date}}">
                            <input name="phone_number" type="text" class="form-control d-none" value="{{ $patient-> phone_number}}">
                            <input name="sub_location" type="text" class="form-control d-none" value="{{ $patient-> sub_location}}">
                            <input name="division" type="text" class="form-control d-none" value="{{ $patient-> division}}">
                            <input name="village" type="text" class="form-control d-none" value="{{ $patient-> village}}">
                            <input name="id_passport_no" type="text" class="form-control d-none" value="{{ $patient-> id_passport_no}}">
                            <input name="next_of_kin_name" type="text" class="form-control d-none" value="{{ $patient-> next_of_kin_name}}">
                            <input name="next_of_kin_relationship" type="text" class="form-control d-none" value="{{ $patient-> next_of_kin_relationship}}">
                            <input name="phone_no" type="text" class="form-control d-none" value="{{ $patient-> phone_no}}">
                            <input name="religion" type="text" class="form-control d-none" value="{{ $patient-> religion}}">
                            <input name="occupation" type="text" class="form-control d-none" value="{{ $patient-> occupation}}">
                            <input name="links" type="text" class="form-control d-none" value={{ $links}}>
                            <input name="discharged" type="text" class="form-control d-none" value="0">
                            <input name="seen" type="text" class="form-control d-none" value="0">
                            <input name="administration_patient_informations_id" type="text" class="form-control d-none" value="{{$patient_id}}">
                            <input name="institution_id" type="text" class="form-control d-none" value="{{ Auth::user()->institution->id }}">
                            <input name="user_id" type="text" value="{{ Auth::user()->id }}" class="form-control d-none">

                        </form>



                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



