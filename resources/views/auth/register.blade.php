@extends('auth.authmaster')

@section('content')

    <div class="col-12 col-sm-12 col-md-8 col-lg-8 login-sidebar animated fadeInRightBig">
        <div class="login-container">
            <h2 class="text-center text-upper">Register To Healthpool EHR</h2>
            <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                @csrf

                <div class="">
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ ('Name') }}</label>

                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                    @if ($errors->has('name'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="">
                    <label for="institution_id" class="col-md-4 col-form-label text-md-right">Facility Name</label>
                    <select class="form-control {{ $errors->has('institution_id') ? ' is-invalid' : '' }}" name="institution_id" id="institution_id"  required autofocus>
                        @php
                            $institutions=App\Institution::all();
                        @endphp
                        @if(isset($institutions))
                            @foreach($institutions as $institution)
                                <option value="{{$institution->id}}">{{$institution->name}}</option>
                            @endforeach
                        @else
                            <option value="none" >You must be associated with a Registered institution</option>
                        @endif
                    </select>
                    {{--<input id="facility_name" type="text" class="form-control{{ $errors->has('facility_name') ? ' is-invalid' : '' }}" name="facility_name" value="{{ old('facility_name') }}" required autofocus>--}}

                    @if ($errors->has('institution_id'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('institution_id') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="">
                    <label for="id_number" class="col-md-4 col-form-label text-md-right">{{ ('Id Number') }}</label>

                    <input id="id_number" type="number" class="form-control{{ $errors->has('id_number') ? ' is-invalid' : '' }}" name="id_number" value="{{ old('id_number') }}" required autofocus>

                    @if ($errors->has('id_number'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('id_number') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="">
                    <label for="role" class="col-md-4 col-form-label text-md-right">Role</label>
                    <select class="form-control {{ $errors->has('role') ? ' is-invalid' : '' }}" name="role" id="role"  required autofocus>

                        @php
                            $roles=App\roles::all();
                        @endphp
                        @if(isset($roles))
                            @foreach($roles as $role)
                                <option value="{{$role->id}}">{{$role->role_name}}</option>
                            @endforeach
                        @else
                            <option value="none" >You must select a role</option>
                        @endif
                    </select>

                    @if ($errors->has('role'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('role') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="">
                    <label for="telephone" class="col-md-4 col-form-label text-md-right">{{ ('Telephone') }}</label>

                    <input id="telephone" type="number" class="form-control{{ $errors->has('telephone') ? ' is-invalid' : '' }}" name="telephone" value="{{ old('telephone') }}" required autofocus>

                    @if ($errors->has('telephone'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('telephone') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="">
                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ ('E-Mail Address') }}</label>

                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                    @if ($errors->has('email'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="">
                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ ('Password') }}</label>

                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                    @if ($errors->has('password'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ ('Confirm Password') }}</label>

                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                </div>
                <br>

                <div class="form-group">
                    <div class="flexbox align-items-center">
                        <input type="submit" class="btn gredient-bg" value="register">
                        <p>If You Are a Existing User <a href="{{route('login')}}" data-toggle="tooltip" class="gredient-cl" data-original-title="Log In">Login Here.</a></p>
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection
