@extends('layouts.master')

@section('content')

    @if(session()->has('add_role_success') || session()->has('add_permissions_success'))
        <div class="alert alert-success alert-dismissible fade in" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                <span class="sr-only">Close</span>
            </button>
            <p>{!! session('add_role_success') !!}</p>
            <p>{!! session('add_permissions_success') !!}</p>
        </div>
    @endif

    <div class="card">
        <div class="card-header">
            User Roles Management
        </div>
        <div class="card-body">
            {{--<a href="{{route('us_add_role')}}" class="btn btn-info offset-md-8" style="margin-right: 15px;">Add new role</a>--}}
            <button  class="btn btn-info offset-md-8 " data-toggle="modal" data-target="#add_role">Add new Role</button>
            <button  class="btn btn-info  ml-5" data-toggle="modal" data-target="#add_department">Add new department</button>

            <h3 class="card-title">List of user-roles for {{ Auth::user()->institution->name }}</h3>

            <hr>

            <div class="table-responsive">
                <table class="table table-striped" id="datatable">
                    <thead>
                        <tr>
                            <th>Role Name</th>
                            <th>Role Description</th>
                            <th>Department</th>
                            <th>Manage Role</th>
                            <th>Edit role</th>

                        </tr>
                    </thead>
                    <tbody>
                        @if(isset($user_roles))
                            @foreach($user_roles as $user_role)
                                <tr>
                                    <td>{{$user_role->role_name}}</td>
                                    <td>{{$user_role->role_description}}</td>

                                    @php
                                        $role_id=$user_role->department_id;
                                        $user_department = \App\department::find($role_id)->department_name;
                                    @endphp
                                    <td>{{$user_department}}</td>
                                    <td>
                                        <form method="post" enctype="multipart/form-data" action="{{route('us_manage_role_permissions')}}">
                                            {{csrf_field()}}
                                            <input type="hidden" name="role_id" value="{{$user_role->id}}">
                                            <button class="btn btn-info" type="submit">Manage permissions</button>
                                        </form>
                                    </td>
                                    <td>
                                    <td><button class="btn btn-info" data-toggle="modal" data-target="#edit_role-{{ $user_role->id }}">Edit</button></td>

                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>

        </div>
    </div>

    <div class="modal fade" id="add_department" role="dialog">
        <div class="modal-dialog modal-lg">

            <!— Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">New Department </h4>
                </div>
                <div class="modal-body">

                    <div class="col-md-12">

                        <div class="container-fluid">

                            <form method="post" enctype="multipart/form-data" action="{{route('add_department')}}">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="role_name">Department Name : </label>
                                    <input type="text" name="department_name" id="department_name" class="form-control" placeholder=""  >
                                </div>

                                <button type="submit" class="btn btn-info">Create</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="add_role" role="dialog">
        <div class="modal-dialog modal-lg">

            <!— Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">New Role </h4>
                </div>
                <div class="modal-body">

                    <div class="col-md-12">

                        <div class="container-fluid">

                            <form method="post" enctype="multipart/form-data" action="{{route('us_add_role_post')}}" required="">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="role_name">Role Name : </label>
                                    <input type="text" name="role_name" id="role_name" class="form-control" placeholder="" required>
                                </div>

                                <div class="form-group">
                                    <label for="">DEPARTMENT</label>
                                    <select class="form-control" name="department_id" required>
                                        <option>-Select the next department-</option>
                                        @php
                                            $all_departments=\App\department::all();
                                        @endphp
                                        @foreach($all_departments as $department)
                                            <option value="{{ $department->id }}">{{ $department->department_name }}</option>
                                        @endforeach

                                    </select>

                                </div>
                                <div class="form-group">
                                    <label for="role_description">Role Description : </label>
                                    <textarea class="form-control" name="role_description" id="role_description" rows="3" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-info">Add new role</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if(isset($user_roles))
        @foreach($user_roles as $user_role)
                @php
                    $role_id=$user_role->department_id;
                    $user_department = \App\department::find($role_id)->department_name;
                @endphp
                <div class="modal fade" id="edit_role-{{ $user_role->id }}" role="dialog">
                    <div class="modal-dialog modal-lg">

                        <!— Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Edit Role : {{ $user_role->role_name }} </h4>
                            </div>
                            <div class="modal-body">

                                <div class="col-md-12">

                                    <div class="container-fluid">

                                        <form method="post" enctype="multipart/form-data" action="{{route('edit_user_role_post', ['role_id'=>$role_id])}}">
                                            {{csrf_field()}}
                                            <div class="form-group">
                                                <label for="role_name">Role Name : </label>
                                                <input type="text" name="role_name" id="role_name" class="form-control" placeholder="" value="{{ $user_role->role_name }}" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="">DEPARTMENT</label>
                                                <select class="form-control" name="department_id">
                                                    <option>-Select the next department-</option>

                                                    @php
                                                        $role_id=$user_role->department_id;
                                                       $all_departments=\App\department::all();
                                                       $selected_department = \App\department::find($role_id);
                                                    @endphp
                                                    <option value="{{ $selected_department->id }}" required="required" selected>{{ $selected_department->department_name }}</option>
                                                    @foreach($all_departments as $department)
                                                        <option value="{{ $department->id }}">{{ $department->department_name }}</option>
                                                    @endforeach

                                                </select>

                                            </div>
                                            <div class="form-group">
                                                <label for="role_description">Role Description : </label>
                                                <textarea class="form-control" name="role_description" id="role_description" rows="3">{{ $user_role->role_description }}</textarea>
                                            </div>
                                            <button type="submit" class="btn btn-info">Edit role</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        @endforeach
    @endif

    <div class="card">
        <div class="card-header">Add user role</div>
        <div class="card-body">

        </div>
    </div>

@endsection