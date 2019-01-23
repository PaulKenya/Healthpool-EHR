@extends('layouts.master')

@section('content')

    <div class="card">
        <div class="card-header">Add user role</div>
        <div class="card-body">
            <form method="post" enctype="multipart/form-data" action="{{route('us_add_role_post')}}">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="role_name">Role Name : </label>
                    <input type="text" name="role_name" id="role_name" class="form-control" placeholder="" >
                </div>

                <div class="form-group">
                    <label for="">DEPARTMENT</label>
                    <select class="form-control" name="department_id">
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
                    <textarea class="form-control" name="role_description" id="role_description" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-info">Add new role</button>
            </form>
        </div>
    </div>

@endsection