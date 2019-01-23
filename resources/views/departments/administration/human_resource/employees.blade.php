@extends('layouts.master')

@section('content')
    <div class="row page-titles">
        <div class="col-md-12 align-self-center text-center">
            <h4 class="theme-cl">Employees</h4>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h4>BANK AND CREDIT CARDS</h4>
        </div>
        <div class="card-body">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="datatable" class="table table-bordered">
                        <thead>
                        <tr>
                            <th>name</th>
                            <th>photo</th>
                            <th>work address</th>
                            <th>position</th>
                            <th>work location</th>
                            <th>work email</th>
                            <th>manager</th>
                            <th>work phone</th>
                            <th>coach</th>
                            <th>working hours</th>
                            <th>managers</th>
                            <th>employee</th>
                            <th>collaborators</th>
                            <th>colleagues</th>
                            <th>periodic approvals</th>
                            <th>nationality</th>
                            <th>id number</th>
                            <th>bank account number</th>
                            <th>gender</th>
                            <th>date of birth</th>
                            <th>visa number</th>
                            <th>work permit number</th>
                            <th>visa expiry date</th>
                            <th>related user</th>
                            <th>badge id</th>


                        </tr>
                        </thead>
                        <tbody>
                        @if(isset($employees))
                            @foreach($employees as $employees)
                                <tr>
                                    <td>{{ $employees->name}}</td>
                                    <td>{{ $employees->photo}}</td>
                                    <td>{{ $employees->work_address}}</td>
                                    <td>{{ $employees->position}}</td>
                                    <td>{{ $employees->work_location}}</td>
                                    <td>{{ $employees->work_email}}</td>
                                    <td>{{ $employees->manager}}</td>
                                    <td>{{ $employees->work_phone}}</td>
                                    <td>{{ $employees->coach}}</td>
                                    <td>{{ $employees->working_hours}}</td>
                                    <td>{{ $employees->manager2}}</td>
                                    <td>{{ $employees->employee}}</td>
                                    <td>{{ $employees->collaborators}}</td>
                                    <td>{{ $employees->colleagues}}</td>
                                    <td>{{ $employees->periodic_appraisals}}</td>
                                    <td>{{ $employees->nationality}}</td>
                                    <td>{{ $employees->id_no}}</td>
                                    <td>{{ $employees->pass_no}}</td>
                                    <td>{{ $employees->bank_account_no}}</td>
                                    <td>{{ $employees->gender}}</td>
                                    <td>{{ $employees->d_o_b}}</td>
                                    <td>{{ $employees->visa_no}}</td>
                                    <td>{{ $employees->work_permit_no}}</td>
                                    <td>{{ $employees->visa_expiry_date}}</td>
                                    <td>{{ $employees->related_user}}</td>
                                    <td>{{ $employees->badge_id}}</td>

                                </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="col-md-4">

                <div class="content">
                    <button class="btn btn-success" data-toggle="modal" data-target="#myModal">add more employees</button>
                    {{--<button class="btn btn-info" data-toggle="modal" data-target="#myModal">Print</button>--}}
                </div>
            </div>
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog modal-lg">

                    <!— Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">employees</h4>
                        </div>
                        <form class="card" action="{{route('employees_post')}}" method="post" >{!! csrf_field() !!}

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>name</label>
                                    <input type="text" class="form-control" name="name" placeholder="name">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputFile">passport photo</label>
                                    <input type="file" class="form-control-file" name="photo" id="exampleInputFile" aria-describedby="fileHelp">
                                </div>

                            </div>
                            <div class="card padd-15">
                                <div class="tab" role="tabpanel">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation" class="active"><a href="#Section1" aria-controls="home" role="tab" data-toggle="tab">work information</a></li>
                                        <li role="presentation"><a href="#Section2" role="tab" data-toggle="tab">appraisal </a></li>
                                        <li role="presentation"><a href="#Section3" role="tab" data-toggle="tab">private information</a></li>
                                        <li role="presentation"><a href="#Section4" role="tab" data-toggle="tab">HR SETTINGS</a></li>
                                    </ul>
                                    <!-- Tab panes -->
                                    <div class="tab-content tabs" id="home">

                                        <div role="tabpanel" class="tab-pane fade in active" id="Section1">
                                            <h4 class="theme-cl">CONTACT INFORMATION</h4>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="exampleSelect1">WORK ADDRESS</label>
                                                    <select class="form-control" id="exampleSelect1" name=" work_address">
                                                        <option value="opt1">1</option>
                                                        <option value="opt2">2</option>
                                                    </select>
                                                </div>

                                                <div class="form-group col-md-6">
                                                    <label for="exampleSelect1">Department</label>
                                                    <select class="form-control" id="exampleSelect1" name="position">
                                                        <option value="administration"></option>
                                                        <option value="finance">finance</option>
                                                        <option value="stores">stores</option>
                                                        <option value="pharmacy">pharmacy</option>
                                                        <option value="public health">public health</option>
                                                        <option value="diagnostic services">diagnostic services</option>
                                                        <option value="farewell parlour">farewell parlour</option>

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label>work location</label>
                                                    <input type="text" class="form-control" name="work_location" placeholder="work location">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>job position</label>
                                                    <input type="text" class="form-control" name="position" placeholder="job position">
                                                </div>

                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label>work email</label>
                                                    <input type="text" class="form-control" name="work_email" placeholder="work email">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>manager</label>
                                                    <input type="text" class="form-control" name="manager" placeholder="manager">
                                                </div>

                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label>work mobile</label>
                                                    <input type="text" class="form-control" name="work_mobile" placeholder="work mobile">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>coach</label>
                                                    <input type="text" class="form-control" name="coach" placeholder="coach">
                                                </div>

                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label>work phone</label>
                                                    <input type="text" class="form-control" name="work_phone" placeholder="work phone">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>working hours</label>
                                                    <input type="text" class="form-control" name="working_hours" placeholder="working hours">
                                                </div>

                                            </div>

                                        </div>

                                        <div role="tabpanel" class="tab-pane fade" id="Section2">
                                            <h4 class="theme-cl">Send appraisal Form To</h4>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" name="manager2">
                                                   managers
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" name="employee">
                                                    employee
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" name="collaborators">
                                                    Collaborators
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" name="colleagues">
                                                    Colleagues
                                                </label>
                                            </div>
                                            <h4 class="theme-cl">Periodicity</h4>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" name="periodic_appraisals">
                                                    Periodic appraisal
                                                </label>
                                            </div>
                                        </div>

                                        <div role="tabpanel" class="tab-pane fade" id="Section3">
                                            <h4 class="theme-cl">Citizenship and other Information</h4>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="exampleSelect1">nationality(country)</label>
                                                    <select class="form-control" id="exampleSelect1" name="nationality">
                                                        <option value="Kenya">Kenya</option>
                                                        <option value="opt2">2</option>
                                                    </select>
                                                </div>

                                                <div class="form-group col-md-6">
                                                    <label>Private address</label>
                                                    <input type="text" class="form-control" name="private_address" placeholder="private address">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label>identification number</label>
                                                    <input type="number" class="form-control" name="id_no" placeholder="identification number">
                                                </div>
                                            </div>
                                            <div class="form-row">


                                                <div class="form-group col-md-6">
                                                    <label>passport number</label>
                                                    <input type="number" class="form-control" name="pass_no" placeholder="passport number">
                                                </div>
                                            </div>
                                            <div class="form-row">

                                                <div class="form-group col-md-6">
                                                    <label>bank account number</label>
                                                    <input type="number" class="form-control" name="bank_account_no" placeholder="bank account number">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="exampleSelect1">gender</label>
                                                    <select class="form-control" id="exampleSelect1" name="gender">
                                                        <option value="male">male</option>
                                                        <option value="female">female</option>
                                                    </select>
                                                </div>

                                                <div class="form-group col-md-6">
                                                    <label>date of birth</label>
                                                    <input type="date" class="form-control" name="d_o_b" placeholder="date of birth">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label>Visa No</label>
                                                    <input type="number" class="form-control" name="visa_no" placeholder="visa No">
                                                </div>

                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label>work permit  No</label>
                                                    <input type="number" class="form-control" name="work_permit_no" placeholder="work permit No">
                                                </div>

                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label>Visa expiry date</label>
                                                    <input type="date" class="form-control" name="visa_expiry_date" placeholder="visa expiry date">
                                                </div>

                                            </div>
                                        </div>

                                        <div role="tabpanel" class="tab-pane fade" id="Section4">
                                            <h4 class="theme-cl">status</h4>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="exampleSelect1">related user</label>
                                                    <select class="form-control" id="exampleSelect1" name="related_user">
                                                        <option value="opt1">1</option>
                                                        <option value="opt2">2</option>
                                                    </select>
                                                </div>
                                                <h4 class="theme-cl">attendance</h4>
                                                <div class="form-group col-md-6">
                                                    <label>badge id</label>
                                                    <input type="text" class="form-control" name="badge_id" placeholder="badge id">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>


                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection()